<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');
	$adminstagetitle = $_POST['adminstagetitle'];
        $adminstagesetting = $_POST['adminstagesetting'];
        $adminstageiteration = $_POST['adminstageiteration'];
        $adminstagetype = $_POST['adminstagetype'];
        $adminstagegenre = $_POST['adminstagegenre'];
        $adminstagesongnum = $_POST['adminstagesongnum'];
        $adminstageyear = $_POST['adminstageyear'];
        $adminstagetheatre = $_POST['adminstagetheatre'];
        $adminstagedateopened = $_POST['adminstagedateopened'];
        $adminstagedateclosed = $_POST['adminstagedateclosed'];
        $adminstagenumpreviews = $_POST['adminstagenumpreviews'];
        $adminstagenumperformances = $_POST['adminstagenumperformances'];
        $adminstagerunning = $_POST['adminstagerunning'];
        $adminstageplacefilmed = $_POST['adminstageplacefilmed'];
        $adminstageficlocation = $_POST['adminstageficlocation'];
	$query = mysql_query(sprintf("INSERT INTO Stage (Setting, Title, Iteration, Type, Genre, SongNumber, YEAR, Theatre, Open, Closed, Previews, Performances, Running) VALUES ('%s', '%s', '%d', '%s', '%s', '%d', '%d', '%s', STR_TO_DATE('%s', '%%m/%%d/%%Y'), STR_TO_DATE('%s', '%%m/%%d/%%Y'), '%d', '%d', '%s')", $adminstagesetting, $adminstagetitle, $adminstageiteration, $adminstagetype, $adminstagegenre, $adminstagesongnum, $adminstageyear, $adminstagetheatre, $adminstagedateopened, $adminstagedateclosed, $adminstagenumpreviews, $adminstagenumperformances, $adminstagerunning));
	$query2 = mysql_query(sprintf("INSERT INTO FilmedIn (Location) VALUES ('%s')", $adminstageplacefilmed));
	$query3 = mysql_query(sprintf("INSERT INTO FictionalLocation (Location) VALUES ('%s')", $adminstageficlocation));
	
	
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
