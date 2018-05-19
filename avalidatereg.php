<?php

session_start();
$adminid =$_POST['adminid'];
$password = $_POST['pass'];
if(($adminid)!="" && ($password)!="")
{
	if(($adminid)=="admin" && ($password)=="admin")
	{$_SESSION["status"] = "Success";
	$_SESSION["id"] = "admin";
	header("Location: adisplay.php");
	}	
		
	else {
		$_SESSION["status"] = "invalid login credentials";
		
	header("Location: alogin.php");
	
	}	
		}

else {	
	    $_SESSION["status"] = "Missing Credentials";
		header("Location: alogin.php");
		//echo("<script>location.href = 'attendancelogin.html';</script>");
}
echo $_SESSION["status"];
?> 	