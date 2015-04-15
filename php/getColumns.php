<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	
	$table = $_GET['table'];
	$result = mysql_query(sprintf("SHOW COLUMNS FROM %s", $table));

	if (!$result) {
		die('Could not query:' . mysql_error());
	}

	$resultArray = array();
	while ($row = mysql_fetch_array($result)) {
		$resultArray[] = $row;
	}
	$data = $resultArray;

	mysql_close($connection);
	echo json_encode($data);
?>