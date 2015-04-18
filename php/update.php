<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	
	$table = $_POST["table"];
	$data = $_POST["data"];
	$query;

	if (strcmp($table, "AwardShow") == 0) {
		$query = mysql_query(sprintf("UPDATE AwardShow SET Description = '%s', Year = %d, Type = '%s', Criteria = '%s', VotingPanel = '%s' WHERE ShowName = '%s'", $data['Description'], $data['Year'], $data['Type'], $data['Criteria'], $data['VotingPanel'], $data['ShowName']));
	}
	else if (strcmp($table, "Honor") == 0) {
		$query = mysql_query(sprintf("UPDATE Honor SET YearGiven = %d, NominatedWon = '%s', ShowName = '%s', PersonName = '%s' WHERE AwardID = '%s'", $data['YearGiven'], $data['NominatedWon'], $data['ShowName'], $data['PersonName'], $data['AwardID']));
		$query2 = mysql_query(sprintf("SELECT * FROM Works WHERE TitleName = '%s'", $data['TitleName']));
		if (!query2) {
			die('Could not query:' . mysql_error());
		}
		if (mysql_num_rows($query2) > 0) {
			$row = mysql_fetch_object($query2);
			$query3 = mysql_query(sprintf("UPDATE Honor SET WorkID = '%s' WHERE AwardID = '%s'", $row->WorkID, $data['AwardID']));
		}
	}
	else if (strcmp($table, "Movies") == 0) {
		$query = mysql_query(sprintf("UPDATE Movies SET Title = '%s', Rating = '%s', BoxOffice = %f, Budget = %f, Year = %d WHERE WorkID = '%s'", $data['Title'], $data['Rating'], $data['BoxOffice'], $data['Budget'], $data['Year'], $data['WorkID']));
	}
	else if (strcmp($table, "Music") == 0) {
		$query = mysql_query(sprintf("UPDATE Music SET Title = '%s', Artist = '%s', isSingle = '%s', EligibilityYear = %d, Genre = '%s', ReleaseYear = %d WHERE WorkID = '%s'", $data['Title'], $data['Artist'], $data['isSingle'], $data['EligibilityYear'], $data['Genre'], $data['ReleaseYear'], $data['WorkID']));
		$query2 = mysql_query(sprintf("UPDATE GenreOf SET GenreName = '%s' WHERE WorkID = '%s'", $data['Genre'], $data['WorkID']));
		if (!$query2) {
			die('Could not query:' . mysql_error());
		}
	}
	else if (strcmp($table, "People") == 0) {
		if (strpos($data['Birthdate'], '/') !== false) {
			$query = mysql_query(sprintf("UPDATE People SET PlaceOrigin = '%s', Occupation = '%s', Gender = '%s', Birthdate = STR_TO_DATE('%s', '%%m/%%d/%%Y') WHERE Name = '%s'", $data['PlaceOrigin'], $data['Occupation'], $data['Gender'], $data['Birthdate'], $data['Name']));	
		}
		else {
			$query = mysql_query(sprintf("UPDATE People SET PlaceOrigin = '%s', Occupation = '%s', Gender = '%s' WHERE Name = '%s'", $data['PlaceOrigin'], $data['Occupation'], $data['Gender'], $data['Name']));
		}	
	}
	else if (strcmp($table, "Stage") == 0) {
		if (strpos($data['Open'], '/') !== false && strpos($data['Closed'], '/') !== false) {
			$query = mysql_query(sprintf("UPDATE Stage SET Setting = '%s', Title = '%s', Iteration = %d, Type = '%s', Genre = '%s', SongNumber = %d, YEAR = %d, Theatre = '%s', Open = STR_TO_DATE('%s', '%%m/%%d/%%Y'), Closed = STR_TO_DATE('%s', '%%m/%%d/%%Y'), Previews = %d, Performances = %d, Running = '%s' WHERE WorkID = '%s'", $data['Setting'], $data['Title'], $data['Iteration'], $data['Type'], $data['Genre'], $data['SongNumber'], $data['YEAR'], $data['Theatre'], $data['Open'], $data['Closed'], $data['Previews'], $data['Performances'], $data['Running'], $data['WorkID']));	
		}
		else if (strpos($data['Open'], '/') !== false) {
			$query = mysql_query(sprintf("UPDATE Stage SET Setting = '%s', Title = '%s', Iteration = %d, Type = '%s', Genre = '%s', SongNumber = %d, YEAR = %d, Theatre = '%s', Open = STR_TO_DATE('%s', '%%m/%%d/%%Y'), Previews = %d, Performances = %d, Running = '%s' WHERE WorkID = '%s'", $data['Setting'], $data['Title'], $data['Iteration'], $data['Type'], $data['Genre'], $data['SongNumber'], $data['YEAR'], $data['Theatre'], $data['Open'], $data['Previews'], $data['Performances'], $data['Running'], $data['WorkID']));
		}
		else if (strpos($data['Closed'], '/') !== false) {
			$query = mysql_query(sprintf("UPDATE Stage SET Setting = '%s', Title = '%s', Iteration = %d, Type = '%s', Genre = '%s', SongNumber = %d, YEAR = %d, Theatre = '%s', Closed = STR_TO_DATE('%s', '%%m/%%d/%%Y'), Previews = %d, Performances = %d, Running = '%s' WHERE WorkID = '%s'", $data['Setting'], $data['Title'], $data['Iteration'], $data['Type'], $data['Genre'], $data['SongNumber'], $data['YEAR'], $data['Theatre'], $data['Closed'], $data['Previews'], $data['Performances'], $data['Running'], $data['WorkID']));
		}
		else {
			$query = mysql_query(sprintf("UPDATE Stage SET Setting = '%s', Title = '%s', Iteration = %d, Type = '%s', Genre = '%s', SongNumber = %d, YEAR = %d, Theatre = '%s', Previews = %d, Performances = %d, Running = '%s' WHERE WorkID = '%s'", $data['Setting'], $data['Title'], $data['Iteration'], $data['Type'], $data['Genre'], $data['SongNumber'], $data['YEAR'], $data['Theatre'], $data['Previews'], $data['Performances'], $data['Running'], $data['WorkID']));
		}
	}
	else if (strcmp($table, "Television") == 0) {
		$query = mysql_query(sprintf("UPDATE Television SET Title = '%s', Episodes = %d, Seasons = %d, StillRunning = '%s', Network = '%s', CameraSetup = '%s', MinimumRuntime = %d, MaximumRuntime = %d WHERE WorkID = '%s'", $data['Title'], $data['Episodes'], $data['Seasons'], $data['StillRunning'], $data['Network'], $data['CameraSetup'], $data['MinimumRuntime'], $data['MaximumRuntime'], $data['WorkID']));
	}

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>