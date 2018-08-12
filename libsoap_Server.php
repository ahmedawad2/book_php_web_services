<?php
require_once 'library.php';
$options = [
    'uri' => 'http://localhost/book'
];
$server = new SoapServer(null, $options);
$server->setClass('Library');
$server->handle();