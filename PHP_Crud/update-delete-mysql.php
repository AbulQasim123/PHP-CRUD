<?php  
	
	include 'mysql_connect.php';

	$crud_btn= $_POST['crud_btn'];

	if ($crud_btn == 'Insert') {
		$first_name= $_POST['first_name'];
		$last_name= $_POST['last_name'];
		$address= $_POST['address'];
		$query= " INSERT INTO `student` (`firstname`,`lastname`,`address`) VALUES ('$first_name','$last_name','$address')";
		$result= mysql_query($query, $conn);
		header('Location: update-delete-data.php');
	}else if ($crud_btn == 'Delete') {
		$data_search = $_POST['data_search'];
		// $query= " DELETE FROM `student` WHERE Sr_No= " . $data_search;
		$query=" DELETE FROM `student` WHERE `student`.`Sr_No` =" . $data_search;
		mysql_query($query, $conn);
		header('Location: update-delete-data.php');
	}else if ($crud_btn == 'Update') {
		$data_search= $_POST['data_search'];
		$first_name= $_POST['first_name'];
		$last_name= $_POST['last_name'];
		$address= $_POST['address'];
		// $query= " UPDATE `student` SET `address` = '$address' WHERE `student`.`Sr_No` =" . $data_search;
		$query=" UPDATE `student` SET `firstname` = '$first_name', `lastname` = '$last_name', `address` = '$address' WHERE `student`.`Sr_No` =" . $data_search;
		mysql_query($query, $conn);
		header('Location: update-delete-data.php');
		
	}
?>