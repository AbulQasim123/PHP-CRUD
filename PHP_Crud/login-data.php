<?php  
	if(isset($_GET['correct'])) {
		echo "You have login successfully";
	}
	if (isset($_GET['incorrect'])) {
		echo "Invalid username and Password";
	}
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
				<form action="login-mysql.php" method="POST">
					<div class="form-group">
						<label for="user_name" class="font-weight-bold">Username:</label>
						<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="user_pass" class="font-weight-bold">Password</label>
						<input type="text" name="user_pass" id="user_pass" class="form-control" placeholder="Password">
					</div>
					<input type="submit" name="login_btn" value="Login" class="btn btn-outline-primary">
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\mypopper.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
</body>
</html>