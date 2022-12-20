<?php 
    $firstname= $_POST['first_name'];
    $lastname= $_POST['last_name'];
    $address= $_POST['address'];

    // echo $firstname, $lastname, $address;
    $mysql_host= 'localhost';
    $mysql_user= 'root';
    $mysql_pass= '';
    $mysql_database= 'gdp-lab';
    $conn= mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die('Connection failed');
  
    mysql_select_db($mysql_database, $conn);
    $sql= "INSERT INTO `student` (`firstname`, `lastname`, `address`) VALUES ('$firstname', '$lastname','$address')";
    // INSERT INTO `student` (`Sr.No`, `firstname`, `lastname`, `address`) VALUES (NULL, 'Abul', 'Qasim', '10,bagi');
    mysql_query($sql,$conn);
    mysql_close($conn);
    header("Location: insert-data.php?redirect=1");
    

    
?>