<?php
$servername="localhost";
$username = "username";
$password = "";
$dbname="database";

$conn = mysqli_connect($servername,$username,$password,$dbname,3307);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
$sql="INSERT INTO tables (id,name,email) 
VALUES (1,'john','john@gmail.com'),
      (2,'jean','jean@gmail.com')";
if(mysqli_query($conn,$sql)){
    echo"sucessful";
}    
else{
    "error".$sql."<br>".mysqli_error($conn);
    }   
 mysqli_close($conn);   
?>