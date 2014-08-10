<?php
	require("Connection.php");

	Class Operation extends Connection {
		public $contact;
		public $gallery;
		public $about;
		public $tour;

		function __construct() {
			$conn = new Connection;
		}
	}

?>