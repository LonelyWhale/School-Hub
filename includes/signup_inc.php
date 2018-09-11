<?php
	include_once 'dbh_inc.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$age = $_POST['age'];
	
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$hashPwd = sha1($pwd);

	if ($_POST['role'] == 'student') {
		$role = 'Student';

	} elseif ($_POST['role'] == 'ta') {
		$role = 'TA Pending';
		$roleSql = "INSERT INTO pending_roles (TA) VALUES ('$uid');";
		mysqli_query($conn, $roleSql);

	} elseif ($_POST['role'] == 'teacher') {
		$role = 'T Pending';
		$roleSql = "INSERT INTO pending_roles (Teacher) VALUES ('$uid');";
		mysqli_query($conn, $roleSql);

	} elseif ($_POST['role'] == 'admin') {
		$role = 'admin pending';
		$roleSql = "INSERT INTO pending_roles (Admin) VALUES ('$uid');";
		mysqli_query($conn, $roleSql);
	}
	$sql = "INSERT INTO users (user_first,user_last, user_age, user_role, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$age', '$role','$email', '$uid', '$hashPwd');";
	mysqli_query($conn, $sql);
	
	header("Location: ../login.php?signup-success");
?>