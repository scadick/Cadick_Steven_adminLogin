<?php

	function logIn($username, $password, $ip) {
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginstring = "SELECT * FROM tbl_user WHERE user_name = '{$username}' AND user_pass = '{$password}'";
		$user_set = mysqli_query($link, $loginstring);
		if(mysqli_num_rows($user_set)){
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $found_user['user_id'];
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $found_user['user_fname'];
			$_SESSION['user_date'] = $found_user['user_date']; //gets the date from the database
			$currentDate = date("Y-m-d h:i:s"); //records the current date
			if(mysqli_query($link, $loginstring)){
        $updatestring = "UPDATE tbl_user SET user_ip = '$ip', user_date = '$currentDate' WHERE user_id = {$id};"; //updates the date in the database.
        $updatequery = mysqli_query($link, $updatestring);
			}
			redirect_to("admin_index.php");
		}else{
			$message = "Username and/or password is incorrect.<br>Please make sure your cap lock key is turned off.";
			return $message;
		}
		mysqli_close($link);
	}


?>
