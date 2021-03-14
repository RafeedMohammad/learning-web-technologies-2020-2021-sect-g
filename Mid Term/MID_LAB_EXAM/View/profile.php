<?php
    session_start();
         
?>



<!DOCTYPE html>
<html>
<head>

<title>Profile</title>

</head>    


<body>
    
  
       <table>

</fieldset>
			<legend><b> Profile </b> </legend>

			

                Email    : <?php echo $_SESSION['email'] ?><br><hr>
               
                <a href ="EDIT_PROFILE.php">Edit Profile</a><br><br>
                
               

               
                
			<br> <br>
					
		</fieldset>
                        
        </table>
    
    </form>
</body>
</html>