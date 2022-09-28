<?php

session_start();

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