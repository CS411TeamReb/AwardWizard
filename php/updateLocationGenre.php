<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	
	$workId = $_POST["WorkID"];
	$locations = $_POST["Locations"];
	$genres = $_POST["Genres"];

	for ($i = 0; $i < count($locations); $i++) {
		$query = mysql_query(sprintf("UPDATE Locations SET Location = '%s', FilmedOrFiction = '%s', Latitude = %f, Longitude = %f WHERE Location = '%s' AND WorkID = '%s' AND FilmedOrFiction = '%s'", $locations[$i]["Location"], $locations[$i]["FilmedOrFiction"], $locations[$i]["Latitude"], $locations[$i]["Longitude"], $locations[$i]["OldLocation"], $locations[$i]["WorkID"], $locations[$i]["OldFilmed"]));
		if (!$query) {
			die('Could not query:' . mysql_error());
		}
	}

	for ($j = 0; $j < count($genres); $j++) {
		$query = mysql_query(sprintf("UPDATE GenreOf SET GenreName = '%s' WHERE WorkID = '%s' AND GenreName = '%s'", $genres[$j]["GenreName"], $genres[$j]["WorkID"], $genres[$j]["OldGenre"]));
		if (!$query) {
			die('Could not query:' . mysql_error());
		}
	}

	mysql_close($connection);
?>