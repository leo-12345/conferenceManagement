<?php
session_start();
$p=$_POST['pin'];
if($_SESSION["pin"] != $p)
{
echo $_SESSION["email"];
	header('Location:failure.php');
}
else
{$_SESSION["pin"]="";
	header('Location:success.php');}
?>