<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin UP</title>
    <link href="images/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

    <!-- Open Graph -->
    <?php $seoText = 'Добро пожаловать!'; ?>
    <meta name="description" content="<? echo $seoText; ?>" />
    <meta name="keywords" content="<? echo $seoText; ?>" />
    <meta property="og:title" content="<? echo $seoText; ?>" />
    <meta property="og:description" content="<? echo $seoText; ?>" />
    <meta property="og:image" content="<? echo $base; ?>video/poster.png" />
    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="450" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $base; ?>" />
    <link rel="canonical" href="<?php echo $base; ?>" />
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
</head>

<body class="gtd-body-hidden">
    <!-- INTRO SECTION 1 START -->
    <section class="intro-section-1">
        <div class="container">
            <div class="header-atenttion mob">
            </div>
            <div class="flex-head">
                <div class="countdown-mob mob">
                    <img src="images/attention-mob.png">
                    <span class="countdown-span" id="timer"> 05:30</span>
                </div>
                <div class="head-w-2">
                    <b data-i18n="warning">ATTENTION</b>: <span data-i18n="due-to"> Registration closing soon. HURRY UP to Join the best Crypto Financial Online System! <span class="dect">⚠️</span><span class="countdown-span1 dect" id="timer1"> 05:30</span></b></span>
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
                        <p>bitcoin Market Cap <img src="images/arow-up.png"> <span> <span class="currency">$</span>143,584,911,738</span>
                            bitcoin <img src="images/arow-up.png"> <span class="corency"> $ 8,874.68</span></p>
                    </div>
                </div>
                <div class="btc-footer">
                    <p><span>Fast & Effective</span> Way To Get Rich</p>
                </div>
            </div>
        </div>
        <div class="section-2-btc mob">
            <p>bitcoin Market Cap <span> <span class="currency">$</span>143,584,911,738</span></p>
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
                <p><span>Fast & Effective</span> Way To Get Rich</p>
            </div>
        </div>
        <div class="container">
            <h1 class="video-header" data-i18n="">
            Invest Today and become <span>The Next Millionaire...
                    <scpan>
                    </scpan>
                </span></h1>
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <img src="images/form-headr.png" class="mob form-headr">
                    <div class="video-wrapper">
                        <div class="video embed-responsive embed-responsive-16by9">
                            <div class="gtd-video-title gtd-date-current-date"></div>
                            <div class="up_sound">Включить звук</div>
                            <img src="images/volume.png" id="volume_up">
                            <div class="anticlicker"></div>
                            <div class="video video-js embed-responsive-item">
                                <video playsinline poster="video/poster.png" allowfullscreen="">
                                    <source src="video/video.mp4" type="video/mp4" />
                                </video>
                                <div class="play-btn"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 form-mob">
                    <div class="form">
                        <div class="preloader"></div>
                        <div class="head-form">
                            <p>CHANGE YOUR LIFE <span>TODAY!</span></p>
                        </div>
                        <div class="app" id="app2" data-url="<?php echo $thankyou ?>" data-butt="REGISTER NOW" data-type="2"></div>
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
                        <p>
                            Your data is always protected with us.
                            <br> You can change your mind at any time by clicking on the unsubscribe link in the footer of any email you receive from us. We will treat your information with respect. By clicking above, you agree that we may process your information
                            in accordance with these terms.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="images/logo-secure.png">
                </div>
                <p><br><span>Your data is always protected with us. </span></br>
                You can change your mind at any time by clicking on the unsubscribe link in the footer of any email you receive from us. We will treat your information with respect. By clicking above, you agree that we may process your information
                            in accordance with these terms.
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
                        <p>Make Money Online <br>
                            <span> <span class=""></span>OVER $1,200 PER DAY<br></span>
                            with <span class="k-italic"> bitcoin UP!</span>
                        </p>
                    </div>
                    <img src="images/girl.jpg">
                    <div class="btn-block-form">
                        <button>Open a FREE account</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 girl-info">
                    <div class="steps-info-h dect">
                        <p>Make Money Online <br><span> <span class=""></span>OVER $1,200 PER DAY<br></span>
                        <p class="p-italic">with bitcoin UP!</p>

                    </div>
                    <div class="steps-info-b">
                    <p>
                            <strong>Caution! Next week you will stop working,</strong>
                            <br> because during the last 5 years, the algorithms of our Online Platform have enriched people and made them financially free.
                        </p>
                        <p>We are <a class="scroll-form" style="font-weight: bold;">bitcoin UP</a> — a group of people who jumped on the insane returns of bitcoin and have quietly get rich!</p>
                        <p>Click on <a class="scroll-form" style="font-weight: bold;">"Open FREE Account"</a>, get your lucky ticket to the world of Bitcoin opportunities.</p>
                    </div>
                    <div class="steps-info-f">
                        <p style="font-weight: 700;font-size: 20px;text-align: left;color: #020042;">They speak about us in:</p>
                        <img src="images/news.png">
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
                <p>The Hottest <span>Success Stories</span></p>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="images/winner-1.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Москва</p>
                    <p>Jade T.
                        <span> <span class=""><br></span>656,921.61 руб.</span><br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>read more ...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Half a year ago I got fired.</p>
                    <p>Due to the lack of experience, I could not get a job for a long time. Friends advised bitcoin UP. I registered and paid $250. At first I worked with the platform myself and a week later on the account was -$12.</p>
                    <p>A manager contacted me and explained how to work with the algorithm correctly and three weeks later my daily income was over $1,200! Thanks, bitcoin UP!</p>
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
                    <p class="winners-city">Edinburgh</p>
                    <p>William D.
                        <span> <span class=""><br></span>$17,307.91</span><br>
                    </p>
                    <div class="more-info" style="display: none;">
                        <img src="images/arrow-more.png">
                        <p>read more ...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: block;">
                    <p>“Half a year ago I got fired.</p>
                    <p>Due to the lack of experience, I could not get a job for a long time. Friends advised bitcoin UP. I registered and paid $250. At first I worked with the platform myself and a week later on the account was -$12.</p>
                    <p>A manager contacted me and explained how to work with the algorithm correctly and three weeks later my daily income was over $1,200! Thanks, bitcoin UP!</p>
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
                    <p class="winners-city">London</p>
                    <p>Steven J.
                        <span> <span class=""><br></span>$9,938.79</span><br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>read more ...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“I'm with the platform only 35 days I used to often lose my money on sports betting and my life was devastated.</p>
                    <p>A little bit later I saw an ad of a page on Facebook and decided to try bitcoin UP!</p>
                    <p>Already after the first two weeks I left my job in the office!</p>
                    <p>Now my friends and I plan to travel the whole year!“</p>
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
                    <p class="winners-city">Manchester</p>
                    <p>Karen B.
                        <span> <span class=""><br></span>$13,234.98</span><br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>read more ...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“A couple of years ago my husband left me and I started raising my two children by myself.I couldn't afford to send my daughter to college.</p>
                    <p>There was nothing to lose, so I invested in bitcoin UP. To my surprise, I was able to pay for college and pay off my loans!
                    </p>
                    <p>Now I work at home online for 20-30 minutes a day and can devote enough time to raising my children!“</p>
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
                <p>The Hottest <span>Success Stories</span></p>
            </div>
            <div class="row">
                <div class="steps-block steps-1">
                    <div class="col-md-4">
                        <div class="winners-puple winner-jade">
                            <img src="images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Birmingham</p>
                                <p class="winner-name">Jade T.<br>
                                    <span><span class=""></span>$8,329.43<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Manchester</p>
                                <p class="winner-name">Karen B.<br>
                                    <span><span class=""></span>$13,234.98<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">London</p>
                                <p class="winner-name">Steven J.<br>
                                    <span><span class=""></span>$9,938.79<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-4-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Edinburgh</p>
                                <p class="winner-name">William D.<br>
                                    <span><span class=""></span>$17,307.91<span></span><br>
                                    </span>
                                </p>
                                <p class="winner-big-info">“By the age of 42, I was desperate because of the large loan debts.</p>
                                <p class="winner-big-info">Fortunately, I heard about bitcoin UP and decided to invest in the platform – after 3 months I paid all the loans.</p>
                                <p class="winner-big-info">Now I rent a big house and gave my girlfriend a car for her birthday.</p>
                                <p class="winner-big-info">With bitcoin UP, I'm on my way to becoming a millionaire!“</p>
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
                                <p class="winners-city">Edinburgh</p>
                                <p class="winner-name">William D.<br>
                                    <span><span class=""></span>$17,307.91<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Manchester</p>
                                <p class="winner-name">Karen B.<br>
                                    <span><span class=""></span>$13,234.98<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">London</p>
                                <p class="winner-name">Steven J.<br>
                                    <span><span class=""></span>$9,938.79<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-1-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Birmingham</p>
                                <p class="winner-name">Jade T.<br>
                                    <span><span class=""></span>$8,329.43<span></span><br>
                                    </span>
                                </p>
                                <p class="winner-big-info">“Half a year ago I got fired.</p>
                                <p class="winner-big-info">Due to the lack of experience, I could not get a job for a long time. Friends advised bitcoin UP. I registered and paid $250. At first I worked with the platform myself and a week later on the account was -$12.
                                </p>
                                <p class="winner-big-info">A manager contacted me and explained how to work with the algorithm correctly and three weeks later my daily income was over $1,200! Thanks, bitcoin UP!</a>!
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
                                <p class="winners-city">Birmingham</p>
                                <p class="winner-name">Jade T.<br>
                                    <span><span class=""></span>$8,329.43<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Edinburgh</p>
                                <p class="winner-name">William D.<br>
                                    <span><span class=""></span>$17,307.91<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Manchester</p>
                                <p class="winner-name">Karen B.<br>
                                    <span><span class=""></span>$13,234.98<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-3-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">London</p>
                                <p class="winner-name">Steven J.<br>
                                    <span><span class=""></span>$9,938.79<span></span><br>
                                    </span>
                                </p>
                                <p class="winner-big-info">“I'm with the platform only 35 days I used to often lose my money on sports betting and my life was devastated.</p>
                                <p class="winner-big-info">A little bit later I saw an ad of a page on Facebook and decided to try bitcoin UP!</p>
                                <p class="winner-big-info">Already after the first two weeks I left my job in the office!</p>
                                <p class="winner-big-info">Now my friends and I plan to travel the whole year!“</p>
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
                                <p class="winners-city">Birmingham</p>
                                <p class="winner-name">Jade T.<br>
                                    <span><span class=""></span>$8,329.43<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Edinburgh</p>
                                <p class="winner-name">William D.<br>
                                    <span><span class=""></span>$17,307.91<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">London</p>
                                <p class="winner-name">Steven J.<br>
                                    <span><span class=""></span>$9,938.79<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-2-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Manchester</p>
                                <p class="winner-name">Karen B.<br>
                                    <span><span class=""></span>$13,234.98<span></span><br>
                                    </span>
                                </p>
                                <p class="winner-big-info">“A couple of years ago my husband left me and I started raising my two children by myself.I couldn't afford to send my daughter to college.</p>
                                <p class="winner-big-info">There was nothing to lose, so I invested in bitcoin UP. To my surprise, I was able to pay for college and pay off my loans!</p>
                                <p class="winner-big-info">Now I work at home online for 20-30 minutes a day and can devote enough time to raising my children!“</p>
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
                <p>How It Works?</p>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="images/question-img-1.jpg" class="dect">
                </div>
                <div class="col-md-5">
                    <div class="question-info">
                        <p><span class="question-info-step">Step 1</span></p>
                        <img src="images/question-img-1-mob.jpg" class="mob">
                        <p><span class="question-info-header">FILL IN THE FORM</span></p>
                        <p><span class="question-info-block">Once your registration is accepted, you will automatically become the newest member of bitcoin UP. Be sure to generate a secure code so that no one can hack your account!</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="question-info">
                        <p><span class="question-info-step">Step 2</span></p>
                        <img src="images/question-img-2-mob.jpg" class="mob">
                        <p><span class="question-info-header">FUND YOUR ACCOUNT</span></p>
                        <p><span class="question-info-block">Like any business, you need working capital to get started. So to start profiting with The bitcoin UP, you must invest any amount you desire of $250 or more.</span></p>
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
                        <p><span class="question-info-step">Step 3</span></p>
                        <img src="images/question-img-3-mob.jpg" class="mob">
                        <p><span class="question-info-header">WAIT FOR A CALLBACK AND YOU ARE DONE</span></p>
                        <p><span class="question-info-block">After payment, our manager will call you and provide you with the high-income algorithm. Enjoy accurate hands-free trading with our award-winning algorithm. You can also set up manual trading if you prefer to trade on your own.</span></p>
                    </div>
                    <div class="btn-block-form">
                        <button>Get Started Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="winners-block faq-block-mob mob">
        <div class="container">
            <div class="steps-header-puple">
                <p>Frequently Asked Question</span></p>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span>What kind of results can I expect?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Bitcoin UP members typically profit a minimum of $1,200 daily because the platform works 24/7 in search of successful deals</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row faq-click" style="border: 2px solid rgb(230, 174, 92);background-image: url(images/arrow-hide-up.png);">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span style="color:#E6AE5C ">What kind of results can I expect?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: block;">
                    <p>Our members work an average of 20 minutes a day or less. Because the software handles the trading the amount of 'work' required is minimal.</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span>How much does the software cost?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Members of The bitcoin UP get a copy of our proprietary software free of charge. To become a member, simply fill out the form on this page.</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Is this like MLM or Affiliate Marketing?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>This is not like MLM, affiliate marketing or anything else. Bitcoin UP - software wins transactions with an accuracy of 99.4% this is your personal enrichment tool</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span>Are there any fees?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>There are no hidden fees. No brokerage fees or commissions. All your data and money are protected. The income is 100% owned by you, and you can withdraw money at any time convenient for you.</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="faq-header dect">
            <p>Frequently Asked Question</p>
        </div>
        <div class="container">
            <div class="row dect">
                <div class="col-lg-7 col-md-12">
                    <div class="answer  answer-work">
                        <p><span>HOW MANY HOURS PER DAY DO I<br> NEED TO WORK?</span>
                        <p>Our members work an average of 20 minutes a day or less. Because the software handles the trading the amount of 'work' required is minimal.</p>

                    </div>
                    <div class="answer answer-expect" style="display: none;">
                        <p><span>WHAT KIND OF RESULTS<br> CAN I EXPECT?</span>
                        <p>Bitcoin UP members typically profit a minimum of $1,200 daily because the platform works 24/7 in search of successful deals</p>

                    </div>
                    <div class="answer answer-cost" style="display: none;">
                        <p><span>HOW MUCH DOES THE <br> SOFTWARE COST?</span>
                        <p>Members of The bitcoin UP get a copy of our proprietary software free of charge. To become a member, simply fill out the form on this page.</p>

                    </div>
                    <div class="answer answer-marketing" style="display: none;">
                        <p><span>IS THIS LIKE MLM OR <br> AFFILIATE MARKETING?</span>
                        <p>This is not like MLM, affiliate marketing or anything else. Bitcoin UP - software wins transactions with an accuracy of 99.4% this is your personal enrichment tool</p>

                    </div>
                    <div class="answer answer-fees" style="display: none;">
                        <p><span>ARE THERE ANY FEES?</span>
                        <p>There are no hidden fees. No brokerage fees or commissions. All your data and money are protected. The income is 100% owned by you, and you can withdraw money at any time convenient for you.</p>

                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="faq-block">
                        <div class="question-work question" style="color:#E6AE5C ">
                            <p>How many hours per day do I need to work?</p>
                        </div>
                        <div class="question-expect question">
                            <p>What kind of results can I expect?</p>
                        </div>
                        <div class="question-cost question">
                            <p>How much does the software cost?</p>
                        </div>
                        <div class="question-marketing question">
                            <p>Is this like MLM or Affiliate Marketing?</p>
                        </div>
                        <div class="question-fees question">
                            <p>Are there any fees?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-form-block">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-form-info">
                        <p>You’ll Be <span>Surprised</span>, After You Withdraw Your 2-Week Profit!</p>
                        <img src="images/btc-logo.png">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="images/phone-footer.png" class="dect phone-footer-img">
                    <img src="images/phone-footer.png" class="mob">
                </div>
                <div class="col-lg-4 col-md-12 padding-hide">
                    <div class="form">
                        <div class="preloader"></div>
                        <div class="head-form">
                            <p>CHANGE YOUR LIFE <span>TODAY!</span></p>
                        </div>
                        <div class="app" id="app3" data-url="<?php echo $thankyou ?>" data-butt="REGISTER NOW" data-type="2"></div>
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
                        <p><br><span>Your data is always protected with us. </span><br>
                        You can change your mind at any time by clicking on the unsubscribe link in the footer of any email you receive from us. We will treat your information with respect. By clicking above, you agree that we may process your information in accordance with these terms.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="images/logo-secure.png">
                </div>
                <p><br><span>Your data is always protected with us. </span></br>
                You can change your mind at any time by clicking on the unsubscribe link in the footer of any email you receive from us. We will treat your information with respect. By clicking above, you agree that we may process your information in accordance with these terms.
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
                    <a href="javascript:void(0)" data-name="terms" class="alterlink">Terms of use</a>
                    <a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy Policy</a>
                </div>
            </div>
            <div class="footer-info">
            <p>Important information: Income and disclaimers Information provided by bitcoin Academy (hereinafter referred to as the «the Website») about income and revenue, is used as a desired example of your estimated earnings. All recommendations and
                examples are an exceptional instance and are not a guarantee that you or other people will achieve similar results. Personal results may vary and completely depend on the individual use of the Website. The Website is not responsible for
                anyone’s actions, including your actions and the actions of any person. You give full and unconditional consent to the fact that the Website does not bear any responsibility for your actions related to the use of the services and products
                of the Website. You are fully and exclusively responsible for your personal actions and decisions when using services and products, so you should always exercise a sufficient level of caution and prudence. You agree that the Website does
                not bear any responsibility to you for the results of using the services and products of the Website. To completely disclaim liability, read our Terms and Conditions. The website is entitled to receive compensation for the services and
                products that are recommended to you. If you are opposed to receiving compensation for recommendations on this site, you can follow our recommendation and find a similar product on the Internet through an unaffiliated link. *Reference:
                Any persons, information, characters and events shown on the Website are fictitious. Any resemblance to real events or people is a coincidence.</p>
            </div>
        </div>
    </footer>

    <link rel="stylesheet" rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/index.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/currency.js?v2"></script>
    <script src="js/script.js?v2"></script>

    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>