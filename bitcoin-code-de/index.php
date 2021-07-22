<?php 
include_once 'config.php'; 
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <script>
        window.START_LOAD_TIME = Date.now()
    </script>
    <base href="<?php echo $base ?>"> 

        <!-- Open Graph -->
    <?php $seoText = 'Welkom!'; ?>
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

    
    <meta name="robots" content="noindex,nofollow,noarchive,noimageindex,nomediaindex,noodp,nopreview,nosnippet,notranslate,novideoindex,noydir">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>The Bitcoin Code</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <style>
        .widget-people .content .desc {
            font-size: 14px
        }

        #top-iframe2 {
            width: 100%;
            height: 105px;
            margin: 0 auto;
            text-align: center
        }

        @media screen and (max-width: 767px) {
            .dataTables_wrapper .dataTables_paginate {
                float: none;
                padding-top: 10px
            }
        }

        .round-banner {
            max-height: 370px
        }

        .ban-ver .top-form-wrapper {
            background-color: transparent;
            padding: 0 16px 0 16px
        }
    </style>
    <style>
        .popbox {
            padding: 0 !important
        }
    </style>
    <link href="assets/css/index.min.css" rel="stylesheet">
    <link href="assets/css/index.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">


</head>

<body class="en-lan">
    <div id="wrapper">
        <header id="header">
            <div class="header-content"><a href="#" class="header-logo">Der Bitcoin Code</a></div>
        </header>
        <div id="container">
            <div class="section section-intro scroll-trigger">
                <div class="section-container">
                    <div class="intro-title">Ride The Wave of &nbsp;
                        <div>bitcoin</div>&nbsp;Und Sie könnten bis zu <span>€13,000 In genau 24 Stunden</span>
                    </div>
                    <div class="row intro-wrapper">
                        <div class="col-md-8">
                            <p id="top-video-text">Bitcoin Code Anmeldeformular</p>
                            <div class="video-wrapper">
                                <div class="video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video class="video" name="vim-video-frame" id="video-lite" controls autoplay muted playsinline>
                                        <source src="assets/en-1.mp4" type="video/mp4">
                                    </video>
                                        <button style="position:absolute;background:rgba(0,0,0,.4) none repeat scroll 0 0;border:2px solid transparent;border-radius:32.4px;cursor:pointer;height:42px;line-height:42px;outline:medium none currentcolor;padding:0 12px 0 0;max-width:160px;font-weight:400;pointer-events:auto;text-align:left;text-transform:none"
                                            class="w-vulcan-v2-button" id="unMute">
                                        <svg viewBox="0 0 237 237"
                                             style="height:38.4px;margin-top:.6px;vertical-align:top;width:42px">
                                            <style>@keyframes VOLUME_SMALL_WAVE_FLASH {
                                                       0% {
                                                           opacity: 0
                                                       }
                                                       33% {
                                                           opacity: 1
                                                       }
                                                       66% {
                                                           opacity: 1
                                                       }
                                                       100% {
                                                           opacity: 0
                                                       }
                                                   }

                                            @keyframes VOLUME_LARGE_WAVE_FLASH {
                                                0% {
                                                    opacity: 0
                                                }
                                                33% {
                                                    opacity: 1
                                                }
                                                66% {
                                                    opacity: 1
                                                }
                                                100% {
                                                    opacity: 0
                                                }
                                            }

                                            .volume__small-wave {
                                                animation: VOLUME_SMALL_WAVE_FLASH 2s infinite;
                                                opacity: 0
                                            }

                                            .volume__large-wave {
                                                animation: VOLUME_LARGE_WAVE_FLASH 2s infinite .3s;
                                                opacity: 0
                                            }</style>
                                            <polygon fill="white"
                                                     points="88 107 65 107 65 131 89 131 112 154 112 84"></polygon>
                                            <g fill="none" stroke="white" stroke-width="10" stroke-linecap="round">
                                                <path class="volume__small-wave"
                                                      d="M 142 86 C 151 107 151 130 142 151"></path>
                                                <path class="volume__large-wave"
                                                      d="M 165 74 C 178 97 178 140 165 163"></path>
                                            </g>
                                        </svg>
                                        <div style="color:#fff;display:inline-block;font-family:WistiaPlayerOverpass,Helvetica,sans-serif;font-size:15.6px;margin-left:-4.8px;margin-top:-.9px;vertical-align:top;white-space:nowrap;width:36%">
                                            Klicken Sie für Sound
                                        </div>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="top-form-wrapper">
                                <div class="form-title">Let Me Zeigen Sie, wie man macht
                                    <div>
                                        <div>Bargeld LIVE</div>
                                        Jetzt gerade
                                    </div>
                                </div>
                                <div class="form-container-unique ti-form-1" id="form1">


                                    <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Aanmelden"></div>

                                </div>
                                <!-- <div class="form-actions">
                                    <button type="submit" class="button register-btn">Registrieren
                                        </button>
                                </div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section section-tbc-description">
            <div class="section-container">
                <div class="section-content">
                    <div class="section-title">Beitreten <span>Der Bitcoin-Code</span></div>
                    <div class="section-description">
                        <p><b><i>Der Bitcoin Code</i></b> ist eine Gruppe, die ausschließlich Menschen vorbehalten ist, die auf die wahnsinnigen Renditen gesprungen sind, die Bitcoin bietet, und still und leise ein Vermögen angehäuft haben.</p>
                        <p><b><i>Bitcoin Code Members</i></b> Genießen Sie Retreats auf der ganzen Welt jeden Monat, während sie Geld auf ihrem Laptop mit nur ein paar Minuten "Arbeit" jeden Tag verdienen.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-vacations">
            <div class="section-container">
                <div class="section-content">
                    <div class="section-title">
                        <div>Hier sind einige unserer vergangenen Ferien</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-testimonials">
            <div class="section-container">
                <div class="section-content">
                    <div class="section-title">Hören Sie von unseren Mitgliedern, die sich auf unsere Software verlassen, um ihren Luxus-Lifestyle zu finanzieren
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="testimonials-list">
                                <li><img src="assets/img/testimonial-1.jpg" alt="">
                                    <div class="name">Laura Abenstein</div>
                                    <div class="description">Ich bin nur 47 Tage Mitglied des Bitcoin-Codes. Aber mein Leben hat sich schon verändert! Ich habe nicht nur meine ersten 100K gemacht, sondern ich habe auch einige der unglaublichsten Leute in diesem Prozess getroffen.
                                        Danke, Steve!
                                    </div>
                                </li>
                                <li><img src="assets/img/testimonial-2.jpg" alt="">
                                    <div class="name">Joey Feldman</div>
                                    <div class="description">Als ich vor 2 Monaten dem Bitcoin-Code beitrat, hätte ich mir nie vorstellen können, dass sich die Serie von Ereignissen nur wenige Tage nach dem Einsperren meiner freien Software entfalten würde. Ich konnte meine Schulden
                                        in Höhe von 131.382 € tilgen. Es gibt kein größeres Gefühl, als schuldenfrei zu sein. Jetzt bin ich dabei, mein Traumhaus zu kaufen. Ich kann immer noch nicht glauben, dass das alles wirklich passiert... Ich bin
                                        Steve für immer dankbar.
                                    </div>
                                </li>
                                <li><img src="assets/img/testimonial-3.jpg" alt="">
                                    <div class="name">Michael Zusman</div>
                                    <div class="description">Die Ergebnisse der Software sprechen für sich... wie versprochen, habe ich jeden Tag über 13.000 € verdient. Muss ich wirklich mehr sagen?
                                    </div>
                                </li>
                                <li><img src="assets/img/testimonial-4.jpg" alt="">
                                    <div class="name">Paulo Fonzi</div>
                                    <div class="description">Gestern habe ich meinen Job BEENDET... und heute bin ich auf einer Poolparty in Vegas! Das Leben ist CRAZYYYY. Und das alles dank des Bitcoin-Codes. DANKE STEVE!
                                    </div>
                                </li>
                                <li><img src="assets/img/testimonial-5.jpg" alt="">
                                    <div class="name">Lewis H.</div>
                                    <div class="description">Ist das wirklich? Ich bin erst vor 2 Tagen beigetreten, und mein Kontostand ist bereits auf unglaubliche 27.484,98 € gestiegen!!!
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="testimonials-list">
                                <li><img src="assets/img/testimonial-6.jpg" alt="">
                                    <div class="name">Chris Hadid</div>
                                    <div class="description">Ich bitte meine Frau, mich jeden Morgen zu kneifen, wenn ich aufwache und mein Bankguthaben überprüfe. Ich habe noch nie eine So große Nummer auf MEINEM Bankkonto gesehen. Und es wächst einfach weiter und wächst noch
                                        ein paar mehr... das ist es, worauf ich mein ganzes Leben gewartet habe. Jetzt, da ich einen Vorgeschmack darauf habe, wie es sich wirklich anfühlt, mein eigener Chef zu sein und jede Woche Zehntausende von Dollar
                                        zu verdienen, werde ich nie zurückblicken!
                                    </div>
                                </li>
                                <li><img src="assets/img/testimonial-7.jpg" alt="">
                                    <div class="name">Daniel Pelts</div>
                                    <div class="description">Überraschenderweise war ich früher ein Investor an der Wall Street. Und so etwas habe ich in meiner zehnjährigen Amtszeit noch nie im Unternehmen gesehen. Meine Kollegen dachten alle, ich wäre verrückt, als ich die
                                        Firma verließ, um vollzeitam mit der Bitcoin Code Software zu investieren. 384.594 € gewinnbringend später, alle meine Kollegen sind jetzt BEGGING mich, um sie hereinzulassen.
                                    </div>
                                </li>
                                <li><img src="assets/img/testimonial-8.jpg" alt="">
                                    <div class="name">Magda Boltyanski</div>
                                    <div class="description">Endlich weiß ich, wie es ist, den Traum zu leben. Ich habe nicht mehr das Gefühl, dass ich draußen bin und hineinschaue, während alle anderen den ganzen Spaß haben. Der Bitcoin-Code hat es mir ermöglicht, vorzeitig
                                        in Rente zu gehen und den 1% Lebensstil zu leben.
                                    </div>
                                </li>
                                <li><img src="assets/img/testimonial-9.jpg" alt="">
                                    <div class="name">Carl Edwards</div>
                                    <div class="description">Vor zwei Wochen wurde ich entlassen. Da keine Optionen mehr zur Verfügung stehen, dachte ich, mein Leben sei vorbei. Jetzt mache ich jeden Tag über 13.261,42 €. Und zum ersten Mal seit 2 Monaten ist mein Konto nicht
                                        überzogen. Danke, STEVE!
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-man">
            <div class="section-container">
                <div class="section-content"><img src="assets/img/man.jpg" alt="">
                    <div class="content-wrapper">
                        <div class="section-title">Treffen Sie Steve McKay
                            <span>Das Genie hinter dem Bitcoin-Code</span></div>
                        <div class="section-description">
                            <p>Hallo - Ich bin ein Ehemaliger Software-Entwickler für eine große Firma, deren Namen ich lieber nicht offenlegen.</p>
                            <p>Ich habe eine Bitcoin Trading Software erstellt, die allein in den letzten 6 Monaten über 18.484.931,77 € an Gewinnen verdient hat.</p>
                            <p>Diese Software macht Millionäre schneller als frühe Investoren von Uber, Facebook oder Airbnb.
                            </p>
                            <p>Wenn Sie eine Million mit Bitcoin machen wollen, sehen Sie sich das Video oben an, um zu erfahren, wie.</p><img src="assets/img/sign.png" align="right" alt="" class="sign">
                            <p>Dein Freund,<br>Steve McKay</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    <div id="footer">
        <div class="footer-content">
            <div class="top-form-wrapper" style="margin-bottom:20px">
                <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Aanmelden"></div>

            </div>


        </div>
        <div class="description" style="margin-top:30px">Wichtiger Risikohinweis: Der CFD-Handel kann erhebliche Vorteile mit sich bringen, birgt aber auch das Risiko eines teilweisen oder vollständigen Fondsverlusts und sollte von Erstinvestoren in Betracht gezogen werden. Wir empfehlen Ihnen dringend,
            unsere Allgemeinen Geschäftsbedingungen und Haftungsausschluss-Seite zu lesen, bevor Sie eine Investition tätigen. Kunden müssen sich ihrer individuellen Kapitalerzielsteuerschuld in ihrem Wohnsitzland bewusst sein. Es ist gegen das Gesetz,
            US-Personen zum Kauf und Verkauf von Warenoptionen zu erbitten, selbst wenn sie als Vorhersagekontrakte bezeichnet werden, es sei denn, sie werden zum Handel gelistet und an einer CFTC-registrierten Börse gehandelt oder es sei denn, sie sind
            rechtlich befreit.
        </div>
    </div>
    </div>
    <div class="widget first">
        <div class="widget-inner widget-people" data-pause-time="5000" data-animate-time="1000">
            <div class="content">
                <div class="desc">
                    <div class="name"><span class="pname" data-content="name">Melissa S.</span> just made</div>
                    <div class="sum"><span data-content="currency">€</span><span class="pnum" data-content="sum" data-format-value="200-1000">120</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget widget-spots-left secondary">
        <div class="widget-inner widget-people" data-pause-time="10000" data-animate-time="0" data-animate-class="false">
            <div class="content">
                <div class="value pspots" data-content="countdown" data-format-value="countdown_15_2_2_r">15</div>
                <div class="desc">kostenlos<br>Kopien<br>Verfügbar</div>
            </div>
        </div>
    </div>
    <script>
        let slideBar = document.querySelector('.scroll-form');
        let triggerEl = document.querySelector('.section-tbc-description');

        function getCoords(elem) { // кроме IE8-
            let box = elem.getBoundingClientRect();
            return {
                top: box.top + pageYOffset,
                left: box.left + pageXOffset
            };
        }


    </script>

    <script>
        function unMuteVideo() {
            document.querySelector("#unMute").style.display = "none", window.customEvent("video-change-mute", {
                id: "video",
                muted: !1,
                volume: "1"
            })
        }

        document.querySelector("#unMute").addEventListener("click", unMuteVideo)
    </script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>


</body>

</html>