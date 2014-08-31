<?php
	class Tour {
		function tou_id ($tou_id) {
			return $tou_id;
		}

		function tou_title ($tou_title) {
			return $tou_title;
		}
		function tou_desc ($tou_desc) {
			return $tou_desc;
		}
		function tou_image ($tou_image) {
			return $tou_image;
		}
		function tou_start_date ($tou_start_date) {
			return $tou_start_date;
		}
		function tou_end_date ($tou_end_date) {
			return $tou_end_date;
		}
		function tou_location ($tou_location) {
			return $tou_location;
		}
		function tou_status ($tou_status) {
			return $tou_status;
		}
		function user_id ($user_id) {
			return $user_id;
		}

		function save() {

			$tou_title			= $this->tou_title;
			$tou_desc				= $this->tou_desc;
			$tou_image			= $this->tou_image;
			$tou_start_date	= $this->tou_start_date;
			$tou_end_date		= $this->tou_end_date;
			$tou_location		= $this->tou_location;	

			$tou_status = $this->tou_status;
			$user_id 		= $this->user_id;

			$stmt = sprintf(TOUR_SQL_INSERT, $tou_image, $tou_title, 
																			 $tou_desc, $tou_start_date, 
																			 $tou_end_date, $tou_location, 
																			 $tou_status, $user_id);

			// echo $stmt; exit(0);
			return mysql_query($stmt);
		}
		function update() {
			$tou_id					= $this->tou_id;
			$tou_title			= $this->tou_title;
			$tou_desc				= $this->tou_desc;
			$tou_image			= $this->tou_image;
			$tou_start_date	= $this->tou_start_date;
			$tou_end_date		= $this->tou_end_date;
			$tou_location		= $this->tou_location;	

			$tou_status 		= $this->tou_status;

			$stmt 	 = sprintf(TOUR_SQL_UPDATE, $tou_image, $tou_title, $tou_desc, 
																					$tou_start_date, $tou_end_date, 
																					$tou_location, $tou_status, $tou_id);
			// echo $stmt; exit(0);
			return mysql_query($stmt);
		}
		function upsert() {

		}
		function delete() {
			$tou_id = $this->tou_id;
			$stmt = sprintf(ABOUTUS_SQL_DELETE, $tou_id);
			return mysql_query($stmt);
		}
	}
?>