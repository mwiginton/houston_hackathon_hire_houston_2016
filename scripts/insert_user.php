<?php
require_once '../classes/Mysql.php';
	// variables for input data
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$type = $_POST['type'];
    
    $sql_query = "INSERT INTO appuser(user_name, password, type) VALUES('$user_name','$password', '$type');";
    $mysqlObj = new Mysql();

	if($stmt = $mysqlObj->conn->prepare($sql_query)) {
		$stmt->execute();
		$stmt->close();
	}

		header('location: ../form-appuser.html');
?>
