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
       $id = mysqli_real_escape_string($conn, $_POST['id']);
       $name = mysqli_real_escape_string($conn, $_POST['name']);
       $position = mysqli_real_escape_string($conn, $_POST['position']);
       $msg = mysqli_real_escape_string($conn, $_POST['msg']);
       $dtm = mysqli_real_escape_string($conn, $mysqltime);
 
    if(mysqli_query($conn, "INSERT INTO chat(tid, id, name, position, msg, dtm) VALUES('" . $tid . "', '" . $id . "', '" . $name . "', '" . $position . "', '". $msg ."', '". $dtm ."')")) {
     // student
      if ($_POST['position'] == 'student'){
         mysqli_query($conn,"update `ticket` set notifits='0', notifitm='New message in ticket# ".$tid."',  notifdti='". $mysqltime. "' where tid=". $tid);

      // itro
      }elseif (($_POST['position'] == 'it')) {
         mysqli_query($conn,"update `ticket` set notifstus='0', notifstum='New message in ticket# ".$tid."',  notifdts='". $mysqltime. "' where tid=". $tid);

      } else{
         mysqli_query($conn,"update `ticket` set notifits='0', notifstum='Admin messaged in ticket# ".$tid."',  notifdti='". $mysqltime. "', notifstus='0', notifstum='Admin messaged in ticket# ".$tid."',  notifdts='". $mysqltime. "' where tid=". $tid);
      }
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
 
?>