<?php

$client = new SoapClient('http://localhost/book/soap_nonwsdl_server.php?wsdl');
//print_r($client->__getFunctions());
var_dump($client->__call('getRandomNumber',[[]]));