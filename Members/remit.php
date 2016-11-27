<?php
session_start();
$message ='';
include('data/level.php');
include('../db/db.php');
	if(isset($_POST['remit']))
	{
		if(($_SESSION['balance'] + $privilege) < $_POST['amount'])
			{
				$message = '1';
			}
		else{
			$balance = $_SESSION['balance'] - $_POST['amount'];
			$_SESSION['balance'] = $balance;
								$sql = "UPDATE tbl_acct SET balance='$balance' WHERE username = '".$_SESSION['user']."'";
								if (mysqli_query($conn, $sql))
									{
											$sql = "INSERT INTO tbl_transaction (Account_number,Send_to,Amount,Date) 
												VALUES ('".$_SESSION['account']."','".$_POST['sendto']."','".$_POST['amount']."','".date("Y-m-d")."')";
												if($conn->query($sql) == true)
													{
														if($_POST['amount'] < 101){
															$_SESSION['points']+=.5;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else if($_POST['amount'] < 501){
															$_SESSION['points']+=1;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else if($_POST['amount'] < 1001){
															$_SESSION['points']+=2;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else if($_POST['amount'] < 1501){
															$_SESSION['points']+=3;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else if($_POST['amount'] < 2001){
															$_SESSION['points']+=4;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else if($_POST['amount'] < 2501){
															$_SESSION['points']+=5;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else if($_POST['amount'] < 3001){
															$_SESSION['points']+=6;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else if($_POST['amount'] < 3501){
															$_SESSION['points']+=7;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else if($_POST['amount'] < 4001){
															$_SESSION['points']+=8;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else if($_POST['amount'] < 4501){
															$_SESSION['points']+=9;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
														else{
															$_SESSION['points']+=10;
															$sql = "UPDATE tbl_acct SET points='".$_SESSION['points']."',total_points='".$_SESSION['points']."' WHERE username = '".$_SESSION['user']."'";
														}
															if (mysqli_query($conn, $sql))
																{
																	$message ="2";
																} 
															else 
																{
																	echo "failed" . mysqli_error($conn);
																}
													}
												else
													{
														echo 'error';
													}
									}
								else
									{
										echo "failed" . mysqli_error($conn);
									}
			}
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.css">
		<!--link rel="stylesheet" href="../css/mycss.css"-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<script src="../bootstrap-3.3.7-dist/jquery-1.12.4.min.js"></script>
		<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8">
 
function addmsg(type, msg){
 
$('#notification_counts').html(msg);
 
}
 
function waitForMsg(){
 
$.ajax({
type: "GET",
url: "data/balance.php",
 
async: true,
cache: false,
timeout:50000,
 
success: function(data){
addmsg("new", data);
setTimeout(
waitForMsg,
1000
);
},
error: function(XMLHttpRequest, textStatus, errorThrown){
addmsg("error", textStatus + " (" + errorThrown + ")");
setTimeout(
waitForMsg,
15000);
}
});
};
 
$(document).ready(function(){
 
waitForMsg();
 
});
 
</script>
	</head>
	<body BGCOLOR='#8d9093'>
			<div class="navbar navbar-inverse">
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
								<li class='active'><a href="remit.php">REMIT</a>
								</li>
								<li><a href="privilege.php">PRIVILEGES</a>
								</li>
							</ul>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
						</div>
					</center>
				</div>
			</div>

	<div class='container'>
		<strong><center><div class='well well-lg'>Balance: P <?php echo $_SESSION['balance'];?><div>LEVEL: <?php echo $level;?></div></center></strong>
	</div>	

	<div class='container bg-info'>
		<center><?php
		if($message == '2'){?>
				<div style='margin-top:10px' class="alert alert-success">
				  <strong>Remitted!</strong>
				</div>
		<?php }
		else if($message =='1'){?>
				<div style='margin-top:10px' class="alert alert-danger">
				  <strong>The amount is beyond your minimum balance.</strong>
				</div>
				
		<?php }
		else{}?></center>
			<form action='' method='post' class="form-horizontal">
			<div class="form-group"><label class="col-sm-7 control-label"><h1>REMITTANCE</h1></label></div>
			  <div class="form-group">
				<label for="" class="col-sm-3 control-label">Send To:</label>
				<div class="col-sm-6">
				  <input type="text" name="sendto" class="form-control" style='text-transform:lowercase;' maxlength="8" placeholder='ACCOUNT NUMBER' autofocus required>
				</div>
			  </div>			 
			  <div class="form-group">
				<label for="" class="col-sm-3 control-label">Amount:</label>
				<div class="col-sm-6">
				  <input type="number" class="form-control" name="amount" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="" class="col-sm-3 control-label"> </label>
				<div class="col-sm-5">
				  <input type='submit' class='btn btn-primary btn-lg col-lg-7' value='REMIT' name='remit'>  
				</div>
			  </div>
			</form>
	</div>
	</body>
</html>