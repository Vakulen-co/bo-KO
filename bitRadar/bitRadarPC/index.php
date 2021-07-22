<?php
    include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="ru" class="no-webp">
    <head>
        <base href="<?php echo $base ?>">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BitRadar</title>
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

        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="icon" type="image/png" href="img/favicon/favicon.png"/>
        <link rel="icon" type="image/x-icon" href="img/favicon/favicon.ico"/>
        <link rel="manifest" href="img/favicon/site.webmanifest">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css">
        <link rel="stylesheet" href="style/style-pc.css">
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
                <p class="welcome__text vivify fadeIn duration-1000">Атоматический поиск арбитражной разности на мировых биржах</p>
                <a class="welcome__btn default__btn" href="javascript:void(0)">Видео о проекте</a>
                <a class="welcome__link demo" href="javascript:void(0)">Перейти к приложению</a>
            </div>
        </section>
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="logo">
                        <picture>
                            <source srcset="img/small_logo.webp" type="image/webp">
                            <img src="img/small_logo.png" alt="BitRadar" alt="BitRadar" />
                        </picture>
                    </div>
                    <div class="header__items">
                        <span class="header__balance">$ 0</span>
                        <button class="header__hamburger notification hamburger hamburger--squeeze js-hamburger" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                    <div class="header__menu">
                        <ul class="header__menu__list">
                            <li class="header__menu__item">
                                <a class="header__menu__link popup__open" href="javascript:void(0)">Регистрация</a>
                            </li>
                            <li class="header__menu__item">
                                <a class="header__menu__link popup__open__video notification" href="javascript:void(0)">Видео о проекте</a>
                            </li>
                            <li class="header__menu__item">
                                <a class="header__menu__link" href="javascript:void(0)">Поиск сделок</a>
                            </li>
                            <li class="header__menu__item">
                                <a class="header__menu__link popup__open" href="javascript:void(0)">Пополнить баланс</a>
                            </li>
                            <li class="header__menu__item">
                                <a class="header__menu__link popup__open" href="javascript:void(0)">Вывод средств</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <section class="content">
            <div class="container">
                <div class="content__inner">
                    <div class="content__search">
                        <p class="content__search__title">Поиск сделок</p>
                        <div class="btn__bg">
                            <button class="btn search" href="javascript:void(0)"></button>
                        </div>
                        <p class="content__search__subtitle">Чтобы начать искать сделки <br> нажмите на кнопку.</p>
                    </div>
                    <div class="content__deals">
                        <div class="content__deals__header">
                            <p class="content__deals__title">Найдено сделок: 0</p>
                            <span class="section__deals__timer">60 сек</span>
                        </div>
                        <div class="content__deals__body">
                            <div id="content__deals__list"></div>
                            <div class="content__deals__hide">
                                <a class="deals__popup" href="javascript:void(0)">Открыть полный список</a>
                            </div>
                        </div>
                    </div>
                    <div class="content__calculator">
                        <div class="content__calculator__inner">
                            <p class="calculator__title">Заработок</p>
                            <picture>
                                <source srcset="img/money_bag.webp" type="image/webp">
                                <img src="img/money_bag.png" alt="" />
                            </picture>
                            <p class="section__body__velue">$0.00</p>
                            <div class="section__body__parameters">
                                <div class="section__parameter">
                                    <p>Комиссия</p>
                                    <span class="parameter__сommission">$0.00</span>
                                </div>    
                                <div class="section__parameter">
                                    <p class="section__parameter__couple">Название сделки</p>
                                    <span class="section__parameter__coupleVal">$0.00</span>
                                </div>    
                                <div class="section__parameter">
                                    <p>Количество</p>
                                    <span class="parameter__amount">0 шт.</span>
                                </div>    
                                <input class="section__body__range" type="range" name="" id="" min="10" max="500" value="20" step="1">
                            </div>
                            <a class="default__btn deal__btn" href="javascript:void(0)">Совершить сделку</a>
                        </div>
                    </div>
                    <div class="content__thankyou">
                        <p class="content__thankyou__title">Спасибо за регистрацию!</p>
                        <picture>
                            <source srcset="img/manager.webp" type="image/webp">
                            <img src="img/manager.png" alt="" />
                        </picture>
                        <p class="content__thankyou__subtitle">Наш менеджер скоро свяжеться с вами для подтверждения аккаунта.</p>
                        <a class="form__btn default__btn" href="javascript:void(0)">На главную</a>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__policy">
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Пользовательское соглашение</a>
                        <a href="javascript:void(0)" data-name="policy" class="alterlink">Политика конфиденциальности</a>
                    </div>
                    <p class="footer__copyright">Все права защищены © BitRadar 2020</p>
                </div>
            </div>
        </footer>
    </main>
    <div class="pop__up">
        <div class="section__body">
            <div class="section__body__inner">
                <span class="pop__up__close"></span>
                <p class="section__body__title">Все функции приложения <br> доступны после <b>регистрации:</b></p>
                <p class="section__body__subtitle">Первые 20 сделок БЕЗ КОМИССИИ</p>
                <div class="section__body__form">
                    <div class="app" id="app" data-butt="Регистрация" data-url="<?php echo $thankyou ?>" data-type="2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome__popup__wrapper">
        <div class="welcome__popup vivify">
            <div class="welcome__header">
                <div class="video">
                    <video controls="controls" disablePictureInPicture controlsList="nodownload" poster="video/poster.png" allowfullscreen="">
                        <source src="video/video.mp4" type="video/mp4">
                    </video>
                    <div class="play-btn"></div>
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
                <a class="popup__btn-start popup__btn default__btn" href="javascript:void(0)">Перейти к поиску</a>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/kineticjs/5.2.0/kinetic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.0/rangeslider.min.js"></script>
    <script src="js/main-pc.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    <script>
        function support_format_webp() {
            var elem = document.createElement('canvas');

            if (!!(elem.getContext && elem.getContext('2d'))) {
                return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;
            } else {
                return false;
            }
        }
        if(support_format_webp() === true){
            document.getElementsByTagName('html')[0].classList.remove('no-webp');
            document.getElementsByTagName('html')[0].classList.add('webp');
        }
    </script>
</body>
</html>