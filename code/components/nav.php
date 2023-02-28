<style>
::-webkit-scrollbar {
	width: 8px;
  }
  /* Track */
  ::-webkit-scrollbar-track {
	background: #f1f1f1;  
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
	background: #888; ; 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
	background: #555; ; 
  } @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
	:root{--header-height: 3rem;
	--nav-width: 68px;
	--first-color: #ffa600;
	--first-color-light: #000000;
	--white-color: #F8F9FA;
	--body-font: 'Nunito', sans-serif;
	--normal-font-size: 1rem;
	--z-fixed: 100}
	
	
	*,::before,::after{box-sizing: border-box}
	body{position: relative;
	  margin: var(--header-height) 0 0 0;
	  padding: 0 1rem;
	  font-family: var(--body-font);
	  font-size: var(--normal-font-size);
	  transition: .5s}
	  
	  a{text-decoration: none}
	  
	  .header{width: 100%;
	  height: var(--header-height);
	  position: fixed;
	  top: 0;
	  left: 0;
	  display: flex;
	  align-items: center;
	  justify-content: space-between;
	  padding: 0 1rem;
	  background-color: var(--white-color);
	  z-index: var(--z-fixed);
	  transition: .5s}
	  
	  .header_toggle{color: var(--first-color);
	  font-size: 1.5rem;
	  cursor: pointer}
	  
	  .header_img{width: 35px;
	  height: 35px;display: flex;
	  justify-content: center;
	  border-radius: 50%;
	  overflow: hidden}
	  
	  .header_img img{width: 40px}
	  
	  .l-navbar{position: fixed;
		top: 0;
		left: -30%;
		width: var(--nav-width);
		height: 100vh;
		background-color: var(--first-color);
		padding: .5rem 1rem 0 0;
		transition: .5s;
		z-index: var(--z-fixed)}
		
		.nav{height: 100%;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		overflow: hidden}.nav_logo, .nav_link{display: grid;
		grid-template-columns: max-content max-content;
		align-items: center;
		column-gap: 1rem;
		padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;
		color: black}
		
		.nav_logo-name{color: black;
		font-weight: 700}
		  
		.nav_link{position: relative;
		color: var(--first-color-light);
		margin-bottom: 1.5rem;
		transition: .3s}
		  
		.nav_link:hover{color: var(--white-color)}
		
		.nav_icon{font-size: 1.25rem}.show{left: 0}
		
		.body-pd{padding-left: calc(var(--nav-width) + 1rem)}
		
		.active{color: var(--white-color)}.active::before{content: '';
		position: absolute;
		left: 0;
		width: 2px;
		height: 32px;
		background-color: var(--white-color)}
		
		/*vh to 100% so can reach that max of the divisions will be added*/
		.height-100{height:100%}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}
		
		.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}
		
		.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}
		
		.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}

.nav_link .badge { position: absolute; top: 5px; left: 2px; padding: 5px 10px; border-radius: 50%; background-color: red; color: white; z-index: -1;}
</style>



<?php
require 'code/components/connect.php';
if ($_SESSION['pstion'] == "student"){
    $nsql = "SELECT * from ticket where stat = 'open' AND notifstus = 0 AND iid = " .$_SESSION['id']. " ORDER BY notifdti desc";
    } 
    elseif ($_SESSION['pstion'] == "it")
    {
    $nsql = "SELECT * from ticket where  stat = 'open' AND notifits = 0 AND assignid = " .$_SESSION['id']. " ORDER BY notifdts desc";
    }
    else{
	$nsql = "SELECT * from ticket where stat='pending' OR stat = 'open' AND iid = " .$_SESSION['id']. " AND notifstus = 0  ORDER BY notifdti desc";
    }
                            $nresult = mysqli_query($con, $nsql);
                            $i = 0;
?>


              

<div class="l-navbar" id="nav-bar">
                <nav class="nav">
                    <div> <a href="#" class="nav_logo"> <i class="fa-solid fa-list fa-xl" style="color:black;margin-left:-4px;"></i> <span class="nav_logo-name">RAM-IT</span> </a>
                        <div class="nav_list">
                            <a href="home.php?link=home" class="nav_link <?php if ($page == 'home') {echo 'active';} else {echo '';}?>"> <i class='bx bx-home nav_icon'></i> <span class="nav_name">Home</span> </a>
                            <a href="profile.php?link=profile" class="nav_link <?php if ($page == 'profile') {echo 'active';} else {echo '';}?>"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a>
                            <a href="ticket.php?link=ticket" class="nav_link <?php if ($page == 'ticket') {echo 'active';} else {echo '';}?>"> <i class='bx bx-envelope nav_icon'></i> <span class="nav_name">All Tickets</span> </a>
                            <a href="notification.php?link=notif" class="nav_link <?php if ($page == 'notif') {echo 'active';} else {echo '';}?>" > <span class="badge"><?php while($nrow = mysqli_fetch_array($nresult)){ $i++; } if( $i == 0) { } else{echo $i;} ?></span><i class='fas fa-bell nav_icon'></i> <span class="nav_name">Notification</span> </a>
                            <a href="ticketo.php?link=ticketo" class="nav_link <?php if ($page == 'ticketo') {echo 'active';} else {echo '';}?>"> <i class="fa-solid fa-lock-open 2px"></i> <span class="nav_name"><?php if ($_SESSION['pstion'] == 'it' ){?>Assigned Tickets<?php } else {echo "Open Tickets";}?></span> </a> 
                            <a href="ticketc.php?link=ticketc" class="nav_link <?php if ($page == 'ticketc') {echo 'active';} else {echo '';}?>"> <i class="fa-solid fa-lock"></i> <span class="nav_name">Closed Tickets</span> </a> 
                            <a href="ittadd.php" class="nav_link"> <i class="fa-solid fa-plus"></i> <span class="nav_name">Add Ticket</span></a>
                        
                        
                        </div>
                    </div> <a href="code/components/logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
                </nav>
            </div>

            
            