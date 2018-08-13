<?php
require_once 'vendor/autoload.php';
require_once 'library.php';


$generator = new PHP2WSDL\PHPClass2WSDL('Library', 'http://localhost/book_php_web_services/libsoap_Server');
$generator->generateWSDL(false);
$generator->save('libraryClass.xml');