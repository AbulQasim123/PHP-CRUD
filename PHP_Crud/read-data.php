<!DOCTYPE html>
<html>
<head>
	<title>Read data</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
</head>
<body>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\mypopper.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
</body>
</html>
<?php
/*
	$mysql_host= 'localhost';
	$mysql_user= 'root';
	$mysql_pass='';
	
	$mysql_database= 'gdp-lab';

	$conn= mysql_connect($mysql_host, $mysql_user, $mysql_pass);
	mysql_select_db($mysql_database);
*/	
	include 'mysql_connect.php';
	
	$sql= " SELECT * FROM `student` ";
	$result= mysql_query($sql, $conn);

	echo '<table class="table table-bordered table-sm">
			<thead class="thead-dark">
				<tr>
					<th>Sr.No</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
				</tr>
			</thead>';
	$Sr_number = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$Sr_number++;
		echo "<tr>";
			echo "<td>  $Sr_number  </td>";
			echo "<td>  $row[firstname] </td>";
			echo "<td>  $row[lastname]  </td>";
			echo "<td>  $row[address] </td>";
		echo "</tr>";
	}
	echo "</table>";
?>
