<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
    exit;
}
require 'code/components/isset.php';
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add ticket</title>
<link href="code/css/tadd.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="login">
	<h1>Add ticket</h1>
	<!--Form-->
		<form action="code/components/tpost.php" method="post"> 

            <label for="iid">
			</label>
			<input type="hidden" name="iid" value="<?=$_SESSION['id']?>" id="iid" required>

            <label for="inquiry" class="inquiry">
			</label>
			<input type="text" name="inquiry" placeholder="inquiry" id="inquiry">

            <label for="stat">
			</label>
			<input type="hidden" name="stat" value="pending" id="stat" required>

			<label for="assignid">
			</label>
			<input type="hidden" name="assignid" value="" id="assignid" required>

			<label for="afname">
			</label>
			<input type="hidden" name="afname" value="" id="afname" required>

			<label for="alname">
			</label>
			<input type="hidden" name="alname" value="" id="alname" required>

			<?php echo  '<input type="hidden" name="dt" value="'. $mysqltime . '" id="dt" required>'?>

            <p></p>
			<input type="submit" value="Post">
			
		</form>
		<a href="ticket.php"><button>Back</button></a>

		
	</div>
</body>
</html>