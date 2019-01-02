<?php
require "vendor/autoload.php";
$access_token = 'JizWwVLk+BQCEufLy0LE/OZZL/EZdWw1wzRzMASzu5NwnCAm7huqkkX6ib5slBW+7aap+wokEHKS+P0EBgtW4ptrNmj/uhKw22v5w2aCYDKO1HX84po49aW+SlN5/8oBwYraNOBo1gJ+JEG2m4gVXwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '18f7d7e38bbde5860af6006223e7273a';
$idPush = 'xxxxxx'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
