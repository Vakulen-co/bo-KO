<?php 
include_once 'config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo $base ?>">
    <html lang="en-US">
    <meta charset="utf-8">
    <title>Bitcoin System</title>
    <meta content="Ride The Wave of bitcoin And Earn a Guaranteed $13,000 In Exactly 24 Hours." name="description">
    <meta content="Bitcoin System" property="og:title">
    <meta content="Ride The Wave of bitcoin And Earn a Guaranteed $13,000 In Exactly 24 Hours."
          property="og:description">
    <meta content="images/5d81ed1bd8051932fc1b028e_1200.jpg" property="og:image">
    <meta content="summary" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/components.css" rel="stylesheet" type="text/css">
    <link href="css/systembitcoin.css" rel="stylesheet" type="text/css">
    <script src="js/webfont.js"></script>
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="css/custom.css">
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
</head>

<body class="gtd-body-hidden">
<div class="section"></div>
<div class="nav">
    <div class="columns w-row">
        <div class="column-2 w-col w-col-2">
            <div class="counter">
                <div class="html-embed w-embed w-script">
                    <script>document.write(Math.ceil(Math.random() * 4))</script>
                </div>
                <div class="text-block">FREE COPIES AVAILABLE</div>
            </div>
        </div>
        <div class="column-3 w-col w-col-8"><img src="images/logo.svg" alt="Bitcoin System" width="191" class="logo-2">
        </div>
        <div class="column-2 _2 w-col w-col-2">
            <div data-delay="4000" data-animation="outin" data-autoplay="1" data-duration="500" data-infinite="1"
                 class="slider w-slider">
                <div class="w-slider-mask">
                    <div class="w-slide">
                        <div class="div-block" data-ix="slider-pop">
                            <img src="images/07.jpg" alt="" class="userid">
                            <div class="text-block-3">Brian F. just made<strong class="bold-text-2"><br>$337</strong>
                            </div>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="div-block" data-ix="slider-pop">
                            <img src="images/05.jpg" alt="" class="userid">
                            <div class="text-block-3">Scott D. just made<strong class="bold-text-2"><br>$230</strong>
                            </div>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="div-block" data-ix="slider-pop">
                            <img src="images/03.jpg" alt="" class="userid">
                            <div class="text-block-3">Tiffany L. just made<strong class="bold-text-2"><br>$409</strong>
                            </div>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="div-block" data-ix="slider-pop">
                            <img src="images/02.jpg" alt="Melicssa" class="userid">
                            <div class="text-block-3">Melicssa N. just made<strong class="bold-text-2"><br>$350</strong>
                            </div>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="div-block" data-ix="slider-pop">
                            <img src="images/Laura.jpg" alt="Laura" class="userid">
                            <div class="text-block-3">Wendy N. just made<strong class="bold-text-2"><br>$520</strong>
                            </div>
                        </div>
                    </div>
                    <div class="w-slide">
                        <div class="div-block" data-ix="slider-pop">
                            <img src="images/testimonial-5.jpg" alt="Laura" class="userid">
                            <div class="text-block-3">Roy L. just made<strong class="bold-text-2"><br>$720</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-arrow w-slider-arrow-left">
                    <div class="w-icon-slider-left"></div>
                </div>
                <div class="right-arrow w-slider-arrow-right">
                    <div class="w-icon-slider-right"></div>
                </div>
                <div class="right-arrow w-slider-nav w-round"></div>
            </div>
        </div>
    </div>
