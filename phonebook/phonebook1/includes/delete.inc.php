<?php
	session_start();
	$user_id = $_SESSION['u_id'];
	$user_first=$_REQUEST['first_name'];
	$sql = "DELETE FROM contacts WHERE user_id=$user_id and first_name=$user_first;"; 
	$result = mysqli_query($conn,$sql);
	header("Location: home.php"); 
?>