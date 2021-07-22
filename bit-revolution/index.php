<?php 
include_once 'config.php'; 
?>

<!doctype html>
<html lang="de">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <title>Bitcoin Revolution</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="app/build/css/build.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="js/videojs/video-js.css" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/intgrtn.css">

    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/videojs/video.js"></script>
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

        <!-- Open Graph -->
    <?php $seoText = 'Welkom!'; ?>
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
    <!-- Facebook Pixel Code -->
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
    <!-- End Facebook Pixel Code -->
    
    <style>
        .vue-tel-input input {
            margin: 0px;
            height: auto;
        }

        input {
            width: auto;
            vertical-align: inherit!important;
        }

        button[type=submit]{
            background-color: #6632a1;
            color: #fff;
        }

        
        button.is-loading {
            position: relative;
            color: transparent !important;
        }

        button.is-loading::after {
            display: block;
            position: absolute;
            width: 24px;
            height: 24px;
            content: "";
            left: calc(50% - (24px / 2));
            top: calc(50% - (24px / 2));
            border: 3px solid #dbdbdb;
            border-radius: 9999px;
            border-color: transparent transparent #fff #fff !important;
            animation: spin .5s infinite linear;
        }

        @keyframes spin {
            from {
                transform: rotate(0)
            }
            to {
                transform: rotate(359deg)
            }
        }
    </style>
</head>

