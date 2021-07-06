<?php
$campaign_identifier = 'CAMPAIGN_KEY';
$affiliate_hash = 'AFFILIATE_HASH';
$landing_name = 'amazon-stocks-es';
$language = 'ES';
$base = '/amazon-stocks-es/';                // SLASHES ON SIDES
$thankyou = 'thankyou.php'; // NO SLASHES AT START OF A STRING
$FacebookPixel = isset($_GET['pixel_id']) ? $_GET['pixel_id'] : false;
$TiktokPixel = isset($_GET['tp']) ? $_GET['tp'] : false;
$GooglePixel = isset($_GET['gp']) ? $_GET['gp'] : false;
$brokerRedirect = true;
$hasPixel = false;          // IF WE USE ANY PIXEL EXCEPT FACEBOOK
