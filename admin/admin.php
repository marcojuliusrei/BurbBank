<?php
session_start();
	
?>
<html>
<head>
<h1>LIST OF ACCOUNTS</h1>
</head>
<link rel='stylesheet' href='bootstrap/dist/css/bootstrap.css'>
<body>
<form action = "admin.php" method = "POST">


<div class = 'navbar navbar-inverse'>
<div class = 'container'>
<div class = 'navbar-header'>
<ul class = 'nav navbar-nav'>
<li><a href = "admin.php">LIST OF ACCOUNTS</a></li>
<li><a href = "reload.php">LOAD ACCOUNT</a></li>
<li><a href = "reg.php">REGISTER OF ACCOUNT</a></li>
</ul>
<ul class='nav navbar-nav navbar-right'>
<li><a href = "logout.php"><span class = 'glyphicon glyphicon-log-out'>LOGOUT</span></a></li>
</ul>
</div>
</div>
</div>


</form>
<?php
	include "connection.php";
	$query = "SELECT * FROM tbl_acct";
	$result = $conn->query($query);

	echo "<table class = 'table table-striped table-responsive header-fixed'>
	<th style='width:150px;border:1px solid black;'> ACCOUNT ID </th>
	<th style='width:150px;border:1px solid black;'> USERNAME </th>
	<th style='width:150px;border:1px solid black;'> ACCOUNT NUMBER </th>
	<th style='width:150px;border:1px solid black;'> EMAIL </th>
	<th style='width:150px;border:1px solid black;'> ACCOUNT BALANCE </th>
	<th style='width:150px;border:1px solid black;'> POINTS </th>
	";
	if($result->num_rows>0){
		while($rows = $result->fetch_assoc()){
			echo "
		<tr>
		<td style='width:150px;border:1px solid black;'>".$rows["acct_id"]."</td>
		<td style='width:150px;border:1px solid black;'>".$rows["username"]."</td>
		<td style='width:150px;border:1px solid black;'>".$rows["account_num"]."</td>
		<td style='width:150px;border:1px solid black;'>".$rows["email"]."</td>
		<td style='width:150px;border:1px solid black;'>".$rows["balance"]."</td>
		<td style='width:150px;border:1px solid black;'>".$rows["points"]."</td>
			";
			
		}
	}

 echo "</tr>
	  </table>";





?>
</body>
</html>
