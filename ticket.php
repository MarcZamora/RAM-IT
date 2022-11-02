<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: loggin.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tickets Page</title>
<link href="code/css/home.css" rel="stylesheet" type="text/css">
<link href="code/css/ticket.css" rel="stylesheet" type="text/css">
</head>
<body class="loggedin">  
    <nav class="navtop">
        <div>
            <h1><a href="home.php">RAM-IT</a></h1>
            <a href="ticket.php">Tickets</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Ticket Page</h2>

        <?php if ($_SESSION['pstion'] == "student"){echo '<a href="tadd.php"><button> Add Ticket </button></a>';} ?>
       
        <div>
            <p>Your tickets are below:</p>
            <!-- info table -->
            <?php include "ttable.php";?>
        </div>
    </div>

        
</body>
</html>