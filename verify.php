<?php
$access_token = 'D86UN1zk8LFuqtzYFIc1hoDUfw+xQNJOnJgiEQ0PBctzywBN8i7oGKPSIKUMGrW
c9thNxqb3tYoo373mknr1APGV1LtLtRBugBz+mUUP1tHnG7o0dSFtjkjsVJ5yUnB4wNHY2CISvFNsrJp75+bAFAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
