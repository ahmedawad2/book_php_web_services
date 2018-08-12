<?php

class Server
{
    public function getRandomNumber()
    {
        return rand(-999, 1000);
    }

    public function getRandomString($length = 10)
    {
        $charset = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ';
        $randomStr = '';
        for ($i = 0; $i < $length; $i++) {
            $randomStr .= $charset{rand(0, strlen($charset))};
        }
        return $randomStr;

    }
}

$options = [
    'uri' => 'http://localhost/book/wsdl'
];
//$server = new SoapServer(null, $options);
$server = new SoapServer('testWSDL.xml');
$server->setClass('Server');
$server->handle();