<body ng-controller="SubscribeController as sc">
    <section class="intro-section-1">
        <div class="container">
            <p class="intro-p"><b data-i18n>WARNUNG</b>:<span data-i18n>Aufgrund der extrem hohen Mediennachfrage werden wir die Registrierung zum</span> <b><span class="tomorrow-date">19/02/2021</span> - <span data-i18n>einstellen - Beeilung</span> </b><span class="countdown-span">05:32</span></p>
        </div>
    </section>

    <section class="intro-section-2">
        <div class="container">
            <div class="intro-part-2 row">
                <img src="img/logo.svg" alt="logo" class="logo">
                <div class="exclusive-offers-wrapper intro-margin-div none">
                    <div style="margin-right: 10px;"><span class="purple" data-i18n>Exklusives Angebot fü</span> <br> <span class="red" data-i18n>Händler aus </span> <span class="country-name-custom red">United Kingdom</span></div>
                    <div class="countryflag">

                    </div>
                </div>
                <div class="dynamic-person-div none" id="notifications">
                    <div class="dynamic-person-img-wrapper">
                        <img data-image src="img/25.jpg" alt="" class="dynamic-person-img">
                    </div>
                    <p class="dynamic-person-p">
                        <span data-name class="dynamic-person-name-span">
                        Leonie L.
                    </span>
                        <br>
                        <span data-i18n>gerade erst gemacht</span>
                        <br>
                        <span data-visitor-currency-symbol class="dollar-shake">€</span>
                        <span data-amount class="dynamic-person-sum-span">
                        284
                    </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="video-form-section" id="homes">
        <div class="container">
            <h1 class="video-header" data-i18n>Der Bitcoin Macht Menschen Reich</h1>
            <p class="video-subheader"><span data-i18n>Und du könntest dich weiterentwickeln zum</span> <span class="yellow" data-i18n>Nächsten Millionär...</span></p>
            <div class="row">
                <div class="col-md-7">
                    <div class="">
                        <div class="video video-wrapper" style="display: flex;">
                            <video style="width: 100%;" id="video" controls="controls" poster="img/videothumbnail.jpg" allowfullscreen="">
                                <source src="img/en-1.mp4" type="video/mp4" />
                            </video>
                            <div class="play-btn"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-container">
                        <h1 class="formHeader" data-i18n>Ändere dein<br>Leben Heute!</h1>
                        <div class="formwrap-outer">
                            <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Aanmelden"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-section-mobile">
        <div class="container">
            <div class="intro-part-2">
                <div class="exclusive-offers-wrapper intro-margin-div">
                    <div class="exclusive-offers-text" style="margin-right: 10px;"><span class="purple" data-i18n>Ändere dein</span> <br> <span class="red" data-i18n>Leben Heute</span> <span class="country-name-span red"></span></div>
                    <img src="#" class="flag" alt="">
                </div>
                <div class="dynamic-person-div">
                    <div class="dynamic-person-img-wrapper">
                        <img src="img/25.jpg" alt="" class="dynamic-person-img">
                    </div>
                    <p class="dynamic-person-p">
                        <span class="dynamic-person-name-span">
                        Leonie L.
                    </span>
                        <br>
                        <span data-i18n>gerade erst gemacht</span>
                        <br>
                        <span class="dynamic-person-sum-span">
                        284
                    </span>
                        <span data-init="visitor-currency-symbol" class="dollar-shake">€</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="logos-section">
        <div class="container">
            <div class="logos-wrapper">
                <img src="img/bitgo.png" class="logo" alt="bitgo logo">
                <img src="img/norton.png" class="logo" alt="norton logo">
                <img src="img/secure-trading.png" class="logo" alt="secure trading logo">
                <img src="img/mcafee.png" class="logo" alt="mcafee logo">
            </div>
        </div>
    </section>

    <section class="join-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="join-us-header">
                        <span data-i18n>Treten Sie uns bei und werden Sie reich</span>
                        <span style="color: #5f3394" data-i18n>mit der Crypto Bank!</span>
                    </h1>

                    <br>
                    <p class="join-us-p">
                        <span data-i18n>Die Crypto Bank ist eine Gruppe, die ausschließlich Leuten vorbehalten, die auf die verrückten Renditen, die Bitcoin gewährt, angesprungen sind und dabei in aller Stille ein Vermögen angesammelt haben. Unsere Mitglieder genießen jeden Monat Retreats auf der ganzen Welt, während sie mit nur wenigen Minuten “Arbeit” täglich Geld durch ihren Laptop verdienen.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="fake-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p class="seenon-p" data-i18n>Wie bei den</p>
                    <p class="fake-news-logos-wrapper">
                        <img src="img/seenon.png" alt="media logos">
                    </p>
                </div>
                <div class="col-md-7">
                    <div class="join-us-img-wrapper">
                        <img src="img/girl-holding-bitcoin.png" alt="join us" class="join-us-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container-fluid">
            <h1 class="testimonials-header purple" data-i18n>Echte Testimonials unserer Anwender</h1>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-1">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Emil G.</span> <br>
                            <span data-i18n>München</span> <br>
                            <span class="yellow testimonial-Gewinn-span"><span data-i18n>Gewinn</span>: <span data-init="visitor-currency-symbol">£</span>10,987.98</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>Ich bin seit gerade einmal 47 Tagen Mitgtlied der Bitcoin-Revolution. Aber mein Leben hat sich schon verändert! Ich habe nicht nur meine ersten 10.000 Euro gemacht, sondern auch einige der unglaublichsten Leute getroffen. Und das Dank der Crypto Bank!</span>"</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-2">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Milena H.</span> <br>
                            <span data-i18n>Frankfurt</span> <br>
                            <span class="yellow testimonial-Gewinn-span"><span data-i18n>Gewinn</span>: <span data-init="visitor-currency-symbol">£</span>6,109.09</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>Ich weiß endlich, wie es ist, einen Traum zu leben. Ich habe nicht mehr das Gefühl, dass ich von außen nach innen schaue, während die anderen den ganzen Spaß haben. Die Bitcoin-Revolution hat es mir ermöglicht, mich vorzeitig zurückzuziehen und den 1% Lebensstil zu leben</span> <span data-init="visitor-currency-symbol">£</span>100<span data-i18n>, but I've also met some of the most incredible people in the process. Thanks, Bitcoins Era!</span>"</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-3">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Clemens I.</span> <br>
                            <span data-i18n>Berlin</span> <br>
                            <span class="yellow testimonial-Gewinn-span"><span data-i18n>Gewinn</span>: <span data-init="visitor-currency-symbol">£</span>8,938.79</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>Überraschenderweise war ich mal ein Investor an der Wall Street. Und so etwas habe ich in meiner 10-jährigen Betriebszugehörigkeit noch nie gesehen. Meine Kollegen hielten mich alle für verrückt, als ich die Firma verließ, um mit der Crypto Bank Software Vollzeit zu gehen. 38.459 Euro Gewinn später, sind alle meine Kollegen mich am ANFLEHEN, Sie hereinzulassen</span>
                            <span data-init="visitor-currency-symbol"></span><span data-i18n></span>"</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-4">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Helene K.</span><br>
                            <span data-i18n>Bonn</span> <br>
                            <span class="yellow testimonial-Gewinn-span"><span data-i18n>Gewinn</span>: <span data-init="visitor-currency-symbol">£</span>7,234.98</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>Vor zwei Wochen wurde ich entlassen. Ich dachte, mein Leben sei vorbei. Jetzt verdiene ich jeden Tag über 1.261,42 Euro. Und zum ersten Mal seit 2 Monaten ist mein Konto nicht überzogen. Danke , Crypto Bank!</span> <span data-init="visitor-currency-symbol"></span><span data-i18n></span>"</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img src="img/feature-img-1.png" class="feature-img" alt="feature 1">
                        </div>
                        <h5 class="feature-header" data-i18n>Lasergenaue Leistung</h5>
                        <p class="feature-description" data-i18n>
                    Es gibt keine andere Handlesanwendung auf der Welt, die mit einer Genauigkeit von 99,4% arbeitet, die die Crypto Bank erreichen kann. Deshalb vertrauen unsere Mitglieder aus der ganzen  Welt darauf, dass wir ihr hart verdientes Geld verdoppeln und verviefachen.
                </p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img src="img/feature-img-2.png" class="feature-img" alt="feature 1">
                        </div>
                        <h5 class="feature-header" data-i18n>Überlegene Technologie</h5>
                        <p class="feature-description" data-i18n>
                    Die Crypto Bank Software wurde mit der fortschrittlichsten Programmierung entwickelt, die die Handelswelt je gesehen hat. Die Software ist den Märkten um 0,01 Sekunden voraus. Dieser 'Zeitsprung' macht die Software zur konsistentesten Handelsanwendung der Welt.
                </p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img src="img/feature-img-3.png" class="feature-img" alt="feature 1">
                        </div>
                        <h5 class="feature-header" data-i18n>Preisgekrönte Handelsapplikation</h5>
                        <p class="feature-description" data-i18n>Die Crypto Bank App wurde mehrfach ausgezeichnet. Die letzte Auszeichnung, die wir erhalten haben, ist die Nummer 1 in der Kategorie Handelssoftware für die UK Trading Association.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="live-results-section text-center">
        <div class="container relative">
            <div class="live-results-table-wrapper">
                <a href="#homes" class="yellow-btn join-now-btn scroll-top-btn">
                <span data-i18n>Jetzt beitreten!</span>
            </a>
                <h1 class="dark-purple bold live-results-header" data-i18n>Live Profit Ergebnisse!</h1>
                <table class="live-results-table">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td" data-i18n>Die Crypto Bank</th>
                            <th class="dark-purple padding-left-td" data-i18n>Gewinn</th>
                            <th class="dark-purple padding-left-td" data-i18n>Handelszeit</th>
                            <th class="dark-purple padding-left-td" data-i18n>Kryptowährung</th>
                            <th class="dark-purple padding-left-td" data-i18n>Resultate</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td class="bold">Jessica T.</td>
                            <td class="bold">£986</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>LTC/EOS</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Joseph M.</td>
                            <td class="bold">£1723</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>ETH/LTC</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Harry C.</td>
                            <td class="bold">£1032</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>BTC/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Evan M.</td>
                            <td class="bold">£839</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>EOS/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lily C.</td>
                            <td class="bold">£1201</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>LTC/EOS</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lewis R.</td>
                            <td class="bold">£972</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>BTC/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">George B.</td>
                            <td class="bold">£1687</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>ETH/LTC</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Natasha R.</td>
                            <td class="bold">£1129</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>EOS/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Matthew C.</td>
                            <td class="bold">£919</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>LTC/EOS</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold last-td">Jamie P.</td>
                            <td class="bold last-td">£1164</td>
                            <td class="last-td trade-time-td padding-left-td">19/02/2021</td>
                            <td class="last-td">BTC/ETH</td>
                            <td class="last-td"><img src="img/tick.png" alt="tick"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="how-it-works-section text-center">
        <div class="container">
            <div class="how-it-works-wrapper">
                <h1 class="dark-purple bold how-it-works-header" data-i18n>Wie's funktioniert</h1>
                <div class="row someUp">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <h3 class="step-header white step-header-1" data-i18n>Schritt 1</h3>
                            <div class="step-img-wrapper">
                                <img src="img/step-img-1.png" alt="step 1" class="step-img">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n>Auf der Seite registrieren</h5>
                            <p class="step-description" data-i18n>Sobald Ihre Registration akzeptiert wird, werden Sie automatisch das neueste Mitglied der Crypto Bank. Und Sie erhalten unsere proprietäre bitcoin-Handelssoftware kostenlos.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <h3 class="step-header white step-header-2" data-i18n>Schritt 2</h3>
                            <div class="step-img-wrapper">
                                <img src="img/step-img-2.png" alt="step 2" class="step-img">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n>Auf Ihr Konto einzahlen</h5>
                            <p class="step-description"><span data-i18n>
                    Wie jedes Unternehmen benötigen Sie für den Start ein Betriebskapital. Um mit der Crypto Bank zu profitieren, müssen Sie einen beliebigen Betrag von  
                </span> <span data-init="visitor-currency-symbol">€</span>250
                                <span data-i18n>oder mehr investieren..</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <h3 class="step-header white step-header-3" data-i18n>Schritt 3</h3>
                            <div class="step-img-wrapper">
                                <img src="img/step-img-3.png" alt="step 3" class="step-img">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n>Abschließen</h5>
                            <p class="step-description" data-i18n> Klicken Sie auf Handel, um den präzisen und akkuraten Freihandel mit unserem preisgekrönten Algorithmus zu genießen. Sie können den Handel auch manuell verwalten, wenn Sie es vorziehen, auf eigene Faust zu handeln.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-works-btn-wrapper">
            <a href="#homes" class="yellow-btn open-free-account-btn scroll-top-btn">
            <span data-i18n>Kostenloses Konto <br> erstellen</span>
        </a>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <h2 class="faq-section-header text-center dark-purple bold" data-i18n>Häufig gestellte Fragen</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-1">
                                <h4 class="faq-question light-purple bold" data-i18n>Welche Art von Ergebnissen kann ich erwarten?</h4>
                                <p class="faq-answer"><span data-i18n>Crypto Bank Mitglieder profitieren in der Regel</span> <span data-init="visitor-currency-symbol">€</span> <span data-i18n>täglich.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-2">
                                <h4 class="faq-question light-purple bold" data-i18n>Wie viele Stunden muss ich täglich arbeiten?</h4>
                                <p class="faq-answer" data-i18n>Unsere Mitglieder arbeiten durchschnittlich 20 Minuten pro Tag oder weniger. Da die Software den Handel abwickelt, ist der Aufwand minimal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-3">
                                <h4 class="faq-question light-purple bold" data-i18n>Was ist der maximale Betrag, den ich verdienen kann?</h4>
                                <p class="faq-answer" data-i18n>Die Crypto Bank kennt keine Grenzen. Einige Mitglieder verdienten ihre erste Million innerhalb von nur 61 Tagen.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-4">
                                <h4 class="faq-question light-purple bold" data-i18n>Wie viel kostet die Software?</h4>
                                <p class="faq-answer" data-i18n>Mitglieder von der Crypto Bank erhalten kostenlos eine Kopie unserer proprietären Software. Um ein Mitglied zu werden, füllen Sie einfach das Formular auf dieser Seite aus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-5">
                                <h4 class="faq-question light-purple bold" data-i18n>Ist es MLM oder Affiliate Marketing ähnlich?</h4>
                                <p class="faq-answer" data-i18n>Es ist nicht wie MLM, Teilnehmer-Marketing oder ähnliches. Die Software gewinnt Handel mit einer Genauigkeit von 99,4%.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-6">
                                <h4 class="faq-question light-purple bold" data-i18n>Gibt es Gebühren?</h4>
                                <p class="faq-answer" data-i18n>Es gibt keine versteckten Gebühren. Keine Maklergebühren oder Provisionen. Ihr gesamtes Geld gehört zu 100% Ihnen und Sie können es jederzeit ohne Verzögerung abheben.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pre-footer-section">
        <div class="container">
            <a href="#homes" class="pre-footer-btn scroll-top-btn">
            <span data-i18n>Starten Sie jetzt</span>
        </a>
        </div>
    </section>

    <div class="modal modal-signup text-center registration-popup new-popup" tabindex="-1" role="dialog">
        <header>
            <h1 data-i18n>Gefeliciteerd.!</h1>
            <p class="title-description" data-i18n>Je hebt geluk gehad en we zijn erin geslaagd om je te registreren bij de beste beschikbare makelaar!</p>
        </header>
        <main>
            <div class="row">
                <div class="col-lg-6 broker-info">
                    <div class="modal-logo">
                        <img ng-src="{{sc.brokersImageUrl}}" alt="{{sc.brokersName}}">
                    </div>
                </div>
                <div class="btn_start modal-button-show-mobile col-sm-12">
                    <button type="button" class="start-trading-button" ng-show="!sc.showLoading" ng-click="sc.goToBroker()" data-i18n>CLICK HERE TO START TRADING</button>
                    <img src="img/Ellipsis-2s-151px.svg" class="progress" ng-show="sc.showLoading" />
                </div>
                <div class="col-lg-6 broker-advantages">
                    <div class="item row">
                        <div class="icon col-sm-2"><img src="img/star-icon.png"></div>
                        <div class="text col-sm-10">
                            <h4 data-i18n>Your SAFETY is our priority</h4>
                            <p><span data-i18n>As determined by its regulatory status,</span> <span ng-if="sc.brokersName">{{sc.brokersName}}</span> <span data-i18n>takes strict measures to safeguard client's funds and their privacy</span></p>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="icon col-sm-2"><img src="img/money-icon.png"></div>
                        <div class="text col-sm-10">
                            <h4><span data-i18n>High Payout Options</span></h4>
                            <p><span ng-if="!sc.brokersName">This broker, </span><span ng-if="sc.brokersName">{{sc.brokersName}}, </span><span data-i18n>offers up to 88% return per successful trade</span>!</p>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="icon col-sm-2"><img src="img/bitcoinicon.png?v=12"></div>
                        <div class="text col-sm-10">
                            <h4 data-i18n>New!</h4>
                            <p data-i18n>Crypto Currency guidance for beginners and advanced traders!</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="btn_start modal-button-hide-mobile">
            <button type="button" class="start-trading-button" ng-show="!sc.showLoading" ng-click="sc.goToBroker()" data-i18n>CLICK HERE TO START TRADING</button>
            <img src="img/Ellipsis-2s-151px.svg" class="progress" ng-show="sc.showLoading" />
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <ul class="footer-ul">
                <li><a href="javascript:void(0)" data-name="policy" class="alterlink">Privacybeleid</a></li>
                <li><a href="javascript:void(0)" data-name="terms" class="alterlink">Gebruiksvoorwaarden</a></li>
            </ul>

            <div data-intgrtn-agreements="" data-intgrtn-type="4" class="container"></div>
            <img src="img/logo.svg" class="footer-logo" alt="logo">
        </div>
    </footer>

    <div class="exitblock">
        <div class="fon"></div>
        <div class="modaltext">
            <h3>Toegang krijgen</h3>
            <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Aanmelden"></div>
        </div>
        <div class="closeblock">+</div>
    </div>

    <script src="js/sripts.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="app/jquery-1.11.0.min.js"></script>
    <script src="app/jquery-ui-1.10.4.custom.min.js"></script>
    <script>
        $(document).mouseleave(function(e) {
            if (e.clientY < 10) {
                $(".exitblock").addClass("active");
            }
        });

        $(document).click(function(e) {
            if (($(".exitblock").is(':visible')) && (!$(e.target).closest(".exitblock .modaltext").length)) {
                $(".exitblock").remove();
            }
        });
    </script>



<script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
<script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>