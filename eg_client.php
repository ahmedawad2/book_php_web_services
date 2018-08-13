<?php

ini_set('soap.wsdl_cache_enabled', 0);

$options = [
    'uri' => 'http://localhost/book_php_web_services/eg_client'
];

$client = new SoapClient('http://localhost/book_php_web_services/eg_server.php?wsdl', ['trace' => 1]);
//$client->__setLocation('http://localhost/book_php_web_services/eg_server.php');

print_r($client->__getFunctions());

print_r($client->__call('test', []));