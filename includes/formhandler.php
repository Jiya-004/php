<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname =  htmlspecialchars($_POST["firstname"]);
    $lastname =  htmlspecialchars($_POST["lastname"]);
    $pets =  htmlspecialchars($_POST["favouritepet"]);
     
echo"This are the data ,that the user submitted";
echo"<br>";
echo"$firstname";
echo"<br>";
echo"$lastname";
echo"<br>";
echo"$pets";
}
?>
