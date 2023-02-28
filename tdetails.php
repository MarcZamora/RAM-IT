<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$page = $_GET['id'];

require 'code/components/connect.php';
    $id=$_GET['id'];
	$query=mysqli_query($con,"SELECT * FROM ticket where tid = '$id'");
	$row=mysqli_fetch_array($query);
    
 
?>

<!DOCTYPE html>
        <html>
            <head>
            <style>
                .nav_link .badge { position: absolute; top: 5px; left: 2px; padding: 5px 10px; border-radius: 50%; background-color: red; color: white; z-index: -1;}
                </style>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Home</title>

                <!--Outsource Bootstrap (NAV and PAGE)-->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!--Outsource Bootstrap (PROFILE)-->
                <script src="https://kit.fontawesome.com/828216c770.js" crossorigin="anonymous"></script>   
                   
                
                <!-- Local CSS-->
                <link href="res/res-tdetails/tdetails.css" rel="stylesheet" type="text/css">

                <!--Font Awsome-->
                <script src="https://kit.fontawesome.com/828216c770.js" crossorigin="anonymous"></script>

            </head>

    <body className='snippet-body'>
    <body id="body-pd">
        <header class="header" id="header">
            <!--Toogle Sidebar Navigation-->
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="res/img/logo.png" alt=""> </div>
        </header>

            <!--Sidebar Navigatioon-->
            <?php require 'code/components/nav.php'; ?>



        
            <?php require 'code/components/details.php'; 
            if ($row['stat'] == 'pending') {
                
                
            }else{
                require 'code/components/chb.php';
            }
            ?>
            <!--Space Division-->
            <div style="height:5%;"></div>
        </div>

        
</body>
</html> 