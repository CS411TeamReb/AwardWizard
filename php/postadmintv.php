<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('awardwiz_main');

	$admintvtitle = $_POST['admintvtitle'];
        $admintvnumepisodes = $_POST['admintvnumepisodes'];
        $admintvnumseasons = $_POST['admintvnumseasons'];
        $admintvstillrunning = $_POST['admintvstillrunning'];
        $admintvnetwork = $_POST['admintvnetwork'];
        $admintvcamerasetup = $_POST['admintvcamerasetup'];
        $admintvminruntime = $_POST['admintvminruntime'];
        $admintvmaxruntime = $_POST['admintvmaxruntime'];
        $admintvplacefilmed = $_POST['admintvplacefilmed'];
        $admintvficlocation = $_POST['admintvficlocation'];

	$query = mysql_query(sprintf("INSERT INTO Television (Title, Episodes, Seasons, StillRunning, Network, CameraSetup, MinimumRuntime, MaximumRuntime) VALUES ('%s', '%d', '%d', '%s', '%s', '%s', '%d', '%d')", $admintvtitle, $admintvnumepisodes, $admintvnumseasons, $admintvstillrunning, $admintvnetwork, $admintvcamerasetup, $admintvminruntime, $admintvmaxruntime));
	$query2 = mysql_query(sprintf("INSERT INTO FilmedIn (Location) VALUES ('%s')", $admintvplacefilmed));
	$query3 = mysql_query(sprintf("INSERT INTO FictionalLocation (Location) VALUES ('%s')", $admintvficlocation));
	

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