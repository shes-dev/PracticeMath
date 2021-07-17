<?php
session_start();

// display errors
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// SSL
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

if(!isset($_SESSION["example"])) 
{
   //die('Direct access not permitted');
   header ('location: https://www.explainit.online/s1/v/error.php');
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
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<!-- Links -->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<!-- Angularjs -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<style>
	* 
	{
		font-family: 'Varela Round', sans-serif;
		box-sizing:border-box;
		color:white;
	}
	
	html
		{
			text-align: -webkit-center;
		}
	
	
	body
		{
			background-color:black;
		}
	
	#header_1
	{
		text-align:center;
		color:white;
		margin-bottom:2px;
		margin-top:10px;
	}
	
	#table_1,
	#table_2,
	#table_3,
	#table_4
	{
		width:100%;
		margin:auto;
	}
	
	
	#table_1,
	#table_2,
	#table_3,
	#table_4,
	td
	{
		border:1px white solid;
		color:white;
		text-align:center;
		margin:auto;
		border-collapse:collapse;
	}
	
	#table_1 td,
	#table_2 td,
	#table_3 td,
	#table_4 td
	{
		padding:3px;
		border:1px white solid;
		border-collapse:collapse;
		/*width:10%;*/
	}
	
	#div_table_2,
	#div_table_3,
	#div_table_4
	{
		margin-top:10px;
	}
	
	input
	{
		width:100%;
		text-align:center;
		background:transparent;
		border:none;
		color:white;
		font-size:initial;
		padding:0px;
		direction:ltr;
	}
	
	input:focus
	{
		outline:none;
	}
	
	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button 
	{ 
		-webkit-appearance: none; 
		margin: 0; 
	}
	
	.total
	{
		direction:ltr;
	}
	
	#div_1
	{
		opacity:0;
	}
	
	.rotate
	{
		-moz-transform: rotate(-45deg);                 /*FF*/
		-o-transform: rotate(-45deg);                   /*Opera*/
		-webkit-transform: rotate(-45deg);              /*Safari, Chrome*/
		-ms-transform: rotate(-45deg) !important;       /*IE9*/
        transform: rotate(-45deg);
		font-size:10px;		
	}
	
	.rotate_2
	{
		-moz-transform: rotate(-90deg);                 /*FF*/
		-o-transform: rotate(-90deg);                   /*Opera*/
		-webkit-transform: rotate(-90deg);              /*Safari, Chrome*/
		-ms-transform: rotate(-90deg) !important;       /*IE9*/
        transform: rotate(-90deg);
		font-size:10px;		
	}
	
	#td_1 {
		background-image: linear-gradient(to top,
		black 48%,
		white,
		black 52%);
	}
		
@media only screen and (min-width:800px)
	{
		html
		{
			text-align: -webkit-center;
		}

	body
		{
			background-color:black;
			width:50%;
		}
	}
	
/* w3schools responsive img gallery */

div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>

<body>
<!-- loader func -->
	<div class="loader"></div>
	<script>
	//logging initiation
		console.log("---loader")
		
	//setting width variable
		var a_11_loader = $(window).outerWidth()/2-60;
		
		// debugging
		//console.log("window width: ",$(window).outerWidth());
		//console.log("width from left: ",a_11);
		
	//setting height variable
		var a_12_loader = $(window).outerHeight()/2-60;
		
		// debugging
		//console.log("window height: ",$(window).outerHeight());
		//console.log("height from top: ",a_12_loader);
	
	//setting height and width
		$('.loader').css("left",a_11_loader);
		$('.loader').css("top",a_12_loader);
		
	</script>

<!-- content -->
	<a href="index.php" style="text-decoration:none;"><div style="width:120px;padding:4px;border:0.5px solid white;">דף תרגילים</div></a>

	<div style="width:100%;text-align:right;">
		<div>קבלות</div>
	</div>
	
	<hr>
	
	<div id="div_table_2" style="margin-bottom:6px;">
		<table id="table_2">
			<tr>
				<td colspan="4">מועד השיעור</td>
				<td rowspan="2">קבלה</td>
			</tr>
			
			<tr>
				<!--<td class="rotate_2">שנה</td>-->
				<td>שנה</td>
				<!--<td class="rotate_2">חודש</td>-->
				<td>חודש</td>
				<td>תאריך</td>
				<td>יום</td>
				
				
			</tr>
						
			<tr>
				<!--<td class="rotate_2" rowspan="1">2018</td>-->
				<td>2018</td>
				<td>03</td>
				
				<td class="total">27.03.18</td>
				<td class="total">שלישי</td>
				<td class="total"></td>
							
			</tr>
				
		</table>
	
	</div>
	
	<!-- w3schools responsive gallery -->
