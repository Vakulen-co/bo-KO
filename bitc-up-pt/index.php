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
    <title>Bitcoin UP</title>
    <link href="images/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

    <!-- Open Graph -->
    <?php $seoText = 'Bem-vinda!'; ?>
    <meta name="description" content="<? echo $seoText; ?>" />
    <meta name="keywords" content="<? echo $seoText; ?>" />
    <meta property="og:title" content="<? echo $seoText; ?>" />
    <meta property="og:description" content="<? echo $seoText; ?>" />
    <meta property="og:image" content="<? echo $base; ?>video/poster.png" />
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
</head>

<body class="gtd-body-hidden">
    <!-- INTRO SECTION 1 START -->
    <section class="intro-section-1">
        <div class="container">
            <div class="header-atenttion mob">
            </div>
            <div class="flex-head">
                <div class="countdown-mob mob">
                    <img src="images/attention-mob.png">
                    <span class="countdown-span" id="timer"> 05:30</span>
                </div>
                <div class="head-w-2">
                    <b data-i18n="warning">ATENÇÃO</b>: <span data-i18n="due-to"> O registro se encerrará em breve. </span>
                    <span><b>CORRA</b> e se Junte ao melhor Sistema Financeiro de 
Criptomoedas Online!</span><span data-i18n=""><b>
                  <span class="dect">⚠️</span><span class="countdown-span1 dect" id="timer1">05:30</span></b>
                    </span>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- INTRO SECTION 1 END -->
    <!-- INTRO SECTION 2 START -->
    <!-- INTRO SECTION 2 END -->
    <!-- VIDEO FORM SECTION START -->
    <section class="video-form-section">
        <div class="section-2-btc dect">
            <div class="container">
                <div class="btc-body">
                    <div>
                        <img src="images/btc-logo.png">
                    </div>
                    <div class="btc-right">
                        <p>bitcoin Market Cap <img src="images/arow-up.png"> <span> <span class="currency">$</span>143,584,911,738</span>
                            bitcoin <img src="images/arow-up.png"> <span class="corency"> $ 8,874.68</span></p>
                    </div>
                </div>
                <div class="btc-footer">
                    <p>Maneira <span>Rápida e Eficaz</span> de Ficar Rico</p>
                </div>
            </div>
        </div>
        <div class="section-2-btc mob">
            <p>bitcoin Market Cap <span> <span class="currency">$</span>143,584,911,738</span></p>
            <div class="btc-body">
                <div>
                    <img src="images/btc-logo.png">
                </div>
                <div class="btc-right">
                    <p>bitcoin</p>
                    <p class="corency"><span class="currency">$</span>8,874.68</p>
                </div>
            </div>
            <div class="btc-footer">
                <p>Maneira <span>Rápida e Eficaz</span> de Ficar Rico</p>
            </div>
        </div>
        <div class="container">
            <h1 class="video-header" data-i18n="">
                Invista Hoje Mesmo e seja o <span>Próximo Milionário...
               <scpan>
            </scpan></span></h1>
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <img src="images/form-headr.png" class="mob form-headr">
                    <div class="video-wrapper">
                        <div class="video embed-responsive embed-responsive-16by9">
                            <div class="gtd-video-title gtd-date-current-date"></div>
                            <div class="up_sound">Liga o som</div>
                            <img src="images/volume.png" id="volume_up">
                            <div class="anticlicker"></div>
                            <div class="video video-js embed-responsive-item">
                                <video playsinline poster="video/poster.png" allowfullscreen="">
                                    <source src="video/video.mp4" type="video/mp4" />
                                </video>
                                <div class="play-btn"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 form-mob">
                    <div class="form">
                        <div class="preloader"></div>
                        <div class="head-form">
                            <p>Mude de Vida <span>Hoje!</span></p>
                        </div>
                        <div class="app" id="app2" data-url="<?php echo $thankyou ?>" data-butt="Participe Agora!" data-type="2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="logos-section">
        <div class="container">
        </div>
    </section>
    <!-- LOGOS SECTION END -->
    <!-- JOIN US SECTION START -->
    <section class="join-us-section">
        <div class="container">
            <div class="row-block">
                <img src="images/mcafee.png">
                <img src="images/bitgo.png">
                <img src="images/visa.png">
                <img src="images/mastercard.png">
                <div class="protected-block">
                    <div class="protected-img">
                        <img src="images/logo-secure.png">
                    </div>
                    <div class="protected-info">
                        <p><br><span>Seus dados estão sempre protegidos conosco. </span></br>
                            Você pode mudar de ideia a qualquer momento e clicar no link de cancelamento de inscrição no rodapé de qualquer e-mail que receber de nós. Ao clicar acima, você concorda que podemos processar suas informações de acordo com estes termos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="images/logo-secure.png">
                </div>
                <p><br><span>Seus dados estão sempre protegidos conosco. </span></br>
                Você pode mudar de ideia a qualquer momento e clicar no link de cancelamento de inscrição no rodapé de qualquer e-mail que receber de nós. Ao clicar acima, você concorda que podemos processar suas informações de acordo com estes termos.
                </p>
            </div>
        </div>
    </section>
    <!-- JOIN US SECTION END -->
    <!-- FAKE NEWS SECTION START -->
    <section class="steps-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="steps-info-h mob">
                        <p>Ganhe Dinheiro Online e <br>
                            <span>mais <span class=""></span>de R$6,000 por Dia y<br></span>
                            com a <span class="k-italic"> bitcoin UP!</span>
                        </p>
                    </div>
                    <img src="images/girl.jpg">
                    <div class="btn-block-form">
                        <button>Abrir Conta GRATUITA</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 girl-info">
                    <div class="steps-info-h dect">
                        <p>Ganhe Dinheiro Online <br><span>mais de <span class=""></span>R$6,000 por Dia <br></span>
                            </p><p class="p-italic">com a bitcoin UP!</p>
                        <p></p>
                    </div>
                    <div class="steps-info-b">
                        <p><span>Cuidado! Na próxima semana você deixará de 
