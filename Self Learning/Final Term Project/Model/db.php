<?php

	$dbname = "medico";
	$dbuser	= "root";
	$dbpass	= "";
	$host	= "localhost:3325";


	function getConnection(){

		global $dbname, $dbuser, $dbpass, $host;

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


?>