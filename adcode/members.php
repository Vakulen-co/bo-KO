<?php
include_once 'config.php';
?>
<html lang="en" class="desktop portrait no-touch">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <title>不要错过这个机会!</title>
    <?php $seoText = 'Welcome!'; ?>
    <meta name="description" content="<? echo $seoText; ?>" />
    <meta name="keywords" content="<? echo $seoText; ?>" />
    <meta property="og:title" content="<? echo $seoText; ?>" />
    <meta property="og:description" content="<? echo $seoText; ?>" />
    <meta property="og:image" content="<? echo $base; ?>video/poster.jpg" />
    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="450" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $base; ?>" />
    <link rel="canonical" href="<?php echo $base; ?>" />
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
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/checkbox-svg.css">
    <link rel="stylesheet" href="css/html-members.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
</head>

<body class="iti-mobile">
    <div id="popup_custom" class="popup_custom">
        <div class="popup_overlay"></div>
        <a class="close_button">×</a>
        <div class="popup_inner">
            <div class="popup_content">
                <div class="popup_content_inner">
                    <div class="popup-content-wrapper">
                        <div class="popup-header">
                            <div class="title" id="blink">
                                You Just Made a BIG Mistake!
                            </div>
                            <div class="subtitle">
                                This is Your <b>LAST CHANCE</b> to Join The <b><i>AD Code</i></b> and secure your
                                financial future.
                            </div>
                        </div>
                    </div>
                    <div class="popup-form-wrapper">
                        <div class="form-container-unique">
                            <div class="form-block-2 whitee">
                                <div class="app intgrtn-form-signup gtm-popup-full-land neo_form" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Start now"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/logo.png" class="img-fluid logo">
                    </div>
                </div>
            </div>
            <div class="license-wrap">
                <div class="license-count">
                    <span class="count">7</span>
                </div>
                <div class="license-info">
                    <span class="license-left">Free Copies Left</span>
                    <span>Updated <span class="date">Feb 2 2021</span></span>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="home-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="header-title">Guaranteed profits up to <b class="underline"><span class="currency">$</span>5,000 PER DAY</b> OR MORE STARTING TODAY</span>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="videoWrapper">
                        <div class="video">
                            <video controls="controls" poster="video/poster.jpg" allowfullscreen="">
                                <source src="video/video.mp4" type="video/mp4" />
                            </video>
                            <div class="play-btn"></div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 header-form">
                        <div class="signup-form">
                            <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Start now"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="as-seen-on">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/partner-section.png" class="img-fluid seen-on-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="about-img-wrap">
                            <img src="images/about-me-new.png" class="img-fluid about-img">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="about-us-info">
                            <p class="title">Meet Rob <span class="goldman">Goldman</span></p>
                            <p class="pos">CEO &amp; Founder, AD Code</p>
                            <div class="div-wrap">
                                <div class="divider"></div>
                            </div>
                            <p>AD Code is a premium online ad revenue system that provides members with passive income.
                                We
                                have just launched internationally and we’re looking for beta testers to make profits of
                                over</p>
                            <p class="earnings"><span class="currency">$</span>5000 a day</p>
                            <p class="p-video">Watch the video right now to learn more.</p>
                            <p class="sign">R <span class="goldman">Goldman</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-info">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            <p class="title">Step 1</p>
                            <p class="subtitle">Fill In The Form</p>
                            <p>When your registration is accepted you will automatically become a full member of the AD
                                Code
                                System</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-info">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <p class="title">Step 2</p>
                            <p class="subtitle">Activate Your Account</p>
                            <p>Next you need to activate your AD Code account, we will walk you through this simple
                                process</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-info">
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <p class="title">Step 3</p>
                            <p class="subtitle">Watch Your Profits Grow</p>
                            <p>Follow all the instructions in the AD Code System and start to earn up to <span class="currency">$</span>5,000+ per day
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bank-acc">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">My Bank Account Could Soon Be Yours...</p>
                        <p class="subtitle">In The Next 30 Days</p>
                        <div class="div-wrap">
                            <div class="divider"></div>
                        </div>
                        <img src="images/Bank_USD.jpg" class="img-fluid img-bank_cur" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script>2021 All Rights Reserved</p>
                        <a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy</a> | <a href="javascript:void(0)" data-name="terms" class="alterlink">Terms</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="disclaimerAndText" style="font-size:0.7em;color:inherit;padding:15px;border:1px solid inherit;margin-top: 15px;">
                            IMPORTANT: Earnings and Legal Disclaimers Earnings and income representations made by <span class="disclaimer-brand_name__new">adzcovde.info</span>, (collectively “This Website” only
                            used as aspirational
                            examples of your earnings potential. The success of those in the testimonials and other
                            examples are exceptional
                            results and therefore are not intended as a guarantee that you or others will achieve the
                            same results.
                            Individual results will vary and are entirely dependent on your use of <span class="disclaimer-brand_name__new">adzcovde.info</span>.
                            This Website is not responsible for your actions. You bear sole responsibility for your
                            actions and decisions
                            when using products and services and therefore you should always exercise caution and due
                            diligence. You agree
                            that this Website is not liable to you in any way for the results of using our products and
                            services. See our
                            Terms &amp; Conditions for our full disclaimer of liability and other restrictions. This Website
                            may receive
                            compensation for products and services they recommend to you. If you do not want This
                            Website to be compensated
                            for a recommendation, then we advise that you search online for a similar product through a
                            non-affiliate link.
                            Trading can generate notable benefits, however, it also involves the risk of partial/full
                            loss of the invested
                            capital, therefore, you should consider whether you can afford to invest. ©<span id="yearDisclaimerNew">2021</span><br>
                            USA REGULATION NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the
                            United States.
                            Invest in Crypto is not supervised or regulated by any financial agencies nor US agencies.
                            Any unregulated
                            trading activity by U.S. residents is considered unlawful. <span class="disclaimer-brand_name__new">adzcovde.info</span> does not accept customers located
                            within the United States
                            or holding an American citizenship.
                            <script type="text/javascript">
                                var yearDisclaimerNew = new Date();
                                document.getElementById("yearDisclaimerNew").innerHTML = yearDisclaimerNew
                                    .getFullYear();
                                document.querySelectorAll(".disclaimer-brand_name__new").forEach(function(brandName) {
                                    brandName.innerHTML = location.hostname;
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script ssrc="js/bootstrap.min.js" defer=""></script>
    <script ssrc="js/device.min.js"></script>
    <script ssrc="js/custom.js" defer=""></script>
    <script ssrc="js/script.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    <script>
    $( "body" ).mouseleave(function() {
        $('#popup_custom').fadeIn("fast");
    });
    $('.close_button').click(function(){
        $('#popup_custom').fadeOut("fast");
    });
    </script>
</body>

</html>