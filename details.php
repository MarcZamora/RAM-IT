<?php
            if ($_SESSION['pstion'] == "supervisor") {
            echo  
        '<form method="POST" action="update.php?id='
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
        .'"name="assignid">'
        ."<br> <br>"
		.'<label>Assign Firstname:  </label><input type="text" value="'
        .$row["afname"] 
        .'"name="afname">'
        ."<br> <br>"
		.'<label>Assign Lastname:  </label><input type="text" value="'
        .$row["alname"]
        .'"name="alname">'
        ."<br> <br>"
		.'<label>Date:  </label>'  
        .$row["dt"]
        ."<br> <br>"
		.'<input type="submit" name="submit">'
        ."          "
		.'<a href="ticket.php"><button>Back</button></a>'
	    .'</form>';}
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
        .'</div>'
    .'</div>';}
             else{
        echo  
        '<form action="update.php" method="post">' 
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
        .'</div>'
    .'</div>';
    }
    ?>