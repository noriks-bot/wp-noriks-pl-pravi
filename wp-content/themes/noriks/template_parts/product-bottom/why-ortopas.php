<?php
/**
 * product-bottom: ORTOPEDYCZNY PAS NA PLECY (ortopas)
 *
 * Dedicated bottom-nicer for the NORIKS orthopedic back belt.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('ortopas').
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ------------------------------------------------------------------
 * MEDIA wg sekcji.
 * Wideo 2, 3, 4, 6 są w motywie (git) — /img/ortopas-videos/.
 * TODO: obraz 1 (kolaż) i 5 (wskazania) to na razie wersje HR —
 *       potrzebne obrazy PL (polskie).
 * ------------------------------------------------------------------ */
$opz_vid_dir      = get_template_directory_uri() . '/img/ortopas-videos/';
$opz_img_collage  = 'https://noriks.com/hr/wp-content/uploads/2026/07/ortopas-hr-9.png'; // 1) zadowoleni klienci (obraz) — TODO PL image
$opz_video_relief = $opz_vid_dir . 'relief.mp4';                                          // 2) naturalna ulga (wideo)
$opz_video_cause  = $opz_vid_dir . 'cause.mp4';                                           // 3) prawdziwa przyczyna (wideo)
$opz_img_indik    = get_template_directory_uri() . '/img/ortopas/ortopas-indikacije.png'; // lokalizirana grafika indikacij // lokalizirana grafika indikacij // 5) jak działa (obraz) — TODO PL image
$opz_video_feat   = $opz_vid_dir . 'features.mp4';                                        // 6) innowacyjne cechy (wideo)

/* Karty (okrągłe wideo) — 4) sekcja z 3 kartami */
$opz_cards = array(
    array(
        'video' => $opz_vid_dir . 'card-1.mp4',
        'title' => 'Łagodzi dolegliwości',
        'text'  => 'Może zapewnić szybką ulgę przy rwie kulszowej i bólu pleców',
    ),
    array(
        'video' => $opz_vid_dir . 'card-2.mp4',
        'title' => 'Odciążenie odcinka lędźwiowego',
        'text'  => 'Stabilizuje i prostuje dolną część pleców',
    ),
    array(
        'video' => $opz_vid_dir . 'card-3.mp4',
        'title' => 'Sprawdzona metoda',
        'text'  => 'Oparta na celowanej technologii kompresyjnej',
    ),
);

/* Tabela porównawcza — 7) sekcja. array( nazwa, NORIKS(bool), Fizjo(bool) ) */
$opz_cmp_rows = array(
    array( 'Ulga w bólu',                    true,  true  ),
    array( 'Długotrwały efekt',              true,  false ),
    array( 'Przystępna cena',                true,  false ),
    array( 'Natychmiastowe odprężenie',      true,  false ),
    array( 'Bez czekania',                   true,  false ),
    array( '30-dniowa gwarancja zwrotu pieniędzy', true, false ),
    array( 'Koszty długoterminowe',          false, true  ),
);
/* Opinie ze zdjęciem — 8) sekcja */
$opz_reviews = array(
    array(
        'img'   => get_template_directory_uri() . '/img/ortopas-reviews/review-1.webp',
        'title' => 'Duża pomoc przy bólu dolnej części pleców',
        'text'  => 'Pas NORIKS naprawdę bardzo ułatwił mi życie. Działa dokładnie tak, jak obiecuje. Znów mogę się schylać bez bólu.',
        'name'  => 'Elżbieta M.',
    ),
    array(
        'img'   => get_template_directory_uri() . '/img/ortopas-reviews/review-2.jpg',
        'title' => 'Miękki i wygodny',
        'text'  => 'Mój fizjoterapeuta polecił mi pas na ból pleców. Wcześniej wypróbowałem też inne pasy, ale ten jest znacznie wygodniejszy przy siedzeniu i schylaniu się. Mimo to zapewnia doskonałe podparcie!',
        'name'  => 'Julia W.',
    ),
    array(
        'img'   => get_template_directory_uri() . '/img/ortopas-reviews/review-3.webp',
        'title' => 'Rewelacja!',
        'text'  => 'Pomaga mi siedzieć prosto i mam wrażenie, że chodzę bardziej wyprostowany. Bóle znacznie się zmniejszyły i wreszcie mogę wstać bez bólu nawet po dłuższym siedzeniu. Noszę pas około 2–3 godzin dziennie – głównie w pracy.',
        'name'  => 'Jan D.',
    ),
);

