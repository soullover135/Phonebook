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
		}
		
	}
