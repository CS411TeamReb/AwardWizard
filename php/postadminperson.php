<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$adminpersonname = $_POST['adminpersonname'];
        $adminpersonorigin = $_POST['adminpersonorigin'];
        $adminpersonoccupation = $_POST['adminpersonoccupation'];
        $adminpersongender = $_POST['adminpersongender'];
        $adminpersonbirthdate = $_POST['adminpersonbirthdate'];

	$query2 = mysql_query(sprintf("SELECT COUNT(*) FROM People"));
	$result = mysql_result($query2, 0, 0);
	$workID = "P" . ($result + 1);
	$query3 = mysql_query(sprintf("INSERT INTO Works (WorkID, TitleName) VALUES ('%s', '%s')", $workID, $adminpersonname));
	$query = mysql_query(sprintf("INSERT INTO People (WorkID, Name, PlaceOrigin, Occupation, Gender, Birthdate) VALUES ('%s', '%s', '%s', '%s', '%s', STR_TO_DATE('%s', '%%m/%%d/%%Y'))", $workID, $adminpersonname, $adminpersonorigin, $adminpersonoccupation, $adminpersongender, $adminpersonbirthdate));
	

	if (!$query) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query2) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query3) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>