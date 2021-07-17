<?php
session_start();

// display errors
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');

// SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

if(!isset($_SESSION["example"])) 
{
   //die('Direct access not permitted');
   header ('location: ../../../../v/error.php');
}
?>

<!DOCTYPE html>
<html lang="en-US" dir="rtl">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67294456-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-67294456-19');
</script>

<!-- Document -->
	<!-- Encoding -->
	<meta charset="utf-8">
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=0.4, maximum-scale=1,user-scalable=0"/> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=, user-scalable=0"/> -->

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<!-- Links -->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- LOCAL -->
		<!-- <link rel="stylesheet" href="local.css"> -->
		
		<!-- TABLE -->
		<!-- <link rel="stylesheet" href="table.css"> -->
		
		<!-- LOCAL -->
		<link rel="stylesheet" href="w3 css local.css">
		
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		
		<!-- Angularjs -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>

<body>

<div class="loader"></div>
<script>
//logging initiation
	console.log("---loader")
	
//setting width variable
	var a_11_loader = $(window).outerWidth()/2-60;
	
	//console.log("window width: ",$(window).outerWidth());
	//console.log("width from left: ",a_11);
	
//setting height variable
	var a_12_loader = $(window).outerHeight()/2-60;
	
	//console.log("window height: ",$(window).outerHeight());
	//console.log("height from top: ",a_12_loader);

//setting height and width
	$('.loader').css("left",a_11_loader);
	$('.loader').css("top",a_12_loader);
	
</script>

<div id="div_1" ng-app="app_1" ng-controller="controller_1">

<?php include '../yacht/structure.php'; ?>
<?php include '../yacht/check_6.php'; ?>
<?php include '../yacht/check_9.php'; ?>

</body>
</html>
