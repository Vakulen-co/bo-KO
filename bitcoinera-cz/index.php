<?php 
    include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="cz">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <base href="<?php echo $base ?>">
    <meta name="description" content="Trading Software">
    <meta charset="UTF-8">
    <title>Bitcoin Era</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <!-- Open Graph -->
    <?php $seoText = 'Bitcoin Era'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>img/bitcoinicon.png"/>
    <meta property="og:image:width" content="450"/>
    <meta property="og:image:height" content="450"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $base; ?>"/>
    <link rel="canonical" href="<?php echo $base; ?>"/>
    <!-- Pixel -->
    <meta name="pixel_id" content="<?php echo $FacebookPixel; ?>">
    <?php if($FacebookPixel) : ?>
    <!-- INDEX.PHP -->
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
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon" href="favicon.png" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/video-js.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/intgrtn.css?v=1620218748">
    
</head>
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
<body>
    <section class="intro-section-1">
        <div class="container">
            <p class="intro-p"><b data-i18n="">VAROV??N??</b>:<span data-i18n="">Vzhledem k extr??mn?? vysok?? media po??adovat, budeme uzav??e registraci ke dni</span> <b><span class="tomorrow-date">1/6/2021</span> - <span data-i18n="">POSP???? SI!</span> </b><span class="countdown-span">05:32</span></p>
        </div>
    </section>
    <section class="intro-section-2">
        <div class="container">
            <div class="intro-part-2 row">
                <img src="img/753d2ce47e70ab63c1429c25a4ad2627.png" alt="Bitcoin Era" class="js-project-logo logo ls-is-cached lazyloaded">
                <div class="exclusive-offers-wrapper intro-margin-div none">
                    <div style="margin-right: 10px;"><span class="purple" data-i18n="">Exclusive offers for</span> <br> <span class="red" data-i18n="">trades in</span> <span class="country-name-custom red"><span style="color: rgb(215, 20, 26);">CZE</span><span style="color: rgb(17, 69, 126);">CHIA</span></span></div>
                    <img class="flag" alt="country flag" src="flags/special/cz.png" style="height: auto; border: none;">
                </div>
                <div class="dynamic-person-div none notifications">
                    <div class="dynamic-person-img-wrapper">
                        <img data-image="" data-src="img/25.jpg" alt="" class="dynamic-person-img ls-is-cached lazyloaded" src="img/25.jpg">
                    </div>
                    <p class="dynamic-person-p">
                        <span data-name="" class="dynamic-person-name-span">Alexandra G.</span>
                        <br>
                        <span data-i18n="">pr??v?? ud??lal</span>
                        <br>
                        <span data-visitor-currency-symbol="" class="dollar-shake">$</span>
                        <span data-amount="" class="dynamic-person-sum-span">183</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="video-form-section">
        <div class="container">
            <h1 class="video-header" data-i18n="">Bitcoin je, aby si lid?? Rich</h1>
            <p class="video-subheader"><span data-i18n="">A vy se m????e st??t </span> <span class="yellow" data-i18n="">p??????t?? Millionaire</span></p>
            <div class="row" style="margin-bottom: -157px;">
                <div class="col-lg-8 col-md-7">
                    <div class="video-wrapper">
                        <div class="video">
                            <video controls="controls" poster="video/poster.png" allowfullscreen="" style="width: 100%;object-fit: cover;">
                                <source src="video/video.mp4" type="video/mp4" />
                            </video>
                            <div class="play-btn"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="form-container">
                        <h1 class="formHeader" data-i18n>ZM??N?? V???? ??IVOT DNES!</h1>
                        <div class="formwrap-outer">
                            <div class="intgrtn-form-signup formwrap">
                            <div class="app" data-geo="EU" id="app2" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Z??SKEJTE NYN??"></div>    
                            </div>
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
                    <div class="exclusive-offers-text" style="margin-right: 10px;"><span class="purple" data-i18n="">Exclusive offers for</span> <br> <span class="red" data-i18n="">trades in</span> <span class="country-name-custom red">Ukraine</span></div>
                    <img src="flags/special/cz.png" class="flag ls-is-cached lazyloaded" alt="" style="height: auto; border: none;">
                </div>
                <div class="dynamic-person-div notifications">
                    <div class="dynamic-person-img-wrapper">
                        <img alt="" class="dynamic-person-img ls-is-cached lazyloaded shake" src="img/25.jpg">
                    </div>
                    <p class="dynamic-person-p">
                        <span data-name="" class="dynamic-person-name-span">???????????? ??.</span>
                        <br>
                        <span data-i18n="">pr??v?? ud??lal</span>
                        <br>
                        <span data-visitor-currency-symbol="" class="dollar-shake shake">$</span>
                        <span data-amount="" class="dynamic-person-sum-span shake">195</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="logos-section">
        <div class="container">
            <div class="logos-wrapper">
                <div class="col-md-8 col-12">
                    <div class="logos-wrapper">
                        <img data-src="img/bitgo.png" class="logo lazyload" alt="bitgo logo">
                        <img data-src="img/norton.png" class="logo lazyload" alt="norton logo">
                        <img data-src="img/secure-trading.png" class="logo lazyload" alt="secure trading logo">
                        <img data-src="img/mcafee.png" class="logo lazyload" alt="mcafee logo">
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="ask-bid-wrapper">
                        <div class="alert alert-warning js-bitcoin-disclamer" role="alert">
                            <p class="ask-bid" data-i18n>The data presented here, is in a ratio of 1/100 compared to the real price of Bitcoin</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="bid-wrapper">
                                <span class="orange">BID</span>
                                <span class="green bid-ask-span">$<span data-init="bid-price">367.74</span></span>
                            </div>
                            <div class="ask-wrapper">
                                <span class="gray">ASK</span>
                                <span class="gray bid-ask-span">$<span data-init="ask-price">368.87</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="join-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="join-us-header">
                        <span data-i18n="">P??idejte se k n??m a Start zbohatl</span>
                        <span style="color: #5f3394" data-i18n="">with Bitcoin Era</span>
                    </h1>
                    <br>
                    <p class="join-us-p">
                        <span data-i18n="">je skupina vyhrazeny v??lu??n?? pro lidi, kte???? sko??ili na ????len??ch p??izn??n??, ??e Bitcoin nab??dek a v tichosti shrom????dil ??t??st?? v tom. Na??i ??lenov?? nyn?? ustoup?? po cel??m sv??t?? ka??d?? m??s??c, zat??mco oni vyd??l??vat na sv??m notebooku s jen p??r minut ???pr??ce??? ka??d?? den.</span>
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
                        <img data-src="img/seenon.png" alt="media logos lazyload">
                    </p>
                </div>
                <div class="col-md-7">
                    <div class="join-us-img-wrapper">
                        <img data-src="img/girl-holding-bitcoin.png" alt="join us" class="join-us-img lazyload">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-section">
        <div class="container-fluid">
            <h1 class="testimonials-header purple" data-i18n>REAL OHLASY od na??ich u??ivatel??</h1>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-1 lazyload">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Mark K.</span> <br>
                            <span data-i18n>Fort Worth, TX</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Zisk</span>: <span data-visitor-currency-symbol>$</span>123.00</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>Kone??n?? v??m, jak?? to je ????t sv??j sen. U?? pocit, ??e jsem na pohledu zven????, zat??mco v??ichni ostatn?? m?? ve??kerou z??bavu. Bitcoin Era mi umo??nilo odej??t do p??ed??asn??ho d??chodu a ??ije 1% ??ivotn?? styl.</span>"</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-2 lazyload">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Jennifer A.</span> <br>
                            <span data-i18n>Irvine, CA</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Zisk</span>: <span data-visitor-currency-symbol>$</span>72.00</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>Jsem ??lenem ??ry bitcoin?? pouze 47 dn??. Ale m??j ??ivot se u?? zm??nil! Nejen ??e jsem vytvo??il sv??j prvn?? 100$, , ale potkal jsem tak?? n??kter?? z nejneuv????iteln??j????ch lid?? v procesu. D??ky, bitcoinov?? ??ry!</span>"</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-3 lazyload">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Ernest I.</span> <br>
                            <span data-i18n>Orem, UT</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Zisk</span>: <span data-visitor-currency-symbol>$</span>109.00</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>P??ekvapiv?? jsem b??val investorem na Wall Street. A nikdy jsem nic takov??ho nevid??l v m??m 10let??m p??soben?? ve spole??nosti. V??ichni moji kolegov?? si mysleli, ??e jsem bl??zen, kdy?? jsem p??estal firmu investovat na pln?? ??vazek se softwarem Bitcoin Era.</span>
                                <span data-visitor-currency-symbol>$</span>389,00 <span data-i18n>ve zisc??ch pozd??ji, v??ichni moji kolegov?? se nyn?? BEGGING m?? nechat je dovnit??.</span>"</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-4 lazyload">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Jane K.</span><br>
                            <span data-i18n>Fort Worth, TX</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Zisk</span>: <span data-visitor-currency-symbol>$</span>89.00</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"<span data-i18n>P??ed dv??ma t??dny jsem byl propu??t??n. Kdy?? nezbyly ????dn?? mo??nosti, myslel jsem, ??e m??j ??ivot skon??il. Te?? to d??l??m</span> <span data-visitor-currency-symbol>$</span>11.00 <span data-i18n>ka??d?? den. A poprv?? za 2 m??s??ce nen?? m??j ????et p??e??erp??n. D??ky, bitcoinov?? ??ry!</span>"</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-section text-center lazyloaded">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img data-src="img/feature-img-1.png" class="feature-img ls-is-cached lazyloaded" alt="feature 1" src="img/feature-img-1.png">
                        </div>
                        <div class="feature-header" data-i18n="">LASER p??esn?? PERFORMANCE</div>
                        <p class="feature-description" data-i18n="">Neexistuje ????dn?? jin?? obchodn?? aplikace na sv??t??, kter?? vystupuje na 99,4% ??rovn?? p??esnosti, ??e The Bitcoin Era je schopen zas??hnout. To je d??vod, pro?? na??i ??lenov?? z cel??ho sv??ta v????te n??m zdvojn??sobit t????l????kov??ch a ??ty??l????kov??ch sv?? t????ce vyd??lan?? pen??ze.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img data-src="img/feature-img-2.png" class="feature-img ls-is-cached lazyloaded" alt="feature 1" src="img/feature-img-2.png">
                        </div>
                        <div class="feature-header" data-i18n="">??pi??kov?? technologie</div>
                        <p class="feature-description" data-i18n="">Software Bitcoin Era byl vytvo??en s vyu??it??m nejmodern??j????ch programov??n?? obchodov??n?? jak?? kdy sv??t za??il. Tento software je p??ed trhu o 0,01 sekundy. Tento ?????as skok??? d??l?? software nejv??ce konzistentn?? obchodn?? aplikace na t??to planet??.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img data-src="img/feature-img-3.png" class="feature-img ls-is-cached lazyloaded" alt="feature 1" src="img/feature-img-3.png">
                        </div>
                        <div class="feature-header" data-i18n="">Ocen??n?? TRADING APP</div>
                        <p class="feature-description" data-i18n="">Bitcoin Era app z??skal ??adu ocen??n??. Nejnov??j????m ocen??n??, kter?? jsme m??li tu ??est p????jem je st??le # 1 v kategorii obchodn?? software pro americkou obchodn?? asociace.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="live-results-section text-center">
        <div class="container relative">
            <div class="live-results-table-wrapper">
                <button class="yellow-btn join-now-btn scroll-top-btn">
                    <span data-i18n="">P??IDEJ SE TE??!</span>
                </button>
                <h1 class="dark-purple bold live-results-header" data-i18n="">LIVE PROFIT V??SLEDKY</h1>
                <table class="live-results-table">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td" data-i18n="">The Bitcoin Era</th>
                            <th class="dark-purple padding-left-td" data-i18n="">Zisk</th>
                            <th class="dark-purple padding-left-td" data-i18n="">??as obchodov??n??</th>
                            <th class="dark-purple padding-left-td" data-i18n="">kryptom??na</th>
                            <th class="dark-purple padding-left-td" data-i18n="">V??sledek</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td>Ewan M. just won trade</td>
                            <td>$173</td>
                            <td class="trade-time-td padding-left-td">01/06/2021</td>
                            <td>BTC/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td>Eve R. just won trade</td>
                            <td>$231</td>
                            <td class="trade-time-td padding-left-td">01/06/2021</td>
                            <td>ETH/LTC</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td>Matthew W. just won trade</td>
                            <td>$125</td>
                            <td class="trade-time-td padding-left-td">01/06/2021</td>
                            <td>EOS/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td>Kiera H. just won trade</td>
                            <td>$154</td>
                            <td class="trade-time-td padding-left-td">01/06/2021</td>
                            <td>ETH/LTC</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td>Ewan M. just won trade</td>
                            <td>$123</td>
                            <td class="trade-time-td padding-left-td">01/06/2021</td>
                            <td>ETH/LTC</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td>Zachary T. just won trade</td>
                            <td>$199</td>
                            <td class="trade-time-td padding-left-td">01/06/2021</td>
                            <td>EOS/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td>Lilly R. just won trade</td>
                            <td>$190</td>
                            <td class="trade-time-td padding-left-td">01/06/2021</td>
                            <td>EOS/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td>Alexander H. just won trade</td>
                            <td>$61</td>
                            <td class="trade-time-td padding-left-td">01/06/2021</td>
                            <td>BTC/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td>Sean C. just won trade</td>
                            <td>$121</td>
                            <td class="trade-time-td padding-left-td">01/06/2021</td>
                            <td>EOS/ETH</td>
                            <td><img src="img/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="last-td">Eleanor P. just won trade</td>
                            <td class="last-td">$166</td>
                            <td class="trade-time-td padding-left-td last-td">01/06/2021</td>
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
                <h1 class="dark-purple bold how-it-works-header" data-i18n="">JAK TO FUNGUJE</h1>
                <div class="row">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <div class="step-header white step-header-1" data-i18n="">Krok 1</div>
                            <div class="step-img-wrapper">
                                <img data-src="img/step-img-1.png" alt="step 1" class="step-img ls-is-cached lazyloaded" src="img/step-img-1.png">
                            </div>
                            <div class="step-subheader bold dark-purple" data-i18n="">Zaregistrujte se na SITE</div>
                            <p class="step-description" data-i18n="">Jakmile je va??e registrace p??ijata, bude v??m automaticky stane nejnov??j????m ??lenem Bitcoin ??ry. A dostanete n??roku na??e propriet??rn?? Bitcoin obchodn?? software zdarma.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <div class="step-header white step-header-2" data-i18n="">Krok 2</div>
                            <div class="step-img-wrapper">
                                <img data-src="img/step-img-2.png" alt="step 2" class="step-img ls-is-cached lazyloaded" src="img/step-img-2.png">
                            </div>
                            <div class="step-subheader bold dark-purple" data-i18n="">Na v???? ????et</div>
                            <p class="step-description"><span data-i18n="">Jako ka??d?? podnik??n??, budete pot??ebovat provozn?? kapit??l, aby mohli za????t. Tak??e za????t profitovat s Bitcoin obdob??, je t??eba investovat jakoukoli ????stku, kterou si p??ejete ve v????i</span> <span data-visitor-currency-symbol="">$</span>250 <span data-i18n="">or more.</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <div class="step-header white step-header-3" data-i18n="">Krok 3</div>
                            <div class="step-img-wrapper">
                                <img data-src="img/step-img-3.png" alt="step 3" class="step-img ls-is-cached lazyloaded" src="img/step-img-3.png">
                            </div>
                            <div class="step-subheader bold dark-purple" data-i18n="">DOKON??IT</div>
                            <p class="step-description" data-i18n="">Klepn??te na obchod, aby si p??esn?? a spr??vn?? hands-free obchodov??n?? poh??n??n na???? ocen??n?? algoritmu. M????ete tak?? nastavit obchodov??n?? na manu??ln??, pokud d??v??te p??ednost obchodu na vlastn?? p??st.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-works-btn-wrapper">
            <button class="yellow-btn open-free-account-btn scroll-top-btn">
                <span data-i18n="">OPEN bezplatn?? ????et</span>
            </button>
        </div>
    </section>
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-section-header text-center dark-purple bold" data-i18n="">??ASTO KLADEN?? OT??ZKY</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-1">
                                <div class="faq-question light-purple bold" data-i18n="">Jak?? v??sledky mohu o??ek??vat?</div>
                                <p class="faq-answer"><span data-i18n="">??lenov?? Bitcoin Era obvykle zisk minim??ln??</span> <span data-visitor-currency-symbol="">$</span>1300 <span data-i18n="">daily.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-2">
                                <div class="faq-question light-purple bold" data-i18n="">Kolik hodin denn?? mus??m do pr??ce?</div>
                                <p class="faq-answer" data-i18n="">Na??i ??lenov?? pracuj?? v pr??m??ru 20 minut denn?? nebo m??n??. Vzhledem k tomu, software zpracov??v?? obchodov??n?? mno??stv?? ???pr??ce??? po??adovan?? minim??ln??.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-3">
                                <div class="faq-question light-purple bold" data-i18n="">Jak?? je maxim??ln?? ????stka, kterou mohu ud??lat?</div>
                                <p class="faq-answer" data-i18n="">Va??e zisky jsou neomezen?? v r??mci Bitcoin ??ry. N??kte???? ??lenov?? si vyd??lal sv??j prvn?? milion b??hem pouh??ch 61 dn??.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-4">
                                <div class="faq-question light-purple bold" data-i18n="">Kolik n??klady na software?</div>
                                <p class="faq-answer" data-i18n="">??leny Bitcoin ??ry z??skat kopii na??eho propriet??rn??ho softwaru zdarma. Chcete-li se st??t ??lenem, sta???? vyplnit formul???? na t??to str??nce.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-5">
                                <div class="faq-question light-purple bold" data-i18n="">Je to jako MLM nebo affiliate marketing?</div>
                                <p class="faq-answer" data-i18n="">To nen?? jako MLM, affiliate marketing nebo n??co jin??ho venku. Software z??sk??v?? obchod?? s 99,4% accuracy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-6">
                                <div class="faq-question light-purple bold" data-i18n="">Existuj?? n??jak?? poplatky?</div>
                                <p class="faq-answer" data-i18n="">Nejsou zde ????dn?? skryt?? poplatky. Ne makl???? poplatky a provize. V??echny sv?? pen??ze, je 100% va??e a m??te mo??nost ho kdykoli odvolat zvol??te bezodkladn??.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pre-footer-section lazyloaded">
        <div class="container">
            <button class="pre-footer-btn scroll-top-btn">
                <span data-i18n="">Z??SKEJTE NYN??</span>
            </button>
        </div>
    </section>
    <div class="modal modal-signup text-center registration-popup new-popup" tabindex="-1" role="dialog">
        <header>
            <h1 data-i18n="">Gratulujeme!</h1>
            <p class="title-description" data-i18n="">M??li jste ??t??st?? a poda??ilo se n??m v??s zaregistrovat u NEJLEP????HO dostupn??ho brokera!</p>
        </header>
        <main>
            <div class="row">
                <div class="col-lg-6 broker-info">
                    <div class="modal-logo">
                        <img src="#" alt="broker-logo" class="js-intgrtn-broker-logo">
                    </div>
                </div>
                <div class="btn_start modal-button-show-mobile col-sm-12">
                    <button type="button" class="start-trading-button js-intgrtn-go-to-broker-site" data-i18n="">KLIKNUT??M SEM ZA??NETE OBCHODOV??N??</button>
                    <img src="img/Ellipsis-2s-151px.svg" class="progress js-intgrtn-modal-loader">
                </div>
                <div class="col-lg-6 broker-advantages">
                    <div class="item row">
                        <div class="icon col-sm-2"><img src="img/star-icon.png"></div>
                        <div class="text col-sm-10">
                            <h4 data-i18n="">Va??e BEZPE??NOST je na???? prioritou</h4>
                            <p><span data-i18n="">Podle jeho regula??n??ho stavu,</span> <span class="js-intgrtn-broker-name">this broker</span> <span data-i18n="">p??ij??m?? p????sn?? opat??en?? k ochran?? finan??n??ch prost??edk?? klienta a jeho soukrom??</span></p>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="icon col-sm-2"><img src="img/money-icon.png"></div>
                        <div class="text col-sm-10">
                            <h4><span data-i18n="">Vysok?? mo??nosti v??plat</span></h4>
                            <p><span class="js-intgrtn-broker-name">This broker</span>, <span data-i18n="">nab??z?? a?? 88% n??vratnost za ??sp????n?? obchod</span>!</p>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="icon col-sm-2"><img src="img/bitcoinicon.png?v=12"></div>
                        <div class="text col-sm-10">
                            <h4 data-i18n="">Nov??!</h4>
                            <p data-i18n="">Pokyny pro kryptom??nu pro za????te??n??ky a pokro??il?? obchodn??ky!</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="btn_start modal-button-hide-mobile">
            <button type="button" class="start-trading-button js-intgrtn-go-to-broker-site" data-i18n="">KLIKNUT??M SEM ZA??NETE OBCHODOV??N??</button>
            <img src="img/Ellipsis-2s-151px.svg" class="progress js-intgrtn-modal-loader">
        </div>
    </div>
    <footer class="footer text-center">
        <div class="container footer-container">
            <ul class="footer-ul default-ul">
                <li><a href="disclaimer.html" class="alterlink" href="javascript:void(0)" data-name="terms">Risk Disclaimer</a></li>
                <li><a href="privacy.html" class="alterlink" href="javascript:void(0)" data-name="policy">Privacy Policy</a></li>
            </ul>
            <img src="img/753d2ce47e70ab63c1429c25a4ad2627.png" alt="Bitcoin Era" class="js-project-logo logo ls-is-cached lazyloaded">
        </div>
    </footer>
    <script type="text/javascript" src="js/lazysizes.min.js" async=""></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>
        $('.scroll-top-btn').on("click", function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $(".formHeader").offset().top - 100
            }, 1000);
        });

        function initCountdown() {
            let countdownSpan = $('.countdown-span');
            let countdownSpanVal = countdownSpan.text();
            let mmSsArray = countdownSpanVal.split(":");
            let mm = parseInt(mmSsArray[0]);
            let ss = parseInt(mmSsArray[1]);
            if (mm === 0 && ss === 0)
                return;
            if (ss === 0) {
                mm--;
                ss = 59;
            } else
                ss--;
            let isSecondsSingleDigit = Math.floor(ss / 10) === 0 ? true : false;

            if (isSecondsSingleDigit) {
                let newCountdownSpanVal = "0" + mm.toString() + ":" + "0" + ss.toString();
                countdownSpan.text(newCountdownSpanVal);
            } else {
                let newCountdownSpanVal = "0" + mm.toString() + ":" + ss.toString();
                countdownSpan.text(newCountdownSpanVal);
            }
        }
        setInterval(function() {
            initCountdown();
        }, 1000)
    </script>

    <style>
        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        .iti__country-name,
        .iti__selected-dial-code {
            color: #000;
        }

        .offer_row {
            margin-top: 15px
        }
    </style>


    <style>
        body.unavailable {
            pointer-events: none;
            opacity: 0.5;
        }
    </style>
    <script>
        document.querySelectorAll('form').forEach(function(el) {
            el.addEventListener('submit', function() {
                document.querySelector('body').classList.add("unavailable");
            });
        });
    </script>
    
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>