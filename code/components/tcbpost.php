
<?php
require 'connect.php';

$queries = $_POST["queries"];
$replies = $_POST["replies"];

$sql = "INSERT INTO cbr (queries, replies)
VALUES ('$queries', '$replies')";

if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location: ../../tcb.php?link=tcb');
} else {
echo "Error: " . $sql . "<br>" . $con->error;      
}

$con->close();
?>


 

