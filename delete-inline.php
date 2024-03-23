<?php 

echo $stu_id = $_GET['id'];

include 'config.php';


$sql = "DELETE FROM  student WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsucessfully");

// redirect
header("location: http://localhost/crud/index.php");

// close mysqli connection
 mysqli_close($conn);

?>