
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Data</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<h4 class="text-primary">Crud in php</h4>
				<form action="update-delete-mysql.php" method="POST">
					<div class="form-group">
						<label for="data_search" class="font-weight-bold">Search</label>
						<input type="search" name="data_search" id="data_search" class="form-control" placeholder="Search record">
					</div>
					<div class="form-group">
						<label for="first_name" class="font-weight-bold">Firstname</label>
						<input type="text" name="first_name" id="first_name" class="form-control" placeholder="Firstname">
					</div>
					<div class="form-group">
						<label for="last_name" class="font-weight-bold">Lastname</label>
						<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Lastname">
					</div>
					<div class="form-group">
						<label for="address" class="font-weight-bold">Address</label>
						<input type="text" name="address" id="address" class="form-control" placeholder="Address">
					</div>
					<input type="submit" name="crud_btn" class="btn btn-primary" value="Insert">
					<input type="submit" name="crud_btn" class="btn btn-danger" value="Delete">
					<input type="submit" name="crud_btn" class="btn btn-info" value="Update">
				</form>
			</div>
			<div class="col-lg-8">
				<h4 class="">Read data from database</h4>
				<?php  
					include 'mysql_connect.php';
					$sql= " SELECT * FROM `student` ";
					$result= mysql_query($sql, $conn);
					echo "
							<table class='table table-bordered  my-3'>
								<thead class='thead-dark'>
									<tr>
										<th>Sr.No</th>
										<th>Firstname</th>
										<th>Lastname</th>
										<th>Address</th>
									</tr>
								</thead>";
					$Sr_no=0;
					while ($row= mysql_fetch_assoc($result)) {
						$Sr_no++;
							 	echo "<tbody>";
							 		echo "<tr>";
							 			echo "<td> $row[Sr_No] </td>";
							 			echo "<td>$row[firstname]</td>";
							 			echo "<td>$row[lastname]</td>";
							 			echo "<td>$row[address]</td>";
							 		echo "</tr>";
							 	echo "</tbody>";
					}	
					echo "</table>";	 

				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\mypopper.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>

</body>
</html>