<?php 
include_once 'config.php'; 
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <title>Bitcoin Revolution</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="app/build/css/build.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="js/videojs/video-js.css" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/intgrtn.css">

    <script type="text/javascript" src="js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/videojs/video.js"></script>
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
        .vue-tel-input input {
            margin: 0px;
            height: auto;
        }

        input {
            width: auto;
            vertical-align: inherit!important;
        }

        button[type=submit]{
            background-color: #6632a1;
            color: #fff;
        }

        
        button.is-loading {
            position: relative;
            color: transparent !important;
        }

        button.is-loading::after {
            display: block;
            position: absolute;
            width: 24px;
            height: 24px;
            content: "";
            left: calc(50% - (24px / 2));
            top: calc(50% - (24px / 2));
            border: 3px solid #dbdbdb;
            border-radius: 9999px;
            border-color: transparent transparent #fff #fff !important;
            animation: spin .5s infinite linear;
        }

        @keyframes spin {
            from {
                transform: rotate(0)
            }
            to {
                transform: rotate(359deg)
            }
        }
    </style>
</head>

<body ng-controller="SubscribeController as sc">
    <section class="intro-section-1">
        <div class="container">
            <p class="intro-p"><b data-i18n>WARNING</b>:<span data-i18n>Due to extremely high media demand, we will close registration as of</span> <b><span class="tomorrow-date">19/02/2021</span> - <span data-i18n>HURRY!</span> </b><span class="countdown-span">05:32</span></p>
        </div>
    </section>

    <section class="intro-section-2">
        <div class="container">
            <div class="intro-part-2 row">
                <img src="img/logo.svg" alt="logo" class="logo">
                <div class="exclusive-offers-wrapper intro-margin-div none">
                    <div style="margin-right: 10px;"><span class="purple" data-i18n>Exclusive offers for</span> <br> <span class="red" data-i18n>trades in</span> <span class="country-name-custom red"></span></div>
                    <div class="countryflag">

                    </div>
                </div>
                <div class="dynamic-person-div none" id="notifications">
                    <div class="dynamic-person-img-wrapper">
                        <img data-image src="img/25.jpg" alt="" class="dynamic-person-img">
                    </div>
                    <p class="dynamic-person-p">
                        <span data-name class="dynamic-person-name-span">
                        Nikole C.
                    </span>
                        <br>
                        <span data-i18n>just made</span>
                        <br>
                        <span data-visitor-currency-symbol class="dollar-shake">$</span>
                        <span data-amount class="dynamic-person-sum-span">
                        350
                    </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="video-form-section" id="homes">
        <div class="container">
            <h1 class="video-header" data-i18n>Bitcoin Is Making People Rich</h1>
            <p class="video-subheader"><span data-i18n>And you can Become The</span> <span class="yellow" data-i18n>Next Millionaire...</span></p>
            <div class="row">
                <div class="col-md-7">
                    <div class="">
                        <div class="video video-wrapper" style="display: flex;">
                            <video style="width: 100%;" id="video" controls="controls" poster="img/videothumbnail.jpg" allowfullscreen="">
                                <source src="img/en-1.mp4" type="video/mp4" />
                            </video>
                            <div class="play-btn"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-container">
                        <h1 class="formHeader" data-i18n>CHANGE YOUR<br>LIFE TODAY!</h1>
                        <div class="formwrap-outer">
                            <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Sign up"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-section-mobile">
        <div class="container">
            <div class="intro-part-2">
                <div class="exclusive-offers-wrapper intro-margin-div">
                    <div class="exclusive-offers-text" style="margin-right: 10px;"><span class="purple" data-i18n>Exclusive offers for</span> <br> <span class="red" data-i18n>trades in</span> <span class="country-name-span red"></span></div>
                    <img src="#" class="flag" alt="">
                </div>
                <div class="dynamic-person-div">
                    <div class="dynamic-person-img-wrapper">
                        <img src="img/25.jpg" alt="" class="dynamic-person-img">
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
                        <span data-init="visitor-currency-symbol" class="dollar-shake">$</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="logos-section">
        <div class="container">
            <div class="logos-wrapper">
                <img src="img/bitgo.png" class="logo" alt="bitgo logo">
                <img src="img/norton.png" class="logo" alt="norton logo">
                <img src="img/secure-trading.png" class="logo" alt="secure trading logo">
                <img src="img/mcafee.png" class="logo" alt="mcafee logo">
            </div>
        </div>
    </section>

    <section class="join-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="join-us-header">
                        <span data-i18n>Join Us and Start Getting Rich</span>
                        <span style="color: #5f3394" data-i18n>with Bitcoins Era!</span>
                    </h1>

                    <br>
                    <p class="join-us-p">
                        <span data-i18n>The Bitcoins Era is a group reserved exclusively to people who jumped on the insane returns that Bitcoin offers and have quietly amassed a fortune in doing so. Our members enjoy retreats around the world every month while they make money on their laptop with just a few minutes of “work” every day.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="fake-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p class="seenon-p" data-i18n>As seen on</p>
                    <p class="fake-news-logos-wrapper">
                        <img src="img/seenon.png" alt="media logos">
                    </p>
                </div>
                <div class="col-md-7">
                    <div class="join-us-img-wrapper">
                        <img src="img/girl-holding-bitcoin.png" alt="join us" class="join-us-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container-fluid">
            <h1 class="testimonials-header purple" data-i18n>REAL TESTEMONIALS FROM OUR USERS</h1>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-1">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Mark K.</span> <br>
                            <span data-i18n>Fort Worth, TX</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>123.00</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>I finally know what it’s like to live the dream. I no longer feel like I’m on the outside looking in while everyone else has all the fun. Bitcoins Era has allowed me to retire early and live the 1% lifestyle.</span>"</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-2">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Jennifer A.</span> <br>
                            <span data-i18n>Irvine, CA</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>72.00</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>I've been a member of Bitcoins Era for only 47 days. But my life has already changed! Not only have I made my first</span> <span data-init="visitor-currency-symbol">$</span>100<span data-i18n>, but I've also met some of the most incredible people in the process. Thanks, Bitcoins Era!</span>"</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-3">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Ernest I.</span> <br>
                            <span data-i18n>Orem, UT</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>109.00</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>Surprisingly, I used to be an investor on Wall Street. And I’ve never seen anything like this in my 10 year tenure at the company. My colleagues all thought I was crazy when I quit the firm to invest with the Bitcoins Era software full-time.</span>
                            <span data-init="visitor-currency-symbol">$</span>389,00 <span data-i18n>in profits later, all of my colleagues are now BEGGING me to let them in.</span>"</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-4">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Jane K.</span><br>
                            <span data-i18n>Fort Worth, TX</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>89.00</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>Two weeks ago, I got laid off. With no options left, I thought my life was over. Now I’m making over</span> <span data-init="visitor-currency-symbol">$</span>11.00 <span data-i18n>each and every day. And for the first time in 2 months, my account isn’t overdrawn. Thanks, Bitcoins Era!</span>"</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img src="img/feature-img-1.png" class="feature-img" alt="feature 1">
                        </div>
                        <h5 class="feature-header" data-i18n>LASER-ACCURATE PERFORMANCE</h5>
                        <p class="feature-description" data-i18n>There is no other trading app in the world that performs at the 99.4% level of accuaracy that The Bitcoins Era is able to hit. That's why our members from around the world trust us to double triple and quadruple their hard-earned
                            money.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img src="img/feature-img-2.png" class="feature-img" alt="feature 1">
                        </div>
                        <h5 class="feature-header" data-i18n>SUPERIOR TECHNOLOGY</h5>
                        <p class="feature-description" data-i18n>The Bitcoins Era software has been created using the most advanced programming the trading world has ever seen. The software is ahead of the markets by 0.01 seconds. This 'time leap' makes the software the most consistent trading
                            app on the planet.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img src="img/feature-img-3.png" class="feature-img" alt="feature 1">
                        </div>
                        <h5 class="feature-header" data-i18n>AWARD-WINNING TRADING APP</h5>
                        <p class="feature-description" data-i18n>The Bitcoins Era app has won a number of awards. The most recent awards we have had the honor of receiving is getting #1 in the trading software category for the US Trading Association.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="live-results-section text-center">
        <div class="container relative">
            <div class="live-results-table-wrapper">
                <a href="#homes" class="yellow-btn join-now-btn scroll-top-btn">
                <span data-i18n>JOIN NOW!</span>
            </a>
                <h1 class="dark-purple bold live-results-header" data-i18n>LIVE PROFIT RESULTS</h1>
                <table class="live-results-table">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td" data-i18n>The Bitcoins Era</th>
                            <th class="dark-purple padding-left-td" data-i18n>Profit</th>
                            <th class="dark-purple padding-left-td" data-i18n>Trade Time</th>
                            <th class="dark-purple padding-left-td" data-i18n>Cryptocurrency</th>
                            <th class="dark-purple padding-left-td" data-i18n>Result</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td class="bold">Jessica T.</td>
                            <td class="bold">$986</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>LTC/EOS</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Joseph M.</td>
                            <td class="bold">$723</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>ETH/LTC</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Harry C.</td>
                            <td class="bold">$1032</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>BTC/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Evan M.</td>
                            <td class="bold">$839</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>EOS/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lily C.</td>
                            <td class="bold">$1201</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>LTC/EOS</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lewis R.</td>
                            <td class="bold">$972</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>BTC/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">George B.</td>
                            <td class="bold">$687</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>ETH/LTC</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Natasha R.</td>
                            <td class="bold">$1129</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>EOS/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Matthew C.</td>
                            <td class="bold">$919</td>
                            <td class="trade-time-td padding-left-td">19/02/2021</td>
                            <td>LTC/EOS</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold last-td">Jamie P.</td>
                            <td class="bold last-td">$1164</td>
                            <td class="last-td trade-time-td padding-left-td">19/02/2021</td>
                            <td class="last-td">BTC/ETH</td>
                            <td class="last-td"><img src="img/tick.png" alt="tick"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="how-it-works-section text-center">
        <div class="container">
            <div class="how-it-works-wrapper">
                <h1 class="dark-purple bold how-it-works-header" data-i18n>HOW IT WORKS</h1>
                <div class="row someUp">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <h3 class="step-header white step-header-1" data-i18n>Step 1</h3>
                            <div class="step-img-wrapper">
                                <img src="img/step-img-1.png" alt="step 1" class="step-img">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n>REGISTER ON THE SITE</h5>
                            <p class="step-description" data-i18n>Once your registration is accepted, you will automatically become the newest member of the Bitcoins Era. And you will get to claim our proprietary bitcoin trading software for free.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <h3 class="step-header white step-header-2" data-i18n>Step 2</h3>
                            <div class="step-img-wrapper">
                                <img src="img/step-img-2.png" alt="step 2" class="step-img">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n>FUND YOUR ACCOUNT</h5>
                            <p class="step-description"><span data-i18n>Like any business, you need working capital to get started. So to start profiting with The Bitcoins Era, you must invest any amount you desire of</span> <span data-init="visitor-currency-symbol">$</span>250
                                <span data-i18n>or more.</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <h3 class="step-header white step-header-3" data-i18n>Step 3</h3>
                            <div class="step-img-wrapper">
                                <img src="img/step-img-3.png" alt="step 3" class="step-img">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n>FINISH</h5>
                            <p class="step-description" data-i18n>Click trade to enjoy precise and accurate hands-free trading powered by our award-winning algorithm. You can also set the trading to manual if you prefer to trade on your own.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-works-btn-wrapper">
            <a href="#homes" class="yellow-btn open-free-account-btn scroll-top-btn">
            <span data-i18n>OPEN FREE ACCOUNT</span>
        </a>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <h2 class="faq-section-header text-center dark-purple bold" data-i18n>FREQUENTLY ASKED QUESTIONS</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-1">
                                <h4 class="faq-question light-purple bold" data-i18n>What kind of results can I expect?</h4>
                                <p class="faq-answer"><span data-i18n>Bitcoins Era members typically profit a minimum of</span> <span data-init="visitor-currency-symbol">$</span>1300 <span data-i18n>daily.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-2">
                                <h4 class="faq-question light-purple bold" data-i18n>How many hours per day do I need to work?</h4>
                                <p class="faq-answer" data-i18n>Our members work an average of 20 minutes a day or less. Because the software handles the trading the amount of 'work' required is minimal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-3">
                                <h4 class="faq-question light-purple bold" data-i18n>What is the maximum amount that I can make?</h4>
                                <p class="faq-answer" data-i18n>Your profits are unlimited within The Bitcoins Era. Some members earned their first million within just 61 days.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-4">
                                <h4 class="faq-question light-purple bold" data-i18n>How much does the software cost?</h4>
                                <p class="faq-answer" data-i18n>Members of The Bitcoins Era get a copy of our proprietart software free of charge. To become a member, simply fill out the form on this page.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-5">
                                <h4 class="faq-question light-purple bold" data-i18n>Is this like MLM or Affiliate Marketing?</h4>
                                <p class="faq-answer" data-i18n>This is not like MLM, affiliate marketing or anything else out there. The software wins trades with 99.4% accuaracy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-6">
                                <h4 class="faq-question light-purple bold" data-i18n>Are there any fees?</h4>
                                <p class="faq-answer" data-i18n>There are no hidden fees. No broker fees or commissions. All of your money is 100% yours and you are free to withdraw it at any time you choose without delay.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pre-footer-section">
        <div class="container">
            <a href="#homes" class="pre-footer-btn scroll-top-btn">
            <span data-i18n>GET STARTED NOW</span>
        </a>
        </div>
    </section>

    <div class="modal modal-signup text-center registration-popup new-popup" tabindex="-1" role="dialog">
        <header>
            <h1 data-i18n>Congratulations!</h1>
            <p class="title-description" data-i18n>You got lucky and we managed to register you at the BEST broker available!</p>
        </header>
        <main>
            <div class="row">
                <div class="col-lg-6 broker-info">
                    <div class="modal-logo">
                        <img ng-src="{{sc.brokersImageUrl}}" alt="{{sc.brokersName}}">
                    </div>
                </div>
                <div class="btn_start modal-button-show-mobile col-sm-12">
                    <button type="button" class="start-trading-button" ng-show="!sc.showLoading" ng-click="sc.goToBroker()" data-i18n>CLICK HERE TO START TRADING</button>
                    <img src="img/Ellipsis-2s-151px.svg" class="progress" ng-show="sc.showLoading" />
                </div>
                <div class="col-lg-6 broker-advantages">
                    <div class="item row">
                        <div class="icon col-sm-2"><img src="img/star-icon.png"></div>
                        <div class="text col-sm-10">
                            <h4 data-i18n>Your SAFETY is our priority</h4>
                            <p><span data-i18n>As determined by its regulatory status,</span> <span ng-if="sc.brokersName">{{sc.brokersName}}</span> <span data-i18n>takes strict measures to safeguard client's funds and their privacy</span></p>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="icon col-sm-2"><img src="img/money-icon.png"></div>
                        <div class="text col-sm-10">
                            <h4><span data-i18n>High Payout Options</span></h4>
                            <p><span ng-if="!sc.brokersName">This broker, </span><span ng-if="sc.brokersName">{{sc.brokersName}}, </span><span data-i18n>offers up to 88% return per successful trade</span>!</p>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="icon col-sm-2"><img src="img/bitcoinicon.png?v=12"></div>
                        <div class="text col-sm-10">
                            <h4 data-i18n>New!</h4>
                            <p data-i18n>Crypto Currency guidance for beginners and advanced traders!</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="btn_start modal-button-hide-mobile">
            <button type="button" class="start-trading-button" ng-show="!sc.showLoading" ng-click="sc.goToBroker()" data-i18n>CLICK HERE TO START TRADING</button>
            <img src="img/Ellipsis-2s-151px.svg" class="progress" ng-show="sc.showLoading" />
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <ul class="footer-ul">
                <li><a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy Policy</a></li>
                <li><a href="javascript:void(0)" data-name="terms" class="alterlink">Terms of use</a></li>
            </ul>

            <div data-intgrtn-agreements="" data-intgrtn-type="4" class="container"></div>
            <img src="img/logo.svg" class="footer-logo" alt="logo">
        </div>
    </footer>

    <div class="exitblock">
        <div class="fon"></div>
        <div class="modaltext">
            <h3>Get access</h3>
            <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Sign up"></div>
        </div>
        <div class="closeblock">+</div>
    </div>

    <script src="js/sripts.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="app/jquery-1.11.0.min.js"></script>
    <script src="app/jquery-ui-1.10.4.custom.min.js"></script>
    <script>
        $(document).mouseleave(function(e) {
            if (e.clientY < 10) {
                $(".exitblock").addClass("active");
            }
        });

        $(document).click(function(e) {
            if (($(".exitblock").is(':visible')) && (!$(e.target).closest(".exitblock .modaltext").length)) {
                $(".exitblock").remove();
            }
        });
    </script>



<script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
<script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>