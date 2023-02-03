
<?php
require 'connect.php';

$iid = $_POST["iid"];
$iname = $_POST["iname"];
$email = $_POST["email"];
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

$sql = "INSERT INTO ticket (iid, iname, email , img, inquiry, stat, priority, dt, itype, fdes, filename)
VALUES ('$iid', '$iname', '$email' , '$img' ,'$inquiry', '$stat', '$priority', '$dt', '$itype','$fdes', '$filename')";

if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location: ../../ticket.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>


 

