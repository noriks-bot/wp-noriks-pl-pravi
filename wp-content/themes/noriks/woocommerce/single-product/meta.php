<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<style>

      .features2 {
    margin-top: 12px;
    margin-bottom: 12px;
      }

      .features__row {
        display: flex;
        justify-content: space-between;
        gap: 28px;
      }

      .feature {
        flex: 1 1 0;
        text-align: center;
      }

      .feature__icon {
 
        margin: 0 auto 0px;
        display: block;
        margin-bottom: 0 !important;
      }

      .feature__text {
        margin: 0;
        line-height: 1.1;
    font-size: 14px;
    margin: 0;
        font-family: 'Barlow', sans-serif;
      }

      /* Responsive: stack nicely on small screens */
      @media (max-width: 640px) {
        .features__row {
     
        }
      }
    </style>


 <section class=" features2" aria-label="Prednosti">
      <div class="features__row">
        <!-- 1) Truck -->
        
        
          <div class="feature">
          
  <img src="<?php echo get_template_directory_uri(); ?>/img/cod_icon_.png" alt="Customer Support Icon" class="feature__icon info-icon">
          <p class="feature__text">Płatność za pobraniem</p>
        </div>
        
        
        <div class="feature">
      <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon1-1.png" alt="Shirt Icon" class="feature__icon info-icon">
          <p class="feature__text">Wypróbuj przez 30 dni – bez ryzyka</p>
        </div>
        
        

        <!-- 2) Smiley -->
        <div class="feature">
     
       
        <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon3-1.png" alt="Shipping Icon" class="feature__icon info-icon">
          <p class="feature__text">Darmowa dostawa przy zamówieniach powyżej 300 zł</p>
        </div>

    
    
      </div>
    </section>




<?php if ( noriks_is_type( 'ortopas' ) ) : ?>
<!-- Ortopas: kartica "preverjeno s strani zdravnika" (slika) -->
<div class="ortopas-doctor-card" style="margin:14px 0;">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/ortopas/ortopas-zdravnik.png' ); ?>"
       alt="Sprawdzone przez lekarza — pas ortopedyczny NORIKS"
       style="width:100%; height:auto; display:block; border-radius:10px;"
       loading="lazy" decoding="async">
</div>
<?php endif; ?>

<!-- date and countdown section -->

<div class="shipping-box">
  <h2 id="shipping-window" class="shipping-title"></h2>
  <p class="shipping-sub">
    Zamów w ciągu najbliższych  <span id="midnight-countdown" class="countdown"></span>
  </p>
</div>