</div>
<div class="section-2">
    <div data-poster-url="videos/BG-poster-00001.jpg" data-video-urls="videos/BG-transcode.mp4,videos/BG-transcode.webm"
         data-autoplay="true" data-loop="true" data-wf-ignore="true"
         class="background-video w-background-video w-background-video-atom">
        <div class="w-container">
            <h1 class="heading">Ride The Wave of <strong class="orange">bitcoin</strong> And Earn a Guaranteed <strong
                    class="orange">$13,000 In Exactly 24 Hours</strong></h1>
            <div class="w-row">
                <div class="column-4 w-col w-col-8 vd ">
                    <div class="video">
                        <video controls="controls" poster="videos/poster.jpg" allowfullscreen="" style="max-width: 100%;">
                            <source src="videos/video.mp4" type="video/mp4" />
                        </video>
                        <div class="play-btn"></div>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="form-block">
                        <div class="text-block-2">
                            Let Me Show You How to Make<br>
                            <strong class="bold-text">Cash LIVE - Right Now<br></strong>
                        </div>
                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Sign up"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <video class="bitgif" autoplay="" loop="" style="background-image:url(&quot;videos/BG-poster-00001.jpg&quot;)" muted=""
               playsinline="" data-wf-ignore="true">
            <source src="videos/BG-transcode.mp4" data-wf-ignore="true">
            <source src="videos/BG-transcode.webm" data-wf-ignore="true">
        </video>
    </div>
</div>
<div class="section-3">
    <div class="container w-container">
        <div data-w-id="b7d3a7fc-b2b2-3713-8a3b-fa5ee8a6ba0b" class="card"></div>
        <div>
            <h1 class="heading">Join The Bitcoin System</h1>
            <div class="w-row">
                <div class="w-col w-col-6">
                    <div class="div-block-2">
                        <img src="images/256.png" alt="Bitcoin" data-w-id="7fd9725c-80c6-50f7-f5cf-3c3cb3b39f0b"
                             class="image">
                        <div class="text-block-4"><strong class="blue">The Bitcoin System</strong> is a group reserved
                            exclusively to people who jumped on the insane returns that Bitcoin offers and have quietly
                            amassed a fortune in doing so.
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-6">
                    <div class="div-block-2">
                        <img src="images/256.png" alt="Bitcoin" data-w-id="33045413-b42b-a484-4206-8c5d45d2b8a7"
                             class="image">
                        <div class="text-block-4"><strong class="blue">Bitcoin System Members</strong> enjoy retreats
                            around the world every month while they make money on their laptop with just a few minutes
                            of “work” every day.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-4">
    <div data-delay="4000" data-animation="fade" data-autoplay="1" data-duration="1000" data-infinite="1"
         class="slider-2 w-slider">
        <div class="text-block-5">Here are some of our past vacations</div>
        <div class="w-slider-mask">
            <div class="w-slide">
                <div class="w-row">
                    <div class="column-5 w-col w-col-4">
                        <div class="div-block-3"></div>
                    </div>
                    <div class="column-5 w-col w-col-4">
                        <div class="div-block-3 _2"><br>‍</div>
                    </div>
                    <div class="column-5 w-col w-col-4">
                        <div class="div-block-3 _3"></div>
                    </div>
                </div>
            </div>
            <div class="w-slide">
                <div class="w-row">
                    <div class="column-5 w-col w-col-4">
                        <div class="div-block-3 _4"></div>
                    </div>
                    <div class="column-5 w-col w-col-4">
                        <div class="div-block-3 _5"><br>‍</div>
                    </div>
                    <div class="column-5 w-col w-col-4">
                        <div class="div-block-3 _6"></div>
                    </div>
                </div>
            </div>
            <div class="w-slide">
                <div class="w-row">
                    <div class="column-5 w-col w-col-4">
                        <div class="div-block-3 _7"></div>
                    </div>
                    <div class="column-5 w-col w-col-4">
                        <div class="div-block-3 _8"><br>‍</div>
                    </div>
                    <div class="column-5 w-col w-col-4">
                        <div class="div-block-3 _9"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-arrow w-slider-arrow-left">
            <div class="w-icon-slider-left"></div>
        </div>
        <div class="right-arrow w-slider-arrow-right">
            <div class="w-icon-slider-right"></div>
        </div>
        <div class="right-arrow w-slider-nav w-round"></div>
    </div>
