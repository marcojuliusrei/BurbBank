<?php
session_start();
include('../db/db.php');

if(isset($_POST['login']))
	{
		$sql = "SELECT * from tbl_acct where username = '".$_POST['user']."' and password = '".$_POST['pass']."'";
		$result = $conn->query($sql);
		if($result->num_rows==1)
			{
				while($row = $result->fetch_assoc()) 
					{
						$_SESSION['user'] = $row['username'];
						$_SESSION['account'] = $row['account_num'];
						$_SESSION['balance'] = $row['balance'];
						$_SESSION['points'] = $row['total_points'];
						header ('Location:home.php');
					}
			}
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.css">
		<link rel="stylesheet" href="../css/mycss.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<script src="../bootstrap-3.3.7-dist/jquery-1.12.4.min.js"></script>
		<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
			<div class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">U-man Remittance</a>
					</div>
					<center>
						<div class="navbar-collapse collapse" id="navbar-main">
							<form class="navbar-form navbar-right" role="search" action="index.php" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" name="user" placeholder="Username" autofocus>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="pass" placeholder="Password">
								</div>
								<button name="login" type="submit" class="btn btn-inverse">Sign In</button>
							</form>
									<ul class="nav navbar-nav">
							</ul>
						</div>
					</center>
				</div>
			</div>

	</body>
</html>