<style>
  .shipping-box { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; color:#222; margin-top: 13px;
    margin-bottom: 13px; 
      
    background: #f4f4f4;
    padding: 8px 6px 8px 12px;
    border-radius: 5px;
          text-align: center;
      
      
      
  }
  .shipping-title { font-family: 'Roboto', sans-serif;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 1.4 !important; margin-bottom: 0px;
    color: #222 !important; }
  .shipping-sub { font-size: 14px; margin: 0; }
  .countdown { color: #22a155; font-weight: 700; }
</style>

<script>
  (function () {
  const weekdays = ['Niedziela','Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota'];

    // Helper to add business days (skip Saturday/Sunday)
    function addBusinessDays(date, days) {
      let result = new Date(date);
      let added = 0;
      while (added < days) {
        result.setDate(result.getDate() + 1);
        const day = result.getDay();
        if (day !== 0 && day !== 6) { // skip Sunday(0) + Saturday(6)
          added++;
        }
      }
      return result;
    }

    // Get shipping days: today +2 business days, today +3 business days
    const today = new Date();
    const first  = addBusinessDays(today, 2);
    const second = addBusinessDays(today, 3);

    function formatDayMonth(d) {
      return `${d.getDate()}.${d.getMonth()+1}.`; // e.g. 21.8.
    }

    const windowEl = document.getElementById('shipping-window');
    windowEl.textContent = `Dostawa od ${weekdays[first.getDay()]}  ${formatDayMonth(first)} do ${weekdays[second.getDay()]}, ${formatDayMonth(second)}`;

    // Countdown to midnight
    const cdEl = document.getElementById('midnight-countdown');

    function nextMidnight(now) {
      const n = new Date(now);
      n.setHours(24, 0, 0, 0);
      return n;
    }

    function updateCountdown() {
      const now = new Date();
      const end = nextMidnight(now);
      let diff = Math.max(0, end - now);

      const h = Math.floor(diff / 3_600_000); diff -= h * 3_600_000;
      const m = Math.floor(diff / 60_000);    diff -= m * 60_000;
      const s = Math.floor(diff / 1000);

      cdEl.textContent = `${h}h ${m}min ${s}s`;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  })();
</script>


<!-- date and countdown section -->





<?php 

$is_singles_boxers = has_term( 'singles-boxers', 'product_cat', $current_product_id );

$is_boxers = has_term( array( 'bokserki','1-sztuka-bokserki','orto-bokserice','pakiet-3-szt-bokserki' ), 'product_cat', $current_product_id ) && ! has_term( array( 'black-friday' ), 'product_cat', $current_product_id );

$is_carape = has_term( array( 'skarpety' ), 'product_cat', $current_product_id );

$is_mixed_bundle = has_term( array( 'komplety','orto-starter','pakiety-startowe' ), 'product_cat', $current_product_id );

?>



<?php if( !$is_boxers && !$is_carape ): ?>


<!-- my thre icons content -->


<div class="features">
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img1","option"); ?>" alt="Perfect Fit">
      <p><?php echo get_field("singlepp_icon_t1","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img2","option"); ?>" alt="Hides Dad Bod">
      <p><?php echo get_field("singlepp_icon_t2","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img3","option"); ?>" alt="Breathes">
       <p><?php echo get_field("singlepp_icon_t3","option"); ?></p>
    </div>
  </div>


<style>


    .features {
      display: flex;
    justify-content: space-between;
    gap: 16px;
    margin-top: 15px;
    margin-bottom: 15px;
    }

    .feature-card {
    display: flex
;
    flex-direction: column;
    align-items: center;
    flex: 1;
    gap: 8px;
    border-radius: 5px;
    background: #F4F4F4;
    padding: 16px;
    font-size: 14px;
    font-weight: 400;
    color: #111213;
    line-height: 1.2;
    text-align: center;
    }

    .feature-card img {
      width: 32px;
      height: 32px;
      margin-bottom: 0px;
    }

    .feature-card p {
      margin: 0;
      font-weight: 500;
      font-size: 14px;
      color: #222;
       letter-spacing: -0.5px !important;
    }
  </style>
  
 <?php endif; ?>


<!--
<div style="margin-bottom: 15px;" class="woocommerce-product-details__short-description">
    
    
	<?php echo apply_filters( 'the_content', $product->get_description() );  ?>
	
	
</div>
-->



 <!-- icons -->
 
 <!--
 <div class="info-section">

    <div class="info-box">
     
     
     
      

     <img src="<?php echo get_field("singlepp_bottomicons_img1","options"); ?>" alt="" width="25" height="25">
     <?php echo get_field("singlepp_bottomicons_t1","options"); ?>

    
     
     
    </div>
    
    
    
     <div class="info-box">
    
         <a href="tel:+38517776471" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none; ">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 1 .737-.07l2.547 1.272a.678.678 0 0 1 .291.901L6.29 5.72a.678.678 0 0 0 .145.776l2.457 2.457a.678.678 0 0 0 .776.145l2.29-1.24a.678.678 0 0 1 .901.291l1.272 2.547a.678.678 0 0 1-.07.737l-1.175 1.769c-.46.692-1.232 1.043-2.036.964-2.322-.238-4.96-2.223-6.856-4.12C1.77 7.667-.214 5.03.024 2.707c.079-.804.272-1.577.964-2.036L3.654 1.33z"/>
  </svg>
  01 777 64 71
</a>

<a href="mailto:info@noriks.com" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
  </svg>
  info@noriks.com
</a>
         
   
     </div>
     

    <div class="info-grid">
      
      
      
      
      <div class="info-box">
       <img src="<?php echo get_field("singlepp_bottomicons_img2","options"); ?>" alt=""  width="25" height="25">
        <?php echo get_field("singlepp_bottomicons_t2","options"); ?>
      </div>
      <div class="info-box">
  
<img src="<?php echo get_field("singlepp_bottomicons_img3","options"); ?>" alt=""  width="25" height="25">
<?php echo get_field("singlepp_bottomicons_t3","options"); ?>
      </div>
    </div>

  </div>
  -->
  
  <style>


    .info-section {
      display: flex;
      flex-direction: column;
      gap: 7px;
      max-width: 800px;
      margin: auto;
      margin-bottom: 25px;
    }
    
    .info-section img {
      width: 25px;
    }


    .info-box {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background-color: #f5f6f8;
      border-radius: 3px;
      padding: 16px;
      color: #7b8a9b;
      font-weight: 500;
      font-size: 14px;
          font-family: 'Roboto', sans-serif; 
      text-align: center;
    }

    .info-grid {
      display: flex;
      gap: 7px;
    }

    .info-grid .info-box {
      flex: 1;
    }

    .info-box svg {
      width: 24px;
      height: 24px;
      fill: #7b8a9b;
    }
  </style>









 <!-- icons -->


 <div class="accordion">


    <!-- KidsNest: prva dva accordion mjesta (dugi sadrzaj iz summary-ja) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Twarz Twojego dziecka kształtuje się właśnie teraz — a czas masz do 9. roku życia</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Badacze dróg oddechowych i stomatolodzy dziecięcy od lat ostrzegają przed tym samym schematem — o którym większość rodziców nigdy nie słyszała. Nazywa się <strong>zespołem wydłużonej twarzy</strong> (twarz adenoidalna).</p>
        <p>Każdej nocy, gdy dziecko śpi z otwartymi ustami na niewłaściwej poduszce, dzieją się cztery rzeczy naraz: język opada do tyłu, żuchwa się cofa, podniebienie zwęża się w wysoki łuk, a twarz zaczyna rosnąć pionowo zamiast poziomo. Po tysiącach takich nocy między 3. a 9. rokiem życia zmiany się utrwalają.</p>
        <p>Dlatego dzisiejsze 9-latki trafiają do ortodonty z cofniętą brodą, cieniami pod oczami, stłoczonymi zębami — i drogim rachunkiem za aparat. Sposób, w jaki dziecko oddycha między 3. a 9. rokiem życia, silnie wpływa na twarz, którą będzie nosić przez całe życie.</p>
        <p>NORIKS <strong>KidsNest</strong> została zaprojektowana, aby działać na podstawową przyczynę — niewłaściwe ułożenie głowy i żuchwy przez 9 godzin snu — dzięki <strong>3-strefowej ergonomicznej strukturze</strong>, która utrzymuje głowę, szyję i żuchwę w prawidłowym ułożeniu od pierwszej nocy.</p>
        <p><strong>Co zobaczysz u swojego dziecka:</strong></p>
        <ul style="margin:6px 0 12px;padding-left:18px;">
          <li style="margin:0 0 7px;"><strong>Mniej oddychania przez usta:</strong> usta zamknięte w nocy, powrót oddychania przez nos, koniec suchych ust rano.</li>
          <li style="margin:0 0 7px;"><strong>Cichsze noce:</strong> chrapanie u większości dzieci uspokaja się w ciągu 1–2 tygodni.</li>
          <li style="margin:0 0 7px;"><strong>Wsparcie rozwijającej się żuchwy:</strong> prawidłowe ułożenie noc po nocy, w latach, kiedy liczy się to najbardziej.</li>
          <li style="margin:0 0 7px;"><strong>Mądra profilaktyka:</strong> jedna poduszka dziś — zamiast kosztownych korekt jutro.</li>
        </ul>
        <p><strong>Jedna poduszka dziś wieczorem. Albo tysiące później.</strong></p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Starsze niż 9 lat? Okno się zwęża. Szkody nie ustają.</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Rada, którą słyszałeś, jest tylko w połowie prawdziwa. Tak, górne podniebienie utrwala się około 9. roku życia. Ale twarz rozwija się do 20., żuchwa rośnie do 17., a drogi oddechowe stale się dostosowują.</p>
        <p>Dlatego każda noc oddychania przez usta po 9. roku życia dokłada nowe szkody do starych: zgrzytanie zębami, bóle głowy, sen, który nie regeneruje, spadek koncentracji — i zmęczenie, które wszyscy mylą z lenistwem. Twój nastolatek nie jest leniwy. On ledwo oddycha przez sześć godzin każdej nocy.</p>
        <p>KidsNest w rozmiarze <strong>9–18 lat</strong> została stworzona dla starszej głowy, szyi i ramion. Inny kontur, inna wysokość, inne podparcie. Ten sam podstawowy mechanizm: prawidłowe ułożenie głowy, szyi i żuchwy, przez całą noc, na ciele, które wciąż rośnie.</p>
        <p>Co zauważają rodzice: chrapanie uspokaja się w 7 do 14 nocy, wraca prawdziwa poranna energia, bóle głowy bledną, koncentracja wraca.</p>
        <p>Najlepsze okno to nadal wiek od 3 do 9 lat. Silne okno to od 8 do 18. Żadne nie jest całkiem zamknięte — ale każda noc czekania dodaje presji ciału, które próbuje się regenerować.</p>
        <p><strong>Wczoraj minęło. Dzisiejszy wieczór wciąż należy do Ciebie.</strong></p>
      </div>
    </div>
    <?php endif; ?>


    <!-- ErgoSit ortopedski jastuk: prva dva accordion mjesta (kopija originala, PL) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'ortopedski-jastuk', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Specyfikacja produktu</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 8px;"><strong>Poszewka zewnętrzna:</strong> Przewiewna dzianina, zdejmowana i nadająca się do prania w pralce, hipoalergiczna</li>
          <li style="margin:0 0 8px;"><strong>Rdzeń:</strong> Adaptacyjna pianka OrthoFlex™ | Nietoksyczna, z certyfikatem OEKO-TEX® | Zaprojektowana, by odciążać nacisk + wyrównywać postawę</li>
        </ul>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Co czyni ją tak wyjątkową?</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 10px;"><strong>Pianka memory OrthoFlex™:</strong> Pianka o wysokiej gęstości, która odciąża nacisk i dopasowuje się bez odkształcania — podpiera kość ogonową, biodra i kręgosłup dla całodziennego komfortu.</li>
          <li style="margin:0 0 10px;"><strong>Poszewka BreatheEase™:</strong> Miękka, przewiewna i delikatna dla skóry. Zdejmowana i nadająca się do prania w pralce, aby poduszka zawsze pozostała świeża.</li>
          <li style="margin:0 0 10px;"><strong>Zrównoważone podparcie:</strong> Ani za miękko, ani za twardo. Zaprojektowana tak, aby wyrównywać postawę i łagodzić bolesne punkty po długich godzinach siedzenia.</li>
        </ul>
      </div>
    </div>
    <?php endif; ?>


    <!-- 1 - detajli --> <!-- ukryte na norikshers + ortopedski jastuk -->
    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_1","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

         <?php if( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

                Poduszka NORIKS KidsNest wykonana jest z hipoalergicznej pianki memory z certyfikatem OEKO-TEX® — bez formaldehydu, metali ciężkich i BPA — z przewiewną, nadającą się do prania poszewką, którą łatwo zdjąć.<br><br>Jej 3-strefowa ergonomiczna struktura delikatnie przyjmuje głowę, podpiera szyję i pomaga utrzymać kręgosłup w naturalnym ułożeniu — nawet gdy dziecko dużo obraca się w nocy. W ten sposób wspiera oddychanie przez nos oraz spokojniejszy, głębszy sen.<br><br>Dostępna w trzech rozmiarach (1–3, 3–9 i 9–18 lat), rośnie razem z dzieckiem i zapewnia właściwą wysokość podparcia na każdym etapie rozwoju.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Bokserki NORIKS na nietrzymanie moczu wykonane są z miękkiego, antybakteryjnego włókna bambusowego z wodoodporną warstwą zewnętrzną. W środku znajduje się 7-warstwowy rdzeń PureDry™, który natychmiast wchłania i zamyka do 300 ml płynu, dzięki czemu skóra pozostaje sucha, a wyciek zostaje w środku.<br><br>Krój jest cienki i dyskretny — wyglądają i czują się jak zwykła bielizna, bez pogrubienia i bez uczucia „pieluchy”. Ochrona przy nogawkach zapobiega bocznym przeciekom, a kontrola zapachu utrzymuje świeżość przez cały dzień.<br><br>Nadają się do prania i wielokrotnego użytku — zachowują chłonność przez setki prań, jako ekologiczna i opłacalna alternatywa dla jednorazowych wkładek i pieluch.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                NORIKS FIT wykonany jest z zaawansowanej jonowej tkaniny kompresyjnej, która zapewnia dopasowany, podtrzymujący krój. Ukierunkowana kompresja równomiernie modeluje brzuch i boki, wygładza sylwetkę i wspiera wyprostowaną postawę — bez ucisku, który ogranicza oddychanie czy ruch.<br><br>Mikrotkane włókna wspierają krążenie i pomagają w ciągu dnia stać prościej i czuć się pewniej. Tkanina jest lekka, przewiewna i odprowadza wilgoć, więc pozostajesz suchy i komfortowy.<br><br>Cienki i dyskretny krój sprawia, że jest niewidoczny pod każdą koszulą, a jednocześnie może służyć jako koszulka sportowa. Efekt: ostrzejszy wygląd, lepsza postawa i pewność siebie — gdy tylko go założysz.

         <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle ): ?>



        <?php echo get_field("singlepp_acc_t_1","options"); ?>


        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>
        
        
        Nasze koszulki premium wykonane są z wysokiej jakości mieszanki 60% bawełny ring-spun i 40% poliestru, co zapewnia wyjątkowo miękką tkaninę odporną na gniecenie.

Okrągły dekolt został zaprojektowany z myślą o idealnym dopasowaniu, gwarantując schludny i komfortowy wygląd.

To, co wyróżnia nasze koszulki, to klasyczny design i dbałość o detale. Tradyczny boczny szew zapewnia lepsze dopasowanie, a sitodrukowana metka eliminuje podrażnienia w okolicy szyi. Dzięki temu koszulki łączą maksymalny komfort z prostym, ponadczasowym stylem.  <br>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $current_product_id) ): ?>

                NORIKS FisioRest to terapeutyczna poduszka na szyję, która łączy trakcję, ciepło i masaż wibracyjny w ergonomicznej konstrukcji z pianki pamięciowej. Delikatnie rozciąga szyję pod odpowiednim kątem, odciąża odcinek szyjny kręgosłupa oraz ciepłem i masażem rozluźnia napięcie mięśniowe. Bezprzewodowa, ładowana i otulona miękkim, chłodzącym jedwabiem — bezpieczna także do snu.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) ): ?>

                Korektor haluksa NORIKS z zaawansowaną terapią korekcji i opatentowanym mechanizmem przegubowym delikatnie przywraca paluch do naturalnego położenia, łagodzi dyskomfort i zapobiega dalszemu powiększaniu się wybrzuszenia. Elastyczna konstrukcja pozwala w nim chodzić. Dopasowuje się do każdego rozmiaru stopy, bez wersji na lewą i prawą stronę. Do stosowania w spoczynku — podczas odpoczynku, oglądania TV, czytania lub snu.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

                Ortopedyczny pas NORIKS celowo stabilizuje dolną część pleców dzięki ukierunkowanej kompresji, prawidłowo ustawia miednicę i odciąża nerw kulszowy. Cienki i niewidoczny pod ubraniem, z regulowanym stopniem podparcia. Odpowiedni przy bólu krzyża, rwie kulszowej, napięciu mięśniowym i problemach ze stawem krzyżowo-biodrowym.

        <?php else: ?>



            <?php echo get_field("__overwrite_sekcije_bellow_1"); ?>
            
            
        <?php endif; ?>
        
        
        
      </div>
    </div>
    <?php endif; /* koniec ukrywania detali na norikshers */ ?>




     <!-- 2 - slika tablica velicina -->
     <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) ) ) : // brak tabeli rozmiarów dla bunion + fisiorest + norikshers + ortopedski jastuk ?>
     <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Tabela rozmiarów</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

           <?php if( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

          <div class="kn-size">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kidsnest/tablica-velicine.webp" alt="KidsNest — rozmiary według wieku" style="width:100%;height:auto;border-radius:10px;display:block;margin:0 0 12px;" loading="lazy">
            <p style="margin:0;line-height:1.6;"><strong>Dziecko jest między dwoma rozmiarami?</strong> Zawsze wybierz większy. Poduszka została zaprojektowana, aby wspierać zdrowe ułożenie w miarę wzrostu dziecka — większy rozmiar daje więcej miejsca i dłuższy okres użytkowania.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

          <div class="lbx-size">
            <p style="margin:0 0 6px;font-weight:700;">Jak zmierzyć biodra</p>
            <p style="margin:0 0 14px;line-height:1.6;">Owiń taśmę mierniczą wokół najszerszego miejsca bioder (przez pośladki), bez naciągania. Stój swobodnie i prosto, a następnie zapisz wynik w centymetrach.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#12233b;color:#fff;">
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Rozmiar</th>
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Biodra (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lbx_sizes = array(
                  array('S','do 76 cm','do 30"'),
                  array('M','77 – 85 cm','30 – 33"'),
                  array('L','86 – 94 cm','34 – 37"'),
                  array('XL','95 – 102 cm','37 – 40"'),
                  array('2XL','103 – 114 cm','41 – 45"'),
                  array('3XL','115 – 121 cm','45 – 48"'),
                  array('4XL','122 – 129 cm','48 – 51"'),
                  array('5XL','130 – 137 cm','51 – 54"'),
                  array('6XL','138 – 145 cm','54 – 57"'),
                  array('7XL','146 – 153 cm','57 – 60"'),
                  array('8XL','154 cm i więcej','61" i więcej'),
                );
                foreach ( $lbx_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7fafb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:8px 10px;font-weight:700;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:8px 10px;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Między dwoma rozmiarami?</strong> Zawsze polecamy większy rozmiar dla optymalnego komfortu i maksymalnej chłonności.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

          <div class="kmf-size">
            <table style="width:100%;border-collapse:collapse;font-size:15px;">
              <thead>
                <tr style="background:#111;color:#fff;">
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Rozmiar</th>
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Odpowiednia waga</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $kmf_sizes = array(
                  array('S','50 – 70 kg'), array('M','70 – 90 kg'), array('L','90 – 110 kg'), array('XL','110 – 130 kg'),
                  array('2XL','130 – 150 kg'), array('3XL','150 – 170 kg'), array('4XL','170 – 190 kg'), array('5XL','190 – 210 kg'),
                );
                foreach ( $kmf_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f4f4' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eaeaea;">
                    <td style="padding:9px 12px;font-weight:800;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:9px 12px;font-weight:700;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:12px 0 0;line-height:1.6;">Wybierz rozmiar według swojej wagi. Między dwoma rozmiarami? Dla mocniejszej kompresji wybierz mniejszy rozmiar.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : obwód bioder 75–110 cm<br>
            <strong>L/XL</strong> : obwód bioder 110–140 cm<br><br>
            Zmierz obwód bioder, aby dobrać swój rozmiar.
          </div>

        <?php elseif( $is_boxers ): ?>

        
          <img src="https://noriks.com/pl/wp-content/uploads/2026/02/boxers_size_Pl.png">
          
          
          
        
        <?php elseif(  $is_carape ): ?>
        
        
                  <img src="/hr/wp-content/uploads/2025/11/Nogavice_tabela_velikosti.jpg">
                  
    <?php elseif(  $is_mixed_bundle ): ?>
    
     <img src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">
     
     
    <img src="https://noriks.com/pl/wp-content/uploads/2026/02/boxers_size_Pl.png">
    
    
          <?php else: ?>
      
      
       <img src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">
        
            
        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /brak tabeli rozmiarów dla bunion + fisiorest ?>




    <!-- 3 - savjeti za pranje--> <!-- ukryte też na kidsnest -->
    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('ortopas', $current_product_id) || noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('kidsnest', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) ) ) : // brak porad dot. prania dla pas/bunion/fisiorest/norikshers/kidsnest/ortopedski jastuk ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_2","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
             <?php if( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Pierz w 30–40 °C, w programie dla tkanin delikatnych. Bez płynu zmiękczającego i wybielacza. Susz na powietrzu. Zachowują chłonność przez setki prań.

             <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                Pranie w pralce w zimnej wodzie, w programie delikatnym. Bez wybielacza i płynu zmiękczającego. Nie suszyć w suszarce — susz na powietrzu, aby zachować kompresję i kształt.

             <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle ): ?>
        <?php echo get_field("singlepp_acc_t_2","options"); ?>
        
         
        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>
        
        
        
                         Pierze kolory razem z kolorami.

Program delikatny w zimnej wodzie.

Susz na płasko lub w suszarce w niskiej temperaturze.

Łatwe zwroty i darmowe wymiany


     
        
        
          <?php else: ?>
            <?php echo get_field("__overwrite_sekcije_bellow_3"); ?>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /brak porad dot. prania dla pas/bunion/fisiorest ?>



    <!-- 4 povrati in menjave -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_3","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
       <p></p>
       
       
       Tak bardzo wierzymy, że NORIKS Ci się spodoba, że masz <b></b>30 dni</b> na zwrot lub bezpłatną wymianę. Bez formalności, bez stresu — wszystko załatwimy w kilku kliknięciach.
info@noriks.com
Wystarczy, że napiszesz do nas maila z informacją, że chcesz wymiany, a my od razu się tym zajmiemy.


</p>

<p>
    



  <a href="mailto:info@noriks.com" style="display: flex; align-items: center; text-decoration: none; color: #333;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#333" style="margin-right: 6px;" viewBox="0 0 16 16">
      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
    </svg>
    info@noriks.com
  </a>
</p>
<p>Wystarczy, że napiszesz do nas maila z informacją, że chcesz wymiany, a my od razu się tym zajmiemy.”</b></p>
       
       
      </div>
    </div>



    <!-- 5 - infomraicje o dostavi -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_4","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <?php echo get_field("singlepp_acc_t_4","options"); ?>
      </div>
    </div>
    
    
    <!-- konec 5 acrodinov -->

  </div>

  <script>
    function toggleAccordion(header) {
      const item = header.parentElement;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    }
  </script>
  
  
  <style>
      
       .accordion {
      border-top: 1px solid #ddd;
    }

    .accordion-item {
      border-bottom: 1px solid #ddd;
    }

    .accordion-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 5px 5px 0px;
      cursor: pointer;
    }

    .accordion-header h3 {
      display: flex;
      align-items: center;
      font-weight: 500;
      font-size: 16px;
      margin: 0;
      gap: 2px;
      font-family: 'Roboto', sans-serif;  
    }

    .accordion-content {
      padding: 0 0 0 0;
      display: none;
      font-size: 14px;
      font-family: 'Roboto', sans-serif;  
      line-height: 1.6;
      color: black;
    }

    .accordion-item.open .accordion-content {
      display: block;
    }

    .icon {
      width: 24px;
      height: 24px;
      display: inline-block;
      background-size: contain;
      background-repeat: no-repeat;

    }
    
    .icon-details {
   
      margin: 0 0px 0 10px !important;
    }
    
    .icon-size {
   
      margin: 0 0px 0 10px !important;
    }

    /* Placeholder icons using emojis 
    
    .icon.details::before { content: "📝"; }
     .icon.size::before { content: "👕"; }
    .icon.laundry::before { content: "🧺"; }
    .icon.returns::before { content: "↩️"; }
    .icon.shipping::before { content: "📦"; }
*/
    .toggle {
      font-size: 24px;
      transition: transform 0.3s ease;
    }

    .accordion-item.open .toggle {
      transform: rotate(45deg);
    }
  </style>








<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( ProductType::VARIABLE ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
