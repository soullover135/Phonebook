<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
		<table class="table table-hover table-secondary ">
		  <thead>
			<tr>
					<th scope="col"><h3><a class="text-info" href="home.php">
	<?php
		if(isset($_SESSION['u_id'])){
			echo ($_SESSION['u_first']);
			echo ' ';
			echo ($_SESSION['u_last']);
		}
	?></a><h3></th>
					
					<th scope="col"><a class="text-info" style="float: right;"><form action="includes/logout.inc.php" method="POST"><button type="submit" name="submit" class="btn btn-primary">Logout</button></form></a></th>
			</tr>
		  </thead>
		</table>
	<br/><br/>
	<br/>
	
	<div class="container" style="width: 450px ; drop shadow rectangle">
		<form action = "includes/addcontacts.inc.php" method="POST">
				
				  <label for="exampleInputname">Name</label>
				  <div class="row">
					<div class="col-6">					
					  <input type="text" class="form-control" name="first" placeholder="First name" style="width: 200px;" >
					</div>					
					  <input type="text" class="form-control" name="last" placeholder="Last name" style="width: 210px;" >					  
					</div>		
				  <div class="form-group">
					<label for="inputAddress">Phone number</label>
					<input type="text" class="form-control" name="phone" placeholder="Phone number" >
				  </div>
				  <div class="form-group">
					<label for="inputAddress">Address</label>
					<input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" required>
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				  <button class="btn btn-light"><a href="home.php">Cancel</a></button>
		</form>
	</div>
</body>
</html>
	
	
	
	
	
	
	
	