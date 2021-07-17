<?php
session_start();

//ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	
	include '../../v/loginAlert.php';
	include '../../v/structure.php';	
	include '../questionFiles/005-008.php';	
	
	//CARD PAGE
	$cardPageDisplay = new cardPage(null,10,20);
	$cardPageDisplay->displayContent();
	
?>
			


