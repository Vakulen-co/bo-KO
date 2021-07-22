<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <base href="<?php echo $base ?>">
        <meta charset="UTF-8">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>bitcoin UP</title>
        <link href="assets/images/favicon.png" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
        <!-- Open Graph -->
        <?php $seoText = '¡Bienvenidos!'; ?>
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
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    $('.hover-modal').css('display', 'block')
                }, 30000);
            })
        </script>
        <section class="popup">
            <div class="hover-modal" style="display: none;"></div>
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
                                                <p>¡ESPERA!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="popup-info">
                                                <p class="popup-h">Antes de que te vayas...</p>
                                                <p>Los mercados se mueven rápido. No pierdas la oportunidad de beneficiarte de las últimas subidas y bajadas. </p>
                                                <p>¡Regístrate hoy y te <span>sorprenderás</span> cuando retires tus ganancias <span>de dos semanas!</span></p>
                                            </div>
                                            <div class="popup-img">
                                                <img src="assets/images/phone-footer.png">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-block">
                                                <div class="preloader"></div>
                                                <div class="form form-pop">
                                                    <div class="head-form">
                                                        <p>¡Cambia tu vida <span>hoy!</span></p>
                                                    </div>
                                                    <div class="close-scroll" style="
                                                        width: 100%;
                                                        background: #E6AE5C;
                                                        border: none;
                                                        height: 65px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        margin-top: 5%;
                                                        font-family: Lato;
                                                        font-style: normal;
                                                        font-weight: bold;
                                                        font-size: 24px;
                                                        line-height: 29px;
                                                        text-align: center;
                                                        color: #FAFAFF;
                                                        cursor: pointer;">¡Únete ahora!</div>
                                                </div>
                                            </div>
                                            <div class="protected-block-pop">
                                                <div class="protected-img-pop">
                                                    <img src="assets/images/logo-secure-pop.png">
                                                </div>
                                                <div class="protected-info-info">
                                                    <p><br><span>Tus datos siempre están protegidos con nosotros. </span></br>
                                                        Puedes cambiar de opinión en cualquier momento haciendo clic en el enlace para cancelar la suscripción situado en el pie de página de cualquier correo electrónico que recibas de nosotros. Trataremos tu información con respeto. Al hacer clic arriba, aceptas
                                                        que podamos procesar tu información de acuerdo con estos términos.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="final-img-pop">
                                                <img src="assets/images/card-logo.png">
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
                <div class="header-atenttion">
                    <p>- Advertorial -</p>
                </div>
                <div class="flex-head">
                    <div class="countdown-mob mob">
                        <img src="assets/images/attention-mob.png">
                        <span class="countdown-span" id="timer"> 05:30</span>
                    </div>
                    <div class="head-w-2">
                        <b data-i18n="warning">ATENCIÓN</b>: <span data-i18n="due-to"> El registro se cerrará pronto. </span>
                        <span><b>Apúrate </b> y únete al mejor Sistema Financiero Cripto en línea!</span><span data-i18n=""><b>
                        <span class="dect">⚠️</span><span class="countdown-span1 dect" id="timer1"> 05:30</span></b>
                        </span>
                        </b>
                    </div>
                </div>
            </div>
        </section>
        <section class="video-form-section">
            <div class="section-2-btc dect">
                <div class="container">
                    <div class="btc-body">
                        <div>
                            <img src="assets/images/btc-logo.png">
                        </div>
                        <div class="btc-right">
                            <p>bitcoin Market cap <img src="assets/images/arow-up.png"> <span> <span class="currency">€</span>143,584,911,738</span>
                                bitcoin <img src="assets/images/arow-up.png"> <span class="corency"> € 8,874.68</span>
                            </p>
                        </div>
                    </div>
                    <div class="btc-footer">
                        <p><span>Una manera rápida y efectiva</span> de hacerse rico</p>
                    </div>
                </div>
            </div>
            <div class="section-2-btc mob">
                <p>bitcoin Market cap <span> <span class="currency">€</span>143,584,911,738</span>
                </p>
                <div class="btc-body">
                    <div>
                        <img src="assets/images/btc-logo.png">
                    </div>
                    <div class="btc-right">
                        <p>bitcoin</p>
                        <p class="corency"><span class="currency">€</span>8,874.68</p>
                    </div>
                </div>
                <div class="btc-footer">
                    <p><span>Una manera rápida y efectiva</span> de hacerse rico</p>
                </div>
            </div>
            <div class="container">
                <h1 class="video-header" data-i18n="">
                    Invierte hoy y conviértete en <span>el próximo millonario...</span>
                </h1>
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <img src="assets/images/form-headr.png" class="mob form-headr">
                        <div class="video-wrapper">
                            <div class="video embed-responsive embed-responsive-16by9">
                                <video src="assets/video/bitcoinup_app_es.mp4" autoplay mute controls="true" width="100%" playsinline type="video/mp4"></video>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 form-mob">
                        <div class="form" id="formfull">
                            <div class="preloader"></div>
                            <div class="head-form">
                                <p>¡Cambia tu vida <span>hoy!</span></p>
                            </div>
                            <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="¡Únete ahora!"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="logos-section">
            <div class="container">
            </div>
        </section>
        <section class="join-us-section">
            <div class="container">
                <div class="row-block">
                    <img src="assets/images/mcafee.png">
                    <img src="assets/images/bitgo.png">
                    <img src="assets/images/visa.png">
                    <img src="assets/images/mastercard.png">
                    <div class="protected-block">
                        <div class="protected-img">
                            <img src="assets/images/logo-secure.png">
                        </div>
                        <div class="protected-info">
                            <p><br><span>Tus datos siempre están protegidos con nosotros. </span></br>
                                Puedes cambiar de opinión en cualquier momento haciendo clic en el enlace para cancelar la suscripción situado en el pie de página de cualquier correo electrónico que recibas de nosotros. Trataremos tu información con respeto. Al hacer clic arriba, aceptas
                                que podamos procesar tu información de acuerdo con estos términos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="protected-info-mob mob">
                    <div class="protected-img">
                        <img src="assets/images/logo-secure.png">
                    </div>
                    <p><br><span>Tus datos siempre están protegidos con nosotros. </span></br>
                        Puedes cambiar de opinión en cualquier momento haciendo clic en el enlace para cancelar la suscripción situado en el pie de página de cualquier correo electrónico que recibas de nosotros. Trataremos tu información con respeto. Al hacer clic arriba, aceptas
                        que podamos procesar tu información de acuerdo con estos términos.
                    </p>
                </div>
            </div>
        </section>
        <section class="steps-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="steps-info-h mob">
                            <p>Gana dinero en línea <br>
                                <span>más de <span class="currency">€</span>1,000 al día <br></span>
                                <span class="k-italic"> ¡con bitcoin UP!</span>
                            </p>
                        </div>
                        <img src="assets/images/girl.jpg">
                        <div class="btn-block-form">
                            <button>Abrir cuenta GRATUITA</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 girl-info">
                        <div class="steps-info-h dect">
                            <p>Gana dinero en línea <br><span>más de <span
                                class="currency">€</span>1,000 al día <br></span>
                            <p class="p-italic"> ¡con bitcoin UP!</p>
                            </p>
                        </div>
                        <div class="steps-info-b">
                            <p><span>¡Precaución! La próxima semana dejarás de trabajar, porque durante los últimos 5 años, los algoritmos de nuestra Plataforma en línea han enriquecido a la gente y la han hecho financieramente libre.</span>
                            </p>
                            <p>Somos <a class="scroll-form">bitcoin UP</a> - ¡un grupo de personas que se han subido a los retornos locos de Bitcoin y se han enriquecido tranquilamente!</p>
                            <p>Haz click en <a class="scroll-form">"Abrir cuenta gratis"</a>, consigue tu afortunado billete al mundo de las oportunidades de Bitcoin.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="winners-block winners-block-mob mob">
            <div class="container">
                <div class="steps-header-puple">
                    <p>Historias de <span>éxito más calientes</span></p>
                </div>
                <div class="row winner-click">
                    <div class="winners-img">
                        <img src="assets/images/winner-1.jpg">
                    </div>
                    <div class="winners-info">
                        <p class="winners-city">Barcelona</p>
                        <p>Isabel Gomez
                            <span> <br><span class="currency">€</span>7.495,32</span>
                            </br>
                        </p>
                        <div class="more-info">
                            <img src="assets/images/arrow-more.png">
                            <p>haga clic para leer más...</p>
                        </div>
                    </div>
                    <div class="winners-info-hide" style="display: none;">
                        <p>“Hace medio año me despidieron. </p>
                        <p>Debido a la falta de experiencia, no pude conseguir un trabajo por mucho tiempo. Unos amigos recomendaron a <a class="scroll-form"> bitcoin UP</a>. </p>
                        <p>Al principio trabajé con la plataforma yo mismo y una semana después la cuenta era de - <span class="currency">€</span>10. ¡Un gerente se puso en contacto conmigo y me explicó cómo trabajar con el algoritmo correctamente y tres semanas
                            después mi ingreso diario era de más de <span class="currency">€</span>1,000! 
                        </p>
                        <p> ¡Gracias, <a class="scroll-form">bitcoin UP</a>!“</p>
                        <p></p>
                        <p></p>
                        <div class="arrow-hide">
                            <img src="assets/images/arrow-hide.png">
                        </div>
                    </div>
                </div>
                <div class="row winner-click" style="border: 3px solid #E6AE5C;">
                    <div class="winners-img">
                        <img src="assets/images/winner-4.jpg">
                    </div>
                    <div class="winners-info">
                        <p class="winners-city">Granada</p>
                        <p>Antonio Rodriguez
                            <span> <br><span class="currency">€</span>15.574,35</span>
                            </br>
                        </p>
                        <div class="more-info" style="display: none;">
                            <img src="assets/images/arrow-more.png">
                            <p>haga clic para leer más...</p>
                        </div>
                    </div>
                    <div class="winners-info-hide" style="display: block;">
                        <p>“A los 42 años, estaba desesperado por las grandes deudas de los préstamos.</p>
                        <p>Afortunadamente, oí hablar de <a class="scroll-form">bitcoin UP </a> y decidí invertir en la plataforma - después de 3 meses pagué todos los préstamos. Ahora alquilo una gran casa y le regalé a mi novia un coche para su cumpleaños.</p>
                        <p>Con <a class="scroll-form">bitcoin UP</a>, ¡estoy en camino de convertirme en millonario!“
                        </p>
                        <p></p>
                        <p></p>
                        <div class="arrow-hide">
                            <img src="assets/images/arrow-hide.png">
                        </div>
                    </div>
                </div>
                <div class="row winner-click">
                    <div class="winners-img">
                        <img src="assets/images/winner-3.jpg">
                    </div>
                    <div class="winners-info">
                        <p class="winners-city">Barcelona</p>
                        <p>Manuel Diaz
                            <span> <br><span class="currency">€</span>8.943,32</span>
                            </br>
                        </p>
                        <div class="more-info">
                            <img src="assets/images/arrow-more.png">
                            <p>haga clic para leer más...</p>
                        </div>
                    </div>
                    <div class="winners-info-hide" style="display: none;">
                        <p>“He estado con la plataforma sólo 35 días, solía perder mi dinero en las apuestas deportivas y mi vida estaba devastada. </p>
                        <p>Un poco más tarde vi un anuncio de una página en Facebook y decidí probar <a class="scroll-form"> bitcoin
                            UP</a>!
                        </p>
                        <p>¡Ya después de las dos primeras semanas dejé mi trabajo en la oficina!“</p>
                        <p></p>
                        <p></p>
                        <div class="arrow-hide">
                            <img src="assets/images/arrow-hide.png">
                        </div>
                    </div>
                </div>
                <div class="row winner-click">
                    <div class="winners-img">
                        <img src="assets/images/winner-2.jpg">
                    </div>
                    <div class="winners-info">
                        <p class="winners-city">Madrid</p>
                        <p>Сarmen Gonzalez
                            <span> <br><span class="currency">€</span>11.909,36</span>
                            </br>
                        </p>
                        <div class="more-info">
                            <img src="assets/images/arrow-more.png">
                            <p>haga clic para leer más...</p>
                        </div>
                    </div>
                    <div class="winners-info-hide" style="display: none;">
                        <p>“Hace un par de años mi marido me dejó y empecé a criar a mis dos hijos yo sola.</p>
                        <p>No podía permitirme enviar a mi hija a la universidad. No había nada que perder, así que invertí en
                            <a class="scroll-form">bitcoin UP</a>.
                        </p>
                        <p>Para mi sorpresa, pude pagar la universidad y pagar mis préstamos. ¡Ahora trabajo en casa por Internet durante 20-30 minutos al día y puedo dedicar el tiempo suficiente para criar a mis hijos!“</p>
                        <p></p>
                        <p></p>
                        <div class="arrow-hide">
                            <img src="assets/images/arrow-hide.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="winners-block dect">
            <div class="container">
                <div class="steps-header-puple">
                    <p>Historias de <span>éxito más calientes</span></p>
                </div>
                <div class="row">
                    <div class="steps-block steps-1">
                        <div class="col-md-4">
                            <div class="winners-puple winner-jade">
                                <img src="assets/images/winner-1.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Barcelona</p>
                                    <p class="winner-name">Isabel Gomez<br>
                                        <span><span class="currency">€</span>7.495,32</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                            <div class="winners-puple winner-karen">
                                <img src="assets/images/winner-2.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Madrid</p>
                                    <p class="winner-name">Сarmen Gonzalez<br>
                                        <span><span class="currency">€</span>11.909,36</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                            <div class="winners-puple winner-steven">
                                <img src="assets/images/winner-3.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Barcelona</p>
                                    <p class="winner-name">Manuel Diaz<br>
                                        <span><span class="currency">€</span>8.943,32</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="winner-big-block">
                                <img src="assets/images/winner-4-big.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Granada</p>
                                    <p class="winner-name">Antonio Rodriguez<br>
                                        <span><span class="currency">€</span>15.574,35</span>
                                        </br>
                                    </p>
                                    <p class="winner-big-info">“A los 42 años, estaba desesperado por las grandes deudas de los préstamos.</p>
                                    <p class="winner-big-info">Afortunadamente, oí hablar de <a class="scroll-form">bitcoin
                                        UP</a> y decidí invertir en la plataforma - después de 3 meses pagué todos los préstamos. 
                                    </p>
                                    <p class="winner-big-info">Ahora alquilo una gran casa y le regalé a mi novia un coche para su cumpleaños. </p>
                                    <p class="winner-big-info">Con <a class="scroll-form">bitcoin UP</a>, ¡estoy en camino de convertirme en millonario!“
                                    </p>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="steps-block steps-2" style="display: none;">
                        <div class="col-md-4">
                            <div class="winners-puple winner-william">
                                <img src="assets/images/winner-4.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Granada</p>
                                    <p class="winner-name">Antonio Rodriguez<br>
                                        <span><span class="currency">€</span>15.574,35</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                            <div class="winners-puple winner-karen">
                                <img src="assets/images/winner-2.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Madrid</p>
                                    <p class="winner-name">Сarmen Gonzalez<br>
                                        <span><span class="currency">€</span>11.909,36</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                            <div class="winners-puple winner-steven">
                                <img src="assets/images/winner-3.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Barcelona</p>
                                    <p class="winner-name">Manuel Diaz<br>
                                        <span><span class="currency">€</span>8.943,32</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="winner-big-block">
                                <img src="assets/images/winner-1-big.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Barcelona</p>
                                    <p class="winner-name">Isabel Gomez<br>
                                        <span><span class="currency">€</span>7.495,32</span>
                                        </br>
                                    </p>
                                    <p class="winner-big-info">“Hace medio año me despidieron.</p>
                                    <p class="winner-big-info">Debido a la falta de experiencia, no pude conseguir un trabajo por mucho tiempo. Unos amigos recomendaron a <a class="scroll-form">bitcoin
                                        UP</a>. Me registré y pagué <span class="currency">€</span>230. Al principio trabajé con la plataforma yo mismo y una semana después la cuenta era de - <span class="currency">€</span>10.
                                    </p>
                                    <p class="winner-big-info">¡Un gerente se puso en contacto conmigo y me explicó cómo trabajar con el algoritmo correctamente y tres semanas después mi ingreso diario era de más de <span class="currency">€</span>1,000! ¡Gracias,
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
                                <img src="assets/images/winner-1.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Barcelona</p>
                                    <p class="winner-name">Isabel Gomez<br>
                                        <span><span class="currency">€</span>7.495,32</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                            <div class="winners-puple winner-william">
                                <img src="assets/images/winner-4.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Granada</p>
                                    <p class="winner-name">Antonio Rodriguez<br>
                                        <span><span class="currency">€</span>15.574,35</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                            <div class="winners-puple winner-karen">
                                <img src="assets/images/winner-2.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Madrid</p>
                                    <p class="winner-name">Сarmen Gonzalez<br>
                                        <span><span class="currency">€</span>11.909,36</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="winner-big-block">
                                <img src="assets/images/winner-3-big.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Barcelona</p>
                                    <p class="winner-name">Manuel Diaz<br>
                                        <span><span class="currency">€</span>8.943,32</span>
                                        </br>
                                    </p>
                                    <p class="winner-big-info">“He estado con la plataforma sólo 35 días, solía perder mi dinero en las apuestas deportivas y mi vida estaba devastada.</p>
                                    <p class="winner-big-info">Un poco más tarde vi un anuncio de una página en Facebook y decidí probar <a class="scroll-form">bitcoin UP</a>!</p>
                                    <p class="winner-big-info">¡Ya después de las dos primeras semanas dejé mi trabajo en la oficina!</p>
                                    <p class="winner-big-info">¡Ahora mis amigos y yo planeamos viajar todo el año!“
                                    </p>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="steps-block steps-4" style="display: none;">
                        <div class="col-md-4">
                            <div class="winners-puple winner-jade">
                                <img src="assets/images/winner-1.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Barcelona</p>
                                    <p class="winner-name">Isabel Gomez<br>
                                        <span><span class="currency">€</span>7.495,32</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                            <div class="winners-puple winner-william">
                                <img src="assets/images/winner-4.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Granada</p>
                                    <p class="winner-name">Antonio Rodriguez<br>
                                        <span><span class="currency">€</span>15.574,35</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                            <div class="winners-puple winner-steven">
                                <img src="assets/images/winner-3.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Barcelona</p>
                                    <p class="winner-name">Manuel Diaz<br>
                                        <span><span class="currency">€</span>8.943,32</span>
                                        </br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="winner-big-block">
                                <img src="assets/images/winner-2-big.jpg">
                                <div class="winners-info">
                                    <p class="winners-city">Madrid</p>
                                    <p class="winner-name">Сarmen Gonzalez<br>
                                        <span><span class="currency">€</span>11.909,36</span>
                                        </br>
                                    </p>
                                    <p class="winner-big-info">“Hace un par de años mi marido me dejó y empecé a criar a mis dos hijos yo sola.</p>
                                    <p class="winner-big-info">No podía permitirme enviar a mi hija a la universidad. No había nada que perder, así que invertí en <a class="scroll-form">bitcoin UP</a>. Para mi sorpresa, pude pagar la universidad y pagar mis préstamos. </p>
                                    <p class="winner-big-info">¡Ahora trabajo en casa por Internet durante 20-30 minutos al día y puedo dedicar el tiempo suficiente para criar a mis hijos!“</p>
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
                    <p>¿Cómo funciona?</p>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <img src="assets/images/question-img-1.jpg" class="dect">
                    </div>
                    <div class="col-md-5">
                        <div class="question-info">
                            <p><span class="question-info-step">Paso 1</span></p>
                            <img src="assets/images/question-img-1-mob.jpg" class="mob">
                            <p><span class="question-info-header"> Rellena el formulario</span></p>
                            <p><span class="question-info-block">Una vez que tu inscripción sea aceptada, te
                                convertirás automáticamente en nuevo miembro
                                de <a class="scroll-form">bitcoin UP</a>. ¡Asegúrate de generar un código seguro para que
                                nadie pueda hackear tu cuenta!</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="question-info">
                            <p><span class="question-info-step">Paso 2</span></p>
                            <img src="assets/images/question-img-2-mob.jpg" class="mob">
                            <p><span class="question-info-header"> Financia tu cuenta</span></p>
                            <p><span class="question-info-block">Como cualquier negocio, necesitas capital de trabajo
                                para empezar. Así que para empezar a obtener beneficios con  <a class="scroll-form">bitcoin UP</a>, debes invertir cualquier cantidad que
                                desees de  <span class="currency">€</span>250 o más.</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="assets/images/question-img-2.jpg" class="dect">
                    </div>
                </div>
                <div class="row margin-b">
                    <div class="col-md-7">
                        <img src="assets/images/question-img-3.jpg" class="phone-img dect">
                    </div>
                    <div class="col-md-5">
                        <div class="question-info padding-b">
                            <p><span class="question-info-step">Paso 3</span></p>
                            <img src="assets/images/question-img-3-mob.jpg" class="mob">
                            <p><span class="question-info-header"> Espera una llamada y listo</span></p>
                            <p><span class="question-info-block">Después del pago, nuestro gerente te llamará y te
                                proporcionará el algoritmo de altos ingresos. Disfruta de una precisa operación manos libres con
                                nuestro galardonado algoritmo. También puedes configurar las operaciones
                                manuales si prefieres operar por tu cuenta.</span>
                            </p>
                        </div>
                        <div class="btn-block-form">
                            <button>Empieza ahora</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="winners-block faq-block-mob mob">
            <div class="container">
                <div class="steps-header-puple">
                    <p>Preguntas Frecuentes</p>
                </div>
                <div class="row faq-click">
                    <div class="winners-img">
                    </div>
                    <div class="winners-info">
                        <span> ¿Qué tipo de resultados puedo esperar?</span></br>
                        </p>
                        <div class="more-info">
                            <p></p>
                        </div>
                    </div>
                    <div class="winners-info-hide arow-mob" style="display: none;">
                        <p>Los miembros de <a class="scroll-form">bitcoin UP</a> normalmente ganan un mínimo de <span class="currency">€</span>1,000 diarios porque la plataforma trabaja 24/7 en busca de ofertas exitosas.
                        </p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
                <div class="row faq-click" style="border: 2px solid rgb(230, 174, 92);">
                    <div class="winners-img">
                    </div>
                    <div class="winners-info">
                        <span style="color:#E6AE5C ">¿Cuántas horas al día necesito para trabajar?</span></br>
                        </p>
                        <div class="more-info">
                            <p></p>
                        </div>
                    </div>
                    <div class="winners-info-hide arow-mob" style="display: block;">
                        <p>
                            Nuestros miembros trabajan un promedio de 20 minutos al día o menos. Debido a que el software se encarga de las operaciones, la cantidad de "trabajo" necesario es mínima.
                        </p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
                <div class="row faq-click">
                    <div class="winners-img">
                    </div>
                    <div class="winners-info">
                        <span> ¿Cuánto cuesta el software?</span></br>
                        </p>
                        <div class="more-info">
                            <p></p>
                        </div>
                    </div>
                    <div class="winners-info-hide arow-mob" style="display: none;">
                        <p>Los miembros de <a class="scroll-form">bitcoin UP</a> obtienen una copia de nuestro software propietario de forma gratuita. Para convertirse en miembro, simplemente rellena el formulario de esta página.</p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
                <div class="row faq-click">
                    <div class="winners-img">
                    </div>
                    <div class="winners-info">
                        <span> ¿Esto es como el MLM o el marketing de afiliados?</span></br>
                        </p>
                        <div class="more-info">
                            <p></p>
                        </div>
                    </div>
                    <div class="winners-info-hide arow-mob" style="display: none;">
                        <p>Esto no es como el MLM, el marketing de afiliados o cualquier otra cosa. <a class="scroll-form">bitcoin UP</a> - el software gana transacciones con una precisión del 99.4%, esta es tu herramienta de enriquecimiento personal</p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
                <div class="row faq-click">
                    <div class="winners-img">
                    </div>
                    <div class="winners-info">
                        <span> ¿Hay alguna tarifa?</span></br>
                        </p>
                        <div class="more-info">
                            <p></p>
                        </div>
                    </div>
                    <div class="winners-info-hide arow-mob" style="display: none;">
                        <p>No hay honorarios ocultos. No hay honorarios o comisiones de agentes. Todos tus datos y dinero están protegidos. Los ingresos son 100% propiedad tuyos, y puedes retirar dinero en cualquier momento que te resulte conveniente.
                        </p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="faq-header dect">
                <p>Preguntas Frecuentes</p>
            </div>
            <div class="container">
                <div class="row dect">
                    <div class="col-lg-7 col-md-12">
                        <div class="answer  answer-work">
                            <p><span>¿Qué tipo de resultados<br> puedo esperar?</span>
                            <p>Los miembros de <a class="scroll-form">bitcoin UP</a> normalmente ganan un mínimo de <span class="currency">€</span>1.000 diarios porque la plataforma trabaja 24/7 en busca de ofertas exitosas.</p>
                            </p>
                        </div>
                        <div class="answer answer-expect" style="display: none;">
                            <p><span>¿Cuántas horas <br>al día necesito para trabajar?</span>
                            <p>Nuestros miembros trabajan un promedio de 20 minutos al día o menos. Debido a que el software se encarga de las operaciones, la cantidad de "trabajo" necesario es mínima.
                            </p>
                            </p>
                        </div>
                        <div class="answer answer-cost" style="display: none;">
                            <p><span>¿Cuánto cuesta<br> el software?</span>
                            <p>Los miembros de <a class="scroll-form">bitcoin UP</a> obtienen una copia de nuestro software propietario de forma gratuita. Para convertirse en miembro, simplemente rellena el formulario de esta página.</p>
                            </p>
                        </div>
                        <div class="answer answer-marketing" style="display: none;">
                            <p><span>¿Esto es como el<br> MLM o el marketing de afiliados?</span>
                            <p>Esto no es como el MLM, el marketing de afiliados o cualquier otra cosa. <a class="scroll-form">bitcoin UP</a> - el software gana transacciones con una precisión del 99.4%, esta es tu herramienta de enriquecimiento personal</p>
                            </p>
                        </div>
                        <div class="answer answer-fees" style="display: none;">
                            <p><span>¿Hay alguna<br> tarifa? <br></span>
                            <p>No hay honorarios ocultos. No hay honorarios o comisiones de agentes. Todos tus datos y dinero están protegidos. Los ingresos son 100% propiedad tuyos, y puedes retirar dinero en cualquier momento que te resulte conveniente.
                            </p>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="faq-block">
                            <div class="question-work question" style="color:#E6AE5C ">
                                <p>¿Qué tipo de resultados puedo esperar?</p>
                            </div>
                            <div class="question-expect question">
                                <p>¿Cuántas horas al día necesito para trabajar?</p>
                            </div>
                            <div class="question-cost question">
                                <p>¿Cuánto cuesta el software?</p>
                            </div>
                            <div class="question-marketing question">
                                <p>¿Esto es como el MLM o el marketing de afiliados?</p>
                            </div>
                            <div class="question-fees question">
                                <p>¿Hay alguna tarifa?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-form-block">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-form-info">
                            <p>¡Te <span>sorprenderás</span> después de retirar tus <span>ganancias
                                de 2 semanas!</span>
                            </p>
                            <img src="assets/images/btc-logo.png">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <img src="assets/images/phone-footer.png" class="dect phone-footer-img">
                        <img src="assets/images/phone-footer-mob.png" class="mob">
                    </div>
                    <div class="col-lg-4 col-md-12 padding-hide">
                        <div class="form">
                            <div class="preloader"></div>
                            <div class="head-form">
                                <p>¡Cambia tu vida <span>hoy!</span></p>
                            </div>
                            <div class="close-scroll" style="
                                width: 100%;
                                background: #E6AE5C;
                                border: none;
                                height: 65px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                margin-top: 5%;
                                font-family: Lato;
                                font-style: normal;
                                font-weight: bold;
                                font-size: 24px;
                                line-height: 29px;
                                text-align: center;
                                color: #FAFAFF;
                                cursor: pointer;">¡Únete ahora!</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="join-us-footer">
            <div class="container">
                <div class="row-block">
                    <img src="assets/images/mcafee.png">
                    <img src="assets/images/bitgo.png">
                    <img src="assets/images/visa.png">
                    <img src="assets/images/mastercard.png">
                    <div class="protected-block">
                        <div class="protected-img">
                            <img src="assets/images/logo-secure.png">
                        </div>
                        <div class="protected-info">
                            <p><br><span>Tus datos siempre están protegidos con nosotros. </span><br> Puedes cambiar de opinión en cualquier momento haciendo clic en el enlace para cancelar la suscripción situado en el pie de página de cualquier correo electrónico
                                que recibas de nosotros. Trataremos tu información con respeto. Al hacer clic arriba, aceptas que podamos procesar tu información de acuerdo con estos términos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="protected-info-mob mob">
                    <div class="protected-img">
                        <img src="assets/images/logo-secure.png">
                    </div>
                    <p><br><span>Tus datos siempre están protegidos con nosotros. </span></br>
                        Puedes cambiar de opinión en cualquier momento haciendo clic en el enlace para cancelar la suscripción situado en el pie de página de cualquier correo electrónico que recibas de nosotros. Trataremos tu información con respeto. Al hacer clic arriba, aceptas
                        que podamos procesar tu información de acuerdo con estos términos.
                    </p>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="footer">
                    <div class="logo-footer">
                        <img src="assets/images/btc-logo.png">
                    </div>
                    <div class="privacy-link">
                        <a class="alterlink" data-name="policy">Política de Privacidad</a>
                        <a class="alterlink" data-name="terms">Términos</a>
                    </div>
                </div>
                <div class="footer-info">
                    <p>
                        IMPORTANTE: Ganancias y avisos legales Las representaciones de ganancias e ingresos hechas por <span class="disclaimer-brand_name__new">Website</span>, (colectivamente "Este sitio web") sólo se utilizan como ejemplos de aspiración
                        de tu potencial de ganancias. El éxito de los que aparecen en los testimonios y otros ejemplos son resultados excepcionales y, por lo tanto, no pretenden ser una garantía de que tu u otros logren los mismos resultados. Los resultados
                        individuales variarán y dependen totalmente del uso que hagas de <span class="disclaimer-brand_name__new">Website</span>. Este Sitio Web no es responsable de tus acciones. El usuario es el único responsable de sus acciones y decisiones
                        al utilizar los productos y servicios y, por lo tanto, siempre debe actuar con cautela y la debida diligencia. Aceptas que este Sitio Web no se hace responsable ante ti de ninguna manera por los resultados del uso de nuestros productos
                        y servicios. Consulta nuestros Términos y Condiciones para conocer nuestra completa exención de responsabilidad y otras restricciones. Este sitio web puede recibir una compensación por los productos y servicios que le recomienden.
                        Si no quieres que este sitio web sea compensado por una recomendación, entonces te aconsejamos que busques en línea un producto similar a través de un enlace no afiliado. ©<span id="yearDisclaimerNew">2020</span><br/> USA REGULATION
                        NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the United States. Invest in Crypto is not supervised or regulated by any financial agencies nor US agencies. Any unregulated trading activity by U.S. residents
                        is considered unlawful. <span class="disclaimer-brand_name__new">Website</span> does not accept customers located within the United States or holding an American citizenship.
                        <script type="text/javascript">
                            var yearDisclaimerNew = new Date();
                            document.getElementById("yearDisclaimerNew").innerHTML = yearDisclaimerNew.getFullYear();
                            document.querySelectorAll(".disclaimer-brand_name__new").forEach(function(brandName) {
                                brandName.innerHTML = location.hostname;
                            })
                        </script>
                    </p>
                </div>
            </div>
        </footer>
        <div class="modal" id="finishPopup" style="display: none;">
            <div class="container">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="video-wrapper-final">
                                    <div class="video embed-responsive embed-responsive-16by9">
                                        <div class="gtd-video-title gtd-date-current-date"></div>
                                        <div class="anticlicker-finish"></div>
                                        <div id="ytplayer1" class="video-js embed-responsive-item">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="final-info">
                                    <p><span class="lead-name">[Lead Name]!</span> ¡Bienvenido a bordo! Soy tu Gerente Personal <span class="broker-name">[Broker Name]</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 fix-label">
                                <div class="lead-check">
                                    <p><span class="lead-name">[Lead Name]</span>, comprueba tu correo después de la activación. El acceso a la plataforma llegará al correo electrónico que indicó en el formulario de registro.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="final-footer">
                                <p>¡Invierte en el sistema hoy, y verás que el bitcoin es una <span>nueva oportunidad de millones de euros!</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="final-btm">
                                <div class="final-img">
                                    <img src="assets/images/card-logo.png">
                                </div>
                                <div class="btn-form-fanks">
                                    <a class="btm-send-fanks" href="">¡Activar Cuenta AHORA!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/index.js"></script>
        <script src="assets/js/device.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/currency.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/commonJs.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    </body>
</html>