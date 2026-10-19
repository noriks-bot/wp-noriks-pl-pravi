<?php
/**
 * product-bottom: NORIKS Bowl — povisena zdjelica za pse s nagibom 15° (orto-bowl).
 * Prevod s HR (PL). Slike: img/bowl/ — lokalizirane.
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikoli na sredini;
 * slike su omejene na max-height 430px.
 *   1) Dla szczęśliwszego i zdrowszego psa (lijevo)   4) Za male pasmine (desno)
 *   2) Specifikacije (desno)                     5) Nehrdajuci celik (lijevo)
 *   3) Tri prednosti (lijevo)                    6) Izjava + jamstvo (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bw      = get_template_directory_uri() . '/img/bowl/';
$bw_path = get_template_directory() . '/img/bowl/';
$bw_img  = function( $file, $alt ) use ( $bw, $bw_path ) {
  if ( ! file_exists( $bw_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $bw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZA SRETNIJEG I ZDRAVIJEG PSA — slika lijevo -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2">
    <div class="nbw-media"><?php echo $bw_img( 'bwl-05-naslov-kuhinja.jpg', 'Buldog francuski przy misce NORIKS Bowl' ); ?></div>
    <div class="nbw-copy">
      <p class="nbw-kicker">Posiłek bez zginania szyi</p>
      <h2 class="nbw-h2">Dla szczęśliwszego <em>i zdrowszego psa</em></h2>
      <p>Ze zwykłej miski na podłodze pies je zgarbiony, z szyją wygiętą w dół. Karma przesuwa się do krawędzi, a mniejsze psy wyławiają nosem ostatnie granulki z rogów.</p>
      <p>NORIKS Bowl podnosi miskę na 11 cm i pochyla ją o 15° w stronę psa — karma zsuwa się do niego, a głowa pozostaje w naturalniejszej pozycji.</p>
      <ul class="nbw-check">
        <li><strong>Mniej zginania szyi</strong> podczas jedzenia</li>
        <li><strong>Spokojniejszy posiłek</strong> — karma nie ucieka po podłodze</li>
        <li><strong>Wygodniej dla starszych psów</strong>, którym schylanie sprawia trudność</li>
      </ul>
      <a class="nbw-cta" href="#bundle-selector">Zamów NORIKS Bowl</a>
    </div>
  </div>
</section>

<!-- 2) SPECIFIKACIJE — slika desno -->
<section class="nbw-sec">
  <div class="nbw-wrap nbw-row2 nbw-row2--rev">
    <div class="nbw-copy">
      <p class="nbw-kicker">Każdy detal ma swój cel</p>
      <h2 class="nbw-h2">Zaprojektowana <em>wokół tego, jak je pies</em></h2>
      <div class="nbw-facts">
        <div><span class="nbw-num">15°</span><h3>Nachylenie miski</h3><p>Dla lepszej postawy głowy i szyi podczas jedzenia.</p></div>
        <div><span class="nbw-num">11 cm</span><h3>Wysokość stojaka</h3><p>Mniej napięcia w szyi niż przy misce na podłodze.</p></div>
        <div><span class="nbw-num">5 cm</span><h3>Płytka miska</h3><p>Wąsy nie uderzają o krawędź, a karma jest łatwo dostępna.</p></div>
        <div><span class="nbw-num">430 ml</span><h3>Pojemność</h3><p>Średnica 15 cm — wystarczy na posiłek lub wodę dla małego psa.</p></div>
      </div>
    </div>
    <div class="nbw-media"><?php echo $bw_img( 'bwl-10-specifikacije.jpg', 'Specyfikacja NORIKS Bowl: nachylenie 15°, wysokość 11 cm, głębokość 5 cm' ); ?></div>
  </div>
</section>

<!-- 3) TRI PREDNOSTI — slika lijevo -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2">
    <div class="nbw-media"><?php echo $bw_img( 'bwl-09-prednosti.jpg', 'Sznaucer je z miski NORIKS Bowl' ); ?></div>
    <div class="nbw-copy">
      <p class="nbw-kicker">Trzy powody</p>
      <h2 class="nbw-h2">Dlaczego psy jedzą <em>wygodniej</em></h2>
      <div class="nbw-points">
        <div class="nbw-point"><h3>Naturalniejsza pozycja</h3><p>Nachylenie 15° sprzyja naturalniejszej i wygodniejszej pozycji podczas jedzenia — pies nie musi wpychać nosa w dno miski.</p></div>
        <div class="nbw-point"><h3>Higieniczna stal</h3><p>Najwyższej jakości stal nierdzewna pozostaje higieniczna i świeża oraz łatwo się czyści.</p></div>
        <div class="nbw-point"><h3>Gładka powierzchnia</h3><p>Resztki karmy nie przywierają, więc czyszczenie jest szybsze niż przy plastikowej misce.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZA MALE PASMINE — slika desno -->
<section class="nbw-sec">
  <div class="nbw-wrap nbw-row2 nbw-row2--rev">
    <div class="nbw-copy">
      <p class="nbw-kicker">Rozmiar</p>
      <h2 class="nbw-h2">Stworzona <em>dla małych ras</em></h2>
      <p>Wysokość stojaka i wielkość miski są dopasowane do psów niskiego wzrostu, dla których miska na podłodze jest za daleko, a zwykła podniesiona miska za wysoka.</p>
      <ul class="nbw-breeds">
        <li>Jamnik</li>
        <li>Buldog francuski</li>
        <li>Sznaucer miniaturowy</li>
        <li>Mops</li>
        <li>Maltańczyk</li>
        <li>Jack Russell terrier</li>
      </ul>
      <p class="nbw-note">Wymiary miski: średnica 15 cm, głębokość 5 cm, pojemność około 430 ml.</p>
    </div>
    <div class="nbw-media"><?php echo $bw_img( 'bwl-03-francuski-buldog.jpg', 'Buldog francuski przy misce NORIKS Bowl' ); ?></div>
  </div>
</section>

<!-- 5) NEHRĐAJUĆI ČELIK — slika lijevo -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2">
    <div class="nbw-media"><?php echo $bw_img( 'bwl-06-celik.jpg', 'NORIKS Bowl ze stali nierdzewnej' ); ?></div>
    <div class="nbw-copy">
      <p class="nbw-kicker">Materiał</p>
      <h2 class="nbw-h2">Stal zamiast <em>plastiku</em></h2>
      <p>Plastikowe miski z czasem pokrywają się drobnymi rysami, w których zostają resztki karmy i zapach. Stal pozostaje gładka latami.</p>
      <ul class="nbw-vs">
        <li class="is-yes">Stal nierdzewna — miska i stojak</li>
        <li class="is-yes">Nie wchłania zapachów i nie zmienia koloru</li>
        <li class="is-yes">Wystarczy kilka sekund pod ciepłą wodą</li>
        <li class="is-no">Plastik, który się rysuje i zatrzymuje resztki</li>
        <li class="is-no">Ceramika, która wyszczerbia się przy upadku</li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) VOLE JE VLASNICI PASA — fotografije kupaca -->
<section class="nbw-sec nbw-rev">
  <div class="nbw-wrap">
    <h2 class="nbw-h2" style="text-align:center">Kochają ją <em>właściciele psów</em></h2>
    <p class="nbw-rev__lead">Lepsza postawa. Spokojniejsze posiłki.</p>
    <p class="nbw-rev__rate"><span class="nbw-rev__stars">★★★★★</span> Ocena <strong>4,8/5</strong> na podstawie <strong>1081 opinii</strong></p>
    <div class="nbw-rev__strip">
        <figure class="nbw-rev__card">
          <?php echo $bw_img( 'bwl-02-jazavcar.jpg', 'Jamnik, 6 lat przy misce NORIKS Bowl' ); ?>
          <figcaption><span class="nbw-rev__stars">★★★★★</span><strong>Jamnik, 6 lat</strong><span>„Już nie je w przysiadzie. Miska jest w sam raz wysoka, żeby głowa została prosto."</span></figcaption>
        </figure>
        <figure class="nbw-rev__card">
          <?php echo $bw_img( 'bwl-03-francuski-buldog.jpg', 'Buldog francuski, 3 lata przy misce NORIKS Bowl' ); ?>
          <figcaption><span class="nbw-rev__stars">★★★★★</span><strong>Buldog francuski, 3 lata</strong><span>„Dla psa z krótkim pyskiem to największa różnica — je spokojniej i bez krztuszenia."</span></figcaption>
        </figure>
        <figure class="nbw-rev__card">
          <?php echo $bw_img( 'bwl-04-snaucer.jpg', 'Sznaucer, 8 lat przy misce NORIKS Bowl' ); ?>
          <figcaption><span class="nbw-rev__stars">★★★★★</span><strong>Sznaucer, 8 lat</strong><span>„Starszy pies ze sztywną szyją. Nachylenie 15° wyraźnie ułatwiło mu posiłek."</span></figcaption>
        </figure>
    </div>
  </div>
</section>

<!-- 7) IZJAVA + JAMSTVO — slika desno -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2 nbw-row2--rev">
    <div class="nbw-copy">
      <p class="nbw-kicker">NORIKS Bowl</p>
      <h2 class="nbw-h2">Stabilna, elegancka <em>i naprawdę wygodna</em></h2>
      <p>Stojak stoi pewnie nawet wtedy, gdy pies jest niezdarny, stal myje się w kilka sekund, a w kuchni wygląda jak element wyposażenia, a nie plastikowa michka na podłodze.</p>
      <ul class="nbw-check">
        <li>Na karmę i na wodę — wielu bierze dwie</li>
        <li>Szybka dostawa pod dom</li>
        <li><strong>30 dni</strong> na zwrot pieniędzy</li>
      </ul>
      <a class="nbw-cta" href="#bundle-selector">Zamów NORIKS Bowl</a>
    </div>
    <div class="nbw-media"><?php echo $bw_img( 'bwl-08-izjava.jpg', 'Jamnik przy misce NORIKS Bowl' ); ?></div>
  </div>
</section>

<style>
.nbw-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2b44; }
.nbw-sec * { box-sizing: border-box; }
.nbw-tint { background: #eef3fa; }
.nbw-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.nbw-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2f5b9a; margin: 0 0 10px; }
.nbw-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #1c2b44; }
.nbw-h2 em { font-style: italic; font-weight: 800; color: #2f5b9a; }
.nbw-copy p { font-size: 16px; line-height: 1.7; color: #4b5a70; margin: 0 0 14px; }
.nbw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbw-media { text-align: left; }
.nbw-media img { display: block; width: 100%; max-width: 100%; max-height: none; height: auto; object-fit: cover;
  border-radius: 14px; box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 14px 40px rgba(20,25,40,.10); }
.nbw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nbw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2c3b52; }
.nbw-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nbw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #2c3b52; }
.nbw-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbw-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nbw-vs .is-no { color: #7d8898; }
.nbw-vs .is-no::before { content: "\2715"; background: #dfe6f0; color: #8f9bab; }
.nbw-points { display: flex; flex-direction: column; gap: 20px; }
.nbw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #2f5b9a; }
.nbw-point p { font-size: 15.5px; color: #4b5a70; line-height: 1.6; margin: 0; }
.nbw-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 6px; }
.nbw-facts > div { background: #eef3fa; border-radius: 12px; padding: 16px 18px; }
.nbw-num { display: block; font-size: 26px; font-weight: 800; color: #2f5b9a; line-height: 1.1; margin-bottom: 6px; }
.nbw-facts h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 4px; color: #1c2b44; }
.nbw-facts p { font-size: 14px !important; color: #5c6a7e !important; line-height: 1.5 !important; margin: 0 !important; }
.nbw-breeds { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 16px; }
.nbw-breeds li { position: relative; padding-left: 24px; font-size: 15.5px; font-weight: 600; color: #2c3b52; }
.nbw-breeds li::before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #2f5b9a; }
.nbw-note { font-size: 13.5px !important; color: #7d8898 !important; font-style: italic; margin: 6px 0 0 !important; }
.nbw-cta { display: inline-block; background: #2f5b9a; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nbw-cta:hover { background: #22477c; color: #fff !important; }

.nbw-rev__lead { text-align: center; font-size: 16px; color: #5a6b85; margin: 0 0 8px; }
.nbw-rev__rate { text-align: center; font-size: 15.5px; color: #1c2b44; margin: 0 0 22px; }
.nbw-rev__stars { color: #f5a623; letter-spacing: 2px; }
.nbw-rev__strip { display: grid; grid-template-columns: repeat(3, minmax(0,1fr)); gap: 20px; }
.nbw-rev__card { margin: 0; background: #fff; border-radius: 14px; overflow: hidden;
  box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 12px 30px rgba(20,25,40,.10); }
.nbw-rev__card img { width: 100%; max-width: none; max-height: none; aspect-ratio: 3 / 4; object-fit: cover;
  border-radius: 0; box-shadow: none; display: block; }
.nbw-rev__card figcaption { padding: 14px 16px 18px; }
.nbw-rev__card figcaption strong { display: block; font-size: 15.5px; font-weight: 800; color: #1c2b44; margin: 6px 0 5px; }
.nbw-rev__card figcaption span:last-child { display: block; font-size: 14.5px; line-height: 1.6; color: #4c5a71; }

@media (max-width: 980px) {
  .nbw-rev__strip { grid-template-columns: 1fr 1fr; }
  .nbw-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nbw-row2--rev .nbw-media { text-align: right; }
}
@media (max-width: 560px) {
  .nbw-rev__strip { grid-auto-flow: column; grid-template-columns: none; grid-auto-columns: 78%;
    overflow-x: auto; scroll-snap-type: x mandatory; padding-bottom: 6px; }
  .nbw-rev__card { scroll-snap-align: center; }
  .nbw-sec { padding: 42px 0; }
  .nbw-wrap { padding: 0 16px; }
  .nbw-cta { width: 100%; text-align: center; }
  .nbw-num { font-size: 23px; }
}

/* ── kratek opis izdelka: kljukice namesto pik (REST pobrise inline slog) ── */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nbw-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f5b9a !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
