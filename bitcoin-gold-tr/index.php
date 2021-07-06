<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="tr" style="margin-top:0 !important;">

<head>
    <base href="<?php echo $base ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/btcgold_files/mtm_favicon.ico">
    <title>Bitcon Gold</title>
    <!-- Open Graph -->
    <?php $seoText = 'Hoşgeldiniz!'; ?>
    <meta name="description" content="<? echo $seoText; ?>" />
    <meta name="keywords" content="<? echo $seoText; ?>" />
    <meta property="og:title" content="<? echo $seoText; ?>" />
    <meta property="og:description" content="<? echo $seoText; ?>" />
    <meta property="og:image" content="<? echo $base; ?>assets/poster.png" />
    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="450" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $base; ?>" />
    <link rel="canonical" href="<?php echo $base; ?>" />
    <!-- Pixel -->
    <meta name="pixel_id" content="<?php echo $FacebookPixel; ?>">
    <!--  Pixel Code -->
    <?php if ($FacebookPixel) : ?>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $FacebookPixel ?>&ev=PageView&noscript=1" />
    <?php endif; ?>

    <?php if ($TiktokPixel) : ?>
        <script>
            ! function(w, d, t) {
                w.TiktokAnalyticsObject = t;
                var ttq = w[t] = w[t] || [];
                ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie"], ttq.setAndDefer = function(t, e) {
                    t[e] = function() {
                        t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                    }
                };
                for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
                ttq.instance = function(t) {
                    for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
                    return e
                }, ttq.load = function(e, n) {
                    var i = "https://analytics.tiktok.com/i18n/pixel/events.js";
                    ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                    var o = document.createElement("script");
                    o.type = "text/javascript", o.async = !0, o.src = i + "?sdkid=" + e + "&lib=" + t;
                    var a = document.getElementsByTagName("script")[0];
                    a.parentNode.insertBefore(o, a)
                };
                ttq.load('<?php echo $TiktokPixel; ?>');
                ttq.page();
            }(window, document, 'ttq');
        </script>
    <?php endif; ?>

    <?php if ($GooglePixel) : ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-<?php echo $GooglePixel; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-<?php echo $GooglePixel; ?>');
        </script>
    <?php endif; ?>
    <!-- End  Pixel Code -->
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <link rel="stylesheet" href="assets/btcgold_files/forms_native.min.css">
    <link rel="stylesheet" href="assets/btcgold_files/bootstrap.min.css">
    <link rel="stylesheet" href="assets/btcgold_files/html.css">
</head>

