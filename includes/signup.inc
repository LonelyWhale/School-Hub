<?php
	include_once 'dbh_inc.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$age = $_POST['age'];
	$year = $_POST['year'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];


	$sql = "INSERT INTO users (user_first,user_last, user_age, user_year, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$age', '$year','$email', '$uid', '$pwd');";
	mysqli_query($conn, $sql);
	
	header("Location: ../signup.php?signup-success");
?>