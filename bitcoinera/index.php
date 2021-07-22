<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitcoin Era ™ | Official Website [2020]</title>
    <meta name="description" content="The Bitcoin Era is made up of an exclusive group of people who have understood the insane wealth they can get from Bitcoin. Register Now and become wealthier than you are today.">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="The Bitcoin Era is made up of an exclusive group of people who have understood the insane wealth they can get from Bitcoin. Register Now and become wealthier than you are today." />
    <meta name="twitter:title" content="Bitcoin Era ™ | Official Website [2021]" />
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
                <img loading="lazy" src="assets/logo2.png" alt="Bitcoin Era Logo" class="logo">
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
            <h1 class="video-header">Bitcoin Era</h1>
            <div class="video-header" data-i18n>The Official Bitcoin Era App Website</div>
            <p class="video-subheader"><span data-i18n>Become a part of the <span class="yellow" data-i18n>Bitcoin Era</span> today!</span>
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
                        Join us at Bitcoin Era and become<br />
                        <span>an early Bitcoin investor</span>
                    </h2>

                    <p>The Bitcoin Era is made up of an exclusive group of people who have understood the huge potential of Bitcoin. We call these people “early Bitcoin investors” as they invested in Bitcoins when it initially took off some ten years ago.
                        Today, these people have become rich. Now you can become one of them.</p>

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
                <h3 class="testimonials-header purple" data-i18n>Real testaments from our members</h3>
                <p>Does Bitcoin Era sound too good to be true? Read what our members say about their experience with us and the money they have made purely through Bitcoin Era.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-1">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Mark K.</span> <br>
                            <span data-i18n>Fort Worth, TX</span> <br>
                            <!-- <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>12923</span> -->
                        </div>
                        <div class="testimonial-hover-text">
                            <i>“I always felt inadequate because I never had any money. Today, I don’t think that way anymore. With no real qualifications, I have still managed to make it. Bitcoin Era has transformed me from a pauper to an happy man.</br>
							I look forward to enjoying life and retiring early - and still have enough to live the luxury lifestyle Bitcoin has introduced me to.”</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-2">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Jennifer A.</span> <br>
                            <span data-i18n>Irvine, CA</span> <br>
                            <!-- <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>7192</span> -->
                        </div>
                        <div class="testimonial-hover-text">
                            <i>“I’m a member of the Bitcoin Era for less than two months, and I’ve already made massive profits. I have crossed my first goal. I have met some super successful people through Bitcoin Era – including my life partner. I’ve never been happier, and today, I just want to say thank you.”</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-3">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Ernest I.</span> <br>
                            <span data-i18n>Orem, UT</span> <br>
                            <!-- <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>10519</span> -->
                        </div>
                        <div class="testimonial-hover-text">
                            <i>“Hi, I’m a former investor on Wall Street. I have to be honest. I have never made this much money as a Wall Street Investor. Bitcoin was simply a past time. But once I realized I was making good money there, I quit my job to invest my time and money in Bitcoin. Now, my colleagues who thought I was mad to quit the firm, are asking how they can invest in Bitcoin..”</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-4">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Jane K.</span><br>
                            <span data-i18n>Fort Worth, TX</span> <br>
                            <!-- <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>8519</span> -->
                        </div>
                        <div class="testimonial-hover-text">
                            <i>“I got laid off work a while ago. I didn’t know how I was going to make ends meet and look after my 2-year-old daughter, Cassey. I read about Bitcoin and decided to take my chances with Bitcoin. I invested $250 – the minimum amount. Now, I’m making much more every week. For the first time in months, my account is flush.. I simply rely on Bitcoin Era.”</i>
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
            <h2>The secret behind the success of Bitcoin Era</h2>
            <p>We admit that there are several other trading software companies in the market today. But some are more successful than others. Then, there is the Bitcoin Era, which has a proven track record of being one of the most successful trading software
                in the world. Here’s what makes Bitcoin Era a unique trading software:</p>
            <div class="row">
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-1.png" class="feature-img" alt="feature 1">
                        </div>
                        <h2 class="feature-header" data-i18n>Accurate and precise performance</h2>
                        <p class="feature-description" data-i18n>No trading application is capable of the fierce and unrelenting performance and accuracy that Bitcoin Era works with. Bitcoin Era performs really high accuracy. Thanks to this amazing accuracy level, our members trust the app to
                            increase their wealth. The more money our investors invest, the more potential profits that Bitcoin Era can create.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-2.png" class="feature-img" alt="feature 1">
                        </div>
                        <h3 class="feature-header" data-i18n>Superior technology</h3>
                        <p class="feature-description" data-i18n>Bitcoin Era makes use of the most advanced programming software that the trading world has ever known. That is a big, advantageous time difference in the trading world, where a decision made faster than the next person can lead
                            to high profits. The software has a reputation for being consistent, trustworthy, and infallible.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-3.png" class="feature-img" alt="feature 1">
                        </div>
                        <h3 class="feature-header" data-i18n>Award-winning trading app</h3>
                        <p class="feature-description" data-i18n>Thanks to its ultimate performance and superior technology, the Bitcoin Era app has won several prestigious awards, such as the highest trading software award This kind of recognition is gained only through quality, accuracy, outstanding
                            performance, and balance of functionality. Bitcoin Era has all this, and therefore, is a standout app.</p>
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
					<span data-i18n>GET STARTED NOW</span>
				</button>
                <p class="dark-purple bold live-results-header" data-i18n>LIVE PROFIT RESULTS</p>
                <table class="live-results-table" id="table_profits">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td" data-i18n>The Bitcoin Era</th>
                            <th class="dark-purple padding-left-td" data-i18n>Profit</th>
                            <th class="dark-purple padding-left-td" data-i18n>Trade Time</th>
                            <th class="dark-purple padding-left-td" data-i18n>Cryptocurrency</th>
                            <th class="dark-purple padding-left-td" data-i18n>Result</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td class="bold">Jessica T.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>986</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Joseph M.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>723</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Harry C.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1032</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Evan M.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>839</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lily C.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1201</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lewis R.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>972</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">George B.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>687</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Natasha R.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1129</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Matthew C.</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>919</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold last-td">Jamie P.</td>
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
                <h2 class="dark-purple bold how-it-works-header" data-i18n>Get started on Bitcoin Era App in three easy steps</h2>
                <div class="row">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <div class="step-header white step-header-1 h3" data-i18n>Step 1</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-1.png" alt="step 1" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>Register</div>
                            <p class="step-description" data-i18n>You immediately become a member of the Bitcoin Era once your registration has been accepted. The process is automatic. You can now claim the award-winning proprietary bitcoin trading software – Bitcoin Era, free. No hidden
                                costs, no hidden charges, no hidden fees.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <div class="step-header white step-header-2 h3" data-i18n>Step 2</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-2.png" alt="step 2" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>Finance</div>
                            <p class="step-description"><span data-i18n>Every successful business needs an initial investment. By investing as little as $250 or more, you can start investing and doubling or tripling your money on Bitcoin Era. All the money you make, including your initial investment of $250 or more, is yours. Save it, invest it, or withdraw it.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <div class="step-header white step-header-3 h3" data-i18n>Step 3</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-3.png" alt="step 3" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>Trade</div>
                            <p class="step-description" data-i18n>Click on “trade” to start trading and building your wealth on Bitcoin Era. Set your trading to either ‘manual’ or ‘automated’ depending on whether you are a professional trader or a new, inexperienced trader.</p>
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
            <p class="text-center">Have a question for us? We would be glad to clear all your doubts regarding Bitcoins and Bitcoin Era. We have put together a list of information that we are frequently asked about.</p>

            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-1">

                        <h3 class="faq-question light-purple bold h2" data-i18n>What is Bitcoin?</h3>
                        <p class="faq-answer" data-i18n>A bitcoin is a type of cryptocurrency. It is also often referred to as ‘virtual currency’ or ‘digital currency.’ In simple terms, a bitcoin is a type of money, but it does not have a central bank or administrator. Use this form
                            of currency just as you would use any currency. You can use it to buy goods. Today, more and more merchants are selling their ware for both traditional money and bitcoins. More and more traders are now accepting bitcoin currency.
                        </p>
                        <p>To make a financial transaction with a bitcoin, send a complete bitcoin or a part of a bitcoin to other people. All details of a bitcoin transaction are stored carefully in a public listing known as a blockchain.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-2">
                        <h4 class="faq-question light-purple bold h2" data-i18n>What does a bitcoin look like?</h4>
                        <p class="faq-answer" data-i18n>
                            A bitcoin does not look like the average note or coin. But that does not mean it isn’t real or valuable.</p>
                        <p>A bitcoin is a computer file that sits in a virtual or digital wallet app. This can be downloaded onto your smartphone or computer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-3">
                        <h4 class="faq-question light-purple bold h2" data-i18n>What is the value of bitcoin?</h4>
                        <p class="faq-answer" data-i18n>
                            The value of a bitcoin is continuously changing. When bitcoins first made their appearance in the market in 2009, a single bitcoin was equal to less than $1. In March 2014, its worth had gone up to around $700. By December 2017, the worth of a bitcoin
                            soared up to approximately $20,000. Today, a bitcoin is worth much more. By the end of 2020, your bitcoin could be worth $50,000. Because of the growing value of bitcoins, people can become more affluent, faster.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-4">
                        <h4 class="faq-question light-purple bold h2" data-i18n>How does bitcoin work?</h4>
                        <p class="faq-answer" data-i18n>
                            Consider bitcoins as individual blocks. You would treat these blocks as carefully as you would treat traditional money. When purchasing with bitcoins, the bitcoin transfers from the buyer (you) to the seller (the person whom you buy the good from). Bitcoins
                            are extremely valuable because each bitcoin is worth several tens of thousands of dollars. Each bitcoin can be exchanged for a variety of real goods and services, and even for cash. All transactions are electronic transactions.
                            Every individual transaction is verified via your system.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-5">
                        <div class="faq-question light-purple bold h2" data-i18n>What is the advantage of bitcoins that traditional cash does not provide?</div>
                        <p class="faq-answer">Bitcoins are stored more safely and securely than regular traditional cash.</p>
                        <p>Bitcoins are a type of cryptocurrency that is legal in the United States of America. </p>
                        <p>More and more merchants are offering to trade their wares for cryptocurrency. In other words, you can buy goods with bitcoins rather than with real money.</p>
                        <p>Bitcoins are worth much more than traditional cash. </p>
                        <p>Bitcoins are not controlled by the government or by any bank. So, people can remain anonymous regarding their bitcoin transactions and where they spend their virtual currency. It is impossible to tell which account number is yours
                            – unless you explicitly tell someone.</p>
                        <p>Every transaction is recorded and stored in a public repository. So, it is not possible to create fake coins, copy bitcoins, or conduct a spurious bitcoin transaction with someone else’s bitcoins. </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-6">
                        <h2 class="faq-question light-purple bold" data-i18n>Can anyone use the Bitcoin Era software? Should I have experience in trading?</h2>
                        <p class="faq-answer" data-i18n>
                            The Bitcoin Era software is so easy to use that anyone can use it. Seasoned traders and new traders can use the app. If you are new to trading apps, you have nothing to fear because now you can trade Bitcoins safely and profitably. </p>
                        <p>The updated version of the Bitcoin Era has multiple new customizable features. That means setting up your trading parameters is so much simpler. The app is so self-explanatory that you won’t have any difficulty using the app. </p>
                        <p>If you are an expert trader, you can make use of Bitcoin Era to test your success at trading analysis and strategies. You can even improve your accuracy in the trading markets before making money.</p>
                        <p>With the Bitcoin Era app, you have full control of your trading activities if you use the ‘manual’ mode. Or you can choose the “automated” style, let the software find the best trades, and invest in those on your behalf.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-7">
                        <h3 class="faq-question light-purple bold h2" data-i18n>Is it complicated to trade on the app?</h3>
                        <p class="faq-answer" data-i18n>
                            No trading experience is required. No previous experience in using an app is needed. If you can operate your computer and your smartphone, you can easily use the Bitcoin Era App. Rather than buying/selling Bitcoin from an exchange, what you will be doing
                            is trading Bitcoin CFDs (Contracts for Differences). All you must do is make a pure guess (as accurately as possible) or speculate (as accurately as possible) on the price of Bitcoin. You can make money as and when the price
                            of Bitcoin moves up or down.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-8">
                        <h2 class="faq-question light-purple bold" data-i18n>How does the Bitcoin Era app work?</h2>
                        <p class="faq-answer" data-i18n>
                            Bitcoin Era is a comprehensive automated trading software exclusively designed to trade in the Bitcoin market. This software has won several awards, thanks to its advanced algorithm that can assess various markets and find the most rewarding trading opportunities.
                            The Bitcoin Era algorithm compares massive amounts of previous and existing data and applies the fundamental and technical analysis of the existing market conditions. </p>
                        <p>The advanced design of the Bitcoin Era software’s algorithm ensures that it analyses the markets with high accuracy. It has the advantage of knowing when the markets will move and in which direction they will move. It is this absolute
                            precision that makes Bitcoin Era work reliably and consistently.</p>
                        <p>When on Bitcoin Era, you can customize the trading parameters of the software. That is, you can set:
                        </p>
                        <ul>
                            <li>The types and kinds of assets you want to trade-in</li>
                            <li>The amount you want to invest in</li>
                            <li>Set the risk level </li>
                            <li>Set the strategies you wish to use</li>
                        </ul>
                        <p>New traders or inexperienced traders prefer to take advantage of the “automated” mode. In the automated style, the software does all the heavy lifting. The Bitcoin Era software searches for a trading opportunity that matches the
                            trading parameters that you set. Once it does find a precise match, it automatically opens a trade-in your name. </p>
                        <p>You can set the Bitcoin Era software to ‘manual’ mode if you want to have full control of your trading activities. That is what our experienced trading members do, as they prefer to have 100% control over their trading activity.
                        </p>
                        <p>You can choose whichever mode suits you.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-8">
                        <h3 class="faq-question light-purple bold h2" data-i18n>What kind of results will I be able to expect from the Bitcoin Era App?</h3>
                        <p class="faq-answer" data-i18n>What you earn is directly proportionate to the amount of time and effort you put in. Most of the members of Bitcoin Era software are enjoying massive returns. Some of our members make over $1,500 per day. Few dedicated members
                            make more on some days.</p>
                        <p>How much money you make will depend on you.. As far as the potential to make money on Bitcoin Era goes, it is limitless. It’s as direct and straightforward as this:</p>
                        <ul>
                            <li>The more trading capital you invest, the more money you can expect to make.</li>
                            <li>The more trading opportunities the market has and the more trading opportunities you take part in, the more money you can make.</li>
                            <li>Don't let anything stop you from deciding how much profits you can make with Bitcoin. </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-8">
                        <div class="faq-question light-purple bold h2" data-i18n>Realistically, what is the most amount that I can make?</div>
                        <p class="faq-answer" data-i18n>
                            Your potential to make profits is unlimited. But we will be honest with you. Some factors will affect how much you make. These factors – like volatility in the market and liquidity, might affect how much money you make from time to time. </p>
                        <p>The Bitcoin Era algorithm can detect and trade all potentially profitable trading opportunities automatically. You won’t miss a single opening. </p>
                        <p>Make up your mind to success and sign up for Bitcoin Era now!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-8">
                        <h4 class="faq-question light-purple bold h2" data-i18n>What are the benefits of the automated Bitcoin Era software?</h4>
                        <p>With online trading, every second gained is bitcoins earned. If you hesitate with your decision for a fraction of a second longer than intended, you could end up making an illegal or wrong trade. The Bitcoin Era software will render
                            quick, smart, instantaneous decisions.</p>
                        <p>Bitcoin Era software trades with agility and accuracy. Every trade you take part in is carried out at precisely the right moment. </p>
                        <p>We, humans, are controlled by emotions. It often happens that a trader starts losing money during the trading process. When this happens, they automatically become reckless and throw their money on a bad trade that inadvertently
                            leads to significant losses. The Bitcoin Era software operates on pure statistics – no emotions involved. Trading opportunities are selected depending on your set trading parameters. No questions asked. </p>
                        <p>The automated mode on Bitcoin Era makes all the right trading decisions completely automatically for you. The automatic mode is best-suited for new traders. But if you want the thrill of the trade, you can switch to manual mode
                            and make your own trading decisions - and have full control of your trading activities. The manual way is best-suited for experienced online traders.</p>
                        <p>Don't spend sleepless nights analyzing the financial market. Bitcoin Era does it all for you. All that is required is a few minutes of dedicated time every day to set up your parameters.</p>
                        <p>When market conditions are favorable and match your trading parameters, Bitcoin Era will automatically open a trade for you. So, you can be sure that you never lose out on any trading opportunity.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-8">
                        <h2 class="faq-question light-purple bold h2" data-i18n>Are there any fees involved to join the Bitcoin Era?</h2>
                        <p>The Bitcoin Era software is completely free.</p>
                        <ul>
                            <li>No hidden fees</li>
                            <li>No commissions.</li>
                            <li>Every bitcoin you earn is yours.</li>
                            <li>The money that you initially invest is 100% yours. You can withdraw it all in its entirety with your profits any time you want.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-8">
                        <h2 class="faq-question light-purple bold h2" data-i18n>How do I get started on Bitcoin Era?</h2>
                        <p>Two steps are all it takes to start making money on Bitcoin Era.</p>
                        <ul>
                            <li>Step 1: Sign up.</li>
                            <li>Step 2: Activate your account.</li>
                        </ul>
                        <p><strong>How to activate your account:</strong></p>
                        <ul>
                            <li>Fill in the registration form and submit your application.</li>
                            <li>Once you have submitted your registration form, your personal Bitcoin Era account will be activated.</li>
                            <li>Now, fund your account with a minimum of $250, so you have trading capital for the app to start trading in your account – in your name. </li>
                            <li>This money is yours. We do not take any money from you. You can withdraw the whole amount with your profits any time you wish to. </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-8">
                        <h2 class="faq-question light-purple bold h2" data-i18n>How many hours will I need to work every single day?</h2>
                        <p>You will find that one of the many advantages of the Bitcoin Era software is that all types of trading market analyses are conducted automatically. So, you won’t have to spend sleepless nights in front of your computer. You can
                            enjoy spending that time with your family. </p>
                        <p>For the Bitcoin Era software to trade on your behalf, spend a few minutes every day to set up your trading parameters. </p>
                        <ul>
                            <li>Select which assets or cryptocurrencies you want Bitcoin Era to trade.</li>
                            <li>Choose how much you want to invest in every trade.</li>
                            <li>Choose a risk level you want the software to buy.</li>
                            <li>Select particular strategies you want the software to use.</li>
                        </ul>
                        <p><i>The Bitcoin Era software will do all the work for you – as you command. </i></p>
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
				<span data-i18n>CHANGE YOUR LIFE TODAY</span>
			</button>
        </div>
    </section>
    <!-- PRE-FOOTER SECTION END -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img loading="lazy" src="assets/logo2.png" alt="Bitcoin Era" class="logo img-responsive center-block">
                    <p><strong>Important Risk Note</strong>: Trading can generate notable benefits; however, it also involves a risk of partial/full funds loss, and should be considered by initial investors. Carefully read our terms & conditions and disclaimer
                        page before investing. Customers must be cognizant of their individual capital gain tax liability in their country of residence. It is against the law to solicit United States persons to buy and sell commodity options, even if
                        they are called ‘prediction' contracts unless they are listed for trading and traded on a CFTC-registered exchange or unless legally exempt.</p>
                    <ul class="footer-ul" style="list-style: none" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <style>
                            .footer-ul li {
                                display: inline-block;
                                margin: 0 2px;
                            }
                        </style>
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Terms of use</a> | <a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy Policy</a>
                    </ul>
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