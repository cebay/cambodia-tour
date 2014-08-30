<?php
	class About {
		function abo_id ($abo_id) {
			return $abo_id;
		}

		function abo_title ($abo_title) {
			return $abo_title;
		}
		function abo_desc ($abo_desc) {
			return $abo_desc;
		}
		function abo_image ($abo_image) {
			return $abo_image;
		}
		function abo_status ($abo_status) {
			return $abo_status;
		}
		function user_id ($user_id) {
			return $user_id;
		}

		function save() {

			$abo_title	= $this->abo_title;
			$abo_desc		= $this->abo_desc;
			$abo_image	= $this->abo_image;
			$abo_status = $this->abo_status;
			$user_id 		= $this->user_id;

			$stmt = sprintf(ABOUTUS_SQL_INSERT, $abo_title, $abo_desc, $abo_image, $abo_status, $user_id);
			return mysql_query($stmt);
		}
		function update() {
			$abo_title	= $this->abo_title;
			$abo_desc		= $this->abo_desc;
			$abo_image	= $this->abo_image;
			$abo_status = $this->abo_status;
			$user_id 		= $this->user_id;

			$stmt 	 = sprintf(ABOUTUS_SQL_UPDATE, $abo_title, $abo_desc, $abo_image, $abo_status, $user_id);
			return mysql_query($stmt);
		}
		function upsert() {

		}
		function delete() {
			$abo_id = $this->abo_id;
			$stmt = sprintf(ABOUTUS_SQL_DELETE, $abo_id);
			return mysql_query($stmt);
		}
	}
?>