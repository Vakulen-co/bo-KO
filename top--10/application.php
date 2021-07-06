
<?php

$CloakLink = $_GET['link'];
$PixelId = $_GET['pixel_id'];
$Action = 'Lead';
$ajax = $_GET['ajaxs'];

// Lead
// CompleteRegistration
if (empty($_GET['login'])){

    $unique_token = $_GET['token'];

    $FirstName = $_GET['f_name'];
    $LastName = $_GET['l_name'];
    $Email = $_GET['email'];
    $Phone = $_GET['phone2'];
    $Lang = $_GET['lang'];
    $LandingPageName = $_GET['lp'];
    $LandingPageURL = $_GET['lp_url'];
    $TargetGeo = $_GET['t_geo'];
    $PixelId = $_GET['pixel_id'];

    function getUserIP() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];

        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))

            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];

        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];

        else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];

        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];

        else if(isset($_SERVER['HTTP_FORWARDED']))

            $ipaddress = $_SERVER['HTTP_FORWARDED'];

        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];

        else

            $ipaddress = '1.2.3.4';

        return $ipaddress;
    }

    $ip = getUserIP();

    $ClientIp = $ip;



    file_get_contents('https://autotraders.online/?f_name='.$FirstName.'&l_name='.$LastName.'&email='.$Email.'&phone='.$Phone.'&lang='.$Lang.'&token='.$unique_token.'&lp='.$LandingPageName.'&lp_url='.$LandingPageURL.'&t_geo='.$TargetGeo.'&ip='.$ClientIp.'');

};

if($CloakLink) {
    function siteURL()
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'];
        return $protocol.$domainName;
    }
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $l = urlencode(siteURL() .''. $uri .''. $_GET['resp'].'/application.php?token='. $_GET['token'] ."&login=1");

    echo file_get_contents($CloakLink. 'pixel?p='.  $PixelId .'&e='. $Action .'&s='. $l );
    return;
}
?>

