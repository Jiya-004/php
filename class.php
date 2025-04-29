<?php
// $xml = simplexml_load_file("note.xml");
// // print_r($xml);
// echo $xml ->to."<br>";
// echo $xml ->from."<br>";
// echo $xml ->heading."<br>";
// echo $xml ->body."<br>";

//DOM parser
$xmlDoc = new DomDocument();
$xmlDoc -> load('note.xml');

$x = $xmlDoc ->documentElement;
foreach($x ->childNodes as $item){
    if ($item->nodeType == XML_ELEMENT_NODE) { // Ignores things like whitespace and text nodes
        echo $item->nodeName . ": " . $item->nodeValue . "<br>";
    }
 
}

?>


