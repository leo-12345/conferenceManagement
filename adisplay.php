<?php
session_start();
if(!isset($_SESSION["id"]))header("Location: alogin.php");

include "data.php";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error){ die("Connection failed: " . $conn->connect_error);}
else $connectionStatus="Success";
$query="select *from dates";
$resultp = mysqli_query($conn, $query) or die(mysqli_error($db));
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<div class="container col-md-9 col-md-offset-3">
<br><h2>View egistrations</h2>
<div align="right">
<a href="alogout.php"><button class="btn btn-secondary btn-lg right-align">Log out</button></a></div>
<br><br>
      
	  <h3>Filter by department</h3>
	  <form class="customform" method="post"  action="adispd.php" >	
<div class="row">
    <div class="form-group col-md-6">
      
    <select multiple class="form-control" id="sel2" name ="department" required>
        <option>ME</option>
        <option>ECE</option>
        <option>EEE</option>
        <option>CSE</option>
        <option>IT</option>
		<option>EIE</option>
		</select>
    </div>
    
	<div class="col-md-3">
    
    <button type="submit" class="btn btn-default btn-sm btn-block btn-success">View department-wise registrations</button>
	 </div>
	 </div>
  </form>
	<br><br><br><br>
<h3>Filter by semester</h3>
	 
	 <form class="customform" method="post"  action="adispc.php" >	
<div class="row">
    <div class="form-group col-md-6">
      
    <select multiple class="form-control" id="sem" name ="sem" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		</select>
    </div>
    
	<div class="col-md-3">
    
    <button type="submit" class="btn btn-default btn-sm btn-block btn-success">view semester-wise registrations</button>
	 </div>
	 </div>
  </form>
<br><br><br><br>
<h3>Add/edit date of conference</h3>
	  <form class="customform" method="post"  action="adispdate.php" >	
<div class="row">
    <div class="form-group col-md-3">
      
    <select multiple class="form-control" id="sel2" name ="department" required>
        <option>ME</option>
        <option>ECE</option>
        <option>EEE</option>
        <option>CSE</option>
        <option>IT</option>
		<option>EIE</option>
		</select>
    </div>
    <input type="date" name="ddate" id="date" class="col-md-3" required>
	
	<div class="col-md-3">
    
    <button type="submit" class="btn btn-default btn-sm btn-block btn-primary">Edit conference date</button>
	 </div>
	 </div>
  </form>
  <br><br><br><br>
  <h3>Conference Schedule</h3>
  <div class="table-responsive col-md-6">
            <table class="table table-hover" >
	   <thead style="background-color: #4CAF50;color:white;">
      <tr>
        <th>Department</th>
        <th>Date</th>
	  </tr>
    </thead>
	<tbody>

<?php while($row=$resultp->fetch_assoc()){ ?>
   <tr>
   <td><?php echo $row['dept']	?></td>
   <td><?php echo $row['date']	?></td>
   </tr> 
<?php }	 ?>
	
	
	</tbody>
	</table>
 </div>
</body>
</html>