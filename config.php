<?php
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$dbName = "assingment";

	$connection = mysqli_connect($localhost, $username, $password, $dbName);
	// print_r($connection);

	if ($connection) {
		echo "Connection successfully";
	} else {
		echo "Failed to connect";
	}

?>
