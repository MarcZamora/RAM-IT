<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('../../composer/vendor/phpmailer/phpmailer/src/Exception.php');
require('../../composer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('../../composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require 'connect.php';

date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

	   

	$id=$_GET['id'];
	

	$query=mysqli_query($con,"SELECT * FROM ticket where tid = '$id'");
	$row=mysqli_fetch_array($query);

	//assign
$mail = new PHPMailer(true);

//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
$mail->isSMTP();                                          //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                 //Enable SMTP authentication
$mail->Username   = 'ramitnoreply@gmail.com';             //SMTP username
$mail->Password   = 'wtwibgdwpxuypfoc';                   //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
$mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('ramitnoreply@gmail.com', 'RAM-IT');
$mail->addAddress($row['aemail'], $row['aname']);     //Add a recipient           //Name is optional

// $mail->AddEmbeddedImage($folder, $filename, $folder); //Attachments
//Add attachments
//Optional name


//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'The Ticket #'. $id . " is now closed";
$mail->Body    = 
" The ticket #" . $id . " is now closed  
<hr>	
<br> Inquirer's Info:
<hr>
<br>  Inquirer ID: ". $row["iid"] ."
<br>  Name: ". $row["iname"] ."
<br>  Inquiry: ". $row["inquiry"] ."
<br>  Priority: ". $row["priority"] ."
<br>  Inquiry Type: ". $row["itype"] ."
<br>  Full Description: ". $row["fdes"] ."
<br>  Date Created: ". $row["dt"] ."
<br>
<hr>	
<br>  ITRO Specialist Info:
<hr>	
<br>  Assign ID: ".$row['assignid']." 
<br>  Name: ". $row["aname"] ."
<br>  Email: ".$row['aemail']."
<hr>	
<br>
<br> 	
<br> Thank You
<br> RAM-IT System";

$mail->send();
mysqli_query($con,"update `ticket` set stat='closed' where tid=". $id);

	header('location:../../ticket.php');
?>