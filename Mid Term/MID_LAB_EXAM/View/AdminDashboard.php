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
	<center>
		<h1>Welcome Bob!</h1>
		<a href="profile.php">Profile</a>
		<br/>
		<a href="change_password.html">Change Password</a>
		<br/>
		<a href="userList.php">View Users</a>
		<br/>
		<a href="login.php">Logout</a>
	</center>
           
    </body>
    </html>


 <?php
    }else{
        header('location: login.php');
    }



?>
















