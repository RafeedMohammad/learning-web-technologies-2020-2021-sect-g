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
        
            <table align="center" width="70%" style="background-color:powderblue;" >
                <thead>
                
                    <tr>
                        <th align="left"><img src="logo.jpg" width="100" height="100"></th>
                        <td><p><a href="home.php"> Home</a></p></td>
                        <td><p><a href="logout.php"> Logout</a></p></td>
                        <td><p><a href="registration.php"> Registration</a></p></td>
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

                    <th colspan="4"><h1>Welcome home,  <?php echo $_SESSION['email'];?></h1></th> 
                </tr>
                <tfoot>
                    <tr>
                        <td colspan="4" style="border:1pt solid black;" align = "center">Copyright @ 2021</td>
                    </tr>
                </tfoot>
            </table>
           
    </body>
    </html>

<?php
	}else{
		header('location: login.php');
	}



?>