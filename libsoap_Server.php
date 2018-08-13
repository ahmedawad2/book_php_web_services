<?php
require_once 'library.php';
$options = [
    'uri' => 'http://localhost/book_php_web_services/libsoap_Server'
];
//non wsdl mode
$server = new SoapServer(null, $options);

//wsdl mode
$server = new SoapServer('libraryClass.xml');
$server->setClass('Library');
$server->handle();