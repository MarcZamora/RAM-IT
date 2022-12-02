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

    $id=$_GET['id'];
	$query=mysqli_query($con,"SELECT iid, tid, inquiry, stat, assignid, afname, alname, dt FROM ticket where tid = '$id'");
	$row=mysqli_fetch_array($query);
 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ticket# <?php echo $row['tid']; ?></title>
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
        <h2>Ticket# <?php echo $row['tid']; ?></h2>
        <h3>Status: <?php echo $row['stat']; ?></h3>
        <div>
            <p>Your ticket details are below:</p>
            <!-- info table -->
            <?php
            if ($_SESSION['pstion'] == "supervisor") {
            echo  
        '<form method="POST" action="update.php?id='
        .$id 
        .'">'
		.'<label>Inquirer ID:  </label>' 
        .$row["iid"]
        ."<br> <br>"
		.'<label>Inquiry:  </label> '
        .$row["inquiry"]
        ."<br> <br>"
		.'<input type="hidden" value="open" name="stat">'
		.'<label>Assign ID:  </label><input type="text" value="'
        .$row["assignid"]
        .'"name="assignid">'
        ."<br> <br>"
		.'<label>Assign Firstname:  </label><input type="text" value="'
        .$row["afname"] 
        .'"name="afname">'
        ."<br> <br>"
		.'<label>Assign Lastname:  </label><input type="text" value="'
        .$row["alname"]
        .'"name="alname">'
        ."<br> <br>"
		.'<label>Date:  </label>'  
        .$row["dt"]
        ."<br> <br>"
		.'<input type="submit" name="submit">'
        ."          "
		.'<a href="ticket.php"><button>Back</button></a>'
	    .'</form>';}
             elseif ($_SESSION['pstion'] == "it") {
        echo  
        '<table>'
            .'<tr>'    
                .'<td>'
                .'inquirer ID: ' 
                . "  "
                .$row['iid']
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Inquiry: ' 
                . "  "
                .$row['inquiry']
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign ID: ' 
                . "  "
                .$row["assignid"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign Firstname: ' 
                . "  "
                .$row["afname"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign Lastname: ' 
                . "  "
                .$row["alname"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                . "Date: "
                . "  "
                .$row["dt"]
                .'</td>'
            .'</tr>'
            
            .'</table>'
        .'</div>'
    .'</div>';}
             else{
        echo  
        '<form action="update.php" method="post">' 
        .'<table>'
            .'<tr>'    
                .'<td>'
                .'inquirer ID: ' 
                . "  "
                .$row['iid']
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Inquiry: ' 
                . "  "
                .$row['inquiry']
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign ID: ' 
                . "  "
                .$row["assignid"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign Firstname: ' 
                . "  "
                .$row["afname"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign Lastname: ' 
                . "  "
                .$row["alname"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                . "Date: "
                . "  "
                .$row["dt"]
                .'</td>'
            .'</tr>'

            .'</table>'
        .'</div>'
    .'</div>';
    }
    ?>
</body>
</html>