<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitcoin Era ™ | Official Website [2020]</title>
    <meta name="description" content="Era Bitcoin składa się z ekskluzywnej grupy ludzi, którzy zrozumieli szalone bogactwo, jakie mogą uzyskać dzięki Bitcoin. Zarejestruj się teraz i stań się bogatszy niż jesteś dzisiaj.">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Era Bitcoin składa się z ekskluzywnej grupy ludzi, którzy zrozumieli szalone bogactwo, jakie mogą uzyskać dzięki Bitcoin. Zarejestruj się teraz i stań się bogatszy niż jesteś dzisiaj." />
    <meta name="twitter:title" content="Bitcoin Era ™ | Official Website [2021]" />
    <link rel="shortcut icon" href="assets/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/app.css">
    
	<!-- Open Graph -->
    <?php $seoText = 'Witamy!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>assets/videothumbnail.jpg"/>
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
        button[type="submit"] {
            background-image: linear-gradient(166deg, #156cff 1%, #0e49ff);
            box-shadow: 0px 4px 20.9px 3.1px rgba(13, 13, 13, 0.43);
            color: #fff;
            border-radius: 6px;
            border: 0;
            outline: none;
            font-size: 18px;
            font-weight: bold;
        }
        input[type=tel]{
            margin: 0 !important;
        }
        input:not([type=checkbox]) {
            width: 100% !important;
            height: 40px !important;
            border-radius: 0;
        }
        form .input-wrap {
            margin: 10px 0;
        }
        input {
            width: auto !important;
            height: auto !important;
            margin-bottom: 0;
        }
        input[type=checkbox], input[type=radio]{
            margin: 0 10px 0 0 !important;
        }
        .vue-tel-input{
            border: none !important;
        }
        .video{
            display: flex;
        }
        .checkbox-wrap{
            display: flex;
            align-items: center;
        }
        @media screen and (max-width: 768px){
            .play-btn {
                opacity: 1 !important;
                display: flex !important;
            }
        }
    </style>
</head>

<body>
    <!-- INTRO SECTION 1 START -->
    <section class="intro-section-1">
        <div class="container">
            <p class="intro-p"><b data-i18n>UWAGA</b>:<span data-i18n>W związku z prośbami ze strony mediów, rejestracja będzie zamknięta od</span> <b>
					<span class="tomorrow-date">05/02/2020</span> - <span data-i18n>POŚPIECH!</span> </b><span class="countdown-span" id="countdown-span">05:32</span></p>
        </div>
    </section>
    <!-- INTRO SECTION 1 END -->

    <!-- INTRO SECTION 2 START -->
    <section class="intro-section-2">
        <div class="container">
            <div class="intro-part-2">
                <img loading="lazy" src="assets/logo2.png" alt="Bitcoin Era Logo" class="logo">
                <div class="exclusive-offers-wrapper intro-margin-div none">
                    <div style="margin-right: 10px;"><span class="purple" data-i18n>Exclusive offers for</span> <br> <span class="red" data-i18n>trades in</span> <span class="country-name-span red"></span></div>
                    <img loading="lazy" src="assets/flags/PL.png" class="flag" alt="country flag">
                </div>

                <div class="dynamic-person-div none">
                    <div class="dynamic-person-img-wrapper">
                        <img loading="lazy" src="assets/25.jpg" alt="Women" class="dynamic-person-img">
                    </div>
                    <p class="dynamic-person-p">
                        <span class="dynamic-person-name-span">
							Nikole C.
						</span>
                        <br>
                        <span data-i18n>właśnie zrobiłem</span>
                        <br>

                        <span class="dynamic-person-sum-span">
							350
						</span>
                        <span data-init="visitor-currency-symbol" class="dollar-shake">€</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- INTRO SECTION 2 END -->

    <!-- VIDEO FORM SECTION START -->
    <section class="video-form-section">
        <div class="container">
            <h1 class="video-header">Dzięki bitcoin ludzie się bogacą</h1>
            <p class="video-subheader"><span data-i18n>I Ty możesz zostać <span class="yellow" data-i18n>następnym milionerem...</span></span>
            </p>
            <div class="row" style="margin-bottom: -157px;">
                <div class="col-md-8">
                    <div class="video-wrapper">
                        <div class="video">
                            <video controls="controls" poster="assets/videothumbnail.jpg" allowfullscreen="" width="100%">
                                <source src="assets/pl-1.mp4" type="video/mp4" />
                            </video>
                            <div class="play-btn"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-container form_wrapper">
                        <p class="formHeader" data-i18n>ZMIEŃ SWOJE ŻYCIE DZISIAJ!</p>
                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Już teraz uzyskaj dostęp" ></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- VIDEO FORM SECTION END -->

    <!-- INTRO SECTION MOBILE START -->
    <section class="intro-section-mobile">
        <div class="container">
            <div class="intro-part-2">
                <div class="exclusive-offers-wrapper intro-margin-div">
                    <div class="exclusive-offers-text" style="margin-right: 10px;"><span class="purple" data-i18n>Exclusive offers for</span> <br> <span class="red" data-i18n>trades in</span> <span class="country-name-span red"></span></div>
                    <img loading="lazy" src="assets/flags/GB.png" class="flag" alt="gb">
                </div>

                <div class="dynamic-person-div">
                    <div class="dynamic-person-img-wrapper">
                        <img loading="lazy" src="assets/25.jpg" alt="girl" class="dynamic-person-img">
                    </div>
                    <p class="dynamic-person-p">
                        <span class="dynamic-person-name-span">
							Nikole C.
						</span>
                        <br>
                        <span data-i18n>just made</span>
                        <br>
                        <span class="dynamic-person-sum-span">
							350
						</span>
                        <span data-init="visitor-currency-symbol" class="dollar-shake">€</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- INTRO SECTION MOBILE END -->

    <!-- LOGOS SECTION START -->
    <section class="logos-section">
        <div class="container">
            <div class="logos-wrapper">
                <img loading="lazy" src="assets/bitgo.png" class="logo" alt="bitgo logo">
                <img loading="lazy" src="assets/norton.png" class="logo" alt="norton logo">
                <img loading="lazy" src="assets/secure-trading.png" class="logo" alt="secure trading logo">
                <img loading="lazy" src="assets/mcafee.png" class="logo" alt="mcafee logo">
                <div class="bid-wrapper">
                    <span class="orange" data-i18n>BID</span>
                    <span class="green bid-ask-span"><span data-init="visitor-currency-symbol">€</span>6769.42</span>
                </div>
                <div class="ask-wrapper">
                    <span class="gray" data-i18n>ASK</span>
                    <span class="gray bid-ask-span"><span data-init="visitor-currency-symbol">€</span>6771.08</span>
                </div>
            </div>
        </div>
    </section>
    <!-- LOGOS SECTION END -->


    <section class="section_short_description">

        <div class="container">

            <div class="row">

                <div class="col-md-8">

                    <h2>
                        Dołącz do nas i zacznij się<br />
                        <span>wzbogacać z Bitcoin Era!</span>
                    </h2>

                    <p>Bitcoin Era jest grupą przeznaczoną wyłącznie dla osób, które skorzystały z szalonych zwrotów, jakie oferuje bitcoin i po cichu zgromadziły fortunę. Członkowie Bitcoin Rewolucji korzystają co miesiąc z miejsc wypoczynkowych na całym świecie, jednocześnie zarabiając pieniądze „pracując” kilka minut dziennie na swoim laptopie.</p>

                    <img loading="lazy" src="assets/girl-holding-bitcoin.png" class="girl_mobile img-fluid" alt="Girl holding bitcoin" />

                </div>
                <!-- col -->

            </div>
            <!-- row -->

        </div>
        <!-- container -->

    </section>
    <!-- section_short_description -->




    <section class="section_news">

        <div class="container">

            <div class="row">

                <div class="col-md-5">


                </div>
                <!-- col -->

                <div class="col-md-7">

                    <img loading="lazy" src="assets/girl-holding-bitcoin.png" class="girl_desktop img-fluid" alt="Girl-holding-bitcoin" />

                </div>
                <!-- col -->

            </div>
            <!-- row -->

        </div>
        <!-- container -->

    </section>
    <!-- section_news -->




    <!-- TESTIMONIALS SECTION START -->
    <section class="testimonials-section" style="position: relative;">
        <div class="container-fluid">
            <div class="container">
                <h3 class="testimonials-header purple" data-i18n>Prawdziwych świadectw naszych użytkowników</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-1">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Jacek K.</span> <br>
                            <span data-i18n>Łódź</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Fortjeneste</span>: <span data-init="visitor-currency-symbol">€</span>12923</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>'Jestem członkiem Bitcoin Rewolucji od 47 dni. Ale moje życie już się zmieniło! Nie tylko zarobiłem pierwsze €10 000, ale też w międzyczasie poznałem świetnych ludzi. Dzięki, Bitcoin Rewolucjo!'</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-2">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Weronika D.</span> <br>
                            <span data-i18n>Warszawa</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Fortjeneste</span>: <span data-init="visitor-currency-symbol">€</span>7192</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>'W końcu wiem, co to znaczy spełniać marzenia. Nie chcę już oglądać, jak inni bawią się. Dzięki rewolucji Bitcoin mogłem wcześnie wyjść z pracy i prowadzić 1% styl życia.'</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-3">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Zygmunt J.</span> <br>
                            <span data-i18n>Kraków</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Fortjeneste</span>: <span data-init="visitor-currency-symbol">€</span>10519</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>Zadziwiające jest to, że byłem inwestorem na Wall Street i nigdy nie widziałem nic podobnego w całej swojej 10-letniej karierze w firmie. Moi koledzy myśleli, że zwariowałem, kiedy się zwolniłem, aby móc inwestować na pełny etat z oprogramowaniem Bitcoin Era.'</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-4">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Magdalena S.</span><br>
                            <span data-i18n>Poznań</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Fortjeneste</span>: <span data-init="visitor-currency-symbol">€</span>8519</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>'Dwa tygodnie temu straciłem pracę. Nie mając żadnych innych opcji, myślałem, że moje życie się skończyło. Teraz codziennie zarabiam ponad €1,261.42. I po raz pierwszy od dwóch miesięcy nie mam na koncie debetu. Dzięki, Bitcoin Rewolucjo!'</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS SECTION END -->

    <!-- FEATURES SECTION START -->
    <section class="features-section text-center white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-1.png" class="feature-img" alt="feature 1">
                        </div>
                        <h2 class="feature-header" data-i18n>WYDAJNOŚĆ Z DOKŁADNOŚCIĄ LASERA</h2>
                        <p class="feature-description" data-i18n>Nie istnieje na świecie druga aplikacja tradingowa, która działa z 99,4% poziomem dokładności, jaki może osiągnąć Bitcoin Era. Dlatego nasi członkowie na całym świecie ufają nam, że podwoimy, potroimy i czterokrotnie pomnożymy ich ciężko zarobione pieniądze.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-2.png" class="feature-img" alt="feature 2">
                        </div>
                        <h3 class="feature-header" data-i18n>NAJLEPSZA TECHNOLOGIA</h3>
                        <p class="feature-description" data-i18n>Oprogramowanie Bitcoin Era zostało stworzone z wykorzystaniem najbardziej zaawansowanego dostępnego oprogramowania w branży tradingowej. Oprogramowanie wyprzedza rynki o 0,01 sekundy. Ten „skok czasu” sprawia, że oprogramowanie jest najbardziej spójną aplikacją tradingową na świecie.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-3.png" class="feature-img" alt="feature 3">
                        </div>
                        <h3 class="feature-header" data-i18n>NAGRADZANA APLIKACJA TRADINGOWA</h3>
                        <p class="feature-description" data-i18n>Bitcoin Era wygrała liczne nagrody. Ostatnio przyznana nagroda, jaką mieliśmy zaszczyt otrzymać, to #1 miejsce w kategorii oprogramowania tradingowego od Amerykańskiego Stowarzyszenia Tradingowego.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURES SECTION END -->

    <!-- LIVE RESULTS SECTION START-->
    <section class="live-results-section text-center">
        <div class="container relative">
            <div class="live-results-table-wrapper">
                <button class="yellow-btn join-now-btn scroll-top-btn scroll_to_top">
					<span data-i18n>Dołącz teraz!</span>
				</button>
                <p class="dark-purple bold live-results-header" data-i18n>Zacznij przeżywać wyniki z profitem!</p>
                <table class="live-results-table" id="table_profits">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td" data-i18n>Imię</th>
                            <th class="dark-purple padding-left-td" data-i18n>Profit</th>
                            <th class="dark-purple padding-left-td" data-i18n>Czas handlu</th>
                            <th class="dark-purple padding-left-td" data-i18n>Kryptowaluta</th>
                            <th class="dark-purple padding-left-td" data-i18n>Wynik</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td class="bold">Jeffrey Scott.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">€</span>986</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Randy Ryan.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">€</span>723</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Steven Edwards.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">€</span>1032</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Sofie Olsen.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">€</span>839</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Raymond Hunter.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">€</span>1201</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Johnny Rogers.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">€</span>972</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Felix Mortensen.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">€</span>687</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Olivia Carlson.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">€</span>1129</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Jakob Larsen.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">€</span>919</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold last-td">Lori Chen.</td>
                            <td class="bold last-td"><span data-init="visitor-currency-symbol">€</span>1164</td>
                            <td class="last-td trade-time-td padding-left-td"></tdcla>
                                <td class="last-td">BTC/ETH</td>
                                <td class="last-td"><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- LIVE RESULTS SECTION END -->

    <!-- HOW IT WORKS SECTION START -->
    <section class="how-it-works-section text-center">
        <div class="container">
            <div class="how-it-works-wrapper">
                <h2 class="dark-purple bold how-it-works-header" data-i18n>Jak to działa</h2>
                <div class="row">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <div class="step-header white step-header-1 h3" data-i18n>KROK 1</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-1.png" alt="step 1" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>ZAREJESTRUJ SIĘ</div>
                            <p class="step-description" data-i18n>Kiedy Twoja rejestracja zostanie zaakceptowana, automatycznie staniesz się najnowszym członkiem Bitcoin Rewolucji. Uzyskasz dostęp do naszego zastrzeżonego oprogramowania tradingowego za darmo</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <div class="step-header white step-header-2 h3" data-i18n>KROK 2</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-2.png" alt="step 2" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>ZASIL SWOJE KONTO</div>
                            <p class="step-description"><span data-i18n>Jak w każdym biznesie, aby rozpocząć, potrzebujesz kapitału początkowego. Aby zacząć czerpać zyski z Bitcoin Rewolucji, musisz zainwestować dowolną kwotę od €250 wzwyż.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <div class="step-header white step-header-3 h3" data-i18n>KROK 3</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-3.png" alt="step 3" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>ZAKOŃCZ</div>
                            <p class="step-description" data-i18n>Kliknij handluj, aby korzystać z precyzyjnego i dokładnego handlu bez użycia rąk, zasilanego naszym nagradzanym algorytmem. Możesz również korzystać z tradingu manualnego, jeśli wolisz sam przeprowadzać transakcje.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-works-btn-wrapper">
            <button class="yellow-btn open-free-account-btn scroll-top-btn scroll_to_top">
				<span data-i18n>Załóż darmowe konto</span>
			</button>
        </div>
    </section>
    <!-- HOW IT WORKS SECTION END -->

    <!-- FAQ SECTION START -->
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-section-header text-center dark-purple bold" data-i18n>Jakich wyników mogę się spodziewać?</h2>
            <p class="text-center">Członkowie Bitcoin Era zazwyczaj uzyskują minimalny profit rzędu €1100 dziennie.</p>

            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-1">
                        <h3 class="faq-question light-purple bold h2" data-i18n>Jakich wyników mogę się spodziewać?</h3>
                        <p class="faq-answer" data-i18n>Członkowie Bitcoin Era zazwyczaj uzyskują minimalny profit rzędu €1100 dziennie.
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-2">
                        <h4 class="faq-question light-purple bold h2" data-i18n>Ile godzin dziennie muszę przepracować?</h4>
                        <p class="faq-answer" data-i18n>
                        Nasi członkowie pracuj średnio 20 minut dziennie lub mniej. Ponieważ oprogramowanie przeprowadza transakcje, wymagany czas „pracy” jest minimalny.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-3">
                        <h4 class="faq-question light-purple bold h2" data-i18n>Ile mogę maksymalnie zarobić?</h4>
                        <p class="faq-answer" data-i18n>
                        W Bitcoin Rewolucji Twoje zyski są nielimitowane. Niektórzy członkowie zarabiają swój pierwszy milion w ciągu zaledwie 61 dni.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-4">
                        <h4 class="faq-question light-purple bold h2" data-i18n>Jaki jest koszt oprogramowania?</h4>
                        <p class="faq-answer" data-i18n>
                        Członkowie Bitcoin Rewolucji otrzymują kopię naszego autorskiego oprogramowania za darmo. Aby zostać członkiem, wypełnij formularz znajdujący się na tej stronie.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-5">
                        <div class="faq-question light-purple bold h2" data-i18n>Czy to jest podobne do marketingu wielopoziomowego lub marketingu partnerskiego?</div>
                        <p class="faq-answer">To nie ma nic wspólnego z marketingiem wielopoziomowym czy marketingiem partnerskim. Oprogramowanie jest zasilane innowacyjnym algorytmem, który wygrywa transakcje z 99,4% dokładnością.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-6">
                        <h2 class="faq-question light-purple bold" data-i18n>Czy są jakieś opłaty?</h2>
                        <p class="faq-answer" data-i18n>
                        Nie ma żadnych ukrytych opłat. Bez opłat brokerskich i prowizji. Wszystkie Twoje pieniądze są w 100% Twoje i możesz je wypłacić w każdej chwili, bez opóźnień.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ SECTION END -->

    <!-- PRE-FOOTER SECTION START -->
    <section class="pre-footer-section">
        <div class="container">
            <button class="pre-footer-btn scroll-top-btn scroll_to_top">
				<span data-i18n>ZACZNIJ TERAZ</span>
			</button>
        </div>
    </section>
    <!-- PRE-FOOTER SECTION END -->

    <footer style="padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ul class="footer-ul" style="list-style: none" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <style>
                            .footer-ul li {
                                display: inline-block;
                                margin: 0 2px;
                            }
                        </style>
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Warunki i Zasady</a> | <a href="javascript:void(0)" data-name="policy" class="alterlink">Politykę Prywatności</a>
                    </ul>
                    <img loading="lazy" src="assets/logo2.png" alt="Bitcoin Era" class="logo img-responsive center-block">
                </div>
            </div>
        </div>
    </footer>

    <div id="openModalLoading" class="modalDialog">
        <div>
            <div class="loading-spinner"></div>
        </div>
        <div class="loading-text">Connecting you to the best broker for your region...</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/main.js"></script>
    <script src="assets/chunk-vendors.js"></script>
    <script src="assets/app.js"></script>

    <script>
        $(document).ready(function () {
            let date = new Date().toLocaleDateString();
            $('.trade-time-td').text(date);
        });
    </script>
</body>

</html>