<?php
	class Register {

		function user_name ($user_name) {
			return $user_name;
		}
		function user_email ($user_email) {
			return $user_email;
		}
		function user_password ($user_password) {
			return $user_password;
		}
		function user_status ($user_status) {
			return $user_status;
		}
		function user_photo ($user_photo) {
			return $user_photo;
		}

		function save() {

			$user_id				= '';
			$user_name			= $this->user_name;
			$user_email			= $this->user_email;
			$user_password	= $this->user_password;
			$user_status 		= $this->user_status;
			$user_photo 		= $this->user_photo;

			$stmt = sprintf(REGISTER_SQL_INSERT, $user_id, $user_name, $user_email, $user_password, $user_status, $user_photo);
			return mysql_query($stmt);
		}
	}
?>