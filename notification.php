<?php 
session_start();

require 'code/components/connect.php';
                        if ($_SESSION['pstion'] == "student"){
                            $sql = "SELECT * from ticket where stat = 'open' AND notifstus = 0 AND iid = " .$_SESSION['id']. " ORDER BY notifdti desc";
                            } 
                            elseif ($_SESSION['pstion'] == "it")
                            {
                            $sql = "SELECT * from ticket where  stat = 'open' AND notifits = 0 AND assignid = " .$_SESSION['id']. " ORDER BY notifdts desc";
                            }
                            else{
                            $sql = "SELECT * from ticket where stat='pending' OR stat = 'open' AND iid = " .$_SESSION['id']. " AND notifstus = 0  ORDER BY notifdti desc";
                            }
                            $result = mysqli_query($con, $sql);

                            $i = 0;
                            
                            $page = $_GET['link'];
?>
<!DOCTYPE php>
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
                <link href="res/res-notification/notification.css" rel="stylesheet" type="text/css">

                <!--Font Awsome-->
                <script src="https://kit.fontawesome.com/828216c770.js" crossorigin="anonymous"></script>


                <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

                <script>
                    $(document).ready(function(){
                        $(".notification_icon .fa-bell").click(function(){
                            $(".dropdown").toggleClass("active");
                        })
                    });
                </script>
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
                                   <span class="theme-text">Notifications</span></h1>
                           </div>
                       </div>
                       </section>
                   </div>

                   <br>

                <!--Space Division-->
                <div style="height:5%;"></div>

                <div class="item_background">
                <!-- contents -->
                <?php
                            while($row = mysqli_fetch_array($result)){ 
                                date_default_timezone_set('Asia/Singapore');
                                $mysqltime = date ('Y-m-d H:i:s', time());
                                
                                
                                $i++;
                                if ($i > 0 ){
                                if ($_SESSION['pstion'] == "supervisor") {
                        ?>
                                
                                        <div class="notify_item">
                                        <a href="tdetails.php? id=<?=$row['tid']?>">    
                                            <div class="notify_img">
                                                <img src="res/accountimg/<?=$row['iid']?>.png" alt="profile_pic" style="width: 50px">
                                            </div>
                                            <div class="notify_info">
                                                <p><?=$row['notifstum']?></p>
                                                <span class="notify_time"><?=$row['dt']?></span>
                                                </a>   
                                            </div>
                                        </div>
                                    
                        <?php } elseif ($_SESSION['pstion'] == "it") {?>
                            
                            <div class="notify_item">
                            <a href="tdetails.php? id=<?=$row['tid']?>">   
                                            <div class="notify_img">
                                                <img src="res/accountimg/<?=$row['iid']?>.png" alt="profile_pic" style="width: 50px">
                                            </div>
                                            <div class="notify_info">
                                                <p><?=$row['notifitm']?></span></p>
                                                <span class="notify_time"><?=$row['notifdts']?></span>
                                                </a>   
                                            </div>
                                        </div>
                            
                        <?php } else{ ?>
                            <div class="notify_item">
                            <a href="tdetails.php? id=<?=$row['tid']?>">  
                                            <div class="notify_img">
                                                <img src="res/accountimg/<?=$row['assignid']?>.png" alt="profile_pic" style="width: 50px">
                                            </div>
                                            <div class="notify_info">
                                                <p><?=$row['notifstum']?></span></p>
                                                <span class="notify_time"><?=$row['notifdti']?></span>
                                                </a>   
                                            </div>
                                        </div>
                       <?php } } } if ($i <= 0 ){ echo ' <center> <h1>There is no notifications at this time. </h1> </center>';} ?>
                    
                       

                     </div>
                      
                      

    <!--Container Main end-->
             <!--Container Main end (Nav and Page)-->
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