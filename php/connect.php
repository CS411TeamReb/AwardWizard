<?php
	function connect() {
		$link = mysql_connect('engr-cpanel-mysql.engr.illinois.edu', 'rsturm2_phptest', 'phptest');
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
		return $link;
	}
?>