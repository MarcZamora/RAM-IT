
<h1>CHAT (WORKING IN PROGRESS)</h1>
                    <?php
					require 'code/components/connect.php';				
					$query1=mysqli_query($con,"SELECT tid, name, position, msg from chat where tid = '$id'");
					while($row=mysqli_fetch_array($query1)){
						?>
                
                <div id = "innerchat">

                            <center><p> <div style="text-transform: uppercase;"><?php echo $row['position'];?></div>
                                    <?php echo $row['name'];?><br>
                                    <?php echo $row['msg']; ?></p><br> 
                                <?php 
                            }
                        ?>
                </div>

                <div id = "outchat" style = "width: 700px; background-color: grey; ">
                <form method="POST" action="code/components/chatp.php?id='$id'">
                <input type="hidden" value="<?php echo $_GET["id"]; ?>" name="tid">
                <input type="hidden" value="<?php echo $_SESSION['fname']. " " . $_SESSION['mname'] . " " . $_SESSION['lname']; ?>" name="name">
                <input type="hidden" value="<?php echo $_SESSION['pstion']; ?>" name="position">
                <div id = "outchat">
                <textarea class="textarea" name="msg" placeholder="Type here" id="txt_field" required style = "margin-left: 5px; width:500px; margin-top:10px;"></textarea>
                
                <input type="submit" name="submit" style="margin-bottom:10px; margin-left:10px;">
                </center>
                </div> 