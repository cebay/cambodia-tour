<?php
	require("Connection.php");

	Class Operation extends Connection {
		public $contact;

		function __construct() {
			$conn = new Connection;
		}
	}
	
?>