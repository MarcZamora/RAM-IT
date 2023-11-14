<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;

   
}
require 'code/components/connect.php';
//home
$page = $_GET['link'];
?>

<!DOCTYPE html>
        <html>
            <head>
                
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Home</title>

                <!--Outsource Bootstrap-->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!--Outsource Fontawsome-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
                                
                <!-- Local CSS-->
                <link href="res/res-chatbot/chatbot.css" rel="stylesheet" type="text/css">
                <link href="res/res-home/home.css" rel="stylesheet" type="text/css">

                <!--Font Awsome-->
                <script src="https://kit.fontawesome.com/828216c770.js" crossorigin="anonymous"></script>
                </head>


    <body className='snippet-body'>
    
            <!--Sidebar Navigatioon-->
            <?php require 'code/components/nav.php'; ?>

            <!--General Container-->
            <div class="height-800 bg-light">

                <!--Landon Welcome-->
                <div>
                 <section id="headerwel">
                    <div class="containerwel">
                            <div class="container-fluidwel"></div>                
                        <div class="middlewel">
                            <h1 class="text-white display-3 fw-bold">Welcome to RAM-IT:<br>
                                ITRO's ChatBot & Ticketing System,<br><span class="theme-text"><?=$_SESSION['fname']?> <?=$_SESSION['mname']?> <?=$_SESSION['lname']?></span></h1>
                        </div>
                    </div>
                    </section>
                </div>

               <br>

                <?php if ($_SESSION['pstion'] == 'student'){
                    require 'code/components/home/slides.php'; 
                    ?>
                  
                <!-- charts -->
                <?php } else{ require 'code/components/home/homecharts.php'; ?>
                            <div style = " position: relative; left: 510px; bottom: 450px; width:200px; height:250px;">
                            <?php    require 'code/components/home/itrocharts.php';
                            require 'code/components/home/itrocharts1.php';
                        
                        } ?>   
                            </div>
                                
                 <!--Chatbot -->
                 <?php require 'code/components/chatbot/cb.php';?>

                <!--Space Division-->
                <div style="height:5%;"></div>
                <br>
                <br>
                <br>
                <br>
                
               
            <!--Slideshow Script Script-->
            <script type="text/javascript">
                var counter = 1;
                setInterval(function(){
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 4){
                        counter = 1;
                    }
                }, 12000);
            </script>

            
               

    </body>
</html>

