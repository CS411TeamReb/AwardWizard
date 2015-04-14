<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	$adminmusictitle = $_POST['adminmusictitle'];
        $adminmusicartist = $_POST['adminmusicartist'];
        $adminmusicissingle = $_POST['adminmusicissingle'];
        $adminmusiceligyear = $_POST['adminmusiceligyear'];
        $adminmusicreleaseyear = $_POST['adminmusicreleaseyear'];
        $adminmusicgenre = $_POST['adminmusicgenre'];
	$query = mysql_query(sprintf("INSERT INTO Music (Title, Artist, isSingle, EligibilityYear, Genre, ReleaseYear) VALUES ('%s', '%s', '%s', '%d', '%s', '%d')", $adminmusictitle, $adminmusicartist, $adminmusicissingle, $adminmusiceligyear, $adminmusicgenre, $adminmusicreleaseyear));
	
	if (!$query) {
		die('Could not query:' . mysql_error());
	}
	mysql_close($connection);
?>