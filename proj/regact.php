<?php
session_start();

include 'conn.php';

$username= $_POST['user'];
$email= $_POST['email'];
$password= $_POST['pass'];
$conpass= $_POST['conpass'];

if($password==$conpass){
    $data = mysqli_query($connn,"insert into akun(username,email,password) values('$username','$email','$password')");
     
    

    
    
     header("location:loginf.php");
    
    
}else{
    echo('password harus sama');
}

?>