<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<link href="code/css/home.css" rel="stylesheet" type="text/css">
<link href="code/css/tstu.css" rel="stylesheet" type="text/css">
<body>
<div class="container">
					<table>
					<th>Ticket ID#</th> 
					<th>Inquiry ID#</th>
					<th>Inquiry</th> 
					<th>Status</th> 
					<th>Assigned ID#</th> 
					<th>Name Assigned</th> 
					<th>Date</th> 
					

					<?php
					require 'connect.php';				
					$query=mysqli_query($con,"SELECT iid,tid, inquiry, stat, assignid, afname, alname, assignid, dt FROM ticket where iid =" .$_SESSION['id']);
					while($row=mysqli_fetch_array($query)){

						?>
						<tbody>
						<tr>
							<td><?php echo $row['tid']; ?></td>
							<td><?php echo $row['iid']; ?></td>
							<td><?php echo $row['inquiry']; ?></td>
							<td><?php echo $row['stat']; ?></td>
							<td><?php echo $row['assignid']; ?></td>
							<td><?php echo $row['afname']. " ". $row['alname']; ?></td>
							<td><?php echo $row['dt'] ?></td>
							<td>
								<a href="tdetails.php? id=<?php echo $row['tid']; ?>"><button>Open</button></a>
							</td>
						</tr>
						</tbody>
						<?php
					}
				?>
						</table>
				</div>
</body>
</html>