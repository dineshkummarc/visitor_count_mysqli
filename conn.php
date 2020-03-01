<?php
	$conn = mysqli_connect('localhost', 'root', '', 'db_count');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>