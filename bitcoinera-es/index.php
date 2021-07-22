<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitcoin Era ™ | Official Website [2021]</title>
    <meta name="description" content="La era de Bitcoin está formada por un grupo exclusivo de personas que han entendido la increíble riqueza que pueden obtener de Bitcoin. Regístrese ahora y hágase más rico de lo que es hoy.">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="La era de Bitcoin está formada por un grupo exclusivo de personas que han entendido la increíble riqueza que pueden obtener de Bitcoin. Regístrese ahora y hágase más rico de lo que es hoy." />
    <meta name="twitter:title" content="Bitcoin Era ™ | Official Website [2021]" />
    <link rel="shortcut icon" href="assets/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    
	<!-- Open Graph -->
    <?php $seoText = '¡Bienvenidas!'; ?>
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
            <p class="intro-p"><b data-i18n>ADVERTENCIA</b>:<span data-i18n>Debido a la demanda de medios extremadamente alta, cerraremos el registro a partir del</span> <b>
					<span class="tomorrow-date">01/02/2020</span> - <span data-i18n>¡PRISA!</span> </b><span class="countdown-span" id="countdown-span">05:32</span></p>
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
                    <span class="purple" data-i18n>Ofertas exclusivas para</span> <br> <span class="red" data-i18n>intercambios en</span> <span class="country-name-span red"></span></div>
                    <img loading="lazy" src="assets/flags/ES.png" class="flag" alt="country flag">
                </div>

                <div class="dynamic-person-div none">
                    <div class="dynamic-person-img-wrapper">
                        <img loading="lazy" src="assets/25.jpg" alt="Women" class="dynamic-person-img">
                    </div>
                    <p class="dynamic-person-p">
                        <span class="dynamic-person-name-span">
							Nikole C.
						</span>
                        <br>
                        <span data-i18n>just made</span>
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
            <div class="video-header" data-i18n>COMERCIE LA VOLATILIDAD DE BITCOIN COMO UN PROFESIONAL A TRAVÉS BITCOIN ERA</div>
            <p class="video-subheader"><span data-i18n>¡Desbloquea una inmensa riqueza hoy!</span>
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
                        <p class="formHeader" data-i18n>¡CAMBIA TU VIDA HOY!</p>
                        <!-- FORM  REGÍSTRATE AHORA-->
                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="REGÍSTRATE AHORA" ></div>
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
                        Comience a operar con Bitcoin como un profesional registrándose con Bitcoin Era ¡Este Dia!
                    </h2>

                    <p>The Bitcoin Era is made up of an exclusive group of people who have understood the huge potential of Bitcoin. We call these people “early Bitcoin investors” as they invested in Bitcoins when it initially took off some ten years ago.
                        Today, these people have become rich. Now you can become one of them.</p>
                    <p>Miles de personas ya han obtenido la libertad financiera al comerciar con nosotros. Durante los últimos tres años, hemos ayudado a innumerables personas a ganar dinero intercambiando bitcoins que les cambia la vida. Lo mejor es que nuestro sistema es súper fácil de usar para todos.</p>
                    <p>Solo necesita registrarse y nosotros haremos el resto por usted. Bitcoin Era es la herramienta soñada para cualquiera que busque una lucrativa herramienta de ingresos pasivos en línea.</p>

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
                <h3 class="testimonials-header purple" data-i18n>TESTIMONIOS DE CLIENTES FELICES</h3>
                
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-1">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Colin B.</span> <br>
                            <span data-i18n>Budapest</span> <br>
                            <!-- <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>12923</span> -->
                        </div>
                        <div class="testimonial-hover-text">
                            <i>“El comercio de Bitcoin ha cambiado mi vida. Estuve a punto de rendirme y declararme en bancarrota hasta que me topé con el Bitcoin Era aplicación. A los pocos meses de operar, al menos el 80% de mis deudas están pagadas y tengo un ingreso diario estable ".</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-2">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Alexia R.</span> <br>
                            <span data-i18n>Edmonton</span> <br>
                            <!-- <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>7192</span> -->
                        </div>
                        <div class="testimonial-hover-text">
                            <i>“La pandemia de covid19 ha sido una bendición disfrazada para mí. Comencé a usar el Bitcoin Era por aburrimiento, pero ahora es mi principal fuente de ingresos. Una ganancia de hasta $ 5000 por día es algo que nunca pensé que lograría en esta economía ".</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-3">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Tony R.</span> <br>
                            <span data-i18n>Dubai</span> <br>
                            <!-- <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>10519</span> -->
                        </div>
                        <div class="testimonial-hover-text">
                            <i>“Esta aplicación comercial es simplemente asombrosa. Gano diez veces más de lo que solía trabajar 12 horas al día como vendedor de seguros. Lo más sorprendente es que todavía puedo generar ganancias, incluso cuando duermo ".</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-4">
                        <div class="testimonial-intro-text white">
                            <span data-i18n>Laurie M.</span><br>
                            <span data-i18n>Belfast</span> <br>
                            <!-- <span class="yellow testimonial-profit-span"><span data-i18n>Profit</span>: <span data-init="visitor-currency-symbol">$</span>8519</span> -->
                        </div>
                        <div class="testimonial-hover-text">
                            <i>"Me registré con Bitcoin Era después de leer su reseña sobre una de las publicaciones de cifrado líderes. Es sorprendente lo rentable que puede obtener el comercio de volatilidad a través de este robot. Estoy obteniendo más beneficios de los que jamás he obtenido en el comercio de acciones ".</i>
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
                        <h2 class="feature-header" data-i18n>PLATAFORMA FÁCIL DE USAR</h2>
                        <p class="feature-description" data-i18n>Bitcoin Era La aplicación está basada en la web. Puede acceder a nosotros desde los principales navegadores tanto en dispositivos de escritorio como móviles. Le recomendamos que utilice navegadores de buena reputación como Chrome, Firefox, Safari y Brave por motivos de seguridad. Puede descargar la versión HTML5 de nuestro web-trader para sus dispositivos móviles.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-2.png" class="feature-img" alt="feature 1">
                        </div>
                        <h3 class="feature-header" data-i18n>CARACTERÍSTICAS DE SEGURIDAD DE PRIMERA CLASE</h3>
                        <p class="feature-description" data-i18n>Valoramos la seguridad de nuestros usuarios y, por lo tanto, hemos invertido en sistemas infalibles. Nuestro sitio web tiene encriptación de grado militar y respetamos las medidas globales de protección de datos. Estos incluyen medidas de alto nivel como el Reglamento General de Protección de Datos de la UE (GDPR). Nuestros corredores también gozan de buena reputación y están regulados en todas las jurisdicciones.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img loading="lazy" src="assets/feature-img-3.png" class="feature-img" alt="feature 1">
                        </div>
                        <h3 class="feature-header" data-i18n>CAPITAL COMERCIAL ASEQUIBLE</h3>
                        <p class="feature-description" data-i18n>La mayoría de nuestros sistemas comerciales de la competencia solo aceptan inversores con al menos $ 1 millón en capital comercial. Esto significa que están fuera del alcance de la mayoría de las personas. Somos el primer sistema de comercio basado en inteligencia artificial que permite a los operadores participar en el comercio automático con un depósito de tan solo 250 USD.</p>
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
					<span data-i18n>¡ÚNETE AHORA!</span>
				</button>
                <p class="dark-purple bold live-results-header" data-i18n>Resultados De Ganancias En Vivo</p>
                <table class="live-results-table" id="table_profits">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td" data-i18n>Las Bitcoin Era</th>
                            <th class="dark-purple padding-left-td" data-i18n>Ganancias</th>
                            <th class="dark-purple padding-left-td" data-i18n>Tiempo de comercio</th>
                            <th class="dark-purple padding-left-td" data-i18n>Criptomoneda</th>
                            <th class="dark-purple padding-left-td" data-i18n>Resultado</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td class="bold">Jessica T. acaba de ganar un intercambio ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>986</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Joseph M. acaba de ganar un intercambio ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>723</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Harry C. acaba de ganar un intercambio ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1032</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Evan M. acaba de ganar un intercambio ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>839</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lily C. acaba de ganar un intercambio ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1201</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Lewis R. acaba de ganar un intercambio ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>972</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>BTC/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">George B. acaba de ganar un intercambio ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>687</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>ETH/LTC</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Natasha R. acaba de ganar un intercambio ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>1129</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>EOS/ETH</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Matthew C. acaba de ganar un intercambio ...</td>
                            <td class="bold"><span data-init="visitor-currency-symbol">$</span>919</td>
                            <td class="trade-time-td padding-left-td"></td>
                            <td>LTC/EOS</td>
                            <td><img loading="lazy" src="assets/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold last-td">Jamie P. acaba de ganar un intercambio ...</td>
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
                <h2 class="dark-purple bold how-it-works-header" data-i18n>CÓMO BITCOIN ERA ¿TRABAJO?</h2>
                <div class="row">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <div class="step-header white step-header-1 h3" data-i18n>Paso 1:</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-1.png" alt="step 1" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>REGISTRARSE EN EL SITIO</div>
                            <p class="step-description" data-i18n>Registre una cuenta comercial gratuita utilizando el formulario en la parte superior de esta página. El proceso es sencillo y lleva menos de 5 minutos. Manejamos todos los datos de nuestros usuarios con estricta confidencialidad.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <div class="step-header white step-header-2 h3" data-i18n>Paso 2:</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-2.png" alt="step 2" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>FINANCIAR SU CUENTA</div>
                            <p class="step-description"><span data-i18n>Después de registrarse, lo redirigiremos a la página de nuestro corredor asociado para depositar fondos en su cuenta comercial. Todas nuestras transacciones financieras se manejan a través de corredores acreditados y altamente regulados.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <div class="step-header white step-header-3 h3" data-i18n>Paso 3:</div>
                            <div class="step-img-wrapper">
                                <img loading="lazy" src="assets/step-img-3.png" alt="step 3" class="step-img">
                            </div>
                            <div class="step-subheader bold dark-purple h5" data-i18n>COMIENCE A NEGOCIAR</div>
                            <p class="step-description" data-i18n>El comercio en vivo ocurre con el clic de un botón. Puede realizar sus actividades diarias mientras nuestro sistema de negociación funciona para usted en segundo plano. Un depósito de $ 250 es todo lo que se necesita para comenzar su viaje para convertirse en un exitoso comerciante de criptomonedas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-works-btn-wrapper">
            <button class="yellow-btn open-free-account-btn scroll-top-btn scroll_to_top">
				<span data-i18n>ABRIR CUENTA GRATUITA</span>
			</button>
        </div>
    </section>
    <!-- HOW IT WORKS SECTION END -->

    <!-- FAQ SECTION START -->
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-section-header text-center dark-purple bold" data-i18n>PREGUNTAS FRECUENTES</h2>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-1">

                        <h3 class="faq-question light-purple bold h2" data-i18n>Is Bitcoin Era amigable para principiantes?</h3>
                        <p class="faq-answer" data-i18n>Somos un sistema comercial fácil de usar y extremadamente rentable. A continuación se muestran algunas de las características que nos diferencian de la competencia.
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-2">
                        <h4 class="faq-question light-purple bold h2" data-i18n>¿Cuánto beneficio puedo obtener con Bitcoin Era?</h4>
                        <p class="faq-answer" data-i18n>Para los comerciantes consistentes y afortunados, un depósito de $ 250 puede crecer a $ 1 millón mediante capitalización en menos de un año. Existen riesgos sustanciales en todas las formas de negociación y, por lo tanto, debe invertir sabiamente./p>
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
                        <h4 class="faq-question light-purple bold h2" data-i18n>¿Necesito experiencia comercial para usar Bitcoin Era?</h4>
                        <p class="faq-answer" data-i18n>
                        Puedes ganar dinero a través de Bitcoin Era desde el primer día de negociación incluso sin experiencia comercial. Esto se debe a que nuestro sistema de negociación realiza todas las funciones técnicas de negociación en piloto automático.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-5">
                        <div class="faq-question light-purple bold h2" data-i18n>Is Bitcoin Era un esquema Ponzi?</div>
                        <p class="faq-answer">¡No! Bitcoin Era no es un esquema Ponzi. Mucha gente se hace esta pregunta debido a la increíble rentabilidad reportada por este bot. Utilizamos tecnologías de inteligencia artificial y un alto apalancamiento proporcionado por nuestros corredores asociados para garantizar una rentabilidad tan alta.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper faq-wrapper-6">
                        <h2 class="faq-question light-purple bold" data-i18n>¿Cuánto tiempo se tarda en operar?</h2>
                        <p class="faq-answer" data-i18n>
                        Bitcoin Era las operaciones se realizan automáticamente y, por lo tanto, no se necesitan más de 20 minutos diarios para establecer las condiciones de negociación. Esto significa que los usuarios no tienen que renunciar a sus trabajos diarios o pasar noches sin dormir monitoreando los mercados.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-wrapper">
                        <h2 class="faq-question light-purple bold" data-i18n>¿Una inmersión profunda en Bitcoin Era</h2>
                        <p class="faq-answer" data-i18n>
                        Bitcoin Era las operaciones se realizan automáticamente y, por lo tanto, no se necesitan más de 20 minutos diarios para establecer las condiciones de negociación. Esto significa que los usuarios no tienen que renunciar a sus trabajos diarios o pasar noches sin dormir monitoreando los mercados.</p>
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
			Comience ahora</span>
			</button>
        </div>
    </section>
    <!-- PRE-FOOTER SECTION END -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img loading="lazy" src="assets/logo2.png" alt="Bitcoin Era" class="logo img-responsive center-block" style="    margin: 30px 0;">
                    <p><strong>Aviso legal</strong>: El comercio de CFD, ya sea de forma manual o mediante un bot altamente apalancado, implica muchos riesgos. En consecuencia, arriesgue solo lo que pueda permitirse perder. La información presentada en esta página no debe utilizarse como base para la toma de decisiones. Realice una investigación de antecedentes suficiente antes de registrarse con nosotros.

Al registrarse con nosotros, acepta nuestros términos y condiciones y nuestra política de privacidad. No se registre con nosotros si está en contra de que ganemos una comisión al vincularlo a plataformas de terceros.</p>
                    <ul class="footer-ul" style="list-style: none" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                        <style>
                            .footer-ul li {
                                display: inline-block;
                                margin: 0 2px;
                            }
                        </style>
                        <a href="javascript:void(0)" data-name="terms" class="alterlink">Condiciones de uso</a> | <a href="javascript:void(0)" data-name="policy" class="alterlink">Política de privacidad</a>
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