<?php
$access_token = 'VArIYmoAilwj8I//akk3zkoQ2z4/djDeK5jqj74dy6IN8KqKxIePNAp3mMPKhyA6Qn7LTDXW0NVqeReIR/POHgzTYGArQvKe5yrJ3B6s2JYol9uOpWsil5OQ367djR+smgWTYMWZxoBKlj/lcgEaPAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
