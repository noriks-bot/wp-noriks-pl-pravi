<?php
/**
 * product-bottom: KOREKTOR HALUKSA (bunion / halux valgus)
 *
 * Dedicated bottom-nicer for the NORIKS bunion corrector.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('bunion').
 *
 * Media w motywie (git), relatywnie przez get_template_directory_uri():
 *   img/bunion-videos/section-1.mp4, funkcionira.mp4, step-1..3.mp4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bun_vid_dir = get_template_directory_uri() . '/img/bunion-videos/';
$bun_video_1 = $bun_vid_dir . 'section-1.mp4'; // 1) One foot away
$bun_video_2 = $bun_vid_dir . 'funkcionira.mp4'; // 2) Jak to działa

$bun_img_features = get_template_directory_uri() . '/img/bunion/why-2026.webp';

// Prawdziwe efekty — procenty
$bun_results = array(
    array( 'pct' => 91, 'text' => 'użytkowników zgłosiło zmniejszenie bólu związanego z haluksem już od 2. sesji' ),
    array( 'pct' => 90, 'text' => 'użytkowników całkowicie pozbyło się bólu związanego z haluksem już po 14 dniach regularnego stosowania (30 min/dzień)' ),
    array( 'pct' => 88, 'text' => 'użytkowników zauważyło widoczną poprawę ustawienia palców już po 30 dniach regularnego stosowania (30 min/dzień)' ),
);

// Dlaczego wybrać nas — porównanie (ten sam styl co knc-table na skarpetach z zamkiem)
$bun_cmp = array(
    '30-dniowa gwarancja zwrotu pieniędzy',
    'Łagodzi dyskomfort',
    'Zapobiega powiększaniu się haluksa',
    'Z czasem poprawia stan haluksa',
    'Elastyczna konstrukcja — możesz w nim chodzić',
    'Wytrzymały i trwały',
);

// Jak stosować — 3 kroki (wideo + opis)
$bun_steps = array(
    array( 'video' => $bun_vid_dir . 'step-1.mp4', 'caption' => 'Załóż korektor NORIKS na paluch i stopę' ),
    array( 'video' => $bun_vid_dir . 'step-2.mp4', 'caption' => 'Ustaw intensywność rozciągania według potrzeb' ),
    array( 'video' => $bun_vid_dir . 'step-3.mp4', 'caption' => 'Zrelaksuj się i pozwól korektorowi NORIKS wykonać swoją pracę' ),
);
?>

<!-- ============ 1) Le korak ste oddaljeni… ============ -->
<section class="bun-why bun-intro">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_1 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Dzieli Cię tylko krok od uwolnienia się od <span class="bun-hl">dyskomfortu związanego z haluksem</span>, opuchniętych palców i bólu stóp…</h2>
      <p>Jeśli to czytasz, istnieje duża szansa, że cierpisz z powodu uporczywego <strong class="bun-red">dyskomfortu związanego z haluksem</strong>.</p>
      <p>Rezultat? Ból i dyskomfort wpływają na Twoje codzienne czynności.</p>
      <p>Nieleczone mogą się pogłębiać. Palce nachodzą na siebie, mogą pojawić się palce młotkowate i narośla kostne.</p>
      <p>Haluks to <strong class="bun-red">postępujący problem</strong> i nie zniknie sam z siebie.</p>
      <p>Z czasem może prowadzić do poważniejszych problemów, takich jak <u>inwazyjna operacja, problemy z biodrami, kolanami i dolną częścią pleców, a nawet ograniczenie ruchomości</u>.</p>
      <p>Dzięki klinicznie potwierdzonej zaawansowanej terapii korekcji oraz opatentowanemu mechanizmowi przegubowemu <strong>korektor haluksa NORIKS</strong> skutecznie łagodzi dyskomfort w dotkniętej części stopy i przywraca jej zdrowie już przy 30 minutach dziennego stosowania.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>91% użytkowników zgłosiło <strong>zmniejszenie bólu stóp</strong> już w pierwszym tygodniu</em></p>
    </div>
  </div>
</section>

<!-- ============ 2) Kako deluje? ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row bun-reverse">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_2 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Jak to działa?</h2>
      <p><strong>Korektor haluksa NORIKS</strong> wykorzystuje zaawansowaną terapię korekcji. Został zaprojektowany tak, aby <strong class="bun-red">wspierać ponowne ustawienie</strong> palucha i stopniowo łagodzić stan zapalny dzięki mocnemu, opatentowanemu mechanizmowi przegubowemu.</p>
      <p>Pomaga rozluźnić napięcie mięśniowe, delikatnie przywracając paluch do jego naturalnego położenia, co z czasem prowadzi do bezbolesnego, naturalnego ustawienia stawu palucha.</p>
      <p>W ten sposób uwalnia się latami nagromadzone napięcie, wybrzuszenie się koryguje i zmniejsza, ból ustępuje, a dalszy wzrost zostaje zatrzymany — abyś znów stanął na nogi, prosto i pewnie.</p>
      <p>Niektórzy użytkownicy mogą potrzebować jednej lub dwóch sesji, aby się przyzwyczaić, ponieważ <strong class="bun-red">odczucie może być wyraźniejsze</strong> w porównaniu z innymi metodami.</p>
      <p>To naturalny i nieinwazyjny sposób na przywrócenie naturalnego ułożenia palucha i stopy oraz naprawę szkód spowodowanych przez nieodpowiednie obuwie lub genetykę.</p>
      <p>Niezależnie od tego, czy chodzi o małą stopę dziecka, czy dużą stopę osoby dorosłej, <u>korektor został wykonany tak, aby wygodnie dopasować się do każdego rozmiaru stopy</u>.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>87% użytkowników zgłosiło <strong>widoczną poprawę</strong> już w pierwszym miesiącu</em></p>
    </div>
  </div>
</section>

<!-- ============ 3) Kako se uporablja (sivo, 3 koraki) ============ -->
<section class="bun-why bun-howto">
  <div class="bun-wrap">
    <h2 class="bun-howto-title">Jak stosować</h2>
    <div class="bun-howto-intro">
      <p>Zalecamy rozpoczęcie od 30 minut dziennie i stopniowe wydłużanie sesji do 1–3 godzin.</p>
      <p>Gdy poczujesz się komfortowo, możesz zacząć nosić go także podczas snu każdej nocy.</p>
      <p>Najlepiej sprawdza się podczas odpoczynku — gdy leżysz na kanapie, oglądasz TV, czytasz lub śpisz.</p>
      <p>Jednak w przeciwieństwie do innych produktów na rynku możesz się też swobodnie poruszać, ponieważ korektor NORIKS nie ogranicza ruchów dzięki swojej elastycznej konstrukcji.</p>
    </div>
    <div class="bun-steps-grid">
      <?php $bun_n = 0; foreach ( $bun_steps as $bun_step ) : $bun_n++; ?>
        <div class="bun-step">
          <div class="bun-step-media">
            <video src="<?php echo esc_url( $bun_step['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="bun-step-num"><?php echo (int) $bun_n; ?></div>
          <p class="bun-step-caption"><?php echo esc_html( $bun_step['caption'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) 8 razlogov, zakaj ga boste vzljubili ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">8 powodów, dla których go pokochasz</h2>
      <ul class="bun-reasons">
        <li><strong>Ulga w dyskomforcie</strong> podczas chodzenia, ćwiczeń, stania i snu</li>
        <li><strong>Zapobiega</strong> dalszemu powiększaniu się haluksa</li>
        <li><strong>Nieoperacyjna opcja</strong> przynosząca ulgę</li>
        <li>Solidna korekcja stawu, która <strong>naprawdę poprawia Twój stan</strong></li>
        <li><strong>Regulowana</strong> intensywność rozciągania</li>
        <li>Zaprojektowany i polecany przez <strong>specjalistów medycznych</strong></li>
        <li><strong>Prosty w użyciu</strong> i przenośny</li>
        <li><strong>30-dniowa gwarancja zwrotu pieniędzy</strong> („efekty albo pełny zwrot”), ponieważ jesteśmy tak pewni naszego produktu i wiemy, że Ci pomoże</li>
      </ul>
    </div>
    <div class="bun-col bun-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img_features ); ?>" alt="Dlaczego korektor haluksa NORIKS jest inny" />
    </div>
  </div>
</section>

<!-- ============ 5) Pravi rezultati, pravi ljudje ============ -->
<section class="bun-why bun-results-sec">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Prawdziwe <span class="bun-hl">efekty</span>, prawdziwi ludzie</h2>
      <p>Przeprowadziliśmy test konsumencki, w ramach którego wysłaliśmy korektor haluksa NORIKS do ponad <strong>37 gabinetów podologicznych</strong>. Łącznie przetestowało go <strong>432 pacjentów</strong> z haluksem. Oto wyniki.</p>
    </div>
    <div class="bun-col">
      <div class="bun-results">
        <?php foreach ( $bun_results as $bun_r ) : $bun_dash = round( $bun_r['pct'] * 1.6336, 1 ); ?>
          <div class="bun-result">
            <svg class="bun-ring" viewBox="0 0 60 60" aria-hidden="true">
              <circle cx="30" cy="30" r="26" fill="none" stroke="#dfe6ee" stroke-width="5"/>
              <circle cx="30" cy="30" r="26" fill="none" stroke="#1a86d0" stroke-width="5" stroke-linecap="round"
                      stroke-dasharray="<?php echo esc_attr( $bun_dash ); ?> 163.4" transform="rotate(-90 30 30)"/>
              <text x="30" y="34" text-anchor="middle" class="bun-ring-txt"><?php echo (int) $bun_r['pct']; ?>%</text>
            </svg>
            <p class="bun-result-text"><?php echo esc_html( $bun_r['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) Zakaj izbrati nas? (primerjalna tabela, knc stil) ============ -->
<section class="bun-cmp-section">
  <div class="bun-cmp-wrap">
    <h2 class="bun-cmp-title">Dlaczego warto wybrać nas?</h2>
    <p class="bun-cmp-lead">Nie daj się nabrać na <span class="bun-hl">TANIE imitacje</span></p>
    <p class="bun-cmp-sub">Jak <strong>korektor haluksa NORIKS</strong> wypada na tle innych:</p>
    <div class="bun-cmp-scroll">
      <table class="bun-cmp-table">
        <thead>
          <tr>
            <th></th>
            <th class="bun-us">NORIKS</th>
            <th class="bun-comp">Inne korektory</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $bun_cmp as $bun_row ) : ?>
            <tr>
              <td><?php echo esc_html( $bun_row ); ?></td>
              <td class="us ok">✓</td>
              <td class="no">✕</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
  /* Ni "Tabela velikosti" povezave na korektorju haluksa (ne plugin ne globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): skrij standardne pike (•), ostane samo ✅;
     razmik nad "Prednosti:" in več prostora pod seznamom.
     (Ta predloga se naloži samo na orto-bunion straneh.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
  }
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }

  .bun-why { padding: 44px 0; }
  .bun-why.bun-intro { background: #fbf9f4; }
  .bun-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .bun-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .bun-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-title { font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .bun-hl { color: #1a86d0; }
  .bun-red { color: #e0563f; }
  .bun-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 12px; }
  .bun-stat { display: flex; align-items: flex-start; gap: 8px; margin-top: 6px !important; }
  .bun-check { color: #1a86d0; font-weight: 800; }
  .bun-stat em { font-style: italic; color: #333; }

  /* section 2: media on the right */
  .bun-reverse .bun-media { order: 2; }
  .bun-reverse .bun-copy { order: 1; }

  /* 3) Kako se uporablja (sivo ozadje) */
  .bun-why.bun-howto { background: #f0f2f5; }
  .bun-howto-title { text-align: center; font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; margin: 0 0 18px; }
  .bun-howto-intro { max-width: 820px; margin: 0 auto 34px; text-align: center; }
  .bun-howto-intro p { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 12px; }
  .bun-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .bun-step { text-align: center; }
  .bun-step-media { width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #e6e9ee; }
  .bun-step-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .bun-step-num { font-size: 22px; font-weight: 800; color: #1c1c1c; margin: 14px 0 6px; }
  .bun-step-caption { font-size: 15px; line-height: 1.5; color: #333; margin: 0 8px; }

  /* 4) 8 razlogov */
  .bun-media img { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-reasons { list-style: none; margin: 0; padding: 0; }
  .bun-reasons li { position: relative; padding: 0 0 16px 34px; font-size: 15.5px; line-height: 1.5; color: #333; }
  .bun-reasons li:before {
      content: ""; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%;
      background: #1a86d0 url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6 12.5l4 4 8-8' fill='none' stroke='white' stroke-width='2.6' stroke-linecap='round' stroke-linejoin='round'/></svg>") center/15px no-repeat;
  }

  /* 5) Pravi rezultati */
  .bun-results { display: flex; flex-direction: column; gap: 18px; }
  .bun-result { display: flex; align-items: center; gap: 16px; border-bottom: 1px solid #e6e6e6; padding-bottom: 16px; }
  .bun-result:last-child { border-bottom: 0; padding-bottom: 0; }
  .bun-ring { width: 70px; height: 70px; flex: 0 0 70px; }
  .bun-ring-txt { font-size: 16px; font-weight: 800; fill: #1a86d0; }
  .bun-result-text { font-size: 14.5px; line-height: 1.5; color: #333; margin: 0; }

  /* 6) Zakaj izbrati nas — primerjalna tabela (isti stil kot knc-table) */
  .bun-cmp-section { background:#fff; padding:44px 0; }
  .bun-cmp-wrap { max-width:940px; margin:0 auto; padding:0 16px; }
  .bun-cmp-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:800; color:#111; margin:0 0 8px; }
  .bun-cmp-lead { text-align:center; font-size:18px; font-weight:800; color:#111; margin:0 0 6px; }
  .bun-cmp-sub { text-align:center; font-size:14px; color:#444; margin:0 0 24px; }
  .bun-cmp-scroll { border-radius:16px; overflow:hidden; box-shadow:0 12px 34px rgba(18,48,90,.12); border:1px solid #edf0f4; }
  .bun-cmp-table { width:100%; border-collapse:collapse; table-layout:fixed; margin:0 !important; }
  .bun-cmp-table th, .bun-cmp-table td { padding:15px 12px; text-align:center; font-size:15px; }
  .bun-cmp-table thead th { color:#fff; font-weight:700; vertical-align:middle; font-size:14px; }
  .bun-cmp-table thead th:first-child { width:52%; background:#fff; }
  .bun-cmp-table .bun-comp { background:#767676; }
  .bun-cmp-table .bun-us { background:#111; }
  .bun-cmp-table tbody td:first-child { text-align:left; font-weight:600; color:#111; font-size:14px; line-height:1.3; padding-left:18px; }
  .bun-cmp-table tbody tr { border-bottom:1px solid #eef0f4; }
  .bun-cmp-table tbody tr:nth-child(even) { background:#fafbfc; }
  .bun-cmp-table td.ok { color:#1a9e5f; font-size:19px; font-weight:700; }
  .bun-cmp-table td.no { color:#d64545; font-size:18px; font-weight:700; }
  .bun-cmp-table td.us { background:#f3f3f3 !important; }
  .bun-cmp-table td.us.ok { color:#1a9e5f; }
  @media (max-width:600px) {
    .bun-cmp-table th, .bun-cmp-table td { padding:12px 6px; font-size:13px; }
    .bun-cmp-table thead th { font-size:12px; }
    .bun-cmp-table tbody td:first-child { font-size:12px; padding-left:10px; }
  }

  @media (max-width: 820px) {
    .bun-row { grid-template-columns: 1fr; gap: 22px; }
    .bun-reverse .bun-media { order: 0; }
    .bun-reverse .bun-copy { order: 0; }
    .bun-steps-grid { grid-template-columns: 1fr; gap: 18px; }
  }
</style>