$opz_yes = '<svg class="opz-yes" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M5 12.5l4 4 10-10" fill="none" stroke="#22a45d" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$opz_no  = '<svg class="opz-no" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M7 7l10 10M17 7L7 17" fill="none" stroke="#dc3545" stroke-width="2.4" stroke-linecap="round"/></svg>';
?>

<!-- ============ 1) Več kot 14.000 zadovoljnih strank ============ -->
<section class="opz-why opz-customers">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_img_collage ); ?>" alt="Zadowoleni klienci pasa ortopedycznego NORIKS" />
    </div>
    <div class="opz-col opz-copy">
      <div class="opz-stars" aria-hidden="true">★★★★★</div>
      <h2 class="opz-title">Ponad 14 000 zadowolonych klientów</h2>
      <p class="opz-sub">Tysiące osób zamieniły już codzienny ból pleców na stabilność i ulgę — w pracy, podczas jazdy i w domu.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Naravno olajšanje bolečin ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_relief ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Naturalna ulga w bólu</h2>
      <p>Gdy założysz pas NORIKS, zaawansowana technologia z <strong>dwiema strefami kompresji</strong> zapewnia prawidłowe ustawienie bioder i dolnej części pleców. Może to ustabilizować kręgosłup i odciążyć nerw kulszowy.</p>
      <p>Zwykle trzeba by przejść długą fizjoterapię, aby osiągnąć taką ulgę. Pas NORIKS pozwala <strong>odczuć ulgę w czasie rzeczywistym</strong> — podczas pracy lub aktywności z bliskimi.</p>
      <p>Gdy tylko dolna część pleców i biodra są prawidłowo podparte, nacisk na nerw kulszowy może się zmniejszyć. Może to oznaczać <strong>mniej bólu i większą swobodę ruchów</strong>.</p>
    </div>
  </div>
</section>

<!-- ============ 3) Pravi vzrok bolečin v hrbtu in išiasa ============ -->
<section class="opz-why opz-cause">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_cause ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Prawdziwa przyczyna bólu pleców i rwy kulszowej</h2>
      <p>Godziny spędzone przy biurku, powtarzalne ruchy lub ciężka praca fizyczna mogą tworzyć <strong>nierównomierny nacisk na krążki międzykręgowe</strong>. W połączeniu z nieprawidłową postawą może to przez lata prowadzić do znacznych uszkodzeń kręgosłupa.</p>
      <p>W efekcie krążki mogą przemieścić się ze swojego położenia i uciskać nerw kulszowy, powodując <strong>piekący ból, mrowienie, a nawet osłabienie</strong>, które promieniują od dolnej części pleców w dół nóg.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Naravno olajšanje (3 kartice) ============ -->
