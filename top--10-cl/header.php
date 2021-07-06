<?php
$arr = ['promo', 'page', 'news', 'article', 'main', 'event', 'live'];

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

    if (!empty($_GET['id'])){
        $FacebookPixel = $_GET['id'];
    };

    if (empty($FacebookPixel)) {

        $FacebookPixel = "0";

    };
    $filePath = $_SERVER['REQUEST_URI'] == '/' ? '' : strripos($_SERVER['REQUEST_URI'], '?') ? stristr($_SERVER['REQUEST_URI'], '?', true) : $_SERVER['REQUEST_URI'];

}else {
    if (!empty($_GET['id'])){
        $FacebookPixel = $_GET['id'];
    };

    if (empty($FacebookPixel)) {

        $FacebookPixel = "0";

    };

    if (!empty($_COOKIE["token"])) {

        $unique_token = $_COOKIE["token"];

    } else {

        $unique_token = uniqid("tok_", true);
        setcookie("token", $unique_token, time() + 99000);

    };


    function current_url()
    {
        $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $validURL = str_replace("&", "&amp", $url);
        return $validURL;
    }

    $FirstName = $_GET['f_name'];
    $Email = $_GET['email'];

    $LandingURL = current_url();
    $LandingName = "TOP-10";
    $LandingLang = "RU";
    $LandingGeo = "RU";
    $filePath = dirname($_SERVER['REQUEST_URI']) == '/' ? '' : dirname($_SERVER['REQUEST_URI']) . '/';
}

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$filePath}";
$ogUri =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$imgOgUri =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}";

$base = '/top--10/';
if($filePath == '/' ) {
    include 'seo.php';
}else {
    include '../seo.php';
}


?>