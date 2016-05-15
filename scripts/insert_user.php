<?php
require_once 'classes/Mysql.php';
	// variables for input data
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
    
    $sql_query = "INSERT INTO appuser(user_name, password, type) VALUES('$user_name','$password', 3);";
    mysql_query($sql_query);
?>
