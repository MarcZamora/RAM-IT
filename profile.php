<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
require 'code/components/isset.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Profile Page</title>
<link href="code/css/body.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>
<body >  
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
    <h2>Profile Page</h2>
        <div>
            <p>Your account details are below:</p>
            <!-- info table -->
            <table>
                <tr>
                    <td>Name:</td>
                    <td><?=$_SESSION['fname']?> <?=$_SESSION['mname']?> <?=$_SESSION['lname']?></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><?=sha1($pswd)?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?=$email?></td>
                </tr>
                <tr>
                    <td>ID no#:</td>
                    <td><?=$_SESSION['id']?></td>
                </tr>
                <tr>
                    <td>Position:</td>
                    <td><?=$pstion?></td>
                </tr>
            </table>
        </div>
    </div>

    <?php require "cb.php";?>
    
</body>
    <script src="code/scripts/cbcollapse.js"></script>
	<script src="code/scripts/cb.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>

