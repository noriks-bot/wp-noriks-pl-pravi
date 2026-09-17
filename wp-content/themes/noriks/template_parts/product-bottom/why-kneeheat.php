<?php
/**
 * product-bottom: NORIKS KneeHeat — grijac, kompresija i masaza koljena (orto-kneeheat) — trg PL.
 *
 * Sve sekcije su LIJEVO/DESNO (slika + tekst), po referentnoj stranici
 * (getmendable.com / Knee Triple Therapy Recovery System). Nikad slika na sredini.
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kh      = get_template_directory_uri() . '/img/kneeheat/';
$kh_path = get_template_directory() . '/img/kneeheat/';

$kh_vid = function( $file, $poster, $alt ) use ( $kh, $kh_path ) {
  if ( ! file_exists( $kh_path . $file ) ) { return ''; }
  return '<video class="nkh-video" autoplay muted loop playsinline preload="metadata" '
       . 'poster="' . esc_url( $kh . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $kh . $file ) . '" type="video/mp4"></video>';
};

$kh_img = function( $file, $alt ) use ( $kh, $kh_path ) {
  if ( file_exists( $kh_path . $file ) ) {
    return '<img src="' . esc_url( $kh . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nkh-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- 1) Tri koraka — videi -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap">
    <p class="nkh-eyebrow nkh-center">Jak to działa</p>
    <h2 class="nkh-h2 nkh-center">Ulga w 3 prostych krokach</h2>
    <p class="nkh-lead nkh-center">Bez konfiguracji, bez aplikacji, bez skomplikowanej rutyny. Załóż, naciśnij przycisk i wróć do swoich spraw.</p>
    <div class="nkh-steps3">
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-1.mp4', 'kh-step-1.jpg', 'Zakładanie opaski na kolano' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>1</span> Załóż opaskę</p>
          <p>Owiń ją wokół kolana i dociągnij paski. Zajmuje to 20 sekund i działa na obu nogach.</p>
        </div>
      </div>
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-2.mp4', 'kh-step-2.jpg', 'Uruchamianie sesji jednym przyciskiem' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>2</span> Naciśnij przycisk</p>
          <p>Jeden przycisk uruchamia wszystkie trzy terapie — ciepło, kompresję i wibracje — na dokładnie 12 minut.</p>
        </div>
      </div>
      <div class="nkh-step3">
        <?php echo $kh_vid( 'kh-step-3.mp4', 'kh-step-3.jpg', 'Urządzenie działa samo, gdy odpoczywasz' ); ?>
        <div class="nkh-step3-txt">
          <p class="nkh-step3-h"><span>3</span> Wróć do swoich spraw</p>
          <p>Obejrzyj wiadomości, wypij kawę. Urządzenie działa samo i wyłącza się, gdy sesja się kończy.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2) Zacaran krug — video -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-bol.mp4', 'kh-vid-bol.jpg', 'Ból i sztywność kolana' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Przerwij błędne koło. Twoje kolano jest gotowe na prawdziwą ulgę.</h2>
      <p>Tępy ból, sztywność przy wstawaniu, ostrożny krok przed zejściem ze schodów — to sygnały tkanki, która od lat po cichu głoduje. Odpowiedzią nie jest kolejna tabletka, ale przywrócenie przepływu krwi w stawie.</p>
      <ul class="nkh-tri">
        <li><strong>12 minut dziennie:</strong> przywrócenie przepływu i rozluźnienie napięcia, bez tabletek.</li>
        <li><strong>Odnowa i regeneracja:</strong> ciepło rozszerza naczynia, kompresja wypłukuje obrzęk, wibracje rozluźniają sztywność — wszystko w jednej sesji.</li>
        <li><strong>Ruch bez kalkulacji:</strong> schody bez planowania, przysiad w ogrodzie, wnuk na rękach.</li>
      </ul>
    </div>
  </div>
</section>

<!-- Osjetite razliku — video desno -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Poczuj różnicę: trwała ulga zaczyna się dziś</h2>
      <p>Nie chwilowy spokój, ale zmiana, którą zauważysz. <strong>Większość użytkowników czuje prawdziwą różnicę w ciągu pierwszych 7–14 dni</strong> regularnego stosowania. Poranna sztywność puszcza, a schodzenie po schodach przestaje być kalkulacją.</p>
      <ul class="nkh-tri">
        <li><strong>Mniej sztywności i ucisku:</strong> zmniejsza napięcie i obrzęk, które podtrzymują dolegliwości.</li>
        <li><strong>Lepsze krążenie:</strong> przywraca przepływ w głębszych tkankach kolana — tam, gdzie problem naprawdę powstaje.</li>
        <li><strong>Wszystko w domu:</strong> bez dojazdów na zabiegi i bez czekania na wizytę.</li>
      </ul>
    </div>
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-zglob.mp4', 'kh-vid-zglob.jpg', 'Staw kolanowy' ); ?></div>
  </div>
</section>

<!-- Pametna tehnologija — video lijevo -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media"><?php echo $kh_vid( 'kh-vid-led.mp4', 'kh-vid-led.jpg', 'Elementy grzewcze w opasce' ); ?></div>
        <div class="nkh-copy">
      <h2 class="nkh-h2">Inteligentna technologia dla głębszych tkanek</h2>
      <p>Dopasuj NORIKS KneeHeat do swojego kolana: <strong>3 poziomy ciepła</strong>, <strong>3 tryby wibracji</strong> i <strong>cykliczna kompresja</strong>. Bez kabla, jeden przycisk, dwanaście minut.</p>
      <ul class="nkh-tri">
        <li><strong>Zawsze gotowy:</strong> praca bezprzewodowa i ładowanie przez USB-C.</li>
        <li><strong>Przenośny:</strong> jest lekki i mieści się w torbie — używaj go, gdziekolwiek jesteś.</li>
        <li><strong>Prosta obsługa:</strong> jeden przycisk, bez aplikacji i bez konfiguracji.</li>
      </ul>
    </div>
  </div>
</section>


<!-- 2) Trostruka metoda — slika desno -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Trzy terapie w jednej sesji</h2>
      <p>Ogrzewanie, kompresja i wibracje nie działają po kolei, lecz jednocześnie — dlatego jedna sesja trwa tylko 12 minut.</p>
      <ul class="nkh-tri">
        <li><strong>Ciepło do 42 °C</strong> rozszerza naczynia krwionośne i zmiękcza sztywną tkankę wokół stawu.</li>
        <li><strong>Kompresja powietrzna</strong> rytmicznie ściska i zwalnia, wypycha nagromadzony płyn i przywraca świeżą krew.</li>
        <li><strong>Masaż wibracyjny 60 Hz</strong> rozluźnia napięcie i sztywność, która trzyma kolano „zablokowane".</li>
      </ul>
      <p class="nkh-note">W przeciwieństwie do urządzeń TENS, które tylko maskują sygnał bólu, KneeHeat działa na głębsze tkanki.</p>
    </div>
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-04-metoda.jpg', 'Potrójna metoda: ciepło, kompresja i wibracje' ); ?></div>
  </div>
</section>


<!-- 4) Značajke uređaja — slika desno -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-11-znacajke.jpg', 'Cechy urządzenia NORIKS KneeHeat' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Stworzony do noszenia, a nie do szuflady</h2>
      <p>Panel sterowania jest na zewnątrz, pod ręką: <strong>jedno dotknięcie zmienia poziom ciepła</strong>, drugie tryb wibracji. Żadnego menu ani aplikacji, której trzeba szukać po ciemku.</p>
      <p>Opaska zapina się na dwa paski, więc sam wybierasz, jak mocno ma trzymać — luźniej, gdy siedzisz, mocniej, gdy chodzisz po domu. Urządzenie zostaje wtedy na miejscu i nie obraca się wokół nogi.</p>
      <p class="nkh-strong">Jest bezprzewodowy i ładuje się kablem USB-C; jedno ładowanie wystarcza na kilka sesji, więc możesz go zabrać do pracy lub w podróż.</p>
    </div>
  </div>
</section>

<!-- 5) Što je u paketu — slika lijevo -->
<section class="nkh-sec nkh-light">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-copy">
      <h2 class="nkh-h2">Co otrzymujesz w zestawie</h2>
      <ul class="nkh-pack">
        <li><strong>Urządzenie NORIKS KneeHeat</strong> — opaska z ogrzewaniem, kompresją i wibracjami</li>
        <li><strong>Pleciony kabel USB-C</strong> do ładowania</li>
        <li><strong>Pasek przedłużający</strong> dla większych obwodów nogi</li>
        <li><strong>2 lata gwarancji wymiany</strong></li>
      </ul>
    </div>
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-07-unboxing-h.jpg', 'Zawartość zestawu NORIKS KneeHeat' ); ?></div>
  </div>
</section>


<!-- 7) Liječnik — slika desno -->
<section class="nkh-sec nkh-white">
  <div class="nkh-wrap nkh-row">
    <div class="nkh-media nkh-graf"><?php echo $kh_img( 'kh-02-lijecnik.jpg', 'Rekomendacja ortopedy' ); ?></div>
    <div class="nkh-copy">
      <h2 class="nkh-h2">Stworzony dla codziennego komfortu i ruchu</h2>
      <p class="nkh-quote">„Przy przewlekłych dolegliwościach kolana po 45. roku życia najbardziej opłaca się to, co można robić codziennie w domu. Ciepło, kompresja i wibracje razem przywracają przepływ w tkankach — a to fundament, na którym działa wszystko inne.”</p>
      <p class="nkh-sign">Dr Marek Kowalski, ortopeda</p>
    </div>
  </div>
</section>

<!-- 8) Dodaci i jamstvo — slika lijevo -->
<!-- 9) Jamstvo — slika desno -->
<style>
.nkh-sec { padding: 46px 0; }
.nkh-light { background: #f3f0ea; color: #1f2a37; }
.nkh-white { background: #fff;    color: #1f2a37; }
.nkh-dark  { background: #12233b; color: #eef3f9; }
.nkh-dark h2, .nkh-dark h3, .nkh-dark p, .nkh-dark li, .nkh-dark strong { color: #eef3f9; }
.nkh-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nkh-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
.nkh-media img { width: 100%; height: auto; display: block; border-radius: 14px; }
.nkh-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #c1601f; margin: 0 0 8px; }
.nkh-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.nkh-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.nkh-strong { font-weight: 600; }
.nkh-note { font-size: 14.5px; opacity: .85; margin: 4px 0 0; }
.nkh-quote { font-style: italic; font-size: 16.5px; }
.nkh-sign { font-size: 14px; opacity: .75; margin: 0; }
.nkh-ticks, .nkh-tri, .nkh-pack { list-style: none; padding: 0; margin: 14px 0 0; }
.nkh-ticks li { position: relative; padding-left: 24px; margin-bottom: 7px; font-size: 15px; }
.nkh-ticks li:before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #c1601f; }
.nkh-tri li { border-left: 3px solid #c1601f; padding: 2px 0 2px 14px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nkh-pack li { position: relative; padding-left: 22px; margin-bottom: 8px; font-size: 15px; line-height: 1.5; }
.nkh-pack li:before { content: "✓"; position: absolute; left: 0; top: 0; color: #1e8f4e; font-weight: 800; }
.nkh-steps { list-style: none; padding: 0; margin: 14px 0 0; }
.nkh-steps li { display: flex; gap: 12px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nkh-steps span { flex: 0 0 auto; width: 28px; height: 28px; border-radius: 50%; background: #c1601f; color: #fff;
                  font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 14px; }

.nkh-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; align-items: start; }
.nkh-three figure { margin: 0; }
.nkh-three img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nkh-three figcaption { text-align: center; font-size: 13px; margin-top: 7px; opacity: .72; }
.nkh-mini { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 14px; }
.nkh-mini figure { margin: 0; }
.nkh-mini img { width: 100%; height: auto; display: block; border-radius: 10px; }
.nkh-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #e3ded4; border-radius: 12px; color: #7a6a55; font-size: 14px; text-align: center; padding: 12px; }
@media (max-width: 820px) {
  .nkh-sec { padding: 22px 0; }
  .nkh-wrap { padding-left: 0; padding-right: 0; }
  .nkh-h2 { font-size: 22px; }
  .nkh-row { grid-template-columns: 1fr; gap: 18px; }
  .nkh-steps3 { grid-template-columns: 1fr; gap: 18px; }
  .nkh-three { grid-template-columns: 1fr; gap: 14px; }
  .nkh-row .nkh-media { order: -1; }
}

/* kratek opis izdelka: kljukice namesto pikic (kot pri udlagi proti hrkanju) */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 8px 0 14px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 24px !important;
  text-indent: -24px !important; margin-left: 0 !important; line-height: 1.55 !important; margin-bottom: 8px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nkh-tick {
  display: inline-block !important; width: 24px !important; text-indent: 0 !important;
  color: #c1601f !important; font-weight: 800 !important; }
/* slika naj bo poravnana na rob kontejnerja, ne na sredino stolpca */
.nkh-center { text-align: center; }

.nkh-steps3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.nkh-step3 { background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.07); }
.nkh-step3 .nkh-video { width: 100%; height: auto; display: block; }
.nkh-step3-txt { padding: 16px 18px 20px; }
.nkh-step3-h { display: flex; align-items: center; gap: 10px; font-size: 17px; font-weight: 700; margin: 0 0 6px !important; }
.nkh-step3-h span { flex: 0 0 auto; width: 27px; height: 27px; border-radius: 50%; background: #c1601f; color: #fff;
                    font-size: 13px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkh-step3-txt p:last-child { font-size: 14.5px; margin: 0 !important; }
.nkh-media .nkh-video { width: 100%; height: auto; display: block; border-radius: 14px; }
.nkh-sec p.nkh-lead { max-width: 720px; margin: 0 auto 22px !important; opacity: .85; text-align: center; }
.nkh-sec .nkh-center { text-align: center; }
.nkh-sec .nkh-lead-copy { max-width: 820px; margin: 0 auto 22px !important; text-align: center; }
.nkh-sec .nkh-lead-copy p { margin-left: auto !important; margin-right: auto !important; }
.nkh-sec .nkh-lead-copy h2 { text-align: center; }
</style>
