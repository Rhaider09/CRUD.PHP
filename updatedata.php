<?php

// data save in database
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

// connection in Database
include 'config.php';

// Query
$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsucessfully");

// redirect
header("location: http://localhost/crud/index.php");

// close mysqli connection
mysqli_close($conn);

?>






