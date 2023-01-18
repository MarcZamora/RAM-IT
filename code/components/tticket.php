<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

//student
if ($_SESSION['pstion'] == "student"){
    if(isset($_POST['search']))
    {
        $tfil = $_POST['tfil'];
        $ob = $_POST['ob'];
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $sql = "SELECT * FROM `ticket` WHERE iid = ".$_SESSION['id']. "&&". "".$tfil." LIKE '%".$valueToSearch."%' ORDER BY tid ".$ob." LIMIT $offset, $no_of_records_per_page";
        $search_result = filterTable($sql);
        
    }
     else {
        $sql = "SELECT * from ticket where iid = '".$_SESSION['id']."'LIMIT $offset, $no_of_records_per_page";
        $search_result = filterTable($sql);
    }

} 

// IT/SUP
else {
    if(isset($_POST['search']))
    {
        $tfil = $_POST['tfil'];
        $ob = $_POST['ob'];
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $sql = "SELECT * FROM `ticket` WHERE ".$tfil." LIKE '%".$valueToSearch."%' ORDER BY tid ".$ob." LIMIT $offset, $no_of_records_per_page";
        $search_result = filterTable($sql);
        
    }
     else {
        $sql = "SELECT * FROM `ticket` LIMIT $offset, $no_of_records_per_page";
        $search_result = filterTable($sql);
    }
}
// function to connect and execute the query
function filterTable($sql)
{
    $connect = mysqli_connect("localhost", "root", "", "ramit");
    $res_data = mysqli_query($connect, $sql);
    return $res_data;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP <?=$pageno?></title>
    </head>
    <body>
        
        <form action="ticket.php" method="post">
         
			<Select name="tfil" placeholder="Value To Search">
			<option value="tid">Ticket ID#</option> 
			<option value="iid">Inquiry ID#</option>
			<option value="inquiry">Inquiry</option> 
			<option value="stat">Status</option>
			<option value="priority">Priority</option> 
			<option value="severity">Severity</option>  
			<option value="assignid">Assigned ID#</option> 
			<option value="afname and alname">Name Assigned</option> 
			<option value="dt">Date</option> 
			</Select>

			<input type="text" name="valueToSearch" placeholder="Value To Search">
			
			<Select name="ob" placeholder="Value To Search">
			<option value="ASC">Ascending</option> 
			<option value="DESC">Descending</option>
			</Select>

            <input type="submit" name="search" value="Filter"><br><br>
            </form>
			<a href="ticket.php"><button>reset</button></a>
            
            <table>
                <tr>
                    	<th>Ticket ID#</th> 
                       <th>Inquiry ID#</th>
                       <th>Inquiry</th> 
                       <th>Status</th>
                       <th>Priority</th> 
                       <th>Severity</th>  
                       <th class = "assignid">Assigned ID#</th> 
                       <th>Name Assigned</th> 
                       <th class = "dt" >Date</th> 
                </tr>
            
      <!-- populate table from mysql database -->
      <?php while($row = mysqli_fetch_array($search_result)){?>
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
                    <ul class="pagination">
                           <button><a href="?pageno=1">First</a></button>
                           <button class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                           <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a></button>
   
                       <?php   
                                   
                           for ($i=1; $i<=$total_pages; $i++) {   
                           if ($i == $pageno) {   
                               echo "<button class = 'disabled'><a class = 'disabled' href='?pageno=".$i."'>".$i." </a></button>";   
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
</html>



