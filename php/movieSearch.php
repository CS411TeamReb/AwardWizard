<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$term = $_GET['search'];
	$column = $_GET['column'];
	if (is_numeric($term)) {
		$result = mysql_query(sprintf("SELECT Movies.WorkID, Title, Rating, BoxOffice, Budget, Year, URL, AwardName, YearGiven, NominatedWon, ShowName, PersonName FROM Movies INNER JOIN Pictures ON Pictures.WorkID = Movies.WorkID INNER JOIN Honor ON Honor.WorkID = Movies.WorkID WHERE Movies.%s = %d OR (Movies.%s - 10 < %d AND Movies.%s + 10 > %d) ORDER BY Movies.%s DESC", $column, $term, $column, $term, $column, $term, $column));
	}
	else {
		$result = mysql_query(sprintf("SELECT Movies.WorkID, Title, Rating, BoxOffice, Budget, Year, URL, AwardName, YearGiven, NominatedWon, ShowName, PersonName FROM Movies INNER JOIN Pictures ON Pictures.WorkID = Movies.WorkID INNER JOIN Honor ON Honor.WorkID = Movies.WorkID WHERE Movies.%s LIKE '%%%s%%'", $column, $term));
	}

	if (!$result) {
		die('Could not query:' . mysql_error());
	}

	$resultArray = array();
	while ($row = mysql_fetch_array($result)) {
		$resultArray[] = $row;
	}
	$shows = $resultArray;
        mysql_close($connection);

	echo json_encode($shows);

	



?>