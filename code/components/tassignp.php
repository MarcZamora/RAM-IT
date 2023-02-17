<?php
	require 'connect.php';
	date_default_timezone_set('Asia/Singapore');
   	$mysqltime = date ('Y-m-d H:i:s', time());
	
	$id=$_GET['id'];
	
	$assignid=$_POST['assignid'];
	$aemail=$_POST['aemail'];
	$aname=$_POST['aname'];
	
	
	mysqli_query($con,"update `ticket` set stat='open' , assignid='$assignid', aemail='$aemail', aname='$aname', dta='$mysqltime' where tid=". $id);

	header('location:../../ticket.php');
?>