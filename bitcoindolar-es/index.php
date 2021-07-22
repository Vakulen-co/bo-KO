<?php 
include_once 'config.php'; 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gana Dinero con Bitcoin, Amazon, Apple, Google, Netflix y Facebook</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="./assets/css/owl.min.css">
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Open Graph -->
    <?php $seoText = '¡Bienvenidas!'; ?>
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

</head>

<body>
    
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <a href="javascript:void(0);" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="./assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li class="d-sm-none">
                        <a href="#formulario" class="m-0 header-button">Crear Cuenta</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header-right">
                    <a href="#formulario" class="header-button d-none d-sm-inline-block">Crear Cuenta</a>
                </div>
            </div>
        </div>
    </header>
    
    <section class="banner-1 bg_img oh" data-background="./assets/images/banner/banner-bg-1.jpg">
        <div class="dot-1 d-none d-lg-block">
            <img src="./assets/images/banner/dot-big.png" alt="banner">
        </div>
        <div class="dot-2 d-none d-lg-block">
            <img src="./assets/images/banner/dot-big.png" alt="banner">
        </div>
        <div class="dot-3">
            <img src="./assets/images/banner/dot-sm.png" alt="banner">
        </div>
        <div class="dot-4">
            <img src="./assets/images/banner/dot-sm.png" alt="banner">
        </div>
        <div class="banner-1-shape d-none d-lg-block">
            <img src="./assets/css/img/banner1-shape.png" alt="css">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content-1 cl-white">
                        <h1 class="title">Gana $500 Diarios</h1>
                        <p>Invirtiendo desde casa en Bitcoin, Amazon, Apple, Netflix, Google, Facebook...</p>




                        <div id="formulario">
                            <div class="container-form">
                                <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="CREAR CUENTA AHORA"></div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-1-slider-wrapper">
                        <div class="banner-1-slider owl-carousel owl-theme">

                            <div class="banner-thumb">
                                <img src="./assets/images/banner/banner1-2.png" alt="banner">
                            </div>
                            <div class="banner-thumb">
                                <img src="./assets/images/banner/banner1-3.png" alt="banner">
                            </div>
                        </div>
                        <div class="ban-click">
                            <div class="thumb">
                                <img src="./assets/images/banner/click.png" alt="banner">
                            </div>
                            <span class="cl-white">Clic aquí</span>
                        </div>
                        <div class="arrow">
                            <img src="./assets/images/banner/arrow.png" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="counter-four-section padding-top pt-xl-0">
        <div class="container">
            <div class="counter-wrapper-4">
                <div class="counter-area-4">
                    <div class="counter-item-4">
                        <div class="counter-thumb">
                            <img src="./assets/images/counter/counter1.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h2 class="title"><span class="counter">270</span><span>k</span></h2>
                            <p>Total Usuarios</p>
                        </div>
                    </div>
                    <div class="counter-item-4">
                        <div class="counter-thumb">
                            <img src="./assets/images/counter/counter2.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h2 class="title"><span class="counter">83</span><span>+</span></h2>
                            <p>Países</p>
                        </div>
                    </div>
                    <div class="counter-item-4">
                        <div class="counter-thumb">
                            <img src="./assets/images/counter/counter3.png" alt="counter">
                        </div>
                        <div class="counter-content">
                            <h2 class="title"><span class="counter">95</span><span>%</span></h2>
                            <p>Satisfacción</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="how-section padding-bottom padding-top" id="how">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Empezamos</h5>
                <h2 class="title">Activa tu Cuenta Ahora</h2>
                <p>Es más fácil de lo que piensas. Sigue estos 3 simples pasos</p>
            </div>
            <div class="row justify-content-xl-between justify-content-center mb-40-none">
                <div class="col-lg-4 col-sm-6 col-xl-3">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="./assets/images/how/how2.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h5 class="title">Registrate Gratis</h5>
                            <p>Rellena el formulario para crear tu cuenta</p>
                            <a href="#formulario" class="button-5">Crear Cuenta</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xl-3">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="./assets/images/how/how1.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h5 class="title">Añade Fondos</h5>
                            <p>Haz un primer depósito para activar tu cuenta</p>
                            <a href="#formulario" class="button-5">Crear Cuenta</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xl-3">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="./assets/images/how/how3.png" alt="how">
                        </div>
                        <div class="how-content">
                            <h5 class="title">Retira las Ganancias</h5>
                            <p>Empieza a generar ganancias desde el primer día</p>
                            <a href="#formulario" class="button-5">Crear Cuenta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="to-access-section padding-top padding-bottom bg_img mb-lg-5" data-background="./assets/images/feature/to-access-bg.png" id="feature">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">¿Qué te ofrecemos?</h5>
                <h2 class="title">Ganancias Seguras</h2>
                <p>Quizás el Mejor Sistema de Inversión Online que haya existido nunca para invertir en los mercado más rentables</p>
            </div>
            <div class="row mb-30 justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="to-access-item">
                        <div class="to-access-thumb">
                            <span class="anime"></span>
                            <div class="thumb">
                                <img src="./assets/images/icon/access1.png" alt="access">
                            </div>
                        </div>
                        <h5 class="title">Mayor Rentabilidad</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="to-access-item active">
                        <div class="to-access-thumb">
                            <span class="anime"></span>
                            <div class="thumb">
                                <img src="./assets/images/icon/access2.png" alt="access">
                            </div>
                        </div>
                        <h5 class="title">Alto Control</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="to-access-item">
                        <div class="to-access-thumb">
                            <span class="anime"></span>
                            <div class="thumb">
                                <img src="./assets/images/icon/access3.png" alt="access">
                            </div>
                        </div>
                        <h5 class="title">Máxima Seguridad</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="to-access-item">
                        <div class="to-access-thumb">
                            <span class="anime"></span>
                            <div class="thumb">
                                <img src="./assets/images/icon/access4.png" alt="access">
                            </div>
                        </div>
                        <h5 class="title">Mejor Soporte</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="counter-section bg_img oh pos-rel" data-background="./assets/images/bg/counter-bg.png">
        <div class="elem-1">
            <img src="./assets/images/counter/circle1.png" alt="counter">
        </div>
        <div class="elem-2">
            <img src="./assets/images/counter/round.png" alt="counter">
        </div>
        <div class="elem-3">
            <img src="./assets/images/counter/square.png" alt="counter">
        </div>
        <div class="elem-4">
            <img src="./assets/images/counter/square2.png" alt="counter">
        </div>
        <div class="elem-5">
            <img src="./assets/images/counter/tera.png" alt="counter">
        </div>
        <div class="elem-6">
            <img src="./assets/images/counter/tri1.png" alt="counter">
        </div>
        <div class="elem-7">
            <img src="./assets/images/counter/tri2.png" alt="counter">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="counter-wrapper padding-bottom padding-top">
                        <div class="section-header left-style cl-white">
                            <h5 class="cate">Máxima Transparencia</h5>
                            <h2 class="title">Control total de tus operaciones.</h2>
                            <p>Opera desde un PC, una tablet o desde el móvil. Tan sólo necesitas una conexión a Internet.</p>
                            <a href="#formulario" class="transparent-button">Crear Cuenta Gratis <i class="flaticon-right ml-xl-2"></i></a>
                        </div>


                    </div>

                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="counter-thumb-1">
                        <img src="./assets/images/counter/phn1.png" alt="counter">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="feature-section padding-top oh pos-rel padding-bottom pb-xl-0" id="feature">
        <div class="feature-shapes d-none d-lg-block">
            <img src="./assets/images/feature/feature-shape.png" alt="feature">
        </div>
        <div class="container">
            <div class="section-header mw-725">
                <h5 class="cate">Nosotros ponemos la experiencia y el conocimiento</h5>
                <h2 class="title">La Experiencia No Importa</h2>
                <p>El único sistema de inversión online que te permite ganar dinero desde casa sin importar tu nivel de experiencia en los mercado financieros.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 rtl">
                    <div class="feature--thumb style-two pr-xl-4 ltr">
                        <div class="feat-slider owl-carousel owl-theme" data-slider-id="1">
                            <div class="main-thumb"><img src="./assets/images/feature/pro-main5.png" alt="feature"></div>
                            <div class="main-thumb"><img src="./assets/images/feature/pro-main6.png" alt="feature"></div>
                            <div class="main-thumb"><img src="./assets/images/feature/pro-main7.png" alt="feature"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="feature-wrapper mb-30-none owl-thumbs" data-slider-id="1">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="./assets/images/feature/pro5.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Ejecutivo de Cuentas</h4>
                                <p>Quien te ayudará a aumentar tus inversiones desde el primer día.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="./assets/images/feature/pro2.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Ganancias Mensuales</h4>
                                <p>Empieza a generar ingresos extra desde el primer día invirtiendo desde casa.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <div class="thumb">
                                    <img src="./assets/images/feature/pro4.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Sistema Fácil de usar</h4>
                                <p>Verás como invertir y ganar dinero por Internet nunca fué tan fácil y sencillo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="feat-nav">
                        <a href="javascript:void(0);" class="feat-prev"><i class="flaticon-left"></i></a>
                        <a href="javascript:void(0);" class="feat-next active"><i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="colaboration-section padding-top-2 padding-bottom-2 oh" id="screenshot">
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse">
                <div class="col-lg-6 col-xl-7 rtl">
                    <div class="collaboration-anime-area">
                        <div class="main-thumb">
                            <img src="./assets/images/collaboration/main.png" alt="colaboration">
                        </div>
                        <div class="mobile wow slideInUp" data-wow-delay="1s">
                            <div class="show-up">
                                <img src="./assets/images/collaboration/mobile.png" alt="colaboration">
                            </div>
                            <div class="mobile-slider owl-theme owl-carousel ltr">
                                <div class="mobile-item bg_img" data-background="./assets/images/collaboration/screen2.png"></div>
                                <div class="mobile-item bg_img" data-background="./assets/images/collaboration/screen3.png"></div>
                                <div class="mobile-item bg_img" data-background="./assets/images/collaboration/screen4.png"></div>
                                <div class="mobile-item bg_img" data-background="./assets/images/collaboration/screen1.png"></div>
                            </div>
                        </div>
                        <div class="girl wow slideInLeft">
                            <img src="./assets/images/collaboration/girl.png" alt="colaboration">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="section-header left-style">
                        <h5 class="cate">Opera en cualquier momento y lugar</h5>
                        <h2 class="title">¿Cómo Invertir?</h2>
                        <p>Invertir nunca fue tan fácil y sencillo</p>
                    </div>
                    <div class="colaboration-wrapper">
                        <div class="colaboration-slider owl-carousel owl-theme">
                            <div class="colaboration-item">
                                <div class="colaboration-thumb">
                                    <div class="icon">
                                        <i class="flaticon-time-management"></i>
                                    </div>
                                </div>
                                <div class="colaboration-content">
                                    <h4 class="title">Elige el Activo</h4>
                                    <p>Te ofrecemos los activos más rentables y populares del mercado</p>
                                </div>
                            </div>
                            <div class="colaboration-item">
                                <div class="colaboration-thumb">
                                    <div class="icon">
                                        <i class="flaticon-data-management"></i>
                                    </div>
                                </div>
                                <div class="colaboration-content">
                                    <h4 class="title">Selecciona la operación</h4>
                                    <p>Compra o vende el activo recomendado de mayor éxito</p>
                                </div>
                            </div>
                            <div class="colaboration-item">
                                <div class="colaboration-thumb">
                                    <div class="icon">
                                        <i class="flaticon-share"></i>
                                    </div>
                                </div>
                                <div class="colaboration-content">
                                    <h4 class="title">Controla los Beneficios</h4>
                                    <p>Observa como el sistema genera ingresos de forma inmediata</p>
                                </div>
                            </div>
                            <div class="colaboration-item">
                                <div class="colaboration-thumb">
                                    <div class="icon">
                                        <i class="flaticon-reload"></i>
                                    </div>
                                </div>
                                <div class="colaboration-content">
                                    <h4 class="title">Retira los beneficios</h4>
                                    <p>Retira las ganancias generadas de forma periódica</p>
                                </div>
                            </div>
                        </div>
                        <div class="cola-nav">
                            <a href="javascript:void(0);" class="cola-prev mr-4">
                                <img src="./assets/images/collaboration/left.png" alt="colaboration">
                            </a>
                            <a href="javascript:void(0);" class="cola-next">
                                <img src="./assets/images/collaboration/right.png" alt="colaboration">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="feature-video-section padding-top ash-gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-header mw-100">
                        <h5 class="cate">Invertir al alcance de todos</h5>
                        <h2 class="title">Seguro y con Garantias</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <p>Controla tus inversiones, operaciones realizadas, activos y las ganancias acumuladas desde un panel de control único</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="pos-rel mw-100">
                        <img class="w-100" src="./assets/images/feature/feature-video.png" alt="bg">

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="addon-section padding-bottom padding-top oh" id="addon">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header pb-30 mw-100">
                        <h5 class="cate">Alta rentabilidad</h5>
                        <h2 class="title">Los activos más populares</h2>
                        <p>Invierte en Bitcoin, Ethereum, Amazon, Apple, Google, Netflix, Facebook, Tesla...<br> Los activos más rentables del mercado</p>
                        <a href="#formulario" class="button-4">Abrir Cuenta</a>

                    </div>
                </div>
            </div>

            <div class="addon-wrapper">
                <div class="addon-center">
                    <img src="./assets/images/addon/center.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon1.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon2.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon3.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon4.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon5.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon6.png" alt="addon">
                </div>
                <div class="item">
                    <img src="./assets/images/addon/addon7.png" alt="addon">
                </div>
            </div>
        </div>
    </section>
    
    <section class="trial-section padding-bottom padding-top">
        <div class="container">
            <div class="trial-wrapper padding-top padding-bottom pr">
                <div class="ball-1">
                    <img src="./assets/images/balls/balls.png" alt="balls">
                </div>
                <div class="trial-content cl-white">
                    <h3 class="title">¡Crea tu cuenta gratuita y empieza a generar ganancias hoy mismo!</h3>
                </div>
                <div class="trial-button">
                    <a href="#formulario" class="transparent-button">Crear Cuenta Gratis <i class="flaticon-right ml-xl-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonial-section padding-top pt-lg-half padding-bottom pos-rel oh">
        <div class="container">
            <div class="ball-3 style2 d-none d-lg-block" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="./assets/images/client/circle2.png" alt="client">
            </div>
            <div class="ball-6 style2 d-none d-lg-block" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="./assets/images/client/circle1.png" alt="client">
            </div>
            <div class="row justify-content-between flex-wrap-reverse align-items-center">
                <div class="col-lg-7">
                    <div class="testimonial-wrapper style-two">
                        <a href="javascript:void(0);" class="testi-next trigger">
                            <img src="./assets/images/client/left.png" alt="client">
                        </a>
                        <a href="javascript:void(0);" class="testi-prev trigger">
                            <img src="./assets/images/client/right.png" alt="client">
                        </a>
                        <div class="testimonial-area testimonial-slider owl-carousel owl-theme">
                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <div class="thumb"><img src="./assets/images/client/client1.jpg" alt="client"></div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <p>Muy buena manera de inversión. Sin preocupaciones para gente que no tiene mucho tiempo. Lo recomiendo a mis amigos y familiares</p>
                                    <h5 class="title"><a href="javascript:void(0);">Jaime Hurtado</a></h5>
                                </div>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <div class="thumb"><img src="./assets/images/client/client2.jpg" alt="client"></div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <p>Fantástico sistema de inversiones. Muy sensillo, seguro y excelentes beneficios todos los meses. </p>
                                    <h5 class="title"><a href="javascript:void(0);">Ana Belén</a></h5>
                                </div>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <div class="thumb"><img src="./assets/images/client/client3.jpg" alt="client"></div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <p>Muy claros y transparentes en todo, y, por supuesto, el mejor sitio donde ganar un dinero extra.</p>
                                    <h5 class="title"><a href="javascript:void(0);">Marcela Ruiz</a></h5>
                                </div>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <div class="thumb"><img src="./assets/images/client/client4.jpg" alt="client"></div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <p>Excelente plataforma de inversión. Gestión de alta calidad, transparente, eficiente y confiable. No podría estar más satisfecho.</p>
                                    <h5 class="title"><a href="javascript:void(0);">Daniel Cruz</a></h5>
                                </div>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-thumb">
                                    <div class="thumb"><img src="./assets/images/client/client5.jpg" alt="client"></div>
                                </div>
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <p>Hasta el momento todo perfecto. Claridad, transparencia y genial atención cuando lo he necesitado. Recomendable.</p>
                                    <h5 class="title"><a href="javascript:void(0);">Madelyn Estrada</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testi-wrapper">
                        <div class="testi-header">
                            <div class="section-header left-style">
                                <h5 class="cate">Testimonios</h5>
                                <h2 class="title">+270.000 felices clientes en todo el mundo</h2>
                            </div>
                            <a href="#formulario" class="button-3 active">Abrir Cuenta <i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="coverage-section padding-top padding-bottom" id="coverage">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-header left-style coverage-header">
                        <h5 class="cate">Nuestras estadísticas lo dicen todo</h5>
                        <h2 class="title">Cobertura Global</h2>
                        <p>Con un crecimiento del 20% anual en el número de nuevos usuarios, ya somos más de 270.000.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="coverage-right-area text-lg-right">
                        <div class="rating-area">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <span class="average">4.8 / 5.0</span>
                        </div>
                        <h2 class="amount">+253,715</h2>
                        Total Opiniones <i class="fas fa-paper-plane"></i>
                    </div>
                </div>
            </div>
            <div class="coverage-wrapper bg_img" data-background="./assets/images/bg/world-map.png">
                <div class="border-item-1">
                    <span class="name">North America</span>
                    <h2 class="title">11.3%</h2>
                </div>
                <div class="border-item-2">
                    <span class="name">Asia</span>
                    <h2 class="title">5.1%</h2>
                </div>
                <div class="border-item-3">
                    <span class="name">Europe</span>
                    <h2 class="title">15.4%</h2>
                </div>
                <div class="border-item-4">
                    <span class="name">South America</span>
                    <h2 class="title">63.7%</h2>
                </div>
                <div class="border-item-5">
                    <span class="name">Africa</span>
                    <h2 class="title">1.5%</h2>
                </div>
                <div class="border-item-6">
                    <span class="name">Australia</span>
                    <h2 class="title">3%</h2>
                </div>
            </div>
        </div>
    </section>
    
    <section class="sponsor-section padding-top-2 padding-bottom">
        <div class="container">
            <div class="section-header mw-100">
                <h5 class="cate">Seguridad y Calidad lo primero </h5>
                <h2 class="title">Compañias que confian en nosotros</h2>
            </div>
            <div class="sponsor-slider-4 owl-theme owl-carousel">
                <div class="sponsor-thumb">
                    <img src="./assets/images/sponsor/s1.png" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="./assets/images/sponsor/s2.png" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="./assets/images/sponsor/s3.png" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="./assets/images/sponsor/s4.png" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="./assets/images/sponsor/s5.png" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="./assets/images/sponsor/s6.png" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="./assets/images/sponsor/s7.png" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="./assets/images/sponsor/s8.png" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="./assets/images/sponsor/s9.png" alt="sponsor">
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer-section bg_img" data-background="./assets/images/footer/footer-bg.jpg">
        <div class="container">
            <div class="footer-top padding-top padding-bottom">
                <div class="logo">
                    <a href="javascript:void(0);">
                        <img src="./assets/images/logo/footer-logo.png" alt="logo">
                    </a>
                </div>
                <ul class="social-icons">
                    <li>
                        <a><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a class="active"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <ul class="footer-link">
                    <li><a href="#formulario">Crear Cuenta</a></li>
                    <li><a href="javascript:void(0);" data-name="policy" class="alterlink">Política de Privacidad</a></li>
                    <li><a href="javascript:void(0);" data-name="terms" class="alterlink">Términos y Condiciones</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>
                    Copyright © 2020.All Rights Reserved By <a href="#formulario">Bitcoin-Dolar</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/modernizr-3.6.0.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/magnific-popup.min.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/waypoints.js"></script>
    <script src="./assets/js/nice-select.js"></script>
    <script src="./assets/js/owl.min.js"></script>
    <script src="./assets/js/counterup.min.js"></script>
    <script src="./assets/js/paroller.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>

</body>

</html>