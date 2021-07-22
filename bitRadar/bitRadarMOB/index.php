<?php
header("Cache-Control: max-age=31536000");
include_once 'config.php';;
?>
<!DOCTYPE html>
<html lang="ru" class="no-webp">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 user-scalable=no">
    <title>BitRadar</title>
    <!-- Open Graph -->
    <?php $seoText = 'Добро пожаловать!'; ?>
    <meta name="description" content="<? echo $seoText; ?>" />
    <meta name="keywords" content="<? echo $seoText; ?>" />
    <meta property="og:title" content="<? echo $seoText; ?>" />
    <meta property="og:description" content="<? echo $seoText; ?>" />
    <meta property="og:image" content="<? echo $base; ?>video/1.png" />
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

    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
</head>

<body>
    <main>
        <section class="welcome">
            <div class="welcome__logo">
                <picture>
                    <source srcset="img/big_logo.webp" type="image/webp">
                    <img src="img/big_logo.png" alt="BitRadar" />
                </picture>
            </div>
            <div class="welcome__wrapper">
                <p class="welcome__text">Атоматический поиск арбитражной <br> разности на мировых биржах</p>
                <a class="welcome__btn default__btn" href="javascript:void(0)">Видео о проекте</a>
                <a class="welcome__link nextStep demo" href="javascript:void(0)">Перейти к приложению</a>
            </div>
            <div class="welcome__popup vivify">
                <div class="welcome__header">
                    <div class="video first">
                        <picture>
                            <source srcset="video/video-preview.webp" type="image/webp">
                            <img class="push__video" src="video/video-preview.png" alt="Video">
                        </picture>
                    </div>
                    <span class="popup__close"></span>
                </div>
                <div class="welcome__body">
                    <div class="welcome__item">
                        <span>1. О проекте</span>
                        <p>Мы российско-китайский стартап и являемся резидентами Сколково. Наш проект относится к категории “социально значимые ФинТех разработки”</p>
                    </div>
                    <div class="welcome__item">
                        <span>2. География проекта</span>
                        <p>Доступ к программе только у граждан РФ до 31.12.21. К программе допускаются лица достигшие совершенолетия. В 2022 BitRadar выходит на рынок Азии и Европы. </p>
                    </div>
                    <div class="welcome__item">
                        <span>3. Принцип работы BitRadar</span>
                        <p>Приложение выводит кросс-курс валютных пар со всех официальных бирж. Затем пользователь выбирает “валютную вилку” и осуществляет сделку. </p>
                    </div>
                    <div class="welcome__item">
                        <span>4. BitRadar - бесплатное приложение</span>
                        <p>В режиме демонстрации BitRadar даёт 3 бесплатных запроса. Пройдите полную регистрацию и подтвердите личность, чтобы открыть доступ к полному функционалу.</p>
                    </div>
                    <div class="welcome__item last">
                        <span>5. Реальный доход на демо-сделках</span>
                        <p>В режиме демонстрации сделки осуществляются на реальные деньги, но за BitRadar. Чтобы выводить средства — подтвердите наличие средств на вашей карте.</p>
                    </div>
                    <a class="popup__btn default__btn nextStep demo" href="javascript:void(0)">Перейти к поиску</a>
                </div>
            </div>
        </section>
        <section class="section__step vivify">
            <header class="header">
                <div class="logo">
                    <picture>
                        <source srcset="img/small_logo.webp" type="image/webp">
                        <img src="img/small_logo.png" alt="BitRadar" alt="BitRadar" />
                    </picture>
                </div>
                <div class="header__items">
                    <span class="header__balance">$ 0.00</span>
                    <button class="header__hamburger notification hamburger hamburger--squeeze js-hamburger" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <div class="header__menu">
                    <ul class="header__menu__list">
                        <li class="header__menu__item">
                            <a class="header__menu__link registration_popup" href="javascript:void(0)">Регистрация</a>
                        </li>
                        <li class="header__menu__item">
                            <a class="header__menu__link notification video_popup" href="javascript:void(0)">Видео о проекте</a>
                        </li>
                        <li class="header__menu__item">
                            <a class="header__menu__link registration_popup" href="javascript:void(0)">Поиск сделок</a>
                        </li>
                        <li class="header__menu__item">
                            <a class="header__menu__link registration_popup" href="javascript:void(0)">Пополнить баланс</a>
                        </li>
                        <li class="header__menu__item">
                            <a class="header__menu__link registration_popup" href="javascript:void(0)">Вывод средств</a>
                        </li>
                    </ul>
                    <div class="header__menu__terms">
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Пользовательское соглашение</a>
                        <a href="javascript:void(0)" data-name="policy" class="alterlink">Политика конфиденциальности</a>
                        <p>Все права защищены © BitRadar 2021</p>
                    </div>
                </div>
            </header>
            <section class="section__item" data-page="1">
                <div class="section__header">
                    <span class="section__find__deals">Найдено сделок: 0</span>
                </div>
            </section>
            <section class="section__item vivify" data-page="2">
                <div class="section__header">
                    <span class="section__find__deals">Найдено сделок: 0</span>
                    <span class="section__deals__timer">60 сек</span>
                </div>
                <div class="section__body">
                    <div class="section__deals">
                        <span class="section__deals__lock vivify">
                            Открыть полный список
                        </span>
                        <div class="link" id="section__deals__list"></div>
                    </div>
                </div>
            </section>
            <section class="section__item vivify" data-page="3">
                <div class="section__header">
                    <p class="section__header__title">Транзакция FTX / BitBank</p>
                </div>
                <div class="section__body calculator__body">
                    <p class="section__body__title">Заработок</p>
                    <picture>
                        <source srcset="img/money_bag.webp" type="image/webp">
                        <img src="img/money_bag.png" alt="BitRadar" />
                    </picture>
                    <p class="section__body__velue">$ 00.00</p>
                    <div class="section__body__parameters">
                        <div class="section__parameter">
                            <p>Комиссия</p>
                            <span class="parameter__сommission">$00.00</span>
                        </div>
                        <div class="section__parameter">
                            <p class="section__parameter__couple">FTX / BitBank</p>
                            <span class="section__parameter__coupleVal">3</span>
                        </div>
                        <div class="section__parameter">
                            <p>Количество</p>
                            <span class="parameter__amount">20 шт.</span>
                        </div>
                        <input class="section__body__range" type="range" name="" id="" min="10" max="500" value="20" step="1">
                    </div>
                    <a class="default__btn deal__btn nextStep" href="javascript:void(0)">Совершить сделку</a>
                </div>
            </section>
            <section class="section__item vivify" data-page="4">
                <div class="section__header">
                    <p class="section__header__title">Регистрация</p>
                </div>
                <div class="section__body">
                    <p class="section__body__title">Все функции приложения<br>доступны после</b> регистрации:</p>
                    <p class="section__body__subtitle">Первые 20 сделок БЕЗ КОМИССИИ</p>
                    <div class="section__body__form">
                        <div class="app" id="app1" data-url="<?php echo $thankyou ?>" data-butt="Регистрация" data-type="2"></div>
                    </div>
                </div>
            </section>
            <div class="section__popup section__popup__video">
                <div class="welcome__popup">
                    <div class="welcome__header">
                        <div class="video">
                            <video poster="video/poster.webp" controls allowfullscreen="" class="adahe">
                                <source src="video/video.mp4" type="video/mp4">
                            </video>
                            <div class="play-btn"></div>
                        </div>
                        <span class="popup__close video__close"></span>
                    </div>
                    <div class="welcome__body" style="padding-bottom: 20px;">
                        <div class="welcome__item">
                            <span>1. О проекте</span>
                            <p>Мы российско-китайский стартап и являемся резидентами Сколково. Наш проект относится к категории “социально значимые ФинТех разработки”</p>
                        </div>
                        <div class="welcome__item">
                            <span>2. География проекта</span>
                            <p>Доступ к программе только у граждан РФ до 31.12.21. К программе допускаются лица достигшие совершенолетия. В 2022 BitRadar выходит на рынок Азии и Европы. </p>
                        </div>
                        <div class="welcome__item">
                            <span>3. Принцип работы BitRadar</span>
                            <p>Приложение выводит кросс-курс валютных пар со всех официальных бирж. Затем пользователь выбирает “валютную вилку” и осуществляет сделку. </p>
                        </div>
                        <div class="welcome__item">
                            <span>4. BitRadar - бесплатное приложение</span>
                            <p>В режиме демонстрации BitRadar даёт 3 бесплатных запроса. Пройдите полную регистрацию и подтвердите личность, чтобы открыть доступ к полному функционалу.</p>
                        </div>
                        <div class="welcome__item last">
                            <span>5. Реальный доход на демо-сделках</span>
                            <p>В режиме демонстрации сделки осуществляются на реальные деньги, но за BitRadar. Чтобы выводить средства — подтвердите наличие средств на вашей карте.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__popup section__popup__registration">
                <span class="section__popup__close registration__close"></span>
                <div class="app" id="app2" data-url="<?php echo $thankyou ?>" data-butt="Регистрация" data-type="2"></div>
            </div>
        </section>
        <footer class="footer">
            <div class="btn__wrapper">
                <div class="btn__bg" id="btn__bg">
                    <button class="btn search nextStep" href="javascript:void(0)"></button>
                </div>
            </div>
            <p class="footer__text">Поиск сделок</p>
        </footer>
    </main>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/kinetic.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/rangeslider.min.js"></script>
    <script src="js/main.js"></script>
    <script defer src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script defer src="https://cdn-addict.site/addict-new/js/app.js"></script>
    <script>
        function support_format_webp() {
            var elem = document.createElement('canvas');

            if (!!(elem.getContext && elem.getContext('2d'))) {
                return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
            } else {
                return false;
            }
        }
        if (support_format_webp() === true) {
            document.getElementsByTagName('html')[0].classList.remove('no-webp');
            document.getElementsByTagName('html')[0].classList.add('webp');
        }
    </script>
</body>

</html>