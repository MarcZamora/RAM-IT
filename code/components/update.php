<?php
	require 'connect.php';
	
	$id=$_GET['id'];
	
	$stat=$_POST['stat'];
	$assignid=$_POST['assignid'];
	$afname=$_POST['afname'];
	$alname=$_POST['alname'];
	
	mysqli_query($con,"update `ticket` set  stat='$stat', assignid='$assignid', afname='$afname', alname='$alname' where tid='$id'");

	header('location:../../ticket.php');
?>