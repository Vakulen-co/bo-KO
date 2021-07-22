<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <base href="<?php echo $base ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="description" content="Oficjalna aplikacja Bitcoin Future. Handluj ewolucją bitcoinów z Bitcoin Future. Bitcoin Future może również handlować kryptowalutami i parami walutowymi." />
        <title>Bitcoin Future</title>
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="../assets/js/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Roboto Slab:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Open Sans:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Playfair Display:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&ver=5.5.1" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3Aregular%2C700%7COswald%3A400%2C300%7COpen%20Sans%3A700%2C400%2C400i%7CRoboto%3A700%2C400%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPT%20Serif%3A700%7COpen%20Sans%3A400%7CLato%3A400%7CRoboto%3A400%7COpen%20Sans&display=swap" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <link rel="stylesheet" href="../assets/videojs/video-js.css" />
        <script type="text/javascript" src="../assets/videojs/video.js"></script>
        <link rel="stylesheet" href="../assets/css/style.css" />
        <link rel="stylesheet" href="../assets/css/welcome.css" />
        <script type="text/javascript" src="../assets/js/welcome.js"></script>
        <script>
            var
                countryIso = 'GB'.toLowerCase(),
                countryIsoUpper = countryIso.toUpperCase(),
                country = 'United Kingdom';
            var date_future = addMinutes(new Date(), 6, 38).getTime();
            var currencySymbol = "$";
        </script>
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
        <div class="red-warning">
            <label class="m-0">
            <b data-i18n="warning">UWAGA</b>: <span data-i18n="due-to">W związku z prośbami ze strony mediów, rejestracja będzie zamknięta od</span><b> <span class="today-date"></span> - <span data-i18n="hurry">Pospiesz się</span>! </b><span class="countdown-span"></span></label>
        </div>
        <div class="header-block container">
            <div class="logo-item"></div>
            <div id="excl-off" class="exclusive-offer">
                <span id="excl" class="exclusive"><span data-i18n="exclusive-offer-for">EKSKLUZYWNA OFERTA DLA </span><br/><span class="traders" data-i18n="traders-in-country">INWESTORZY W </span> POLSCE</span>
            </div>
            <div class="just-made-money" id="notifications">
                <img data-image="image" src="../assets/images/25.jpg" alt="User">
                <span class="just-made"><span data-name="name"></span> <span data-i18n="just-made">właśnie zarobił</span><span style="display: inline-block" data-visitor-currency-symbol></span><span style="display: inline-block" data-amount class="">130</span></span>
            </div>
        </div>
        <div class="title-block">
            <h1 data-i18n="bitcoin-header">Dzięki bitcoin ludzie się bogacą</h1>
            <label><span data-i18n="bitcoin-sub">I Ty możesz zostać</span>&nbsp;&nbsp;<span class="gold" data-i18n="bitcoin-sub-b">następnym milionerem...</span></label>
            <div class="player-form-logos-block" style="margin-bottom: -40px;">
                <div class="container player-form-block" id="bitcoin-video-container">
                    <div id="bitcoin-video" class="player-holder">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div class="wideo-wrapper">
                                <video class="video-js vjs-default-skin vjs-big-play-centered video embed-responsive-item" id="video" data-setup='{"controls": true, "autoplay": "any", "preload": "metadata", "fluid": true}'>
                                    <source  src="../assets/media/en-1.mp4" type="video/mp4"></source>
                                    <track kind="captions" src="../assets/media/subtitles/pl.vtt" srclang="pl" label="Polish" default>
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="form-holder col-md-4 col-sm-5">
                        <div class="form-holder-title" id="header-intro">
                            <h2><span data-i18n="form-header">ZMIEŃ SWOJE</span> <br> <b data-i18n="form-header-b">ŻYCIE JUŻ DZISIAJ!</b></h2>
                        </div>
                        <div class="form-container">
                            <div id="error-msg" class="border border-danger bg-white text-danger text-center p-2 mb-3" style="display: none;"></div>
                            <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Daj mi dostęp!"></div>
                        </div>
                    </div>
                </div>
                <div class="just-made-money-small-rez">
                    <div class="exclusive-offer">
                        <span class="exclusive"><span data-i18n="exclusive-offer-for">EKSKLUZYWNA OFERTA DLA</span><br/><span class="traders" data-i18n="traders-in-country">INWESTORZY W POLSCE</span>
                        </span>
                    </div>
                    <div class="just-made-money">
                        <img data-subject="image" src="../assets/images/25.jpg" alt="User">
                        <span class="just-made"><span data-subject="name">Petar</span> <span data-i18n="just-made">właśnie zarobił</span><span data-amount class=""><span data-init="visitor-currency-symbol" style="display: inline;">$</span>130</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="player-form-logos-block logos-block">
            <div class="container logos-form-block">
                <div class="left-side-logos">
                    <div class="ext-logo bitgo"></div>
                    <div class="ext-logo norton"></div>
                    <div class="ext-logo securetrading"></div>
                    <div class="ext-logo mcafee"></div>
                </div>
                <div class="right-side-values">
                    <div class="ext-logo bid-value">
                        <span data-i18n="bid-label">BID</span> 
                        <span class="bid-val">
                            <div id="bid-number"><span data-init="visitor-currency-symbol">$</span><span data-init="bid-price">00.00</span></div>
                        </span>
                    </div>
                    <div class="ext-logo ask-value">
                        <span data-i18n="ask-label">ASK</span> 
                        <span class="ask-val">
                            <div id="ask-number"><span data-init="visitor-currency-symbol">$</span><span data-init="ask-price">00.00</span></div>
                        </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="join-us-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="join-us-text">
                            <h2>
                                <span data-i18n="join-us-and-start">Dołącz do nas i zacznij się wzbogacać</span>
                                <span data-i18n="join-us-crypto-Revolt">z Bitcoin Future!</span>
                            </h2>
                            <p data-i18n="join-us-description">
                                Bitcoin Future jest grupą przeznaczoną wyłącznie dla osób, które skorzystały z szalonych zwrotów, jakie oferuje bitcoin i po cichu zgromadziły fortunę. Członkowie Bitcoin Future korzystają co miesiąc z miejsc wypoczynkowych na całym świecie, jednocześnie zarabiając pieniądze „pracując” kilka minut dziennie na swoim laptopie.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="as-seen-on container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="join-us-text-2">
                            <h6 data-i18n="as-seen-on">As seen on</h6>
                            <img src="../assets/images/seenon.png" alt="media logos">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="real-testimonials-header container">
            <h4 data-i18n="testimonials-block-header">PRAWDZIWYCH ŚWIADECTW NASZYCH UŻYTKOWNIKÓW</h4>
        </div>
        <div class="real-testimonials-body">
            <div class="join-us-image"></div>
            <div class="row m-0">
                <div class="col-md-3 p-0 p1">
                    <div class="card bg-dark text-white person-1">
                        <div class="card-img-overlay">
                            <h5 data-i18n="testimonials-1-name">Jacek K.</h5>
                            <p data-i18n="testimonials-1-location">Łódź</p>
                            <p><span class="profit"><span data-i18n="testimonials-profit">Profit</span>: <span data-init="visitor-currency-symbol">$</span><span data-init="profit-value">12,853</span></span>
                            </p>
                        </div>
                        <div class="overlay">
                            <div class="text" data-i18n="testimonials-1-text">
                                Jestem członkiem Bitcoin Future od 47 dni. Ale moje życie już się zmieniło! Nie tylko zarobiłem pierwsze 10 tysięcy dolarów, ale też w międzyczasie poznałem świetnych ludzi. Dzięki, Bitcoin Future!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-0 p2">
                    <div class="card bg-dark text-white person-2">
                        <div class="card-img-overlay">
                            <h5 data-i18n="testimonials-2-name">Weronika D.</h5>
                            <p data-i18n="testimonials-2-location">Warszawa</p>
                            <p><span class="profit"><span data-i18n="testimonials-profit">Profit</span>: <span data-init="visitor-currency-symbol">$</span><span data-init="profit-value">7,146</span></span>
                            </p>
                        </div>
                        <div class="overlay">
                            <div class="text" data-i18n="testimonials-2-text">
                                W końcu wiem, jak to jest spełniać swoje marzenia. Nie czuję się już, jakbym tylko obserwowała innych, którzy dobrze się bawią. Dzięki Bitcoin Future mogłam przejść na wcześniejszą emeryturę i żyć stylem życia 1%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-0 p3">
                    <div class="card bg-dark text-white person-3">
                        <div class="card-img-overlay">
                            <h5 data-i18n="testimonials-3-name">Zygmunt J.</h5>
                            <p data-i18n="testimonials-3-location">Kraków</p>
                            <p><span class="profit"><span data-i18n="testimonials-profit">Profit</span>: <span data-init="visitor-currency-symbol">$</span><span data-init="profit-value">10,456</span></span>
                            </p>
                        </div>
                        <div class="overlay">
                            <div class="text" data-i18n="testimonials-3-text">
                                Zadziwiające jest to, że byłem inwestorem na Wall Street i nigdy nie widziałem nic podobnego w całej swojej 10-letniej karierze w firmie. Moi koledzy myśleli, że zwariowałem, kiedy się zwolniłem, aby móc inwestować na pełny etat z oprogramowaniem Bitcoin Future.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-0 p4">
                    <div class="card bg-dark text-white person-4">
                        <div class="card-img-overlay">
                            <h5 data-i18n="testimonials-4-name">Magdalena S.</h5>
                            <p data-i18n="testimonials-4-location">Poznań</p>
                            <p><span class="profit"><span data-i18n="testimonials-profit">Profit</span>: <span data-init="visitor-currency-symbol">$</span><span data-init="profit-value">8,463</span></span>
                            </p>
                        </div>
                        <div class="overlay">
                            <div class="text" data-i18n="testimonials-4-text">
                                Dwa tygodnie temu straciłem pracę. Nie mając żadnych innych opcji, myślałem, że moje życie się skończyło. Teraz codziennie zarabiam ponad 1,261,42 dolarów. I po raz pierwszy od dwóch miesięcy nie mam na koncie debetu. Dzięki, Bitcoin Future!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tree-boxes-block">
            <div class="tree-boxes-holder container p-0">
                <div class="box">
                    <div class="feature-img-wrapper">
                        <img src="../assets/images/feature-img-1.png" class="feature-img" alt="feature 1">
                    </div>
                    <h4><span data-i18n="laser-accurate-header-1">WYDAJNOŚĆ Z DOKŁADNOŚCIĄ LASERA</span></h4>
                    <p data-i18n="laser-accurate-description">
                        Nie istnieje na świecie druga aplikacja tradingowa, która działa z 99,4% poziomem dokładności, jaki może osiągnąć Bitcoin Future. Dlatego nasi członkowie na całym świecie ufają nam, że podwoimy, potroimy i czterokrotnie pomnożymy ich ciężko zarobione pieniądze.
                    </p>
                </div>
                <div class="box">
                    <div class="feature-img-wrapper">
                        <img src="../assets/images/feature-img-2.png" class="feature-img" alt="feature 2">
                    </div>
                    <h4><span data-i18n="superior-technology-header-1">NAJLEPSZA TECHNOLOGIA</span></h4>
                    <p data-i18n="superior-technology-description">
                        Oprogramowanie Bitcoin Future zostało stworzone z wykorzystaniem najbardziej zaawansowanego dostępnego oprogramowania w branży tradingowej. Oprogramowanie wyprzedza rynki o 0,01 sekundy. Ten „skok czasu” sprawia, że oprogramowanie jest najbardziej spójną aplikacją tradingową na świecie.
                    </p>
                </div>
                <div class="box">
                    <div class="feature-img-wrapper">
                        <img src="../assets/images/feature-img-3.png" class="feature-img" alt="feature 3">
                    </div>
                    <h4><span data-i18n="award-winning-header-1">NAGRADZANA APLIKACJA TRADINGOWA</span></h4>
                    <p data-i18n="award-winning-description">
                        Bitcoin Future wygrała liczne nagrody. Ostatnio przyznana nagroda, jaką mieliśmy zaszczyt otrzymać, to #1 miejsce w kategorii oprogramowania tradingowego od Amerykańskiego Stowarzyszenia Tradingowego.
                    </p>
                </div>
            </div>
        </div>
        <section class="live-profit-results-block">
            <div class="left-side-coin"></div>
            <div class="right-side-coin"></div>
            <div class="results-table container relative">
                <div class="live-results-table-wrapper">
                    <div>
                        <button data-i18n="join-now-button" class="scroll-top-btn">Dołącz teraz!</button>
                        <h4 data-i18n="live-profit-table-header">Zacznij przeżywać wyniki z profitem!</h4>
                    </div>
                    <table class="live-results-table table">
                        <thead class="thead-light">
                            <tr>
                                <th class="dark-purple padding-left-td" data-i18n="table-column-1">The Bitcoin Future</th>
                                <th class="dark-purple padding-left-td" data-i18n="table-column-2">Profit</th>
                                <th class="dark-purple padding-left-td" data-i18n="table-column-3">Czas handlu</th>
                                <th class="dark-purple padding-left-td" data-i18n="table-column-4">Kryptowaluta</th>
                                <th class="dark-purple padding-left-td" data-i18n="table-column-5">Wynik</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td class="bold">Jessica T.</td>
                                <td class="bold">$986</td>
                                <td class="trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td>LTC/EOS</td>
                                <td><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Joseph M.</td>
                                <td class="bold">$723</td>
                                <td class="trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td>ETH/LTC</td>
                                <td><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Harry C.</td>
                                <td class="bold">$1032</td>
                                <td class="trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td>BTC/ETH</td>
                                <td><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Evan M.</td>
                                <td class="bold">$839</td>
                                <td class="trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td>EOS/ETH</td>
                                <td><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Lily C.</td>
                                <td class="bold">$1201</td>
                                <td class="trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td>LTC/EOS</td>
                                <td><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Lewis R.</td>
                                <td class="bold">$972</td>
                                <td class="trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td>BTC/ETH</td>
                                <td><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">George B.</td>
                                <td class="bold">$687</td>
                                <td class="trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td>ETH/LTC</td>
                                <td><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Natasha R.</td>
                                <td class="bold">$1129</td>
                                <td class="trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td>EOS/ETH</td>
                                <td><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Matthew C.</td>
                                <td class="bold">$919</td>
                                <td class="trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td>LTC/EOS</td>
                                <td><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold last-td">Jamie P.</td>
                                <td class="bold last-td">$1164</td>
                                <td class="last-td trade-time-td padding-left-td"><span class="today-date"></span></td>
                                <td class="last-td">BTC/ETH</td>
                                <td class="last-td"><img src="../assets/images/tick.png" alt="tick"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="how-it-works-block">
            <div class="how-it-works-tittle" data-i18n="how-it-works-header">JAK TO DZIAŁA</div>
            <div class="how-it-works-holder container p-0">
                <div class="card how-it-works step-1">
                    <div class="card-header head-one">
                        <span data-i18n="step1">KROK 1</span>
                    </div>
                    <div class="step-img-wrapper">
                        <img src="../assets/images/step-img-1.png" alt="step 1" class="step-img">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" data-i18n="how-it-works-1-header">ZAREJESTRUJ SIĘ</h5>
                        <p class="card-text" data-i18n="how-it-works-1-description">
                            Kiedy Twoja rejestracja zostanie zaakceptowana, automatycznie staniesz się najnowszym członkiem Bitcoin Future. Uzyskasz dostęp do naszego zastrzeżonego oprogramowania tradingowego za darmo
                        </p>
                    </div>
                </div>
                <div class="card how-it-works step-2">
                    <div class="card-header head-two">
                        <span data-i18n="step2">KROK 2</span>
                    </div>
                    <div class="step-img-wrapper">
                        <img src="../assets/images/step-img-2.png" alt="step 2" class="step-img">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" data-i18n="how-it-works-2-header">ZASIL SWOJE KONTO</h5>
                        <p class="card-text" data-i18n="how-it-works-2-description">
                            Jak w każdym biznesie, aby rozpocząć, potrzebujesz kapitału początkowego. Aby zacząć czerpać zyski z Bitcoin Future, musisz zainwestować dowolną kwotę od <span data-init="visitor-currency-symbol">$</span><span data-init="profit-value-zero">250</span> wzwyż.
                        </p>
                    </div>
                </div>
                <div class="card how-it-works step-3">
                    <div class="card-header head-three">
                        <span data-i18n="step3">KROK 3</span>
                    </div>
                    <div class="step-img-wrapper">
                        <img src="../assets/images/step-img-3.png" alt="step 3" class="step-img">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" data-i18n="how-it-works-3-header">ZAKOŃCZ</h5>
                        <p class="card-text" data-i18n="how-it-works-3-description">
                            Kliknij handluj, aby korzystać z precyzyjnego i dokładnego handlu bez użycia rąk, zasilanego naszym nagradzanym algorytmem. Możesz również korzystać z tradingu manualnego, jeśli wolisz sam przeprowadzać transakcje.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="frequently-asked-questions-block">
            <div class="container">
                <div class="frequently-head">
                    <button data-i18n="open-free-account-button" class="scroll-top-btn">Załóż darmowe konto</button>
                    <h4 data-i18n="frequently-asked-questions-header">CZĘSTO ZADAWANE PYTANIA</h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="question-card-holder">
                            <div class="question-card">
                                <span class="question-number">1</span>
                                <div class="question-answer">
                                    <h4 data-i18n="faq-1-question">Jakich wyników mogę się spodziewać?</h4>
                                    <a data-i18n="faq-1-answer-1">
                                    Członkowie Bitcoin Future zazwyczaj uzyskują minimalny profit rzędu $1,300 dziennie.</a>.
                                </div>
                            </div>
                            <div class="question-card">
                                <div class="question-number">2</div>
                                <div class="question-answer">
                                    <h4 data-i18n="faq-2-question">Ile godzin dziennie muszę przepracować?</h4>
                                    <p data-i18n="faq-2-answer">
                                        Nasi członkowie pracują średnio 20 minut dziennie lub mniej. Ponieważ oprogramowanie przeprowadza transakcje, wymagany czas „pracy” jest minimalny.
                                    </p>
                                </div>
                            </div>
                            <div class="question-card">
                                <div class="question-number">3</div>
                                <div class="question-answer">
                                    <h4 data-i18n="faq-3-question">Ile mogę maksymalnie zarobić?</h4>
                                    <p data-i18n="faq-3-answer">
                                        W Bitcoin Future Twoje zyski są nielimitowane. Niektórzy członkowie zarabiają swój pierwszy milion w ciągu zaledwie 61 dni.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="question-card-holder">
                            <div class="question-card">
                                <span class="question-number">4</span>
                                <div class="question-answer">
                                    <h4 data-i18n="faq-4-question">Jaki jest koszt oprogramowania?</h4>
                                    <p data-i18n="faq-4-answer">
                                        Członkowie Bitcoin Future otrzymują kopię naszego autorskiego oprogramowania za darmo. Aby zostać członkiem, wypełnij formularz znajdujący się na tej stronie.
                                    </p>
                                </div>
                            </div>
                            <div class="question-card">
                                <div class="question-number">5</div>
                                <div class="question-answer">
                                    <h4 data-i18n="faq-5-question">Czy to jest podobne do marketingu wielopoziomowego lub marketingu partnerskiego?</h4>
                                    <p data-i18n="faq-5-answer">
                                        To nie ma nic wspólnego z marketingiem wielopoziomowym czy marketingiem partnerskim. Oprogramowanie jest zasilane innowacyjnym algorytmem, który wygrywa transakcje z 99,4% dokładnością.
                                    </p>
                                </div>
                            </div>
                            <div class="question-card">
                                <div class="question-number">6</div>
                                <div class="question-answer">
                                    <h4 data-i18n="faq-6-question">Czy są jakieś opłaty?</h4>
                                    <p data-i18n="faq-6-answer">
                                        Nie ma żadnych ukrytych opłat. Bez opłat brokerskich i prowizji. Wszystkie Twoje pieniądze są w 100% Twoje i możesz je wypłacić w każdej chwili, bez opóźnień.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="get-started-block">
            <button class="btn scroll-top-btn" data-i18n="get-started-now-button">Zacznij teraz</button>
        </div>
        <script>
            function getRandomInt(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
            
            $(function() {
                var interval = setInterval(function() {
                    $.ajax("https://poloniex.com/public?command=returnTicker")
                        .done(function(r) {
                            $('[data-init="bid-price"]').text(parseFloat(r["USDT_BTC"]["highestBid"]).toFixed(2));
                            $('[data-init="ask-price"]').text(parseFloat(r["USDT_BTC"]["lowestAsk"]).toFixed(2));
                        })
                        .fail(function() {
                            clearInterval(interval);
                            $('[data-init="ask-price"], [data-init="bid-price"]').parents(".ask-wrapper, .bid-wrapper").hide();
                        });
                }, 2000);
            
                $('#loadingModal').on('hidden.bs.modal', function(e) {
                    $('.loader-number').text('38%');
                });
            
                $('#loadingModal').on('hide.bs.modal', function(e) {
                    clearInterval(loadingModalInterval);
                });
            
                var loadingModalInterval;
                $('#loadingModal').on('shown.bs.modal', function(e) {
                    loadingModalInterval = setInterval(function() {
                        var currentText = $('.loader-number').text(),
                            currentValue = parseInt(currentText.match(/\d+/)[0]),
                            nextValue = Math.min(currentValue + getRandomInt(1, 4), 99);
                        if (nextValue == 99) {
                            clearInterval(loadingModalInterval);
                        }
                        $('.loader-number').text(nextValue + '%');
                    }, 75);
                });
            });
            var waitIntgrtn = setInterval(function() {
                if (!window.intgrtn) {
                    return false;
                }
                clearInterval(waitIntgrtn);
            
                window.intgrtn.events.on('form.signup.success', function(form, response) {
                    window.intgrtn.store("signupRequestID", response.data.signupRequestID);
                    window.intgrtn.store("brokerName", response.data.broker.name);
                    window.intgrtn.store("brokerLogo", response.data.broker.logo);
            
                    $('.js-intgrtn-broker-name').html(response.data.broker.name);
                    $('.js-intgrtn-broker-logo').attr({
                        "src": response.data.broker.logo,
                        "alt": response.data.broker.name
                    });
            
                    $('.modal-signup-lp').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                });
            
                $('.js-intgrtn-go-to-broker-site').on("click", function() {
                    $(this).hide();
                    $('.js-intgrtn-modal-loader').show();
                    if (window.intgrtn.lookup("signupRequestID", true)) {
                        window.intgrtn.goToBrokerLoginUrlBySignupRequestID(window.intgrtn.lookup("signupRequestID", true));
                    } else {
                        $(this).show();
                        $('.js-intgrtn-modal-loader').hide();
                    }
                });
            }, 10);
        </script>
        <footer class="footer-block text-center">
            <div class="container">
                <ul class="footer-ul">
                    <li><a href="javascript:void(0)" class="alterlink" data-name="terms">Terms of Use</a></li>
                    <li><a href="javascript:void(0)" class="alterlink" data-name="policy">Privacy Policy</a></li>
                </ul>
                <div data-intgrtn-agreements="" data-intgrtn-type="4" class="footer-disclaimer">
                    <p>
                        REGULATION &amp; HIGH RISK INVESTMENT WARNING: Trading Forex, CFDs and Cryptocurrencies is highly speculative, carries a level of risk and may not be suitable for all investors. You may lose some or all of your invested capital, therefore you should not
                        speculate with capital that you cannot afford to lose. Please click here to read a full risk warning. bitcoin future is a technology, marketing and advertising service. bitcoin future does not gain or lose profits based on your trading
                        results and operates as a technology, marketing and advertising service. bitcoin future is not a financial services firm and does not operate as a financial services firm and is only used as a marketing tool by third party advertisers
                        and brokers to attract customers. Its your obligation to check and decide weather the broker you were connected to applies to all local rules and regulations and is regulated in your country jurisdiction and is allowed to receive customers
                        from your location your are in, before you fund your account with the broker and start trading with it. please report bitcoin future (by clicking report abuse) if you find that the broker assigned to you is not regulated in your jurisdiction
                        so we can cancel your account with bitcoin future.
                    </p>
                    <p>
                        We are required to tell potential investors that our software's past performance does not necessarily predict future results, therefore you should not speculate with capital that you cannot afford to lose.
                    </p>
                    <p>
                        USA REGULATION NOTICE: Option trading is not regulated within the United States. bitcoin future is not supervised or regulated by any financial agencies nor US agencies. Any unregulated trading activity by U.S. residents is considered unlawful. bitcoin
                        future does not accept customers located within the United States or holding an American citizenship.
                    </p>
                    <p>
                        SITE RISK DISCLOSURE: bitcoin future does not accept any liability for loss or damage as a result of reliance on the information contained within this website; this includes education material, price quotes and charts, and analysis. Please be aware of
                        the risks associated with trading the financial markets; never invest more money than you can risk losing. The risks involved in trading Forex, CFDs and Cryptocurrencies may not be suitable for all investors. bitcoin future doesn't
                        retain responsibility for any trading losses you might face as a result of using the data hosted on this site.
                    </p>
                    <p>
                        LEGAL RESTRICTIONS: without limiting the undermentioned provisions, you understand that laws regarding financial contracts vary throughout the world, and it is your responsibility to make sure you properly comply with any law, regulation or guideline
                        in your country of residence regarding the use of the Site. To avoid any doubt, the ability to access our Site does not necessarily mean that our Services and/or your activities through the Site are legal under the laws, regulations
                        or directives relevant to your country of residence.
                    </p>
                    <p>
                        Please note that bitcoin future receives advertising fees for directing users to open an account with the brokers/advertisers and/or for driving traffic to the advertiser website.
                    </p>
                    <p>
                        We have placed cookies on your computer to help improve your experience when visiting this website. You can change cookie settings on your computer at any time. Use of this website indicates your acceptance of this website's <a href="javascript:void(0)" class="alterlink" data-name="policy">Privacy Policy</a>.
                    </p>
                    <br>
                    <p>
                        © 2021 All Rights Reserved - Bitcoin Future 
                    </p>
                </div>
                <img src="../assets/images/logo.png" class="footer-logo" alt="logo">
            </div>
        </footer>
        <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    </body>
</html>