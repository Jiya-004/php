<?php
$xml = simplexml_load_file("note.xml");
// print_r($xml);
echo $xml ->to."<br>";
echo $xml ->from."<br>";
echo $xml ->heading."<br>";
echo $xml ->body."<br>";

?>