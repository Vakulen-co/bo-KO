<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="pl">
   <head>
      <base href="<?php echo $base ?>">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>The Crypto Genius</title>
      <link rel="shortcut icon" type="image/jpg" href="Cryptogenius_files/favicon.png"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link href="./Cryptogenius_files/index.4fa3ef94.css" rel="stylesheet">
      <link rel="stylesheet" href="./Cryptogenius_files/main.css">
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
      <!-- Open Graph -->
    <?php $seoText = 'Witamy!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>video/1.png"/>
    <meta property="og:image:width" content="450"/>
    <meta property="og:image:height" content="450"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $base; ?>"/>
    <link rel="canonical" href="<?php echo $base; ?>"/>
    <!-- Pixel -->
    <meta name="pixel_id" content="<?php echo $FacebookPixel; ?>">
    <?php if($FacebookPixel) : ?>
    <!-- INDEX.PHP -->
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $FacebookPixel ?>&ev=PageView&noscript=1"/>
    <?php endif; ?>

    <?php if($TiktokPixel) : ?>
    <script>
        !function (w, d, t) {
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
            ttq.load('<?php echo $TiktokPixel; ?>');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    <?php endif; ?>

    <?php if($GooglePixel) : ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-<?php echo $GooglePixel; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-<?php echo $GooglePixel; ?>');
        </script>
    <?php endif; ?>
   </head>
   <body>
      <div id="app-block">
         <div class="modal" style="display: none;">
            <a href="javascript:void(0);" class="close-modal">X</a>
            <div class="modal-dialog">
               <div class="modal-header">
                  <h1>POCZEKAJ!</h1>
                  <img src="./Cryptogenius_files/hand.92342a42.png" class="logo">
                  <h2>Zostało jedynie 19 wolnych miejsc</h2>
                  <p>Podejmij decyzję i nie przegap dużych zysków jakie możesz osiągnąć już w najbliższe 24 godziny!</p>
               </div>
               <div class="modal-body">
                  <p>Podaj adres e-mail i załóż swoje darmowe konto aby zacząć zarabiać</p>
                  <div class="large-4 columns"><button class="btn scrollto">Zacznij zarabiać</button></div>
               </div>
            </div>
         </div>
         <div class="wrapper">
            <div class="widget earned block-hidden show">
               <div class="just-made-money">
                  <img src="./Cryptogenius_files/93.jpg">
                  <div class="just-made">
                     <p class="jm-name">Katarzyna Wójcik</p>
                     <p class="jm-text">zarobił właśnie</p>
                     <p class="jm-amount">520 zł</p>
                  </div>
               </div>
            </div>
            <div class="widget spots-left block-hidden show">
               <div class="sl-number">
                  Tylko 2
               </div>
               <div class="sl-title">
                  wolne miejsca!
               </div>
            </div>
            <div class="hover-catch"></div>
            <header class="header">
               <img src="./Cryptogenius_files/logo.7d5c8a4e.png" title="The Crypto Genius" class="logo">
               <div class="header-slogan">
                  </br>Zarabiaj na w pełni zautomatyzowanej platformie. Nasz system generuje zyski nawet gdy śpisz!
               </div>
            </header>
            <section class="main-intro">
               <div class="centered">
                  <div class="row">
                     <div class="columns large-7">
                        <div class="video-wrapper">
                           <div>
                              <div class="video-player video-player-box">
                                 <video src="./Cryptogenius_files/video-pl_360p.f96d7c11.mp4" autoplay muted controls="true" width="100%" playsinline type="video/mp4"></video>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="columns large-5">
                        <div id="form" class="form-side">
                           <div class="signup-form-holder">
                              <div class="form-widget formWrapper">
                                 <div class="fs-header">
                                    <div class="fsh-top">
                                       Wypróbuj nasze oprogramowanie w pełni za darmo, bez ukrytych kosztów
                                    </div>
                                    <div class="fsh-bottom">
                                       Zacznij zarabiać już dziś i odmień swoje dotychczasowe życie
                                    </div>
                                 </div>
                                 <div class="app" data-geo="EU" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Zacznij zarabiać"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="reviews">
               <div class="r-title">Użytkownicy, którzy zarobili najwięcej w zeszłym tygodniu wyrazili opinie na temat naszej platformy</div>
               <div class="centered">
                  <div class="row">
                     <div class="large-6 columns">
                        <div class="user-block clearfix">
                           <div class="user-img"><img src="./Cryptogenius_files/top-earner-1.b9d46064.jpg">
                           </div>
                           <div class="user-details">
                              <div class="user-name">
                                 Krystyna Kowalska
                              </div>
                              <div class="user-text">Na codzień pracuje jako opiekunka do dzieci, na platformę trafiła poprzez wywiad w Forbes. Nie ukrywam, że zainteresował mnie ten temat i postanowiłam się zarejestrować. Dokonałam jednej inwestycji i zyskałam na tym
                                 około 15 tysięcy euro!
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="large-6 columns">
                        <div class="user-block clearfix">
                           <div class="user-img"><img src="./Cryptogenius_files/top-earner-2.4c200d26.jpg">
                           </div>
                           <div class="user-details">
                              <div class="user-name">
                                 Marlena Kowalewicz
                              </div>
                              <div class="user-text">Kobieta na codzień pracująca w organizacji ruchu drogowego w Warszawie, w niecałe 24h od zarejestrowania konta zarobiła aż 2000zł ze swojej początkowej minimalnej inwestycji. Zainwestowała około 1000zł na start.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="large-6 columns">
                        <div class="user-block clearfix">
                           <div class="user-img"><img src="./Cryptogenius_files/top-earner-3.33d09caf.jpg">
                           </div>
                           <div class="user-details">
                              <div class="user-name">
                                 Szymon Lisiewicz
                              </div>
                              <div class="user-text">Były profesor Uniwersytetu Gdańskiego , zainwestował około 1000zł za namową znajomego z uczelni, od tamtej pory zarabia minimum 250zł na czysto każdego dnia!
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="large-6 columns">
                        <div class="user-block clearfix">
                           <div class="user-img"><img src="./Cryptogenius_files/top-earner-4.4a155708.jpg">
                           </div>
                           <div class="user-details">
                              <div class="user-name">
                                 Filip Nowicki
                              </div>
                              <div class="user-text">Był kierowcą ubera, po rozmowie z jednym z pasażerów dowiedział się o platformie i zarobił około 20 tysięcy złotych w pierwszym miesiącu od rozpoczęcia współpracy.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="large-6 columns">
                        <div class="user-block clearfix">
                           <div class="user-img"><img src="./Cryptogenius_files/top-earner-5.ce5835e0.jpg">
                           </div>
                           <div class="user-details">
                              <div class="user-name">
                                 Artur Jankowski
                              </div>
                              <div class="user-text">Pracownik działu sprzedaży w jednej z korporacji, korzystając z tego systemu zarobkowego przez dosłoweni 10 dni zarobił około 15000zł
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="large-6 columns">
                        <div class="user-block clearfix">
                           <div class="user-img"><img src="./Cryptogenius_files/top-earner-6.f98b2b75.jpg">
                           </div>
                           <div class="user-details">
                              <div class="user-name">
                                 Łucja Kwiatkowska
                              </div>
                              <div class="user-text">Przeznaczyła swoją tygodniową pensję pomocy domowej na zainwestowanie w platformę. Od tamtego momentu nie musi już pracować, tygodniowo zarabia więcej niż w swojej dotychczasowej pracy.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="faq">
               <div class="centered">
                  <div class="faq-title">Najczęściej zadawane pytania?</div>
                  <div class="faq-block">
                     <div class="faq-item">
                        <div class="fi-question">
                           Ile muszę zapłacić aby zacząć z Wami zarabiać?
                        </div>
                        <div class="fi-answer">
                           Założenie konta jest bezpłatne, po zarejestrowaniu się masz dostęp do oprogramowania i całej platformy. To ten sam program, na którym wszyscy nasi użytkownicy zarabiają. Koszt pojawia się dopiero w przypadku gdy chcesz zacząć zarabiać. Należy wpłacić
                           depozyt, lecz są to środki w pełni do Twojej dyspozycji, które możesz wypłacić w każdej chwili.
                        </div>
                     </div>
                     <div class="faq-item">
                        <div class="fi-question">
                           Ile osób może zarejestrować się na Waszej platformie?
                        </div>
                        <div class="fi-answer">Przyjmujemy tygodniowo maksymalnie 50 nowych osób. Nie możemy przyjmować więcej osób, chcemy utrzymać stabilność i skuteczność naszego automatycznego oprogramowania do zarabiania.
                        </div>
                     </div>
                     <div class="faq-item">
                        <div class="fi-question">
                           Nie posiadam jakiegokolwiek doświadczenia w temacie kryptowalut. Czy koliduje to z dołączeniem do Waszej platformy?
                        </div>
                        <div class="fi-answer">Nasze oprogramowanie wykonuje wszystkie akcje za użytkownika. Nie musisz posiadać wiedzy na temat Bitcoinów czy innych kryptowalut aby zarabiać razem z nami. Wszystko odbywa się w pełni automatycznie, możesz zarabiać nawet
                           gdy śpisz lub wykonujesz swoje codzienne obowiązki. Pieniądze wpłacone na Twoje konto na platformie możesz wypłacić w każdym możliwym momencie.
                        </div>
                     </div>
                     <div class="faq-item">
                        <div class="fi-question">
                           Jak zacząć?
                        </div>
                        <div class="fi-answer">Wypełnij formularz rejestracyjny znajdujący się na naszej stronie aby zarezerwować swoje na ten moment dostępne miejsce na naszej platformie. Po dokonaniu rejestracji możesz poczekać na telefon od Twojego opiekuna konta lub
                           dokonać inwestycji jeżeli jesteś osobą zdecydowaną na rozpoczęcie nowego rozdziału w życiu i otworzenie się na nowe dochody.
                        </div>
                     </div>
                     <div class="faq-item">
                        <div class="fi-question">
                           Czy pobieracie jakieś dodatkowe opłaty?
                        </div>
                        <div class="fi-answer">Nie pobieramy opłat, nie mamy również jakichkolwiek ukrytych kosztów. Pieniądze znajdujące się na Twoim koncie należą tylko i wyłącznie do Ciebie i możesz je w każdym momencie wypłacić. Działa to na takiej samej zasadzie jak
                           konto bankowe, wystarczy że zlecisz wypłatę całych lub części dostępnych środków, a w błyskawicznym tempie pojawią się one na Twoim koncie w banku.
                        </div>
                     </div>
                     <div class="faq-item">
                        <div class="fi-question">
                           Ile mogę zarobić?
                        </div>
                        <div class="fi-answer">Nasi partnerzy zarabiają średnio maksymalnie 1500zł dziennie na pełnym automacie. Zarabiać możesz już od pierwszego dnia po dokonaniu rejestracji
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <footer class="footer">
               <div class="centered">
                  <div class="disclaimer-footer">
                     <p><strong>Risk disclosure:</strong></p>
                     <p>
                        znakachestva.com denies any responsibility for loss or damage resulting of reliance on the information contained in this website, included data, quotes, charts, videos or signals. Please be aware that trading in financial instruments may result in the
                        loss of the whole capital invested. Past performance does not guarantee future results. Cryptocurrency trading, and fiat currency trading on margins involves high risk, and is not suitable for all investors. Earnings and income
                        representations made by "This Website" only used as aspirational examples of your earnings potential. The success of those in the testimonials and other examples are exceptional results and therefore are not intended as a guarantee
                        that you or others will achieve the same results. Individual results will vary and are entirely dependent on you.
                     </p>
                     <p>The Domain Operator may be compensated by the advertisers that appear on the website, based on your interaction with the advertisements or advertisers.</p>
                     <p>
                        For further details please make sure to read our Terms &amp; Conditions and Privacy Policy.
                     </p>
                     <div class="system">
                        <ul class="sys-menu">
                           <li><a href="javascript:void(0);" class="as-is alterlink" data-name="policy">Privacy
                              Policy</a>
                           </li>
                           <li><a href="javascript:void(0);" class="as-is alterlink" data-name="terms">Terms
                              &amp; Conditions</a>
                           </li>
                        </ul>
                     </div>
                     <p>
                        *Testimonials:
                     </p>
                     <p>
                        All characters, information and events depicted on This Website are entirely fictitious. Any similarity to actual events or persons, living or dead, is purely coincidental.
                     </p>
                  </div>
                  <div>&nbsp;</div>
                  <div class="copy">© The Crypto Genius 2021</div>
               </div>
            </footer>
         </div>
      </div>
      <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
      <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
      <script>
         $(document).one('mouseleave', function() {
             $('.modal').css('display', 'block');
         });
         $('.close-modal').on('click', function() {
             $('.modal').css('display', 'none');
         })
         $('.scrollto').click(function() {
             $('.modal').css('display', 'none');
             $([document.documentElement, document.body]).animate({
                 scrollTop: $(".fs-header").offset().top
             }, 500);
         });
         
         $(".go-toppd").on("click", "a", function(event) {
             event.preventDefault();
             var id = $(this).attr('href'),
                 top = $(id).offset().top - 0;
             $('body,html').stop().animate({
                 scrollTop: top
             }, 1000);
         });
      </script>
   </body>
</html>