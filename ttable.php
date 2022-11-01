<?php 
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'ramit';



// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


$sql = "SELECT tid, inquiry, stat, assignid, afname, alname FROM ticket where iid =" .$_SESSION['id'];
$result = $con->query($sql);

if ($result-> num_rows > 0) {
	echo"<table style = 'background-color: #D6EEEE; border: 5px solid black;' >".
	"<tr style = 'background-color: #96D4D4;'>" .
	"<th>tid</th>" .
	"<th>inquiry</th>" .
	"<th>stat</th>" .
	"<th>assignid</th>" .
    "<th>afname</th>" .
    "<th>alname</th>" .
	"</tr>";

// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>" . "<td>" . $row["tid"]. "<td>" . $row["inquiry"]. " <td> " . $row["stat"]. "<td>" . 
$row["assignid"] . "<td>" . $row["afname"] . "<td>" . $row["alname"] . "</tr>" . "<br>";

}

} else {
echo "0 results";
}

$con->close();
?>