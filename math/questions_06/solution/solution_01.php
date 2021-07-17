<?php
session_start();

//ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	
	include '../../../v/loginAlert.php';
	include '../../../v/structure.php';	
	include '../questionFiles/001-004.php';	
	
	$question_index = substr(dirname(__DIR__), -2,2);
	$solution_index = substr(__FILE__, -5,1);
	
	$start_index = ($question_index - 10)*40 + ($solution_index - 1)*10;
	$end_index = $start_index + 10;
	
	//VIDEO GALLERY
	$videoGalleryDisplay = new videoGallery(null,$start_index,$end_index);
	$videoGalleryDisplay->displayContent();
	
?>
			