<section class="opz-why opz-cards">
  <div class="opz-wrap">
    <h2 class="opz-cards-title">Naturalna ulga przy rwie kulszowej i bólu pleców</h2>
    <div class="opz-cards-grid">
      <?php foreach ( $opz_cards as $opz_card ) : ?>
        <div class="opz-card">
          <div class="opz-card-media">
            <video src="<?php echo esc_url( $opz_card['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="opz-card-head">
            <span class="opz-check" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="22" height="22"><circle cx="12" cy="12" r="12" fill="#28a745"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <h3 class="opz-card-title"><?php echo esc_html( $opz_card['title'] ); ?></h3>
          </div>
          <p class="opz-card-text"><?php echo esc_html( $opz_card['text'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) Kako deluje pas NORIKS? ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_img_indik ); ?>" alt="Wskazania — w czym pomaga pas ortopedyczny NORIKS" />
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Jak działa pas NORIKS?</h2>
      <p>Pas NORIKS <strong>celowo stabilizuje</strong> obszar L5 kręgosłupa dzięki <strong>ukierunkowanej kompresji</strong>, prawidłowo ustawia miednicę i przywraca staw krzyżowo-biodrowy do jego naturalnego zakresu ruchu.</p>
      <p><strong>Wspiera problematyczny obszar</strong>, może odciążyć krążki międzykręgowe i tym samym zmniejszyć nacisk na nerw kulszowy.</p>
      <p>Ukierunkowana kompresja pobudza krążenie krwi, co może wspierać proces samoleczenia.</p>
      <p>Ta kombinacja może zapewnić szybką ulgę przy rwie kulszowej, bólu pleców i problemach stawu krzyżowo-biodrowego oraz <strong>długotrwałe łagodzenie bólu</strong> przy regularnym stosowaniu.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Inovativne značilnosti ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_feat ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Innowacyjne cechy</h2>
      <p><strong>Cienki i praktyczny:</strong> Stworzony do codziennego użytku, wygodnie mieści się pod większością ubrań, więc nikt nie zauważy, że go nosisz!</p>
      <p><strong>Regulowana kompresja:</strong> Pozwala dopasować stopień podparcia do swoich potrzeb i zapewnia maksymalny komfort.</p>
      <p>Dostęp do fizjoterapeutów i specjalistów od bólu jest często ograniczony oraz wiąże się z wysokimi kosztami i czasem. <strong>Pas NORIKS oferuje profesjonalne rozwiązanie na najwyższym poziomie</strong> i stanowi skuteczną oraz dostępną alternatywę.</p>
    </div>
  </div>
</section>

<!-- ============ 7) Pas NORIKS v primerjavi (tabela) ============ -->
<section class="opz-why opz-compare">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Pas NORIKS w porównaniu</h2>
      <p class="opz-sub">Działa celowo na dolną część pleców, aby zmniejszyć obciążenia.</p>
    </div>
    <div class="opz-col">
      <table class="opz-table">
        <thead>
          <tr>
            <th class="opz-th-feat"></th>
            <th class="opz-th-brand">NORIKS</th>
            <th class="opz-th-alt">Fizjo</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $opz_cmp_rows as $opz_r ) : ?>
            <tr>
              <th class="opz-feat"><?php echo esc_html( $opz_r[0] ); ?></th>
              <td class="opz-brand"><?php echo $opz_r[1] ? $opz_yes : $opz_no; ?></td>
              <td class="opz-alt"><?php echo $opz_r[2] ? $opz_yes : $opz_no; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============ 8) Mnenja strank (s sliko) ============ -->
