<?php
	class Connection {
		function __construct() {
			$link = mysql_connect(HOST, USERNAME, PASSWORD) or die('Cannot connect to database' . mysql_error());
			$db_selected = mysql_select_db(DATABASE, $link) or die("Cannot select DATABASE database");
		}
	}
?>