<?php
	class Gallery {
		function gal_title ($gal_title) {
			return $gal_title;
		}
		function gal_image ($gal_image) {
			return $gal_image;
		}
		function gal_status ($gal_status) {
			return $gal_status;
		}
		function user_id ($user_id) {
			return $user_id;
		}

		function save() {

			$gal_title	= $this->gal_title;
			$gal_image	= $this->gal_image;
			$gal_status = $this->gal_status;
			$user_id 	= $this->user_id;

			$stmt = sprintf(GALLERY_SQL_INSERT, $gal_title, $gal_image, $gal_status, $user_id);
			return mysql_query($stmt);
		}
		function update() {
			$gal_title	= $this->gal_title;
			$gal_image	= $this->gal_image;
			$gal_status = $this->gal_status;
			$user_id 	= $this->user_id;

			$stmt 	 = sprintf(GALLERY_SQL_INSERT, $gal_title, $gal_image, $gal_status, $user_id);
			return mysql_query($stmt);
		}
		function upsert() {

		}
		function delete() {

		}
		// [x] basic info
		// save map, logo
		// update
		// delete
	}
?>