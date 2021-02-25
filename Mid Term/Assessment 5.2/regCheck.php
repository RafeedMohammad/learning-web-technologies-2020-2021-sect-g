<?php
	session_start();

	if(isset($_POST['signup'])){

        $name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
        $gender = $_POST['gender'];
        $day = $_POST['dob1'];
        $month = $_POST['dob2'];
        $year = $_POST['dob3'];
    

		if($username == "" || $password == "" || $email == ""){
			echo "Fields cannot be empty";
		}else{
			if($password == $repass){

				$user = ['email'=> $email, 'password'=> $password, 'username'=>$username, 'gender'=>$gender, 'dob1'=>$day, 
                        'dob2'=>$month, 'dob3'=>$year];

                $_SESSION['email'] = $email;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
                $_SESSION['gender'] = $gender;
				$_SESSION['dob1'] = $day;
                $_SESSION['dob2'] = $month;
                $_SESSION['dob3'] = $year;
				$_SESSION['current_user'] = $user;
                $_SESSION['name'] = $name;

				header('location: login.php');
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>