trabalhar,<br></span>porque nos últimos 5 anos, os algoritmos da nossa plataforma online enriqueceram as pessoas e as tornaram livres financeiramente.</p>
                        <p>Somos a <a class="scroll-form">bitcoin UP</a> — um grupo de pessoas que se aproveitaram dos retornos insanos do Bitcoin e ficaram ricas sem chamar atenção!</p>
                        <p>Clique em <a class="scroll-form">"Abrir Conta GRATUITA"</a>, e adquira seu ingresso de sorte para o mundo das oportunidades do bitcoin.</p>
                    </div>
                    <div class="steps-info-f">
                        <p>Como visto em:</p>
                        <img src="images/news.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAKE NEWS SECTION END -->
    <!-- TESTIMONIALS SECTION START -->
    <section class="winners-block winners-block-mob mob">
        <div class="container">
            <div class="steps-header-puple">
                <p>As <span>Histórias de Sucesso</span> Mais Famosas</p>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="images/winner-1.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Rio de Janeiro</p>
                    <p>Maria S.
                        <span> <br><span class=""></span>R$ 41,645</span>
                        <br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>clique para ler mais...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Há 6 meses atrás, fui demitido. </p>
                    <p>Devido à falta de experiência, não consegui emprego por um longo tempo. Amigos aconselharam a <a class="scroll-form"> bitcoin UP</a>.Registrei-me e paguei <span class=""></span>R$ 1,250. </p>
                    <p>No começo, eu mesmo trabalhei com a plataforma e, uma semana depois, o saldo era de -<span class=""></span>R$ 60. Um gerente entrou em contato comigo e explicou como trabalhar com o algoritmo corretamente e, três semanas depois, minha
                        renda diária era superior a <span class=""></span>R$ 6,000! </p>
                    <p> Obrigado, <a class="scroll-form">bitcoin UP</a>!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row winner-click" style="border: 3px solid #E6AE5C;">
                <div class="winners-img">
                    <img src="images/winner-4.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">São Paulo</p>
                    <p>Gabriel C.
                        <span> <br><span class=""></span>R$ 86,535</span>
                        <br>
                    </p>
                    <div class="more-info" style="display: none;">
                        <img src="images/arrow-more.png">
                        <p>clique para ler mais...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: block;">
                    <p>“Aos 42 anos, eu estava desesperado por causa de grandes dívidas de empréstimos.</p>
                    <p>Felizmente, ouvi falar sobre a <a class="scroll-form">bitcoin UP </a> e decidi investir na plataforma - após 3 meses, consegui pagar todos os empréstimos. Agora, aluguei uma casa grande e dei um carro para minha namorada no aniversário
                        dela.</p>
                    <p>Com a <a class="scroll-form">bitcoin UP</a>, estou a caminho de ser um milionário!“
                    </p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="images/winner-3.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Manaus</p>
                    <p>Marcelo da C.
                        <span> <br><span class=""></span>R$ 49,690</span>
                        <br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>clique para ler mais...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Estou na plataforma há apenas 35 dias e costumava perder meu dinheiro em apostas esportivas, e minha vida estava um caos. </p>
                    <p>Um pouco mais tarde, vi um anúncio de uma página no Facebook e decidi experimentar a <a class="scroll-form"> bitcoin UP</a>!</p>
                    <p>Depois das duas primeiras semanas, deixei meu emprego no escritório! Agora, meus amigos e eu planejamos viajar o ano inteiro!“
                    </p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="images/winner-2.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Rio de Janeiro</p>
                    <p>Fernanda C.
                        <span> <br><span class=""></span>R$ 66,170</span>
                        <br>
                    </p>
                    <div class="more-info">
                        <img src="images/arrow-more.png">
                        <p>clique para ler mais...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>“Há alguns anos, meu marido me deixou e eu comecei a criar meus dois filhos sozinha.</p>
                    <p>Não tinha dinheiro para mandar minha filha para a faculdade. Não havia nada a perder, então investi na <a class="scroll-form">bitcoin UP</a>.</p>
                    <p>Para minha surpresa, consegui pagar a faculdade e pagar meus empréstimos! Agora, trabalho em casa online, de 20 a 30 minutos por dia, e posso dedicar tempo suficiente para criar meus filhos!“</p>
                    <p></p>
                    <p></p>
                    <div class="arrow-hide">
                        <img src="images/arrow-hide.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="winners-block dect">
        <div class="container">
            <div class="steps-header-puple">
                <p>As <span>Histórias de Sucesso</span> Mais Famosas</p>
            </div>
            <div class="row">
                <div class="steps-block steps-1">
                    <div class="col-md-4">
                        <div class="winners-puple winner-jade">
                            <img src="images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Rio de Janeiro</p>
                                <p class="winner-name">Maria S.<br>
                                    <span><span class=""></span>R$ 41,645<span></span><br>
                                </span></p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Rio de Janeiro</p>
                                <p class="winner-name">Fernanda C.<br>
                                    <span><span class=""></span>R$ 66,170<span></span><br>
                                </span></p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Manaus</p>
                                <p class="winner-name">Marcelo da C.<br>
                                    <span><span class=""></span>R$ 49,690<span></span><br>
                                </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-4-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">São Paulo</p>
                                <p class="winner-name">Gabriel C.<br>
                                    <span><span class=""></span>R$ 86,535<span></span><br>
                                </span></p>
                                <p class="winner-big-info">“Aos 42 anos, eu estava desesperado por causa de grandes dívidas de empréstimos.</p>
                                <p class="winner-big-info">Felizmente, ouvi falar sobre a <a class="scroll-form">bitcoin UP</a> e decidi investir na plataforma - após 3 meses, consegui pagar todos os empréstimos. </p>
                                <p class="winner-big-info">Agora, aluguei uma casa grande e dei um carro para minha namorada no aniversário dela. </p>
                                <p class="winner-big-info">Com a <a class="scroll-form">bitcoin UP</a>, estou a caminho de ser um milionário!“
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
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">São Paulo</p>
                                <p class="winner-name">Gabriel C.<br>
                                    <span><span class=""></span>R$ 86,535<span></span><br>
                                </span></p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Rio de Janeiro</p>
                                <p class="winner-name">Fernanda C.<br>
                                    <span><span class=""></span>R$ 66,170<span></span><br>
                                </span></p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Manaus</p>
                                <p class="winner-name">Marcelo da C.<br>
                                    <span><span class=""></span>R$ 49,690<span></span><br>
                                </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-1-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Rio de Janeiro</p>
                                <p class="winner-name">Maria S.<br>
                                    <span><span class=""></span>R$ 41,645<span></span><br>
                                </span></p>
                                <p class="winner-big-info">“Há 6 meses atrás, fui demitido.</p>
                                <p class="winner-big-info">Devido à falta de experiência, não consegui emprego por um longo tempo. Amigos aconselharam a <a class="scroll-form">bitcoin UP</a>. Registrei-me e paguei <span class=""></span>R$ 1,250. No começo, eu mesmo trabalhei com
                                    a plataforma e, uma semana depois, o saldo era de -<span class=""></span>R$ 60.</p>
                                <p class="winner-big-info">Um gerente entrou em contato comigo e explicou como trabalhar com o algoritmo corretamente e, três semanas depois, minha renda diária era superior a <span class=""></span>R$ 6,000! Obrigado,
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
                            <img src="images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Rio de Janeiro</p>
                                <p class="winner-name">Maria S.<br>
                                    <span><span class=""></span>R$ 41,645<span></span><br>
                                </span></p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">São Paulo</p>
                                <p class="winner-name">Gabriel C.<br>
                                    <span><span class=""></span>R$ 86,535<span></span><br>
                                </span></p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Rio de Janeiro</p>
                                <p class="winner-name">Fernanda C.<br>
                                    <span><span class=""></span>R$ 66,170<span></span><br>
                                </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-3-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Manaus</p>
                                <p class="winner-name">Marcelo da C.<br>
                                    <span><span class=""></span>R$ 49,690<span></span><br>
                                </span></p>
                                <p class="winner-big-info">“Estou na plataforma há apenas 35 dias e costumava perder meu dinheiro em apostas esportivas, e minha vida estava um caos.</p>
                                <p class="winner-big-info">Um pouco mais tarde, vi um anúncio de uma página no Facebook e decidi experimentar a <a class="scroll-form">bitcoin UP</a>!</p>
                                <p class="winner-big-info">Depois das duas primeiras semanas, deixei meu emprego no escritório!</p>
                                <p class="winner-big-info">Agora, meus amigos e eu planejamos viajar o ano inteiro!“
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
                            <img src="images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Rio de Janeiro</p>
                                <p class="winner-name">Maria S.<br>
                                    <span><span class=""></span>R$ 41,645<span></span><br>
                                </span></p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">São Paulo</p>
                                <p class="winner-name">Gabriel C.<br>
                                    <span><span class=""></span>R$ 86,535<span></span><br>
                                </span></p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Manaus</p>
                                <p class="winner-name">Marcelo da C.<br>
                                    <span><span class=""></span>R$ 49,690<span></span><br>
                                </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="images/winner-2-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Rio de Janeiro</p>
                                <p class="winner-name">Fernanda C.<br>
                                    <span><span class=""></span>R$ 66,170<span></span><br>
                                </span></p>
                                <p class="winner-big-info">“Há alguns anos, meu marido me deixou e eu comecei a criar meus dois filhos sozinha.Não tinha dinheiro para mandar minha filha para a faculdade.
                                </p>
                                <p class="winner-big-info">Não havia nada a perder, então investi na <a class="scroll-form">bitcoin UP</a>. Para minha surpresa, consegui pagar a faculdade e pagar meus empréstimos! </p>
                                <p class="winner-big-info">Agora, trabalho em casa online, de 20 a 30 minutos por dia, e posso dedicar tempo suficiente para criar meus filhos!“</p>
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
                <p>Como Isso Funciona?</p>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="images/question-img-1.jpg" class="dect">
                </div>
                <div class="col-md-5">
                    <div class="question-info">
                        <p> <span class="question-info-step">Passo 1</span></p>
                        <img src="images/question-img-1-mob.jpg" class="mob">
                        <p> <span class="question-info-header"> Preencha o Formulário</span></p>
                        <p> <span class="question-info-block">Depois que seu registro for aceito, você se tornará 
