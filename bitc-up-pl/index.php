
<!DOCTYPE html>
<html lang="pl">

<head>

    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bitcoin UP</title>
    <link href="images/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/app.css">

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
    <!-- INTRO SECTION 1 START -->
    <section class="intro-section-1">
        <div class="container">
            <div class="header-atenttion">
                <p>- Advertorial -</p>
            </div>
            <div class="flex-head">
                <div class="countdown-mob mob">
                    <img src="images/attention-mob.png">
                    <span class="countdown-span" id="timer"> 05:30</span>
                </div>
                <div class="head-w-2">
                    <b data-i18n="warning">UWAGA</b>: <span data-i18n="due-to"> Rejestracja zostanie wkrótce zamknięta </span>
                    <span><b>POŚPIESZ SIĘ</b> aby dołączyć do najlepszego internetowego systemu kryptowalutowego!</span><span data-i18n=""><b>
                  <span class="dect">⚠️</span><span class="countdown-span1 dect" id="timer1"> 05:30</span></b>
                    </span>
                    </b>
                </div>
            </div>
        </div>
    </section>
    <!-- INTRO SECTION 1 END -->
    <!-- INTRO SECTION 2 START -->
    <!-- INTRO SECTION 2 END -->
    <!-- VIDEO FORM SECTION START -->
    <section class="video-form-section">
        <div class="section-2-btc dect">
            <div class="container">
                <div class="btc-body">
                    <div>
                        <img src="images/btc-logo.png">
                    </div>
                    <div class="btc-right">
                        <p>bitcoin Kapitalizacja rynkowa <img src="images/arow-up.png"> <span> <span class="currency">€</span>143,584,911,738</span> bitcoin <img src="images/arow-up.png"> <span class="corency"> € 8,874.68</span></p>
                    </div>
                </div>
                <div class="btc-footer">
                    <p><span>Szybki i skuteczny sposób</span> by stać się bogatym </p>
                </div>
            </div>
        </div>
        <div class="section-2-btc mob">
            <p>bitcoin Kapitalizacja rynkowa <span> <span class="currency">$</span>143,584,911,738</span>
            </p>
            <div class="btc-body">
                <div>
                    <img src="images/btc-logo.png">
                </div>
                <div class="btc-right">
                    <p>bitcoin</p>
                    <p class="corency"><span class="currency">$</span>8,874.68</p>
                </div>
            </div>
            <div class="btc-footer">
                <p><span>Szybki i skuteczny sposób</span> by stać się bogatym</p>
            </div>
        </div>
        <div class="container">
            <h1 class="video-header" data-i18n="">
                Zainwestuj już dziś i stań się <span> milionerem...
               <scpan>
            </h1>
            <div class="row">
               <div class="col-md-12 col-lg-8">
                  <img src="images/form-headr.png" class="mob form-headr">
                  <div class="video-wrapper">
                     <div class="video embed-responsive embed-responsive-16by9">
                        <div class="gtd-video-title gtd-date-current-date"></div>
                        <div class="up_sound">
                           Włączyć dźwięk</div>
                      
                        <!--  video backUP -->
                        <!-- PZdgd1mcEcY -->
                        <!--  video backUP -->
                        <div id="ytplayer" class="video-js embed-responsive-item">
                           <video controls title="YouTube video player" width="100%" >
                              <source src="./video/bitcoin_up_pl.mp4" type="video/mp4">
                            </video>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-12 form-mob">
                  <div class="form">
                        <div class="preloader"></div>
                     <div class="head-form">
                        <p>Zmień swoje życie już <span>dziś!</span></p>
        </div>
        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Zarejestruj się"></div>
        <style>


            button[type=submit]{
                width: 100%;
                background: #E6AE5C;
                border: none;
                height: 65px;
                margin-top: 5%;
                font-family: Lato;
                font-style: normal;
                font-weight: bold;
                font-size: 24px;
                line-height: 29px;
                text-align: center;
                color: #FAFAFF;  
            }

            input[type=tel] {
                height: inherit;
                margin: 0;
            }
            form input,
            form select {
                padding: 5px;
                margin-bottom: 5px;
                background-color: white;
                border: 1px solid black;
                color: black;
            }

            form .fieldset {
                position: relative;
            }

            form input::placeholder {
                color: gray;
            }

            .telcountry-flex-wrap {
                display: flex;
            }

            .fr {
                width: 65%;
                margin-left: 5px;
            }

            .fl {
                width: calc(35% - 5px);
            }

            form img {
                width: auto;
                display: inline;
            }
        </style>
        </div>
        </div>
        </div>
        </div>
    </section>
    <section class="logos-section">
        <div class="container">
        </div>
    </section>
    <!-- LOGOS SECTION END -->
    <!-- JOIN US SECTION START -->
    <section class="join-us-section">
        <div class="container">
            <div class="row-block">
                <img src="images/mcafee.png">
                <img src="images/bitgo.png">
                <img src="images/visa.png">
                <img src="images/mastercard.png">
                <div class="protected-block">
                    <div class="protected-img">
                        <img src="images/logo-secure.png">
                    </div>
                    <div class="protected-info">
                        <p><br><span>Twoje dane są w pełni chronione. </span></br>
                            W każdej chwili możesz zrezygnować klikając link rezygnacji z subskrypcji, który znajdziesz w stopce każdego otrzymanego od nas e-maila.

                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="images/logo-secure.png">
                </div>
                <p><br><span>Twoje dane są w pełni chronione. </span></br>
                    W każdej chwili możesz zrezygnować klikając link rezygnacji z subskrypcji, który znajdziesz w stopce każdego otrzymanego od nas e-maila.

                </p>
            </div>
        </div>
    </section>
    <!-- JOIN US SECTION END -->
    <!-- FAKE NEWS SECTION START -->
    <section class="steps-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="steps-info-h mob">
                        <p>Zarabiaj online <br>
                            <span>ponad <span class=""></span>5,000 PLN dziennie<br></span>
                            z <span class="k-italic"> Bitcoin Up!</span>
                        </p>
                    </div>
                    <img src="images/girl.jpg">
                    <div class="btn-block-form">
                        <button>Otwórz DARMOWE konto</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 girl-info">
                    <div class="steps-info-h dect">
                        <p>Zarabiaj online <br><span>ponad <span class=""></span>5,000 PLN dziennie<br></span>
                            <p class="p-italic">z Bitcoin Up!</p>
                        </p>
                    </div>
                    <div class="steps-info-b">
                        <p><span>Uwaga! W przyszłym tygodniu przestaniesz pracować,<br></span>ponieważ w ciągu ostatnich 5 lat algorytmy naszej platformy internetowej wzbogaciły ludzi i uczyniły ich finansowo wolnymi.</p>
                        <p>Jesteśmy <a class="scroll-form">BITCOIN UP</a> — grupą ludzi, którzy wskoczyli na szalone zwroty Bitcoina i po cichu się wzbogacili!
                        </p>
                        <p>Kliknij na <a class="scroll-form">„Otwórz DARMOWE konto”</a>, zdobądź swój szczęśliwy bilet do świata możliwości bitcoin.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- FAKE NEWS SECTION END -->
    <!-- TESTIMONIALS SECTION START -->
    <section class="winners-block winners-block-mob mob">
        <div class="container">
            <div class="steps-header-puple">
                <p>Najgorętsze <span>historie sukcesu</span></p>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="images/winner-1.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Łódź</p>
                    <p>Laura W.
                        <span> <span class=""><br></span>34,374.12 PLN</span>
                        </br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>kliknij, aby przeczytać Więcej...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>Pół roku temu zostałem zwolniony. </p>
                    <p>Z powodu braku doświadczenia, długo nie byłem w stanie znaleźć pracy. Przyjaciele doradzali mi <a class="scroll-form"> bitcoin UP</a>.Zarejestrowałem się i zapłaciłem <span class=""></span>1,100 PLN. </p>
                    <p>Początkowo samodzielnie pracowałem z platformą, a tydzień później na moim koncie było -<span class=""></span>50 PLN. Menedżer skontaktował się ze mną i wyjaśnił, jak prawidłowo pracować z algorytmem, a trzy tygodnie później mój dzienny
                        przychód wyniósł ponad <span class="currency">$</span>1,219! </p>
                    <p> Dzięki, <a class="scroll-form">bitcoin UP</a>!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row winner-click" style="border: 3px solid #E6AE5C;">
                <div class="winners-img">
                    <img src="images/winner-4.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Warszawa </p>
                    <p>Piotr O.
                        <span> <span class=""><br></span>71,426.68 PLN</span>
                        </br>
                    </p>
                    <div class="more-info" style="display: none;">
                        <img src="images/arrow-more.png">
                        <p>kliknij, aby przeczytać Więcej...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: block;">
                    <p>“W wieku 42 lat byłem zdesperowany z powodu dużych długów kredytowych.</p>
                    <p>Na szczęście dowiedziałem się o <a class="scroll-form">bitcoin UP </a> i postanowiłem zainwestować na platformie - po 3 miesiącach spłaciłem wszystkie pożyczki. Teraz wynajmuję duży dom i podarowałem swojej dziewczynie samochód na
                        urodziny.</p>
                    <p>Dzięki <a class="scroll-form">bitcoin UP</a>, jestem na dobrej drodze, aby stać się milionerem!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="images/winner-3.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Warszawa</p>
                    <p>Marik M.
                        <span> <span class=""><br></span>41,146.53 PLN</span>
                        </br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>kliknij, aby przeczytać Więcej...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Korzystam z platformy tylko 35 dni. Kiedyś często traciłem pieniądze w zakładach sportowych, a moje życie było w ruinie. </p>
                    <p>Jakiś czas później zobaczyłem reklamę tej strony na Facebooku i postanowiłem wypróbować <a class="scroll-form"> bitcoin UP</a>!</p>
                    <p>Już po pierwszych dwóch tygodniach rzuciłem pracę w biurze! Teraz moi przyjaciele i ja planujemy podróżować przez cały rok!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="images/winner-2.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Gdańsk</p>
                    <p>Anna T.
                        <span> <span class=""><br></span>54,617.25 PLN</span>
                        </br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>kliknij, aby przeczytać Więcej...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Kilka lat temu mój mąż odszedł ode mnie i musiałam sama wychowywać dwoje naszych dzieci.</p>
                    <p>Nie było mnie stać na wysłanie mojej córki na studia. Nie miałam nic do stracenia, więc zainwestowałam w <a class="scroll-form">bitcoin UP</a>.</p>
                    <p>Ku mojemu zaskoczeniu, było mnie stać na opłaty za studia i spłacenie wszystkich pożyczek! Teraz pracuję w domu przez internet 20-30 minut dziennie i mogę poświęcić wystarczająco dużo czasu na wychowywanie moich dzieci!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="winners-block dect">
        <div class="container">
            <div class="steps-header-puple">
                <p>Najgorętsze <span>historie sukcesu</span></p>
            </div>
            <div class="row">
                <div class="steps-block steps-1">
                    <div class="col-md-4">
                        <div class="winners-puple winner-jade">
                            <img src="images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Łódź</p>
                                <p class="winner-name">Laura W.<br>
                                    <span><span class=""></span>34,374.12 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Gdańsk</p>
                                <p class="winner-name">Anna T.<br>
                                    <span><span class=""></span>54,617.25 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Warszawa</p>
                                <p class="winner-name">Marik M.<br>
                                    <span><span class=""></span>41,146.53 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-4-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Warszawa</p>
                                <p class="winner-name">Piotr O.<br>
                                    <span><span class=""></span>71,426.68 PLN<span></span></br>
                                </p>
                                <p class="winner-big-info">“W wieku 42 lat byłem zdesperowany z powodu dużych długów kredytowych.</p>
                                <p class="winner-big-info">Na szczęście dowiedziałem się o <a class="scroll-form">bitcoin UP</a> i postanowiłem zainwestować na platformie - po 3 miesiącach spłaciłem wszystkie pożyczki. </p>
                                <p class="winner-big-info">Teraz wynajmuję duży dom i podarowałem swojej dziewczynie samochód na urodziny. </p>
                                <p class="winner-big-info">Dzięki <a class="scroll-form">bitcoin UP</a>, jestem na dobrej drodze, aby stać się milionerem!“</p>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="steps-block steps-2" style="display: none;">
                    <div class="col-md-4">
                        <div class="winners-puple winner-william">
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Warszawa </p>
                                <p class="winner-name">Piotr O.<br>
                                    <span><span class=""></span>71,426.68 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Gdańsk</p>
                                <p class="winner-name">Anna T.<br>
                                    <span><span class=""></span>54,617.25 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Warszawa</p>
                                <p class="winner-name">Marik M.<br>
                                    <span><span class=""></span>41,146.53 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-1-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Łódź</p>
                                <p class="winner-name">Laura W.<br>
                                    <span><span class=""></span>34,374.12 PLN<span></span></br>
                                </p>
                                <p class="winner-big-info">Pół roku temu zostałem zwolniony.</p>
                                <p class="winner-big-info">Z powodu braku doświadczenia, długo nie byłem w stanie znaleźć pracy. Przyjaciele doradzali mi <a class="scroll-form">bitcoin UP</a>. Zarejestrowałem się i zapłaciłem <span class=""></span>1,100 PLN. Początkowo samodzielnie
                                    pracowałem z platformą, a tydzień później na moim koncie było -<span class=""></span>50 PLN.</p>
                                <p class="winner-big-info">Menedżer skontaktował się ze mną i wyjaśnił, jak prawidłowo pracować z algorytmem, a trzy tygodnie później mój dzienny przychód wyniósł ponad <span class=""></span>5,000 PLN! Dzięki,
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
                            <img src="images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Łódź</p>
                                <p class="winner-name">Laura W.<br>
                                    <span><span class="currency"></span>34,374.12 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Warszawa </p>
                                <p class="winner-name">Piotr O.<br>
                                    <span><span class=""></span>71,426.68 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Gdańsk</p>
                                <p class="winner-name">Anna T.<br>
                                    <span><span class=""></span>54,617.25 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-3-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Warszawa</p>
                                <p class="winner-name">Marik M.<br>
                                    <span><span class=""></span>41,146.53 PLN<span></span></br>
                                </p>
                                <p class="winner-big-info">“Korzystam z platformy tylko 35 dni. Kiedyś często traciłem pieniądze w zakładach sportowych, a moje życie było w ruinie.</p>
                                <p class="winner-big-info">Jakiś czas później zobaczyłem reklamę tej strony na Facebooku i postanowiłem wypróbować <a class="scroll-form">bitcoin UP</a>!</p>
                                <p class="winner-big-info">Już po pierwszych dwóch tygodniach rzuciłem pracę w biurze!</p>
                                <p class="winner-big-info">Teraz moi przyjaciele i ja planujemy podróżować przez cały rok!“</p>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="steps-block steps-4" style="display: none;">
                    <div class="col-md-4">
                        <div class="winners-puple winner-jade">
                            <img src="images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Łódź</p>
                                <p class="winner-name">Laura W.<br>
                                    <span><span class="currency"></span>34,374.12 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Warszawa </p>
                                <p class="winner-name">Piotr O.<br>
                                    <span><span class=""></span>71,426.68 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Warszawa</p>
                                <p class="winner-name">Marik M.<br>
                                    <span><span class=""></span>41,146.53 PLN<span></span></br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-2-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Łódź</p>
                                <p class="winner-name">Anna T.<br>
                                    <span><span class=""></span>54,617.25 PLN<span></span></br>
                                </p>
                                <p class="winner-big-info">“Kilka lat temu mój mąż odszedł ode mnie i musiałam sama wychowywać dwoje naszych dzieci.Nie było mnie stać na wysłanie mojej córki na studia.</p>
                                <p class="winner-big-info">Nie miałam nic do stracenia, więc zainwestowałam w <a class="scroll-form">bitcoin UP</a>. Ku mojemu zaskoczeniu, było mnie stać na opłaty za studia i spłacenie wszystkich pożyczek! </p>
                                <p class="winner-big-info">Teraz pracuję w domu przez internet 20-30 minut dziennie i mogę poświęcić wystarczająco dużo czasu na wychowywanie moich dzieci!“</p>
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
                <p>Jak to działa?</p>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="images/question-img-1.jpg" class="dect">
                </div>
                <div class="col-md-5">
                    <div class="question-info">
                        <p> <span class="question-info-step">Krok 1</span></p>
                        <img src="images/question-img-1-mob.jpg" class="mob">
                        <p> <span class="question-info-header"> Wypełnij formularz</span></p>
                        <p> <span class="question-info-block">Gdy Twoje konto zostanie zarejestrowane, 
