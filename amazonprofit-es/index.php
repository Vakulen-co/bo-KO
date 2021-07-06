<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <base href="<?php echo $base ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon-vici.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Vici</title>
    <!-- Open Graph -->
    <?php $seoText = 'Bienvenidos'; ?>
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
</head>

<body>

    <div class="wrapper">
        <img class="img-fluid d-block d-sm-none header-image lp-action" src="assets/images/header-mobile.png">

        <header>
            <div class="header">
                <img id="girl" src="assets/images/girl.png" class="img-fluid">

                <div class="container">
                    <div class="row">

                        <div class="col-12 col-sm-7 col-lg-4 col-xl-4 offset-sm-5 offset-lg-3 offset-xl-4">
                            <div class="content">
                                <h1 class="lp-action">Acciones de Amazon </h1>
                                <h2>¿COMPRAR, VENDER O CONSERVAR?</h2>
                                <p class="pt-3"><strong>La respuesta correcta es:</strong> Comerciar únicamente para obtener verdaderas oportunidades de ganancia. </p>
                                <p>La magia de comerciar en línea es que aunque las acciones se desplomen o suban de precio, siempre existe potencial de ganar, en ambas direcciones del mercado.</p>
                                <p><strong>Si quiere invertir su dinero, invierta donde pueda producirle más.</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blue-section d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-7 col-xl-8">
                            <div class="content lp-action">
                                <p class="lp-action">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <section class="form-container">
                    <div class="nxreg">
                        <div class="nx-signup nxreg-form">
                            <div id="formfull" class="nx-signup-form nx-signup__form">
                            <div style="background-color: #EFEFEF; border-radius: 10px 10px 0px 0px;">
                                <h2>Obtenga más información <br>
                                    ahora</h2>
                            </div>
                                <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Empiece a ganar ahora"></div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>


            <div id="calculator-section" class="calculator-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <p>Descubra sus beneficios potenciales
                            </p>
                        </div>

                        <div id="grey-box" class="col-12 col-lg-6 grey-box">
                            <p class="title-calc">Inversion inicial</p>
                            <br>
                            <div id="euro" type="text">$</div>
                            <input name="initial-value" id="initial-value" class="rounded" type="number">
                            <button type="submit" class="calc-btn">CALCULAR</button>
                            <div style="font-size: 16px;;" class="error-msg-calc pt-2"></div>
                        </div>
                        <div class="col-12 col-lg-6 orange-box">
                            <p class="title-calc lp-action" style="color: #343434">Ganancias potenciales</p>
                            <br>
                            <div id="euro" type="text">$</div>

                            <input id="potencial-value" name="potencial-value" class="rounded" type="text" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="gray-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3>Regístrese y obtenga:
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg box">
                            <img class="lp-action" src="assets/images/3.png">
                            <p>Herramientas comerciales profesionales
                            </p>
                        </div>
                        <div class="col-12 col-lg box">
                            <img class="lp-action" src="assets/images/5.png">
                            <p>Atención multilingüe las 24 horas
                            </p>
                        </div>

                        <div class="col-lg box">
                            <img class="lp-action" src="assets/images/2.png">
                            <p>Acceso a una amplia variedad de activos negociables </p>
                        </div>
                        <div class="col-lg box">
                            <img class="lp-action" src="assets/images/4.png">
                            <p>Plataforma de negociación avanzada
                            </p>
                        </div>

                        <div class="col-lg mr-lg-0 box">
                            <img class="lp-action" src="assets/images/1.png">
                            <p>Herramientas de aprendizaje simples
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <button class="cta-btn lp-action mt-2 mt-lg-5 uppercase">Empiece a ganar ahora
            </button>
                    </div>
                    <div class="col-12 pt-3">
                        <img class="img-fluid d-block mx-auto" src="assets/images/dss.png">
                        <br><br><br>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-3">
                    <a href="#formfull" class="lp-action">
                        <img src="assets/images/logo.png" class="img-fluid logo d-block d-md-inline mx-auto">
                    </a>
                </div>

                <div class="col-lg-12 nav-row text-center">
                    <br>
                    <div>
                    <a href="javascript:void(0)" data-name="terms" class="alterlink">Terms of use</a>
                    <a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy policy</a>
                    </div>
                    <br>
                </div>

                <div class="col-12">
                    <div data-lgl="disclaimer">
                        <p>*Por favor, lea la Política de Privacidad y los Términos y Condiciones antes de continuar.</p>
                        Usted hace uso de las páginas web de brokers a su propio riesgo. Este anuncio no debe interpretarse como una oferta para participar en el trading online dirigida a clientes que residan en jurisdicciones en las que dicha oferta no esté autorizada. El trading
                        online puede provocar una pérdida completa o sustancial de fondos. El uso de las cookies es necesario para la funcionalidad de la página web, el suministro de los servicios y una mejor experiencia de usuario. Para saber más,
              haga clic aquí
                          
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>