</div>
<div class="section-6">
    <div class="w-container">
        <h1 class="heading"><strong>Hear From Our Members Who Rely On Our Software To Fund Their Luxury
            Lifestyles</strong><br></h1>
        <div class="div-block-4">
            <div class="w-row">
                <div class="w-col w-col-6">
                    <div class="div-block-4 _2">
                        <div class="w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-5"></div>
                            </div>
                            <div class="w-col w-col-9">
                                <div class="name">Joey Feldman</div>
                            </div>
                        </div>
                        <p class="paragraph-2">When I joined The Bitcoin System 2 months ago, never could have I ever
                            imagined the series of events that would unfold just days after locking in my free software.
                            I was able to clear my $131,382 debt. There is no greater feeling than to be debt-free. Now,
                            I’m in the process of buying my dream home. I still can’t believe this is all really
                            happening…I’m forever grateful to Steve.</p>
                    </div>
                    <div class="div-block-4 _2">
                        <div class="w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-5 _3"></div>
                            </div>
                            <div class="w-col w-col-9">
                                <div class="name">Laura Abenstein</div>
                            </div>
                        </div>
                        <p class="paragraph-2">I’ve been a member of the Bitcoin System for only 47 days. But my life
                            has already changed! Not only have I made my first $100K, but I’ve also met some of the most
                            incredible people in the process. Thanks, Steve!</p>
                    </div>
                    <div class="div-block-4 _2">
                        <div class="w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-5 _7"></div>
                            </div>
                            <div class="w-col w-col-9">
                                <div class="name">Michael Zusman</div>
                            </div>
                        </div>
                        <p class="paragraph-2">The results of the software speaks for itself...just as promised, I made
                            over $13,000 every single day. Do I really need to say more?</p>
                    </div>
                    <div class="div-block-4 _2">
                        <div class="w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-5 _5"></div>
                            </div>
                            <div class="w-col w-col-9">
                                <div class="name">Lewis H.</div>
                            </div>
                        </div>
                        <p class="paragraph-2">Is this for real? I just joined 2 days ago, and my account balance has
                            already ballooned to a staggering $27,484.98!!!</p>
                    </div>
                    <div class="div-block-4 _2">
                        <div class="w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-5 _9"></div>
                            </div>
                            <div class="w-col w-col-9">
                                <div class="name">Paulo Fonzi</div>
                            </div>
                        </div>
                        <p class="paragraph-2">Yesterday, I QUIT my job...and today, I’m at a pool party in Vegas! Life
                            is CRAZYYYY. And it’s all thanks to the Bitcoin System. THANK YOU STEVE!</p>
                    </div>
                </div>
                <div class="w-col w-col-6">
                    <div class="div-block-4 _2">
                        <div class="w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-5 _1"></div>
                            </div>
                            <div class="w-col w-col-9">
                                <div class="name">Chris Hadid</div>
                            </div>
                        </div>
                        <p class="paragraph-2">I ask my wife to pinch me every morning when I wake up and check my bank
                            balance. I have never seen a number that big before in MY bank account. And it just
                            continues to grow and grow some more...this is what I’ve been waiting for my entire life.
                            Now that I have a taste of what it really feels like to be my own boss and make tens of
                            thousands of dollars every week, I won’t ever look back!</p>
                    </div>
                    <div class="div-block-4 _2">
                        <div class="w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-5 _2"></div>
                            </div>
                            <div class="w-col w-col-9">
                                <div class="name">Daniel Pelts</div>
                            </div>
                        </div>
                        <p class="paragraph-2">Surprisingly, I used to be an investor on Wall Street. And I’ve never
                            seen anything like this in my 10 year tenure at the company. My colleagues all thought I was
                            crazy when I quit the firm to invest with the Bitcoin System software full-time. $384,594 in
                            profits later, all of my colleagues are now BEGGING me to let them in.</p>
                    </div>
                    <div class="div-block-4 _2">
                        <div class="w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-5 _4"></div>
                            </div>
                            <div class="w-col w-col-9">
                                <div class="name">Magda Boltyanski</div>
                            </div>
                        </div>
                        <p class="paragraph-2">I finally know what it’s like to live the dream. I no longer feel like
                            I’m on the outside looking in while everyone else has all the fun. The Bitcoin System has
                            allowed me to retire early and live the 1% lifestyle.</p>
                    </div>
                    <div class="div-block-4 _2">
                        <div class="w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-5 _6"></div>
                            </div>
                            <div class="w-col w-col-9">
                                <div class="name">Carl Edwards</div>
                            </div>
                        </div>
                        <p class="paragraph-2">Two weeks ago, I got laid off. With no options left, I thought my life
                            was over. Now I’m making over $13,261.42 each and every day. And for the first time in 2
                            months, my account isn’t overdrawn. Thank you, STEVE!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-8">
    <div class="w-row">
        <div class="column-7 w-col w-col-6 w-col-stack">
            <img src="images/Steve-McKay.jpg"
                 srcset="images/Steve-McKay-p-500.jpeg 500w, images/Steve-McKay-p-800.jpeg 800w, images/Steve-McKay-p-1080.jpeg 1080w, images/Steve-McKay-p-1600.jpeg 1600w, images/Steve-McKay.jpg 1845w"
                 sizes="(max-width: 479px) 100vw, (max-width: 767px) 85vw, (max-width: 991px) 86vw, 46vw"
                 alt="" class="image-2"></div>
        <div class="column-8 w-col w-col-6 w-col-stack">
            <h1 class="heading white"><strong>Meet Steve McKay</strong><br></h1>
            <p class="paragraph-3"><em class="italic-text">The Genius Behind The Bitcoin System.</em>‍<br>Hi - I’m an
                ex-software developer for a large firm whose name I prefer not to disclose.<br>‍<br>I created a Bitcoin
                Trading Software that has earned over $18,484,931.77 in profits within the past 6 months alone.<br>This
                software is making millionaires faster than early investors of Uber, Facebook or Airbnb.<br>‍<br>If you
                want to make a million with Bitcoin, watch the video above to learn how.<br>Your Friend,<br>Steve McKay
            </p>
            <img src="images/sign202c.png" class="signature" alt="">
        </div>
    </div>
