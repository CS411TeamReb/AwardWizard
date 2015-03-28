<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('elchao2_Test');
	
	$table = $_POST["table"];
	$data = $_POST["data"];
	$query;

	if (strcmp($table, "AwardShow") == 0) {
		$query = mysql_query(sprintf("UPDATE AwardShow SET Description = '%s', Year = %d, Type = '%s', Criteria = '%s', VotingPanel = '%s' WHERE ShowName = '%s'", $data['Description'], $data['Year'], $data['Type'], $data['Criteria'], $data['VotingPanel'], $data['ShowName']));
	}
	else if (strcmp($table, "Honor") == 0) {
		$query = mysql_query(sprintf("UPDATE Honor SET YearGiven = %d, NominatedWon = '%s', ShowName = '%s', PersonName = '%s' WHERE AwardID = '%s'", $data['YearGiven'], $data['NominatedWon'], $data['ShowName'], $data['PersonName'], $data['AwardID']));
	}
	else if (strcmp($table, "Movies") == 0) {
		$query = mysql_query(sprintf("UPDATE Movies SET Title = '%s', Rating = '%s', BoxOffice = %f, Budget = %f, Year = %d WHERE WorkID = '%s'", $data['Title'], $data['Rating'], $data['BoxOffice'], $data['Budget'], $data['Year'], $data['WorkID']));
	}
	else if (strcmp($table, "Music") == 0) {

	}
	else if (strcmp($table, "People") == 0) {

	}
	else if (strcmp($table, "Stage") == 0) {

	}
	else if (strcmp($table, "Television") == 0) {

	}

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>