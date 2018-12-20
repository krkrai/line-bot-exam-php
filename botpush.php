<?php



require "vendor/autoload.php";

$access_token = 'BLRFa5/hYvOdww7fILm06bdNmPA76Wo0U/waHGbIR5dAKCeyc/Gyqz1T97hE1x0oYztMEHHLCEy0wbjy743aCaWr7bnx9N2Hlq19SaMeEkp8Junzfc9Ar9u6FJUxfhvUWfPg7z+eTtlIjccDwU7p8gdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'cacc9a54353d5322b109cef0ac000805';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







