<?php
include_once 'config.php';
?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Flying Stock: Kişisel yatırım danışmanınız</title>
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link href="index_files/style.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="index_files/theflyingstock-logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Open Graph -->
    <?php $seoText = 'Hoşgeldiniz!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>index_files/theflyingstock-logo.png"/>
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
    <div id="wrapper">
        <section class="home">
            <div class="container">
                <div class="home__inner">
                    <div class="home__top-text" data-name="home__top-text" data-editable="">
                        <p>Para kazanın:</p>
                    </div>
                    <div class="home__title" data-name="home__title" data-editable="">
                        <div>Amazon</div>
                    </div>
                    <div class="home__bottom-text" data-name="home__bottom-text" data-editable="">
                        <div>
                            Potansiyel karınızı hesaplayın
                        </div>
                    </div>
                    <div class="home__btn desktop-show">
                        <button class="site-btn calc_press">
                            Hesapla
                        </button>
                    </div>
                </div>
            </div>
            <div class="header-overlay">&nbsp;</div>
        </section>

        <section class="line-block">
            <div class="container">
                <p class="line-block__text">
                    Trilyon dolarlık bir şirkete yatırım yapın
                </p>
            </div>
        </section>

        <section class="form-wrapper ">
            <div class="container">
                <div class="form">
                    <p class="form__title">
                        Bugün Amazon'a yatırım yapın
                    </p>
                    <div class="form__body">
                        <div id="formWrapper1" class="formWrapper">
                            <div class="app cpmn-form lp-form lead-form placeholder-form tradingapp_emailForm form-de sv-gen-2 sv-skin sv-skin-default" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="DAHA FAZLA BILGI"></div>
                            <div style="text-align: center;margin-top:10px;">
                                <p class="errorspace" id="result" style="padding-bottom: 15px;">Amazon'a yatırım yapmak için en az 18 yaşında olmalısınız. Minimum gerekli sermaye: 2000₺</p>
                            </div>
                            <div id="pixel"></div>
                        </div>
                        <div class="form__body-down">
                            <img src="index_files/payment-methods.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="calculator-section">
            <div class="container">
                <h2 class="calculator-section__title">
                    Potansiyel kısa vadeli avantajlarınızı keşfedin <br class="mobile-show">(maks. 3 ay)
                </h2>
                <div class="calculator">
                    <div class="calculator__inner js-calculator-block">
                        <div class="calculator__input calculator__input--left">
                            <p class="calculator__input-title">
                                Yatırım
                            </p>
                            <div class="calculator__input-item">
                                <div class="calculator__input-symbol">
                                    <span>
                                        ₺
                                    </span>
                                </div>
                                <input type="text" class="site-input js-initial-sum">
                                <button class="calculator__input-btn site-btn js-button-calculate">
                                    Hesapla
                                </button>
                                <p class="js-sum-error-message">
                                    Minimum gerekli sermaye: 2000₺
                                </p>
                            </div>
                        </div>
                        <div class="calculator__input calculator__input--right">
                            <p class="calculator__input-title">
                                Potansiyel kar
                            </p>
                            <div class="calculator__input-item">
                                <div class="calculator__input-symbol">
                                    <span>
                                        ₺
                                    </span>
                                </div>
                                <input type="text" class="site-input js-final-amount" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="access">
            <div class="container">
                <h2 class="access__title">
                    Başlamak en zor kısımdır. Şimdi kaydolun ve şunlardan yararlanın:
                </h2>
                <div class="access__inner">
                    <div class="access__item">
                        <div class="access__item-image">
                            <img src="index_files/access-img1.png?v=23055" alt="">
                        </div>
                        <p class="access__item-text">
                            Güvenli ve kullanımı
                            <br>
                            kolay platform
                        </p>
                    </div>
                    <div class="access__item">
                        <div class="access__item-image">
                            <img src="index_files/access-img2.png?v=23055" alt="">
                        </div>
                        <p class="access__item-text">
                            Gelirinizi süper
                            <br>
                            hızlı çekme
                        </p>
                    </div>
                    <div class="access__item">
                        <div class="access__item-image">
                            <img src="index_files/access-img3.png?v=23055" alt="">
                        </div>
                        <p class="access__item-text">
                            Yeni başlayanlar
                            <br>
                            için borsa araçları
                        </p>
                    </div>
                    <div class="access__item">
                        <div class="access__item-image">
                            <img src="index_files/access-img4.png?v=23055" alt="">
                        </div>
                        <p class="access__item-text">
                            24 saat tam
                            <br>
                            destek
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="btn-section">
            <div class="container">
                <div class="btn-section__item">
                    <button class="site-btn js-scroll-to-form">
                        Amazon'a yapılacak bir yatırımın nasıl potansiyel olarak ikinci bir gelir kaynağı oluşturabileceğini keşfedin
                    </button>
                </div>
                <div class="btn-section__image">
                    <img src="index_files/payment-methods-2.png" alt="">
                </div>
            </div>
        </section>

        <div class="gc-footer" data-domain="njlf" data-lang="de">
            <div class="gc-footer__container">
                <div class="gc-footer__logo">
                    <img src="index_files/theflyingstock-logo.png" alt="" class="gc-footer__logo-img">
                </div>
                <div class="gc-footer__menu">
                    <div class="gc-footer__menu-item">
                        <a href="javascript:void(0)" data-name="terms" class="links alterlink"> Gizlilik Politikası </a>
                    </div>
                    <div class="gc-footer__menu-item">
                        <a href="javascript:void(0)" data-name="policy" class="links alterlink"> Şartlar ve koşullar </a>
                    </div>
                </div>
                <div class="gc-footer__disclaimer">
                    <p style="text-align: center;"><b>Tüm Amazon logoları, Amazon.com, Inc. veya iştiraklerinin ticari markalarıdır.</b></p>
                    <div>&nbsp;</div>
                    <p>Bu site bir haber ajansı, bilgi sitesi veya blog değildir. Bu, sunulan hizmetlerin ve ürünlerin amacını göstermek için hikaye anlatımı yöntemini kullanan tanıtım materyallerini içeren bir sitedir. Bu sitede anlatılan hikayeler, önerilen fikrin daha iyi anlaşılması için bilgi ve işlevlerle ilgili reklamlar veya reklam materyallerinden ibaret. Genel sorumluluk reddi: Yatırım faaliyetleri risklidir ve yatırılan tutarların tamamen kaybedilmesi ile sonuçlanabilir. Bu nedenle, bu varlıklar her tür yatırımcı için uygun olmayabilir. Bu tür bir yatırımı üstlenmeye karar vermeden önce, tüm risklerin farkında olmalı ve yetkili bir mali müşavirden tavsiye almalısınız.</p>
                    <p>*Risk Uyarısı: CFD'ler karmaşık araçlardır ve kaldıraç nedeniyle hızla para kaybetme riskini beraberinde getirirler. Perakende yatırımcı hesaplarının %74 ila %89'u CFD ticareti yaparken para kaybederler. CFD'lerin nasıl çalıştığını anlayıp anlamadığınızı ve aynı zamanda yüksek para kaybetme riskini göze alıp alamayacağınızı derinlemesine düşünmeniz tavsiye edilir.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="index_files/calculator2000.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            // scroll to main form
            let mainForm = document.querySelector('.form');

            $('.js-scroll-to-form').click(function(event) {
                scrollToElement(mainForm);
                event.preventDefault();
            });

            //scroll to section calculator
            let sectionCalculator = document.querySelector('.calculator');

            $('.calc_press').click(function(event) {
                scrollToElement(sectionCalculator);
                event.preventDefault();
            });

            //main function for scrolling by elements
            function scrollToElement(element) {
                $('html, body').animate({
                    scrollTop: $(element).offset().top
                }, 700);
            }
        });
    </script>
</body>

</html>