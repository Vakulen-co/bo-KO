<?php 
include_once 'config.php'; 
?>

<!DOCTYPE html>
<html lang="pl">

<head>

    <base href="<?php echo $base ?>">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">

    <title>INWESTUJ W NAJLEPSZE:Amazon INWESTUJ TERAZ</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css"> -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/html.css">

    <!-- Open Graph -->
    <?php $seoText = 'Witam serdecznie!'; ?>
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
<!-- MEMBERS.PHP -->
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $FacebookPixel ?>&ev=ViewContent&noscript=1"/>
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


<body id="home" class="land-page">
    <!-- main content area -->
    <div class="wrap">
        <div class="header">
            <div class="container"></div>
        </div>
        <!-- /.header-->
        <section class="top">
            <div class="bg macResBg">
                <div class="container">
                    <div class="title-container desktop-none">
                        <div class="line line1">INWESTUJ W NAJLEPSZE</div>
                        <img src="images/amazonLogo.png" class="line2"></img>
                    </div>
                </div>
            </div>
            <div class="bottom-line">
                <div class="container">
                    <div class="text-container">Zainwestuj i dowiedz si??, jak wygenerowa?? drug?? pensj??</div>
                </div>
            </div>
            <div class="container container-top-form">
                <div class="top-form">
                    <div class="form-container" id="top-form">
                        <div class="form-title">Zainwestuj w AMAZON</div>
                        <div class="form-body">

                            <div class="app" data-geo="EU" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Zarejestruj si??"></div>
                            <!-- form -->
                        </div>
                        <div class="form-info">
                            Aby zainwestowa?? w Amazon, musisz mie?? co najmniej 18 lat.</div>
                        <div class="form-trust"><img src="images/amazon-info-it/trust.png" alt="trust"></div>
                    </div>
                </div>
                <!-- /.top-form -->
            </div><img class="mobile-only company-image" src="images/amazon-info-it/company.png" alt="company">
        </section>
        <!-- /.top-->
        <section class="testimonials">
            <div class="container">
                <h2 class="title title-type1">
                    Rozpocz??cie pracy jest ??atwe, masz dost??p do:</h2>
                <div class="bullets">
                    <div class="bullet">
                        <div class="image"><img src="images/amazon-info-it/bullet11.png" alt="bullet11"></div>
                        <div class="text">
                            Bezpieczna platforma<br class="desktop-only">&#32 i autoryzowane</div>
                    </div>
                    <div class="bullet">
                        <div class="image"><img src="images/amazon-info-it/bullet12.png" alt="bullet12"></div>
                        <div class="text">Zarobki na Twoim koncie w ci??gu 24 godzin</div>
                    </div>
                    <div class="bullet">
                        <div class="image"><img src="images/amazon-info-it/bullet13.png" alt="bullet13"></div>
                        <div class="text">
                            Wysoki<br> rentowno????
                        </div>
                    </div>
                    <div class="bullet">
                        <div class="image"><img src="images/amazon-info-it/bullet14.png" alt="bullet14"></div>
                        <div class="text">
                            Prosty<br class="desktop-only">&#32 narz??dzia do nauki</div>
                    </div>
                    <div class="bullet">
                        <div class="image"><img src="images/amazon-info-it/bullet15.png" alt="bullet15"></div>
                        <div class="text">Ca??odobowe wsparcie i sta??a pomoc</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.testimonials -->
        <section class="company">
            <div class="container container-first">
                <div class="text">
                    <h2 class="title title-type2">
                        Prawdziwa firma warta wiele miliard??w dolar??w"</h2>
                    <p>
                        Kapitalizacja rynkowa Amazona osi??gn????a w 2018 roku 1 bilion dolar??w. Po drugie Bloomberg, Amazon mo??e osi??gn???? roczne przychody brutto w wysoko??ci ponad 1 biliona dolar??w 2025.
                    </p>
                    <p>
                        Wraz ze wzrostem przychod??w zdecydowanym liderem b??dzie Amazon. Inwestorzy i ludzie, kt??rzy uczestnictwo w modelu Amazon mo??e nadal korzysta?? z perspektyw rozwoju firmy Amazon.</p>
                </div>
                <div class="image desktop-only"><img src="images/amazon-info-it/company.png" alt="company"></div>
            </div>
            <div class="container container-second">
                <div class="button-container">
                    <a href="javascript:void(0)" class="button-scroll toTop">
             Dowiedz si??, jak czerpa?? korzy??ci z inwestycji w Amazon</a><img src="images/amazon-info-it/payment.png" alt="payment" class="payment"></div>
                <!-- /.button-container -->
            </div><img class="mobile-only trade-image" src="images/amazon-info-it/trade.png" alt="trade">
        </section>
        <!-- /.company -->
        <section class="trade">
            <div class="container">
                <div class="text">
                    <h2 class="title title-type2">
                        Dlaczego warto handlowa?? akcjami Amazon</h2>
                    <p>
                        Amazon szturmem podbija ??wiat, a gigant zakup??w online mo??e si?? tylko dalej rozwija?? nast??pne lata. Z tego w??a??nie powodu nale??y od razu kupi?? akcje Amazon.</p>
                    <p>
                        Bior??c pod uwag??, ??e rozw??j Amazona jest absolutnie pewny, nie mia??oby sensu straci?? mo??liwo???? natychmiastowego zgarni??cia udzia??u w zyskach. Kup akcje Amazon ju?? dzi??, to o wiele wi??cej proste ni?? my??lisz.</p>
                </div>
                <div class="image desktop-only"><img src="images/amazon-info-it/trade.png" alt="trade"></div>
                <div class="button-container mobile-only">
                    <a href="javascript:void(0)" class="button-scroll toTop">Dowiedz si??, jak czerpa?? korzy??ci z inwestycji w
             Amazon
           </a><img src="images/amazon-info-it/payment.png" alt="payment" class="payment"></div>
                <!-- /.button-container -->
            </div>
        </section>
        <!-- /.trade -->
        <section class="steps">
            <div class="container">
                <h2 class="title title-type1">Popraw swoje potencjalne zarobki:</h2>

                <div class="bullets">
                    <div class="bullet">
                        <div class="image"><img src="images/amazon-info-it/bullet21.png" alt="bullet21"></div>
                        <div class="text">B??yskawiczna pr??dko???? realizacji, aby nigdy nie przegapi?? okazji handlowej</div>
                    </div>
                    <div class="bullet">
                        <div class="image"><img src="images/amazon-info-it/bullet22.png" alt="bullet22"></div>
                        <div class="text">
                            Najlepsze centrum szkoleniowe w bran??y i ??wiatowej klasy obs??uga klienta, kt??ra Ci zapewni pozwalaj?? ci si?? uczy?? i rozwija??, aby wyr????nia?? si?? w t??umie</div>
                    </div>
                    <div class="bullet">
                        <div class="image"><img src="images/amazon-info-it/bullet23.png" alt="bullet23"></div>
                        <div class="text">
                            Bezprecedensowe warunki handlowe, aby zarobi?? wi??cej na swoich transakcjach</div>
                    </div>
                    <div class="bullet">
                        <div class="image"><img src="images/amazon-info-it/bullet24.png" alt="bullet24"></div>
                        <div class="text">
                            Intuicyjna i wydajna platforma, kt??ra daje Ci kontrol?? nad sytuacj?? ??atwiej wykonywa?? zwyci??skie transakcje/div>
                        </div>
                    </div>
                    <!-- /.bullets -->
                </div>
                <div class="button-container desktop-only"><a href="javascript:void(0)" class="button-scroll toTop">
               Dowiedz si??, jak to zrobi??
               czerp korzy??ci z inwestycji w Amazon</a><img src="images/amazon-info-it/payment.png" alt="payment" class="payment"></div>
                <!-- /.button-container -->
                <div class="form-container mobile-only">
                    <div class="form-title">
                        Zainwestuj w AMAZON</div>
                    <div class="form-body">
                        <div class="app" data-geo="EU" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Zarejestruj si??"></div>

                        <!-- form -->
                    </div>
                    <div class="form-info">
                        Aby zainwestowa?? w Amazon, musisz mie?? co najmniej 18 lat .
                    </div>
                    <div class="form-trust"><img src="images/amazon-info-it/trust.png" alt="trust"></div>
                </div>
                <!-- /.form-container-->
            </div>
        </section>
        <!-- /.steps -->
        <footer class="footer">
            <div class="container">

                <div class="disclaimer">
                    <p>High Risk Investment Warning: Investing involves a high level of risk, and not every investor is a good candidate for this vehicle We recommend consulting with a financial advisor prior to placing trades . You should not speculate
                        any capital that you cannot afford to lose Carefully consider your financial situation and level of experience when making the decision to trade In financial markets.</p>
                </div>
            </div>
        </footer>
    </div>

    </script>
    <script src="js/new/main.js"></script>
    <!-- <script src="js/scroll-down.js"></script> -->

    <div class="background">
        <div class="app-spinner loading loading-success"></div>
    </div>

    <script>
        $(window).bind('beforeunload', function() {
            $('.background').show();
            $('.app-spinner').show();
        });
    </script>
    <!-- end spinner -->


    <script>
        $(".toTop").click(function() {
            //1 second of animation time
            //html works for FFX but not Chrome
            //body works for Chrome but not FFX
            //This strange selector seems to work universally
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });
    </script>
    <script src="js/chunk-vendors.js"></script>
    <script src="js/app.js"></script>
<!-- <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
<script src="https://cdn-addict.site/addict-new/js/app.js"></script> -->
</body>

</html>