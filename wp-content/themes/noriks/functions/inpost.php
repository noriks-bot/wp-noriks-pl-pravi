<?php
/**
 * InPost — Paczkomaty in PaczkoPunkty na blagajni PL.
 *
 * Celotna logika izbire dostave na blagajni:
 *   - privzeto "Dostawa do domu" (obstojeci flat_rate / free_shipping),
 *   - druga moznost "Odbiór w Paczkomat / PaczkoPunkt" z iskalnikom mest.
 * Izbrano mesto se shrani k narocilu, pokaze v adminu, v mailu, na strani
 * zahvale in se zapise tako, kot zahteva Metakocka.
 *
 * ---------------------------------------------------------------------------
 * METAKOCKA — pogodba o podatkih (https://metakocka.freshdesk.com/sl/support/
 * solutions/articles/3000117500-integracija-inpost):
 *   "InPost omogoca tudi dostavo v paketomate, pri cemer je pri zapisu
 *    narocila v MetaKocko potrebno navesti tudi ID paketomata:
 *      WooCommerce: "_parcel_shop_id": "P100"
 *      API:         "parcel_shop_id": "P100""
 *   Zato gre sifra izbranega mesta v meta polje narocila _parcel_shop_id.
 *   Metakocka za to integracijo zaracuna 0,10 EUR na poslan paket.
 *
 * Za delovanje na strani Metakocke je potrebna se povezava z InPostom
 * (Dodatne nastavitve -> Dostavne sluzbe -> InPost Poland: uporabnisko ime +
 * geslo, ki ju dobis od InPosta) in preslikava tega nacina dostave na vrsto
 * dostave InPost. Dostava na dom ostane pri GLS in se ne spremeni.
 * ---------------------------------------------------------------------------
 *
 * Podatki: data/inpost-punkty.tsv (33 176 mest), prenesено z javnega ShipX API:
 *   https://api-shipx-pl.easypack24.net/v1/points
 * Osvezitev seznama:
 *   python3 data/inpost-pretvori.py data/inpost-punkty.tsv
 *
 * Iskanje tece na strezniku (REST /wp-json/noriks/v1/inpost?q=…), ker je
 * seznam 7 MB in ga ni smiselno posiljati v brskalnik.
 *
 * VKLOP: kartica Paczkomat se pojavi sele, ko nacin dostave dodas v
 * WooCommerce -> Ustawienia -> Wysyłka -> obmocje Poland. Dokler ga ni,
 * blagajna izgleda in dela tako kot prej.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

const NORIKS_INPOST_ID    = 'noriks_inpost';
const NORIKS_INPOST_META  = '_inpost';
/** Meta polje, po katerem Metakocka prepozna paketomat. Ne spreminjaj. */
const NORIKS_INPOST_MK    = '_parcel_shop_id';
/** Napis na kartici na blagajni (kupcu). */
const NORIKS_INPOST_NAPIS = 'Odbiór w Paczkomat / PaczkoPunkt';
/** Napis na kartici za dostavo na naslov. */
const NORIKS_INPOST_DOMA  = 'Dostawa do domu';
/** Privzeti naziv nacina dostave (preslikava na vrsto dostave v Metakocki). */
const NORIKS_INPOST_NAZIV = 'InPost Paczkomat';

/* ------------------------------------------------------------------ *
 * 1) Podatki o mestih
 * ------------------------------------------------------------------ */

function noriks_inpost_datoteka() {
	return get_template_directory() . '/data/inpost-punkty.tsv';
}

/** Razclenitev ene vrstice TSV v polje. */
function noriks_inpost_vrstica( $vrstica ) {
	$d = explode( "\t", rtrim( $vrstica, "\r\n" ) );
	if ( count( $d ) < 11 ) { return null; }
	return array(
		'id'     => $d[0],
		'naziv'  => $d[1],
		'naslov' => $d[2],
		'tip'    => $d[3],
		'ure'    => $d[4],
		'lat'    => $d[5],
		'lon'    => $d[6],
		'ulica'  => $d[7],
		'kod'    => $d[8],
		'mesto'  => $d[9],
	);
}

/** Iskanje po seznamu. Vrne najvec $limit zadetkov. */
function noriks_inpost_isci( $q, $limit = 25 ) {
	$pot = noriks_inpost_datoteka();
	if ( ! is_readable( $pot ) ) { return array(); }

	$q = trim( mb_strtolower( $q, 'UTF-8' ) );
	if ( $q === '' ) { return noriks_inpost_prva( $limit ); }
	$q = noriks_inpost_brez_sumnikov( $q );
	// vec besed: vse morajo biti v zadetku ("warszawa krakowiakow", "01-494" ...)
	$deli = preg_split( '/\s+/', $q, -1, PREG_SPLIT_NO_EMPTY );
	if ( ! $deli ) { return array(); }

	$ven = array();
	$f = @fopen( $pot, 'r' );
	if ( ! $f ) { return array(); }
	while ( ( $vrstica = fgets( $f ) ) !== false ) {
		$tab = strrpos( $vrstica, "\t" );
		if ( $tab === false ) { continue; }
		$iskalno = substr( $vrstica, $tab + 1 );   // zadnji stolpec = polje za iskanje
		$vse = true;
		foreach ( $deli as $del ) {
			if ( strpos( $iskalno, $del ) === false ) { $vse = false; break; }
		}
		if ( ! $vse ) { continue; }
		$m = noriks_inpost_vrstica( $vrstica );
		if ( $m ) { $ven[] = $m; }
		if ( count( $ven ) >= $limit ) { break; }
	}
	fclose( $f );
	return $ven;
}

