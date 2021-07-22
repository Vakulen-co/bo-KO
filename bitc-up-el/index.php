<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="EL">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bitcoin UP</title>
    <link href="assets/images/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

    <!-- Open Graph -->
    <?php $seoText = 'Καλως ΗΡΘΑΤΕ!'; ?>
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
    <section class="popup">
        <div class="hover-modal"></div>
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
                                            <p>ΠΕΡΙΜΕΝΕΤΕ!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="popup-info">
                                            <p class="popup-h">Πριν φύγετε...</p>
                                            <p>Οι αγορές κινούνται γρήγορα.Μην χάσετε την ευκαιρία να επωφεληθείτε από τις τελευταίες ανόδους και πτώσεις. </p>
                                            <p>Εγγραφείτε σήμερα και θα <span>εκπλαγείτε αφού εισπράξετε το κέρδος των 2 εβδομάδων!</span></p>
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
                                                    <p>Αλλάξτε τη ζωή σας <span>σήμερα!</span></p>
                                                </div>
                                                <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Κάντε έγγραφη τώρα!"></div>
                                            </div>
                                        </div>
                                        <div class="protected-block-pop">
                                            <div class="protected-img-pop">
                                                <img src="assets/images/logo-secure-pop.png">
                                            </div>
                                            <div class="protected-info-info">
                                                <p><br><span>Τα δεδομένα σας είναι πάντα προστατευμένα σε μας. </span></br>
                                                    Μπορείτε να αλλάξετε γνώμη ανά πάσα στιγμή κάνοντας κλικ στον σύνδεσμο unsubscribe στο υποσέλιδο οποιουδήποτε email που λαμβάνετε από εμάς. Θα χειριστούμε τις πληροφορίες σας με σεβασμό. Κάνοντας κλικ παραπάνω, συμφωνείτε ότι μπορούμε να επεξεργαστούμε
                                                    τα στοιχεία σας σύμφωνα με αυτούς τους όρους.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="final-img-pop">
                                            <img src="assets/images/card-logo.png" style="width: 89%">
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
                    <b data-i18n="warning">ΠΡΟΣΟΧΗ</b>: <span data-i18n="due-to"> Οι εγγραφές κλείνουν σύντομα. </span>
                    <span><b>ΒΙΑΣΤΕΙΤΕ</b> για να ενταχθείτε στο καλύτερο Online Οικονομικό Σύστημα Κρυπτονομισμάτων!</span><span data-i18n=""><b>
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
                        <p>bitcoin Market Cap <img src="assets/images/arow-up.png"> <span> <span class="currency">$</span>143,584,911,738</span>
                            bitcoin <img src="assets/images/arow-up.png"> <span class="corency"> <span class="currency">$</span> 8,874.68</span>
                        </p>
                    </div>
                </div>
                <div class="btc-footer">
                    <p><span>Γρήγορος και αποτελεσματικός</span> τρόπος να γίνετε πλούσιος</p>
                </div>
            </div>
        </div>
        <div class="section-2-btc mob">
            <p>bitcoin Market Cap <span> <span class="currency">$</span>143,584,911,738</span>
            </p>
            <div class="btc-body">
                <div>
                    <img src="assets/images/btc-logo.png">
                </div>
                <div class="btc-right">
                    <p>bitcoin</p>
                    <p class="corency"><span class="currency">$</span>8,874.68</p>
                </div>
            </div>
            <div class="btc-footer">
                <p><span>Γρήγορος και αποτελεσματικός</span> τρόπος να γίνετε πλούσιος</p>
            </div>
        </div>
        <div class="container">
            <h1 class="video-header" data-i18n="">
                Επενδύστε σήμερα και γίνετε <span>ο επόμενος εκατομμυριούχος...
               <scpan>
        </h1>
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <img src="assets/images/form-headr.png" class="mob form-headr">
                <div class="video-wrapper">
                    <div class="video-gr">
                        <video src="assets/images/video.mp4" controls poster="assets/images/poster.jpg" muted></video>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 form-mob">
                <div class="form">
                    <div class="preloader"></div>
                    <div class="head-form">
                        <p>Αλλάξτε τη ζωή σας <span>σήμερα!</span></p>
                    </div>
                    <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Κάντε έγγραφη τώρα!"></div>
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
                        <p><br><span>Τα δεδομένα σας είναι πάντα προστατευμένα σε μας. </span></br>
                            Μπορείτε να αλλάξετε γνώμη ανά πάσα στιγμή κάνοντας κλικ στον σύνδεσμο unsubscribe στο υποσέλιδο οποιουδήποτε email που λαμβάνετε από εμάς. Θα χειριστούμε τις πληροφορίες σας με σεβασμό. Κάνοντας κλικ παραπάνω, συμφωνείτε ότι μπορούμε να επεξεργαστούμε
                            τα στοιχεία σας σύμφωνα με αυτούς τους όρους.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="assets/images/logo-secure.png">
                </div>
                <p><br><span>Τα δεδομένα σας είναι πάντα προστατευμένα σε μας. </span></br>
                    Μπορείτε να αλλάξετε γνώμη ανά πάσα στιγμή κάνοντας κλικ στον σύνδεσμο unsubscribe στο υποσέλιδο οποιουδήποτε email που λαμβάνετε από εμάς. Θα χειριστούμε τις πληροφορίες σας με σεβασμό. Κάνοντας κλικ παραπάνω, συμφωνείτε ότι μπορούμε να επεξεργαστούμε
                    τα στοιχεία σας σύμφωνα με αυτούς τους όρους.
                </p>
            </div>
        </div>
    </section>
    
    <section class="steps-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="steps-info-h mob">
                        <p>Κερδίστε χρήματα online <br>
                            <span>πάνω από
                            <span class=""></span><span class="k-italic">1,200 ευρώ</span> την ημέρα<br></span>
                            με το <span class="k-italic"> bitcoin&nbsp;UP!</span>
                        </p>
                    </div>
                    <img src="assets/images/girl.jpg">
                    <div class="btn-block-form">
                        <button>Άνοιγμα ΔΩΡΕΑΝ λογαριασμού</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 girl-info">
                    <div class="steps-info-h dect">
                        <p>
                            Κερδίστε χρήματα online
                            <br/>
                            <span>πάνω από
                             <span class=""></span><span class="p-italic">1,200 ευρώ</span> την ημέρα
                            <br/>
                            </span>
                            <p class="p-italic">με το bitcoin&nbsp;UP!</p>
                        </p>
                    </div>
                    <div class="steps-info-b">
                        <p>
                            <span>
                             Προσοχή! Την επόμενη εβδομάδα θα σταματήσετε να δουλεύετε, <br>
                         </span> γιατί τα τελευταία 5 χρόνια, οι αλγόριθμοι της online πλατφόρμας μας κάνουν πλούσιους τους ανθρώπους και τους καθιστούν οικονομικά ανεξάρτητους.
                        </p>
                        <p>Είμαστε το <a class="scroll-form" style="font-style: italic;">bitcoin&nbsp;UP</a> — μια ομάδα ανθρώπων που εκμεταλλεύτηκαν τις τρελές επιστροφές του Bitcoin και έγιναν πλούσιοι!</p>
                        <p>
                            Κάντε κλικ στο <a class="scroll-form">"Άνοιγμα ΔΩΡΕΑΝ λογαριασμού"</a>, πάρτε το τυχερό σας εισιτήριο στον κόσμο των ευκαιριών του bitcoin.
                        </p>
                    </div>
                    <div class="steps-info-f">
                        <p>Όπως φαίνεται στο:</p>
                        <img src="assets/images/news.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="winners-block winners-block-mob mob">
        <div class="container">
            <div class="steps-header-puple">
                <p>Οι μεγαλύτερες <span>ιστορίες επιτυχίας</span></p>
            </div>
            <div class="row winner-click">
                <div class="winners-img">
                    <img src="assets/images/winner-1.jpg">
                </div>
                <div class="winners-info">
                    <p class="winners-city">Αθήνα</p>
                    <p>Αλέξης Κ.
                        <span> <span class=""></span><br>8,329.43 ευρώ</span>
                        </br>
                    </p>
                    <div class="more-info">
                        <img src="assets/images/arrow-more.png">
                        <p>κάντε κλικ για να διαβάσετε περισσότερα...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>"Πριν από μισό χρόνο απολύθηκα. </p>
                    <p>Λόγω της έλλειψης εμπειρίας, δεν μπορούσα να βρω δουλειά για πολύ καιρό. Οι φίλοι μου σύστησαν το <a class="scroll-form"> bitcoin&nbsp;UP</a>.
                    </p>
                    <p>
                        Αρχικά δούλεψα την πλατφόρμα μόνος μου και μια εβδομάδα αργότερα ο λογαριασμός μου ήταν -<span style="font-style:italic;">12 ευρώ.</span>
                        <span class=""></span>Ένας διευθυντής ήρθε σε επαφή μαζί μου και μου εξήγησε πώς να δουλέψω τον αλγόριθμο σωστά και τρεις εβδομάδες αργότερα το ημερήσιο εισόδημά μου ήταν πάνω από <span class=""></span><span style="font-style:italic;">1,200 ευρώ!</span>
                    </p>
                    <p> Ευχαριστώ, <a class="scroll-form">bitcoin&nbsp;UP</a>!"</p>
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
                    <p class="winners-city">Θεσσαλονίκη</p>
                    <p>Ανανίας Σ.
                        <span> <span class=""></span><br>17,307.91 ευρώ</span>
                        </br>
                    </p>
                    <div class="more-info" style="display: none;">
                        <img src="assets/images/arrow-more.png">
                        <p>κάντε κλικ για να διαβάσετε περισσότερα...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: block;">
                    <p>"Μέχρι την ηλικία των 42, ήμουν απελπισμένος λόγω των μεγάλων χρεών.</p>
                    <p>Ευτυχώς, άκουσα για το <a class="scroll-form" style="font-style: italic;">bitcoin&nbsp;UP </a> και αποφάσισα να επενδύσω στην πλατφόρμα - μετά από 3 μήνες ξεχρέωσα όλα τα δάνεια μου. Τώρα νοικιάζω ένα μεγάλο σπίτι και έκανα στη φίλη
                        μου ένα αυτοκίνητο δωρο για τα γενέθλιά της.</p>
                    <p>Με το <a class="scroll-form">bitcoin&nbsp;UP</a>, είμαι στο δρόμο για να γίνω εκατομμυριούχος!"
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
                    <p class="winners-city">Αλεξανδρούπολη</p>
                    <p>Δημήτρης Α.
                        <span> <span class=""></span><br>9,938.79 ευρώ</span>
                        </br>
                    </p>
                    <div class="more-info">
                        <img src="assets/images/arrow-more.png">
                        <p>κάντε κλικ για να διαβάσετε περισσότερα...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>"Είμαι στην πλατφόρμα μόνο 35 ημέρες. Έχανα συχνά τα χρήματά μου σε αθλητικά στοιχήματα και η ζωή μου καταστράφηκε.
                    </p>
                    <p>Λίγο αργότερα, είδα μια διαφήμιση μιας σελίδας στο Facebook και αποφάσισα να δοκιμάσω το <a class="scroll-form"> bitcoin&nbsp;UP</a>!</p>
                    <p>Ήδη μετά τις δύο πρώτες εβδομάδες άφησα τη δουλειά μου στο γραφείο! Τώρα οι φίλοι μου και εγώ σχεδιάζουμε ταξίδια όλο το χρόνο!"</p>
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
                    <p class="winners-city">Αθήνα</p>
                    <p>Πελαγία Ι.
                        <span> <span class=""></span><br>13,234.98 ευρώ</span>
                        </br>
                    </p>
                    <div class="more-info">
                        <img src="assets/images/arrow-more.png">
                        <p>κάντε κλικ για να διαβάσετε περισσότερα...</p>
                    </div>
                </div>
                <div class="winners-info-hide" style="display: none;">
                    <p>"Πριν από μερικά χρόνια, ο σύζυγός μου με άφησε και άρχισα να μεγαλώνω τα δύο μου παιδιά μόνη μου.</p>
                    <p>Δεν είχα την πολυτέλεια να στείλω την κόρη μου στο πανεπιστήμιο. Δεν είχα τίποτα να χάσω, γι' αυτό επένδυσα στο <a class="scroll-form">bitcoin&nbsp;UP</a>.
                    </p>
                    <p>Προς έκπληξή μου, ήμουν σε θέση να πληρώσω για το πανεπιστήμιο και να ξεχρεώσω τα δάνειά μου! Τώρα, εργάζομαι στο σπίτι για 20-30 λεπτά την ημέρα και μπορώ να αφιερώσω αρκετό χρόνο για να μεγαλώσω τα παιδιά μου!"</p>
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
                <p>Οι μεγαλύτερες <span>ιστορίες επιτυχίας</span></p>
            </div>
            <div class="row">
                <div class="steps-block steps-1">
                    <div class="col-md-4">
                        <div class="winners-puple winner-jade">
                            <img src="assets/images/winner-1.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αθήνα</p>
                                <p class="winner-name">Αλέξης Κ.<br>
                                    <span><span class=""></span>8,329.43 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="assets/images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αθήνα</p>
                                <p class="winner-name">Πελαγία Ι.<br>
                                    <span><span class=""></span>13,234.98 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="assets/images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αλεξανδρούπολη</p>
                                <p class="winner-name">Δημήτρης Α.<br>
                                    <span><span class=""></span>9,938.79 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="assets/images/winner-4-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Θεσσαλονίκη</p>
                                <p class="winner-name">Ανάνιας Σ.<br>
                                    <span><span class=""></span>17,307.91 ευρώ</span>
                                    </br>
                                </p>
                                <p class="winner-big-info">"Μέχρι την ηλικία των 42, ήμουν απελπισμένος λόγω των μεγάλων χρεών.</p>
                                <p class="winner-big-info">Ευτυχώς, άκουσα για το <a class="scroll-form">bitcoin&nbsp;UP</a> και αποφάσισα να επενδύσω στην πλατφόρμα - μετά από 3 μήνες ξεχρέωσα όλα τα δάνεια μου.</p>
                                <p class="winner-big-info">Τώρα νοικιάζω ένα μεγάλο σπίτι και έκανα στη φίλη μου ένα αυτοκίνητο δωρο για τα γενέθλιά της.</p>
                                <p class="winner-big-info">Με το <a class="scroll-form">bitcoin&nbsp;UP</a>, είμαι στο δρόμο για να γίνω εκατομμυριούχος!"
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
                                <p class="winners-city">Θεσσαλονίκη</p>
                                <p class="winner-name">Ανανίας Σ.<br>
                                    <span><span class=""></span>17,307.91 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="assets/images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αθήνα</p>
                                <p class="winner-name">Πελαγία Ι.<br>
                                    <span><span class=""></span>13,234.98 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="assets/images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αλεξανδρούπολη</p>
                                <p class="winner-name">Δημήτρης Α.<br>
                                    <span><span class=""></span>9,938.79 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="assets/images/winner-1-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αθήνα</p>
                                <p class="winner-name">Αλέξης Κ.<br>
                                    <span><span class=""></span>8,329.43 ευρώ</span>
                                    </br>
                                </p>
                                <p class="winner-big-info">"Πριν από μισό χρόνο απολύθηκα.</p>
                                <p class="winner-big-info">
                                    Λόγω της έλλειψης εμπειρίας, δεν μπορούσα να βρω δουλειά για πολύ καιρό. Οι φίλοι μου σύστησαν το <a class="scroll-form">bitcoin&nbsp;UP</a>. Γράφτηκα και πλήρωσα <span class=""></span><span style="font-style: italic">250 ευρώ</span>.
                                    Αρχικά δούλεψα με την πλατφόρμα μόνος μου και μια εβδομάδα αργότερα ο λογαριασμός μου ήταν -<span class=""></span>12 ευρώ.
                                </p>
                                <p class="winner-big-info">Ένας διευθυντής ήρθε σε επαφή μαζί μου και μου εξήγησε πώς να δουλέψω τον αλγόριθμο σωστά και τρεις εβδομάδες αργότερα το ημερήσιο εισόδημά μου ήταν πάνω από <span class=""></span> <span style="font-style: italic;">1,200 ευρώ</span>!
                                    Ευχαριστώ,
                                    <a class="scroll-form">bitcoin&nbsp;UP</a>!"
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
                                <p class="winners-city">Αθήνα</p>
                                <p class="winner-name">Αλέξης Κ.<br>
                                    <span><span class="">$</span>8,329.43 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="assets/images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Θεσσαλονίκη</p>
                                <p class="winner-name">Ανανίας Σ.<br>
                                    <span><span class=""></span>17,307.91 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-karen">
                            <img src="assets/images/winner-2.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αθήνα</p>
                                <p class="winner-name">Πελαγία Ι.<br>
                                    <span><span class=""></span>13,234.98 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="assets/images/winner-3-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αλεξανδρούπολη</p>
                                <p class="winner-name">Δημήτρης Α.<br>
                                    <span><span class=""></span>9,938.79 ευρώ</span>
                                    </br>
                                </p>
                                <p class="winner-big-info">"Είμαι στην πλατφόρμα μόνο 35 ημέρες. Έχανα συχνά τα χρήματά μου σε αθλητικά στοιχήματα και η ζωή μου καταστράφηκε.
                                </p>
                                <p class="winner-big-info">Λίγο αργότερα, είδα μια διαφήμιση μιας σελίδας στο Facebook και αποφάσισα να δοκιμάσω το <a class="scroll-form">bitcoin&nbsp;UP</a>!</p>
                                <p class="winner-big-info">Ήδη μετά τις δύο πρώτες εβδομάδες άφησα τη δουλειά μου στο γραφείο!</p>
                                <p class="winner-big-info">Τώρα οι φίλοι μου και εγώ σχεδιάζουμε ταξίδια όλο το χρόνο!"</p>
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
                                <p class="winners-city">Αθήνα</p>
                                <p class="winner-name">Αλέξης Κ.<br>
                                    <span><span class=""></span>8,329.43 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-william">
                            <img src="assets/images/winner-4.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Θεσσαλονίκη</p>
                                <p class="winner-name">Ανανίας Σ.<br>
                                    <span><span class=""></span>17,307.91 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                        <div class="winners-puple winner-steven">
                            <img src="assets/images/winner-3.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αλεξανδρούπολη</p>
                                <p class="winner-name">Δημήτρης Α.<br>
                                    <span><span class=""></span>9,938.79 ευρώ</span>
                                    </br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="winner-big-block">
                            <img src="assets/images/winner-2-big.jpg">
                            <div class="winners-info">
                                <p class="winners-city">Αθήνα</p>
                                <p class="winner-name">Πελαγία Ι.<br>
                                    <span><span class=""></span>13,234.98 ευρώ</span>
                                    </br>
                                </p>
                                <p class="winner-big-info">"Πριν από μερικά χρόνια, ο σύζυγός μου με άφησε και άρχισα να μεγαλώνω τα δύο μου παιδιά μόνη μου. Δεν είχα την πολυτέλεια να στείλω την κόρη μου στο πανεπιστήμιο.
                                </p>
                                <p class="winner-big-info">Δεν είχα τίποτα να χάσω, γι' αυτό επένδυσα στο <a class="scroll-form">bitcoin&nbsp;UP</a>. Προς έκπληξή μου, ήμουν σε θέση να πληρώσω για το πανεπιστήμιο και να ξεχρεώσω τα δάνειά μου! </p>
                                <p class="winner-big-info">Τώρα, εργάζομαι στο σπίτι για 20-30 λεπτά την ημέρα και μπορώ να αφιερώσω αρκετό χρόνο για να μεγαλώσω τα παιδιά μου!"</p>
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
                <p>Πώς λειτουργεί;</p>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="assets/images/question-img-1.jpg" class="dect">
                </div>
                <div class="col-md-5">
                    <div class="question-info">
                        <p><span class="question-info-step">Βήμα 1</span></p>
                        <img src="assets/images/question-img-1-mob.jpg" class="mob">
                        <p><span class="question-info-header"> Συμπληρώστε τη φόρμα</span></p>
                        <p> <span class="question-info-block">Μόλις γίνει δεκτή η εγγραφή σας, θα γίνετε αυτόματα
