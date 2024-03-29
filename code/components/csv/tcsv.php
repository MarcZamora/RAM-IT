<?php 
 
// Load the database configuration file 
include_once '../connect.php'; 
 
// Fetch records from database 
$query = $con->query("SELECT * FROM ticket ORDER BY tid ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Tickets " . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('tid', 'iid', 'iname', 'email', 'img', 'inqry', 'itype', 'fdes', 'stat', 'priority', 'severity', 'filename', 'assignid', 'aname', 'dt' , 'dta' , 'dtc'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['tid'], $row['iid'], $row['iname'], $row['email'], $row['img'], $row['inqry'], $row['itype'], $row['fdes'], $row['stat'], $row['priority'], $row['severity'], $row['filename'], $row['assignid'], $row['aname'],  $row['dt'] ,  $row['dta'] ,  $row['dtc']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>