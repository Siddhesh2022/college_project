<?php
include 'db.php';
if(!empty($_GET['ver_code']) && isset($_GET['ver_code']))
{
$code=$_GET['ver_code'];
$sql=mysqli_query($con,"SELECT * FROM users WHERE ver_code='$code'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$st=0;
$result =mysqli_query($con,"SELECT id FROM users WHERE ver_code='$code' and is_verified='$st'");
$result4=mysqli_fetch_array($result);
if($result4>0)
 {
$st=1;
$result1=mysqli_query($con,"UPDATE users SET is_verified='$st' WHERE ver_code='$code'");
$msg="Your account is activated";

}
else
{
$msg ="Your account is already active, no need to activate again";
}
}
else
{
$msg ="Wrong activation code.";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="register.css">

    <title>Survey Form</title>
</head>
<body>

<?php

include 'db.php';


if(isset($_POST['submit'])){

$Email=$_POST['Email'];
$Password=$_POST['Password'];

$email_search=" select * from users where Email='$Email' ";
$query= mysqli_query($con,$email_search);

$email_count= mysqli_num_rows($query);

if($email_count){
$email_pass=mysqli_fetch_assoc($query);

 $db_pass=$email_pass['Password'];

 $pass_decode=password_verify($Password,$db_pass);

 if($pass_decode){
 ?>
 <script>
 alert("Login  Successful");
 </script>
 <?php

 ?>
 <script>
  location.replace("home_page.php");
 </script>
 <?php

}else{
?>
<script>
alert("Invalid Password");
</script>
<?php

}
}
else{
?>
<script>
alert("Invalid Email");
</script>
<?php
}
}


?>



<div class="container ">
    <header class="header">
        <h1 id="title">
            LOGIN
        </h1>
    </header>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">


        <!-- Type Email section -->
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="Email" name="Email" id="Email" class="formControl" placeholder="Enter your Email" >
        </div>
        <!-- end of Email section -->

        <!-- Password section -->
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="Password" name="Password" id="Password" class="formControl" placeholder="Set your Password" >
        </div>

        <!-- Submit button-->
        <div class="form-group">
                 <button type="submit" name="submit" id="submit" class="btn">submit</button>
                 </div>

                 <p class="text-center">Don't have an account?<a href="">  Sign up here</a></p>



    </form>
</div>
</body>
</html>