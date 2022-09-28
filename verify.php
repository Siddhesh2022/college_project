





<?php



















/*include 'db.php';

if(isset($_POST['Email']) && isset($_POST['ver_code']))
{
$Email=$_POST['Email'];
$ver_code=$_POST['ver_code'];
$query="SELECT * FROM users WHERE Email='$Email' AND ver_code='$ver_code'";
$result=mysqli_query($con,$query);
if($result)
{
if(mysqli_num_rows($result)==1)
{
$result_fetch=mysqli_fetch_assoc($result);
if($result_fetch['is_verified']==0)
{

$update="UPDATE users SET is_verified ='1' WHERE 'Email' =$result_fetch['Email']";
if(mysqli_query($con,$update)){
?>
<script>
alert(" Registration Successful");
</script>
<?php




}else{
echo "
<script>
alert('error');

</script>";


}
}
else{
echo "
<script>
alert('error');

</script>";
}
}
}
else{
echo "
<script>
alert('error');

</script>";
}
}*/




