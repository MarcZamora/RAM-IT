
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('../../composer/vendor/phpmailer/phpmailer/src/Exception.php');
require('../../composer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('../../composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');

require 'connect.php';

$iid = $_POST["iid"];
$iname = $_POST["iname"];
$email = $_POST["email"];
$ipstion = $_POST["ipstion"];
$img = $_POST["img"];
$inquiry = $_POST["inquiry"];
$stat = $_POST["stat"];
$priority = $_POST["priority"];
$itype = $_POST["itype"];
$fdes = $_POST["fdes"];
$dt = $_POST["dt"];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../../res/img/" . $filename;

move_uploaded_file($tempname, $folder);

$query=mysqli_query($con,"SELECT * FROM accounts where pstion = 'supervisor'");


$mail = new PHPMailer(true);

    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'shido2111@gmail.com';             //SMTP username    shido2111         ramitnoreply      marczamora143
    $mail->Password   = 'djmcbhljqqztfgdg';                   //SMTP password    djmcbhljqqztfgdg  wtwibgdwpxuypfoc  dbzxakuqekgbulhi
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ramitnoreply@gmail.com', 'RAM-IT');
    while ($row=mysqli_fetch_array($query)){
    $mail->addAddress($row["email"], $row["fname"]." " . $row["lname"]); 
}    //Add a recipient           //Name is optional

    // $mail->AddEmbeddedImage($folder, $filename, $folder); //Attachments
    //Add attachments
    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Ticket added';
    $mail->Body    = 
    " Inquirer's Info:
    <hr>
    <br>  ID: ". $_POST["iid"] ."
    <br>  Name: ". $_POST["iname"] ."
    <br>  Inquiry: ". $_POST["inquiry"] ."
    <br>  Priority: ". $_POST["priority"] ."
    <br>  Inquiry Type: ". $_POST["itype"] ."
    <br>  Full Description: ". $_POST["fdes"] ."
    <br>  Date Created: ". $_POST["dt"] ."
    <br>
    <br> 
    <br>
    <br>  The current state of the ticket is Pending go to the RAM-IT website to assign an ITRO specialist for the ticket.
    <br>
    <br> Thank You
    <br> RAM-IT System";

$sql = "INSERT INTO ticket (iid, iname, ipstion, email , img, inquiry, stat, priority, dt, itype, fdes, filename, notifstus, notifstum)
VALUES ('$iid', '$iname', '$ipstion', '$email' , '$img' ,'$inquiry', '$stat', '$priority', '$dt', '$itype','$fdes', '$filename', '0', ' $iname submitted a new ticket')";

if ($con->query($sql) === TRUE) {
echo "New record created successfully";
$mail->send();
header('location: ../../ticket.php?link=ticket');
} else {
echo "Error: " . $sql . "<br>" . $con->error;      
}

$con->close();
?>


 

