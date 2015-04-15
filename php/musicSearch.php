<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$term = $_GET['search'];
	$column = $_GET['column'];
	if (is_numeric($term)) {
		$result = mysql_query(sprintf("SELECT * FROM Music WHERE %s = %d OR (%s - 10 < %d AND %s + 10 > %d) ORDER BY %s DESC", $column, $term, $column, $term, $column, $term, $column));
	}
	else {
		$result = mysql_query(sprintf("SELECT * FROM Music WHERE %s LIKE '%%%s%%'", $column, $term));
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