<?php
session_start();

//ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	
	include '../../v/loginAlert.php';	
	include '../../v/structure.php';	
	
	$headerDisplay = new documentHeader('math');
	$headerDisplay->displayContent();
	
	$subjectDisplay = new subjectHeader('מעגל 01');
	$subjectDisplay->displayContent();
	
	include 'questionFiles/001-004.php';	
	
	//SOLUTIONS
	$solutionDisplay = new solution($solution_array_01->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_02->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_03->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	$solutionDisplay = new solution($solution_array_04->displaySolutionArray());
	$solutionDisplay->displayContent();
	
	
	$middleDisplay = new middlePart();
	$middleDisplay->displayContent();
	
	//QUESTIONS
	//001 on page
	$questionDisplay = new question($solution_array_01->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//002 on page
	$questionDisplay = new question($solution_array_02->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//003 on page
	$questionDisplay = new question($solution_array_03->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//004 on page
	$questionDisplay = new question($solution_array_04->displaySolutionArray());
	$questionDisplay->displayContent();

	$footerDisplay = new footer(1);
	$footerDisplay->displayContent();
?>
			


	



