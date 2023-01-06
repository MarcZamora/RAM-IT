<?php
            if ($_SESSION['pstion'] == "supervisor") {
            echo  
        '<form method="POST" action="code/components/update.php?id='
        .$id 
        .'">'
		.'<label>Inquirer ID:  </label>' 
        .$row["iid"]
        ."<br> <br>"
		.'<label>Inquiry:  </label> '
        .$row["inquiry"]
        ."<br> <br>"
        .'<input type="hidden" value="open" name="stat">'
		.'<label>Assign ID:  </label><input type="text" value="'
        .$row["assignid"]
        .'"name="assignid" required>'
        ."<br> <br>"
		.'<label>Assign Firstname:  </label><input type="text" value="'
        .$row["afname"] 
        .'"name="afname" required>'
        ."<br> <br>"
		.'<label>Assign Lastname:  </label><input type="text" value="'
        .$row["alname"]
        .'"name="alname" required>'
        ."<br> <br>"
		.'<label>Date:  </label>'  
        .$row["dt"]
        ."<br> <br>"
		.'<input type="submit" name="submit">'
        ."          "
	    .'</form>'
        .'<a href="ticket.php"><button>Back</button></a>';}
             elseif ($_SESSION['pstion'] == "it") {
        echo  
        '<table>'
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
                .'Inquiry: ' 
                . "  "
                .$row['inquiry']
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign ID: ' 
                . "  "
                .$row["assignid"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign Firstname: ' 
                . "  "
                .$row["afname"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign Lastname: ' 
                . "  "
                .$row["alname"]
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
            
            .'</table>'
            .'<br>'
            .'<a href="ticket.php"><button>Back</button></a>';
        }
             else{
        echo  
        '<table>'
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
                .'Inquiry: ' 
                . "  "
                .$row['inquiry']
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign ID: ' 
                . "  "
                .$row["assignid"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign Firstname: ' 
                . "  "
                .$row["afname"]
                .'</td>'
                .'<td>'
                .'</td>'
            .'</tr>'
            .'<tr>'
                .'<td>'
                .'Assign Lastname: ' 
                . "  "
                .$row["alname"]
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
            .'</table>'
            .'<br>'
            .'<a href="ticket.php"><button>Back</button></a>';
    }
    ?>

