<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
$page = $_GET['link'];

require 'code/components/pf.php';
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

                <!-- Local CSS-->
                <link href="res/res-tadd/tadd.css" rel="stylesheet" type="text/css">

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
               
                <div class="wrapper">
                    <div class="title">
                      Add Chatbot Entry 
                      <div class="help-tip" style="top: 18px; right: 500px;">
                              <p>This is the inline help tip! It can contain all kinds of HTML. Style it as you please.</p>
                          </div>
                    </div>
                   
                    
                        
                    
                    <form method="POST" action="code/components/tcbpost.php" enctype="multipart/form-data"> 
                      <!--Inquiry-->
                        <div class="form">
                        <div class="inputfield">
                          <label>Query:</label>
                          <textarea class="textarea" name="queries" placeholder="Inquiry" id="txt_field" required></textarea>
                           </div> 
                  
                        <!--Replies-->
                        <div class="form">
                        <div class="inputfield">
                          <label>Reply:</label>
                          <textarea class="textarea" name="replies" placeholder="Full Description" id="txt_field" required></textarea>
                       </div> 
                       
                          <div class="inputfield">
                            <button type="submit" class="btn" value="Post">Add Ticket</button>
                          </div>
                    </form>
                          <div class="inputfield">
                            <a href="tcb.php?link=tcb" value="Back" class="btn" style="text-decoration: none;" ><center>Back</center></a>
                          </div>
                    </div>
                </div>	

            </div><!--End-->

    <!--Container Main end-->
            <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
            <script type='text/javascript' src='#'></script>
            <script type='text/javascript' src='#'></script>
            <script type='text/javascript' src='#'></script>
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