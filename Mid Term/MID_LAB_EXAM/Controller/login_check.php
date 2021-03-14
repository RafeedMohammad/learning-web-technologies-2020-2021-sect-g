<?php

	session_start();

	if(isset($_POST['submit'])){
        $users = file_get_contents('../Model/users.json');
        $users = json_decode($users);


		$username = $_POST['email'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{


            foreach($users as $user)
            {
                if($user->email == $username && $user->password == $password && $user->role == "admin"){
                    //echo "Logged in";
                    $_SESSION['flag'] = true;
                    header('location: ../View/AdminDashboard.html');
                    break;
                }
                else if($user->email == $username && $user->password == $password && $user->role == "admin"){
                    $_SESSION['flag'] = true;
                    header('location: ../View/UserDashboard.html');
                    break;
                }
                
                else
                {
                    echo "Invalid Password or User";
                    break;
                }
            }

			
		}
	}


?>