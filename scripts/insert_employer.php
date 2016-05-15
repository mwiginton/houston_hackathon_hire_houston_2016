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
		$stmt->close();
	}
    
    $employee_id = mysql_insert_id();
    
    $sql_query2 = " INSERT INTO employer(user_id,name,phone) VALUES('$employee_id','$name','$phone');";
	$mysqlObj2 = new Mysql();
	if($stmt2 = $mysqlObj2->conn->prepare($sql_query2)) {
		$stmt2->execute();
		$stmt2->close();
	}

	header('location: form-employer.html');
    
?>