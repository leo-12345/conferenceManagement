<?php
session_start();
include "data.php";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error){ die("Connection failed: " . $conn->connect_error);}
else $connectionStatus="Success";
$d=$_POST["ddate"];
$dept=$_POST["department"];
$query="UPDATE `dates` SET `date` = '{$d}' WHERE `dates`.`dept` = '{$dept}';";
$resultp = mysqli_query($conn, $query) or die(mysqli_error($db));
Echo "success";
?>
