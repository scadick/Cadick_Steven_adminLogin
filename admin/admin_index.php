<?php
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
	<h1>Welcome Company Name to your admin page</h1>
	<div id="time">
	<?php
		// Set Default timezone to Toronto's time zone
		date_default_timezone_set('America/Toronto');

		// 24-hour format of an hour without leading zeros (0 through 23)
		$Hour = date('G');

		if ( $Hour >= 5 && $Hour <= 11 ) { //between 5am and 11am good morning
				echo "Good Morning";
		} else if ( $Hour >= 12 && $Hour <= 18 ) { //between 12pm and 6pm good afternoon
				echo "Good Afternoon";
		} else if ( $Hour >= 19 || $Hour <= 4 ) { //between 7pm and 4am good evening
				echo "Good Evening";
		}

		//echo out when the last login date is on
		 //<h2>Last login was on {$_SESSION['user_date']}</h2>; //couldn't seem to get this to Worker
		?>
	</div>
</body>
</html>