/**
 * Prvih $limit mest s seznama — kar kupec vidi, preden kaj natipka.
 * Datoteka je urejena po postni stevilki, zato so na vrhu varsavska mesta
 * (enako kot pri konkurenci).
 */
function noriks_inpost_prva( $limit = 150 ) {
	$pot = noriks_inpost_datoteka();
	if ( ! is_readable( $pot ) ) { return array(); }
	$ven = array();
	$f = @fopen( $pot, 'r' );
	if ( ! $f ) { return array(); }
	while ( ( $vrstica = fgets( $f ) ) !== false ) {
		$m = noriks_inpost_vrstica( $vrstica );
		if ( $m ) { $ven[] = $m; }
		if ( count( $ven ) >= $limit ) { break; }
	}
	fclose( $f );
	return $ven;
}

/** Eno mesto po sifri. */
function noriks_inpost_mesto( $id ) {
	$pot = noriks_inpost_datoteka();
	$id  = trim( (string) $id );
	if ( $id === '' || ! is_readable( $pot ) ) { return null; }
	$iskano = $id . "\t";
	$f = @fopen( $pot, 'r' );
	if ( ! $f ) { return null; }
	while ( ( $vrstica = fgets( $f ) ) !== false ) {
		if ( strncmp( $vrstica, $iskano, strlen( $iskano ) ) === 0 ) {
			fclose( $f );
			return noriks_inpost_vrstica( $vrstica );
		}
	}
	fclose( $f );
	return null;
}

/** Odstrani poljske diakriticne znake (iskanje naj dela tudi brez njih). */
function noriks_inpost_brez_sumnikov( $s ) {
	$zamenjaj = array(
		'ą'=>'a','ć'=>'c','ę'=>'e','ł'=>'l','ń'=>'n','ó'=>'o','ś'=>'s','ź'=>'z','ż'=>'z',
		'Ą'=>'a','Ć'=>'c','Ę'=>'e','Ł'=>'l','Ń'=>'n','Ó'=>'o','Ś'=>'s','Ź'=>'z','Ż'=>'z',
	);
	return strtr( $s, $zamenjaj );
}

/* ------------------------------------------------------------------ *
 * 2) REST iskanje
 * ------------------------------------------------------------------ */

add_action( 'rest_api_init', function () {
	register_rest_route( 'noriks/v1', '/inpost', array(
		'methods'             => 'GET',
		'permission_callback' => '__return_true',
		'callback'            => function ( $zahteva ) {
			$q = trim( (string) $zahteva->get_param( 'q' ) );
			if ( $q !== '' && mb_strlen( $q, 'UTF-8' ) < 2 ) { return rest_ensure_response( array() ); }
			$limit = ( $q === '' ) ? 150 : 25;
			$ven = array();
			foreach ( noriks_inpost_isci( $q, $limit ) as $m ) {
				$ven[] = array(
					'id'     => $m['id'],
					'naziv'  => $m['naziv'],
					'naslov' => $m['naslov'],
					'tip'    => $m['tip'],
					'ure'    => $m['ure'],
					'ulica'  => $m['ulica'],
					'kod'    => $m['kod'],
					'mesto'  => $m['mesto'],
				);
			}
			return rest_ensure_response( $ven );
		},
	) );
} );

/* ------------------------------------------------------------------ *
 * 3) Nacin dostave
 * ------------------------------------------------------------------ */

add_action( 'woocommerce_shipping_init', function () {
	if ( class_exists( 'Noriks_Inpost_Shipping' ) || ! class_exists( 'WC_Shipping_Method' ) ) { return; }

	class Noriks_Inpost_Shipping extends WC_Shipping_Method {
		public function __construct( $instance_id = 0 ) {
			$this->id                 = NORIKS_INPOST_ID;
			$this->instance_id        = absint( $instance_id );
			$this->method_title       = 'InPost — Paczkomaty i PaczkoPunkty';
			$this->method_description = 'Odbiór w Paczkomacie lub PaczkoPunkcie. Klient wybiera punkt w kasie. Nazwę przypisz w MetaKocce do rodzaju dostawy InPost.';
			$this->supports           = array( 'shipping-zones', 'instance-settings', 'instance-settings-modal' );
			$this->init();
		}
		public function init() {
			$this->instance_form_fields = array(
				'title' => array(
					'title'       => 'Nazwa (MetaKocka)',
					'type'        => 'text',
					'default'     => NORIKS_INPOST_NAZIV,
					'description' => 'Pod tą nazwą zamówienie trafia do MetaKocki — musi być przypisana do rodzaju dostawy InPost.',
				),
				'cost' => array(
					'title'       => 'Cena (zł)',
					'type'        => 'text',
					'default'     => '11.99',
					'description' => 'Koszt dostawy. Puste = za darmo.',
				),
				'free_over' => array(
					'title'       => 'Za darmo od (zł)',
					'type'        => 'text',
					'default'     => '300',
					'description' => 'Powyżej tej wartości koszyka dostawa jest bezpłatna. Puste = nigdy.',
				),
			);
			$this->title = $this->get_option( 'title' );
			if ( $this->title === '' ) { $this->title = NORIKS_INPOST_NAZIV; }
			add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
		}
		public function calculate_shipping( $package = array() ) {
			$cena      = $this->get_option( 'cost', '' );
			$free_over = $this->get_option( 'free_over', '' );
			$strosek   = ( $cena === '' ) ? 0 : (float) str_replace( ',', '.', $cena );
			if ( $free_over !== '' ) {
				$meja  = (float) str_replace( ',', '.', $free_over );
				$vsota = isset( $package['contents_cost'] ) ? (float) $package['contents_cost'] : 0;
				if ( $meja > 0 && $vsota >= $meja ) { $strosek = 0; }
			}
			$this->add_rate( array(
				'id'      => $this->id . ':' . $this->instance_id,
				'label'   => $this->title,
				'cost'    => $strosek,
				'package' => $package,
			) );
		}
	}
} );

