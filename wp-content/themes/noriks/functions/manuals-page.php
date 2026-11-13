<?php
/**
 * Podstranica s PDF uputama za NORIKS proizvode.
 *
 * Stranica se kreira jednom iz teme (slug: instrukcje) i koristi predlozak page-upute.php.
 * PDF-ovi stoje lokalno u temi, u mapi /manuals/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function noriks_manuals_list() {
    return array(
        array(
            'file'  => 'noriks-majice.pdf',
            'sku'   => 'NORIKS-ALL-BLACK-6-PACK',
            'title' => 'Koszulki NORIKS',
            'sub'   => 'Koszulki bawełniane — dobór rozmiaru, noszenie i pielęgnacja.',
        ),
        array(
            'file'  => 'noriks-bokserice.pdf',
            'sku'   => 'NORIKS-BOX-BLACK-5-PACK',
            'title' => 'Bokserki NORIKS',
            'sub'   => 'Bokserki z modalu — wymiary, noszenie i pielęgnacja.',
        ),
        array(
            'file'  => 'noriks-kompresijske-carape.pdf',
            'sku'   => array( 'NORIKS-KOMZIPS', 'NORIKS-BOXERS-ORTO-4' ),
            'title' => 'Pończochy uciskowe NORIKS z zamkiem',
            'sub'   => 'Stopniowany ucisk 15–20 mmHg z bocznym zamkiem błyskawicznym.',
        ),
        array(
            'file'  => 'noriks-kneefix.pdf',
            'sku'   => 'NORIKS-KNEEFIX',
            'title' => 'NORIKS KneeFix — orteza ortopedyczna na kolano',
            'sub'   => 'Regulowany ucisk, boczne stabilizatory i żelowa poduszka na rzepkę.',
        ),
        array(
            'file'  => 'noriks-bunion-fix.pdf',
            'sku'   => 'NORIKS-BUNION',
            'title' => 'NORIKS Bunion Fix — korektor haluksów',
            'sub'   => 'Stopniowe prostowanie palucha przy 30 minutach do 3 godzin dziennie.',
        ),
        array(
            'file'  => 'noriks-ortopas.pdf',
            'sku'   => 'NORIKS-ORTOPAS',
            'title' => 'Pas ortopedyczny NORIKS na plecy',
            'sub'   => 'Ukierunkowany ucisk na dolny odcinek pleców i stabilizacja przy codziennych ruchach.',
        ),
        array(
            'file'  => 'noriks-fisiorest.pdf',
            'sku'   => 'NORIKS-FISIOREST',
            'title' => 'NORIKS NeckRelax — urządzenie na kark',
            'sub'   => 'Trakcja, ciepło i masaż wibracyjny w sesji od 15 do 30 minut.',
        ),
        array(
            'file'  => 'noriks-fit-kompresijska-majica.pdf',
            'sku'   => 'NORIKS-KOMPSFIT',
            'title' => 'NORIKS FIT — koszulka kompresyjna',
            'sub'   => 'Przylegająca kompresja, która wygładza sylwetkę i wspiera wyprostowaną postawę.',
        ),
        array(
            'file'  => 'noriks-leakbox.pdf',
            'sku'   => 'NORIKS-LEAKBOX',
            'title' => 'NORIKS PureDry — bokserki chłonne dla nietrzymania moczu',
            'sub'   => 'Do 300 ml chłonności, siedmiowarstwowy wkład i wodoodporna membrana.',
        ),
        array(
            'file'  => 'noriks-ergosit.pdf',
            'sku'   => 'NORIKS-ERGOSIT',
            'title' => 'NORIKS ErgoSit — poduszka ortopedyczna do siedzenia',
            'sub'   => 'Wycięcie na kość ogonową i pianka pamięciowa o wysokiej gęstości do długiego siedzenia.',
        ),
        array(
            'file'  => 'noriks-kidsnest.pdf',
            'sku'   => 'NORIKS-KIDSNEST',
            'title' => 'NORIKS KidsNest — dziecięca poduszka ortopedyczna',
            'sub'   => 'Trzy rozmiary, które rosną razem z dzieckiem i wspierają prawidłowe ułożenie głowy.',
        ),
        array(
            'file'  => 'noriks-slim.pdf',
            'sku'   => 'NORIKS-SLIM',
            'title' => 'NORIKS Slim — modelujące majtki z wysokim stanem',
            'sub'   => 'Krzyżowany pas 360°, wysoki stan i bezszwowa dzianina do codziennego noszenia.',
        ),
        array(
            'file'  => 'noriks-redrelief.pdf',
            'sku'   => 'NORIKS-RED',
            'title' => 'NORIKS RedRelief — terapia czerwonym światłem na nadgarstek',
            'sub'   => 'Podwójna długość fali 660 nm i 850 nm, 48 podwójnych diod LED, sesja 15 minut.',
        ),
        array(
            'file'  => 'noriks-pal.pdf',
            'sku'   => 'NORIKS-PAL',
            'title' => 'NORIKS Pal — laska z drugim uchwytem',
            'sub'   => 'Drugi uchwyt do wstawania, cztery nóżki, latarka i alarm. Składana i regulowana na wysokość.',
        ),
        array(
            'file'  => 'noriks-polar-cloth.pdf',
            'sku'   => 'NORIKS-CLOATH',
            'title' => 'Polar NORIKS Cloth XXL — ściereczka do czyszczenia samą wodą',
            'sub'   => 'Format 60 × 40 cm, dwustronne wykonanie, wchłania do 600 ml wody. Bez sprayów i bez chemii.',
        ),
        array(
            'file'  => 'noriks-slabproof.pdf',
            'sku'   => 'NORIKS-SLABPROOF',
            'title' => 'NORIKS SlabProof — skarpety robocze z amortyzacją',
            'sub'   => 'Niski krój pod kostkę, strefowa amortyzacja pod piętą i przodostopiem.',
        ),
        array(
            'file'  => 'noriks-controlpro.pdf',
            'sku'   => 'NORIKS-CONTROLPRO',
            'title' => 'NORIKS ControlPro — trenażer mięśni dna miednicy',
            'sub'   => 'Ćwiczenie z oporem między kolanami: trzy serie po dziesięć ściśnięć dziennie, bez wkładania i bez aplikacji.',
        ),
        array(
            'file'  => 'noriks-tradesman.pdf',
            'sku'   => 'NORIKS-SLABPROOF-2',
            'title' => 'NORIKS Tradesman — skarpety robocze z amortyzacją i wsparciem łuku stopy',
            'sub'   => 'Bambus, strefowa amortyzacja, taśma pod łukiem stopy i podwójny ściągacz na długie zmiany w butach roboczych.',
        ),
        array(
            'file'  => 'noriks-bowl.pdf',
            'sku'   => 'NORIKS-BOWL',
            'title' => 'NORIKS Bowl — ortopedyczna miska dla psa z pochyleniem 15°',
            'sub'   => 'Podniesiona na 11 cm i pochylona o 15° — pies je w bardziej naturalnej pozycji, bez zginania szyi do podłogi.',
        ),
        array(
            'file'  => 'noriks-cloud.pdf',
            'sku'   => 'NORIKS-CLOUD',
            'title' => 'NORIKS Cloud — ortopedyczna poduszka między kolana',
            'sub'   => 'Do spania na boku: utrzymuje kolana i biodra w jednej linii, z regulowaną taśmą, która trzyma ją na miejscu przez całą noc.',
        ),
        array(
            'file'  => 'noriks-kneeheat.pdf',
            'sku'   => 'NORIKS-KNEEHEAT',
            'title' => 'NORIKS KneeHeat — ogrzewanie, kompresja i masaż kolana',
            'sub'   => 'Trzy terapie w jednej sesji: ciepło do 42 °C, kompresja powietrzna i wibracje 60 Hz. Sesja trwa 12 minut.',
        ),
        array(
            'file'  => 'noriks-mamafit.pdf',
            'sku'   => 'NORIKS-SLIM-2',
            'title' => 'NORIKS MamaFit — poporodowe majtki kompresyjne 360°',
            'sub'   => 'Wysoki stan i krzyżowa kompresja 360° — wsparcie brzucha z przodu, po bokach i z tyłu.',
        ),
        array(
            'file'  => 'noriks-snug.pdf',
            'sku'   => 'NORIKS-SNUG',
            'title' => 'NORIKS Snug — poduszka na całe ciało w kształcie litery S',
            'sub'   => 'Podpiera ramiona, biodra i kolana jednocześnie. Wymiary 105 × 30 cm, chłodząca poszewka.',
        ),
        array(
            'file'  => 'noriks-hyd.pdf',
            'sku'   => 'NORIKS-HYD',
            'title' => 'NORIKS HYD — butelka na wodę wodorową z elektrolizą PEM',
            'sub'   => 'Zamienia zwykłą wodę w wodorową. Cykl 3 lub 10 minut, trwały filtr, szkło i stal nierdzewna.',
        ),
        array(
            'file'  => 'noriks-winecooler.pdf',
            'sku'   => 'NORIKS-WINECOOLER',
            'title' => 'NORIKS WineCooler — schładzacz do wina z nalewakiem',
            'sub'   => 'Pręt ze stali nierdzewnej, który chłodzi butelkę od środka i nalewa bez kapania.',
        ),
    );
}

/** Slika i poveznica proizvoda po SKU-u — uvijek aktualne, bez rucnog upisa URL-a. */
function noriks_manual_product( $sku ) {
    $out = array( 'img' => '', 'url' => '' );
    if ( ! function_exists( 'wc_get_product_id_by_sku' ) ) { return $out; }

    $pid = 0;
    foreach ( (array) $sku as $candidate ) {
        $pid = wc_get_product_id_by_sku( $candidate );
        if ( $pid ) { break; }
    }
    if ( ! $pid ) { return $out; }

    $out['url'] = get_permalink( $pid );
    $out['img'] = get_the_post_thumbnail_url( $pid, 'woocommerce_thumbnail' );

    if ( ! $out['img'] && function_exists( 'wc_get_product' ) ) {
        $product = wc_get_product( $pid );
        if ( $product ) {
            $gallery = $product->get_gallery_image_ids();
            if ( ! empty( $gallery[0] ) ) {
                $out['img'] = wp_get_attachment_image_url( $gallery[0], 'woocommerce_thumbnail' );
            }
        }
    }
    return $out;
}

/** Jednokratno kreira pravu WP stranicu i dodijeli joj predlozak page-upute.php. */
function noriks_manuals_ensure_page() {
    $opt = 'noriks_manuals_page_id';
    $id  = (int) get_option( $opt );
    if ( $id && get_post_status( $id ) ) { return; }

    $existing = get_page_by_path( 'instrukcje' );
    if ( $existing ) {
        update_post_meta( $existing->ID, '_wp_page_template', 'page-upute.php' );
        update_option( $opt, $existing->ID );
        return;
    }

    $id = wp_insert_post( array(
        'post_title'   => 'Instrukcja obsługi',
        'post_name'    => 'instrukcje',
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'post_content' => '',
        'meta_input'   => array( '_wp_page_template' => 'page-upute.php' ),
    ) );
    if ( $id && ! is_wp_error( $id ) ) { update_option( $opt, $id ); }
}
add_action( 'init', 'noriks_manuals_ensure_page' );
