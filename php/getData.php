<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('elchao2_Test');
	
	$table = $_GET['table'];
	$result = mysql_query(sprintf("SELECT * FROM %s", $table));

	if (!$result) {
		die('Could not query:' . mysql_error());
	}

	$resultArray = array();
	while ($row = mysql_fetch_array($result)) {
		$resultArray[] = $row;
	}
	$data = $resultArray;

	echo json_encode($data);
?>