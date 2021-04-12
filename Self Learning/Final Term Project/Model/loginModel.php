<?php
	require_once('db.php');

	function validateUser($user_email, $password)
	{
		$conn = getConnection();
		$sql = "SELECT * FROM user WHERE Email = '{$user_email}' and Password = '{$password} '";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		$role = $row['Role'];

		if(count($row) > 0)
		{
			return true;
		}

		else
		{
			return false;
		}	

	}

	function insertEmployee($employee){
		$conn = getConnection();
		$sql = "INSERT INTO users VALUES('', '{$employee['fName']}', '{$employee['lName']}', '{$employee['email']}', '{$employee['phone']}', '{$employee['password']}', '{$employee['dob']}', '{$employee['role']}', '{$employee['gender']}', '{$employee['profile_picture']}', '{$employee['salary']}' )";

		$result = mysqli_query($conn, $sql);
	    

		if($result){
			return true;
		}else{
			return false;
		}

	}

?>