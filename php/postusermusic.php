<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('bifft2_awardwiz');

	$userid = $_POST['userid'];
	$usermusictitle = $_POST['usermusictitle'];
        $usermusicartist = $_POST['usermusicartist'];

	$query = mysql_query(sprintf("INSERT INTO Favorites (userID, MusicTitle, MusicArtist) VALUES ('%d', '%s', '%s')", $userid, $usermusictitle, $usermusicartist));

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>