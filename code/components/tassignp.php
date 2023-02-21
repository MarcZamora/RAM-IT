<?php
	require 'connect.php';
	date_default_timezone_set('Asia/Singapore');
   	$mysqltime = date ('Y-m-d H:i:s', time());
	
	$id=$_GET['id'];
	
	$assignid=$_POST['assignid'];
	$aemail=$_POST['aemail'];
	$aname=$_POST['aname'];
	
	$query=mysqli_query($con,"SELECT * FROM ticket where tid = '$id'");
	$row=mysqli_fetch_array($query);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('../../composer/vendor/phpmailer/phpmailer/src/Exception.php');
require('../../composer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('../../composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');


//inquirer
$mail = new PHPMailer(true);

    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'ramitnoreply@gmail.com';             //SMTP username
    $mail->Password   = 'wtwibgdwpxuypfoc';                   //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ramitnoreply@gmail.com', 'RAM-IT');
    $mail->addAddress($row["email"], $row["iname"]);      //Add a recipient           //Name is optional

    // $mail->AddEmbeddedImage($folder, $filename, $folder); //Attachments
    //Add attachments
    //Optional name


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Ticket #'. $id . " Assigned";
    $mail->Body    = 
    " The ticket #" . $id . " is assigned to 
	<br> 
    ". $_POST['aname'] . "
    <br> 
	". $_POST['assignid'] . "
    <br>
	". $_POST['aemail'] . "
    <br> 
    <br>
	<br>
	<br> P.S: Wait for the ITRO specialist to chat you in your ticket.
	<br>
    <br> Thank You
    <br> RAM-IT System";
	
	$mail->send();

//assign
$mail1 = new PHPMailer(true);

//Server settings
// $mail1->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
$mail1->isSMTP();                                          //Send using SMTP
$mail1->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail1->SMTPAuth   = true;                                 //Enable SMTP authentication
$mail1->Username   = 'ramitnoreply@gmail.com';             //SMTP username
$mail1->Password   = 'wtwibgdwpxuypfoc';                   //SMTP password
$mail1->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
$mail1->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail1->setFrom('ramitnoreply@gmail.com', 'RAM-IT');
$mail1->addAddress($_POST['aemail'], $_POST['aname']);     //Add a recipient           //Name is optional

// $mail->AddEmbeddedImage($folder, $filename, $folder); //Attachments
//Add attachments
//Optional name


//Content
$mail1->isHTML(true);                                  //Set email format to HTML
$mail1->Subject = 'The Ticket #'. $id . " is assigned to you";
$mail1->Body    = 
" The ticket #" . $id . " is assigned to 
<br> 
". $_POST['aname'] . "
<br> 
". $_POST['assignid'] . "
<br>
". $_POST['aemail'] . "
<br> 
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
<br> Thank You
<br> RAM-IT System";
$mail1->send();
	

	mysqli_query($con,"update `ticket` set stat='open' , assignid='$assignid', aemail='$aemail', aname='$aname', dta='$mysqltime' where tid=". $id);


	header('location: ../../ticket.php');
	exit;
	
	
	
?>