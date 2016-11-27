<?php

	include "connection.php";

	if(isset($_POST["add"])){
		$query = "INSERT INTO tbl_acct(username, password, account_num, email) 
		VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["acct_num"]."','".$_POST["email"]."')";
		if($conn->query($query) == TRUE){
			echo "SUCCESS TO REGISTER";
		}else{
			echo "FAILED TO REGISTER".$query."<br>".$conn->error;
		}
		
		
		
	}
	

?>
<html>
<head>
<h1> ACCOUNT REGISTER </h1>
</head>
<link rel='stylesheet' href='bootstrap/dist/css/bootstrap.css'>

<body>

<form action = "reg.php" method = "POST">


<div class = 'navbar navbar-inverse'>
<div class = 'container'>
<div class = 'navbar-header'>
<ul class = 'nav navbar-nav'>
<li><a href = "admin.php">LIST OF ACCOUNTS</a></li>
<li><a href = "reload.php">LOAD ACCOUNT</a></li>
<li><a href = "reg.php">REGISTER OF ACCOUNT</a></li>
</ul>
<ul class = 'nav navbar-nav navbar-right'>
<li><a href = "logout.php"><span class = 'glyphicon glyphicon-log-out'>LOGOUT</span></a></li>
</ul>
</div>
</div>
</div>
<br /><br />

<div style='margin-left:30px;'>
Username : <input style = 'margin-left:35px;' type = "text" name = "username"><br>
Password : <input style = 'margin-left:39px;' type = "password" name = "password"><br>
Account Number: <input type = "text" name = "acct_num"><br>
Email : <input style = 'margin-left:64px;' type = "text" name = "email"><br>

<input class = 'btn btn-primary col-lg-7' type = "submit" name = "add" value = "Register"> 
<input class = 'btn btn-primary col-lg-7' type = "submit" name = "back" value = "Back">
</div>
</form>
</body>
</html>