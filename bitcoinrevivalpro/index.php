<?php
    include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <title>Bitcoin Revival Pro - The Official Site 2020 </title>
    <link type="image/x-icon" href="img/favicon.ico" rel="icon">
    <link href="css/algo-video.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <!-- Open Graph -->
    <?php $seoText = 'Добро пожаловать!'; ?>
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
        .btc-widget-block {
            z-index: 99999;
            position: fixed;
            bottom: 10px;
            left: 10px;
        }

        @media (max-width: 500px) {
            .btc-widget-block {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="main-wrapper">

        <header>
            <div class="red-warning">
                Demand for Bitcoin Revival is exploding! Unfortunately, <b>REGISTRATION CLOSES IN 3 DAYS</b> </div>
            <div class="header">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo-box">
                            <a href="/" class="logo">
                                <img src="img/logo.png" alt="BitcoinRevival Logo"> </a>
                        </div>
                        <div class="exclusive-offer">
                            <span class="exclusive-offer__flag flag-icon"></span>
                            <span class="exclusive-offer__wrap">
                        <span class="members">3841</span> Members <br /><span>in </span><span class="country_name">UK</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="content">

            <section class="main-section">
                <div class="container-fluid">
                    <div class="container-fluid__wrap">
                        <h1>IS THIS BITCOIN’S BIGGEST REVIVAL YET?</h1>
                        <p>Discover How You Can Make up to <strong>$890 A DAY</strong> From Bitcoin</p>
                        <div class="main_container_wrap">
                            <div class="vid video-container">
                                <div class="video">
                                    <video controls="controls" poster="img/prevideo.jpg" allowfullscreen="" style="width: 100%;">
                                        <source src="videos/video.mp4" type="video/mp4" />
                                    </video>
                                    <div class="play-btn"></div>
                                </div>
                            </div>
                            <div class="form-container-unique" id="formTop">
                                <span class="form_subtitle">Join the new unbelievable</span><br /><span class="form_title">BITCOIN REVIVAL</span>
                                FORM
                                <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Register now"></div>
                            </div>
                        </div>

                    </div>
                </div>
    </section>

    <section class="security-section">
        <div class="container">
            <div class="row align-items-center">
                <ul class="col-md-7 text-center">
                    <li><img src="img/bitgo.jpg" alt=""></li>
                    <li><img src="img/norton.jpg" alt=""></li>
                    <li><img src="img/secure-trading.jpg" alt=""></li>
                    <li><img src="img/mcafee.jpg" alt=""></li>
                </ul>
                <div class="col-md-5">
                    <div class="btc-list">
                        <div class="btc-list">
                            <div class="btc-list__item bid"><sup>BID</sup>
                                <div class="btc-price">$ 8,109.69</div>
                            </div>
                            <div class="btc-list__item"><sup>ASK</sup>
                                <div class="btc-price">$ 8,109.69</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="join-section">
        <div class="container">
            <div class="join-text">
                <h2>Join 19,381 Bitcoin Earners Making Income Online From Bitcoin’s Unbelievable Revival</h2>
                <p>In the last few weeks, we have seen Bitcoin skyrocket, making a fortune for tens of thousands of Bitcoin earners who are investing right now.</p>
                <p>Now is your chance to join 19,381 Bitcoin earners who are making consistent proﬁts from Bitcoin’s unbelievable</p>
            </div>
            <div class="other_logo__box">
                <p>As seen on:</p>
                <ul>
                    <li><img src="img/Artwork_1.jpg" alt=""></li>
                    <li><img src="img/Shape_17_copy.jpg" alt=""></li>
                    <li><img src="img/time.jpg" alt=""></li>
                </ul>
            </div>
        </div>
    </section>

    <h2 class="oligarchs__title">REAL TESTIMONIALS FROM OUR USERS</h2>

    <section class="oligarchs-section">
        <div class="oligarch_box">
            <div class="review">
                <p><i>' <span> I heard about Bitcoin and didn’t think it would ever be possible for someone like me to make money from trading. I had no experience prior to using this system. But I decided to give it a try since I was running out of options to boost my income after my kid was born. Now I’m making upwards of 1000 a day and I couldn’t be more thrilled. Thank you Bitcoin Revival for providing me with the extra income I needed to support my growing family. </span>' </i></p>
            </div>
            <div class="detail">
                <p>Amanda Ensing</p>
                <p>Pennsylvania, US</p>
                <p>Profit $19,366</p>
            </div>
        </div>
        <div class="oligarch_box">
            <div class="review">
                <p><i>' <span> Okay, this is major! I just earned my biggest payout yet within the last 24 hours. Just when I think I couldn’t possibly earn any more, this system delivers even more than I could have ever thought possible. I’m beyond excited to see what this has in store. </span>' </i></p>
            </div>
            <div class="detail">
                <p>Lark Tarington</p>
                <p>Chatsworth, UK</p>
                <p>Profit $21,990</p>
            </div>
        </div>
        <div class="oligarch_box">
            <div class="review">
                <p><i>' <span> Thanks Bitcoin Revival! I have been able to pay off all my debt in 3 months thanks to your system. </span>' </i></p>
            </div>
            <div class="detail">
                <p>Martin Chatenay</p>
                <p>Marseille, France</p>
                <p>Profit $14,277</p>
            </div>
        </div>
        <div class="oligarch_box">
            <div class="review">
                <p><i>' <span> I didn’t know anything about Bitcoin or trading before I started using your system. All I knew was that some people were getting rich after investing in Bitcoin but I didn’t know how they were pulling it off. When I saw how easy your system was to use, I decided to get started. And to my surprise I earned over 5000 in profits within the last 2 weeks. <br />Thank you so much! </span>' </i></p>
            </div>
            <div class="detail">
                <p>Erika Reyes</p>
                <p>Lisbon, Portugal</p>
                <p>Profit $5,311</p>
            </div>
        </div>
    </section>

    <section class="v2-section">
        <div>
            <div class="advantages2">
                <div class="advantages__success">
                    <div class="success_box">
                        <div class="iconka"></div>
                        <h3>ACCURATE TRADING SIGNALS</h3>
                        <p>Get insanely accurate trading signals that tell you exactly what to buy or sell to make an incredible proﬁt from the Bitcoin Revival. We do the math and crunch the numbers for you with absolutely no human error so you can make
                            fast money with Bitcoin.</p>
                    </div>
                    <div class="success_box">
                        <div class="iconka"></div>
                        <h3>FAST <br />WITHDRAWALS</h3>
                        <p>Get incredibly fast withdrawals so you can enjoy your proﬁts in record time. We have already reliably paid out over $3.1M to our members. Now it’s your turn.</p>
                    </div>
                    <div class="success_box">
                        <div class="iconka"></div>
                        <h3>AWARDED #1<br />APP</h3>
                        <p>Members are earning up to $500 a day paychecks from cryptocurrency! All by following simple crypto proﬁt signals that result in quick, easy proﬁts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-results">
        <button class="but2">JOIN NOW!</button>
        <div class="title-box">
            <h2>LIVE PROFIT RESULTS</h2>
        </div>
        <div class="container-wrap">
            <div class="live-results-table-wrapper">
                <table class="live-results-table">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td">Name</th>
                            <th class="dark-purple padding-left-td">Profit</th>
                            <th class="dark-purple padding-left-td">Date</th>
                            <th class="dark-purple padding-left-td">Cryptocurrency</th>
                            <th class="dark-purple padding-left-td">Result</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td class="bold">Jessica T.</td>
                            <td class="bold">€986</td>
                            <td class="trade-time-td padding-left-td">06/04/2020</td>
                            <td>LTC/EOS</td>
                            <td>
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Joseph M.</td>
                            <td class="bold">€723</td>
                            <td class="trade-time-td padding-left-td">06/04/2020</td>
                            <td>ETH/LTC</td>
                            <td>
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Harry C.</td>
                            <td class="bold">€1032</td>
                            <td class="trade-time-td padding-left-td">06/04/2020</td>
                            <td>BTC/ETH</td>
                            <td>
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Evan M.</td>
                            <td class="bold">€839</td>
                            <td class="trade-time-td padding-left-td">06/04/2020</td>
                            <td>EOS/ETH</td>
                            <td>
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Lily C.</td>
                            <td class="bold">€1201</td>
                            <td class="trade-time-td padding-left-td">06/04/2020</td>
                            <td>LTC/EOS</td>
                            <td>
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Lewis R.</td>
                            <td class="bold">€972</td>
                            <td class="trade-time-td padding-left-td">06/04/2020</td>
                            <td>BTC/ETH</td>
                            <td>
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">George B.</td>
                            <td class="bold">€687</td>
                            <td class="trade-time-td padding-left-td">06/04/2020</td>
                            <td>ETH/LTC</td>
                            <td>
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Natasha R.</td>
                            <td class="bold">€1129</td>
                            <td class="trade-time-td padding-left-td">06/04/2020</td>
                            <td>EOS/ETH</td>
                            <td>
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Matthew C.</td>
                            <td class="bold">€919</td>
                            <td class="trade-time-td padding-left-td">06/04/2020</td>
                            <td>LTC/EOS</td>
                            <td>
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                        <tr>
                            <td class="bold last-td">Jamie P.</td>
                            <td class="bold last-td">€1164</td>
                            <td class="last-td trade-time-td padding-left-td">06/04/2020</td>
                            <td class="last-td">BTC/ETH</td>
                            <td class="last-td">
                                <img src="img/tick.png" alt="tick">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="how_it_works">
        <h2 class="how_it_works__title">HOW IT WORKS</h2>
        <div class="how_it_works__success">
            <div class="success_box">
                <div class="iconka"></div>
                <h3>Register Free</h3>
                <p>Enter your accurate information on this page for free instant access to Bitcoin Revival. No download required. Use it from anywhere with an internet connection and on any device.</p>
            </div>
            <div class="success_box">
                <div class="iconka"></div>
                <h3>FREE Coaching Session</h3>
                <p>A Bitcoin Revival coach has set aside 10 minutes to speak with you on the phone, so you can get set up successfully and make your ﬁrst trade within the next few minutes.</p>
            </div>
            <div class="success_box">
                <div class="iconka"></div>
                <h3>Trade with Bitcoin Signals</h3>
                <p>You don’t need to be an expert trader to earn money using our system. Simply follow our easy signals that thousands of members are already using to earn a consistent income from Bitcoin online.</p>
            </div>
        </div>
    </section>

    <section class="section-ask">
        <button class="but2"> OPEN FREE ACCOUNT</button>
        <h2 class="section-title">FAQs</h2>
        <div class="ask_container">
            <div class="ask_box">
                <h2>I don’t have trading experience. Will this work for me?</h2>
                <p>Yes, this will absolutely work for you. You don’t need any trading experience to make money from Bitcoin’s revival. Simply follow our Bitcoin trading signals to increase your</p>
            </div>
            <div class="ask_box">
                <h2>Are my funds accessible?</h2>
                <p>Yes, you can withdraw your proﬁts to your bank account at any time.</p>
            </div>
            <div class="ask_box">
                <h2>Is it really free?</h2>
                <p>Yes, there is no cost to you if you ﬁll out the form on this page to lock in your free account now. You will be required to make a small deposit of just $250 in order to start trading Bitcoin online.</p>
            </div>
            <div class="ask_box">
                <h2>Can I trade from my phone or tablet?</h2>
                <p>You can access this system on any device, including your computer, tablet or iPhone.</p>
            </div>
            <div class="ask_box">
                <h2>Do I need to be technical?</h2>
                <p>The only requirement is that you have basic computer skills, such as knowing how to get to a website, click a button and ﬁll out a form. Using this system is as easy as sending an email.</p>
            </div>
            <div class="ask_box">
                <h2>How do I get started?</h2>
                <p>Simply ﬁll out the form on this page and a coach will get in touch with you shortly to help you execute your ﬁrst trade within 10 minutes or less.</p>
            </div>
        </div>
    </section>

    <section class="v2">
        <div class="reg_block2">
            <div class="center">
                <div class="form-container-unique">
                    <span class="form_subtitle">Join the new unbelievable</span><br /><span class="form_title">BITCOIN REVIVAL</span>
                    FORM
                    <div class="app" id="app2" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Register now"></div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <footer>
        <div class="other_logo__box">
            <ul>
                <li><img alt="" src="img/mcafee.png"></li>
                <li><img alt="" src="img/ersign.png"></li>
                <li><img alt="" src="img/Symantec.png"></li>
                <li><img alt="" src="img/geotrust.png"></li>
                <li><img alt="" src="img/21-layers.png"></li>
            </ul>
        </div>
        <div class="risk">
            <p>
                <span>Important Risk Note</span>: Trading in FX and CFDs involves a high risk of loss due to the leveraged nature of the trading which might lead to the total loss of your capital and which might not be appropriate for all types of investors.
                Please read our full risk warning and the relevant broker you will be registered with to ensure that you understand the risks involved prior to proceeding, taking into consideration your relevant experience. Seek independent advice if
                necessary. The information contained in this website and disclosure documents is of a general nature only, and does not take into account your personal circumstances, financial situation or needs. You should consider the brokerage Client
                Agreement carefully, and seek independent advice before deciding whether trading in such products is suitable for you. </p>
        </div>
    </footer>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/algo-video.js"></script>
    <script src="js/init.js"></script>
    <script src="js/yii.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/loadingoverlay.min.js"></script>
    <script src="js/swal_error.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/site.js"></script>

    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>

</body>

</html>