<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
require 'code/components/connect.php';

    $id=$_GET['id'];
	$query=mysqli_query($con,"SELECT iid, email, img, tid, inquiry, stat, assignid, priority, severity, afname, alname, dt, itype, fdes, dta, filename FROM ticket where tid = '$id'");
	$row=mysqli_fetch_array($query);
 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ticket# <?php echo $row['tid']; ?></title>
<link href="code/css/body&nav.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>

<body>  

<?php require 'code/components/nav.php';?>



        <div class="content">
        <h2>Ticket# <?php echo $row['tid']; ?></h2>
        <h3>Status: <?php echo $row['stat']; ?></h3>
		
            <p>Your ticket details are below:</p>
            <!-- info table -->
            <?php require 'code/components/details.php';?>
            </div>
			
			<?php
            if($row['stat'] == "open"){
                echo '<div id = "chat" style ="margin-left: 150px;">';
				require 'code/components/chat.php';
				echo '</div>';
            } 
            else {
			 echo '<div id = "chat" style ="margin-left: 150px;">>';
             echo "<br>" ."<br>" . "There is no one to talk to because the ticket is still pending";
			 echo '</div>';
            }
            ?>

            
			</div>
</body>
</html>