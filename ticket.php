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
<link rel="stylesheet" href="code/css/cbcollapse.css">
<link href="code/css/home.css" rel="stylesheet" type="text/css">
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
        <a href="addt.php"><button> Add Ticket </button></a>
        <div>
            <p>Your tickets are below:</p>
            <!-- info table -->
            <?php include "ttable.php";?>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><?=$_SESSION['fname']?> <?=$_SESSION['mname']?> <?=$_SESSION['lname']?></td>
                </tr>
                <tr>
                    <td>ID no#:</td>
                    <td><?=$_SESSION['id']?></td>
                </tr>
            </table>
        </div>
    </div>
<!-- chatbot -->
    <button class="open-button" onclick="openForm()">Chatbot</button>
        <div class="chat-popup" id="myForm">
            <div class="form-container">
                <?php include "cb.php"?>
    <button type="button"  class="btn cancel" onclick="closeForm()">Close</button>
            </div>
        </div>
</body>
    <script src="code/scripts/cbcollapse.js"></script>
	<script src="code/scripts/cb.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>