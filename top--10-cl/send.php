<?php
$handle = curl_init();

$url = "https://api.abuseipdb.com/api/v2/check?ipAddress=2a03:2880:22ff:5::face:b00c";
$YOUR_API_KEY = 'a13938b108944e6b274a9fa625ed7e63f694cb78fc134d33ca44dc20cd3b7215d1adce9c762e0e5f';
// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_HTTPHEADER, array(
    "Key: $YOUR_API_KEY",
    "Accept: application/json"
));

$output = curl_exec($handle);
var_dump($output);
curl_close($handle);

//echo $output;
