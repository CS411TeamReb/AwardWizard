<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	$result = mysql_query(sprintf("SELECT TitleName, AwardName, PersonName, ShowName, Honor.YearGiven, Latitude, Longitude, NominatedWon, URL FROM Locations inner join Works on Works.WorkID = Locations.WorkID inner join Pictures on Pictures.WorkId = Works.WorkID inner join Honor on Honor.WorkId = Works.WorkId where FilmedOrFiction='Filmed'"));
	
	$resultArray = array();
	while ($row = mysql_fetch_array($result)) {
		$resultArray[] = $row;
	}
	$filmedIn = $resultArray;
        mysql_close($connection);
	echo json_encode($filmedIn);
?>