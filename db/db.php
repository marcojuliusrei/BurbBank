<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'db_uhack';
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
	die ('Failed'.$conn->connect_error);
}
?>