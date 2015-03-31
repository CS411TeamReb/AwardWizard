<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('bifft2_awardwiz');

	$userid = $_POST['userid'];
	$usertvtitle = $_POST['usertvtitle'];

	$query = mysql_query(sprintf("INSERT INTO Favorites (userID,TVTitle) VALUES ('%d', '%s')", $userid, $usertvtitle));

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>