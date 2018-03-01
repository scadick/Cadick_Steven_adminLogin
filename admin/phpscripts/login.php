<?php
	function logIn($username, $password, $ip) {
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginstring = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
		$user_set = mysqli_query($link, $loginstring);
		//echo mysqli_num_rows($user_set);
		if(mysqli_num_rows($user_set)){
			$founduser = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $founduser['user_id'];
			$new = $founduser['new']; //creates a string for $new to the column new in the database
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name']= $founduser['user_fname'];
			if(mysqli_query($link, $loginstring)){
				if($new == 'yes') { //the $new Default is equal to yes
					$update = "UPDATE tbl_user SET user_ip='{$ip}', $new = 'no' WHERE user_id={$id}";
					//the if statement works, but it won't change the $new to no, so any new user created even after they edit their account is set as yes and set back to edit account before the index page
					$updatequery = mysqli_query($link, $update);
					redirect_to("admin_edituser.php");
				}else{
					$update = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
					$updatequery = mysqli_query($link, $update);
					redirect_to("admin_index.php");
				}
			}
		}else{
			$message = "Learn how to type you dumba&*.";
			return $message;
		}
		mysqli_close($link);
	}
?>
