<?php 
    include_once 'header.php'; 
?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
<base href="<?php echo $base ?>">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome! - Chain Reaction</title>
    <link rel="shortcut icon" href="datacontent/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="datacontent/img/favicon.ico" type="image/x-icon">
    <!-- Open Graph -->
    <?php $seoText = 'Welcome! - Chain Reaction'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>datacontent/img/logo-new.png"/>
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
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link href="datacontent/css/css.css" rel="stylesheet" />
    <link href="datacontent/css/css_custom.css" rel="stylesheet" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900&subset=latin,cyrillic' rel="preload" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    
    <script type='text/javascript' src="datacontent/js/jquery.js"></script>
    <script type='text/javascript' src="datacontent/js/modernizr.js"></script>
</head>

<body>

    <div class="wrapper header">
        <div class="orange-chainStreap">
            <div class="headerLogoChain">
                <img src="datacontent/img/logo-new.png" class="" alt="Chain ReactionS" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-4">
                        <img src="datacontent/img/trusted-new.png" class="img-responsive center-block" alt="Chain ReactionS" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper subheader patternChain ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="teaserReaction">
                        <div class="class_1" style="display: inline !important;"></div>
                        <div class="class_2" style="display: inline !important;"></div>
                        <div class="class_3" style="display: inline !important;"></div>
                        <div data-aos="zoom-in" data-aos-duration="1000">
                            <div class="class_4" style="display: inline !important;"></div>
                            <div class="class_5" style="display: inline !important;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="video-wrapper">
                        <div class="video">
                            <div class="embed-responsive embed-responsiveVideoChain">
                                <div class="video" style="width:100%;height:100%;position:absolute;border:none;">
                                    <video controls="controls" poster="datacontent/video/poster-1.jpg" allowfullscreen="">
                                        <source src="datacontent/video/video-1.mp4" type="video/mp4" />
                                    </video>
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="bottom-arrow"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <button class="default open_popup" data-toggle="modal" data-target="#SubscribeModal">GET AN
                        UNLIMITED ACCESS <nobr>RIGHT NOW</nobr><i class="shinybut"></i></button>
                </div>
            </div>
        </div>
    </div>
    <style>
        .floating-window {
            display: block !important;
        }

        #email-error {
            color: red;
        }

        #firstname-error {
            color: red;
        }
    </style>

    <!-- Modal Stats 1 -->
    <div id="SubscribeModal" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                </div>
                                <span class="progress-label">50% complete </span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            You are almost there: Enter your email address and click the button below to access
                        </div>
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            <h1>
                                Get unlimited access to the program <br /><b>«Chain Reaction»</b>
                            </h1>
                        </div>
                        <div class="app" id="app1" data-type="1" data-butt="GET ACCESS"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper footer pattern ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-logo">
                        <img src="datacontent/img/logo-footer-new.png" />
                    </div>
                </div>
                <div class="col-xs-12">
                    <p>2021 <a href="/" style="cursor: auto; color: #ddd;">©</a> Chain Reaction. All rights reserved.</p>
                    <p>
                        <a href="#" data-name="policy" class="alterlink">Risk Disclosure</a> |
                        <a href="#" data-name="terms" class="alterlink">Terms of Use</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="datacontent/js/bootstrap.js"></script>
    <script src="datacontent/js/jqueryval.js"></script>
    <script src="datacontent/js/stepOne.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
<script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>