add_filter( 'woocommerce_shipping_methods', function ( $nacini ) {
	$nacini[ NORIKS_INPOST_ID ] = 'Noriks_Inpost_Shipping';
	return $nacini;
} );

/** Je ta kljuc ponudbe nacin InPost? */
function noriks_inpost_je_kljuc( $kljuc ) {
	return strpos( (string) $kljuc, NORIKS_INPOST_ID ) === 0;
}

/**
 * Ali je izbran paketomat? Gleda oddani obrazec (ob oddaji narocila je
 * merodajen POST, ker seja se ni osvezena) in nato sejo.
 */
function noriks_inpost_izbran() {
	if ( isset( $_POST['shipping_method'] ) ) {
		foreach ( (array) $_POST['shipping_method'] as $m ) {
			if ( noriks_inpost_je_kljuc( sanitize_text_field( wp_unslash( $m ) ) ) ) { return true; }
		}
	}
	$izbrani = ( function_exists( 'WC' ) && WC()->session ) ? WC()->session->get( 'chosen_shipping_methods' ) : array();
	if ( ! is_array( $izbrani ) ) { return false; }
	foreach ( $izbrani as $m ) {
		if ( noriks_inpost_je_kljuc( $m ) ) { return true; }
	}
	return false;
}

/** Sifra mesta iz seje (prezivi AJAX osvezitev blagajne). */
function noriks_inpost_seja_id() {
	if ( ! function_exists( 'WC' ) || ! WC()->session ) { return ''; }
	return (string) WC()->session->get( NORIKS_INPOST_META . '_id' );
}

/* ------------------------------------------------------------------ *
 * 4) Blagajna
 *    Razporeditev sledi vigoshop.pl:
 *      telefon -> e-posta -> "Metoda dostawy" (kartici levo/desno)
 *      -> ime/priimek -> izbirnik mesta (ko je izbran paketomat; takrat so
 *      polja naslova skrita) -> "Dostawa" (datumi + cena).
 *    Slog kartic je ze v temi (.hs-delivery-type-container, .pl-inpost,
 *    vkljucno z mobilnim) — tu ga ne podvajamo.
 * ------------------------------------------------------------------ */

const NORIKS_INPOST_LOGO     = 'https://images.vigo-shop.com/pl/shipping-method-icons/parcel_machine_PL.svg';
const NORIKS_INPOST_LOGO_DOM = 'https://images.vigo-shop.com/pl/shipping-method-icons/home_PL.svg';

/** Ponudbe dostave, locene na "na dom" in "paketomat". */
function noriks_inpost_ponudbe() {
	$ponudbe = array();
	if ( function_exists( 'WC' ) && WC()->shipping() ) {
		$paketi = WC()->shipping()->get_packages();
		if ( isset( $paketi[0]['rates'] ) && is_array( $paketi[0]['rates'] ) ) {
			$ponudbe = $paketi[0]['rates'];
		}
	}
	$doma = array();
	$pac  = array();
	foreach ( $ponudbe as $kljuc => $p ) {
		if ( noriks_inpost_je_kljuc( $kljuc ) ) { $pac[ $kljuc ] = $p; } else { $doma[ $kljuc ] = $p; }
	}

	$izbrani  = ( function_exists( 'WC' ) && WC()->session ) ? (array) WC()->session->get( 'chosen_shipping_methods' ) : array();
	$trenutni = isset( $izbrani[0] ) ? (string) $izbrani[0] : '';

	/* Na dom pokazemo eno samo kartico — tisto, ki jo WooCommerce ze uporablja. */
	if ( $doma ) {
		$kljuc_doma = isset( $doma[ $trenutni ] ) ? $trenutni : key( $doma );
		$doma = array( $kljuc_doma => $doma[ $kljuc_doma ] );
	}
	$vse = $doma + $pac;
	if ( $trenutni === '' || ! isset( $vse[ $trenutni ] ) ) {
		$kljuci   = array_keys( $vse );
		$trenutni = $kljuci ? $kljuci[0] : '';   // privzeto dostava na dom
	}
	return array( 'doma' => $doma, 'pac' => $pac, 'vse' => $vse, 'izbran' => $trenutni );
}

