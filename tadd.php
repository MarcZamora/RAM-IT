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

                <!--Font Awsome-->
                <script src="https://kit.fontawesome.com/828216c770.js" crossorigin="anonymous"></script>
            </head>

    <body className='snippet-body'>

            <!--Sidebar Navigatioon-->
            <?php require 'code/components/nav.php'; ?>


            <!--General Container-->
            <div class="height-100 bg-light">
               
                <div class="wrapper">
                    <div class="title">
                      Add Ticket 
                      
                    </div>
                   
                    
                        
                    
                    <form method="POST" action="code/components/tpost.php" enctype="multipart/form-data"> 
                      <!--Hidden-->
                            <input type="hidden" name="iname" value="<?=$_SESSION['fname']?> <?=$_SESSION['mname']?> <?=$_SESSION['lname']?>" id="iname" required>
                            <input type="hidden" name="iid" value="<?=$_SESSION['id']?>" id="iid" required>
                            <input type="hidden" name="email" placeholder="email" id="txt_field" value="<?=$_SESSION['name']?>">
                            <input type="hidden" name="stat" value="pending" id="stat" required>
                            <input class="form-control" type="hidden" name="ipstion" id="ipstion" value="<?=$_SESSION['pstion']?>" />
                            <input class="form-control" type="hidden" name="img" id="img" value="<?=$_SESSION['filename']?>" />
                            <?php echo  '<input type="hidden" name="dt" value="'. $mysqltime . '" id="dt" required>'?>
                      <!--Inquiry-->
                        <div class="form">
                        <div class="inputfield">
                          <label>Inquiry:</label>
                          <textarea class="textarea" name="inquiry" placeholder="Inquiry" id="txt_field" required></textarea>
                           </div> 
                          
                           <!--Type-->
                           <div class="inputfield" >
                          <label>Type:</label>
                          <div class="custom_select">
                          <select type="select" name="itype" placeholder="Type" id="itype" style="text-transform: capitalize;" required>
                            <option value="Hardware">Hardware</option>
                            <option value="Software">Software</option> 
                            <option value="Account">Account</option>  
                            <option value="Hyflex Equipment">Hyflex Equipment</option>  
                            <option value="Borrowed Equipment">Borrowed Equipment</option>
                            <option value="WiFi Connection">WiFi Connection</option>
                            <option value="Others">Others</option>  
                            </select>
                          </div>
                           </div> 
                
                        <!--Description-->
                        <div class="form">
                        <div class="inputfield">
                          <label>Description:</label>
                          <textarea class="textarea" name="fdes" placeholder="Full Description" id="txt_field" required></textarea>
                       </div> 
                      
                           <input class="inputfield" type="file" name="uploadfile" value="" />

                          <div class="inputfield">
                            <button type="submit" class="btn" value="Post">Add Ticket</button>
                          </div>
                    </form>
                          <div class="inputfield">
                            <a href="javascript:history.back()" value="Back" class="btn" style="text-decoration: none;" ><center>Back</center></a>
                          </div>
                    </div>
                </div>	

            </div><!--End-->

                            
    </body>
</html>