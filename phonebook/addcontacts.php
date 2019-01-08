<?php
	session_start();	
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet">
</head>
<body class="container mainbox" style="width:600px;"><br/><br/>
		<table class="table table-hover table-secondary ">
		  <thead>
			<tr>
					<th scope="col"><a href="index.html" class="text-info"></a></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col" class = "font-weight-bold"><center>Add contact</center></th>
					<th scope="col"></th>
					<th scope="col"></th>
					<th scope="col"><a href="list.html" class="text-info" style="float: right;"></a></th>
			</tr>
		  </thead>
		  
		</table>
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
</form>
</div>
	<br/><br/><br/>			  

	
</html>
  
	
