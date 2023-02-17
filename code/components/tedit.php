<!--General Container-->
<?php 
session_start();
$con=mysqli_connect("localhost","root","","ramit","3308");
$id=$_GET['id'];
$aquery=mysqli_query($con,"SELECT * FROM accounts");
$query=mysqli_query($con,"SELECT * FROM ticket where tid = '$id'");
$row=mysqli_fetch_array($query);
$input = $row['dt'];
$date = strtotime($input);
$input1 = $row['dta'];
$date1 = strtotime($input1);
?>

 <!--Outsource Bootstrap (NAV and PAGE)-->
 <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

                <!--Outsource Bootstrap (PROFILE)-->
                <script src="https://kit.fontawesome.com/828216c770.js" crossorigin="anonymous"></script>   
                   
                
                <!-- Local CSS-->
                <link href="res/res-tdetails/tdetails.css" rel="stylesheet" type="text/css">

<div class="height-100 bg-light">
                
                <!--Header-->
                <div class="welhead">
                    <div class="mainhead">
                    <h1 style = "margin-left: 20px;">Edit Ticket Details</h1>
                    </div>
                </div>
    
                <form method="POST" action="teditp.php?id=<?=$id?>" enctype="multipart/form-data">
                <!--Profile-->
                <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="../../res/res-tdetails/profile.png" alt="" class="rounded-circle" width="150">
                                            <div class="mt-3">
                                                <h4><?=$row['iname'];?></h4>
                                                <hr>
                                                <p class="text-secondary mb-1">Bachleor of Science in Information and Technology</p>
                                                <p class="text-muted font-size-sm">Mobile and Internet</p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><i class="fa-solid fa-ticket"></i> Ticket no.</h6>
                                    <span class="text-secondary"><?=$row['tid'];?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><i class="fa-solid fa-signal"></i> Status</h6>
                                    <span class="text-secondary"><?=$row['stat'];?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <div class="inputfield">
                                <button type="submit" class="btn" value="Post" style="background-color:cyan;">Edit Ticket</button>
                                </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <div class="inputfield">
                                <button onclick="history.back()">Back</button>
                                </div>
                                </li>

                            </ul>
                        </div>
                        </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Inquirer ID:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=$row['iid'];?>
                                </div>
                                </div>
                             <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Email:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <h6 class="mb-0"><?=$row['email'];?></h6>
                                </div>
                                </div>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Inquiry:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=$row['inquiry'];?>
                                </div>
                                </div>

                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Priority:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <div class="custom_select">
                                <select name="priority" value="" id="priority" required>
                                <option value="<?=$row['priority'];?>"><?=$row['priority'];?></option>
                                <option value="">/////</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                                </div>
                                </div>
                                </div>

                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Severity:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <div class="custom_select">
                                <select name="severity" value="" id="severity" required>
                                <option value="<?=$row['severity'];?>"><?=$row['severity'];?></option>
                                <option value="">/////</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                                </div>
                                </div>
                                </div>

                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Type:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <div class="custom_select">
                                <select type="select" name="itype" placeholder="" id="itype" required>
                                <option value="<?=$row['itype'];?>"><?=$row['itype'];?></option>
                                <option value="">////////</option>
                                <option value="hardware">Hardware</option>
                                <option value="account">Account</option>  
                                <option value="others">Others</option>  
                                </select>
                                </div>
                                </div>
                                </div>
                            
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Full Description:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=$row['fdes'];?>
                                </div>
                                </div>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">File:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <img src="./../../res/img/<?=$row['filename']?>" style = "width: 350px;">
                                </div>
                                </div>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Date Created:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=date('M d Y h:i A', $date);?>
                                </div>
                                </div>
                            <hr>
   
                  <!--ITRO Details-->
                <div class="itwelhead">
                    <div class="itmainhead">
                        <h2>Assigned IT Staff Information:</h2>
                    </div>
                </div>
                
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Name:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['aname'];?>
                    </div>
                    </div>
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">ID:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['assignid'];?>
                    </div>
                    </div>
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Email:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['aemail'];?>
                    </div>
                    </div>
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Date Assigned:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=date('M d Y h:i A', $date1);?>
                    </div>
                    </div>
    


                <hr>
                <h4 class="mb-0">Change the person that is assigned to this ticket</h4>
                <select name="users" onchange="showUser(this.value)">
                <option value="">Select a person:</option>
                <?php while($arow = mysqli_fetch_array($aquery)){?>
                <option value="<?=$arow['id']?>"><?=$arow['fname']. " " .$arow['mname']. " " .$arow['lname']?></option>
                <?php } ?>
                </select>
                <div id="txtHint"></div>
                <script>
                            function showUser(str) {
                            if (str=="") {
                                document.getElementById("txtHint").innerHTML="";
                                return;
                            }
                            var xmlhttp=new XMLHttpRequest();
                            xmlhttp.onreadystatechange=function() {
                                if (this.readyState==4 && this.status==200) {
                                document.getElementById("txtHint").innerHTML=this.responseText;
                                }
                            }
                            xmlhttp.open("GET","teaselect.php?q="+str,true);
                            
                            xmlhttp.send();
                            }
                            
                    </script>
                

               
                        
                    </div>
                </div>
                </form>
            <!--Space Division-->
            <div style="height:5%;"></div>
            