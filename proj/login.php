<?php
session_start();

include 'conn.php';

$username= $_POST['user1'];
$password= $_POST['pass1'];

$data = mysqli_query($connn,"select * from akun where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
 header("location:course.php");
}else{
  echo('not');
}

?>