<?php
    session_start();

    $connection = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($connection, 'medico');

    
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $query = "SELECT * FROM user WHERE Email  = '$email' && Password = '$password' ";
    $result = mysqli_query($connection, $query);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        header('location: ../View/adminDashboard.php');
    }


    else
    {
        echo "Email or Password is incorrect!";
    }



?>