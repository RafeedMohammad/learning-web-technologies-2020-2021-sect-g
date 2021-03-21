<?php

    session_start();
	require_once('../Model/userModel.php');

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        $status = validateUser($email, $password);

        if($status)
        {
            $_SESSION['flag'] = true;
			$_SESSION['email'] = $username;
            header('location: ../View/adminDashboard.php');
        }

        else
        {
            echo "Email or password is incorrect!";
        }
       
    }


    



?>