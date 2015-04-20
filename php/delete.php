<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	
	$table = $_POST["table"];
	$data = $_POST["data"];
	$query;

	if (strcmp($table, "AwardShow") == 0) {
		$query = mysql_query(sprintf("DELETE FROM AwardShow WHERE ShowName = '%s'", $data['ShowName']));
	}
	else if (strcmp($table, "Honor") == 0) {
		$query = mysql_query(sprintf("DELETE FROM Honor WHERE AwardID = '%s'", $data['AwardID']));
	}
	else if (strcmp($table, "Movies") == 0) {
		$query = mysql_query(sprintf("DELETE FROM Movies WHERE WorkID = '%s'", $data['WorkID']));
	}
	else if (strcmp($table, "Music") == 0) {
		$query = mysql_query(sprintf("DELETE FROM Music WHERE WorkID = '%s'", $data['WorkID']));
		$query2 = mysql_query(sprintf("DELETE FROM GenreOf WHERE WorkID = '%s'", $data['WorkID']));
		if (!$query2) {
			die('Could not query:' . mysql_error());
		}
	}
	else if (strcmp($table, "People") == 0) {
		if (strpos($data['Birthdate'], '/') !== false) {
			$query = mysql_query(sprintf("DELETE FROM People WHERE Name = '%s'", $data['Name']));	
		}
		else {
			$query = mysql_query(sprintf("DELETE FROM People WHERE Name = '%s'", $data['Name']));
		}	
	}
	else if (strcmp($table, "Stage") == 0) {
		if (strpos($data['Open'], '/') !== false && strpos($data['Closed'], '/') !== false) {
			$query = mysql_query(sprintf("DELETE FROM Stage WHERE WorkID = '%s'", $data['WorkID']));	
		}
		else if (strpos($data['Open'], '/') !== false) {
			$query = mysql_query(sprintf("DELETE FROM Stage WHERE WorkID = '%s'", $data['WorkID']));
		}
		else if (strpos($data['Closed'], '/') !== false) {
			$query = mysql_query(sprintf("DELETE FROM Stage WHERE WorkID = '%s'", $data['WorkID']));
		}
		else {
			$query = mysql_query(sprintf("DELETE FROM Stage WHERE WorkID = '%s'", $data['WorkID']));
		}
	}
	else if (strcmp($table, "Television") == 0) {
		$query = mysql_query(sprintf("DELETE FROM Television WHERE WorkID = '%s'", $data['WorkID']));
	}

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>