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
</style>
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

<!--<h4 id="header_1_1" style="margin:auto;text-align:center;"><u><span id="tot">{{daily_income_1 + daily_income_2 + daily_income_3 + daily_income_4 + daily_income_5 + daily_income_6 + daily_income_7 + daily_expense_1 + daily_expense_2 + daily_expense_3 + daily_expense_4 + daily_expense_5 + daily_expense_6 + daily_expense_7 + daily_nov_48_1 + daily_nov_48_2 + daily_nov_48_3 + daily_nov_48_4 + daily_nov_48_5 + daily_nov_48_6 + daily_nov_48_7 + dec_49_1 + dec_49_2 + dec_49_3 + dec_49_4 + dec_49_5 + dec_49_6 + dec_49_7 + dec_50_1 + dec_50_2 + dec_50_3 + dec_50_4 + dec_50_5 + dec_50_6 + dec_50_7 + dec_51_1 + dec_51_2 + dec_51_3 + dec_51_4 + dec_51_5 + dec_51_6 + dec_51_7 + dec_52_1 + dec_52_2 + dec_52_3 + dec_52_4 + dec_52_5 + dec_52_6 + dec_52_7 + jan_01_1 + jan_01_2 + jan_01_3 + jan_01_4 + jan_01_5 + jan_01_6 + jan_01_7 + jan_02_1 + jan_02_2 + jan_02_3 + jan_02_4 + jan_02_5 + jan_02_6 + jan_02_7 + jan_03_1 + jan_03_2 + jan_03_3 + jan_03_4 + jan_03_5 + jan_03_6 + jan_03_7 + jan_04_1 + jan_04_2 + jan_04_3 + jan_04_4 + jan_04_5 + jan_04_6 + jan_04_7}}</span> מתמטיקה</u>, 1257 פיזיקה</h4>-->
<!--
<div style="width:100%;">
	<div style="float:right;width:50%;text-align:center;">
		<h4 id="header_1_1" style="margin:0px;"><u>עד 50 - הומר סימפסון</u></h2>
		<h4 style="margin:0px;"><u>100-150 - מיקי מאוס</u></h2>
	</div>
	<div style="float:left;width:50%;text-align:center;">
		<h4 style="margin:0px;"><u>50-100 - קרמיט</u></h2>
		<h4 style="margin:0px;"><u>150-200 - אלף</u></h2>
	</div>
</div>
-->

<?php include '../yacht/check_6.php'; ?>

<div id="div_table_2" style="margin-bottom:6px;">
	<table id="table_2">
		<tr>
			<td class="rotate_2">חודש</td>
			<td class="rotate"><u>ימים</u><br>שבועות</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>שישי</td>
			<td>שבת</td>
			<td>סה"כ שבועי</td>
		</tr>
		<tr>
			<td rowspan="5">12</td>
			<td>#49</td>
			<td><input id="in_1" type="number" ng-model="dec_49_1"></td>
			<td><input type="number" ng-model="dec_49_2"></td>
			<td><input type="number" ng-model="dec_49_3"></td>
			<td><input type="number" ng-model="dec_49_4"></td>
			<td><input type="number" ng-model="dec_49_5"></td>
			<td><input type="number" ng-model="dec_49_6"></td>
			<td><input type="number" ng-model="dec_49_7"></td>
			<td class="total">{{dec_49_1 + dec_49_2 + dec_49_3 + dec_49_4 + dec_49_5 + dec_49_6 + dec_49_7}}</td>
		</tr>
		<tr>
			<td>#50</td>
			<td><input type="number" ng-model="dec_50_1"></td>
			<td><input type="number" ng-model="dec_50_2"></td>
			<td><input type="number" ng-model="dec_50_3"></td>
			<td><input type="number" ng-model="dec_50_4"></td>
			<td><input type="number" ng-model="dec_50_5"></td>
			<td><input type="number" ng-model="dec_50_6"></td>
			<td><input type="number" ng-model="dec_50_7"></td>
			<td class="total">{{dec_50_1 + dec_50_2 + dec_50_3 + dec_50_4 + dec_50_5 + dec_50_6 + dec_50_7}}</td>
		</tr>
		<tr>
			<td>#51</td>
			<td><input type="number" ng-model="dec_51_1"></td>
			<td><input type="number" ng-model="dec_51_2"></td>
			<td><input type="number" ng-model="dec_51_3"></td>
			<td><input type="number" ng-model="dec_51_4"></td>
			<td><input type="number" ng-model="dec_51_5"></td>
			<td><input type="number" ng-model="dec_51_6"></td>
			<td><input type="number" ng-model="dec_51_7"></td>
			<td class="total">{{dec_51_1 + dec_51_2 + dec_51_3 + dec_51_4 + dec_51_5 + dec_51_6 + dec_51_7}}</td>
		</tr>
		<tr>
			<td>#52</td>
			<td><input type="number" ng-model="dec_52_1"></td>
			<td><input type="number" ng-model="dec_52_2"></td>
			<td><input type="number" ng-model="dec_52_3"></td>
			<td><input type="number" ng-model="dec_52_4"></td>
			<td><input type="number" ng-model="dec_52_5"></td>
			<td><input type="number" ng-model="dec_52_6"></td>
			<td><input type="number" ng-model="dec_52_7"></td>
			<td class="total">{{dec_52_1 + dec_52_2 + dec_52_3 + dec_52_4 + dec_52_5 + dec_52_6 + dec_52_7}}</td>
		</tr>
		<tr>
			<td>סה"כ</td>
			<!-- <td class="total">{{former_income + daily_income_1}}<br><input type="number" ng-model="former_income"></td> -->
			<td class="total">{{dec_49_1 + dec_50_1 + dec_51_1 + dec_52_1}}</td>
			<td class="total">{{dec_49_2 + dec_50_2 + dec_51_2 + dec_52_2}}</td>
			<td class="total">{{dec_49_3 + dec_50_3 + dec_51_3 + dec_52_3}}</td>
			<td class="total">{{dec_49_4 + dec_50_4 + dec_51_4 + dec_52_4}}</td>
			<td class="total">{{dec_49_5 + dec_50_5 + dec_51_5 + dec_52_5}}</td>
			<td class="total">{{dec_49_6 + dec_50_6 + dec_51_6 + dec_52_6}}</td>
			<td class="total">{{dec_49_7 + dec_50_7 + dec_51_7 + dec_52_7}}</td>
			<td class="total">{{dec_49_1 + dec_49_2 + dec_49_3 + dec_49_4 + dec_49_5 + dec_49_6 + dec_49_7 + dec_50_1 + dec_50_2 + dec_50_3 + dec_50_4 + dec_50_5 + dec_50_6 + dec_50_7 + dec_51_1 + dec_51_2 + dec_51_3 + dec_51_4 + dec_51_5 + dec_51_6 + dec_51_7 + dec_52_1 + dec_52_2 + dec_52_3 + dec_52_4 + dec_52_5 + dec_52_6 + dec_52_7}}</td>
		</tr>

	</table>
