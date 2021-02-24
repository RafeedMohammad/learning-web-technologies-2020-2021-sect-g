<?php

    $myemail =  "rafeed.cse@gmail.com";
    $mypass = "12345";

    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        if($email == $myemail and $password == $mypass)
        {
            if(isset($_POST['remember']))
            {
                setcookie('email', $email, time() + 60*60);
            }

            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['flag'] = true;
            header("location: home.php");
        }

        else{
            $_SESSION['flag'] = false;
            echo "Email or Password is invalid";
        }

    }

    else{
        header("location: login.php");
    }
?>
