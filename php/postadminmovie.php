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
	$query = mysql_query(sprintf("INSERT INTO Movies (Title, Rating, BoxOffice, Budget, Year) VALUES ('%s', '%s', '%f', '%f', '%d')", $adminmovietitle, $adminmovierating, $adminmovieboxoffice, $adminmoviebudget, $adminmovieyearnom));
	$query2 = mysql_query(sprintf("INSERT INTO FilmedIn (Location) VALUES ('%s')", $adminmovieplacefilmed));
	$query3 = mysql_query(sprintf("INSERT INTO FictionalLocation (Location) VALUES ('%s')", $adminmovieficlocation));
	
	
	if (!$query) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query2) {
		die('Could not query:' . mysql_error());
	}
	
	if (!$query3) {
		die('Could not query:' . mysql_error());
	}
	mysql_close($connection);
?>