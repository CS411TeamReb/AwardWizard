<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	
	$table = $_GET['table'];
	$result;

	if (strcmp($table, "Genre") == 0) {
		$result = mysql_query("SELECT GenreName AS L, COUNT(*) AS C FROM GenreOf GROUP BY GenreName ORDER BY C DESC, GenreName ASC");
	}
	else if (strcmp($table, "Show") == 0) {
		$result = mysql_query("SELECT ShowName AS L, SUM(C) AS C FROM (SELECT AwardName, ShowName, COUNT(*) AS C FROM Honor GROUP BY AwardName) A GROUP BY ShowName");
	}
	else if (strcmp($table, "Location") == 0) {
		$result = mysql_query("SELECT Location AS L, COUNT(*) AS C FROM Locations WHERE FilmedOrFiction = 'Filmed' GROUP BY Location ORDER BY C DESC");
	}
	else if (strcmp($table, "Movies") == 0) {
		$result = mysql_query("SELECT Title AS L, BoxOffice, Budget, NumNominated AS C FROM Movies INNER JOIN (SELECT WorkID AS W, COUNT(*) AS NumNominated FROM Honor WHERE LEFT(WorkID, 1) = 'M' GROUP BY WorkID) A WHERE WorkID = W");
	}

	if (!$result) {
		die('Could not query:' . mysql_error());
	}

	$resultArray = array();
	while ($row = mysql_fetch_array($result)) {
		$resultArray[] = $row;
	}
	$results = $resultArray;
        mysql_close($connection);

	echo json_encode($results);
?>