/** Zelena kljukica na kartici dostave. */
function noriks_inpost_kljukica() {
	return '<svg viewBox="0 0 19 14" fill="#3DBD00"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.5725 3.40179L8.14482 13.5874C7.5815 14.1375 6.66839 14.1375 6.1056 13.5874L0.422493 8.03956C-0.140831 7.48994-0.140831 6.59748 0.422493 6.04707L1.44121 5.05126C2.00471 4.50094 2.91854 4.50094 3.48132 5.05126L7.12254 8.60835L15.5145 0.412609C16.078-0.137536 16.9909-0.137536 17.5537 0.412609L18.5733 1.40842C19.1424 1.95795 19.1424 2.8505 18.5725 3.40179Z"/></svg>';
}

/** "Metoda dostawy" — kartici levo/desno, nad polji za ime in naslov. */
function noriks_inpost_izbira() {
	$p = noriks_inpost_ponudbe();
	if ( ! $p['pac'] ) { return; }   // dokler nacin ni vklopljen, se blagajna ne spremeni

	$kljuc_doma = $p['doma'] ? key( $p['doma'] ) : '';
	$kljuc_pac  = key( $p['pac'] );
	$je_pac     = noriks_inpost_je_kljuc( $p['izbran'] );
	?>
	<div class="hs-delivery-type-container pl-inpost">
		<div class="container__title">Metoda dostawy</div>
		<div class="container__buttons">
			<?php if ( $kljuc_doma !== '' ) : ?>
			<div class="delivery-type hs-delivery-home enabled<?php echo $je_pac ? '' : ' active'; ?>"
				data-rate="<?php echo esc_attr( $kljuc_doma ); ?>" data-inpost="0">
				<p><?php echo esc_html( NORIKS_INPOST_DOMA ); ?></p>
				<img decoding="async" src="<?php echo esc_url( NORIKS_INPOST_LOGO_DOM ); ?>" alt="Dostawa do domu">
			</div>
			<?php endif; ?>
			<div class="delivery-type hs-delivery-machine enabled<?php echo $je_pac ? ' active' : ''; ?>"
				data-rate="<?php echo esc_attr( $kljuc_pac ); ?>" data-inpost="1">
				<p><?php echo esc_html( NORIKS_INPOST_NAPIS ); ?></p>
				<img decoding="async" style="max-width:55px;" src="<?php echo esc_url( NORIKS_INPOST_LOGO ); ?>" alt="InPost">
			</div>
		</div>
		<input type="hidden" name="shipping_method[0]" id="npac_rate" value="<?php echo esc_attr( $p['izbran'] ); ?>">
	</div>
	<?php
}

/** Izbirnik paketomata + povzetek izbranega mesta. */
function noriks_inpost_izbirnik() {
	$p = noriks_inpost_ponudbe();
	if ( ! $p['pac'] ) { return; }

	$je_pac   = noriks_inpost_je_kljuc( $p['izbran'] );
	$shranjen = noriks_inpost_seja_id();
	$mesto    = $shranjen !== '' ? noriks_inpost_mesto( $shranjen ) : null;
	?>
	<div class="form-row form-row-wide col-xs-12 npac-row" id="npac_field"<?php echo $je_pac ? '' : ' style="display:none"'; ?>>
		<span class="woocommerce-input-wrapper">
			<select name="npac_id" id="npac_select" class="select form-input"
				data-placeholder="Wybierz Paczkomat / PaczkoPunkt">
				<option value=""></option>
				<?php if ( $mesto ) : ?>
					<option value="<?php echo esc_attr( $mesto['id'] ); ?>" selected="selected"><?php
						echo esc_html( $mesto['naziv'] . ' ' . $mesto['naslov'] );
					?></option>
				<?php endif; ?>
			</select>
			<input type="text" id="npac_q" class="npac-q" autocomplete="off" hidden
				placeholder="Wybierz Paczkomat / PaczkoPunkt">
			<ul id="npac_list" class="npac-list" hidden></ul>
		</span>
		<span id="npac_napaka" class="npac-napaka" hidden>Wybierz proszę Paczkomat lub PaczkoPunkt.</span>
	</div>

	<div id="npac_vybrano" class="npac-sel"<?php echo ( $je_pac && $mesto ) ? '' : ' style="display:none"'; ?>>
		<div class="npac-sel-h">Miejsce odbioru:</div>
		<table class="npac-tab">
			<tr><th>Nazwa:</th>  <td id="npac_naziv"><?php echo $mesto ? esc_html( $mesto['naziv'] ) : ''; ?></td></tr>
			<tr><th>Adres:</th>  <td id="npac_naslov"><?php echo $mesto ? esc_html( $mesto['naslov'] ) : ''; ?></td></tr>
			<tr><th>Typ:</th>    <td id="npac_tip"><?php echo $mesto ? esc_html( $mesto['tip'] ) : ''; ?></td></tr>
			<tr><th>Godziny otwarcia:</th>
				<td id="npac_ure"><?php echo $mesto ? esc_html( $mesto['ure'] ) : ''; ?></td></tr>
		</table>
	</div>
	<?php
	noriks_inpost_slog_in_skripta();
}

