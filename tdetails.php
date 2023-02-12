<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

require 'code/components/connect.php';
    $id=$_GET['id'];
    $id=$_REQUEST['id'];
	$query=mysqli_query($con,"SELECT * FROM ticket where tid = '$id'");
	$row=mysqli_fetch_array($query);
    
   
 
?>

<!DOCTYPE html>
        <html>
            <head>
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
                            <a href="ticket.php" class="nav_link active"> <i class='bx bx-envelope nav_icon'></i> <span class="nav_name">Tickets</span> </a> </div>
                    </div> <a href="code/components/logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
                </nav>
            </div>



        
            <?php require 'code/components/details.php';?>
        </div>
        
			 <!--Space Division-->
             <div style="height:5%;"></div>

             
<html>
<head>
	<title>
	</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

  <!--Chat Bot-->

   <div class="container">
                    <div class="row">
                        <div class="wrapper">
                            <div class="contact-form-page">
                                <div class="header-btn">
                                    <a class="top-btn" href="#"></a>
                                </div>

                                <!--Space Division-->
                                <div style="height:10%;"></div>

                                
                                <div class="container-chat mt-4">
                                    <div class="card mx-auto" style="max-width:100%">
                                        <div class="card-header" style="background-color: white;">
                                            <div class="navbar navbar-expand p-0">
                                                <ul class="navbar-nav me-auto align-items-center">
                                                    <li class="nav-item">
                                                        <a href="#!" class="nav-link">
                                                            <div class="position-relative"
                                                                style="width:50px; height: 50px; border-radius: 50%; border: 2px solid #071acc; padding: 2px">
                                                                <img src="chat/res-chatbot/itro.png"
                                                                    class="img-fluid rounded-circle" alt="">
                                                                <span
                                                                    class="position-absolute bottom-0 start-100 translate-middle p-1 ">
                                                                    <span class="visually-hidden">New alerts</span>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <h1 class="chatbot-name" >RAM-IT</h1>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="chatbody" class="card-body p-4" style="height: 500px; overflow: auto; background-color: white;">
                                        
                                        <?php 
                                        require "code/components/chl.php";
                                        
                                        ?>
                                        <script>    
                                                    function loadXMLDoc() {
                                                    var xhttp = new XMLHttpRequest();
                                                    xhttp.onreadystatechange = function() {
                                                        if (this.readyState == 4 && this.status == 200) {
                                                        document.getElementById("chatbody").innerHTML =
                                                        this.responseText;
                                                        

                                                        }
                                                        
                                                    };
                                                    xhttp.open("GET", "code/components/chl.php?id=<?=$row['tid']; ?>", true);
                                                    xhttp.send();
                                                    }
                                                    setInterval(function(){
                                                        loadXMLDoc();
                                                        // 1sec
                                                    },1000);
                                                    
                                                    window.onload = loadXMLDoc;
                                        </script>
                                       
										<!--Space Division-->
						<div style="height:5%;"></div>
                    
					</div>
					<div class="card-footer bg-white position-absolute w-100 bottom-0 m-0 p-1">
						<div class="input-group">
                        <input type="hidden" name="tid" id="tid" value="<?php echo $_GET["id"]; ?>" required>
                        <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['fname']. " " . $_SESSION['mname'] . " " . $_SESSION['lname']; ?>" required>
                        <input type="hidden" name="position" id="position" value="position" value="<?php echo $_SESSION['pstion']; ?>" required>
							<input type="text" name="msg" id="msg" class="form-control border-0" placeholder="Please write a message..." required>
							<div class="input-group-text bg-transparent border-0">
								<button id="send-btn" class="btn btn-light text-secondary"> Send
									<i id="button" class="fas fa-paper-plane"></i>
								</button>
							</div>
						   
						</div>
					</div>
				</div>
			</div>



<!-- sending -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
 $(document).ready(function() {
 
    //enter button
 $("#msg").keypress(function(event) {
        if (event.keyCode === 13) {
            $("#send-btn").click();
        }
    });

 $("#send-btn").click(function() {

     var tid = $("#tid").val();
     var name = $("#name").val();
     var position = $("#position").val();
     var msg = $("#msg").val();
     var dtm = $("#dtm").val();

     if(tid==''||name==''||position==''||msg=='' ||dtm=='') {
         alert("Please fill all fields.");
         return false;
     }

     $.ajax({
         type: "POST",
         url: "code/components/chbmp.php",
         data: {
            tid: tid,
            name: name,
            position: position,
            msg: msg,
            dtm: dtm

            
         },
         cache: false,
         success: function(data) {
            $("#msg").val("");
            $("#chatbody").scrollTop($("#chatbody")[0].scrollHeight - 40);
         },
         error: function(xhr, status, error) {
             console.error(xhr);
         }
     });

   
      
 });

});
</script>

		<!--Space Division-->
		<div style="height:7%;"></div>


            
		</div>
   
        

        <!--Space Division-->
        <div style="height:5%;"></div>

            
        </div> <!--End Div Main Content Template-->

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
</body>
</html> 