<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$adminhonorshowname = $_POST['adminhonorshowname'];
	$adminhonorawardname = $_POST['adminhonorawardname'];
	$adminhonorworkname = $_POST['adminhonorworkname'];
	$adminhonorpersonname = $_POST['adminhonorpersonname'];
	$adminhonoryeargiven = $_POST['adminhonoryeargiven'];
	$adminhonornomorwon = $_POST['adminhonornomorwon'];

        
        $query = mysql_query(sprintf("SELECT COUNT(ShowName) FROM Honor WHERE ShowName = '%s'", $adminhonorshowname));
        $result = mysql_result($query, 0, 0);
        $query2 = mysql_query(sprintf("SELECT LEFT(ShowName, 1) AS FirstLetter FROM Honor WHERE ShowName = '%s'", $adminhonorshowname));
        $result2 = mysql_fetch_object($query2);
        $awardID = $result2->FirstLetter . ($result + 1);
        $query3 = mysql_query(sprintf("SELECT WorkID from Works WHERE TitleName = '%s'", $adminhonorworkname));
        $workID = mysql_fetch_object($query3);
        
        $query4 = mysql_query(sprintf("INSERT INTO Honor (AwardID, AwardName, YearGiven, NominatedWon, ShowName, WorkID, PersonName) VALUES ('%s', '%s', '%d', '%s', '%s', '%s', '%s')", $awardID, $adminhonorawardname, $adminhonoryeargiven, $adminhonornomorwon, $adminhonorshowname, $workID->WorkID, $adminhonorpersonname));
        

	if (!$query) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query2) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query3) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query4) {
		die('Could not query:' . mysql_error());
	}
	


	mysql_close($connection);
?>