automaticamente no mais novo membro da <a class="scroll-form">bitcoin UP</a>. Certifique-se de gerar um código seguro para que 
ninguém possa invadir sua conta!</span></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5">
                  <div class="question-info">
                     <p> <span class="question-info-step">Passo 2</span></p>
                        <img src="images/question-img-2-mob.jpg" class="mob">
                        <p> <span class="question-info-header"> Envie Dinheiro Para Sua Conta</span></p>
                        <p> <span class="question-info-block">Como qualquer negócio, você um precisa de capital 
de giro para começar. Então, para começar a lucrar com a <a class="scroll-form">bitcoin UP</a>, você 
deve investir o valor que desejar, de <span class=""></span>R$ 1,300 ou mais.</span></p>
                    </div>
                </div>
                <div class="col-md-7">
                    <img src="images/question-img-2.jpg" class="dect">
                </div>
            </div>
            <div class="row margin-b">
                <div class="col-md-7">
                    <img src="images/question-img-3.jpg" class="phone-img dect">
                </div>
                <div class="col-md-5">
                    <div class="question-info padding-b">
                        <p> <span class="question-info-step">Passo 3</span></p>
                        <img src="images/question-img-3-mob.jpg" class="mob">
                        <p> <span class="question-info-header"> Aguarde pelo Retorno e Pronto</span></p>
                        <p> <span class="question-info-block">Após o pagamento, nosso gerente ligará para você e 
