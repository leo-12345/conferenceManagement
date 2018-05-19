<?php
session_start();
include "data.php";

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

<style>
body  {
    background-image: url("aa.jpg");
    background-color: #cccccc;
}
</style>
</head>
<body>
<div class="well well-lg" style="height:100px;font-size:30px;font-family:verdana;background:gray;color:white;" align="center">International conference</div>
 <div align="center" style="margin-top:20%;" class="col-sm-3;">
 <a href="registration.php"><button type="button" class="btn btn-default btn-lg">Register here</button></a>
 <a href="alogin.php"><button type="button" class="btn btn-default btn-lg">admin here</button></a>
 </div>
</body>
</html>
