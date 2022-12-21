<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
    exit;
}
require 'code/components/connect.php';

    $id=$_GET['id'];
	$query=mysqli_query($con,"SELECT iid, tid, inquiry, stat, assignid, afname, alname, dt FROM ticket where tid = '$id'");
	$row=mysqli_fetch_array($query);
 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ticket# <?php echo $row['tid']; ?></title>
<link href="code/css/home.css" rel="stylesheet" type="text/css">
</head>
<body class="loggedin">  
    <nav class="navtop">
        <div>
            <h1><a href="home.php">RAM-IT</a></h1>
            <a href="ticket.php">Tickets</a>
            <a href="profile.php">Profile</a>
            <a href="code/components/logout.php">Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Ticket# <?php echo $row['tid']; ?></h2>
        <h3>Status: <?php echo $row['stat']; ?></h3>
        <div>
            <p>Your ticket details are below:</p>
            <!-- info table -->
            <?php
            require 'code/components/details.php';
            require 'code/components/chat.php';
            ?>
</body>
</html>