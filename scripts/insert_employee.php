<?php
require_once 'classes/Mysql.php';

	// variables for input data
	$organization_user_id = $_POST['organization_user_id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	 
	// sql query for inserting data into database

	$sql_query = "INSERT INTO employee(organization_user_id,first_name,last_name,phone,address,state,zip,city,email,start_date,end_date) VALUES('$organization_user_id','$first_name','$last_name','$phone','$address','$state','$zip','$city','$email','$start_date','$end_date');";
 	mysql_query($sql_query);

?>