<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitcoin Union ™ | Official Website [2020]</title>
    <meta name="description" content="The Bitcoin Union is made up of an exclusive group of people who have understood the insane wealth they can get from Bitcoin. Register Now and become wealthier than you are today.">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="The Bitcoin Union is made up of an exclusive group of people who have understood the insane wealth they can get from Bitcoin. Register Now and become wealthier than you are today." />
    <meta name="twitter:title" content="Bitcoin Union ™ | Official Website [2021]" />
    <link rel="shortcut icon" href="assets/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    
	<!-- Open Graph -->
    <?php $seoText = 'Welcome!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>assets/videothumbnail.jpg"/>
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
        .live-results-table-wrapper{
            padding: 0 50px 50px !important;
        }
        .intro-part-2 .logo {
            width: 300px !important;
        }
        .faq-wrapper{
            max-width: 492px;
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
        input[type=tel]{
            margin: 0 !important;
        }
        input:not([type=checkbox]) {
            width: 100% !important;
            height: 40px !important;
            border-radius: 0;
        }
        form .input-wrap {
            margin: 10px 0;
        }
        input {
            width: auto !important;
            height: auto !important;
            margin-bottom: 0;
        }
        input[type=checkbox], input[type=radio]{
            margin: 0 10px 0 0 !important;
        }
        .vue-tel-input{
            border: none !important;
        }
        .video{
            display: flex;
        }
        .checkbox-wrap{
            display: flex;
            align-items: center;
        }
        @media screen and (max-width: 768px){
            .play-btn {
                opacity: 1 !important;
                display: flex !important;
            }
            .fix-padding{
                padding: 0 15px;
            }
        }
    </style>
</head>

<body>
    <!-- INTRO SECTION 1 START -->
    <section class="intro-section-1">
        <div class="container">
            <p class="intro-p"><b data-i18n>WARNING</b>:<span data-i18n>Due to extremely high media demand, we will close registration as of</span> <b>
					<span class="tomorrow-date">10/11/2020</span> - <span data-i18n>HURRY!</span> </b><span class="countdown-span" id="countdown-span">05:32</span></p>
        </div>
    </section>
    <!-- INTRO SECTION 1 END -->

    <!-- INTRO SECTION 2 START -->
    <section class="intro-section-2">
        <div class="container">
            <div class="intro-part-2">
                <img loading="lazy" src="assets/logo2.png" alt="Bitcoin Union Logo" class="logo">
                <div class="exclusive-offers-wrapper intro-margin-div none">
                    <div style="margin-right: 10px;"><span class="purple" data-i18n>Exclusive offers for</span> <br> <span class="red" data-i18n>trades in</span> <span class="country-name-span red"></span></div>
                    <img loading="lazy" src="assets/flags/GB.png" class="flag" alt="country flag">
                </div>

                <div class="dynamic-person-div none">
                    <div class="dynamic-person-img-wrapper">
                        <img loading="lazy" src="assets/25.jpg" alt="Women" class="dynamic-person-img">
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
    <!-- INTRO SECTION 2 END -->

    <!-- VIDEO FORM SECTION START -->
    <section class="video-form-section">
        <div class="container">
            <h1 class="video-header">Bitcoin Is Making People Rich</h1>
            <p class="video-subheader"><span data-i18n>And you can Become The <span class="yellow" data-i18n>Next Millionaire...</span></span>
            </p>
            <div class="row" style="margin-bottom: -157px;">
                <div class="col-md-8">
                    <div class="video-wrapper">
                        <div class="video">
                            <video controls="controls" poster="assets/videothumbnail.jpg" allowfullscreen="" width="100%">
                                <source src="assets/en-1.mp4" type="video/mp4" />
                            </video>
                            <div class="play-btn"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-container form_wrapper">
                        <p class="formHeader" data-i18n>CHANGE YOUR LIFE TODAY!</p>
                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="REGISTER NOW" ></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- VIDEO FORM SECTION END -->

    <!-- INTRO SECTION MOBILE START -->
    <section class="intro-section-mobile">
        <div class="container">
            <div class="intro-part-2">
                <div class="exclusive-offers-wrapper intro-margin-div">
                    <div class="exclusive-offers-text" style="margin-right: 10px;"><span class="purple" data-i18n>Exclusive offers for</span> <br> <span class="red" data-i18n>trades in</span> <span class="country-name-span red"></span></div>
                    <img loading="lazy" src="assets/flags/GB.png" class="flag" alt="">
                </div>

                <div class="dynamic-person-div">
                    <div class="dynamic-person-img-wrapper">
                        <img loading="lazy" src="assets/25.jpg" alt="" class="dynamic-person-img">
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
    <!-- INTRO SECTION MOBILE END -->

    <!-- LOGOS SECTION START -->
    <section class="logos-section">
        <div class="container">
            <div class="logos-wrapper">
                <img loading="lazy" src="assets/bitgo.png" class="logo" alt="bitgo logo">
                <img loading="lazy" src="assets/norton.png" class="logo" alt="norton logo">
                <img loading="lazy" src="assets/secure-trading.png" class="logo" alt="secure trading logo">
                <img loading="lazy" src="assets/mcafee.png" class="logo" alt="mcafee logo">
                <div class="bid-wrapper">
                    <span class="orange" data-i18n>BID</span>
                    <span class="green bid-ask-span"><span data-init="visitor-currency-symbol">$</span>6769.42</span>
                </div>
                <div class="ask-wrapper">
                    <span class="gray" data-i18n>ASK</span>
                    <span class="gray bid-ask-span"><span data-init="visitor-currency-symbol">$</span>6771.08</span>
                </div>
            </div>
        </div>
    </section>
    <!-- LOGOS SECTION END -->


    <section class="section_short_description">

        <div class="container">

            <div class="row">

                <div class="col-md-8">

                    <h2>
                    Join Us and Start Getting Rich<br />
                        <span>Bitcoin Union!</span>
                    </h2>

                    <p>The Bitcoin Union is a group reserved exclusively to people who jumped on the insane returns that Bitcoin offers and have quietly amassed a fortune in doing so. Our members enjoy retreats around the world every month while they make money on their laptop with just a few minutes of “work” every day.</p>

                    <img loading="lazy" src="assets/girl-holding-bitcoin.png" class="girl_mobile img-fluid" alt="Girl holding bitcoin" />

                </div>
                <!-- col -->

            </div>
            <!-- row -->

        </div>
        <!-- container -->

    </section>
    <!-- section_short_description -->




    <section class="section_news">

        <div class="container">

            <div class="row">

                <div class="col-md-5">


                </div>
                <!-- col -->

                <div class="col-md-7">

                    <img loading="lazy" src="assets/girl-holding-bitcoin.png" class="girl_desktop img-fluid" alt="Girl holding bitcoin" />

                </div>
                <!-- col -->

            </div>
            <!-- row -->

        </div>
        <!-- container -->

    </section>
    <!-- section_news -->




    <!-- TESTIMONIALS SECTION START -->
    <section class="testimonials-section" style="position: relative;">
        <div class="container-fluid">
            <div class="container">
                <h3 class="testimonials-header purple" data-i18n>REAL TESTIMONIALS FROM OUR USERS</h3>
               
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-1">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Mark K.</span> <br>
                            <span data-i18n>Fort Worth, TX</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>10,987.98</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>“I always felt inadequate because I never had any money. Today, I don’t think that way anymore. With no real qualifications, I have still managed to make it. Bitcoin Union has transformed me from a pauper to an happy man.</br>
							I look forward to enjoying life and retiring early - and still have enough to live the luxury lifestyle Bitcoin has introduced me to.”</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-2">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Jennifer A.</span> <br>
                            <span data-i18n>Irvine, CA</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>6,109.09</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>'I've been a member of Bitcoin Union for only 47 days. But my life has already changed! Not only have I made my first $10K , but I've also met some of the most incredible people in the process. Thanks, Bitcoin Union!'</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-3">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Gilbert C.</span> <br>
                            <span data-i18n>Orem, UT</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>8,938.79</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>'Surprisingly, I used to be an investor on Wall Street. And I’ve never seen anything like this in my 10 year tenure at the company. My colleagues all thought I was crazy when I quit the firm to invest with the Bitcoin Union software full-time. $38,459 in profits later, all of my colleagues are now BEGGING me to let them in.'</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-4">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Jane F.</span><br>
                            <span data-i18n>Fort Worth, TX</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>7,234.98</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>Two weeks ago, I got laid off. With no options left, I thought my life was over. Now I’m making over $1,261.42 each and every day. And for the first time in 2 months, my account isn’t overdrawn. Thanks, Bitcoin Union!'</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS SECTION END -->

    <!-- FEATURES SECTION START -->
    <section class="features-section text-center white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-1.png" class="feature-img" alt="feature 1">
                        </div>
                        <h2 class="feature-header" data-i18n>Accurate and precise performance</h2>
                        <p class="feature-description" data-i18n>There is no other trading app in the world that performs at the 99.4% level of accuaracy that The Bitcoin Union is able to hit. That's why our members from around the world trust us to double triple and quadruple their hard-earned money.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-2.png" class="feature-img" alt="feature 1">
                        </div>
                        <h3 class="feature-header" data-i18n>Superior technology</h3>
                        <p class="feature-description" data-i18n>The Bitcoin Union software has been created using the most advanced programming the trading world has ever seen. The software is ahead of the markets by 0.01 seconds. This 'time leap' makes the software the most consistent trading app on the planet.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-3.png" class="feature-img" alt="feature 1">
                        </div>
                        <h3 class="feature-header" data-i18n>Award-winning trading app</h3>
                        <p class="feature-description" data-i18n>The Bitcoin Union app has won a number of awards. The most recent awards we have had the honor of receiving is getting #1 in the trading software category for the US Trading Association.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURES SECTION END -->

    <!-- LIVE RESULTS SECTION START-->
    <section class="live-results-section text-center">
        <div class="container relative">
            <div class="live-results-table-wrapper">
                <button class="yellow-btn join-now-btn scroll-top-btn scroll_to_top">
					<span data-i18n>JOIN NOW!</span>
				</button>
                <p class="dark-purple bold live-results-header" data-i18n>LIVE PROFIT RESULTS</p>
                <table class="live-results-table" id="table_profits">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td" data-i18n>Name</th>
                            <th class="dark-purple padding-left-td" data-i18n>Profit</th>
                            <th class="dark-purple padding-left-td" data-i18n>Trade Time</th>
                            <th class="dark-purple padding-left-td" data-i18n>Cryptocurrency</th>
                            <th class="dark-purple padding-left-td" data-i18n>Result</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td class="bold">Jennifer Bradley</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>986</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Kathy Vasquez</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>723</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Raymond Wade</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1032</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Manon Carlier</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>839</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Anthony Larson</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1201</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Esteban Huet</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>972</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Steven Edwards</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>687</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Eugene Woods</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1129</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Jeffrey Scott</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>919</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold last-td">Olivia Carlson</td>
                            <td class="bold last-td"><span data-init="visitor-currency-symbol">$</span>1164</td>
                            <td class="last-td trade-time-td padding-left-td"></tdcla>
                                <td class="last-td">BTC/ETH</td>
                                <td class="last-td"><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- LIVE RESULTS SECTION END -->

    <!-- HOW IT WORKS SECTION START -->
    <section class="how-it-works-section text-center">
        <div class="container">
            <div class="how-it-works-wrapper">
                <h2 class="dark-purple bold how-it-works-header" data-i18n>HOW IT WORKS</h2>
                <div class="row">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <div class="step-header white step-header-1 h3" data-i18n>Step 1</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-1.png" alt="step 1" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>REGISTER ON THE SITE</div>
                            <p class="step-description" data-i18n>Once your registration is accepted, you will automatically become the newest member of the Bitcoin Union. And you will get to claim our proprietary bitcoin trading software for free.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <div class="step-header white step-header-2 h3" data-i18n>Step 2</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-2.png" alt="step 2" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>FUND YOUR ACCOUNT</div>
                            <p class="step-description"><span data-i18n>Like any business, you need working capital to get started. So to start profiting with The Bitcoin Union, you must invest any amount you desire of $250 or more.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <div class="step-header white step-header-3 h3" data-i18n>Step 3</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-3.png" alt="step 3" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>FINISH</div>
                            <p class="step-description" data-i18n>Click trade to enjoy precise and accurate hands-free trading powered by our award-winning algorithm. You can also set the trading to manual if you prefer to trade on your own.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-works-btn-wrapper">
            <button class="yellow-btn open-free-account-btn scroll-top-btn scroll_to_top">
				<span data-i18n>OPEN FREE ACCOUNT</span>
			</button>
        </div>
    </section>
    <!-- HOW IT WORKS SECTION END -->

    <!-- FAQ SECTION START -->
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-section-header text-center dark-purple bold" data-i18n>Frequently asked questions</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="row fix-padding">
                        <div class="faq-wrapper faq-wrapper-1">
                            <h3 class="faq-question light-purple bold h2" data-i18n>What kind of results can I expect?</h3>
                            <p class="faq-answer" data-i18n>Bitcoin Union members typically profit a minimum of ₤1100 daily.
                            </p>
                        </div>
                    </div>
                    <div class="row fix-padding">
                        <div class="faq-wrapper faq-wrapper-2">
                            <h4 class="faq-question light-purple bold h2" data-i18n>How many hours per day do I need to work?</h4>
                            <p class="faq-answer" data-i18n>
                            Our members work an average of 20 minutes a day or less. Because the software handles the trading the amount of 'work' required is minimal.
                            </p>
                        </div>
                    </div>
                    <div class="row fix-padding">
                        <div class="faq-wrapper faq-wrapper-3">
                            <h4 class="faq-question light-purple bold h2" data-i18n>What is the maximum amount that I can make?</h4>
                            <p class="faq-answer" data-i18n>
                            Your profits are unlimited within The Bitcoin Union. Some members earned their first million within just 61 days.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row fix-padding">
                    <div class="faq-wrapper faq-wrapper-4">
                        <h4 class="faq-question light-purple bold h2" data-i18n>How much does the software cost?</h4>
                        <p class="faq-answer" data-i18n>
                        Members of The Bitcoin Union get a copy of our proprietart software free of charge. To become a member, simply fill out the form on this page.
                        </p>
                    </div>
                    </div>
                    <div class="row fix-padding">
                    <div class="faq-wrapper faq-wrapper-5">
                        <div class="faq-question light-purple bold h2" data-i18n>Is this like MLM or Affiliate Marketing?</div>
                        <p class="faq-answer">This is not like MLM, affiliate marketing or anything else out there. The software wins trades with 99.4% accuaracy.</p>
                    </div>
                    </div>
                    <div class="row fix-padding">
                    <div class="faq-wrapper faq-wrapper-6">
                        <h2 class="faq-question light-purple bold" data-i18n>Are there any fees?</h2>
                        <p class="faq-answer" data-i18n>
                        There are no hidden fees. No broker fees or commissions. All of your money is 100% yours and you are free to withdraw it at any time you choose without delay.</p>
                    </div>
                    </div>
                </div>  
            </div>

        </div>
    </section>
    <!-- FAQ SECTION END -->

    <!-- PRE-FOOTER SECTION START -->
    <section class="pre-footer-section">
        <div class="container">
            <button class="pre-footer-btn scroll-top-btn scroll_to_top">
				<span data-i18n>GET STARTED NOW</span>
			</button>
        </div>
    </section>
    <!-- PRE-FOOTER SECTION END -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ul class="footer-ul" style="list-style: none">
                        <style>
                            .footer-ul li {
                                display: inline-block;
                                margin: 0 2px;
                            }
                            .footer-ul a {
                                text-transform: uppercase;
                            }
                            footer{
                                padding: 30px 0;
                            }
                        </style>
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Terms of use</a> | <a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy Policy</a>
                    </ul>
                    <img loading="lazy" src="assets/logo2.png" alt="Bitcoin Union" class="logo img-responsive center-block">
                    
                </div>
            </div>
        </div>
    </footer>

    <div id="openModalLoading" class="modalDialog">
        <div>
            <div class="loading-spinner"></div>
        </div>
        <div class="loading-text">Connecting you to the best broker for your region...</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/main.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>

    <script>
        $(document).ready(function () {
            let date = new Date().toLocaleDateString();
            $('.trade-time-td').text(date);
        });
    </script>
</body>

</html>