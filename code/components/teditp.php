<?php
	require 'connect.php';
	date_default_timezone_set('Asia/Singapore');
   	$mysqltime = date ('Y-m-d H:i:s', time());
	
	$id=$_GET['id'];

	$priority=$_POST["priority"];
	$severity=$_POST["severity"];
	$itype=$_POST["itype"];
	$assignid=$_POST["assignid"];
	$aemail=$_POST["aemail"];
	$aname=$_POST["aname"];
	
	if ($assignid == "" && $aemail == "" && $aname == "") {
		mysqli_query($con,"update `ticket` set stat='open' , priority='$priority' , severity='$severity' , itype='$itype'  where tid=". $id);
	}
	else{
		mysqli_query($con,"update `ticket` set stat='open' , priority='$priority' , severity='$severity' , itype='$itype' , assignid='$assignid', aemail='$aemail', aname='$aname' where tid=". $id);
	}

	

	header('location:../../ticket.php');
?>