<?php
    session_start();
	if(isset($_SESSION['flag'])){
    

?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <nav>

        
        </nav>

        <form method="get" action="">
        
            <table align="center" width="70%" style="background-color:powderblue;" >
                <thead>
                
                    <tr>
                        <th align="left"><img src="logo.jpg" width="100" height="100"></th>
                        <td><p><a href="dashboard.php"> Home</a></p></td>
                        <td><p><a href="logout.php"> Logout</a></p></td>
                        <td><p><a href=""> Registration</a></p></td>
                    </tr>

                </thead>
               
                 <tr>
                     <td>
                          &nbsp;<h1>Account</h1>
                         
                         <ul>
                             <a href="dashboard.php"><li>Dashboard</li></a>
                             <a href="profile.php"><li>View Profile</li></a>
                             <a href="edit_profile.php"><li>Edit Profile</li></a>
                             <a href="profile_pic.php"><li>Change Profile Picture</li></a>
                             <a href=""><li>Change Password</li></a>
                             <a href="logout.php"><li>Logout</li></a>
                         </ul>
                        </td>
                    
                        <th><h1>Email:<?php echo $_SESSION['email'];?></h1></th> 
                    </tr>
                    <tr>
                        <th colspan="4">Name:<?php echo $_SESSION['name'];?></th>
                    </tr>
                    <tr>
                        <th colspan="4">User Name:<?php echo $_SESSION['username'];?></th>
                    </tr>
                    <tr>
                        <th colspan="4">Gender:<?php echo $_SESSION['gender'];?></th> <br>
                    </tr>  
                    <tr>
                        <th colspan="4">Date of Birth: <?php echo $_SESSION['dob1']."/".$_SESSION['dob2']."/".$_SESSION['dob3'];?></th> <br>
                    </tr> 
                   
                <tfoot>
                    <tr>
                        <td colspan="4" style="border:1pt solid black;" align = "center">Copyright @ 2021</td>
                    </tr>
                </tfoot>
            </table>

    </form>
           
    </body>
    </html>

<?php
	}else{
		header('location: login.php');
	}



?>