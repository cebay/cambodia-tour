<?php
	class Contact {
		function description ($description) {
			return $description;
		}
		function email ($email) {
			return $email;
		}
		function phone ($phone) {
			return $phone;
		}
		function social ($social) {
			return $social;
		}
		function lat ($lat) {
			return $lat;
		}
		function lng ($lng) {
			return $lng;
		}
		function user_id ($user_id) {
			return $user_id;
		}

		function save() {

			$description = $this->description;
			$email		 = $this->email;
			$phone 		 = $this->phone;
			$social 	 = $this->social;

			$stmt = sprintf(CONTACT_SQL_INSERT, $description, $phone, $email, $social);
			return mysql_query($stmt);
		}
		function update() {
			$lat 	 = $this->lat;
			$lng 	 = $this->lng;
			$user_id = $this->user_id;

			$stmt 	 = sprintf(CONTACT_SQL_UPDATE, $lat, $lng, $user_id);
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