<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
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
<link href="code/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="login">
	<h1>Add ticket</h1>
	<!--Form-->
		<form action="code/components/tpost.php" method="post"> 

            <label for="iid">
			</label>
			<input type="hidden" name="iid" value="<?=$_SESSION['id']?>" id="iid" required>

            <label for="inquiry"> Inquiry: 
			</label>
			<input type="text" name="inquiry" placeholder="inquiry" id="inquiry">
			<br>

            <label for="stat">
			</label>
			<input type="hidden" name="stat" value="pending" id="stat" required>

			
			<label for="itype"> Type: 
			</label>
			<select type="select" name="itype" placeholder="Type" id="itype" required>  
			<option value=" "> </option>
			<option value="hardware">Hardware</option>
			<option value="account">Account</option>  
			<option value="others">Others</option>   
			</select>   
			<br>

			<label for="fdes"> Full description: 
			</label>
			<input type="text" name="fdes" placeholder="Full Description" id="fdes">

			<br>
			<label for="priority"> Priority: 
			</label>
			<select type="select" name="priority" value="" id="priority" required>  
			<option value=""></option>
			<option value="1">1</option>
			<option value="2">2</option>  
			<option value="3">3</option>  
			<option value="4">4</option>  
			<option value="5">5</option>   
			</select>   
			<?php echo  '<input type="hidden" name="dt" value="'. $mysqltime . '" id="dt" required>'?>
            <p></p>
			<input type="submit" value="post">
			
		</form>
		<a href="ticket.php"><button>Back</button></a>

		
	</div>
</body>
</html>