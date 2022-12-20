<?php  
	$mysql_host='localhost';
	$mysql_user= 'root';
	$mysql_pass= '';
	$mysql_database= 'gdp-lab';

	$conn= mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die('Connection failed');;
	mysql_select_db($mysql_database, $conn);
?>