automatycznie staniesz się najnowszym 
członkiem <a class="scroll-form">bitcoin UP</a>. Upewnij się, że wygenerowałeś kod 
bezpieczeństwa, żeby nikt nie mógł zhackować 
Twojego konta!</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <div class="question-info">
                     <p> <span class="question-info-step">Krok 2</span></p>
                        <img src="images/question-img-2-mob.jpg" class="mob">
                        <p> <span class="question-info-header"> Wpłać środki na swoje konto</span></p>
                        <p> <span class="question-info-block">Jak w każdym biznesie, potrzebujesz kapitału, by 
móc zacząć. Aby zacząć zarabiać z <a class="scroll-form">bitcoin UP</a>,  musisz 
zainwestować kwotę <span class=""></span>1,100 PLN lub większą.</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <img src="images/question-img-2.jpg" class="dect">
                </div>
            </div>
            <div class="row margin-b">
                <div class="col-md-7">
                    <img src="images/question-img-3.jpg" class="phone-img dect">
                </div>
                <div class="col-md-5">
                    <div class="question-info padding-b">
                        <p> <span class="question-info-step">Krok 3</span></p>
                        <img src="images/question-img-3-mob.jpg" class="mob">
                        <p> <span class="question-info-header"> Poczekaj na telefon od nas i gotowe.</span></p>
                        <p> <span class="question-info-block">Po dokonaniu płatności, nasz manager skontaktuje 