fornecerá o algoritmo de alta rentabilidade. Desfrute de negociações automáticas e precisas com 
nosso premiado algoritmo. Você também pode configurar negociações manuais, 
se preferir negociar por conta própria. O Рersonal Manager está ligando para você</span></p>
                  </div>
                  <div class="btn-block-form">
                     <button>Comece Agora</button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="winners-block faq-block-mob mob">
         <div class="container">
            <div class="steps-header-puple">
               <p>Perguntas <span>Frequentes</span></p>
                    </div>
                    <div class="row faq-click">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span> Que tipo de resultado posso esperar?</span><br>
                            <p></p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: none;">
                            <p>Os membros da Bitcoin UP normalmente lucram no mínimo <span class=""></span>R$ 6,000 diariamente, porque a plataforma funciona incansavelmente, 24 horas por dia, 7 dias por semana, tudo isso em busca de negócios bem-sucedidos
                            </p>
                            <p></p>
                            <p></p>
                            <!--             <div class="arrow-hide">
                     <img src="images/arrow-hide.png">
                     </div> -->
                        </div>
                    </div>
                    <div class="row faq-click" style="border: 2px solid rgb(230, 174, 92);background-image: url(images/arrow-hide-up.png);">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span style="color:#E6AE5C ">Quantas horas por dia eu preciso trabalhar?</span><br>
                            <p></p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: block;">
                            <p>Nossos membros trabalham em média 20 minutos por dia, ou menos. Como o software lida com a negociação, a quantidade de "trabalho" necessária é mínima.</p>
                            <p></p>
                            <p></p>
                            <!--             <div class="arrow-hide">
                     <img src="images/arrow-hide.png">
                     </div> -->
                        </div>
                    </div>
                    <div class="row faq-click">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span> Quanto custa o software?</span><br>
                            <p></p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: none;">
                            <p>Os membros da bitcoin UP recebem uma cópia do nosso software proprietário gratuitamente. Para se tornar um membro, basta preencher o formulário nesta página.</p>
                            <p></p>
                            <p></p>
                            <!--             <div class="arrow-hide">
                     <img src="images/arrow-hide.png">
                     </div> -->
                        </div>
                    </div>
                    <div class="row faq-click">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span> É como MMN ou Marketing de afiliados?</span><br>
                            <p></p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: none;">
                            <p>Isso não é como MMN, marketing afiliado ou qualquer outra coisa parecida. Bitcoin UP - software realiza transações com uma precisão de 99,4%, esta é a sua ferramenta de enriquecimento pessoal.</p>
                            <p></p>
                            <p></p>
                            <!--             <div class="arrow-hide">
                     <img src="images/arrow-hide.png">
                     </div> -->
                        </div>
                    </div>
                    <div class="row faq-click">
                        <div class="winners-img">
                        </div>
                        <div class="winners-info">
                            <span> Existem alguma taxa?</span><br>
                            <p></p>
                            <div class="more-info">
                                <p></p>
                            </div>
                        </div>
                        <div class="winners-info-hide arow-mob" style="display: none;">
                            <p>Não há taxas ocultas. Sem taxas ou comissões de corretagem. Todos os seus dados e dinheiro estão protegidos. A renda é 100% de sua propriedade e você pode sacar o dinheiro a qualquer momento.</p>
                            <p></p>
                            <p></p>
                            <!--             <div class="arrow-hide">
                     <img src="images/arrow-hide.png">
                     </div> -->
                        </div>
                    </div>
                </div>
    </section>
    <section class="faq">
        <div class="faq-header dect">
            <p>Perguntas Frequentes</p>
        </div>
        <div class="container">
            <div class="row dect">
                <div class="col-lg-7 col-md-12">
                    <div class="answer  answer-work" style="display: block;">
                        <p><span>Quantas horas por dia eu <br> preciso trabalhar?</span>
                            </p><p>Nossos membros trabalham em média 20 minutos por dia, ou menos. Como o software lida com a negociação, a quantidade de "trabalho" necessária é mínima.</p>
                        <p></p>
                    </div>
                    <div class="answer answer-expect" style="display: none;">
                        <p><span>Que tipo de resultado<br> posso esperar?</span>
                            </p><p>Os membros da Bitcoin UP normalmente lucram no mínimo <span class=""></span>R$ 6,000 diariamente, porque a plataforma funciona incansavelmente, 24 horas por dia, 7 dias por semana, tudo isso em busca de negócios bem-sucedidos
                            </p>
                        <p></p>
                    </div>
                    <div class="answer answer-cost" style="display: none;">
                        <p><span>Quanto custa <br> o software?</span>
                            </p><p>Os membros da bitcoin UP recebem uma cópia do nosso software proprietário gratuitamente. Para se tornar um membro, basta preencher o formulário nesta página.</p>
                        <p></p>
                    </div>
                    <div class="answer answer-marketing" style="display: none;">
                        <p><span>É como MMN ou <br> Marketing de afiliados?</span>
                            </p><p>Isso não é como MMN, marketing afiliado ou qualquer outra coisa parecida. Bitcoin UP - software realiza transações com uma precisão de 99,4%, esta é a sua ferramenta de enriquecimento pessoal.</p>
                        <p></p>
                    </div>
                    <div class="answer answer-fees" style="display: none;">
                        <p><span>Existem alguma taxa? <br></span>
                            </p><p>Não há taxas ocultas. Sem taxas ou comissões de corretagem. Todos os seus dados e dinheiro estão protegidos. A renda é 100% de sua propriedade e você pode sacar o dinheiro a qualquer momento.</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="faq-block">
                        <div class="question-work question" style="color: rgb(230, 174, 92);">
                            <p>Quantas horas por dia eu preciso trabalhar?</p>
                        </div>
                        <div class="question-expect question" style="color: rgb(250, 250, 255);">
                            <p>Que tipo de resultado posso esperar?</p>
                        </div>
                        <div class="question-cost question" style="color: rgb(250, 250, 255);">
                            <p>Quanto custa o software?</p>
                        </div>
                        <div class="question-marketing question" style="color: rgb(250, 250, 255);">
                            <p>É como MMN ou Marketing de afiliados?</p>
                        </div>
                        <div class="question-fees question" style="color: rgb(250, 250, 255);">
                            <p>Existem alguma taxa?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-form-block">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-form-info">
                    <p>Você ficará surpreso depois <span>de retirar seu lucro de 2 semanas!</span></p>
                        <img src="images/btc-logo.png">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="images/phone-footer.png" class="dect phone-footer-img">
                    <img src="images/phone-footer-mob.png" class="mob">
                </div>
                <div class="col-lg-4 col-md-12 padding-hide">
                    <div class="form">
                        <div class="preloader"></div>
                        <div class="head-form">
                        <p>Mude de Vida <span>Hoje!</span></p>
                        </div>
                        <div class="app" id="app3" data-url="<?php echo $thankyou ?>" data-butt="Participe Agora!" data-type="2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="join-us-footer">
        <div class="container">
            <div class="row-block">
                <img src="images/mcafee.png">
                <img src="images/bitgo.png">
                <img src="images/visa.png">
                <img src="images/mastercard.png">
                <div class="protected-block">
                    <div class="protected-img">
                        <img src="images/logo-secure.png">
                    </div>
                    <div class="protected-info">
                        <p><br><span>Seus dados estão sempre protegidos conosco. </span><br>
                        Você pode mudar de ideia a qualquer momento e clicar no link de cancelamento de inscrição no rodapé de qualquer e-mail que receber de nós. Trataremos suas informações com respeito. Ao clicar acima, você concorda que podemos processar suas informações de acordo com estes termos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="images/logo-secure.png">
                </div>
                <p><br><span>Seus dados estão sempre protegidos conosco. </span></br>
                Você pode mudar de ideia a qualquer momento e clicar no link de cancelamento de inscrição no rodapé de qualquer e-mail que receber de nós. Trataremos suas informações com respeito. Ao clicar acima, você concorda que podemos processar suas informações de acordo com estes termos.
                </p>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer">
                <div class="logo-footer">
                    <img src="images/btc-logo.png">
                </div>
                <div class="privacy-link">
                    <a href="javascript:void(0)" data-name="terms" class="alterlink">Termos Denunciar abuso / spam</a>
                    <a href="javascript:void(0)" data-name="policy" class="alterlink">Política de Privacidade</a>
                </div>
            </div>
            <div class="footer-info">
            <p>
                    IMPORTANTE: Ganhos e isenções de responsabilidade legais de ganhos e representações de renda feitos pelo bitcoin UP, (coletivamente “Este Site”, usados &#8203;&#8203;apenas como exemplos ambiciosos
                    do seu potencial de ganhos). O sucesso dos depoimentos e outros exemplos são resultados excepcionais e, portanto, não se destinam a garantir que você ou outras pessoas alcancem os mesmos resultados. Os resultados individuais variam
                    e dependem totalmente do seu uso do bitcoin UP. Este Site não é responsável por suas ações. Você é o único responsável por suas ações e decisões ao usar produtos e serviços e, portanto,
                    deve sempre ter cautela e a devida diligência. Você concorda que este Site não é responsável perante os resultados do uso de nossos produtos e serviços. Veja nossos Termos &amp; Condições para nossa isenção total de responsabilidade e
                    outras restrições. Este site pode receber uma compensação pelos produtos e serviços que eles recomendam a você. Se você não deseja que este site seja compensado por uma recomendação, recomendamos que você pesquise online por um produto
                    similar por meio de um link não afiliado. ©2021<br> USA REGULATION NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the United States. Invest in Crypto is not supervised or regulated by any financial agencies nor
                    US agencies. Any unregulated trading activity by U.S. residents is considered unlawful. bitcoin UP does not accept customers located within the United States or holding an American citizenship.
                </p>
            </div>
        </div>
    </footer>

    <link rel="stylesheet" rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/index.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/currency.js?v2"></script>
    <script src="js/script.js?v2"></script>

    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>