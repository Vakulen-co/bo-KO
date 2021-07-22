<?php 
include_once 'config.php'; 
?>
<html lang="pl">
    <head>
        <base href="<?php echo $base ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bitcoin Trend App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/form.css">
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
        <offers-root _nghost-bex-c0="" ng-version="7.2.15">
            <section _ngcontent-bex-c0="" offerslangclass="" class="style-ru">
                <router-outlet _ngcontent-bex-c0=""></router-outlet>
                <offers-opt-in _nghost-bex-c2="">
                    <div class="exit_popup" id="popup" style="display: none;">
                        <div class="exit_popup_overlay"></div>
                        <div class="popup_inner">
                            <a class="close_button" onclick="$(&#39;#popup&#39;).css(&#39;display&#39;,&#39;none&#39;);$(&#39;body&#39;).removeClass(&#39;exit-show&#39;);mousebottom = 0;setTimeout(function(){pu=1;},5000);" style="">
                            </a>
                            <div class="popup_content">
                                <div class="popup_content_inner">
                                    <div class="popup-content-wrapper">
                                        <div class="popup-header">
                                            <div class="title">Pozostało Zaledwie Kilka Miejsc...</div>
                                            <div class="description">Wprowadź swój adres e-mail poniżej i&nbsp; zostań
                                                <b>następnym milionerem Bitcoin</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popup-form-wrapper">
                                        <div class="register-form">
                                            <div class="app" id="app1" data-type="1" data-butt="ZACZNIJ TERAZ"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="header">
                        <div class="header-content">
                            <div class="header-logo"><a href="javascript:;">Bitcoin Trend
                                App</a>
                            </div>
                            <div class="slogan-wrapper">
                                <div class="trim-spaces">
                                    <div class="scalable">
                                        <div class="header-slogan">Zarabiaj Do 500€ Na Godzinę Z Bitcoinu.</div>
                                        <div class="header-subslogan">Nawet kiedy Krypto Przeżywa Załamanie</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="wrapper">
                        <div id="container">
                            <section class="section section-lp1-intro scroll-trigger" id="lp1-intro">
                                <div class="section-container">
                                    <div class="section-content">
                                        <div class="intro-row">
                                            <div class="video-col">
                                                <div class="video-wrapper">
                                                    <div class="video embed-responsive embed-responsive-16by9">
                                                        <video controls autoplay width="560" height="315">
                                                            <source
                                                                src="../assets/video/ai_btc_trend_pl_dream.mp4"
                                                                type="video/mp4">
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-col">
                                                <div class="main-form-wrapper">
                                                    <div class="form-title">Skorzystaj z <b>Bitcoin Trend App</b> zanim wygaśnie Twoje prywatne zaproszenie...
                                                    </div>
                                                    <div class="form-description">Wprowadź swój ulubiony adres e-mail w poniższym formularzu, aby uzyskać natychmiastowy <b>BEZPŁATNY</b> ostęp do oprogramowania<b>Bitcoin Trend App</b> .
                                                    </div>
                                                    <div class="form-container-unique ti-form-1" id="fdorm">
                                                        <div class="app" id="app1" data-type="1" data-butt="ZACZNIJ TERAZ"></div>
                                                    </div>
                                                </div>
                                                <div class="logos"><img src="../assets/img/safe.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="section section-faq" id="faq">
                                <div class="section-container">
                                    <div class="section-content">
                                        <div class="section-title">Wciąż Masz Pytania?</div>
                                        <ul class="faq-list">
                                            <li>
                                                <div class="question">Czy ta aplikacja jest bezpieczna?</div>
                                                <div class="answer">Tak, gdy handlujesz z naszą aplikacją, Twoje fundusze są ubezpieczone przez regulowanego i autoryzowanego brokera.</div>
                                            </li>
                                            <li>
                                                <div class="question">Czy Bitcoin jest ryzykowny?</div>
                                                <div class="answer">Każdy inwestor wie, że w przypadku jakiejkolwiek inwestycji istnieje pewien poziom ryzyka. Istnieje jednak wystarczająca ilość danych, aby udowodnić, że Bitcoin i kryptowaluty nigdzie się nie wybierają. Dlatego
                                                    rezygnacja z inwestowania w krypto jest znacznie bardziej ryzykownym wyborem, kiedy uwzględnimy analizę matematyczną.
                                                </div>
                                            </li>
                                            <li>
                                                <div class="question">Dlaczego rozdajemy to za darmo?</div>
                                                <div class="answer">To prosta matematyka. Im więcej opowiadamy się za Bitcoin i zapewniamy ludziom narzędzia potrzebne do skutecznego inwestowania, tym kryptowaluty bardziej rosną. Oznacza to, że my wszyscy zarobimy więcej pieniędzy.</div>
                                            </li>
                                            <li>
                                                <div class="question">Nigdy nie zarobiłem nawet jednego euro online. Czy jest to dla mnie zbyt skomplikowane?</div>
                                                <div class="answer">System rozkłada wszystko dla Ciebie na czynniki pierwsze, więc nie potrzebujesz żadnego wcześniejszego doświadczenia. W rzeczywistości, im mniej wiesz, tym większa może być Twoja przewaga... ponieważ nie będziesz
                                                    uprzedzony.
                                                </div>
                                            </li>
                                            <li>
                                                <div class="question">Czy naprawdę zarobię pieniądze w ciągu 24 godzin?
                                                </div>
                                                <div class="answer">Jeśli będziesz postępować zgodnie z naszymi instrukcjami, to praktycznie nie będzie możliwe, aby nie zarabiać pieniędzy.
                                                </div>
                                            </li>
                                            <li>
                                                <div class="question">Jak dużo czasu zabierze mi to w ciągu dnia?</div>
                                                <div class="answer">Zobowiąż się przeznaczyć 15 minut dziennie na wykonanie tej pracy. Możesz pracować z dowolnego miejsca korzystając z połączenia internetowego. Po prostu zaloguj się do swojego osobistego panelu administracyjnego
                                                    z laptopa, telefonu lub tabletu.
                                                </div>
                                            </li>
                                            <li>
                                                <div class="question">Jak mogę zacząć?</div>
                                                <div class="answer">Wypełnij formularz na tej stronie, kliknij przycisk i postępuj zgodnie z prostymi instrukcjami, aby dokonać pierwszej wypłaty online.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <section class="section section-comments" id="comments">
                                <div class="section-container">
                                    <div class="section-content">
                                        <div class="section-title">Co Inni Mówią O Naszej Aplikacji</div>
                                        <div class="messenger-wrapper">
                                            <div class="chat-wrapper">
                                                <div><img src="../assets/img/1_pl.png"></div>
                                                <div><img src="../assets/img/2_pl.png"></div>
                                                <div><img src="../assets/img/3_pl.png"></div>
                                                <div><img src="../assets/img/4_pl.png"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="section section-bottom-form" id="bottom-form">
                                <div class="section-container">
                                    <div class="section-content">
                                        <div class="section-title">Skorzystaj z <b>Bitcoin Trend App</b> zanim wygaśnie Twoje prywatne zaproszenie...
                                        </div>
                                        <div class="section-description">Wprowadź swój ulubiony adres e-mail w poniższym formularzu, aby uzyskać natychmiastowy <b>BEZPŁATNY</b> ostęp do oprogramowania
                                            <b>Bitcoin Trend App</b> .
                                        </div>
                                        <div class="bottom-form-wrapper">
                                            <div class="register-form">
                                                <div class="buttons">
                                                    <button class="register-form buttons button " type="submit" id="scrollUp">ZACZNIJ TERAZ
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <footer id="footer">
                        <div class="footer-content">
                            <div _ngcontent-avv-c2="" class="footer-description"><b _ngcontent-avv-c2="">Istotna Informacja
                                Na Temat Ryzyka:</b> Handel walutami obcymi i CFD wiąże się z wysokim ryzykiem straty ze względu na lewarowany charakter handlu, który może prowadzić do całkowitej utraty kapitału, a który może nie być odpowiedni dla wszystkich
                                rodzajów inwestorów. Prosimy o zapoznanie się z naszym pełnym ostrzeżeniem o ryzyku oraz z odpowiednim brokerem, z którym będziesz związany, aby upewnić się, że rozumiesz związane z tym ryzyko przed przystąpieniem do działania,
                                biorąc pod uwagę Twoje stosowne doświadczenie. W razie potrzeby zasięgnij niezależnej porady. Informacje zawarte na tej stronie internetowej oraz dokumenty ujawniające mają charakter ogólny i nie uwzględniają sytuacji osobistej,
                                sytuacji finansowej lub potrzeb użytkownika. Przed podjęciem decyzji, czy obrót takimi środkami jest dla Ciebie odpowiedni, należy dokładnie rozważyć Umowę maklerską z Klientem i zasięgnąć niezależnej porady.
                            </div>
                            <nav class="footer-nav">
                                <ul>
                                    <li>
                                        <offers-basic-modal-popup _nghost-bex-c3=""><a href="javascript:void(0)" class="alterlink" data-name="policy">ZASADY</a>
                                        </offers-basic-modal-popup>
                                    </li>
                                    <li>
                                        <offers-basic-modal-popup _nghost-bex-c3=""><a href="javascript:void(0)" class="alterlink" data-name="terms">WARUNKI</a>
                                        </offers-basic-modal-popup>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </footer>
                    <div _ngcontent-awg-c2="" class="scroll-form" id="scrollForm">
                        <div _ngcontent-awg-c2="" class="scroll-logo"><span _ngcontent-awg-c2="">BTC Trend</span></div>
                        <div _ngcontent-awg-c2="" class="scroll-form-content">
                            <button _ngcontent-rof-c2="" class="button register-button scroll-form-button" type="submit" id="scrollUp">ZACZNIJ TERAZ</button>
                        </div>
                    </div>
                    <div class="widget widget-people block-hidden first shown animated bounceInRight">
                        <div class="widget-inner">
                            <div class="content">
                                <div class="random-user">
                                    <div class="img"><img class="pimg" src="../assets/img/Johanna-R.jpg"></div>
                                    <div class="desc">
                                        <div class="name"><span class="pname">Johanna Rike</span> właśnie dołączył
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-spots block-hidden shown animated bounceInLeft">
                        <div class="widget-inner">
                            <div class="content">
                                <div class="spots-left">
                                    <div class="spots-num">26</div>
                                    <div class="description">Miejsc Zostało</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </offers-opt-in>
            </section>
        </offers-root>
        <script src="../assets/js/jquery.1.11.3.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/script.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    </body>
</html>