<?php
	// members IS440: radin, chor, channa.

	require("sql.php");

	function __autoload($class_name){
		include $class_name . '.php';
	}
	$opr = new Operation;
	$opr->contact = new Contact;
?>