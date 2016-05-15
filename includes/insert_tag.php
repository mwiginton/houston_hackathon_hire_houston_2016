<?php
require_once 'classes/Mysql.php';

	//variables for input data
	$tag_id = $_POST['tag_id'];
	//sql query for inserting data into database
	$sql_query = "INSERT INTO TAG(tag_id) VALUES('$tag_id');";
	mysql_query($sql_query);
?>