/** Blok "Dostawa" v drugem stolpcu: datumi, cena, logotip prevoznika. */
function noriks_inpost_nacini() {
	$p = noriks_inpost_ponudbe();
	if ( ! $p['vse'] ) { noriks_inpost_rezervna_kartica(); return; }

	$ponudba = $p['vse'][ $p['izbran'] ];
	$cena    = (float) $ponudba->get_cost();
	noriks_inpost_kartica( $cena );
}

/** Ko WooCommerce ne vrne ponudb: ista kartica kot prej. */
function noriks_inpost_rezervna_kartica() {
	$cena = ( function_exists( 'WC' ) && WC()->cart ) ? (float) WC()->cart->get_shipping_total() : 0;
	noriks_inpost_kartica( $cena );
}

function noriks_inpost_kartica( $cena ) {
	?>
	<ul class="shipping_method_custom">
		<li class="standard-shipping shipping-tab is-on">
			<label class="checkedlabel">
				<?php echo noriks_inpost_kljukica(); ?>
				<div class="outer-wrapper">
					<div class="inner-wrapper-dates">
						<strong class="hs-custom-date js-delivery-dates" id="js-delivery-dates"></strong>
					</div>
					<div class="inner-wrapper-img">
						<span class="shipping_method_delivery_price tag tag--red"><?php
							echo $cena > 0 ? esc_html( number_format( $cena, 2, ',', ' ' ) . ' zł' ) : 'Bezpłatnie';
						?></span>
						<span class="delivery_img"><img decoding="async" class="poczta_polska standard"
							src="https://images.vigo-shop.com/general/curriers/inpost.png"/></span>
					</div>
				</div>
			</label>
		</li>
	</ul>
	<?php
}

/* Vrivanje v obrazec: kartici nad imenom, izbirnik pod priimkom. */
add_filter( 'woocommerce_form_field', function ( $polje, $kljuc ) {
	if ( ! is_checkout() ) { return $polje; }
	if ( $kljuc === 'billing_first_name' ) {
		ob_start(); noriks_inpost_izbira(); return ob_get_clean() . $polje;
	}
	if ( $kljuc === 'billing_last_name' ) {
		ob_start(); noriks_inpost_izbirnik(); return $polje . ob_get_clean();
	}
	return $polje;
}, 10, 2 );

/**
 * Slog izbirnika (enkrat) + prijava skripte v nogo.
 * Skripta mora v nogo: v obrazcu bi tekla, preden WooCommerce nalozi
 * jQuery.selectWoo, in izbirnik bi padel na rezervno besedilno polje.
 */
