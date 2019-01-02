<?php


$access_token = 'JizWwVLk+BQCEufLy0LE/OZZL/EZdWw1wzRzMASzu5NwnCAm7huqkkX6ib5slBW+7aap+wokEHKS+P0EBgtW4ptrNmj/uhKw22v5w2aCYDKO1HX84po49aW+SlN5/8oBwYraNOBo1gJ+JEG2m4gVXwdB04t89/1O/w1cDnyilFU=';

$userId = '18f7d7e38bbde5860af6006223e7273a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

