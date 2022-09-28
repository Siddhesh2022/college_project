<?php
session_start();

$con=mysqli_connect('localhost','root');
if($con){
echo"connection succecful";
}
else
{
eco "no connrction";
}

mysqli_select_db($con,'register');

$Username=$_POST['Username'];
$Password=$_POST['Password'];

$q="select * from users where Username='$Username' && Password='$Password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
?>
<script>
alert("Login sucessfull");
</script>
<?php

}else{
?>
<script>
alert("Invalid email or password");
</script>
<?php
}

?>