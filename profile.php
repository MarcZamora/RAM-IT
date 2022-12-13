<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: loggin.html');
    exit;
}
require 'isset.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Profile Page</title>
<link href="code/css/cbcollapse.css"  rel="stylesheet" type="text/css" >
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
    <h2>Profile Page</h2>
    <div class="content">
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

