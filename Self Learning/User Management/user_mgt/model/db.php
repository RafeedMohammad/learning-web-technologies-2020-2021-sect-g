<?php

	$dbname = "web_user_mgt";
	$dbuser	= "root";
	$dbpass	= "";
	$host	= "localhost";


	function getConnection(){

		global $dbname, $dbuser, $dbpass, $host;

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


?>