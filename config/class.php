<?php
	require("sql.php");

	function __autoload($class_name){
		include $class_name . '.php';
	}
	$opr = new Operation;
?>