<?php
	session_start();
	include_once 'dbh.inc.php';
	$user_id = $_SESSION['u_id'];
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$sql = "INSERT INTO `contacts` (`user_id`, `contact_first`, `contact_last`, `contact_no`, `contact_add`) VALUES ('$user_id', '$first', '$last', '$phone', '$address');";
	mysqli_query($conn, $sql);
		
	header("Location: ../addcontacts.php?save=success");