<body class="landing-template-default single single-landing postid-118976 tr mtm landing-mtm_bitcoingold_hakkinda_r_tr">
    <nav class="navbar navbar-expand-lg navbar-light static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/btcgold_files/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav m-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="javascript:void(0);">Bitcon Gold Hakkında<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature-section">Nasıl başlarım?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile-section">Bizimle
                            Kazananlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#template-section">Kurucumuz</a>
                    </li>
                </ul>
            </div>
            <div id="nav-slider" class="carousel slide pl-3 d-none d-lg-block" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="assets/btcgold_files/cemal.png" width="175">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/btcgold_files/arda-s.png" width="175">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/btcgold_files/Ceyhun-A-Banner.png" width="175">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/btcgold_files/dilek-y.png" width="175">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/btcgold_files/emine-s.png" width="175">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/btcgold_files/Esma-K.png" width="175">
                    </div>
                    <div class="carousel-item active carousel-item-left">
                        <img src="assets/btcgold_files/fatih.png" width="175">
                    </div>
                    <div class="carousel-item carousel-item-next carousel-item-left">
                        <img src="assets/btcgold_files/kerem-d.png" width="175">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/btcgold_files/mert-d.png" width="175">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/btcgold_files/murat-z.png" width="175">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/btcgold_files/neslihan.png" width="175">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/btcgold_files/ozge-m.png" width="175">
                </div>
            </div>
        </div>
    </nav>

    <div id="form-section">
        <div class="container">
            <div class="heading1 row justify-content-center text-center align-items-center">
                <h2>Bitcoin İle Yüksek Kazançlar Sağlayın<br> Siz de günlük <span> 3250 $ </span> kazanabilirsiniz!</h2>
            </div>
            <div class="form-video">
                <div class="row">
                    <div class="col-md-5 form-begin">
                        <style>
                            #restricted_country {
                                max-width: 100vw;
                            }
                        </style>

                        <div id="popup_terms" class="popup_terms">
                            <!--  terms popup-->
                            <div class="inner_wrapper">
                                <div class="inner">
                                    <p>Kişisel bilgilerinizi MTM'e vererek (a) bu bilgileri üçüncü tarafça denetlenen
                                        mali borsa aracıları
                                        ve/veya iştiraklerle paylaşmamıza ve (b) MTM ve/veya bu üçüncü taraf borsa
                                        aracıları ve/veya
                                        iştiraklerinde e-posta promosyonları almayı kabul ediyorsunuz.</p>
                                </div>
                            </div>
                        </div>


                        <div id="restricted_country" class="restricted_country">
                            <!-- restricted_countries_popup -->
                            <div class="inner_wrapper">
                                <div class="inner">




                                    <!-- the loop --> <strong>Bu ülkede yaşayan kişilerin döviz ortaklarımıza
                                        kaydolmasına izin
                                        verilmemektedir.</strong><br>Başka bir vatandaşlığınız varsa kayıt sırasında
                                    uyruk olarak bu diğer
                                    ülkeyi seçebilirsiniz. Bu web sitesine erişerek, bu web sitesinde gösterilen içeriği
                                    görüntülemeye ve
                                    ortaklarımıza üzerinden alım satım yapmaya yerel hükümetinizin düzenlemeleri ve
                                    yasaları kapsamında
                                    size izin verildiğini onaylarsınız. Bu web sitesindeki içeriğe erişiminiz yasaklanır
                                    ve/veya bu web
                                    sitesi üzerinden alım satım yapmanız yasaklanır ya da alım satım yapmaya izniniz
                                    olup olmadığı
                                    konusunda bir şüphe varsa lütfen bu web sitesinden çıkın.
                                    <p style="text-align: center;"><span class="btnCancel">Başka bir milliyete
                                            sahibim</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="form_wrapper whiteLabel_form">
                            <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="ÜCRETSİZ KAYIT"></div>
                        </div><br>
                    </div>
                    <div class="col-md-7">
                        <div class="videoWrapper" id="how_it_works">
                            <div class="video">
                                <video controls="controls" poster="assets/poster.png" width="100%" allowfullscreen="">
                                    <source src="video/BitcoinHaberler.mp4" type="video/mp4" />
                                </video>
                                <div class="play-btn"></div>
                            </div>
                            <!-- <div class="embed-responsive embed-responsive-16by9"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="feature-section">
        <div class="wraper">
            <div class="container">
                <div class="heading2 ">
                    <h1>Kazanmaya başlamak ise çok kolay!</h1>
                </div>
                <div class="row feature-meta">
                    <div class="col-sm-4">
                        <img src="assets/btcgold_files/asama1.png" class="meta-data">
                        <h3>Hesabını oluştur</h3>
                        <h5 class="meta-data">Kayıt formunu doldurarak hesabını oluştur.</h5>
                        <p>Hesabını oluşturduğunda sana bir yatırım uzmanı ayarlayacağız.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/btcgold_files/asama2.png" class="meta-data">
                        <h3>Hesabını aktifleştir</h3>
                        <h5 class="meta-data">Yatırımını yaparak hesabı aktif edebilirsin.</h5>
                        <p>Yazılımımız tamamen ücretsizdir ama başlayabilmek için ufak bir miktar yatırım yapman
                            gerekir.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/btcgold_files/asama3.png" class="meta-data">
                        <h3>Kazancının keyfini çıkar</h3>
                        <h5 class="meta-data">Fonlamanı yaptıktan hemen sonra yatırdığın paranın çok daha fazlasını
                            kazanmaya
                            başlayabilirsin.</h5>
                        <p>Bizim sinyallerimizi takip ederek tüyolar alabilir kazancını arttırabilirsin..</p>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div id="profile-section">
                    <div class="container">
                        <div class="heading3 row justify-content-center text-center align-items-center">
                            <h1>Sistemimizi Kullananların Bizlere Yorumları</h1>
                        </div>
                        <div class="row profile-block">
                            <div class="col-md-6">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/btcgold_files/profile1.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Burcu Tekneci</h4>
                                            <p class="card-text">Ben geçen ay işten çıkarıldım. İlk başta ne yapacağım
                                                diye düşündüm ve çok
                                                üzülmüştüm. İş ararken bu sistemi gördüm. Gerçekten her işte bir hayır
                                                varmış diyerek yatırım
                                                yaptım. 3 hafta sonra 25.000 USD kazandım. Türkiyede dolar artmışken o
                                                kadar iyi oldu ki. Erman
                                                Yılmazer’in sistemi tavsiyemdir.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/btcgold_files/profile2.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Oğuz Alp Pehlivan</h4>
                                            <p class="card-text">İstediğim tekneyi almak için 10.000$ eksiğim kaldı
                                                gerisini bu sistem
                                                sayesinde kazandım bile. Banka hesabımda o kadar çok param var ki her
                                                sabah uyandığımda rüyada
                                                olduğumu düşünüyorum. Hayatım boyunca bugünleri beklemişim. Sonunda
                                                kendi işimin patronu oldum.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/btcgold_files/profile3.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Barış Çetinok</h4>
                                            <p class="card-text">52 gündür Bitcoin Gold platformunda kriptolara yatırım
                                                yapıyorum, hayatım
                                                şimdiden değişti. İlk başladığımda hesabımda 300 dolar vardı şuan ise
                                                20.000 dolarım var.
                                                Hayalini kurduğum Avrupa tatilinin keyfini çıkardım. Böyle bir imkan
                                                sağladığın için teşekkürler
                                                Erman! </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/btcgold_files/profile9.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Ege Özyurt</h4>
                                            <p class="card-text">Geçen ay işten ayrıldım, şuan dünyayı dolaşıyorum.
                                                Hayatım hiç bu kadar güzel
                                                olmamıştı. Keşke daha önce bu sistemle karşılaşsaydım.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/btcgold_files/profile6.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Esma Kalabak</h4>
                                            <p class="card-text">Ben Bitcoin Gold ailesine 3 gün önce katıldım.
                                                Hesabımda 5000$ görüyorum yani
                                                25.000 TL. Gerçek mi bu?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/btcgold_files/profile4.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">İnci Metin Samur</h4>
                                            <p class="card-text">Biz durumu iyi olan bir aileyiz. Eşimle yatırımlarımızı
                                                daha iyi
                                                değerlendireceğimiz, banka faizinden daha iyi kazanç sağlayacağımız bir
                                                platform ararken bulduk
                                                Bitcoin Gold’u. Zaten Bitcoin’in kazandırdığını biliyorduk. Küçük bir
                                                miktarla deneme yaptık ve
                                                10.000 dolar yatırdık, bir haftanın sonunda yaklaşık 5 katını kazanınca
                                                doğru yerde yatırım
                                                yaptığımızı anladık. Biz çok memnunuz.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/btcgold_files/profile7.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Tolga Sönmez</h4>
                                            <p class="card-text">Ben üniversiteden geçen sene mezun oldum ve 7 aydır iş
                                                arıyordum.
                                                Üniversitenin bana kazandıramadığını bu sistem kazandırdı. Avukat olmak
                                                yerine kripto para
                                                uzmanı oldum artık. Bir avukatın kazandığının 10 katını kazanıyorum.
                                                Şimdiden istediğim arabayı
                                                aldım. Her şey Bitcoin Gold sayesinde.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/btcgold_files/profile5.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Furkan Türkkan</h4>
                                            <p class="card-text">Borçlarımdan kurtulabilmek için akşamları çalışacağım
                                                bir iş arıyordum. Bir
                                                gün haber sitesinde denk geldiğim bu sistemle hayatım değişti. Bugüne
                                                kadar borçlarımı boşuna
                                                dert etmişim. Bu sistem sayesinde tüm borçlarımdan kurtuldum, insanın
                                                kimseye borcu olmaması ne
                                                güzel bir hismiş. Şimdiyse hayalini kurduğum villayı almak için
                                                yatırımlara devam ediyorum. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img src="assets/btcgold_files/profile8.png" class="img-fluid" alt="image">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <h4 class="card-title">Irmak Albayrak</h4>
                                            <p class="card-text">Bu sistem sayesinde aylık maaşımı bir günde
                                                kazanıyorum, ilk önce ekstra
                                                gelir kaynağı olarak düşünmüştüm ama artık sadece evde oturmamak için
                                                çalışıyorum. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="template-section">
                    <div class="temlate-img">
                        <img src="assets/btcgold_files/full-bg.png" alt="image">
                    </div>
                </div>

                <div id="footer-section">
                    <div class="container">
                        <div class="row justify-content-center text-center align-items-center soft-img">
                            <img src="assets/btcgold_files/soft.png" alt="soft">
                        </div>
                        <div class="row justify-content-center text-center align-items-center footer-meta">
                            <div class="copyright">
                                <p>© <span id="year">2021</span> All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div id="footer_disclaimer" class="container">
            <p>MTM’nin hizmeti, CFD’leri veya diğer finansal ürünleri satın almak veya satmak için profesyonel tavsiye
                olarak
                düşünülmemelidir; broker kullanımı, müşterinin tek risk ve yargısına tabidir. Burada duyurulan bilgiler
                mutlaka
                gerçek zamanlı olmayabilir. Yatirimi yapan finansal ürünler yüksek düzeyde bir risk taşır ve yatırım
                yapanin
                sermayesinin tamamen kaybolmasına neden olabilir. Yatirima karar vermeden önce, Broker’ın Sartlar ve
                Kosullarini
                ve risk maddelerini mutlaka okuyun.
                <a href="javascript:void(0)" data-name="policy" class="alterlink">Gizlilik Politikası</a>
                <a href="javascript:void(0)" data-name="terms" class="alterlink">Risk Açıklaması</a>
            </p>

            <p style="text-align: center;">
                <img class="alignnone size-full wp-image-1758" src="assets/btcgold_files/tr_b.png" alt="" width="146">
            </p>
        </div>
        </script>
    </footer>
    <script src="assets/btcgold_files/jquery-3.3.1.min.js"></script>
    <script src="assets/btcgold_files/bootstrap.min.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>