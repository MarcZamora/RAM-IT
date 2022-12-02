<?php
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'ramit';
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
	if (mysqli_connect_errno()) {
		exit('Failed to connect to MySQL: ' . mysqli_connect_error());
		
	}
	$id=$_GET['id'];
	
	$stat=$_POST['stat'];
	$assignid=$_POST['assignid'];
	$afname=$_POST['afname'];
	$alname=$_POST['alname'];
	
	mysqli_query($con,"update `ticket` set  stat='$stat', assignid='$assignid', afname='$afname', alname='$alname' where tid='$id'");

	header('location:ticket.php');
?>