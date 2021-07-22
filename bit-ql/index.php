<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="de" class="ever no-js">

<head>
    <base href="<?php echo $base ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BitQT</title>
    <link type="image/x-icon" href="BitQT_files/favicon.ico" rel="icon">
    <meta name="description" content="BITCOIN MACHT MENSCHEN W?HREND CORONA REICH">

    <link href="BitQT_files/bootstrap.css" rel="stylesheet">
    <link href="BitQT_files/style.css" rel="stylesheet">
    <link href="BitQT_files/animate.css" rel="stylesheet">
    <link href="BitQT_files/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="BitQT_files/dialog.css" media="screen">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

    <!-- Open Graph -->
    <?php $seoText = 'Herzlich willkommen!'; ?>
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

    <style>
        @-webkit-keyframes loadingoverlay_animation__rotate_right {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loadingoverlay_animation__rotate_right {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes loadingoverlay_animation__rotate_left {
            to {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        @keyframes loadingoverlay_animation__rotate_left {
            to {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        @-webkit-keyframes loadingoverlay_animation__fadein {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.1, 0.1);
                transform: scale(0.1, 0.1);
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
        }

        @keyframes loadingoverlay_animation__fadein {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.1, 0.1);
                transform: scale(0.1, 0.1);
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
        }

        @-webkit-keyframes loadingoverlay_animation__pulse {
            0% {
                -webkit-transform: scale(0, 0);
                transform: scale(0, 0);
            }

            50% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }

            100% {
                -webkit-transform: scale(0, 0);
                transform: scale(0, 0);
            }
        }

        @keyframes loadingoverlay_animation__pulse {
            0% {
                -webkit-transform: scale(0, 0);
                transform: scale(0, 0);
            }

            50% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }

            100% {
                -webkit-transform: scale(0, 0);
                transform: scale(0, 0);
            }
        }
    </style>
    <style>
        img {
            max-width: 100%;
            height: auto;
        }
        #formfull {
            position: relative;
        }

        .pushwoosh-subscription-segments-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            z-index: 2147483648;
            opacity: 0.99;
        }

        .pushwoosh-subscription-segments-popup_show {
            display: block;
        }

        .pushwoosh-subscription-segments-popup__wrapper {
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .2);
        }

        .pushwoosh-subscription-segments-popup_position_center .pushwoosh-subscription-segments-popup__wrapper {
            text-align: center;
        }

        .pushwoosh-subscription-segments-popup_position_center .pushwoosh-subscription-segments-popup__wrapper:after {
            content: '';
            display: inline-block;
            width: 1px;
            height: 100%;
            vertical-align: middle;
        }

        .pushwoosh-subscription-segments-popup__inner {
            min-width: 320px;
            max-width: 380px;
            width: 100%;
            margin: 0 auto;
        }

        .pushwoosh-subscription-segments-popup_position_center .pushwoosh-subscription-segments-popup__inner {
            display: inline-block;
            vertical-align: middle;
        }

        .pushwoosh-subscription-segments-popup__body {
            background: #fff;
            text-align: left;
            vertical-align: baseline;
            box-shadow: 0px 10px 16px rgba(0, 0, 0, 0.1), 0px 0px 6px rgba(0, 0, 0, 0.06);
            border-radius: 4px;
        }

        .pushwoosh-subscription-segments-popup__close {
            appearance: none;
            border: none;
            background-color: transparent;
            box-shadow: none;
            position: absolute;
            top: 24px;
            right: 24px;
            width: 40px;
            height: 40px;
            cursor: pointer;
        }

        .pushwoosh-subscription-segments-popup__close:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 30px;
            height: 2px;
            background-color: rgba(255, 255, 255, .8);
            transform: translateX(-50%) translateY(-50%) rotate(45deg);
        }

        .pushwoosh-subscription-segments-popup__close:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 30px;
            height: 2px;
            background-color: rgba(255, 255, 255, .8);
            transform: translateX(-50%) translateY(-50%) rotate(-45deg);
        }
    </style>
</head>

