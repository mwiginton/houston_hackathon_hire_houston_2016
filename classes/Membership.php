<?php

require 'Mysql2.php';

class Membership
{

function validate_user($un, $pwd) {
	$mysql = New Mysql2();
	$ensure_credentials = $mysql->verify_Username_and_Pass($un, $pwd);

	if($ensure_credentials == "superuser")
	{
		$_SESSION['status'] = 'authorized';
		header('location: super-user.php');
	}
	if($ensure_credentials == "employer")
	{
		$_SESSION['status'] = 'authorized';
		header('location: employer-view.php');
	}
	if($ensure_credentials == "nonprofit")
	{
		$_SESSION['status'] = 'authorized';
		header('location: non-profit-view.php');
	} else return "Please return the correct username and password";
}


}