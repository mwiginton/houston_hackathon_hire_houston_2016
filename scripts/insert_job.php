<?php
require_once '../classes/Mysql.php';

	// variables for input data
	$employer_user_id = $_POST['employer_user_id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$salary = $_POST['salary'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	 
	// sql query for inserting data into database
	$sql_query = "INSERT INTO job(employer_user_id,title,description,salary,start_date,end_date) VALUES('$employer_user_id','$title','$description','$salary','$start_date','$end_date');";
 	
    $mysqlObj = new Mysql();
    


	if($stmt = $mysqlObj->conn->prepare($sql_query)) {
		$stmt->execute();
        $stmt->close();
	}

    
    //$result = mysql_query($sql_query);
    /*
    if (!$result) {
        die('Invalid query: ' . mysql_error());
    }*/
    
//require('../create_job_form.html');
?>