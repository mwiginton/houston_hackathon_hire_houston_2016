<?php

require 'Mysql.php';

class Membership
{

function validate_user($un, $pwd) {
	$mysql = New Mysql();
	$ensure_credentials = $mysql->verify_Username_and_Pass($un, $pwd);

	if($ensure_credentials == "superuser")
	{
		$_SESSION['status'] = 'authorized';
		header('location: superuserhome.php');
	}
	if($ensure_credentials == "employer")
	{
		$_SESSION['status'] = 'authorized';
		header('location: nonprofithome.php');
	}
	if($ensure_credentials == "nonprofit")
	{
		$_SESSION['status'] = 'authorized';
		header('location: nonprofithome.php');
	} else return "Please return the correct username and password";
}


}