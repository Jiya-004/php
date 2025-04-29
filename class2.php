<?php
$xml = simplexml_load_file("books.xml");
// print_r($xml);
foreach($xml -> book as $book){
    // print_r($book);
    // echo"<br>";
    echo $book -> author."<br>";
}