<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bitcoin Profit</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link href="css/bootstrap.grid.min.css" rel="stylesheet">
    <link href="css/step1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link href="css/form.css" rel="stylesheet" type="text/css">

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

    <div>
        <!--  -->


        <header id="hero">
            <div class="disclaimerHeader">
                <span style="font-size: 11px;" class="topTextASet">-&nbsp;Advertorial&nbsp;<a href="abuse_report.html" target="_blank" style="font: inherit;color: inherit;text-decoration: inherit;">&amp;&nbsp;DMCA&nbsp;Protected</a>&nbsp;-</span>
            </div>
            <div class="container">
                <img src="fonts/bitcoin-profit_logo_horizontal_white.svg" alt="Bitcoin Profit" class="img-responsive" id="logoHeader">
                <div class="row">
                    <div class="col-md-10 col-sm-11 col-lg-9">
                        <h1>Benefit from bitcoin even when the crypto markets are crashing.</h1>
                        <h2>
                            <a href="#topForm"><strong>Join today</strong></a> and see <br>how much you can make<br>
                        </h2>
                    </div>
                </div>
            </div>
        </header>
        <section class="video" id="register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="embed-responsive embed-responsive-16by9">

                            <video autoplay="autoplay" muted="muted" controls title="YouTube video player" width="100%" >
                                <source src="images/video/video1.mp4" type="video/mp4">
                              </video>


                            <div id="ytplayer">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                        <div class="registerForm">
                            <div class="formHeader" id="topForm">Sign Up Below
                                <span>and we’ll guide you through the process.</span>
                            </div>
                            <div class="form-container">

                                <div class="form-fields__wrapper">
                                    <div class="app" id="app" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Register"></div>
                                    <!-- form -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="images/badges.png" alt="Secured" class="img-responsive center-block securityBadges">
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="brightSection" id="faq">
            <div class="container">
                <h1 class="text-center">FAQ</h1>
                <h2 class="text-center col-lg-6 col-lg-offset-3">Here are the most common questions with our answers.</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="faqBlock">
                            <div class="faqQ" data-text="Q">
                                Is Bitcoin safe?
                            </div>
                            <div class="faqA" data-text="A">
                                If you look at bitcoin’s history it has lots of ups and downs. However, look more closely and you’ll notice that after every time it goes down it increases to a new high. This is because Bitcoin is constantly growing.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="faqBlock">
                            <div class="faqQ" data-text="Q">
                                What’s in it for us?
                            </div>
                            <div class="faqA" data-text="A">
                                At Bitcoin Profit, we are all investors in Bitcoin. Therefore, we know that the more people that join us, the bigger Bitcoin will grow.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="faqBlock">
                            <div class="faqQ" data-text="Q">
                                What’s the secret?
                            </div>
                            <div class="faqA" data-text="A">
                                The secret is that there is no secret. Join today and we’ll show you just how easy it is to get started trading Bitcoin.
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="faqDivider">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="faqBlock">
                            <div class="faqQ" data-text="Q">
                                Is it risky?
                            </div>
                            <div class="faqA" data-text="A">
                                The risk levels depend on how you trade. Join us today and we’ll show you how to maximise your profits and minimise your risk.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="faqBlock">
                            <div class="faqQ" data-text="Q">
                                Why Join Bitcoin Profit?
                            </div>
                            <div class="faqA" data-text="A">
                                Bitcoin Profit enables you to easily trade your Bitcoin for real cash. We also have a state of the art platform which makes trading easier than ever before. Don’t believe us? Join today and see for yourself. Getting involved in the Bitcoin revolution
                                has never been easier.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="faqBlock">
                            <div class="faqQ" data-text="Q">
                                What’s the catch?
                            </div>
                            <div class="faqA" data-text="A">
                                No catch! You simply sign up, deposit an initial trading amount of $250 and we’ll do the rest. Our platform enables the easiest way to get started trading Bitcoin. No hassle, no fuss so that you can start earning instantly.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="brightSection" id="traders">
            <div class="famousPeople">
                <div class="container">
                    <h1 class="text-center">Famous names in trading</h1>
                    <h2 class="text-center col-lg-8 col-lg-offset-2">There are a lot of big names in trading. Here is what some of the most famous traders have to say.</h2>
                </div>
                <div class="container famousPeopleInnerWrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="famousPeopleSinglePerson">
                                <h3 class="famousPerson--name">
                                    Alexander Elder
                                </h3>
                                <p class="famousPerson--quote">
                                    You can be free. You can live and work anywhere in the world. You can be independent from routine and not answer to anybody.
                                </p>
                                <img src="images/alexander-elder.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="famousPeopleSinglePerson">
                                <h3 class="famousPerson--name">
                                    Ed Seykota
                                </h3>
                                <p class="famousPerson--quote">
                                    Win or lose, everybody gets what they want out of the market. Some people seem to like to lose, so they win by losing money.
                                </p>
                                <img src="images/ed-seykota.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="famousPeopleSinglePerson">
                                <h3 class="famousPerson--name">
                                    William O’Neil
                                </h3>
                                <p class="famousPerson--quote">
                                    What seems too high and risky to the majority generally goes higher and what seems low and cheap generally goes lower.
                                </p>
                                <img src="images/william-o-neil.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="famousPeopleSinglePerson">
                                <h3 class="famousPerson--name">
                                    Warren Buffett
                                </h3>
                                <p class="famousPerson--quote">
                                    You don&#39;t need to be a rocket scientist. Investing is not a game where the guy with the 160 IQ beats the guy with 130 IQ.
                                </p>
                                <img src="images/warren-buffett.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="colouredSection" id="footerForm">
            <div class="container">
                <h1 class="text-center">Sign Up Below
                    <span style="font-size:60%">and we’ll guide you through the process.</span>
                </h1>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-lg-4 col-lg-offset-4">
                        <div class="registerForm">

                            <div class="form-fields__wrapper">
                                <!-- form -->
                                <div class="app" data-geo="EU" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Register"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <img src="fonts/bitcoin-profit_logo_vertical_black.svg" class="img-responsive" alt="The Bitcoin Profit" id="logoFooter">
                <div class="footerText">
                    <p>
                        Copyright <span class="year">2019</span> The Bitcoin Profit
                    </p>
                    <p>
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Terms of use</a>
                        <a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy Policy</a>
                    </p>
                </div>
                <div class="disclaimerFooter" id="disclaimertext">
                    <p>
                        IMPORTANT: Earnings and Legal Disclaimers Earnings and income representations made by <span class="disclaimer-brand_name__new">Website</span>, (collectively “This Website”) only used as aspirational examples of your earnings potential.
                        The success of those in the testimonials and other examples are exceptional results and therefore are not intended as a guarantee that you or others will achieve the same results. Individual results will vary and are entirely dependent
                        on your use of <span class="disclaimer-brand_name__new">Website</span>. This Website is not responsible for your actions. You bear sole responsibility for your actions and decisions when using products and services and therefore
                        you should always exercise caution and due diligence. You agree that this Website is not liable to you in any way for the results of using our services. See our Website terms of use for our full disclaimer of liability and other
                        restrictions. Trading can generate notable benefits, however, it also involves the risk of partial/full loss of the invested capital, therefore, you should consider whether you can afford to invest. ©<span id="yearDisclaimerNew">2020</span><br/>                        USA REGULATION NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the United States. Invest in Crypto is not supervised or regulated by any financial agencies nor US agencies. Any unregulated trading activity
                        by U.S. residents is considered unlawful. This Website does not accept customers located within the United States or holding an American citizenship. This Website is not responsible for actions of customers located within the United
                        States or holding an American citizenship. Customers located within the United States or holding an American citizenship bear sole responsibility for their actions and decisions when using products and services of this Website.
                        In any and all circumstances the choice to use the Website, the Service and/or the Software is under full responsibility of User, who should comply with the current legislation.
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
    </div>



    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/getdetector.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>

</body>

</html>