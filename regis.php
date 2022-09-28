<?php
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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($Email,$ver_code){
require ("PHPMailer.php");
require ("SMTP.php");
require ("Exception.php");

$mail = new PHPMailer(true);

try {
    //Server settings
                                                                //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ehealthcare007@gmail.com';                     //SMTP username
    $mail->Password   = 'cpvhzbksucrqywgt';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ehealthcare007@gmail.com', 'Mailer');
    $mail->addAddress($Email);     //Add a recipient
   // $mail->addAddress('ellen@example.com');               //Name is optional
  //  $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email verification from E-health care';
    $mail->Body    = "Welcome to E-health Care. Thanks for registration!
     Click the link below to verify the email address
   <a href='http://localhost/miniprojet/verify2.php?email=$Email & ver_code=$ver_code'>Verify</a>";


    $mail->send();
    return true;
} catch (Exception $e) {
    return false;
}

}

if (isset($_POST['submit'])){
$Username= mysqli_real_escape_string($con,$_POST['Username']);
$Email= mysqli_real_escape_string($con,$_POST['Email']);
$Password= mysqli_real_escape_string($con,$_POST['Password']);

$pass=password_hash($Password,PASSWORD_BCRYPT);
$ver_code= bin2hex(random_bytes(15));

$emailquery="select * from users where Email='$Email'";
$query=mysqli_query($con,$emailquery);
$emailcount=mysqli_num_rows($query);

if ($emailcount>0){
echo "email already exist";
}
else{
$insertquery="insert into users(Username, Email, Password,ver_code,is_verified) values('$Username','$Email','$pass','$ver_code','0')";

//$iquery=mysqli_query($con,$insertquery);

if (mysqli_query($con,$insertquery) && sendMail($_POST['Email'],$ver_code)){
?>
<script>
alert(" Registration Successful");
</script>
<?php

}
}
}

else{
?>
<script>
alert("Registration unsuccessful");
</script>
<?php
}






?>

<div class="container ">
    <header class="header">
        <h1 id="title">
            SIGN UP
        </h1>
    </header>

        <form action="" method="POST">
                              <!-- Text section -->
        <div class="form-group">
            <label for="Username"> Username</label>
            <input type="text" name="Username" id="Username" class="formControl" placeholder="Enter your Username" required>
        </div>
        <!-- end of text section -->

        <!-- Type Email section -->
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" class="formControl" placeholder="Enter your Email" required>
        </div>
        <!-- end of Email section -->

        <!-- Password section -->
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="Password" id="Password" class="formControl" placeholder="Set your Password" required>
        </div>


       <div class="form-group">
         <button type="submit" name="submit" id="submit" class="btn">submit</button>
         </div>

         <p class="text-center">Have an account?<a href="login_page.php">  Login</a></p>



    </form>
</div>
</body>
</html>