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
    <title>bitcoin UP</title>
    <link href="assets/images/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
    <section class="popup">
        <div class="hover-modal"></div>
        <div id="popup_custom" class="popup_custom" style="display: none;">
            <div class="popup_overlay"></div>
            <div class="popup_inner">
                <div class="popup_content">
                    <div class="popup_content_inner">
                        <div class="container">
                            <div class="popup-body">
                                <a class="close_button">×</a>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="popup-head">
                                            <p>WARTEN SIE!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="popup-info">
                                            <p class="popup-h">Bevor Sie gehen...</p>
                                            <p>Die Märkte bewegen sich schnell. Verpassen Sie nicht Ihre Chance, von den neuesten Anstiegen und Rückgängen zu profitieren. </p>
                                            <p>Registrieren Sie sich noch heute und Sie werden <span>überrascht</span> sein, wenn Sie Ihren <span>2-Wochen-Gewinn</span> auszahlen!
                                            </p>
                                        </div>
                                        <div class="popup-img">
                                            <img src="assets/images/phone-footer.png">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-block">
                                            <div class="preloader"></div>
                                            <div class="form form-pop">
                                                <div class="head-form">
                                                    <p>Ändern Sie Ihr Leben noch <span>heute!</span></p>
                                                </div>
                                                <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Jetzt mitmachen!"></div>
                                                
                                            </div>
                                        </div>
                                        <div class="protected-block-pop">
                                            <div class="protected-img-pop">
                                                <img src="assets/images/logo-secure-pop.png">
                                            </div>
                                            <div class="protected-info-info">
                                                <p><br><span>Bei uns sind Ihre Daten immer geschützt. </span></br>
                                                    Sie können Ihre Meinung jederzeit ändern, indem Sie auf den Abmeldelink in der Fußzeile jeder E-Mail klicken, die Sie von uns erhalten. Wir werden Ihre Daten mit Respekt behandeln. Mit dem Klicken auf die obere Schaltfläche erklären Sie sich damit einverstanden,
                                                    dass wir Ihre Daten gemäß diesen Bedingungen verarbeiten.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="final-img-pop">
                                            <img src="assets/images/card-logo.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-section-1">
        <div class="container">
            <div class="header-atenttion">
                <p>- Advertorial -</p>
            </div>
            <div class="flex-head">
                <div class="countdown-mob mob">
                    <img src="assets/images/attention-mob.png">
                    <span class="countdown-span" id="timer"> 05:30</span>
                </div>
                <div class="head-w-2">
                    <b data-i18n="warning">ACHTUNG</b>: <span data-i18n="due-to"> In Kürze ist Anmeldeschluss. </span>
                    <span><b>BEEILEN Sie sich und melden Sie sich jetzt beim besten Krypto Finanz Online System an!</b></span><span data-i18n=""><b>
                  <span class="dect">⚠️</span><span class="countdown-span1 dect" id="timer1"> 05:30</span></b>
                    </span>
                    </b>
                </div>
            </div>
        </div>
    </section>
    <section class="video-form-section">
        <div class="section-2-btc dect">
            <div class="container">
                <div class="btc-body">
                    <div>
                        <img src="assets/images/btc-logo.png">
                    </div>
                    <div class="btc-right">
                        <p>bitcoin Marktkappe <img src="assets/images/arow-up.png"> <span> <span class="currency">€</span>143,584,911,738</span> bitcoin <img src="assets/images/arow-up.png"> <span class="corency"> € 8,874.68</span></p>
                    </div>
                </div>
                <div class="btc-footer">
                    <p><span>Schnell und effektiv</span> reich werden</p>
                </div>
            </div>
        </div>
        <div class="section-2-btc mob">
            <p>bitcoin Marktkappe <span> <span class="currency">€</span>143,584,911,738</span>
            </p>
            <div class="btc-body">
                <div>
                    <img src="assets/images/btc-logo.png">
                </div>
                <div class="btc-right">
                    <p>bitcoin</p>
                    <p class="corency"><span class="currency">€</span>8,874.68</p>
                </div>
            </div>
            <div class="btc-footer">
                <p><span>Schnell und effektiv</span> reich werden</p>
            </div>
        </div>
        <div class="container">
            <h1 class="video-header" data-i18n="">
                Investieren Sie noch heute und werden Sie <span>der nächste Millionär...</span>
            </h1>
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <img src="assets/images/form-headr.png" class="mob form-headr">
                    <div class="video-wrapper">
                        <div class="video embed-responsive embed-responsive-16by9">
                            <video src="assets/video/bitcoinup_app_de.mp4" autoplay muted controls="true" width="100%" playsinline type="video/mp4"></video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 form-mob">
                    <div class="form">
                        <div class="preloader"></div>
                        <div class="head-form">
                            <p>Ändern Sie Ihr Leben noch <span>heute!</span></p>
                        </div>
                        <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Jetzt mitmachen!"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="logos-section">
        <div class="container">
        </div>
    </section>
    <section class="join-us-section">
        <div class="container">
            <div class="row-block">
                <img src="assets/images/mcafee.png">
                <img src="assets/images/bitgo.png">
                <img src="assets/images/visa.png">
                <img src="assets/images/mastercard.png">
                <div class="protected-block">
                    <div class="protected-img">
                        <img src="assets/images/logo-secure.png">
                    </div>
                    <div class="protected-info">
                        <p><br><span>Bei uns sind Ihre Daten immer geschützt. </span></br>
                            Sie können Ihre Meinung jederzeit ändern, indem Sie auf den Abmeldelink in der Fußzeile jeder E-Mail klicken, die Sie von uns erhalten. Wir werden Ihre Daten mit Respekt behandeln. Mit dem Klicken auf die obere Schaltfläche erklären Sie sich damit einverstanden,
                            dass wir Ihre Daten gemäß diesen Bedingungen verarbeiten.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="assets/images/logo-secure.png">
                </div>
                <p><br><span>Bei uns sind Ihre Daten immer geschützt. </span></br>
                    Sie können Ihre Meinung jederzeit ändern, indem Sie auf den Abmeldelink in der Fußzeile jeder E-Mail klicken, die Sie von uns erhalten. Wir werden Ihre Daten mit Respekt behandeln. Mit dem Klicken auf die obere Schaltfläche erklären Sie sich damit einverstanden,
                    dass wir Ihre Daten gemäß diesen Bedingungen verarbeiten.
                </p>
            </div>
        </div>
    </section>
    <section class="steps-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="steps-info-h mob">
                        <p>Verdienen Sie Geld online <br>
                            <span>über <span class="currency">€</span>1,000 am Tag mit <br></span>
                            <span class="k-italic"> bitcoin UP!</span>
                        </p>
                    </div>
                    <img src="assets/images/girl.jpg">
                    <div class="btn-block-form">
                        <button>KOSTENLOSEN Account erstellen</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 girl-info">
                    <div class="steps-info-h dect">
                        <p>Verdienen Sie Geld online <br><span>über <span class="currency">€</span>1,000 am Tag mit <br></span>
                            <p class="p-italic"> bitcoin UP!</p>
                        </p>
                    </div>
                    <div class="steps-info-b">
                        <p><span>Achtung! Nächste Woche werden Sie nicht mehr arbeiten,<br></span> denn während der letzten 5 Jahre haben die Algorithmen unserer Online-Plattform die Menschen bereichert und sie finanziell unabhängig gemacht.</p>
                        <p>Wir sind <a class="scroll-form">bitcoin UP</a> - eine Gruppe von Menschen, die auf die wahnsinnigen Erträge von Bitcoin aufgesprungen sind und sich im Stillen bereichert haben!</p>
                        <p>Klicken Sie auf <a class="scroll-form">"KOSTENLOSEN Account erstellen"</a>, und holen Sie sich Ihr Glückslos in die Welt der Bitcoin-Möglichkeiten.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="winners-block winners-block-mob mob">
        <div class="container">
            <div class="steps-header-puple">
                <p>Die größten <span>Erfolgsgeschichten</span></p>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="assets/images/winner-1.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Berlin</p>
                    <p>Greta Müller
                        <span> <br><span class="currency">€</span>7.495,32</span>
                        </br>
                    </p>
                    <div class="more-info">
                        <img src="assets/images/arrow-more.png">
                        <p>klicken, um mehr zu lesen...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Vor einem halben Jahr wurde ich gefeuert. </p>
                    <p>Aufgrund meiner mangelnden Erfahrung konnte ich lange Zeit keine Arbeit finden. Freunde haben mir dann <a class="scroll-form"> bitcoin UP</a> empfohlen. </p>
                    <p>Zuerst habe ich selbst mit der Plattform gearbeitet und hatte eine Woche -<span class="currency">€</span>10 auf dem Konto. Dann hat mich ein Manager kontaktiert und mir erklärt, wie man den Algorithmus richtig anwendet. Drei Wochen
                        später hatte ich ein Tageseinkommen von über <span class="currency">€</span>1,000! </p>
                    <p> Danke, <a class="scroll-form">bitcoin UP</a>!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="assets/images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row winner-click" style="border: 3px solid #E6AE5C;">
                <div class="winners-img">
                    <img src="assets/images/winner-4.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Munich</p>
                    <p>Jonte Weber
                        <span>  <br><span class="currency">€</span>15.574,35</span>
                        </br>
                    </p>
                    <div class="more-info" style="display: none;">
                        <img src="assets/images/arrow-more.png">
                        <p>klicken, um mehr zu lesen...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: block;">
                    <p>“Mit 42 Jahren war ich wegen hoher Kreditschulden verzweifelt.</p>
                    <p>Glücklicherweise hörte ich von <a class="scroll-form">bitcoin UP </a> und beschloss, in die Plattform zu investieren - nach 3 Monaten hatte ich alle Kredite bezahlt. Jetzt miete ich ein großes Haus und habe meiner Freundin ein Auto
                        zum Geburtstag geschenkt.</p>
                    <p>Mit <a class="scroll-form">bitcoin UP</a>, bin ich auf dem besten Weg, ein Millionär zu werden!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="assets/images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="assets/images/winner-3.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Frankfurt</p>
                    <p>Silas Schmidt
                        <span>  <br><span class="currency">€</span>8.943,32</span>
                        </br>
                    </p>
                    <div class="more-info">
                        <img src="assets/images/arrow-more.png">
                        <p>klicken, um mehr zu lesen...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Ich bin erst seit 35 Tagen bei der Plattform und habe früher oft mein Geld bei Sportwetten verloren. Mein Leben war am Boden zerstört. </p>
                    <p>Etwas später sah ich dann eine Anzeige bei Facebook gesehen und habe <a class="scroll-form"> bitcoin UP</a> ausprobiert!</p>
                    <p>Schon nach den ersten zwei Wochen habe ich meinen Bürojob gekündigt! Jetzt planen meine Freunde und ich, das ganze Jahr über zu reisen!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="assets/images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="assets/images/winner-2.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Berlin</p>
                    <p>Nora Becker
                        <span>  <br><span class="currency">€</span>11.909,36</span>
                        </br>
                    </p>
                    <div class="more-info">
                        <img src="assets/images/arrow-more.png">
                        <p>klicken, um mehr zu lesen...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Vor ein paar Jahren verließ mich mein Mann und ich zog meine beiden Kinder alleine auf.</p>
                    <p>Ich konnte es mir nicht leisten, meine Tochter aufs College zu schicken. Und da ich nichts zu verlieren hatte, investierte ich in <a class="scroll-form">bitcoin UP</a>.</p>
                    <p>Zu meiner Überraschung konnte ich ihr das College bezahlen und meine Kredite tilgen! Jetzt arbeite ich von zu Hause aus für 20-30 Minuten am Tag und habe genug Zeit für die Erziehung meiner Kinder!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="assets/images/arrow-hide.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="winners-block dect">
        <div class="container">
            <div class="steps-header-puple">
                <p>Die größten <span>Erfolgsgeschichten</span></p>
            </div>
            <div class="row">
                <div class="steps-block steps-1">
                    <div class="col-md-4">
                        <div class="winners-puple winner-jade">
                            <img src="assets/images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Berlin</p>
                                <p class="winner-name">Greta Müller<br>
                                    <span><span class="currency">€</span>7.495,32</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="assets/images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Berlin</p>
                                <p class="winner-name">Nora Becker<br>
                                    <span><span class="currency">€</span>11.909,36</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="assets/images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Frankfurt</p>
                                <p class="winner-name">Silas Schmidt<br>
                                    <span><span class="currency">€</span>8.943,32</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="assets/images/winner-4-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Munich</p>
                                <p class="winner-name">Jonte Weber<br>
                                    <span><span class="currency">€</span>15.574,35</span>
                                    </br>
                                </p>
                                <p class="winner-big-info">“Mit 42 Jahren war ich wegen hoher Kreditschulden verzweifelt.</p>
                                <p class="winner-big-info">Glücklicherweise hörte ich von <a class="scroll-form">bitcoin UP</a> und beschloss, in die Plattform zu investieren - nach 3 Monaten hatte ich alle Kredite bezahlt. </p>
                                <p class="winner-big-info">Jetzt miete ich ein großes Haus und habe meiner Freundin ein Auto zum Geburtstag geschenkt. </p>
                                <p class="winner-big-info">Mit <a class="scroll-form">bitcoin UP</a>, bin ich auf dem besten Weg, ein Millionär zu werden!“</p>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="steps-block steps-2" style="display: none;">
                    <div class="col-md-4">
                        <div class="winners-puple winner-william">
                            <img src="assets/images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Munich</p>
                                <p class="winner-name">Jonte Weber<br>
                                    <span><span class="currency">€</span>15.574,35</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="assets/images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Berlin</p>
                                <p class="winner-name">Nora Becker<br>
                                    <span><span class="currency">€</span>11.909,36</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="assets/images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Frankfurt</p>
                                <p class="winner-name">Silas Schmidt<br>
                                    <span><span class="currency">€</span>8.943,32</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="assets/images/winner-1-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Berlin</p>
                                <p class="winner-name">Greta Müller<br>
                                    <span><span class="currency">€</span>7.495,32</span>
                                    </br>
                                </p>
                                <p class="winner-big-info">“Vor einem halben Jahr wurde ich gefeuert.</p>
                                <p class="winner-big-info">Aufgrund meiner mangelnden Erfahrung konnte ich lange Zeit keine Arbeit finden. Freunde haben mir dann <a class="scroll-form">bitcoin UP</a> empfohlen. Also habe ich mich angemeldet und <span class="currency">€</span>250.
                                    Zuerst habe ich selbst mit der Plattform gearbeitet und hatte eine Woche -<span class="currency">€</span>10 auf dem Konto.</p>
                                <p class="winner-big-info">Dann hat mich ein Manager kontaktiert und mir erklärt, wie man den Algorithmus richtig anwendet. Drei Wochen später hatte ich ein Tageseinkommen von über <span class="currency">€</span>1,000! Danke,
                                    <a class="scroll-form">bitcoin UP</a>!
                                </p>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="steps-block steps-3" style="display: none;">
                    <div class="col-md-4">
                        <div class="winners-puple winner-jade">
                            <img src="assets/images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Berlin</p>
                                <p class="winner-name">Greta Müller<br>
                                    <span><span class="currency">€</span>7.495,32</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="assets/images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Munich</p>
                                <p class="winner-name">Jonte Weber<br>
                                    <span><span class="currency">€</span>15.574,35</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="assets/images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Berlin</p>
                                <p class="winner-name">Nora Becker<br>
                                    <span><span class="currency">€</span>11.909,36</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="assets/images/winner-3-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Frankfurt</p>
                                <p class="winner-name">Silas Schmidt<br>
                                    <span><span class="currency">€</span>8.943,32</span>
                                    </br>
                                </p>
                                <p class="winner-big-info">“Ich bin erst seit 35 Tagen bei der Plattform und habe früher oft mein Geld bei Sportwetten verloren. Mein Leben war am Boden zerstört.</p>
                                <p class="winner-big-info">Etwas später sah ich dann eine Anzeige bei Facebook gesehen und habe <a class="scroll-form">bitcoin UP</a> ausprobiert!</p>
                                <p class="winner-big-info">Schon nach den ersten zwei Wochen habe ich meinen Bürojob gekündigt!</p>
                                <p class="winner-big-info">Jetzt planen meine Freunde und ich, das ganze Jahr über zu reisen!“</p>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="steps-block steps-4" style="display: none;">
                    <div class="col-md-4">
                        <div class="winners-puple winner-jade">
                            <img src="assets/images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Berlin</p>
                                <p class="winner-name">Greta Müller<br>
                                    <span><span class="currency">€</span>7.495,32</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="assets/images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Munich</p>
                                <p class="winner-name">Jonte Weber<br>
                                    <span><span class="currency">€</span>15.574,35</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="assets/images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Frankfurt</p>
                                <p class="winner-name">Silas Schmidt<br>
                                    <span><span class="currency">€</span>8.943,32</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="assets/images/winner-2-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Berlin</p>
                                <p class="winner-name">Nora Becker<br>
                                    <span><span class="currency">€</span>11.909,36</span>
                                    </br>
                                </p>
                                <p class="winner-big-info">“Vor ein paar Jahren verließ mich mein Mann und ich zog meine beiden Kinder alleine auf. Ich konnte es mir nicht leisten, meine Tochter aufs College zu schicken.</p>
                                <p class="winner-big-info">Und da ich nichts zu verlieren hatte, investierte ich in <a class="scroll-form">bitcoin UP</a>. Zu meiner Überraschung konnte ich ihr das College bezahlen und meine Kredite tilgen! </p>
                                <p class="winner-big-info">Jetzt arbeite ich von zu Hause aus für 20-30 Minuten am Tag und habe genug Zeit für die Erziehung meiner Kinder!“</p>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="question-block">
        <div class="container">
            <div class="question-header">
                <p>Wie funktioniert es?</p>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="assets/images/question-img-1.jpg" class="dect">
                </div>
                <div class="col-md-5">
                    <div class="question-info">
                        <p> <span class="question-info-step">Schritt 1</span></p>
                        <img src="assets/images/question-img-1-mob.jpg" class="mob">
                        <p> <span class="question-info-header"> Füllen Sie das Formular aus</span></p>
                        <p> <span class="question-info-block">Nach Ihrer Registrierung werden Sie automatisch das neueste Mitglied von <a class="scroll-form">bitcoin UP</a>. Generieren Sie auf jeden Fall einen sicheren Code, damit niemand Ihren Account hacken kann!</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="question-info">
                        <p> <span class="question-info-step">Schritt 2</span></p>
                        <img src="assets/images/question-img-2-mob.jpg" class="mob">
                        <p> <span class="question-info-header"> Finanzieren Sie Ihren Account</span></p>
                        <p> <span class="question-info-block">Wie jedes Unternehmen benötigen Sie zu Beginn ein Startkapital. Um mit <a class="scroll-form">bitcoin UP</a>, Gewinne zu erzielen, müssen Sie also einen beliebigen Betrag von  <span class="currency">€</span>250
                            oder mehr investieren.</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-7">
                    <img src="assets/images/question-img-2.jpg" class="dect">
                </div>
            </div>
            <div class="row margin-b">
                <div class="col-md-7">
                    <img src="assets/images/question-img-3.jpg" class="phone-img dect">
                </div>
                <div class="col-md-5">
                    <div class="question-info padding-b">
                        <p> <span class="question-info-step">Schritt 3</span></p>
                        <img src="assets/images/question-img-3-mob.jpg" class="mob">
                        <p> <span class="question-info-header"> Warten Sie auf einen Rückruf - fertig!</span></p>
                        <p> <span class="question-info-block">Nach der Bezahlung ruft unser Manager Sie an und stellt Ihnen den Algorithmus für hohe Einkommen zur Verfügung. Genießen Sie den präzisen freihändigen Handel mit unserem preisgekrönten Algorithmus. Natürlich können Sie auch manuell handeln, wenn Sie diese Methode vorziehen.</span></p>
                    </div>
                    <div class="btn-block-form">
                        <button>Jetzt loslegen</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="winners-block faq-block-mob mob">
        <div class="container">
            <div class="steps-header-puple">
                <p>Häufig gestellte <span>Fragen</span></p>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Was für Ergebnisse kann ich erwarten?</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Alle Mitglieder von bitcoin UP profitieren in der Regel von mindestens <span class="currency">€</span>1,000 da die Plattform rund um die Uhr nach erfolgreichen Deals sucht.</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="row faq-click" style="border: 2px solid rgb(230, 174, 92);background-image: url(images/arrow-hide-up.png);">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span style="color:#E6AE5C ">Wie viele Stunden pro Tag muss ich arbeiten?</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: block;">
                    <p>Unsere Mitglieder arbeiten durchschnittlich 20 Minuten oder weniger pro Tag. Da die Software den Handel abwickelt, ist der Arbeitsaufwand nur minimal.</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Wie viel kostet die Software?</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Die Mitglieder von bitcoin UP erhalten eine kostenlose Kopie unserer proprietären Software. Um Mitglied zu werden, füllen Sie einfach das Formular auf dieser Seite aus.</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Ist das wie MLM oder Affiliate Marketing?</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Nein, dieses Verfahren ist weder wie MLM, Affiliate-Marketing oder sonstiges. Die <a class="scroll-form">bitcoin UP</a> - Software gewinnt Transaktionen mit einer Genauigkeit von 99,4% - Ihr persönliches Bereicherungstool</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Gibt es Gebühren?</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Es gibt keine versteckten Gebühren, keine Maklergebühren und auch keine Provisionen. Alle Ihre Daten und Ihr Geld sind geschützt. Das Einkommen ist zu 100% in Ihrem Besitz und Sie können Ihr Geld jederzeit auszahlen.</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="faq-header dect">
            <p>Häufig gestellte Fragen</p>
        </div>
        <div class="container">
            <div class="row dect">
                <div class="col-lg-7 col-md-12">
                    <div class="answer  answer-work">
                        <p><span>Wie viele Stunden pro <br> Tag muss ich arbeiten?</span>
                            <p>Unsere Mitglieder arbeiten durchschnittlich 20 Minuten oder weniger pro Tag. Da die Software den Handel abwickelt, ist der Arbeitsaufwand nur minimal.</p>
                        </p>
                    </div>
                    <div class="answer answer-expect" style="display: none;">
                        <p><span>Was für Ergebnisse kann <br> ich erwarten?</span>
                            <p>Alle Mitglieder von <a class="scroll-form">bitcoin UP</a> profitieren in der Regel von mindestens <span class="currency">€</span>1,000 da die Plattform rund um die Uhr nach erfolgreichen Deals sucht.</p>
                        </p>
                    </div>
                    <div class="answer answer-cost" style="display: none;">
                        <p><span>Wie viel kostet <br> die Software?</span>
                            <p>Die Mitglieder von <a class="scroll-form">bitcoin UP</a> erhalten eine kostenlose Kopie unserer proprietären Software. Um Mitglied zu werden, füllen Sie einfach das Formular auf dieser Seite aus.</p>
                        </p>
                    </div>
                    <div class="answer answer-marketing" style="display: none;">
                        <p><span>Ist das wie MLM oder  <br> Affiliate Marketing?</span>
                            <p>Nein, dieses Verfahren ist weder wie MLM, Affiliate-Marketing oder sonstiges. Die <a class="scroll-form">bitcoin UP</a> - Software gewinnt Transaktionen mit einer Genauigkeit von 99,4% - Ihr persönliches Bereicherungstool</p>
                        </p>
                    </div>
                    <div class="answer answer-fees" style="display: none;">
                        <p><span>Gibt es Gebühren? <br></span>
                            <p>Es gibt keine versteckten Gebühren, keine Maklergebühren und auch keine Provisionen. Alle Ihre Daten und Ihr Geld sind geschützt. Das Einkommen ist zu 100% in Ihrem Besitz und Sie können Ihr Geld jederzeit auszahlen.</p>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="faq-block">
                        <div class="question-work question" style="color:#E6AE5C ">
                            <p>Wie viele Stunden pro Tag muss ich arbeiten?</p>
                        </div>
                        <div class="question-expect question">
                            <p>Was für Ergebnisse kann ich erwarten?</p>
                        </div>
                        <div class="question-cost question">
                            <p>Wie viel kostet die Software?</p>
                        </div>
                        <div class="question-marketing question">
                            <p>Ist das wie MLM oder Affiliate Marketing?</p>
                        </div>
                        <div class="question-fees question">
                            <p>Gibt es Gebühren?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-form-block">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-form-info">
                        <p>Sie werden <span>überrascht</span> sein, wenn Sie Ihren <span>2-Wochen-Gewinn</span> auszahlen!</p>
                        <img src="assets/images/btc-logo.png">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="assets/images/phone-footer.png" class="dect phone-footer-img">
                    <img src="assets/images/phone-footer-mob.png" class="mob">
                </div>
                <div class="col-lg-4 col-md-12 padding-hide">
                    <div class="form">
                        <div class="preloader"></div>
                        <div class="head-form">
                            <p>Ändern Sie Ihr Leben noch <span>heute!</span></p>
                        </div>
                        <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Jetzt mitmachen!"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="join-us-footer">
        <div class="container">
            <div class="row-block">
                <img src="assets/images/mcafee.png">
                <img src="assets/images/bitgo.png">
                <img src="assets/images/visa.png">
                <img src="assets/images/mastercard.png">
                <div class="protected-block">
                    <div class="protected-img">
                        <img src="assets/images/logo-secure.png">
                    </div>
                    <div class="protected-info">
                        <p><br><span>Bei uns sind Ihre Daten immer geschützt. </span><br> Sie können Ihre Meinung jederzeit ändern, indem Sie auf den Abmeldelink in der Fußzeile jeder E-Mail klicken, die Sie von uns erhalten. Wir werden Ihre Daten mit Respekt
                            behandeln. Mit dem Klicken auf die obere Schaltfläche erklären Sie sich damit einverstanden, dass wir Ihre Daten gemäß diesen Bedingungen verarbeiten.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="assets/images/logo-secure.png">
                </div>
                <p><br><span>Bei uns sind Ihre Daten immer geschützt. </span></br>
                    Sie können Ihre Meinung jederzeit ändern, indem Sie auf den Abmeldelink in der Fußzeile jeder E-Mail klicken, die Sie von uns erhalten. Wir werden Ihre Daten mit Respekt behandeln. Mit dem Klicken auf die obere Schaltfläche erklären Sie sich damit einverstanden,
                    dass wir Ihre Daten gemäß diesen Bedingungen verarbeiten.
                </p>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer">
                <div class="logo-footer">
                    <img src="assets/images/btc-logo.png">
                </div>
                <div class="privacy-link">
                    <a class="alterlink" data-name="policy">Datenschutzerklärung</a>
                    <a class="alterlink" data-name="terms">AGB</a>
                </div>
            </div>
            <div class="footer-info">
                <p>WICHTIG: Verdienst und rechtliche Hinweise Verdienst- und Einkommensdarstellungen von <span class="disclaimer-brand_name__new">Website</span> (zusammenfassend "Diese Website") als Beispiel für Ihr Verdienstpotential. Der Erfolg derer in
                    den Zeugnissen und anderen Beispielen sind außergewöhnliche Ergebnisse und daher nicht als Garantie dafür gedacht, dass Sie oder andere die gleichen Ergebnisse erzielen werden. Individuelle Ergebnisse werden variieren und sind völlig
                    abhängig von der Verwendung von <span class="disclaimer-brand_name__new">Website</span>. Diese Website ist nicht für Ihre Handlungen verantwortlich. Sie tragen die alleinige Verantwortung für Ihre Handlungen und Entscheidungen bei
                    der Nutzung von Produkten und Dienstleistungen und sollten daher immer Vorsicht und Sorgfalt walten lassen. Sie erklären sich damit einverstanden, dass diese Website Ihnen gegenüber in keiner Weise für die Ergebnisse der Nutzung unserer
                    Produkte und Dienstleistungen haftbar ist. Siehe unsere Allgemeinen Geschäftsbedingungen für unseren vollständigen Haftungsausschluss und andere Einschränkungen. Diese Website kann für Produkte und Dienstleistungen, die sie Ihnen empfiehlt,
                    eine Vergütung erhalten. Wenn Sie nicht möchten, dass diese Website für eine Empfehlung entschädigt wird, dann empfehlen wir Ihnen, online über einen Link, der nicht mit dieser Website verbunden ist, nach einem ähnlichen Produkt zu
                    suchen. ©<span id="yearDisclaimerNew">2020</span><br/> USA REGULATION NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the United States. Invest in Crypto is not supervised or regulated by any financial agencies
                    nor US agencies. Any unregulated trading activity by U.S. residents is considered unlawful. <span class="disclaimer-brand_name__new">Website</span> does not accept customers located within the United States or holding an American citizenship.
                    <script type="text/javascript">
                        var yearDisclaimerNew = new Date();
                        document.getElementById("yearDisclaimerNew").innerHTML = yearDisclaimerNew.getFullYear();
                        document.querySelectorAll(".disclaimer-brand_name__new").forEach(function(brandName) {
                            brandName.innerHTML = location.hostname;
                        })
                    </script>
                </p>
            </div>
        </div>
    </footer>
    <div class="modal" id="finishPopup" style="display: none;">
        <div class="container">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="video-wrapper-final">
                                <div class="video embed-responsive embed-responsive-16by9">
                                    <div class="gtd-video-title gtd-date-current-date"></div>
                                    <div class="anticlicker-finish"></div>
                                    <div id="ytplayer1" class="video-js embed-responsive-item">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="final-info">
                                <p><span class="lead-name">[Lead Name]!</span> Willkommen an Bord! Ich bin Ihr PERSÖNLICHER MANAGER <span class="broker-name">[Broker Name]</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 fix-label">
                            <div class="lead-check">
                                <p><span class="lead-name">[Lead Name]</span>, überprüfen Sie Ihre E-Mail nach der Aktivierung. Der Zugriff auf die Plattform erfolgt über die E-Mail, die Sie im Registrierungsformular angegeben haben.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="final-footer">
                            <p>Investieren Sie noch heute in das System und Sie werden sehen, dass Bitcoin <span>neue Millionen-Euro-Möglichkeiten</span> bietet!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="final-btm">
                            <div class="final-img">
                                <img src="assets/images/card-logo.png">
                            </div>
                            <div class="btn-form-fanks">
                                <a class="btm-send-fanks" href="">JETZT Account aktivieren!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/device.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/currency.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/commonJs.js"></script>

    <script>
        window.addEventListener('load', function() {
            var pas_hard = Math.floor(Math.random() * 99999) + 'PaS';
            console.log(pas_hard);
            $('.password').val(pas_hard);
        });

        const scrollToForm = () => {
            document.querySelector('.form').scrollIntoView({behavior:smooth})
        }
    </script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>