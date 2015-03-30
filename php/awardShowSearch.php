<?php
	include_once 'connect.php';
	$connection = connect();
	//mysql_select_db('rsturm2_awardtest');
	mysql_select_db('elchao2_Test');
	
	$term = $_GET['search'];
        $result = mysql_query("SELECT * FROM AwardShow WHERE ShowName LIKE '%$term%'");

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