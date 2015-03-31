<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('bifft2_awardwiz');

	$userid = $_POST['userid'];
	$userstagetitle = $_POST['userstagetitle'];

	$query = mysql_query(sprintf("INSERT INTO Favorites (userID, StageTitle) VALUES ('%d', '%s')", $userid, $userstagetitle));

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>