<section class="opz-why opz-reviews">
  <div class="opz-wrap">
    <div class="opz-reviews-grid">
      <?php foreach ( $opz_reviews as $opz_rev ) : ?>
        <div class="opz-review">
          <div class="opz-review-media">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_rev['img'] ); ?>" alt="Pas NORIKS — opinia klienta <?php echo esc_attr( $opz_rev['name'] ); ?>" />
          </div>
          <div class="opz-review-stars" aria-hidden="true">★★★★★</div>
          <h3 class="opz-review-title"><?php echo esc_html( $opz_rev['title'] ); ?></h3>
          <p class="opz-review-text"><?php echo esc_html( $opz_rev['text'] ); ?></p>
          <div class="opz-review-name"><?php echo esc_html( $opz_rev['name'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  /* Ni "Tabela velikosti" povezave na pasu (ne plugin ne globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description) pasu: skrij standardne pike (•),
     ostane samo ✅ iz besedila; malo razmika med "Prednosti:" in seznamom.
     (Ta predloga se naloži samo na orto-ortopas straneh.) */
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

  .opz-why { padding: 44px 0; }
  .opz-why.opz-customers { background: #f7f7f7; }
  .opz-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .opz-row { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .opz-media img,
  .opz-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .opz-stars { color: #f5a623; font-size: 24px; letter-spacing: 2px; margin-bottom: 10px; }
  .opz-title { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1c1c1c; line-height: 1.15; margin: 0 0 16px; }
  .opz-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 14px; }
  .opz-sub { font-size: 17px; line-height: 1.6; color: #333; margin: 0; }

  /* --- 4) sekcija s karticami (sivo ozadje / noriks stil) --- */
  .opz-why.opz-cards { background: #f7f7f7; }
  .opz-cards-title { text-align: center; font-size: clamp(22px,2.6vw,30px); font-weight: 800; color: #1c1c1c; margin: 0 0 32px; line-height: 1.2; }
  .opz-cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
  .opz-card { background: #fff; border-radius: 14px; padding: 26px 22px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
  .opz-card-media { width: 108px; height: 108px; margin: 0 auto 18px; border-radius: 50%; overflow: hidden; }
  .opz-card-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .opz-card-head { display: flex; align-items: center; justify-content: center; gap: 8px; margin: 0 0 10px; }
  .opz-check { flex: 0 0 auto; line-height: 0; }
  .opz-card-title { font-size: 18px; font-weight: 800; color: #1c1c1c; margin: 0; line-height: 1.2; }
  .opz-card-text { font-size: 14px; line-height: 1.55; color: #555; margin: 0; }

  /* --- primerjalna tabela (noriks zeleni stil) --- */
  .opz-why.opz-compare { background: #f7f7f7; }
  .opz-table { width: 100%; border-collapse: separate; border-spacing: 0; background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 18px rgba(0,0,0,0.07); }
  .opz-table th, .opz-table td { padding: 13px 14px; text-align: center; vertical-align: middle; }
  .opz-table thead th { background: #22a45d; color: #fff; font-size: 15px; font-weight: 800; }
  .opz-table thead .opz-th-feat { background: #22a45d; }
  .opz-table .opz-feat { background: #22a45d; color: #fff; font-weight: 700; text-align: left; font-size: 14px; line-height: 1.25; width: 55%; }
  .opz-table tbody tr td { border-bottom: 1px solid #eee; background: #fff; }
  .opz-table tbody tr:last-child td,
  .opz-table tbody tr:last-child .opz-feat { border-bottom: 0; }
  .opz-table .opz-brand { background: #f2fbf6; }
  .opz-yes, .opz-no { display: inline-block; vertical-align: middle; }

  /* --- 8) mnenja strank (s sliko) --- */
  .opz-reviews-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .opz-review { background: #fafafa; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05); text-align: center; }
  .opz-review-media { width: 100%; aspect-ratio: 1 / 1; background: #eee; }
  .opz-review-media img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .opz-review-stars { color: #f5b301; font-size: 20px; letter-spacing: 2px; margin: 16px 0 8px; }
  .opz-review-title { font-size: 17px; font-weight: 800; color: #1c1c1c; margin: 0 14px 10px; line-height: 1.25; }
  .opz-review-text { font-size: 14px; line-height: 1.6; color: #444; margin: 0 16px 14px; }
  .opz-review-name { font-size: 13px; font-style: italic; font-weight: 700; color: #333; border-top: 1px solid #e6e6e6; margin: 0 16px; padding: 12px 0 18px; }

  @media (max-width: 820px) {
    .opz-row { grid-template-columns: 1fr; gap: 22px; }
    .opz-title { text-align: left; }
    .opz-cards-grid { grid-template-columns: 1fr; gap: 16px; }
    .opz-reviews-grid { grid-template-columns: 1fr; gap: 18px; }
    .opz-table th, .opz-table td { padding: 11px 10px; }
    .opz-table .opz-feat { font-size: 13px; }
    .opz-table thead th { font-size: 14px; }
  }
</style>
