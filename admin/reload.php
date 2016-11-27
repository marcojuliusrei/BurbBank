<?php
	include "connection.php";
if(isset($_POST["update"])){
								$sql = "SELECT * from tbl_acct where acct_id = '".$_POST['acct_id']."'";
											$result = $conn->query($sql);
											if($result->num_rows>0)
												{
													while($row = $result->fetch_assoc()) 
														{			
															$balance=$row['balance'];
														}
														$balance+=$_POST['balance'];
	$query = "UPDATE tbl_acct SET balance='$balance' WHERE acct_id = '".$_POST["acct_id"]."'";
	if($conn->query($query) == TRUE){
		echo "Your Balance is updated";
	}else{
		echo "Failed to Update".$query."<br />".$conn->error;
	}
												}

}

$search = isset($_POST['searchitem']) ? $_POST['searchitem']:null;




?>
<html>
<head>
<h1>LOAD ACCOUNTS</h1>
</head>
<link rel='stylesheet' href='bootstrap/dist/css/bootstrap.css'>
<body>
<form action = "reload.php" method = "POST">

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
<br /><br /><br /> 

<div style = 'margin-left:30px;'>
<input class='col-lg-7'type = "text" name = "searchitem" placeholder = "SEARCH ACCOUNT"><br><br>
<input type = "submit" name = "search" class = 'btn btn-primary col-lg-7'><br />
<br />
<br />
<br />
<table>
	<tr>
		<td>ACCOUNT ID : </td>
		<td><input type = "text" name = "acct_id"/></td>
	</tr>
	<tr>
		<td>
		Amount: </td><td><input type = "text" name = "balance" />
		</td>
	</tr>
</table>
<input type = "submit" name = "update" value = "LOAD" class = 'btn btn-primary col-lg-7' />
</div>




</form>
<?php if($search){ ?>
	<?php $q = "select * from tbl_acct where acct_id = '$search'"; ?>
	<?php $r = mysqli_query($conn,$q); ?>
	<?php while($row = mysqli_fetch_array($r)): ?>
	<?php echo "<table class = 'table table-striped table-responsive header-fixed'>"; ?>
	<?php echo "<th style='width:150px;border:1px solid black;'> ACCOUNT ID </th>"; ?>
	<?php echo "<th style='width:150px;border:1px solid black;'> USERNAME </th>"; ?>
	<?php echo "<th style='width:150px;border:1px solid black;'> ACCOUNT NUMBER </th>"; ?>
	<?php echo "<th style='width:150px;border:1px solid black;'> EMAIL </th>"; ?>
	<?php echo "<th style='width:150px;border:1px solid black;'> ACCOUNT BALANCE </th>"; ?>
	<?php echo "<th style='width:150px;border:1px solid black;'> POINTS </th>"; ?>
	<?php echo "<tr>"; ?>
	<?php echo "<td style='width:150px;border:1px solid black;'>".$row['acct_id']."</td>"; ?>
	<?php echo "<td style='width:150px;border:1px solid black;'>".$row['username']."</td>"; ?>
	<?php echo "<td style='width:150px;border:1px solid black;'>".$row['account_num']."</td>"; ?>
	<?php echo "<td style='width:150px;border:1px solid black;'>".$row['email']."</td>"; ?>
	<?php echo "<td style='width:150px;border:1px solid black;'>".$row['balance']."</td>"; ?>
	<?php echo "<td style='width:150px;border:1px solid black;'>".$row['points']."</td>"; ?>

	<?php endwhile; ?>

<?php }else{ ?>

<?php echo "</tr>"; ?>
<?php echo "</table>"; ?>

<?php } ?>
	
</body>
</html>