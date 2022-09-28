<?php
$server_name="localhost";
$Username="root";
$Password="";
$database_name="users";

$con=mysqli_connect($server_name,$Username,$Password,$database_name);
//now check the connection
if(!$con)
{
  die("Connection failed:" . mysqli_connect_error());
}
if(isset($_POST['submit']))
{

  $username=$_POST['Username'];
  $Email=$_POST['Email'];
  $password=$_POST['Password'];

  $sql_query="INSERT INTO user_info (Username,Email,Password)
  VALUES ('$Username'.'$Email','$Password')";

  if(mysqli_query($con,$sql_query))
  {
    echo "New Details Entry inserted succesfully !";
  }
  else
  {
    echo "Error: " .mysqli_error($con);
  }
  mysqli_close($con);
}
?>