<?php
	require 'conn.php';
	
	$query = mysqli_query($conn, "SELECT * FROM `count") or die(mysqli_error());
	$fetch = mysqli_fetch_array($query);
	$rows = mysqli_num_rows($query);
	
	if($rows == 0){
		mysqli_query($conn, "INSERT INTO `count` VALUES('', '')") or die(mysqli_error());
	}
	
	$count = $fetch['counts'] + 1;
	mysqli_query($conn, "UPDATE `count` SET `counts` = '$count'") or die(mysqli_error());
	echo $count;
	
	
?>