<?php
   include_once 'config.php';

   $inputAvatar = array("assets/img/intro-stat-1.jpg", "assets/img/intro-stat-2.jpg", "assets/img/intro-stat-3.jpg", "assets/img/intro-stat-4.jpg", "assets/img/intro-stat-5.jpg");
   $rand_keys = array_rand($inputAvatar, 2);

   $inputValue = array("€2314", "€6747", "€1055", "€8584", "€6488", "€904", "€4134", "€3543", "€3495", "€5278", "€754", "€5333");
   $rand_keys_money = array_rand($inputValue, 2);
?>
<!doctype html>
<html lang="de">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
   <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
   <meta name="msapplication-config" content="assets/img/favicons/browserconfig.xml">
   <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
   <title>The Ethereum Code</title>

   <base href="<?php echo $base ?>">
   <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
   <link href="assets/css/index.min.css" rel="stylesheet">
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
   <!--  Pixel Code -->
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
   <!-- End  Pixel Code -->
</head>

<body class="show">
   <div id="wrapper">
      <header id="header">
         <div class="header-content">
            <div class="header-logo"><a href="javascript:;" style="cursor:default" class="">The Ethereum Code</a></div>
            <div class="logos">
               <picture>
                  <source srcset="assets/img/header-logosc4ca.webp" type="image/webp">
                  <img src="assets/img/header-logosc4ca.png" alt="Logo">
               </picture>
            </div>
         </div>
      </header>
      <div id="container">
         <div class="section section-intro scroll-trigger">
            <div class="section-container">
               <div class="intro-title">
                  <div>Machen Sie eine garantierte $ 10.000 pro Woche</div>
                  “Geheimes System der 1% “Die Banken wollen nicht, dass Sie es wissen
               </div>
               <div class="intro-wrapper">
                  <div class="col-video">
                     <div class="video-wrapper">
                           <div class="video">
                              <video autoplay="autoplay" poster="assets/media/poster.png" allowfullscreen="">
                                 <source src="assets/media/en-1.mp4" type="video/mp4" />
                              </video>
                              <div class="play-btn"></div>
                           </div>
                     </div>
                  </div>
                  <div class="col-form">
                     <div class="top-form-wrapper">
                        <div class="form-title">
                           <div>Erhalten Sie sofortigen Zugriff</div>
                        </div>
                        <div id="signup">
                           <div class="iframe">
                              <div class="app" id="app1" data-url="thankyou.php" data-butt="Anmeldung" data-type="2"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="top-winners">
                  <div class="winner-item winner-item--mobile widget-people">
                     <div class="winner-inner">
                        <div class="img">
                           <img src="<?php echo $inputAvatar[$rand_keys[0]] ?>" alt="" alt="Photo">
                        </div>
                        <div class="info">
                           <div class="name"></div>
                           <div class="place">from Deutschland</div>
                        </div>
                        <div class="sum"><span>Just made</span> <span class="sum__currency"><?php echo $inputValue[$rand_keys_money[0]] ?></span><span class="sum__value"></span></div>
                     </div>
                  </div>
                  <div class="animation-coin" id="coin"><span></span><span></span><span></span><span></span></div>
                  <div class="glide slider-glide">
                     <div class="glide__track">
                        <ul class="glide__slides">
                           <li class="swiper-slide glide__slide">
                              <div class="winner-item">
                                 <div class="winner-inner">
                                    <div class="img">
                                       <picture>
                                          <source srcset="assets/img/intro-stat-4.webp" type="image/webp">
                                          <img src="assets/img/intro-stat-4.jpg" alt="">
                                       </picture>
                                    </div>
                                    <div class="info">
                                       <div class="name">Michael T.</div>
                                       <div class="place">from NY</div>
                                    </div>
                                    <div class="sum"><span>Just made</span> $3,271.39</div>
                                 </div>
                              </div>
                              <div class="winner-item">
                                 <div class="winner-inner">
                                    <div class="img">
                                       <picture>
                                          <source srcset="assets/img/intro-stat-5.webp" type="image/webp">
                                          <img src="assets/img/intro-stat-5.jpg" alt="">
                                       </picture>
                                    </div>
                                    <div class="info">
                                       <div class="name">Rick S.</div>
                                       <div class="place">from Sidney</div>
                                    </div>
                                    <div class="sum"><span>Just made</span> $4,092.35</div>
                                 </div>
                              </div>
                              <div class="winner-item">
                                 <div class="winner-inner">
                                    <div class="img">
                                       <picture>
                                          <source srcset="assets/img/intro-stat-6.webp" type="image/webp">
                                          <img src="assets/img/intro-stat-6.jpg" alt="">
                                       </picture>
                                    </div>
                                    <div class="info">
                                       <div class="name">Alice S.</div>
                                       <div class="place">from Kalmar</div>
                                    </div>
                                    <div class="sum"><span>Just made</span> $4,831.64</div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section class="section section-why-title">
            <div class="section-container">
               <div class="section-content">
                  <div class="section-title">Warum der Ethereum-Code?</div>
               </div>
            </div>
         </section>
         <section class="section section-why-list lazy-load">
            <div class="section-container">
               <div class="section-content">
                  <ul class="why-list">
                     <li>Schnelle Abhebungen</li>
                     <li>Automatisierte Einnahmen von 10.000 USD / Woche</li>
                     <li>Preisgekrönte Software</li>
                  </ul>
               </div>
            </div>
         </section>
         <section class="section section-testimonials-title lazy-load">
            <div class="section-container">
               <div class="section-content">
                  <div class="section-title">Die Mitglieder des Ethereum-Codes verdienen 10.000 US-Dollar pro Woche</div>
               </div>
            </div>
         </section>
         <section class="section section-testimonials lazy-load">
            <div class="section-container">
               <div class="section-content">
                  <div class="row">
                     <div class="col-md-6">
                        <picture>
                           <source srcset="assets/img/testimonial-1.webp" type="image/webp">
                           <img class="lazy-img" src="assets/img/testimonial-1.png" alt="">
                        </picture>
                        <picture>
                           <source srcset="assets/img/testimonial-2.webp" type="image/webp">
                           <img src="assets/img/testimonial-2.png" alt="">
                        </picture>
                        <picture>
                           <source srcset="assets/img/testimonial-3.webp" type="image/webp">
                           <img class="lazy-img" src="assets/img/testimonial-3.png" alt="">
                        </picture>
                     </div>
                     <div class="col-md-6">
                        <picture>
                           <source srcset="assets/img/testimonial-4.webp" type="image/webp">
                           <img class="lazy-img" src="assets/img/testimonial-4.png" alt="">
                        </picture>
                        <picture>
                           <source srcset="assets/img/testimonial-5.webp" type="image/webp">
                           <img src="assets/img/testimonial-5.png" alt="">
                        </picture>
                        <picture>
                           <source srcset="assets/img/testimonial-6.webp" type="image/webp">
                           <img class="lazy-img" src="assets/img/testimonial-6.png" alt="">
                        </picture>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <div id="footer">
      <div class="footer-content">
         <div class="description">Wichtiger Risikohinweis: Der Handel mit binären Optionen kann erhebliche Vorteile bringen, birgt jedoch auch das Risiko eines teilweisen oder vollständigen Fondsverlusts und sollte von Erstinvestoren berücksichtigt werden. Wir empfehlen Ihnen dringend, unsere Allgemeinen Geschäftsbedingungen und den Haftungsausschluss zu lesen, bevor Sie eine Investition tätigen. Kunden müssen sich ihrer individuellen Kapitalertragsteuerpflicht in ihrem Wohnsitzland bewusst sein. Es ist gesetzeswidrig, US-Personen zum Kauf und Verkauf von Warenoptionen aufzufordern, auch wenn sie als \ Vorhersage-Kontrakte bezeichnet werden, es sei denn, sie sind zum Handel zugelassen und werden an einer von der CFTC registrierten Börse gehandelt oder sind gesetzlich nicht ausgenommen.</div>
         <ul class="footer-menu">
            <li><a href="javascript:void(0)" data-name="terms" class="alterlink">Terms</a></li>
            <li><a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy</a></li>
         </ul>
      </div>
   </div>
   <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
   <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>