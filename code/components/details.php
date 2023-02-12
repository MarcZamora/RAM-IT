<?php date_default_timezone_set('Asia/Singapore'); $mysqltime = date ('Y-m-d H:i:s', time()); ?>
   
<!--General Container-->
<div class="height-100 bg-light">
                
                <!--Header-->
                <div class="welhead">
                    <div class="mainhead">
                    <h1>Ticekt Details</h1>
                    </div>
                </div>
    
                <!--Profile-->
                <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="res-tdetails/profile.png" alt="" class="rounded-circle" width="150">
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
                                <?php if ($_SESSION['pstion'] == "supervisor"){?>
                                <!-- Supervisor -->
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Priority:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <select name="priority" value="" id="priority" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                 </select>
                                </div>
                                </div>
                                
                                <?php } else { ?>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Priority:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=$row['priority'];?>
                                </div>
                                </div>
                                <?php }?>
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
                                <h6 class="mb-0">Type:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
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
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">File:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <img src="./res/img/<?=$row['filename']?>" style = "width: 350px;">
                                </div>
                                </div>
                            <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                <h6 class="mb-0">Date:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?=$row['dt'];?>
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
                if ($row['stat'] == "pending"){?>
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
                    mezzamora@itro.apc.edu.ph new coulumn
                    </div>
                    </div>
                <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Date Assigned:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?=$row['dta'];?>
                    </div>
                    </div>
                <?php }
                ?>
                           
                            </div>
                        </div>
                    </div>
                </div>
    
            <!--Space Division-->
            <div style="height:5%;"></div>
    


                                 