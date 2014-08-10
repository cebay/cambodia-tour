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
		function save() {

			$description = $this->description;
			$email		 = $this->email;
			$phone 		 = $this->phone;
			$social 	 = $this->social;

			$stmt = sprintf(CONTACT_SQL_INSERT, $description, $phone, $email, $social);
			return mysql_query($stmt);
		}
		// basic info
		// save map, logo
		// update
		// delete
	}
?>