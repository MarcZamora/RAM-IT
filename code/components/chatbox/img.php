 
        <div id="content">
        <form method="POST" action="code/components/chatbox/imgp.php" enctype="multipart/form-data">
                        <input type="hidden" name="tid" id="tid" value="<?=$_GET["id"]; ?>" required>
                        <input type="hidden" name="id" id="id" value="<?=$_SESSION['id'];?>" required>
                        <input type="hidden" name="name" id="name" value="<?=$_SESSION['fname']. " " . $_SESSION['lname']; ?>" required>
                        <input type="hidden" name="position" id="position" value="<?=$_SESSION['pstion']; ?>" required>
                        <?php if ($row['iid'] == $_SESSION['id'] || $row['assignid'] == $_SESSION['id'] || $_SESSION['pstion'] == 'supervisor') { ?>
                        <?php if ($row['stat'] == "open") { ?>
                <input  type="file" name="uploadfile" value="" required/>
                <button type="submit" name="upload">UPLOAD</button>
                <?php } } ?>   
        </form>    
                        </div>