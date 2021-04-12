<?php
    session_start();
    require_once('../Model/loginModel.php');



	if(isset($_POST['submit'])){
       

		$user_email = $_POST['user_email'];
		$password = $_POST['password'];

		if($user_email == "" || $password == "")
        {
			echo "null input...";
		}

        else{

            $status = validateUser($user_email, $password);
            if($status)
            {
                $_SESSION['flag'] = true;
                $_SESSION['user_email'] = $user_email;
                header("Location: ../View/managerDashboard.php");
            }
            else
            {
                echo "Invalid login credentials";
            }
			
		}
	}


?>