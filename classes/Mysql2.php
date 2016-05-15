<?php

require_once 'includes/constants.php';

class Mysql2 {

	public $conn;

	function __construct()
	{
		$this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('there was a problem connecting to the db');
        
        
	}


	function verify_Username_and_Pass($un, $pwd)
	{

	

	$query = "SELECT * FROM appuser WHERE user_name = ? AND password = ? LIMIT 1";

	if($stmt = $this->conn->prepare($query)) {
		$stmt->bind_param('ss',$un, $pwd);
		$stmt->execute();

		if($stmt->fetch())
		{
			$stmt->close();
			return $un;
		}
	}

	}





}