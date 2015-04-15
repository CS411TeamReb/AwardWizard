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
        
        $query2 = mysql_query(sprintf("SELECT COUNT(DISTINCT WorkID) FROM Music"));
	$result = mysql_result($query2, 0, 0);
	$workID = "U" . ($result + 1);
	$query3 = mysql_query(sprintf("INSERT INTO Works (WorkID, TitleName) VALUES ('%s', '%s')", $workID, $adminmusictitle));

	$query = mysql_query(sprintf("INSERT INTO Music (WorkID, Title, Artist, isSingle, EligibilityYear, Genre, ReleaseYear) VALUES ('%s', '%s', '%s', '%s', '%d', '%s', '%d')", $workID, $adminmusictitle, $adminmusicartist, $adminmusicissingle, $adminmusiceligyear, $adminmusicgenre, $adminmusicreleaseyear));
	
	$query4 = mysql_query(sprintf("INSERT INTO GenreOf (WorkID, GenreName) VALUES ('%s', '%s')", $workID, $adminmusicgenre));
	

	if (!$query) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query2) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query3) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query4) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>