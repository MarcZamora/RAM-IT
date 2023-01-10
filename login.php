<?php
// We need to use sessions, so you should always start sessions using the below code.
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
	header('Location: home.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="code/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="login">
	<h1>Login</h1>
		<form action="authenticate.php" method="post"> 
			<div class="txt_field">
				<input type="email" name="email" placeholder="" id="email" required>
				<span></span>
				<label>Username</label>
			</div>
			<div class="txt_field">
				<input type="password" name="pswd" placeholder="" id="pswd" required>
				<span></span>
				<label>Password</label>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>