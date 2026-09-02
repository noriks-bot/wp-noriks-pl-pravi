<?php
/**
 * product-bottom: NORIKS ControlPro (orto-controlpro).
 * Preneseno s hrvaskega trga 1:1 — iste 4 sekcije, ista postavitev, prevedeno.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cp      = get_template_directory_uri() . '/img/controlpro/';
$cp_path = get_template_directory() . '/img/controlpro/';
$cp_img = function( $file, $alt ) use ( $cp, $cp_path ) {
  if ( file_exists( $cp_path . $file ) ) {
    return '<img src="'.esc_url($cp.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="cpr-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('08-vjezba-1.webp','Ćwiczenie z trenażerem NORIKS ControlPro'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Dlaczego poczuć skurcz i naprawdę wzmocnić dno miednicy to nie to samo</h2>
      <p>Lekarz kazał robić ćwiczenia Kegla. Więc ściskałeś. I czułeś, że działa — to napięcie, ten skurcz. Dlatego kontynuowałeś. Tygodniami, może miesiącami.</p>
      <p>A wyciek się nie zatrzymał.</p>
      <p>Powód jest prosty: poczuć skurcz i naprawdę zbudować siłę dna miednicy to nie to samo. Bez oporu mięsień tylko aktywujesz — nie trenujesz go. Ściskasz w próżnię, a żaden mięsień w ciele tak nie stał się silniejszy.</p>
      <p>ControlPro to zmienia. Daje dnu miednicy coś, na co może naciskać — prawdziwy opór fizyczny obciążający dokładnie te mięśnie, które kontrolują pęcherz.</p>
    </div>
  </div>
</section>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('09-vjezba-2.webp','Ściskanie z oporem — 3 serie po 10 powtórzeń dziennie'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">3 serie po 10 ściśnięć dziennie. To wszystko.</h2>
      <p>Usiądź na krześle i umieść ControlPro między kolanami. Ściskaj z oporem — 3 serie po 10 powtórzeń dziennie.</p>
      <p>Bez wprowadzania, bez kabli, bez aplikacji. Wygląda jak sprzęt do ćwiczeń, bo nim jest. Ćwicz przy wiadomościach albo przy biurku — nikt nie musi tego widzieć.</p>
      <a class="cpr-cta" href="#bundle-selector">Odzyskaj kontrolę już dziś</a>
    </div>
  </div>
</section>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('01-usporedba.png','Porównanie: wkładki, urządzenia EMS, same ćwiczenia Kegla i NORIKS'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Dlaczego to działa, kiedy nic innego nie zadziałało</h2>
      <p>Wkładki i ochrona łagodzą objaw — będziesz je kupować co miesiąc, w nieskończoność, a nic nie stanie się silniejsze.</p>
      <p>Urządzenia EMS (175–350 €) napinają mięsień <em>za ciebie</em>, co jest jak gdyby ktoś inny robił twoje pompki — połączenie mózg–mięsień nigdy się nie tworzy, a wiele z nich wymaga sond wewnętrznych.</p>
      <p>Same ćwiczenia Kegla to dobry pomysł, ale bez oporu i informacji zwrotnej większość mężczyzn ćwiczy na ślepo i rezygnuje po kilku tygodniach.</p>
      <p>NORIKS ControlPro płacisz raz, pracę musisz wykonać sam z prawdziwym oporem, a urządzenie stosuje tę samą zasadę stopniowego obciążenia, która wzmacnia każdy inny mięsień.</p>
      <p>Twoje dno miednicy nie jest zepsute.</p>
      <p class="cpr-strong">Jest tylko niedotrenowane.</p>
    </div>
  </div>
</section>

<section class="cpr-sec cpr-revs">
  <div class="cpr-wrap">
    <h2 class="cpr-h2 cpr-center">Mężczyźni tacy jak ty już widzą efekty</h2>
    <div class="cpr-rev-grid">
      <?php foreach ( array(
        array( 'Z 4 wkładek dziennie do 0', 'Po operacji prostaty ponad rok robiłem ćwiczenia Kegla bez postępu. Byłem sceptyczny, ale używam go od pięciu tygodni i z czterech wkładek dziennie spadłem do zera.', 'Marek R.' ),
        array( 'Byłem sceptyczny', 'Wyciekało mi przez dwa lata, a ćwiczenia nic nie zmieniły. Różnicę czuć od razu, gdy mięśnie mają prawdziwy opór. Teraz już nie wycieka.', 'Grzegorz P.' ),
        array( 'Proste i dobrze wykonane', 'Proste i solidnie wykonane urządzenie. Ściskasz i puszczasz, a z czasem masz znacznie większą kontrolę. Unikaj tanich podróbek — nie mają takiego oporu.', 'Andrzej T.' ),
      ) as $rv ) : ?>
        <article class="cpr-rev">
          <span class="cpr-quote" aria-hidden="true">&#10077;</span>
          <div class="cpr-stars" aria-label="5/5">★★★★★</div>
          <p class="cpr-rev-title"><?php echo esc_html( $rv[0] ); ?></p>
          <p class="cpr-rev-text">„<?php echo esc_html( $rv[1] ); ?>"</p>
          <p class="cpr-rev-name"><?php echo esc_html( $rv[2] ); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .cpr-sec { padding: 46px 0; }
  .cpr-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .cpr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .cpr-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .cpr-center { text-align: center; }
  .cpr-copy p { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .cpr-strong { font-weight: 700; color: #141414; }
  .cpr-media img { width: 100%; height: auto; display: block; border-radius: 6px; }

  .cpr-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 6px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .cpr-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .cpr-cta { display: inline-block; margin-top: 6px; background: #141414; color: #fff; font-weight: 700; font-size: 15px; padding: 13px 26px; border-radius: 8px; text-decoration: none; }
  .cpr-cta:hover { background: #E8450E; color: #fff; }

  /* 4) kartice recenzija */
  .cpr-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 26px; }
  .cpr-rev { position: relative; background: #f4f4f4; border-radius: 10px; padding: 22px 20px; text-align: center; }
  .cpr-quote { position: absolute; top: 14px; right: 16px; font-size: 20px; line-height: 1; color: #141414; }
  .cpr-stars { color: #f5b301; font-size: 16px; letter-spacing: 1px; }
  .cpr-rev-title { font-weight: 800; color: #141414; font-size: 15px; margin: 10px 0 10px; }
  .cpr-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .cpr-rev-name { font-size: 13px; font-style: italic; color: #6b6b6b; margin: 0; }

  @media (max-width: 820px) {
    /* enakomeren razmik: med sekcijama isto kao med sliku i tekst (18px) */
    .cpr-sec { padding: 9px 0; }
    .cpr-sec:first-of-type { padding-top: 0; }
    .cpr-wrap { padding-left: 0; padding-right: 0; }
    .cpr-row2 { grid-template-columns: 1fr; gap: 18px; }
    .cpr-h2 { font-size: 1.9rem; margin-bottom: 12px; }
    .cpr-copy p { margin-bottom: 12px; }
    .cpr-cta { margin-top: 2px; }
    .cpr-rev-grid { grid-template-columns: 1fr; gap: 18px; margin-top: 18px; }
  }

  /* Nema "Tablica veličina" linka na ControlPro uređaju (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: skupljeni razmaci — i kad su točke <li> i kad su odvojeni <p>.
     (Ovaj se predložak učitava samo na orto-controlpro stranicama.) */
  .woocommerce-product-details__short-description { margin-bottom: 10px !important; }
  .woocommerce-product-details__short-description ul { list-style: none; margin: 4px 0 8px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin: 0 0 4px; line-height: 1.4; }
  .woocommerce-product-details__short-description p { margin: 0 0 5px !important; line-height: 1.4; }
  /* viseći uvod: prijelom u drugi red poravnan s tekstom, ne s ✓ */
  .woocommerce-product-details__short-description ul li,
  .woocommerce-product-details__short-description p { padding-left: 1.6em; text-indent: -1.6em; }
  .woocommerce-product-details__short-description p:last-child { margin-bottom: 0 !important; }
  .woocommerce-product-details__short-description br { line-height: 0.9; }
  /* prazni odstavci/prijelomi u kratkom opisu ne smiju stvarati praznine */
  .woocommerce-product-details__short-description p:empty,
  .woocommerce-product-details__short-description br:first-child,
  .woocommerce-product-details__short-description br + br { display: none !important; }

  /* manji odmak između kratkog opisa i cijene te između cijene i scarcity bara */
  .single-product .summary .price,
  .single-product div.product p.price { margin-top: 4px !important; margin-bottom: 8px !important; }
  .single-product .gck-countdown { margin-top: 8px !important; }
  .single-product .summary > p:empty, .single-product .summary > br { display: none !important; }
</style>

<script>
(function(){
  /* Kratki opis iz admina cesto sadrzi prazne odstavke (<p>&nbsp;</p>) koji rade
     velike praznine iznad cijene — CSS ih ne moze uhvatiti, pa ih uklonimo. */
  function cprTrimDesc(){
    var box = document.querySelector('.woocommerce-product-details__short-description');
    if (!box) { return; }
    box.querySelectorAll('p, div').forEach(function(el){
      if (el.querySelector('img, ul, ol, svg')) { return; }
      var t = (el.textContent || '').replace(/\u00a0/g, ' ').trim();
      if (t === '') { el.remove(); }
    });
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', cprTrimDesc); } else { cprTrimDesc(); }

  document.querySelectorAll('a.cpr-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
