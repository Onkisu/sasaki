<?php
$server = "localhost";
$user= "root";
$pass = "";
$db="sasaki";
$connn = mysqli_connect($server,$user,$pass,$db);

if(!$connn){
    die("Connection failed: " . mysqli_connect_error);
}
?>