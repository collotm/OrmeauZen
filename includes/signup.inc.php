<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check for empty fields
	if (empty($email) || empty($pwd)) {
		# code...
	}


} else {
	header("Location: ../signin.php");
	exit();
}