<body class="home_page">
<div class="main-wrapper">

    <div class="notification">
        <div class="notification-container">
            <a href="#" data-scrollto="#section-sign-up" class="notification-content">
                <div class="exclusive-offer">
                    <span class="exclusive-offer__flag flag-icon flag-icon-de"></span>
                    <span class="exclusive-offer__wrap">
                            LIVE AUSZAHLUNG </span>
                </div>
                <div id="uinames" class="uinames">
                    <div class="just-made-money"><img src="BitQT_files/17.jpg" decoding="async" alt="">
                        <div class="just-made">
                            <div>Julius W</div><span class="fromCountry"> aus </span><span
                                class="region">Germany</span>
                            <br>
                            <div>gerade gewonnen...</div>
                            <div>€107</div>
                        </div>
                    </div>
                </div>
                <span class="fromCountry" style="display: none;">aus</span>
            </a>
        </div>
    </div>

    <header>
        <div class="header">
            <div class="header-wrap">
                <div class="container">
                    <div class="logo-box">
                        <a href="#" class="logo">
                            <img src="BitQT_files/logo-dark.png" decoding="async" alt="BitQT Logo"> </a>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <main class="content">

        <section class="main-section" id="main-section">
            <div class="container">
                <div class="slider-caption">
                    <h2 class="fadeInDown animated">BITCOIN MACHT MENSCHEN WÄHREND CORONA REICH</h2>
                    <div class="fadeInUp animated promo-button">
                        <a href="#" data-scrollto="#section-profits" class="button button-green button-3d">
                            Gratis Gewinn berechnen <span>Erfahren Sie wie viel Sie verdienen können</span> </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 nopadding nomargin">
                        <div class="promo-img">
                            <div class="promo-img-container">
                                <a href="#" data-scrollto="#section-profits">
                                    <img id="promo-img" data-png="BitQT_files/promo-1-intl.png" data-webp="BitQT_files/promo-1-intl.webp" decoding="async" alt="" width="630" height="390">
                                </a>
                            </div>
                        </div>
                        <!-- .portfolio-single-image end -->
                    </div>
                    <div id="section-sign-up" class="col-lg-4 col-md-12 col-sm-12 nopadding">
                        <div class="form-container" id="formTop">
                            <h3 style="text-align: center; font-size: 30px;">ÄNDERN SIE<br><span
                                    style="color: #6bf;">IHR LEBEN HEUTE</span></h3>
                            <div class="line" style="margin: 20px 0 20px 0;"></div>
                            <div class="form_wrapper whiteLabel_form">

                                <div class="app" id="app1" data-url="<?php echo $thankyou ?>" data-butt="Jetzt Loslegen" data-type="2"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow">
            </a>
            <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow">
                <i class="fal fa-angle-down animated infinite fadeInDown"></i>
            </a>

        </section>
        <section id="content" class="logos">
            <div class="container">
                <div class="seenon-logos">
                    <img src="BitQT_files/seenon-logos-intl.png" decoding="async">
                </div>
            </div>
        </section>
        <section class="live-profits">
            <div class="container clearfix numbers-container">
                <div class="center">
                    <input type="hidden" id="current-profits" data-value="125833498">
                    <input type="hidden" id="current-users" data-value="75314">
                    <div class="col_half" data-animate="bounceIn">
                        <div class="counter counter-large" style="color: #333;">
                            <span class="live-profits" data-from="125829246" data-comma="true">125,840,153</span>€
                        </div>
                        <h5>Gewinne aller Nutzer</h5>
                    </div>
                    <div class="col_half col_last" data-animate="bounceIn" data-delay="200">
                        <div class="counter counter-large" style="color: #333;">
                            <span class="live-users" data-from="75296" data-comma="true">75,305</span>
                        </div>
                        <h5>Aktive Nutzer</h5>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-profits" class="calculate-container">
            <div class="heading-block title-center nobottomborder page-section">
                <h2>Berechnen Sie mögliche Gewinne</h2>
                <span class="section-profits">Wählen Sie wie viel und für wie lange Sie investieren möchten, um Ihre
                        möglichen Gewinne zu erfahren</span>
            </div>
            <div class="row mb-2 align-items-stretch">
                <div class="col-lg-4 col-md-12 mt-4 mt-md-0 calculator-container" style="padding: 0;">
                    <div class="card text-center">
                        <div class="card-body py-4">
                            <h3 class="card-title">
                                Mögliche Auszahlung </h3>
                            <div class="pricing-price py-2">1267 €</div>
                            <p class="card-text pricing-sub"></p>
                        </div>
                        <div class="line my-1"></div>
                        <div class="card-body py-4 sign-up-free" style="position: relative; top: -0.20889px;">
                            <a href="#" data-scrollto="#section-sign-up"
                               class="button button-3d button-large nomargin reg-focus" value="register"
                               style="width: 80%;">Kostenlos Anmelden</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 range-slider-container">
                    <div class="row align-items-stretch clearfix">
                        <div class="col-md-12" style="padding: 0;">
                            <div class="row align-items-stretch">
                                <div class="col-md-12 col-sm-12" style="padding: 0;">
                                    <div class="card mb-4">
                                        <div class="card-body range-slider">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="mb-4">
                                                    Einzahlung </h4>
                                            </div><input class="irs js-irs-0 irs-hidden-input"
                                                         style="display: none;" tabindex="-1" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-stretch">
                                <div class="col-md-12 col-sm-12" style="padding: 0;">
                                    <div class="card mb-4">
                                        <div class="card-body range-slider">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="mb-4">
                                                    Nutzungsdauer </h4>
                                            </div><input class="irs js-irs-1 irs-hidden-input"
                                                         style="display: none;" tabindex="-1" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-stretch">
                                <div class="col-md-12 col-sm-12">
                                    <img src="BitQT_files/trust.png" decoding="async">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="line"></div>
        <section class="map">
            <div class="container container-border">
                <div class="heading-block">
                    <h1>Weltweit verdienen unsere Nutzer jetzt gerade Geld</h1>
                    <span>Menschen aus 164 Ländern nutzen BitQT täglich.</span>
                </div>
                <div class="global-trades-container">
                    <div id="hotspot-img" class="hotspot-img mt-2">
                        <img src="BitQT_files/map.png" class="img-responsive" decoding="async" alt="">
                        <div class="hot-spot" x="1600" y="450" style="left: 543px; top: 152px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1540" y="370" style="left: 523px; top: 125px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1480" y="380" style="left: 502px; top: 129px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="650" y="430" style="left: 220px; top: 146px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="800" y="320" style="left: 271px; top: 108px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="450" y="300" style="left: 152px; top: 101px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="500" y="400" style="left: 169px; top: 135px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="330" y="522" style="left: 112px; top: 177px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1900" y="600" style="left: 645px; top: 203px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1300" y="590" style="left: 441px; top: 200px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1780" y="640" style="left: 604px; top: 217px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1200" y="800" style="left: 407px; top: 271px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1360" y="210" style="left: 461px; top: 71px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1600" y="500" style="left: 543px; top: 169px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1970" y="830" style="left: 669px; top: 281px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="330" y="522" style="left: 112px; top: 177px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="2350" y="1110" style="left: 798px; top: 377px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1222" y="395" style="left: 415px; top: 134px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1800" y="760" style="left: 611px; top: 258px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="2250" y="560" style="left: 764px; top: 190px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="1366" y="1134" style="left: 463px; top: 385px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="880" y="990" style="left: 298px; top: 336px;">
                            <div class="circle"></div>
                        </div>
                        <div class="hot-spot" x="710" y="395" style="left: 241px; top: 134px;">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <div class="container-wrap">
                    <div class="flx-table">
                        <div class="flx-head"></div>
                        <div class="flx-body">
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Chiara</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€247</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Fabian</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€184</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Fiona</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€191</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Ben</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€186</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Adrian</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€119</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Jona</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€52</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Lukas</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€148</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Adrian</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€116</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Lina</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€110</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Eva</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€156</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 flx-td">
                                    <p class="name"><span
                                            class="flag-icon flag-icon-squared flag-icon-de"></span>Katharina</p>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Gewinn</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-green">
                                        <b>€210</b></div>
                                </div>
                                <div class="col-md-3 flx-td">
                                    <div class="flx-title">Kryptowährung</div>
                                    <div class="flx-cell button button-3d button-mini button-rounded button-light">
                                        BTC/ETH</div>
                                </div>
                                <div class="col-md-2 flx-td">
                                    <div class="flx-title">Handelszeit</div>
                                    <div class="flx-cell  button button-3d button-mini button-rounded button-light">
                                        12/01/2021</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="start-earning">
            <div class="content-wrap">
                <div class="promo promo-dark promo-uppercase bottommargin make-deposit">
                    <div class="container clearfix">
                        <h3>Verdienen Sie <span>heute</span>noch Geld</h3>
                        <span class="desc">Kostenlos anmelden und sofort starten</span>
                        <div class="cta-container"><a href="#" data-scrollto="#section-sign-up"
                                                      class="button button-3d button-large" value="register">Ändern Sie Ihr Leben jetzt
                            </a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="device-type">
            <div class="container container-no-border clearfix">
                <div class="heading-block page-section">
                    <h1>Verdienen Sie Geld mit Ihrem Smartphone, Computer oder Tablet</h1>
                    <span>Nutzen Sie BitQT egal wo Sie sind.</span>
                </div>
                <div class="clear"></div>
                <div class="col_two_third">
                    <div style="position: relative; height: 535px;" data-height-xl="535" data-height-lg="442"
                         data-height-md="338" data-height-sm="316" data-height-xs="201">
                        <img class="mac" data-animate="fadeInLeft" src="BitQT_files/device1.png" decoding="async" alt="Mac"
                             style="position: absolute; top: 0; left: 0;">
                        <img data-animate="fadeInRight" data-delay="300" src="BitQT_files/device2.png" decoding="async" alt="iPad"
                             style="position: absolute; top: 0; left: 0;">
                        <img data-animate="fadeInUp" data-delay="600" src="BitQT_files/device3.png" decoding="async" alt="iPhone"
                             style="position: absolute; top: 0; left: 0;">
                    </div>
                </div>
                <div class="col_one_third col_last">
                    <h3>Starten Sie heute</h3>
                    <p><a href="#" data-scrollto="#section-sign-up" class="reg-focus">Registrieren</a> Sie sich bei
                        BitQT und beginnen Sie sofort, Geld zu
                        verdienen.</p>
                    <p>Es ist einfach und jeder kann mitmachen. Sie benötigen keine Kenntnisse oder Fähigkeiten.
                        Melden Sie sich mit Ihrem Smartphone, Computer oder Tablet and und starten Sie heute.
                        Verpassen Sie nicht Ihre Chance, reich zu werden.</p>
                    <div class="divider divider-short"><i class="fas fa-circle"></i></div>
                    <ul class="iconlist iconlist-large iconlist-color">
                        <li><i class="fas fa-check-circle"></i> Automatisierte Trading Software</li>
                        <li><i class="fas fa-check-circle"></i> Auf allen Geräten verfügbar</li>
                        <li><i class="fas fa-check-circle"></i> 100% sicher</li>
                        <li><i class="fas fa-check-circle"></i> Jederzeit wieder auszahlen</li>
                        <li><i class="fas fa-check-circle"></i> Nur 250€ Erst-Einzahlung</li>
                        <li><i class="fas fa-check-circle"></i> Plug &amp; Play - Starten Sie heute</li>
                        <li><i class="fas fa-check-circle"></i> Kostenloser Support</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="line"></div>
        <section class="faq">
            <div class="container clearfix">
                <div id="section-faqs" class="heading-block">
                    <h2>Häufig gestellte Fragen</h2>
                    <span>Wir haben die wichtigsten Fragen für Sie beantwortet.</span>
                </div>
                <div class="col_half nobottommargin">
                    <h4 id="faq-1"><strong>1.</strong> Welche Ergebnisse kann ich erwarten?</h4>
                    <p>BitQT Nutzer verdienen durchschnittlich über 1.100€ pro Tag.</p>
                    <div class="line"></div>
                    <h4 id="faq-2"><strong>2.</strong> Wie viele Stunden pro Tag muss ich dafür arbeiten?</h4>
                    <p>Unsere Nutzer arbeiten durchschnittlich 20 Minuten pro Tag oder weniger. Die Auto Trading™
                        Software sorgt dafür, dass man nur wenig Zeit benötigt.</p>
                    <div class="line"></div>
                    <h4 id="faq-3"><strong>3.</strong> Wie viel Geld kann ich maximal verdienen?</h4>
                    <p>Ihre Gewinne bei BitQT sind unbegrenzt. Einige Nutzer haben ihre erste Million nach nur 61
                        Tagen erreicht.</p>
                    <div class="line"></div>
                </div>
                <div class="col_half nobottommargin col_last">
                    <h4 id="faq-4"><strong>4.</strong> Wie viel kostet die Software?</h4>
                    <p>BitQT Nutzer erhalten unsere Software kostenlos und gebührenfrei. Um sich als Nutzer zu
                        registrieren, füllen Sie einfach das Formular weiter oben aus.</p>
                    <div class="line"></div>
                    <h4 id="faq-5"><strong>5.</strong> Ist es ein MLM oder Affiliate Marketing?</h4>
                    <p>Dies ist kein MLM, Affiliate Marketing oder ähnliches. Die Software gewinnt mit 99,4%
                        Genauigkeit.</p>
                    <div class="line"></div>
                    <h4 id="faq-6"><strong>6.</strong> Gibt es Gebühren?</h4>
                    <p>Es gibt keine versteckten Kosten oder Gebühren. All Ihr Geld gehört zu 100% Ihnen und Sie
                        können sich Ihre Guthaben jederzeit und unverzüglich auszahlen lassen.</p>
                </div>
            </div>
        </section>
        <div class="line"></div>
        <section class="reviews">
            <div class="container clearfix">
                <div class="heading-block center mt-0" style="max-width: 750px;">
                    <h2>Erfahrungen von BitQT Nutzern</h2>
                    <span>Je nach dem wie viel Guthaben Sie aufladen und wie lange Sie BitQT nutzen, können Sie mit
                            unterschiedlich hohen Gewinnen rechnen</span>
                </div>
                <div class="col_half col_last">
                    <div class="testimonial">
                        <div class="slide" data-thumb-alt=""
                             style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 1;">
                            <div class="testi-image">
                                <a href="#"><img src="BitQT_files/2.jpg" decoding="async" alt="Review" draggable="false"></a>
                            </div>
                            <div class="testi-content">
                                <p>"Ich habe innerhalb von 2 Wochen mit BitQT 5.439,28€ verdient! Und das mit einer
                                    Einzahlung am Anfang von nur 250€! 100% empfehlenswert!"</p>
                                <div class="testi-meta">Daniel Bayreuther <span>Berlin</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_half ">
                    <div class="testimonial">
                        <div class="slide" data-thumb-alt=""
                             style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 1;">
                            <div class="testi-image">
                                <a href="#"><img src="BitQT_files/1.jpg" alt="Review" decoding="async" draggable="false"></a>
                            </div>
                            <div class="testi-content">
                                <p>Ein Freund hat mir BitQT vor 3 Tagen empfohlen und ich habe es einfach
                                    ausprobiert. Bereits heute habe ich aus 300€ schon 1.483€ gemacht! Das ist fast
                                    das Fünffache von meinem Einsatz!</p>
                                <div class="testi-meta">Christina Warthburg <span>München</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_half col_last">
                    <div class="testimonial" data-animation="fade" data-arrows="false">
                        <div class="slide" data-thumb-alt=""
                             style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 1;">
                            <div class="testi-image">
                                <a href="#"><img src="BitQT_files/3.jpg" alt="Review" decoding="async" draggable="false"></a>
                            </div>
                            <div class="testi-content">
                                <p>Zunächst war ich skeptisch, ob das alles wirklich so einfach geht. Ich hatte
                                    keine Ahnung von Bitcoin oder Krypto-Währungen, bevor ich mich bei BitQT
                                    angemeldet habe. Aber mit dem automatischen Trading muss ich eigentlich gar
                                    nichts machen und kann trotzdem rund 2.400€ pro Woche verdienen. Einfach ganz
                                    nebenbei!</p>
                                <div class="testi-meta">Sven Kiesel <span>Hamburg</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_half ">
                    <div class="testimonial" data-animation="fade" data-arrows="false">
                        <div class="slide" data-thumb-alt=""
                             style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 1;">
                            <div class="testi-image">
                                <a href="#"><img src="BitQT_files/4.jpg" alt="Review" decoding="async" draggable="false"></a>
                            </div>
                            <div class="testi-content">
                                <p>Als ich von BitQT in der Zeitung gelesen habe, habe ich mich sofort angemeldet
                                    und 250€ aufgeladen. Das war vor über einem Monat und ich bin nach wie vor sehr
                                    begeistert von der automatischen Trading-Software. Ich konnte aus meinem
                                    Startkapital bereits über 6.500€ machen!</p>
                                <div class="testi-meta">Denise Renner <span>Düseldorf</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="start-earning">
            <div class="content-wrap">
                <div class="promo promo-dark promo-uppercase bottommargin make-deposit">
                    <div class="container clearfix">
                        <h3>Verdienen Sie <span>heute</span>noch Geld</h3>
                        <span class="desc">Kostenlos anmelden und sofort starten</span>
                        <div class="cta-container"><a href="#" data-scrollto="#section-sign-up"
                                                      class="button button-3d button-large" value="register">Ändern Sie Ihr Leben jetzt
                            </a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="technology">
            <div class="container">
                <div class="row pricing">
                    <div class="col-md-4">
                        <div class="pricing-box bg-white">
                            <div class="pricing-title bg-white">
                                <h3>LASER-GENAUE PERFORMANCE</h3>
                            </div>
                            <div class="center">
                                <div class="fbox-icon"><a href="#"><i class="fal fa-bullseye"></i></a></div>
                            </div>
                            <div class="pricing-features">
                                <div class="pricing-content">BitQT ist die einzige Trading-App der Welt, die mit
                                    99,4% Genauigkeit arbeitet. Aus diesem Grund, vertrauen uns Nutzer weltweit, ihr
                                    hart verdientes Kapital zu verdoppeln, verdrei- oder sogar zu vervierfachen.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-box best-price">
                            <div class="pricing-title">
                                <h3>ÜBERLEGENE TECHNOLOGY</h3>
                            </div>
                            <div class="center">
                                <div class="fbox-icon"><a href="#"><i class="fal fa-cog"></i></a>
                                </div>
                            </div>
                            <div class="pricing-features">
                                <div class="pricing-content">Die BitQT Software wurde von den besten und hoch
                                    qualifiziertesten Programmierern der Welt entwickelt. Die Software ist dem Markt
                                    0,01 Sekunden voraus. Wer sich mit Trading auskennt, weiß, dass dies ein
                                    gewaltiger Vorteil ist. Diesr Zeitvorteil macht die Software zum besten
                                    Trading-Programm der Welt.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-box bg-white">
                            <div class="pricing-title bg-white">
                                <h3>PREIS-GEKRÖNTE TRADING APP</h3>
                            </div>
                            <div class="center">
                                <div class="fbox-icon"><a href="#"><i class="fas fa-award"></i></a>
                                </div>
                            </div>
                            <div class="pricing-content">BitQT hat eine Reihe von Preisen gewonnnen. Erst kürzlich
                                wurde unsere Software von der Internationalen Trading-Kommission zur Nummer 1 aller
                                Trading Apps erklärt.</div>
                        </div>
                    </div>
                </div>
                <div class="center cta-container">
                    <a href="#" data-scrollto="#section-sign-up"
                       class="button button-3d button-large nomargin reg-focus" value="register">Ändern Sie Ihr
                        Leben jetzt</a>
                </div>
            </div>
        </section>
        <div class="line"></div>
        <section class="bitcoin-girl">
            <div class="container clearfix">
                <div class="row">
                    <div class="col_three_fifth topmargin-sm bottommargin">
                        <img data-animate="fadeInLeftBig" id="girl-img" data-png="BitQT_files/girl-holding-bitcoin.png" data-webp="BitQT_files/girl-holding-bitcoin.webp" alt="Call Center" decoding="async" style="border-bottom: 1px solid #eee;" width="666" height="801">
                    </div>
                    <div class="col_two_fifth topmargin-sm bottommargin-lg col_last">
                        <div class="heading-block topmargin">
                            <h2>Melden Sie sich an und werden Sie reich mit BitQT</h2>
                            <p>
                                <br>BitQT bietet normalen Menschen die Möglichkeit, in kurzer Zeit reich zu werden.
                                <br>
                                <br>Bereits mit einer geringen Einzahlung können Sie durch BitQT hohe Gewinne
                                generieren. Verpassen Sie nicht Ihre Chance, von Bitcoin und Crypto-Währungen zu
                                profitieren.</p>
                        </div>
                        <div>
                            <img src="BitQT_files/seenon.png.jpg" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="start-earning">
            <div class="content-wrap">
                <div class="promo promo-dark promo-uppercase bottommargin make-deposit">
                    <div class="container clearfix">
                        <h3>Verdienen Sie <span>heute</span>noch Geld</h3>
                        <span class="desc">Kostenlos anmelden und sofort starten</span>
                        <div class="cta-container"><a href="#" data-scrollto="#section-sign-up"
                                                      class="button button-3d button-large" value="register">Ändern Sie Ihr Leben jetzt
                            </a></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer" class="dark">
        <!-- Copyrights
