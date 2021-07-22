<?php 
include_once 'config.php'; 
?>
<html lang="pl">
    <head>
        <base href="<?php echo $base ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bitcoin Trend App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="assets/image/favicon.ico">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/form.css">
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
        <!-- MEMBERS.PHP -->
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $FacebookPixel ?>&ev=ViewContent&noscript=1"/>
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
                                            <div class="description">Wprowadź swój adres e-mail poniżej i&nbsp; zostań <b>następnym milionerem Bitcoin</b></div>
                                        </div>
                                    </div>
                                    <div class="popup-form-wrapper">
                                        <div class="register-form">
                                            <style>
                                                .inputContainer {
                                                position: relative !important;
                                                }
                                            </style>
                                            <div class="form-col">
                                                <div class="main-form-wrapper">
                                                </div>
                                                <div class="logos"><img src="assets/image/safe.png">
                                                </div>
                                            </div>
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
                                                        <video autoplay width="560" height="315" controls>
                                                            <source src="assets/video/ai_btc_trend_pl_dream_webinar.mp4" type="video/mp4">
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                .inputContainer {
                                                position: relative !important;
                                                }
                                            </style>
                                            <div class="form-col">
                                                <div class="main-form-wrapper" id="formfull">
                                                    <div class="form-title">Aby zacząć, wypełnij poniższy formularz:</div>
                                                    <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="ZACZNIJ TERAZ"></div>
                                                </div>
                                                <div class="logos"><img src="assets/image/safe.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section _ngcontent-kgc-c5="" class="section section-welcome" id="welcome">
                                <div _ngcontent-kgc-c5="" class="section-container">
                                    <div _ngcontent-kgc-c5="" class="section-content">
                                        <div _ngcontent-kgc-c5="" class="section-title">Witamy w Bitcoin Trend App!</div>
                                        <div _ngcontent-kgc-c5="" class="section-subtitle">Zarabianie pieniędzy z Bitcoin nie musi być skomplikowane.</div>
                                        <div _ngcontent-kgc-c5="" class="section-description">
                                            <p> Kiedy zarejestrujesz się na naszej prostej platformie, możesz zacząć osiągać zyski w ciągu kilku minut od momentu rejestracji. Aplikacja działa z każdego miejsca, w którym jesteś z połączeniem internetowym. Więc
                                                możesz dosłownie czerpać zyski leżąc na plaży.
                                            </p>
                                            <p> Ta aplikacja została stworzona dla wszystkich. Zadziała to nawet wtedy, jeśli nigdy wcześniej nie handlowałeś. A nawet jeśli nie wiesz nic o Bitcoin. W rzeczywistości, im mniej wiesz, tym lepiej. Ponieważ będziesz
                                                mniej stronniczy.
                                            </p>
                                            <p><b> Aplikacja działa na dowolnym urządzeniu. Możesz więc zarabiać z komputera, laptopa, telefonu lub tabletu.</b></p>
                                        </div>
                                        <div _ngcontent-kgc-c5="" class="section-image">
                                            <img _ngcontent-kgc-c5="" class="hidden-xs" src="assets/image/devices.png">
                                            <img _ngcontent-kgc-c5="" class="visible-xs" src="assets/image/devices-m.png">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="section section-comments" id="comments">
                                <div class="section-container">
                                    <div class="section-content">
                                        <div class="section-title">Co Inni Mówią O Naszej Aplikacji</div>
                                        <div class="messenger-wrapper">
                                            <div class="chat-wrapper">
                                                <div><img src="assets/image/1_pl.png"></div>
                                                <div><img src="assets/image/2_pl.png"></div>
                                                <div><img src="assets/image/3_pl.png"></div>
                                                <div><img src="assets/image/4_pl.png"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="section section-bottom-form" id="bottom-form">
                                <div class="section-container" style="padding: 70px 0 40px 0;">
                                    <style>
                                        .inputContainer {
                                        position: relative !important;
                                        }
                                    </style>
                                    <div class="form-col">
                                        <div class="main-form-wrapper">
                                            <div class="form-title">Aby zacząć, wypełnij poniższy formularz:</div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" id="scrollUp" class="get_acc button button-primary register-btn register-btn-ru"> ZACZNIJ TERAZ
                                            </button>
                                        </div>
                                        <div class="logos"><img src="assets/image/safe.png">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <footer id="footer">
                        <div class="footer-content">
                            <div _ngcontent-avv-c2="" class="footer-description"><b _ngcontent-avv-c2="">Istotna Informacja Na Temat Ryzyka:</b> Handel walutami obcymi i CFD wiąże się z wysokim ryzykiem straty ze względu na lewarowany charakter handlu, który może prowadzić do całkowitej utraty kapitału, a który
                                może nie być odpowiedni dla wszystkich rodzajów inwestorów. Prosimy o zapoznanie się z naszym pełnym ostrzeżeniem o ryzyku oraz z odpowiednim brokerem, z którym będziesz związany, aby upewnić się, że rozumiesz związane z tym
                                ryzyko przed przystąpieniem do działania, biorąc pod uwagę Twoje stosowne doświadczenie. W razie potrzeby zasięgnij niezależnej porady. Informacje zawarte na tej stronie internetowej oraz dokumenty ujawniające mają charakter
                                ogólny i nie uwzględniają sytuacji osobistej, sytuacji finansowej lub potrzeb użytkownika. Przed podjęciem decyzji, czy obrót takimi środkami jest dla Ciebie odpowiedni, należy dokładnie rozważyć Umowę maklerską z Klientem
                                i zasięgnąć niezależnej porady.
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
                    <div class="scroll-form" id="scrollForm">
                        <div class="scroll-logo"><span>Weed Millionaire</span></div>
                        <div class="scroll-form-content">
                        </div>
                    </div>
                </offers-opt-in>
            </section>
        </offers-root>
        <script src="assets/js/jquery.1.11.3.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap3.min.js"></script>
        <script>
            $("#scrollUp").on("click", function(e) {
                $("html, body").animate({
                    scrollTop: $("#formfull").offset().top - 300
                }, 1000);
                return false;
            });
        </script>
        <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    </body>
</html>