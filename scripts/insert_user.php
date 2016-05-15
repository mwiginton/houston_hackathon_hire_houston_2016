<?php
require_once 'classes/Mysql.php';
if(isset($_POST['btn-save']))
{
	// variables for input data
	$type = $_POST['type'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	 
	// sql query for inserting data into database
	if ($type == 1)
	{
		$sql_query = "INSERT INTO employer(name,phone) VALUES('$name','$phone');";
 		mysql_query($sql_query);
	}
	else
	{

	}
	
}
?>