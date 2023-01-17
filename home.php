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
<title>Profile Page</title>
<link href="code/css/home.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>
<body >  
	
	<?php require 'code/components/nav.php';?>
	<?php require 'cb.php';?>

	<div class="slider">
			<div class="slides">
				<input type="radio" name="radio-btn" id="radio1">
				<input type="radio" name="radio-btn" id="radio2">
				<input type="radio" name="radio-btn" id="radio3">
				<input type="radio" name="radio-btn" id="radio4">
	
				<div class="slide first">
					<img src="img/1.jpg" alt="">
				</div>
				<div class="slide">
					<img src="img/2.jpg" alt="">
				</div>
				<div class="slide">
					<img src="img/3.jpg" alt="">
				</div>
				<div class="slide">
					<img src="img/4.jpg" alt="">
				</div>
	
				<div class="navigation-auto">
					<div class="auto-btn1"></div>
					<div class="auto-btn2"></div>
					<div class="auto-btn3"></div>
					<div class="auto-btn4"></div>
				</div>
			</div>
	
			<div class="navigation-manual">
				<label for="radio1" class="manual-btn"></label>
				<label for="radio2" class="manual-btn"></label>
				<label for="radio3" class="manual-btn"></label>
				<label for="radio4" class="manual-btn"></label>
			</div>
		</div>

		<script type="text/javascript">
			var counter = 1;
			setInterval(function(){
				document.getElementById('radio' + counter).checked = true;
				counter++;
				if (counter > 4){
					counter = 1;
				}
			}, 5000);
		</script>
		
    <footer>
			<div class="footer">
				<p>Copyright © 2023 Asia Pacific College. All rights reserved.</p>
			</div>
	</footer>

    
</body>
    <script src="code/scripts/cbcollapse.js"></script>
	<script src="code/scripts/cb.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>

