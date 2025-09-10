<?php
	$conn = mysqli_connect('localhost', 'root', '', 'science_abcd') or die(mysqli_error());
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>