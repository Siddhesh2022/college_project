<?php
session_start();

include 'db.php';

if(isset($_GET['token'])){


$token=$_GET['token'];
$updatequery=" update users set status ='active' where token='$token'";

$query=mysqli_query($con,$updatequery);

if($query){
if(isset($_SESSION['msg'])){
$_SESSION['msg']="account updated successfully";
header('location:login_page.php');
}else{
$_SESSION['msg']="you are logged out";
header('location:login_page.php');}
}else{
$_SESSION['msg']="account not updated";
header('location:regis.php');
}
}
}




?>