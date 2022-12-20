<?php
    if (isset($_REQUEST['redirect'])) {
        echo "One row affected";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
</head>

<body>
    <!-- Insert Record to mysql database  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="text-primary">Insert Data to mysql database.</h5>
                <form action="insert-mysql.php" method="POST">
                    <div class="form-group">
                        <label for="first_name" class="font-weight-bold">FirstName</label>
                        <input type="text" name="first_name" id="first_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="font-weight-bold">LastName</label>
                        <input type="text" name="last_name" id="last_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address" class="font-weight-bold">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-outline-primary btn-block">
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\mypopper.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>

</body>

</html>