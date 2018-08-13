<?php
ini_set("soap.wsdl_cache_enabled", 0);
ini_set('soap.wsdl_cache', 0);
//die('hello');

$options = [
    'trace' => true,
    'exceptions' => true,
    'connection_timeout' => 1
];


$client = new SoapClient('http://localhost/book_php_web_services/libsoap_Server.php?wsdl', $options);
//var_dump($client->test());
var_dump($client->__getFunctions());

print_r($client->__soapCall('sayHello', []));