się z Toba telefonicznie i przekaże Ci algorytm 
wysokich przychodów. Korzystaj z doskonałego handlu niebezpośredniego, 
dzięki naszemu wielokrotnie nagradzanemu 
algorytmowi.
 Możesz także skonfigurować handel bezpośredni, 
jeśli wolisz handlować na własną rękę.</p>
                  </div>
                  <div class="btn-block-form">
                     <button>Zacznij już teraz</button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="winners-block faq-block-mob mob">
         <div class="container">
            <div class="steps-header-puple">
               <p>Najczęściej zadawane <span>pytania</span></p>
                    </div>
                    <div class="row faq-click">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span> Jakich rezultatów mogę się spodziewać?</span></br>
                            </p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: none;">
                            <p>Członkowie Bitcoin UP zazwyczaj zarabiają co najmniej <span class=""></span>5,000 PLN dziennie, ponieważ platforma przez 24 godziny na dobę, 7 dni w tygodniu, poszukuje najkorzytniejszych transakcji</p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                    <div class="row faq-click" style="border: 2px solid rgb(230, 174, 92);background-image: url(images/arrow-hide-up.png);">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span style="color:#E6AE5C ">Ile godzin dziennie muszę pracować?</span></br>
                            </p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: block;">
                            <p>Nasi członkowie pracują średnio 20 minut dziennie lub krócej. Ponieważ oprogramowanie obsługuje transakcje, wymagana ilość „pracy” jest minimalna.</p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                    <div class="row faq-click">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span> Ile kosztuje oprogramowanie?</span></br>
                            </p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: none;">
                            <p>Członkowie bitcoin UP otrzymują bezpłatnie kopię naszego zastrzeżonego oprogramowania. Aby zostać członkiem, wypełnij formularz na tej stronie.
                            </p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                    <div class="row faq-click">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span> Czy to jest jak MLM lub marketing afiliacyjny?</span></br>
                            </p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: none;">
                            <p>To nie przypomina MLM, marketingu afiliacyjnego ani niczego innego. Bitcoin UP - oprogramowanie wygrywa transakcje z dokładnością 99,4%, jest to Twoje osobiste narzędzie do wzbogacania się</p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                    <div class="row faq-click">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span> Czy są jakieś opłaty?</span></br>
                            </p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: none;">
                            <p>Nie ma żadnych ukrytych opłat. Nie ma również żadnych opłat maklerskich, ani prowizji. Wszystkie Twoje dane i pieniądze są chronione. Dochód w 100% należy do Ciebie i możesz wypłacać pieniądze w dogodnym dla Ciebie momencie.
                            </p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
    </section>
    <section class="faq">
        <div class="faq-header dect">
            <p>Najczęściej zadawane pytania</p>
        </div>
        <div class="container">
            <div class="row dect">
                <div class="col-lg-7 col-md-12">
                    <div class="answer  answer-work">
                        <p><span>Ile godzin dziennie muszę<br> pracować?</span>
                            <p>Nasi członkowie pracują średnio 20 minut dziennie lub krócej. Ponieważ oprogramowanie obsługuje transakcje, wymagana ilość „pracy” jest minimalna.</p>
                        </p>
                    </div>
                    <div class="answer answer-expect" style="display: none;">
                        <p><span>Jakich rezultatów mogę<br> się spodziewać?</span>
                            <p>Członkowie Bitcoin UP zazwyczaj zarabiają co najmniej <span class=""></span>5,000 PLN dziennie, ponieważ platforma przez 24 godziny na dobę, 7 dni w tygodniu, poszukuje najkorzytniejszych transakcji.</p>
                        </p>
                    </div>
                    <div class="answer answer-cost" style="display: none;">
                        <p><span>Ile kosztuje <br> oprogramowanie?</span>
                            <p>Członkowie bitcoin UP otrzymują bezpłatnie kopię naszego zastrzeżonego oprogramowania. Aby zostać członkiem, wypełnij formularz na tej stronie.
                            </p>
                        </p>
                    </div>
                    <div class="answer answer-marketing" style="display: none;">
                        <p><span>Czy to jest jak MLM lub <br> marketing afiliacyjny?</span>
                            <p>To nie przypomina MLM, marketingu afiliacyjnego ani niczego innego. Bitcoin UP - oprogramowanie wygrywa transakcje z dokładnością 99,4%, jest to Twoje osobiste narzędzie do wzbogacania się.</p>
                        </p>
                    </div>
                    <div class="answer answer-fees" style="display: none;">
                        <p><span>Czy są jakieś opłaty? <br></span>
                            <p>Nie ma żadnych ukrytych opłat. Nie ma również żadnych opłat maklerskich, ani prowizji. Wszystkie Twoje dane i pieniądze są chronione. Dochód w 100% należy do Ciebie i możesz wypłacać pieniądze w dogodnym dla Ciebie momencie.
                            </p>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="faq-block">
                        <div class="question-work question" style="color:#E6AE5C ">
                            <p>Ile godzin dziennie muszę pracować?</p>
                        </div>
                        <div class="question-expect question">
                            <p>Jakich rezultatów mogę się spodziewać?</p>
                        </div>
                        <div class="question-cost question">
                            <p>Ile kosztuje oprogramowanie?</p>
                        </div>
                        <div class="question-marketing question">
                            <p>Czy to jest jak MLM lub marketing afiliacyjny?</p>
                        </div>
                        <div class="question-fees question">
                            <p>Czy są jakieś opłaty?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-form-block">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-form-info">
                        <p>Będziesz <span>zaskoczony</span> po wypłaceniu dwutygodniowego zysku!</p>
                        <img src="images/btc-logo.png">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="images/phone-footer.png" class="dect phone-footer-img">
                    <img src="images/phone-footer-mob.png" class="mob">
                </div>
                <div class="col-lg-4 col-md-12 padding-hide">
                    <div class="form">
                        <div class="preloader"></div>
                        <div class="head-form">
                            <p>ZMIEŃ SWOJE ŻYCIE JUŻ <span>DZIŚ!</span></p>
                        </div>

                        <div class="btn-form">

                            <button class="btm-send move-to-top">Dołącz już dziś!</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="join-us-footer">
        <div class="container">
            <div class="row-block">
                <img src="images/mcafee.png">
                <img src="images/bitgo.png">
                <img src="images/visa.png">
                <img src="images/mastercard.png">
                <div class="protected-block">
                    <div class="protected-img">
                        <img src="images/logo-secure.png">
                    </div>
                    <div class="protected-info">
                        <p><br><span>Twoje dane są w pełni chronione. </span><br> W każdej chwili możesz zrezygnować klikając link rezygnacji z subskrypcji, który znajdziesz w stopce każdego otrzymanego od nas e-maila.Będziemy traktować Twoje dane z szacunkiem.Klikając
                            powyżej, wyrażasz zgodę na przetwarzanie swoich danych zgodnie z tymi warunkami.


                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="images/logo-secure.png">
                </div>
                <p><br><span>Twoje dane są w pełni chronione. </span></br>
                    W każdej chwili możesz zrezygnować klikając link rezygnacji z subskrypcji, który znajdziesz w stopce każdego otrzymanego od nas e-maila.Będziemy traktować Twoje dane z szacunkiem.Klikając powyżej, wyrażasz zgodę na przetwarzanie swoich danych zgodnie
                    z tymi warunkami.
                </p>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer">
                <div class="logo-footer">
                    <img src="images/btc-logo.png">
                </div>
                <div class="privacy-link">
                    <a href="javascript:void(0)" data-name="policy" class="alterlink">Polityka prywatności</a>
                    <a href="javascript:void(0)" data-name="terms" class="alterlink">Warunki</a>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    WAŻNE: Zarobki i wyłączenie z odpowiedzialności prawnej Zarobki i oświadczenia o dochodach sporządzone przez
                    <span class="disclaimer-brand_name__new">Website</span> (zwane łącznie „niniejszą witryną”) służyły jedynie jako przykłady twojego potencjału zarobkowego. Sukcesy osób przytoczonych w przykładach są wyjątkowymi wynikami i dlatego nie
                    mogą stanowić gwarancji, że Ty lub inni osiągniecie takie same wyniki. Indywidualne wyniki będą się różnić i będą całkowicie zależne od użycia <span class="disclaimer-brand_name__new">Website</span>. Ta strona internetowa nie ponosi
                    odpowiedzialności za Twoje działania. Ponosisz wyłączną odpowiedzialność za swoje działania i decyzje podczas korzystania z produktów i usług, dlatego zawsze powinieneś zachować ostrożność i należytą staranność. Zgadzasz się, że ta
                    strona internetowa nie ponosi żadnej odpowiedzialności za wyniki korzystania z oferowanych produktów i usług. Zobacz nasze Warunki, aby poznać pełną treść wyłączenia nas od odpowiedzialności oraz innych zastrzeżeń. Ta strona internetowa
                    może otrzymać wynagrodzenie za produkty i usługi, które Ci poleca. Jeśli nie chcesz, aby ta witryna otrzymywała wynagrodzenie za rekomendację, zalecamy wyszukiwanie w Internecie podobnego produktu za pośrednictwem linku niepowiązanego.
                    ©<span id="yearDisclaimerNew">2020</span><br/> USA REGULATION NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the United States. Invest in Crypto is not supervised or regulated by any financial agencies nor
                    US agencies. Any unregulated trading activity by U.S. residents is considered unlawful. <span class="disclaimer-brand_name__new">Website</span> does not accept customers located within the United States or holding an American citizenship.
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

            <link rel="stylesheet" rel="stylesheet" type="text/css" href="css/stylesheet.css">

            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="js/index.js"></script>
            <script src="js/device.min.js"></script>
            <script src="js/script.js"></script>
            <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
            <script src="https://cdn-addict.site/addict-new/js/app.js"></script>


            

</body>

</html>