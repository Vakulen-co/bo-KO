<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="el">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="utf-8">
    <title>Easy Bitcoin</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    
    <!--STYLES-->

    <link href="css/css.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="images/favicon.png" rel="icon" type="image/png">
    <link href="css/css_2.css" rel="stylesheet">
    <link href="css/pop-up.css" rel="stylesheet">
    <link href="css/css_3.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <!--STYLES END-->
        <!-- Open Graph -->
    <?php $seoText = 'Добро пожаловать!'; ?>
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

<body>

    <div class="hover-modal"></div>

    <header class="head">
        <div style="display: inline-block;position: absolute;top: 4px;left: 50%;transform: translateX(-50%);font-size: .5em;opacity: .5;font-family: inherit;"><span style="font-size: 12px;" class="topTextASet">-&nbsp;Advertorial&nbsp;<a href="abuse_report.html" target="_blank" style="font: inherit;color: inherit;text-decoration: inherit;">&amp;&nbsp;DMCA&nbsp;Protected</a>&nbsp;-</span></div>
        <div class="head-img">
            <img class="logo" src="images/logo.png">
        </div>
        <div class="head-black-right">
            <div class="head-block-1" style="display: none;">
                <span class="head-p-1">EUR:</span>
                <span class="head-p-2">100</span>
                <img class="arrow" src="images/arrow.png">
                <span class="head-p-2"><span class="currency">€</span>9,92</span>
            </div>
            <div class="head-block-2" style="display: none;">
                <span class="head-p-1">BTC:</span>
                <span class="head-p-2">97 886</span>
                <img class="arrow-up" src="images/arrow-up.png">
                <p class="head-disc">DISCLAIMER</p>
            </div>
        </div>
    </header>
    <section class="section-1">
        <div class="container-fluid">
            <div class="row sec-1-block">
                <div class="col-md-6">
                    <p class="sec-1-p">
                        Το Bitcoin είναι ένα παγκόσμιο, ουδέτερο και ψηφιακό νόμισμα.
                    </p>
                    <p class="sec-1-p-2">
                        Είναι χρήματα με έναν εντελώς νέο τρόπο, συνεπώς καταλαβαίνουμε ότι μπορεί να είναι λίγο μπερδεμένο. Αλλά μην ανησυχείτε, θα εξηγήσουμε τα πάντα.
                    </p>
                    <div class="flex-block">
                        <button class="scroll-form">
                        ΕΓΓΡΑΦΕΙΤΕ ΠΑΡΑΚΑΤΩ
                    </button>
                        <span class="tag-button_video">και θα σας καθοδηγήσουμε <br>
	           στη διαδικασία</span>
                    </div>
                </div>
                <div class="col-md-6 video-block_wrap">
                    <div class="video-wrap">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video width="100%"  src="video/video.mp4" frameborder="0" controls  autoplay muted></video>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" id="sroll-hear" src="images/index-apps.png">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="row action-form">
                            <div class="col-xs-12">
                                <div class="form-header_wrap">
                                    <p class="form-header">ΕΓΓΡΑΦΕΙΤΕ ΠΑΡΑΚΑΤΩ</p>
                                    <p class="form-header-p">και θα σας καθοδηγήσουμε στη διαδικασία</p>
                                </div>
                                    <div class="form-fields">

                                        <div class="row" style="position: relative;">
 
                                            <div class="first_step" id="account_information">
                                                <div class="step-block_wrapper">
                                                    <ul class="step-counter">
                                                        <li class="step_block active">1</li>
                                                        <li class="step_block">2</li>
                                                        <li class="step_block">3</li>
                                                    </ul>
                                                </div>
                                            <!-- FORM -->
                                            <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Κάνε εγγραφή τώρα"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <img alt="Sponsors" class="form-images_sponsors" src="images/form-sponsor.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p class="head-sec-2">Κέρδος 7.238 ευρώ καθημερινά?</p>
                    <p class="p-sec-2"> Είναι δυνατό και εδώ θα δείτε πώς μπορείτε να το κάνετε:</p>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row section-step_2">
                <div class="col-md-4">
                    <div class="step-1-man">
                        <img class="img-responsive" src="images/man.png">
                    </div>
                    <p class="header-steps">Oδηγός από ειδικούς</p>
                    <p class="body-steps"> Το Easy Bitcoin σας παρέχει επαγγελματικές συμβουλές από ειδικούς στα χρηματοοικονομικά για να σας βοηθήσουν να κερδίζετε περισσότερα.</p>
                </div>
                <div class="col-md-4">
                    <div class="step-1-man">
                        <img class="img-responsive" src="images/earnings.png">
                    </div>
                    <p class="header-steps">Ισχυρή τεχνολογία</p>
                    <p class="body-steps"> Το Easy Bitcoin χρησιμοποιεί την πιο πρόσφατη υπερσύγχρονη τεχνολογία και εγγυάται τα κέρδη σας.</p>
                </div>
                <div class="col-md-4">
                    <div class="step-1-man">
                        <img class="img-responsive" src="images/pay-per-click.png">
                    </div>
                    <p class="header-steps">Κερδίστε Αμέσως!</p>
                    <p class="body-steps">Με τη φανταστική τεχνολογία του Easy Bitcoin μπορείτε να ξεκινήσετε να κερδίζετε από τη στιγμή που θα εγγραφείτε.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p class="sec-1-p">Τα μέλη μας σε ολόκληρο τον κόσμο κερδίζουν εκατομμύρια από το Easy Bitcoin, εσείς λοιπόν γιατί δεν το κάνετε?</p>
                    <p class="sec-1-p-2">Εγγραφείτε σήμερα και γίνετε εκατομμυριούχος αύριο. Είναι τόσο απλό.</p>
                    <button class="scroll-form-btn" onclick="exitpage=false;">
                    Εγγραφείτε εδώ
                </button>
                </div>
                <div class="col-md-6 webpage-block_group">
                    <img class="img-responsive" src="images/group-2.gif" style="box-shadow: 0 5px 12px 0px;border-radius: 8px;">
                    <!--<img src="images/dashboard.gif" class="img-responsive dashboard">-->
                </div>
            </div>
        </div>
    </section>

    <section class="section-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- <img src="images/setion-3.png" class="img-responsive"> -->
                </div>
                <div class="col-md-6">
                    <div class="block-info">
                        <img class="img-responsive left-img" src="images/ku.png">
                        <p class="info-p">Ο χρόνος σας είναι περιορισμένος, οπότε μην τον σπαταλάτε ζώντας τη ζωή κάποιου άλλου...
                        </p>
                        <p class="info-p">
                            Μην αφήνετε το θόρυβο από τις απόψεις άλλων ανθρώπων να πνίξουν τη δική σας εσωτερική φωνή. Και το πιο σημαντικό, να έχετε το θάρρος να ακολουθήσετε την καρδιά και τη διαίσθησή σας. </p>
                        <p class="info-p-2">Easy Bitcoin, CEO, Marc Jacobs</p>
                        <img class="img-responsive right-img" src="images/pu.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p class="head-sec-3-p">Όλοι αυτοί οι άνθρωποι έχουν ήδη κάνει μεγάλα κέρδη με:
                    </p>
                    <!--<p class="head-sec-3-p bold">Easy Bitcoin</p>-->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex">
                <div class="block-review">
                    <div class="review">
                        <div class="person">
                            <img class="person-img img-responsive" src="images/person-1.jpg">
                            <div class="block-name">
                                <p class="person-p">Έλαβε
                                    <!--<span class="currency">€</span>--><span class="sum"> 700</span> Ευρώ
                                    <div class="group-time">
                                        <span class="time">16:22</span>
                                        <span class="date">16.11.2019</span>
                                    </div>

                                </p>
                                <p class="person-name">Irene Angelos</p>
                            </div>
                        </div>
                        <div class="review-info">
                            <p class="review-p">"Όταν έκανα εγγραφή στo Easy Bitcoin περίπου πριν από 2 μήνες, ούτε στην πιο τρελή φαντασία μου δεν θα μπορούσα να φανταστώ τι θα συμβεί μετά την εγγραφή μου για αυτό το δωρεάν λογισμικό. Θα μπορούσα να ανακουφιστώ από το χρέος
                                μου των 4.000 ευρώ, και δεν υπάρχει τίποτα καλύτερο από το αίσθημα χωρίς χρέη. Τώρα θα αγοράσω το σπίτι των ονείρων μου. Ακόμα δεν μπορώ να πιστέψω ότι συμβαίνει σε μένα..."</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="person">
                            <img class="person-img img-responsive" src="images/person-2.jpg">
                            <div class="block-name">
                                <p class="person-p">Έλαβε
                                    <!--<span class="currency">€</span>--><span class="sum">360 </span> Ευρώ
                                    <div class="group-time">
                                        <span class="time">16:30</span>
                                        <span class="date">11.10.2019</span>
                                    </div>
                                </p>
                                <p class="person-name">Dimitris Angelopoulos</p>
                            </div>
                        </div>
                        <div class="review-info">
                            <p class="review-p">“Πρέπει να ζητώ συνεχώς από τη γυναίκα μου να με δαγκώνει στο χέρι όταν ελέγχω το υπόλοιπο του λογαριασμού μου. Δεν έχω δει ποτέ υπόλοιπο σε τραπεζικό λογαριασμό υψηλότερο από αυτό. Και απλώς συνεχίζει να αυξάνεται κάθε μέρα...
                                αυτό είναι που περίμενα σε όλη μου τη ζωή. Τώρα έχω πάρει μια γεύση από το πώς είναι να είμαι το δικό μου αφεντικό και να κερδίζω δεκάδες χιλιάδες ευρώ κάθε εβδομάδα. Δεν θα επιστρέψω ποτέ στην προηγούμενη ζωή μου!”</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="person">
                            <img class="person-img img-responsive" src="images/person-3.jpg">
                            <div class="block-name">
                                <p class="person-p">Έλαβε
                                    <!--<span class="currency">€</span>--><span class="sum">460 </span> Ευρώ
                                    <div class="group-time">
                                        <span class="time">16:24</span>
                                        <span class="date">16.11.2019</span>
                                    </div>
                                </p>
                                <p class="person-name">Athanasios Bakirtzis</p>
                            </div>
                        </div>
                        <div class="review-info">
                            <p class="review-p">“Τα αποτελέσματα που παίρνετε μέσω αυτού του λογισμικού μιλούν από μόνα τους... Όπως υποσχέθηκε, κέρδισα 23.000 eυρώ κάθε μέρα. Πρέπει πραγματικά να πω περισσότερα?”
                            </p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="person">
                            <img class="person-img img-responsive" src="images/person-4.jpg">
                            <div class="block-name">
                                <p class="person-p">Έλαβε
                                    <!--<span class="currency">€</span>--><span class="sum"> 356</span> Ευρώ
                                    <div class="group-time">
                                        <span class="time">16:19</span>
                                        <span class="date">05.09.2019</span>
                                    </div>
                                </p>
                                <p class="person-name">Spiros Christoforou</p>
                            </div>
                        </div>
                        <div class="review-info">
                            <p class="review-p">“Τελικά ξέρω πώς είναι να ζεις μια ονειρική ζωή. Δεν χρειάζεται πλέον να αισθάνομαι ότι κάθομαι στην άλλη πλευρά όπου το γρασίδι δεν είναι τόσο πράσινο, ενώ όλοι οι άλλοι περνούν καλά. Το Easy Bitcoin μου επέτρεψε να εγκαταλείψω
                                τη δουλειά μου και να ζήσω έναν ελίτ τρόπο ζωής.”</p>
                        </div>
                    </div>
                </div>

                <div class="block-review">
                    <div class="review">
                        <div class="person">
                            <img class="person-img img-responsive" src="images/person-5.jpg">
                            <div class="block-name">
                                <p class="person-p">Έλαβε
                                    <!--<span class="currency">€</span>--><span class="sum">1 526 </span> Ευρώ
                                    <div class="group-time">
                                        <span class="time">16:22</span>
                                        <span class="date">16.11.2019</span>
                                    </div>
                                </p>
                                <p class="person-name">Theodoros Filo</p>
                            </div>
                        </div>
                        <div class="review-info">
                            <p class="review-p">“Χθες εγκατέλειψα τη δουλειά μου και σήμερα είμαι σε πάρτυ σε πισίνα στο Λας Βέγκας! Η ζωή είναι ΤΡΕΛΗΗΗΗΗ. Όλα οφείλονται στο Easy Bitcoin.”</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="person">
                            <img class="person-img img-responsive" src="images/person-8.jpg">
                            <div class="block-name">
                                <p class="person-p">Έλαβε
                                    <!--<span class="currency">€</span>--><span class="sum">467 </span> Ευρώ
                                    <div class="group-time">
                                        <span class="time">16:32</span>
                                        <span class="date">03.09.2019</span>
                                    </div>
                                </p>
                                <p class="person-name">Emmanuel Diakos</p>
                            </div>
                        </div>
                        <div class="review-info">
                            <p class="review-p">“Στην πραγματικότητα, ήμουν προηγουμένως επενδυτής, και δεν έχω δει ποτέ οτιδήποτε παρόμοιο με αυτό κατά τη διάρκεια των 10 χρόνων μου στον κλάδο. Όλοι μου οι συνάδελφοι σκέφτηκαν ότι ήμουν τρελός όταν εγκατέλειψα την εταιρεία
                                για να επενδύσω στο λογισμικό του Easy Bitcoin με πλήρη απασχόληση. Ένα κέρδος 73.000 ευρώ έκανε τους παλιούς μου συναδέλφους να ζηλέψουν όσο ποτέ άλλοτε.”</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="person">
                            <img class="person-img img-responsive" src="images/person-6.jpg">
                            <div class="block-name">
                                <p class="person-p">Έλαβε
                                    <!--<span class="currency">€</span>--><span class="sum">2 000 </span> Ευρώ
                                    <!--(2 000 EUR)-->
                                    <div class="group-time">
                                        <span class="time">16:35</span>
                                        <span class="date">12.10.2019</span>
                                    </div>
                                </p>
                                <p class="person-name">Elisabeth Doukas</p>
                            </div>
                        </div>
                        <div class="review-info">
                            <p class="review-p">“Είμαι μέλος του Easy Bitcoin για μόλις 47 ημέρες, αλλά σε σύντομο χρόνο η ζωή μου άλλαξε εντελώς! Δεν είναι μόνο ότι κέρδισα τις πρώτες μου 50 χιλιάδες, είναι επίσης ότι συνάντησα μερικούς από τους πιο καταπληκτικούς ανθρώπους
                                που έχω γνωρίσει ποτέ.”</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="person">
                            <img class="person-img img-responsive" src="images/person-7.jpg">
                            <div class="block-name">
                                <p class="person-p">Έλαβε
                                    <!--<span class="currency">€</span>--><span class="sum">1 275 </span> Ευρώ
                                    <!--(1 275 EUR)-->
                                    <div class="group-time">
                                        <span class="time">16:26</span>
                                        <span class="date">01.09.2019</span>
                                    </div>
                                </p>
                                <p class="person-name">Elias Economos</p>
                            </div>
                        </div>
                        <div class="review-info">
                            <p class="review-p">“Πριν από δύο εβδομάδες απολύθηκα. Χωρίς άλλες εναλλακτικές σκέφτηκα ότι η ζωή μου τελείωσε. Τώρα κερδίζω πάνω από 2.475 eυρώ τη μέρα. Είναι η πρώτη φορά σε 2 μήνες που ο λογαριασμός μου δεν καταλήγει άδειος.”</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="how-it-works-section text-center">
        <div class="container">
            <div class="how-it-works-wrapper">
                <h1 class="dark-purple bold how-it-works-header" data-i18n="">Πώς λειτουργεί</h1>
                <div class="row">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <h3 class="step-header white step-header-1" data-i18n="">βήμα 1</h3>
                            <div class="step-img-wrapper">
                                <img alt="step 1" class="step-img" src="images/step-img-1.png">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n="">Συμπληρώστε τη φόρμα εγγραφής σε αυτή τη σελίδα</h5>
                            <p class="step-description" data-i18n=""> Μόλις γίνει δεκτή η εγγραφή σας, θα γίνετε αυτόματα ένα νέο μέλος του Easy Bitcoin. Αυτό σημαίνει ότι μπορείτε να λάβετε το προστατευμένο με δίπλωμα ευρεσιτεχνίας λογισμικό διαπραγμάτευσης Bitcoin δωρεάν.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <h3 class="step-header white step-header-2" data-i18n="">βήμα 2</h3>
                            <div class="step-img-wrapper">
                                <img alt="step 2" class="step-img" src="images/step-img-2.png">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n="">Καταθέστε χρήματα στον λογαριασμό σας
                            </h5>
                            <p class="step-description">
                                <span data-i18n="">  Όπως σε κάθε επιχείρηση, χρειάζεστε ένα αρχικό κεφάλαιο για να
  ξεκινήσετε. Για να αρχίσετε να κερδίζετε χρήματα με τη βοήθεια του Easy Bitcoin
  πρέπει να επενδύσετε στο λογισμικό Easy Bitcoin
  250 eυρώ ή περισσότερα.</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <h3 class="step-header white step-header-3" data-i18n="">βήμα 3</h3>
                            <div class="step-img-wrapper">
                                <img alt="step 3" class="step-img" src="images/step-img-3.png">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n="">Αρχίστε να κερδίζετε χρήματα</h5>
                            <p class="step-description" data-i18n="">
                                Κάντε κλικ στην αυτόματη συναλλαγή για να έχετε τα σωστά και ακριβή κέρδη με αυτόματο πιλότο, μέσω του βραβευμένου μας αλγορίθμου. Μπορείτε επίσης να επαναφέρετε τη χειροκίνητη συναλλαγή εάν προτιμάτε να αγοράζετε και να πουλάτε μόνοι σας.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-reg">
                        <p>Το Easy Bitcoin μπορεί να σας βοηθήσει να εξασφαλίσετε το μέλλον σας. Χάρη στην τελευταία τεχνολογία, τώρα μπορείτε να κερδίσετε σε συναλλαγές Bitcoin παγκοσμίως. </p>
                        <p> Το μόνο που έχετε να κάνετε είναι να εγγραφείτε σήμερα και να συνεργαστείτε με ειδικούς που θα σας βοηθήσουν να κάνετε τα όνειρά σας πραγματικότητα. Παίρνετε έναν δωρεάν λογαριασμό κι έτσι μπορείτε να αρχίσετε να κερδίζετε σήμερα.
                            </p>
                    </div>
                    <div class="info-reg-2">
                        <p class="info-reg-2-head">Εγγραφείτε σήμερα και κάντε την πρώτη σας επένδυση:</p>
                        <div class="info-check">
                            <p>Καταθέστε τουλάχιστον 250 eυρώ στον λογαριασμό σας.</p>
                            <p>Λάβετε ένα δωρεάν τηλεφώνημα από έναν ειδικό στα χρηματοοικονομικά.</p>
                            <p>Ξεκινήστε να κερδίζετε!</p>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 no-padding_sec7">
                    <div class="row action-form action-footer">
                        <div class="form-header_wrap">
                            <p class="form-header">Εγγραφείτε παρακάτω</p>
                            <p class="form-header-p">και θα σας καθοδηγήσουμε στη διαδικασία</p>
                        </div>
    
                                <div class="form-fields">

                                    <div class="row" style="position: relative;">

                                        <div class="first_step" id="account_information">
                                            <div class="step-block_wrapper">
                                                <ul class="step-counter">
                                                    <li class="step_block active">1</li>
                                                    <li class="step_block">2</li>
                                                    <li class="step_block">3</li>
                                                </ul>
                                            </div>
                                        <!-- FORM -->
                                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Κάνε εγγραφή τώρα"></div>
                                        </div>

                                    </div>
                                </div>
                                <img alt="Sponsors" class="form-images_sponsors" src="images/form-sponsor.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="photo-info">
                        <p>Κάντε το όνειρό σας πραγματικότητα με το Easy Bitcoin</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="section-9">
        <div class="footer">
            <div class="col-sm-8">
                <div class="head-img">
                    <img class="logo" src="images/logo.png">
                </div>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li><a href="javascript:void(0)" data-name="terms" class="alterlink">Όροι</a></li>
                    <li><a href="javascript:void(0)" data-name="policy" class="alterlink">Πολιτική Απορρήτου</a></li>
                </ul>
            </div>


        </div>
        <div class="disclaimer">
            <p>
                IMPORTANT: Earnings and Legal Disclaimers Earnings and income representations made by <span class="disclaimer-brand_name__new">Website</span>, (collectively “This Website”) only used as aspirational examples of your earnings potential.
                The success of those in the testimonials and other examples are exceptional results and therefore are not intended as a guarantee that you or others will achieve the same results. Individual results will vary and are entirely dependent
                on your use of <span class="disclaimer-brand_name__new">Website</span>. This Website is not responsible for your actions. You bear sole responsibility for your actions and decisions when using products and services and therefore you should
                always exercise caution and due diligence. You agree that this Website is not liable to you in any way for the results of using our services. See our Website terms of use for our full disclaimer of liability and other restrictions. Trading
                can generate notable benefits, however, it also involves the risk of partial/full loss of the invested capital, therefore, you should consider whether you can afford to invest. ©<span id="yearDisclaimerNew">2020</span><br/> USA REGULATION
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
            </p>
        </div>
    </footer>
    <div class="popup_custom" id="popup_custom" style="visibility: hidden;">
        <div class="popup_overlay"></div>
        <a class="close_button">×</a>
        <div class="popup_inner">
            <div class="popup_content">
                <div class="popup_content_inner">
                    <div class="popup-content-wrapper">
                        <div class="popup-header">
                            <div class="title">
                                Κάνατε ένα ΤΕΡΑΣΤΙΟ λάθος ...
                            </div>
                            <div class="subtitle">
                                Αυτή είναι η <b>ΤΕΛΕΥΤΑΙΑ ΕΥΚΑΙΡΙΑ</b> σας να συμμετάσχετε στο <b>Easy Bitcoin</b> και έτσι να εξασφαλίσετε τα μελλοντικά οικονομικά σας.
                            </div>
                        </div>
                    </div>
                    <div class="popup-form-wrapper">
                        <div class="form-container-unique">
                            <div class="form-block-2 whitee">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="row action-form action-form_pop">

                                                    <div class="col-xs-12">
                                                        <div class="form-header_wrap">
                                                            <p class="form-header">ΕΓΓΡΑΦΕΙΤΕ ΠΑΡΑΚΑΤΩ</p>
                                                            <p class="form-header-p">και θα σας καθοδηγήσουμε στη διαδικασία</p>
                                                        </div>
                                                            <div class="form-fields">
                        
                                                                <div class="row" style="position: relative;">
                         
                                                                    <div class="first_step" id="account_information">
                                                                        <div class="step-block_wrapper">
                                                                            <ul class="step-counter">
                                                                                <li class="step_block active">1</li>
                                                                                <li class="step_block">2</li>
                                                                                <li class="step_block">3</li>
                                                                            </ul>
                                                                        </div>
                                                                    <!-- FORM -->
                                                                    <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Κάνε εγγραφή τώρα"></div>
                                                                    </div>
                        
                                                                </div>
                                                            </div>
                                                            <img alt="Sponsors" class="form-images_sponsors" src="images/form-sponsor.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <link href="css/font-awesome.min.css" rel="stylesheet">



    <!--SCRIPTS-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script src="js/device.min.js"></script>
    <script defer src="js/custom.js"></script>

    <!-- <script src="js/currency.js"></script> -->
    <script src="js/bitcoin-widget.js" id="widget-script" data-widget-cur="EUR"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
    <!--SCRIPTS END-->


</body>

</html>