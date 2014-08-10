<?php
	require("define.php");

	define(	"CONTACT_SQL_INSERT",
			"INSERT INTO " . TBL_CONTACT_US . "(
				`con_id`, 
				`con_address_desc`, 
				`con_phone`, 
				`con_email`, 
				`con_social`, 
				`con_lat`, 
				`con_long`, 
				`con_logo`, 
				`user_id`) VALUES ('', '%s', '%s', '%s', '%s', '', '', '', '')");
	define("CONTACT_SQL_UPDATE","");
	define("CONTACT_SQL_DELETE","");

	define("USER_SQL_INSERT","");
	define("USER_SQL_UPDATE","");
	define("USER_SQL_DELETE","");

	define("GALLERY_SQL_INSERT","");
	define("GALLERY_SQL_UPDATE","");
	define("GALLERY_SQL_DELETE","");

	define("TOUR_SQL_INSERT","");
	define("TOUR_SQL_UPDATE","");
	define("TOUR_SQL_DELETE","");

	define("ABOUTUS_SQL_INSERT","");
	define("ABOUTUS_SQL_UPDATE","");
	define("ABOUTUS_SQL_DELETE","");
?>