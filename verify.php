<?php
$access_token = 'BLRFa5/hYvOdww7fILm06bdNmPA76Wo0U/waHGbIR5dAKCeyc/Gyqz1T97hE1x0oYztMEHHLCEy0wbjy743aCaWr7bnx9N2Hlq19SaMeEkp8Junzfc9Ar9u6FJUxfhvUWfPg7z+eTtlIjccDwU7p8gdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
