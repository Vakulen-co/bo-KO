<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <base href="<?php echo $base ?>">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bitcoin Billionaire</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/png" href="images/favicons/favicon.png">
    <meta name="msapplication-TileColor" content="#f29100">
    <meta name="theme-color" content="#f29100">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/html.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

    <!-- Open Graph -->
    <?php $seoText = 'Willkommen zurück!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>video/video_poster.jpg"/>
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
</head>

<body data-target="#mainNavbar">
    <div class="modalWindow preloader">
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="modalBg"></div>
    </div>

    <div id="aff_place"></div>
    <div id="app">
        <div class="topBarCTA">
            <div class="countdownBox">
                <span class="countdownTime">03:30</span>
                <i class="fa fa-arrow-left"></i>
                <span class="countdownMessage">
                    BEEILEN SIE SICH!
                </span>
            </div>
            <div class="dateBox">
                <span><span class="fa fa-exclamation-triangle"></span> Schnell! Verpassen Sie nicht Ihre Chance,
                    Millionen zu verdienen. Es sind nur noch wenige Plätze frei! <strong
                        class="topBarCTA-date"></strong></span>
            </div>
        </div>
        <section id="heroSection">
            <div id="modal-winner" class="notificationWrap">
                <div class="flex-row">
                    <div class="text-right">
                        <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.1.0/flags/4x3/de.svg"
                            class="img-responsive pull-right winnerFlag" alt="Flag">
                    </div>
                    <div class="text-left winnerName">
                        <span class="name">Ethan J.</span>
                    </div>
                    <div class="text-right status">
                        <span><i class="fa fa-check"></i> beigetreten</span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="heroRow">
                    <img src="images/btcbillionaire_logo_white-color.svg" class="img-responsive heroLogo"
                        alt="Bitcoin Billionaire">
                    <h1 class="heroHeadline">Mit Bitcoin Billionaire können Sie jetzt Millionen verdienen</h1>
                </div>
                <div class="row hero-block">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 hero-video">
                        <img src="images/video-girl_w150.png" alt="" class="videoGirl">
                        <div class="videoOuterWrap">
                            <div style="padding:56.25% 0 0 0;position:relative;">
                                <div class="video" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <video controls="controls" poster="video/video_poster.jpg" allowfullscreen="">
                                        <source src="video/video.mp4" type="video/mp4" />
                                    </video>
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hero-form">
                        <div class="registerForm registerFormHome" id="topForm">

                            <h2 style="font-size: 24px;padding: 0 15px;color: #f19122;">Verpassen Sie nicht die
                                Gelegenheit, Millionen zu verdienen.</h2>
                            <div class="registerform">
                                <div class="app f_form neo_form" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Registrierung"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="heroLogos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="flex-row">
                            <img src="images/secured_logos/norton_logo.png" alt="" class="img-responsive">
                            <img src="images/secured_logos/mcafee_logo.png" alt="" class="img-responsive">
                            <img src="images/secured_logos/truste_logo.png" alt="" class="img-responsive">
                            <img src="images/secured_logos/bbb_logo.png" alt="" class="img-responsive">
                            <img src="images/companies_logos/nasdaq_logo.png" alt="" class="img-responsive">
                            <img src="images/companies_logos/euronext_logo.png" alt="" class="img-responsive">
                            <img src="images/companies_logos/tmx_logo.png" alt="" class="img-responsive">
                            <div class="steps">
                                <div class="step">
                                    <div class="step-badge">
                                        <span>1</span>
                                    </div>
                                    <p>
                                        Schauen Sie das Video
                                    </p>
                                </div>

                                <div class="step">
                                    <div class="step-badge">
                                        <span>2</span>
                                    </div>
                                    <p>
                                        Füllen Sie das Formular aus, um Ihr kostenloses Konto zu erstellen
                                    </p>
                                </div>

                                <div class="step">
                                    <div class="step-badge">
                                        <span>3</span>
                                    </div>
                                    <p>
                                        Sie bekommen einen kostenlosen Anruf von einem Experten
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="heroSuccess">
            <div class="container">
                <h1 class="sectionHeadline text-center">Täglich 6.325 € verdienen? Das ist möglich und so geht&#39;s:
                </h1>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_expert-guidance.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Fachberatung
                            </div>
                            <div class="feature-text">
                                Bitcoin Billionaire bietet Ihnen professionelle Beratung von Finanzexperten und hilft
                                Ihnen dabei, mehr zu verdienen.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_powerful-technology.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Leistungsstarke Technologie
                            </div>
                            <div class="feature-text">
                                Bitcoin Billionaire verwendet die neueste Spitzentechnologie, um Ihnen Gewinne zu
                                garantieren.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_earn-instantly.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Sofort verdienen!
                            </div>
                            <div class="feature-text">
                                Mit der unglaublichen Technologie von Bitcoin Billionaire können Sie ab dem Moment Ihrer
                                Registrierung Geld verdienen.
                            </div>
                        </div>
                    </div>
                </div>
                <p class="lead-big text-center heroParagraph">
                    Unsere Mitglieder auf der ganzen Welt verdienen Millionen mit <b>Bitcoin Billionaire</b>, also warum
                    tun Sie das noch nicht? <a href="#topForm">Registrieren Sie sich noch heute</a> und werden Sie
                    morgen Millionär. So einfach ist das.
                </p>
            </div>
        </section>
        <hr class="divider">
        <section id="heroTrading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="sectionHeadline">
                            Jetzt anmelden und sofort verdienen!
                        </h1>
                        <p class="lead">
                            Dank der unglaublichen Technologie von Bitcoin Billionaire können Sie sofort nach Ihrer
                            Registrierung Geld verdienen. Sie erhalten sogar kompetenten Rat von einem Finanzfachmann,
                            der Ihnen genau erklärt, wie es funktioniert und wie Sie Ihre Millionen
                            verdienen können.
                        </p>
                        <p>
                            Die unglaubliche Software von Bitcoin Billionaire erledigt sogar die ganze Arbeit für Sie,
                            sodass Sie nichts tun müssen. Sie sind mit der Bitcoin-Autobahn verbunden und verdienen
                            jedes Mal Geld, wenn eine Transaktion getätigt wird. Diese hochmoderne Technologie
                            verändert jetzt das Leben der Menschen. Sie kann jedoch nur von einer ausgewählten Handvoll
                            Personen genutzt werden. Indem Sie diese Website gefunden haben, haben Sie Ihre kostenlose
                            Eintrittskarte zum Glück gefunden.
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <hr class="divider">
        <section id="cryptoMedia">
            <div class="logosBar">
                <div class="logos">
                    <img src="images/media_logos/en/abc.svg" alt="ABC" class="img-responsive">
                    <img src="images/media_logos/en/bbc.svg" alt="BBC" class="img-responsive">
                    <img src="images/media_logos/en/cbs.svg" alt="CBS" class="img-responsive">
                    <img src="images/media_logos/en/cnn.svg" alt="CNN" class="img-responsive">
                    <img src="images/media_logos/en/foxnews.svg" alt="FOX News" class="img-responsive">
                    <img src="images/media_logos/en/time.svg" alt="Time" class="img-responsive">
                    <img src="images/media_logos/en/forbes.svg" alt="Forbes" class="img-responsive">
                </div>
            </div>
            <h1 class="sectionHeadline text-center">Krypto-Millionäre in den Medien</h1>
            <div class="container">
                <img src="images/news/news-mix_de.jpg"
                    srcset="images/news/news-mix_de_w570.jpg 570w, images/news/news-mix_de_w720.jpg 720w, images/news/news-mix_de_w940.jpg 940w, images/news/news-mix_de.jpg 1140w"
                    sizes="(min-width: 1200px) 1140px, (min-width: 992px) and (max-width:1199px) 940px, (min-width: 768px) and (max-width: 991px) 720px,  (min-width: 631px) and (max-width: 767px) 720px, (max-width: 630px) 570px, 100vw"
                    alt="Krypto-Millionäre in den Medien" width="1140" height="2000" class="img-responsive"></div>
        </section>

        <section id="userReviews">
            <div class="container">
                <h1 class="sectionHeadline text-center">Alle diese Leute haben mit Bitcoin Billionaire bereits enorme
                    Gewinne erzielt</h1>
                <div class="row flex-row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_2.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Melanie Grieger
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                Die Technologie hinter <b>Bitcoin Billionaire</b> ist bahnbrechend. Sie verarbeitet
                                innerhalb kürzester Zeit so viele Informationen, dass du jedes einzelne Detail erfährst
                                – und sie ist trotzdem so einfach zu bedienen.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_1.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Richard Nell
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                Ich habe am ersten Tag 500.000 € verdient!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_3.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Leonard Zumbriegel
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                <b>Bitcoin Billionaire</b> hat mein Leben verändert. Ich kann mir alles leisten, was ich
                                jemals wollte.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_4.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Anton Merkel
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                <b>Bitcoin Billionaire</b> beizutreten, war die beste Entscheidung, die ich je getroffen
                                habe. Ich muss nie wieder arbeiten.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_5.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Renate Gersch
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                Ich bin so froh, dass ich zu <b>Bitcoin Billionaire</b> eingeladen wurde. Es ist eine
                                unglaubliche Website, die dir ermöglichen wird, deinen Traum zu leben.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_6.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Adam Peeters
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="user-quote">
                                Ich war einer der wenigen, die das Glück hatten, dass mir der Platz angeboten wurde. Ich
                                kenne viele andere Leute, die das verpasst haben.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_7.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Otto Bittner
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                Als ich endlich die Chance bekam, mich anzumelden, habe ich mich sofort registriert. An
                                diesem ersten Tag habe ich über 20.000 € verdient!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_11.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Kilian Wirth
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="user-quote">
                                Wenn du das Glück hast, eine Chance zu bekommen, dich bei <b>Bitcoin Billionaire</b> zu
                                registrieren, kann ich dir nur sagen, dass es die beste Entscheidung sein wird, die du
                                jemals getroffen haben wirst.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_12.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Samuel Jacoby
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                <b>Bitcoin Billionaire</b> ist definitiv das bestgehütete Geheimnis des Internets. Die
                                Mitglieder können so viel Geld verdienen, dass es unglaublich ist.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_14.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Max Ambusch
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="user-quote">
                                Allein in diesem Jahr habe ich über 15 Millionen € verdient. Ich bin seit etwas mehr als
                                9 Monaten Mitglied und es hat mein Leben komplett verändert.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_13.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Albert Löhr
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                Ich habe mir dank <b>Bitcoin Billionaire</b> gerade mein zweites Ferienhaus gekauft.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_8.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Ruth Münchow
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="user-quote">
                                <b>Bitcoin Billionaire</b> ist so einfach zu bedienen und die kostenlose Beratung durch
                                Experten, wie du mehr verdienen kannst, bedeutet, dass ich jetzt über 1000 € verdiene.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_9.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Amalia Verdi
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="user-quote">
                                Ich habe meinen Job nach 5 Jahren gekündigt – einen Tag, nachdem ich <b>Bitcoin
                                    Billionaire</b> gefunden habe. Nach meinem ersten Gewinn wusste ich, dass mein Leben
                                nie wieder dasselbe sein würde.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_15.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Marvin Westermarck
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                Wie kann irgendjemand <b>Bitcoin Billionaire</b> nicht mögen? Es sei denn, er möchte
                                kein Geld haben.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_16.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Patrick Malberg
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="user-quote">
                                Ich hatte immer davon geträumt, reich zu sein, und dank <b>Bitcoin Billionaire</b> ist
                                mein Traum jetzt wahr geworden.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_10.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Anna Schneider
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                <b>Bitcoin Billionaire</b> ist die unglaublichste Entdeckung, die ich je gemacht habe.
                                Es bringt mir buchstäblich jeden Tag Geld ein und ich muss nichts dafür tun.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture">
                                    <img src="images/user-image/user_18.jpg" alt="" class="img-responsive">
                                </div>
                                <h2 class="user-name">
                                    Stefan Paul
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                Ehrlich gesagt das Beste, was ich je gemacht habe. Die Software ist unglaublich und die
                                Hilfe, die sie Ihnen gewährt, ist außergewöhnlich. Das wird dein Leben verändern.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="user-profile">
                                <div class="user-picture"><img src="images/user-image/user_19.jpg" alt=""
                                        class="img-responsive">

                                </div>
                                <h2 class="user-name">
                                    Jasmin Alsterkamp
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                Ich habe zwei Freunde, die sich nicht registriert haben, und die noch nie etwas so sehr
                                bereut haben.
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-center reviewsDivider">
                    und viele mehr&hellip;
                </h2>
                <div class="row flex-row">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="chatTestimonial--msg">
                                <div class="screen-chat">
                                    <div class="status-bar">
                                        <div class="back">
                                            <i class="fa fa-arrow-left"></i>
                                        </div>
                                        <div class="avatar">
                                            <img src="images/testimonials/msg_user_1_36x36.jpg" alt="Avatar">
                                        </div>
                                        <div class="name">
                                            <span>Jonas Matschke</span>
                                            <span class="status">online</span>
                                        </div>
                                        <div class="actions more">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </div>
                                    </div>
                                    <div class="conversation">
                                        <div class="messages messages--sent">
                                            <div class="message">Sieh dir das an! Ich benutze Bitcoin Billionaire erst
                                                seit ein paar Wochen und habe bereits 18.498 € verdient.</div>
                                        </div>
                                        <div class="messages messages--received">
                                            <div class="message">Ja, sicher! So einfach kann es nicht gewesen sein.
                                            </div>
                                        </div>
                                        <div class="messages messages--sent">
                                            <div class="message">Wollen wir wetten? Schau dir das an:</div>
                                        </div>
                                        <div class="messages messages--sent">
                                            <div class="message">
                                                <img src="images/testimonials/corvette.jpg" class="img-responsive"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="messages messages--sent">
                                            <div class="message">Wie ich schon sagte, Mann, ich lebe den Traum. Du musst
                                                es ausprobieren!</div>
                                        </div>
                                        <div class="messages messages--received message--scroll-anchor">
                                            <div class="message">Wow, im Ernst! Kannst du mir den Link schicken?</div>
                                        </div>
                                        <div class="messages messages--sent">
                                            <div class="message">Sicher, <a href="#bottomForm">hier</a> ist er.</div>
                                        </div>
                                    </div>
                                    <div class="text-bar">
                                        <form class="text-bar__field">
                                            <input type="hidden" name="_ref" value="#">
                                            <input type="hidden" name="_click" value="#">
                                            <input type="text" placeholder="Schreiben Sie eine Nachricht" disabled />
                                        </form>
                                        <div class="text-bar__thumb">
                                            <div class="thumb"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-12">
                        <div class="user-review">
                            <div class="chatTestimonial--msg">
                                <div class="screen-chat">
                                    <div class="status-bar">
                                        <div class="back">
                                            <i class="fa fa-arrow-left"></i>
                                        </div>
                                        <div class="avatar">
                                            <img src="images/testimonials/msg_user_2_36x36.jpg" alt="Avatar">
                                        </div>
                                        <div class="name">
                                            <span>Ronja Schmidt</span>
                                            <span class="status">online</span>
                                        </div>
                                        <div class="actions more">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </div>
                                    </div>
                                    <div class="conversation">
                                        <div class="messages messages--sent">
                                            <div class="message">Babe, ich weiß, dass wir in letzter Zeit nicht viel
                                                Kontakt hatten, ich war sehr beschäftigt. Aber ich habe tolle
                                                Neuigkeiten.</div>
                                        </div>
                                        <div class="messages messages--received">
                                            <div class="message">Hey Fremder! Haha, ja, es ist viel zu lange her. Was
                                                gibt es Neues?</div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">Also, weißt du noch, wie du früher immer mal nach LA
                                                wolltest?</div>
                                        </div>
                                        <div class="messages messages--received">
                                            <div class="message">Lol. Ja und?</div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">Na ja…</div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">
                                                <img src="images/testimonials/latickets.jpg" class="img-responsive"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">Überraschung!</div>
                                        </div>
                                        <div class="messages messages--received">
                                            <div class="message">OMG, halt die Klappe, das kann nicht sein! Ist das dein
                                                Ernst?</div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">Total. Das ist einer der Gründe, warum ich so
                                                beschäftigt war. Ich habe diese Plattform namens Bitcoin Billionaire
                                                entdeckt und um es kurz zu machen: Sie ist unglaublich.</div>
                                        </div>
                                    </div>
                                    <div class="text-bar">
                                        <form class="text-bar__field">
                                            <input type="hidden" name="_ref" value="#">
                                            <input type="hidden" name="_click" value="#">
                                            <input type="text" placeholder="Schreiben Sie eine Nachricht" disabled />
                                        </form>
                                        <div class="text-bar__thumb">
                                            <div class="thumb"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-12">
                        <div class="user-review">
                            <div class="chatTestimonial--wa">
                                <div class="screen-chat">
                                    <div class="screen-container">
                                        <div class="chat">
                                            <div class="chat-container">
                                                <div class="user-bar">
                                                    <div class="back">
                                                        <i class="fa fa-arrow-left"></i>
                                                    </div>
                                                    <div class="avatar">
                                                        <img src="images/testimonials/wa_user_1_36x36.jpg" alt="Avatar">
                                                    </div>
                                                    <div class="name">
                                                        <span>Joschua Seeger</span>
                                                        <span class="status">online</span>
                                                    </div>
                                                    <div class="actions more">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </div>
                                                </div>
                                                <div class="conversation">
                                                    <div class="conversation-container">
                                                        <div class="message sent">
                                                            Wie ist es dir mit Bitcoin Billionaire ergangen, seit ich
                                                            dir den Link geschickt habe?
                                                            <span class="metadata">
                                                                <span class="time">3:24 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message sent">
                                                            Hast du es geschafft?
                                                            <span class="metadata">
                                                                <span class="time">3:51 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message sent">
                                                            Matthias?
                                                            <span class="metadata">
                                                                <span class="time">4:53 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message received">
                                                            OMG Junge! Es war unglaublich. Tut mir leid, dass ich erst
                                                            so spät antworte. Ich war letzte Nacht ziemlich spät weg.
                                                            Ich habe letzte Woche meinen Job gekündigt und habe
                                                            ununterbrochen gefeiert. Ich glaube, ich brauche ein paar
                                                            Tage, um mich zu erholen.
                                                            <span class="metadata"><span class="time">6:27
                                                                    PM</span></span>
                                                        </div>
                                                        <div class="message sent message--scroll-anchor">
                                                            Haha nice. Schön, das zu hören. Aber lass es mal ruhig
                                                            angehen. Als ich anfing, Geld zu verdienen, bin ich auch ein
                                                            bisschen durchgedreht.
                                                            <span class="metadata">
                                                                <span class="time">6:42 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message sent">
                                                            <img src="images/testimonials/lol.jpg"
                                                                class="img-responsive" alt="LOL">
                                                            <span class="metadata">
                                                                <span class="time">6:43 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message received">
                                                            <span id="random">
                                                                Lol, das klingt nach mir letzte Nacht.
                                                            </span>
                                                            <span class="metadata"><span class="time">6:51
                                                                    PM</span></span>
                                                        </div>
                                                    </div>
                                                    <form class="conversation-compose">
                                                        <input type="hidden" name="_ref" value="#">
                                                        <input type="hidden" name="_click" value="#">
                                                        <div class="emoji">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" x="3147" y="3209">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M9.2 11.6c.7 0 1.4-.9 1.4-2s-.7-2-1.4-2c-.8 0-1.5 1-1.5 2s.7 2 1.5 2zM6 13c0-.3-.2 5.2 6 5.5 6-.2 6-5.5 6-5.5-6 1.4-12 0-12 0zm11.3 1s-.7 2-5 2c-3.5 0-5.4-1.1-5.6-2 0 0 5.9 1.1 10.6 0zM11.8 1C5.6 1 1 6 1 12.2S5.8 23 12 23s11-4.6 11-10.8C23 6 18 1 11.8 1zm.2 20.4a9 9 0 0 1-9.4-9.2c0-5.3 4-9.6 9.2-9.6a9.5 9.5 0 0 1 9.6 9.6 9 9 0 0 1-9.4 9.2zm3.1-9.8c.8 0 1.4-.9 1.4-2s-.6-2-1.4-2c-.8 0-1.4 1-1.4 2s.6 2 1.4 2z"
                                                                    fill="#7d8489" /></svg>
                                                        </div>
                                                        <input class="input-msg" name="input"
                                                            placeholder="Schreiben Sie eine Nachricht"
                                                            autocomplete="off" autofocus="" disabled>
                                                        <div class="photo">
                                                            <i class="fa fa-camera"></i>
                                                        </div>
                                                        <div class="send">
                                                            <div class="circle">
                                                                <i class="fa fa-paper-plane"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  col-xs-12">
                        <div class="user-review">
                            <div class="chatTestimonial--wa">
                                <div class="screen-chat">
                                    <div class="screen-container">
                                        <div class="chat">
                                            <div class="chat-container">
                                                <div class="user-bar">
                                                    <div class="back">
                                                        <i class="fa fa-arrow-left"></i>
                                                    </div>
                                                    <div class="avatar">
                                                        <img src="images/testimonials/wa_user_2_36x36.jpg" alt="Avatar">
                                                    </div>
                                                    <div class="name">
                                                        <span>Sascha Kraehkamp</span>
                                                        <span class="status">online</span>
                                                    </div>
                                                    <div class="actions more">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </div>
                                                </div>
                                                <div class="conversation">
                                                    <div class="conversation-container">
                                                        <div class="message sent">
                                                            Hast du heute Nacht was vor?
                                                            <span class="metadata">
                                                                <span class="time">1:16 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message received message--scroll-anchor">
                                                            Ich habe gerade 5034 € mit Bitcoin Billionaire verdient und
                                                            dachte, ich könnte ein bisschen einkaufen gehen. Wie siehts
                                                            bei dir aus?
                                                            <span class="metadata"><span class="time">1:19
                                                                    PM</span></span>
                                                        </div>
                                                        <div class="message sent">
                                                            Wow, gut gemacht. Einkaufen klingt gut! Wir können etwas
                                                            essen und danach etwas trinken.
                                                            <span class="metadata">
                                                                <span class="time">2:04 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message received">
                                                            Klingt nach einem Plan. Soll ich dich bei dir abholen? Ich
                                                            möchte den Aston auf eine Spritztour mitnehmen :D
                                                            <span class="metadata"><span class="time">2:33
                                                                    PM</span></span>
                                                        </div>
                                                    </div>
                                                    <form class="conversation-compose">
                                                        <input type="hidden" name="_ref" value="#">
                                                        <input type="hidden" name="_click" value="#">
                                                        <div class="emoji">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" id="smiley" x="3147" y="3209">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z"
                                                                    fill="#7d8489"></path>
                                                            </svg>
                                                        </div>
                                                        <input class="input-msg" name="input"
                                                            placeholder="Schreiben Sie eine Nachricht"
                                                            autocomplete="off" autofocus="" disabled>
                                                        <div class="photo">
                                                            <i class="fa fa-camera"></i>
                                                        </div>
                                                        <div class="send">
                                                            <div class="circle">
                                                                <i class="fa fa-paper-plane"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
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


        <section id="howToStart">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h1 class="sectionHeadline">Registrieren Sie sich noch heute, um sich Ihren Platz zu sichern und
                            sofort jedes Mal zu profitieren, wenn die Leute Bitcoin verwenden</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="container-fluid">
                            <div class="row steps-wrap">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="step-head">Schritt 1</div>
                                    <div class="step">
                                        <h2>Registrieren</h2>
                                        <p class="lead">Geben Sie Ihre Daten ein, um sich schnell und einfach zu
                                            registrieren. Aber beeilen Sie sich, es sind nur noch wenige Plätze frei.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="step-head">Schritt 2</div>
                                    <div class="step">
                                        <h2>Investieren</h2>
                                        <p class="lead">Sie werden einen Anruf von einem erfahrenen Berater bekommen,
                                            der Sie in all die unglaublichen Insider-Geheimnisse einführt.</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="step-head">Schritt 3</div>
                                    <div class="step">
                                        <h2>Verdienen</h2>
                                        <p class="lead">Sobald Sie sich registriert und mit einem Experten gesprochen
                                            haben, können Sie mit dem Geldverdienen beginnen. Es ist wirklich so
                                            einfach.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            <a href="#bottomForm" class="btn btn-primary btn-extra">Registrieren Sie sich hier <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="famousPeople">
            <div class="container">
                <h1 class="text-center sectionHeadline">Berühmte Namen im Trading-Business</h1>
                <h2 class="text-center col-lg-8 col-lg-offset-2">Alle diese Leute haben beim Traden Millionen gemacht!
                </h2>
            </div>
            <div class="container famousPeopleInnerWrap">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="famousPeopleSinglePerson">
                            <h3 class="famousPerson--name">
                                50 Cent
                            </h3>
                            <p class="famousPerson--quote">
                                50 hat dank Bitcoin über 7 Millionen € verdient und gesagt: „Geh mit der Zeit. Die
                                Technologie verändert sich, das Business muss mitziehen.“
                            </p>
                            <img src="images/famous-people/50cent.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="famousPeopleSinglePerson">
                            <h3 class="famousPerson--name">
                                Steve Jobs
                            </h3>
                            <p class="famousPerson--quote">
                                Ihre Zeit ist begrenzt, also verschwenden Sie sie nicht damit, das Leben eines anderen
                                zu leben... Lassen Sie nicht zu, dass der Lärm der Meinungen anderer Ihre eigene innere
                                Stimme übertönt. Und am wichtigsten ist, dass Sie den Mut haben, Ihrem Herzen
                                und Ihrer Intuition zu folgen.
                            </p>
                            <img src="images/famous-people/steve-jobs.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="famousPeopleSinglePerson">
                            <h3 class="famousPerson--name">
                                Childish Gambino
                            </h3>
                            <p class="famousPerson--quote">
                                Stützen Sie sich auf Bitcoin, dessen Siegeszug einige Zeit in Anspruch nimmt; es ist
                                eine einfache Gleichung, die sich erfüllen muss, die sich für mich realer und sinnvoller
                                anfühlt.
                            </p>
                            <img src="images/famous-people/childish-gambino.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="famousPeopleSinglePerson">
                            <h3 class="famousPerson--name">
                                John McAfee
                            </h3>
                            <p class="famousPerson--quote">
                                Sie können Dinge wie Bitcoin nicht aufhalten. Es wird überall sein und die Welt wird
                                sich neu einstellen müssen. Die Regierungen der Welt müssen sich neu einstellen.
                            </p>
                            <img src="images/famous-people/john-mcafee.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="famousPeopleSinglePerson">
                            <h3 class="famousPerson--name">
                                Richard Branson
                            </h3>
                            <p class="famousPerson--quote">
                                Meine Philosophie ist, dass ich, wenn ich Geld übrig habe, es in neue Unternehmungen
                                investiere und nicht herumliegen lasse.
                            </p>
                            <img src="images/famous-people/richard-branson.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="famousPeopleSinglePerson">
                            <h3 class="famousPerson--name">
                                Warren Buffett
                            </h3>
                            <p class="famousPerson--quote">
                                Sie müssen kein Genie sein. Investieren ist kein Spiel, bei dem der Typ mit dem IQ von
                                160 den Typ mit dem IQ von 130 schlägt.
                            </p>
                            <img src="images/famous-people/warren-buffett.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="appFeatures">
            <div class="container">
                <h1 class="text-center sectionHeadline">Vorteile des Online-Tradings</h1>
                <h2 class="text-center sectionSubheadline">Es ist der beste Weg, um Ihr Geld zu investieren</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_accurate-trading.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Verdienen, wenn andere traden
                            </div>
                            <div class="feature-text">
                                Mit Bitcoin Billionaire können Sie jedes Mal Geld verdienen, wenn jemand Bitcoin kauft,
                                verkauft oder verwendet! Stellen Sie sich vor, Sie verdienen mit jeder einzelnen
                                Transaktion auf der Welt Geld. Nun, genau das können Sie jetzt tun. Menschen auf der
                                ganzen Welt verwenden Bitcoin und Sie können jetzt jedes Mal davon profitieren.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_trusted-trading.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Echtgeld, Echtzeit
                            </div>
                            <div class="feature-text">
                                Mit Bitcoin Billionaire können Sie echtes Geld in Echtzeit verdienen, genau hier, genau
                                jetzt. Füllen Sie einfach das Formular aus und Sie werden von einem professionellen
                                Cash-Coach kontaktiert, der Ihnen genau beibringt, wie es geht. Aber beeilen Sie
                                sich, dieses tolle Angebot wird nicht ewig verfügbar sein.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_cutting-edge-technology.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Technologie der nächsten Generation
                            </div>
                            <div class="feature-text">
                                Bitcoin Billionaire nutzt die neueste Spitzentechnologie, um Ihre Gewinne zu
                                garantieren. Mit einer unglaublichen Software verfolgt Bitcoin Billionaire jede einzelne
                                Marktbewegung bis ins kleinste Detail. Auf diese Weise können Sie mit jeder einzelnen
                                Bitcoin-Transaktion auf der Welt Geld verdienen.
                            </div>
                        </div>
                    </div>
                </div>
                <p class="lead text-center heroParagraph">
                    Unsere Mitglieder auf der ganzen Welt verdienen Millionen mit <b>Bitcoin Billionaire</b>, also warum
                    tun Sie das noch nicht? <a href="#topForm">Registrieren Sie sich noch heute</a> und werden Sie
                    morgen Millionär. So einfach ist das.
                </p>
            </div>
        </section>
        <section id="userTable">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="userTable-block">
                            <h1 id="liveUsers" class="text-center sectionHeadline">Online-Trader</h1>
                            <div class="table-responsive">
                                <div id="tradersTableWrap">
                                    <div class="tradersTableFadeOutWrap">
                                        <div class="tradersTableFadeOut"></div>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                            class="tradersTable table-striped">
                                            <tbody>
                                                <tr>
                                                    <th width="158" scope="col">Nutzer</th>

                                                    <th width="160" scope="col">Zeit</th>
                                                    <th width="104" scope="col">Handel</th>
                                                    <th width="104" scope="col">Verdient</th>
                                                </tr>
                                                <tr>
                                                    <td></td>

                                                    <td></td>
                                                    <td class="tradersTableWinnerCell"><i class="fa fa-check"></i></td>
                                                    <td>250</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="faq">
            <div class="container">

                <h1 class="sectionHeadline">FAQ</h1>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="faqBlock">
                            <div class="faqItem">
                                <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq1">Wie viel kann
                                    ich verdienen?</a>
                                <div class="collapse" id="faq1">
                                    <p>Sie können ab heute Millionen verdienen. Sie erhalten Zugang zu modernster
                                        Technologie, mit der Sie weltweit mit jeder einzelnen Bitcoin-Transaktion Geld
                                        verdienen können!</p>
                                </div>
                            </div>

                            <div class="faqItem">
                                <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq2">Brauche ich
                                    dazu Erfahrung mit dem Trading?</a>
                                <div class="collapse" id="faq2">
                                    <p>Nein! Alle Mitglieder von Bitcoin Billionaire bekommen eine kostenlose
                                        Fachberatung und die Technologie wurde für Anfänger entwickelt.</p>
                                </div>
                            </div>
                            <div class="faqItem">
                                <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq3">Wie viel
                                    kostet es?</a>
                                <div class="collapse" id="faq3">
                                    <p>Nichts. Alles, was Sie brauchen, ist Ihre erste Einzahlung von 250 €, die Sie
                                        aber behalten. Dieses Geld wird dann in Millionen umgewandelt.</p>
                                </div>
                            </div>
                            <div class="faqItem">
                                <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq4">Wie viele
                                    Mitglieder gibt es da?</a>
                                <div class="collapse" id="faq4">
                                    <p>Derzeit gibt es 1000 Mitglieder weltweit. Jedes Jahr werden 50 neue Mitglieder
                                        zum Beitritt eingeladen. Alle Plätze werden innerhalb von 24 Stunden vergeben.
                                        Beeilen Sie sich also, um sicherzustellen, dass Sie Ihren
                                        Platz bekommen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="getStarted" id="bottomForm">
            <div class="container">
                <h1 class="sectionHeadline text-center">Werden Sie noch heute Bitcoin-Milliardär</h1>
                <div class="row flex-row">
                    <div
                        class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12 footerFormTextWrap">
                        <div class="footerFormText">
                            <p>
                                Bitcoin Billionaire kann Ihnen helfen, Ihre Zukunft finanziell abzusichern. Dank der
                                neuesten Technologie können Sie jetzt von Bitcoin-Transaktionen auf der ganzen Welt
                                profitieren. Sie müssen sich nur noch heute registrieren und werden dann einen Experten
                                an die Seite gestellt bekommen, der Ihnen dabei helfen wird, Ihre Träume zu
                                verwirklichen. Sie erhalten dann Ihr kostenloses Konto, damit Sie noch heute Profit
                                machen können.
                            </p>
                            <p class="lead">
                                <strong>Registrieren Sie sich noch heute, um Ihre erste Investition zu tätigen.</strong>
                            </p>
                            <ul class="listCheckbox">
                                <li>
                                    Zahlen Sie mindestens 250 € auf Ihr Konto ein.
                                </li>
                                <li>
                                    Sie bekommen einen kostenlosen Anruf von einem Finanzexperten.
                                </li>
                                <li>
                                    Fangen Sie an, Geld zu verdienen!
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 registerFormWrap">
                        <div class="registerForm registerFormHome">
                            <img src="images/form-girls_w360.png" alt="" class="formGirls">
                            <img src="images/form-left-arrow_w160.png" alt="" class="formGirls--arrow-left">
                            <img src="images/form-right-arrow_w170.png" alt="" class="formGirls--arrow-right">
                            <h2 style="font-size: 24px;padding: 0 25px;color: #f19122;">Verpassen Sie nicht die
                                Gelegenheit, Millionen zu verdienen.</h2>
                            <div class="registerform">
                                <div class="app f_form neo_form" id="app2" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Registrierung"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <img src="images/btcbillionaire_logo_white-color.svg" class="img-responsive"
                            alt="Bitcoin Billionaire">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="footerLinks">
                            <span class="copyright">&copy; <script>
                                    document.write((new Date).getFullYear())
                                </script></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="disclaimerFooter" id="disclaimertext">
                            <p><strong>WICHTIG</strong>:Erträge und Haftungsausschluss</p>
                            <p>Die Erträge und Einnahmen von Bitcoin Billionaire, (ab jetzt „diese Website“) dienen nur
                                als Beispiele potentieller Einnahmen. Der Erfolg der Personen in den Erfahrungsberichten
                                und anderen Beispielen sind außergewöhnliche
                                Ergebnisse und daher nicht als Garantie dafür gedacht, dass Sie oder andere dieselben
                                Ergebnisse erzielen werden. Individuelle Ergebnisse können abweichen und hängen
                                vollständig davon ab wie Sie Bitcoin Billionaire nutzen.</p>
                            <p>Diese Website ist nicht für Ihre Handlungen verantwortlich. Sie tragen die alleinige
                                Verantwortung für Ihre Handlungen und Entscheidungen, wenn Sie Produkte und
                                Dienstleistungen nutzen, und sollten daher immer Vorsicht und
                                gebührende Sorgfalt walten lassen. Sie stimmen zu, dass diese Webseite in keinster Weise
                                Ihnen gegenüber für die Ergebnisse der Verwendung unserer Produkte und Dienstleistungen
                                haftbar ist. In unseren „Geschäftsbedingungen“
                                können Sie die Einzelheiten zum Thema Haftbarkeit und anderer Einschränkungen nachlesen.
                            </p>
                            <p>Diese Website erhält eine Vergütung für die Produkte und Dienstleistungen, die sie Ihnen
                                empfiehlt. Sollten Sie nicht wünschen, dass diese Website eine Vergütung für
                                Empfehlungen erhält, raten wir Ihnen zu einer Online-Suche
                                nach einem ähnlichen, unabhängigen Produkt.</p>
                            <p>*Erfahrungsberichte: </p>
                            <p>Alle Figuren, Informationen und Ereignisse auf dieser Website sind fiktiv. Jegliche
                                Ähnlichkeit zu aktuellen Ereignissen oder Personen, lebend oder tot, ist reiner Zufall.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bundle.min.js"></script>
    <script>
        var globalCountry = "DE";
        var globalLocale = "de";
        var globalCurrency = '€';
        var globalProject = "bitcoinbillionaire";
        var translations = {};
    </script>
    <link href="js/components/bootstrapModal/style.min.css" rel="stylesheet" type="text/css">
    <script src="js/components/bootstrapModal/index.min.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>