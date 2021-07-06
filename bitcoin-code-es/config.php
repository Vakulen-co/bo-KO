<?php
$campaign_identifier = 'CAMPAIGN_KEY';
$affiliate_hash = 'AFFILIATE_HASH';
$landing_name = 'bitcoin-code-es';
$language = 'RU';
$base = '/bitcoin-code-es/';                // SLASHES ON SIDES
$thankyou = 'thankyou.php'; // NO SLASHES AT START OF A STRING
$FacebookPixel = $_GET['pixel_id'] ? $_GET['pixel_id'] : false;
$TiktokPixel = $_GET['tp'] ? $_GET['tp'] : false;
$GooglePixel = $_GET['gp'] ? $_GET['gp'] : false;
$brokerRedirect = true;
$hasPixel = false;          // IF WE USE ANY PIXEL EXCEPT FACEBOOK