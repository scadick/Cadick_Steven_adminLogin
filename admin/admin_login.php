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
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
	<form action="admin_login.php" method="post">
		<label class="inputs">Username:</label>
		<input type="text" name="username" value="">
		<br>
		<label class="inputs">Password:</label>
		<input type="text" name="password" value="">
		<br>
		<label class="inputs"> <!--creates a checkbox form remember me-->
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
		<br>
		<input class="inputs" type="submit" name="submit" value="Show me the money">
	</form>
</body>
</html>
