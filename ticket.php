<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

require 'code/components/connect.php';
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
if ($_SESSION['pstion'] == "student"){
$sql = "SELECT * from ticket where iid = ".$_SESSION['id'];

} else
{
    $sql = "SELECT * from ticket";
}

$page = $_GET['link'];

$result = mysqli_query($con, $sql);
$t = 0;

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

                <!--Outsource Bootstrap (Nav & Layout)-->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!--Table-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

                <!--Outsource Fontawsome-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                <!--Oursource Bootsrap (Buttons)-->
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                                
                <!-- Local CSS-->
                <link href="res/res-tickets/tickets.css" rel="stylesheet" type="text/css">
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
                               <span class="theme-text">Tickets</span></h1>
                       </div>
                   </div>
                   </section>
               </div>

               <br>

                <!--Table-->
                <div>
                    <table id="example" class="table table-striped" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Ticket ID:</th>
                                <th>Inquirer ID:</th>
                                <th>Inquirer's Name:</th>
                                <th>Inquiry:</th>
                                <th>Type:</th>
                                <th>Status:</th>
                                <th>Priority:</th>
                                <th>Severity:</th>
                                <th>Assigned Staff ID:</th>
                                <th>Name Assigned:</th>
                                <th>Date:</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_array($result)){ $t++;
                            ?>
                            <tr>
                                
                               <td><?=$row['tid']; ?></td>
                               <td><?=$row['iid']; ?></td>
                               <td><?=$row['iname']?></td>
                               <td><div class="tbl-of"><?=$row['inquiry']; ?></div></td>
                               <td style="text-transform: capitalize;"><?=$row['itype']; ?></td>
                               <td style="text-transform: uppercase;"><?=$row['stat']; ?></td>
                               <td><?=$row['priority']; ?></td>
                               <td><?=$row['severity']; ?></td>
                               <td class = "assignid"><?=$row['assignid']; ?></td>
                               <td><?=$row['aname']?></td>
                               <td class = "dt"> <?=$row['dt'] ?></td>
                               <td>
                                   <a  class = "links" href="tdetails.php? id=<?=$row['tid']; ?>"><button type="button" class="btn btn-inverse btn-roundedOT waves-effect waves-light m-b-5">View</button></a>
                                   <!-- <a  class = "links" href="code/components/delete.php? id=$row['tid'];"><button type="button" class="btn btn-inverse btn-roundedOT waves-effect waves-light m-b-5">Delete</button></a> -->
                               </td>
                           </tr>

                            <?php
                       }
                   ?>
                            
                        </tbody>
                        <tfoot>
                           <?php
                           if ($t >= 5) {?>
                            
                            <tr>
                            <th>Ticket ID:</th>
                            <th>Inquirer ID:</th>
                            <th>Inquirer's Name:</th>
                            <th>Inquiry:</th>
                            <th>Type:</th>
                            <th>Status:</th>
                            <th>Priority:</th>
                            <th>Severity:</th>
                            <th>Assigned Staff ID:</th>
                            <th>Name Assigned:</th>
                            <th>Date:</th>
                            <th></th>
                            </tr>
                            
                           <?php }else{
                           ?>

                           <?php } ?>
                        </tfoot>
                    </table>
                </div>

                <!--Space Division-->
                <div style="height:5%;"></div>

                <!--Add Ticket-->
                <a href="tadd.php?link=ticketc"><button type="button" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5">Add Ticket</button></a>
                
                <?php if ($_SESSION['pstion'] == 'it' || $_SESSION['pstion'] == 'supervisor'){?>
                <!--Download CV-->
                <a href="code/components/tcsv.php"><button type="button" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5">Download Data</button></a>
                <?php }?>
             <!--Chatbot -->
             <?php require 'code/components/cb.php';?>
             

            <!--Table Scripts-->
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
            <script src="res/res-tickets/table.js"></script>

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