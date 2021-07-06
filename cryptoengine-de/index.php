<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="de">
   <head>
      <base href="<?php echo $base ?>">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CryptoEngine</title>
      <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
      <meta name="msapplication-TileColor" content="#160c3c">
      <meta name="theme-color" content="#661067">
      <link rel="stylesheet"  href="css/style.css">
      <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

      <!-- Open Graph -->
      <?php $seoText = 'Welcome!'; ?>
      <meta name="description" content="<? echo $seoText; ?>"/>
      <meta name="keywords" content="<? echo $seoText; ?>"/>
      <meta property="og:title" content="<? echo $seoText; ?>"/>
      <meta property="og:description" content="<? echo $seoText; ?>"/>
      <meta property="og:image" content="<? echo $base; ?>videos/poster.jpg"/>
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
         .vue-tel-input{
            border: none !important;
         }
         .mob, .svg_uniq-mob {display: none!important;}
         @media screen and (max-width: 600px){
         .mob {display: inline-block!important;}
         .desc {display: none!important;}
         }
         @media screen and (max-width: 768px){
         .svg_uniq-mob {display: inline-block!important;}
         .svg_uniq-desc {display: none!important;}
         }
      </style>
</head>
<body data-target="#mainNavbar" style="background: #211154;">
      <div style="margin-top: 8px;">
         <div class="disclaimerHeader">
            &ndash; Werbeanzeige &ndash;
         </div>
         <div class="topBarCTA">
            <div class="container">
               <span class="fa fa-exclamation-triangle"></span> Wir haben eine beispiellose Anzahl neuer Nutzer. <strong class="topBarCTA-date"></strong>
            </div>
         </div>
         <section class="heroSection" id="about">
            <header>
               <div class="container">
                  <div class="flex-row">
                     <div class="headerLogo" title="CryptoEngine">
                        <svg width="0" height="0" class="hidden">
                           <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105 30.11" id="crypto-engine_logo_header">
                              <title>CryptoEngine</title>
                              <path fill="#661067" d="M28.31 9.42l-4.18-5.76a3.5 3.5 0 0 0-1.78-1.29L15.59.17a3.56 3.56 0 0 0-2.19 0l-6.77 2.2a3.52 3.52 0 0 0-1.77 1.29L.68 9.42A3.52 3.52 0 0 0 0 11.5v7.11a3.57 3.57 0 0 0 .68 2.09l4.18 5.75a3.52 3.52 0 0 0 1.77 1.29l6.77 2.2a3.56 3.56 0 0 0 2.19 0l6.76-2.2a3.5 3.5 0 0 0 1.78-1.29l4.18-5.75a3.56 3.56 0 0 0 .69-2.09V11.5a3.51 3.51 0 0 0-.69-2.08z"></path>
                              <path fill="#fff" d="M20.68 8.14l2.37 3.27 1.43-.46-2.92-4.02-.88 1.21zm2.92 9.02l1.43.46v-4.97l-1.43.46v4.05zM8.31 8.14l-.89-1.21-2.92 4.02 1.43.46 2.38-3.27zm-4.36 4.51v4.97l1.43-.46v-4.05l-1.43-.46zm16.39 9.93a1.09 1.09 0 0 1-.57.42l-4.38 1.43v1.5l4.82-1.57a2.59 2.59 0 0 0 1.29-.94l3-4.1-1.43-.46zm-6.74 1.85L9.22 23a1.11 1.11 0 0 1-.58-.42l-2.71-3.72-1.43.46 3 4.1a2.61 2.61 0 0 0 1.28.94l4.83 1.57zm.54-18.76a1 1 0 0 1 .35-.06 1.13 1.13 0 0 1 .36.06l4.38 1.42.88-1.21-4.82-1.57a2.73 2.73 0 0 0-.8-.13 2.62 2.62 0 0 0-.79.13L8.87 5.88l.88 1.21zm3.94 15.25a1.65 1.65 0 0 0 .81-.59L20.55 18l-1.43-.46-1.39 1.91a.15.15 0 0 1-.09.07l-2.25.73-.84.27h-.12l-.83-.27-2.25-.73a.17.17 0 0 1-.1-.07l-1.39-1.87-1.43.42 1.67 2.29a1.6 1.6 0 0 0 .81.59l2.69.88.39.12a1.45 1.45 0 0 0 .5.08 1.42 1.42 0 0 0 .5-.08l.4-.12zm3.02-7.41a1.63 1.63 0 0 0-.31-.95l-.24-.33-1.42-2-.24-.33a1.59 1.59 0 0 0-.81-.59l-.4-.13L15 8.35a1.42 1.42 0 0 0-.5-.08 1.45 1.45 0 0 0-.5.08l-2.69.87-.39.13a1.55 1.55 0 0 0-.81.59l-.25.33-1.42 2-.24.33a1.63 1.63 0 0 0-.31.95v2.83l1.43-.46v-2.41a.15.15 0 0 1 0-.11l.51-.71.88-1.2.51-.71a.17.17 0 0 1 .1-.07l.83-.27 2.25-.73h.12l2.25.73.84.27a.15.15 0 0 1 .09.07l.52.71.87 1.2.52.71a.2.2 0 0 1 0 .11v2.37l1.43.46v-2.83z"></path>
                              <path fill="#fff" d="M12.06 14.14a.71.71 0 0 0-.12.37v1.25a.71.71 0 0 0 .12.37l.44.59.3.42a.65.65 0 0 0 .31.23l.49.15.7.23a.62.62 0 0 0 .38 0l.71-.23.48-.15a.68.68 0 0 0 .32-.23l.3-.42.43-.59a.63.63 0 0 0 .12-.37v-1.25a.63.63 0 0 0-.12-.37l-.3-.41-.13-.18-.3-.42a.62.62 0 0 0-.32-.23l-.7-.22-.49-.16a.62.62 0 0 0-.38 0l-.49.16-.7.22a.59.59 0 0 0-.31.23l-.3.42-.14.18zM35.25 10a5.89 5.89 0 0 1 6.06-6 5.6 5.6 0 0 1 5.17 3l-3.15 1.78a2.21 2.21 0 0 0-2.07-1.38 2.27 2.27 0 0 0-2.13 2.49 2.25 2.25 0 0 0 2.13 2.53A2.34 2.34 0 0 0 43.41 11l3.15 1.77a5.75 5.75 0 0 1-5.39 3.08A5.82 5.82 0 0 1 35.25 10zm12.21-5.78H53a5.56 5.56 0 0 1 4.11 1.31 3.58 3.58 0 0 1 1 2.7 3.69 3.69 0 0 1-2.25 3.49l2.66 3.88h-4.28l-2.15-3.26h-.82v3.26h-3.81zm5.46 5.43c.91 0 1.47-.41 1.47-1.11 0-.74-.57-1.09-1.45-1.09h-1.67v2.2zm9.18 1.94l-4.3-7.37h4.27L64 8l2-3.75h4.22l-4.3 7.32v4.09H62.1zm8.67-7.37h5.13c3 0 5.1 1.35 5.1 4.06 0 2.75-2.1 4.22-5.18 4.22h-1.23v3.1h-3.82zm4.84 5.59c1 0 1.63-.44 1.63-1.25 0-.83-.6-1.25-1.61-1.25h-1v2.5zm9.52-2.36h-3.36V4.22h10.52v3.23h-3.35v8.18h-3.81zM92.55 10A6.23 6.23 0 0 1 105 10a6.23 6.23 0 0 1-12.45 0zm8.6 0a2.43 2.43 0 0 0-2.39-2.57 2.41 2.41 0 0 0-2.36 2.46 2.44 2.44 0 0 0 2.39 2.58 2.41 2.41 0 0 0 2.36-2.47zm-62.9 9.42h5v1.29h-3.56v1.34h3.11v1.29h-3.11v1.39h3.58V26h-5zm11.85 0h1.33l3.1 4.06v-4.06H56V26h-1.28l-3.19-4.19V26H50.1zm12.6 3.32a3.39 3.39 0 0 1 3.46-3.41 3.63 3.63 0 0 1 2.59.9l-.91 1.11a2.41 2.41 0 0 0-1.73-.67 2 2 0 0 0-1.89 2.05 2 2 0 0 0 2 2.09 2.3 2.3 0 0 0 1.36-.39v-.94h-1.46v-1.26H69v2.87a4.31 4.31 0 0 1-2.82 1 3.3 3.3 0 0 1-3.48-3.35zM76 19.42h1.4V26H76zm8.49 0h1.34l3.09 4.06v-4.06h1.43V26h-1.23l-3.2-4.19V26h-1.43zm12.94 0h5v1.29h-3.56v1.34H102v1.29h-3.13v1.39h3.58V26h-5z"></path>
                           </symbol>
                        </svg>
                        <svg viewBox="0 0 105 30.11">
                           <use xlink:href="#crypto-engine_logo_header"></use>
                        </svg>
                     </div>
                     <h1 class="heroHeadline">
                        Handeln Sie mit Bitcoins und anderen Kryptowährungen und erzielen Sie echte Gewinne in den nächsten 24 Stunden
                     </h1>
                  </div>
               </div>
            </header>
            <div class="container">
               <div class="row hero-block">
                  <div class="col-lg-8 col-md-8 hero-video">
                     <div class="videoOuterWrap">
                        <div class="videoOverlayEnd">
                           <h1>Sign up, Invest, Earn! It&#39;s as easy as that.</h1>
                           <h2>Try it now for Free.</h2>
                        </div>
                        <div id="mainVideo">
                           <div class="videoWrapper">
                              <div class="embed-responsive embed-responsive-16by9">
                                 <div class="gtd-video-title gtd-date-current-date">
                                 </div>
                                 <div id="videoPlace">
                                    <img src="videos/poster.jpg" class="embed-responsive-item" id="video" alt="poster">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 hero-form">
                     <div class="registerForm registerFormHome" style="color: #101010;">
                        <h3 style="font-weight: 700;">ÄNDERN SIE HEUTE IHR LEBEN!</h3>
                        <div class="app" data-geo="EU" id="app1" data-url="<?php echo $thankyou ?>" data-butt="Beginnen Sie jetzt" data-type="2"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="heroAssets">
               <div class="assetsWrap">
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  BTC
                  </span>
                  <span class="assetValue">
                  +7.64%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  ETH
                  </span>
                  <span class="assetValue">
                  +3.64%
                  </span>
                  </span>
                  <span class="assetItem asset-down">
                  <span class="assetName">
                  XRP
                  </span>
                  <span class="assetValue">
                  -0.84%
                  </span>
                  </span>
                  <span class="assetItem asset-down">
                  <span class="assetName">
                  LTC
                  </span>
                  <span class="assetValue">
                  -1.01%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  NEM
                  </span>
                  <span class="assetValue">
                  +16.58%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  IOT
                  </span>
                  <span class="assetValue">
                  +8.32%
                  </span>
                  </span>
                  <span class="assetItem asset-down">
                  <span class="assetName">
                  XMR
                  </span>
                  <span class="assetValue">
                  -2.63%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  ZEC
                  </span>
                  <span class="assetValue">
                  +9.05%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  BTC
                  </span>
                  <span class="assetValue">
                  +7.64%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  ETH
                  </span>
                  <span class="assetValue">
                  +3.64%
                  </span>
                  </span>
                  <span class="assetItem asset-down">
                  <span class="assetName">
                  XRP
                  </span>
                  <span class="assetValue">
                  -0.84%
                  </span>
                  </span>
                  <span class="assetItem asset-down">
                  <span class="assetName">
                  LTC
                  </span>
                  <span class="assetValue">
                  -1.01%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  NEM
                  </span>
                  <span class="assetValue">
                  +16.58%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  IOT
                  </span>
                  <span class="assetValue">
                  +8.32%
                  </span>
                  </span>
                  <span class="assetItem asset-down">
                  <span class="assetName">
                  XMR
                  </span>
                  <span class="assetValue">
                  -2.63%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  ZEC
                  </span>
                  <span class="assetValue">
                  +9.05%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  BTC
                  </span>
                  <span class="assetValue">
                  +7.64%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  ETH
                  </span>
                  <span class="assetValue">
                  +3.64%
                  </span>
                  </span>
                  <span class="assetItem asset-down">
                  <span class="assetName">
                  XRP
                  </span>
                  <span class="assetValue">
                  -0.84%
                  </span>
                  </span>
                  <span class="assetItem asset-down">
                  <span class="assetName">
                  LTC
                  </span>
                  <span class="assetValue">
                  -1.01%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  NEM
                  </span>
                  <span class="assetValue">
                  +16.58%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  IOT
                  </span>
                  <span class="assetValue">
                  +8.32%
                  </span>
                  </span>
                  <span class="assetItem asset-down">
                  <span class="assetName">
                  XMR
                  </span>
                  <span class="assetValue">
                  -2.63%
                  </span>
                  </span>
                  <span class="assetItem asset-up">
                  <span class="assetName">
                  ZEC
                  </span>
                  <span class="assetValue">
                  +9.05%
                  </span>
                  </span>
               </div>
            </div>
            <div class="heroLogos">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8">
                        <div class="flex-row">
                           <img draggable="false" class="sprite-topbar-norton-logo" alt="Norton" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAAA8AQMAAACjGi33AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABBJREFUeNpjYBgFo2AUgAAAAwwAAYYaqw4AAAAASUVORK5CYII=">
                           <img draggable="false" class="sprite-topbar-mcafee-logo" alt="McAfee" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIgAAAA8AQMAAACHL2ByAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjALSAAAEOAABlqjDfwAAAABJRU5ErkJggg==">
                           <img draggable="false" class="sprite-topbar-truste-logo" alt="TrustE" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKIAAAA8AQMAAADfUPNrAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRgA8AAAUoAAGKOL5GAAAAAElFTkSuQmCC">
                           <img draggable="false" class="sprite-topbar-nasdaq-logo" alt="NASDAQ" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ0AAAA8AQMAAABGqCreAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjILhDwAE7AABJ87WUwAAAABJRU5ErkJggg==">
                           <img draggable="false" class="sprite-topbar-euronext-logo" alt="Euronext" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJcAAAA8AQMAAABRiroXAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjIKhAQAEsAABPGkVjgAAAABJRU5ErkJggg==">
                           <img draggable="false" class="sprite-topbar-tmx-logo" alt="TMX" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA8AQMAAAAJ2etLAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA5JREFUeNpjYBgFwxkAAAHgAAHUYWj7AAAAAElFTkSuQmCC">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="heroBtc">
                           <span class="btc-title">BTC price</span>
                           <div class="flex-row">
                              <div class="item btc-item">
                                 <span class="btc-logo">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 521.94 522">
                                       <path d="M514.13,324.13C479.27,464,337.66,549.05,197.81,514.19s-224.87-176.48-190-316.3S184.27-27,324.07,7.81,549,184.31,514.12,324.13Z" fill="#f7931a"/>
                                       <path d="M376.05 223.82c5.19-34.73-21.25-53.4-57.41-65.85l11.73-47-28.63-7.13-11.42 45.8q-11.44-2.81-22.94-5.4l11.5-46.11L250.25 91l-11.72 47-18.29-4.3v-.15l-39.49-9.86-7.62 30.59 20.8 5.17c11.6 2.89 13.69 10.57 13.34 16.65l-13.36 53.6a24 24 0 0 1 3 .95l-3-.75-18.74 75.1c-1.42 3.52-5 8.81-13.13 6.8.29.42-20.81-5.19-20.81-5.19L127 339.35l37.27 9.3 20.41 5.26-11.84 47.59 28.61 7.13 11.73-47.08 22.82 5.93-11.7 46.85 28.63 7.14L264.79 374c48.83 9.24 85.55 5.51 101-38.65 12.45-35.56-.62-56.07-26.32-69.46 18.71-4.32 32.81-16.63 36.57-42.05zm-65.44 91.74c-8.85 35.56-68.72 16.35-88.14 11.52l15.73-63c19.41 4.81 81.66 14.4 72.41 51.48zm8.86-92.24c-8.08 32.33-57.91 15.9-74.08 11.87L259.65 178c16.17 4 68.23 11.54 59.82 45.29z" fill="#fff"/>
                                    </svg>
                                 </span>
                              </div>
                              <div class="item flex-row">
                                 <span>01/2017</span>
                                 <strong>
                                 $1000
                                 </strong>
                              </div>
                              <div class="item flex-row">
                                 <span class="btc-date"></span>
                                 <strong class="btc-rise"></strong>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="heroTrading">
            <div class="container deviceBlock">
               <div class="row">
                  <div class="col-md-8 heroTrading--text">
                     <h1>
                        Melden Sie sich jetzt an und machen Sie sich bereit für den nächsten Bitcoin-Boom!
                     </h1>
                     <p class="lead">
                     CryptoEngine gibt Ihnen die Möglichkeit, beim nächsten Bitcoin-Boom ein Vermögen zu verdienen. Mit unserer Echtzeit-Handelsplattform können Sie riesige Gewinne aus den Kryptowährungsmärkten erzielen, und bei dem wieder aufkommenden Interesse prognostizieren Experten, dass die Preise Rekordniveaus erreichen werden. Werden Sie einer der nächsten Bitcoin-Millionäre sein? Melden Sie sich noch heute an und machen Sie es möglich.
                     </p>
                  </div>
                  <div class="col-md-4">
                     <div class="levitationImg">
                     </div>
                  </div>
               </div>
            </div>
            <div class="container mediaCoverage">
               <h2>Berichterstattung der Medien</h2>
               <div class="row">
                  <div class="col-sm-4">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 396.9 64.4">
                        <title>Express</title>
                        <path fill="#fff" d="M299.3 62.2a36.7 36.7 0 0 1-16-10.9l11.5-7.4s8.2 7.5 18 7.5c6.6 0 10.4-2.4 10.4-6.9 0-7.5-16.6-6.3-24.3-9.4-8.7-3.5-12.9-8.7-12-17.2.9-7.7 5.4-12.6 12.7-15.6a34.4 34.4 0 0 1 38.5 9.9l-11.3 8s-5.1-8-16.9-8c-4 0-7.7 2.5-7.7 6.4 0 7.2 15 6.4 24 9.8 5.9 2.2 11.6 6 12.3 13 1 8.2-2.6 14-9.5 18.5a36.3 36.3 0 0 1-29.7 2.3zm-70.4-.2h-17.2l-11.6-21H191v20.8h-15V1.7h31c13 0 20.5 8.9 20.5 19.2 0 13.1-11.8 17.7-11.8 17.7zm-37.7-32.9h13.2c2 0 8-1.1 8-8 0-4.6-3-7.5-8-7.5h-13.2zM279.7 62h-46.5V2.2h44.5V14H249v11h26.5v11.5H249V50h30.7zm-233.3-.1H0V2.3h43.8v11.6H15.3v10.5h26.8v11.8H15.4V50h31zm22.8.1H50.6l23-32.2L54 2.4h18.6l10.6 17.4L93.8 2.2H112L92.6 29.8l22.7 32H96.5L83.1 40.2zm50.7-.2V2h32.4c12.8 0 19.4 8.7 19.4 19.7 0 16.8-14 21.3-22.6 21.3h-14v18.8zM135.2 31h13.2c4 0 8.3-2.8 8.3-8.7s-4-8.3-8.3-8.3h-13.2zm222.3 31.2a36.8 36.8 0 0 1-16-10.9L353 44s8.2 7.5 18 7.5c6.6 0 10.4-2.4 10.4-6.9 0-7.5-16.6-6.3-24.3-9.4-8.7-3.5-12.9-8.7-12-17.2.9-7.7 5.4-12.6 12.7-15.6a34.4 34.4 0 0 1 38.5 9.9l-11.3 8s-5.2-8-17-8c-4 0-7.6 2.5-7.6 6.4 0 7.2 15 6.4 24 9.8 5.8 2.2 11.6 6 12.3 13 1 8.2-2.6 14-9.5 18.5a36.2 36.2 0 0 1-29.7 2.3z"/>
                     </svg>
                     <p>Viele ermutigende Signale sind für alle sichtbar – gesunde grüne Anstiege, unerwartete Markterholungen und überraschende Unterstützung.</p>
                  </div>
                  <div class="col-sm-4">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 379.4 99.3">
                        <title>Forbes</title>
                        <path fill="#fff" d="M36 9.3h8.6c10 0 11.5.2 15 1.9 5.1 2.5 8.8 7.4 12 16 1.4 3.4 1.3 3.4 4.3 2.5l1.9-.6-.2-12.6c0-6.9-.2-13-.3-13.6L77 1.8l-37.7-.1H1L0 2v2.3l.2 2.2 2.8.4c3.7.4 6 1.5 7.3 3.4 3 4.3 3.5 10.2 3.5 38.2 0 29.9-.7 37.1-3.5 40.9-1.5 1.9-2.7 2.5-6 3.2-4.4.8-4.3.7-4.3 3 0 1.2.2 1.9.4 2 .5.2 48.6.2 49.1 0s.7-3.8 0-4.2a26.4 26.4 0 0 0-3.6-.7 24.4 24.4 0 0 1-4.2-1c-3.2-1.4-5-5.2-5.6-12-.5-5-.8-14-.8-20.7v-6.1h3c6.2.2 9.4.6 10.7 1.2 2.8 1.2 5.1 4.7 6.3 9.6l.6 2.5 2.2.1 2.3.1V33.5l-2.3.1H56l-.6 2.7c-1.3 5-3.3 8-6.4 9.5a12 12 0 0 1-5 .9l-6 .2h-2.7v-8.1c0-8.1.4-25.4.7-28z"/>
                        <path fill="#fff" d="M134.5 57.4c-1.4-12-6.5-21-15-26a38 38 0 0 0-33.9-.7 33 33 0 0 0-16 19 48.8 48.8 0 0 0 0 28 30.6 30.6 0 0 0 7.9 13.1A29.6 29.6 0 0 0 94.3 99a73 73 0 0 0 12.2 0 37 37 0 0 0 4.5-1 32.5 32.5 0 0 0 23-25.9 63.3 63.3 0 0 0 .5-14.7zm-30.3 36.3c-7.5 2.2-12.8-5-15-19.8-.6-4.8-.6-17.9 0-23.4 1.6-12 5.2-18 11-18 2.7 0 4.2.7 6.2 2.7 4.9 5 7.2 14.3 7.2 29a54 54 0 0 1-3.8 24.3 11.3 11.3 0 0 1-5.6 5.2zM377.6 67c-2.3-4.5-6.6-7.7-15.4-11.4-7.2-3-10.8-5-13-7.5-1.9-2-2.4-3.5-2.2-6.5a8.7 8.7 0 0 1 2.5-6.1 8.9 8.9 0 0 1 8.8-2.4c5.9 1.2 9.7 5.3 13 14 1 3 1.2 3.1 3.3 2.3l1.3-.4v-3.6l-.2-9-.2-5.6-1-.5a56.3 56.3 0 0 0-22.4-3c-7.6.6-13.2 3-17.5 7.5a20 20 0 0 0-5.8 15.8c.3 5.1 1.8 8.8 5 12 2.8 3 5.3 4.4 12.3 7.1 11.3 4.5 14.3 7 14.3 12.5a9.6 9.6 0 0 1-7 9.6 18 18 0 0 1-7.7 0c-5.6-1.5-10-6.4-13.6-15.4l-1-2.3h-1a6 6 0 0 0-1.9.4l-.8.3.1 4 .3 10.2.1 6.3 1.3.5a75 75 0 0 0 15.2 3.3h7.3c6 0 6.4 0 9.4-.8 9-2.4 14.7-7.3 17.2-14.8a17.1 17.1 0 0 0 1-6.5c.2-4.6-.2-7-1.7-10z"/>
                        <path fill="#fff" d="M183.7 27a15.4 15.4 0 0 0-7.5 1.5A24.5 24.5 0 0 0 165 39.8l-1 1.8.2-3.1.2-7.2.1-4h-.6c-.9 0-28 5.4-28.7 5.7-.6.2-.6.5-.6 1.8s0 1.5.6 1.6l2.7.6c2.4.4 3.1.8 4.1 2 1.8 2.5 2.2 6.7 2.2 24.7 0 14.7-.3 22-1 24.3-.9 2.8-2.4 4.2-5 4.7l-2.5.5-1 .2-.1 2c0 1.2 0 2 .3 2s9.4.2 20.5.2h20.2v-2.2a5.4 5.4 0 0 0 0-2.1 40.4 40.4 0 0 1-7.2-1c-2.3-1-3.4-3-3.8-7.2-.6-4.8-1-17-.8-26.8s.2-10.1.8-10.8c1.5-1.5 5.2-2.8 8.5-2.8a19 19 0 0 1 8.3 2.1 11.1 11.1 0 0 0 3 1.1c.3-.1 7-17.6 7-18.4-.1-1.3-3.9-2.5-7.6-2.5zm125.1 2.8c-7.5-3.8-19-3.5-27.5.6a32 32 0 0 0-16.6 19.7 38.9 38.9 0 0 0-2 14.8 39.4 39.4 0 0 0 .7 7.8 32.4 32.4 0 0 0 26.4 26.1 51.3 51.3 0 0 0 12.8 0 34.8 34.8 0 0 0 12.3-4.7c3.9-2.6 7.8-6.5 7.8-7.7 0-.7-1.3-2.4-2-2.4a9.5 9.5 0 0 0-2.3 1.2 20.8 20.8 0 0 1-12.2 3.4c-6.9 0-11.2-1.7-15.6-6a17.5 17.5 0 0 1-3.7-5 33.8 33.8 0 0 1-3.6-14.7v-2.4h20.1l20.2-.1.1-1.4a35.6 35.6 0 0 0-.2-4.3c-1.3-12.3-6.2-20.7-14.7-25zm-20.3 24.8l-5.1.1v-1a32.5 32.5 0 0 1 .4-3.7c1.7-11 5.8-17.5 10.9-17.5 4.7 0 7.6 6.5 8.2 18.3l.2 3.4-4.7.2-9.9.2z"/>
                        <path fill="#fff" d="M235.7 28.5a24.3 24.3 0 0 0-6.2-.3 27.5 27.5 0 0 0-11.4 2.5l-2.3 1V15.8c.2-12.2.1-15.8-.1-15.8-1 0-28.8 5.3-29 5.5s-.4.8-.3 1.7c0 1.6 0 1.4 3.3 2.2a9.6 9.6 0 0 1 2.7 1c1 .8 2 2.5 2.7 5 .5 2 .6 3.4.8 16.8.2 13.6.2 27.7-.2 53.4l-.1 10.6 2 .5c2.9.6 11.1 2 13.8 2.3a101.6 101.6 0 0 0 16.2-.1 33 33 0 0 0 26.9-20.7 50.3 50.3 0 0 0 2.7-11.2 65.5 65.5 0 0 0-.5-15.3c-2.7-12.5-10.5-21-21-23.2zM218 93.6c-1.2 0-1.4-.2-1.6-.8-.4-.9-.8-32.9-.6-45.6l.1-10 1.8-.6a15.3 15.3 0 0 1 4.3-.5 7.3 7.3 0 0 1 4.5 1c4.7 2.3 8 8 9.5 16.8a80.6 80.6 0 0 1 0 16.1c-1.2 9.5-4.3 17.2-8.5 21a10.2 10.2 0 0 1-5.1 2.6 13 13 0 0 1-4.6 0z"/>
                     </svg>
                     <p>
                        Was Bitcoin und Krypto jetzt brauchen, sind die Werkzeuge, die online und in der realen Welt eingesetzt werden können.
                     </p>
                  </div>
                  <div class="col-sm-4">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 438.5 87.4">
                        <title>ABC News</title>
                        <path fill="#fff" d="M135 85.6V1h17.7l34 61.5V1h15v84.6h-18.4L150 26v59.6zM209.2 85.6V1h51.5l-1.8 12.6h-34.7v21.9h33.5v12.9h-33.5v24.3h36.7v12.9zM266 1h16l15.4 67h.5l15.6-67H328l16.3 67h.5l14.8-67h16.1l-21.5 84.6h-17.9l-15.4-59-15.3 59h-18zM375 76.8l7.5-11.5 1.2 1 3.4 2.2a44.8 44.8 0 0 0 5.2 2.7 41.7 41.7 0 0 0 6.6 2.2 32.3 32.3 0 0 0 7.8 1q7.7 0 12-3.2a10.2 10.2 0 0 0 4.5-8.7 8.3 8.3 0 0 0-1.6-5 13 13 0 0 0-4-3.6 41.3 41.3 0 0 0-6-2.9l-7.2-2.6-7.4-2.8a47.6 47.6 0 0 1-7.1-3.4 32.6 32.6 0 0 1-6-4.5 18 18 0 0 1-4.2-6.2 21 21 0 0 1-1.5-8.1q0-11.5 7.9-17.4t21-6a50.7 50.7 0 0 1 9.1.9 57.9 57.9 0 0 1 8.3 2.1q3.6 1.2 6.5 2.4l3.6 1.6-5.9 11.8-1.3-.6a70.2 70.2 0 0 0-8.8-3.2 38.5 38.5 0 0 0-11.3-2q-14 0-14 9.6a7.6 7.6 0 0 0 1.6 4.7 12.2 12.2 0 0 0 4.1 3.4 45.7 45.7 0 0 0 6 2.6l7.1 2.4 7.5 2.5a43.3 43.3 0 0 1 7.2 3.4 32.2 32.2 0 0 1 6 4.4 17.6 17.6 0 0 1 4.1 6.3 22.1 22.1 0 0 1 1.6 8.4 28.2 28.2 0 0 1-2.5 11.6 22 22 0 0 1-6.5 8.4 30.2 30.2 0 0 1-9.8 5 41.8 41.8 0 0 1-12.3 1.7 57.8 57.8 0 0 1-11.2-1 47.3 47.3 0 0 1-9.1-2.7q-3.7-1.6-6.6-3.1a31 31 0 0 1-4.2-2.7z"/>
                        <g fill="#fff">
                           <path d="M16.5.3a16.5 16.5 0 0 1 13 6c1.7 1.6 4.6 9.1 4.6 9.1l17.7 47.2c2.3 5.7 9 6 11 .4l5.6-14.9L77.7 73A23.2 23.2 0 0 1 45 83.3a23.6 23.6 0 0 1-9.3-11.6L17 19.3V67l7-20.1L32.9 72a19.2 19.2 0 0 1-10.3 12.9 17.1 17.1 0 0 1-16.3-1.5C1.5 80 .2 75.7 0 68.3V16.7A17.4 17.4 0 0 1 10.9 1.4a13.8 13.8 0 0 1 5.7-1z"/>
                           <path d="M97.8 86.3a16.5 16.5 0 0 1-13.1-6 48 48 0 0 1-4.6-9.1L62.5 24c-2.3-5.7-9.1-6.1-11.1-.4l-5.5 14.9-9.4-24.8A23 23 0 0 1 50.7 1.3a23 23 0 0 1 18.6 2c1.8 1.1 6.3 4.1 9.4 11.6l18.6 52.4V19.6l-7 20.2-9-25.2A19.2 19.2 0 0 1 91.8 1.8 17.2 17.2 0 0 1 108 3.1c4.8 3.5 6 7.7 6.3 15.1V70a17.4 17.4 0 0 1-10.9 15.3 13.9 13.9 0 0 1-5.6 1z"/>
                        </g>
                     </svg>
                     <p>
                        Kryptowährungen werden in der Zukunft der persönlichen Finanzen eine zentrale Rolle spielen.
                     </p>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="chartWrapper" id="btc-chart">
                  <div class="chart-title">
                     BTC
                  </div>
                  <div class="chart-axis">
                     <span class="chart-year start">
                     2015
                     </span>
                     <span class="chart-year">
                     2016
                     </span>
                     <span class="chart-year">
                     2017
                     </span>
                     <span class="chart-year end">
                     2018
                     </span>
                  </div>
                  <div class="chartInnerWrapper">
                     <div class="arrowIndicator">
                     </div>
                     <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="3 0 243.52 94.97">
                        <defs>
                           <clipPath id="clip-path" transform="translate(0 -3.19)">
                              <rect class="cls-1" x="1.25" width="249.02" height="98.04" />
                           </clipPath>
                        </defs>
                        <title>BTC</title>
                        <g id="chart">
                           <g class="cls-2">
                              <g id="chart-group">
                                 <path class="cls-3" fill="#daeeba" id="chart-shape" d="M247.5 98.5h-253v-6.4L-3 92l2.5-.1 3.1.2 2.5-.1 2.5.1 2.5-.1h7.5l2.5-.1 2.5-.1h5l2.5.1 2.5-.2 3.2-.4 2.5-.1 2.5-.7 2.5.4 2.5-.1 2.5.1h7.5l2.5.3h2.5l2.5.1h3.1l2.5-.1 2.5-.2 2.5.1 2.5.1 2.5-.1h2.5l2.5-.1 2.5-.1 2.5-.3 2.5.1h2.5l2.5-.2h3.1l2.5-.1h2.5l2.5-.1 2.5-.5 2.5-.3 2.5.3 2.5.4 2.5-.5h2.5l2.5-.5 2.5.1 2.5-.2 3.1-.5 2.5-.5 2.5.4 2.5.9 2.5.1 2.5-.6 2.5-.4h2.5l2.5-.5 2.5-.3 2.5-1 2.5-1 2.5-1.2h3.2l2.5-2.3 2.5-1.6 2.5 1.2 2.5.3 2.5.7 2.5-.7 2.5 2.7 2.5-4 2.5.6 2.5-2.5 2.5-2.9 3.1-1.3 2.5-.9 2.5-1.1 2.5 1.2 2.5 2.9 2.5-.4 2.5-2.7 2.5-.3 2.5-6.4 2.5-.9 2.5 1.3 2.5-7.7 2.5 4.9 3.1-6.7 2.5-4.5 2.5-10 2.5-18.5 2.5-20.7 2.5 13.7 2.5 9L247 9.8z" />
                                 <g stroke-linejoin="round" id="chart-line" class="cls-4">
                                    <path vector-effect="non-scaling-stroke" fill="none" stroke="#337ab7" stroke-width="2" d="M-300-294" />
                                    <path vector-effect="non-scaling-stroke" fill="none" stroke="#661066" stroke-linecap="round" stroke-miterlimit="10" d="M-5.5 92.1L-3 92l2.5-.1 3.1.2 2.5-.1 2.5.1 2.5-.1h7.5l2.5-.1 2.5-.1h5l2.5.1 2.5-.2 3.2-.4 2.5-.1 2.5-.7 2.5.4 2.5-.1 2.5.1h7.5l2.5.3h2.5l2.5.1h3.1l2.5-.1 2.5-.2 2.5.1 2.5.1 2.5-.1h2.5l2.5-.1 2.5-.1 2.5-.3 2.5.1h2.5l2.5-.2h3.1l2.5-.1h2.5l2.5-.1 2.5-.5 2.5-.3 2.5.3 2.5.4 2.5-.5h2.5l2.5-.5 2.5.1 2.5-.2 3.1-.5 2.5-.5 2.5.4 2.5.9 2.5.1 2.5-.6 2.5-.4h2.5l2.5-.5 2.5-.3 2.5-1 2.5-1 2.5-1.2h3.2l2.5-2.3 2.5-1.6 2.5 1.2 2.5.3 2.5.7 2.5-.7 2.5 2.7 2.5-4 2.5.6 2.5-2.5 2.5-2.9 3.1-1.3 2.5-.9 2.5-1.1 2.5 1.2 2.5 2.9 2.5-.4 2.5-2.7 2.5-.3 2.5-6.4 2.5-.9 2.5 1.3 2.5-7.7 2.5 4.9 3.1-6.7 2.5-4.5 2.5-10 2.5-18.5 2.5-20.7 2.5 13.7 2.5 9L247 9.8" />
                                    <path vector-effect="non-scaling-stroke" fill="none" stroke="#337ab7" stroke-width="1.1" d="M-190-39" />
                                 </g>
                              </g>
                           </g>
                        </g>
                     </svg>
                  </div>
               </div>
            </div>
         </section>
         <section id="howToStart">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-md-offset-3">
                     <h1 class="sectionHeadline">
                        Ein größerer, besserer Bitcoin-Boom ist in greifbarer Nähe. Verpassen Sie ihn nicht und melden Sie sich noch heute bei CryptoEngine an.
                     </h1>
                  </div>
                  <div class="col-md-9 col-md-offset-3">
                     <div class="container-fluid">
                        <div class="row steps-wrap">
                           <div class="col-sm-4 col-xs-12">
                              <div class="step-head">SCHRITT 1</div>
                              <div class="step">
                                 <h2>REGISTRIEREN</h2>
                                 <p class="lead">
                                    Dank des unglaublich effizienten Registrierungssystems von CryptoEngine dauert die Registrierung Ihres Kontos nur wenige Minuten. Füllen Sie einfach Ihre Daten aus und wir erledigen den Rest.
                                 </p>
                              </div>
                           </div>
                           <div class="col-sm-4 col-xs-12">
                              <div class="step-head">SCHRITT 2</div>
                              <div class="step">
                                 <h2>
                                    INVESTIEREN
                                 </h2>
                                 <p class="lead">
                                    Einer unserer Broker wird Sie kontaktieren, um Ihnen zu erklären was Sie tun müssen, um Ihre erste Investition zu tätigen. Der Mindestberag für eine Einzahlung beträgt 250 €.
                                 </p>
                              </div>
                           </div>
                           <div class="col-sm-4 col-xs-12">
                              <div class="step-head">SCHRITT 3</div>
                              <div class="step">
                                 <h2>
                                    HANDELN
                                 </h2>
                                 <p class="lead">
                                    Sobald Sie Ihr Konto durch Einzahlen Ihres Geldes aktiviert haben, haben Sie die Möglichkeit, mit den größten Kryptowährungen der Welt zu handeln.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <p>
                        <a href="#about" class="btn btn-primary btn-extra">Hier registrieren </a>
                     </p>
                  </div>
               </div>
            </div>
         </section>
         <section id="aboutTrading">
            <div class="companies">
               <div class="container">
                  <h1 class="sectionHeadline">
                  Mit CryptoEngine können Sie mit Hunderten von Kryptowährungen handeln, einschließlich:
                  </h1>
                  <div class="row">
                     <div class="col-md-3 col-sm-6">
                        <div class="coin">
                           <div class="coin-logo">
                              <img draggable="false" src="data:image/svg+xml;base64,PHN2ZyBpZD0iZXRoZXJldW0iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDIwOC42IDgxLjkiPjxwYXRoIGQ9Ik03NC4zIDQzLjljMCAuMy0uMy42LS42LjZINjIuNGMuMyAyLjggMi40IDUuNCA1LjQgNS40IDIgMCAzLjUtLjggNC43LTIuNC4xLS4yLjMtLjMuNS0uMy4zIDAgLjYuMi42LjZsLS4xLjNjLTEuMSAyLTMuNCAzLTUuNiAzLTMuOCAwLTYuNS0zLjQtNi41LTcuMSAwLTMuNyAyLjctNy4xIDYuNS03LjFzNi40IDMuMyA2LjQgN20tMS4yLS42Yy0uMi0yLjgtMi40LTUuNC01LjQtNS40cy01LjEgMi42LTUuNCA1LjRoMTAuOHptMTUtNi4yYy4zIDAgLjYuMy42LjZzLS4yLjYtLjYuNmgtM3YxMS45YzAgLjMtLjIuNi0uNi42YS42LjYgMCAwIDEtLjYtLjZ2LTEySDgxYy0uMyAwLS42LS4yLS42LS42IDAtLjMuMi0uNi42LS42aDIuOXYtNC40YzAtLjMuMi0uNi42LS42LjMgMCAuNi4yLjYuNlYzN2wzIC4xem0xOC42IDUuOHY3LjJjMCAuMy0uMy42LS42LjZzLS42LS4yLS42LS42di03LjJjMC0yLjQtMS40LTQuOS00LjEtNC45LTMuNSAwLTUgMy00LjggNi4ydjUuOWMwIC4zLS4yLjYtLjYuNi0uMyAwLS42LS4yLS42LS42VjI2LjNjMC0uMy4yLS42LjYtLjYuMyAwIC42LjMuNi42djEzLjRjMS0xLjcgMi43LTIuOSA0LjgtMi45IDMuNCAwIDUuMyAzIDUuMyA2LjFtMjAuMyAxYzAgLjMtLjMuNi0uNi42aC0xMS4zYy4zIDIuOCAyLjQgNS40IDUuNCA1LjQgMiAwIDMuNS0uOCA0LjctMi40LjEtLjIuMy0uMy41LS4zLjMgMCAuNi4yLjYuNmwtLjEuM2MtMS4xIDItMy40IDMtNS42IDMtMy44IDAtNi41LTMuNC02LjUtNy4xIDAtMy43IDIuNy03LjEgNi41LTcuMSAzLjctLjEgNi40IDMuMyA2LjQgN20tMS4yLS42Yy0uMi0yLjgtMi40LTUuNC01LjQtNS40LTMgMC01LjEgMi42LTUuNCA1LjRoMTAuOHptMTUuMi01LjdjMCAuNC0uMi42LS41LjYtMy4zLjUtNC44IDMuMi00LjggNi40VjUwYzAgLjMtLjIuNi0uNi42LS4zIDAtLjYtLjItLjYtLjZWMzcuN2MwLS4zLjItLjYuNi0uNi4zIDAgLjYuMi42LjZ2Mi41Yy45LTEuNiAyLjgtMy4xIDQuOC0zLjEuMSAwIC41LjIuNS41bTE4LjYgNi4zYzAgLjMtLjMuNi0uNi42aC0xMS4zYy4zIDIuOCAyLjQgNS40IDUuNCA1LjQgMiAwIDMuNS0uOCA0LjctMi40LjEtLjIuMy0uMy41LS4zLjMgMCAuNi4yLjYuNmwtLjEuM2MtMS4xIDItMy40IDMtNS42IDMtMy44IDAtNi41LTMuNC02LjUtNy4xIDAtMy43IDIuNy03LjEgNi41LTcuMSAzLjYtLjEgNi40IDMuMyA2LjQgN20tMS4yLS42Yy0uMi0yLjgtMi40LTUuNC01LjQtNS40cy01LjEgMi42LTUuNCA1LjRoMTAuOHptMTkuNS01LjZ2MTIuNGMwIC4zLS4zLjYtLjYuNnMtLjYtLjItLjYtLjZ2LTIuNGE1LjIgNS4yIDAgMCAxLTQuNyAzLjJjLTMuNCAwLTUuMi0yLjktNS4yLTZ2LTcuM2MwLS4zLjItLjYuNi0uNi4zIDAgLjYuMy42LjZWNDVjMCAyLjQgMS40IDQuOSA0LjEgNC45IDMuOCAwIDQuNy0zLjYgNC43LTcuNXYtNC42YzAtLjMuMi0uNi42LS42LjIgMCAuNS4yLjUuNW0yOC43IDUuMXY3LjNjMCAuMy0uMy42LS42LjZzLS42LS4yLS42LS42di03LjNjMC0yLjQtMS40LTQuOC00LjEtNC44LTMuNCAwLTQuNyAzLjctNC43IDYuNXY1LjZjMCAuMy0uMy42LS42LjZzLS42LS4yLS42LS42di03LjNjMC0yLjQtMS40LTQuOC00LjEtNC44LTMuNSAwLTQuOSAyLjctNC44IDYuM3Y1LjhjMCAuMy0uMi42LS42LjYtLjMgMC0uNi0uMi0uNi0uNlYzNy43YzAtLjMuMi0uNi42LS42LjMgMCAuNi4yLjYuNnYyLjFjMS0xLjcgMi43LTIuOSA0LjgtMi45YTUgNSAwIDAgMSA0LjggMy42IDUuNiA1LjYgMCAwIDEgNS4xLTMuNmMzLjUtLjEgNS40IDIuOCA1LjQgNS45IiBmaWxsPSIjM2MzYzNiIi8&#43;PHBhdGggaWQ9IkxXUE9MWUxJTkUiIGZpbGw9IiM4YzhjOGMiIGQ9Ik0yIDQ2LjRMMjYuNSA4MVY2MC45TDIgNDYuNCIvPjxwYXRoIGlkPSJMV1BPTFlMSU5FXzFfIiBkPSJNMiA0MS43bDI0LjUgMTQuNlYzMC42TDIgNDEuNyIgZmlsbD0iIzM5MzkzOSIvPjxwYXRoIGlkPSJMV1BPTFlMSU5FXzJfIiBmaWxsPSIjOGM4YzhjIiBkPSJNMiA0MS43bDI0LjUtMTEuMVYxTDIgNDEuNyIvPjxwYXRoIGlkPSJMV1BPTFlMSU5FXzNfIiBmaWxsPSIjMzQzNDM0IiBkPSJNNTEuMSA0Ni40TDI2LjUgODFWNjAuOWwyNC42LTE0LjUiLz48cGF0aCBpZD0iTFdQT0xZTElORV80XyIgZD0iTTUxLjEgNDEuN0wyNi41IDU2LjNWMzAuNmwyNC42IDExLjEiIGZpbGw9IiMxNTE1MTUiLz48cGF0aCBpZD0iTFdQT0xZTElORV81XyIgZmlsbD0iIzM0MzQzNCIgZD0iTTUxLjEgNDEuN0wyNi41IDMwLjZWMWwyNC42IDQwLjciLz48L3N2Zz4="
                                 alt="Ethereum" class="img-responsive">
                           </div>
                           <div class="coin-name">
                              <span class="over-svg strokeW" style="width: 75.79345703125px; line-height: 1.2;height: 8.75px; position: relative;display: inline-block;">
                                 <!--?xml version="1.0"?-->
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top:0;left: 0;transform:translateY(-25%);" width="75.79345703125px" height="17.5px">
                                    <path fill="#fff" d="M8.59619140625,7.5028911389803l-4.921875,0l0,3.33251953125l5.7763671875,0l0,2.059326171875l-8.33984375,0l0-12.44140625l8.32275390625,0l0,2.076416015625l-5.75927734375,0l0,2.965087890625l4.921875,0l0,2.008056640625z M13.748779296875,1.3761821546053l0,2.27294921875l1.580810546875,0l0,1.8115234375l-1.580810546875,0l0,4.6142578125q0,0.5126953125,0.196533203125,0.73486328125t0.751953125,0.22216796875q0.41015625,0,0.726318359375-0.059814453125l0,1.871337890625q-0.726318359375,0.22216796875-1.495361328125,0.22216796875q-2.59765625,0-2.64892578125-2.623291015625l0-4.981689453125l-1.35009765625,0l0-1.8115234375l1.35009765625,0l0-2.27294921875l2.469482421875,0z M19.114990234375,4.6574321546053q0.982666015625-1.17919921875,2.469482421875-1.17919921875q3.0078125,0,3.050537109375,3.494873046875l0,5.921630859375l-2.469482421875,0l0-5.853271484375q0-0.794677734375-0.341796875-1.1749267578125t-1.136474609375-0.3802490234375q-1.085205078125,0-1.572265625,0.83740234375l0,6.571044921875l-2.469482421875,0l0-13.125l2.469482421875,0l0,4.8876953125z M30.753173828125,13.065635279605q-2.03369140625,0-3.3111572265625-1.24755859375t-1.2774658203125-3.323974609375l0-0.2392578125q0-1.392822265625,0.538330078125-2.4908447265625t1.5252685546875-1.69189453125t2.2515869140625-0.5938720703125q1.89697265625,0,2.9864501953125,1.1962890625t1.0894775390625,3.392333984375l0,1.00830078125l-5.887451171875,0q0.11962890625,0.90576171875,0.7220458984375,1.45263671875t1.5252685546875,0.546875q1.427001953125,0,2.230224609375-1.033935546875l1.21337890625,1.358642578125q-0.555419921875,0.7861328125-1.50390625,1.2261962890625t-2.10205078125,0.4400634765625z M30.47119140625,5.4777446546053q-0.73486328125,0-1.1920166015625,0.49560546875t-0.5853271484375,1.41845703125l3.43505859375,0l0-0.196533203125q-0.01708984375-0.8203125-0.4443359375-1.2689208984375t-1.21337890625-0.4486083984375z M41.15234375,5.9648052014803q-0.504150390625-0.068359375-0.888671875-0.068359375q-1.4013671875,0-1.837158203125,0.948486328125l0,6.0498046875l-2.469482421875,0l0-9.24560546875l2.332763671875,0l0.068359375,1.102294921875q0.743408203125-1.273193359375,2.059326171875-1.273193359375q0.41015625,0,0.76904296875,0.111083984375z M46.595458984375,13.065635279605q-2.03369140625,0-3.3111572265625-1.24755859375t-1.2774658203125-3.323974609375l0-0.2392578125q0-1.392822265625,0.538330078125-2.4908447265625t1.5252685546875-1.69189453125t2.2515869140625-0.5938720703125q1.89697265625,0,2.9864501953125,1.1962890625t1.0894775390625,3.392333984375l0,1.00830078125l-5.887451171875,0q0.11962890625,0.90576171875,0.7220458984375,1.45263671875t1.5252685546875,0.546875q1.427001953125,0,2.230224609375-1.033935546875l1.21337890625,1.358642578125q-0.555419921875,0.7861328125-1.50390625,1.2261962890625t-2.10205078125,0.4400634765625z M46.3134765625,5.4777446546053q-0.73486328125,0-1.1920166015625,0.49560546875t-0.5853271484375,1.41845703125l3.43505859375,0l0-0.196533203125q-0.01708984375-0.8203125-0.4443359375-1.2689208984375t-1.21337890625-0.4486083984375z M57.33642578125,11.954795435855q-0.914306640625,1.11083984375-2.529296875,1.11083984375q-1.48681640625,0-2.2686767578125-0.8544921875t-0.7989501953125-2.503662109375l0-6.058349609375l2.469482421875,0l0,5.972900390625q0,1.444091796875,1.31591796875,1.444091796875q1.256103515625,0,1.72607421875-0.87158203125l0-6.54541015625l2.47802734375,0l0,9.24560546875l-2.32421875,0z M63.907470703125,3.6491313733553l0.076904296875,1.033935546875q0.982666015625-1.204833984375,2.657470703125-1.204833984375q1.785888671875,0,2.452392578125,1.409912109375q0.97412109375-1.409912109375,2.777099609375-1.409912109375q1.50390625,0,2.23876953125,0.8758544921875t0.73486328125,2.6361083984375l0,5.904541015625l-2.47802734375,0l0-5.89599609375q0-0.7861328125-0.3076171875-1.1492919921875t-1.085205078125-0.3631591796875q-1.11083984375,0-1.5380859375,1.0595703125l0.008544921875,6.348876953125l-2.469482421875,0l0-5.887451171875q0-0.80322265625-0.316162109375-1.162109375t-1.07666015625-0.35888671875q-1.051025390625,0-1.52099609375,0.87158203125l0,6.536865234375l-2.469482421875,0l0-9.24560546875l2.315673828125,0z"/>
                                 </svg>
                              </span>
                           </div>
                           <div class="coin-cap">
                              Marktkapitalisierung: $14.5B
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="coin">
                           <div class="coin-logo">
                              <img draggable="false" src="data:image/svg+xml;base64,PHN2ZyBpZD0iVnJzdHZhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDg5NC4xIDI2My40Ij48c3R5bGU&#43;LnN0MHtmaWxsOiNGRkZGRkY7fSAuc3Qxe2ZpbGw6dXJsKCNTVkdJRF8xXyk7fSAuc3Qye2ZpbGw6dXJsKCNTVkdJRF8yXyk7fSAuc3Qze2ZpbGw6IzE1MjU2OTt9PC9zdHlsZT48Y2lyY2xlIGNsYXNzPSJzdDAiIGN4PSIxMzEuNyIgY3k9IjEzMS43IiByPSIxMTUuMyIvPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iNjEuMTciIHkxPSIzNzEuMTIiIHgyPSIyMTguOTciIHkyPSI2MDkuOTIiIGdyYWRpZW50VHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAtMzQ2KSI&#43;PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjRjREOTMzIi8&#43;PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRTM4MjFGIi8&#43;PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic3QxIiBkPSJNMTMxLjcgMEM1OS0uMSAwIDU4LjktLjEgMTMxLjZzNTguOSAxMzEuNyAxMzEuNiAxMzEuOGM3Mi43LjEgMTMxLjctNTguOSAxMzEuOC0xMzEuNnYtLjFDMjYzLjMgNTkgMjA0LjQuMSAxMzEuNyAwem0wIDIzMy4xYy01NiAuMS0xMDEuNC00NS4zLTEwMS41LTEwMS4zLS4xLTU2IDQ1LjMtMTAxLjQgMTAxLjMtMTAxLjUgNTYtLjEgMTAxLjQgNDUuMyAxMDEuNSAxMDEuM3YuMWMwIDU2LTQ1LjMgMTAxLjMtMTAxLjMgMTAxLjR6Ii8&#43;PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSI3NzIuNDkiIHkxPSI2NiIgeDI9Ijc3Mi40OSIgeTI9IjIxNS4xMiI&#43;PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjRjREOTMzIi8&#43;PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRTM4MjFGIi8&#43;PC9saW5lYXJHcmFkaWVudD48cGF0aCBjbGFzcz0ic3QyIiBkPSJNNjgyLjUgOTguOGM4LjIuMiAxNi4yIDMuMiAyMi40IDguNi43LjYuOSAxLjYuMyAyLjRsLS4xLjEtNy4yIDcuN2MtLjcuNi0xLjcuNi0yLjUuMS0zLjMtMy03LjYtNC42LTEyLTQuNC0xMC4yIDAtMTguNCA4LjMtMTguNCAxOC40IDAgMTAuMiA4LjMgMTguNCAxOC41IDE4LjQgMi44IDAgNS42LS41IDguMi0xLjV2LTUuM2gtNS44Yy0uOS4xLTEuNi0uNi0xLjctMS41di05LjNjLS4xLS45LjYtMS42IDEuNS0xLjdoMTguNmMuOSAwIDEuNy44IDEuNyAxLjdsLjEgMjQuN2MtLjEuNi0uMyAxLjEtLjcgMS41LTYuOSAzLjktMTQuNyA2LTIyLjcgNmEzMy4wNiAzMy4wNiAwIDAgMS0zMS43LTM0LjNjLjctMTYuOSAxMy45LTMwLjUgMzAuOC0zMS42aC43em02NC4zLS4xYzE4LjItLjEgMzMgMTQuNyAzMy4xIDMyLjlzLTE0LjcgMzMtMzIuOSAzMy4xLTMzLTE0LjctMzMuMS0zMi45IDE0LjctMzMgMzIuOS0zMy4xem0wIDUxLjNjMTAuMi4xIDE4LjQtOC4xIDE4LjUtMTguM3MtOC4xLTE4LjQtMTguMy0xOC41LTE4LjQgOC4xLTE4LjUgMTguM3YuMmMuMSAxMC4xIDguMiAxOC4yIDE4LjMgMTguM3ptNDQuMS00OC43YzAtLjkuOC0xLjcgMS43LTEuN2gxMC45Yy45IDAgMS43LjggMS43IDEuN3Y0OUg4MjdjLjkgMCAxLjcuOCAxLjcgMS43djEwYzAgLjktLjggMS43LTEuNyAxLjdoLTM0LjVjLS45IDAtMS43LS44LTEuNy0xLjdsLjEtNjAuN3ptNDYuOSAwYzAtLjkuOC0xLjcgMS43LTEuN2gyMi40YzE3LjcgMCAzMi4xIDE0LjQgMzIuMSAzMi4xcy0xNC40IDMyLjEtMzIuMSAzMi4xaC0yMi40Yy0uOSAwLTEuNy0uOC0xLjctMS43di02MC44em0yMy4xIDQ4LjljMTAuNCAwIDE3LjktOC4yIDE3LjktMTguNnMtNy41LTE4LjUtMTcuOS0xOC41aC04Ljh2MzcuMWg4Ljh6Ii8&#43;PHBhdGggY2xhc3M9InN0MyIgZD0iTTE2OC45IDEyNy42YzMuOC01IDUuOS0xMS4xIDUuOS0xNy40IDAtMTQuNy0xMS4zLTI2LjktMjYtMjhWNjguNGgtMTIuOXYxMy43aC05VjY4LjRIMTE0djEzLjdIODMuMUw5MSA5Ny45aDkuMXY2NS44aC05bC03LjkgMTUuOEgxMTR2MTMuMmgxMi45di0xMy4yaDl2MTMuMmgxMi45di0xMy4yaDQuOGMxNS42LS4yIDI4LjItMTMgMjgtMjguNmEyOC40IDI4LjQgMCAwIDAtMTIuNy0yMy4zem0tMjIuMS00LjloLTMwLjlWOTcuOWgzMC45YzYuOCAwIDEyLjQgNS42IDEyLjQgMTIuNHMtNS42IDEyLjQtMTIuNCAxMi40em02LjggMTYuMmM2LjggMCAxMi40IDUuNiAxMi40IDEyLjQgMCA2LjgtNS42IDEyLjQtMTIuNCAxMi40aC0zNy43di0yNC44aDM3Ljd6bTEzMi44LTM3LjZjMC0uOS44LTEuNyAxLjctMS43aDIxLjRjMTAuOCAwIDE5LjcgNy40IDE5LjcgMTcuMSAwIDcuMS02LjMgMTIuMi0xMC42IDE0LjUgNC45IDIgMTIuMyA2LjUgMTIuMyAxNC45IDAgMTAuMy05LjEgMTcuNy0yMCAxNy43aC0yMi43Yy0uOSAwLTEuNy0uOC0xLjctMS43bC0uMS02MC44em0yMS41IDI0LjNjMy42LS4xIDYuNS0zIDYuNC02LjYgMC0zLjQtMi44LTYuMi02LjItNi4yaC03LjR2MTIuOGg3LjJ6bTEuMiAyNS4xYzMuNiAwIDYuNi0zIDYuNi02LjZ2LS4xYzAtMy43LTMuOS02LjQtNy41LTYuNGgtNy40djEzLjFoOC4zem0zMy40LTQ5LjRjMC0uOS44LTEuNyAxLjctMS43aDExYy45IDAgMS43LjggMS43IDEuN1YxNjJjMCAuOS0uOCAxLjctMS43IDEuN2gtMTFjLS45IDAtMS43LS44LTEuNy0xLjd2LTYwLjd6bTM4LjYgMTEuOEgzNjhjLS45IDAtMS43LS44LTEuNy0xLjd2LTEwYzAtLjkuOC0xLjcgMS43LTEuN2g0MC43Yy45IDAgMS43LjggMS43IDEuN3YxMGMwIC45LS44IDEuNy0xLjcgMS43aC0xMy4xdjQ5YzAgLjktLjggMS43LTEuNyAxLjdoLTExYy0uOSAwLTEuNy0uOC0xLjctMS43bC0uMS00OXptNjYuNS0xNC40YzkuMiAwIDE2IDIuOCAyMi4yIDguNS43LjcuOCAxLjguMiAyLjVsLS4xLjEtNy4yIDcuNGMtLjcuNi0xLjYuNi0yLjMgMC0zLjQtMy03LjgtNC43LTEyLjQtNC43LTEwLjQgMC0xOCA4LjYtMTggMTguOXM3LjcgMTguNiAxOC4xIDE4LjZjNC41IDAgOC44LTEuNiAxMi4zLTQuNC43LS42IDEuOC0uNiAyLjQuMWw3LjIgNy42Yy42LjcuNiAxLjgtLjEgMi41LTUuOSA1LjgtMTQgOS0yMi4zIDguOS0xOC4yLjEtMzMtMTQuNS0zMy4xLTMyLjd2LS4yYy0uMS0xOC4yIDE0LjctMzMgMzIuOS0zMy4xaC4yem02MS4zIDBjMTguMi0uMSAzMyAxNC43IDMzLjEgMzIuOXMtMTQuNyAzMy0zMi45IDMzLjFjLTE4LjIuMS0zMy0xNC43LTMzLjEtMzIuOXMxNC43LTMzIDMyLjktMzMuMXptMCA1MS4zYzEwLjIuMSAxOC40LTguMSAxOC41LTE4LjMuMS0xMC4yLTguMS0xOC40LTE4LjMtMTguNXMtMTguNCA4LjEtMTguNSAxOC4zdi4yYy4xIDEwLjEgOC4yIDE4LjIgMTguMyAxOC4zem00NS44LTUwLjRoMTFjLjkgMCAxLjcuOCAxLjcgMS43VjE2MmMwIC45LS44IDEuNy0xLjcgMS43aC0xMWMtLjkgMC0xLjctLjgtMS43LTEuN3YtNjAuN2MwLS45LjgtMS43IDEuNy0xLjd6bTI4LjUuN2MwLS45LjgtMS43IDEuNy0xLjdoMi4zbDM2LjYgMzUuMmguMXYtMzIuNmMwLS45LjgtMS43IDEuNy0xLjdoMTFjLjkgMCAxLjcuOCAxLjcgMS43djYxLjdjMCAuOS0uOCAxLjctMS43IDEuN2gtMS41Yy0uNC0uMS0uOC0uMi0xLjItLjVsLTM2LjItMzYuNGgtLjF2MzQuMmMwIC45LS44IDEuNy0xLjcgMS43SDU4NWMtLjkgMC0xLjctLjgtMS43LTEuN2wtLjEtNjEuNnpNMTMxLjcgNDJDODIuMiA0MiA0MiA4Mi4yIDQyIDEzMS43czQwLjIgODkuNyA4OS43IDg5LjcgODkuNy00MC4yIDg5LjctODkuN0E4OS44OCA4OS44OCAwIDAgMCAxMzEuNyA0MnptMCAxNzAuNGMtNDQuNiAwLTgwLjctMzYuMS04MC43LTgwLjdTODcuMSA1MSAxMzEuNyA1MXM4MC43IDM2LjEgODAuNyA4MC43YTgwLjkyIDgwLjkyIDAgMCAxLTgwLjcgODAuN3oiLz48L3N2Zz4="
                                 alt="Bitcoin Gold" class="img-responsive">
                           </div>
                           <div class="coin-name">
                              <span class="over-svg strokeW" style="width: 95.85693359375px; line-height: 1.2;height: 8.75px; position: relative;display: inline-block;">
                                 <!--?xml version="1.0"?-->
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top:0;left: 0;transform:translateY(-25%);" width="95.85693359375px" height="17.5px">
                                    <path fill="#fff" d="M1.11083984375,12.894736842105l0-12.44140625l4.35791015625,0q2.264404296875,0,3.43505859375,0.8673095703125t1.170654296875,2.5421142578125q0,0.914306640625-0.469970703125,1.6107177734375t-1.307373046875,1.0211181640625q0.95703125,0.2392578125,1.5081787109375,0.965576171875t0.5511474609375,1.77734375q0,1.79443359375-1.14501953125,2.71728515625t-3.26416015625,0.93994140625l-4.83642578125,0z M3.67431640625,7.4772563733553l0,3.358154296875l2.196044921875,0q0.90576171875,0,1.4141845703125-0.4315185546875t0.5084228515625-1.1920166015625q0-1.708984375-1.768798828125-1.734619140625l-2.349853515625,0z M3.67431640625,5.6657329358553l1.89697265625,0q1.939697265625-0.0341796875,1.939697265625-1.546630859375q0-0.845947265625-0.4913330078125-1.2176513671875t-1.5509033203125-0.3717041015625l-1.79443359375,0l0,3.135986328125z M14.722900390625,12.894736842105l-2.47802734375,0l0-9.24560546875l2.47802734375,0l0,9.24560546875z M12.099609375,1.2565532483553q0-0.555419921875,0.3717041015625-0.914306640625t1.0125732421875-0.35888671875q0.63232421875,0,1.00830078125,0.35888671875t0.3759765625,0.914306640625q0,0.56396484375-0.3802490234375,0.9228515625t-1.0040283203125,0.35888671875t-1.0040283203125-0.35888671875t-0.3802490234375-0.9228515625z M19.713134765625,1.3761821546053l0,2.27294921875l1.580810546875,0l0,1.8115234375l-1.580810546875,0l0,4.6142578125q0,0.5126953125,0.196533203125,0.73486328125t0.751953125,0.22216796875q0.41015625,0,0.726318359375-0.059814453125l0,1.871337890625q-0.726318359375,0.22216796875-1.495361328125,0.22216796875q-2.59765625,0-2.64892578125-2.623291015625l0-4.981689453125l-1.35009765625,0l0-1.8115234375l1.35009765625,0l0-2.27294921875l2.469482421875,0z M26.514892578125,11.07466848273q0.68359375,0,1.11083984375-0.3759765625t0.4443359375-0.999755859375l2.315673828125,0q-0.008544921875,0.93994140625-0.5126953125,1.7218017578125t-1.3800048828125,1.21337890625t-1.9354248046875,0.4315185546875q-1.982421875,0-3.12744140625-1.2603759765625t-1.14501953125-3.4820556640625l0-0.162353515625q0-2.13623046875,1.136474609375-3.409423828125t3.118896484375-1.273193359375q1.734619140625,0,2.7813720703125,0.9869384765625t1.0638427734375,2.6275634765625l-2.315673828125,0q-0.01708984375-0.7177734375-0.4443359375-1.1663818359375t-1.1279296875-0.4486083984375q-0.863037109375,0-1.3031005859375,0.6280517578125t-0.4400634765625,2.0379638671875l0,0.25634765625q0,1.427001953125,0.435791015625,2.05078125t1.324462890625,0.623779296875z M31.4111328125,8.1864848889803q0-1.375732421875,0.52978515625-2.452392578125t1.5252685546875-1.666259765625t2.3114013671875-0.589599609375q1.871337890625,0,3.0548095703125,1.14501953125t1.3201904296875,3.1103515625l0.01708984375,0.63232421875q0,2.127685546875-1.187744140625,3.4136962890625t-3.187255859375,1.2860107421875t-3.1915283203125-1.28173828125t-1.1920166015625-3.486328125l0-0.111083984375z M33.880615234375,8.3659282483553q0,1.31591796875,0.49560546875,2.0123291015625t1.41845703125,0.6964111328125q0.897216796875,0,1.4013671875-0.6878662109375t0.504150390625-2.2003173828125q0-1.290283203125-0.504150390625-1.99951171875t-1.41845703125-0.709228515625q-0.90576171875,0-1.4013671875,0.7049560546875t-0.49560546875,2.1832275390625z M44.296875,12.894736842105l-2.47802734375,0l0-9.24560546875l2.47802734375,0l0,9.24560546875z M41.673583984375,1.2565532483553q0-0.555419921875,0.3717041015625-0.914306640625t1.0125732421875-0.35888671875q0.63232421875,0,1.00830078125,0.35888671875t0.3759765625,0.914306640625q0,0.56396484375-0.3802490234375,0.9228515625t-1.0040283203125,0.35888671875t-1.0040283203125-0.35888671875t-0.3802490234375-0.9228515625z M48.603515625,3.6491313733553l0.076904296875,1.068115234375q0.9912109375-1.239013671875,2.657470703125-1.239013671875q1.4697265625,0,2.1875,0.863037109375t0.73486328125,2.58056640625l0,5.972900390625l-2.469482421875,0l0-5.9130859375q0-0.7861328125-0.341796875-1.1407470703125t-1.136474609375-0.3546142578125q-1.04248046875,0-1.563720703125,0.888671875l0,6.519775390625l-2.469482421875,0l0-9.24560546875l2.32421875,0z M70.49560546875,11.322471217105q-0.692138671875,0.828857421875-1.956787109375,1.2860107421875t-2.802734375,0.4571533203125q-1.614990234375,0-2.8326416015625-0.7049560546875t-1.8798828125-2.0465087890625t-0.6793212890625-3.153076171875l0-0.845947265625q0-1.86279296875,0.6280517578125-3.2257080078125t1.8115234375-2.0849609375t2.7728271484375-0.7220458984375q2.213134765625,0,3.460693359375,1.0552978515625t1.478271484375,3.0718994140625l-2.4951171875,0q-0.1708984375-1.068115234375-0.7562255859375-1.563720703125t-1.6107177734375-0.49560546875q-1.307373046875,0-1.990966796875,0.982666015625t-0.692138671875,2.92236328125l0,0.794677734375q0,1.956787109375,0.743408203125,2.95654296875t2.178955078125,0.999755859375q1.444091796875,0,2.059326171875-0.615234375l0-2.144775390625l-2.332763671875,0l0-1.888427734375l4.896240234375,0l0,4.964599609375z M72.025146484375,8.1864848889803q0-1.375732421875,0.52978515625-2.452392578125t1.5252685546875-1.666259765625t2.3114013671875-0.589599609375q1.871337890625,0,3.0548095703125,1.14501953125t1.3201904296875,3.1103515625l0.01708984375,0.63232421875q0,2.127685546875-1.187744140625,3.4136962890625t-3.187255859375,1.2860107421875t-3.1915283203125-1.28173828125t-1.1920166015625-3.486328125l0-0.111083984375z M74.49462890625,8.3659282483553q0,1.31591796875,0.49560546875,2.0123291015625t1.41845703125,0.6964111328125q0.897216796875,0,1.4013671875-0.6878662109375t0.504150390625-2.2003173828125q0-1.290283203125-0.504150390625-1.99951171875t-1.41845703125-0.709228515625q-0.90576171875,0-1.4013671875,0.7049560546875t-0.49560546875,2.1832275390625z M84.910888671875,12.894736842105l-2.47802734375,0l0-13.125l2.47802734375,0l0,13.125z M86.56005859375,8.2035747327303q0-2.161865234375,0.9698486328125-3.443603515625t2.6531982421875-1.28173828125q1.35009765625,0,2.230224609375,1.00830078125l0-4.716796875l2.47802734375,0l0,13.125l-2.230224609375,0l-0.11962890625-0.982666015625q-0.9228515625,1.153564453125-2.37548828125,1.153564453125q-1.632080078125,0-2.6190185546875-1.2860107421875t-0.9869384765625-3.5760498046875z M89.029541015625,8.3830180921053q0,1.298828125,0.452880859375,1.990966796875t1.31591796875,0.692138671875q1.14501953125,0,1.614990234375-0.965576171875l0-3.648681640625q-0.46142578125-0.965576171875-1.597900390625-0.965576171875q-1.785888671875,0-1.785888671875,2.896728515625z"/>
                                 </svg>
                              </span>
                           </div>
                           <div class="coin-cap">
                              Marktkapitalisierung: $215M
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="coin">
                           <div class="coin-logo">
                              <img draggable="false" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjgyIiBoZWlnaHQ9Ijc1Ij48cGF0aCBkPSJNMzcuMy4zNUEzNi45IDM2LjkgMCAwIDAgMi4yOCA0OC45MUgxMy4zVjE3Ljg2TDM3LjMgNDEuODVsMjMuOTktMjMuOTl2MzEuMDVoMTEuMDNBMzYuOSAzNi45IDAgMCAwIDM3LjMuMzUiIGZpbGw9IiNmNjAiLz48cGF0aCBkPSJNMjEuMzIgMzYuOXYxOS41M0g1Ljc3QTM2Ljg4IDM2Ljg4IDAgMCAwIDM3LjMgNzQuMTZjMTMuMzUgMCAyNS4wNi03LjEgMzEuNTMtMTcuNzNINTMuMjhWMzYuOUwzNy4zIDUyLjg4eiIgZmlsbD0iIzRjNGM0YyIvPjxwYXRoIGQ9Ik0yNzIuNyA0Ny43NmE5LjUyIDkuNTIgMCAwIDEtNy4wOSAzLjAxYy0yLjQ2IDAtNC42My0uNzctNi41My0yLjMyLTIuNDUtMS45OC0zLjY3LTQuNjgtMy42Ny04LjA5IDAtMy4wNS45Ny01LjU3IDIuOTItNy41NWE5LjYzIDkuNjMgMCAwIDEgNy4xOC0yLjk4IDkuNjIgOS42MiAwIDAgMSA3LjE4IDMuMDUgMTAuMjggMTAuMjggMCAwIDEgMi45NiA3LjQ1YzAgMi45NC0uOTggNS40Mi0yLjk0IDcuNDNtNC4xLTE4Ljk0YTE1LjMgMTUuMyAwIDAgMC0xMS4yNC00LjczYy0yLjg4IDAtNS41Ni43My04LjA1IDIuMTdhMTYuMDEgMTYuMDEgMCAwIDAtOC4wMSAxNGMwIDQuNCAxLjUyIDguMiA0LjU5IDExLjQgMy4wNSAzLjIgNi45IDQuNzkgMTEuNTEgNC43OSA0LjQxIDAgOC4xNi0xLjU1IDExLjI2LTQuNjdhMTUuNTcgMTUuNTcgMCAwIDAgNC42NC0xMS40MmMwLTQuNTMtMS41Ny04LjM3LTQuNy0xMS41NCIgaWQ9ImEiIGZpbGw9IiM0YzRjNGMiLz48cGF0aCBkPSJNMjM4LjMgMzUuOTdjLS43NC41Mi0xLjA5Ljc3LTMuMDUuNzdoLTcuNzR2LTYuNjFoNy41YzEuNSAwIDEuNzcuMSAyLjM4LjM0YTMuMDUgMy4wNSAwIDAgMSAyLjAyIDIuOTZjMCAxLjE4LS4zNyAyLjAzLTEuMSAyLjU0bS45MyA2LjFhOS4zNCA5LjM0IDAgMCAwIDQuNi0zLjI1IDguOTQgOC45NCAwIDAgMCAxLjUzLTUuMzNjMC0yLjAyLS40Ni0zLjc4LTEuMzgtNS4yNmE3Ljg0IDcuODQgMCAwIDAtMy42Ni0zLjE3Yy0xLjUyLS42NC00LjA2LS45Ni03LjY0LS45NmgtMTEuMzN2MzIuMzRoNi4xNXYtMTMuN2g1LjM3bDcuMjggMTMuN2g2LjczbC03LjY1LTE0LjM4ek0xOTMuNzggMjQuMWgyMC45NnY2LjAySDE5OS45djYuNjJoMTQuODV2NS45MkgxOTkuOXY3LjczaDE0Ljg1djYuMDRoLTIwLjk2VjI0LjF6TTE2MS4yOSAyNC4xaDUuODlsMTMuODcgMjEuMjdWMjQuMWg2LjE1djMyLjM0aC01LjlsLTEzLjg2LTIxLjJ2MjEuMmgtNi4xNVYyNC4xeiIgZmlsbD0iIzRjNGM0YyIvPjx1c2UgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyNS4wNikiIHdpZHRoPSIyODIiIGhlaWdodD0iNzUiIHhsaW5rOmhyZWY9IiNhIi8&#43;PHBhdGggZD0iTTg5LjY5IDI0LjFoNi4wMmw3LjQ4IDIyLjU1IDcuNTgtMjIuNTZoNS45NGw1LjQ1IDMyLjM0aC01Ljk0bC0zLjQ3LTIwLjQyLTYuODggMjAuNDJoLTUuNDNsLTYuNzktMjAuNDItMy41NCAyMC40MmgtNmw1LjU4LTMyLjM0eiIgZmlsbD0iIzRjNGM0YyIvPjwvc3ZnPg=="
                                 alt="Monero" class="img-responsive">
                           </div>
                           <div class="coin-name">
                              <span class="over-svg strokeW" style="width: 60.762939453125px; line-height: 1.2;height: 8.75px; position: relative;display: inline-block;">
                                 <!--?xml version="1.0"?-->
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top:0;left: 0;transform:translateY(-25%);" width="60.762939453125px" height="17.5px">
                                    <path fill="#fff" d="M4.46044921875,0.4533305921053l3.19580078125,9.0234375l3.1787109375-9.0234375l3.36669921875,0l0,12.44140625l-2.572021484375,0l0-3.40087890625l0.25634765625-5.870361328125l-3.358154296875,9.271240234375l-1.76025390625,0l-3.349609375-9.2626953125l0.25634765625,5.86181640625l0,3.40087890625l-2.5634765625,0l0-12.44140625l3.349609375,0z M15.8935546875,8.1864848889803q0-1.375732421875,0.52978515625-2.452392578125t1.5252685546875-1.666259765625t2.3114013671875-0.589599609375q1.871337890625,0,3.0548095703125,1.14501953125t1.3201904296875,3.1103515625l0.01708984375,0.63232421875q0,2.127685546875-1.187744140625,3.4136962890625t-3.187255859375,1.2860107421875t-3.1915283203125-1.28173828125t-1.1920166015625-3.486328125l0-0.111083984375z M18.363037109375,8.3659282483553q0,1.31591796875,0.49560546875,2.0123291015625t1.41845703125,0.6964111328125q0.897216796875,0,1.4013671875-0.6878662109375t0.504150390625-2.2003173828125q0-1.290283203125-0.504150390625-1.99951171875t-1.41845703125-0.709228515625q-0.90576171875,0-1.4013671875,0.7049560546875t-0.49560546875,2.1832275390625z M28.446044921875,3.6491313733553l0.076904296875,1.068115234375q0.9912109375-1.239013671875,2.657470703125-1.239013671875q1.4697265625,0,2.1875,0.863037109375t0.73486328125,2.58056640625l0,5.972900390625l-2.469482421875,0l0-5.9130859375q0-0.7861328125-0.341796875-1.1407470703125t-1.136474609375-0.3546142578125q-1.04248046875,0-1.563720703125,0.888671875l0,6.519775390625l-2.469482421875,0l0-9.24560546875l2.32421875,0z M40.2294921875,13.065635279605q-2.03369140625,0-3.3111572265625-1.24755859375t-1.2774658203125-3.323974609375l0-0.2392578125q0-1.392822265625,0.538330078125-2.4908447265625t1.5252685546875-1.69189453125t2.2515869140625-0.5938720703125q1.89697265625,0,2.9864501953125,1.1962890625t1.0894775390625,3.392333984375l0,1.00830078125l-5.887451171875,0q0.11962890625,0.90576171875,0.7220458984375,1.45263671875t1.5252685546875,0.546875q1.427001953125,0,2.230224609375-1.033935546875l1.21337890625,1.358642578125q-0.555419921875,0.7861328125-1.50390625,1.2261962890625t-2.10205078125,0.4400634765625z M39.947509765625,5.4777446546053q-0.73486328125,0-1.1920166015625,0.49560546875t-0.5853271484375,1.41845703125l3.43505859375,0l0-0.196533203125q-0.01708984375-0.8203125-0.4443359375-1.2689208984375t-1.21337890625-0.4486083984375z M50.628662109375,5.9648052014803q-0.504150390625-0.068359375-0.888671875-0.068359375q-1.4013671875,0-1.837158203125,0.948486328125l0,6.0498046875l-2.469482421875,0l0-9.24560546875l2.332763671875,0l0.068359375,1.102294921875q0.743408203125-1.273193359375,2.059326171875-1.273193359375q0.41015625,0,0.76904296875,0.111083984375z M51.431884765625,8.1864848889803q0-1.375732421875,0.52978515625-2.452392578125t1.5252685546875-1.666259765625t2.3114013671875-0.589599609375q1.871337890625,0,3.0548095703125,1.14501953125t1.3201904296875,3.1103515625l0.01708984375,0.63232421875q0,2.127685546875-1.187744140625,3.4136962890625t-3.187255859375,1.2860107421875t-3.1915283203125-1.28173828125t-1.1920166015625-3.486328125l0-0.111083984375z M53.9013671875,8.3659282483553q0,1.31591796875,0.49560546875,2.0123291015625t1.41845703125,0.6964111328125q0.897216796875,0,1.4013671875-0.6878662109375t0.504150390625-2.2003173828125q0-1.290283203125-0.504150390625-1.99951171875t-1.41845703125-0.709228515625q-0.90576171875,0-1.4013671875,0.7049560546875t-0.49560546875,2.1832275390625z"/>
                                 </svg>
                              </span>
                           </div>
                           <div class="coin-cap">
                              Marktkapitalisierung: $830M
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="coin">
                           <div class="coin-logo">
                              <img draggable="false" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNTE1IDUyNSI&#43;PGNpcmNsZSBjeD0iMjYyLjUiIGN5PSIyNjIuNSIgcj0iMjU3Ii8&#43;PGxpbmVhckdyYWRpZW50IGlkPSJhIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjQwMy45IiB5MT0iMTk4LjkiIHgyPSIxMjEuMSIgeTI9Ii04My45IiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIC0xIDAgMzIwKSI&#43;PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjZmZkMjVjIi8&#43;PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjY2Q4NDIxIi8&#43;PC9saW5lYXJHcmFkaWVudD48Y2lyY2xlIGN4PSIyNjIuNSIgY3k9IjI2Mi41IiByPSIyMDAiIGZpbGw9InVybCgjYSkiLz48cGF0aCBkPSJNMTY2LjIgMzQyLjJsNjkuOC05Ni44YTExMjkgMTEyOSAwIDAgMSAzNS4zLTQzLjZ2LTFoLTk3LjR2LTYwLjNoMTgxLjJ2NDUuNmwtNjYuNiA5Mi44Yy0xMi4yIDE2LjEtMjMuNiAzMS42LTM2LjIgNDUuMXYxaDEwNi41djYwLjdIMTY2LjJ2LTQzLjV6Ii8&#43;PHBhdGggZD0iTTIzMy45IDk1LjhoNTUuM3Y1NGgtNTUuM3pNMjMzLjkgMzc1LjJoNTUuM3Y1NGgtNTUuM3oiLz48Zz48cGF0aCBkPSJNNzYwIDMwNi4zbC42IDEuMmE4MS40IDgxLjQgMCAwIDEtMjUuNSA2NGMtMTcuNCAxNi44LTQxLjYgMjQuOC03MS40IDI0LjgtMzAuNCAwLTU1LjMtOS45LTczLjktMzAuNC0xOS4zLTIwLjUtMjguNi00Ni42LTI4LjYtNzguM1YyMzhjMC0zMS43IDkuMy01Ny44IDI4LTc4LjNhOTQuNSA5NC41IDAgMCAxIDczLjMtMzEuMWMzMC40IDAgNTQuNyA4LjEgNzIuNyAyNC4yIDE4IDE2LjIgMjYuMSAzNy45IDI2LjEgNjUuMmwtLjYgMS4yaC00Mi4yYzAtMTcuNC01LTMxLjEtMTQuMy00MS05LjMtOS45LTIzLjYtMTQuOS00MS42LTE0LjlhNDkgNDkgMCAwIDAtNDIuMiAyMS4xIDg1LjYgODUuNiAwIDAgMC0xNS41IDUyLjhWMjg3YzAgMjEuMSA1LjYgMzkuMSAxNi4yIDUzLjRhNTAuMiA1MC4yIDAgMCAwIDQyLjkgMjEuMWMxOCAwIDMxLjctNSA0MS0xNC4zczEzLjctMjMgMTMuNy00MWMtLjMuMSA0MS4zLjEgNDEuMy4xek05NDMuOSAzMzEuOEg4NDJsLTIwLjUgNjAuOWgtNDQuMUw4NzMuMSAxMzNoNDFsOTQuNCAyNTkuNmgtNDQuMXptLTg5LjUtMzYuN2g3N2wtMzcuOS0xMTEuMmgtMS4yek0xMTc5LjMgMzI1LjVjMC0xMC42LTMuNy0xOS45LTExLjgtMjYuNy04LjEtNi44LTIyLjQtMTMtNDIuOS0xOC42LTI5LjItNy41LTUxLjYtMTcuNC02Ny4xLTMwLjRhNjAuNyA2MC43IDAgMCAxLTIzLjYtNDkuMWMwLTIxLjEgOC43LTM3LjkgMjYuMS01MS42IDE3LjQtMTMuNyAzOS44LTIwLjUgNjcuMS0yMC41IDI4LjYgMCA1MS42IDcuNSA2OC45IDIzYTY4LjYgNjguNiAwIDAgMSAyNC44IDU1LjNsLS42IDEuMmgtNDEuNmMwLTEzLTQuMy0yNC4yLTEzLjctMzIuM2E1Ni4yIDU2LjIgMCAwIDAtMzguNS0xMi40Yy0xNS41IDAtMjggMy43LTM2LjYgMTAuNmEzMiAzMiAwIDAgMC0xMyAyNi43YzAgOS45IDQuMyAxOCAxMy43IDI0LjggOS4zIDYuOCAyNC4yIDEyLjQgNDYgMTguNiAyOCA3LjUgNDkuMSAxOCA2NCAzMS4xYTYzLjIgNjMuMiAwIDAgMSAyMS43IDUwLjNjMCAyMS43LTguNyAzOS4xLTI2LjEgNTEuNi0xNy40IDEzLTQwLjQgMTkuMy02OC4zIDE5LjMtMjcuMyAwLTUwLjktNy41LTcxLjQtMjEuN2E2Ni4yIDY2LjIgMCAwIDEtMjkuOC01OWwuNi0xLjJoNDEuNmE0MiA0MiAwIDAgMCAxNi4yIDM1LjQgNzEuMyA3MS4zIDAgMCAwIDQyLjkgMTEuOGMxNi4yIDAgMjguNi0zLjEgMzcuMy05LjkgOS43LTcgMTQuMS0xNS43IDE0LjEtMjYuM3pNMTQ3MS4yIDM5MmgtNDMuNVYyODEuNGgtMTE2LjJWMzkySDEyNjhWMTMyLjRoNDMuNXYxMTQuM2gxMTYuMlYxMzIuNGg0My41eiIvPjwvZz48L3N2Zz4="
                                 alt="ZCash" class="img-responsive">
                           </div>
                           <div class="coin-name">
                              <span class="over-svg strokeW" style="width: 50.22705078125px; line-height: 1.2;height: 8.75px; position: relative;display: inline-block;">
                                 <!--?xml version="1.0"?-->
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top:0;left: 0;transform:translateY(-25%);" width="50.22705078125px" height="17.5px">
                                    <path fill="#fff" d="M3.828125,10.83541067023l6.27197265625,0l0,2.059326171875l-9.476318359375,0l0-1.50390625l6.15234375-8.861083984375l-6.143798828125,0l0-2.076416015625l9.3310546875,0l0,1.4697265625z M21.48193359375,8.7504497327303q-0.145263671875,2.008056640625-1.4825439453125,3.16162109375t-3.5247802734375,1.153564453125q-2.392578125,0-3.7640380859375-1.6107177734375t-1.3714599609375-4.4219970703125l0-0.760498046875q0-1.79443359375,0.63232421875-3.16162109375t1.8072509765625-2.0977783203125t2.7301025390625-0.7305908203125q2.1533203125,0,3.46923828125,1.153564453125t1.52099609375,3.238525390625l-2.5634765625,0q-0.093994140625-1.204833984375-0.6707763671875-1.7474365234375t-1.7559814453125-0.5426025390625q-1.28173828125,0-1.9183349609375,0.9185791015625t-0.6536865234375,2.8497314453125l0,0.93994140625q0,2.0166015625,0.6109619140625,2.947998046875t1.9268798828125,0.931396484375q1.187744140625,0,1.7730712890625-0.5426025390625t0.6707763671875-1.6790771484375l2.5634765625,0z M28.360595703125,12.894736842105q-0.1708984375-0.333251953125-0.247802734375-0.828857421875q-0.897216796875,0.999755859375-2.332763671875,0.999755859375q-1.358642578125,0-2.2515869140625-0.7861328125t-0.8929443359375-1.982421875q0-1.4697265625,1.0894775390625-2.255859375t3.1488037109375-0.794677734375l1.136474609375,0l0-0.52978515625q0-0.640869140625-0.3289794921875-1.025390625t-1.0382080078125-0.384521484375q-0.623779296875,0-0.9783935546875,0.299072265625t-0.3546142578125,0.8203125l-2.469482421875,0q0-0.80322265625,0.49560546875-1.48681640625t1.4013671875-1.0723876953125t2.03369140625-0.3887939453125q1.708984375,0,2.7130126953125,0.8587646484375t1.0040283203125,2.4139404296875l0,4.007568359375q0.008544921875,1.31591796875,0.367431640625,1.990966796875l0,0.145263671875l-2.4951171875,0z M26.318359375,11.17720754523q0.546875,0,1.00830078125-0.2435302734375t0.68359375-0.6536865234375l0-1.58935546875l-0.9228515625,0q-1.854248046875,0-1.973876953125,1.28173828125l-0.008544921875,0.145263671875q0,0.46142578125,0.32470703125,0.760498046875t0.888671875,0.299072265625z M37.392578125,10.33980520148q0-0.452880859375-0.4486083984375-0.7135009765625t-1.4398193359375-0.4656982421875q-3.29833984375-0.692138671875-3.29833984375-2.802734375q0-1.23046875,1.0211181640625-2.0550537109375t2.6702880859375-0.8245849609375q1.76025390625,0,2.8155517578125,0.828857421875t1.0552978515625,2.1533203125l-2.469482421875,0q0-0.52978515625-0.341796875-0.8758544921875t-1.068115234375-0.3460693359375q-0.623779296875,0-0.965576171875,0.281982421875t-0.341796875,0.7177734375q0,0.41015625,0.3887939453125,0.6622314453125t1.3116455078125,0.435791015625t1.55517578125,0.4144287109375q1.956787109375,0.7177734375,1.956787109375,2.486572265625q0,1.2646484375-1.085205078125,2.0465087890625t-2.802734375,0.7818603515625q-1.162109375,0-2.0635986328125-0.4144287109375t-1.4141845703125-1.136474609375t-0.5126953125-1.5594482421875l2.34130859375,0q0.0341796875,0.657958984375,0.487060546875,1.00830078125t1.21337890625,0.350341796875q0.709228515625,0,1.0723876953125-0.2691650390625t0.3631591796875-0.7049560546875z M43.792724609375,4.6574321546053q0.982666015625-1.17919921875,2.469482421875-1.17919921875q3.0078125,0,3.050537109375,3.494873046875l0,5.921630859375l-2.469482421875,0l0-5.853271484375q0-0.794677734375-0.341796875-1.1749267578125t-1.136474609375-0.3802490234375q-1.085205078125,0-1.572265625,0.83740234375l0,6.571044921875l-2.469482421875,0l0-13.125l2.469482421875,0l0,4.8876953125z"/>
                                 </svg>
                              </span>
                           </div>
                           <div class="coin-cap">
                              Marktkapitalisierung: $313M
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="coin">
                           <div class="coin-logo">
                              <img draggable="false" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzNjMuMSAyMjQiPjxwYXRoIGQ9Ik0yODkuOCA4My43djU2LjFoNS41Vjg5LjJoMjguNHY1MC42aDUuNVY4OS4yaDI4LjR2NTAuNmg1LjVWODMuN2gtNzMuM3ptLTE3NC45LTIuMWMtOCAwLTE1LjYgMy4xLTIxLjMgOC44cy04LjggMTMuMi04LjggMjEuM2MwIDggMy4xIDE1LjYgOC44IDIxLjMgNS43IDUuNyAxMy4yIDguOCAyMS4zIDguOCA4IDAgMTUuNi0zLjEgMjEuMy04LjggNS43LTUuNyA4LjgtMTMuMiA4LjgtMjEuMyAwLTgtMy4xLTE1LjYtOC44LTIxLjMtNS44LTUuNi0xMy4zLTguOC0yMS4zLTguOHptMTcuNCA0Ny42Yy00LjYgNC43LTEwLjkgNy4zLTE3LjQgNy4yLTYuNiAwLTEyLjgtMi42LTE3LjQtNy4yLTQuNi00LjctNy4yLTEwLjgtNy4yLTE3LjRzMi42LTEyLjggNy4yLTE3LjRjNC42LTQuNyAxMC45LTcuMyAxNy40LTcuMiA2LjYgMCAxMi44IDIuNiAxNy40IDcuMiA0LjYgNC43IDcuMiAxMC44IDcuMiAxNy40IDAgNi41LTIuNiAxMi43LTcuMiAxNy40em0xMjQuMS0zOC43Yy01LjctNS43LTEzLjItOC44LTIxLjMtOC44LTggMC0xNS42IDMuMS0yMS4zIDguOC01LjcgNS43LTguOCAxMy4yLTguOCAyMS4zIDAgOCAzLjEgMTUuNiA4LjggMjEuM3MxMy4yIDguOCAyMS4zIDguOCAxNS42LTMuMSAyMS4zLTguOGwtMy45LTMuOWMtNC42IDQuNy0xMC44IDcuMi0xNy40IDcuMnMtMTIuOC0yLjYtMTcuNC03LjJjLTQuNi00LjctNy4yLTEwLjgtNy4yLTE3LjRoNTQuN2MwLTguMS0zLjEtMTUuNy04LjgtMjEuM3ptLTM4LjYgMy44YzQuNi00LjcgMTAuOC03LjIgMTcuNC03LjJzMTIuOCAyLjYgMTcuNCA3LjJjMy4zIDMuMyA1LjYgNy41IDYuNiAxMS45aC00OGMxLTQuNCAzLjItOC41IDYuNi0xMS45em0tMTUxLTIzLjJMNDkuMyA4OC42Yy01LjQtNC41LTEyLjEtNy0xOS4yLTctOCAwLTE1LjYgMy4xLTIxLjMgOC44UzAgMTAzLjcgMCAxMTEuN3MzLjEgMTUuNiA4LjggMjEuM2M1IDUgMTEuNSA4LjEgMTguNSA4Ljd2MjIuMmMtNyAuNi0xMy41IDMuNi0xOC41IDguNy01LjcgNS43LTguOCAxMy4zLTguOCAyMS4zczMuMSAxNS42IDguOCAyMS4zUzIyIDIyNCAzMC4xIDIyNGM4IDAgMTUuNi0zLjEgMjEuMy04LjhzOC44LTEzLjIgOC44LTIxLjMtMy4xLTE1LjYtOC44LTIxLjNjLTUtNS0xMS41LTguMS0xOC41LTguN3YtMjIuMmM3LS42IDEzLjUtMy42IDE4LjUtOC43IDUuNy01LjcgOC44LTEzLjIgOC44LTIxLjMgMC03LjEtMi41LTEzLjktNy0xOS4zbDE3LjUtMTcuNS0zLjktMy44ek00Ny41IDE3Ni41YzQuNiA0LjcgNy4yIDEwLjggNy4yIDE3LjQgMCA2LjYtMi42IDEyLjgtNy4yIDE3LjQtNC42IDQuNy0xMC44IDcuMi0xNy40IDcuMnMtMTIuOC0yLjYtMTcuNC03LjJjLTQuNi00LjctNy4yLTEwLjgtNy4yLTE3LjQgMC02LjYgMi42LTEyLjggNy4yLTE3LjQgNC42LTQuNyAxMC44LTcuMiAxNy40LTcuMnMxMi44IDIuNSAxNy40IDcuMnptNy4yLTY0LjdjMCA2LjYtMi42IDEyLjgtNy4yIDE3LjQtNC42IDQuNy0xMC44IDcuMi0xNy40IDcuMnMtMTIuOC0yLjYtMTcuNC03LjJjLTQuNi00LjctNy4yLTEwLjgtNy4yLTE3LjQgMC02LjYgMi42LTEyLjggNy4yLTE3LjQgNC42LTQuNyAxMC44LTcuMiAxNy40LTcuMnMxMi44IDIuNiAxNy40IDcuMmM0LjcgNC42IDcuMyAxMC45IDcuMiAxNy40em0xMTcuNiAyNy4zaDUuNVY1N2gtNS41djgyLjF6IiBmaWxsPSIjMDAxZDU3Ii8&#43;PC9zdmc&#43;"
                                 alt="Golem" class="img-responsive">
                           </div>
                           <div class="coin-name">
                              <span class="over-svg strokeW" style="width: 51.064453125px; line-height: 1.2;height: 8.75px; position: relative;display: inline-block;">
                                 <!--?xml version="1.0"?-->
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top:0;left: 0;transform:translateY(-25%);" width="51.064453125px" height="17.5px">
                                    <path fill="#fff" d="M10.95458984375,11.322471217105q-0.692138671875,0.828857421875-1.956787109375,1.2860107421875t-2.802734375,0.4571533203125q-1.614990234375,0-2.8326416015625-0.7049560546875t-1.8798828125-2.0465087890625t-0.6793212890625-3.153076171875l0-0.845947265625q0-1.86279296875,0.6280517578125-3.2257080078125t1.8115234375-2.0849609375t2.7728271484375-0.7220458984375q2.213134765625,0,3.460693359375,1.0552978515625t1.478271484375,3.0718994140625l-2.4951171875,0q-0.1708984375-1.068115234375-0.7562255859375-1.563720703125t-1.6107177734375-0.49560546875q-1.307373046875,0-1.990966796875,0.982666015625t-0.692138671875,2.92236328125l0,0.794677734375q0,1.956787109375,0.743408203125,2.95654296875t2.178955078125,0.999755859375q1.444091796875,0,2.059326171875-0.615234375l0-2.144775390625l-2.332763671875,0l0-1.888427734375l4.896240234375,0l0,4.964599609375z M12.484130859375,8.1864848889803q0-1.375732421875,0.52978515625-2.452392578125t1.5252685546875-1.666259765625t2.3114013671875-0.589599609375q1.871337890625,0,3.0548095703125,1.14501953125t1.3201904296875,3.1103515625l0.01708984375,0.63232421875q0,2.127685546875-1.187744140625,3.4136962890625t-3.187255859375,1.2860107421875t-3.1915283203125-1.28173828125t-1.1920166015625-3.486328125l0-0.111083984375z M14.95361328125,8.3659282483553q0,1.31591796875,0.49560546875,2.0123291015625t1.41845703125,0.6964111328125q0.897216796875,0,1.4013671875-0.6878662109375t0.504150390625-2.2003173828125q0-1.290283203125-0.504150390625-1.99951171875t-1.41845703125-0.709228515625q-0.90576171875,0-1.4013671875,0.7049560546875t-0.49560546875,2.1832275390625z M25.369873046875,12.894736842105l-2.47802734375,0l0-13.125l2.47802734375,0l0,13.125z M31.658935546875,13.065635279605q-2.03369140625,0-3.3111572265625-1.24755859375t-1.2774658203125-3.323974609375l0-0.2392578125q0-1.392822265625,0.538330078125-2.4908447265625t1.5252685546875-1.69189453125t2.2515869140625-0.5938720703125q1.89697265625,0,2.9864501953125,1.1962890625t1.0894775390625,3.392333984375l0,1.00830078125l-5.887451171875,0q0.11962890625,0.90576171875,0.7220458984375,1.45263671875t1.5252685546875,0.546875q1.427001953125,0,2.230224609375-1.033935546875l1.21337890625,1.358642578125q-0.555419921875,0.7861328125-1.50390625,1.2261962890625t-2.10205078125,0.4400634765625z M31.376953125,5.4777446546053q-0.73486328125,0-1.1920166015625,0.49560546875t-0.5853271484375,1.41845703125l3.43505859375,0l0-0.196533203125q-0.01708984375-0.8203125-0.4443359375-1.2689208984375t-1.21337890625-0.4486083984375z M39.178466796875,3.6491313733553l0.076904296875,1.033935546875q0.982666015625-1.204833984375,2.657470703125-1.204833984375q1.785888671875,0,2.452392578125,1.409912109375q0.97412109375-1.409912109375,2.777099609375-1.409912109375q1.50390625,0,2.23876953125,0.8758544921875t0.73486328125,2.6361083984375l0,5.904541015625l-2.47802734375,0l0-5.89599609375q0-0.7861328125-0.3076171875-1.1492919921875t-1.085205078125-0.3631591796875q-1.11083984375,0-1.5380859375,1.0595703125l0.008544921875,6.348876953125l-2.469482421875,0l0-5.887451171875q0-0.80322265625-0.316162109375-1.162109375t-1.07666015625-0.35888671875q-1.051025390625,0-1.52099609375,0.87158203125l0,6.536865234375l-2.469482421875,0l0-9.24560546875l2.315673828125,0z"/>
                                 </svg>
                              </span>
                           </div>
                           <div class="coin-cap">
                              Marktkapitalisierung: $60M
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="coin">
                           <div class="coin-logo">
                              <img draggable="false" src="data:image/svg+xml;base64,PHN2ZyBpZD0iVnJzdHZhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDM0OC42IDE3NSI&#43;PHBhdGggZmlsbD0iIzAwMWEzZSIgZD0iTTQ1LjEgMTM2LjJsMTcuOC0yMGMuMy0uMy4xLS44LS40LS44SDQyLjlhLjguOCAwIDAgMS0uNC0uMkwyNS45IDk2LjZjLS4xLS4yLS4yLS40LS4xLS42bDI3LjgtNDcuN3YtLjVMNDIuMSAyOGMtLjItLjMtLjctLjMtLjkgMEwuMSA5OC42di42bDMzIDM3LjEuNC4yaDExLjJsLjQtLjN6Ii8&#43;PHBhdGggZmlsbD0iIzAwMWEzZSIgZD0iTTU3LjMuNEw0NS43IDIwLjJ2LjVsMTIgMjAuNiAzMS44IDU0LjZjLjEuMi4xLjQtLjEuNmwtMTYuOCAxOC44LTE3LjkgMjAuMmMtLjMuMy0uMS44LjQuOGgyNi44bC40LS4yIDMzLTM3LjFjLjEtLjIuMi0uNC4xLS42TDU4LjEuNGMtLjEtLjQtLjYtLjQtLjggMHptMTA3LjUgMTA4LjJWNDVjMC0uNS0uNi0uNy0uOS0uM2wtMTkuNCAyMS43LS4xLjN2NjIuNGMwIC4zLjIuNS41LjVoNDljLjMgMCAuNS0uMi41LS41di0xOS41YzAtLjMtLjItLjUtLjUtLjVoLTI4LjZjLS4yIDAtLjUtLjItLjUtLjV6bTU3LjggMjAuNVY2OS41YzAtLjUtLjYtLjctLjktLjNsLTE5LjQgMjEuNy0uMS4zdjM3LjljMCAuMy4yLjUuNS41aDE5LjRjLjMgMCAuNS0uMy41LS41em0xMDUtMjkuOWEuNi42IDAgMCAxIDAtLjZMMzQ3LjUgNjljLjItLjMgMC0uOC0uNC0uOGgtMjIuM2wtLjQuMi0xNC43IDIzLjhjLS4zLjQtLjkuMi0uOS0uM3YtNDdjMC0uNS0uNi0uNy0uOS0uM2wtMTkuNCAyMS43LS4xLjN2NjIuNWMwIC4zLjIuNS41LjVoMTkuNGMuMyAwIC41LS4yLjUtLjV2LTIzLjljMC0uNS42LS43LjktLjNsMTYuMyAyNC41LjQuMkgzNDhjLjQgMCAuNi0uNS40LS44bC0yMC44LTI5LjZ6bS03Mi4xIDMxLjZjMTIuNiAwIDI2LTUuMyAyNi0yMC4xUzI2OS4xIDkzLjEgMjYwIDkxYy01LTEuMi05LTIuMS05LTQuOCAwLTIuMSAxLjktMy40IDUtMy40IDMuMiAwIDUuOCAxLjYgNy42IDQuNy4xLjIuNC4zLjYuMmwxNS40LTYuOWMuMy0uMS40LS40LjItLjctNC43LTguNi0xMi45LTEzLTI0LjMtMTMtMTYuNS0uMS0yNCAxMC0yNCAyMCAwIDEzLjcgMTIuMiAxNi44IDIxLjEgMTkuMSA1LjIgMS4zIDguOSAyLjMgOC45IDQuOSAwIDEuNy0xIDMuOC02IDMuOC00LjYgMC03LjktMi05LjYtNi0uMS0uMy0uNC0uNC0uNy0uM2wtMTUuOSA4Yy0uMy4xLS40LjQtLjIuNyA0LjUgOS4xIDEzLjIgMTMuNSAyNi40IDEzLjV6Ii8&#43;PC9zdmc&#43;"
                                 alt="Lisk" class="img-responsive">
                           </div>
                           <div class="coin-name">
                              <span class="over-svg strokeW" style="width: 32.462158203125px; line-height: 1.2;height: 8.75px; position: relative;display: inline-block;">
                                 <!--?xml version="1.0"?-->
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top:0;left: 0;transform:translateY(-25%);" width="32.462158203125px" height="17.5px">
                                    <path fill="#fff" d="M3.67431640625,10.83541067023l5.443115234375,0l0,2.059326171875l-8.006591796875,0l0-12.44140625l2.5634765625,0l0,10.382080078125z M13.031005859375,12.894736842105l-2.47802734375,0l0-9.24560546875l2.47802734375,0l0,9.24560546875z M10.40771484375,1.2565532483553q0-0.555419921875,0.3717041015625-0.914306640625t1.0125732421875-0.35888671875q0.63232421875,0,1.00830078125,0.35888671875t0.3759765625,0.914306640625q0,0.56396484375-0.3802490234375,0.9228515625t-1.0040283203125,0.35888671875t-1.0040283203125-0.35888671875t-0.3802490234375-0.9228515625z M20.072021484375,10.33980520148q0-0.452880859375-0.4486083984375-0.7135009765625t-1.4398193359375-0.4656982421875q-3.29833984375-0.692138671875-3.29833984375-2.802734375q0-1.23046875,1.0211181640625-2.0550537109375t2.6702880859375-0.8245849609375q1.76025390625,0,2.8155517578125,0.828857421875t1.0552978515625,2.1533203125l-2.469482421875,0q0-0.52978515625-0.341796875-0.8758544921875t-1.068115234375-0.3460693359375q-0.623779296875,0-0.965576171875,0.281982421875t-0.341796875,0.7177734375q0,0.41015625,0.3887939453125,0.6622314453125t1.3116455078125,0.435791015625t1.55517578125,0.4144287109375q1.956787109375,0.7177734375,1.956787109375,2.486572265625q0,1.2646484375-1.085205078125,2.0465087890625t-2.802734375,0.7818603515625q-1.162109375,0-2.0635986328125-0.4144287109375t-1.4141845703125-1.136474609375t-0.5126953125-1.5594482421875l2.34130859375,0q0.0341796875,0.657958984375,0.487060546875,1.00830078125t1.21337890625,0.350341796875q0.709228515625,0,1.0723876953125-0.2691650390625t0.3631591796875-0.7049560546875z M27.420654296875,9.1862407483553l-0.888671875,0.888671875l0,2.81982421875l-2.469482421875,0l0-13.125l2.469482421875,0l0,7.271728515625l0.478515625-0.615234375l2.366943359375-2.777099609375l2.965087890625,0l-3.341064453125,3.853759765625l3.631591796875,5.391845703125l-2.8369140625,0z"/>
                                 </svg>
                              </span>
                           </div>
                           <div class="coin-cap">
                              Marktkapitalisierung: $137M
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="coin">
                           <div class="coin-logo">
                              <img draggable="false" src="data:image/svg+xml;base64,PHN2ZyBpZD0iVnJzdHZhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDM4My41IDE0Ny4xIj48c3R5bGU&#43;LnN0MHtmaWxsOiM0MzYwREU7fSAuc3Qxe2ZpbGw6IzAzMDMwMzt9IC5zdDJ7ZmlsbDojRkVGRUZFO308L3N0eWxlPjxjaXJjbGUgY2xhc3M9InN0MCIgY3g9IjczLjUiIGN5PSI3My42IiByPSI3My41Ii8&#43;PHBhdGggY2xhc3M9InN0MSIgZD0iTTI2NC4yIDY3LjJsLjItNEgyNzVWOTdoLTEwLjZsLS4yLTMuNS0uNi0uNmMtLjIuNS0uNCAxLS44IDEuNS00LjEgNC4yLTExLjMgNS0xNi43IDEuOS02LjEtMy43LTguOC05LjMtOC44LTE2LjNzMi42LTEyLjQgOC43LTE2IDEyLjctMi4zIDE4LjIgMy4yem0wIDEyLjhjMC01LTMuNi04LjctOC4yLTguN3MtOCAzLjktNy45IDljMCA0LjkgMy40IDguNCA4IDguNHM4LjItMy42IDguMi04LjdoLS4xem03MC4zIDE3bC0uMi00LjFjLTMuNCA0LjMtNy43IDUuNC0xMi41IDUuMS01LjktLjMtMTAuMi00LjEtMTAuNC0xMC0uNC04LjItLjEtMTYuNS0uMS0yNWgxMC41djE2LjVjMCAyIC4zIDQgLjggNS45YTQuNCA0LjQgMCAwIDAgNC4yIDMuM2MyLjQuMiA0LjctLjEgNi0yLjQuOS0xLjUgMS40LTMuMiAxLjUtNC45LjItNS4yIDAtMTAuNC4xLTE1LjZ2LTIuN2gxMC43Vjk3aC0xMC42ek0xNzUuNyA4NS45aDEwLjJjMS4yIDQuMiA0IDYgNy43IDQuNiAxLjEtLjUgMi4yLTEuNCAyLjMtMi41cy0uMi0yLjMtMS44LTMtNS4zLTEuOC04LTIuOGwtNC41LTEuN2MtMy4yLTEuNS01LjEtMy45LTUuMi03LjYgMC00IDEuNS03IDUtOC44YTI4LjcgMjguNyAwIDAgMSAxNi43LS41YzUuNiAxLjkgNy45IDUuNyA4LjEgOS44aC0xMC40Yy0uMi0zLjYtMi43LTQuNS01LjMtNC4zLTIuMi4xLTMuMyAxLjgtMy4zIDIuOXMuNyAyIDEuNiAyLjVjMi40IDEgNSAxLjggNy42IDIuOGw1LjMgMmM2LjggMi44IDYuMSAxMi4yIDEuNiAxNS40LTEuMi45LTIuNiAxLjctNCAyLjJhMjUuNCAyNS40IDAgMCAxLTE1LjkgMGMtNS4xLTEuNy03LjctNS40LTcuNy0xMXptMTc2LjggMGgxMC4yYzEuMiA0LjIgNCA2IDcuNyA0LjYgMS4xLS41IDIuMi0xLjQgMi4zLTIuNXMtLjItMi4zLTEuOC0zYy0xLjYtLjgtNS4zLTEuOC04LTIuOGwtNC41LTEuN2MtMy4yLTEuNS01LjEtMy45LTUuMi03LjYgMC00IDEuNS03IDUtOC44YTI4LjcgMjguNyAwIDAgMSAxNi43LS41YzUuNiAxLjkgNy45IDUuNyA4LjEgOS44aC0xMC40Yy0uMi0zLjYtMi43LTQuNS01LjMtNC4zLTIuMi4xLTMuMyAxLjgtMy4zIDIuOXMuNyAyIDEuNiAyLjVjMi40IDEgNSAxLjggNy42IDIuOGw1LjMgMmM2LjggMi44IDYuMSAxMi4yIDEuNiAxNS40LTEuMi45LTIuNiAxLjctNCAyLjJhMjUuNCAyNS40IDAgMCAxLTE1LjkgMGMtNS4xLTEuNy03LjctNS40LTcuNy0xMXpNMjA5LjYgNjNoNVY1M2gxMXY5LjloNy42VjcxaC03LjV2MTRjLjIgMi44IDEuNSAzLjkgNC4zIDRoNHY4YTMzIDMzIDAgMCAxLTEyLjktLjFjLTMuOC0xLjEtNi00LjYtNi4yLTkuMy0uMi00LjYgMC05LjItLjEtMTMuN1Y3MWgtNS4ydi04em05NiAyNi4xdjguMWMtNC4zLjUtOC42IDEtMTIuNy0uMS00LTEuMS02LTQuMi02LjMtOC0uMy00LjQtLjItOC42LS4zLTEzdi01aC01LjJWNjNoNS4yVjUzSDI5N3Y5LjhoNy43VjcxaC03LjVjMCA0LjktLjIgOS41IDAgMTQuMS4yIDIuOCAxLjUgMy44IDQuMyA0aDQuMXoiLz48cGF0aCBjbGFzcz0ic3QyIiBkPSJNNTcuNSA3MC4zYTM0IDM0IDAgMCAxIDYuNy0xOC4xIDI4LjkgMjguOSAwIDAgMSAyNS41LTEyLjdjNC45LjIgOS41IDIuMiAxMyA1LjZhMTQgMTQgMCAwIDEgLjUgMTkuOWMtMS4xIDEuMS0yLjMgMi0zLjYgMi44LTUgMi43LTEwLjQgMy4zLTE2IDMtNC43LS4yLTkuNS0uOS0xNC4zLTEtMy44LS4xLTcuNi4zLTExLjguNXptMzMuNiA2LjRjLS42IDE1LjgtMTUuNyAzMS4xLTMzIDI4LTMuNy0uNi03LjEtMi40LTkuOC01YTEyLjggMTIuOCAwIDAgMSAyLjUtMjAuM2MzLjctMi4xIDcuOC0zLjIgMTItMy4yIDMuNCAwIDYuNy40IDEwLjEuNWgxOC4yeiIvPjwvc3ZnPg=="
                                 alt="Status" class="img-responsive">
                           </div>
                           <div class="coin-name">
                              <span class="over-svg strokeW" style="width: 50.7568359375px; line-height: 1.2;height: 8.75px; position: relative;display: inline-block;">
                                 <!--?xml version="1.0"?-->
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top:0;left: 0;transform:translateY(-25%);" width="50.7568359375px" height="17.5px">
                                    <path fill="#fff" d="M7.562255859375,9.6305766858553q0-0.726318359375-0.5126953125-1.1151123046875t-1.845703125-0.8203125t-2.110595703125-0.8502197265625q-2.119140625-1.14501953125-2.119140625-3.084716796875q0-1.00830078125,0.5682373046875-1.7987060546875t1.632080078125-1.2347412109375t2.3883056640625-0.4443359375q1.3330078125,0,2.37548828125,0.4827880859375t1.6192626953125,1.3629150390625t0.5767822265625,1.99951171875l-2.5634765625,0q0-0.8544921875-0.538330078125-1.3287353515625t-1.512451171875-0.4742431640625q-0.93994140625,0-1.461181640625,0.3973388671875t-0.521240234375,1.0467529296875q0,0.606689453125,0.6109619140625,1.016845703125t1.7987060546875,0.76904296875q2.1875,0.657958984375,3.187255859375,1.632080078125t0.999755859375,2.4267578125q0,1.614990234375-1.221923828125,2.5335693359375t-3.289794921875,0.9185791015625q-1.435546875,0-2.61474609375-0.5255126953125t-1.7987060546875-1.4398193359375t-0.6195068359375-2.119140625l2.572021484375,0q0,2.059326171875,2.4609375,2.059326171875q0.914306640625,0,1.427001953125-0.3717041015625t0.5126953125-1.0382080078125z M14.6630859375,1.3761821546053l0,2.27294921875l1.580810546875,0l0,1.8115234375l-1.580810546875,0l0,4.6142578125q0,0.5126953125,0.196533203125,0.73486328125t0.751953125,0.22216796875q0.41015625,0,0.726318359375-0.059814453125l0,1.871337890625q-0.726318359375,0.22216796875-1.495361328125,0.22216796875q-2.59765625,0-2.64892578125-2.623291015625l0-4.981689453125l-1.35009765625,0l0-1.8115234375l1.35009765625,0l0-2.27294921875l2.469482421875,0z M22.977294921875,12.894736842105q-0.1708984375-0.333251953125-0.247802734375-0.828857421875q-0.897216796875,0.999755859375-2.332763671875,0.999755859375q-1.358642578125,0-2.2515869140625-0.7861328125t-0.8929443359375-1.982421875q0-1.4697265625,1.0894775390625-2.255859375t3.1488037109375-0.794677734375l1.136474609375,0l0-0.52978515625q0-0.640869140625-0.3289794921875-1.025390625t-1.0382080078125-0.384521484375q-0.623779296875,0-0.9783935546875,0.299072265625t-0.3546142578125,0.8203125l-2.469482421875,0q0-0.80322265625,0.49560546875-1.48681640625t1.4013671875-1.0723876953125t2.03369140625-0.3887939453125q1.708984375,0,2.7130126953125,0.8587646484375t1.0040283203125,2.4139404296875l0,4.007568359375q0.008544921875,1.31591796875,0.367431640625,1.990966796875l0,0.145263671875l-2.4951171875,0z M20.93505859375,11.17720754523q0.546875,0,1.00830078125-0.2435302734375t0.68359375-0.6536865234375l0-1.58935546875l-0.9228515625,0q-1.854248046875,0-1.973876953125,1.28173828125l-0.008544921875,0.145263671875q0,0.46142578125,0.32470703125,0.760498046875t0.888671875,0.299072265625z M29.95849609375,1.3761821546053l0,2.27294921875l1.580810546875,0l0,1.8115234375l-1.580810546875,0l0,4.6142578125q0,0.5126953125,0.196533203125,0.73486328125t0.751953125,0.22216796875q0.41015625,0,0.726318359375-0.059814453125l0,1.871337890625q-0.726318359375,0.22216796875-1.495361328125,0.22216796875q-2.59765625,0-2.64892578125-2.623291015625l0-4.981689453125l-1.35009765625,0l0-1.8115234375l1.35009765625,0l0-2.27294921875l2.469482421875,0z M38.4521484375,11.954795435855q-0.914306640625,1.11083984375-2.529296875,1.11083984375q-1.48681640625,0-2.2686767578125-0.8544921875t-0.7989501953125-2.503662109375l0-6.058349609375l2.469482421875,0l0,5.972900390625q0,1.444091796875,1.31591796875,1.444091796875q1.256103515625,0,1.72607421875-0.87158203125l0-6.54541015625l2.47802734375,0l0,9.24560546875l-2.32421875,0z M47.71484375,10.33980520148q0-0.452880859375-0.4486083984375-0.7135009765625t-1.4398193359375-0.4656982421875q-3.29833984375-0.692138671875-3.29833984375-2.802734375q0-1.23046875,1.0211181640625-2.0550537109375t2.6702880859375-0.8245849609375q1.76025390625,0,2.8155517578125,0.828857421875t1.0552978515625,2.1533203125l-2.469482421875,0q0-0.52978515625-0.341796875-0.8758544921875t-1.068115234375-0.3460693359375q-0.623779296875,0-0.965576171875,0.281982421875t-0.341796875,0.7177734375q0,0.41015625,0.3887939453125,0.6622314453125t1.3116455078125,0.435791015625t1.55517578125,0.4144287109375q1.956787109375,0.7177734375,1.956787109375,2.486572265625q0,1.2646484375-1.085205078125,2.0465087890625t-2.802734375,0.7818603515625q-1.162109375,0-2.0635986328125-0.4144287109375t-1.4141845703125-1.136474609375t-0.5126953125-1.5594482421875l2.34130859375,0q0.0341796875,0.657958984375,0.487060546875,1.00830078125t1.21337890625,0.350341796875q0.709228515625,0,1.0723876953125-0.2691650390625t0.3631591796875-0.7049560546875z"/>
                                 </svg>
                              </span>
                           </div>
                           <div class="coin-cap">
                              Marktkapitalisierung: $68M
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="coin">
                           <div class="coin-logo">
                              <img draggable="false" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMTAwLjggNjAzLjYiPjxkZWZzPjxzdHlsZT4ucmlwcGxlc3ZnY2xhc3MtMXtmaWxsOnVybCgjcmlwcGxlLWdyYWRpZW50KTt9PC9zdHlsZT48bGluZWFyR3JhZGllbnQgaWQ9InJpcHBsZS1ncmFkaWVudCIgeDE9IjEzMi42IiB5MT0iMTEyLjkiIHgyPSI0ODYuNyIgeTI9IjQ2NyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iIzExYWFlMiIvPjxzdG9wIG9mZnNldD0iLjYiIHN0b3AtY29sb3I9IiMwODgwYjciLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiMwMTYxOTciLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48cGF0aCBmaWxsPSIjNDc0ZDU1IiBkPSJNNzY1LjMgMjI4LjhjLTUuOS0yLTE3LjgtMy45LTI5LjYtMy45LTM1LjUgMC03MyAyNy42LTczIDYzLjF2MTY3LjdoLTgwLjlWMTU3LjhoNzYuOXYyOS42YzE3LjgtMjEuNyA1MS4zLTM1LjUgODYuOC0zNS41IDExLjggMCAxNy44IDIgMjcuNiAybC03LjggNzQuOXpNODU2LjEgMGE1MSA1MSAwIDAgMSA1MS4zIDUxLjNjMCAyOS42LTIzLjcgNTEuMy01My4zIDUxLjNzLTUzLjMtMjEuNy01My4zLTUxLjNBNTQuNSA1NC41IDAgMCAxIDg1Ni4xIDBtMzkuNCA0NTUuN2gtODAuOVYxNTcuOGg4MC45em0yMzYuNy0zMDMuOGMtMzMuNSAwLTYzLjEgMTEuOC04Ni44IDI5LjZ2LTIzLjdoLTc4Ljl2NDQ1LjhoODAuOVY0MzRhMTI5LjIgMTI5LjIgMCAwIDAgODAuOSAyNy42YzQzLjQgMCA4Ni44LTE5LjcgMTEyLjQtNTEuM2ExNTcuMyAxNTcuMyAwIDAgMCAzNy41LTEwNC41YzAtODYuOC02NS4xLTE1My45LTE0Ni0xNTMuOW0tOS44IDIzNi43Yy00OS4zIDAtODIuOC0zMy41LTgyLjgtODIuOHMzMy41LTgyLjggODIuOC04Mi44YzQzLjQgMCA3Ni45IDM3LjUgNzYuOSA4Mi44IDAgNDcuMy0zNS41IDgyLjgtNzYuOSA4Mi44bTU2Mi4xLTM3MC44aDgwLjl2NDM3LjloLTgwLjl6bTQwNi40IDM5MC41Yy0yOS42IDMzLjUtNzYuOSA1My4zLTEyMi4zIDUzLjMtODguOCAwLTE1NS44LTYxLjEtMTU1LjgtMTU1LjggMC04Mi44IDU3LjItMTU1LjggMTQ2LTE1NS44IDgyLjggMCAxNDIgNjkgMTQyIDE1MS45IDAgNy45IDAgMTUuOC0yIDIzLjdoLTIwOS4xYzMuOSA0MS40IDM3LjUgNzEgODAuOSA3MSAzMy41IDAgNjEuMS0xOS43IDc1LTMzLjV6bS03NS0xNDBjLTItMjUuNi0yNS42LTUzLjMtNTkuMi01My4zcy02MS4xIDI1LjYtNjMuMSA1My4zem0tNTI0LjctMTE2LjRjLTMzLjUgMC02My4xIDExLjgtODYuOCAyOS42di0yMy43aC03Ni45djQ0NS44aDgwLjlWNDM0YTEyOS4yIDEyOS4yIDAgMCAwIDgwLjkgMjcuNmM0My40IDAgODYuOC0xOS43IDExMi40LTUxLjNhMTU3LjMgMTU3LjMgMCAwIDAgMzcuNS0xMDQuNWMtMi04Ni44LTY3LjEtMTUzLjktMTQ4LTE1My45bS05LjggMjM2LjdjLTQ5LjMgMC04Mi44LTMzLjUtODIuOC04Mi44czMzLjUtODIuOCA4Mi44LTgyLjhjNDMuNCAwIDc2LjkgMzcuNSA3Ni45IDgyLjggMCA0Ny4zLTM1LjUgODIuOC03Ni45IDgyLjgiLz48cGF0aCBjbGFzcz0icmlwcGxlc3ZnY2xhc3MtMSIgZD0iTTMxMS43IDQ5LjNhMTA3LjYgMTA3LjYgMCAwIDAtNTMuMyA5Mi43YzAgMTkuNyA3LjkgMzkuNSAxNy44IDU3LjIgNy45IDE1LjggMTEuOCA0My40LTE1LjggNTcuMi0xOS43IDExLjgtNDUuNCAzLjktNTcuMi0xNS44YTE3OC45IDE3OC45IDAgMCAwLTQzLjQtNDMuNCAxMDMuMyAxMDMuMyAwIDAgMC0xMDYuNSAwIDEwNy4zIDEwNy4zIDAgMCAwIDAgMTg1LjVjMzMuNSAxOS43IDczIDE5LjcgMTA2LjUgMGExMDguOCAxMDguOCAwIDAgMCA0MS40LTQzLjRjNy45LTEzLjggMjkuNi0zMS42IDU3LjItMTUuOGE0NC4yIDQ0LjIgMCAwIDEgMTUuOCA1Ny4yIDExOC43IDExOC43IDAgMCAwLTE1LjggNTcuMiAxMDcuNCAxMDcuNCAwIDAgMCA1My4zIDkyLjdjMzMuNSAxOS43IDczIDE5LjcgMTA2LjUgMGExMDcuMyAxMDcuMyAwIDAgMCAwLTE4NS40IDExOSAxMTkgMCAwIDAtNTkuMi0xMy44Yy0xNy44IDAtNDEuNC0xMS44LTQxLjQtNDEuNGE0MC40IDQwLjQgMCAwIDEgNDEuNC00MS40YzE5LjcgMCA0MS40LTMuOSA1OS4yLTEzLjhhMTA3LjMgMTA3LjMgMCAwIDAgMC0xODUuNGMtMTUuOC05LjktMzUuNS0xMy44LTUzLjMtMTMuOHMtMzcuNSAzLjktNTMuMiAxMy43Ii8&#43;PC9zdmc&#43;"
                                 alt="Ripple" class="img-responsive">
                           </div>
                           <div class="coin-name">
                              <span class="over-svg strokeW" style="width: 49.61181640625px; line-height: 1.2;height: 8.75px; position: relative;display: inline-block;">
                                 <!--?xml version="1.0"?-->
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top:0;left: 0;transform:translateY(-25%);" width="49.61181640625px" height="17.5px">
                                    <path fill="#fff" d="M5.716552734375,8.3402934827303l-2.042236328125,0l0,4.554443359375l-2.5634765625,0l0-12.44140625l4.622802734375,0q2.20458984375,0,3.40087890625,0.982666015625t1.1962890625,2.777099609375q0,1.273193359375-0.5511474609375,2.1234130859375t-1.6705322265625,1.3543701171875l2.691650390625,5.084228515625l0,0.11962890625l-2.75146484375,0z M3.67431640625,6.2638774671053l2.06787109375,0q0.965576171875,0,1.495361328125-0.4913330078125t0.52978515625-1.3543701171875q0-0.880126953125-0.4998779296875-1.38427734375t-1.5338134765625-0.504150390625l-2.059326171875,0l0,3.734130859375z M14.722900390625,12.894736842105l-2.47802734375,0l0-9.24560546875l2.47802734375,0l0,9.24560546875z M12.099609375,1.2565532483553q0-0.555419921875,0.3717041015625-0.914306640625t1.0125732421875-0.35888671875q0.63232421875,0,1.00830078125,0.35888671875t0.3759765625,0.914306640625q0,0.56396484375-0.3802490234375,0.9228515625t-1.0040283203125,0.35888671875t-1.0040283203125-0.35888671875t-0.3802490234375-0.9228515625z M25.079345703125,8.3573833264803q0,2.13623046875-0.9698486328125,3.4222412109375t-2.6190185546875,1.2860107421875q-1.4013671875,0-2.264404296875-0.97412109375l0,4.35791015625l-2.469482421875,0l0-12.80029296875l2.2900390625,0l0.08544921875,0.90576171875q0.897216796875-1.07666015625,2.34130859375-1.07666015625q1.708984375,0,2.657470703125,1.2646484375t0.948486328125,3.486328125l0,0.128173828125z M22.60986328125,8.1779399671053q0-1.290283203125-0.4571533203125-1.990966796875t-1.3287353515625-0.70068359375q-1.162109375,0-1.597900390625,0.888671875l0,3.785400390625q0.452880859375,0.914306640625,1.614990234375,0.914306640625q1.768798828125,0,1.768798828125-2.896728515625z M34.931640625,8.3573833264803q0,2.13623046875-0.9698486328125,3.4222412109375t-2.6190185546875,1.2860107421875q-1.4013671875,0-2.264404296875-0.97412109375l0,4.35791015625l-2.469482421875,0l0-12.80029296875l2.2900390625,0l0.08544921875,0.90576171875q0.897216796875-1.07666015625,2.34130859375-1.07666015625q1.708984375,0,2.657470703125,1.2646484375t0.948486328125,3.486328125l0,0.128173828125z M32.462158203125,8.1779399671053q0-1.290283203125-0.4571533203125-1.990966796875t-1.3287353515625-0.70068359375q-1.162109375,0-1.597900390625,0.888671875l0,3.785400390625q0.452880859375,0.914306640625,1.614990234375,0.914306640625q1.768798828125,0,1.768798828125-2.896728515625z M39.0673828125,12.894736842105l-2.47802734375,0l0-13.125l2.47802734375,0l0,13.125z M45.3564453125,13.065635279605q-2.03369140625,0-3.3111572265625-1.24755859375t-1.2774658203125-3.323974609375l0-0.2392578125q0-1.392822265625,0.538330078125-2.4908447265625t1.5252685546875-1.69189453125t2.2515869140625-0.5938720703125q1.89697265625,0,2.9864501953125,1.1962890625t1.0894775390625,3.392333984375l0,1.00830078125l-5.887451171875,0q0.11962890625,0.90576171875,0.7220458984375,1.45263671875t1.5252685546875,0.546875q1.427001953125,0,2.230224609375-1.033935546875l1.21337890625,1.358642578125q-0.555419921875,0.7861328125-1.50390625,1.2261962890625t-2.10205078125,0.4400634765625z M45.074462890625,5.4777446546053q-0.73486328125,0-1.1920166015625,0.49560546875t-0.5853271484375,1.41845703125l3.43505859375,0l0-0.196533203125q-0.01708984375-0.8203125-0.4443359375-1.2689208984375t-1.21337890625-0.4486083984375z"/>
                                 </svg>
                              </span>
                           </div>
                           <div class="coin-cap">
                              Marktkapitalisierung: $12.5B
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="famousPeople">
               <div class="container">
                  <h1 class="text-center">
                     Berühmte Namen im Bereich Kryptowährungen
                  </h1>
                  <h2 class="text-center col-lg-8 col-lg-offset-2">
                     Das sagen einige der reichsten und einflussreichsten Menschen der Welt über Bitcoin:
                  </h2>
               </div>
               <div class="container famousPeopleInnerWrap">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="famousPeopleSinglePerson">
                           <h3 class="famousPerson--name">
                              Bill Gates <small>Gründer von Microsoft</small>
                           </h3>
                           <p class="famousPerson--quote">
                              Bitcoin ist eine technologische Meisterleistung.
                           </p>
                           <div class="famousPerson--portrait bill-gates">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="famousPeopleSinglePerson">
                           <h3 class="famousPerson--name">
                              Kim Dotcom <small>Geschäftsführer von MegaUpload</small>
                           </h3>
                           <p class="famousPerson--quote">
                              Ich glaube, dass Bitcoin in den nächsten zehn Jahren zu einer der wichtigsten Methoden werden wird, Dinge zu bezahlen und Vermögenswerte zu übertragen.
                           </p>
                           <div class="famousPerson--portrait kim-dotcom">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="famousPeopleSinglePerson">
                           <h3 class="famousPerson--name">
                              Eric Schmidt <small>Geschäftsführer von Google</small>
                           </h3>
                           <p class="famousPerson--quote">
                              Bitcoin ist eine bemerkenswerte kryptografische Leistung, und die Fähigkeit, etwas zu schaffen, das in der digitalen Welt nicht duplizierbar ist, hat einen enormen Wert.
                           </p>
                           <div class="famousPerson--portrait eric-schmidt">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="famousPeopleSinglePerson">
                           <h3 class="famousPerson--name">
                              Mike Novogratz <small>Hedgefondsmanager, Galaxy Digital Assets</small>
                           </h3>
                           <p class="famousPerson--quote">
                              Zehn Prozent meines Nettovermögens befinden sich in diesem Bereich.
                           </p>
                           <div class="famousPerson--portrait mike-novogratz">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="famousPeopleSinglePerson">
                           <h3 class="famousPerson--name">
                              Ben Bernanke <small>Vorsitzender der Federal Reserve</small>
                           </h3>
                           <p class="famousPerson--quote">
                              Virtuelle Währungen können langfristig vielversprechend sein, insbesondere wenn die Innovationen ein schnelleres, sichereres und effizienteres Zahlungssystem fördern.
                           </p>
                           <div class="famousPerson--portrait ben-bernanke">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="famousPeopleSinglePerson">
                           <h3 class="famousPerson--name">
                              Peter Thiel <small>Mitbegründer von PayPal</small>
                           </h3>
                           <p class="famousPerson--quote">
                              Bitcoin ist der Anfang von etwas Großartigem: einer Währung ohne Regierung, etwas Notwendiges und Unverzichtbares.
                           </p>
                           <div class="famousPerson--portrait peter-thiel">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="app-features">
               <div class="container">
                  <h1 class="sectionHeadline">
                     Vorteile am Online-Trading
                  </h1>
                  <h2 class="sectionSubheadline">
                     Das Handeln von Bitcoin mit CryptoEngine ermöglicht Ihnen einen schnellen und einfachen Zugang zu Gewinnen ohne großen Aufwand.
                  </h2>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="feature">
                           <div class="feature-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110">
                                 <path fill="none" d="M0 0h110v110H0z"/>
                                 <path d="M87 29v52a6 6 0 0 1-6 6H29a6 6 0 0 1-6-6V29a6 6 0 0 1 6-6h52a6 6 0 0 1 6 6z" fill="#08243b"/>
                                 <path d="M87 32v49a6 6 0 0 1-6 6H29a6 6 0 0 1-6-6V67.3L34.2 60l17 3 15.5-10.4 9-16z" fill="#184b6d"/>
                                 <path d="M87 40v-2h-7v-4h-2v4h-5v2h5v6h-6v-3h-2v3h-1v2h1v6h-8v8h-6v-2h-2v2h-6v-1h-2v1h-6v-2h-2v2h-6v-1h-2v1h-2.2v2H30v6h-7v2h7v6h-7v2h7v7h2v-7h6v7h2v-7h6v7h2v-7h6v7h2v-7h6v7h2v-7h6v7h2v-7h6v7h2v-7h7v-2h-7v-6h7v-2h-7v-6h7v-2h-7v-6h7v-2h-7v-6h7v-2h-7v-6zM64 56h6v6h-6zm6 8v6h-6v-6zm-8 0v6h-6v-6zm-8 0v6h-6v-6zm-8 0v6h-6v-6zm-14 0h6v6h-6zm0 14v-6h6v6zm8 0v-6h6v6zm8 0v-6h6v6zm8 0v-6h6v6zm8 0v-6h6v6zm14 0h-6v-6h6zm0-8h-6v-6h6zm0-8h-6v-6h6zm0-8h-6v-6h6z" fill="#236a91"/>
                                 <path fill="#fff" d="M87 29.8l-10.7 4.5a3 3 0 0 0-3.9 4.2L66.5 49a3 3 0 0 0-3.4 3.7l-10.3 7A3 3 0 0 0 51 59a3 3 0 0 0-2.6 1.5l-11.4-2c-.7-4-6.8-2.8-5.9 1.2L23 64.9v2.4l9.2-6a3 3 0 0 0 4.4-.8l11.4 2a3 3 0 1 0 5.9-1.3l10.3-6.8a3 3 0 0 0 4-4.4L74 39.8a3 3 0 0 0 3.8-3.9L87 32z"/>
                                 <path fill="#fff" d="M59 48l-8 6-8-6V30h16v18z"/>
                                 <path d="M51 34.1a.8.8 0 0 1 .8.8v.2a6.6 6.6 0 0 1 2.2.8 1 1 0 0 1 .5.9 1 1 0 0 1-1 1 1.1 1.1 0 0 1-.5-.2 5.5 5.5 0 0 0-1.3-.5v2.3c2.3.7 3.3 1.6 3.3 3.3s-1.3 2.8-3.2 3v.8a.8.8 0 0 1-1.6 0v-.8a7.7 7.7 0 0 1-3-1 1 1 0 0 1 .5-2 1 1 0 0 1 .6.2 5.8 5.8 0 0 0 2 .8v-2.4C48 40.7 47 40 47 38.1s1.3-2.8 3.2-3V35a.8.8 0 0 1 .8-.8zm-.7 5V37c-.7.1-1 .5-1 1s.2.8 1 1zm1.4 2.6v2.1c.7 0 1.1-.4 1.1-1s-.2-.8-1-1z" fill="#f9c300"/>
                              </svg>
                           </div>
                           <div class="feature-name">
                              Präzises Handeln
                           </div>
                           <div class="feature-text">
                              CryptoEngine bietet Ihnen rund um die Uhr Marktupdates in Echtzeit, sodass Sie genau wissen, wann der Boom bevorsteht.
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="feature">
                           <div class="feature-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110">
                                 <path fill="none" d="M0 0h110v110H0z"/>
                                 <path fill="#e6e6e6" d="M36.93 26.6h-5.17v-5.17a2.59 2.59 0 0 1 5.17 0zm10.32 0h-5.16v-5.17a2.58 2.58 0 1 1 5.16 0zm10.33 0h-5.16v-5.17a2.58 2.58 0 0 1 5.16 0zm10.33 0h-5.16v-5.17a2.58 2.58 0 0 1 5.16 0zm10.33 0h-5.17v-5.17a2.59 2.59 0 0 1 5.17 0zM36.93 88.57a2.59 2.59 0 0 1-5.17 0V83.4h5.17zM26.6 78.24h-5.17a2.59 2.59 0 0 1 0-5.17h5.17zm0-10.33h-5.17a2.58 2.58 0 0 1 0-5.16h5.17zm0-10.33h-5.17a2.58 2.58 0 0 1 0-5.16h5.17zm0-10.33h-5.17a2.58 2.58 0 1 1 0-5.16h5.17zm0-10.32h-5.17a2.59 2.59 0 0 1 0-5.17h5.17zm64.55 38.73a2.59 2.59 0 0 1-2.58 2.58H83.4v-5.17h5.17a2.59 2.59 0 0 1 2.58 2.59zm0-10.33a2.59 2.59 0 0 1-2.58 2.58H83.4v-5.16h5.17a2.58 2.58 0 0 1 2.58 2.58zm0-10.33a2.58 2.58 0 0 1-2.58 2.58H83.4v-5.16h5.17A2.58 2.58 0 0 1 91.15 55zm0-10.33a2.58 2.58 0 0 1-2.58 2.58H83.4v-5.16h5.17a2.59 2.59 0 0 1 2.58 2.58zm0-10.33a2.59 2.59 0 0 1-2.58 2.59H83.4v-5.17h5.17a2.59 2.59 0 0 1 2.58 2.58zm-43.9 54.23a2.58 2.58 0 0 1-5.16 0V83.4h5.16zm10.33 0a2.58 2.58 0 0 1-5.16 0V83.4h5.16zm10.33 0a2.58 2.58 0 0 1-5.16 0V83.4h5.16zm10.33 0a2.59 2.59 0 0 1-5.17 0V83.4h5.17z"/>
                                 <path fill="#4c4c4c" d="M83.4 80.82l-2.58 2.58H29.18l-2.58-2.58V29.18l2.58-2.58h51.64l2.58 2.58v51.64z"/>
                                 <path fill="#969696" d="M33.05 33.05h43.9v43.9h-43.9z"/>
                                 <path fill="#f9c300" d="M61.45 38.86L42.09 58.23h9.68l-3.22 12.91 19.36-19.37h-9.68l3.22-12.91z"/>
                              </svg>
                           </div>
                           <div class="feature-name">
                              Spitzentechnologie
                           </div>
                           <div class="feature-text">
                              CryptoEngine nutzt die modernsteTrading-Technologie, um für einen problemlosen und effizienten Ablauf Ihrer Geschäfte zu sorgen und um sicherzustellen, dass Sie den bestmöglichen Schutz erhalten.
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="feature">
                           <div class="feature-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 110">
                                 <path fill="#4ac3af" d="M23 63.04h64v18H23z"/>
                                 <path fill="#8ce3d4" d="M23 63.04l8-16h48l8 16H23z"/>
                                 <path fill="#0d9681" d="M28 61.04l6-12h42l6 12H28z"/>
                                 <circle fill="#c2f8f0" cx="71" cy="55.04" r="1"/>
                                 <circle fill="#c2f8f0" cx="39" cy="55.04" r="1"/>
                                 <ellipse fill="#c2f8f0" cx="55" cy="55.04" rx="6" ry="5"/>
                                 <path fill="#17b198" d="M55 51.56a.45.45 0 0 1 .49.4v.11a4.47 4.47 0 0 1 1.36.38.51.51 0 0 1 .34.47.58.58 0 0 1-.64.52.75.75 0 0 1-.33-.07 3.4 3.4 0 0 0-.78-.26v1.19c1.43.32 2 .8 2 1.68s-.81 1.44-2 1.55v.41a.5.5 0 0 1-1 0v-.42a5.45 5.45 0 0 1-1.82-.52.53.53 0 0 1-.32-.47.59.59 0 0 1 .7-.53.86.86 0 0 1 .37.1 4 4 0 0 0 1.2.44v-1.27c-1.35-.31-2-.74-2-1.67s.79-1.44 2-1.54V52a.45.45 0 0 1 .43-.44zm-.44 2.53V53c-.45.05-.65.24-.65.49s.09.45.61.6zm.88 1.37v1.09c.44 0 .67-.23.67-.51s-.2-.43-.71-.58z"/>
                                 <path fill="#c2f8f0" d="M23 65.04h64v2H23zm0 4h64v2H23zm0 4h64v2H23zm0 4h64v2H23z"/>
                                 <path fill="#8ce3d4" d="M23 65.04h21.53l2-2H23v2zm0 4h17.53l2-2H23v2zm0 10v2h5.53l2-2H23zm0-6h13.53l2-2H23v2zm0 4h9.53l2-2H23v2z"/>
                                 <path fill="#c2f8f0" d="M23 63.04h23.53l2-2H28l6-12h26.53l2-2H31l-8 16z"/>
                                 <path fill="#17b198" d="M49 55c0-2.76 2.69-5 6-5a6.78 6.78 0 0 1 3.55 1l2-2H34l-6 12h20.53l2.36-2.37A4.64 4.64 0 0 1 49 55zm-10 1a1 1 0 1 1 1-1 1 1 0 0 1-1 1z"/>
                                 <circle fill="#fff" cx="39" cy="55.04" r="1"/>
                                 <path fill="#fff" d="M49 55a4.64 4.64 0 0 0 1.89 3.63L52.61 57a.5.5 0 0 1-.3-.46A.58.58 0 0 1 53 56a.79.79 0 0 1 .37.1l.12.06.9-.91c-1.22-.3-1.84-.73-1.84-1.62s.79-1.44 2-1.54V52a.5.5 0 0 1 1 0v.11a4.32 4.32 0 0 1 1.36.38.57.57 0 0 1 .18.12L58.55 51A6.78 6.78 0 0 0 55 50c-3.31 0-6 2.28-6 5z"/>
                                 <path fill="#fff" d="M55.4 53.11v1l.79-.79a4.2 4.2 0 0 0-.79-.21zm-1.53.42c0 .24.13.41.65.56V53c-.45.09-.65.28-.65.53zM23 67.04h19.53l2-2H23v2zm0 4h15.53l2-2H23v2zm0 4h11.53l2-2H23v2zm0 4h7.53l2-2H23v2z"/>
                                 <path fill="#f9c300" d="M69.24 27.2l3.44 3.44-7.24 7.24-8.14-8.14L40 47.04h6.91L57.3 36.65l8.14 8.14L76.13 34.1l3.44 3.44 3.79-14.12-14.12 3.78z"/>
                                 <path fill="none" d="M0 0h110v110H0z"/>
                                 <path fill="#f9c300" d="M74.2 82.77a2.8 2.8 0 0 0 2.8 2.81h19.63a2.81 2.81 0 0 0 2.81-2.81v-14A2.8 2.8 0 0 0 96.63 66H77a2.8 2.8 0 0 0-2.8 2.8z"/>
                                 <path d="M95.93 66h-4.21v-5a4.91 4.91 0 1 0-9.81 0v5H77.7v-5a9.12 9.12 0 1 1 18.23 0z" fill="#969696"/>
                                 <path d="M88.73 72.51a2.36 2.36 0 1 0-3.45 2.09L84 81.37h4.72l-1.26-6.77a2.35 2.35 0 0 0 1.27-2.09z" fill="#692e19"/>
                              </svg>
                           </div>
                           <div class="feature-name">
                              Vertrauenswürdige Geschäfte
                           </div>
                           <div class="feature-text">
                              CryptoEngine ist weltweit führend im Onlinehandel und wurde international für sein intuitives Design und seine benutzerfreundliche Plattform anerkannt.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="userTable">
            <div class="container">
               <div class="userTable-block">
                  <h1 id="liveUsers" class="text-center">
                     Online-Händler
                  </h1>
                  <div class="table-responsive">
                     <div id="tradersTableWrap">
                        <div class="tradersTableFadeOutWrap">
                           <div class="tradersTableFadeOut"></div>
                           <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tradersTable table-striped">
                              <tbody>
                                 <tr>
                                    <th width="158" scope="col">Nutzer</th>
                                    <th width="160" scope="col">Zeit</th>
                                    <th width="104" scope="col">Angemeldet</th>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="tradersTableWinnerCell"><i class="fa fa-check"></i></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <hr class="divider">
         <section class="faq">
            <div class="container">
               <h1>FAQ</h1>
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <div class="faqBlock">
                        <div class="faqItem">
                           <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq1">
                              Wie viel Geld kann ich verdienen?
                           </a>
                           <div class="collapse" id="faq1">
                              <p>
                                 Ihre Gewinne hängen von dem Betrag ab, den Sie investieren, und den Geschäften, die Sie tätigen. Beim Handel gibt es keine Grenzen.
                              </p>
                           </div>
                        </div>
                        <div class="faqItem">
                           <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq2">
                              Brauche ich Erfahrung als Börsen-Makler?
                           </a>
                           <div class="collapse" id="faq2">
                              <p>
                                 Nein! Die Plattform von CryptoEngine ist für alle Niveaus konzipiert, vom kompletten Anfänger bis zum Profi. Sie erhalten Hilfe und Ratschläge von Ihrem registrierten Broker und Lernmaterialien, die Ihnen auf Ihrem Weg helfen.
                              </p>
                           </div>
                        </div>
                        <div class="faqItem">
                           <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq3">
                              Was kostet es mich?
                           </a>
                           <div class="collapse" id="faq3">
                              <p>
                                 Der Service von CryptoEngine ist völlig kostenlos. Das einzige Geld, das Sie benötigen, ist Ihre Investitionssumme, die ein Minimum von 250 $ beträgt. Damit können Sie handeln und investieren, wie Sie es wünschen.
                              </p>
                           </div>
                        </div>
                        <div class="faqItem">
                           <a class="faqToggle collapsed" data-toggle="collapse" data-target="#faq4">Wie viele Mitglieder gibt es?</a>
                           <div class="collapse" id="faq4">
                              <p>
                                 CryptoEngine hat derzeit über 6.000 Mitglieder weltweit, aber diese Zahl wächst von Jahr zu Jahr.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="getStarted" id="startNow">
            <div class="container">
               <h1 class="sectionHeadline text-center">
                  Investieren Sie noch heute und profitieren Sie vom nächsten Bitcoin-Boom
               </h1>
               <div class="row">
                  <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
                     <div class="registerForm registerFormHome" style="color: #101010;">
                        <h3 style="font-weight: 700;">ÄNDERN SIE HEUTE IHR LEBEN!</h3>
                        <div class="app" data-geo="EU" id="app2" data-url="<?php echo $thankyou ?>" data-butt="Beginnen Sie jetzt" data-type="2"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <footer>
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12">
                     <div class="footerLogo" title="CryptoEngine">
                        <svg viewBox="0 0 105 30.11">
                           <use xlink:href="#crypto-engine_logo_header"></use>
                        </svg>
                     </div>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-12">
                     <div class="footerLinks">
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Terms of use</a> | <a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy Policy</a>
                        <span class="copyright">&copy; 2020</span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                  <div class="serviceReplacer disclaimerFooter" id="disclaimertext"><p><strong>WICHTIG</strong>:Erträge und Haftungsausschluss</p><p>Die Erträge und Einnahmen von CryptoEngine, REAL_HOST(ab jetzt „diese Website“) dienen nur als Beispiele potentieller Einnahmen. Der Erfolg der Personen in den Erfahrungsberichten und anderen Beispielen sind außergewöhnliche Ergebnisse und daher nicht als Garantie dafür gedacht, dass Sie oder andere dieselben Ergebnisse erzielen werden. Individuelle Ergebnisse können abweichen und hängen vollständig davon ab wie Sie CryptoEngine nutzen.</p><p>Diese Website ist nicht für Ihre Handlungen verantwortlich. Sie tragen die alleinige Verantwortung für Ihre Handlungen und Entscheidungen, wenn Sie Produkte und Dienstleistungen nutzen, und sollten daher immer Vorsicht und gebührende Sorgfalt walten lassen. Sie stimmen zu, dass diese Webseite in keinster Weise Ihnen gegenüber für die Ergebnisse der Verwendung unserer Produkte und Dienstleistungen haftbar ist. In unseren „Geschäftsbedingungen“ können Sie die Einzelheiten zum Thema Haftbarkeit und anderer Einschränkungen nachlesen.</p><p>Diese Website erhält eine Vergütung für die Produkte und Dienstleistungen, die sie Ihnen empfiehlt. Sollten Sie nicht wünschen, dass diese Website eine Vergütung für Empfehlungen erhält, raten wir Ihnen zu einer Online-Suche nach einem ähnlichen, unabhängigen Produkt.</p><p>*Erfahrungsberichte:</p><p>Alle Figuren, Informationen und Ereignisse auf dieser Website sind fiktiv. Jegliche Ähnlichkeit zu aktuellen Ereignissen oder Personen, lebend oder tot, ist reiner Zufall.</p></div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <script src="js/bundle.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
      <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
      <script>
         var globalCountry = "US";
         var globalLocale = "de";
         var globalCurrency = '€';
         var globalProject = "cryptoengine";
         var translations = {};
      </script>
      <script>
         document.addEventListener("DOMContentLoaded", function() {
             var d = new Date();
             var month = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
             document.querySelector('.gtd-date-current-date').innerHTML = month[d.getMonth()] + " " + d.getDate() + ', ' + new Date().getFullYear();
         });
      </script>
      <script>
         $(document).ready(function () {
             $('.btn-extra').on('click', function (e) {
                 e.preventDefault();
                 $('html, body').animate({
                     scrollTop: $('.hero-form').offset().top
                 }, 'slow');
             });
         });
      </script>
</body>
</html>
