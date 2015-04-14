<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$adminpersonname = $_POST['adminpersonname'];
        $adminpersonorigin = $_POST['adminpersonorigin'];
        $adminpersonoccupation = $_POST['adminpersonoccupation'];
        $adminpersongender = $_POST['adminpersongender'];
        $adminpersonbirthdate = $_POST['adminpersonbirthdate'];

	$query = mysql_query(sprintf("INSERT INTO People (Name, PlaceOrigin, Occupation, Gender, Birthdate) VALUES ('%s', '%s', '%s', '%s', STR_TO_DATE('%s', '%%m/%%d/%%Y'))", $adminpersonname, $adminpersonorigin, $adminpersonoccupation, $adminpersongender, $adminpersonbirthdate));
	

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>