<?php
/**
 * product-bottom: NORIKS FIT Woman — oblikujuca majica s 3D linijama (orto-kompwom).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno.
 * Recenzije su preslikane s originala (leonieandco): bordo pas + vodoravni klizac.
 *   1) Zagladen trbuh (lijevo)     5) Tkanina i kroj (desno)
 *   2) Mi vs drugi (desno)         6) Kako je nositi (lijevo)
 *   3) RECENZIJE — klizac          7) Boje (desno)
 *   4) Osjecajte se sigurno (lijevo)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kw      = get_template_directory_uri() . '/img/kompwom/';
$kw_path = get_template_directory() . '/img/kompwom/';
$kw_img  = function( $file, $alt, $cls = '' ) use ( $kw, $kw_path ) {
  if ( ! file_exists( $kw_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $kw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZAGLAĐEN TRBUH — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-trbuh.jpg', 'Wygładzony brzuch w koszulce NORIKS FIT Woman' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Od razu, od pierwszej minuty</p>
      <h2 class="nkw-h2">Wygładzony brzuch <em>bez ściskania</em></h2>
      <p>Nasze linie 3D modelują ciało tak, że delikatnie obejmują okolice brzucha i bioder i pobudzają krążenie — bez pasa, który się wrzyna, i bez poczucia ściśnięcia.</p>
      <p>Bez koszulki brzuch jest wiotki, a fałdy widać pod ubraniem. Z nią brzuch jest od razu gładki, a postawa bardziej wyprostowana.</p>
      <ul class="nkw-check">
        <li>Od razu wygładzony brzuch</li>
        <li>Wyprostowana postawa bez myślenia</li>
        <li>Niewidoczna pod ubraniem</li>
      </ul>
      <a class="nkw-cta" href="#bundle-selector">Wybierz kolor i rozmiar</a>
    </div>
  </div>
</section>

<!-- 2) MI VS DRUGI — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Różnica</p>
      <h2 class="nkw-h2">Dlaczego zwykła kompresja nie działa</h2>
      <p>Klasyczne koszulki modelujące uciskają w jednej linii. Efekt to wybrzuszenie nad brzegiem, fałdy na ramionach i brzeg widoczny pod ubraniem.</p>
      <p>U nas splot jest <strong>wpleciony w tkaninę</strong> i rozłożony na szerokość, więc nacisk się rozkłada zamiast zbierać w jednym miejscu.</p>
      <ul class="nkw-vs">
        <li class="is-yes">Technologia 3D wpleciona w dzianinę</li>
        <li class="is-yes">Delikatna kompresja 360° bez wybrzuszeń</li>
        <li class="is-yes">Podpiera dolną część pleców</li>
        <li class="is-no">Zwykła kompresja, która tworzy wybrzuszenia</li>
        <li class="is-no">Materiał roluje się w ciągu dnia</li>
        <li class="is-no">Brzeg widoczny pod ubraniem</li>
      </ul>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-usporedba.jpg', 'NORIKS FIT Woman w porównaniu ze zwykłą koszulką modelującą' ); ?></div>
  </div>
</section>

<!-- 3) OSJEĆAJTE SE SIGURNO — slika lijevo -->
<section class="nkw-rev">
  <div class="nkw-rev__head">
    <span class="nkw-rev__badge">★★★★★ Doskonale · Ocena 4,9/5</span>
    <h2 class="nkw-rev__title">Opinie kobiet takich jak Ty</h2>
  </div>
  <div class="nkw-rev__track">
    <?php
    $kw_reviews = array(
      array( 'img' => 'kwm-ugc-1.jpg', 'name' => 'Karolina B.', 'meta' => 'Rozmiar M · 46 · Warszawa', 'worn' => 'Nosi 7 tygodni',
             'text' => '„Koszule leżą na mnie płasko, z przodu i z tyłu. Te, które próbowałam wcześniej, nie wytrzymały nawet całego dnia.”' ),
      array( 'img' => 'kwm-ugc-2.jpg', 'name' => 'Daniela P.', 'meta' => 'Rozmiar 2XL · 48 · Kraków', 'worn' => 'Nosi 5 tygodni',
             'text' => '„Pierwsza koszulka modelująca, która mi się nie roluje do góry. Brzeg trzyma, a tkanina jest wystarczająco cienka na lato.”' ),
      array( 'img' => 'kwm-ugc-3.jpg', 'name' => 'Hanna T.', 'meta' => 'Rozmiar 3XL · 51 · Gdańsk', 'worn' => 'Nosi 6 tygodni',
             'text' => '„Kupiłam ją na wesele, a teraz noszę do pracy. Siedzenie już nie zmienia tego, jak układa się sukienka.”' ),
      array( 'img' => 'kwm-ugc-4.jpg', 'name' => 'Laura D.', 'meta' => 'Rozmiar M · 43 · Wrocław', 'worn' => 'Nosi 8 tygodni',
             'text' => '„Zakładam ją po śniadaniu i zapominam, że ją mam. Do południa w ogóle jej nie zauważam.”' ),
      array( 'img' => 'kwm-ugc-5.jpg', 'name' => 'Natalia A.', 'meta' => 'Rozmiar 2XL · 37 · Poznań', 'worn' => 'Nosi 9 tygodni',
             'text' => '„Nigdy dobrze nie wyglądałam, gdy wkładałam koszulkę w spodnie. Z tą pod spodem talia wydaje się węższa i nie poprawiam się cały dzień.”' ),
      array( 'img' => 'kwm-ugc-6.jpg', 'name' => 'Nikola M.', 'meta' => 'Rozmiar L · 48 · Katowice', 'worn' => 'Nosi 4 tygodnie',
             'text' => '„Zamówiłam ją do jednej stylizacji, a wylądowała pod większością swetrów. Dzianina wygląda gładko, a nie pomarszczona w talii.”' ),
      array( 'img' => 'kwm-ugc-7.jpg', 'name' => 'Petra J.', 'meta' => 'Rozmiar XL · 50 · Łódź', 'worn' => 'Nosi 6 tygodni',
             'text' => '„Siedzę przy biurku dziewięć godzin dziennie i pozostaje wygodna. Nie ma szwów, które czuć, a bluzka z tyłu zostaje gładka.”' ),
      array( 'img' => 'kwm-ugc-8.jpg', 'name' => 'Zofia K.', 'meta' => 'Rozmiar M · 45 · Lublin', 'worn' => 'Nosi 10 tygodni',
             'text' => '„Plecy mi dziękują. Koszulka delikatnie przypomina, żeby się wyprostować, a przy tym nigdzie nie uciska.”' ),
    );
    foreach ( $kw_reviews as $r ) : ?>
    <article class="nkw-rev__card">
      <div class="nkw-rev__img"><?php echo $kw_img( $r['img'], 'Kupka u NORIKS FIT Woman majici' ); ?></div>
      <div class="nkw-rev__body">
        <div class="nkw-rev__top">
          <div>
            <p class="nkw-rev__name"><?php echo esc_html( $r['name'] ); ?>
              <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#3aa06a"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nkw-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
          </div>
          <span class="nkw-rev__worn"><?php echo esc_html( $r['worn'] ); ?></span>
        </div>
        <p class="nkw-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <p class="nkw-rev__hint">Przesuń w bok, aby zobaczyć więcej opinii →</p>
</section>

<!-- 7) BOJE — slika desno -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-drzanje.jpg', 'Węższa talia i wyprostowana postawa' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Trzy rzeczy naraz</p>
      <h2 class="nkw-h2">Poczuj się <em>pewnie we własnej skórze</em></h2>
      <div class="nkw-points">
        <div class="nkw-point"><h3>Węższa talia</h3><p>Linie 3D modelują talię i wygładzają wybrzuszenia nad spodniami albo spódnicą.</p></div>
        <div class="nkw-point"><h3>Od razu płaski brzuch</h3><p>Delikatna kompresja trzyma brzuch pod każdym ubraniem, bez nacisku w jednym punkcie.</p></div>
        <div class="nkw-point"><h3>Wyprostowana postawa</h3><p>Podparcie na plecach pomaga stać prosto i odciąża dolną część pleców.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) TKANINA I KROJ — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Tkanina i krój</p>
      <h2 class="nkw-h2">Splot jest <em>wpleciony</em>, a nie nadrukowany</h2>
      <p>Szeroki pas przechodzi przez brzuch i biodra, drugi idzie przez plecy. Dlatego nic nie pęka i nic się nie łuszczy.</p>
      <div class="nkw-facts">
        <div><h3>Linie 3D</h3><p>Strukturalne, wplecione w dzianinę — nie znikają z czasem.</p></div>
        <div><h3>Pas na plecach</h3><p>Drugi pas przechodzi przez plecy i wspiera wyprostowaną postawę.</p></div>
        <div><h3>Rękawy</h3><p>Przylegający krój, który się nie roluje i nie podciąga.</p></div>
        <div><h3>Materiał</h3><p>Cienki, matowy i przewiewny — znika pod koszulą albo marynarką.</p></div>
      </div>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-detalji.jpg', 'Szczegóły: linie 3D, pas, rękawy, materiał' ); ?></div>
  </div>
</section>

<!-- 5) KAKO JE NOSITI — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-siva.jpg', 'NORIKS FIT Woman ciemnoszara' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Jak ją nosić</p>
      <h2 class="nkw-h2">Załóż rano i zapomnij o niej do wieczora</h2>
      <p>Musisz normalnie oddychać i jeść, nie myśląc o koszulce. Jeśli ślad na skórze widać dwadzieścia minut po zdjęciu, rozmiar jest za mały.</p>
      <ul class="nkw-check">
        <li><strong>Cały dzień</strong> — kompresja jest rozłożona, więc nic się nie wrzyna</li>
        <li><strong>Pod wszystko</strong> — bez linii i bez brzegu pod ubraniem</li>
        <li><strong>Prosta pielęgnacja</strong> — pranie w pralce w 30 °C</li>
      </ul>
      <p class="nkw-note nkw-note--left">Rozmiar dobieraj według obwodu biustu. Jeśli jesteś między dwoma, weź większy.</p>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE (postavitev z originala — bordo pas z drsnikom) -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Trzy kolory</p>
      <h2 class="nkw-h2">Czarny, ciemnoszary i <em>różowy</em></h2>
      <p>Czarny pod wszystko, ciemnoszary na co dzień, różowy, gdy chcesz czegoś cieplejszego. Wszystkie trzy mają tę samą dzianinę i ten sam splot.</p>
      <p>Kolor i rozmiar wybierasz na tej stronie, przed dodaniem do koszyka.</p>
      <a class="nkw-cta" href="#bundle-selector">Wybierz kolor i rozmiar</a>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-roza.jpg', 'NORIKS FIT Woman różowa' ); ?></div>
  </div>
</section>

<style>
.nkw-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #241c22; }
.nkw-sec * { box-sizing: border-box; }
.nkw-tint { background: #fbf3f4; }
.nkw-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nkw-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a8536b; margin: 0 0 10px; }
.nkw-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #241c22; }
.nkw-h2 em { font-style: italic; font-weight: 800; color: #a8536b; }
.nkw-copy p { font-size: 16px; line-height: 1.7; color: #56494f; margin: 0 0 14px; }
.nkw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nkw-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(36,28,34,.05), 0 14px 40px rgba(36,28,34,.10); }
.nkw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nkw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nkw-check li::before { content: "\2713"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nkw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; }
.nkw-vs li::before { position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nkw-vs .is-no { color: #8b7b83; }
.nkw-vs .is-no::before { content: "\2715"; background: #ece0e4; color: #a8949c; }
.nkw-points { display: flex; flex-direction: column; gap: 20px; }
.nkw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a8536b; }
.nkw-point p { font-size: 15.5px; color: #56494f; line-height: 1.6; margin: 0; }
.nkw-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 22px 26px; margin-top: 6px; }
.nkw-facts h3 { font-size: 16px; font-weight: 800; margin: 0 0 6px; color: #241c22; }
.nkw-facts p { font-size: 14.5px; color: #6b5f66; line-height: 1.6; margin: 0; }
.nkw-note { font-size: 13.5px; color: #8b7b83; font-style: italic; margin: 20px 0 0; }
.nkw-note--left { text-align: left; }
.nkw-cta { display: inline-block; background: #241c22; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nkw-cta:hover { background: #a8536b; color: #fff !important; }

/* ── recenzije: bordo pas + vodoravni klizac (kot na originalu) ────── */
.nkw-rev { background: #5c2331; padding: 62px 0 54px; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; }
.nkw-rev * { box-sizing: border-box; }
.nkw-rev__head { max-width: 1240px; margin: 0 auto 30px; padding: 0 24px; text-align: center; }
.nkw-rev__badge { display: inline-block; border: 1px solid rgba(255,255,255,.45); border-radius: 100px; padding: 8px 18px; font-size: 12.5px; font-weight: 700; letter-spacing: .04em; color: #fff; }
.nkw-rev__title { font-family: Georgia, 'Times New Roman', serif; font-size: clamp(27px, 3.4vw, 40px); font-weight: 400; color: #fff; margin: 16px 0 0; line-height: 1.2; }
.nkw-rev__track { display: flex; gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch;
  padding: 4px 24px 18px; margin: 0 auto; max-width: 1240px; scrollbar-width: thin; scrollbar-color: rgba(255,255,255,.4) transparent; }
.nkw-rev__track::-webkit-scrollbar { height: 6px; }
.nkw-rev__track::-webkit-scrollbar-track { background: rgba(255,255,255,.12); border-radius: 100px; }
.nkw-rev__track::-webkit-scrollbar-thumb { background: rgba(255,255,255,.45); border-radius: 100px; }
.nkw-rev__card { flex: 0 0 310px; width: 310px; scroll-snap-align: start; background: #fff; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nkw-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
.nkw-rev__body { padding: 16px 18px 20px; }
.nkw-rev__top { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; }
.nkw-rev__name { display: flex; align-items: center; gap: 6px; font-size: 15px; font-weight: 800; color: #241c22; margin: 0; }
.nkw-rev__name svg { flex: 0 0 15px; }
.nkw-rev__meta { font-size: 12.5px; color: #7b6d73; margin: 3px 0 0; }
.nkw-rev__worn { flex: 0 0 auto; background: #f3eaed; color: #5c2331; font-size: 10.5px; font-weight: 800; letter-spacing: .04em; text-transform: uppercase; padding: 5px 9px; border-radius: 100px; white-space: nowrap; }
.nkw-rev__text { font-size: 14.5px; line-height: 1.6; color: #46393f; margin: 13px 0 0; }
.nkw-rev__hint { text-align: center; font-size: 12.5px; color: rgba(255,255,255,.6); margin: 8px 0 0; }

@media (max-width: 980px) {
  .nkw-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nkw-row2--rev .nkw-media { order: -1; }
  .nkw-facts { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .nkw-sec { padding: 44px 0; }
  .nkw-wrap { padding: 0 16px; }
  .nkw-facts { grid-template-columns: 1fr; gap: 16px; }
  .nkw-cta { width: 100%; text-align: center; }
  .nkw-rev { padding: 46px 0 40px; }
  .nkw-rev__head { padding: 0 16px; }
  .nkw-rev__track { padding: 4px 16px 16px; gap: 14px; }
  .nkw-rev__card { flex: 0 0 300px; width: 300px; }
}

/* ── kratek opis izdelka: kljukice namesto pik ─────────────────────── */
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
.woocommerce-product-details__short-description .nsg-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
