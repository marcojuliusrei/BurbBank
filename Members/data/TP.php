<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "db_uhack";
 
       // Create connection
 
       $conn = new mysqli($servername, $username, $password, $dbname);
 
       // Check connection
 
       if ($conn->connect_error) {
 
           die("Connection failed: " . $conn->connect_error);
 
       } 
 
       $sql = "SELECT total_points from tbl_acct where username = 'juliusrei'";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();
       $count = $result->num_rows;
       echo $row['total_points'];
       $conn->close();
?>