<?php
require "../connect.php";

// Retrieve the selected data option from the AJAX request
$data_option = $_POST['option'];


// Query the database to fetch the count based on the selected option
$dosql = "SELECT COUNT(*) as do_count FROM ticket WHERE stat='open' AND assignid='2' AND dtm = '" . $data_option . "'";
$doresult = $con->query($dosql);
$do_count = 0;
if ($doresult) {
    $do_row = $doresult->fetch_assoc();
    $do_count = $do_row['do_count'];
}

$dcsql = "SELECT COUNT(*) as dc_count FROM ticket WHERE stat='closed' AND assignid='2' AND dtm = '" . $data_option . "'";
$dcresult = $con->query($dcsql);
$dc_count = 0;
if ($dcresult) {
    $dc_row = $dcresult->fetch_assoc();
    $dc_count = $dc_row['dc_count'];
}

$dpsql = "SELECT COUNT(*) as dp_count FROM ticket WHERE stat='pending'  AND dtm = '" . $data_option . "'";
$dpresult = $con->query($dpsql);
$dp_count = 0;
if ($dpresult) {
    $dp_row = $dpresult->fetch_assoc();
    $dp_count = $dp_row['dp_count'];
}

// Query the database to fetch the count based on the selected option
$dosql1 = "SELECT COUNT(*) as do_count1 FROM ticket WHERE stat='open' AND assignid='3' AND dtm = '" . $data_option . "'";
$doresult1 = $con->query($dosql1);
$do_count1 = 0;
if ($doresult1) {
    $do_row1 = $doresult1->fetch_assoc();
    $do_count1 = $do_row1['do_count1'];
}


$dcsql1 = "SELECT COUNT(*) as dc_count1 FROM ticket WHERE stat='closed' AND assignid='3' AND dtm = '" . $data_option . "'";
$dcresult1 = $con->query($dcsql1);
$dc_count1 = 0;
if ($dcresult1) {
    $dc_row1 = $dcresult1->fetch_assoc();
    $dc_count1 = $dc_row1['dc_count1'];
}


$dpsql1 = "SELECT COUNT(*) as dp_count1 FROM ticket WHERE stat='pending' AND  dtm = '" . $data_option . "'";
$dpresult = $con->query($dpsql1);
$dp_count1 = 0;
if ($dpresult) {
    $dp_row1 = $dpresult->fetch_assoc();
    $dp_count1 = $dp_row1['dp_count1'];
}


// Process the result and create an array for JSON
$data = array(
    "labels" => ["Open", "Pending", "Closed"], // Your x-axis labels
    "datasets" => array(
        array(
            "label" => "2. ITRO EXAMPLE",
            "data" => [$do_count, $dp_count, $dc_count], // Your y-axis data for Dataset 1
            "borderColor" => "rgba(75, 192, 192, 1)",
            "backgroundColor" => "rgba(75, 192, 192, 0.2)",
            // Add any other dataset-specific options here
        ),
        array(
            "label" => "3. EXAMPLE ITRO",
            "data" => [$do_count1, $dp_count, $dc_count1], // Your y-axis data for Dataset 1
            "borderColor" => "rgba(0, 127, 0, 1)",
            "backgroundColor" => "rgba(0, 127, 0, 0.2)",
            // Add any other dataset-specific options here
        ),
        
    ),
);

// Close the database connection
$con->close();

// Convert the data array to JSON and echo it
echo json_encode($data);
?>
