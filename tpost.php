<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ramit';

$iid = $_POST["iid"];
$inquiry = $_POST["inquiry"];
$stat = $_POST["stat"];
$assignid = $_POST["assignid"];
$afname = $_POST["afname"];
$alname = $_POST["alname"];
$dt = $_POST["dt"];


// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "INSERT INTO ticket (iid, inquiry, stat, assignid, afname, alname, dt)
VALUES ('$iid', '$inquiry', '$stat', '$assignid', '$afname', '$alname', '$dt')";

if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location:ticket.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>