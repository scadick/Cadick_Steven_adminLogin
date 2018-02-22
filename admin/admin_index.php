<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
	<h1 align="center">Welcome Company Name to your admin page</h1><br>
	<div align="center">
	<h3>Hello <?php echo $_SESSION['user_name'];  ?></h3>
	</div><br>
	<h4 align="center">Would you like to do any of the following: </h4>
	<div align="center">
	<a href="admin_createuser.php">Create User</a><br>
	</div>
	<div align="center">
	<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
	</div>
</body>
</html>
