<?php
session_start();
include('data/level.php');
include('../db/db.php');
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
 
$('#yow').html(msg);
 
}
 
function waitForMsg(){
 
$.ajax({
type: "GET",
url: "data/TP.php",
 
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
<style>
#myProgress {
  position: relative;
  width: 100%;
  height: 30px;
  background-color: #ddd;
}

#myBar {
  position: absolute;
  width: <?php echo $percent;?>%;
  height: 100%;
  background-color: #0e7c79;
}

#label {
  text-align: center;
  line-height: 30px;
  color: white;
}
</style>
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
								<li class='active'><a href="home.php">HOME</a>
								</li>
								<li><a href="remit.php">REMIT</a>
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
	<div class='container' style='margin-top:80px'>
		<strong><center><div class='well well-lg'>TOTAL POINTS: <?php echo $_SESSION['points'];?></center></strong>
		<h3><label>TRUSTWORTHINESS LEVEL : <?php echo $level;?></label></h3>
			<div id="myProgress">
			  <div id="myBar">
				<div id="label"><?php echo $percent;?>%</div>
			  </div>
			</div>
	</div>
        <!--/Table head-->
<div class='container-fluid' style='overflow-y: scroll; height:55%;margin-top:20px;border-radius:5px;padding:20px'>
				<?php
				
					echo '<form action="record.php" method="POST">';
					echo '<table style="width:100%;" class="table table-striped table-responsive header-fixed">
						  <tr>
							<th></th>';
					echo	'<th>Reward</th>
								<th>Type</th>
								<th>Cost</th>
								<th>Price</th>
								<th>Discount</th>
								<th>Amount</th>
						  </tr>';
					$sql = "SELECT * from tbl_promo where Cost <='".$_SESSION['points']."'";
					$result = $conn->query($sql);
					if($result->num_rows>0)
						{
							while($row = $result->fetch_assoc()) 
								{
									echo "<tr>";
										echo "<td><image src='../images/".$row['Image']."' style='width:150px;height:150px' class='img-fluid' alt='responsive image'</td>";
										echo "<td>".$row['Reward']."</td>";
										echo "<td>".$row['Type']."</td>";
										echo "<td>".$row['Cost']."pts</td>";
										echo "<td>P ".$row['Price']."</td>";
										echo "<td>".$row['Discount']."%</td>";
										echo "<td>".$row['Amount']."</td>";
									echo "</tr>";
								}
						}
					echo "</table>";
					echo "</form>";
				?>
		</div>
		
	</body>
</html>