το νεότερο μέλος του <a class="scroll-form">bitcoin&nbsp;UP</a>. Βεβαιωθείτε ότι έχετε δημιουργήσει έναν ασφαλή κωδικό, έτσι ώστε κανείς να μην μπορεί να παραβιάσει τον λογαριασμό σας!</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="question-info">
                        <p><span class="question-info-step">Βήμα 2</span></p>
                        <img src="assets/images/question-img-2-mob.jpg" class="mob">
                        <p><span class="question-info-header"> Χρηματοδοτήστε το λογαριασμό σας</span></p>
                        <p>
                            <span class="question-info-block">Όπως σε κάθε επιχείρηση, χρειάζεστε κεφάλαιο
                            κίνησης για να ξεκινήσετε. Οπότε, για να ξεκινήσετε να κερδίζετε με το <a
                                    class="scroll-form">bitcoin&nbsp;UP</a>, πρέπει να επενδύσετε οποιοδήποτε ποσό θέλετε από <span
                                    style="font-style: italic;">250 ευρώ</span> ή περισσότερα.</span>
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
                        <p><span class="question-info-step">Βήμα 3</span></p>
                        <img src="assets/images/question-img-3-mob.jpg" class="mob">
                        <p><span class="question-info-header"> Περιμένετε για μια κλήση στον αριθμό σας και έχετε τελειώσει</span>
                        </p>
                        <p> <span class="question-info-block">Μετά την πληρωμή, ο διαχειριστής μας θα σας καλέσει
                            και θα σας παρέχει τον αλγόριθμο υψηλού
                            εισοδήματος. Απολαύστε ακριβείς αυτόματες συναλλαγές με τον
                            βραβευμένο αλγόριθμό μας. Μπορείτε επίσης να ρυθμίσετε τις χειροκίνητες συναλλαγές
                            αν προτιμάτε να κάνετε συναλλαγές μόνοι σας.
                        </span>
                        </p>
                    </div>
                    <div class="btn-block-form">
                        <button>Ξεκινήστε τώρα</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="winners-block faq-block-mob mob">
        <div class="container">
            <div class="steps-header-puple">
                <p>Συχνές <span>Ερωτήσεις</span></p>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Τι είδους αποτελέσματα να περιμένω;</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>
                        Τα μέλη του <span style="font-style: italic;">bitcoin&nbsp;UP</span> κερδίζουν καθημερινά τουλάχιστον 1,200 ευρώ, διότι η πλατφόρμα λειτουργεί 24 ώρες το 24ωρο προς αναζήτηση επιτυχημένων προσφορών.
                    </p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="row faq-click" style="border: 2px solid rgb(230, 174, 92);background-image: url(assets/images/arrow-hide-up.png);">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span style="color:#E6AE5C ">Πόσες ώρες την ημέρα χρειάζεται να δουλεύω;</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: block;">
                    <p>Επειδή το λογισμικό χειρίζεται συναλλαγές, o απαιτούμενος χρόνος «εργασίας» είναι ελάχιστος.</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Πόσο κοστίζει το λογισμικό;</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Τα μέλη του <span style="font-style: italic;">bitcoin&nbsp;UP</span> λαμβάνουν δωρεάν αντίγραφο του λογισμικού μας. Για να γίνετε μέλος, απλά συμπληρώστε τη φόρμα σε αυτή τη σελίδα.</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span>Είναι όπως το MLM ή το κοινοπρακτικό μάρκετινγκ;</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Δεν είναι όπως το MLM, το κοινοπρακτικό μάρκετινγκ ή οτιδήποτε άλλο. Το λογισμικό <span style="font-style: italic;">bitcoin&nbsp;UP</span> κερδίζει στις συναλλαγές με ακρίβεια 99,4%, αυτό είναι το προσωπικό σας εργαλείο πλουτισμού</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="row faq-click">
                <div class="winners-img">
                </div>
                <div class="winners-info">
                    <span> Υπάρχουν χρεώσεις;</span></br>
                    </p>
                    <div class="more-info">
                        <p></p>
                    </div>
                </div>
                <div class="winners-info-hide arow-mob" style="display: none;">
                    <p>Δεν υπάρχουν κρυφές χρεώσεις. Δεν υπάρχουν χρηματιστηριακά τέλη ή προμήθειες. Όλα τα δεδομένα και τα χρήματά σας προστατεύονται. Το εισόδημα ανήκει 100% σε εσάς και μπορείτε να πάρετε τα χρήματα σας ανά πάσα στιγμή.</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="faq-header dect">
            <p>Συχνές Ερωτήσεις</p>
        </div>
        <div class="container">
            <div class="row dect">
                <div class="col-lg-7 col-md-12">
                    <div class="answer  answer-work">
                        <p><span>Πόσες ώρες την ημέρα χρειάζεται I<br> να δουλεύω;</span>
                            <p>Τα μέλη μας δουλεύουν κατά μέσο όρο 20 λεπτά την ημέρα ή λιγότερο. Επειδή το λογισμικό χειρίζεται συναλλαγές, o απαιτούμενος χρόνος «εργασίας» είναι ελάχιστος.</p>
                        </p>
                    </div>
                    <div class="answer answer-expect" style="display: none;">
                        <p><span>Τι είδους αποτελέσματα<br> να περιμένω;</span>
                            <p>Τα μέλη του <span style="font-style: italic;">bitcoin&nbsp;UP</span> κερδίζουν καθημερινά τουλάχιστον 1,200 ευρώ, διότι η πλατφόρμα λειτουργεί 24 ώρες το 24ωρο προς αναζήτηση επιτυχημένων προσφορών.
                            </p>
                        </p>
                    </div>
                    <div class="answer answer-cost" style="display: none;">
                        <p><span>Πόσο κοστίζει το λογισμικό; <br></span>
                            <p>Τα μέλη του <span style="font-style: italic;">bitcoin&nbsp;UP</span> λαμβάνουν δωρεάν αντίγραφο του λογισμικού μας. Για να γίνετε μέλος, απλά συμπληρώστε τη φόρμα σε αυτή τη σελίδα.</p>
                        </p>
                    </div>
                    <div class="answer answer-marketing" style="display: none;">
                        <p><span>Είναι όπως το MLM ή το<br> κοινοπρακτικό μάρκετινγκ;</span>
                            <p>Δεν είναι όπως το MLM, το κοινοπρακτικό μάρκετινγκ ή οτιδήποτε άλλο. Το λογισμικό <span style="font-style: italic;">bitcoin&nbsp;UP</span> κερδίζει στις συναλλαγές με ακρίβεια 99,4%, αυτό είναι το προσωπικό σας εργαλείο πλουτισμού</p>
                        </p>
                    </div>
                    <div class="answer answer-fees" style="display: none;">
                        <p><span>Υπάρχουν χρεώσεις; <br></span>
                            <p>Δεν υπάρχουν κρυφές χρεώσεις. Δεν υπάρχουν χρηματιστηριακά τέλη ή προμήθειες. Όλα τα δεδομένα και τα χρήματά σας προστατεύονται. Το εισόδημα ανήκει 100% σε εσάς και μπορείτε να πάρετε τα χρήματα σας ανά πάσα στιγμή.</p>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="faq-block">
                        <div class="question-work question" style="color:#E6AE5C ">
                            <p>Πόσες ώρες την ημέρα χρειάζεται να δουλεύω;</p>
                        </div>
                        <div class="question-expect question">
                            <p>Τι είδους αποτελέσματα να περιμένω;</p>
                        </div>
                        <div class="question-cost question">
                            <p>Πόσο κοστίζει το λογισμικό;</p>
                        </div>
                        <div class="question-marketing question">
                            <p>Είναι όπως το MLM ή το κοινοπρακτικό μάρκετινγκ;</p>
                        </div>
                        <div class="question-fees question">
                            <p>Υπάρχουν χρεώσεις;</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-form-block">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-form-info">
                        <p>Θα <span>εκπλαγείτε</span> αφού τραβήξετε τα κέρδη των 2 εβδομάδων</p>
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
                            <p>Αλλάξτε τη ζωή σας <span>σήμερα!</span></p>
                        </div>
                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Κάντε έγγραφη τώρα!"></div>
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
                        <p><br><span>Τα δεδομένα σας είναι πάντα προστατευμένα σε μας. </span><br> Μπορείτε να αλλάξετε γνώμη ανά πάσα στιγμή κάνοντας κλικ στον σύνδεσμο unsubscribe στο υποσέλιδο οποιουδήποτε email που λαμβάνετε από εμάς. Θα χειριστούμε
                            τις πληροφορίες σας με σεβασμό. Κάνοντας κλικ παραπάνω, συμφωνείτε ότι μπορούμε να επεξεργαστούμε τα στοιχεία σας σύμφωνα με αυτούς τους όρους.
                        </p>
                    </div>
                </div>
            </div>
            <div class="protected-info-mob mob">
                <div class="protected-img">
                    <img src="assets/images/logo-secure.png">
                </div>
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
                    <a href="javascript:void(0);" class="alterlink" data-name="policy">Πολιτική Απορρήτου</a>
                    <a href="javascript:void(0);" class="alterlink" data-name="terms">Όροι</a>
                </div>
            </div>
            <div class="privacy-link">
                <a href="javascript:void(0);" class="alterlink" data-name="policy">Πολιτική Απορρήτου</a>
                <a href="javascript:void(0);" class="alterlink" data-name="terms">Όροι</a>
            </div>
        </div>
        <div class="footer-info">
            <p>
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
                                    <div class="video">
                                        <video src="assets/images/video.mp4"></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="final-info">
                                <p><span class="lead-name">[Lead Name]!</span> Καλώς ορίσατε! Είμαι ο ΠΡΟΣΩΠΙΚΟΣ ΔΙΑΧΕΙΡΙΣΤΗΣ ΣΑΣ <span class="broker-name">[Broker Name]</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 fix-label">
                            <div class="lead-check">
                                <p><span class="lead-name">[Lead Name]</span>, ελέγξτε την αλληλογραφία σας μετά την ενεργοποίηση. Η πρόσβαση στην πλατφόρμα θα φτάσει στο email που υποδείξατε στη φόρμα εγγραφής</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="final-footer">
                            <p>Επενδύστε στο σύστημα σήμερα και θα δείτε ότι το bitcoin είναι <span>μια νέα ευκαιρία εκατομμυρίων ευρώ!</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="final-btm">
                            <div class="final-img">
                                <img src="assets/images/card-logo.png">
                            </div>
                            <div class="btn-form-fanks">
                                <a class="btm-send-fanks" href="">Ενεργοποίηση λογαριασμού ΤΩΡΑ!</a>
                            </div>
                            </dsiv>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>