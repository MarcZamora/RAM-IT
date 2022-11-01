<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: loggin.html');
    exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ramit';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT pswd, email, fname, mname, lname, pstion FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($pswd, $email, $fname, $mname, $lname, $pstion);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add ticket</title>
<link href="code/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="login">
	<h1>Add ticket</h1>
	<!--Form-->
		<form action="tpost.php" method="post"> 

            <label for="iid">
			</label>
			<input type="text" name="iid" value="<?=$_SESSION['id']?>" id="iid" required>

            <label for="email">
			</label>
			<input type="text" name="inquiry" placeholder="inquiry" id="inquiry" required>

            <label for="stat">
			</label>
			<input type="text" name="stat" value="pending" id="stat" required>
            <label for="email">

            <p></p>
			<input type="submit" value="post">

		</form>
	</div>
</body>
</html>