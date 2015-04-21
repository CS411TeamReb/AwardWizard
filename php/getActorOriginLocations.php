<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	$result = mysql_query(sprintf("SELECT Name, PlaceOrigin, MinLat, MaxLat, MinLong, MaxLong, ShowName, AwardName, TitleName, NominatedWon FROM Honor inner join People on Honor.PersonName = People.Name inner join Countries on Countries.Country = People.PlaceOrigin inner join Works on Works.WorkID = Honor.WorkID"));
	
	$resultArray = array();
	while ($row = mysql_fetch_array($result)) {
		$resultArray[] = $row;
	}
	$actorOrigins = $resultArray;
        mysql_close($connection);
	echo json_encode($actorOrigins);
?>