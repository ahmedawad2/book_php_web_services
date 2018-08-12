<?php
$options = [
    'location' => 'http://localhost/book/libsoap_Server.php',
    'uri' => 'http://localhost/book'
];

$client = new SoapClient(null, $options);
print_r($client->getDwarves());
print_r($client->greetUser('ahmed'));
//this line won't get anything as we're working in non WSDL mode
//BEWARE: WSDL file is the source of info about functions and parameters.
print_r($client->__getFunctions());