<?php 
    include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="en" class="ever">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8">
    <title>Bitcoin Trend App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">


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

    <style>
        @media screen and (max-width: 768px){
            .play-btn {
                opacity: 1 !important;
                display: flex !important;
            }
        }
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
        input:not([type=checkbox]) {
            height: 40px;
            border-radius: 0;
        }
        form .input-wrap {
            margin: 10px 0;
        }
        form .checkbox-wrap {
            display: flex;
            justify-content: flex-start;
        }
        form .checkbox-wrap input{
            height: auto !important;
            width: auto !important;
        }
        input {
            width: auto;
            height: auto;
            margin-bottom: 0 !important;
        }
    </style>

</head>

<body class="en" style="padding-right: 0px;">
    <offers-root _nghost-eug-c0="" ng-version="7.2.15">
        <section _ngcontent-eug-c0="" offerslangclass="" class="style-en">
            <!---->
            <!---->
            <router-outlet _ngcontent-eug-c0=""></router-outlet>
            <offers-opt-in _nghost-eug-c2="">
                <div _ngcontent-eug-c2="" class="exit_popup" id="popup" style="display: none;">
                    <div _ngcontent-eug-c2="" class="exit_popup_overlay"></div>
                    <div _ngcontent-eug-c2="" class="popup_inner">
                        <a _ngcontent-eug-c2="" class="close_button" onclick="$('#popup').css('display','none');$('body').removeClass('exit-show');mousebottom = 0;setTimeout(function(){pu=1;},5000);" style=""></a>
                        <div _ngcontent-eug-c2="" class="popup_content">
                            <div _ngcontent-eug-c2="" class="popup_content_inner">
                                <div _ngcontent-eug-c2="" class="popup-content-wrapper">
                                    <div _ngcontent-eug-c2="" class="popup-header">
                                        <div _ngcontent-eug-c2="" class="title">Only A Few Spots Left...</div>
                                        <div _ngcontent-eug-c2="" class="description">Enter your email below and&nbsp;become the <b>next Bitcoin millionaire</b></div>
                                    </div>
                                </div>
                                <div _ngcontent-eug-c2="" class="popup-form-wrapper">
                                    <div _ngcontent-eug-c2="" class="register-form">
                                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="REGISTER NOW"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div _ngcontent-eug-c2="" id="header">
                    <div _ngcontent-eug-c2="" class="header-content">
                        <div _ngcontent-eug-c2="" class="header-logo"><a _ngcontent-eug-c2="" href="javascript:;">Bitcoin Trend App</a></div>
                        <div _ngcontent-eug-c2="" class="slogan-wrapper">
                            <div _ngcontent-eug-c2="" class="trim-spaces" style="height: 63.224px;">
                                <div _ngcontent-eug-c2="" class="scalable" style="transform: scale(0.987876);">
                                    <div _ngcontent-eug-c2="" class="header-slogan">Earn Up To $500 an Hour From Bitcoin</div>
                                    <div _ngcontent-eug-c2="" class="header-subslogan">Even When Crypto Is Crashing</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div _ngcontent-eug-c2="" id="wrapper">
                    <div _ngcontent-eug-c2="" id="container">
                        <section _ngcontent-eug-c2="" class="section section-lp1-intro scroll-trigger" id="lp1-intro">
                            <div _ngcontent-eug-c2="" class="section-container">
                                <div _ngcontent-eug-c2="" class="section-content">
                                    <div _ngcontent-eug-c2="" class="intro-row">
                                        <div _ngcontent-eug-c2="" class="video-col">
                                            <div _ngcontent-eug-c2="" class="video-wrapper">
                                                <div class="video-wrapper">
                                                    <div class="video">
                                                        <div class="embed-responsive embed-responsive-16by9 video-insert" data-poster="video/screenshot.png" data-video="video-index.mp4">
                                                            <video src="video/video-index.mp4" playsinline="true" controls="controls" preload="none" allowfullscreen="true" poster="video/screenshot.png" style="width: 100%; height: 100%;"></video><div class="play-btn"></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div _ngcontent-eug-c2="" class="form-col">
                                            <div _ngcontent-eug-c2="" class="main-form-wrapper">
                                                <div _ngcontent-eug-c2="" class="form-title">Access <b>Bitcoin Trend App</b> before your private invitation expired…</div>
                                                <div _ngcontent-eug-c2="" class="form-description">Enter your best email address in the form below to get immediate <b>FREE</b> access to the <b>Bitcoin Trend App</b> software.</div>
                                                <div _ngcontent-eug-c2="" class="register-form">
                                                    <div class="app" id="app2" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="REGISTER NOW"></div>
                                                </div>
                                            </div>
                                            <div _ngcontent-eug-c2="" class="logos"><img _ngcontent-eug-c2="" alt="" src="assets/images/media/safe.png"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section _ngcontent-eug-c2="" class="section section-faq" id="faq">
                            <div _ngcontent-eug-c2="" class="section-container">
                                <div _ngcontent-eug-c2="" class="section-content">
                                    <div _ngcontent-eug-c2="" class="section-title">Still Have Questions?</div>
                                    <ul _ngcontent-eug-c2="" class="faq-list">
                                        <li _ngcontent-eug-c2="">
                                            <div _ngcontent-eug-c2="" class="question">Is the app safe?</div>
                                            <div _ngcontent-eug-c2="" class="answer">Yes, when you trade with our app, your funds are insured by a regulated &amp; approved broker.</div>
                                        </li>
                                        <li _ngcontent-eug-c2="">
                                            <div _ngcontent-eug-c2="" class="question">Is Bitcoin risky?</div>
                                            <div _ngcontent-eug-c2="" class="answer">Every investor knows that there is a certain level of risk with any investment. But there is a sufficient amount of data to prove that Bitcoin and cryptocurrency aren’t going anywhere. So choosing not to invest
                                                in crypto is a far riskier choice when you consider the math.</div>
                                        </li>
                                        <li _ngcontent-eug-c2="">
                                            <div _ngcontent-eug-c2="" class="question">Why are we giving this away for free?</div>
                                            <div _ngcontent-eug-c2="" class="answer">It’s simple math. The more we advocate for Bitcoin and provide people the tools they need to invest successfully, the bigger cryptocurrency grows. Which means, the more money we all make.</div>
                                        </li>
                                        <li _ngcontent-eug-c2="">
                                            <div _ngcontent-eug-c2="" class="question">I have never made a dollar online. Is this too advanced for me?</div>
                                            <div _ngcontent-eug-c2="" class="answer">The system breaks everything down for you so you don’t need any past experience. In fact, the less you know might even be an advantage...because you won’t be biased.</div>
                                        </li>
                                        <li _ngcontent-eug-c2="">
                                            <div _ngcontent-eug-c2="" class="question">Will I really make money in 24 hours?</div>
                                            <div _ngcontent-eug-c2="" class="answer">If you follow our instructions, it’ll be virtually impossible to not make money</div>
                                        </li>
                                        <li _ngcontent-eug-c2="">
                                            <div _ngcontent-eug-c2="" class="question">How long will it take out of my day?</div>
                                            <div _ngcontent-eug-c2="" class="answer">Commit to setting aside 15 minutes a day to make this work. You can work from anywhere with an internet connection. Simply login to your personal dashboard from your laptop, phone or tablet.</div>
                                        </li>
                                        <li _ngcontent-eug-c2="">
                                            <div _ngcontent-eug-c2="" class="question">How do I get started?</div>
                                            <div _ngcontent-eug-c2="" class="answer">Fill out the form on this page, click the button and follow the simple instructions to make your first paycheck online.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <section _ngcontent-eug-c2="" class="section section-comments" id="comments">
                            <div _ngcontent-eug-c2="" class="section-container">
                                <div _ngcontent-eug-c2="" class="section-content">
                                    <div _ngcontent-eug-c2="" class="section-title">What Others Are Saying About Our App</div>
                                    <div _ngcontent-eug-c2="" class="messenger-wrapper">
                                        <div _ngcontent-eug-c2="" class="chat-wrapper">
                                            <div _ngcontent-eug-c2=""><img _ngcontent-eug-c2="" alt="" src="assets/images/media/1_en.png"></div>
                                            <div _ngcontent-eug-c2=""><img _ngcontent-eug-c2="" alt="" src="assets/images/media/2_en.png"></div>
                                            <div _ngcontent-eug-c2=""><img _ngcontent-eug-c2="" alt="" src="assets/images/media/3_en.png"></div>
                                            <div _ngcontent-eug-c2=""><img _ngcontent-eug-c2="" alt="" src="assets/images/media/4_en.png"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section _ngcontent-eug-c2="" class="section section-bottom-form" id="bottom-form">
                            <div _ngcontent-eug-c2="" class="section-container">
                                <div _ngcontent-eug-c2="" class="section-content">
                                    <div _ngcontent-eug-c2="" class="section-title">Access <b>Bitcoin Trend App</b> before your private invitation expired…</div>
                                    <div _ngcontent-eug-c2="" class="section-description">Enter your best email address in the form below to get immediate <b>FREE</b> access to the <b>Bitcoin Trend App</b> software.</div>
                                    <div _ngcontent-eug-c2="" class="bottom-form-wrapper">
                                        <div _ngcontent-eug-c2="" class="register-form">
                                            <div class="app" id="app3" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="REGISTER NOW"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="html-injections" style="display: none;"></div>
                </div>
                <footer _ngcontent-eug-c2="" id="footer">
                    <div _ngcontent-eug-c2="" class="footer-content">
                        <div _ngcontent-eug-c2="" class="footer-description"><b _ngcontent-eug-c2="">Important Risk Note:</b> Trading in FX and CFDs involves a high risk of loss due to the leveraged nature of the trading which might lead to the total loss of your capital and which might not be appropriate
                            for all types of investors. Please read our full risk warning and the relevant broker you will be registered with to ensure that you understand the risks involved prior to proceeding, taking into consideration your relevant
                            experience. Seek independent advice if necessary. The information contained in this website and disclosure documents is of a general nature only, and does not take into account your personal circumstances, financial situation
                            or needs. You should consider the brokerage Client Agreement carefully, and seek independent advice before deciding whether trading in such products is suitable for you.</div>
                    </div>
                </footer>
                <div _ngcontent-eug-c2="" class="scroll-form" id="scrollForm">
                    <div _ngcontent-eug-c2="" class="scroll-logo"><span _ngcontent-eug-c2="">Weed Millionaire</span></div>
                    <div _ngcontent-eug-c2="" class="scroll-form-content">
                    </div>
                </div>
                <div _ngcontent-eug-c2="" class="">
                    <div _ngcontent-eug-c2="" class="user_status widget widget-people animated bounceInDown" offersbasicwidget="" style="display: none;">
                        <div _ngcontent-eug-c2="" class="user_status__img widget-photo" style="background-size: cover; background-image: url('img/2.jpg');"></div>
                        <div _ngcontent-eug-c2="" class="user_status__status">
                            <p _ngcontent-eug-c2=""><span _ngcontent-eug-c2="" class="widget-name">Roger Johnson</span><br _ngcontent-eug-c2=""> just joined <br _ngcontent-eug-c2=""><span _ngcontent-eug-c2="" class="widget-currency"></span></p>
                        </div>
                    </div>
                </div>
                <div _ngcontent-eug-c2="" class="widget widget-spots block-hidden shown animated bounceInLeft">
                    <div _ngcontent-eug-c2="" class="widget-inner">
                        <div _ngcontent-eug-c2="" class="content">
                            <div _ngcontent-eug-c2="" class="spots-left">
                                <div _ngcontent-eug-c2="" class="spots-num">15</div>
                                <div _ngcontent-eug-c2="" class="description">Spots Left</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <!---->
            </offers-opt-in>
            <!---->
            <!---->
            <!---->
        </section>
    </offers-root>
    <div class="btc-widget-block">
        ​
        <div id="btc-widget" style="display: block; background-color: rgb(255, 255, 255); width: 285px; border: 2px solid rgb(225, 229, 234); border-radius: 10px; padding: 10px 0px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; overflow: hidden;"><img alt="logo" src="img/btc.png" id="btc-widget-image" style="width: 64px; height: 64px; margin: 0 40px 0 15px; float: left;">
            <div id="btc-widget-wrapper" style="padding-top: 9px;">
                <div id="btc-widget-title" style="color: #1070e0; font-weight: bold;">Bitcoin</div>
                <div style="font-weight: bold; font-size: 1.17em;"><span id="btc-widget-price-block" style="color: red;"> $7707.38</span>&nbsp;<span id="btc-widget-direction-block" style="color: red;">↓</span></div>
            </div>
        </div>
    </div>
    <script src="https://currencyinfo.net/crypto/widget.js"></script>
    <script>
        Currency.init({
            el: '#btc-widget',
            currency: 'BTC',
            widget: 'block'
        })
    </script>
    <script type="text/javascript" src="js/runtime.6a1dfd8af8dcb2cab549.js"></script>
    <script type="text/javascript" src="js/polyfills.5ef318d2cc9ff1bb01ce.js"></script>
    <script type="text/javascript" src="js/styles.138aba0c42b4ce1a824a.js"></script>
    <script type="text/javascript" src="js/scripts.f9772da8652d5a6cf785.js"></script>

    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>