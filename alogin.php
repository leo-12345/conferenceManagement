<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="logincss.css">
   <link rel="stylesheet" href="bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
</head>
<body>
<div class="container ">
<div class="panel panel-primary col-sm-8 col-sm-offset-3" style="width:55%">
 <div class="panel-heading">
 <h3 >Admin Login for conference management</h3>
 </div>
  
  <div class="panel-body">

<form class="customform" method="post"  action="avalidatereg.php" >	

    <div class="form-group">
      
      <input type="text" class="form-control " id="adminid" placeholder="Admin id" name="adminid" >
    </div>
    <div class="form-group">
     
      <input type="password" class="form-control " id="pass" placeholder="password" name="pass">
    </div>
	
	
    <button type="submit" class="btn btn-default btn-block">Submit</button>
	
  </form>
  <div>
  </div>

  </div>
  
    <?php 
 if(isset($_SESSION["status"]))
 {if($_SESSION["status"]!="Success"&&isset($_SESSION["status"])) 
	  { 
  ?>
    <div id="snackbar" > <?php echo $_SESSION["status"];?> </div>
	  <?php }}
 ?>

  
	<script>

    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

</script>


</body>

</html>