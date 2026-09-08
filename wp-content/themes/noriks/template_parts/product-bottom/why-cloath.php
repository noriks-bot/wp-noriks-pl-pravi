<?php
/**
 * product-bottom: Polar NORIKS Cloth XXL — krpa za ciscenje (orto-cloath).
 *
 * Broj i redoslijed sekcija preslikani s referentne stranice (6 sekcija):
 *   1. A Crystal-Clear Shower in Under a Minute   animacija cl-anim-1
 *   2. Your Mirror, Perfect in Seconds            animacija cl-anim-2
 *   3. Keep Your Bathroom Sparkling               slika 09_zena_drzi_krpu
 *   4. Holds Up To 4X Its Weight In Water         animacija cl-anim-3
 *   5. Lint-Free. Tough. Built to Last.           animacija cl-anim-4
 *   6. 60-Day Guarantee                           slika 10_zena_lice
 * Recenzije i FAQ renderira zajednicki reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cl      = get_template_directory_uri() . '/img/cloath/';
$cl_path = get_template_directory() . '/img/cloath/';

$cl_img = function( $file, $alt ) use ( $cl, $cl_path ) {
  if ( file_exists( $cl_path . $file ) ) {
    return '<img src="'.esc_url($cl.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="ncl-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
$cl_anim = function( $mp4, $fallback, $alt ) use ( $cl, $cl_path, $cl_img ) {
  if ( file_exists( $cl_path . $mp4 ) ) {
    $poster = str_replace( '.mp4', '-poster.webp', $mp4 );
    return '<video class="ncl-video" src="'.esc_url($cl.$mp4).'" poster="'.esc_url($cl.$poster).'"'
         . ' autoplay muted loop playsinline preload="metadata" aria-label="'.esc_attr($alt).'"></video>';
  }
  return $cl_img( $fallback, $alt );
};
?>

<!-- ============ 1) Kristalno cist tus u manje od minute ============ -->
<section class="ncl-sec ncl-alt">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-1.mp4','cl-01-hero-3plus3.webp','Czyszczenie kabiny prysznicowej ściereczką Polar NORIKS Cloth'); ?></div>
    <div class="ncl-copy">
      <h2 class="ncl-h2">Krystalicznie czysta kabina prysznicowa w niecałą minutę — bez chemii, tylko woda</h2>
      <p>Wciąż walczysz z zaciekami, kamieniem i osadem z mydła, nawet po ściągaczce albo taniej ściereczce ze sklepu?</p>
      <p>Dlatego stworzyliśmy <strong>Polar NORIKS Cloth</strong> — dla wszystkich, którzy mają dość szorowania i wyrzucania pieniędzy na spraye.</p>
      <p>Kilka szybkich ruchów i szkło, płytki oraz baterie są nieskazitelne. Bez agresywnych środków, bez smug, bez nerwów.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Ogledalo savrseno u nekoliko sekundi ============ -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-copy">
      <h2 class="ncl-h2">Idealne lustro w kilka sekund — bez smug i bez wysiłku</h2>
      <p>Masz dość zacieków, kropli i zaparowania, które zostawiają smugi albo włókna?</p>
      <p>Gęsta dzianina zbiera brud i wodę jednym ruchem, więc lustro pozostaje krystalicznie czyste — bez sprayu i bez rozmazywania.</p>
      <p class="ncl-strong">Nieskazitelny połysk za każdym razem i ściereczka, która wytrzyma pranie za praniem.</p>
    </div>
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-2.mp4','cl-08-dvostrani.webp','Wycieranie lustra bez smug'); ?></div>
  </div>
</section>

<!-- ============ 3) Kupaonica koja blista ============ -->
<section class="ncl-sec ncl-alt">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $cl_img('cl-09-zena-krpa.webp','Łazienka wyczyszczona ściereczką Polar NORIKS Cloth'); ?></div>
    <div class="ncl-copy">
      <h2 class="ncl-h2">Lśniąca łazienka bez kiwnięcia palcem</h2>
      <p>Czyste szkło, lśniące baterie, nieskazitelne lustro — bez szorowania, bez sprayów, bez stresu.</p>
      <p>Grubsze, gęstsze włókna zbierają kamień, brud i zacieki w kilka ruchów, używając tylko wody.</p>
      <ul class="ncl-check">
        <li>Drzwi szklane i tarasowe</li>
        <li>Lustra i duże okna</li>
        <li>Płytki, baterie i blaty</li>
      </ul>
      <a class="ncl-cta" href="#bundle-selector">Wybierz swój zestaw</a>
    </div>
  </div>
</section>

<!-- ============ 4) Upija do 4x svoje tezine ============ -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-copy">
      <h2 class="ncl-h2">Wchłania do 4× swojej wagi w wodzie i zostawia powierzchnie suche</h2>
      <p>Większość ściereczek tylko rozmazuje wodę. Polar NORIKS Cloth wchłania <strong>do 600 ml</strong> na raz — prawie całą butelkę wody.</p>
      <p>Kilka ruchów i kabina, płytki oraz baterie są suche. Bez smug, bez plam, bez czekania.</p>
      <p class="ncl-strong">Efekt: łazienka, która dłużej pozostaje czysta, bez bałaganu.</p>
    </div>
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-3.mp4','cl-07-dimenzije.webp','Wchłanianie wody — do 600 ml na raz'); ?></div>
  </div>
</section>

<!-- ============ 5) Bez vlakana, izdrzljiva ============ -->
<section class="ncl-sec ncl-alt">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-4.mp4','cl-02-stack.webp','Ściereczka po setkach prań'); ?></div>
    <div class="ncl-copy">
      <h2 class="ncl-h2">Bez włókien. Wytrzymała. Pranie za praniem.</h2>
      <p>Ściereczka jest zrobiona na setki użyć. Wrzuć do pralki i znów jest gotowa.</p>
      <p>W przeciwieństwie do zwykłych ściereczek <strong>nie zostawia włókien</strong> — bez kłaczków, bez smug, bez nerwów.</p>
      <ul class="ncl-check">
        <li>Nie blaknie i nie strzępi się</li>
        <li>Można prać w pralce w 40 °C</li>
        <li>Dwustronna konstrukcja: myje i poleruje</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 6) przez 30 dni jamstva ============ -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-copy">
      <p class="ncl-eyebrow">30 dni bez ryzyka</p>
      <h2 class="ncl-h2">Płacisz tylko, jeśli Ci się spodoba</h2>
      <p>Wciąż masz wątpliwości? Rozumiemy — brzmi zbyt dobrze, by było prawdziwe.</p>
      <p>Dlatego ściereczkę możesz wypróbować całkowicie bez ryzyka <strong>przez 30 dni</strong>. Jeśli szkło nie będzie krystalicznie czyste, jeśli płytki nie będą łatwiejsze w utrzymaniu albo po prostu nie spodoba Ci się efekt — odeślij ją.</p>
      <p class="ncl-strong">Albo dostajesz łazienkę lśniącą jak nowa, albo odzyskujesz pieniądze.</p>
      <a class="ncl-cta" href="#bundle-selector">Zamów bez ryzyka</a>
    </div>
    <div class="ncl-media"><?php echo $cl_img('cl-10-zena-lice.webp','30-dniowa gwarancja zwrotu pieniędzy'); ?></div>
  </div>
</section>

<style>
  .ncl-sec { padding: 46px 0; background: #fff; }
  .ncl-alt { background: #f1f4ef; }
  .ncl-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .ncl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .ncl-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #2b4636; line-height: 1.2; margin: 0 0 16px; }
  .ncl-eyebrow { font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #6f8f74; margin: 0 0 8px; }
  .ncl-copy p { font-size: 16px; line-height: 1.7; color: #3a3a3a; margin: 0 0 14px; }
  .ncl-strong { font-weight: 700; color: #2b4636 !important; }
  .ncl-media img, .ncl-video { width: 100%; height: auto; display: block; border-radius: 16px; }

  .ncl-ph { width: 100%; aspect-ratio: 1/1; background: #e8eee7; border: 1px dashed #cfdccd; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .ncl-ph span { font-size: 13px; line-height: 1.45; color: #8ba38f; text-align: center; }

  .ncl-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .ncl-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #2b4636; line-height: 1.5; }
  .ncl-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #6f8f74; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .ncl-cta { display: inline-block; margin-top: 8px; background: #2b4636; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .ncl-cta:hover { background: #6f8f74; color: #fff; }

  @media (max-width: 820px) {
    .ncl-sec { padding: 30px 0; }
    .ncl-row2 { grid-template-columns: 1fr; gap: 20px; }
    .ncl-row2 .ncl-media { order: -1; }
    .ncl-h2 { font-size: 1.85rem; }
    /* tema vec ima svoj razmak na kontejneru — nas prepolovimo */
    .ncl-wrap { padding: 0 9px !important; }
  }

  /* Krpa nema velicina — bez linka na tablicu velicina. */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: zelene kvacice, a prelomljeni redak pocinje ispod teksta (viseci uvlak). */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 14px; padding-left: 0; }

  /* Razmak iznad i ispod cijene izjednacen. */
  .single-product div.product .summary .price,
  .single-product div.product .summary p.price { margin: 14px 0 14px !important; }
  .woocommerce-product-details__short-description ul li {
      list-style: none; margin-left: 0; line-height: 1.55; margin-bottom: 8px;
      padding-left: 17px; text-indent: -17px;
  }
  .woocommerce-product-details__short-description .ncl-tick {
      display: inline-block; width: 17px; text-indent: 0; color: #3f8b57; font-weight: 800;
  }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }

  /* CTA gumb na sredini sekcije. */
  .ncl-copy .ncl-cta { display: block; width: max-content; margin-left: auto; margin-right: auto; }
</style>

<script>
(function(){
  document.querySelectorAll('a.ncl-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });
})();
</script>
