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
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tadd</title>
	<link href="code/css/tadd.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Add Ticket
    </div>
    <form action="code/components/tpost.php" method="post">
    <!--Hidden-->
    <input type="hidden" name="iid" value="<?=$_SESSION['id']?>" id="iid" required>
    <input type="hidden" name="email" placeholder="email" id="txt_field" value="<?=$_SESSION['name']?>">
    <input type="hidden" name="stat" value="pending" id="stat" required>
    <input class="form-control" type="hidden" name="img" id="img" value="<?=$_SESSION['filename']?>" />
		<?php echo  '<input type="hidden" name="dt" value="'. $mysqltime . '" id="dt" required>'?>
		
    <!--Inquiry-->
    	<div class="form">
		<div class="inputfield">
          <label>Inquiry:</label>
          <textarea class="textarea" name="inquiry" placeholder="inquiry" id="txt_field"></textarea>
       	</div> 
	
	   	<!--Type-->
	   	<div class="inputfield" >
          <label>Type:</label>
          <div class="custom_select">
          <select type="select" name="itype" placeholder="Type" id="itype" required>
            <option value="hardware">Hardware</option>
            <option value="account">Account</option>  
            <option value="others">Others</option>  
            </select>
          </div>
       	</div> 

		<!--Description-->
		<div class="form">
		<div class="inputfield">
          <label>Description:</label>
          <textarea class="textarea" name="fdes" placeholder="Full Description" id="txt_field"></textarea>
       </div> 

		<!--Priority-->
	   	<div class="inputfield">
          <label>Priority:</label>
          <div class="custom_select">
            <select name="priority" value="" id="priority" required>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
            </select>
          </div>
       	</div> 
      
      <input type="file">
      	<div class="inputfield">
        	<input type="submit" value="Add Ticket" class="btn" value="Post">
      	</div>
</form>
	  	<div class="inputfield">
        	<a href="ticket.php" value="Back" class="btn" style="text-decoration: none;" ><center>Back</center></a>
      	</div>
    </div>
</div>	
	
</body>
</html>