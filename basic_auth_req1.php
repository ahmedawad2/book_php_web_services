<?php

$url = 'http://localhost/book/basic_auth_res1.php';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "ahmed:root");
curl_setopt($ch, CURLOPT_POST, 1);
$res = curl_exec($ch);
curl_close($ch);
echo $res;
