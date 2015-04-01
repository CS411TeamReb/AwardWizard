<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$userid = $_POST['userid'];
	$userpersonname = $_POST['userpersonname'];

	$query = mysql_query(sprintf("INSERT INTO Favorites (userID, PersonName) VALUES ('%d', '%s')", $userid, $userpersonname));

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>