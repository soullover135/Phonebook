<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet">
</head>
<body  background="img/12345.jpg" style= "background-size: cover";>
<br><br><br><br><br>
<div class="container mainbox" style="width:500px;"><br/><br/>
		<table class="table table-hover table-secondary ">
		  <thead>
			<tr>
					<th scope="col"><a href="index.html" class="text-info"></a></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col" class = "font-weight-bold"><center>Signup</center></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"><class="text-info" style="float: right;"></a></th>
			</tr>
		  </thead>
		  
		</table>
	<div class="container" style="width: 450px ; drop shadow rectangle">
		<form action ="includes/signup.inc.php" method="POST">

				  <label for="exampleInputname">Name</label>
				  <div class="row">
					<div class="col-6">					
					  <input type="text" name="first" class="form-control" placeholder="First name" style="width: 200px;" required>
					</div>					
					  <input type="text" name="last" class="form-control" placeholder="Last name" style="width: 210px;" required>					  
					</div>			
				   <div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Email" required>
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  				<label for="exampleInputname">Username</label>
				  <div class="row">
					<div class="col-6">					
					  <input type="text" name="uid" class="form-control" placeholder="Username" style="width: 420px;" required>
					</div>										  
					</div>			
				  <div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="pwd" class="form-control"  placeholder="Password" required>
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
				  <button class="btn btn-light"><a href="index.php">Cancel</a></button>
</form>
</div>
	<br/><br/><br/>
</div>	
</body>	
</html>
  
	