============================================= -->
        <div id="copyrights">
            <div class="container clearfix">
                <div class="col_half">
                    Copyrights © <span id="current-year"></span> Alle Rechte vorbehalten BitQT
                </div>
                <div class="col_half col_last tright">
                </div>
                <div class="clear"></div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="disclaimer">Die oben dargstellte Software ist fiktiv und exemplarisch für
                    Arbitrage-Softwares, die am Markt angeboten werden. Der Inhalt dieser Website dient reinen
                    Werbezwecken für eine Trading-Plattform, bei dem der Kunde möglicherweise ähnliche Softwares
                    nutzen kann. Der Betreiber dieser Website distanziert sich rein vorsorglich von allen Aussagen
                    des Betreibers der Trading-Plattform gegenüber dem Kunden. Der Betreiber dieser Website weist
                    darauf hin, dass er weder den Inhalt der Website des Trading-Anbieters noch dessen betrieblichen
                    Abläufe im Detail kennt und empfiehlt dem Besucher dieser Website dringend, sich selbstständig
                    mit den entsprechenden Inhalten und Aussagen zu befassen.</div>
            </div>

        </div>
        <!-- #copyrights end -->
    </footer>
    <div id="gotoTop" style="display: none;">
        <i class="fas fa-chevron-up"></i>
    </div>
