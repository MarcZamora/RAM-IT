<?php 
	$servername = "localhost";
    $username  = "root";
    $password = "";
    $dbname = "test";
    $port = "3308";
    
    $db = mysqli_connect($servername, $username, $password, $dbname, $port);
    
    if (!$db) {
        die("Connection Failed". mysqli_connect_error());
        
    }
 ?>
 <?php 
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('h:i a', time()); 
?>
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
                                        
                                        <?php require "code/components/chl.php";?>
										<!--Space Division-->
						<div style="height:5%;"></div>
                    
					</div>
					<div class="card-footer bg-white position-absolute w-100 bottom-0 m-0 p-1">
						<div class="input-group">
                        <input type="hidden" name="tid" id="tid" value="<?php echo $_GET["id"]; ?>" required>
                        <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['fname']. " " . $_SESSION['mname'] . " " . $_SESSION['lname']; ?>" required>
                        <input type="hidden" name="position" id="position" value="position" value="<?php echo $_SESSION['pstion']; ?>" required>
                        <input type="hidden" name="dtm"  id="dtm"value="<?=$mysqltime?>" required>
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
            $("#chatbody").scrollTop($("#chatbody")[0].scrollHeight);
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
			<a class="buttom-btn" href="#"></a>
	</div>
</div>
</div>

<!--Space Division-->
<div style="height:5%;"></div>

</div>
                                        

</body>
</html>
