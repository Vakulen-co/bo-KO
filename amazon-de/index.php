<?php 
    include_once 'config.php'; 
    ?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <base href="<?php echo $base ?>">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <title>Amazon</title>
        <link href="assets/favicon.png" rel="icon" type="image/png">
        <link rel="stylesheet" href="assets/default.css">
        <link rel="stylesheet" href="assets/custom.css">
        <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
        <!-- Open Graph -->
        <?php $seoText = 'Willkommen zurück!'; ?>
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
        <div id="wrapper" class="wrapper">
            <header>
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <img class="d-block d-sm-none header-image" src="assets/header-mobile.jpg">
                            <div class="col-12 col-lg-3"></div>
                            <div class="col-12 col-lg-5">
                                <div class="content">
                                    <p class="blue-head-line">Geld verdienen mit</p>
                                    <h1>Amazon </h1>
                                    <p>Vergrößern Sie Ihr Kapital
                                        <br>von zu Hause aus
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blue-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="content">
                                    <p>Erfahren Sie, wie Sie in die Millionen-Dollar-Gesellschaft investieren können. Beginnen Sie hier</p>
                                    <img class="d-inline-block d-lg-none" src="assets/arrow-down.png" alt="">
                                    <br class="d-block d-lg-none">
                                    <br class="d-block d-lg-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="topForm" class="form-container">
                    <div class="nxreg lp-form-section">
                        <div class="nx-signup">
                            <div class="nx-signup-form nx-signup__form">
                                <h1 class="text-center nx-signup__form__heading">In Amazonien investieren </h1>
                                <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Jetzt anfangen!"></div>
                                <div style="display: none">
                                    <div class="lms-dialog dialogSuccess" title="">
                                        <div class="widget-form lms-container">
                                            <span class=" close-lms-dialog" aria-hidden="true">X</span>
                                            <div class="contents">
                                                <div class="title"> Danke für's Registrieren! </div>
                                                <div class="broker_logo"> </div>
                                                <div class="message">
                                                    <p> In Kürze erhalten Sie eine Bestätigungs-E-Mail </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12 mb-0 pb-3 px-0" style="background: #EFEFEF; text-align: center">
                                <p class="cfd">Um bei Amazon zu investieren, müssen Sie mindestens 18 Jahre alt sein.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="calculator-section">
                    <div class="container">
                        <h2 class="calculator-section__title">
                            Entdecken Sie Ihre möglichen kurzfristigen Gewinne <br class="mobile-show">(Max. 2 Monate)
                        </h2>
                        <div class="calculator">
                            <div class="calculator__inner js-calculator-block">
                                <div class="calculator__input calculator__input--left">
                                    <p class="calculator__input-title">ANFANFGSINVESTITION</p>
                                    <div class="calculator__input-item">
                                        <div class="calculator__input-symbol"> <span>
                                            €
                                            </span>
                                        </div>
                                        <input type="text" class="site-input js-initial-sum" placeholder="" value="">
                                        <button class="calculator__input-btn site-btn js-button-calculate">BERECHNEN</button>
                                        <p class="js-sum-error-message" style="display: none;">Vorgeschlagene Mindestinvestition 250 €</p>
                                    </div>
                                </div>
                                <div class="calculator__input calculator__input--right">
                                    <p class="calculator__input-title">MÖGLICHE GEWINNE</p>
                                    <div class="calculator__input-item">
                                        <div class="calculator__input-symbol"> <span>
                                            €
                                            </span>
                                        </div>
                                        <input type="text" class="site-input js-final-amount" readonly="readonly" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <div class="row">
                                <div class="col-12">
                                    <p><small><u>Advertorial</u></small>
                                    </p>
                                    <h3 class="second-header mt-3">"Amazon ist zum Unternehmen mit dem höchsten Börsenwert der Welt geworden und übertrifft Microsoft, Apple und Google".</h3>
                                    <br>
                                    <img src="assets/amazon-chart.png" class="stretched img-fluid d-none d-md-block" alt="" style="display: block; margin-left: auto; margin-right: auto;">
                                    <br class="d-none d-lg-block">
                                    <br class="d-none d-lg-block">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p><strong>Auf die Frage, ob es eine gute Idee ist, zu diesem Zeitpunkt in Amazonien zu
                                    investieren:</strong>
                                </p>
                                <br>
                                <p>Auf die Frage, ob es eine gute Idee ist, zu diesem Zeitpunkt in Amazonien zu investieren: Die Antwort ist ein durchschlagendes Ja! Sie debütierte 1997 an der Börse, als Amazon nicht mehr als ein Online-Buchladen war. Jemand,
                                    der damals 90 USD in die Firma von Jeff Bezos investierte, würde heute 44’5138 USD auf seinem Konto haben.
                                </p>
                                <p class="colored text-primary cta-popup">"Heute beläuft sich der Bestand dieses in Seattle gegründeten Giganten auf rund 1.972 USD. Lassen Sie sich nicht entmutigen, wenn es sich um eine große Investition handelt, können Sie mit einer Aktie beginnen, die nicht ganz
                                    so teuer ist".
                                </p>
                                <img src="assets/amazon-chart.png" class="stretched img-fluid d-block d-md-none" alt="">
                                <br class="d-block d-lg-none">
                                <p>Es ist jetzt an der Zeit, diesen Technologie-Giganten mehr denn je zu nutzen, um persönlichen Gewinn zu erzielen.</p>
                                <br>
                                <p class="only-desktop-text"><strong>Es ist Zeit zu investieren, und Amazon ist die
                                    Antwort!</strong>
                                </p>
                                <p> <strong>Werden Sie sich diese Gelegenheit entgehen lassen? </strong> Die Zeit zu investieren ist jetzt, mit den Besten. Je mehr der Aktienwert von Amazon zunimmt, desto mehr werden Ihre Gewinne steigen. Außerdem können Sie
                                    dank des Depositenkontos Ihr Kapital jederzeit abheben!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <div class="gray-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3>Der Einstieg ist einfach. Sie erhalten Zugang zu:
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <img src="assets/1.png">
                                <p>Sichere und autorisierte Plattform</p>
                            </div>
                            <div class="col-md">
                                <img src="assets/2.png">
                                <p>Gewinne auf Ihrem Konto in 24 Stunden</p>
                            </div>
                            <div class="col-md">
                                <img src="assets/3.png">
                                <p>Hohes
                                    <br>Gewinnpotenzial
                                </p>
                            </div>
                            <div class="col-md">
                                <img src="assets/4.png">
                                <p>Einfache
                                    <br>Lern-Tools
                                </p>
                            </div>
                            <div class="col-md">
                                <img src="assets/5.png">
                                <p>Dedizierte Kundenbetreuung</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <button class="cta-btn mt-5 toTop">Entdecken Sie, wie Sie von Amazon-Investitionen profitieren können</button>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <div class="container">
                    <div class="row" style="text-align: center;">
                        <div class="col-12"></div>
                        <div class="col-lg-12 nav-row">
                            <br>
                            <br>
                        </div>
                        <div class="col-12">
                            <div data-lgl="disclaimer">
                                <p>High Risk Investment Warning: Investing involves a high level of risk, and not every investor is a good candidate for this vehicle We recommend consulting with a financial advisor prior to placing trades . You should not speculate
                                    any capital that you cannot afford to lose Carefully consider your financial situation and level of experience when making the decision to trade In financial markets.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="background">
            <div class="app-spinner loading loading-success"></div>
        </div>
        <script>
            $(window).bind('beforeunload', function() {
                $('.background').show();
                $('.app-spinner').show();
            });
        </script>
        <script>
            var calculatorBlocks = document.querySelectorAll('.js-calculator-block');
            
            Array.prototype.slice.call(calculatorBlocks).forEach(function(el) {
                calculatorInit(el);
            });
            
            function calculatorInit(el) {
                var buttonCalculate = el.querySelector('.js-button-calculate');
                var sumErrorMessage = el.querySelector('.js-sum-error-message'); // Calculator euro
                var initialSum = el.querySelector('.js-initial-sum');
                var finalAmount = el.querySelector('.js-final-amount');
            
                initialSum.addEventListener('input', function() {
                    var onlyNumbers = /^\d+(\.\d{0,2})?$/;
                    if (!onlyNumbers.test(this.value)) this.value = this.value.slice(0, this.value.length - 1);
                    if (this.value.length > 12) this.value = this.value.slice(0, 12);
                });
            
                initialSum.addEventListener('keyup', function(event) {
                    if (event.keyCode === 13) {
                        calculate();
                    }
                });
            
                buttonCalculate.addEventListener('click', calculate);
            
                function potencialCalc(number, multiply) {
                    return (number * multiply) % 1 === 0 ? number * multiply : (number * multiply).toFixed(2);
                }
            
                function calculate() {
            
                    var initial_value = initialSum.value;
                    var coefficient = 0;
            
                    sumErrorMessage.classList.remove('show-error');
            
                    if (initial_value <= 0) {
                        sumErrorMessage.classList.add('show-error');
                        finalAmount.setAttribute('value', '');
                        return;
                    }
            
                    if (initial_value >= 1) {
                        coefficient = 2;
                    } else if (initial_value > 250 && initial_value < 500) {
                        coefficient = 2.5;
                    } else if (initial_value >= 500 && initial_value < 1000) {
                        coefficient = 3.5;
                    } else if (initial_value >= 1000 && initial_value < 5000) {
                        coefficient = 5;
                    } else if (initial_value >= 5000) {
                        coefficient = 5.5;
                    }
            
                    var result = potencialCalc(initial_value, coefficient);
            
                    finalAmount.setAttribute('value', result);
                }
            }
            
            $('.js-scroll-to-form').on('click', function(e) {
                var top = $('.js-form-top').offset().top;
                $('html, body').animate({
                    scrollTop: top
                }, 300);
                e.preventDefault();
            });
            
            $('.calc_press').on('click', function(e) {
                var top = $('.calculator-section').offset().top;
                $('html, body').animate({
                    scrollTop: top
                }, 300);
                e.preventDefault();
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".toTop").click(function() {
                    $('html, body').animate({
                        scrollTop: $("#topForm").offset().top
                    }, 1000);
                });
            
                $(".toCalculate").click(function() {
                    $('html, body').animate({
                        scrollTop: $("#calculator-section").offset().top
                    }, 1000);
                });
            });
        </script>
        <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    </body>
</html>