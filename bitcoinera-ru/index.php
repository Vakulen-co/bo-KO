<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitcoin Era ™ | Official Website [2021]</title>
    <meta name="description" content="Эпоха Биткойна состоит из уникальной группы людей, которые осознали невероятное богатство, которое они могут получить от Биткойна. Зарегистрируйтесь сейчас и станьте богаче, чем сегодня.">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Эпоха Биткойна состоит из уникальной группы людей, которые осознали невероятное богатство, которое они могут получить от Биткойна. Зарегистрируйтесь сейчас и станьте богаче, чем сегодня." />
    <meta name="twitter:title" content="Bitcoin Era ™ | Official Website [2021]" />
    <link rel="shortcut icon" href="assets/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    
	<!-- Open Graph -->
    <?php $seoText = 'Добро пожаловать!'; ?>
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
        .video-header{
            font-size: 3rem !important;
        }
        @media screen and (max-width: 767px){
            .video-header{
                font-size: 30px !important;
            }
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
        .live-results-table-wrapper{
            padding: 0 50px !important;
        }
        .yellow-btn, .pre-footer-btn{
            color: #fff !important;
            background-color: #ce1516 !important;
            box-shadow: 0px 4px 0 0 #9b0700 !important;
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
            <p class="intro-p"><b data-i18n>ВНИМАНИЕ</b>:<span data-i18n>из-за чрезвычайно высокого спроса со стороны СМИ мы закрываем регистрацию с</span> <b>
					<span class="tomorrow-date">01/02/2020</span> - <span data-i18n>ПОПРОБУЙТЕ!</span> </b><span class="countdown-span" id="countdown-span">05:32</span></p>
        </div>
    </section>
    <!-- INTRO SECTION 1 END -->

    <!-- INTRO SECTION 2 START -->
    <section class="intro-section-2">
        <div class="container">
            <div class="intro-part-2">
                <img loading="lazy" src="assets/logo2.png" alt="Bitcoin Era Logo" class="logo">
                <div class="exclusive-offers-wrapper intro-margin-div none">
                    <div style="margin-right: 10px;">
                    <span class="purple" data-i18n>Эксклюзивные предложения для</span> <br> <span class="red" data-i18n></span> <span class="country-name-span red"></span></div>
                    <img loading="lazy" src="assets/flags/RU.png" class="flag" alt="country flag">
                </div>

                <div class="dynamic-person-div none">
                    <div class="dynamic-person-img-wrapper">
                        <img loading="lazy" src="assets/25.jpg" alt="Women" class="dynamic-person-img">
                    </div>
                    <p class="dynamic-person-p">
                        <span class="dynamic-person-name-span">
                            Николь С.
						</span>
                        <br>
                        <span data-i18n>только что сделала</span>
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
            <div class="video-header" data-i18n>ВОЛАТИЛЬНОСТЬ ТОРГОВЛИ БИТКОИНАМИ КАК ПРОФИ BITCOIN ERA</div>
            <p class="video-subheader"><span data-i18n>Разблокируйте огромное богатство сегодня!</span>
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
                        <p class="formHeader" data-i18n>ИЗМЕНИТЕ СВОЮ ЖИЗНЬ СЕГОДНЯ!</p>
                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="ЗАРЕГИСТРИРУЙТЕСЬ СЕЙЧАС" ></div>
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
                        <span data-i18n>recien hecho</span>
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
                    Начните торговать биткойнами как профессионал, зарегистрировавшись в Bitcoin Era Cегодня!
                    </h2>

                    <p>Путешествие в клуб миллионеров начинается с первого простого шага. Вам нужно действовать прямо сейчас, чтобы сформировать свое финансовое будущее.</p>
                    <p>Тысячи людей уже обрели финансовую свободу, торгуя с нами. За последние три года мы помогли бесчисленному количеству людей заработать на торговле биткойнами деньги, которые изменили их жизнь. Лучше всего то, что наша система очень проста в использовании для всех.</p>
                    <p>Вам нужно только зарегистрироваться, а все остальное мы сделаем за вас. Bitcoin Era это инструмент мечты для тех, кто ищет прибыльный инструмент пассивного дохода в Интернете.</p>

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
                <h3 class="testimonials-header purple" data-i18n>ОТЗЫВЫ ДОВОЛЬНЫХ КЛИЕНТОВ</h3>
                
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-1">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Колин Б.</span> <br>
                            <span data-i18n>Будапешт</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Прибыль</span>: <span data-init="visitor-currency-symbol">$</span>12923</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>«Торговля биткойнами изменила мою жизнь. Я был на грани того, чтобы сдаться и объявить о банкротстве, пока не наткнулся на Bitcoin Era приложение. В течение нескольких месяцев торговли выплачивается не менее 80% моих долгов, и у меня стабильный ежедневный доход ».</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-2">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Алексия Р.</span> <br>
                            <span data-i18n>Эдмортон</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Прибыль</span>: <span data-init="visitor-currency-symbol">$</span>7192</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>«Пандемия covid19 была для меня скрытым благословением. Я начал использовать Bitcoin Era от скуки, но теперь это мой основной источник дохода. Прибыль в размере до 5000 долларов в день - это то, чего я никогда не думал, что смогу достичь в этой экономике ».</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-3">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Тони Р.</span> <br>
                            <span data-i18n>Дубай</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Прибыль</span>: <span data-init="visitor-currency-symbol">$</span>10519</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>«Это торговое приложение просто потрясающее. Я зарабатываю в десять раз больше, чем когда-либо работал по 12 часов в день продавцом страховых услуг. Самое удивительное, что я все еще могу получать прибыль, даже когда сплю ».</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-4">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Лори M.</span><br>
                            <span data-i18n>Белфаст</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n>Прибыль</span>: <span data-init="visitor-currency-symbol">$</span>8519</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>«Я зарегистрировался в Bitcoin Era после прочтения его обзора в одном из ведущих криптографических изданий. Удивительно, насколько прибыльной может быть торговля на волатильности с помощью этого робота. Я получаю больше прибыли, чем когда-либо получал на торговле акциями ».</i>
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
                        <h2 class="feature-header" data-i18n>ПРОСТОТА ИСПОЛЬЗОВАНИЯ ПЛАТФОРМЫ</h2>
                        <p class="feature-description" data-i18n>Bitcoin Era Приложение является веб-приложением. Вы можете получить к нам доступ из основных браузеров как на настольных, так и на мобильных устройствах. В целях безопасности мы рекомендуем использовать проверенные браузеры, такие как Chrome, Firefox, Safari и Brave. Вы можете скачать HTML5 версию нашего веб-трейдера для своих мобильных устройств.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-2.png" class="feature-img" alt="feature 1">
                        </div>
                        <h3 class="feature-header" data-i18n>ПРЕВОСХОДНЫЕ ФУНКЦИИ БЕЗОПАСНОСТИ</h3>
                        <p class="feature-description" data-i18n>Мы ценим безопасность наших пользователей и поэтому инвестировали в защищенные от дурака системы. На нашем веб-сайте используется шифрование военного уровня, и мы соблюдаем глобальные меры защиты данных. К ним относятся меры высшего уровня, такие как Общий регламент ЕС по защите данных (GDPR). Наши брокеры также имеют хорошую репутацию и регулируются во всех юрисдикциях.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-3.png" class="feature-img" alt="feature 1">
                        </div>
                        <h3 class="feature-header" data-i18n>ДОСТУПНЫЙ ТОРГОВЫЙ КАПИТАЛ</h3>
                        <p class="feature-description" data-i18n>Большинство наших конкурирующих торговых систем принимают только инвесторов с торговым капиталом не менее 1 миллиона долларов. Это означает, что они недоступны для большинства людей. Мы являемся первой торговой системой на основе искусственного интеллекта, которая позволяет трейдерам участвовать в автоматической торговле с депозитом всего в 250 долларов США.</p>
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
					<span data-i18n>ПРИСОЕДИНЯЙСЯ СЕЙЧАС!</span>
				</button>
                <p class="dark-purple bold live-results-header" data-i18n>РЕЗУЛЬТАТЫ РЕАЛЬНОЙ ПРИБЫЛИ</p>
                <table class="live-results-table" id="table_profits">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td" data-i18n>Bitcoin Era</th>
                            <th class="dark-purple padding-left-td" data-i18n>Прибыль</th>
                            <th class="dark-purple padding-left-td" data-i18n>Время торговли</th>
                            <th class="dark-purple padding-left-td" data-i18n>Криптовалюта</th>
                            <th class="dark-purple padding-left-td" data-i18n>Результат</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td class="bold">Jessica T. только что выиграл торговлю ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>986</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Joseph M. только что выиграл торговлю ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>723</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Harry C. только что выиграл торговлю ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1032</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Evan M. только что выиграл торговлю ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>839</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lily C. только что выиграл торговлю ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1201</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lewis R. только что выиграл торговлю ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>972</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">George B. только что выиграл торговлю ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>687</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Natasha R. только что выиграл торговлю ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1129</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Matthew C. только что выиграл торговлю ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>919</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold last-td">Jamie P. только что выиграл торговлю ...</td>
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
                <h2 class="dark-purple bold how-it-works-header" data-i18n>BITCOIN ERA РАБОТАЕТ?</h2>
                <div class="row">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <div class="step-header white step-header-1 h3" data-i18n>Шаг 1</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-1.png" alt="step 1" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>ЗАРЕГИСТРИРОВАТЬСЯ НА САЙТЕ</div>
                            <p class="step-description" data-i18n>Зарегистрируйте бесплатный торговый счет, используя форму вверху этой страницы. Процесс прост и занимает менее 5 минут. Мы обрабатываем данные всех наших пользователей со строгой конфиденциальностью.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <div class="step-header white step-header-2 h3" data-i18n>Шаг 2</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-2.png" alt="step 2" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>ПОПОЛНИТЬ СЧЕТ</div>
                            <p class="step-description"><span data-i18n>После регистрации мы перенаправим вас на страницу нашего брокера-партнера, чтобы внести средства на ваш торговый счет. Все наши финансовые операции осуществляются через авторитетных, строго регулируемых брокеров.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <div class="step-header white step-header-3 h3" data-i18n>Шаг 3</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-3.png" alt="step 3" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>НАЧАТЬ ТОРГОВЛЮ</div>
                            <p class="step-description" data-i18n>Живая торговля происходит одним нажатием кнопки. Вы можете заниматься своими повседневными делами, поскольку наша торговая система работает для вас в фоновом режиме. Депозит в размере 250 долларов - это все, что нужно, чтобы начать свой путь к успешному криптотрейдеру.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-works-btn-wrapper">
            <button class="yellow-btn open-free-account-btn scroll-top-btn scroll_to_top">
				<span data-i18n>ОТКРЫТЬ БЕСПЛАТНЫЙ СЧЕТ</span>
			</button>
        </div>
    </section>
    <!-- HOW IT WORKS SECTION END -->

    <!-- FAQ SECTION START -->
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-section-header text-center dark-purple bold" data-i18n>ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-1">

                        <h3 class="faq-question light-purple bold h2" data-i18n>Bitcoin Era для новичоков?</h3>
                        <p class="faq-answer" data-i18n>Мы - простая в использовании и чрезвычайно прибыльная торговая система. Ниже приведены некоторые особенности, которые выделяют нас среди конкурентов.
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-2">
                        <h4 class="faq-question light-purple bold h2" data-i18n>Какую прибыль я могу получить с Bitcoin Era?</h4>
                        <p class="faq-answer" data-i18n>Для последовательных и удачливых трейдеров депозит в 250 долларов может вырасти до 1 миллиона долларов менее чем за год. Все формы торговли сопряжены со значительными рисками, поэтому вам следует инвестировать с умом.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-3">
                        <h4 class="faq-question light-purple bold h2" data-i18n>Cuanto cuesta Bitcoin Era ¿costo?</h4>
                        <p class="faq-answer" data-i18n>
                        Estamos ofreciendo espacios de registro gratuitos por lotería, así que pruebe su suerte intentando registrarse a través del formulario anterior. Aquellos que logren obtener la licencia libre comerciarán gratis durante el próximo año.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-4">
                        <h4 class="faq-question light-purple bold h2" data-i18n>Сколько стоит Bitcoin Era Стоимость?</h4>
                        <p class="faq-answer" data-i18n>
                        Мы предлагаем бесплатные слоты для регистрации на основе лотереи, так что испытайте удачу, попытавшись зарегистрироваться через форму выше. Те, кому удастся получить бесплатную лицензию, будут торговать бесплатно в течение следующего года.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-5">
                        <div class="faq-question light-purple bold h2" data-i18n>Нужен ли мне торговый опыт для использования Bitcoin Era?</div>
                        <p class="faq-answer">Вы можете зарабатывать деньги через Bitcoin Era с первого дня торговли даже при нулевом торговом опыте. Это потому, что наша торговая система выполняет все технические торговые функции на автопилоте.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-6">
                        <h2 class="faq-question light-purple bold" data-i18n>Is Bitcoin Era схема Понци?</h2>
                        <p class="faq-answer" data-i18n>
                        Нет! Bitcoin Era это не схема Понци. Многие люди задают этот вопрос из-за безумной прибыльности, о которой сообщает этот бот. Мы используем технологии искусственного интеллекта и высокое кредитное плечо, предоставляемое нашими брокерами-партнерами, чтобы обеспечить такую ​​высокую прибыльность.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper">
                        <h2 class="faq-question light-purple bold" data-i18n>Сколько времени нужно, чтобы торговать?</h2>
                        <p class="faq-answer" data-i18n>
                        Bitcoin Era торгует автоматически, поэтому для настройки условий торговли требуется не более 20 минут в день. Это означает, что пользователям не нужно отказываться от своей дневной работы или проводить бессонные ночи, наблюдая за рынками.</p>
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
				<span data-i18n>
			
                НАЧАТЬ СЕЙЧАС</span>
			</button>
        </div>
    </section>
    <!-- PRE-FOOTER SECTION END -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img loading="lazy" src="assets/logo2.png" alt="Bitcoin Era" class="logo img-responsive center-block" style="    margin: 30px 0;">
                    <p><strong>Юридическое предупреждение:</strong> Торговля CFD, будь то вручную или через бот с высокой долей заемных средств, сопряжена с множеством рисков. Следовательно, рискуйте только тем, что вы можете позволить себе потерять. Информация, представленная на этой странице, не должна использоваться в качестве основы для принятия решений. Перед тем, как зарегистрироваться у нас, проведите достаточное предварительное исследование.

Регистрируясь у нас, вы соглашаетесь с нашими условиями и политикой конфиденциальности. Не регистрируйтесь у нас, если вы против того, чтобы мы получали комиссию, связывая вас со сторонними платформами.</p>
                    <ul class="footer-ul" style="list-style: none" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <style>
                            .footer-ul li {
                                display: inline-block;
                                margin: 0 2px;
                            }
                        </style>
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Условия эксплуатации</a> | <a href="javascript:void(0)" data-name="policy" class="alterlink">Политика конфиденциальности</a>
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