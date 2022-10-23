<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<title>Home Page</title>
		<link rel="stylesheet" href="code/css/cbcollapse.css">
		<link href="code/css/home.css" rel="stylesheet" type="text/css">
		
	</head>

	<body class="loggedin">
		<nav class="navtop">
			<div>
			<h1><a href="home.php">RAM-IT</a></h1>
				<a href="profile.php">Profile</a>
				<a href="logout.php">Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['fname']?> <?=$_SESSION['lname']?>!</p>
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