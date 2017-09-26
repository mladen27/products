<?php

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$city = $_POST['city'];
	$message = $_POST['message'];

	require_once 'connect.php';

	$query = "INSERT INTO sanduce VALUES ('', '".$firstname."', '".$lastname."', '".$city."', '".$email."', '".$phonenumber."', '".$message."', ".date("Y-m-d H:i:s").");";

    $query_run = mysqli_query($link, $query));

?>