</div>

<div id="div_table">
	<table id="table_1">
		<tr>
			<td class="rotate_2">חודש</td>
			<td class="rotate"><u>ימים</u><br>שבועות</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>שישי</td>
			<td>שבת</td>
			<td>סה"כ שבועי</td>
		</tr>
		<tr>
			<td rowspan="4">11</td>
			<td>#46</td>
			<td><input id="in_1" type="number" ng-model="daily_income_1"></td>
			<td><input type="number" ng-model="daily_income_2"></td>
			<td><input type="number" ng-model="daily_income_3"></td>
			<td><input type="number" ng-model="daily_income_4"></td>
			<td><input type="number" ng-model="daily_income_5"></td>
			<td><input type="number" ng-model="daily_income_6"></td>
			<td><input type="number" ng-model="daily_income_7"></td>
			<td class="total">{{daily_income_1 + daily_income_2 + daily_income_3 + daily_income_4 + daily_income_5 + daily_income_6 + daily_income_7}}</td>
		</tr>
		<tr>
			<td>#47</td>
			<td><input type="number" ng-model="daily_expense_1"></td>
			<td><input type="number" ng-model="daily_expense_2"></td>
			<td><input type="number" ng-model="daily_expense_3"></td>
			<td><input type="number" ng-model="daily_expense_4"></td>
			<td><input type="number" ng-model="daily_expense_5"></td>
			<td><input type="number" ng-model="daily_expense_6"></td>
			<td><input type="number" ng-model="daily_expense_7"></td>
			<td class="total">{{daily_expense_1 + daily_expense_2 + daily_expense_3 + daily_expense_4 + daily_expense_5 + daily_expense_6 + daily_expense_7}}</td>
		</tr>
		<tr>
			<td>#48</td>
			<td><input type="number" ng-model="daily_nov_48_1"></td>
			<td><input type="number" ng-model="daily_nov_48_2"></td>
			<td><input type="number" ng-model="daily_nov_48_3"></td>
			<td><input type="number" ng-model="daily_nov_48_4"></td>
			<td><input type="number" ng-model="daily_nov_48_5"></td>
			<td><input type="number" ng-model="daily_nov_48_6"></td>
			<td><input type="number" ng-model="daily_nov_48_7"></td>
			<td class="total">{{daily_nov_48_1 + daily_nov_48_2 + daily_nov_48_3 + daily_nov_48_4 + daily_nov_48_5 + daily_nov_48_6 + daily_nov_48_7}}</td>
		</tr>
		<tr>
			<td>סה"כ</td>
			<!-- <td class="total">{{former_income + daily_income_1}}<br><input type="number" ng-model="former_income"></td> -->
			<td class="total">{{daily_income_1 + daily_expense_1 + daily_nov_48_1}}</td>
			<td class="total">{{daily_income_2 + daily_expense_2 + daily_nov_48_2}}</td>
			<td class="total">{{daily_income_3 + daily_expense_3 + daily_nov_48_3}}</td>
			<td class="total">{{daily_income_4 + daily_expense_4 + daily_nov_48_4}}</td>
			<td class="total">{{daily_income_5 + daily_expense_5 + daily_nov_48_5}}</td>
			<td class="total">{{daily_income_6 + daily_expense_6 + daily_nov_48_6}}</td>
			<td class="total">{{daily_income_7 + daily_expense_7 + daily_nov_48_7}}</td>
			<td class="total">{{daily_income_1 + daily_income_2 + daily_income_3 + daily_income_4 + daily_income_5 + daily_income_6 + daily_income_7 + daily_expense_1 + daily_expense_2 + daily_expense_3 + daily_expense_4 + daily_expense_5 + daily_expense_6 + daily_expense_7 + daily_nov_48_1 + daily_nov_48_2 + daily_nov_48_3 + daily_nov_48_4 + daily_nov_48_5 + daily_nov_48_6 + daily_nov_48_7}}</td>
		</tr>

	</table>
</div>

<h4 id="header_2" style="margin:2px;"><u>יומן מסע</u></h4>
<textarea rows="10" id="stuff" style="width:100%;margin-top:4px;color:black;padding:4px;"></textarea>

<?php include '../yacht/check_9.php'; ?>

</body>
</html>
