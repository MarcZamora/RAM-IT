<?php
// get the selected value from the query string
$SV = $_GET["SV"];

// generate the HTML code for the next form element based on the selected value
if ($SV == "Desktop") {$html = '<input type="number" name="is" id="is" value="2">';} 
elseif ($SV == "Laptop") {$html = '<input type="number" name="is" id="is" value="2">';} 
else {$html = ' ';}

// return the HTML code
echo $html;
?>
