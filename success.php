<?php
session_start();
include "data.php";
include "test.php";
$email=$_SESSION["mail"];
echo "congratulations,you have successfully registered for the conference ,we will provide you the details of the conference soon through mail<br>redirecting you to homepage";
$txt="congratulations,you have successfully registered for the conference.will provide you the details soon.";
send_mqil_using_php_mailer($email,$txt,"successfully registered");
header( "refresh:4;url=homepage.php" );
?>