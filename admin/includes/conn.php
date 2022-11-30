<?php
	$conn = new mysqli('', 'admin', 'Mysql#$%2020', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
