<?php
	require_once('db.php');

	function login()
	{
		$conn = getConnection();
		$sql = "SELECT * FROM users WHERE Email = {$email} and Password = {$password}";
		$result = mysqli_query($conn, $sql);

		$row = mysql_fetch_array($result);

	}

?>