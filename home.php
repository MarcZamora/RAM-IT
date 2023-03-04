<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;

   
}
require 'code/components/connect.php';
$page = $_GET['link'];
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
    <body id="body-pd">
        <header class="header" id="header">
            <!--Toogle Sidebar Navigation-->
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="res/img/logo.png" alt=""> </div>
        </header>

             
                
            <!--Sidebar Navigatioon-->
            <?php require 'code/components/nav.php'; ?>

            <!--General Container-->
            <div class="height-100 bg-light">

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

                <?php if ($_SESSION['pstion'] == 'student'){?>
                    <!--Content Slider-->
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
            
                        <div class="slide first">
                            <img src="res/res-home/1.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="res/res-home/2.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="res/res-home/3.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="res/res-home/4.png" alt="">
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
                <?php } else{ require 'code/components/homecharts.php'; ?>
                            <div style = " position: relative; left: 510px; bottom: 450px; width:200px; height:250px;">
                            <?php    require 'code/components/itrocharts.php';} ?>   
                            </div>
                                
                 <!--Chatbot -->
                 <?php require 'code/components/cb.php';?>

                <!--Space Division-->
                <div style="height:5%;"></div>
                
               
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

             <!--Container Main end (Nav and Page)-->
            <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
            <script type='text/javascript'>document.addEventListener("DOMContentLoaded", function(event) {
   
                const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if(toggle && nav && bodypd && headerpd){
                toggle.addEventListener('click', ()=>{
                // show navbar
                nav.classList.toggle('show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
                })
                }
                }

                showNavbar('header-toggle','nav-bar','body-pd','header')

                /*===== LINK ACTIVE =====*/
                const linkColor = document.querySelectorAll('.nav_link')

                function colorLink(){
                if(linkColor){
                linkColor.forEach(l=> l.classList.remove('active'))
                this.classList.add('active')
                }
                }
                linkColor.forEach(l=> l.addEventListener('click', colorLink))

                // Your code to run since DOM is loaded and ready
                });</script>

                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                myLink.addEventListener('click', function(e) {e.preventDefault();});</script>

               

    </body>
</html>

