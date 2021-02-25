<?php

	session_start();

	if(isset($_POST['login'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email == "" || $password == ""){
			echo "null input...";
		}else{

			$user = $_SESSION['current_user'];
            

			if($user['email'] == $email and $user['password'] == $password){
				$_SESSION['flag'] = true;
				header('location: dashboard.php');
			}else{
				echo "invalid user or password doesn't match";
			}
		}
	}


?>