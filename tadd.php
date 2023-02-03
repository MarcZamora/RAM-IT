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
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Home</title>

                <!--Outsource Bootstrap-->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!-- Local CSS-->
                <link href="res/res-tadd/tadd.css" rel="stylesheet" type="text/css">
            </head>

    <body className='snippet-body'>
    <body id="body-pd">
        <header class="header" id="header">
            <!--Toogle Sidebar Navigation-->
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="res/res-home/profile.png" alt=""> </div>
        </header>

            <!--Sidebar Navigatioon-->
            <div class="l-navbar" id="nav-bar">
                <nav class="nav">
                    <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">RAM-IT</span> </a>
                        <div class="nav_list">
                            <a href="home.php" class="nav_link"> <i class='bx bx-home nav_icon'></i> <span class="nav_name">Home</span> </a>
                            <a href="profile.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a>
                            <a href="tickets.php" class="nav_link active"> <i class='bx bx-envelope nav_icon'></i> <span class="nav_name">Tickets</span> </a> </div>
                    </div> <a href="login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
                </nav>
            </div>



            <!--General Container-->
            <div class="height-100 bg-light">
               
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
                          <textarea class="textarea" name="inquiry" placeholder="Inquiry" id="txt_field"></textarea>
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
                            
                      
                      
                         <input class="inputfield" type="file">

                          <div class="inputfield">
                            <input type="submit" value="Add Ticket" class="btn" value="Post">
                          </div>
                    </form>
                          <div class="inputfield">
                            <a href="tickets.html" value="Back" class="btn" style="text-decoration: none;" ><center>Back</center></a>
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