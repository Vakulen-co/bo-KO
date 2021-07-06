<?php
    include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <base href="<?php echo $base ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amazon website</title>
    <!-- Open Graph -->
    <link rel="shortcut icon" href="assets/fav.png" type="image/x-icon" />
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
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/responsive.css">
</head>

<body>
    <section class="hero_area" id="topForm">
        <div class="hero_bg"></div>
        <div class="hero_area_content_top">
            <div class="hero_area_content">
                <div class="hero_txt_1">
                    <h2 style="margin-top:-10px">Инвестируй в лучшее:</h2>
                    <a>
                        <img src="assets/amazon-logo.png">
                    </a>
                </div>
                <div class="hero_area_content_down desktop_none">
                    <p>Инвестируйте и узнайте, как получить дополнительный пассивный доход от трейдинга акциями Amazon
                    </p>
                </div>
                <div class="banner_item1">
                    <div class="form_main">
                        <div class="form_title">
                            <h3>Узнайте, как зарабатывать деньги Инвестируя в <span>Amazon</span></h3>
                        </div>
                        <div class="form_area">
                            <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Получите информацию бесплатно"></div>
                            <div class="form_area_txt">
                                <div class="privacy-checkbox">
                                    <p>
                                        Я даю согласие на сбор адреса моей электронной почты в целях получения
                                        коммерческих предложений, которые, по нашему мнению, будут представлять
                                        интерес для вас от имени компаний и отраслей, подробно описанных в наших
                                        <a href="javascript:void(0)" data-name="terms" class="alterlink"> Условиях пользования</a>
                                        и
                                        <a href="javascript:void(0)" data-name="policy" class="alterlink"> Политике конфиденциальности.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="hero_area_content_down mobile_none">
            <p>Инвестируйте и узнайте, как получить дополнительный пассивный доход от трейдинга акциями Amazon</p>
        </div>
    </section>
    <section class="feature_area">
        <div class="container">
            <div class="feature_title">
                <h3 class="feature_title_h3">Начать легко! Получите доступ к:</h3>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="feature_item">
                        <img src="assets/icons-1.png">
                        <p>Заработку с вашим аккаунтом 24/7</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="feature_item">
                        <img src="assets/icons-2.png">
                        <p>Безопасной и авторизированной платформе</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="feature_item">
                        <img src="assets/icons-3.png">
                        <p>Высокой рентабельности</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="feature_item">
                        <img src="assets/icons-4.png">
                        <p>Простым и понятным инструментам обучения</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="down_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="down_area_content">
                        <h3>Настоящая "Компания на миллиард долларов"</h3>
                        <p>В 2019 году рыночная капитализация Amazon достигла 1 триллиона долларов.
                            По данным Bloomberg, к 2025 году Amazon может достичь годовой валовой прибыли более 1
                            триллиона долларов.</p>
                        <p>Благодаря растущим рыночным доходам Amazon является бесспорным лидером.
                            Инвесторы и частные лица, участвующие в бизнес-модели Amazon, и в дальнейшем продолжат
                            извлекать выгоду из перспектив роста Amazon.</p>
                        <div class="down_area_btn">
                            <a href="#topForm">
                                <button type="button" class="toTop-btn btn toTop">Узнайте как получить прибыль от
                                    инвестиций в Amazon</button>
                            </a>
                            <br><br><br><br>
                            <div class="btn-wrap" style="display: flex; flex-direction: column; align-items: center; margin-top: 25px;">
                                <h3 style="text-align: center;">
                                    Зарегистрируйтесь сейчас, чтобы получить бесплатный доступ и консультацию
                                </h3>
                                <a href="#topForm" style="background-color: #00C900;color: white;cursor: pointer;text-decoration: none;border-radius: 5px;display: flex;align-items: center;justify-content: center;width: 300px;height: 50px;margin-top: 25px;font-weight: 600;font-size: 18px;margin-bottom: 25px;">Получить доступ</a>
                            </div>
                            <center><span style="color:#fff;font-size:8px;">
                                    TRADING IS NOT SUITABLE FOR EVERYONE. TRADING FOREX INVOLVES HIGH RISKS AND CAN
                                    CAUSE YOU A COMPLETE
                                    LOSS OF YOUR FUNDS! Trading foreign exchange on margin carries a HIGH LEVEL OF RISK,
                                    and may not be
                                    suitable for all investors. Before deciding to trade foreign exchange you should
                                    carefully consider
                                    your investment objectives, level of experience, and risk appetite. The possibility
                                    exists that you
                                    could sustain a loss of some or all of your initial investment and therefore you
                                    should not invest
                                    money that you cannot afford to lose! The high degree of leverage associated with
                                    trading currencies
                                    means that the degree of risk compared to other financial products is higher.
                                    Leverage (or margin
                                    trading) may work against you resulting in substantial loss.
                                    There is considerable exposure to risk in any off-exchange foreign exchange
                                    transaction, including,
                                    but not limited to, leverage, creditworthiness, limited regulatory protection and
                                    market volatility
                                    that may substantially affect the price, or liquidity of a currency or currency
                                    pair. You should be
                                    aware of all the risks associated with foreign exchange trading, and seek advice
                                    from an independent
                                    financial advisor if you have any doubts. Market Opinions PriceActionLtd will not
                                    accept liability for
                                    any loss or damage, including without limitation to, any loss of profit, which may
                                    arise directly or
                                    indirectly from use of or reliance on such information. YOU are fully responsible
                                    for any investment
                                    decisions you make. Such decisions should be based solely on your evaluation of your
                                    financial
                                    circumstances, investment objectives, risk tolerance and liquidity needs.
                                </span>
                            </center>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>