<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet">
</head>
<body background="img/123.jpg" style= "background-size: cover";>
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
	<br/>
	<div class="container">
	<form>
		<button type="submit" name="cancel" class="btn btn-light"><a href="addcontacts.php">Add Contact</a></button>
			<br/><br/>
		<table class="table table-hover">
		  <thead>
			<tr>
			  <th scope="col">Name</th>
			  <th scope="col">Phone No.</th>
			  <th scope="col">Address</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				include_once 'includes/dbh.inc.php';
				$user_id = $_SESSION['u_id'];
				$sql = "SELECT * 
						FROM contacts AS p 
						JOIN users AS r 
						WHERE p.user_id = $user_id  
						AND r.user_id = $user_id;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
			<tr>
			  <th scope="row"><?php echo $row["contact_first"]; echo " "; echo $row["contact_last"]; ?></th>
			  <td><?php echo $row["contact_no"]; ?></td>
				<td><?php echo $row["contact_add"]; 	?> </td>
			  <td><a href="includes/delete.inc.php">Edit</a>
			   <a href="includes/delete.inc.php">Delete</a></td>
			</tr>
			<?php		}
				
				}
				?>
		  </tbody>
		</table>
	</form>
	</div>
</body>  
</html>