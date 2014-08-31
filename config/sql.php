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

	define("TOUR_SQL_INSERT",
			"INSERT INTO " . TBL_TOUR . "(
				`tou_id`, 
				`tou_image`, 
				`tou_title`, 
				`tou_desc`, 
				`tou_start_date`, 
				`tou_end_date`, 
				`tou_location`, 
				`tou_status`, 
				`user_id`) VALUES ('','%s','%s','%s','%s','%s','%s',%u,%u)");
	define("TOUR_SQL_UPDATE",
			"UPDATE " . TBL_TOUR . " SET 
			`tou_image`			= '%s',
			`tou_title`			= '%s',
			`tou_desc`			= '%s',
			`tou_start_date`= '%s',
			`tou_end_date`	= '%s',
			`tou_location`	= '%s',
			`tou_status`		=  %u WHERE `tou_id`= %u");
	define("TOUR_SQL_DELETE",
			"DELETE FROM " . TBL_TOUR . " WHERE tou_id = %u");

	define("ABOUTUS_SQL_INSERT",
			"INSERT INTO " . TBL_ABOUT_US . "(
				`abo_id`, 
				`abo_title`, 
				`abo_desc`, 
				`abo_image`, 
				`abo_status`, 
				`user_id`) VALUES ('','%s','%s','%s','%s','%u')");
	define("ABOUTUS_SQL_UPDATE",
			"UPDATE " . TBL_ABOUT_US . " SET 
			`abo_title`	='%s',
			`abo_desc`	='%s',
			`abo_image`	='%s',
			`abo_status`='%s' WHERE `abo_id` = %u");
	define("ABOUTUS_SQL_DELETE",
			"DELETE FROM " . TBL_ABOUT_US . " WHERE `abo_id` = %u");

	define("HOME_NEWS_SQL_INSERT",
			"INSERT INTO " . TBL_HOME_NEWS . "(
				`news_id`, 
				`news_title`, 
				`news_desc`) VALUES ('','%s','%s')");
	define("HOME_NEWS_SQL_UPDATE",
			"UPDATE " . TBL_HOME_NEWS . " SET 
			`news_title`= '%s',
			`news_desc`	= '%s' WHERE `news_id`=%u");
	define("HOME_NEWS_SQL_DELETE",
			"DELETE FROM " . TBL_HOME_NEWS . " WHERE news_id = %u");

	define("HOME_SLIDE_SQL_INSERT",
			"INSERT INTO " . TBL_HOME_SLIDE . "(`slide_id`, `slide_image`) VALUES ('','%s')");
	define("HOME_SLIDE_SQL_DELETE",
			"DELETE FROM " . TBL_HOME_SLIDE . " WHERE `slide_id`= %u");

	define("FIND_RECORD", "SELECT %s FROM %s WHERE %s");
?>