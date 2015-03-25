<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('elchao2_Test');

	$result = mysql_query(sprintf("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'elchao2_Test'"));

	if ($result) {
		die('Could not query:' . mysql_error());
	}

	$resultArray = array();
	while ($row = mysql_fetch_array($result)) {
		$resultArray[] = $row;
	}
	$tables = $resultArray;

	echo json_encode($tables);
?>