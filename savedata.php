<?php

// data save in database

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

 // connection in Database
 include 'config.php';

 // Query

 $sql = "INSERT INTO student(sname, saddress, sclass, sphone) Value ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";

 $result = mysqli_query($conn, $sql) or die("Query Unsucessfully");

// redirect
 header("location: http://localhost/crud/index.php");

// close mysqli connection
 mysqli_close($conn);

?>


