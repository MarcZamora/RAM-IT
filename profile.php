<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
require 'code/components/pf.php';

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

                <!--Outsource Bootstrap (NAV and PAGE)-->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!--Outsource Fontawsome-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                <!--Outsource Bootstrap (PROFILE)-->
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>               
                
                <!--Outsource Fontawsome-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                <!-- Local CSS-->
                <link href="res/res-profile/profile.css" rel="stylesheet" type="text/css">
                <link href="res/res-chatbot/chatbot.css" rel="stylesheet" type="text/css">

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
                           <h1 class="text-white display-3 fw-bold">
                               <span class="theme-text">Profile</span></h1>
                       </div>
                   </div>
                   </section>
               </div>

               <br>
               
                <!--Space Division-->
                <div style="height:5%;"></div>

            <!--Profile-->
           <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                            <img src="res/res-profile/profile.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?=$_SESSION['fname']?> <?=$_SESSION['mname']?> <?=$_SESSION['lname']?></h4>
                                    <hr>
                                    <p class="text-secondary mb-1">Bachleor of Science in Information and Technology</p>
                                    <p class="text-muted font-size-sm">Mobile and Internet</p>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="card mt-3">
            </div>
            </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Email:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?=$email?>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">ID #:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <h6 class="mb-0"><?=$_SESSION['id']?></h6>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Position:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <h6 class="mb-0"><?=$pstion?></h6>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!--Chatbot -->
             <?php require 'code/components/cb.php';?>
            
           
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

                <!--CALL -->
               
                            
    </body>
</html>