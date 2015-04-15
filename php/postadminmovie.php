<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$adminmovietitle = $_POST['adminmovietitle'];
        $adminmovierating = $_POST['adminmovierating'];
        $adminmovieboxoffice = $_POST['adminmovieboxoffice'];
        $adminmoviebudget = $_POST['adminmoviebudget'];
        $adminmovieyearnom = $_POST['adminmovieyearnom'];
        $adminmovieplacefilmed = $_POST['adminmovieplacefilmed'];
        $adminmovieficlocation = $_POST['adminmovieficlocation'];
        $adminmoviegenre = $_POST['adminmoviegenre'];
        
        
        $query4 = mysql_query(sprintf("SELECT COUNT(*) FROM Movies"));
	$result = mysql_result($query4, 0, 0);
	$workID = "M" . ($result + 1);
	$query5 = mysql_query(sprintf("INSERT INTO Works (WorkID, TitleName) VALUES ('%s', '%s')", $workID, $adminmovietitle));
	
	$query6 = mysql_query(sprintf("INSERT INTO GenreOf (WorkID, GenreName) VALUES ('%s', '%s')", $workID, $adminmoviegenre));

	$query = mysql_query(sprintf("INSERT INTO Movies (WorkID, Title, Rating, BoxOffice, Budget, Year) VALUES ('%s', '%s', '%s', '%f', '%f', '%d')", $workID, $adminmovietitle, $adminmovierating, $adminmovieboxoffice, $adminmoviebudget, $adminmovieyearnom));
	
	/*
	$query2 = mysql_query(sprintf("INSERT INTO FilmedIn (Location) VALUES ('%s')", $adminmovieplacefilmed));
	$query3 = mysql_query(sprintf("INSERT INTO FictionalLocation (Location) VALUES ('%s')", $adminmovieficlocation));
	
	*/

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
	
	if (!$query5) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query6) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>