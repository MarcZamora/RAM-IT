<?php
require 'connect.php';

$iid = $_POST["iid"];
$email = $_POST["email"];
$img = $_POST["img"];
$inquiry = $_POST["inquiry"];
$stat = $_POST["stat"];
$priority = $_POST["priority"];
$itype = $_POST["itype"];
$fdes = $_POST["fdes"];
$assignid = $_POST["assignid"];
$afname = $_POST["afname"];
$alname = $_POST["alname"];
$dt = $_POST["dt"];



$sql = "INSERT INTO ticket (iid, email , img, inquiry, stat, priority, dt, itype, fdes)
VALUES ('$iid', '$email' , '$img' ,'$inquiry', '$stat', '$priority', '$dt', '$itype','$fdes')";

if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location: ../../ticket.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>