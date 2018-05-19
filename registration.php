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

<div class="container">
  <h2>Registration form</h2>
  <form method="post"  action="validatereg.php"  >	
    <label for="email">Team Leader particulars:</label>
    
	<div class="form-group">
    <input type="email" class="form-control" id="mail" placeholder="email" name="mail">
    </div>
    
	<div class="form-group">
	  <input type="text" class="form-control" id="firstname" placeholder="firstname" name="firstname">
    </div>
    
	<div class="form-group">
      <input type="text" class="form-control" id="lastname" placeholder="lastname" name="lastname">
    </div>
    
	<div class="form-group">
      <input type="text" class="form-control" id="college" placeholder="college" name="college">
    </div>
    
	<div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
	<div class="form-group">
      <select class="form-control" id="sem" name="sem">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
      </select>
    </div>
    
	<div class="form-group">
        <select class="form-control" id="department" name="department">
      	<option>ME</option>
        <option>ECE</option>
        <option>EEE</option>
        <option>CSE</option>
		<option>IT</option>
		<option>EIE</option>
	  </select>
    </div>
	
	<div class="form-group">
      <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
    </div>
    
	
	<input type="submit" class="btn btn-success col-sm-6 col-sm-offset-3" style="align:center" value="register">
	
  </form>
</div>

</body>
</html>
