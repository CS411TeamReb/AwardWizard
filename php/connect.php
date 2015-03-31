<?php
	function connect() {
		$link = mysql_connect('engr-cpanel-mysql.engr.illinois.edu', 'bifft2_admin', '411testing');
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
		return $link;
	}
?>