</div>
<div class="form-block-2">
    <div class="w-container footer_app">
    <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Sign up"></div>
    </div>
</div>
<div class="section-5">
    <div class="w-container">
        <div>© Bitcoin System <span class="gtd-date-current-year"></span></div>
        <p class="paragraph">Important Risk Warning: CFD trading can bring many benefits but also includes the risk of
            losing some or all of the money investors should consider. We strongly recommend that you read our terms and
            conditions and our disclaimer before investing. Customers should also consider their country&#x27;s capital
            gains tax. It is against the law to persuade US persons to buy and sell commodity options, even if presented
            as &quot;prediction contracts&quot;, unless they are listed on a CFTC-listed exchange for trading or are
            otherwise exempt from the law.<br></p>
    </div>
</div>
<div class="popup">
    <div class="div-block-6">
        <h1 class="heading-2">STOP! You&#x27;ve just made a BIG mistake ...</h1>
        <div class="text-block-6">This is your LAST POSSIBILITY to use The Bitcoin System and to have economic security
            for the future.
        </div>
        <div class="form-block">
        <!-- <div class="app" id="app3" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Sign up"></div> -->
            <a href="#" class="link" id="close-popup">Close, I don&#x27;t want to make money</a>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/systembitcoin.js"></script>
<script src="js/script.js"></script>


<script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
<script src="https://cdn-addict.site/addict-new/js/app.js"></script>

</body>
</html>