<?php
	// members IS440: radin, chor, channa.

	session_start();

	// echo $current_page; exit(0);
	$redirect_uri = ($current_page == 'root') ? 'login/' : '../login';
	
	if( $active_page != 'frontend' ) {
		$redirect_uri = '../' . $redirect_uri;
	}

	if($active_page != 'frontend') {
		if($_SESSION['user_id'] == '') {
			header('location: ' . $redirect_uri);
		}
	}
	
	if($_GET['action'] == 'logout') {
		unset($_SESSION['user_id']);
		header('location: ' . $redirect_uri);
	}

	require("sql.php");

	function __autoload($class_name){
		include $class_name . '.php';
	}
	$opr = new Operation;
	$opr->contact 	= new Contact;
	$opr->gallery 	= new Gallery;
	$opr->about 		= new About;
	$opr->tour 			= new Tour;
	$opr->homeNews	= new HomeNews;
	$opr->homeSlide = new HomeSlide;
	$opr->register 	= new Register;
?>