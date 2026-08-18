<?php
/**
 * product-bottom: NORIKS KneeFix — ortopedska steznica za koljeno (orto-kneefix).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst na HR,
 * slike su NORIKS kreative iz img/kneefix/. Svaka sekcija ima sliku s jedne
 * i tekst s druge strane (naizmjenično) — nema sekcija koje su samo slika.
 *   1. Gdy każdy krok staje się nieprzyjemny   slika lijevo   13_stepenice
 *   2. Może to nie tylko zużycie   slika desno    14_zglob
 *   3. Wsparcie dla aktywnych kolan         slika lijevo   08_aktivno
 *   4. 4 funkcje. Większe poczucie stabilności.    slika desno    03_funkcije
 *   5. Wygodne wsparcie w 3 krokach          slika lijevo   04_koraki
 *   6. Więcej komfortu na co dzień      slika desno    05_lifestyle
 *   7. Preporučeno za potporu koljena     slika lijevo   06_zdravnik
 *   8. Różnicę czuć                  slika desno    07_vs
 *   9. Co mówią nasi klienci                3 kartice      10/11/12
 * Recenzije i FAQ renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kf      = get_template_directory_uri() . '/img/kneefix/';
$kf_path = get_template_directory() . '/img/kneefix/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$kf_img = function( $file, $alt ) use ( $kf, $kf_path ) {
  if ( file_exists( $kf_path . $file ) ) {
    return '<img src="'.esc_url($kf.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="kfx-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Gdy każdy krok staje się nieprzyjemny ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('kf-pl-3.webp','Ból kolana przy schodzeniu po schodach'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Gdy każdy krok staje się nieprzyjemny</h2>
      <p class="kfx-lead">Na początku to często tylko lekkie pociąganie.</p>
      <p>Potem przychodzą chwile, w których kolano czujesz znacznie mocniej:</p>
      <ul class="kfx-list">
        <li>Przy wstawaniu</li>
        <li>Na schodach</li>
        <li>Po dłuższym siedzeniu</li>
        <li>Podczas chodzenia lub dłuższego stania</li>
      </ul>
      <p>Wielu zaczyna wtedy automatycznie unikać ruchu. Chodzą wolniej, nieświadomie odciążają kolano albo czują się niepewnie przy codziennych czynnościach.</p>
      <p class="kfx-strong">Problem polega na tym: im ostrożniej się poruszasz, tym bardziej kolano staje się centrum twojej codzienności.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Może to nie tylko zużycie ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Może to nie tylko zużycie</h2>
      <p>Wiele typowych wyjaśnień mówi tylko o „zużyciu". Ból kolana częściej odczuwa się jednak jako <strong>ucisk, podrażnienie lub niestabilność</strong>.</p>
      <p>Jednym z możliwych powodów jest podrażniona błona maziowa — wrażliwa wewnętrzna wyściółka stawu kolanowego. Gdy tkanka ta ulega podrażnieniu, kolano może reagować na obciążenie bardziej wrażliwie. Może się to objawiać jako:</p>
      <ul class="kfx-inline-list">
        <li>Uczucie ucisku wokół rzepki</li>
        <li>Sztywność po odpoczynku</li>
        <li>Niepewność przy poruszaniu się</li>
        <li>Wrażliwość przy obciążeniu</li>
      </ul>
      <p>Wiele klasycznych ortez próbuje rozwiązać problem sztywną stabilizacją. Twarde ortezy bywają jednak niewygodne, zsuwają się lub ograniczają naturalny ruch. Właśnie dlatego <strong>NORIKS KneeFix</strong> powstał inaczej.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('14_zglob.jpg','Podrażniona błona maziowa stawu kolanowego'); ?></div>
  </div>
</section>

<!-- ============ 3) Wsparcie dla aktywnych kolan ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('08_aktywni_PL.webp','Pozostań aktywny — bez ograniczeń w kolanach'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Wsparcie dla aktywnych kolan</h2>
      <p><strong>NORIKS KneeFix</strong> łączy kilka funkcji w jednym elastycznym systemie wsparcia na co dzień. Zamiast ciężkiej ortezy otrzymujesz:</p>
      <ul class="kfx-check">
        <li>Ucisk, który regulujesz samodzielnie</li>
        <li>Stabilizację boczną</li>
        <li>Żelową poduszkę odciążającą rzepkę</li>
        <li>Antypoślizgowy przylegający brzeg</li>
      </ul>
      <p>Celem nie jest usztywnienie kolana. KneeFix powstał po to, by przyjemniej wspierać kolano w codziennym ruchu — podczas chodzenia, w pracy, na zakupach czy w podróży.</p>
    </div>
  </div>
</section>

<!-- ============ 4) 4 funkcje. Większe poczucie stabilności. ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">4 funkcje. Większe poczucie stabilności.</h2>
      <p>KneeFix nie robi tylko jednego — kilka systemów wsparcia działa jednocześnie:</p>
      <ul class="kfx-check">
        <li><strong>Precyzyjne pokrętło ucisku</strong> — regulowany ucisk i pewne dopasowanie</li>
        <li><strong>Podwójne stabilizatory boczne</strong> — stabilność boczna kolana</li>
        <li><strong>Żelowa poduszka na rzepkę</strong> — odciążenie ucisku i amortyzacja wstrząsów</li>
        <li><strong>Silikonowy chwyt przeciw zsuwaniu</strong> — miękka silikonowa faktura zapobiega zsuwaniu i zwijaniu</li>
      </ul>
    </div>
    <div class="kfx-media"><?php echo $kf_img('03_funkcje_PL.webp','Cztery funkcje ortezy NORIKS KneeFix'); ?></div>
  </div>
</section>

<!-- ============ 5) Wygodne wsparcie w 3 krokach ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('04_kroki_PL.webp','Wygodne wsparcie w trzech krokach — naciągnij, wyrównaj, wyreguluj'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Wygodne wsparcie w 3 krokach</h2>
      <ol class="kfx-steps">
        <li><strong>Naciągnij ortezę na kolano.</strong> Pociągnij ją do góry, aby leżała pewnie i wygodnie.</li>
        <li><strong>Wyrównaj żelową poduszkę.</strong> Umieść ją centralnie wokół rzepki.</li>
        <li><strong>Wyreguluj ucisk.</strong> Obróć pokrętło, aby ustawić wsparcie i stabilność.</li>
      </ol>
      <p>Bez skomplikowanych pasków i regulacji — gotowe w kilka sekund.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Więcej komfortu na co dzień ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Więcej komfortu na co dzień</h2>
      <p>Wielu nie chce ciężkiej ortezy sportowej. Chcą po prostu:</p>
      <ul class="kfx-check">
        <li>Pewniej chodzić</li>
        <li>Swobodniej wchodzić po schodach</li>
        <li>Dłużej stać</li>
        <li>Swobodniej się poruszać</li>
      </ul>
      <p>NORIKS KneeFix powstał, aby codzienne ruchy były przyjemniejsze — bez zbędnych ograniczeń. Elastyczny materiał lepiej dopasowuje się do twojego dnia i wspiera kolano tam, gdzie tego potrzebujesz.</p>
      <a class="kfx-cta" href="#bundle-selector">Wybierz swój rozmiar →</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('kf-pl-1.webp','KneeFix na co dzień — spacer, rower, trening'); ?></div>
  </div>
</section>

<!-- ============ 7) Polecane do codziennego wsparcia kolana ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('kf-pl-2.webp','Polecane do codziennego wsparcia kolana'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Polecane do codziennego wsparcia kolana</h2>
      <ul class="kfx-check">
        <li>Regulowane wsparcie uciskowe</li>
        <li>Stabilizuje i chroni kolano</li>
        <li>Wygodne do noszenia na co dzień</li>
      </ul>
      <p>KneeFix pomyślany jest jako codzienne wsparcie, a nie leczenie. Przy ostrym urazie lub utrzymujących się dolegliwościach skonsultuj noszenie z lekarzem.</p>
    </div>
  </div>
</section>

<!-- ============ 8) Różnicę czuć ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Różnicę czuć</h2>
      <p>Tradycyjne ortezy często rozwiązują problem, usztywniając kolano. KneeFix idzie inną drogą — wspiera ruch, zamiast go blokować.</p>
      <ul class="kfx-check">
        <li>Naturalny chód zamiast sztywności w ruchu</li>
        <li>Rozluźniona postawa zamiast niewygodnej pozycji</li>
        <li>Swoboda ruchu i komfort zamiast widocznego obciążenia kolana</li>
      </ul>
      <a class="kfx-cta" href="#bundle-selector">Zamów KneeFix</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('07_vs_PL.webp','Orteza kolana NORIKS w porównaniu z tradycyjną ortezą'); ?></div>
  </div>
</section>

<!-- ============ 9) Co mówią nasi klienci ============ -->
<section class="kfx-sec kfx-revs">
  <div class="kfx-wrap">
    <h2 class="kfx-h2 kfx-center">Co mówią nasi klienci</h2>
    <p class="kfx-sub kfx-center"><strong>Tysiące klientów już codziennie nosi NORIKS KneeFix</strong> ponieważ powstał, by celowo wspierać kolano — zamiast niepotrzebnie ograniczać ruch lub tylko na krótko maskować dolegliwości.</p>
    <div class="kfx-rev-grid">
      <?php foreach ( array(
        array( '10_review-1.jpg', 'Wreszcie pewniejszy chód', 'Wypróbowałem już kilka ortez, ale były albo zbyt sztywne, albo ciągle się zsuwały. Ta leży wyraźnie wygodniej i daje kolanu przy chodzeniu oraz na schodach o wiele więcej stabilności.', 'Damir P.' ),
        array( '11_review-3.jpg', 'Więcej pewności na schodach', 'Schody były dla mnie przez lata udręką, bo kolano wydawało się niestabilne. Odkąd noszę KneeFix, czuję się znacznie pewniej. Prawie się nie zsuwa nawet na dłuższych spacerach.', 'Sanja M.' ),
        array( '12_review-6.jpg', 'Przyjemne na co dzień', 'Noszę ją w pracy i nie sądziłam, że będzie tak wygodna. Materiał jest elastyczny, ucisk łatwo wyregulować, a pod spodniami prawie jej nie widać.', 'Vesna N.' ),
      ) as $rv ) : ?>
        <article class="kfx-rev">
          <div class="kfx-rev-img"><?php echo $kf_img( $rv[0], 'Klient nosi ortezę NORIKS KneeFix' ); ?></div>
          <div class="kfx-rev-body">
            <div class="kfx-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
            <p class="kfx-rev-title"><?php echo esc_html( $rv[1] ); ?></p>
            <p class="kfx-rev-text"><?php echo esc_html( $rv[2] ); ?></p>
            <p class="kfx-rev-name"><?php echo esc_html( $rv[3] ); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .kfx-sec { padding: 48px 0; }
  .kfx-alt { background: #f5f6f7; }
  .kfx-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .kfx-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .kfx-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .kfx-center { text-align: center; }
  .kfx-copy p, .kfx-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .kfx-sub { max-width: 820px; margin: 0 auto 26px; }
  .kfx-lead { font-weight: 700; color: #141414; }
  .kfx-strong { font-weight: 700; color: #141414; }
  .kfx-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  .kfx-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .kfx-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .kfx-list { margin: 0 0 16px; padding-left: 20px; }
  .kfx-list li { font-size: 16px; line-height: 1.6; color: #3a3a3a; margin: 0 0 6px; }
  .kfx-inline-list { list-style: none; display: flex; flex-wrap: wrap; gap: 8px 10px; margin: 0 0 16px; padding: 0; }
  .kfx-inline-list li { background: #fff; border: 1px solid #e4e4e4; border-radius: 999px; padding: 8px 16px; font-size: 14px; color: #141414; }
  .kfx-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .kfx-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .kfx-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .kfx-steps { list-style: none; counter-reset: kfxstep; margin: 0 0 16px; padding: 0; }
  .kfx-steps li { counter-increment: kfxstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .kfx-steps li:before { content: counter(kfxstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .kfx-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .kfx-cta:hover { background: #E8450E; color: #fff; }

  /* 9) recenzije s fotografijama kupaca */
  .kfx-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .kfx-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 14px; overflow: hidden; }
  .kfx-rev-img img { width: 100%; height: 100%; aspect-ratio: 3/4; object-fit: cover; display: block; border-radius: 0; }
  .kfx-rev-body { padding: 16px 18px 18px; text-align: center; }
  .kfx-stars { color: #f5a623; font-size: 15px; letter-spacing: 1px; }
  .kfx-rev-title { font-weight: 700; color: #141414; font-size: 15px; margin: 8px 0 8px; }
  .kfx-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 12px; }
  .kfx-rev-name { font-size: 13px; font-style: italic; font-weight: 700; color: #6b6b6b; margin: 0; padding-top: 10px; border-top: 1px solid #ededed; }

  @media (max-width: 820px) {
    .kfx-sec { padding: 30px 0; }
    .kfx-row2 { grid-template-columns: 1fr; gap: 20px; }
    .kfx-row2 .kfx-media { order: -1; }
    .kfx-h2 { font-size: 2rem; }
    .kfx-rev-grid { grid-template-columns: 1fr; }
    .kfx-rev-img img { aspect-ratio: 4/3; }
  }

  /* Nema "Tablica veličina" linka na KneeFixu (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): sakrij standardne točke (•), ostaje samo ✅
     iz teksta; razmak između "Prednosti:" i liste te ispod liste.
     (Ovaj se predložak učitava samo na orto-kneefix stranicama.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
      line-height: 1.55;
      margin-bottom: 6px;
  }
  /* razmak iznad "Prednosti:" (paragraf neposredno prije liste) */
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.kfx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
