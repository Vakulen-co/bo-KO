<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <base href="<?php echo $base ?>">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Investi anche tu in modo facile con le azioni Amazon!</title>
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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

<body class="no-webp" cz-shortcut-listen="true">
    <main class="main">
        <section class="section first">
            <div class="first__bg-wrapper">
                <div class="first__bg"></div>
            </div>
            <div class="container first__container">
                <div class="first__content">
                    <h1 class="first__heading heading heading--h1">¡INVIERTA FÁCILMENTE<br>Y CON SEGURIDAD <br>EN LOS VALORES<br> DE AMAZON!</h1>
                    <p class="first__subtitle">Descubra hoy cómo <br>invertir rentablemente <br> y de manera inteligente.</p>
                    <button type="button" class="first__cta js-modal-toggle"><span>EMPIECE A <br> INVERTIR HOY</span>
                        <svg class="icon ">
                            <use xlink:href="assets/fonts/icons.svg#arrow-right"/>
                        </svg>
                    </button>
                </div>
                <div class="first__stripe stripe">
                    <p class="stripe__text">¡Descubra otras firmas en las que invertir: <br> Google, Facebook, Netflix y Apple! <svg class="icon ">
                            <use xlink:href="assets/fonts/icons.svg#double-arrow"/>
                        </svg>
                    </p>
                </div>
                <div class="first__form">
                    <div class="form ">
                        <h4 class="heading heading--h4">Descubra como lograr <br> beneficios con <strong class="form__mention">amazon</strong></h4>
                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="OBTENGA MÁS INFORMACIÓN"></div>
                        <div class="form__group">
                            <ul class="payments">
                                <li class="payments__item">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#maestro"/>
                                    </svg>
                                </li>
                                <li class="payments__item">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#mastercard"/>
                                    </svg>
                                </li>
                                <li class="payments__item">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#paypal"/>
                                    </svg>
                                </li>
                                <li class="payments__item">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#visa"/>
                                    </svg>
                                </li>
                                <li class="payments__item">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#transfer"/>
                                    </svg>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section second">
            <div class="container second__container">
                <h2 class="heading heading--h2">Por qué invertir <br> en Amazon merece la pena</h2>
                <div class="second__metrics">
                    <ul class="metrics">
                        <li class="metrics__item">
                            <div class="numeric-card">
                                <div class="numeric-card__tile">
                                    <span class="numeric-card__value">1600</span>
                                    <span class="numeric-card__label">veces</span>
                                </div>
                                <p class="numeric-card__text">Ha tenido resultados en alza </p>
                            </div>
                        </li>
                        <li class="metrics__item">
                            <div class="numeric-card">
                                <div class="numeric-card__tile">
                                    <span class="numeric-card__value">40</span>
                                    <span class="numeric-card__label">por ciento</span>
                                </div>
                                <p class="numeric-card__text">Líder del mercado en el comercio electrónico de EE.UU.</p>
                            </div>
                        </li>
                        <li class="metrics__item">
                            <div class="numeric-card">
                                <div class="numeric-card__tile">
                                    <span class="numeric-card__value">150</span>
                                    <span class="numeric-card__label">millones</span>
                                </div>
                                <p class="numeric-card__text">de suscriptores de Amazon Prime<br> en todo el mundo en 2019</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section third">
            <div class="third__bg-wrapper">
                <div class="third__bg"></div>
            </div>
            <div class="container third__container">
                <div class="third__picture">
                    <img src="assets/images/computer.jpg" srcset="assets/images/computer2x.jpg 2x" alt="Computer con grafici finanziari sullo schermo">
                </div>
                <div class="third__content">
                    <p class="paragraph">Amazon es una de las firmas líderes del mundo en ventas online. Su tendencia todavía está creciendo y se espera que continúe así durante años. Por eso, invertir en Amazon es una oportunidad muy rentable que hay que aprovechar ahora
                        mismo. En los últimos 9 años, el valor de un stock de Amazon ha subido más de un 1600% en los mercados. Una apreciación que ninguna firma de comercio electrónico ha logrado replicar. En los dos últimos años, Amazon ha registrado
                        un crecimiento en el mercado de valores de un 56% y un 20% respectivamente y los analistas estiman que este crecimiento continuará hasta que el precio alcance en unos años el nivel de 3.000 € por valor.</p>
                    <button type="button" class="third__button button js-modal-toggle"> INVIERTA HOY </button>
                </div>
            </div>
        </section>
        <section class="section third third--reverse">
            <h2 class="heading heading--h2">Pero ¿merece la pena hoy invertir en los valores de Amazon?</h2>
            <div class="container third__container">

                <div class="third__content">
                    <p class="paragraph">Amazon ha revolucionado el mundo de las ventas online al generar compras online para todas las generaciones, gracias a la velocidad de entrega y los servicios adicionales que ofrece. Debido a la sólida fidelidad de sus clientes, Amazon,
                        continuará creciendo en los mercados. Básicamente, todo el mundo compra en Amazon o ha oído hablar de ellos. Esto siempre conlleva que nuevos usuarios se suscriban a Prime y así Amazon puede registrar más ingresos. Se estima que
                        la posición incuestionable de Amazon en las ventas online y en contenido permanecerá así durante al menos 10 años, por lo que hoy, más que nunca, merece la pena invertir en los valores de Amazon.
                    </p>
                </div>
            </div>
        </section>
        <section class="section third">

            <div class="third__bg-wrapper">
                <div class="third__bg"></div>
            </div>

            <div class="container third__container">
                <div class="third__picture">
                    <img src="assets/images/growth.jpg" srcset="assets/images/growth2x.jpg 2x" alt="Computer con grafici finanziari sullo schermo">
                </div>
                <div class="third__content">
                    <p class="paragraph"><b>Vamos a estudiar más en detalle qué es Amazon:</b></p>
                    <p class="paragraph">Las ofertas online de Amazon se han ganado millones de usuarios, gracias a sus precios asequibles y los envíos gratuitos a muchos de sus productos. La fidelidad de los usuarios conlleva que Amazon crezca más y más con resultados financieros
                        impresionantes. El contenido siempre nuevo ofrecido por Amazon, como Prime Video o Amazon Music, retiene a los usuarios y permite a Amazon un mayor crecimiento en los mercados. Hasta la fecha, no hay otras firmas en el sector de
                        las ventas online que puedan lograr los resultados de Amazon en los próximos años. Por lo tanto, invertir en los valores de Amazon todavía es una de las oportunidades más rentables actualmente.

                    </p>
                    <p class="paragraph"> Invertir en los valores de Amazon es extremadamente fácil y puede comenzar a hacerlo ahora mismo.</p>

                    <button type="button" class="third__button button js-modal-toggle"> INVIERTA HOY </button>
                </div>
            </div>
        </section>
        <section class="section fourth">
            <div class="container fourth__container">
                <h2 class="heading heading--h2">Tenemos la solución para usted:</h2>
                <div class="fourth__features">
                    <ul class="features">
                        <li class="features__item">
                            <div class="icon-card">
                                <div class="icon-card__icon">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#shield"/>
                                    </svg>
                                </div>
                                <p class="icon-card__text">Plataforma autorizada <br> Intermediarios certificados
                                </p>
                            </div>
                        </li>
                        <li class="features__item">
                            <div class="icon-card">
                                <div class="icon-card__icon">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#income"/>
                                    </svg>
                                </div>
                                <p class="icon-card__text">Regístrese gratis en la plataforma</p>
                            </div>
                        </li>
                        <li class="features__item">
                            <div class="icon-card">
                                <div class="icon-card__icon">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#money"/>
                                    </svg>
                                </div>
                                <p class="icon-card__text">Capital inicial mínimo</p>
                            </div>
                        </li>
                        <li class="features__item">
                            <div class="icon-card">
                                <div class="icon-card__icon">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#computer"/>
                                    </svg>
                                </div>
                                <p class="icon-card__text">Herramientas fáciles de <br>aprender y utilizar</p>
                            </div>
                        </li>
                        <li class="features__item">
                            <div class="icon-card">
                                <div class="icon-card__icon">
                                    <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#support"/>
                                    </svg>
                                </div>
                                <p class="icon-card__text">Atención al cliente las 24/6<br>a la semana en español</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <button type="button" class="fourth__button button js-modal-toggle"> A continuación, explicamos como aprovechar
                <br> los altos reembolsos de las inversiones en amazon </button>
                <div class="fourth__payments">
                    <ul class="payments">
                        <li class="payments__item">
                            <svg class="icon ">
                                <use xlink:href="assets/fonts/icons.svg#maestro"/>
                            </svg>
                        </li>
                        <li class="payments__item">
                            <svg class="icon ">
                                <use xlink:href="assets/fonts/icons.svg#mastercard"/>
                            </svg>
                        </li>
                        <li class="payments__item">
                            <svg class="icon ">
                                <use xlink:href="assets/fonts/icons.svg#paypal"/>
                            </svg>
                        </li>
                        <li class="payments__item">
                            <svg class="icon ">
                                <use xlink:href="assets/fonts/icons.svg#visa"/>
                            </svg>
                        </li>
                        <li class="payments__item">
                            <svg class="icon ">
                                <use xlink:href="assets/fonts/icons.svg#transfer"/>
                            </svg>
                        </li>
                    </ul>
                </div>
                <div class="privacy">
                <a href="javascript:void(0)" data-name="terms" class="alterlink">Terms of use</a><span>|</span>
                <a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy policy</a>
                </div>
            </div>
        </section>
    </main>
    <div class="modal js-modal" id="modal-form" style="display: none;">
        <div class="modal__content">
            <button type="button" class="modal__close js-modal-close">
                <svg class="icon ">
                    <use xlink:href="assets/fonts/icons.svg#cross"/>
                </svg>
            </button>
            <div class="form ">
                <h4 class="heading heading--h4">Descubra como lograr <br> beneficios con <strong class="form__mention">amazon</strong></h4>
                <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="OBTENGA MÁS INFORMACIÓN"></div>
                <div class="form__group">
                    <ul class="payments">
                        <li class="payments__item">
                            <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#maestro"/>
                                    </svg>
                        </li>
                        <li class="payments__item">
                            <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#mastercard"/>
                                    </svg>
                        </li>
                        <li class="payments__item">
                            <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#paypal"/>
                                    </svg>
                        </li>
                        <li class="payments__item">
                            <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#visa"/>
                                    </svg>
                        </li>
                        <li class="payments__item">
                            <svg class="icon ">
                                        <use xlink:href="assets/fonts/icons.svg#transfer"/>
                                    </svg>
                        </li>
                    </ul>
                    <p class="form__caption">Invertir en acciones de amazon<br> es reservado para adultos.<br> Capital de inversion mínimo: 250€</p>
                </div>
                
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>