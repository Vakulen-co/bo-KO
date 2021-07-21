<?php
$arr = [];

function findPos($needles, $strLook) {
    foreach($needles as $needle) {
        if (strpos($strLook, $needle)  != false) {
            return $needle;
        }
    }
    return null;
}
function findGet($needles) {
    foreach($needles as $needle) {
        if (!empty($_GET[$needle])) {
            return $_GET[$needle];
        }
    }
    return null;
}
function findParentGet($uri , $needles) {
    foreach($needles as $needle) {
        if (strstr($uri, $needle)) {
            return explode('=', $uri)[1];
        }
    }
    $needles2 = ['id', 'pixel_id', 'p'];
    foreach($needles2 as $needle) {
        if ($_GET[$needle]) {
            return $_GET[$needle];
        }
    }

    return null;
}


$uri = $_SERVER['HTTP_REFERER'];
$uri = explode('?',$uri)[1];

$lookup =  findPos($arr , $_SERVER['REQUEST_URI']);
$lookup2 =  findGet($arr);
$lookup3 =  findParentGet($uri, $arr);

if ($lookup) {
    $FacebookPixel = strstr($_SERVER['REQUEST_URI'], $lookup);
    $FacebookPixel = explode('/', $FacebookPixel)[1];
}
if($lookup2) {
    $FacebookPixel = $lookup2;
}else if($lookup3) {
    $FacebookPixel = $lookup3;
}else if(empty($FacebookPixel)) {
    $FacebookPixel = "0";
}

if($mainPage) {
    $filePath = $_SERVER['REQUEST_URI'] == '/' ? '' : strripos($_SERVER['REQUEST_URI'], '?') ?  stristr($_SERVER['REQUEST_URI'], '?', true) : $_SERVER['REQUEST_URI'];

}else {

    if (!empty($_POST["token"])) {
        $unique_token = $_POST["token"];
    } else {
        $unique_token = uniqid("tok_", true);

    }

    function current_url()
    {
        $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $validURL = str_replace("&", "&amp", $url);
        return $validURL;
    }

    $FirstName = $_POST['f_name'];
    $Email = $_POST['email'];
    $unique_token = uniqid("tok_", true);
    $LandingURL = current_url();
    $LandingName = "Immediate_BT";
    $LandingLang = "EN";
    $LandingGeo = "EN";
    $filePath = dirname($_SERVER['REQUEST_URI']) == '/' ? '' : dirname($_SERVER['REQUEST_URI']) . '/';
}

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "http" : "https") . "://{$_SERVER['HTTP_HOST']}{$filePath}";
$ogUri =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "http" : "https") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$imgOgUri =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "http" : "https") . "://{$_SERVER['HTTP_HOST']}";
