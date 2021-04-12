<?php
	require_once('db.php');

	function validateUser($user_email, $password)
	{
		$conn = getConnection();
		$sql = "SELECT * FROM user WHERE Email = '{$user_email}' and Password = '{$password} '";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0)
		{
			return true;
		}

		else
		{
			return false;
		}

	}

?>