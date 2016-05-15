<?php
require_once 'classes/Mysql.php';

	// variables for input data
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	 
	// sql query for inserting data into database

	$sql_query = "INSERT INTO organization(name,phone) VALUES('$name','$phone');";
	mysql_query($sql_query);

?>