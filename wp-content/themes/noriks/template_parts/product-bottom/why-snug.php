<?php
/**
 * product-bottom: NORIKS Snug — jastuk za cijelo tijelo u S-obliku (orto-snug).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno,
 * pozadine se izmjenjuju (prva tonirana).
 *   1) Galerija u krevetu            5) Dimenzije (desno)
 *   2) Problem — VIDEO (lijevo)      6) Preporucuju kiroprakticari
 *   3) Kako radi (desno)             7) Punjenje (lijevo)
 *   4) Tri potpore (lijevo)          8) Boje (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sg      = get_template_directory_uri() . '/img/snug/';
$sg_path = get_template_directory() . '/img/snug/';
$sg_vid  = function( $file, $poster, $alt ) use ( $sg, $sg_path ) {
  if ( ! file_exists( $sg_path . $file ) ) { return ''; }
  return '<video class="nsg-video" autoplay muted loop playsinline preload="metadata" poster="'
       . esc_url( $sg . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $sg . $file ) . '" type="video/mp4"></video>';
};
$sg_img  = function( $file, $alt, $cls = '' ) use ( $sg, $sg_path ) {
  if ( ! file_exists( $sg_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $sg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) KAKO IZGLEDA U KREVETU (galerija) -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap">
    <p class="nsg-kicker nsg-center">W prawdziwej sypialni</p>
    <h2 class="nsg-h2 nsg-center">Objęcie, które trzyma całą noc</h2>
    <p class="nsg-sub">Przytul ją z przodu, oprzyj plecy z tyłu — poduszka działa z obu stron.</p>
    <div class="nsg-gallery">
      <figure><?php echo $sg_vid( 'sng-gal-1.mp4', 'sng-gal-1.jpg', 'Poduszka owinięta wokół nóg podczas snu' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-2.mp4', 'sng-gal-2.jpg', 'Jak używa się NORIKS Snug' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-3.mp4', 'sng-gal-3.jpg', 'Spanie na boku z NORIKS Snug' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-4.mp4', 'sng-gal-4.jpg', 'NORIKS Snug w łóżku' ); ?></figure>
    </div>
  </div>
</section>

<!-- 2) PROBLEM — slika lijevo -->
<section class="nsg-sec">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_vid( 'sng-video.mp4', 'sng-video.jpg', 'NORIKS Snug w użyciu' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Problem</p>
      <h2 class="nsg-h2">Dlaczego nigdy nie budzisz się <em>wyspana</em></h2>
      <div class="nsg-pain__list">
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">01</span>
          <div class="nsg-pain__copy">
            <h3>Bark dźwiga cały ciężar.</h3>
            <p>Bez podparcia górnej części ciała górny bark przechyla się do przodu i przejmuje cały twój ciężar. To właśnie to drętwienie, z którym budzisz się każdego ranka.</p>
          </div>
        </div>
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">02</span>
          <div class="nsg-pain__copy">
            <h3>Biodro opada, kręgosłup podąża za nim.</h3>
            <p>Nic nie utrzymuje bioder w jednej linii, więc grawitacja ściąga je w dół, a dolna część pleców skręca się, żeby to nadrobić. To budzenie o trzeciej nad ranem.</p>
          </div>
        </div>
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">03</span>
          <div class="nsg-pain__copy">
            <h3>Kolana układają się jedno na drugim i ocierają.</h3>
            <p>Nacisk kość o kość rośnie przez całą noc. Do rana kolana bolą, a nogi są ciężkie, zanim jeszcze wstaniesz z łóżka.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3) KAKO RADI — slika desno -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2 nsg-row2--rev">
    <div class="nsg-copy">
      <p class="nsg-kicker">Jak to działa</p>
      <h2 class="nsg-h2">Kształt S trzyma trzy punkty jednocześnie</h2>
      <p>Wygięcie podąża za linią ciała: górna część podpiera bark, środek wypełnia przestrzeń przy talii, a dolne ramię rozdziela kolana.</p>
      <p>Ciężar rozkłada się na całej długości, zamiast zbierać się w jednym miejscu. Ciało przestaje wysyłać sygnały, które cię budzą.</p>
      <ul class="nsg-check">
        <li>Odciążone barki, bez nacisku na jedną stronę</li>
        <li>Biodra i miednica w naturalnej linii</li>
        <li>Rozdzielone kolana, bez kontaktu kość o kość</li>
      </ul>
      <a class="nsg-cta" href="#bundle-selector">Wybierz swój kolor</a>
    </div>
    <div class="nsg-media"><?php echo $sg_img( 'sng-usporedba.jpg', 'NORIKS Snug w porównaniu ze zwykłą poduszką' ); ?></div>
  </div>
</section>

<!-- 4) TRI KLJUČNE POTPORE — slika lijevo -->
<section class="nsg-sec nsg-trust">
  <div class="nsg-trust__head">
    <p class="nsg-trust__eyebrow">Zaufanie specjalistów</p>
    <h2 class="nsg-trust__title">Polecają <em>kręgarze.</em></h2>
  </div>
  <div class="nsg-wrap">
    <div class="nsg-docs">
      <article class="nsg-doc">
        <div class="nsg-doc__img"><?php echo $sg_img( 'sng-doc-1.jpg', 'Kręgarka z poduszką NORIKS Snug' ); ?></div>
        <div class="nsg-doc__body">
          <p class="nsg-doc__lead">„Snug polecam pacjentom, którzy w nocy zmagają się z bólem bioder i dolnej części pleców.”</p>
          <p class="nsg-doc__p">„Kształt S utrzymuje kręgosłup w pozycji neutralnej, bo jednocześnie podpiera barki, biodra i kolana. Większość poduszek na całe ciało rozwiązuje tylko jedno z tego. Ta rozwiązuje wszystkie trzy i dlatego pacjenci naprawdę jej używają dalej.”</p>
          <div class="nsg-doc__who">
            <p class="nsg-doc__name">Kręgarka<svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#5b7fa6"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nsg-doc__role">12 lat praktyki</p>
          </div>
        </div>
      </article>
      <article class="nsg-doc">
        <div class="nsg-doc__img"><?php echo $sg_img( 'sng-doc-2.jpg', 'Kręgarz z poduszką NORIKS Snug' ); ?></div>
        <div class="nsg-doc__body">
          <p class="nsg-doc__lead">„U pacjentów śpiących na boku problem jest zawsze ten sam: pusta przestrzeń między barkiem a kolanami.”</p>
          <p class="nsg-doc__p">„Snug to jeden z niewielu produktów, które naprawdę to rozwiązują. Podpiera całą długość tułowia, a nie tylko jeden punkt nacisku. Pacjenci wracają po dwóch tygodniach i mówią, że porannej sztywności już nie ma.”</p>
          <div class="nsg-doc__who">
            <p class="nsg-doc__name">Kręgarz<svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#5b7fa6"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nsg-doc__role">18 lat praktyki</p>
          </div>
        </div>
      </article>
    </div>
    <p class="nsg-note">Opinie specjalistów nie zastępują badania lekarskiego ani zaleconej terapii.</p>
  </div>
</section>

<!-- 7) PUNJENJE — slika lijevo -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-potpore.jpg', 'Trzy kluczowe podparcia: ręce, biodra, kolana' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Trzy punkty podparcia</p>
      <h2 class="nsg-h2">Jedna poduszka zamiast trzech</h2>
      <p>Większość osób układa dwie albo trzy zwykłe poduszki, żeby uzyskać podparcie, które Snug daje sam — a potem przekłada je przez całą noc.</p>
      <p>Snug trzyma wszystkie trzy punkty naraz, więc nie musisz się budzić, żeby go poprawić.</p>
      <ul class="nsg-check">
        <li>Podparcie rąk — zapobiega drętwieniu w nocy</li>
        <li>Ustawienie bioder — kręgosłup pozostaje neutralny</li>
        <li>Amortyzacja kolan — zdejmuje nacisk z dolnej części pleców</li>
      </ul>
    </div>
  </div>
</section>

<!-- 5) DIMENZIJE — slika desno -->
<section class="nsg-sec">
  <div class="nsg-wrap nsg-row2 nsg-row2--rev">
    <div class="nsg-copy">
      <p class="nsg-kicker">Właściwy rozmiar</p>
      <h2 class="nsg-h2">105 × 30 cm — wystarczająco, a nie za dużo</h2>
      <p>Podpiera cię od barku po kolana, ale nie zajmuje całego łóżka i nie przeszkadza partnerowi.</p>
      <p>Ta długość sprawia, że łatwo ją trzymać i łatwo się z nią obrócić — bez przekładania i bez budzenia.</p>
      <ul class="nsg-check">
        <li>Długość 105 cm, szerokość 30 cm</li>
        <li>Pasuje do każdego wzrostu</li>
        <li>Lekka, przełożysz ją jedną ręką</li>
      </ul>
    </div>
    <div class="nsg-media"><?php echo $sg_img( 'sng-dimenzije.jpg', 'Wymiary: 105 × 30 cm' ); ?></div>
  </div>
</section>

<!-- 6) PREPORUČUJU STRUČNJACI (postavitev z originala) -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-boje.jpg', 'Sześć dostępnych kolorów' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Wybierz kolor</p>
      <h2 class="nsg-h2">Sześć kolorów do każdej sypialni</h2>
      <p>Niebieski, różowy, szary, zielony, fioletowy i granatowy — kolor wybierasz na tej stronie, przed dodaniem do koszyka.</p>
      <p>Wszystkie odcienie mają tę samą chłodzącą tkaninę i to samo wypełnienie; różni się tylko kolor poszewki.</p>
      <a class="nsg-cta" href="#bundle-selector">Wybierz swój kolor</a>
    </div>
  </div>
</section>

<!-- 10) ŠTO MOŽETE OČEKIVATI -->
<style>
.nsg-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1f2a37; }
.nsg-sec * { box-sizing: border-box; }
.nsg-tint { background: #f2f5f9; }
.nsg-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nsg-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #5b7fa6; margin: 0 0 10px; }
.nsg-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #1f2a37; }
.nsg-center { text-align: center; }
.nsg-sub { text-align: center; font-size: 16px; color: #5c6b7a; max-width: 60ch; margin: 0 auto 40px; line-height: 1.6; }
.nsg-copy p { font-size: 16px; line-height: 1.7; color: #4a5765; margin: 0 0 14px; }
.nsg-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nsg-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(31,42,55,.05), 0 14px 40px rgba(31,42,55,.09); }
.nsg-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px 22px; }
.nsg-num { display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: #5b7fa6; color: #fff; font-weight: 800; font-size: 16px; margin-bottom: 14px; }
.nsg-card h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-card p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
.nsg-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsg-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nsg-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #5b7fa6; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsg-cta { display: inline-block; background: #1f2a37; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nsg-cta:hover { background: #33445a; color: #fff !important; }
.nsg-cta--center { display: block; width: fit-content; margin: 40px auto 0; }
.nsg-trust__head { padding: 0 22px; text-align: center; margin-bottom: 34px; }
.nsg-trust__eyebrow { font-size: 12px; letter-spacing: .14em; text-transform: uppercase; font-weight: 700; color: #5b7fa6; margin: 0 0 8px; }
.nsg-trust__title { font-size: clamp(22px, 3vw, 30px); line-height: 1.15; font-weight: 800; color: #12202c; margin: 0; }
.nsg-trust__title em { font-style: italic; font-weight: 800; color: #5b7fa6; }
.nsg-docs { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 960px; margin: 0 auto; }
.nsg-doc { background: #fff; border: 1px solid #e0d6d6; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nsg-doc__img { width: 100%; aspect-ratio: 4/5; overflow: hidden; }
.nsg-doc__img img { width: 100%; height: 100%; object-fit: cover; display: block; }
.nsg-doc__body { padding: 22px 20px 24px; display: flex; flex-direction: column; flex: 1; }
.nsg-doc__lead { font-size: clamp(17px, 2.2vw, 19px); font-weight: 700; font-style: italic; color: #12202c; line-height: 1.45; margin: 0 0 14px; }
.nsg-doc__p { font-size: 15px; color: #3d4a57; line-height: 1.62; margin: 0 0 18px; }
.nsg-doc__who { border-top: 1px solid #e0d6d6; padding-top: 15px; margin-top: auto; }
.nsg-doc__name { margin: 0; font-size: 15px; font-weight: 700; color: #12202c; line-height: 1.3; display: flex; align-items: center; gap: 6px; }
.nsg-doc__role { margin: 4px 0 0; font-size: 13px; color: #6b7a88; line-height: 1.3; }
.nsg-note { text-align: center; font-size: 12px; color: #93a1b0; font-style: italic; margin: 22px 0 0; }
.nsg-tl { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-tl__item { background: #f2f5f9; border-radius: 14px; padding: 26px 22px; }
.nsg-tl__when { font-size: 12.5px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #5b7fa6; margin-bottom: 8px; }
.nsg-tl__item h3 { font-size: 18px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-tl__item p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
.nsg-row2--tight { gap: 44px; align-items: center; }
.nsg-pain__list { display: flex; flex-direction: column; }
.nsg-pain__row { display: flex; gap: 18px; padding: 22px 0; border-top: 1px solid #dbe2ea; }
.nsg-pain__row:last-child { border-bottom: 1px solid #dbe2ea; }
.nsg-pain__num { flex: none; font-size: 17px; font-weight: 800; color: #5b7fa6; letter-spacing: .04em; padding-top: 5px; }
.nsg-pain__copy { flex: 1; }
.nsg-pain__copy h3 { font-size: clamp(18px, 2vw, 21px); font-weight: 800; line-height: 1.25; margin: 0 0 7px; letter-spacing: -.01em; }
.nsg-pain__copy p { font-size: 15px; line-height: 1.6; color: #5c6b7a; margin: 0; }
.nsg-h2 em { font-style: normal; color: #5b7fa6; }
.nsg-gallery { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; align-items: stretch; }
.nsg-gallery figure { margin: 0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 4px rgba(31,42,55,.05), 0 14px 40px rgba(31,42,55,.09); }
.nsg-gallery img, .nsg-video { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; aspect-ratio: 3/4; }
.nsg-boje { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 34px; }
.nsg-media--stack { display: grid; gap: 16px; }
.nsg-boje figure { margin: 0; border-radius: 14px; overflow: hidden; }
.nsg-boje img { width: 100%; display: block; }
@media (max-width: 980px) {
  .nsg-docs { grid-template-columns: 1fr; gap: 18px; max-width: 520px; }
  .nsg-boje { grid-template-columns: 1fr 1fr; }
  .nsg-gallery { grid-template-columns: 1fr 1fr; }
  .nsg-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nsg-row2--rev .nsg-media { order: -1; }
  .nsg-three, .nsg-tl, .nsg-docs { grid-template-columns: 1fr; gap: 16px; }
}
@media (max-width: 560px) {
  .nsg-gallery { grid-template-columns: 1fr; gap: 14px; }
  .nsg-gallery img, .nsg-video { aspect-ratio: 3/4; }
  .nsg-sec { padding: 44px 0; }
  .nsg-pain__row { gap: 14px; padding: 20px 0; }
  .nsg-wrap { padding: 0 16px; }
  .nsg-sub { margin-bottom: 28px; }
  .nsg-card, .nsg-tl__item { padding: 22px 18px; }
  .nsg-cta { width: 100%; text-align: center; }
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
