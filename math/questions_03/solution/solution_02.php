<?php
session_start();

//ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	
	include '../../v/loginAlert.php';
	include '../../v/structure.php';	
	include '../questionFiles/005-008.php';	
	
	//SOLUTIONS
	$solutionDisplay = new solution($solution_array_01->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_02->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_03->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_04->displaySolutionArray());
	$solutionDisplay->displayContent();
	
?>
			


	


