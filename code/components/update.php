<?php
	require 'connect.php';
	
	
	$id=$_GET['id'];
	
	$stat=$_POST['stat'];
	$priority=$_POST['priority'];
	$severity=$_POST['severity'];
	$assignid=$_POST['assignid'];
	$afname=$_POST['afname'];
	$alname=$_POST['alname'];
	$dta=$_POST['dta'];
	
	mysqli_query($con,"update `ticket` set  stat='$stat', priority='$priority', severity='$severity', assignid='$assignid', afname='$afname', alname='$alname', dta='$dta' where tid='$id'");

	header('location:../../ticket.php');
?>