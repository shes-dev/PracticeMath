<?php
session_start();

//ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	
	include '../../v/loginAlert.php';
	include '../../v/structure.php';	
	include '../questionFiles/001-004.php';	
	
	//CARD PAGE
	$cardPageDisplay = new cardPage();
	$cardPageDisplay->displayContent();
	
?>
			


