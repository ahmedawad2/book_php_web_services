<?php
$options = [
    'location' => 'http://localhost/book/soap_nonwsdl_server.php',
    'uri' => 'http://localhost/book'
];
$client = new SoapClient(null, $options);
print_r($client->getRandomString(10));
