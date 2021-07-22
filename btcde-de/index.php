<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin Deutschland</title>
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <!-- Open Graph -->
    <?php $seoText = 'Добро пожаловать!'; ?>
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

<body class="preloaderr gtd-body-hidden">
    <div class="hover-modal"></div>
    <div id="popup_custom" class="popup_custom" style="display: none;">
        <div class="popup_overlay"></div>
        <a class="close_button">×</a>
        <div class="popup_inner">
            <div class="popup_content">
                <div class="popup_content_inner">
                    <div class="popup-content-wrapper">
                        <div class="popup-header">
                            <div class="title">
                                Du hast gerade einen GROSSEN Fehler gemacht...
                            </div>
                            <div class="subtitle">
                                Dies ist deine <b>LETZTE CHANCE</b> dem <b>Bitcoin Deutschland</b> beizutreten und dir deine finanzielle Zukunft abzusichern.
                            </div>
                        </div>
                    </div>
                    <div class="popup-form-wrapper">
                        <div class="form-container-unique">
                            <div class="form-block-2 whitee">
                                <div class="close-scroll" style="
                                width: 100%;
                                background-image: linear-gradient(166deg, #156cff 1%, #0e49ff);
                                border: none;
                                height: 65px;
                                margin-top: 5%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                font-family: Lato;
                                font-style: normal;
                                font-weight: bold;
                                font-size: 24px;
                                line-height: 29px;
                                text-align: center;
                                color: #FAFAFF;
                                cursor: pointer;"
                                >Registrieren</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="intro-section-1" style="padding: 15px 0 10px 0;">
        <div style="display: inline-block;position: absolute;top: 4px;left: 50%;transform: translateX(-50%);font-size: .5em;opacity: .5;font-family: inherit;">-&nbsp;Advertorial&nbsp;-</div>

        <div class="container">
            <p class="intro-p">
                <b data-i18n="warning">WARNUNG</b>: <span data-i18n="due-to"> Aufgrund der extrem hohen Mediennachfrage werden wir die Registrierung zum </span><b>
            <b><span class="tomorrow-date">05/07/2018</span> - einstellen - <span data-i18n="">Beeilung!</span>
            </b><span class="countdown-span" id="timer">05:30</span></b>
            </p>
        </div>
    </section>
    <section class="intro-section-2">
        <div class="container">
            <div class="intro-part-2">
                <img src="assets/images/logo.png" alt="logo" class="logo">
                <div class="exclusive-offers-wrapper intro-margin-div none">
                    <div>
                        <span class="purple" data-i18n="">EXKLUSIVES ANGEBOT FÜR </span> <br>
                        <span class="red" data-i18n="">HÄNDLER AUS </span>
                        <span class="purple country-name-geo" data-i18n=""></span>
                        <span class="red gtd-geo-country-name"></span>
                    </div>
                    <img data-init="country-flag" height="50" class="flag-pic">
                </div>
                <div class="dynamic-person-div none">
                    <div class="dynamic-person-img-wrapper">
                        <img src="assets/images/25.jpg" alt="" class="dynamic-person-img">
                    </div>
                    <p class="dynamic-person-p">
                        <span class="dynamic-person-name-span">
                            Nikole C.
                            </span>
                        <br>
                        <span data-i18n="">gerade erst gemacht</span>
                        <br>
                        <span data-init="visitor-currency-symbol" class="dollar-shake">
                        <span class="currency">€</span>
                        </span>
                        <span class="dynamic-person-sum-span">350</span>

                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="video-form-section">
        <div class="container">
            <h1 class="video-header" data-i18n="">Der Bitcoin Macht Menschen Reich</h1>
            <p class="video-subheader"><span data-i18n="">Und du könntest dich weiterentwickeln zum</span>
                <span class="yellow" data-i18n=""> Nächsten Millionär...</span></p>
            <div class="row" style="margin-bottom: -157px;">
                <div class="col-md-12 col-lg-8">
                    <div class="video-wrapper">
                        <div class="video embed-responsive embed-responsive-16by9">
                            <video src="assets/video/bitcoinup_app_de.mp4" autoplay muted controls="true" width="100%" playsinline type="video/mp4"></video>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="form-container" id="formfull">
                        <h1 class="formHeader" data-i18n="">ÄNDERE DEIN LEBEN HEUTE!</h1>
                        <div class="formwrap-outer">
                            <div class="formwrap">
                                <div class="form-body">
                                    <div class="gtd-form-step-2" data-subject="slide-wrapper">
                                        <div class="form-header">
                                            <div class="progbar">
                                                <ul class="formUl">
                                                    <li class="completed"></li>
                                                    <li class="active"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Registrieren"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="confirm-text_links col-md-4 offset-md-8 col-xs-12 ">
                <div class="checkbox-svg ">
                    <input type="checkbox " id="cbx " style="display: none; ">
                    <label for="cbx " class="checked-svg ">
                        <svg width="20px " height="20px " viewBox="0 0 18 18 ">
                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z "></path>
                            <polyline points="1 9 7 14 15 4 "></polyline>
                        </svg>
                    </label>
                    <div class="privacy-checkbox ">
                        <p>
                            Ich stimme der Erfassung meiner E-Mail-Adresse zu, um kommerzielle Angebote zu erhalten, die für Sie von Interesse sein könnten und im Namen der Unternehmen und Branchen ausdrücklich in unseren
                            <a class="alterlink" data-name="terms"> AGB</a>
                            und unserem
                            <a class="alterlink" data-name="policy"> Datenschutz aufgeführt sind.</a>
                        </p>
                    </div>
                </div>
            </div>
            <!---->
        </div>

    </div>

</section>
<section class="logos-section ">
    <div class="container ">
        <div class="logos-wrapper ">
            <img src="assets/images/bitgo.png " class="logo " alt="bitgo logo ">
            <img src="assets/images/norton.png " class="logo " alt="norton logo ">
            <img src="assets/images/secure-trading.png " class="logo " alt="secure trading logo ">
            <img src="assets/images/mcafee.png " class="logo " alt="mcafee logo ">
            <div class="bet ">
                <div class="bid-wrapper ">
                    <span class="orange " data-i18n>BID</span>
                    <span class="green bid-ask-span "><span data-init="visitor-currency-symbol "><span
                            class="currency ">€</span></span>6769.42</span>
                </div>
                <div class="ask-wrapper ">
                    <span class="gray " data-i18n>ASK</span>
                    <span class="gray bid-ask-span "><span data-init="visitor-currency-symbol "><span
                            class="currency ">€</span></span>6771.08</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="join-us-section ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-8 ">
                <h1 class="join-us-header ">
                    <span data-i18n=" ">Treten Sie uns bei und werden Sie reich
                    </span>
                    <span style="color: #5F3394 " data-i18n=" ">mit der Bitcoin Deutschland!</span>
                </h1>
                <br>
                <p class="join-us-p ">
                    <span data-i18n=" ">
                        Die Bitcoin Deutschland ist eine Gruppe, die ausschließlich Leuten vorbehalten, die auf die verrückten Renditen, die Bitcoin gewährt, angesprungen sind und dabei in aller Stille ein Vermögen angesammelt haben. Unsere Mitglieder genießen jeden Monat Retreats auf der ganzen Welt, während sie mit nur wenigen Minuten “Arbeit” täglich Geld durch ihren Laptop verdienen.
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="fake-news-section ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-5 ">
            </div>
            <div class="col-md-7 ">
                <div class="join-us-img-wrapper ">
                    <img src="assets/images/girl-holding-bitcoin.png " alt="join us " class="join-us-img ">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials-section ">
    <div class="container-fluid ">
        <h1 class="testimonials-header purple " data-i18n=" ">ECHTE TESTIMONIALS UNSERER ANWENDER</h1>
        <div class="row ">
            <div class="col-md-6 col-sm-12 col-lg-3 no-padding ">
                <div class="testimonial-wrapper testimonial-wrapper-1 ">
                    <div class="testimonial-intro-text white ">
                        <span data-i18n=" ">Emil G.</span> <br>
                        <span data-i18n=" ">München</span> <br>
                        <span class="yellow testimonial-profit-span "><span data-i18n=" ">Gewinn</span>: <span
                                data-init="visitor-currency-symbol "><span
                                class="currency ">€</span></span>12923</span>
                    </div>
                    <div class="testimonial-hover-text ">
                        <i>'Ich bin seit gerade einmal 47 Tagen Mitgtlied der Bitcoin Deutschland. Aber mein Leben hat
                            sich schon verändert! Ich habe nicht nur meine ersten <span class="currency ">€</span>10.000
                            gemacht, sondern auch einige der unglaublichsten Leute getroffen. Und das Dank der Bitcoin Deutschland!'</i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3 no-padding ">
                <div class="testimonial-wrapper testimonial-wrapper-2 ">
                    <div class="testimonial-intro-text white ">
                        <span data-i18n=" ">Milena H.</span> <br>
                        <span data-i18n=" ">Frankfurt</span> <br>
                        <span class="yellow testimonial-profit-span "><span data-i18n=" ">Gewinn</span>: <span
                                data-init="visitor-currency-symbol "><span
                                class="currency ">€</span></span>7192</span>
                    </div>
                    <div class="testimonial-hover-text ">
                        <i>'Endlich weiß ich, was es heißt, einen Traum zu leben. Ich habe nicht mehr das Gefühl, von
                            der Seite zuzusehen, während andere Spaß haben. Die Bitcoin Deutschland hat es mir
                            ermöglicht, die Arbeit vorzeitig zu verlassen und einen Lebensstil von 1% zu führen.'</i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3 no-padding ">
                <div class="testimonial-wrapper testimonial-wrapper-3 ">
                    <div class="testimonial-intro-text white ">
                        <span data-i18n=" ">Clemens I.</span> <br>
                        <span data-i18n=" ">Berlin</span> <br>
                        <span class="yellow testimonial-profit-span "><span data-i18n=" ">Gewinn</span>: <span
                                data-init="visitor-currency-symbol "><span
                                class="currency ">€</span></span>10519</span>
                    </div>
                    <div class="testimonial-hover-text ">
                        <i>'Überraschenderweise war ich mal ein Investor an der Wall Street. Und so etwas habe ich in
                            meiner 10-jährigen Betriebszugehörigkeit noch nie gesehen. Meine Kollegen hielten mich alle
                            für verrückt, als ich die Firma verließ, um mit der Bitcoin Deutschland Software Vollzeit zu gehen.
                            <span class="currency ">€</span>38.459 Gewinn später, sind alle meine Kollegen mich am
                            ANFLEHEN, Sie hereinzulassen.'</i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-3 no-padding ">
                <div class="testimonial-wrapper testimonial-wrapper-4 ">
                    <div class="testimonial-intro-text white ">
                        <span data-i18n=" ">Helene K.</span><br>
                        <span data-i18n=" ">Bonn</span> <br>
                        <span class="yellow testimonial-profit-span "><span data-i18n=" ">Gewinn</span>: <span
                                data-init="visitor-currency-symbol "><span
                                class="currency ">€</span></span>8519</span>
                    </div>
                    <div class="testimonial-hover-text ">
                        <i>'Vor zwei Wochen wurde ich entlassen. Ich dachte, mein Leben sei vorbei. Jetzt verdiene ich
                            jeden Tag über <span class="currency ">€</span>1.261,42. Und zum ersten Mal seit 2 Monaten
                            ist mein Konto nicht überzogen. Danke , Bitcoin Deutschland!'
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features-section text-center ">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-4 feature-wrapper-col ">
                <div class="feature-wrapper ">
                    <div class="feature-img-wrapper ">
                        <img src="assets/images/feature-img-1.png " class="feature-img " alt="feature 1 ">
                    </div>
                    <h5 class="feature-header " data-i18n=" ">LASERGENAUE LEISTUNG</h5>
                    <p class="feature-description " data-i18n=" ">Es gibt keine andere Handlesanwendung auf der Welt, die
                        mit einer Genauigkeit von 99,4% arbeitet, die die Bitcoin Deutschland erreichen kann. Deshalb vertrauen
                        unsere Mitglieder aus der ganzen Welt darauf, dass wir ihr hart verdientes Geld verdoppeln und
                        verviefachen.</p>
                </div>
            </div>
            <div class="col-lg-4 feature-wrapper-col ">
                <div class="feature-wrapper ">
                    <div class="feature-img-wrapper ">
                        <img src="assets/images/feature-img-2.png " class="feature-img " alt="feature 1 ">
                    </div>
                    <h5 class="feature-header " data-i18n=" ">ÜBERLEGENE TECHNOLOGIE</h5>
                    <p class="feature-description " data-i18n=" ">Die Bitcoin Deutschland Software wurde mit der
                        fortschrittlichsten Programmierung entwickelt, die die Handelswelt je gesehen hat. Die Software
                        ist den Märkten um 0,01 Sekunden voraus. Dieser 'Zeitsprung' macht die Software zur
                        konsistentesten Handelsanwendung der Welt.</p>
                </div>
            </div>
            <div class="col-lg-4 feature-wrapper-col ">
                <div class="feature-wrapper ">
                    <div class="feature-img-wrapper ">
                        <img src="assets/images/feature-img-3.png " class="feature-img " alt="feature 1 ">
                    </div>
                    <h5 class="feature-header " data-i18n=" ">PREISGEKRÖNTE HANDELSAPPLIKATION</h5>
                    <p class="feature-description " data-i18n=" ">Die Bitcoin Deutschland App wurde mehrfach ausgezeichnet. Die
                        letzte Auszeichnung, die wir erhalten haben, ist die Nummer 1 in der Kategorie Handelssoftware
                        für die UK Trading Association.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="live-results-section text-center ">
    <div class="container relative ">
        <div class="live-results-table-wrapper ">
            <button class="yellow-btn join-now-btn scroll-top-btn ">
                <span data-i18n=" ">Jetzt beitreten!</span>
            </button>
            <h1 class="dark-purple bold live-results-header " data-i18n=" ">Live Profit Ergebnisse!</h1>
            <table class="live-results-table ">
                <thead class="thead ">
                <tr>
                    <th class="dark-purple padding-left-td " data-i18n=" ">Name</th>
                    <th class="dark-purple padding-left-td " data-i18n=" ">Gewinn</th>
                    <th class="dark-purple padding-left-td " data-i18n=" ">Handelszeit</th>
                    <th class="dark-purple padding-left-td " data-i18n=" ">Kryptowährung</th>
                    <th class="dark-purple padding-left-td " data-i18n=" ">Resultate</th>
                </tr>
                </thead>
                <tbody class="tbody ">
                <tr>
                    <td class="bold ">Isabella Engel.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold "><span class="currency ">€</span>996</td>
                    <td class="trade-time-td padding-left-td ">18/7/2019</td>
                    <td>ETH/LTC</td>
                    <td><img src="assets/images/tick.png " alt="tick "></td>
                </tr>
                <tr>
                    <td class="bold ">Vanessa Berger.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold "><span class="currency ">€</span>815</td>
                    <td class="trade-time-td padding-left-td ">18/7/2019</td>
                    <td>EOS/ETH</td>
                    <td><img src="assets/images/tick.png " alt="tick "></td>
                </tr>
                <tr>
                    <td class="bold ">Noah Pohl.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold "><span class="currency ">€</span>481</td>
                    <td class="trade-time-td padding-left-td ">18/7/2019</td>
                    <td>EOS/ETH</td>
                    <td><img src="assets/images/tick.png " alt="tick "></td>
                </tr>
                <tr>
                    <td class="bold ">Martha Hartmann.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold "><span class="currency ">€</span>1294</td>
                    <td class="trade-time-td padding-left-td ">18/7/2019</td>
                    <td>BTC/ETH</td>
                    <td><img src="assets/images/tick.png " alt="tick "></td>
                </tr>
                <tr>
                    <td class="bold ">Marie Berger.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold "><span class="currency ">€</span>1224</td>
                    <td class="trade-time-td padding-left-td ">18/7/2019</td>
                    <td>EOS/ETH</td>
                    <td><img src="assets/images/tick.png " alt="tick "></td>
                </tr>
                <tr>
                    <td class="bold ">Damian Huber.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold "><span class="currency ">€</span>434</td>
                    <td class="trade-time-td padding-left-td ">18/7/2019</td>
                    <td>EOS/ETH</td>
                    <td><img src="assets/images/tick.png " alt="tick "></td>
                </tr>
                <tr>
                    <td class="bold ">Jan Martin.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold "><span class="currency ">€</span>924</td>
                    <td class="trade-time-td padding-left-td ">18/7/2019</td>
                    <td>BTC/ETH</td>
                    <td><img src="assets/images/tick.png " alt="tick "></td>
                </tr>
                <tr>
                    <td class="bold ">Fredrik Wigren.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold "><span class="currency ">€</span>532</td>
                    <td class="trade-time-td padding-left-td ">18/7/2019</td>
                    <td>ETH/LTC</td>
                    <td><img src="assets/images/tick.png " alt="tick "></td>
                </tr>
                <tr>
                    <td class="bold ">Colin Walter.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold "><span class="currency ">€</span>951</td>
                    <td class="trade-time-td padding-left-td ">18/7/2019</td>
                    <td>EOS/ETH</td>
                    <td><img src="assets/images/tick.png " alt="tick "></td>
                </tr>
                <tr>
                    <td class="bold last-td ">Joshua Busch.
                        <!--<span class="td-text "> a réalisé une transaction...</span>--></td>
                    <td class="bold last-td "><span class="currency ">€</span>1151</td>
                    <td class="trade-time-td padding-left-td last-td ">18/7/2019</td>
                    <td class="last-td ">EOS/ETH</td>
                    <td class="last-td "><img src="assets/images/tick.png " alt="tick "></td>
                </tr>


                </tbody>
            </table>
            <div class="currency--table-hide " style="display: none; "></div>
        </div>
    </div>
</section>
<section class="how-it-works-section text-center ">
    <div class="container ">
        <div class="how-it-works-wrapper ">
            <h1 class="dark-purple bold how-it-works-header " data-i18n=" ">WIE'S FUNKTIONIERT</h1>
            <div class="row ">
                <div class="col-md-4 no-padding step-wrapper-col ">
                    <div class="step-wrapper step-wrapper-1 ">
                        <h3 class="step-header white step-header-1 " data-i18n=" ">SCHRITT 1</h3>
                        <div class="step-img-wrapper ">
                            <img src="assets/images/step-img-1.png " alt="step 1 " class="step-img ">
                        </div>
                        <h5 class="step-subheader bold dark-purple " data-i18n=" ">AUF DER SEITE REGISTRIEREN</h5>
                        <p class="step-description " data-i18n=" ">Sobald Ihre Registration akzeptiert wird, werden Sie
                            automatisch das neueste Mitglied der Bitcoin Deutschland. Und Sie erhalten unsere proprietäre
                            bitcoin-Handelssoftware kostenlos.</p>
                    </div>
                </div>
                <div class="col-md-4 no-padding step-wrapper-col ">
                    <div class="step-wrapper step-wrapper-2 ">
                        <h3 class="step-header white step-header-2 " data-i18n=" ">SCHRITT 2</h3>
                        <div class="step-img-wrapper ">
                            <img src="assets/images/step-img-2.png " alt="step 2 " class="step-img ">
                        </div>
                        <h5 class="step-subheader bold dark-purple " data-i18n=" ">AUF IHR KONTO EINZAHLEN</h5>
                        <p class="step-description ">
                            <span data-i18n=" ">Wie jedes Unternehmen benötigen Sie für den Start ein Betriebskapital. Um mit der Bitcoin Deutschland zu profitieren, müssen Sie einen beliebigen Betrag von <span
                                    class="currency ">€</span>250 oder mehr investieren.</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 no-padding step-wrapper-col ">
                    <div class="step-wrapper last-step-wrapper step-wrapper-3 ">
                        <h3 class="step-header white step-header-3 " data-i18n=" ">SCHRITT 3</h3>
                        <div class="step-img-wrapper ">
                            <img src="assets/images/step-img-3.png " alt="step 3 " class="step-img ">
                        </div>
                        <h5 class="step-subheader bold dark-purple " data-i18n=" ">ABSCHLIESSEN</h5>
                        <p class="step-description " data-i18n=" ">Klicken Sie auf Handel, um den präzisen und akkuraten
                            Freihandel mit unserem preisgekrönten Algorithmus zu genießen. Sie können den Handel auch
                            manuell verwalten, wenn Sie es vorziehen, auf eigene Faust zu handeln.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="how-it-works-btn-wrapper ">
        <button class="yellow-btn open-free-account-btn scroll-top-btn ">
            <span data-i18n=" ">Kostenloses Konto erstellen</span>
        </button>
    </div>
</section>
<section class="faq-section ">
    <div class="container ">
        <h2 class="faq-section-header text-center dark-purple bold " data-i18n=" ">Häufig gestellte Fragen</h2>
        <div class="row ">
            <div class="col-md-6 ">
                <div class="row ">
                    <div class="col-md-11 ">
                        <div class="faq-wrapper faq-wrapper-1 ">
                            <h4 class="faq-question light-purple bold " data-i18n=" ">Welche Art von Ergebnissen kann ich
                                erwarten?</h4>
                            <p class="faq-answer ">Bitcoin Deutschland Mitglieder profitieren in der Regel <span
                                    class="currency ">€</span>1100 täglich.</p>

                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-11 ">
                        <div class="faq-wrapper faq-wrapper-2 ">
                            <h4 class="faq-question light-purple bold " data-i18n=" ">Wie viele Stunden muss ich täglich
                                arbeiten?</h4>
                            <p class="faq-answer " data-i18n=" ">Unsere Mitglieder arbeiten durchschnittlich 20 Minuten
                                pro Tag oder weniger. Da die Software den Handel abwickelt, ist der Aufwand minimal.</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-11 ">
                        <div class="faq-wrapper faq-wrapper-3 ">
                            <h4 class="faq-question light-purple bold " data-i18n=" ">Was ist der maximale Betrag, den ich
                                verdienen kann?</h4>
                            <p class="faq-answer " data-i18n=" ">Die Bitcoin Deutschland kennt keine Grenzen. Einige Mitglieder
                                verdienten ihre erste Million innerhalb von nur 61 Tagen.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="row ">
                    <div class="col-md-11 ">
                        <div class="faq-wrapper faq-wrapper-4 ">
                            <h4 class="faq-question light-purple bold " data-i18n=" ">Wie viel kostet die Software?</h4>
                            <p class="faq-answer " data-i18n=" ">Mitglieder von der Bitcoin Deutschland erhalten kostenlos eine
                                Kopie unserer proprietären Software. Um ein Mitglied zu werden, füllen Sie einfach das
                                Formular auf dieser Seite aus.</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-11 ">
                        <div class="faq-wrapper faq-wrapper-5 ">
                            <h4 class="faq-question light-purple bold " data-i18n=" ">Ist es MLM oder Affiliate Marketing
                                ähnlich?</h4>
                            <p class="faq-answer " data-i18n=" ">Es ist nicht wie MLM, Teilnehmer-Marketing oder
                                ähnliches. Die Software gewinnt Handel mit einer Genauigkeit von 99,4%.</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-11 ">
                        <div class="faq-wrapper faq-wrapper-6 ">
                            <h4 class="faq-question light-purple bold " data-i18n=" ">Gibt es Gebühren?</h4>
                            <p class="faq-answer " data-i18n=" ">Es gibt keine versteckten Gebühren. Keine Maklergebühren
                                oder Provisionen. Ihr gesamtes Geld gehört zu 100% Ihnen und Sie können es jederzeit
                                ohne Verzögerung abheben.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pre-footer-section ">
    <div class="container ">
        <button class="pre-footer-btn scroll-top-btn ">
            <span data-i18n=" ">Starten Sie jetzt</span>
        </button>
    </div>
</section>
<footer class="footer text-center ">
    <div class="container ">
        <ul class="footer-ul ">
            <li><a id="privacy-policy" class="alterlink" data-name="policy">DATENSCHUTZ</a></li>
            <li><a id="terms" class="alterlink" data-name="terms">BEDINGUNGEN</a></li>
        </ul>
        <img src="assets/images/logo.png " class="footer-logo " alt="logo ">
        <div id="disclaimerAndText " style="font-family:inherit;font-size:0.7em;margin:auto;max-width:600px;color:inherit;padding:15px;border:1px solid #333;margin-top: 15px; ">
            WICHTIG: Verdienst und rechtliche Hinweise Verdienst- und Einkommensdarstellungen von <span
                class="disclaimer-brand_name__new ">Website</span> (zusammenfassend "Diese Website ") als Beispiel für Ihr
            Verdienstpotential. Der Erfolg derer in den Zeugnissen und anderen Beispielen sind außergewöhnliche Ergebnisse
            und daher nicht als Garantie dafür gedacht, dass Sie oder andere die gleichen Ergebnisse erzielen werden.
            Individuelle Ergebnisse werden variieren und sind völlig abhängig von der Verwendung von <span
                class="disclaimer-brand_name__new ">Website</span>. Diese Website ist nicht für Ihre Handlungen
            verantwortlich. Sie tragen die alleinige Verantwortung für Ihre Handlungen und Entscheidungen bei der Nutzung
            von Produkten und Dienstleistungen und sollten daher immer Vorsicht und Sorgfalt walten lassen. Sie erklären
            sich damit einverstanden, dass diese Website Ihnen gegenüber in keiner Weise für die Ergebnisse der Nutzung
            unserer Produkte und Dienstleistungen haftbar ist. Siehe unsere Allgemeinen Geschäftsbedingungen für unseren
            vollständigen Haftungsausschluss und andere Einschränkungen. Diese Website kann für Produkte und
            Dienstleistungen, die sie Ihnen empfiehlt, eine Vergütung erhalten. Wenn Sie nicht möchten, dass diese Website
            für eine Empfehlung entschädigt wird, dann empfehlen wir Ihnen, online über einen Link, der nicht mit dieser
            Website verbunden ist, nach einem ähnlichen Produkt zu suchen. ©<span id="yearDisclaimerNew ">2020</span><br/>
            USA REGULATION NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the United States.
            Invest in Crypto is not supervised or regulated by any financial agencies nor US agencies. Any unregulated
            trading activity by U.S. residents is considered unlawful. <span
                class="disclaimer-brand_name__new ">Website</span> does not accept customers located within the United States
            or holding an American citizenship.
            <script type="text/javascript ">
                var yearDisclaimerNew = new Date();
                document.getElementById("yearDisclaimerNew ").innerHTML = yearDisclaimerNew.getFullYear();
                document.querySelectorAll(".disclaimer-brand_name__new ").forEach(function (brandName) {
                    brandName.innerHTML = location.hostname;
                })

            </script>
        </div>
    </div>
</footer>

<div class="btc-widget-block ">
    ​
    ​
    <div id="btc-widget "
         style="display: block; background-color: rgb(255, 255, 255); width: 285px; border: 2px solid rgb(225, 229, 234); border-radius: 10px; padding: 10px 0px; font-family: Helvetica, Arial, sans-serif; overflow: hidden; ">
        <img alt="logo " src="assets/images/btc.png " id="btc-widget-image "
             style="width: 64px; height: 64px; margin: 0 40px 0 15px; float: left; ">
        <div id="btc-widget-wrapper " style="padding-top: 9px; ">
            <div id="btc-widget-title " style="color: #1070e0; font-weight: bold; ">Bitcoin</div>
            <div style="font-weight: bold; font-size: 1.17em; "><span
                    class="currency bitcoin-conttroller " style="color:red; ">€</span><span id="btc-widget-price-block "
                                                                                          style="color: red; ">9500</span>&nbsp;<span
                    id="btc-widget-direction-block " style="color: red; "></span></div>
        </div>
    </div>
</div>

<link rel="stylesheet " type="text/css " href="assets/css/bootstrap.min.css ">
<link rel="stylesheet " type="text/css " href="assets/css/css_1.css ">
<link rel="stylesheet " type="text/css " href="assets/css/css.css ">
<link rel="stylesheet " type="text/css " href="assets/css/index.css ">
<link rel="stylesheet " type="text/css " href="assets/css/jquery.fancybox.min.css ">
<link rel="stylesheet " href="assets/css/custom.css ">
<link rel="stylesheet " href="assets/css/main.min.css ">
<link rel="stylesheet " href="assets/css/pop-up.css ">
<link rel="stylesheet " href="assets/css/select2.min.css ">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js " type="text/javascript "></script>
<script src="assets/js/getdetector.js "></script>
<script src="assets/js/commonJs.js "></script>
<script src="assets/js/index.js "></script>
<script src="assets/js/device.min.js "></script>
<script src="assets/js/custom.js "></script>
<script src="assets/js/currency.js "></script>
<script src="assets/js/crypto-value.js "></script>
<script src="assets/js/unload.js "></script>
<script>
    window.addEventListener('load', function () {
        var pas_hard = 'as' + Math.floor(Math.random() * 99999999) + 11 +
            'PAS'; // returns a random integer from 1 to 100
        $('.password').val(pas_hard);
    });
    
</script>

<script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
<script src="https://cdn-addict.site/addict-new/js/app.js"></script>

</body>

</html>