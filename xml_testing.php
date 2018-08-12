<?php
$langs = ['en', 'ar', 'fr', 'sp'];
$xml = new SimpleXMLElement("<languages />");
foreach ($langs as $lang) {
    $xml->addChild('lang', $lang);
}
$dom = dom_import_simplexml($xml)->ownerDocument;
$dom->formatOutput = true;
echo $dom->saveXML();
