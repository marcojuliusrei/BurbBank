<?php
session_start();
include('../db/db.php');
?>
<html>
	<head>
		<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.css">
		<!--link rel="stylesheet" href="../css/mycss.css"-->
		<meta charset="utf-8">
		<link href="../css/round-about.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<script src="../bootstrap-3.3.7-dist/jquery-1.12.4.min.js"></script>
		<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</head>
	<body BGCOLOR='#8d9093'>
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">WELCOME</a>
					</div>
					<center>
						<div class="navbar-collapse collapse" id="navbar-main">
							<ul class="nav navbar-nav">
								<li><a href="home.php">HOME</a>
								</li>
								<li><a href="remit.php">REMIT</a>
								</li>
								<li class='active'><a href="privilege.php">PRIVILEGES</a>
								</li>
							</ul>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
						</div>
					</center>
				</div>
			</div>
   <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Privileges
                    <small></small>
                </h1>
                <p>We give you different rewards and privileges based on the points you earn. Participate and Enjoy!</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Levels</h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level01.png" alt="">
                <h3>0-99
                    <small>points</small>
                </h3>
                <p>Base balance: zero peso</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level02.png" alt="">
                <h3>100-199
                    <small>points</small>
                </h3>
                <p>Base balance: -500 peso</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level03.png" alt="">
                <h3>200-299
                    <small>points</small>
                </h3>
                <p>Base balance: -1,000 peso</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level04.png" alt="">
                <h3>300-399
                    <small>points</small>
                </h3>
                <p>Base balance: -1,500 peso</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level05.png" alt="">
                <h3>400-499
                    <small>points</small>
                </h3>
                <p>Base balance: -2,000 peso</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level06.png" alt="">
                <h3>500-599
                    <small>points</small>
                </h3>
                <p>Base balance: -2,500 peso</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level07.png" alt="">
                <h3>600-699
                    <small>points</small>
                </h3>
                <p>Base balance: -3,000 peso</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level08.png" alt="">
                <h3>700-799
                    <small>points</small>
                </h3>
                <p>Base balance: -3,500 peso</p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level09.png" alt="">
                <h3>800-899
                    <small>points</small>
                </h3>
                <p>Base balance: -4,000 peso</p>
            </div>
			<div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="../images/level10.png" alt="">
                <h3>900 and up
                    <small>points</small>
                </h3>
                <p>Base balance: -5,000 peso</p>
            </div>
        </div>

        <hr>

        <!-- Footer 
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --
        </footer-->

    </div>
    <!-- /.container -->
	</body>
</html>