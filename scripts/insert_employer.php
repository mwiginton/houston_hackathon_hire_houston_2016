<?php
require_once '../classes/Mysql.php';

	// variables for input data
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	 
	// sql query for inserting data into database
	$sql_query = "INSERT INTO appuser(user_name,password, type) VALUES('$user_name','$password', '1');";
	$mysqlObj = new Mysql();
	if($stmt = $mysqlObj->conn->prepare($sql_query)) {
		$stmt->execute();
		//$stmt->close();
	}
    
    //$employee_id = mysql_insert_id();
    
    $sql_query = " INSERT INTO employer(user_id,name,phone) VALUES(1,'$name','$phone');";
	$mysqlObj = new Mysql();
	if($stmt = $mysqlObj->conn->prepare($sql_query)) {
		$stmt->execute();
		$stmt->close();
	}
    
?>