<?php 
include_once 'config.php'; 
?>

<!DOCTYPE html>
<html lang="ru" class="desktop portrait">

<head>
    <base href="<?php echo $base ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./images/favicon.png" type="image/png">
    <title>Биткоин Профит</title>
    <link rel="stylesheet" type="text/css" href="./index_files/checkbox-svg.css">
    <link rel="stylesheet" type="text/css" href="./index_files/owl.carousel.min.css">
    <link rel="stylesheet" href="./index_files/fonts.css">
    <link rel="stylesheet" href="./index_files/style.css">
    <link rel="stylesheet" href="./index_files/video.css">
    <link rel="stylesheet" href="./index_files/pop-up.css">
    <link rel="stylesheet" href="./index_files/form.css">
    <link rel="stylesheet" href="./index_files/media.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

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
</head>

<body>
    <div class="hover-modal"></div>
    <div id="popup_custom" class="popup_custom" style="display: none;">
        <div class="popup_overlay"></div>
        <a class="close_button">×</a>
        <div class="popup_inner">
            <div class="popup_content">
                <div class="popup_content_inner">
                    <div class="popup-content-wrapper">
                        <div class="popup-header">
                            <div class="title">
                                Только что вы совершили БОЛЬШУЮ ошибку!
                            </div>
                            <div class="subtitle">
                                Это ваш <b>ПОСЛЕДНИЙ ШАНС</b> присоединиться к <b>Биткоин Профит</b> и обеспечить свое финансовое будущее.
                            </div>
                        </div>
                    </div>
                    <div class="popup-form-wrapper">
                        <div class="form-container-unique">
                            <div class="form-block-2 whitee">

                                <button class="fieldstep_btn-next fieldstep_btn-register move-to-top close-popup" type="submit">
                                    <a href="#form-block" class="to-reg-link close-popup">Получить доступ сейчас! <br></a>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <header class="header-section" style="padding-top: 10px;">
        <div style="display: inline-block;position: absolute;top: 4px;left: 50%;transform: translateX(-50%);font-size: .5em;opacity: .5;font-family: inherit;">
            -&nbsp;Advertorial&nbsp;-</div>
        <div class="header-section_filter"></div>
        <div class="header-section_wrapper">

            <div class="header-section_company">
                <img src="./index_files/logo.png" alt="Logo">
                <span class="header-section_text">
          <span class="logo-word_first">БИТКОИН</span>
                <span class="logo-word_second">ПРОФИТ</span>
                </span>
            </div>

            <div class="header-section_divider"></div>

            <div class="header-section_slick">
                <div class="slick-wrapper owl-carousel owl-loaded owl-drag">

                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="left: -870px; width: 1740px;">
                            <div class="owl-item" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/79.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Марьяна С</span>
                                        <span class="money">$338.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/20.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Лия Ж</span>
                                        <span class="money">$236.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/70.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Магдалeна Э</span>
                                        <span class="money">$723.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/47.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Лидия Е</span>
                                        <span class="money">$789.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/23.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Вячеслав Я</span>
                                        <span class="money">$566.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/78.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Владлен Н</span>
                                        <span class="money">$352.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/24.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Лада Х</span>
                                        <span class="money">$442.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/37.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Милада Г</span>
                                        <span class="money">$408.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/44.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Виталий Ф</span>
                                        <span class="money">$872.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 174px;">
                                <div class="user-element" style="opacity: 1;">
                                    <img src="./index_files/18.jpg" alt="" style="opacity: 1;">
                                    <div class="header-text_wrapper">
                                        <span class="name">Лилия Ч</span>
                                        <span class="money">$754.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </header>
    
    <section class="form-section">
        <div class="background-main_filter">
            <img src="./index_files/bg-comeback.png" alt="About" class="loaded" style="max-width: 100%;">
        </div>
        <div class="row">
            <div class="heading-text">
                <h1>Ты можешь стать Следующим Миллионером...</h1>
            </div>
        </div>
        <div class="row main-row">
            <div class="profit-video-block">
                <div class="video-wrapper">
                    <video src="index_files/video/2297059254.mp4" controls="true" width="100%" playsinline  type="video/mp4" poster="index_files/video/1040662374.webp"></video>
                </div>
            </div>
            <div class="form-block" id="form-block">
                <h2 class="form-text_header">ИЗМЕНИТЕ СВОЮ ЖИЗНЬ СЕГОДНЯ!</h2>
                <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="ПОЛУЧИТЬ ДОСТУП"></div>
            </div>
        </div>

    </section>
    <div class="crypto-wrapper">
        <div class="currency-list">
            <div class="currency-item">
                <span class="name-currency">ETH</span>
                <span class="value-currency up"><span class="currency">$</span> 183.41 (+0.08%)</span>
            </div>
            <div class="currency-item">
                <span class="name-currency">XRP</span>
                <span class="value-currency up"><span class="currency">$</span> 0.29 (+0.22%)</span>
            </div>
            <div class="currency-item">
                <span class="name-currency">EOS</span>
                <span class="value-currency down"><span class="currency">$</span> 3.11 (-0.72%)</span>
            </div>
            <div class="currency-item">
                <span class="name-currency">BCH</span>
                <span class="value-currency down"><span class="currency">$</span> 223.91 (-0.88%)</span>
            </div>
        </div>
    </div>
    
    <section class="section-partners">
        <img src="./index_files/1.svg" alt="" class="partner-img">
        <img src="./index_files/3.svg" alt="" class="partner-img">
        <img src="./index_files/4.svg" alt="" class="partner-img">
        <img src="./index_files/5.svg" alt="" class="partner-img">
        <img src="./index_files/6.svg" alt="" class="partner-img">
    </section>
    
    <section class="section-about">
        <div class="about-wrapper">
            <div class="text-wrapper">
                <h1>Присоединяйся и Стань богатым c Биткоин Профит!</h1>
                <p>
                    Биткоин Профит это эксклюзивная группа для людей которые поверили и втянулись в безумие Профит и заработали на нём целое состояние.
                </p>
                <p>
                    Наши члены каждый месяц наслаждаются отдыхом по всему миру, в то время как зарабатывают деньги на своем ноутбуке всего за несколько минут «работы» каждый день.
                </p>
            </div>
            <img src="./index_files/about-image.png" alt="About">
        </div>
    </section>
    
    <section class="section-partners">
        <img src="./index_files/1.svg" alt="" class="partner-img">
        <img src="./index_files/3.svg" alt="" class="partner-img">
        <img src="./index_files/4.svg" alt="" class="partner-img">
        <img src="./index_files/5.svg" alt="" class="partner-img">
        <img src="./index_files/6.svg" alt="" class="partner-img">
    </section>
    
    <section class="section-why">
        <div class="row">
            <div class="why-block_wrapper">
                <div class="why-box">
                    <img src="./index_files/join1.png" alt="Laser-Accurate Performance">
                    <h4>ТОЧНОСТЬ ЛАЗЕРА</h4>
                    <p>В мире нет другого торгового приложения как Биткоин Профит, которое дает 99.4% точности. Поэтому наши участники со всего мира доверяют нам удваивать и утраивать их тяжело заработанные деньги.</p>
                </div>
            </div>
            <div class="why-block_wrapper">
                <div class="why-box">
                    <img src="./index_files/join2.png" alt="Superior Technology">
                    <h4>УЛУЧШЕННАЯ ТЕХНОЛОГИЯ</h4>
                    <p>Программа Биткоин Профит была создана самыми продвинутыми технологиями торговли в мире. Программа опережает рынок на 0.01 секунды. Этот 'скачек времени' позволяет Биткоин Профит быть самой точной и быстрой программой в мире.</p>
                </div>
            </div>
            <div class="why-block_wrapper">
                <div class="why-box">
                    <img src="./index_files/join3.png" alt="Award-Winning Trading App">
                    <h4>ПРОГРАММА ВЫИГРЫВАЮЩАЯ НАГРАДЫ</h4>
                    <p>Приложение Биткоин Профит выиграло множество наград. Недавно мы имели честь получить награду '#1', в категории торговых программ от Торговой US Ассоциации.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-testimonials">
        <div class="row">
            <h2>Реальные отзывы от наших участников </h2>
        </div>
        <div class="testimonial-row">
            <div class="testimonial-wrapper">
                <div class="testimonial-header">
                    <img src="./index_files/user-example.png" alt="User" class="testimonial-image_user">

                    <div class="testimonial-text">
                        <span class="testimonial-name">
              Виктор B.
            </span>

                        <span class="testimonial-sum">
              Прибыль за месяц: <span class="testimonial-sum_green"><span class="currency">$</span> 93 456</span>
                        </span>
                    </div>
                </div>
                <div class="testimonial-video_image video-wrapper">
                    <video src="index_files/video/001.mp4" controls="true" title="YouTube video player" width="100%" playsinline type="video/mp4"></video>
                </div>
                <div class="testimonial-details">
                    <div class="account-number">
                        <img src="./index_files/testimonial-company-logo.png" alt="Company" class="account-company_logo">
                        <div class="account-number">
                            <span>Ваш номер счета:</span>
                            <div class="hide-code"></div>
                        </div>

                    </div>
                    <div class="account-history">
                        <span class="history-title">
              <span class="gray">История / </span>
                        <span class="black">Пополнение</span>
                        </span>
                        <div class="history-Дата">
                            <span class="text">Дата</span>
                            <span class="info">12.12.2019</span>
                        </div>
                        <div class="history-transfer">
                            <span class="text">Сумма перевода</span>
                            <span class="info"><span class="currency">$</span> 1801.90</span>
                        </div>
                        <div class="history-Отправитель">
                            <span class="text">Отправитель</span>
                            <span class="info">Биткоин Профит LTT</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrapper">
                <div class="testimonial-header">
                    <img src="./index_files/user-example2.png" alt="User" class="testimonial-image_user">

                    <div class="testimonial-text">
                        <span class="testimonial-name">
              Инна K.
            </span>

                        <span class="testimonial-sum">
              Прибыль за месяц: <span class="testimonial-sum_green"><span class="currency">$</span> 96456</span>
                        </span>
                    </div>
                </div>
                <div class="testimonial-video_image video-wrapper">
                    <video src="index_files/video/002.mp4" controls="true" title="YouTube video player" width="100%" playsinline type="video/mp4"></video>
                </div>
                <div class="testimonial-details">
                    <div class="account-number">
                        <img src="./index_files/testimonial-company-logo2.png" alt="Company" class="account-company_logo">
                        <div class="account-number">
                            <span>Ваш номер счета:</span>
                            <div class="hide-code"></div>
                        </div>

                    </div>
                    <div class="account-history">
                        <span class="history-title">
              <span class="gray">История / </span>
                        <span class="black">Пополнение</span>
                        </span>
                        <div class="history-Дата">
                            <span class="text">Дата</span>
                            <span class="info">06.12.2019</span>
                        </div>
                        <div class="history-transfer">
                            <span class="text">Сумма перевода</span>
                            <span class="info"><span class="currency">$</span> 2301.20</span>
                        </div>
                        <div class="history-Отправитель">
                            <span class="text">Отправитель</span>
                            <span class="info">Биткоин Профит LTT</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrapper">
                <div class="testimonial-header">
                    <img src="./index_files/user-example5.png" alt="User" class="testimonial-image_user">

                    <div class="testimonial-text">
                        <span class="testimonial-name">
              Максим И.
            </span>

                        <span class="testimonial-sum">
              Прибыль за месяц: <span class="testimonial-sum_green"><span class="currency">$</span> 101 356</span>
                        </span>
                    </div>
                </div>
                <div class="testimonial-video_image video-wrapper">
                    <video src="index_files/video/003.mp4" controls="true" title="YouTube video player" width="100%" playsinline type="video/mp4"></video>
                    <div class="testimonial-details">
                        <div class="account-number">
                            <img src="./index_files/testimonial-company-logo.png" alt="Company" class="account-company_logo">
                            <div class="account-number">
                                <span>Ваш номер счета:</span>
                                <div class="hide-code"></div>
                            </div>

                        </div>
                        <div class="account-history">
                            <span class="history-title">
                <span class="gray">История / </span>
                            <span class="black">Пополнение</span>
                            </span>
                            <div class="history-Дата">
                                <span class="text">Дата</span>
                                <span class="info">03.12.2019</span>
                            </div>
                            <div class="history-transfer">
                                <span class="text">Сумма перевода</span>
                                <span class="info"><span class="currency">$</span> 2704.10</span>
                            </div>
                            <div class="history-Отправитель">
                                <span class="text">Отправитель</span>
                                <span class="info">Биткоин Профит LTT</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-row">
            <div class="testimonial-wrapper">
                <div class="testimonial-header">
                    <img src="./index_files/user-example3.png" alt="User" class="testimonial-image_user">

                    <div class="testimonial-text">
                        <span class="testimonial-name">
              Елена Ж.
            </span>

                        <span class="testimonial-sum">
              Прибыль за месяц: <span class="testimonial-sum_green"><span class="currency">$</span> 83 269</span>
                        </span>
                    </div>
                </div>
                <div class="testimonial-video_image video-wrapper">
                    <video src="index_files/video/005.mp4" controls="true" title="YouTube video player" width="100%" playsinline type="video/mp4"></video>
                </div>
                <div class="testimonial-details">
                    <div class="account-number">
                        <img src="./index_files/testimonial-company-logo2.png" alt="Company" class="account-company_logo">
                        <div class="account-number">
                            <span>Ваш номер счета:</span>
                            <div class="hide-code"></div>
                        </div>

                    </div>
                    <div class="account-history">
                        <span class="history-title">
              <span class="gray">История / </span>
                        <span class="black">Пополнение</span>
                        </span>
                        <div class="history-Дата">
                            <span class="text">Дата</span>
                            <span class="info">10.12.2019</span>
                        </div>
                        <div class="history-transfer">
                            <span class="text">Сумма перевода</span>
                            <span class="info"><span class="currency">$</span> 2563.20</span>
                        </div>
                        <div class="history-Отправитель">
                            <span class="text">Отправитель</span>
                            <span class="info">Биткоин Профит LTT</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrapper">
                <div class="testimonial-header">
                    <img src="./index_files/user-example4.png" alt="User" class="testimonial-image_user">

                    <div class="testimonial-text">
                        <span class="testimonial-name">
              Ирина Г.
            </span>

                        <span class="testimonial-sum">
              Прибыль за месяц: <span class="testimonial-sum_green"><span class="currency">$</span> 83 586</span>
                        </span>
                    </div>
                </div>
                <div class="testimonial-video_image video-wrapper">
                    <video src="index_files/video/004.mp4" controls="true" title="YouTube video player" width="100%" playsinline type="video/mp4"></video>
                </div>
                <div class="testimonial-details">
                    <div class="account-number">
                        <img src="./index_files/testimonial-company-logo3.png" alt="Company" class="account-company_logo">
                        <div class="account-number">
                            <span>Ваш номер счета:</span>
                            <div class="hide-code"></div>
                        </div>

                    </div>
                    <div class="account-history">
                        <span class="history-title">
              <span class="gray">История / </span>
                        <span class="black">Пополнение</span>
                        </span>
                        <div class="history-Дата">
                            <span class="text">Дата</span>
                            <span class="info">04.12.2019</span>
                        </div>
                        <div class="history-transfer">
                            <span class="text">Сумма перевода</span>
                            <span class="info"><span class="currency">$</span> 1865.20</span>
                        </div>
                        <div class="history-Отправитель">
                            <span class="text">Отправитель</span>
                            <span class="info">Биткоин Профит LTT</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrapper">
                <div class="testimonial-header">
                    <img src="./index_files/user-example6.png" alt="User" class="testimonial-image_user">

                    <div class="testimonial-text">
                        <span class="testimonial-name">
              Наталия K.
            </span>

                        <span class="testimonial-sum">
              Прибыль за месяц: <span class="testimonial-sum_green"><span class="currency">$</span> 104 265</span>
                        </span>
                    </div>
                </div>
                <div class="testimonial-video_image video-wrapper">
                    <video src="index_files/video/006.mp4" controls="true" title="YouTube video player" width="100%" playsinline type="video/mp4"></video>
                </div>
                <div class="testimonial-details">
                    <div class="account-number">
                        <img src="./index_files/testimonial-company-logo3.png" alt="Company" class="account-company_logo">
                        <div class="account-number">
                            <span>Ваш номер счета:</span>
                            <div class="hide-code"></div>
                        </div>

                    </div>
                    <div class="account-history">
                        <span class="history-title">
              <span class="gray">История / </span>
                        <span class="black">Пополнение</span>
                        </span>
                        <div class="history-Дата">
                            <span class="text">Дата</span>
                            <span class="info">01.12.2019</span>
                        </div>
                        <div class="history-transfer">
                            <span class="text">Сумма перевода</span>
                            <span class="info"><span class="currency">$</span> 3569.20</span>
                        </div>
                        <div class="history-Отправитель">
                            <span class="text">Отправитель</span>
                            <span class="info">Биткоин Профит LTT</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="section-how">
        <div class="row">
            <div class="form-block">
                <h2 class="form-text_header">ИЗМЕНИТЕ СВОЮ ЖИЗНЬ СЕГОДНЯ!</h2>

                <button class="fieldstep_btn-next fieldstep_btn-register move-to-top" id="" type="submit">
                    <a href="#form-block" class="to-reg-link">Получить доступ сейчас! <br></a>
                </button>

            </div>
            <div class="how-steps_wrapper">
                <h1>Как это работает</h1>
                <div class="step-wrapper">
                    <div class="number-step">1</div>
                    <div class="step-describe">
                        <h3>РЕГИСТРАЦИЯ НА САЙТЕ</h3>
                        <p>Как только ваша регистрация будет принята, вы автоматически становитесь новым пользователем системы Биткоин Профит. Вы получите возможность пользоваться торговой системой бесплатно.</p>
                    </div>
                </div>
                <div class="step-wrapper">
                    <div class="number-step">2</div>
                    <div class="step-describe">
                        <h3>ПОПОЛНИТЕ ВАШ АККАУНТ</h3>
                        <p>Как любой другой бизнес, вам нужен стартовый капитал чтобы начать. Чтобы начать получать прибыль с системой Биткоин Профит, вы должны инвестировать <span class="currency">$</span>250 или больше.</p>
                    </div>
                </div>
                <div class="step-wrapper">
                    <div class="number-step">3</div>
                    <div class="step-describe">
                        <h3>ФИНИШ</h3>
                        <p>Нажмите 'торговать' чтобы насладится точной и автоматической торговлей созданной по выигрышному алгоритму. Вы также можете перевести систему в ручной режим, если предпочитаете торговать сами.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <section class="section-faq">
        <div class="row table-row">
            <div class="results">
                <h2 class="results__title">Таблица доходов в реальном времени</h2>
                <div class="tablica">
                    <div class="tablica__wrapper">
                        <table class="live-results-table">
                            <thead class="thead">
                                <tr>
                                    <td><span>Имя</span></td>
                                    <td><span>Доход</span></td>
                                    <td><span>Время Сделки</span></td>
                                    <td><span>Криптовалюта</span></td>
                                    <td><span>Результат</span></td>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <tr>
                                    <td>Ждан Корнилов</td>
                                    <td><span class="currency">$</span>163.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>ETH/LTC</td>
                                    <td>
                                        <img src="./index_files/tick-up.png" alt="tick">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Георгий Стегайло</td>
                                    <td><span class="currency">$</span>996.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>BTC/ETH</td>
                                    <td>
                                        <img src="./index_files/tick-up.png" alt="tick">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Владислав Григорьев</td>
                                    <td><span class="currency">$</span>388.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>BTC/ETH</td>
                                    <td>
                                        <img src="./index_files/tick-up.png" alt="tick">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ян Лаврентьев</td>
                                    <td><span class="currency">$</span>743.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>BTC/ETH</td>
                                    <td>
                                        <img src="./index_files/tick-up.png" alt="tick">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Богдан Худобяк</td>
                                    <td class="down"><span class="currency">$</span>726.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>ETH/LTC</td>
                                    <td>
                                        <img src="./index_files/tick-down.png" alt="tick">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Эдуард Мартынов</td>
                                    <td><span class="currency">$</span>507.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>ETH/LTC</td>
                                    <td>
                                        <img src="./index_files/tick-up.png" alt="tick">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Игорь Кириллов</td>
                                    <td><span class="currency">$</span>629.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>BTC/ETH</td>
                                    <td>
                                        <img src="./index_files/tick-up.png" alt="tick">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Юлий Повалий</td>
                                    <td><span class="currency">$</span>958.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>EOS/ETH</td>
                                    <td>
                                        <img src="./index_files/tick-up.png" alt="tick">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Игнат Шамрыло</td>
                                    <td><span class="currency">$</span>913.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>BTC/ETH</td>
                                    <td>
                                        <img src="./index_files/tick-up.png" alt="tick">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Назар Овчаренко</td>
                                    <td><span class="currency">$</span>745.00</td>
                                    <td class="trade-time-td"></td>
                                    <td>BTC/ETH</td>
                                    <td>
                                        <img src="./index_files/tick-up.png" alt="tick">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row faq-row">
            <div class="faq">
                <h2>Часто задаваемые вопросы</h2>
                <div class="faq-wrapper">
                    <div class="faq-item">
                        <div class="faq-step">1</div>
                        <div class="faq-text">
                            <h3>Какой результат я могу ожидать?</h3>
                            <p>Пользователи Биткоин Профит обычно получают минимальную прибыль в размере $1100 ежедневно.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-step">2</div>
                        <div class="faq-text">
                            <h3>Как много часов в день мне придётся работать?</h3>
                            <p>Наши пользователи работают в среднем 20 минут в день, а то и меньше. Программа берет на себя всю торговую работу, поэтому она минимизирует Ваше рабочее время.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-step">3</div>
                        <div class="faq-text">
                            <h3>Какая максимальная прибыль которую я могу получить?</h3>
                            <p>С Биткоин Профит ваша прибыль не имеет границ. Некоторые пользователи заработали первый миллион всего за 61 день.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-step">4</div>
                        <div class="faq-text">
                            <h3>Сколько стоит программа?</h3>
                            <p>Пользователи системы Биткоин Профит получают копию программы бесплатно. Чтобы стать пользователем, просто заполните форму на этой странице.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-step">5</div>
                        <div class="faq-text">
                            <h3>Является ли эта система MLM или партнерским маркетингом?</h3>
                            <p>Наша система не является MLM, партнерским маркетингом или чем-либо еще. Эта система выигрывает торги с вероятностью в 99.4%.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-step">6</div>
                        <div class="faq-text">
                            <h3>Берет ли система комиссию?</h3>
                            <p>В системе нет скрытых комиссий и комиссии брокера. Все ваши деньги на 100% ваши и вы можете с легкостью вывести их в любое время, без задержек.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-footer_form">
        <img src="./index_files/bg-bitcoin.png" alt="bitcoin" class="bg-bitcoin-absolute">
        <div class="row">
            <div class="form-block">
                <h2 class="form-text_header">ИЗМЕНИТЕ СВОЮ ЖИЗНЬ СЕГОДНЯ!</h2>

                <button class="fieldstep_btn-next fieldstep_btn-register move-to-top" type="submit">
                    <a href="#form-block" class="to-reg-link">Получить доступ сейчас! <br></a>
                </button>

            </div>
            <div class="creator-footer_form">
                <div class="creator-content">
                    <div class="header-wrapper">
                        <img src="./index_files/creator.png" alt="Creator">
                        <div class="text-group">
                            <span class="name">Иван Зиновьев</span>
                            <span class="position">Начальник отдела операций, Биткоин Профит</span>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p>Я хотел бы отнять у вас немного времени, чтобы лично поприветствовать вас в системе Биткоин Профит.</p>
                        <p>Биткоин Профит создан для того, чтобы помочь трудолюбивым людям, таким как вы, вырваться из крысиных бегов и начать наслаждаться неограниченным количеством времени и свободы.</p>
                        <p>Посмотрите видео, чтобы узнать, как активировать бесплатное программное обеспечение, которое вы получаете в качестве полноправного члена Биткоин Профит.Наше частное программное обеспечение - это ключ к зарабатыванию более 5000
                            долларов США в день.</p>
                        <p>Пожалуйста, заполните форму с вашими правильными данными, чтобы мы могли еще немного поговорить в личном кабинете. Введите свои данные прямо сейчас и увидимся там!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-footer">
        <img src="./index_files/big-logo.png" alt="Company">
    </section>
    
    <section class="section-links">
        <ul class="footer-ul">
            <li><a data-name="policy" class="alterlink" href="javascript:void(0);">Политика конфиденциальности</a></li>
            <li><a data-name="terms" class="alterlink" href="javascript:void(0);">Пользовательское соглашение</a></li>
        </ul>
    </section>

    
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./index_files/commonJs.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>