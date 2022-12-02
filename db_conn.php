<?php 

	$sname = "localhost";
	$unmae = "root";
	$password = "";

	$db_name = "test_db";

	$conn = mysqli_connect($sname, $unmae, $password, $db_name);

	// global $conn;

	if(!$conn) {
		echo "Connection Failed";
	}
?>
