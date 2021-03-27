<?php 
    
    
    $id=$_GET['id'];
    echo $_GET['id'];
    require('../model/userModel.php');
    $user=getUserbyId($id);

    if(isset($_POST['signup'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

        $user = [	
            'username'	=> $username, 
            'password'	=> $password, 
            'email'		=>$email, 
            'type'		=>$user['type']
        ];

        $status =updateUser($user,$id);
        echo $status;
        header('location: ../view/user_list.php');
       
    }
    else{
        echo "error";
        header('location: ../view/edit.php');

    }
    
   

    
    //echo $user;

    ;
?>