<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3;  https://autotraders.online/?token=<?php echo $_GET['token']?>&login=1">
    <title>Создание аккаунта - <?php echo $Email = $_GET['email']; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <style>
        html {
            height: 100%;
        }

        body {
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: #151515;
        }
        body:before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            opacity: 0.1;
            z-index: 1;
            background: url('preloader/account-scr.jpg');
            background-size: cover;
        }

        .text {
            margin-top: 20px;
            font-weight: 600;
            font-size: 24px;
            color: #fff
        }

        @media (max-width: 800px) {
            body:before {
                background: url('preloader/account-scr-mob.jpg');
            }
            .text {
                font-size: 18px
            }
        }

        .loader {
            position: relative;
            width: 75px;
            height: 100px;
        }
        .loader__bar {
            position: absolute;
            bottom: 0;
            width: 10px;
            height: 50%;
            background: #fff;
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            box-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
        }
        .loader__bar:nth-child(1) {
            left: 0px;
            -webkit-transform: scale(1, 0.2);
            transform: scale(1, 0.2);
            -webkit-animation: barUp1 4s infinite;
            animation: barUp1 4s infinite;
        }
        .loader__bar:nth-child(2) {
            left: 15px;
            -webkit-transform: scale(1, 0.4);
            transform: scale(1, 0.4);
            -webkit-animation: barUp2 4s infinite;
            animation: barUp2 4s infinite;
        }
        .loader__bar:nth-child(3) {
            left: 30px;
            -webkit-transform: scale(1, 0.6);
            transform: scale(1, 0.6);
            -webkit-animation: barUp3 4s infinite;
            animation: barUp3 4s infinite;
        }
        .loader__bar:nth-child(4) {
            left: 45px;
            -webkit-transform: scale(1, 0.8);
            transform: scale(1, 0.8);
            -webkit-animation: barUp4 4s infinite;
            animation: barUp4 4s infinite;
        }
        .loader__bar:nth-child(5) {
            left: 60px;
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            -webkit-animation: barUp5 4s infinite;
            animation: barUp5 4s infinite;
        }
        .loader__ball {
            position: absolute;
            bottom: 10px;
            left: 0;
            width: 10px;
            height: 10px;
            background: #fff;
            border-radius: 50%;
            -webkit-animation: ball 4s infinite;
            animation: ball 4s infinite;
        }

        @-webkit-keyframes ball {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
            5% {
                -webkit-transform: translate(8px, -14px);
                transform: translate(8px, -14px);
            }
            10% {
                -webkit-transform: translate(15px, -10px);
                transform: translate(15px, -10px);
            }
            17% {
                -webkit-transform: translate(23px, -24px);
                transform: translate(23px, -24px);
            }
            20% {
                -webkit-transform: translate(30px, -20px);
                transform: translate(30px, -20px);
            }
            27% {
                -webkit-transform: translate(38px, -34px);
                transform: translate(38px, -34px);
            }
            30% {
                -webkit-transform: translate(45px, -30px);
                transform: translate(45px, -30px);
            }
            37% {
                -webkit-transform: translate(53px, -44px);
                transform: translate(53px, -44px);
            }
            40% {
                -webkit-transform: translate(60px, -40px);
                transform: translate(60px, -40px);
            }
            50% {
                -webkit-transform: translate(60px, 0);
                transform: translate(60px, 0);
            }
            57% {
                -webkit-transform: translate(53px, -14px);
                transform: translate(53px, -14px);
            }
            60% {
                -webkit-transform: translate(45px, -10px);
                transform: translate(45px, -10px);
            }
            67% {
                -webkit-transform: translate(37px, -24px);
                transform: translate(37px, -24px);
            }
            70% {
                -webkit-transform: translate(30px, -20px);
                transform: translate(30px, -20px);
            }
            77% {
                -webkit-transform: translate(22px, -34px);
                transform: translate(22px, -34px);
            }
            80% {
                -webkit-transform: translate(15px, -30px);
                transform: translate(15px, -30px);
            }
            87% {
                -webkit-transform: translate(7px, -44px);
                transform: translate(7px, -44px);
            }
            90% {
                -webkit-transform: translate(0, -40px);
                transform: translate(0, -40px);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }

        @keyframes ball {
            0% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
            5% {
                -webkit-transform: translate(8px, -14px);
                transform: translate(8px, -14px);
            }
            10% {
                -webkit-transform: translate(15px, -10px);
                transform: translate(15px, -10px);
            }
            17% {
                -webkit-transform: translate(23px, -24px);
                transform: translate(23px, -24px);
            }
            20% {
                -webkit-transform: translate(30px, -20px);
                transform: translate(30px, -20px);
            }
            27% {
                -webkit-transform: translate(38px, -34px);
                transform: translate(38px, -34px);
            }
            30% {
                -webkit-transform: translate(45px, -30px);
                transform: translate(45px, -30px);
            }
            37% {
                -webkit-transform: translate(53px, -44px);
                transform: translate(53px, -44px);
            }
            40% {
                -webkit-transform: translate(60px, -40px);
                transform: translate(60px, -40px);
            }
            50% {
                -webkit-transform: translate(60px, 0);
                transform: translate(60px, 0);
            }
            57% {
                -webkit-transform: translate(53px, -14px);
                transform: translate(53px, -14px);
            }
            60% {
                -webkit-transform: translate(45px, -10px);
                transform: translate(45px, -10px);
            }
            67% {
                -webkit-transform: translate(37px, -24px);
                transform: translate(37px, -24px);
            }
            70% {
                -webkit-transform: translate(30px, -20px);
                transform: translate(30px, -20px);
            }
            77% {
                -webkit-transform: translate(22px, -34px);
                transform: translate(22px, -34px);
            }
            80% {
                -webkit-transform: translate(15px, -30px);
                transform: translate(15px, -30px);
            }
            87% {
                -webkit-transform: translate(7px, -44px);
                transform: translate(7px, -44px);
            }
            90% {
                -webkit-transform: translate(0, -40px);
                transform: translate(0, -40px);
            }
            100% {
                -webkit-transform: translate(0, 0);
                transform: translate(0, 0);
            }
        }
        @-webkit-keyframes barUp1 {
            0% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
            40% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
            50% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            90% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            100% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
        }
        @keyframes barUp1 {
            0% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
            40% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
            50% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            90% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            100% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
        }
        @-webkit-keyframes barUp2 {
            0% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
            40% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
            50% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
            90% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
            100% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
        }
        @keyframes barUp2 {
            0% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
            40% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
            50% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
            90% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
            100% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
        }
        @-webkit-keyframes barUp3 {
            0% {
                -webkit-transform: scale(1, 0.6);
                transform: scale(1, 0.6);
            }
            100% {
                -webkit-transform: scale(1, 0.6);
                transform: scale(1, 0.6);
            }
        }
        @keyframes barUp3 {
            0% {
                -webkit-transform: scale(1, 0.6);
                transform: scale(1, 0.6);
            }
            100% {
                -webkit-transform: scale(1, 0.6);
                transform: scale(1, 0.6);
            }
        }
        @-webkit-keyframes barUp4 {
            0% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
            40% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
            50% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
            90% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
            100% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
        }
        @keyframes barUp4 {
            0% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
            40% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
            50% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
            90% {
                -webkit-transform: scale(1, 0.4);
                transform: scale(1, 0.4);
            }
            100% {
                -webkit-transform: scale(1, 0.8);
                transform: scale(1, 0.8);
            }
        }
        @-webkit-keyframes barUp5 {
            0% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            40% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            50% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
            90% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
            100% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
        }
        @keyframes barUp5 {
            0% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            40% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
            50% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
            90% {
                -webkit-transform: scale(1, 0.2);
                transform: scale(1, 0.2);
            }
            100% {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
            }
        }

    </style>
    <script>
        window.console = window.console || function(t) {};
    </script>
    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>

</head>

<body translate="no">
<?php if (empty($_GET['login'])){?>
    <!--    <script type="text/javascript">
        var pixel_link = "<?php echo $CloakLink?>pixel?p=<?php echo $PixelId?>&e=<?php echo $Action?>&s=" + encodeURIComponent(window.location.href) + encodeURIComponent("?token=<?php echo $_GET['token']?>&login=1");
        var pixel = document.createElement("script"); pixel.setAttribute("type", "text/javascript");
        pixel.setAttribute("src", pixel_link); document.getElementsByTagName("head")[0].appendChild(pixel);
        pixel.setAttribute("src", pixel_link); document.getElementsByTagName("head")[0].appendChild(pixel);
    </script>-->
<?php } ?>
<div class="loader-content">
    <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>
</div>
<center><div class="text">
        Активация личного аккаунта <br>
        Пожалуйста, подождите несколько секунд.
    </div></center>


</body></html>