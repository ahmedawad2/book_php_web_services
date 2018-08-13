<?php

class Test
{
    public function test()
    {
        return 'aasdasd';
    }
}

$server = new SoapServer('Eg.wsdl');
$server->setClass('Test');
$server->handle();