<?php
$id = $_GET['id'];
$input = $row['dt'];
$date = strtotime($input);
$input1 = $row['dta'];
$date1 = strtotime($input1);
$con = mysqli_connect('localhost','root','', 'ramit','3308');
$aquery=mysqli_query($con,"SELECT * FROM accounts where pstion='it'");
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

// student
if ($_SESSION['pstion'] == $row['ipstion'] && $_SESSION['id'] == $row['iid']){
    mysqli_query($con,"update `ticket` set notifstus='1',  notifdts='". $mysqltime. "' where tid=". $id);

// itro
}elseif (($_SESSION['pstion'] == $row['apstion'] && $_SESSION['id'] == $row['assignid'])) {
    mysqli_query($con,"update `ticket` set notifits='1',  notifdti='". $mysqltime. "' where tid=". $id);

} else{

}
?>


   
<!--General Container-->
<div class="height-100 bg-light">
                
                <!--Landon Welcome-->
            <div>
                <section id="headerwel">
                   <div class="containerwel">
                           <div class="container-fluidwel"></div>                
                       <div class="middlewel">
                           <h1 class="text-white display-3 fw-bold">
                               <span class="theme-text">Ticket Details</span></h1>
                       </div>
                   </div>
                   </section>
               </div>
    
               <br>
               
                <!--Profile-->
                <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="res/accountimg/<?=$row['iid']?>.png" alt="" class="rounded-circle" width="150">
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
                                    <span class="text-secondary" style="text-transform: uppercase;"><?=$row['stat'];?></span>
                                </li>
                                
                                
                                <?php if ($_SESSION['id'] == $row['iid']){?>
                                
                                <?php if ($row['stat'] != 'closed'){?>

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <div class="inputfield">
                                <a href='code/components/tclosep.php?id=<?=$row['tid'];?>'>
                                <button type="submit" class="btn" value="Post" style="background-color:red;">Close Ticket</button>
                                </a>
                                </div>
                                </li>
                                <?php }?>
                                <?php if ($_SESSION['pstion'] == 'supervisor') {?>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <div class="inputfield">
                                <a href='code/components/tedit.php?id=<?=$row['tid']; ?>'>
                                <button type="submit" class="btn" value="Post" style="background-color:cyan;">Edit Ticket</button>
                                </a>
                                </div>
                                </li>
                                <?php } ?>
                                <?php } elseif ($_SESSION['pstion'] == 'supervisor') {?>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <a href='code/components/tedit.php?id=<?=$row['tid']; ?>'>
                                <div class="inputfield">
                                <button type="submit" class="btn" value="Post" style="background-color:cyan;">Edit Ticket</button>
                                </div>
                                </a>
                                </li>
                                <?php }
                                ?>
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
                                <?=$row['priority'];?>
                                </div>
                                </div>

                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Severity:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=$row['severity'];?>
                                </div>
                                </div>

                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Type:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-transform: capitalize;">
                                <?=$row['itype'];?>
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

                                <?php if ($row['filename'] != ""){?>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">File:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <img src="./res/img/<?=$row['filename']?>" style = "width: 350px;">
                                </div>
                                </div>
                            <?php }?>
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
                <?php 
                if ($_SESSION['pstion'] == "supervisor"){
                    if ($row['stat'] == 'pending' ){
                    ?>
                <hr>
                <h4 class="mb-0">No one is assigned to this ticket</h4>
                <select name="users" onchange="showUser(this.value)">
                <option value="">Select a person:</option>
                <?php while($arow = mysqli_fetch_array($aquery)){?>
                <option value="<?=$arow['id']?>"><?=$arow['fname']. " " .$arow['mname']. " " .$arow['lname']?></option>
                <?php } ?>
                </select>
                <form method="POST" action="code/components/tassignp.php?id=<?=$id?>">
                <div id="txtHint"></div>
                </form>
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
                            xmlhttp.open("GET","code/components/aselect.php?q="+str,true);
                            
                            xmlhttp.send();
                            }
                            
                    </script>
                
                              
                <?php  } else{ ?>

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
                <?php } } else{ 
                    if ($row['stat'] == "pending"){
                        ?>

                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0"></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h4>The ticket status of the ticket is currently "pending."
                    <br>
                    Please wait for the ticket to be "open."</h4>
                    </div>
                    </div>
                <?php }
                
                else { ?>
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
                <?php } }
                
                ?>
                           
                            </div>
                        </div>
                    </div>
                </div>
    
            <!--Space Division-->
            <div style="height:5%;"></div>
    
            


                                 