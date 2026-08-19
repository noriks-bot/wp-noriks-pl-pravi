<?php
/**
 * product-bottom: NORIKS FIT — KOMPRESIJSKE MAJICE (orto-kompresijske-majice)
 * Muška kompresijska/oblikujuća majica. (PL prijevod)
 * Prave HTML sekcije (tekst + slika lijevo/desno, video, usporedba). Brand NORIKS FIT.
 * FAQ i recenzije rendera zajednička reviews sekcija (ne ovdje).
 * Slike: img/kompsfit/ , video: img/kompsfit-videos/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$km  = get_template_directory_uri() . '/img/kompsfit/';
$kmv = get_template_directory_uri() . '/img/kompsfit-videos/';
?>

<!-- ============ 1) Video demo (slika/video + tekst) ============ -->
<section class="kmf-sec">
  <div class="kmf-wrap kmf-row2 kmf-rev">
    <div class="kmf-media"><video src="<?php echo esc_url( $kmv.'demo.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div>
    <div class="kmf-copy">
      <p class="kmf-eyebrow">Natychmiastowy efekt</p>
      <h2 class="kmf-h2">Modeluje sylwetkę, <em>gdy tylko ją założysz</em></h2>
      <p>Ukierunkowana kompresja równomiernie modeluje brzuch i biodra, wygładza „boczki” i poprawia postawę — bez ucisku, który ogranicza oddychanie czy ruch.</p>
      <ul class="kmf-check">
        <li>Wygładzony brzuch i klatka piersiowa</li>
        <li>Bardziej wyprostowana, pewna postawa</li>
        <li>Niewidoczna pod każdą koszulą</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 2) Vratite samopouzdanje i snagu (tekst + slika) ============ -->
<section class="kmf-sec kmf-alt">
  <div class="kmf-wrap kmf-row2">
    <div class="kmf-copy">
      <p class="kmf-eyebrow">NORIKS FIT</p>
      <h2 class="kmf-h2">Odzyskaj pewność siebie i siłę</h2>
      <p>Jeśli chcesz, aby ubrania lepiej na Tobie leżały i przez cały dzień czuć wsparcie, NORIKS FIT został stworzony dla Ciebie.</p>
      <p>Wykonana z <strong>jonowej tkaniny kompresyjnej</strong>, zapewnia dopasowany, podtrzymujący krój, który wygładza sylwetkę i daje całodzienny komfort — ostrzejszy wygląd, lepszą świadomość postawy i pewność siebie, która przychodzi, gdy dobrze czujesz się w tym, co nosisz.</p>
      <a class="kmf-cta" href="#bundle-selector">Wybierz swój rozmiar →</a>
    </div>
    <div class="kmf-media kmf-hero-media"><img src="<?php echo esc_url( $km.'hero.webp' ); ?>" alt="Koszulka kompresyjna NORIKS FIT pod koszulą" loading="lazy"></div>
  </div>
</section>

<!-- ============ 3) Tajno oružje protiv pivskog trbuha ============ -->
<section class="kmf-sec">
  <div class="kmf-wrap">
    <h2 class="kmf-h2 kmf-center kmf-upper">Twoja nowa tajna broń przeciwko piwnemu brzuchowi</h2>
    <div class="kmf-weapon-grid">
      <div class="kmf-feat-col">
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Żegnaj „dad bod”.</p></div>
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Piwny brzuch? Zniknął.</p></div>
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Boczki? Schowane.</p></div>
      </div>
      <div class="kmf-weapon-media"><img src="<?php echo esc_url( $km.'wear.webp' ); ?>" alt="NORIKS FIT modeluje brzuch i sylwetkę" loading="lazy"></div>
      <div class="kmf-feat-col">
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Klatka? Wygładzona.</p></div>
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Niewidoczna. Nie do zatrzymania.</p></div>
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Koszula leży. Wreszcie.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 3b) Prije / Poslije (tekst + slika) ============ -->
<section class="kmf-sec">
  <div class="kmf-wrap kmf-row2">
    <div class="kmf-copy">
      <p class="kmf-eyebrow">Widoczna różnica</p>
      <h2 class="kmf-h2">Przed i po NORIKS FIT</h2>
      <p>Bardziej wyprostowana postawa, wygładzony brzuch i ostrzejsza sylwetka — gdy tylko ją założysz.</p>
      <ul class="kmf-check">
        <li>Widocznie bardziej wyprostowana postawa</li>
        <li>Wygładzony brzuch i „boczki”</li>
        <li>Ostrzejsza sylwetka pod każdą koszulką</li>
      </ul>
      <a class="kmf-cta" href="#bundle-selector">Wybierz swój rozmiar →</a>
    </div>
    <div class="kmf-media"><img src="<?php echo esc_url( $km.'ks-pl-04.webp' ); ?>" alt="Przed i po NORIKS FIT" loading="lazy"></div>
  </div>
</section>

<style>
.kmf-sub{color:#5b5b5b;font-size:16px;line-height:1.6;max-width:620px;margin:0 auto 22px;text-align:center;}
.kmf-ba{max-width:760px;margin:22px auto 0;border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.12);}
.kmf-ba img{width:100%;height:auto;display:block;}
.kmf-icons{display:grid;grid-template-columns:repeat(4,1fr);gap:22px;margin-top:28px;}
.kmf-ic{text-align:center;}
.kmf-ic img{width:56px;height:56px;object-fit:contain;margin:0 auto 12px;display:block;}
.kmf-ic p{margin:0;font-weight:700;font-size:15px;color:#141414;line-height:1.35;}
@media(max-width:700px){.kmf-icons{grid-template-columns:repeat(2,1fr);gap:18px;}}
</style>

<!-- ============ 4) Zašto NORIKS FIT? (usporedba) ============ -->
<section class="kmf-sec kmf-alt">
  <div class="kmf-wrap">
    <h2 class="kmf-h2 kmf-center">Dlaczego NORIKS FIT?</h2>
    <p class="kmf-sub">Porównaj NORIKS FIT ze zwykłymi koszulkami kompresyjnymi i zobacz różnicę, którą czuć od pierwszego założenia.</p>
    <div class="kmf-cmp-row">
      <div class="kmf-cmp-media"><img src="<?php echo esc_url( $km.'compare.webp' ); ?>" alt="NORIKS FIT na tle zwykłych koszulek" loading="lazy"></div>
      <div class="kmf-table">
        <div class="kmf-t-head">
          <span class="kmf-t-feature"></span>
          <span class="kmf-t-col kmf-t-us">NORIKS FIT</span>
          <span class="kmf-t-col kmf-t-them">Inni</span>
        </div>
        <?php
        $kmf_rows = array(
          'Całodzienny komfort kompresji',
          'Trwały, wysokiej jakości materiał',
          'Niewidoczna pod każdą koszulą',
          'Sprawdza się też jako koszulka sportowa',
          'Lekka tkanina odprowadzająca wilgoć',
        );
        foreach ( $kmf_rows as $row ) : ?>
          <div class="kmf-t-row">
            <span class="kmf-t-feature"><?php echo esc_html( $row ); ?></span>
            <span class="kmf-t-col kmf-t-us"><span class="kmf-yes">✓</span></span>
            <span class="kmf-t-col kmf-t-them"><span class="kmf-no">✕</span></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="kmf-cta-wrap"><a class="kmf-cta" href="#bundle-selector">Zamów swój NORIKS FIT →</a></div>
  </div>
</section>

<!-- ============ 5) Recenzije (testimonijali sa slikama) ============ -->
<section class="kmf-sec">
  <div class="kmf-wrap">
    <div class="kmf-rev-top">
      <span class="kmf-rev-stars">★★★★★</span>
      <span class="kmf-rev-head">3575 zweryfikowanych opinii — doskonała ocena 4,8 na 5 gwiazdek</span>
    </div>
    <div class="kmf-rev-cards">
      <div class="kmf-rev-card">
        <div class="kmf-rev-photo"><img src="<?php echo esc_url( $km.'wear.webp' ); ?>" alt="Opinia klienta o NORIKS FIT" loading="lazy"></div>
        <p class="kmf-rev-txt">„Będę szczery — byłem sceptyczny. Zawsze miałem ten brzuszek, który ukrywałem pod luźnymi koszulkami. Po 4 tygodniach noszenia NORIKS przez 4 godziny dziennie zrzuciłem kilka centymetrów w pasie i zacząłem stać prosto bez zastanowienia. Ramiona się otworzyły, a dziewczyna powiedziała, że wyglądam, jakbym „promieniał”.”</p>
        <div class="kmf-rev-foot"><span class="kmf-rev-badge">★★★★★ Zweryfikowany</span><span class="kmf-rev-name">Marcin W. — 34 l.</span></div>
      </div>
      <div class="kmf-rev-card">
        <div class="kmf-rev-photo"><img src="<?php echo esc_url( $km.'persona.webp' ); ?>" alt="Opinia klienta o NORIKS FIT" loading="lazy"></div>
        <p class="kmf-rev-txt">„Cały dzień siedzę przy biurku. Zgarbiony, wzdęty, bez pewności siebie. NORIKS dosłownie zmusił mnie do siedzenia prosto bez żadnego wysiłku. Po 10 dniach napięcie w plecach zniknęło, a koszule zaczęły lepiej leżeć. Teraz noszę go do biura — jest dyskretny, przewiewny i szczerze? Przestałem chować się przed kamerami.”</p>
        <div class="kmf-rev-foot"><span class="kmf-rev-badge">★★★★★ Zweryfikowany</span><span class="kmf-rev-name">Piotr Z. — 42 l.</span></div>
      </div>
      <div class="kmf-rev-card">
        <div class="kmf-rev-photo"><img src="<?php echo esc_url( $km.'hero.webp' ); ?>" alt="Opinia klienta o NORIKS FIT" loading="lazy"></div>
        <p class="kmf-rev-txt">„Przez trzy lata odmawiałem wyjść, bo nienawidziłem tego, co widzę w lustrze, gdy się ubieram. Z NORIKS pierwszy raz przestałem walczyć z własnym odbiciem. Dziś rano ubrałem się w 5 minut. Bez poprawiania. Bez unikania lustra. To wszystko.”</p>
        <div class="kmf-rev-foot"><span class="kmf-rev-badge">★★★★★ Zweryfikowany</span><span class="kmf-rev-name">Tomasz G. — 27 l.</span></div>
      </div>
    </div>
    <div class="kmf-cta-wrap"><a class="kmf-cta" href="#bundle-selector">Wybierz swój rozmiar →</a></div>
  </div>
</section>

<style>
/* 5) testimonijali */
.kmf-rev-top{display:flex;flex-direction:column;align-items:center;gap:4px;margin-bottom:26px;}
.kmf-rev-top .kmf-rev-stars{color:#00b67a;font-size:22px;letter-spacing:2px;}
.kmf-rev-head{font-weight:700;font-size:17px;color:#141414;text-align:center;}
.kmf-rev-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
.kmf-rev-card{border:1px solid #e4e4e4;border-radius:14px;overflow:hidden;background:#fff;display:flex;flex-direction:column;}
.kmf-rev-photo img{width:100%;height:300px;object-fit:cover;display:block;}
.kmf-rev-txt{padding:16px 16px 8px;margin:0;font-size:14px;line-height:1.55;color:#333;flex:1;}
.kmf-rev-foot{padding:0 16px 16px;display:flex;flex-direction:column;gap:4px;}
.kmf-rev-badge{color:#00b67a;font-size:13px;font-weight:700;}
.kmf-rev-name{font-weight:700;font-size:14px;color:#141414;}
@media(max-width:860px){.kmf-rev-cards{grid-template-columns:1fr;}}
</style>

<style>
.kmf-sec{padding:48px 0;background:#fff;}
.kmf-alt{background:#f5f6f7;}
.kmf-wrap{max-width:1100px;margin:0 auto;padding:0 18px;}
.kmf-row2{display:grid;grid-template-columns:1fr 1fr;gap:44px;align-items:center;}
.kmf-eyebrow{text-transform:uppercase;letter-spacing:.12em;font-size:12px;font-weight:700;color:#8a8f96;margin:0 0 6px;}
.kmf-h2{font-size:clamp(24px,3.2vw,34px);line-height:1.15;font-weight:800;color:#141414;margin:0 0 16px;font-family:inherit;}
.kmf-h2 em{font-style:italic;color:#141414;}
.kmf-center{text-align:center;}
.kmf-upper{text-transform:uppercase;font-size:clamp(20px,2.6vw,26px);}
.kmf-copy p{font-size:16px;line-height:1.65;color:#3a3a3a;margin:0 0 14px;}
.kmf-media img,.kmf-media video{width:100%;height:auto;display:block;border-radius:16px;}
.kmf-media video{background:#000;}
.kmf-hero-media img{max-height:460px;object-fit:cover;object-position:center 18%;}
.kmf-check{list-style:none;margin:6px 0 0;padding:0;}
.kmf-check li{position:relative;padding:0 0 10px 28px;font-size:15.5px;color:#141414;}
.kmf-check li:before{content:"✓";position:absolute;left:0;top:0;width:20px;height:20px;background:#141414;color:#fff;border-radius:50%;font-size:12px;text-align:center;line-height:20px;}
.kmf-cta{display:inline-block;margin-top:8px;background:#141414;color:#fff;font-weight:700;font-size:16px;padding:14px 30px;border-radius:10px;text-decoration:none;}
.kmf-cta-wrap{text-align:center;margin-top:30px;}

/* 3) weapon */
.kmf-weapon-grid{display:grid;grid-template-columns:1fr 1.1fr 1fr;gap:24px;align-items:center;margin-top:26px;}
.kmf-weapon-media img{width:100%;height:auto;border-radius:14px;display:block;}
.kmf-feat-col{display:flex;flex-direction:column;gap:34px;}
.kmf-feat{text-align:center;}
.kmf-feat-ic{display:inline-flex;align-items:center;justify-content:center;width:46px;height:46px;border:1.5px solid #141414;border-radius:50%;font-size:19px;margin-bottom:10px;}
.kmf-feat p{margin:0;font-weight:700;font-size:14.5px;text-transform:uppercase;letter-spacing:.02em;color:#141414;}

/* 4) compare */
.kmf-cmp-row{display:grid;grid-template-columns:.9fr 1.1fr;gap:36px;align-items:center;margin-top:24px;}
.kmf-cmp-media img{width:100%;height:auto;border-radius:14px;display:block;}
.kmf-table{border-radius:14px;overflow:hidden;border:1px solid #e4e4e4;background:#fff;}
.kmf-t-head,.kmf-t-row{display:grid;grid-template-columns:1fr 100px 100px;align-items:center;}
.kmf-t-head{background:#141414;color:#fff;}
.kmf-t-head .kmf-t-col{color:#fff;font-weight:700;text-align:center;padding:13px 6px;font-size:14px;}
.kmf-t-feature{padding:14px 16px;font-size:14px;color:#141414;line-height:1.35;}
.kmf-t-head .kmf-t-feature{color:#fff;}
.kmf-t-row{border-top:1px solid #eee;}
.kmf-t-row:nth-child(even){background:#fafafa;}
.kmf-t-col{text-align:center;font-size:16px;}
.kmf-yes{color:#2fae4e;font-weight:800;}
.kmf-no{color:#c9c9c9;font-weight:800;}

@media(max-width:860px){
  .kmf-row2{grid-template-columns:1fr;gap:22px;}
  .kmf-rev .kmf-media{order:-1;}
  .kmf-cmp-row{grid-template-columns:1fr;gap:20px;}
}
@media(max-width:600px){
  .kmf-weapon-grid{grid-template-columns:1fr;gap:20px;}
  .kmf-weapon-media{order:-1;}
  .kmf-feat-col{flex-direction:row;justify-content:space-around;gap:12px;}
}
</style>
