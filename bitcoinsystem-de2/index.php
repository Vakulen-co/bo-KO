<?php 
    include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8">
    <title>Bitcoin System</title>
    <meta content="Ride The Wave of bitcoin And Earn a Guaranteed $13,000 In Exactly 24 Hours." name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="robots" content="noarchive">
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.png" rel="apple-touch-icon">
    <!-- Open Graph -->
    <?php $seoText = 'Willkommen zurück!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>videos/BG-poster-00001.jpg"/>
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
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
</head>

<body class="body" data-ix="open-popup">
    <div class="section"></div>
    <div class="nav">
        <div class="columns w-row">
            <div class="column-2 w-col w-col-2">
                <div class="counter">
                    <div class="html-embed w-embed w-script">2</div>
                    <div class="text-block">KOSTENLOSE KOPIEN VERFÜGBAR</div>
                </div>
            </div>
            <div class="column-3 w-col w-col-8"><img src="images/Bitcoin-System.svg" alt="Bitcoin System" width="191" class="logo-2"></div>
            <div class="column-2 _2 w-col w-col-2">
                <div data-delay="4000" data-animation="outin" data-autoplay="1" data-duration="500" data-infinite="1" class="slider w-slider">
                    <div class="w-slider-mask">
                        <div class="w-slide">
                            <div class="div-block" data-ix="slider-pop">
                                <img src="images/77.jpg" alt="user" class="userid">
                                <div class="text-block-3">
                                    <p class="namez">Hubertine A.</p>
                                    <p>gerade gemacht</p>
                                    <strong class="bold-text-2">€315</strong>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="div-block" data-ix="slider-pop">
                                <img src="images/5.jpg" alt="user" class="userid">
                                <div class="text-block-3">
                                    <p class="namez">Ömer R.</p>
                                    <p>gerade gemacht</p>
                                    <strong class="bold-text-2">€404</strong>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="div-block" data-ix="slider-pop">
                                <img src="images/95.jpg" alt="user" class="userid">
                                <div class="text-block-3">
                                    <p class="namez">Sigurd S.</p>
                                    <p>gerade gemacht</p>
                                    <strong class="bold-text-2">€210</strong>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="div-block" data-ix="slider-pop">
                                <img src="images/74.jpg" alt="user" class="userid">
                                <div class="text-block-3">
                                    <p class="namez">Victor R.</p>
                                    <p>gerade gemacht</p>
                                    <strong class="bold-text-2">€210</strong>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="div-block" data-ix="slider-pop">
                                <img src="images/58.jpg" alt="user" class="userid">
                                <div class="text-block-3">
                                    <p class="namez">Henner O.</p>
                                    <p>gerade gemacht</p>
                                    <strong class="bold-text-2">€523</strong>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide">
                            <div class="div-block" data-ix="slider-pop">
                                <img src="images/45.jpg" alt="user" class="userid">
                                <div class="text-block-3">
                                    <p class="namez">Rose-Marie G.</p>
                                    <p>gerade gemacht</p>
                                    <strong class="bold-text-2">€468</strong>
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
        <div data-autoplay="true" data-loop="true" class="background-video w-background-video w-background-video-atom" style="background-image:url('videos/BG-poster-00001.jpg')">
            <div class="w-container">
                <h1 class="heading">Reiten Sie auf der<strong class="orange">Bitcoin</strong> Welle und verdienen Sie garantierte <strong class="orange">€13,000 genau 24 Stunden.</strong></h1>
                <div class="w-row">
                    <div class="column-4 w-col w-col-8">
                        <div class="video embed-responsive">
                            <video controls poster="videos/poster.png" style="max-width:100%;height:auto;" width="635" height="357" allowfullscreen="">
                                <source src="videos/video.mp4" type="video/mp4" />
                            </video>
                            <div class="play-btn"></div>
                        </div>
                    </div>
                    <div class="w-col w-col-4">
                        <div class="form-block">
                            <div class="app" id="app1" data-type="2" data-butt="ANMELDEN"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div class="container w-container">
            <div class="card"></div>
            <div>
                <h1 class="heading">Dem Bitcoin-System beitreten</h1>
                <div class="w-row">
                    <div class="w-col w-col-6">
                        <div class="div-block-2">
                            <img src="images/256.png" alt="Bitcoin" data-w-id="7fd9725c-80c6-50f7-f5cf-3c3cb3b39f0b" class="image">
                            <div class="text-block-4"><strong class="blue">Das Bitcoin-System</strong> Ist eine Gruppe, die ausschließlich Menschen vorbehalten ist, die auf die wahnsinnigen Renditen von Bitcoin aufmerksam gemacht wurden und dabei leise ein Vermögen gesammelt haben. </div>
                        </div>
                    </div>
                    <div class="w-col w-col-6">
                        <div class="div-block-2">
                            <img src="images/256.png" alt="Bitcoin" data-w-id="33045413-b42b-a484-4206-8c5d45d2b8a7" class="image">
                            <div class="text-block-4"><strong class="blue">Mitglieder des Bitcoin-Systems</strong>
                                Genießen jeden Monat Rückzugsmöglichkeiten auf der ganzen Welt, während sie mit nur wenigen Minuten „Arbeit“ jeden Tag Geld mit ihrem Laptop verdienen. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-4">
        <div data-delay="4000" data-animation="fade" data-autoplay="1" data-duration="1000" data-infinite="1" class="slider-2 w-slider">
            <div class="text-block-5">Hier sind einige unserer vergangenen Urlaube</div>
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
            <h1 class="heading"><strong>
                    Hören Sie von unseren Mitgliedern, die sich auf unsere Software verlassen, um ihren Luxuslebensstil zu finanzieren </strong>
                <br>
            </h1>
            <div class="div-block-4">
                <div class="w-row">
                    <div class="w-col w-col-6">
                        <div class="div-block-4 _2">
                            <div class="w-row">
                                <div class="w-col w-col-3">
                                    <div class="div-block-5"></div>
                                </div>
                                <div class="w-col w-col-9">
                                    <div class="name">Armin Dittrich</div>
                                </div>
                            </div>
                            <p class="paragraph-2">
                                Als ich vor 2 Monaten dem Bitcoin-System beitrat, hätte ich mir nie vorstellen können, welche Serie von Ereignissen sich nur wenige Tage entwickeln würde, nachdem ich meine kostenlose Software erhalten hatte. Ich konnte meine €131.382 Schulden begleichen. Es gibt kein größeres Gefühl, als schuldenfrei zu sein. Jetzt bin ich dabei, mein Traumhaus zu kaufen. Ich kann immer noch nicht glauben, dass das alles wirklich passiert... Ich bin Steve für immer dankbar. </p>
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
                            <p class="paragraph-2">
                                Ich bin erst seit 47 Tagen Mitglied im Bitcoin-System. Aber mein Leben hat sich bereits verändert! Ich habe nicht nur meine ersten €100.000 verdient, sondern auch einige der unglaublichsten Leute getroffen. Danke, Steve! </p>
                        </div>
                        <div class="div-block-4 _2">
                            <div class="w-row">
                                <div class="w-col w-col-3">
                                    <div class="div-block-5 _10"></div>
                                </div>
                                <div class="w-col w-col-9">
                                    <div class="name">Michael Zusman</div>
                                </div>
                            </div>
                            <p class="paragraph-2">
                                Die Ergebnisse der Software sprechen für sich... wie versprochen, habe ich jeden Tag über €13.000 verdient. Muss ich wirklich mehr sagen? </p>
                        </div>
                        <div class="div-block-4 _2">
                            <div class="w-row">
                                <div class="w-col w-col-3">
                                    <div class="div-block-5 _5"></div>
                                </div>
                                <div class="w-col w-col-9">
                                    <div class="name"> Lewis H.</div>
                                </div>
                            </div>
                            <p class="paragraph-2"> >unglaublichsten Leute getroffen. Danke, Steve!</p>
                        </div>
                    </div>
                    <div class="w-col w-col-6">
                        <div class="div-block-4 _2">
                            <div class="w-row">
                                <div class="w-col w-col-3">
                                    <div class="div-block-5 _1"></div>
                                </div>
                                <div class="w-col w-col-9">
                                    <div class="name">Chris Hadid </div>
                                </div>
                            </div>
                            <p class="paragraph-2">
                                Ist das alles wirklich wahr? Ich bin erst vor 2 Tagen beigetreten und mein Kontostand ist bereits auf atemberaubende €27.484,98 gestiegen. </p>
                        </div>
                        <div class="div-block-4 _2">
                            <div class="w-row">
                                <div class="w-col w-col-3">
                                    <div class="div-block-5 _2"></div>
                                </div>
                                <div class="w-col w-col-9">
                                    <div class="name">Aayden Brandeis</div>
                                </div>
                            </div>
                            <p class="paragraph-2">Ich bitte meine Frau, mich jeden Morgen zu kneifen, wenn ich aufwache und meinen Kontostand überprüfe. Ich habe noch nie eine so große Zahl auf meinem Bankkonto gesehen. Und sie wächst und wächst einfach weiter... das ist es, worauf ich mein ganzes Leben gewartet habe. Jetzt, da ich eine Kostprobe davon habe, wie es sich wirklich anfühlt, mein eigener Chef zu sein und jede Woche Zehntausende von Dollar zu verdienen, werde ich nie wieder zurückblicken!</p>
                        </div>
                        <div class="div-block-4 _2">
                            <div class="w-row">
                                <div class="w-col w-col-3">
                                    <div class="div-block-5 _9"></div>
                                </div>
                                <div class="w-col w-col-9">
                                    <div class="name">Paulo Fonzi </div>
                                </div>
                            </div>
                            <p class="paragraph-2">
                                Gestern habe ich meinen Job gekündigt... und heute bin ich auf einer Poolparty in Vegas! Das Leben ist verrückt. Und das alles dank des Bitcoin-Systems. DANKE STEVE! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-8">
        <div class="w-row">
            <div class="column-7 w-col w-col-6 w-col-stack"><img src="images/Steve-McKay.jpg" srcset="images/Steve-McKay-p-500.jpeg 500w, images/Steve-McKay-p-800.jpeg 800w, images/Steve-McKay-p-1080.jpeg 1080w, images/Steve-McKay-p-1600.jpeg 1600w, images/Steve-McKay.jpg 1845w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 85vw, (max-width: 991px) 86vw, 46vw" alt="" class="image-2"></div>
            <div class="column-8 w-col w-col-6 w-col-stack">
                <h1 class="heading white"><strong>Lernen Sie Steve McKay kennen</strong><br></h1>
                <p class="paragraph-3"><em class='italic-text'>Das Genie hinter dem Bitcoin-System</em>‍<br><br>Hi - Ich bin ein ehemaliger Softwareentwickler für eine große Firma, deren Namen ich lieber nicht preisgeben möchte.<br><br> Ich habe eine Bitcoin-Trading-Software entwickelt, die allein in den letzten 6 Monaten über €18.484.931,77 an Gewinnen erwirtschaftet hat. Diese Software sorgt schneller für Millionäre als frühe Investoren von Uber, Facebook oder AirBnB.<br><br> Wenn Sie eine Million mit Bitcoin verdienen möchten, schauen Sie sich das Video oben an, um zu erfahren, wie es geht.<br>Ihr Freund,<br>Steve McKay </p>
                <img src="images/sign202c.png" alt="" class="sign">
            </div>
        </div>
    </div>
    <div class="section-5">
        <div class="w-container">
            <div> © Bitcoin System <span class="copyright-year"></span></div>
            <p class="paragraph">
                Wichtiger Risikohinweis: Das CFD-Trading kann viele Vorteile bringen, beinhaltet aber auch das Risiko, einen Teil oder das gesamte Geld zu verlieren, das Anleger in Betracht ziehen sollten. Wir empfehlen Ihnen dringend, unsere Allgemeinen Geschäftsbedingungen und unseren Haftungsausschluss zu lesen, bevor Sie investieren. Kunden sollten auch die Kapitalertragsteuer ihres Landes berücksichtigen. Es verstößt gegen das Gesetz, US-Personen zum Kauf und Verkauf von Rohstoffoptionen zu bewegen, auch wenn sie als „Prognosekontrakte“ dargestellt werden, es sei denn, sie sind an einer an der CFTC notierten Börse für Trading notiert oder sind anderweitig vom Gesetz ausgenommen. <br>
            </p>
        </div>
    </div>
    <script src="js/scripts.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>