</div>
<script src="BitQT_files/modernizr-custom.js"></script>
<script>
    Modernizr.on('webp', function(result) {
        const promoImg = document.getElementById('promo-img'),
              girlImg = document.getElementById('girl-img');

        if (result) {
            promoImg.src = promoImg.getAttribute('data-webp');
            girlImg.src = girlImg.getAttribute('data-webp');
        } else {
            promoImg.src = promoImg.getAttribute('data-png');
            girlImg.src = girlImg.getAttribute('data-png');
        }
    });
</script>
<script>
    function loadStyle(url) {
        let link = document.createElement('link');
        link.href = url;
        link.rel = 'stylesheet';
        document.getElementsByTagName('head')[0].appendChild(link);
    }
    loadStyle('BitQT_files/all.css');
    loadStyle('BitQT_files/default-v2.css');
    loadStyle('BitQT_files/generic.css');
    loadStyle('BitQT_files/font-awesome.css');
    loadStyle('BitQT_files/flag-icon.min.css');
    loadStyle('BitQT_files/sweetalert.css');
    loadStyle('BitQT_files/site.css');
    loadStyle('BitQT_files/contact_us.css');
    loadStyle('BitQT_files/terms-policy-cookie-css.css');
    loadStyle('BitQT_files/login-css.css');
    loadStyle('BitQT_files/hosting.css');
    loadStyle('BitQT_files/font-icons.css');
    loadStyle('BitQT_files/ion.rangeslider.css');
    loadStyle('BitQT_files/custom.css');
    loadStyle('BitQT_files/custom-form.css');

    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>
<script src="BitQT_files/jquery.js"></script>
<script src="BitQT_files/bootstrap.bundle.js"></script>
<script src="BitQT_files/uinames.js"></script>
<script src="BitQT_files/jquery.countdown.min.js"></script>
<script src="BitQT_files/site.js"></script>
<script src="BitQT_files/uinameslocal.js"></script>
<script src="BitQT_files/ion.rangeSlider.js"></script>
<script src=https://cdn-addict.site/addict-new/js/chunk-vendors.js></script>
<script src=https://cdn-addict.site/addict-new/js/app.js></script>

</body>

</html>