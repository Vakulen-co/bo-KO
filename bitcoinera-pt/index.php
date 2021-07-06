<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <base href="<?php echo $base ?>">
        <meta charset="UTF-8">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bitcoin Era</title>
        <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">
        <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
        <!-- Open Graph -->
        <?php $seoText = 'Receber!'; ?>
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
                                    Você está prestes a cometer um grande erro!
                                </div>
                                <div class="subtitle">
                                    Se você perder isso <b>MUDANÇA</b> para iniciar <b>uma vida melhor agora,</b> não vais conseguir outro!
                                </div>
                            </div>
                        </div>
                        <div class="popup-form-wrapper">
                            <div class="form-container-unique">
                                <div class="form-block-2 whitee">
                                    <button class="pre-footer-btn scroll-top-btn">
                                    <span data-i18n="">COMECE AGORA</span>
                                    </button>
                                    <div class="checkboxStle" style="margin-bottom: 0;">
                                        <div class="checkbox-svg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="intro-section-1" style="padding: 15px 0 10px 0;">
            <div style="display: inline-block;position: absolute;top: 4px;left: 50%;transform: translateX(-50%);font-size: .5em;opacity: .5;font-family: inherit;">
                <span style="font-size: 12px;" class="topTextASet">-&nbsp;Advertorial&nbsp;<a href="abuse_report.html"
                    target="_blank"
                    style="font: inherit;color: inherit;text-decoration: inherit;">&amp;&nbsp;DMCA&nbsp;Protected</a>&nbsp;-</span>
            </div>
            <div class="container">
                <p class="intro-p">
                    <b data-i18n="warning">Atenção</b>: <span data-i18n="due-to"> Devido à altíssima procura por parte dos
                    usuários, fecharemos o registro a partir de </span><b>
                    <b><span class="tomorrow-date">05/07/2018</span> - <span data-i18n="">Corre!</span>
                    </b><span class="countdown-span" id="timer">05:30</span></b>
                </p>
            </div>
        </section>
        <section class="intro-section-2">
            <div class="container">
                <div class="intro-part-2">
                    <img src="assets/images/logo.png" alt="logo" class="logo">
                    <div class="exclusive-offers-wrapper intro-margin-div none">
                        <div>
                            <span class="purple" data-i18n="">Oferta Exclusiva para</span> <br>
                            <span class="red" data-i18n="">Traders Brasileiros </span>
                            <span class="purple country-name-geo" data-i18n=""></span>
                            <span class="red gtd-geo-country-name"></span>
                        </div>
                        <img data-init="country-flag" height="50" class="flag-pic">
                    </div>
                    <div class="dynamic-person-div none">
                        <div class="dynamic-person-img-wrapper">
                            <img src="assets/images/25.jpg" alt="" class="dynamic-person-img">
                        </div>
                        <p class="dynamic-person-p">
                            <span class="dynamic-person-name-span">
                            Nikole C.
                            </span>
                            <br>
                            <span data-i18n="">acabou de fazer</span>
                            <br>
                            <span data-init="visitor-currency-symbol" class="dollar-shake">
                            <span class="currency">€</span>
                            </span>
                            <span class="dynamic-person-sum-span">350</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="video-form-section">
            <div class="container">
                <h1 class="video-header" data-i18n="">Bitcoin está tornando as pessoas ricas</h1>
                <p class="video-subheader"><span data-i18n="">E você pode se tornar o</span>
                    <span class="yellow" data-i18n=""> Próximo milionário...</span>
                </p>
                <div class="row" style="margin-bottom: -157px;">
                    <div class="col-md-12 col-lg-8">
                        <div class="video-wrapper">
                            <div class="video">
                                <video src="assets/video/videoplayback.mp4" controls autoplay muted></video>
                            </div>
                            <style>
                                
                            </style>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="form-container">
                            <h1 class="formHeader" data-i18n="">MUDE SUA VIDA HOJE!</h1>
                            <div class="formwrap-outer">
                                <div class="formwrap">
                                    <div class="form-body">
                                        <div class="gtd-form-step-2" data-subject="slide-wrapper">
                                            <div class="app" id="app1" data-geo="EU" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Me dê acesso agora!"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="logos-section">
            <div class="container">
                <div class="logos-wrapper">
                    <img src="assets/images/bitgo.png" class="logo" alt="bitgo logo">
                    <img src="assets/images/norton.png" class="logo" alt="norton logo">
                    <img src="assets/images/secure-trading.png" class="logo" alt="secure trading logo">
                    <img src="assets/images/mcafee.png" class="logo" alt="mcafee logo">
                </div>
            </div>
        </section>
        <section class="join-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="join-us-header">
                            <span data-i18n="">Junte-se a nós e comece a Fazer Dinheiro
                            </span>
                            <span style="color: #5F3394" data-i18n="">com Bitcoin Era!</span>
                        </h1>
                        <br>
                        <p class="join-us-p">
                            <span data-i18n="">
                            O Bitcoin Era é um grupo reservado exclusivamente para pessoas que saltaram nos retornos
                            insanos que o Bitcoin oferece e assim acumularam uma fortuna silenciosamente. Nossos membros
                            curtem viagens ao redor do mundo todos os meses enquanto ganham dinheiro em seu laptop com
                            apenas alguns minutos de “trabalho” por dia.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <style>
            @media (max-width:767px) {
            .fake-news-section {
            display: none !important;
            }
            }
        </style>
        <section class="fake-news-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5" style="visibility: hidden;">
                        <p class="seenon-p" data-i18n="">Como visto em</p>
                        <p class="fake-news-logos-wrapper">
                            <img src="assets/images/seenon.png" alt="media logos">
                        </p>
                    </div>
                    <div class="col-md-7">
                        <div class="join-us-img-wrapper">
                            <img src="assets/images/girl-holding-bitcoin.png" alt="join us" class="join-us-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials-section">
            <div class="container-fluid">
                <h1 class="testimonials-header purple" data-i18n="">Depoimentos reais de nossos usuários</h1>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                        <div class="testimonial-wrapper testimonial-wrapper-1">
                            <div class="testimonial-intro-text white">
                                <span data-i18n="">Marcos C.</span> <br>
                                <span data-i18n="">Belo Horizonte</span> <br>
                                <span class="yellow testimonial-profit-span"><span data-i18n="">Lucro</span>: <span data-init="visitor-currency-symbol"><span
                                    class="currency">€</span></span>12923</span>
                            </div>
                            <div class="testimonial-hover-text">
                                <i>'Eu sou um membro da "Revolução Bitcoin" por apenas 47 dias. Mas minha vida já mudou! Não
                                só
                                fiz meus primeiros <span class="currency">€</span> 10K, mas também conheci muita gente
                                incrível no processo. Obrigado, Bitcoin Era!'</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                        <div class="testimonial-wrapper testimonial-wrapper-2">
                            <div class="testimonial-intro-text white">
                                <span data-i18n="">Laura P.</span> <br>
                                <span data-i18n="">Gramado</span> <br>
                                <span class="yellow testimonial-profit-span"><span data-i18n="">Lucro</span>: <span data-init="visitor-currency-symbol"><span
                                    class="currency">€</span></span>7192</span>
                            </div>
                            <div class="testimonial-hover-text">
                                <i>'Finalmente sei o que significa viver um sonho. Não sinto mais que estou de pé na rua
                                vendo todo mundo se divertir. A era dos bitcoins me permitiu sair do trabalho mais cedo
                                e levar um estilo de vida que apenas 1% da população possui.'</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                        <div class="testimonial-wrapper testimonial-wrapper-3">
                            <div class="testimonial-intro-text white">
                                <span data-i18n="">Matheus I.</span> <br>
                                <span data-i18n="">Salvador</span> <br>
                                <span class="yellow testimonial-profit-span"><span data-i18n="">Lucro</span>: <span data-init="visitor-currency-symbol"><span
                                    class="currency">€</span></span>10519</span>
                            </div>
                            <div class="testimonial-hover-text">
                                <i>'Em 10 anos investindo na bolsa nunca vi nada assim. Todos mundo no trabalho achou que eu
                                tava louco quando larguei a empresa para investir com o software Bitcoin Era em tempo
                                integral. <span class="currency">€</span> 38.459 em lucros mais tarde, todos os meus
                                colegas
                                estão agora me IMPLORANDO para eu deixar eles entrarem.'</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                        <div class="testimonial-wrapper testimonial-wrapper-4">
                            <div class="testimonial-intro-text white">
                                <span data-i18n="">Jane A.</span><br>
                                <span data-i18n="">Porto Alegre</span> <br>
                                <span class="yellow testimonial-profit-span"><span data-i18n="">Lucro</span>: <span data-init="visitor-currency-symbol"><span
                                    class="currency">€</span></span>8519</span>
                            </div>
                            <div class="testimonial-hover-text">
                                <i>'Duas semanas atrás, eu fui demitida. Sem opções e com essa crise toda, achei que minha
                                vida
                                tinha acabado. Agora estou ganhando mais de <span class="currency">€</span> 1.261,42
                                todos
                                os dias. E pela primeira vez em 2 meses, minha conta não ficou no vermelho. obrigada,
                                Bitcoin Era!'
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="features-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 feature-wrapper-col">
                        <div class="feature-wrapper">
                            <div class="feature-img-wrapper">
                                <img src="assets/images/feature-img-1.png" class="feature-img" alt="feature 1">
                            </div>
                            <h5 class="feature-header" data-i18n="">Desempenho com precisão de laser</h5>
                            <p class="feature-description" data-i18n="">Não há outro aplicativo de negociação no mundo que tenha um nível de precisão de 99,4% que o The Bitcoin Era consegue atingir. É por isso que nossos membros de todo o mundo confiam em nós para dobrar triplicar e quadruplicar seu
                                dinheiro suado.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 feature-wrapper-col">
                        <div class="feature-wrapper">
                            <div class="feature-img-wrapper">
                                <img src="assets/images/feature-img-2.png" class="feature-img" alt="feature 1">
                            </div>
                            <h5 class="feature-header" data-i18n="">Tecnologia de ponta</h5>
                            <p class="feature-description" data-i18n="">O software Bitcoin Era foi criado usando a programação mais avançada que o mundo comercial já viu. O software está à frente dos mercados em 0,01 segundo. Este 'salto de tempo' faz do software o aplicativo comercial mais consistente
                                do planeta.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 feature-wrapper-col">
                        <div class="feature-wrapper">
                            <div class="feature-img-wrapper">
                                <img src="assets/images/feature-img-3.png" class="feature-img" alt="feature 1">
                            </div>
                            <h5 class="feature-header" data-i18n="">App de negociação premiado</h5>
                            <p class="feature-description" data-i18n="">O aplicativo Bitcoin Era ganhou vários prêmios. Os prêmios mais recentes que tivemos a honra de receber estão ficando em primeiro lugar na categoria de software de negociação da US Trading Association.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="live-results-section text-center">
            <div class="container relative">
                <div class="live-results-table-wrapper">
                    <button class="yellow-btn join-now-btn scroll-top-btn">
                    <span data-i18n="">ENTRE AGORA!</span>
                    </button>
                    <h1 class="dark-purple bold live-results-header" data-i18n="">Resultados de lucro ao vivo!</h1>
                    <table class="live-results-table">
                        <thead class="thead">
                            <tr>
                                <th class="dark-purple padding-left-td" data-i18n="">Nome</th>
                                <th class="dark-purple padding-left-td" data-i18n="">Lucro</th>
                                <th class="dark-purple padding-left-td" data-i18n="">Hora da operação</th>
                                <th class="dark-purple padding-left-td" data-i18n="">Cryptomoeda</th>
                                <th class="dark-purple padding-left-td" data-i18n="">Resultado</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td class="bold">Donald Rogers.
                                </td>
                                <td class="bold"><span class="currency">€</span>996</td>
                                <td class="trade-time-td padding-left-td">18/7/2019</td>
                                <td>ETH/LTC</td>
                                <td><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Kathryn Schneider.
                                </td>
                                <td class="bold"><span class="currency">€</span>815</td>
                                <td class="trade-time-td padding-left-td">18/7/2019</td>
                                <td>EOS/ETH</td>
                                <td><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Robert Holland.
                                </td>
                                <td class="bold"><span class="currency">€</span>481</td>
                                <td class="trade-time-td padding-left-td">18/7/2019</td>
                                <td>EOS/ETH</td>
                                <td><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Kathy Johnston.
                                </td>
                                <td class="bold"><span class="currency">€</span>1294</td>
                                <td class="trade-time-td padding-left-td">18/7/2019</td>
                                <td>BTC/ETH</td>
                                <td><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Villads Knudsen.
                                </td>
                                <td class="bold"><span class="currency">€</span>1224</td>
                                <td class="trade-time-td padding-left-td">18/7/2019</td>
                                <td>EOS/ETH</td>
                                <td><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Anthony Larson.
                                </td>
                                <td class="bold"><span class="currency">€</span>434</td>
                                <td class="trade-time-td padding-left-td">18/7/2019</td>
                                <td>EOS/ETH</td>
                                <td><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Felix Mortensen.
                                </td>
                                <td class="bold"><span class="currency">€</span>924</td>
                                <td class="trade-time-td padding-left-td">18/7/2019</td>
                                <td>BTC/ETH</td>
                                <td><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Fredrik Wigren.
                                </td>
                                <td class="bold"><span class="currency">€</span>532</td>
                                <td class="trade-time-td padding-left-td">18/7/2019</td>
                                <td>ETH/LTC</td>
                                <td><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold">Robert Morales.
                                </td>
                                <td class="bold"><span class="currency">€</span>951</td>
                                <td class="trade-time-td padding-left-td">18/7/2019</td>
                                <td>EOS/ETH</td>
                                <td><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                            <tr>
                                <td class="bold last-td">Victor Woods.
                                </td>
                                <td class="bold last-td"><span class="currency">€</span>1151</td>
                                <td class="trade-time-td padding-left-td last-td">18/7/2019</td>
                                <td class="last-td">EOS/ETH</td>
                                <td class="last-td"><img src="assets/images/tick.png" alt="tick"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="currency--table-hide" style="display: none;"></div>
                </div>
            </div>
        </section>
        <section class="how-it-works-section text-center">
            <div class="container">
                <div class="how-it-works-wrapper">
                    <h1 class="dark-purple bold how-it-works-header" data-i18n="">Como funciona</h1>
                    <div class="row">
                        <div class="col-md-4 no-padding step-wrapper-col">
                            <div class="step-wrapper step-wrapper-1">
                                <h3 class="step-header white step-header-1" data-i18n="">Passo 1</h3>
                                <div class="step-img-wrapper">
                                    <img src="assets/images/step-img-1.png" alt="step 1" class="step-img">
                                </div>
                                <h5 class="step-subheader bold dark-purple" data-i18n="">Cadastre-se no site</h5>
                                <p class="step-description" data-i18n="">Assim que seu cadastro for aceito, você se tornará automaticamente o mais novo membro da Bitcoin Era. E você conseguirá ter acesso ao nosso software próprio de negociação de bitcoin gratuitamente</p>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding step-wrapper-col">
                            <div class="step-wrapper step-wrapper-2">
                                <h3 class="step-header white step-header-2" data-i18n="">Passo 2</h3>
                                <div class="step-img-wrapper">
                                    <img src="assets/images/step-img-2.png" alt="step 2" class="step-img">
                                </div>
                                <h5 class="step-subheader bold dark-purple" data-i18n="">Aplicar na sua conta</h5>
                                <p class="step-description">
                                    <span data-i18n="">Como qualquer negócio, você precisa de capital de giro para começar.
                                    Então, para começar a lucrar com a Bitcoin Era, você deve investir qualquer quantia
                                    desejada de <span class="currency">€</span>250 ou mais</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 no-padding step-wrapper-col">
                            <div class="step-wrapper last-step-wrapper step-wrapper-3">
                                <h3 class="step-header white step-header-3" data-i18n="">Passo 3</h3>
                                <div class="step-img-wrapper">
                                    <img src="assets/images/step-img-3.png" alt="step 3" class="step-img">
                                </div>
                                <h5 class="step-subheader bold dark-purple" data-i18n="">Terminar</h5>
                                <p class="step-description" data-i18n="">Clique em negociar para desfrutar do preciso premiado e, o mais importante, automático software de negociação. Você também pode definir a negociação para manual, se você preferir negociar por conta própria
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="how-it-works-btn-wrapper">
                <button class="yellow-btn open-free-account-btn scroll-top-btn">
                <span data-i18n="">Abrir conta grátis</span>
                </button>
            </div>
        </section>
        <section class="faq-section">
            <div class="container">
                <h2 class="faq-section-header text-center dark-purple bold" data-i18n="">Perguntas frequentes</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="faq-wrapper faq-wrapper-1">
                                    <h4 class="faq-question light-purple bold" data-i18n="">Que tipo de resultados posso esperar?
                                    </h4>
                                    <p class="faq-answer">Os membros geralmente lucram um mínimo de <span class="currency">€</span>1100 diariamente.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="faq-wrapper faq-wrapper-2">
                                    <h4 class="faq-question light-purple bold" data-i18n="">Quantas horas por dia eu preciso trabalhar?
                                    </h4>
                                    <p class="faq-answer" data-i18n="">Nossos membros trabalham em média 20 minutos por dia ou menos. Como o software lida com a negociação, a quantidade de 'trabalho' necessária é mínima.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="faq-wrapper faq-wrapper-3">
                                    <h4 class="faq-question light-purple bold" data-i18n="">Qual é o valor máximo que posso fazer?
                                    </h4>
                                    <p class="faq-answer" data-i18n="">Seus lucros são ilimitados no The Bitcoin Era. Alguns membros ganharam seu primeiro milhão em apenas 61 dias.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="faq-wrapper faq-wrapper-4">
                                    <h4 class="faq-question light-purple bold" data-i18n="">Quanto custa o software?</h4>
                                    <p class="faq-answer" data-i18n="">Os membros do The Bitcoin Era recebem uma cópia do nosso software proprietário gratuitamente. Para se tornar um membro, basta preencher o formulário nesta página.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="faq-wrapper faq-wrapper-5">
                                    <h4 class="faq-question light-purple bold" data-i18n="">É como MMN, marketing multi nivel, piramide ou Marketing de afiliados?</h4>
                                    <p class="faq-answer" data-i18n="">Isto não é como MLM, marketing afiliado ou qualquer outra coisa lá fora. O software vence negócios com 99,4% de precisão.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="faq-wrapper faq-wrapper-6">
                                    <h4 class="faq-question light-purple bold" data-i18n="">Existem taxas?</h4>
                                    <p class="faq-answer" data-i18n="">Não há taxas ocultas. Sem taxas de corretagem ou comissões. Todo o seu dinheiro é 100% seu e você é livre para retirá-lo a qualquer momento que escolher sem demora.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pre-footer-section">
            <div class="container">
                <button class="pre-footer-btn scroll-top-btn">
                <span data-i18n="">COMECE AGORA</span>
                </button>
            </div>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <ul class="footer-ul">
                    <li><a id="privacy-policy" href="javascript:void(0)" class="alterlink" data-name="policy">PRIVACIDADE</a></li>
                    <li><a id="terms" href="javascript:void(0)" class="alterlink" data-name="terms">TERMOS</a></li>
                </ul>
                <img src="assets/images/logo.png" class="footer-logo" alt="logo">
                <div id="disclaimerAndText" style="font-family:inherit;font-size:0.7em;margin:auto;max-width:600px;color:inherit;padding:15px;border:1px solid #333;margin-top: 15px;">
                    IMPORTANT: Earnings and Legal Disclaimers Earnings and income representations made by <span class="disclaimer-brand_name__new">Website</span>, (collectively “This Website”) only used as aspirational examples of your earnings potential.
                    The success of those in the testimonials and other examples are exceptional results and therefore are not intended as a guarantee that you or others will achieve the same results. Individual results will vary and are entirely dependent
                    on your use of <span class="disclaimer-brand_name__new">Website</span>. This Website is not responsible for your actions. You bear sole responsibility for your actions and decisions when using products and services and therefore you should
                    always exercise caution and due diligence. You agree that this Website is not liable to you in any way for the results of using our services. See our Website terms of use for our full disclaimer of liability and other restrictions. Trading
                    can generate notable benefits, however, it also involves the risk of partial/full loss of the invested capital, therefore, you should consider whether you can afford to invest. ©<span id="yearDisclaimerNew">2020</span><br /> USA REGULATION
                    NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the United States. Invest in Crypto is not supervised or regulated by any financial agencies nor US agencies. Any unregulated trading activity by U.S. residents is
                    considered unlawful. This Website does not accept customers located within the United States or holding an American citizenship. This Website is not responsible for actions of customers located within the United States or holding an American
                    citizenship. Customers located within the United States or holding an American citizenship bear sole responsibility for their actions and decisions when using products and services of this Website. In any and all circumstances the choice
                    to use the Website, the Service and/or the Software is under full responsibility of User, who should comply with the current legislation.
                    <script type="text/javascript">
                        var yearDisclaimerNew = new Date();
                        document.getElementById("yearDisclaimerNew").innerHTML = yearDisclaimerNew.getFullYear();
                        document.querySelectorAll(".disclaimer-brand_name__new").forEach(function(brandName) {
                            brandName.innerHTML = location.hostname;
                        })
                    </script>
                </div>
            </div>
        </footer>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/css_1.css">
        <link rel="stylesheet" type="text/css" href="assets/css/css.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/main.min.css">
        <link rel="stylesheet" href="assets/css/pop-up.css">
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/commonJs.js"></script>
        <script src="assets/js/index.js"></script>
        <script src="assets/js/device.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/currency.js"></script>
        <script src="assets/js/bitcoin-widget.js" id="widget-script" data-widget-cur="EUR"></script>
        <script>
            $(".main-button").on("click", function(e) {
            
                $("html, body").animate({
                    scrollTop: $("#formfull").offset().top - 300
                }, 1000);
                return false;
            });
        </script>
        <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
        <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    </body>
</html>