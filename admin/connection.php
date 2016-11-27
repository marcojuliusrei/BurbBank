<?php
	$server = "localhost";
	$serverusername = "root";
	$serverpassword = "";
	$databasename = "db_uhack";
	
	$conn = new mysqli ($server,$serverusername,$serverpassword,$databasename);
	if($conn->connect_error){
		die("ERROR".$conn->connect_error);
	}

?>