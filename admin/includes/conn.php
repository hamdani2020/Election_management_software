<?php
	$conn = new mysqli('database-1.cq9eihbyetk7.us-east-1.rds.amazonaws.com', 'admin', 'Mysql#$%2020', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>