<!--
	<div>
	
		<h2>קבלות אחרונות</h2>
-->
		<!--<h4>קבלות נוספות בבחירה מהטבלה למעלה</h4>-->
<!--
		<div class="responsive">
		  <div class="gallery">
			<a target="_blank" href="img/2.JPG">
			  <img src="img/2.JPG" alt="קבלה" width="300" height="200">
			</a>
			<div class="desc">27.03.18</div>
		  </div>
		</div>
		
		<div class="responsive">
		  <div class="gallery">
			<a target="_blank" href="img/1.JPG">
			  <img src="img/1.JPG" alt="קבלה" width="600" height="400">
			</a>
			<div class="desc">Add a description of the image here</div>
		  </div>
		</div>

		<div class="responsive">
		  <div class="gallery">
			<a target="_blank" href="img/2.JPG">
			  <img src="img/2.JPG" alt="קבלה" width="600" height="400">
			</a>
			<div class="desc">Add a description of the image here</div>
		  </div>
		</div>

		<div class="responsive">
		  <div class="gallery">
			<a target="_blank" href="img/1.JPG">
			  <img src="img/1.JPG" alt="קבלה" width="600" height="400">
			</a>
			<div class="desc">Add a description of the image here</div>
		  </div>
		</div>

		<div class="clearfix"></div>

		<div style="padding:6px;">
			<p>קבלות נוספות זמינות בבחירה מהטבלה למעלה.</p>
		</div>

	</div>
-->	
	
	<div style="width:100%;text-align:right;">
		<div>תוכן</div>
	</div>
	
	<hr>
	
	<div id="div_table_2" style="margin-bottom:6px;">
		<table id="table_2">
			<tr>
				<td colspan="4">מועד השיעור</td>
				<td>תוכן השעור</td>
			</tr>
			
			<tr>
				<!--<td class="rotate_2">שנה</td>-->
				<td>שנה</td>
				<!--<td class="rotate_2">חודש</td>-->
				<td>חודש</td>
				<td>תאריך</td>
				<td>יום</td>
				<td>נושא</td>
				
			</tr>
						
			<tr>
				<!--<td class="rotate_2" rowspan="1">2018</td>-->
				<td>2018</td>
				<td>03</td>
				
				<td class="total">27.03.18</td>
				<td class="total">שלישי</td>
				<td class="total">בעיות מילוליות</td>
				
									
			</tr>
			
		</table>
	
	</div>
	
	<!-- w3schools responsive gallery -->
	<div>
	
		<h2>שאלות מהשעור</h2>
		<!--<h4>קבלות נוספות בבחירה מהטבלה למעלה</h4>-->

		<div class="responsive">
		  <div class="gallery">
			<a target="_blank" href="img/IMG_3639.jpeg">
			  <img src="img/IMG_3639.jpeg" alt="שאלה_1" width="300" height="200">
			</a>
			<div class="desc">1</div>
		  </div>
		</div>
		
		<div class="responsive">
		  <div class="gallery">
			<a target="_blank" href="img/IMG_3640.jpeg">
			  <img src="img/IMG_3640.jpeg" alt="תשובה_1" width="600" height="400">
			</a>
			<div class="desc">תשובה 1</div>
		  </div>
		</div>

		<div class="responsive">
		  <div class="gallery">
			<a target="_blank" href="img/IMG_3641.jpeg">
			  <img src="img/IMG_3641.jpeg" alt="שאלה_2" width="600" height="400">
			</a>
			<div class="desc">2</div>
		  </div>
		</div>

		<div class="responsive">
		  <div class="gallery">
			<a target="_blank" href="img/IMG_3642.jpeg">
			  <img src="img/IMG_3642.jpeg" alt="תשובה_2" width="600" height="400">
			</a>
			<div class="desc">תשובה 2</div>
		  </div>
		</div>

		<div class="clearfix"></div>

	</div>
	
</body>
</html>
