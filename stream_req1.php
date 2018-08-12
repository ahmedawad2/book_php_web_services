<?php

$url = 'http://localhost/book/stream_res1.php';
$data = [
    'fname' => 'ahmed',
    'lname' => 'awad'
];
$options = [
    'http' => [
        'method' => 'POST',
        //NOTE: you can set any arbitrary headers you need
        //NOTE: the stream_context_create's way of sending multiple headers is as below
        'header' => ['content-type:application/json', 'random:random data'],
        'content' => json_encode($data)
    ]
];

$res = file_get_contents($url, false, stream_context_create($options));
echo $res;
