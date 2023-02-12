<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "ramit";
   $conn=mysqli_connect($servername,$username,$password,$dbname, "3308");
   date_default_timezone_set('Asia/Singapore');
   $mysqltime = date ('Y-m-d H:i:s', time());
     if(!$conn){
         die('Could not Connect MySql Server:' .mysql_error());
       }

 
       $tid = mysqli_real_escape_string($conn, $_POST['tid']);
       $name = mysqli_real_escape_string($conn, $_POST['name']);
       $position = mysqli_real_escape_string($conn, $_POST['position']);
       $msg = mysqli_real_escape_string($conn, $_POST['msg']);
       $dtm = mysqli_real_escape_string($conn, $mysqltime);
 
 
    if(mysqli_query($conn, "INSERT INTO chat(tid, name, position, msg, dtm) VALUES('" . $tid . "', '" . $name . "', '" . $position . "', '". $msg ."', '". $dtm ."')")) {
     
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?>