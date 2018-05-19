<?php
session_start();
include "data.php";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error){ die("Connection failed: " . $conn->connect_error);}
else $connectionStatus="Success";
$d=$_POST["department"];
$query="select *  from register where dept='{$d}'";
$resultp = mysqli_query($conn, $query) or die(mysqli_error($db));


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trends Login</title>
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
<div class="table-responsive">
            <table class="table table-hover" >
			<h2>display by department wise participation</h2>
       <thead style="background-color: #4CAF50;color:white;">
      <tr>
        <th>Name</th>
        <th>College</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Semester</th>
       
      </tr>
    </thead>
	<tbody>

<?php while($row=$resultp->fetch_assoc()){ ?>
   <tr>
   <td><?php echo $row['firstname']	?></td>
   <td><?php echo $row['college']	?></td>
   <td><?php echo $row['phone']	?></td>
   <td><?php echo $row['email']	?></td>
   <td><?php echo $row['sem']	?></td>
   </tr> 
<?php }	 ?>
	
	
	</tbody>
  </table>
          </div>
</body>
</html>
