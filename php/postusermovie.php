<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$userid = $_POST['userid'];
	$usermovietitle = $_POST['usermovietitle'];

	$query = mysql_query(sprintf("INSERT INTO Favorites (userID, MovieTitle) VALUES ('%d', '%s')", $userid, $usermovietitle));

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>