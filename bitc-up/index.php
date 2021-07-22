<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="ru">

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
    <section class="popup">
        <div class="hover-modal"></div>
        <div id="popup_custom" class="popup_custom" style="display: none;">
            <div class="popup_overlay"></div>
            <div class="popup_inner">
                <div class="popup_content">
                    <div class="popup_content_inner">
                        <div class="container">
                            <div class="popup-body">
                                <a class="close_button">×</a>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="popup-head">
                                            <p>ПОДОЖДИТЕ!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="popup-info">
                                            <p class="popup-h">Прежде чем уйти...</p>
                                            <p>Рынки движутся быстро.Не упустите свой шанс получить прибыль от последних
                                                взлетов и падений. </p>
                                            <p>Зарегистрируйтесь сегодня и вы будете <span>удивлены, когда заберете свою двухнедельную прибыль!</span>
                                            </p>
                                        </div>
                                        <div class="popup-img">
                                            <img src="images/phone-footer.png">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-block">
                                            <div class="preloader"></div>
                                            <div class="form form-pop">
                                                <div class="head-form">
                                                    <p>Измени свою жизнь <span>уже сегодня!</span></p>
                                                </div>
                                                <div class="app" id="app1" data-url="<?php echo $thankyou ?>" data-butt="Присоединяйся сейчас!" data-type="2"></div>
                                            </div>
                                        </div>
                                        <div class="protected-block-pop">
                                            <div class="protected-img-pop">
                                                <img src="images/logo-secure-pop.png" style="width: 65px;">
                                            </div>
                                            <div class="protected-info-info">
                                                <p><br><span>Ваши данные всегда защищены с нами. </span></br>
                                                    Вы можете изменить свое решение в любое время, нажав на ссылку отказа от
                                                    подписки в нижнем колонтитуле любого электронного письма, которое вы
                                                    получите от нас. Мы будем относиться к вашей информации с уважением.
                                                    Нажав выше, вы соглашаетесь с тем, что мы можем обрабатывать вашу
                                                    информацию в соответствии с этими условиями.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="final-img-pop">
                                            <img src="images/card-logo.png" style="width: 390px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <b data-i18n="warning">ВНИМАНИЕ</b>: <span data-i18n="due-to"> Регистрация скоро закроется. </span>
                    <span><b>Успейте</b> присоединиться к лучшей онлайн-системе Bitcoin UP!</span><span data-i18n=""><b>
                            <span class="dect">⚠️</span><span class="countdown-span1 dect" id="timer1"> 05:30</span></b></span>
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
                    <p><span>Быстрый и эффективный</span> способ разбогатеть</p>
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
                <p><span>Быстрый и эффективный</span> способ разбогатеть</p>
            </div>
        </div>
        <div class="container">
            <h1 class="video-header" data-i18n="">
                Инвестируй сегодня и стань <span>следующим миллионером ...
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
                            <p>Измени свою жизнь <span>сегодня!</span></p>
                        </div>
                        <div class="app" id="app2" data-url="<?php echo $thankyou ?>" data-butt="Присоединяйся сейчас!" data-type="2"></div>
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
                        <p><br><span>Ваши данные всегда защищены с нами. </span></br>
                            Вы можете изменить свое решение в любое время, нажав на ссылку отказа от подписки в нижнем
                            колонтитуле любого электронного письма, которое вы получите от нас. Мы будем относиться к вашей
                            информации с уважением. Нажав выше, вы соглашаетесь с тем, что мы можем обрабатывать вашу
                            информацию в соответствии с этими условиями.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="images/logo-secure.png">
                </div>
                <p><br><span>Ваши данные всегда защищены с нами. </span></br>
                    Вы можете изменить свое решение в любое время, нажав на ссылку отказа от подписки в нижнем колонтитуле
                    любого электронного письма, которое вы получите от нас. Мы будем относиться к вашей информации с
                    уважением. Нажав выше, вы соглашаетесь с тем, что мы можем обрабатывать вашу информацию в соответствии с
                    этими условиями.
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
                        <p>Зарабатывай Онлайн <br>
                            <span> <span class=""></span>более 100,000 руб. в день<br></span>
                            с <span class="k-italic"> bitcoin UP!</span>
                        </p>
                    </div>
                    <img src="images/girl.jpg">
                    <div class="btn-block-form">
                        <button>Открыть БЕСПЛАТНУЮ учетную запись</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 girl-info">
                    <div class="steps-info-h dect">
                        <p>Зарабатывай Онлайн <br><span> <span class=""></span>более 100,000 руб. в день<br></span>
                        <p class="p-italic">с bitcoin UP!</p>

                    </div>
                    <div class="steps-info-b">
                        <p><span>Внимание! На следующей неделе ты перестанешь работать, </span>потому что за последние 5 лет
                            алгоритмы нашей онлайн-платформы обогатили людей и сделали их финансово независимыми.</p>
                        <p>Мы <a class="scroll-form"><span>bitcoin UP</span></a> — группа людей, которые поднялись на сумасшедших
                            оборотах биткойнов и незаметно разбогатели!</p>
                        <p>Нажмите <a class="scroll-form"><span>"Открыть БЕСПЛАТНУЮ учетную запись"</span></a>, и получите свой
                            счастливый билет в мир биткойн-возможностей.</p>
                    </div>
                    <div class="steps-info-f">
                        <p style="font-weight: 700;font-size: 20px;text-align: left;color: #020042;">О нас говорят на:</p>
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
                <p>Самые горячие <span>истории успеха</span></p>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="images/winner-1.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Москва</p>
                    <p>Ольга Ж.
                        <span> <span class=""><br></span>656,921.61 руб.</span><br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>читать больше...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Пол года назад меня уволили. </p>
                    <p>Я долго не могла устроиться на нормальную работу. Друзья посоветовали <a class="scroll-form"> bitcoin
                            UP</a>. </p>
                    <p>Сначала я пыталась разобраться как все работает сама и через неделю на аккаунте было -<span class=""></span>946 руб. Со мной связался менеджер и обяснил как правильно работать с
                        алгоритмом и спустя три недели мой доход за день был более <span class=""></span>94,645 руб! </p>
                    <p> Спасибо, <a class="scroll-form">bitcoin UP</a>!“</p>
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
                    <p class="winners-city">Краснодар</p>
                    <p>Герман Д.
                        <span> <span class=""><br></span>1 365,030.89 руб.</span><br>
                    </p>
                    <div class="more-info" style="display: none;">
                        <img src="images/arrow-more.png">
                        <p>читать больше...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: block;">
                    <p>“К 32 годам у меня были большие долги по кредитам, я был в отчаянии когда узнал про <a class="scroll-form">bitcoin UP </a>!</p>
                    <p>Я решил попробовать и вложился в платформу — спустя 3 месяца оплатил все кредиты. Теперь арендую
                        большой дом и подарил девушке машину на ее День Рождение.</p>
                    <p>С <a class="scroll-form">bitcoin UP</a> я на пути стать миллионером!“</p>
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
                    <p class="winners-city">Екатеринбург</p>
                    <p>Саша К.
                        <span> <span class=""><br></span>783, 826.02 руб.</span><br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>читать больше...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Я с платформой только 35 дней. Раньше играл делая ставки на спорт и постоянно проигрывал. </p>
                    <p>Затем увидел рекламу и попробовал <a class="scroll-form"> bitcoin UP</a>!</p>
                    <p>Уже спустя первые две недели я оставил свою работу в офисе! Сейчас мы планируем с друзьями
                        путешествовать целый год!“</p>
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
                    <p class="winners-city">Москва</p>
                    <p>Анна Б.
                        <span> <span class=""><br></span>964,915.23 руб.</span><br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>читать больше...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Пару лет назад мой муж оставил меня и начала одна растить двоих детей.</p>
                    <p>У меня не было возможности платить за обучение моей дочери. Терять было нечего, поэтому я вложилась в
                        <a class="scroll-form">bitcoin UP</a>.
                    </p>
                    <p>К моему большому удивлению, мне удалось оплатить обучение дочери в университете и все кредиты! Сейчас
                        я работаю дома по 20-30 минут и могу уделять достаточно время на воспитание детей!“</p>
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
                <p>Самые горячие <span>истории успеха</span></p>
            </div>
            <div class="row">
                <div class="steps-block steps-1">
                    <div class="col-md-4">
                        <div class="winners-puple winner-jade">
                            <img src="images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Москва</p>
                                <p class="winner-name">Ольга Ж.<br>
                                    <span><span class=""></span>656,921.61 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Москва</p>
                                <p class="winner-name">Анна Б.<br>
                                    <span><span class=""></span>964,915.23 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Екатеринбург</p>
                                <p class="winner-name">Саша К.<br>
                                    <span><span class=""></span>783, 826.02 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-4-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Москва</p>
                                <p class="winner-name">Герман Д.<br>
                                    <span><span class=""></span>1 365,030.89 руб.<span></span><br>
                                    </span>
                                </p>
                                <p class="winner-big-info">“К 32 годам у меня были большие долги по кредитам, я был в
                                    отчаянии когда узнал про <a class="scroll-form">Bitcoin UP!</a></p>
                                <p class="winner-big-info">Я решил попробовать и вложился в платформу — спустя 3 месяца
                                    оплатил все кредиты. </p>
                                <p class="winner-big-info">Теперь арендую большой дом и подарил девушке машину на ее День
                                    Рождение. </p>
                                <p class="winner-big-info">С <a class="scroll-form">bitcoin UP</a> я на пути стать
                                    миллионером!“</p>
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
                                <p class="winners-city">Краснодар</p>
                                <p class="winner-name">Герман Д.<br>
                                    <span><span class=""></span>1 365,030.89 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Москва</p>
                                <p class="winner-name">Анна Б.<br>
                                    <span><span class=""></span>964,915.23 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Екатеринбург</p>
                                <p class="winner-name">Саша К.<br>
                                    <span><span class=""></span>783, 826.02 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-1-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Москва</p>
                                <p class="winner-name">Ольга Ж.<br>
                                    <span><span class=""></span>656,921.61 руб.<span></span><br>
                                    </span>
                                </p>
                                <p class="winner-big-info">“Пол года назад меня уволили.</p>
                                <p class="winner-big-info">Я долго не могла устроиться на нормальную работу. Друзья
                                    посоветовали <a class="scroll-form">bitcoin UP</a>. Я зарегистрировалась и оплатила
                                    <span class=""></span>20,000 руб. Сначала я пыталась разобраться как все работает сама и
                                    через неделю на аккаунте было -<span class=""></span> 946 руб.
                                </p>
                                <p class="winner-big-info">Со мной связался менеджер и обяснил как правильно работать с
                                    алгоритмом и спустя три недели мой доход за день был более <span class=""></span>94,645
                                    руб. Спасибо,
                                    <a class="scroll-form">bitcoin UP</a>!
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
                                <p class="winners-city">Москва</p>
                                <p class="winner-name">Ольга Ж.<br>
                                    <span><span class=""></span>656,921.61 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Краснодар</p>
                                <p class="winner-name">Герман Д.<br>
                                    <span><span class=""></span>1 365,030.89 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Москва</p>
                                <p class="winner-name">Анна Б.<br>
                                    <span><span class=""></span>964,915.23 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-3-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Екатеринбург</p>
                                <p class="winner-name">Саша К.<br>
                                    <span><span class=""></span>783, 826.02 руб.<span></span><br>
                                    </span>
                                </p>
                                <p class="winner-big-info">“Я с платформой только 35 дней. Раньше играл делая ставки на
                                    спорт и постоянно проигрывал.</p>
                                <p class="winner-big-info">Затем увидел рекламу и попробовал <a class="scroll-form">bitcoin
                                        UP</a>!</p>
                                <p class="winner-big-info">Уже спустя первые две недели я оставил свою работу в офисе!</p>
                                <p class="winner-big-info">Сейчас мы планируем с друзьями путешествовать целый год!“</p>
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
                                <p class="winners-city">Москва</p>
                                <p class="winner-name">Ольга Ж.<br>
                                    <span><span class=""></span>656,921.61 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Краснодар</p>
                                <p class="winner-name">Герман Д.<br>
                                    <span><span class=""></span>1 365,030.89 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Екатеринбург</p>
                                <p class="winner-name">Саша К.<br>
                                    <span><span class=""></span>783, 826.02 руб.<span></span><br>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-2-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Москва</p>
                                <p class="winner-name">Анна Б.<br>
                                    <span><span class=""></span>964,915.23 руб.<span></span><br>
                                    </span>
                                </p>
                                <p class="winner-big-info">“Пару лет назад мой муж оставил меня и начала одна растить двоих
                                    детей.У меня не было возможности платить за обучение моей дочери.</p>
                                <p class="winner-big-info">Терять было нечего, поэтому я вложилась в <a class="scroll-form">bitcoin
                                        UP</a>. К моему большому удивлению, мне удалось оплатить обучение дочери в
                                    университете и все кредиты! </p>
                                <p class="winner-big-info">Сейчас я работаю дома по 20-30 минут и могу уделять достаточно
                                    время на воспитание детей!“</p>
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
                <p>Как это работает?</p>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="images/question-img-1.jpg" class="dect">
                </div>
                <div class="col-md-5">
                    <div class="question-info">
                        <p><span class="question-info-step">Шаг 1</span></p>
                        <img src="images/question-img-1-mob.jpg" class="mob">
                        <p><span class="question-info-header"> Заполнить форму</span></p>
                        <p><span class="question-info-block">Как только ваша регистрация будет принята, вы автоматически станете новым участником <a class="scroll-form"><span>bitcoin UP</span></a>.Обязательно создайте безопасный код, чтобы никто не смог взломать ваш аккаунт!
                            </span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="question-info">
                        <p><span class="question-info-step">Шаг 2</span></p>
                        <img src="images/question-img-2-mob.jpg" class="mob">
                        <p><span class="question-info-header"> Пополнить счет</span></p>
                        <p><span class="question-info-block">Как и в любом бизнесе, вам нужен оборотный капитал, чтобы начать. Поэтому, чтобы начать зарабатывать с <a class="scroll-form"><span>bitcoin UP</span></a>, вы должны инвестировать любую сумму, которую желаете, в размере <span class=""></span>20,000 руб. или больше.</span></p>
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
                        <p><span class="question-info-step">Шаг 3</span></p>
                        <img src="images/question-img-3-mob.jpg" class="mob">
                        <p><span class="question-info-header"> Ждите обратного звонка и все готово</span></p>
                        <p><span class="question-info-block">После оплаты наш менеджер позвонит и предоставит вам алгоритм с высоким доходом. Наслаждайтесь точной торговлей без помощи рук с нашим удостоенным наградами алгоритмом. Вы также можете настроить ручную торговлю, если предпочитаете торговать самостоятельно.
                            </span></p>
                    </div>
                    <div class="btn-block-form">
                        <button>Начать сейчас</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="winners-block faq-block-mob mob">
        <div class="container">
            <div class="steps-header-puple">
                <p>Часто задаваемые <span>вопросы</span></p>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Какие результаты мне ожидать?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Участники Bitcoin UP обычно получают минимум <span class=""></span>20,000 руб. в день, потому что
                        платформа работает 24/7 в поисках успешных сделок.</p>
                    <p></p>
                    <p></p>
                    <!--             <div class="arrow-hide">
                   <img src="images/arrow-hide.png">
                   </div> -->
                </div>
            </div>
            <div class="row faq-click" style="border: 2px solid rgb(230, 174, 92);background-image: url(images/arrow-hide-up.png);">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span style="color:#E6AE5C ">Сколько часов в день мне нужно работать?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: block;">
                    <p>Наши участники работают в среднем 20 минут в день и меньше. Поскольку торговлей управляет программное
                        обеспечение, объем требуемой «работы» минимален.</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div> -->
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Сколько стоит программное обеспечение?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Пользователи Bitcoin UP получают копию нашего патентованного программного обеспечения бесплатно.
                        Чтобы стать участником, просто заполните форму на этой странице.</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div> -->
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Это как MLM или партнерский маркетинг?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Это не похоже на MLM, партнерский маркетинг
                        или что-нибудь еще. Bitcoin UP - программное обеспечение выигрывает транзакции с точностью до 99,4%,
                        это ваш личный инструмент обогащения.</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div> -->
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Есть ли какие-либо сборы?</span><br>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Нет никаких скрытых платежей. Нет брокерских сборов или комиссий. Все ваши данные и деньги защищены.
                        Доход на 100% принадлежит вам, и вы можете снять деньги в любое удобное для вас время.</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="faq-header dect">
            <p>Часто задаваемые вопросы</p>
        </div>
        <div class="container">
            <div class="row dect">
                <div class="col-lg-7 col-md-12">
                    <div class="answer  answer-work">
                        <p><span>Сколько часов в день<br> мне нужно работать?</span>
                        <p>Наши участники работают в среднем 20 минут в день и меньше. Поскольку торговлей управляет
                            программное обеспечение, объем требуемой «работы» минимален.</p>

                    </div>
                    <div class="answer answer-expect" style="display: none;">
                        <p><span>Какие результаты мне<br> ожидать?</span>
                        <p>Участники Bitcoin UP обычно получают минимум <span class=""></span>20,000 руб. в день, потому что
                            платформа работает 24/7 в поисках успешных сделок.</p>

                    </div>
                    <div class="answer answer-cost" style="display: none;">
                        <p><span>Сколько стоит <br> программное обеспечение?</span>
                        <p>Пользователи Bitcoin UP получают копию нашего патентованного программного обеспечения бесплатно.
                            Чтобы стать участником, просто заполните форму на этой странице.</p>

                    </div>
                    <div class="answer answer-marketing" style="display: none;">
                        <p><span>Это как MLM или <br> партнерский маркетинг?</span>
                        <p>Это не похоже на MLM, партнерский маркетинг
                            или что-нибудь еще. Bitcoin UP - программное обеспечение выигрывает транзакции с точностью до
                            99,4%, это ваш личный инструмент обогащения</p>

                    </div>
                    <div class="answer answer-fees" style="display: none;">
                        <p><span>Есть ли какие-либо сборы? <br></span>
                        <p>Нет никаких скрытых платежей. Нет брокерских сборов или комиссий. Все ваши данные и деньги
                            защищены. Доход на 100% принадлежит вам, и вы можете снять деньги в любое удобное для вас
                            время.</p>

                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="faq-block">
                        <div class="question-work question" style="color:#E6AE5C ">
                            <p>Сколько часов в день мне нужно работать?</p>
                        </div>
                        <div class="question-expect question">
                            <p>Какие результаты мне ожидать?</p>
                        </div>
                        <div class="question-cost question">
                            <p>Сколько стоит программное обеспечение?</p>
                        </div>
                        <div class="question-marketing question">
                            <p>Это как MLM или партнерский маркетинг?</p>
                        </div>
                        <div class="question-fees question">
                            <p>Есть ли какие-либо сборы?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-form-block">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-form-info">
                        <p>Вы будете <span>удивлены</span>, когда вы заберете свою двухнедельную прибыль!</p>
                        <img src="images/btc-logo.png">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="images/phone-footer.png" class="dect phone-footer-img">
                    <img src="images/phone-footer-mob.png" class="mob">
                </div>
                <div class="col-lg-4 col-md-12 padding-hide">
                    <div class="form">
                        <div class="preloader"></div>
                        <div class="head-form">
                            <p>Измени свою жизнь <span>сегодня!</span></p>
                        </div>
                        <div class="app" id="app3" data-url="<?php echo $thankyou ?>" data-butt="Присоединяйся сейчас!" data-type="2"></div>
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
                        <p><br><span>Ваши данные всегда защищены с нами. </span><br>
                            Вы можете изменить свое решение в любое время, нажав на ссылку отказа от подписки в нижнем
                            колонтитуле любого электронного письма, которое вы получите от нас. Мы будем относиться к вашей
                            информации с уважением. Нажав выше, вы соглашаетесь с тем, что мы можем обрабатывать вашу
                            информацию в соответствии с этими условиями.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="images/logo-secure.png">
                </div>
                <p><br><span>Ваши данные всегда защищены с нами. </span></br>
                    Вы можете изменить свое решение в любое время, нажав на ссылку отказа от подписки в нижнем колонтитуле
                    любого электронного письма, которое вы получите от нас. Мы будем относиться к вашей информации с
                    уважением. Нажав выше, вы соглашаетесь с тем, что мы можем обрабатывать вашу информацию в соответствии с
                    этими условиями.
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
                    <a href="javascript:void(0)" data-name="terms" class="alterlink">Пользовательское соглашение</a>
                    <a href="javascript:void(0)" data-name="policy" class="alterlink">Политика конфиденциальности</a>
                </div>
            </div>
            <div class="footer-info">
                <p>ВАЖНО: Отказ от ответственности за доходы и данные о доходах, сделанные c bitcoin UP (коллективно с «этим
                    Веб-сайтом» ) используются только в качестве наглядного примера вашего потенциала заработка.Успех тех,
                    кто находится в отзывах и других примерах, является исключительным результатом и, следовательно, не
                    является гарантией того, что вы или другие люди добьетесь таких же результатов.Индивидуальные результаты
                    могут отличаться и полностью зависят от вашего использования bitcoin UP.Этот сайт не несет
                    ответственности за ваши действия.Вы несете полную ответственность за свои действия и решения при
                    использовании продуктов и услуг, поэтому вы должны всегда проявлять осторожность и должную
                    осмотрительность.Вы соглашаетесь с тем, что данный Веб-сайт не несет никакой ответственности за
                    результаты использования наших продуктов и услуг.Ознакомьтесь с нашими Правилами и Условиями для полного
                    отказа от ответственности и других ограничений.Этот веб-сайт может получить компенсацию за продукты и
                    услуги, которые рекомендует вам.Если вы не хотите этот сайт получил вознаграждение за рекомендации, мы
                    рекомендуем вам поискать в Интернете аналогичный продукт по несвязанной ссылке.</p>
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