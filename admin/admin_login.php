<?php
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	$failedlogin = 0;
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
</head>
<body>
	<form action="admin_login.php" method="post">
		<label>Username:</label>
		<input type="text" name="username" value="Username">
		<br>
		<label>Password:</label>
		<input type="text" name="password" value="Password">
		<br>
		<label> <!--creates a checkbox form remember me-->
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
		<br>
		<input type="submit" name="submit" value="Show me the money">
	</form>
</body>
</html>
