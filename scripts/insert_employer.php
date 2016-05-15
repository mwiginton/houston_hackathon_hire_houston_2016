<?php
require_once '../classes/Mysql.php';

	// variables for input data
	$user_id = $_POST['user_id'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	 
	// sql query for inserting data into database
	$sql_query = "INSERT INTO appuser(user_name,password) VALUES('$user_name','$password');";
	$sql_query += "INSERT INTO employer(user_id,name,phone) VALUES(LAST_INSERT_ID(),'$name','$phone');";
//	mysql_query($sql_query);

	$mysqlObj = new Mysql();
    


	if($stmt = $mysqlObj->conn->prepare($sql_query)) {
		$stmt->execute();

		
			$stmt->close();
			
        
	}

?>