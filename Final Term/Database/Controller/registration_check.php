<?php
    session_start();

    $connection = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($connection, 'medico');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['email'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    $query = "SELECT * FROM user WHERE email  = '$email' ";
    $result = mysqli_query($connection, $query);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        echo "The email is already registered";
    }

    else
    {
        $reg = " INSERT INTO user(name, email, password, gender, role) 
        VALUES('$name', '$password', '$gender', '$role') ";
        mysqli_query($connection, $reg);
        echo "User registered succesfully";
    }



?>