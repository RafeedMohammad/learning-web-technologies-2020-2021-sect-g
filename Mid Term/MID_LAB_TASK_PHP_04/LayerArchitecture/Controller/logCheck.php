<?php

	
	if(isset($_POST['submit'])){
        $users = file_get_contents('C:\xampp\htdocs\Web\Mid Term\MID_LAB_TASK_PHP_04\LayerArchitecture\Model\users.json');
        $users = json_decode($users);


		$username = $_POST['email'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{


            foreach($users as $user)
            {
                if($user->email == $username && $user->password == $password){
                    echo "Logged in";
                    break;
                }else{
                    echo "Invalid email or password";
                    break;
                }
            }

			
		}
	}


?>