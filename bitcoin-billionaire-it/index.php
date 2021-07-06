<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="it">

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
    <?php $seoText = 'Ben tornato!'; ?>
    <meta name="description" content="<? echo $seoText; ?>" />
    <meta name="keywords" content="<? echo $seoText; ?>" />
    <meta property="og:title" content="<? echo $seoText; ?>" />
    <meta property="og:description" content="<? echo $seoText; ?>" />
    <meta property="og:image" content="<? echo $base; ?>video/video_poster.jpg" />
    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="450" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $base; ?>" />
    <link rel="canonical" href="<?php echo $base; ?>" />
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
                    PRESTO!
                </span>
            </div>
            <div class="dateBox">
                <span><span class="fa fa-exclamation-triangle"></span> Presto! Non perdere la tua occasione di fare milioni. Ora sono rimasti solo pochi posti! <strong class="topBarCTA-date"></strong></span>
            </div>
        </div>
        <section id="heroSection">
            <div id="modal-winner" class="notificationWrap">
                <div class="flex-row">
                    <div class="text-right">
                        <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.1.0/flags/4x3/it.svg" class="img-responsive pull-right winnerFlag" alt="Flag">
                    </div>
                    <div class="text-left winnerName">
                        <span class="name">Ethan J.</span>
                    </div>
                    <div class="text-right status">
                        <span><i class="fa fa-check"></i> iscritto</span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="heroRow">
                    <img src="images/btcbillionaire_logo_white-color.svg" class="img-responsive heroLogo" alt="Bitcoin Billionaire">
                    <h1 class="heroHeadline">Puoi guadagnare milioni adesso con Bitcoin Billionaire</h1>
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
                                        Guarda il video
                                    </p>
                                </div>

                                <div class="step">
                                    <div class="step-badge">
                                        <span>2</span>
                                    </div>
                                    <p>
                                        Riempa la forma per generare il vostro cliente libero
                                    </p>
                                </div>

                                <div class="step">
                                    <div class="step-badge">
                                        <span>3</span>
                                    </div>
                                    <p>
                                        Ricevi gratuitamente la telefonata di un esperto
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
                <h1 class="sectionHeadline text-center">Guadagnare € 6.325 al giorno? È possibile ed ecco come:
                </h1>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_expert-guidance.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Consigli degli esperti
                            </div>
                            <div class="feature-text">
                                Bitcoin Billionaire ti fornirà la consulenza professionale di esperti finanziari, aiutandoti a guadagnare di più.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_powerful-technology.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Tecnologia potente
                            </div>
                            <div class="feature-text">
                                Bitcoin Billionaire utilizza le tecnologie più avanzate per garantire i tuoi profitti.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_earn-instantly.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Guadagna all'istante!
                            </div>
                            <div class="feature-text">
                                Con l'incredibile tecnologia Bitcoin Billionaire, puoi iniziare a guadagnare dal momento in cui ti registri.
                            </div>
                        </div>
                    </div>
                </div>
                <p class="lead-big text-center heroParagraph">
                    I nostri membri in tutto il mondo stanno guadagnando milioni con <b>Bitcoin Billionaire</b>, quindi perché non non lo fai anche tu? <a href="#topForm">Iscriviti oggi</a> e diventa un milionario entro domani. Nulla di più semplice.
                </p>
            </div>
        </section>
        <hr class="divider">
        <section id="heroTrading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="sectionHeadline">
                            Iscriviti ora e inizia a guadagnare istantaneamente!
                        </h1>
                        <p class="lead">
                            Con l'incredibile tecnologia Bitcoin Billionaire, puoi iniziare a guadagnare dal momento in cui ti registri. Avrai anche la consulenza di un esperto finanziario che ti dirà esattamente come funziona e come puoi guadagnare milioni.
                        </p>
                        <p>
                            L'incredibile software di [[Bitcoin Billionaire farà anche tutto il lavoro al posto tuo. Sarai collegato alla superstrada dei Bitcoin e guadagnerai denaro ogni volta che qualcuno fa una transazione. Questa tecnologia all'avanguardia sta cambiando la vita delle persone. Tuttavia, solo un selezionato gruppo di persone potrà usarla. Trovando questo sito hai trovato il tuo biglietto gratuito per la fortuna.
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
            <h1 class="sectionHeadline text-center">Crypto Millionaires nei Media</h1>
            <div class="container">
                <img src="images/news/news-mix_it.jpg" srcset="images/news/news-mix_it_w570.jpg 570w, images/news/news-mix_it_w720.jpg 720w, images/news/news-mix_it_w940.jpg 940w, images/news/news-mix_it.jpg 1140w" sizes="(min-width: 1200px) 1140px, (min-width: 992px) and (max-width:1199px) 940px, (min-width: 768px) and (max-width: 991px) 720px,  (min-width: 631px) and (max-width: 767px) 720px, (max-width: 630px) 570px, 100vw" alt="Krypto-Millionäre in den Medien" width="1140" height="2000" class="img-responsive">
            </div>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
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
                                <div class="user-picture"><img src="images/user-image/user_19.jpg" alt="" class="img-responsive">

                                </div>
                                <h2 class="user-name">
                                    Jasmin Alsterkamp
                                </h2>
                            </div>
                            <div class="user-rating">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="user-quote">
                                Ich habe zwei Freunde, die sich nicht registriert haben, und die noch nie etwas so sehr
                                bereut haben.
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-center reviewsDivider">
                    E molti altri…
                </h2>
                <div class="row flex-row">

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="user-review">
                            <div class="chatTestimonial--msg">
                                <div class="screen-chat">
                                    <div class="status-bar">
                                        <div class="back">
                                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        </div>
                                        <div class="avatar">
                                            <img src="images/testimonials/msg_user_1_36x36.jpg" alt="Avatar">
                                        </div>
                                        <div class="name">
                                            <span>Gioele De Chino</span>
                                            <span class="status">online</span>
                                        </div>
                                        <div class="actions more">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="conversation">
                                        <div class="messages messages--sent">
                                            <div class="message">Guarda qui! Ho usato Bitcoin Billionaire per poche settimane e ho già guadagnato € 18.498.</div>
                                        </div>
                                        <div class="messages messages--received">
                                            <div class="message">Proprio così! Non può essere stato così facile.</div>
                                        </div>
                                        <div class="messages messages--sent">
                                            <div class="message">Vuoi scommettere? Guarda qui:</div>
                                        </div>
                                        <div class="messages messages--sent">
                                            <div class="message">
                                                <img src="images/testimonials/corvette.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        <div class="messages messages--sent">
                                            <div class="message">Come ho detto, amico, sto vivendo il sogno. Devi provarlo!</div>
                                        </div>
                                        <div class="messages messages--received message--scroll-anchor">
                                            <div class="message">Wow, sul serio! Puoi inviarmi il link?</div>
                                        </div>
                                        <div class="messages messages--sent">
                                            <div class="message">Certo, è <a href="#bottomForm">qui</a> .</div>
                                        </div>
                                    </div>
                                    <div class="text-bar">
                                        <form class="text-bar__field">
                                            <input type="hidden" name="_ref" value="#">
                                            <input type="text" placeholder="Digita qui il messaggio..." disabled="">
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
                                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        </div>
                                        <div class="avatar">
                                            <img src="images/testimonials/msg_user_2_36x36.jpg" alt="Avatar">
                                        </div>
                                        <div class="name">
                                            <span>Rachele Mezzi</span>
                                            <span class="status">online</span>
                                        </div>
                                        <div class="actions more">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="conversation">
                                        <div class="messages messages--sent">
                                            <div class="message">Tesoro, so di non essermi fatta sentire molto recentemente ma sono stato davvero impegnata. Ma ho delle notizie fantastiche.</div>
                                        </div>
                                        <div class="messages messages--received">
                                            <div class="message">Ehi straniero! Ahah, sì, è davvero da molto tempo. Che novità ci sono?</div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">Beh, ti ricordi che hai sempre voluto andare a Los Angeles?</div>
                                        </div>
                                        <div class="messages messages--received">
                                            <div class="message">Lol. Sì?</div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">Beh...</div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">
                                                <img src="images/testimonials/latickets.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">Sorpresa!</div>
                                        </div>
                                        <div class="messages messages--received">
                                            <div class="message">OMG, stai zitto, no! Sei seria?</div>
                                        </div>
                                        <div class="messages messages--sent message--scroll-anchor">
                                            <div class="message">Assolutamente. È parte del motivo per cui sono stato impegnata. Ho scoperto questa piattaforma chiamata Bitcoin Billionaire e per farla breve, è incredibile.</div>
                                        </div>
                                    </div>
                                    <div class="text-bar">
                                        <form class="text-bar__field">
                                            <input type="hidden" name="_ref" value="#">
                                            <input type="text" placeholder="Digita qui il messaggio..." disabled="">
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
                                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="avatar">
                                                        <img src="images/testimonials/wa_user_1_36x36.jpg" alt="Avatar">
                                                    </div>
                                                    <div class="name">
                                                        <span>Giovanni Sansone</span>
                                                        <span class="status">online</span>
                                                    </div>
                                                    <div class="actions more">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="conversation">
                                                    <div class="conversation-container">
                                                        <div class="message sent">
                                                            Come stai andando con Bitcoin Billionaire da quando ti ho inviato il link.
                                                            <span class="metadata">
                                                                <span class="time">3:24 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message sent">
                                                            Ci sei?
                                                            <span class="metadata">
                                                                <span class="time">3:51 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message sent">
                                                            Matteo?
                                                            <span class="metadata">
                                                                <span class="time">4:53 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message received">
                                                            OMG amico! È stato fantastico. Scusa, ho tardato a rispondere. Sono rientrato piuttosto tardi la scorsa notte. Ho lasciato il mio lavoro la settimana scorsa e ho fatto festa senza sosta. Penso di aver bisogno di qualche giorno per riprendermi.
                                                            <span class="metadata"><span class="time">6:27 PM</span></span>
                                                        </div>
                                                        <div class="message sent message--scroll-anchor">
                                                            Ahah, bello. Sono contento di sentirtelo dire. Vacci piano però. Quando ho iniziato a fare soldi sono impazzito un po' anche io.
                                                            <span class="metadata">
                                                                <span class="time">6:42 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message sent">
                                                            <img src="images/testimonials/lol.jpg" class="img-responsive" alt="LOL">
                                                            <span class="metadata">
                                                                <span class="time">6:43 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message received">
                                                            <span id="random">
                                                                Lol, quello sono praticamente io la scorsa notte.
                                                            </span>
                                                            <span class="metadata"><span class="time">6:51 PM</span></span>
                                                        </div>
                                                    </div>
                                                    <form class="conversation-compose">
                                                        <input type="hidden" name="_ref" value="#">
                                                        <div class="emoji">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" x="3147" y="3209">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.2 11.6c.7 0 1.4-.9 1.4-2s-.7-2-1.4-2c-.8 0-1.5 1-1.5 2s.7 2 1.5 2zM6 13c0-.3-.2 5.2 6 5.5 6-.2 6-5.5 6-5.5-6 1.4-12 0-12 0zm11.3 1s-.7 2-5 2c-3.5 0-5.4-1.1-5.6-2 0 0 5.9 1.1 10.6 0zM11.8 1C5.6 1 1 6 1 12.2S5.8 23 12 23s11-4.6 11-10.8C23 6 18 1 11.8 1zm.2 20.4a9 9 0 0 1-9.4-9.2c0-5.3 4-9.6 9.2-9.6a9.5 9.5 0 0 1 9.6 9.6 9 9 0 0 1-9.4 9.2zm3.1-9.8c.8 0 1.4-.9 1.4-2s-.6-2-1.4-2c-.8 0-1.4 1-1.4 2s.6 2 1.4 2z" fill="#7d8489"></path>
                                                            </svg>
                                                        </div>
                                                        <input class="input-msg" name="input" placeholder="Digita qui il messaggio..." autocomplete="off" autofocus="" disabled="">
                                                        <div class="photo">
                                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="send">
                                                            <div class="circle">
                                                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
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
                                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="avatar">
                                                        <img src="images/testimonials/wa_user_2_36x36.jpg" alt="Avatar">
                                                    </div>
                                                    <div class="name">
                                                        <span>Samuele Clerici</span>
                                                        <span class="status">online</span>
                                                    </div>
                                                    <div class="actions more">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="conversation">
                                                    <div class="conversation-container">
                                                        <div class="message sent">
                                                            Stai facendo molto stasera?
                                                            <span class="metadata">
                                                                <span class="time">1:16 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message received message--scroll-anchor">
                                                            Ho appena guadagnato € 5034 su Bitcoin Billionaire, quindi ho pensato che avrei potuto fare un po 'di shopping. Tu?
                                                            <span class="metadata"><span class="time">1:19 PM</span></span>
                                                        </div>
                                                        <div class="message sent">
                                                            Wow, ben fatto. Lo shopping sembra una buona idea! Possiamo prendere qualcosa da mangiare e bere qualcosa dopo.
                                                            <span class="metadata">
                                                                <span class="time">2:04 PM</span><span class="tick">
                                                                    <img src="images/chat-tick.png">
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="message received">
                                                            Sembra un bel programma... Ti vengo a prendere? Voglio prendere la Aston per fare un giro :D
                                                            <span class="metadata"><span class="time">2:33 PM</span></span>
                                                        </div>
                                                    </div>
                                                    <form class="conversation-compose">
                                                        <input type="hidden" name="_ref" value="#">
                                                        <div class="emoji">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="smiley" x="3147" y="3209">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z" fill="#7d8489"></path>
                                                            </svg>
                                                        </div>
                                                        <input class="input-msg" name="input" placeholder="Digita qui il messaggio..." autocomplete="off" autofocus="" disabled="">
                                                        <div class="photo">
                                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="send">
                                                            <div class="circle">
                                                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
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
                        <h1 class="sectionHeadline">Registrati oggi per assicurarti il tuo spazio e guadagnare istantaneamente ogni volta che le persone usano bitcoin</h1>
                    </div>
                    <div class="col-md-9">
                        <div class="container-fluid">
                            <div class="row steps-wrap">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="step-head">PASSAGGIO 1</div>
                                    <div class="step">
                                        <h2>Registrati</h2>
                                        <p class="lead">Inserisci i tuoi dati per registrarti rapidamente e facilmente. Ma affrettati, restano solo pochi spazi.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="step-head">PASSAGGIO 2</div>
                                    <div class="step">
                                        <h2>Investi</h2>
                                        <p class="lead">Riceverai una telefonata da un consulente esperto che ti introdurrà a tutti gli incredibili segreti degli esperti.</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="step-head">PASSAGGIO 3</div>
                                    <div class="step">
                                        <h2>Guadagna</h2>
                                        <p class="lead">Dopo esserti registrato e aver parlato con un esperto, sei pronto per iniziare a guadagnare. Nulla di più semplice.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            <a href="#bottomForm" class="btn btn-primary btn-extra">Registrati qui. <i class="fa fa-long-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="famousPeople">
            <div class="container">
                <h1 class="text-center sectionHeadline">Nomi famosi nel trading</h1>
                <h2 class="text-center col-lg-8 col-lg-offset-2">Tutte queste persone hanno guadagnato milioni con il trading!
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
                                50 ha guadagnato oltre $ 7 milioni (~ € 6.26 milioni) grazie a Bitcoin, dicendo "Resta al passo con i tempi. la tecnologia è ciò che sta cambiando il business bisogna accettarlo. "
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
                                Il tuo tempo è limitato, quindi non sprecarlo vivendo la vita di qualcun altro ... Non lasciare che il rumore delle opinioni altrui offuschi la tua voce interiore. E, cosa più importante di tutte, abbi il coraggio di seguire il tuo cuore e la tua intuizione.
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
                                Essendo supportato da un bitcoin, che richiede tempo per essere realizzato e c'è questa equazione che deve essere fatta, mi sembra più reale e ha più senso.
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
                                Non puoi fermare cose come Bitcoin. Sarà ovunque e il mondo dovrà riadattarsi. I governi di tutto il mondo dovranno riadattarsi.
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
                                La mia filosofia è che se ho soldi li investo in nuove iniziative e non li tengo fermi.
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
                                Non è necessario essere un genio. Investire non è un gioco in cui il ragazzo con il 160 QI batte il ragazzo con 130 QI.
                            </p>
                            <img src="images/famous-people/warren-buffett.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="appFeatures">
            <div class="container">
                <h1 class="text-center sectionHeadline">Vantaggi commerciali online</h1>
                <h2 class="text-center sectionSubheadline">È il modo migliore per investire i tuoi soldi</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_accurate-trading.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Guadagna quando gli altri fanno trading
                            </div>
                            <div class="feature-text">
                                Con Bitcoin Billionaire puoi guadagnare denaro ogni volta che qualcuno compra, vende o usa bitcoin! Immagina di guadagnare denaro da ogni singola transazione nel mondo. Bene, ora è possibile. Le persone in tutto il mondo usano bitcoin e ora puoi trarne
                                profitto quando lo fanno.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_trusted-trading.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Soldi reali, tempo reale
                            </div>
                            <div class="feature-text">
                                Con Bitcoin Billionaire, puoi fare soldi veri in tempo reale, proprio qui, proprio ora. Per iniziare, basta compilare il modulo e sarai contattato da un coach professionista che ti insegnerà esattamente come farlo. Ma sbrigati, questa straordinaria offerta
                                non durerà per sempre.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="images/icons/icon_cutting-edge-technology.svg" alt="" class="img-responsive">
                            </div>
                            <div class="feature-name">
                                Next-Gen Tech
                            </div>
                            <div class="feature-text">
                                Bitcoin Billionaire utilizza le tecnologie più avanzate per garantire i tuoi profitti. Utilizzando un software incredibile, Bitcoin Billionaire traccia ogni singola mossa del mercato nei minimi dettagli. Questo ti permette di guadagnare da ogni singola
                                transazione bitcoin nel mondo.
                            </div>
                        </div>
                    </div>
                </div>
                <p class="lead text-center heroParagraph">
                    I nostri membri in tutto il mondo stanno guadagnando milioni con <b>Bitcoin Billionaire</b>, quindi perché non non lo fai anche tu? <a href="#topForm">Iscriviti oggi</a> e diventa un milionario entro domani. Nulla di più semplice.
                </p>
            </div>
        </section>
        <section id="userTable">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="userTable-block">
                            <h1 id="liveUsers" class="text-center sectionHeadline">Trader online</h1>
                            <div class="table-responsive">
                                <div id="tradersTableWrap">
                                    <div class="tradersTableFadeOutWrap">
                                        <div class="tradersTableFadeOut"></div>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tradersTable table-striped">
                                            <tbody>
                                                <tr>
                                                    <th width="158" scope="col">Utente</th>

                                                    <th width="160" scope="col">Ora</th>
                                                    <th width="104" scope="col">Scambio</th>
                                                    <th width="104" scope="col">Guadagnato</th>
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

                <h1 class="sectionHeadline">Domande frequenti</h1>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="faqBlock">
                            <div class="faqItem">
                                <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq1">Quanto posso guadagnare?</a>
                                <div class="collapse" id="faq1">
                                    <p>Puoi fare milioni a partire da oggi. Avrai accesso a una tecnologia all'avanguardia che ti consentirà di guadagnare da ogni singola transazione bitcoin, in qualsiasi parte del mondo!</p>
                                </div>
                            </div>

                            <div class="faqItem">
                                <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq2">Ho bisogno di esperienza di trading?</a>
                                <div class="collapse" id="faq2">
                                    <p>No! Tutti i membri di Bitcoin Billionaire ricevono consigli di esperti gratuiti e la tecnologia è stata sviluppata per principianti assoluti.</p>
                                </div>
                            </div>
                            <div class="faqItem">
                                <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq3">Quanto costa?</a>
                                <div class="collapse" id="faq3">
                                    <p>Niente. Tutto ciò di cui hai bisogno è il tuo deposito iniziale di € 250 che resta tuo. Questi soldi saranno poi trasformati in milioni.</p>
                                </div>
                            </div>
                            <div class="faqItem">
                                <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq4">Quanti membri ci sono?</a>
                                <div class="collapse" id="faq4">
                                    <p>Ci sono attualmente 1000 membri in tutto il mondo. Ogni anno, 50 nuovi membri sono invitati a partecipare. Tutti gli spazi sono presi in 24 ore, quindi affrettati per assicurarti di ottenere il tuo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="getStarted" id="bottomForm">
            <div class="container">
                <h1 class="sectionHeadline text-center">Diventa un miliardario Bitcoin oggi</h1>
                <div class="row flex-row">
                    <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-12 footerFormTextWrap">
                        <div class="footerFormText">
                            <p>
                            Bitcoin Billionaire può aiutarti ad assicurarti un futuro. Grazie alle ultime tecnologie, ora puoi trarre profitto dalle transazioni Bitcoin in tutto il mondo. Tutto quello che devi fare è registrarti oggi e sarai associato a degli esperti che ti aiuteranno a trasformare i tuoi sogni in realtà. Ti verrà quindi fornito il tuo account gratuito in modo che tu possa iniziare a fare profitti oggi.
                            </p>
                            <p class="lead">
                                <strong>Registrati oggi per fare il tuo primo investimento.</strong>
                            </p>
                            <ul class="listCheckbox">
                                <li>
                                    Finanzia il tuo account con un minimo di € 250.
                                </li>
                                <li>
                                Ricevi gratuitamente la telefonata di un esperto finanziario.
                                </li>
                                <li>
                                Inizia a guadagnare!
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 registerFormWrap">
                        <div class="registerForm registerFormHome">
                            <img src="images/form-girls_w360.png" alt="" class="formGirls">
                            <img src="images/form-left-arrow_w160.png" alt="" class="formGirls--arrow-left">
                            <img src="images/form-right-arrow_w170.png" alt="" class="formGirls--arrow-right">
                            <h2 style="font-size: 24px;padding: 0 25px;color: #f19122;">Non perdere l'opportunità di fare milioni.</h2>
                            <div class="registerform">
                                <div class="app f_form neo_form" id="app2" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Avanti"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <img src="images/btcbillionaire_logo_white-color.svg" class="img-responsive" alt="Bitcoin Billionaire">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="footerLinks">
                        <a href="javascript:void(0)" data-name="policy" class="alterlink">Politica sulla riservatezza</a>
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Termini</a>
                            <span class="copyright">&copy; <script>
                                    document.write((new Date).getFullYear())
                                </script></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="disclaimerFooter" id="disclaimertext">
                        <p><strong>IMPORTANTE</strong> : Guadagni e dichiarazioni di non responsabilità</p>
                        <p>Le rappresentazioni di entrate e guadagni effettuate da Bitcoin Billionaire, (collettivamente, "Questo Sito") vengono utilizzate solo come esempi fittizi del potenziale di guadagno. I successi riportati nelle testimonianze e in
                            altri esempi sono risultati eccezionali e, pertanto, non devono essere intesi come una garanzia che tu o altri otteniate gli stessi risultati. I risultati individuali varieranno e dipenderanno interamente dall'uso che farai
                            di Bitcoin Billionaire.</p>
                        <p>Questo Sito non è responsabile per le tue azioni. Sei tu l'unico responsabile delle tue azioni e decisioni quando usi i prodotti e i servizi e, perciò, devi sempre esercitare cautela e dovuta diligenza. Accetti che Questo Sito
                            non è responsabile in alcun modo nei tuoi confronti per i risultati derivanti dall'utilizzo dei nostri prodotti e servizi. Vedi i nostri Termini e Condizioni per consultare la nostra piena esclusione di responsabilità e
                            altre restrizioni.</p>
                        <p>Questo Sito può ricevere compensi per i prodotti e i servizi che ti consiglia. Se non desideri che Questo Sito venga ricompensato per una raccomandazione, allora ti consigliamo di effettuare ricerche online per trovare un prodotto
                            simile tramite un link non di affiliazione.</p>
                        <p>*Testimonianze: </p>
                        <p>Tutti i personaggi, le informazioni e gli eventi descritti su Questo Sito sono interamente fittizi. Qualsiasi somiglianza con eventi o persone reali, vive o morte, è puramente casuale.</p>
                    </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bundle.min.js"></script>
    <script>
        var globalCountry = "IT";
        var globalLocale = "it";
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