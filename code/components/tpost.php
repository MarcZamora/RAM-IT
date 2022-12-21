<?php
require 'connect.php';

$iid = $_POST["iid"];
$inquiry = $_POST["inquiry"];
$stat = $_POST["stat"];
$assignid = $_POST["assignid"];
$afname = $_POST["afname"];
$alname = $_POST["alname"];
$dt = $_POST["dt"];


$sql = "INSERT INTO ticket (iid, inquiry, stat, assignid, afname, alname, dt)
VALUES ('$iid', '$inquiry', '$stat', '$assignid', '$afname', '$alname', '$dt')";

if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location: ../../ticket.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>