<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>	
					    <?php

						if (isset($_GET['pageno'])) {
							$pageno = $_GET['pageno'];
						} else {
							$pageno = 1;
						}
						$no_of_records_per_page = 10;
						$offset = ($pageno-1) * $no_of_records_per_page;
				
						$conn=mysqli_connect("localhost","root","","ramit");
						// Check connection
						if (mysqli_connect_errno()){
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
							die();
						}
				
						$total_pages_sql = "SELECT COUNT(*) FROM ticket ";
						$result = mysqli_query($conn,$total_pages_sql);
						$total_rows = mysqli_fetch_array($result)[0];
						$total_pages = ceil($total_rows / $no_of_records_per_page);
				
						$sql = "SELECT * from ticket where assignid = '".$_SESSION['id']."'LIMIT $offset, $no_of_records_per_page";
						$res_data = mysqli_query($conn,$sql);?>	

						
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
							</td>
						</tr>
						</tbody>
						<?php
					}
				?>
						</table>
			<ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    	</ul>
</body>
