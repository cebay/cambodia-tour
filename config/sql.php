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
	define("CONTACT_SQL_UPDATE",
			"UPDATE " . TBL_CONTACT_US . " SET 
			`con_lat`='%s',
			`con_long`='%s'
			WHERE user_id=%u");
	define("CONTACT_SQL_DELETE","");

	define("USER_SQL_INSERT","");
	define("USER_SQL_UPDATE","");
	define("USER_SQL_DELETE","");

	define("GALLERY_SQL_INSERT",
			"INSERT INTO " . TBL_GALLERY . "(
				`gal_id`, 
				`gal_title`, 
				`gal_image`, 
				`gal_status`, 
				`user_id`) VALUES ('', '%s', '%s', '%u', '%u')");

	define("GALLERY_SQL_UPDATE", 
			"UPDATE " . TBL_GALLERY . " SET 
				`gal_title`  = '%s',
				`gal_image`  = '%s',
				`gal_status` = %u
				 WHERE `user_id`= %u");

	define("GALLERY_SQL_DELETE", "DELETE FROM " . TBL_GALLERY . " WHERE gal_id=%u");

	define("TOUR_SQL_INSERT","");
	define("TOUR_SQL_UPDATE","");
	define("TOUR_SQL_DELETE","");

	define("ABOUTUS_SQL_INSERT","");
	define("ABOUTUS_SQL_UPDATE","");
	define("ABOUTUS_SQL_DELETE","");

	define("FIND_RECORD", "SELECT %s FROM %s WHERE %s");
?>