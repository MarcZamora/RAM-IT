
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
   <body>	
                           <?php
   
                           if (isset($_GET['pageno'])) {
                               $pageno = $_GET['pageno'];
                           } else {
                               $pageno = 1;
                           }
                           $no_of_records_per_page = 5;
                           $offset = ($pageno-1) * $no_of_records_per_page;
                   
                           $conn=mysqli_connect("localhost","root","","ramit");
                           // Check connection
                           if (mysqli_connect_errno()){
                               echo "Failed to connect to MySQL: " . mysqli_connect_error();
                               die();
                           }
                   
                           $total_pages_sql = "SELECT COUNT(*) FROM ticket";
                           $result = mysqli_query($conn,$total_pages_sql);
                           $total_rows = mysqli_fetch_array($result)[0];
                           $total_pages = ceil($total_rows / $no_of_records_per_page);
                           $condition='';

// if (!empty($valueToSearch)) {
//     $condition = " `cpi` >= '$valueToSearch'";
// }

// if (!empty($valueToSearch2)) {
//     $condition = " `sem` >= '$valueToSearch2'";
// }

// if (!empty($valueToSearch3)) {
//     $condition = "  `choice` >= '$valueToSearch3'";
// }

// if (!empty($valueToSearch) && !empty($valueToSearch2)) {
//     $condition = " `cpi` >= '$valueToSearch' AND `sem` >= '$valueToSearch2'";
// }

// if (!empty($valueToSearch2) && !empty($valueToSearch3)) {
//     $condition = " `sem` >= '$valueToSearch2' AND `choice` >= '$valueToSearch3'";
// }

// if (!empty($valueToSearch) && !empty($valueToSearch3)) {
//     $condition = " `cpi` >= '$valueToSearch' && `choice` >= '$valueToSearch3'";
// }


// $query = "SELECT * FROM student WHERE ". $condition ;

                    $condition=$_POST['condition'];
                    $condition2=$_POST['condition2'];
                    $condition3=$_POST['condition3'];

                              
                        if ($_SESSION['pstion'] == "supervisor"){
                            if(empty($condition && $condition2 && $condition3)){$sql = "SELECT * from ticket where  '" .$condition.  ">=". $condition2 ."ORDER BY". $condition3 ."LIMIT $offset, $no_of_records_per_page";}
                            else{$sql = "SELECT * from ticket LIMIT $offset, $no_of_records_per_page";}
                            
                        }
                        elseif ($_SESSION['pstion'] == "it"){
                            $sql = "SELECT * from ticket where assignid = '".$_SESSION['id']."'LIMIT $offset, $no_of_records_per_page";
                        }
                        elseif ($_SESSION['pstion'] == "student"){
                            $sql = "SELECT * from ticket where iid = '".$_SESSION['id']."'LIMIT $offset, $no_of_records_per_page";
                        } else{
                            echo "ERROR no Position";
                        }
                           

                           $res_data = mysqli_query($conn,$sql);?>
   
                        <form method="POST">
                        <select name="condition" id="condition" value="">
                        <option value="tid">Ticket ID#</option> 
                        <option value="iid">Inquiry ID#</option>
                        <option value="inquiry">Inquiry</option> 
                        <option value="stat">Status</option>
                        <option value="priority">Priority</option> 
                        <option value="severity">Severity</option>  
                        <option value="assignid">Assigned ID#</option> 
                        <option value="afname">Name Assigned</option> 
                        </select>
                        
                        <input type="text" id="condition2" name="condition2"></input>

                        <select name="condition3" id="condition3" value="">
                        <option value="ASC">ASC</option> 
                        <option value="DESC">DESC</option>
                        
                        <input type="submit" value="Post">
                        

                       <table>
                       <th>Ticket ID#</th> 
                       <th>Inquiry ID#</th>
                       <th>Inquiry</th> 
                       <th>Status</th>
                       <th>Priority</th> 
                       <th>Severity</th>  
                       <th class = "assignid">Assigned ID#</th> 
                       <th>Name Assigned</th> 
                       <th class = "dt" >Date</th> 
                       
                       
                       <?php while($row = mysqli_fetch_array($res_data)){?>
                           <tbody>
                           <tr>
                               <td><?php echo $row['tid']; ?></td>
                               <td><?php echo $row['iid']; ?></td>
                               <td><?php echo $row['inquiry']; ?></td>
                               <td><?php echo $row['stat']; ?></td>
                               <td><?php echo $row['priority']; ?></td>
                               <td><?php echo $row['severity']; ?></td>
                               <td class = "assignid"><?php echo $row['assignid']; ?></td>
                               <td><?php echo $row['afname']. " ". $row['alname']; ?></td>
                               <td class = "dt"> <?php echo $row['dt'] ?></td>
                               <td>
                                   <a  class = "links" href="tdetails.php? id=<?php echo $row['tid']; ?>"><button>Open</button></a>
                                   <a  class = "links" href="code/components/delete.php? id=<?php echo $row['tid']; ?>"><button>Delete</button></a>
                               </td>
                           </tr>
                           </tbody>
                           <?php
                       }
                   ?>
                           </table>
                           </form>
                           <ul class="pagination">
                           <button><a href="?pageno=1">First</a></button>
                           <button class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                           <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a></button>
   
                       <?php   
                                   
                           for ($i=1; $i<=$total_pages; $i++) {   
                           if ($i == $pageno) {   
                               echo "<button><a href='?pageno=".$i."'>".$i." </a></button>";   
                                                }               
                           else  {   
                               echo "<a href='?pageno=".$i."'>".$i." </a>";     
                           }   
                           };     
                       ?>    
   
                           <button class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                           <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a></button>
                           <button><a href="?pageno=<?php echo $total_pages; ?>">Last</a></button>
                   </ul>
   </body>
   