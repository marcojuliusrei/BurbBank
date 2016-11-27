<?php
	session_start();

if(isset($_POST['login'])){
			if($_POST['username'] =='admin' && $_POST['password']=='admin'){
				header("location:admin.php");	
			}
			else{
				echo "Failed to access";
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
						<a class="navbar-brand" href="index.php">Admin</a>
					</div>
					<center>
						<div class="navbar-collapse collapse" id="navbar-main">
							<form class="navbar-form navbar-right" role="search" action="index.php" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="Username" autofocus>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
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