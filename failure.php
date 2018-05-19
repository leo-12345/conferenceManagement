<?php
session_start();
include "data.php";
$conn = new mysqli($servername, $username, $password, $db);
$p=$_SESSION["mail"];
echo "invalid pin,registration unsuccessful.\nredirecting you to homepage";
$query="delete from register where email='{$p}'";
$result=$conn->query($query);

header( "refresh:4;url=registration.php" );
?>