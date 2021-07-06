<?php
include_once 'config.php';

if ($_POST['phone2']) {
    $post = array(
        'first_name'=> $_POST['f_name'],
        'last_name'=> $_POST['l_name'],
        'email'=> $_POST['email'],
        'phone'=> $_POST['phone2'],
        'language'=> $language,
        'landing_name'=> $landing_name,
        'landing_url'=> $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
        'campaign_identifier'=> $campaign_identifier,
        'hash'=> $affiliate_hash,
        'url_params'=> $_POST['url_params'],
        'token'=> $_POST['token'],
        'sub1'=> $_GET['sub1'],
        'sub2'=> $_GET['sub2'],
        'sub3'=> $_GET['sub3'],
        'sub4'=> $_GET['sub4'],
        'sub5'=> $_GET['sub5'],
        'sub6'=> $_GET['sub6'],
        'sub7'=> $_GET['sub7'],
        'sub8'=> $_GET['subid'],
        'sub9'=> $_GET['pixel_id']
    );

    if (!$hasPixel) $hasPixel = $FacebookPixel || $TiktokPixel || $GooglePixel;

    $fullUrl = 'https://api.axela.network/api/v1/lead/create';
    $ch = curl_init($fullUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $data = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    $data = json_decode($data);

    if ($http_status !== 200) {
        senderror('send error', $data, $post);
    }

    if($data->success != true) {
        senderror('send error', $data, $post);
    }
    $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . '://' . $_SERVER['HTTP_HOST'];
    $refreshTime = $hasPixel ? 3 : 0;
    // If facebook than wait for Lead request 3 sec
    if ($data->result->url !== '' && $brokerRedirect) {
        header('refresh:'.$refreshTime.';url='.$data->result->url);
    } else {
        header('refresh:'.$refreshTime.';url='. basename($thankyou) .'?f_name='.$_POST['f_name'].'&l_name='.$_POST['l_name'].'&'.$_SERVER['QUERY_STRING']);
    }
}

function senderror($text, $err, $lead) {
    $url = 'https://chat.slab.uno/hooks/73AamZZhcYWdphkHh/CbxsqCzQWn83H2PdSj344D8AXu6jMQJvcf6W3xrtuZmXT43B';
    $request_headers = ['Content-Type: application/json'];
    $post = (object)array(
        "channel"=>"#tech-ops-support",
        'text' => '*'.$text.'*',
        'attachments' => array(
            (object)array("text" => json_encode($err)),
            (object)array("text" => json_encode($lead)),
        )
    );

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_POSTFIELDS => json_encode($post),
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_HTTPHEADER => $request_headers
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
}
?>

<!doctype html>
<html lang="es">

<head>
    <!-- PIXELS -->
    <?php if($_POST['phone2']) : ?>
           <?php if($GooglePixel) : ?>
           <script async src="https://www.googletagmanager.com/gtag/js?id=UA-<?php echo $GooglePixel ?>"></script>
           <?php endif; ?>
           <!-- PLACE PIXELS JS HERE -->

           <!-- PLACE PIXELS JS HERE -->
           <script>
               window.onload = function(){
                   window.history.replaceState(null, document.title, '<?php echo $_SERVER['HTTP_REFERER'] ?>');
                   function checkStatus(){return"1"===localStorage.getItem("p_activated")||"1"===getCookie("p_activated")}function lsTest(){try{return localStorage.setItem("test","test"),localStorage.removeItem("test"),!0}catch(t){return!1}}function setCookie(t,e,o){const n=new Date;n.setTime(n.getTime()+24*o*60*60*1e3);const c="expires="+n.toUTCString();document.cookie=t+"="+e+";"+c+";path=/"}function getCookie(t){const e=t+"=",o=document.cookie.split(";");for(var n=0;n<o.length;n++){for(var c=o[n];" "==c.charAt(0);)c=c.substring(1);if(0==c.indexOf(e))return c.substring(e.length,c.length)}return""}!0!==checkStatus()&&(runPixels(),lsTest()?window.localStorage.setItem("p_activated","1"):setCookie("p_activated","1",7));

                   function runPixels() {
                       <?php if($FacebookPixel) : ?>
                       var img = document.createElement('img');
                       img.src = 'https://www.facebook.com/tr?id=<?php echo $FacebookPixel ?>&ev=Lead&noscript=1';document.getElementsByTagName("BODY")[0].appendChild(img);
                       <?php endif; ?>
                       <?php if($TiktokPixel) : ?>
                       !function (w, d, t) {
                           w.TiktokAnalyticsObject = t;var ttq = w[t] = w[t] || [];ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie"], ttq.setAndDefer = function (t, e) {t[e] = function () {t.push([e].concat(Array.prototype.slice.call(arguments, 0)))}};for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);ttq.instance = function (t) {for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);return e}, ttq.load = function (e, n) {var i = "https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {};var o = document.createElement("script");o.type = "text/javascript", o.async = !0, o.src = i + "?sdkid=" + e + "&lib=" + t;var a = document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o, a)};
                           ttq.load('<?php echo $TiktokPixel ?>');ttq.page();
                       }(window, document, 'ttq');
                       <?php endif; ?>
                       <?php if($GooglePixel) : ?>
                       window.dataLayer = window.dataLayer || [];
                       function gtag(){dataLayer.push(arguments);}
                       gtag('js', new Date());
                       gtag('config', 'UA-<?php echo $GooglePixel ?>');
                       <?php endif; ?>
                       // PLACE PIXELS HERE

                       // PLACE PIXELS HERE
                   }
               }
           </script>
       <?php endif; ?>
       <!-- PIXELS -->

