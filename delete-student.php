<?php
$student_id = $_GET['student_id'];

//connect
require('db.php');

//set up sql query
sql="DELETE FROM student WHERE STUDENT_id = :student_id";

//prepare

$cmd = $conn->prepare($sql);

//bind parameters

$cmd->bindParam(':student_id', $student_id);

//execute
$cmd->execute();

//close our connection
$cmd->closeCursor();

?>