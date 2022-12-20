<?php  	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4">
				<h4 class="font-italic text-primary">Search data from database</h4>
				<form action="" method="POST">
					<div class="form-group">
						<label for="search_no" class="font-weight-bold">Enter roll no to search.</label>
						<input type="search" name="search_no" id="search_no" placeholder="Enter your roll No." class="form-control">
					</div>
					<input type="submit" name="" value="Search" class="btn btn-outline-primary btn-block">
				</form>
			</div>
			<div class="col-lg-8">
				<?php
					if ($_SERVER['REQUEST_METHOD']) {
						if (isset($_POST['search_no'])) {
							$roll_No = $_POST['search_no'];
							if (!empty($roll_No)) {
								include 'mysql_connect.php';
								$query= " SELECT * FROM `student_result` WHERE `student_result`.`roll_no`= " . $roll_No;
								$result= mysql_query($query);
								mysql_close($conn);
								if (mysql_num_rows($result)) {
									echo "<table class='table table-bordered table-sm'>
											<thead class='thead-dark'>
												<tr>
													<th>FirstName</th>
													<th>LastName</th>
													<th>Roll No</th>
													<th>Status</th>
													<th>Age</th>
													<th>Address</th>
													<th>Gender</th>
												</tr>
											</thead>";
									while ($row= mysql_fetch_assoc($result)) {
										echo "<tr>";
											echo "<td>$row[first_name]</td>";
											echo "<td>$row[last_name]</td>";
											echo "<td>$row[roll_no]</td>";
											echo "<td>$row[status]</td>";
											echo "<td>$row[age]</td>";
											echo "<td>$row[address]</td>";
											echo "<td>$row[gender]</td>";
										echo "</tr>";
									}
									echo"</table>";		
								}else{
									echo "<b class='text-danger'>Record not found! Please Try again.</b>";
								}
							}else{
								echo "<b class='text-danger'>Please enter your roll no.</b>";
							}
						}
					}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\mypopper.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
</body>
</html>