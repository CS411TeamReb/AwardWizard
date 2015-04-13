<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	
	$table = $_GET['table'];
        $column = $_GET['column'];

        $result = mysql_query("SELECT $column, (Count($column)*100/(Select Count(*) From $table)) from $table Group by $column");

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