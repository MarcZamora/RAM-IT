<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
    
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tickets Page</title>
<link href="code/css/tickets.css" rel="stylesheet" type="text/css">
<link href="code/css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>
<body class="loggedin">  
    <body>
		<nav>
			<ul>
				<li>
					<a href="home.php" class="logo">
						<img src="logo.png" alt="">
						<span class="nav-item">RAM-IT</span>
					</a>
				</li>
				<li><a href="profile.php">
					<i class="fas fa-user"></i>
					<span class="nav-item">Profile</span>
				</a></li>
				<li><a href="ticket.php">
					<i class="fas fa-ticket"></i>
					<span class="nav-item">Tickets</span>
				</a></li>
				<li><a href="login.php" class="logout">
					<i class="fas fa-right-from-bracket"></i>
					<span class="nav-item">Log Out</span>
				</a></li>
			</ul>
		</nav>

    <div class="content">
        <h2>Ticket Page</h2>
       
        <div>
            <p id='ticket-direct'>Your tickets are below:</p>
            <!-- info table -->
            <?php 
            if ($_SESSION['pstion'] == "supervisor"){
                include "code/components/tsup.php";
            }
            elseif ($_SESSION['pstion'] == "it"){
                include "code/components/tit.php";
            }
            elseif ($_SESSION['pstion'] == "student"){
                include "code/components/tstu.php";
            } else{
                echo "ERROR no Position";
            }

            ?>

       
        </div>
        <?php if ($_SESSION['pstion'] == "student"){echo '<a href="tadd.php"><button id="addt"> Add Ticket </button></a>';} ?>
    </div>

    <footer>
			<div class="footer">
				<p>Copyright © 2023 Asia Pacific College. All rights reserved.</p>
			</div>
	</footer>

	<?php require "code/components/cb.php";?>
	
	</body>
	<script src="code/scripts/cbcollapse.js"></script>
	<script src="code/scripts/cb.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</html>