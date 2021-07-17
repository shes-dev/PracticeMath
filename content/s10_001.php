<?php
//SESSION
	session_start();

//ERRORS
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');

//HTTPS
	if($_SERVER["HTTPS"] != "on")
	{
		header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
		exit();
	}

//VARS
	$_SESSION['count'] = 0;
	$_SESSION['wl'] = 0;
	$_SESSION['v_wait'] = 0;

?>

<!DOCTYPE html>
<html lang="iw" dir="rtl">
<head>

<!-- OLD Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119966024-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		
		gtag('config', 'UA-119966024-1');
		</script>
-->	

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145391790-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145391790-1');
</script>


<!-- LINKS  -->
	<!-- FAVICON --><!-- OUTPUT 01 -->
	<link rel="icon" type="image/png" href="css/favicon.ico">
	
	<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
	<link rel="apple-touch-icon" sizes="16x16" href="css/favicon-16x16.png" />
	<link rel="apple-touch-icon" sizes="32x32" href="css/favicon-32x32.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="css/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="512x512" href="css/android-chrome-512x512.png" />
	<link rel="apple-touch-icon" sizes="192x192" href="css/android-chrome-192x192.png" />

	<!-- EMOJI CSS --><!-- OUTPUT 03 -->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	
	<!-- ENCODING -->
	<meta charset="utf-8">
	
	<!-- TITLE -->
	<title>PRACTICE IT</title>
	
	<!-- DESCRIPTION -->
	<meta name="description" content='מתאמנים פה.'>
		
	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	
	<!-- Links -->
		<!-- Styling-->
		<style>
			/* Ribbon Stuff */
			.corner-ribbon-main-wrapper {
			margin: 50px auto;
			width: 280px;
			height: 370px; 
			background: blue;
			border-radius: 10px; 
			box-shadow: 0 0 8px rgba(0,0,0,0.3);
			position: relative;
			z-index: 90;
			}
			
			.ribbon-wrapper {
			width: 85px;
			height: 88px;
			overflow: hidden;
			position: absolute;
			top: -3px;
			left: -3px;
			}
				
			.ribbon {
				font: bold 15px Sans-Serif;
				color: #333;
				text-align: center;
				text-shadow: rgba(255, 255, 255, 0.5) 0 1px 0;
				position: relative;
				/*padding: 7px 0;*/
				padding: 0px 0;
			
				transform: rotate(-45deg);
			
				/*left: -30px;*/
				left: -14px;
				/*top: 15px;*/
				top: 14px;
				/*width: 120px;*/
				width: 100px;
			
				background-color: #BFDC7A;
				background-image: -webkit-linear-gradient(top, #BFDC7A, #8EBF45);
				background-image: linear-gradient(top, #BFDC7A, #8EBF45);
			
				box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
			}
			
			.ribbon:before, .ribbon:after {
				content: "";
				border-top: 3px solid #6e8900;
				border-left: 3px solid transparent;
				border-right: 3px solid transparent;
				position: absolute;
				bottom: -3px;
			}
			
			.ribbon:before {
				left: 0;
			}
			
			.ribbon:after {
				right: 0;
			}
			
			/* ribbon_1 */
			
			.ribbon_1 {
				font: bold 15px Sans-Serif;
				color: #333;
				text-align: center;
				text-shadow: rgba(255, 255, 255, 0.5) 0 1px 0;
				position: relative;
				/*padding: 7px 0;*/
				padding: 0px 0;
			
				transform: rotate(-45deg);
			
				/*left: -30px;*/
				left: -14px;
				/*top: 15px;*/
				top: 14px;
				/*width: 120px;*/
				width: 100px;
			
				background-color: #dcd47a;
				/* background-image: -webkit-linear-gradient(top, #BFDC7A, #8EBF45); */
				background-image: linear-gradient(top, #BFDC7A, #8EBF45);
			
				box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
			}
			
			.ribbon_1:before, .ribbon_1:after {
				content: "";
				border-top: 3px solid #6e8900;
				border-left: 3px solid transparent;
				border-right: 3px solid transparent;
				position: absolute;
				bottom: -3px;
			}
			
			.ribbon_1:before {
				left: 0;
			}
			
			.ribbon_1:after {
				right: 0;
			}
			
			/* ribbon_2 */
			
			.ribbon_2 {
				font: bold 15px Sans-Serif;
				color: #333;
				text-align: center;
				text-shadow: rgba(255, 255, 255, 0.5) 0 1px 0;
				position: relative;
				/*padding: 7px 0;*/
				padding: 0px 0;
			
				transform: rotate(-45deg);
			
				/*left: -30px;*/
				left: -14px;
				/*top: 15px;*/
				top: 14px;
				/*width: 120px;*/
				width: 100px;
			
				background-color: #dc7ab5;
				/* background-image: -webkit-linear-gradient(top, #BFDC7A, #8EBF45); */
				background-image: linear-gradient(top, #BFDC7A, #8EBF45);
			
				box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
			}
			
			.ribbon_2:before, .ribbon_2:after {
				content: "";
				border-top: 3px solid #6e8900;
				border-left: 3px solid transparent;
				border-right: 3px solid transparent;
				position: absolute;
				bottom: -3px;
			}
			
			.ribbon_2:before {
				left: 0;
			}
			
			.ribbon_2:after {
				right: 0;
			}

			/* ribbon_3 */
			
			.ribbon_3 {
				font: bold 15px Sans-Serif;
				color: #333;
				text-align: center;
				text-shadow: rgba(255, 255, 255, 0.5) 0 1px 0;
				position: relative;
				/*padding: 7px 0;*/
				padding: 0px 0;
			
				transform: rotate(-45deg);
			
				/*left: -30px;*/
				left: -14px;
				/*top: 15px;*/
				top: 14px;
				/*width: 120px;*/
				width: 100px;
			
				background-color: silver;
				/* background-image: -webkit-linear-gradient(top, #BFDC7A, #8EBF45); */
				background-image: linear-gradient(top, #BFDC7A, #8EBF45);
			
				box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
			}
			
			.ribbon_3:before, .ribbon_3:after {
				content: "";
				border-top: 3px solid #6e8900;
				border-left: 3px solid transparent;
				border-right: 3px solid transparent;
				position: absolute;
				bottom: -3px;
			}
			
			.ribbon_3:before {
				left: 0;
			}
			
			.ribbon_3:after {
				right: 0;
			}
			
			/* ribbon_right bottom */
			
			.ribbon-wrapper_bottom 
			{
				width: 42px;
				height: 40px;
				overflow: hidden;
				position: absolute;
				top: 40px;
				right: 0px;
				/*background-color:red;*/
			}
			
			.ribbon_right_bottom {
				font: bold 15px Sans-Serif;
				color: #333;
				text-align: center;
				/*text-shadow: rgba(255, 255, 255, 0.5) 0 1px 0;*/
				position: relative;
				/*padding: 7px 0;*/
				padding: 0px 0;
			
				/*transform: rotate(45deg);*/
			
				/*left: -30px;*/
				right: 5px;
				/*top: 15px;*/
				top: 10px;
				/*width: 120px;*/
				width: 30px;
			
				/*background-color: silver;*/
				/* background-image: -webkit-linear-gradient(top, #BFDC7A, #8EBF45); */
				background-image: linear-gradient(top, #BFDC7A, #8EBF45);
			
				/*box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);*/
			}
			
			/*	
				.ribbon_right_bottom:before, .ribbon_right_bottom:after {
					content: "";
					border-top: 3px solid #6e8900;
					border-left: 3px solid transparent;
					border-right: 3px solid transparent;
					position: absolute;
					bottom: -3px;
				}
			*/
			
			.ribbon_right_bottom:before {
				left: 0;
			}
			
			.ribbon_right_bottom:after {
				right: 0;
			}
			
			.ribbon_right_top
			{
				position: relative;
				right: -73px;
				top: -87px;
				transform: rotate(45deg);
			}
			.ribbon_right_top:before {
				left: 0;
			}
			
			.ribbon_right_top:after {
				right: 0;
			}
			.
			/* General stuff 2.css */
			
			section, footer, nav {
			display: block;
			}
			
			body {
			font-family: 'Varela Round', sans-serif;
			-webkit-text-size-adjust: none;
			color: #333;
			max-width: 720px;
			margin: 0 auto;
			padding: 10px;
			}
			
			input
			{
			font-family: 'Varela Round', sans-serif;
			}
			
			a {
			color: blue;
			color: hsl( 220, 90%, 40% );
			text-decoration: none;
			}
			
			a:hover {
			background-color: blue;
			background-color: hsl( 220, 90%, 50% );
			color: purple;
			}
			
			#options {
			position: relative;
			z-index: 100;
			margin-bottom: 40px;
			}
			
			button {
			font-size: 16px;
			-webkit-appearance: push-button;
			}
			
			footer {
			/*border-top: 1px solid #CCC;*/
			font-size: 0.8em;
			position: relative;
			z-index: 100;
			}
			
			#disclaimer {
			color: red;
			font-weight: bold;
			display: none;
			}
			.no-csstransforms3d #disclaimer { display: block; }
			
			hr {
			border: none;
			border-top: 1px solid #CCC;
			}
			
			figure {
			margin: 0;
			}
			
			code {
			font-family: 'Monaco', 'Menlo', monospace;
			}
			
			/* index navigation */
			
			.index nav ul {
			list-style: none;
			margin: 0 0 3.0em 0;
			padding: 0;
			}
			
			.index nav ul a {
			display: block;
			font-size: 18px;
			font-weight: bold;
			line-height: 24px;
			padding: 10px;
			border: 1px solid #CCC;
			border-bottom: none;
			}
			
			.index nav ul li:first-child a {
			border-radius: 10px 10px 0 0;
			}
			
			.index nav ul li:last-child a {
			border-radius: 0 0 10px 10px;
			border-bottom: 1px solid #CCC;
			}
			
			/**** Docs ****/
			
			body.doc { max-width: 900px; }
			
			.doc #content {
			font-size: 14px;  
			line-height: 1.5em;
			}
			
			.doc #content blockquote {
			margin-left: 0;
			padding: 0.8em;
			background: #EEE;
			background: hsla( 0, 0%, 0%, 0.04 );
			}
			
			.doc #content img {
			border: 1px solid #CCC;
			display: inline-block;
			}
			
			.doc #content pre {
			font-size: 12px;
			line-height: 1.5em;
			}
			
			.doc nav h1 {
			font-size: 20px;
			}
			
			.doc nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
			}
			
			.doc nav li a {
			display: block;
			padding: 0.3em 0;
			}
			
			.doc nav li.current a {
			font-weight: bold;
			color: #333;
			}
			.doc nav li.current a:hover { color: white; }
			
			
			
			@media screen and (min-width: 768px)
			{
			
				body.doc #content 
				{
					padding-left: 220px;
				}
				
				.doc #doc-nav-wrapper 
				{
					position: fixed;
					left: 0;
					top: 0;
					width: 100%;
				}
				
				.doc .doc-nav-positioner 
				{
					max-width: 900px;
					margin: 0 auto;
					position: relative;
				}
				
				.doc nav 
				{
					width: 200px;
					font-size: 14px;
					position: absolute;
					top: 10px;
					left: 10px;
				}
				
				.doc nav h1 
				{
					margin-top: 0;
				}
			
			}
			
			/* proxy range */
			
			.proxy-range {
			display: inline-block;
			position: relative;
			height: 30px;
			width: 200px;
			border: 1px solid hsla( 0, 0%, 0%, 0.15 );
			background-color: hsla( 0, 0%, 0%, 0.02 );
			border-radius: 15px;
			box-shadow: inset 0 1px 7px hsla( 0, 0%, 0%, 0.3 );
			}
			
			.proxy-range.highlighted {
			background-color: hsla( 220, 90%, 50%, 0.15 );
			}
			
			.proxy-range .handle {
			width: 38px;
			height: 38px;
			border-radius: 20px;
			border: 1px solid hsla(0, 0%, 0%, 0.3);
			position: absolute;
			top: -5px;
			left: -20px;
			background-color: hsla( 220, 70%, 60%, 1.0 );
			background-image: -webkit-gradient(radial, center 15%, 0, center 30%, 30, 
				from(            hsla( 0, 0%, 100%, 0.6 ) ),  
				color-stop( 50%, hsla( 0, 0%, 100%, 0.0 ) ),
				color-stop( 50%, hsla( 0, 0%,   0%, 0.0 ) ),
				to(              hsla( 0, 0%,   0%, 0.5 ) )
			);
			background-image: -moz-radial-gradient(center 30%, cover,
				hsla( 0, 0%, 100%, 0.5 ),  
				hsla( 0, 0%, 100%, 0.0 ) 50%,
				hsla( 0, 0%,   0%, 0.0 ) 50%,
				hsla( 0, 0%,   0%, 0.5 )
			);
			box-shadow: 
				0  2px 0px -1px hsla( 0, 0%, 100%, 0.7 ) inset, 
				0 -4px 2px -1px hsla( 0, 0%,   0%, 0.1 ) inset, 
				0  1px 2px  0px hsla( 0, 0%,   0%, 0.3 )
			;
			-webkit-transition-property: width, height, top, left, -webkit-border-radius;
				-moz-transition-property: width, height, top, left, -moz-border-radius;
			-webkit-transition-duration: 0.1s;
				-moz-transition-duration: 0.1s;
			}
			
			.proxy-range.highlighted .handle {
			height: 98px;
			top: -35px;
			width: 4px;
			left: -3px;
			background-image: -webkit-gradient(linear, 0 top, 0 bottom, 
				from(            hsla( 0, 0%, 100%, 0.6 ) ),  
				color-stop( 50%, hsla( 0, 0%, 100%, 0.0 ) ),
				color-stop( 50%, hsla( 0, 0%,   0%, 0.0 ) ),
				to(              hsla( 0, 0%,   0%, 0.5 ) )
			);
			border-radius: 3px;
			}
			
			/******* Pygments *******/
			
			pre {
			background: #111;
			color: white;
			padding: 0.8em;
			white-space: pre-wrap;
			}
			
			
			code .s1,
			code .s { color: #78BD55; } /* string */
			code .mi, /* integer */
			code .cp { color: #5298D4; } /* doctype */
			code .k { color: #E39B79; } /* keyword */
			code .kd, /* storage */
			code .na { color: #A9D866; } /* markup attribute */
			code .p  { color: #EDB; } /* punctuation */
			code .o  { color: #F63; }   /* operator */
			code .nb { color: #AA97AC;} /* support */
			
			/* comment */
			code .c,
			code .c1 { color: #666; font-style: italic; }
			
			code .nt { color: #A0C8FC; } /* Markup open tag */
			
			code .nf { color: #9EA8B8; } /* css id */
			code .nc { color: #A78352; }  /* CSS class */
			code .m  { color: #DE8E50; } /* CSS value */
			code .nd { color: #9FAD7E; } /* CSS pseudo selector */
			
				/* For this file - 4.css */
				/* For Footers */
				
				/*
					#footer_1
					{
						width:50%;
						float:right;
					}
					
					#footer_2
					{
						width:50%;
						float:left;
					}
				*/
				
				/* For Stations Div */
					
				div.verticalLine
				{
					border:solid black;
					width:0.25px;
					height:3vh;
					margin:auto;
					background-color:black;
					display:none;
				}
				
				/*---------------*/
				* 
				{
					font-family: 'Varela Round', sans-serif;
					box-sizing:border-box;
				}
						
				#div_upper 
				{
					width:100%;
					background-color:green;
					color:white;
				}
					
				#div_event 
				{	
					width:100%;
					background-color:purple;
				}
				
				#div_trail
				{
					float:right;
					/*height:20%;*/
					/*overflow-x:scroll;*/
				}
				
				#station_table
				{
					border-collapse:collapse;
				}
								
				#station_table td
				{
					border:0.5px solid black;
					border-collapse:collapse;
				}
				
				#station_result,
				#station_result_1_1
				{
					margin-right:6px;
					margin-top:9px;
				}
				
				#station_result>b 
				{
					font-size:16px;
				}
				
				#station_header,
				#station_header_2
				{
					width:100%;
				}
					
				#station_header>b 
				{
					font-size:16px;
				}
				
				#station_header_2>b 
				{
					font-size:16px;
				}
				
				#station_result_1_1>b 
				{
					font-size:16px;
				}
				
				#station_result,
				#station_result_1_1,
				#station_result_home
				
				{
					/*
					display:inline-block;
					margin-top:3px;
					margin-bottom:3px;
					*/
					float:right;
					height:100%;
				}
				
				#station_result_home,
				#station_result_home_2,
				#station_result_home_3,
				
				#div_story
				{
					display:inline-block;
					text-align:center;
					font-size:16px;
					border:1px black solid;
					padding:2px 4px;
					vertical-align:top;
					margin-top:3px;
					margin-bottom:3px;
				}
				
				#station_result_home
				{
					margin:6px auto;
				}
				
				#div_story
				{
					display:block;
					text-align:initial;
				}
				
				#station_result,
				#station_result_1_1
				{
					border-radius:13px 0px 13px 13px;
					border:dashed;
					padding:14px 6px;
				}
				
				#station_result_home
				{
					border-radius:14px;
					border:solid;
					margin-right:6px;
					padding:14px 6px;
				}
				
				a,li
				{
			
					/* These are technically the same, but use both */
					overflow-wrap: break-word;
					word-wrap: break-word;
			
					-ms-word-break: break-all;
					/* This is the dangerous one in WebKit, as it breaks things wherever */
					word-break: break-all;
					/* Instead use this non-standard one: */
					word-break: break-word;
			
					/* Adds a hyphen where the word breaks, if supported (No Blink) */
					-ms-hyphens: auto;
					-moz-hyphens: auto;
					-webkit-hyphens: auto;
					hyphens: auto;
			
					}
					
					
					* {font-size:16px;}
					
					div[contenteditable]
					{
						border: 1px solid black;
						max-height: 200px;
						overflow: auto;
					}
					
					/* Picture gallery w3schools */
						@media only screen and (max-width: 700px)
						{
							.responsive 
							{
								width: 49.99999%;
								margin: 6px 0;
							}
						}
					
						@media only screen and (max-width: 500px)
						{
							.responsive 
							{
							width: 100%;
							}
							
							.dropdown-content_co 
							{
							top: -4px;
							}
							
							/*checking something*/
							#station_result,
							#station_result_1_1,
							#station_result_home,
							#station_result_home_2,
							#station_result_home_3,
							#station_header,
							#station_header_2
							{
								width:100%;
								margin-top:3px;
								margin-bottom:3px;
								text-align:center;
							}
							
							#div_trail
							{
								height:initial;
								overflow-y:scroll;
								overflow-x:hidden;
							}
						}
						
						.clearfix:after 
						{
							content: "";
							display: table;
							clear: both;
						}
						
									
					/*Tables and other stuff from 2.php*/	
							
						#div_header_2 
						{
							width:100%;
							background-color:blue;
						}
						
						#div_table_names 
						{
							width:100%;
							margin:auto;
						}
						
						#div_table_drills, 
						#div_table_drills_2 
						{
							width:100%;
							margin:auto;
						}
							
						#table_names 
						{	
							width:100%;
							margin:auto;
							border:1px solid black;
							text-align:center;
							border-collapse:collapse;
						}
						
						#table_names th 
						{
							border:1px solid black;
							border-collapse:collapse;
						}
							
						#table_drills 
						{
							width:100%;
							margin:auto;
							border:1px solid black;
							text-align:center;
							border-collapse:collapse;
						}
						
						#table_drills th 
						{
							border:1px solid black;
							border-collapse:collapse;
						}
						
						#table_drills td 
						{
							border:1px black solid;
							border-right-style:ridge;
						}
						
						#table_colors td 
						{
							padding:2px 10px;
							border:1px black solid;
						}
						
						hr 
						{
							margin:0.5px;
						}
						
						#hr_1 
						{
							margin:-0.5px;
							height:0.75px;
							background-color:darkgrey;
						}
							
						#hr_2 
						{
							margin:0.5px;
							border-style:solid;
						}
					
						.giraffe,
						.example,
						.car,
						.steel,
						.paper,
						.rock,
						.tree, 
						.water,
						.metal,
						.oil,
						.copper,
						.bronze,
						.silver,
						.gold,
						{
							display:none;
						}
						
						#comments_list a {
							/*display:inline;*/
							margin:0px;
						}
									
						/* w3schools loader */
						
						#div_header_3,
						#div_1,
						#div_table_drills,
						#div_table_drills_2,
						#hr_number_1,
						#new_comment,
						#footer_1
						{opacity:0;}
						
						.loader {
						position:absolute;
						//left:40%;
						//top:40vh;
						border: 16px solid #f3f3f3;
						border-radius: 50%;
						border-top: 16px solid #3498db;
						width: 120px;
						height: 120px;
						-webkit-animation: spin 2s linear infinite;
						animation: spin 2s linear infinite;
						}
			
						@-webkit-keyframes spin {
						0% { -webkit-transform: rotate(0deg); }
						100% { -webkit-transform: rotate(360deg); }
						}
			
						@keyframes spin {
						0% { transform: rotate(0deg); }
						100% { transform: rotate(360deg); }
						}
						
			/* w3cshools drop down search button */
						
			.dropbtn {
				background-color: #4CAF50;
				color: white;
				padding: 4px;
				font-size: 16px;
				border: none;
				cursor: pointer;
			}
			
			.dropbtn:hover, .dropbtn:focus {
				background-color: #3e8e41;
			}
			
			.dropbtn_2 {
				background-color: #4CAF50;
				color: white;
				padding: 4px;
				font-size: 16px;
				border: none;
				margin-bottom:5px;
				/*cursor: pointer;*/
			}
			
			/*
				.dropbtn_2:hover, .dropbtn_2:focus {
					background-color: #3e8e41;
				}
			*/
			#myInput {
				border-box: box-sizing;
				/*background-image: url('png/searchicon_2.png');*/
				/background-position: 6px 8px;
				background-repeat: no-repeat;
				font-size: 16px;
				padding: 14px 20px 12px 45px;
				border: none;
			}
			
			.dropdown {
				position: relative;
				display: inline-block;
				margin-top:3px;
			}
			
			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f6f6f6;
				/*height:240px;	*/
				/*min-width: 200%;*/
				/*max-width: 200%;*/
				/*overflow-y: scroll;*/
				/*overflow-x: hidden;*/
				overflow:auto;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}
			
			.dropdown-content a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
			}
			
			.dropdown a:hover {background-color: #ddd}
			
			.show {display:block;}
			
			.dropdown-content p {
				color: black;
				padding: 6px 9px;
				text-decoration: none;
				display: block;
				margin: 0px;
			}
			
			.dropdown p:hover {background-color: #ddd}
			
			/* w3cshools search button */			
			.dropbtn_co {
				background-color: #4CAF50;
				color: white;
				padding: 4px;
				font-size: 16px;
				border: none;
				cursor: pointer;
				display:inline-block;
			}
			
			.dropbtn_co:hover, .dropbtn_co:focus {
				background-color: #3e8e41;
			}
			#myInput_co {
				border-box: box-sizing;
				/*background-image: url('png/searchicon_2.png');*/
				/*background-position: 6px 8px;*/
				/*background-repeat: no-repeat;*/
				font-size: 16px;
				/*padding: 14px 20px 12px 45px;*/
				padding: 4px;
				border: none;
				height:100%;
			}
			
			.dropdown_co {
				position: relative;
				display: inline-block;
			}
			
			.dropdown-content_co {
				/*display: none;*/
				position: absolute;
				background-color: #f6f6f6;
				/*height:240px;	*/
				min-width: 100%;
				/*max-width: 200%;*/
				overflow: auto;
				/*overflow-x: hidden;*/
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
				top:0px;
				left:100%;
			}
			
			.dropdown-content_co a {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
			}
			
			.dropdown_co a:hover {background-color: #ddd}
			
			.show {display:block;}
			
			.dropdown-content_co p {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				margin: 0px;
			}
			
			.dropdown_co p:hover {background-color: #ddd}
			
			/* w3cshools drop down by_date */
						
			.dropbtn_by_date 
				{
					background-color: #4CAF50;
					color: white;
					padding: 4px;
					font-size: 16px;
					border: none;
					cursor: pointer;
				}
			
			.dropbtn_by_date:hover,
			.dropbtn_by_date:focus 
				{
					background-color: #3e8e41;
				}
			
			.dropdown_by_date 
				{
					position: relative;
					display: inline-block;
					margin-top:3px;
				}
			
			.dropdown-content_by_date
				{
					display: none;
					position: absolute;
					background-color: #f6f6f6;
					/*height:240px;	*/
					min-width: 200%;
					/*max-width: 200%;*/
					/*overflow-y: scroll;*/
					/*overflow-x: hidden;*/
					overflow:auto;
					box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
					z-index: 1;
				}
			
			.show {display:block;}
			
			.dropdown-content_by_date p {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				margin: 0px;
			}
			
			.dropdown_by_date p:hover {background-color: #ddd}
			
			/* w3cshools drop down by_popularity */
						
			.dropbtn_by_popularity 
				{
					background-color: #4CAF50;
					color: white;
					padding: 4px;
					font-size: 16px;
					border: none;
					cursor: pointer;
				}
			
			.dropbtn_by_popularity:hover,
			.dropbtn_by_popularity:focus 
				{
					background-color: #3e8e41;
				}
			
			.dropdown_by_popularity 
				{
					position: relative;
					display: inline-block;
					margin-top:3px;
				}
			
			.dropdown-content_by_popularity
				{
					display: none;
					position: absolute;
					background-color: #f6f6f6;
					/*height:240px;	*/
					min-width: 200%;
					/*max-width: 200%;*/
					/*overflow-y: scroll;*/
					/*overflow-x: hidden;*/
					overflow:auto;
					box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
					z-index: 1;
				}
			
			.show {display:block;}
			
			.dropdown-content_by_popularity p {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				margin: 0px;
			}
			
			.dropdown_by_popularity p:hover {background-color: #ddd}
			
			/* w3cshools drop down by_accordance */
						
			.dropbtn_by_accordance 
				{
					background-color: #4CAF50;
					color: white;
					padding: 4px;
					font-size: 16px;
					border: none;
					cursor: pointer;
				}
			
			.dropbtn_by_accordance:hover,
			.dropbtn_by_accordance:focus 
				{
					background-color: #3e8e41;
				}
			
			.dropdown_by_accordance 
				{
					position: relative;
					display: inline-block;
					margin-top:3px;
				}
			
			.dropdown-content_by_accordance
				{
					display: none;
					position: absolute;
					background-color: #f6f6f6;
					/*height:240px;	*/
					min-width: 200%;
					/*max-width: 200%;*/
					/*overflow-y: scroll;*/
					/*overflow-x: hidden;*/
					overflow:auto;
					box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
					z-index: 1;
				}
			
			.show {display:block;}
			
			.dropdown-content_by_accordance p {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				margin: 0px;
			}
			
			.dropdown_by_accordance p:hover {background-color: #ddd}
			
			/* w3cshools drop down by_users */
						
			.dropbtn_by_users 
				{
					background-color: #4CAF50;
					color: white;
					padding: 4px;
					font-size: 16px;
					border: none;
					cursor: pointer;
				}
			
			.dropbtn_by_users:hover,
			.dropbtn_by_users:focus 
				{
					background-color: #3e8e41;
				}
			
			.dropdown_by_users 
				{
					position: relative;
					display: inline-block;
					margin-top:3px;
				}
			
			.dropdown-content_by_users
				{
					display: none;
					position: absolute;
					background-color: #f6f6f6;
					/*height:240px;	*/
					min-width: 200%;
					/*max-width: 200%;*/
					/*overflow-y: scroll;*/
					/*overflow-x: hidden;*/
					overflow:auto;
					box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
					z-index: 1;
				}
			
			.show {display:block;}
			
			.dropdown-content_by_users p {
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				margin: 0px;
			}
			
			.dropdown_by_users p:hover {background-color: #ddd}
			
			body {
			/*font-family: 'Helvetica Neue', Arial, sans-serif;*/
			-webkit-text-size-adjust: none;
			color: #333;
			/*max-width: 720px;*/
			margin: 0 auto;
			padding: 10px;
			}
			
			* {
				box-sizing: border-box;
			}
			
			input 
			{
				border-radius:0px;
			}
			
			.v_y
			{
				color:green;
			}
			
			.v_n
			{
				color:red;
			}
			
			#most_popular
			{
				display:block;
				float:right;
				clear:both;
				color:white;
				background-color:#9C27B0;
				padding:3px;
			}
			
			#most_accordance
			{
				display:block;
				float:right;
				clear:both;
				color:white;
				background-color:#9C27B0;
				padding:3px;
			}
			
			#most_accordance_minus
			{
				display:block;
				float:right;
				clear:both;
				color:white;
				background-color:#9C27B0;
				padding:3px;
			}
			
		</style>
		
		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- EMOJI CSS -->
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- SCRIPTS -->	
	<!-- ajax_checked script -->
	<!-- get_check_marks_of_group script -->
</head>

<body style="width:100%;position:relative;">

	<!-- Include loader.php -->		
		<!-- Loader -->
		<div class="loader"></div>
		
	<!-- loader script - loader.js-->
	
	<!-- LOADER -->
	<script>
		// START
		console.log("---loader")
			
		// setting width variable
			var a_11_loader = $(window).outerWidth()/2-60;
			
			//debugging
				//console.log("window width: ",$(window).outerWidth());
				//console.log("width from left: ",a_11);
			
		// setting height variable
			var a_12_loader = $(window).outerHeight()/2-60;
			
			//console.log("window height: ",$(window).outerHeight());
			//console.log("height from top: ",a_12_loader);
		
		// setting height and width
			$('.loader').css("left",a_11_loader);
			$('.loader').css("top",a_12_loader);
	</script>		

<!-- Commercials -->	
<!--
	<div class="commercial" style="position:absolute;right:-206px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"></div>
	<div class="commercial" style="position:absolute;right:-206px;top:220px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"></div>
	<div class="commercial" style="position:absolute;right:-206px;top:430px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"></div>
	<div class="commercial" style="position:absolute;right:-206px;top:640px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"></div>
	<div class="commercial" style="position:absolute;right:-206px;top:850px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"></div>
	
	<div class="commercial" style="position:absolute;left:-206px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"><img src="pics/saved.png" style="width:100%;"></div>
	<div class="commercial" style="position:absolute;left:-206px;top:220px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"></div>
	<div class="commercial" style="position:absolute;left:-206px;top:430px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"></div>
	<div class="commercial" style="position:absolute;left:-206px;top:640px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"></div>
	<div class="commercial" style="position:absolute;left:-206px;top:850px;/*background-color:orange;*/width:200px;height:200px;border:1px black dashed;"></div>
-->

	<!-- CONTENT -->	
	<div id="middle_content" style="float:right;right:0px;float:right;/*background-color:green*/;max-width:720px;">
		
		<!-- TOP BUTTONS -->
		<div id="div_header_4" style="float:right;">
			<a href="example_cleveland.php"><div style="margin:2px 0px 1px 0px;padding:0px 2px;border:1px black solid;float:right;">הרשמה</div></a>
			<a href="example_cleveland_l.php"><div style="margin:2px 2px 1px 0px;padding:0px 2px;border:1px black solid;float:right;">התחברות</div></a>
		</div>
		
		<!-- HEADER -->
		<div id="div_table_drills" style="text-align:center;float:right;">
			<!-- TEXT -->
			<h2 id="n">ברוכים הבאים!</a>
			
			<!-- HORIZONTAL LINE -->
			<hr>
			
			<!-- DATE -->
			<h3 id="div_header_3"><?php echo date("d/m/Y");?></h3>
			
			<!-- HORIZONTAL LINE -->
			<hr>
		</div>
		
		<!-- DRILLS TABLE -->
		<div id="div_table_drills" style="text-align:center;float:right;">
			<!-- DRILLS 1ST LINE -->
			<table style="width:100%;">
				<tr>
					<th colspan="11"><h3 style="margin:5px auto;"><u>תרגילים</u></h3></th>
				</tr>
				
				<tr>
					<td rowspan="2" style="width:5%;"></td>
					<td style="width:10%;"><i class="em em-arrow_upper_right"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-racing_car"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-rocket"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-snowboarder"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-desert"></i></td>
					<td rowspan="2" style="width:5%;"></td>
				</tr>
				<tr>
					
					<td style="width:10%;">300</td>
					
					<td style="width:10%;">200</td>
					
					<td style="width:10%;">100</td>
					
					<td style="width:10%;">50</td>
					
					<td style="width:10%;">10</td>
				</tr>
			</table>
			
			<!-- DRILLS 2ND LINE -->
			<table style="width:100%;">
				<tr>
					<td rowspan="2" style="width:5%;"></td>
					<td style="width:10%;"><i class="em em-ferris_wheel"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-first_place_medal"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-fire"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-factory"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-bow_and_arrow" style="transform:rotate(45deg);"></i></td>
					<td rowspan="2" style="width:5%;"></td>
				</tr>
				<tr>
					
					<td style="width:10%;">1200</td>
					
					<td style="width:10%;">1000</td>
					
					<td style="width:10%;">800</td>
					
					<td style="width:10%;">600</td>
					
					<td style="width:10%;">400</td>
				</tr>
			</table>
			
			<!-- DRILLS 3RD LINE -->
			<table style="width:100%;">
				<tr>
					<td rowspan="2" style="width:5%;"></td>
					<td style="width:10%;"><i class="em em-beach_with_umbrella"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-crown"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-camping"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-checkered_flag"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-dizzy"></i></td>
					<td rowspan="2" style="width:5%;"></td>
				</tr>
				<tr>
					
					<td style="width:10%;">DONE</td>
					
					<td style="width:10%;">2000</td>
					
					<td style="width:10%;">1800</td>
					
					<td style="width:10%;">1600</td>
					
					<td style="width:10%;">1400</td>
				</tr>
			</table>
			
			<!-- HORIZONTAL LINE -->
			<hr>
		</div><!-- DRILLS TABLE -->
		
		<!-- FREQUENCY TABLE -->
		<div id="div_table_drills_2" style="text-align:center;float:right;width:100%;">
			<table style="width:100%;">
				<tr>
					<th colspan="11"><h3 style="margin:5px auto;"><u>תדירות</u></h3></th>
				</tr>
				<tr>
					<td rowspan="2" style="width:5%;"></td>
					<td style="width:10%;"><i class="em em-beach_with_umbrella"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-skin-tone-2" style="background:magenta"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-skin-tone-2" style="background:orange"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-skin-tone-2" style="background:rgb(74, 114, 194)"></i></td>
					<td rowspan="2" style="width:10%;"><i class="em em-arrow_right"></i></td>
					<td style="width:10%;"><i class="em em-skin-tone-2" style="background:green;"></i></td>
					<td rowspan="2" style="width:5%;"></td>
				</tr>
				<tr>
					
					<td style="width:10%;">DONE</td>
					
					<td style="width:10%;">2W</td>
					
					<td style="width:10%;">7D</td>
					
					<td style="width:10%;">3D</td>
					
					<td style="width:10%;">1D</td>
				</tr>
			</table>
			
			<!-- HORIZONTAL LINE -->
			<hr>
		</div><!-- FREQUENCY TABLE -->

		<!-- FOOTER -->    
		<footer id="footer_1" style="float:right;clear:both;">

			<!-- Include site_navigation model -->		
			<?php include 'site_navigation.php';?>
	
			<!-- REAL DRILL DATA -->
			<div id="real_time" style="float:right;clear:both;/*background-color:green;border:0.5px white solid;*/padding:4px;text-align:center;">
				<h2 style="margin-bottom:0px;"><u>מתמטיקה</u></h2>
				<h2 id="M_num" style="margin-top:0px;"></h2>
			</div>
			
			<div id="real_time_2" style="float:right;clear:both;/*background-color:green;border:0.5px white solid;*/padding:4px;text-align:center;">
				<h2 style="margin-bottom:0px;"><u>פיזיקה</u></h2>
				<h2 id="P_num" style="margin-top:0px;"></h2>
			</div>
			
			<!-- NEW LINE -->
			<br>
			
			<!-- LICENSE DATA -->	
			<div style="float:right;clear:both;width:100%;">
				<!-- HORIZONTAL LINE -->
				<hr>
			</div>
			
			<div style="float:right;clear:both;/*background-color:green;*/">
				<div id="under_comments_2" class="dropbtn_2" style="display:inline-block;margin-top:10px;">רישיון</div>
				<p style="margin-top:0px;">אתר זה מתנהל לפי רישיון מסוג: <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"></a><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">&nbsp;<img alt="Creative Commons License" style="border-width:0;vertical-align:text-top;" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a></p>
				<p style="margin-top:0px;">מאובטח על ידי: &nbsp;<img alt="Condo SSL" style="border-width:0;vertical-align:text-top;" src="../ssl/comodo_secure_seal_76x26_transp.png"/></p>
			</div>
		</footer>
	</div><!-- CONTENT -->
	
	<!-- Funcs -->
	<script>
	<!-- cl script cl.js -->
	function cl(str,variable)
	{
		console.log(str,variable);
	}
	
	<!-- a_11_f script -->
	// loader window resize function
	function a_11_f()
	{
		console.log("---a 11 f")
		
		var a_11_loader = $(document).outerWidth()/2-60;
		//console.log(a_11_loader);
		var a_12_loader = $(window).outerHeight()/2-60;
		$('.loader').css("left",a_11_loader);
		$('.loader').css("top",a_12_loader);
	}
	
	<!-- document ready script -->
	$(document).ready(function()
	{
	
		// Real time func	
		var c_once=0;
		var d_once=0;
		$("#n").click(function()
		{
			if(c_once==0)
			{
				//alert("already clicked");
			
				c_once=1;
				//console.log("c_once changed",c_once);
				
				//ajax request
				$.ajax
				({
					url: 'check_1.php',
					type: 'POST',
					//data: {'Y_n': data_1_js,
					//		'Number_0': num}
					
				}).done(function(result)
				{
					//$("#container").html(result);
					var d_2=0;
					var result_1 = JSON.parse(result);
										
					// debugging
					console.log("RESULT:",result_1);
					
					for (i=0;i<Object.keys(result_1).length;i++)
					{
						//vars
						var t = $("#real_time").html();
						var d1 = Object.keys(result_1)[i];
						
						//cases 
						t = t + "<div id='main_wrapper_"+i+"' class='corner-ribbon-main-wrapper' style='float:right;text-align:center;border:0.5px white solid;margin:4px;padding:4px;background-color:green;width:150px;height:80px;color:white;'><div id='nam_"+i+"' style='margin:4px;padding:4px;'>Hi "+i+"</div>";
						if (result_1[d1]['total'] == 'היום')
						{
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'אתמול')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div></div>";
							/* when changing:
								*replace "<div class='ribbon'>היום</div>" with "<div class='ribbon_1'>אתמול</div>".
							*/
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'יומיים ברצף')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_3')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_4')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_5')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_6')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_7')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_8')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div></div>";
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_9')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_10')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_11')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_12')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_13')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_14')
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else
						{
							//t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-car'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						
						
						//putting html in div
						$("#real_time").html(t);
						
						//updating veteran number
						if (result_1[d1]['veteran'] == 3)
						{
							var div_name = "main_wrapper_"+i;
							$("#"+div_name).css("background-color","rgb(74, 114, 194)");
						}
						
						if (result_1[d1]['veteran'] == 7)
						{
							var div_name = "main_wrapper_"+i;
							$("#"+div_name).css("background-color","orange");
						}
						
						if (result_1[d1]['veteran'] == 14)
						{
							var div_name = "main_wrapper_"+i;
							$("#"+div_name).css("background-color","magenta");
						}
						
						//debugging
						//console.log(t);
						
						var t_nam = "#nam_"+i;
						var t_num = "#num_"+i;
						
						$(t_nam).html(Object.keys(result_1)[i]+"<hr>");
						
						d_2 = d_2+Number(result_1[d1]['drills_number']);
						$(t_num).html(result_1[d1]['drills_number']);
						
						$("#M_num").html(' 2,000'+'/'+'<i class="fa fa-check-circle-o" style="color:green;"></i>'+d_2);
						
						//debugging
						//console.log(result_1);
					}
					
					//debugging
					//console.log("d_2:",d_2);
					
					//var load_1 = JSON.parse(result);
					//console.log(load_1);
					//scope.daily_income_1 = Number(result_1["Daily_IN_1"]);
					//console.log($("#tot").html());
				});
			}
		});
			
		$("#div_header_3").click(function()
		{	
			if(d_once==0)
			{
				//alert("already clicked");
			
				d_once=1;
				
				//console.log("c_once changed",c_once);
				
				//ajax request
				$.ajax
				({
					url: 'check_1_p.php',
					type: 'POST',
					//data: {'Y_n': data_1_js,
					//		'Number_0': num}
					
				}).done(function(result)
				{
					//$("#container").html(result);
					
					var d_2_p=0;
					var result_1 = JSON.parse(result);
					
					// debugging
					console.log("RESULT_P:",result_1);
					
					for (i=0;i<Object.keys(result_1).length;i++)
					{
						//vars
						var t = $("#real_time_2").html();
						var d1 = Object.keys(result_1)[i];
						
						//Not show if drills number is 0
						if(result_1[d1]['drills_number'] == 0)
						{
							continue;
						}
						
						//cases - former
						/* check 3 things: 
							* change "num_" to "num_p_".
							* change "nam_" to "nam_p_" on first line.
							* change "main_wrapper_" to "main_wrapper_p_" on first line.
						*/
						
						//cases 
						t = t + "<div id='main_wrapper_p_"+i+"' class='corner-ribbon-main-wrapper' style='float:right;text-align:center;border:0.5px white solid;margin:4px;padding:4px;background-color:green;width:150px;height:80px;color:white;'><div id='nam_p_"+i+"' style='margin:4px;padding:4px;'>Hi "+i+"</div>";
						if (result_1[d1]['total'] == 'היום')
						{
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon'>היום</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'אתמול')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div></div>";
							/* when changing:
								*replace "<div class='ribbon'>היום</div>" with "<div class='ribbon_1'>אתמול</div>".
							*/
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
								}
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_1'>אתמול</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'יומיים ברצף')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x2<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_3')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
								}
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x3<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_4')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x4<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_5')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}	
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
								}
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x5<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_6')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								if (result_1[d1]['crown'] == 1)//has a crown
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
								}	
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x6<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_7')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x7<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_8')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div></div>";
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x8<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_9')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x9<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_10')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x10<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_11')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x11<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_12')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x12<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_13')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x13<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1]['total'] == 'strike_14')
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div></div>";
														
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_3'>x14<i class='em em-trophy'></i></div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						else
						{
							//t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-car'></i></div></div></div>";
							
							if (result_1[d1]['drills_number'] < 10)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-desert'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 50)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-snowboarder'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 100)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-rocket'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-racing_car'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 300)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-arrow_upper_right'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-bow_and_arrow' style='transform:rotate(45deg);'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-factory'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-fire'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-first_place_medal'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1200)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-ferris_wheel'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1400)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-dizzy'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1600)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-checkered_flag'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 1800)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-camping'></i></div></div></div>";
							}
							else if (result_1[d1]['drills_number'] < 2000)
							{
								t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-crown'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1]['crown'] == 1)// has a crown
								{	
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div><div class='ribbon_right_top'><i class='em em-crown'></i></div></div>";
								}
								else
								{
									t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div><div id='wrapper_"+i+"' class='ribbon-wrapper'><div class='ribbon_2'>לזלז</div></div><div class='ribbon-wrapper_bottom'><div class='ribbon_right_bottom'><i class='em em-beach_with_umbrella'></i></div></div></div>";
								}
							}
						}
						
						//putting html in div
						$("#real_time_2").html(t);
											
						//updating veteran number
						if (result_1[d1]['veteran'] == 3)
						{
							var div_name = "main_wrapper_p_"+i;
							$("#"+div_name).css("background-color","rgb(74, 114, 194)");
						}
						
						
						if (result_1[d1]['veteran'] == 7)
						{
							var div_name = "main_wrapper_p_"+i;
							$("#"+div_name).css("background-color","orange");
						}
						
						if (result_1[d1]['veteran'] == 14)
						{
							var div_name = "main_wrapper_p_"+i;
							$("#"+div_name).css("background-color","magenta");
						}
												
						//debugging
						//console.log(t);
						
						var t_nam = "#nam_p_"+i;
						var t_num = "#num_p_"+i;
						
						$(t_nam).html(Object.keys(result_1)[i]+"<hr>");
						
						d_2_p = d_2_p+Number(result_1[d1]['drills_number']);
						$(t_num).html(result_1[d1]['drills_number']);
						
						$("#P_num").html(' 1,000'+'/'+'<i class="fa fa-check-circle-o" style="color:green;"></i>'+d_2_p);
						
						//debugging
						//$("#P_num").html('<i class="fa fa-circle-o"></i>');
						//console.log(result_1);
					}
					
					//debugging
					//console.log("d_2_p:",d_2_p);
					
					//var load_1 = JSON.parse(result);
					//console.log(load_1);
					//scope.daily_income_1 = Number(result_1["Daily_IN_1"]);
					//console.log($("#tot").html());
				});
			}
		});
		
		// setting Timeout
		setTimeout(function(){ $("#n").click(); }, 1000);
		setTimeout(function(){ $("#div_header_3").click(); }, 1000);
		
		//debugging
		//console.log("d_once outside",d_once);
		//console.log("c_once outside",c_once);
		
		//opacity for loader
		$('#div_header_3, #div_1, #div_table_drills, #div_table_drills_2, #hr_number_1, #footer_1, #new_comment, #new_comment_2, #new_comment_form').animate({opacity:1},1000);
		$('.loader').css("display","none");
	});

	<!-- window resize script -->
	$( window ).resize(function() 
	{
		//loader
		a_11_f();
	});
	</script>
	</body>
</html>