<style>.preloader{width:100px;height:100px;position:absolute;left:50%;top:50%;transform:translateX(-50%) translateY(-50%);animation:rotatePreloader 2s infinite ease-in}button .preloader{width:20px;height:20px}@keyframes rotatePreloader{0%{transform:translateX(-50%) translateY(-50%) rotateZ(0)}100%{transform:translateX(-50%) translateY(-50%) rotateZ(-360deg)}}.preloader div{position:absolute;width:100%;height:100%;opacity:0}.preloader div:before{content:"";position:absolute;left:50%;top:0;width:10%;height:10%;background-color:#2671d9;transform:translateX(-50%);border-radius:50%}.preloader div:nth-child(1){transform:rotateZ(0);animation:rotateCircle1 2s infinite linear;z-index:9}@keyframes rotateCircle1{0%{opacity:0}0%{opacity:1;transform:rotateZ(36deg)}7%{transform:rotateZ(0)}57%{transform:rotateZ(0)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(2){transform:rotateZ(36deg);animation:rotateCircle2 2s infinite linear;z-index:8}@keyframes rotateCircle2{5%{opacity:0}5.0001%{opacity:1;transform:rotateZ(0)}12%{transform:rotateZ(-36deg)}62%{transform:rotateZ(-36deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(3){transform:rotateZ(72deg);animation:rotateCircle3 2s infinite linear;z-index:7}@keyframes rotateCircle3{10%{opacity:0}10.0002%{opacity:1;transform:rotateZ(-36deg)}17%{transform:rotateZ(-72deg)}67%{transform:rotateZ(-72deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(4){transform:rotateZ(108deg);animation:rotateCircle4 2s infinite linear;z-index:6}@keyframes rotateCircle4{15%{opacity:0}15.0003%{opacity:1;transform:rotateZ(-72deg)}22%{transform:rotateZ(-108deg)}72%{transform:rotateZ(-108deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(5){transform:rotateZ(144deg);animation:rotateCircle5 2s infinite linear;z-index:5}@keyframes rotateCircle5{20%{opacity:0}20.0004%{opacity:1;transform:rotateZ(-108deg)}27%{transform:rotateZ(-144deg)}77%{transform:rotateZ(-144deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(6){transform:rotateZ(180deg);animation:rotateCircle6 2s infinite linear;z-index:4}@keyframes rotateCircle6{25%{opacity:0}25.0005%{opacity:1;transform:rotateZ(-144deg)}32%{transform:rotateZ(-180deg)}82%{transform:rotateZ(-180deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(7){transform:rotateZ(216deg);animation:rotateCircle7 2s infinite linear;z-index:3}@keyframes rotateCircle7{30%{opacity:0}30.0006%{opacity:1;transform:rotateZ(-180deg)}37%{transform:rotateZ(-216deg)}87%{transform:rotateZ(-216deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(8){transform:rotateZ(252deg);animation:rotateCircle8 2s infinite linear;z-index:2}@keyframes rotateCircle8{35%{opacity:0}35.0007%{opacity:1;transform:rotateZ(-216deg)}42%{transform:rotateZ(-252deg)}92%{transform:rotateZ(-252deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(9){transform:rotateZ(288deg);animation:rotateCircle9 2s infinite linear;z-index:1}@keyframes rotateCircle9{40%{opacity:0}40.0008%{opacity:1;transform:rotateZ(-252deg)}47%{transform:rotateZ(-288deg)}97%{transform:rotateZ(-288deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(10){transform:rotateZ(324deg);animation:rotateCircle10 2s infinite linear;z-index:0}@keyframes rotateCircle10{45%{opacity:0}45.0009%{opacity:1;transform:rotateZ(-288deg)}52%{transform:rotateZ(-324deg)}102%{transform:rotateZ(-324deg)}100%{transform:rotateZ(-324deg);opacity:1}}</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>¡Se ha registrado con éxito!</title>
    <link rel="shortcut icon" href="./assets/Robistix-favicon.png.pagespeed.ce.3Cp26w-Aas.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #F2F8FC;
        }
        .thnx-container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .thnx-card {
            width:100%;
            height:auto;
            text-align:center;
            background: #F2F8FC;
            border-radius: 12px;
            -webkit-box-shadow: 0px 30px 30px 0px rgb(0 0 0 / 10%);
            box-shadow: 0px 30px 30px 0px rgb(0 0 0 / 10%);
            padding: 40px 60px;
            margin-top: 6rem;
        }
        .thnx-card h3 {
            font-size: 2.4rem;
            color: #333;
            font-weight: 500;
            font-family: "Roboto", sans-serif;
        }
        @media (max-width:600px){
            .thnx-card {
                padding: 40px 10px;
            }
            .thnx-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>


</head>

<body>
<?php if($_POST['phone2']) : ?>
   <div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
<?php else : ?>
    <div class="thnx-wrapper">
        <div class="thnx-container">
            <div class="thnx-card">
                <div class="test-progress">
                    <img src="images/check.svg" width="120" height="120" alt="check">
                </div>
                <h3>Está registrado con éxito, <br>
                nuestro experto se pondrá en contacto con usted en un día.</h3>
            </div>
        </div>
    </div>
<?php endif; ?>
    
</body>

</html>