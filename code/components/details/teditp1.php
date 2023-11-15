<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('../../../composer/vendor/phpmailer/phpmailer/src/Exception.php');
require('../../../composer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('../../../composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require '../connect.php';
	date_default_timezone_set('Asia/Singapore');
   	$mysqltime = date ('Y-m-d H:i:s', time());

       $id=$_GET['id'];

	   $query=mysqli_query($con,"SELECT * FROM ticket where tid = '$id'");
	   $row=mysqli_fetch_array($query);
	   
	

	$priority=$_POST["priority"];
	$severity=$_POST["severity"];
	$itype=$_POST["itype"];
	$inquiry=$_POST["inquiry"];
        
		mysqli_query($con,"update `ticket` set priority='$priority' , severity='$severity' , itype='$itype' , inqry='$inquiry' where tid=". $id);


	header('location: ../../../ticket.php?link=ticket');
?>