<?php
require 'connect.php';

                $tid=$_POST['tid'];
                $name = $_POST["name"];
                $position = $_POST["position"];
                $msg = $_POST["msg"];

                $sql = "INSERT INTO chat (tid, name, position, msg)
                VALUES ('$tid', '$name', '$position', '$msg')";

if ($con->query($sql) === TRUE) {
header('location:../../ticket.php');
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>