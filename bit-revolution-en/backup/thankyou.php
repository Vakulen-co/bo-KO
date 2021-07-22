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
        'sub1'=> $_POST['sub1'],
        'sub2'=> $_POST['sub2'],
        'sub3'=> $_POST['sub3'],
        'sub4'=> $_POST['sub4'],
        'sub5'=> $_POST['sub5'],
        'sub6'=> $_POST['sub6'],
        'sub7'=> $_POST['sub7'],
        'sub8'=> $_POST['subid'],
        'sub9'=> $_POST['pixel_id']
    );

    if (!$hasPixel) {
        $hasPixel = $_POST['pixel_id'] && $_POST['pixel_id'] !== '';
    }

    $fullUrl = 'https://api.starlab.cloud/api/v1/lead/create';
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

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin Evolution ™ - 🥇 Die offizielle Seite 2021</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- PIXELS -->
    <?php if($hasPixel && $_POST['phone2']) : ?>
    <?php if($_POST['pixel_id']) : ?>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $_POST['pixel_id'] ?>&ev=Lead&noscript=1" />
    <?php endif; ?>
    <!-- PLACE PIXEL HERE -->

    <!-- PLACE PIXEL HERE -->
    <?php endif; ?>
    <!-- PIXELS -->
    <style>.preloader{width:100px;height:100px;position:absolute;left:50%;top:50%;transform:translateX(-50%) translateY(-50%);animation:rotatePreloader 2s infinite ease-in}button .preloader{width:20px;height:20px}@keyframes rotatePreloader{0%{transform:translateX(-50%) translateY(-50%) rotateZ(0)}100%{transform:translateX(-50%) translateY(-50%) rotateZ(-360deg)}}.preloader div{position:absolute;width:100%;height:100%;opacity:0}.preloader div:before{content:"";position:absolute;left:50%;top:0;width:10%;height:10%;background-color:#a110cb;transform:translateX(-50%);border-radius:50%}.preloader div:nth-child(1){transform:rotateZ(0);animation:rotateCircle1 2s infinite linear;z-index:9}@keyframes rotateCircle1{0%{opacity:0}0%{opacity:1;transform:rotateZ(36deg)}7%{transform:rotateZ(0)}57%{transform:rotateZ(0)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(2){transform:rotateZ(36deg);animation:rotateCircle2 2s infinite linear;z-index:8}@keyframes rotateCircle2{5%{opacity:0}5.0001%{opacity:1;transform:rotateZ(0)}12%{transform:rotateZ(-36deg)}62%{transform:rotateZ(-36deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(3){transform:rotateZ(72deg);animation:rotateCircle3 2s infinite linear;z-index:7}@keyframes rotateCircle3{10%{opacity:0}10.0002%{opacity:1;transform:rotateZ(-36deg)}17%{transform:rotateZ(-72deg)}67%{transform:rotateZ(-72deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(4){transform:rotateZ(108deg);animation:rotateCircle4 2s infinite linear;z-index:6}@keyframes rotateCircle4{15%{opacity:0}15.0003%{opacity:1;transform:rotateZ(-72deg)}22%{transform:rotateZ(-108deg)}72%{transform:rotateZ(-108deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(5){transform:rotateZ(144deg);animation:rotateCircle5 2s infinite linear;z-index:5}@keyframes rotateCircle5{20%{opacity:0}20.0004%{opacity:1;transform:rotateZ(-108deg)}27%{transform:rotateZ(-144deg)}77%{transform:rotateZ(-144deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(6){transform:rotateZ(180deg);animation:rotateCircle6 2s infinite linear;z-index:4}@keyframes rotateCircle6{25%{opacity:0}25.0005%{opacity:1;transform:rotateZ(-144deg)}32%{transform:rotateZ(-180deg)}82%{transform:rotateZ(-180deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(7){transform:rotateZ(216deg);animation:rotateCircle7 2s infinite linear;z-index:3}@keyframes rotateCircle7{30%{opacity:0}30.0006%{opacity:1;transform:rotateZ(-180deg)}37%{transform:rotateZ(-216deg)}87%{transform:rotateZ(-216deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(8){transform:rotateZ(252deg);animation:rotateCircle8 2s infinite linear;z-index:2}@keyframes rotateCircle8{35%{opacity:0}35.0007%{opacity:1;transform:rotateZ(-216deg)}42%{transform:rotateZ(-252deg)}92%{transform:rotateZ(-252deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(9){transform:rotateZ(288deg);animation:rotateCircle9 2s infinite linear;z-index:1}@keyframes rotateCircle9{40%{opacity:0}40.0008%{opacity:1;transform:rotateZ(-252deg)}47%{transform:rotateZ(-288deg)}97%{transform:rotateZ(-288deg)}100%{transform:rotateZ(-324deg);opacity:1}}.preloader div:nth-child(10){transform:rotateZ(324deg);animation:rotateCircle10 2s infinite linear;z-index:0}@keyframes rotateCircle10{45%{opacity:0}45.0009%{opacity:1;transform:rotateZ(-288deg)}52%{transform:rotateZ(-324deg)}102%{transform:rotateZ(-324deg)}100%{transform:rotateZ(-324deg);opacity:1}}</style>
</head>
<body>
    <?php if($_POST['phone2']) : ?>
    <div class="preloader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    <?php else : ?>
        <style>
        body{
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0;
            background: url(images/home-bg_1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            -webkit-text-stroke: 2px black;
            color: #a110cb;
            font-weight: bold;
            text-align: center;
            font-size: 54px;
        }
    </style>
        <h1>Danke fГјrs Anmelden! <br>
        Sie wurden erfolgreich registriert ...</h1>
    <?php endif; ?>
</body>
</html>