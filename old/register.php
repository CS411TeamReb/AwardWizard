<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	
	$username = mysql_real_escape_string($_POST['username']);
	$password = md5(mysql_real_escape_string($_POST['password']));
	$email = mysql_real_escape_string($_POST['email']);

	$checkusername = mysql_query(sprintf("SELECT COUNT(*) FROM users WHERE Username = '%s' OR EmailAddress = '%s'", $username, $email));
	if (!$checkusername) {
		die('Could not query:' . mysql_error());
	}
	$count = mysql_result($checkusername, 0, 0);

	$registered = false;
	$isAdmin = false;
	if ($count == 1) {
		$registered = false;
		$isAdmin = false;
	}
	else {
		$registerquery = mysql_query(sprintf("INSERT INTO users (Username, Password, EmailAddress, IsAdmin) VALUES('%s', '%s', '%s', 0)", $username, $password, $email));
		if ($registerquery) {
			$registered = true;
			$isAdmin = false;
		}
	}

	$result = array('registered' => "$registered",
					'isAdmin' => "$isAdmin");
	echo json_encode($result);
	mysql_close($connection);
?>