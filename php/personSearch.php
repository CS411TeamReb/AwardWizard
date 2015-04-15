<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$term = $_GET['search'];
	$column = $_GET['column'];

	$d = DateTime::createFromFormat('m/d/Y', $term);
	if ($d) {
		$date_before = clone $d;
		$date_after = clone $d;
		$date_before->sub(new DateInterval('P2Y'));
		$date_after->add(new DateInterval('P2Y'));
		$result = mysql_query(sprintf("SELECT * FROM People WHERE %s = STR_TO_DATE('%s', '%%m/%%d/%%Y') OR (%s < STR_TO_DATE('%s', '%%m/%%d/%%Y') AND %s > STR_TO_DATE('%s', '%%m/%%d/%%Y'))", $column, $term, $column, $date_after->format('m/d/Y'), $column, $date_before->format('m/d/Y')));
	}
	else {
    	$result = mysql_query(sprintf("SELECT * FROM People WHERE %s LIKE '%%%s%%'", $column, $term));
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