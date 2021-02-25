<?php
   // session_start();

    $myemail =  $_SESSION['email'];
    $mypass = $_SESSION['password'];;

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
            header("location: dashboard.php");
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
