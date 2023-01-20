<?php
date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

            if ($_SESSION['pstion'] == "supervisor") {
            echo  
        '<img src="./img/' . $row['img']. '">'
        ."<br> <br>"    
        .'<form method="POST" action="code/components/update.php?id='
        .$id 
        .'">'
		.'<label>Inquirer ID:  </label>' 
        .$row["iid"]
        ."<br> <br>"
		.'<label>Inquiry:  </label> '
        .$row["inquiry"]
        ."<br> <br>"
        .'<label>Email:  </label>' 
        .$row["email"]
        ."<br> <br>"
        .'<label for="priority">Type: </label>'
		.'<select type="select" name="itype" value="'
        .$row["itype"]
        .'" id="priority" required>'  
        .'<option value="'
        .$row["itype"]
        .'">'
        .$row["itype"]
        .'</option>'
		.'<option value="hardware">Hardware</option>'  
		.'<option value="account">Account</option>'  
		.'<option value="others">others</option>'   
		.'</select>'   
        ."<br> <br>"

        .'<label>Full description:  </label> '
        .$row["fdes"]
        ."<br> <br>"

        .'<input type="hidden" value="open" name="stat">'

        .'<label for="priority">Priority: </label>'
		.'<select type="select" name="priority" value="'
        .$row["priority"]
        .'" id="priority" required>'  
        .'<option value="'
        .$row["priority"]
        .'">'
        .$row["priority"]
        .'</option>'
		.'<option value="1">1</option>'  
		.'<option value="2">2</option>'  
		.'<option value="3">3</option>'  
		.'<option value="4">4</option>'  
		.'<option value="5">5</option>'   
		.'</select>'   
        ."  min 1 - 5 max"
        ."<br> <br>"

        .'<label for="severity">Severity: </label>'
		.'<select type="select" name="severity" value="'
        .$row["severity"]
        .'" id="severity" required>' 
        .'<option value="'
        .$row["severity"]
        .'">'
        .$row["severity"]
        .'</option>'   
		.'<option value="1">1</option>'  
		.'<option value="2">2</option>'  
		.'<option value="3">3</option>'  
		.'<option value="4">4</option>'  
		.'<option value="5">5</option>'   
		.'</select>'   
        ."  min 1 - 5 max"
        ."<br> <br>"
        .'<label>Date:  </label>'  
        .$row["dt"]
        ."<br> <br>"    
        .'<label>The IT specialist that is Assigned for the Ticket:</label> <br> <br>'
        .'<label> ID:   </label><input type="text" value="'
        .$row["assignid"]
        .'"name="assignid" required>';
        echo
		'<label> Firstname:   </label><input type="text" value="'
        .$row["afname"] 
        .'"name="afname" required>'
		.'<label> Lastname:   </label><input type="text" value="'
        .$row["alname"]
        .'"name="alname" required>'
        ."<br> <br>";
        ?>
        <?php echo  '<input type="hidden" name="dta" value="'. $mysqltime . '" id="dta" required>'?>
        <?php
        echo
        '<label>Date assigned:  </label>'  
        .$row["dta"]
        ."<br> <br>"  
		.'<input type="submit" name="submit">'
        ."          "
	    .'</form>'
         ."<br> <br>"  
        .'<img src="./img/'. $row['filename'] .'" style = "width: 500px;">';
        echo
        '<br>'
        .'<a href="ticket.php"><button>Back</button></a>';
        
}
             elseif ($_SESSION['pstion'] == "it") {
                echo  
                '<img src="./img/' . $row['img']. '">'
                .'<table>'
                    .'<tr>'    
                        .'<td>'
                        .'inquirer ID: ' 
                        . "  "
                        .$row['iid']
                        .'</td>'
                        .'<td>'
                        .'</td>'
                    .'</tr>'
                    .'<tr>'    
                        .'<td>'
                        .'Email:  ' 
                        . "  "
                        .$row['email']
                        .'</td>'
                        .'<td>'
                        .'</td>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'
                        .'Inquiry: ' 
                        . "  "
                        .$row['inquiry']
                        .'</td>'
                        .'<td>'
                        .'</td>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'
                        .'Type: ' 
                        . "  "
                        .$row['itype']
                        .'</td>'
                        .'<td>'
                        .'</td>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'
                        .'Full description: ' 
                        . "  "
                        .$row['fdes']
                        .'</td>'
                        .'<td>'
                        .'</td>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'
                        .'Priority: ' 
                        . "  "
                        .$row['priority']
                        .'</td>'
                        .'<td>'
                        .'</td>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'
                        .'Severity: ' 
                        . "  "
                        .$row['severity']
                        .'</td>'
                        .'<td>'
                        .'</td>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'
                        . "Date: "
                        . "  "
                        .$row["dt"]
                        .'</td>'
                    .'</tr>'
                    .'<tr><td></td></tr>'
                    .'<tr><td></td></tr>'
                    .'<tr><td></td></tr>'
                    .'<tr>'
                        .'<td>The IT specialist that was Assigned for the Ticket:</td>'
                    .'</tr>'
                    .'<tr><td></td></tr>'
                    .'<tr><td></td></tr>'
                    .'<tr>'
                .'<td>'
                .' ID: ' 
                . "  "
                .$row["assignid"]
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .' Name: ' 
                . "  "
                .$row["afname"]
                .'    '
                .$row["alname"]
                .'</td>'
            .'</tr>'
            .'<tr>'
                        .'<td>'
                        . "Date assigned: "
                        . "  "
                        .$row["dta"]
                        .'</td>'
                    .'</tr>'
           
            .'</table>'
            ."<br> <br>"  
            .'<img src="./img/'. $row['filename'] .'" style = "width: 500px;">';
            echo
            '<br>'
            .'<a href="ticket.php"><button>Back</button></a>';
        }
             else{
                echo
         '<img src="./img/' . $row['img']. '">'         
        .'<table>'
            .'<tr>'    
                .'<td>'
                .'inquirer ID: ' 
                . "  "
                .$row['iid']
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
                    .'<tr>'    
                    .'<td>'
                    .'Email:  ' 
                    . "  "
                    .$row['email']
                    .'</td>'
                    .'<td>'
                    .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Inquiry: ' 
                . "  "
                .$row['inquiry']
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Priority: ' 
                . "  "
                .$row['priority']
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
            .'<td>'
            .'Type: ' 
            . "  "
            .$row['itype']
            .'</td>'
            .'<td>'
            .'</td>'
            .'</tr>'
            .'<tr>'
            .'<td>'
            .'Full description: ' 
            . "  "
            .$row['fdes']
            .'</td>'
            .'<td>'
            .'</td>'
            .'</tr>'
            .'<tr>'
            .'<td>'
            . "Date: "
            . "  "
            .$row["dt"]
            .'</td>'
            .'</tr>'
            .'<tr><td></td></tr>'
            .'<tr><td></td></tr>'
            .'<tr><td></td></tr>'
            .'<tr>'
                .'<td>The IT specialist that was Assigned for the Ticket:</td>'
            .'</tr>'
            .'<tr><td></td></tr>'
            .'<tr><td></td></tr>'
            .'<tr>'
                .'<td>'
                .' ID: ' 
                . "  "
                .$row["assignid"]
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .' Name: ' 
                . "  "
                .$row["afname"]
                .'    '
                .$row["alname"]
                .'</td>'
            .'</tr>'
            .'<tr>'
                        .'<td>'
                        . "Date assigned: "
                        . "  "
                        .$row["dta"]
                        .'</td>'
                    .'</tr>'
           
            .'</table>'
            .'<br>'
            ."<br> <br>"  
            .'<img src="./img/'. $row['filename'] .'" style = "width: 500px;">';
            require 'code/components/tpicupd.php';
            echo
            '<br>'
            .'<a href="ticket.php"><button>Back</button></a>';
            
        
    }
    ?>
   
