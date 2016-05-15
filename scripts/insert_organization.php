<?php
require_once 'classes/Mysql.php';

	// variables for input data
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	 
	// sql query for inserting data into database
	$sql_query = "INSERT INTO appuser(user_name,password) VALUES('$user_name','$password');";
	$sql_query += "INSERT INTO organization(user_id,name,phone) VALUES(LAST_INSERT_ID(),'$name','$phone');";
	mysql_query($sql_query);
?>