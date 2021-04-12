<?php
    require_once('C:\xampp2\php\PEAR\db.php');


	if(isset($_POST['submit'])){
       

		$user_email = $_POST['email'];
		$password = $_POST['password'];

		if($user_email == "" || $password == ""){
			echo "null input...";
		}

        else{

            $conn = getConnection();
            $sql = "SELECT * FROM user WHERE Email = {$email} and Password = {$password}";
            $result = mysqli_query($conn, $sql);

            $row = mysql_fetch_array($result);

            if($row['Email'] == $email && $row['password'] == $password)
            {
                $_SESSION['flag'] = true;
                header('location: ../View/managerDashboard.php');
            }

            else
            {
                echo "Invalid login credentials";
            }
			
		}
	}


?>