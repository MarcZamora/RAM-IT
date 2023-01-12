
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
                <input type="text" value="" name="msg" required style = "margin-left: 450px;">
                <input type="submit" name="submit">
                </center>
                </div> 