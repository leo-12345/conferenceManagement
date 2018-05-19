<?php
session_start();
include "data.php";
//include "phpmailer-fe.php";
include "test.php";
//echo $servername;
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error){ die("Connection failed: " . $conn->connect_error);}
else $connectionStatus="Success";
$x3=0;
$email=$_POST["mail"];
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$college=$_POST["college"];
$pass=$_POST["pwd"];
$sem=$_POST["sem"];
$dept=$_POST["department"];
$phone=$_POST["phone"]; 
//echo $_POST["email"]; 
$x=mt_rand(100000,999999);
$txt = "Your Conference verification code is".$x;
//echo $x;
$_SESSION["pin"]=$x;
$_SESSION["mail"]=$email;
send_mqil_using_php_mailer($email,$txt,"verification");
$query="INSERT INTO register VALUES ('{$email}','{$firstname}','{$lastname}','{$college}','{$pass}','{$sem}','{$dept}','{$sem}')";
$result=$conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container  col-sm-4 col-sm-offset-4"style="margin-top:10%;">
<h3>enter the 6-digit pin sent to your mail id</h3><br>
  <form method="post"  action="sf.php" >	
    
	<div class="form-group">
    <input type="text" class="form-control" id="pin" placeholder="6-Digit pin here" name="pin" >
    </div>
	<input type="submit" class="btn btn-success col-sm-12"  value="Verify pin">
	</form>
	</body>
	
	</html>
	