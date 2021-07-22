<?php 
$useragent = $_SERVER['HTTP_USER_AGENT'];
$iPod = stripos($useragent, "iPod");
$iPad = stripos($useragent, "iPad");
$iPhone = stripos($useragent, "iPhone");
$Android = stripos($useragent, "Android");
$BlackBerry = stripos($useragent, "BlackBerry");
$iOS = stripos($useragent, "iOS");
$Mobile = stripos($useragent, "Mobile");

$DEVICE = ($iPod || $iPad || $iPhone || $Android || $iOS || $webOS || $Blackberry || $IEMobile || $OperaMini || $Mobile);

if ($DEVICE != true) {
    include_once 'bitRadarPC/index.php';
} else {
    include_once 'bitRadarMOB/index.php';
}   
?>