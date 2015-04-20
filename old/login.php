<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	
	$username = mysql_real_escape_string($_GET['username']);
	$password = md5(mysql_real_escape_string($_GET['password']));

	$checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");

	$loggedIn = false;
	$isAdmin = false;
	if (mysql_num_rows($checklogin) > 0) {
		$loggedIn = true;
		$row = mysql_fetch_object($checklogin);
		$isAdmin = $row->isAdmin;
	}
	else {
		$loggedIn = false;
		$isAdmin = false;
	}

	$result = array('loggedIn' => "$loggedIn",
					'isAdmin' => "$isAdmin");
	echo json_encode($result);
	mysql_close($connection);
?>