<?php
$Email=$_POST['Email'];
$Password=$_POST['Password'];

$con=new mysqli("localhost","root","","project");
if($con->connect_error){
die("Failed to connect : ".$con->connect_error);
}else
{
$stmt=$con->prepare("select * from users where Email= ?")
$stmt->bind_param("s"",$Email");
$stmt->execute();
$stmt_result=$stmt->get_result();
if($stmt_result->num_rows>0){
$data=$stmt_result->fetch_assoc();
if($data['Password']==$Password){
echo"<h2>Login successfully</h2>";
}else{
echo"<h2>Invalid Email or password</h2>";
}else{
echo"<h2>Invalid Email or password</h2>";
}
}
}
