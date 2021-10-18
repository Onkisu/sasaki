<?php
session_start();

include 'conn.php';

$user= $_POST['usern'];
$pass= $_POST['passw'];

$data = mysqli_query($connn,"select * from akun where usern='$user' and pass='$pass'");

$cek = mysqli_num_rows($data);

if($cek > 0){
 header("location:index.html");
}else{

}

?>