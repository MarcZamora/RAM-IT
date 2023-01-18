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
<title>Tickets Page <?=$_GET['pageno']?></title>
<link href="code/css/body&nav.css" rel="stylesheet" type="text/css">
<link href="code/css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>
<body>  
    
<?php require 'code/components/nav.php';?>

    <div>
    <h2 class="tickettitle">Ticket Page</h2>
    </div>
    <div class="content">
       
       
        <div>
            <p id='ticket-direct'>Your tickets are below:</p>
            
            <!-- ticket table -->
            <?php 
           include "code/components/tticket.php";
            ?>

       
        </div>
        <?php if ($_SESSION['pstion'] == "student"){echo '<a class="addticketbtn" href="tadd.php"><button id="addt"> Add Ticket </button></a>';} ?>
    </div>

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