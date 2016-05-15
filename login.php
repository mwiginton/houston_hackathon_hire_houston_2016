<?php
session_start();

require_once 'classes/Membership.php';
$membership = new Membership();

if($_POST && !empty($_POST['username']) && !empty($_POST['pwd']))
{
	$response = $membership->validate_user($_POST['username'], $_POST['pwd']);


}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Login to access page</title>

<link rel="stylesheet" href="css/awesome-style.css">

</head>
<body>


	<?php include ('_nav-bar.php') ?>

	<div id="login-div">
		<div id="login">
		<form method="post" action="">

		<h2>Login <small>enter your credentials </small></h2>

		<p>
		<label for="name">Username: </label>
		<input type="text" name="username"/>
		</p>
		<!--<link rel="stylesheet" type="text/css" href="css/default.css" /> -->
		<p>
		<label for="pwd">Password: </label>
		<input type="password" name="pwd"/>
		</p>

		<p>
		<input class="btn" type="submit" id="submit" value="Login" name="submit" />
		</p>

		</form>

		<?php if(isset($response)) echo "<h4 class='alert'>" . $response . "</h4>"; ?>
		 </div>
	</div>


<?php include ('_footer.php') ?>


</body>
</html>