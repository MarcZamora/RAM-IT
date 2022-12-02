<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<link href="home.css" rel="stylesheet" type="text/css">
<link href="table.css" rel="stylesheet" type="text/css">
<body>
					<?php
					$DATABASE_HOST = 'localhost';
					$DATABASE_USER = 'root';
					$DATABASE_PASS = '';
					$DATABASE_NAME = 'ramit';
					$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
					if (mysqli_connect_errno()) {
						exit('Failed to connect to MySQL: ' . mysqli_connect_error());
						
					}
				
					$query=mysqli_query($con,"SELECT tid, inquiry, stat, iid, afname, alname, assignid, dt FROM ticket where assignid =" .$_SESSION['id']);
					while($row=mysqli_fetch_array($query)){
						?>
						<table>
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
						</table>
						
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>