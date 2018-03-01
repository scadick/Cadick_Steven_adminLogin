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
	<h1 align="center">Welcome Company Name to your admin page</h1>
	<h2 align="center">Hello <?php echo $_SESSION['user_name'];  ?></h2>
	<h3 align="center">What Would You Like To Do?</h3>
	<div align="center">
		<a href="admin_createuser.php">Create User</a><br><br>
		<a href="admin_edituser.php">Edit User</a><br><br>
		<a href="admin_deleteuser.php">Fired</a><br><br>
		<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
	</div>
</body>
</html>
