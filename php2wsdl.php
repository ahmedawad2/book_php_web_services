<?php
require_once 'vendor/autoload.php';
require_once 'soap_nonwsdl_server.php';


$wsdlGen = new \PHP2WSDL\PHPClass2WSDL((new Server()), 'http://localhost/book/wsdl');
$wsdlGen->generateWSDL(false);
$wsdlGen->save('testWSDL.xml');