function noriks_inpost_slog_in_skripta() {
	static $enkrat = false;
	if ( $enkrat ) { return; }
	$enkrat = true;
	add_action( 'wp_footer', 'noriks_inpost_skripta', 99 );
	?>
	<style>
	/* Kartice nacinov dostave imajo slog ze v temi (vgrajen CSS blagajne:
	   .hs-delivery-type-container / .delivery-type / .pl-inpost, vkljucno
	   z mobilnim). Tu ga ne podvajamo. */

	/* kljukica v bloku "Dostawa" (CSS teme jo meri prek "label svg") */
	#custom_shipping .checkedlabel svg { width: 19px !important; height: 14px !important;
		flex: 0 0 19px !important; margin-right: 10px !important; }

	/* Izbirnik paketomata — mere so vzete iz nasih polj na blagajni
	   (visina 60px, pisava 18px, obroba 1,5px #c9c9c9, zaobljenost 4px),
	   da stoji v vrsti enako kot Imię, Ulica in ostala polja. */
	.npac-row { margin: 0 0 10px !important; position: relative; }
	.npac-row .select2-container { width: 100% !important; }
	.npac-row .select2-container--default .select2-selection--single {
		height: 60px !important; border: 1.5px solid #c9c9c9 !important;
		border-radius: 4px !important; background: #fff !important; outline: none !important; }
	.npac-row .select2-container--default .select2-selection--single .select2-selection__rendered {
		line-height: 57px !important; font-size: 18px !important; color: #333 !important;
		padding: 0 34px 0 18px !important; }
	.npac-row .select2-container--default .select2-selection--single .select2-selection__placeholder {
		color: #8a8a8a !important; font-size: 18px !important; }
	.npac-row .select2-container--default .select2-selection--single .select2-selection__arrow {
		height: 57px !important; right: 12px !important; }
	.npac-row.is-filled .select2-container--default .select2-selection--single {
		border-color: #47b426 !important; background: #f2feee !important; }
	.select2-dropdown { border: 1.5px solid #c9c9c9 !important; border-radius: 4px !important; }
	.select2-container--default .select2-results__option { font-size: 15px !important; line-height: 1.35 !important; }
	.select2-container--default .select2-search--dropdown .select2-search__field {
		height: 44px !important; font-size: 16px !important; padding: 0 12px !important;
		border: 1.5px solid #c9c9c9 !important; border-radius: 4px !important; }
	/* rezervno polje (ce selectWoo ni na voljo) — enake mere kot ostala polja */
	.npac-q { width: 100%; height: 60px; padding: 0 18px; border: 1.5px solid #c9c9c9; border-radius: 4px;
		font-size: 18px; box-sizing: border-box; }
	.npac-list { position: absolute; z-index: 30; left: 0; right: 0; margin: 2px 0 0; padding: 0; list-style: none;
		background: #fff; border: 1.5px solid #c9c9c9; border-radius: 4px; max-height: 320px; overflow: auto;
		box-shadow: 0 10px 28px rgba(0,0,0,.12); }
	.npac-list li { padding: 10px 14px; cursor: pointer; font-size: 15px; line-height: 1.35; border-bottom: 1px solid #f0f0f0; }
	.npac-list li:last-child { border-bottom: 0; }
	.npac-list li:hover { background: #1f6fbf; color: #fff; }
	.npac-napaka { color: #c0392b; font-size: 13.5px; display: block; margin-top: 6px; }

	/* povzetek izbranega mesta */
	.npac-sel { margin: 4px 0 14px; }
	.npac-sel-h { font-size: 19.6px; font-weight: 700; margin: 0 0 9.8px; }
	.npac-tab { width: 100%; border-collapse: collapse; font-size: 14px; border: 1px solid #e3e3e3; }
	.npac-tab th { text-align: left; font-weight: 400; color: #555; padding: 10px 12px; vertical-align: top; width: 150px;
		border-bottom: 1px solid #ededed; }
	.npac-tab td { padding: 10px 12px; font-weight: 700; border-bottom: 1px solid #ededed; }
	.npac-tab tr:last-child th, .npac-tab tr:last-child td { border-bottom: 0; }
	</style>
	<?php
}

/** Skripta izbirnika — v nogi, ko sta jQuery in selectWoo ze nalozena. */
function noriks_inpost_skripta() {
	?>
	<script>
	(function(){
	  var koren = <?php echo wp_json_encode( esc_url_raw( rest_url( 'noriks/v1/inpost' ) ) ); ?>;
	  /* WooCommerce nalozi selectWoo z "defer", zato se ga ob zagonu te
	     skripte se ni. Pocakamo nanj, sicer pade izbirnik na rezervno polje. */
	  function zazeni(){
	  var $ = window.jQuery;
	  function el(id){ return document.getElementById(id); }

	  var kartice = document.querySelectorAll('.hs-delivery-type-container .delivery-type');
	  var rate    = el('npac_rate');
	  var polje   = el('npac_field');
	  var okvir   = el('npac_vybrano');
	  var napaka  = el('npac_napaka');
	  var sel     = el('npac_select');
	  if (!kartice.length || !rate) return;

	  /* Skripta blagajne po nalaganju prestavi vse .form-row na konec ovoja,
	     zato nase bloke po tem postavimo na pravo mesto. */
	  function postavi(){
	    var kart = document.querySelector('.hs-delivery-type-container');
	    var ime  = el('billing_first_name_field');
	    var prii = el('billing_last_name_field');
	    if (kart && ime && kart.nextElementSibling !== ime) { ime.parentNode.insertBefore(kart, ime); }
	    if (prii && polje && prii.nextElementSibling !== polje) { prii.parentNode.insertBefore(polje, prii.nextElementSibling); }
	    if (polje && okvir && polje.nextElementSibling !== okvir) { polje.parentNode.insertBefore(okvir, polje.nextElementSibling); }
	  }
	  postavi();
	  [60, 300, 900, 2000].forEach(function(t){ setTimeout(postavi, t); });
	  if ($) $(document.body).on('updated_checkout country_to_state_changed', function(){ postavi(); osvezi(); });

	  function vrsticeNaslova(){
	    var v = [];
	    ['billing_address_1_field','billing_address_2_field','billing_postcode_field','billing_city_field']
	      .forEach(function(id){ var e = el(id); if (e) v.push(e); });
	    var prva = el('billing_address_1_field');
	    if (prva && prva.previousElementSibling &&
	        prva.previousElementSibling.classList.contains('form-row')) { v.push(prva.previousElementSibling); }
	    return v;
	  }

	  function jePac(){
	    var a = document.querySelector('.hs-delivery-type-container .delivery-type.active');
	    return !!a && a.getAttribute('data-inpost') === '1';
	  }

	  /* Skrita polja naslova napolnimo z naslovom paketomata: tako narocilo ni
	     brez naslova in preverjanje hisne stevilke ter postne stevilke uspe. */
	  function napolniNaslov(m){
	    if (!m) { return; }
	    var v = {billing_address_1: m.ulica || m.naslov, billing_address_2: 'BB',
	             billing_postcode: m.kod || '', billing_city: m.mesto || ''};
	    Object.keys(v).forEach(function(id){
	      var e = el(id); if (e && v[id]) { e.value = v[id]; e.dispatchEvent(new Event('change', {bubbles:true})); }
	    });
	  }

	  function osvezi(){
	    var pac = jePac();
	    vrsticeNaslova().forEach(function(e){ e.style.display = pac ? 'none' : ''; });
	    if (polje) polje.style.display = pac ? '' : 'none';
	    if (okvir) okvir.style.display = (pac && sel && sel.value) ? '' : 'none';
	    if (napaka) napaka.hidden = true;
	    if (polje) polje.classList.toggle('is-filled', !!(sel && sel.value));
	  }

	  kartice.forEach(function(k){
	    k.addEventListener('click', function(){
	      kartice.forEach(function(x){ x.classList.remove('active'); });
	      k.classList.add('active');
	      rate.value = k.getAttribute('data-rate');
	      osvezi();
	      if ($) $(document.body).trigger('update_checkout');
	    });
	  });

	  function izbrano(m){
	    napolniNaslov(m);
	    el('npac_naziv').textContent  = m.naziv;
	    el('npac_naslov').textContent = m.naslov;
	    el('npac_tip').textContent    = m.tip;
	    el('npac_ure').textContent    = m.ure || '';
	    if (okvir) okvir.style.display = '';
	    if (polje) polje.classList.add('is-filled');
	    if (napaka) napaka.hidden = true;
	    if ($) $(document.body).trigger('update_checkout');
	  }

	  if ($ && $.fn.selectWoo && sel) {
	    $(sel).selectWoo({
	      placeholder: 'Wybierz Paczkomat / PaczkoPunkt',
	      width: '100%',
	      minimumInputLength: 0,
	      language: {
	        inputTooShort: function(){ return 'Wpisz kod pocztowy, ulicę lub miasto…'; },
	        searching:     function(){ return 'Szukam…'; },
	        noResults:     function(){ return 'Nic nie znaleziono.'; }
	      },
	      ajax: {
	        url: koren, dataType: 'json', delay: 220,
	        data: function(p){ return { q: p.term }; },
	        processResults: function(d){
	          return { results: (d || []).map(function(m){
	            return { id: m.id, text: m.naziv + ' — ' + m.naslov, mesto: m };
	          }) };
	        }
	      }
	    });
	    $(sel).on('select2:select', function(e){ izbrano(e.params.data.mesto); });
	  } else if (sel) {
	    sel.hidden = true;
	    var q = el('npac_q'), lista = el('npac_list'), cas;
	    if (q) {
	      q.hidden = false;
	      q.addEventListener('input', function(){
	        clearTimeout(cas);
	        var v = q.value.trim();
	        if (v.length < 2) { lista.hidden = true; lista.innerHTML = ''; return; }
	        cas = setTimeout(function(){
	          fetch(koren + '?q=' + encodeURIComponent(v)).then(function(r){ return r.json(); })
	            .then(function(d){
	              lista.innerHTML = '';
	              if (!d || !d.length) { lista.innerHTML = '<li>Nic nie znaleziono.</li>'; }
	              else d.forEach(function(m){
	                var li = document.createElement('li');
	                li.textContent = m.naziv + ' — ' + m.naslov;
	                li.addEventListener('click', function(){
	                  sel.innerHTML = '<option value="' + m.id + '" selected></option>';
	                  sel.options[0].textContent = m.naziv + ' ' + m.naslov;
	                  q.value = m.naziv + ', ' + m.naslov;
	                  lista.hidden = true;
	                  izbrano(m);
	                });
	                lista.appendChild(li);
	              });
	              lista.hidden = false;
	            }).catch(function(){ lista.hidden = true; });
	        }, 220);
	      });
	      document.addEventListener('click', function(e){
	        if (lista && !lista.hidden && !lista.contains(e.target) && e.target !== q) { lista.hidden = true; }
	      });
	    }
	  }

	  if ($) $('form.checkout').on('checkout_place_order', function(){
	    if (jePac() && (!sel || !sel.value)) {
	      if (napaka) napaka.hidden = false;
	      if (polje) polje.scrollIntoView({ behavior: 'smooth', block: 'center' });
	      return false;
	    }
	    return true;
	  });

	  osvezi();
	  }
	  var cakam = 0;
	  (function cakaj(){
	    if ( ( window.jQuery && window.jQuery.fn && window.jQuery.fn.selectWoo ) || ++cakam > 60 ) { zazeni(); }
	    else { setTimeout( cakaj, 100 ); }
	  })();
	})();
	</script>
	<?php
}

/* Izbrano mesto shrani v sejo, da prezivi osvezitev blagajne. */
add_action( 'woocommerce_checkout_update_order_review', function ( $podatki ) {
	parse_str( $podatki, $p );
	if ( isset( $p['npac_id'] ) && function_exists( 'WC' ) && WC()->session ) {
		WC()->session->set( NORIKS_INPOST_META . '_id', sanitize_text_field( $p['npac_id'] ) );
	}
} );

/* Pri paketomatu ulica, hisna stevilka, postna stevilka in mesto niso obvezni. */
add_filter( 'woocommerce_checkout_fields', function ( $polja ) {
	if ( ! noriks_inpost_izbran() ) { return $polja; }
	foreach ( array( 'billing_address_1', 'billing_address_2', 'billing_postcode', 'billing_city' ) as $k ) {
		if ( isset( $polja['billing'][ $k ] ) ) { $polja['billing'][ $k ]['required'] = false; }
	}
	return $polja;
}, 20 );

/* ------------------------------------------------------------------ *
 * 5) Preverjanje in shranjevanje k narocilu
 * ------------------------------------------------------------------ */

function noriks_inpost_poslan_id() {
	$id = isset( $_POST['npac_id'] ) ? sanitize_text_field( wp_unslash( $_POST['npac_id'] ) ) : '';
	if ( $id === '' ) { $id = noriks_inpost_seja_id(); }
	return $id;
}

add_action( 'woocommerce_checkout_process', function () {
	if ( ! noriks_inpost_izbran() ) { return; }
	$id = noriks_inpost_poslan_id();
	if ( $id === '' || ! noriks_inpost_mesto( $id ) ) {
		wc_add_notice( 'Wybierz proszę Paczkomat lub PaczkoPunkt.', 'error' );
	}
}, 5 );

/**
 * Naslov narocila nastavi na izbrani paketomat — polja na blagajni so skrita,
 * sicer bi naslov ostal prazen. Metakocka paketomat prepozna po _parcel_shop_id.
 * Izklop: add_filter( 'noriks_inpost_naslov_mesta', '__return_false' );
 */
function noriks_inpost_naslov( $narocilo, $m ) {
	if ( ! apply_filters( 'noriks_inpost_naslov_mesta', true, $narocilo, $m ) ) { return; }
	foreach ( array( 'billing', 'shipping' ) as $kaj ) {
		$narocilo->{'set_' . $kaj . '_address_1'}( $m['ulica'] !== '' ? $m['ulica'] : $m['naslov'] );
		$narocilo->{'set_' . $kaj . '_address_2'}( '' );
		$narocilo->{'set_' . $kaj . '_postcode'}( $m['kod'] );
		$narocilo->{'set_' . $kaj . '_city'}( $m['mesto'] );
	}
}

add_action( 'woocommerce_checkout_create_order', function ( $narocilo ) {
	if ( ! noriks_inpost_izbran() ) { return; }
	$m = noriks_inpost_mesto( noriks_inpost_poslan_id() );
	if ( ! $m ) { return; }

	// Metakocka: sifra paketomata
	$narocilo->update_meta_data( NORIKS_INPOST_MK, $m['id'] );

	$narocilo->update_meta_data( NORIKS_INPOST_META . '_id',     $m['id'] );
	$narocilo->update_meta_data( NORIKS_INPOST_META . '_nazwa',  $m['naziv'] );
	$narocilo->update_meta_data( NORIKS_INPOST_META . '_adres',  $m['naslov'] );
	$narocilo->update_meta_data( NORIKS_INPOST_META . '_typ',    $m['tip'] );

	noriks_inpost_naslov( $narocilo, $m );
}, 10, 1 );

add_action( 'woocommerce_checkout_order_created', function ( $narocilo ) {
	$m = noriks_inpost_iz_narocila( $narocilo );
	if ( ! $m ) { return; }
	$narocilo->add_order_note( sprintf( 'InPost (%s): %s, %s — kod %s',
		$m['tip'], $m['naziv'], $m['naslov'], $m['id'] ) );
}, 10, 1 );

/* ------------------------------------------------------------------ *
 * 6) Prikaz izbranega mesta
 * ------------------------------------------------------------------ */

function noriks_inpost_iz_narocila( $narocilo ) {
	if ( ! $narocilo || ! is_a( $narocilo, 'WC_Order' ) ) { return null; }
	$id = $narocilo->get_meta( NORIKS_INPOST_META . '_id' );
	if ( ! $id ) { return null; }
	return array(
		'id'     => $id,
		'naziv'  => $narocilo->get_meta( NORIKS_INPOST_META . '_nazwa' ),
		'naslov' => $narocilo->get_meta( NORIKS_INPOST_META . '_adres' ),
		'tip'    => $narocilo->get_meta( NORIKS_INPOST_META . '_typ' ),
	);
}

add_action( 'woocommerce_admin_order_data_after_shipping_address', function ( $narocilo ) {
	$m = noriks_inpost_iz_narocila( $narocilo );
	if ( ! $m ) { return; }
	echo '<p><strong>InPost:</strong><br>' . esc_html( $m['naziv'] ) . '<br>'
	   . esc_html( $m['naslov'] ) . '<br><small>' . esc_html( $m['tip'] )
	   . ' · kod ' . esc_html( $m['id'] ) . '</small></p>';
}, 10, 1 );

add_action( 'woocommerce_email_after_order_table', function ( $narocilo ) {
	$m = noriks_inpost_iz_narocila( $narocilo );
	if ( ! $m ) { return; }
	echo '<h2>Miejsce odbioru</h2><p>' . esc_html( $m['naziv'] ) . '<br>'
	   . esc_html( $m['naslov'] ) . '<br>' . esc_html( $m['tip'] ) . '</p>';
}, 15, 1 );

add_action( 'woocommerce_thankyou', function ( $id_narocila ) {
	$m = noriks_inpost_iz_narocila( wc_get_order( $id_narocila ) );
	if ( ! $m ) { return; }
	echo '<section class="npac-ty"><h2>Miejsce odbioru</h2><p><strong>'
	   . esc_html( $m['naziv'] ) . '</strong><br>' . esc_html( $m['naslov'] ) . '</p></section>';
}, 15, 1 );

add_action( 'admin_notices', function () {
	if ( ! current_user_can( 'manage_woocommerce' ) ) { return; }
	if ( is_readable( noriks_inpost_datoteka() ) ) { return; }
	echo '<div class="notice notice-warning"><p><strong>InPost:</strong> manjka '
	   . '<code>data/inpost-punkty.tsv</code>, zato izbirnik paketomatov ne dela.</p></div>';
} );
