<?php
    session_start();

    $connection = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($connection, 'medico');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $repass = $_POST['repass'];

    $query = "SELECT * FROM user WHERE Email  = '$email' ";
    $result = mysqli_query($connection, $query);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        echo "The email is already registered";
    }

    else if($password != $repass)
    {
        echo "Passwords do not match";
        exit();
    }

    else
    {
        $reg = " INSERT INTO user(Name, Email, Password, Gender, Role)
        VALUES('$name', '$email', '$password', '$gender', '$role') ";
        mysqli_query($connection, $reg);
        echo "User registered succesfully";
    }



?>