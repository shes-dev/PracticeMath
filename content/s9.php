<?php
// Start the session
session_start();
// display errors
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

if(!isset($_SESSION['MyConst'])) 
{
   //die('Direct access not permitted');
   header ('location: https://www.practiceit.xyz/s1/v/error.php');
}
/*
else
{
	unset($_SESSION['MyConst']);
}
*/
?>

<!DOCTYPE html>
<html lang="iw" dir="rtl">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67294456-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-67294456-1');
</script>

<!-- Document -->
	<!-- Encoding -->
	<meta charset="utf-8">
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<!-- Links -->
		<!-- Styling-->
			<!-- General stuff -->
			<link rel="stylesheet" href="2.css" media="screen" /> 
			<!-- Carousel, tooltip & Image Gallery -->
			<link rel="stylesheet" href="3.css" media="screen" /> 
			<!-- For this file -->
			<link rel="stylesheet" href="4.css" media="screen" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Scripts -->	
	<script>
	function cl(str,variable)
	{
		console.log(str,variable);
	}
	</script>

	<script>
	// PHP AJAX Function to get checked data
	function ajax_checked (subject)
	{
		var subject_1 = subject;
		console.log("ajax checked");
		if (window.XMLHttpRequest) 
		{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
			
		xmlhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
			var d = this.responseText;
			cl("d:",d);
			
			var arrayD = []; 
			var count = 0;
			var i = 0;
			var i_2 = 0;
				while (count<d.length)
				{
					if(count<18)
					{
					arrayD[i] = d.slice(i,i+1);
					cl("arrayD "+i+":",arrayD[i]);
					
					var i_plus_1 = (i+1)/2;
					var line_1 = "drill_completed_"+i_plus_1 ;
						if(arrayD[i] == "y")
						{
							//console.log("line_1:",line_1);
							//console.log("i_plus_1:",i_plus_1);
							//console.log("Elements:",document.getElementsByClassName(line_1));
							document.getElementsByClassName(line_1)[0].innerHTML = '<i class="fa fa-check-square-o" style="font-size:24px;"></i>';
						}
					
					count += 1;
					i += 1;
					i_2 += 1;
					}
				
					else 
					{
					arrayD[i_2] = d.slice(count,count+2);
					cl("18+: arrayD "+i_2+":",arrayD[i_2]);
					
					arrayD[i_2+1] = d.slice(i+2,i+3);
					var plus_1 = i_2+1;
					cl("18+: arrayD "+plus_1+":",arrayD[i_2+1]);
					
					var line_2 = "drill_completed_" + arrayD[i_2];
						//cl("line_2:"+line_2,1);
						if(arrayD[i_2+1] == "y")
						{
						//console.log("line:",line_2);
						//console.log("Elements:",document.getElementsByClassName(line_2));
						document.getElementsByClassName(line_2)[0].innerHTML = '<i class="fa fa-check-square-o" style="font-size:24px;"></i>';
						}
					
					count += 3;
					i += 3;
					i_2 += 2;
					}
				}
			}
		};
		xmlhttp.open("GET","oxygen.php?ln=" + subject_1,true);
		xmlhttp.send();
	}
	</script>

	
	<script>
	// PHP AJAX Function to get checked data
	function get_check_marks_of_group (subject,subsubject)
	{
		var subject_1 = subject;
		var subsubject_1 = subsubject;
		console.log("get_check_marks_of_group "+subject+" "+subsubject);
		if (window.XMLHttpRequest) 
		{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
			
		xmlhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
			var d_1 = this.responseText;
			cl("d_1:",d_1);
			
			var arrayD_1 = []; 
			var count = 0;
			var i = 0;
			var i_2 = 0;
			var total_y = 0;
				while (count<d_1.length)
				{
					if(count<18)
					{
						arrayD_1[i] = d_1.slice(i,i+1);
						//cl("arrayD_1 "+i+":",arrayD_1[i]);
						
						var i_plus_1 = (i+1)/2;
							if(arrayD_1[i] == "y")
							{
								total_y = total_y + 1;
								//console.log("total_y:"+count,total_y);
							}
						
						count += 1;
						i += 1;
						i_2 += 1;
					}
				
					else 
					{
						arrayD_1[i_2] = d_1.slice(count,count+2);
						//cl("18+: arrayD_1 "+i_2+":",arrayD_1[i_2]);
						
						arrayD_1[i_2+1] = d_1.slice(i+2,i+3);
						var plus_1 = i_2+1;
						//cl("18+: arrayD_1 "+plus_1+":",arrayD_1[i_2+1]);
						
						var line_2 = "drill_completed_" + arrayD_1[i_2];
							if(arrayD_1[i_2+1] == "y")
							{
							total_y = total_y + 1;
							//console.log("total_y:"+count,total_y);
							}
						
						count += 3;
						i += 3;
						i_2 += 2;
					}
				}
			
				if (d_1.length<18)
				{
					var number_of_elements_in_array = i_plus_1;
					console.log("number_of_elements_in_array "+subject+" "+subsubject,i_plus_1);
					console.log("total_y after loop:"+count,total_y);
					if(total_y == number_of_elements_in_array && d_1.length<18)
					{
						console.log("success");
						var subsubject_one = subsubject + "_1";
						console.log("subsubject_1:",subsubject_one);
						document.getElementById(subsubject_one).style.backgroundColor = "green";
						document.getElementById(subsubject_one).style.color = "white";
						first_check_all();
					}
					else
					{
						var subsubject_one = subsubject + "_1";
						console.log("subsubject_1:",subsubject_one);

						document.getElementById(subsubject_one).style.backgroundColor = "white";
						document.getElementById(subsubject_one).style.color = "black";
						first_check_all();
					}
				}
				else
				{
					var calc_1 = count - 18;
					console.log("calc_1:",calc_1);
					var calc_2 = calc_1/3;
					console.log("calc_2:",calc_2);
					var number_of_elements_in_array = i_plus_1 + calc_2;
					console.log("number_of_elements_in_array 18+ "+subject+" "+subsubject,number_of_elements_in_array);
					console.log("total_y after loop 18+:"+count,total_y);
					if(total_y == number_of_elements_in_array)
					{
						console.log("success 18+");
					}
				}
			}
		};
		xmlhttp.open("GET","carbon.php?ln=" + subject_1 +"&yn="+ subsubject_1,true);
		xmlhttp.send();
	}
	</script>
	
</head>

<body style="width:100%;/*background-color:blue;*/position:relative;">
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
	
	<div style="float:right;right:0px;float:right;/*background-color:green*/;max-width:720px;">
	
	<div id="div_header_4" style="float:right;">
		<a href="example_cleveland.php"><div style="margin:2px 0px 1px 0px;padding:0px 2px;border:1px black solid;float:right;">הרשמה</div></a>
		<a href="example_cleveland_l.php"><div style="margin:2px 2px 1px 0px;padding:0px 2px;border:1px black solid;float:right;">התחברות</div></a>
	</div>
	<div id="div_header_3" style="float:right;">
		<h3 style="margin-bottom:0px 0px 0px 0px;"><center><u>מפתח צבעים</u></center></h3>
		<table id="table_colors" style="margin-bottom:2px;border:1px black solid;width:100%;border-collapse:collapse;">
			<tr>
				<td style="background-color:green;width:1%;"></td>
				<td id="Algebra">אלגברה</td>
				<td style="background-color:blue;width:1%;"></td>
				<td>גאומטריה וטריגו במישור</td>
			</tr>
			<tr>
				<td style="background-color:yellow;"></td>
				<td>גאומטריה וטריגו במרחב</td>
				<td style="background-color:magenta;"></td>
				<td id="Series">סדרות</td>
			</tr>
			<tr>
				<td style="background-color:orange;"></td>
				<td id="Probability">הסתברות</td>
				<td style="background-color:yellow;"></td>
				<td>וקטורים</td>
			</tr>
			<tr>
				<td style="background-color:red;"></td>
				<td>חשבון דיפרנציאלי ואינטגרלי</td>
				<td style="background-color:violet;"></td>
				<td>מספרים מרוכבים</td>
			</tr>
			<tr>
				<td style="background-color:blue;"></td>
				<td>גאומטריה אנליטית</td>
				<td style="background-color:gold;"></td>
				<td id="all">הכל</td>
			</tr>
		</table>
	</div>
	<!-- <button onclick="send_to_ajax('1','no')">line 1 toggle</button> -->
	<div id="div_1"></div>
	<div id="div_table_drills">
		<h3 id="n">בחר/י נושא מהרשימה</h3>
			
	</div>
	
	<!--<hr id="hr_number_1" style="margin-top:15px;">-->

<!-- Footer -->    
<footer id="footer_1">
		
	<!--<div class="verticalLine" style="overflow:hidden;">
	</div>-->
	
	<hr id="hr_number_1" style="margin:0px auto 3px;">
		
	<!--
	<div id="div_trail" style="top:0;z-index:1;/*background-color:black;*/">
		<div id="div_station_table">
			<table id="station_table" style="border:0.5px solid black;">
				<tr>
					<td><div id="station_result_home">אלגברה</div></td>
					<td><div id="station_result">תגובה 1</div></td>
					<td><div id="station_result_1_1">תגובה 2</div></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><div id="station_result_home">אלגברה</div></td>
					<td><div id="station_result">תגובה 1</div></td>
					<td><div id="station_result_1_1">תגובה 2</div></td>
				</tr>
			</table>
		</div>
	
		<div id="station_result_home">אלגברה</div>
		<div id="station_result">תגובה 1</div>
		<div id="station_result_1_1">תגובה 2</div>
		<div id="station_result_home">אלגברה</div>
		<div id="station_result">תגובה 1</div>
		<div id="station_result_1_1">תגובה 2</div>
		<div id="station_result_home">אלגברה</div>
		<div id="station_result">תגובה 1</div>
		<div id="station_result_1_1">תגובה 2</div>
		<div id="station_result_home">אלגברה</div>
		<div id="station_result">תגובה 1</div>
		<div id="station_result_1_1">תגובה 2</div>
	</div>
	-->
	<!--<div id="station_result_home_2" style="overflow:hidden;">Origin Long Sentence</div>
	
	<div id="station_result_home_3" style="overflow:hidden;">Origin Another Long Sentence</div>-->
	
	<!--<div id="station_header" style="overflow:hidden;">
	</div>
	
	<div id="station_header_2" style="overflow:hidden;">
	</div>-->
	
	
		<!--
			<div id="div_header" style="margin:5px 0px 2px 0px;">
				<h2 id="comments_header" style="margin-bottom:0px;margin-top:0px;display:block;">תגובות</h2>
			</div>
		-->
		
		<div id="real_time" style="float:right;clear:both;/*background-color:green;border:0.5px white solid;*/padding:4px;text-align:center;">
		<h2 style="margin-bottom:0px;"><u>מתמטיקה</u></h2>
		<h2 id="M_num" style="margin-top:0px;"></h2>
			<!-- <div id="nam_1" style="display:inline-block;">שם</div>
			 <hr>
			 <div id="num_1" style="display:inline-block;">מספר</div>-->
		</div>
		
		<div id="real_time_2" style="float:right;clear:both;/*background-color:green;border:0.5px white solid;*/padding:4px;text-align:center;">
		<h2 style="margin-bottom:0px;"><u>פיזיקה</u></h2>
		<h2 id="P_num" style="margin-top:0px;"></h2>
			 <!-- <div id="nam_1" style="display:inline-block;">שם</div>
			 <hr>
			 <div id="num_1" style="display:inline-block;">מספר</div>-->
		</div>
		
		<div style="float:right;clear:both;margin-top:4px;/*background-color:green;*/">
			<div class="dropbtn_2" style="display:inline-block;">תגובות</div>
		</div>
	
	<div id="search_1" style="float:right;clear:both;">
	
		<div id="under_comments" class="dropbtn_2" style="display:block;background-color:#9C27B0;">Sort Comments</div>
			
		<div class="dropdown">
			<div onclick="myFunction()" class="dropbtn"  style="background-color:#9C27B0;">
				<i class="fa fa-list-ol" style="font-size:24px;"></i>
			</div>
			<div id="myDropdown" class="dropdown-content">
				<!--<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">-->
				<p id="top_3_credits_p" onclick="send_comments(1,1,0,3);myFunction();">3</p>
				<p id="more_credits_p" onclick="send_comments(1,1,0,10);myFunction();">10</p>
				<p id="all_credits_p" onclick="send_comments(1,1,0,1000);myFunction();">הכל</p>
			</div>
		</div>
		
		<div class="dropdown by_date">
			<div onclick="myFunction_by_date()" class="dropbtn_by_date" style="background-color:#9C27B0;">
				<i class="fa fa-calendar" style="font-size:24px"></i>
			</div>
			<div id="myDropdown_by_date" class="dropdown-content_by_date">
				<!--<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">-->
				<p id="top_3_credits_p_by_date" onclick="send_comments(1,2,1,0)">הכי חדשות</p>
				<p id="more_credits_p_by_date" onclick="send_comments(1,2,2,0)">הכי ישנות</p>
			</div>
		</div>
		
		<div class="dropdown by_popularity" style="background-color:#9C27B0;">
			<div onclick="myFunction_by_popularity()" class="dropbtn_by_popularity" style="background-color:#9C27B0;">
				<i class="fa fa-dollar" style="font-size:24px"></i>
			</div>
			<div id="myDropdown_by_popularity" class="dropdown-content_by_popularity">
				<!--<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">-->
				<p id="top_3_credits_p_by_popularity" onclick="send_comments(1,3,1,0);">הכי פופולריות</p>
				<p id="more_credits_p_by_popularity" onclick="send_comments(1,3,2,0);">הכי <span style="color:red;">פחות</span> פופולריות</p>
			</div>
		</div>
		
		<div class="dropdown by_accordance">
			<div onclick="myFunction_by_accordance()" class="dropbtn_by_accordance" style="background-color:#9C27B0;">
				<i class="fa fa-check-circle" style="font-size:24px"></i>
			</div>
			<div id="myDropdown_by_accordance" class="dropdown-content_by_accordance">
				<!--<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">-->
				<p id="top_3_credits_p_by_accordance" onclick="send_comments(1,4,1,0);">הכי מוסכמות</p>
				<p id="more_credits_p_by_accordance" onclick="send_comments(1,4,2,0);">הכי <span style="color:red;">פחות</span> מוסכמות</p>
			</div>
		</div>
		
		<!--
			<div class="dropdown by_users">
				<div onclick="myFunction_by_users()" class="dropbtn_by_users" style="background-color:#9C27B0;">
					<i class="fa fa-users" style="font-size:24px"></i>
				</div>
				<div id="myDropdown_by_users" class="dropdown-content_by_users">
					<!--<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">-->
					<!--
					<p id="top_3_credits_p_by_users" onclick="send_comments(1,5,1,0);">הכי פעילים</p>
					<p id="more_credits_p_by_users" onclick="send_comments(1,5,2,0);">הכי פחות פעילים</p>
				</div>
			</div>
		-->
	</div>
	
	
		
	<div id="comments" style="overflow:hidden;float:right;clear:both;width:100%;">
		<ol id="comments_list">
			<!--<li>Include html in html file</li>
			<a href="https://stackoverflow.com/questions/8988855/include-another-html-file-in-a-html-file">https://stackoverflow.com/questions/8988855/include-another-html-file-in-a-html-file</a>
			<li>Carousel3D</li>
			<a href="http://desandro.github.io/3dtransforms/examples/carousel-02-dynamic.html">http://desandro.github.io/3dtransforms/examples/carousel-02-dynamic.html</a>
			<li>Image gallery</li>
			<a href="https://www.w3schools.com/css/css_image_gallery.asp">https://www.w3schools.com/css/css_image_gallery.asp</a>-->
		</ol>
	</div>
	
	<!--
		<div id="station_result_2" style="overflow:hidden;float:right;clear:both;">stations result 2
		</div>
			
		<div id="accordance_result" style="overflow:hidden;float:right;clear:both;width:100%;">accordance test
		</div>
		
		<div id="accordance_co_result" style="overflow:hidden;float:right;clear:both;">accordance co test
		</div>
	-->
	
	
	<!--
		<div id="refresh_comments" style="display:block;float:right;clear:both;color:white;background-color:#9C27B0;">רענן תוצאות
		</div>
	-->
	<div id="most_popular">הכי פופולרית
	</div>
	<div id="most_popular_content" style="float:right;clear:both;">דוגמה 1</div>
	
		
	<div id="most_accordance">הכי מוסכמת
	</div>	
	<div id="most_accordance_content" style="float:right;clear:both;">דוגמה 2</div>
	
	
	<div id="most_accordance_minus">הכי <span style="color:red;"><b>פחות</b></span> מוסכמת
	</div>	
	<div id="most_accordance_minus_content" style="float:right;clear:both;">דוגמה 3</div>
	
	
	
	<div style="width:100%;float:right;clear:both;">
		<div id="under_comments_2" class="dropbtn_2" style="display:inline-block;float:right;clear:both;">הוסף תגובה</div>
	  
		<div id="under_comments_co" style="display:inline;float:right;clear:both;">
		</div>

		<div id="new_comment_form">    
			<form action="elegant.php" id="usrform" method="get" onsubmit="get_value()">	
				<!--<div id="new_comment" contenteditable="true"><textarea contenteditable="true" id="comment_text" name="d_content" style="width:100%;margin-bottom:5px;margin-top:5px;"></textarea></div>-->
				<div id="new_comment" contenteditable="true" style="padding:5px;float:right;clear:both;width:100%;"></div>
				<div id="new_comment_2" style="margin-top:5px;">
					<input type="radio" style="display:none;" id="comment_text_3" name="d_type" value="li" checked>
					<textarea id="comment_text" name="d_content" style="display:none;"></textarea>
					<!--
					<input type="radio" id="comment_text_2" name="d_type" value="a">a
					<input type="radio" id="comment_text_1" name="d_type" value="comment">comment
					-->
				</div>
				<input style="float:left;clear:right;" type="submit" value="שלח">
			</form>	
		</div>
	</div>
	
	<div style="float:right;clear:left;/*background-color:green;*/">
		<div id="under_comments_2" class="dropbtn_2" style="display:inline-block;">רישיון</div>
		<!--<p style="margin-top:0px;">1.אתר זה מתנהל לפי רישיון מסוג: <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">&nbsp;<img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>.-->
		<p style="margin-top:0px;">אתר זה מתנהל לפי רישיון מסוג: <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"></a><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">&nbsp;<img alt="Creative Commons License" style="border-width:0;vertical-align:text-top;" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>
		</p>
	</div>
  
</footer>

<!-- Footer -->    
<!--<footer id="footer_2" style="direction:ltr;">
		
	footer_2 text
	<div>text text text</div>
	<div style="height:100px;width:90%;background-color:blue;margin:5px auto;">text text text</div>
	<div style="height:100px;width:90%;background-color:orange;margin:5px auto;">text text text</div>
</footer>-->
</div>
<!-- Script -->
<script>
var result_text = {
		by_number : 'Top 3',
		by_date : '',
		by_popularity : '',
		by_accordance : '',
		by_users : ''
	}; 
		
console.log('result_text:',result_text);

var result_text_2 = {
		by_number : '3',
		by_date : '',
		by_popularity : '',
		by_accordance : '',
		by_users : ''
	}; 
		
console.log('result_text_2:',result_text_2);

var order_by = {
		first : {},
		second : {},
		third : {}
	}; 
		
console.log('order_by:',order_by);

var order_by_2 = {
		first : {},
		second : {},
		third : {}
	}; 
		
console.log('order_by_2:',order_by_2);

var order_by_levels = {
		"L_1" : {},
		"L_2" : {},
		"L_3" : {},
		"L_4" : {},
		"L_5" : {},
		"L_6" : {},
		"L_7" : {},
		"L_8" : {},
		"L_9" : {},
		"L_10" : {}
	}; 
		
console.log('Order_by_levels:',order_by_levels);

var result_text_levels = {
		"L_1" : {},
		"L_2" : {},
		"L_3" : {},
		"L_4" : {},
		"L_5" : {},
		"L_6" : {},
		"L_7" : {},
		"L_8" : {},
		"L_9" : {},
		"L_10" : {}
	}; 
		
console.log('Result_text_levels:',result_text_levels);

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
	//$("#under_comments").toggle();
}

var filterFunction_co_trigger = 0;

function myFunction_co() 
{
    document.getElementById("myDropdown_co").classList.toggle("show");
	
	//Getting class list
	var classList = document.getElementById('myDropdown_co').className.split(/\s+/);
	console.log("classList:",classList);
		
	//Cases by class name
	for (var i = 0; i < classList.length; i++) 
	{
		if (classList[i] === 'show') 
		{
			send_comments(1,1,1000);
			$(".dropbtn_co").html("<i class='fa fa-close' style='font-size:16px'></i>");
		}
		else
		{
			$(".dropbtn_co").html("<i class='fa fa-search' style='font-size:16px'></i>");
		}
	}
}

function myFunction_by_date(b_1) 
{
    document.getElementById("myDropdown_by_date").classList.toggle("show");
	
	if (b_1 == 0)
	{
		//Getting class list
		var classList = document.getElementById('myDropdown_by_date').className.split(/\s+/);
		console.log("classList:",classList);
			
		//Cases by class name
		for (var i = 0; i < classList.length; i++) 
		{
			if (classList[i] === 'show') 
			{
				//send_comments(1,2,3);
				$(".dropbtn_by_date").html("<i class='fa fa-close' style='font-size:16px'></i>");
			}
			else
			{
				$(".dropbtn_by_date").html("<i class='fa fa-calendar' style='font-size:24px'></i>");
			}
		}
	}
	
	if (b_1 == 1)
	{
		//adding class newest
		//$("#myDropdown_by_date").addClass("Newest");
		$(".dropbtn_by_date").html("<i class='fa fa-long-arrow-down' style='font-size:16px'></i> <i class='fa fa-calendar' style='font-size:16px'></i> <i id='close_by_date' class='fa fa-close' style='font-size:16px'></i>");
		order_value(order_by_2,order_by,'date','Newest','תאריך','הכי חדשות');
		
		//removing class newest
		$("#close_by_date").click(function(){
			$("#myDropdown_by_date").removeClass("Newest");
			$(".dropbtn_by_date").html("<i class='fa fa-calendar' style='font-size:24px'></i>");
			document.getElementById("myDropdown_by_date").classList.toggle("show");
			result_text.by_date = '';
			close_category(order_by,order_by_2,'date','תאריך');
			sorting_value(result_text,order_by,order_by_2);
			ajax_only();
		});
	}
	
	if (b_1 == 2)
	{
		//changing icons
		$(".dropbtn_by_date").html("<i class='fa fa-long-arrow-up' style='font-size:16px'></i> <i class='fa fa-calendar' style='font-size:16px'></i> <i id='close_by_date' class='fa fa-close' style='font-size:16px'></i>");
		//document.getElementById("myDropdown_by_date").classList.toggle("show");
		order_value(order_by_2,order_by,'date','Oldest','תאריך','הכי ישנות');
		console.log("ClassList toggle: ",document.getElementById("myDropdown_by_date").classList);
		
		//removing class oldest
		$("#close_by_date").click(function(){
			$("#myDropdown_by_date").removeClass("Oldest");
			$(".dropbtn_by_date").html("<i class='fa fa-calendar' style='font-size:24px'></i>");
			document.getElementById("myDropdown_by_date").classList.toggle("show");
			result_text.by_date = '';
			close_category(order_by,order_by_2,'date','תאריך');
			sorting_value(result_text,order_by,order_by_2);
			ajax_only();
		});
	}
}

function myFunction_by_popularity(b_1) 
{
    document.getElementById("myDropdown_by_popularity").classList.toggle("show");
	
	if (b_1 == 0)
	{
		//Getting class list
		var classList = document.getElementById('myDropdown_by_popularity').className.split(/\s+/);
		console.log("classList:",classList);
			
		//Cases by class name
		for (var i = 0; i < classList.length; i++) 
		{
			if (classList[i] === 'show') 
			{
				//send_comments(1,2,3);
				$(".dropbtn_by_popularity").html("<i class='fa fa-close' style='font-size:16px'></i>");
			}
			else
			{
				$(".dropbtn_by_popularity").html("<i class='fa fa-dollar' style='font-size:24px'></i>");
			}
		}
	}
	
	if (b_1 == 1)
	{
		//adding class newest
		//$("#myDropdown_by_popularity").addClass("Newest");
		$(".dropbtn_by_popularity").html("<i class='fa fa-long-arrow-down' style='font-size:16px'></i> <i class='fa fa-dollar' style='font-size:16px'></i> <i id='close_by_popularity' class='fa fa-close' style='font-size:16px'></i>");
		order_value(order_by_2,order_by,'popularity','Most Popular','פופולריות','הכי פופולריות');						
		//removing class newest
		$("#close_by_popularity").click(function(){
			$("#myDropdown_by_popularity").removeClass("Most_popular");
			$(".dropbtn_by_popularity").html("<i class='fa fa-dollar' style='font-size:24px'></i>");
			document.getElementById("myDropdown_by_popularity").classList.toggle("show");
			result_text.by_popularity = '';
			close_category(order_by,order_by_2,'popularity','פופולריות');
			sorting_value(result_text,order_by,order_by_2);
			ajax_only();
		});
	}
	
	if (b_1 == 2)
	{
		//changing icons
		$(".dropbtn_by_popularity").html("<i class='fa fa-long-arrow-up' style='font-size:16px'></i> <i class='fa fa-dollar' style='font-size:16px'></i> <i id='close_by_popularity' class='fa fa-close' style='font-size:16px'></i>");
		order_value(order_by_2,order_by,'popularity','Least Popular','פופולריות','הכי פחות פופולריות');						
		//document.getElementById("myDropdown_by_popularity").classList.toggle("show");
		console.log("ClassList toggle: ",document.getElementById("myDropdown_by_popularity").classList);
		
		//removing class oldest
		$("#close_by_popularity").click(function(){
			$("#myDropdown_by_popularity").removeClass("Least_popular");
			$(".dropbtn_by_popularity").html("<i class='fa fa-dollar' style='font-size:24px'></i>");
			document.getElementById("myDropdown_by_popularity").classList.toggle("show");
			result_text.by_popularity = '';
			close_category(order_by,order_by_2,'popularity','פופולריות');
			sorting_value(result_text,order_by,order_by_2);
			ajax_only();
		});
	}
}

function myFunction_by_accordance(b_1) 
{
    document.getElementById("myDropdown_by_accordance").classList.toggle("show");
	
	if (b_1 == 0)
	{
		//Getting class list
		var classList = document.getElementById('myDropdown_by_accordance').className.split(/\s+/);
		console.log("classList:",classList);
			
		//Cases by class name
		for (var i = 0; i < classList.length; i++) 
		{
			if (classList[i] === 'show') 
			{
				//send_comments(1,2,3);
				$(".dropbtn_by_accordance").html("<i class='fa fa-close' style='font-size:16px'></i>");
			}
			else
			{
				$(".dropbtn_by_accordance").html("<i class='fa fa-check-circle' style='font-size:24px'></i>");
			}
		}
	}
	
	if (b_1 == 1)
	{
		//adding class newest
		//$("#myDropdown_by_accordance").addClass("Newest");
		$(".dropbtn_by_accordance").html("<i class='fa fa-long-arrow-down' style='font-size:16px'></i> <i class='fa fa-check-circle' style='font-size:16px'></i> <i id='close_by_accordance' class='fa fa-close' style='font-size:16px'></i>");
		order_value(order_by_2,order_by,'accordance','Most Agreed Upon','הסכמה','הכי מוסכמות');						
		
		//removing class newest
		$("#close_by_accordance").click(function(){
			$("#myDropdown_by_accordance").removeClass("Most_agreed_upon");
			$(".dropbtn_by_accordance").html("<i class='fa fa-check-circle' style='font-size:24px'></i>");
			document.getElementById("myDropdown_by_accordance").classList.toggle("show");
			result_text.by_accordance = '';
			close_category(order_by,order_by_2,'accordance','הסכמה');
			sorting_value(result_text,order_by,order_by_2);
			ajax_only();
		});
	}
	
	if (b_1 == 2)
	{
		//changing icons
		$(".dropbtn_by_accordance").html("<i class='fa fa-long-arrow-up' style='font-size:16px'></i> <i class='fa fa-check-circle' style='font-size:16px'></i> <i id='close_by_accordance' class='fa fa-close' style='font-size:16px'></i>");
		order_value(order_by_2,order_by,'accordance','Least Agreed Upon','הסכמה','הכי פחות מוסכמות');						
		//document.getElementById("myDropdown_by_accordance").classList.toggle("show");
		console.log("ClassList toggle: ",document.getElementById("myDropdown_by_accordance").classList);
		
		//removing class oldest
		$("#close_by_accordance").click(function(){
			$("#myDropdown_by_accordance").removeClass("Least_agreed_upon");
			$(".dropbtn_by_accordance").html("<i class='fa fa-check-circle' style='font-size:24px'></i>");
			document.getElementById("myDropdown_by_accordance").classList.toggle("show");
			result_text.by_accordance = '';
			close_category(order_by,order_by_2,'accordance','הסכמה');
			sorting_value(result_text,order_by,order_by_2);
			ajax_only();
		});
	}
}

/*
	function myFunction_by_users(b_1) 
	{
		document.getElementById("myDropdown_by_users").classList.toggle("show");
		
		if (b_1 == 0)
		{
			//Getting class list
			var classList = document.getElementById('myDropdown_by_users').className.split(/\s+/);
			console.log("classList:",classList);
				
			//Cases by class name
			for (var i = 0; i < classList.length; i++) 
			{
				if (classList[i] === 'show') 
				{
					//send_comments(1,2,3);
					$(".dropbtn_by_users").html("<i class='fa fa-close' style='font-size:16px'></i>");
				}
				else
				{
					$(".dropbtn_by_users").html("<i class='fa fa-users' style='font-size:24px'></i>");
				}
			}
		}
		
		if (b_1 == 1)
		{
			//adding class newest
			//$("#myDropdown_by_users").addClass("Newest");
			$(".dropbtn_by_users").html("<i class='fa fa-long-arrow-down' style='font-size:16px'></i> <i class='fa fa-users' style='font-size:16px'></i> <i id='close_by_users' class='fa fa-close' style='font-size:16px'></i>");
			order_value(order_by_2,order_by,'users','Most Active','משתמשים','הכי פעילים');						
			
			//removing class newest
			$("#close_by_users").click(function(){
				$("#myDropdown_by_users").removeClass("Most_agreed_upon");
				$(".dropbtn_by_users").html("<i class='fa fa-users' style='font-size:24px'></i>");
				document.getElementById("myDropdown_by_users").classList.toggle("show");
				result_text.by_users = '';
				close_category(order_by,order_by_2,'users','משתמשים');
				sorting_value(result_text,order_by,order_by_2);
				ajax_only();
			});
		}
		
		if (b_1 == 2)
		{
			//changing icons
			$(".dropbtn_by_users").html("<i class='fa fa-long-arrow-up' style='font-size:16px'></i> <i class='fa fa-users' style='font-size:16px'></i> <i id='close_by_users' class='fa fa-close' style='font-size:16px'></i>");
			order_value(order_by_2,order_by,'users','Least Active','משתמשים','הכי פחות פעילים');						
			//document.getElementById("myDropdown_by_users").classList.toggle("show");
			console.log("ClassList toggle: ",document.getElementById("myDropdown_by_users").classList);
			
			//removing class oldest
			$("#close_by_users").click(function(){
				$("#myDropdown_by_users").removeClass("Least_agreed_upon");
				$(".dropbtn_by_users").html("<i class='fa fa-users' style='font-size:24px'></i>");
				document.getElementById("myDropdown_by_users").classList.toggle("show");
				result_text.by_users = '';
				close_category(order_by,order_by_2,'users','משתמשים');
				sorting_value(result_text,order_by,order_by_2);
				ajax_only();
			});
		}
	}
*/
function order_value(order_by_2,order_by,category,value,category_2,value_2)
{
	console.log("---order value");
		
	if(jQuery.isEmptyObject(order_by.first))
	{
		order_by.first[category] = value;
		order_by_2.first[category_2] = value_2;
		/*console.log("yes object empty");
		console.log(order_by.first[category]);
		console.log(order_by.first);
		console.log(order_by.second);
		console.log(order_by.third);*/
	}
	else
	{
		if(jQuery.isEmptyObject(order_by.second) && Object.keys(order_by.first)[0] != category)
		{
			order_by.second[category] = value;
			order_by_2.second[category_2] = value_2;
		}
		else
		{
			if(jQuery.isEmptyObject(order_by.third) && Object.keys(order_by.first)[0] != category && Object.keys(order_by.second)[0] != category)
			{
				order_by.third[category] = value;
				order_by_2.third[category_2] = value_2;
			}
			else
			{
				if(Object.keys(order_by.first)[0] == category)
				{
					order_by.first[category] = value;
					order_by_2.first[category_2] = value_2;
				}
				
				if(Object.keys(order_by.second)[0] == category)
				{
					order_by.second[category] = value;
					order_by_2.second[category_2] = value_2;
				}	
			 
				if(Object.keys(order_by.third)[0] == category)
				{
					order_by.third[category] = value;
					order_by_2.third[category_2] = value_2;
				}	
			}
		}
	}
	return order_by;	
}

/*order_value(order_by,'date','Oldest');
console.log(order_by);
order_value(order_by,'popularity','Most');
order_value(order_by,'accordance','Least');
order_value(order_by,'date','Least');
order_value(order_by,'date','Least1');
console.log("keys:",Object.keys(order_by.first)[0]);
console.log(order_by);*/

function close_category(order_by,order_by_2,category_to_close,category_to_close_2)
{	
	console.log("---close category");
	
	if(order_by.first != null)
	{
		console.log("empty",order_by.first);
	}
	
	//for order_by
	if(category_to_close == Object.keys(order_by.first)[0])
	{
		order_by.first=order_by.second;	
		order_by.second=order_by.third;	
		order_by.third={};
	}
	
	if(category_to_close == Object.keys(order_by.second)[0])
	{
		order_by.second=order_by.third;	
		order_by.third={};	
	}
	
	if(category_to_close == Object.keys(order_by.third)[0])
	{
		order_by.third={};	
	}	
	
	//for order_by_2
	if(category_to_close_2 == Object.keys(order_by_2.first)[0])
	{
		order_by_2.first=order_by_2.second;	
		order_by_2.second=order_by_2.third;	
		order_by_2.third={};
	}
	
	if(category_to_close_2 == Object.keys(order_by_2.second)[0])
	{
		order_by_2.second=order_by_2.third;	
		order_by_2.third={};	
	}
	
	if(category_to_close_2 == Object.keys(order_by_2.third)[0])
	{
		order_by_2.third={};	
	}
	
	//return order_by;
	return order_by;
}

//close_category(order_by,'date');


function sorting_value(result_text,order_by,order_by_2)
{
	console.log("---sorting value");
	
	//number = result_text.by_number;
	number = result_text_2.by_number;
	text_continue = '';
	
	//if (jQuery.isEmptyObject(order_by.first))
	if (jQuery.isEmptyObject(order_by_2.first))
	{
		first = '';
	}
	else
	{
		//first = order_by.first[Object.keys(order_by_2.first)[0]];
		first = order_by_2.first[Object.keys(order_by_2.first)[0]];
		
		text_continue = first;
		
		//if (jQuery.isEmptyObject(order_by.second))
		if (jQuery.isEmptyObject(order_by_2.second))
		{
			second = '';
		}
		else
		{
			//second = order_by.second[Object.keys(order_by_2.second)[0]];
			second = order_by_2.second[Object.keys(order_by_2.second)[0]];
			
			//text_continue = first+' and '+second;
			text_continue = first+' ו'+second;
		
		
			//if (jQuery.isEmptyObject(order_by.third))
			if (jQuery.isEmptyObject(order_by_2.third))
			{
				third = '';
			}
			else
			{
				//third = order_by.third[Object.keys(order_by.third)[0]];
				third = order_by_2.third[Object.keys(order_by_2.third)[0]];
				
				//text_continue = first+', '+second+' and '+third;
				text_continue = first+', '+second+' ו'+third;
			}
		}
	}
		
	console.log("result_text 001:",result_text);
	
	$("#under_comments").html(number+' '+text_continue);
}
	
	/*
	// 0 expressions other than number
	if (date == '' && popularity ==''&& accordance == '')
	{
		$("#under_comments").html(number);
	}
	// 1 expression
	if (date != '' && popularity =='' && accordance == '')
	{
		$("#under_comments").html(number+' '+date+' '+popularity+' '+accordance);
	}
	
	if (date == '' && popularity !='' && accordance == '')
	{
		$("#under_comments").html(number+' '+date+' '+popularity+' '+accordance);
	}
	
	if (date == '' && popularity ==''&& accordance != '')
	{
		$("#under_comments").html(number+' '+date+' '+popularity+' '+accordance);
	}
	
	// 2 expressions
	if (date != '' && popularity !=''&& accordance == '')
	{
		$("#under_comments").html(number+' '+date+' and '+popularity+' '+accordance);
	}
	
	if (date != '' && popularity ==''&& accordance != '')
	{
		$("#under_comments").html(number+' '+date+' '+popularity+' and '+accordance);
	}
	
	if (date == '' && popularity !=''&& accordance != '')
	{
		$("#under_comments").html(number+' '+popularity+' and '+accordance);
	}
	
	// All expressions
	
	if (date != '' && popularity !=''&& accordance != '')
	{
		
		$("#under_comments").html(number+' '+date+', '+popularity+' and '+accordance);
	}
	
}
*/
//sorting_value(result_text);



/*
//backup
function sorting_value(result_text)
{
	number = result_text.by_number;
	date = result_text.by_date;
	popularity = result_text.by_popularity;
	accordance = result_text.by_accordance;
	console.log("result_text 001:",result_text);
	
	// 0 expressions other than number
	if (date == '' && popularity ==''&& accordance == '')
	{
		$("#under_comments").html(number);
	}
	// 1 expression
	if (date != '' && popularity =='' && accordance == '')
	{
		$("#under_comments").html(number+' '+date+' '+popularity+' '+accordance);
	}
	
	if (date == '' && popularity !='' && accordance == '')
	{
		$("#under_comments").html(number+' '+date+' '+popularity+' '+accordance);
	}
	
	if (date == '' && popularity ==''&& accordance != '')
	{
		$("#under_comments").html(number+' '+date+' '+popularity+' '+accordance);
	}
	
	// 2 expressions
	if (date != '' && popularity !=''&& accordance == '')
	{
		$("#under_comments").html(number+' '+date+' and '+popularity+' '+accordance);
	}
	
	if (date != '' && popularity ==''&& accordance != '')
	{
		$("#under_comments").html(number+' '+date+' '+popularity+' and '+accordance);
	}
	
	if (date == '' && popularity !=''&& accordance != '')
	{
		$("#under_comments").html(number+' '+popularity+' and '+accordance);
	}
	
	// All expressions
	
	if (date != '' && popularity !=''&& accordance != '')
	{
		
		$("#under_comments").html(number+' '+date+', '+popularity+' and '+accordance);
	}
	
}
*/
//sorting_value(result_text);
var counter = 1;

function send_comments(a_10,a_11,a_12,a_13)
{
	console.log("---send comments ("+a_10+","+a_11+","+a_12+","+a_13+")");
		
	//ajax jquery request
	if (a_10 == 1)
	{	
		if (a_11 == 1)
		{	
			if (a_13 == 3)
			{
				$(".dropbtn").html("3");
				result_text.by_number = 'Top 3';
				result_text_2.by_number = '3';
			}
			if (a_13 == 10)
			{
				$(".dropbtn").html("10");
				result_text.by_number = 'Top 10';
				result_text_2.by_number = '10';
			}
			if (a_13 == 1000)
			{
				$(".dropbtn").html("הכל");
				result_text.by_number = 'All';
				result_text_2.by_number = 'הכל';
			}
		} 

		if (a_11 == 2)
		{	
			if (a_12 == 1)
			{
				result_text.by_date = 'Newest';
				result_text_2.by_date = 'הכי חדשות';
				myFunction_by_date(1);
			}
			if (a_12 == 2)
			{
				//$(".dropbtn_by_date").html("<i class='fa fa-long-arrow-up'></i> <i class='fa fa-calendar'></i>");
				result_text.by_date = 'Oldest';
				result_text_2.by_date = 'הכי ישנות';
				$("#myDropdown_by_date").addClass("Oldest");
				$("#myDropdown_by_date").removeClass("Newest");
									
				myFunction_by_date(2);
			}
		}
			
		if (a_11 == 3)
		{	
			if (a_12 == 1)
			{
				//$(".dropbtn_by_popularity").html("Most Popular first");
				//result_text.by_popularity = 'Most Popular';
				result_text.by_popularity = 'Most Popular';
				result_text_2.by_popularity = 'הכי פופולריות';
				myFunction_by_popularity(1);
			}
			if (a_12 == 2)
			{
				//$(".dropbtn_by_popularity").html("Least Popular first");
				result_text.by_popularity = 'Least Popular';
				result_text_2.by_popularity = 'הכי פחות פופולריות';
				myFunction_by_popularity(2);
			}
		}
		
		if (a_11 == 4)
		{	
			if (a_12 == 1)
			{
				result_text.by_accordance = 'Most Agreed Upon';
				result_text_2.by_accordance = 'הכי מוסכמות';
				myFunction_by_accordance(1);
			}
			if (a_12 == 2)
			{
				result_text.by_accordance = 'Least Agreed Upon';
				result_text_2.by_accordance = 'הכי פחות מוסכמות';
				myFunction_by_accordance(2);
			}
		}
		
		if (a_11 == 5)
		{	
			if (a_12 == 1)
			{
				result_text.by_users = 'Most Active';
				result_text_2.by_users = 'הכי פעילים';
				myFunction_by_users(1);
			}
			if (a_12 == 2)
			{
				result_text.by_accordance = 'Least Active';
				result_text_2.by_accordance = 'הכי פחות פעילים';
				myFunction_by_users(2);
			}
		}
	//sorting_value(result_text,order_by);
	sorting_value(result_text_2,order_by,order_by_2);
	
	var counter_minus_1 = counter-1;
		
	order_by_levels[Object.keys(order_by_levels)[counter_minus_1]]= JSON.parse(JSON.stringify(order_by));
	
	result_text_levels[Object.keys(result_text_levels)[counter_minus_1]]= JSON.parse(JSON.stringify(result_text));
	
	counter++;
	
	console.log(counter);
	console.log(counter_minus_1);
	console.log(Object.keys(order_by_levels)[counter_minus_1]);
	console.log("order_by_levels: ",order_by_levels);
	console.log("result_text_levels: ",result_text_levels);
	
	//entering data	
		// var name = 'next';
		// var dataObject = {};
		// dataObject[name] = 1;
				
		if (result_text.by_number == 'Top 3')
		{	
			var a_13_1 = 3;
		}
		else
		{
				if (result_text.by_number == 'Top 10')
			{	
				var a_13_1 = 10;
			}
			else
			{
				var a_13_1 = 1000;
			}	
		}
		//console.log("a_13_1: ",a_13_1);
		var kind_2 = JSON.stringify(order_by);
		//console.log("kind_2",kind_2);
		//console.log('before json:',order_by);
	//ajax request
		$.ajax
		({
			url: 'example.php',
			type: 'POST',
			data: {'kind': a_13_1,
				   'obj_2': kind_2}
			//data: {"mapza_2": dataObject}
		}).done(function(result)
		{
			$("#comments").html(result);
			
			$(".check-circle_li").each(function(){
				$(this) .click(function(){
				//alert("hi from "+this.id);
				var linum_0 = this.id;
				var linum = linum_0.substr(13,linum_0.length);
				alert("מסכים!");
				ajax_only_accordance(linum,'y');
				$(this).css("color","green");
				var n_1 = "#times_circle_" + linum;
				//alert(n_1);
				$(n_1).css("color","");
				});
			});
			
			$(".times-circle_li").each(function(){
				$(this) .click(function(){
				//alert("hi from "+this.id);
				var linum_0 = this.id;
				var linum = linum_0.substr(13,linum_0.length);
				alert("לא מסכים!");
				ajax_only_accordance(linum,'n');
				$(this).css("color","red");
				var n_1 = "#check_circle_" + linum;
				//alert(n_1);
				$(n_1).css("color","");
				});
			});
			/*
			$("#comments_list li").each(function(){
				$(this) .click(function(){
				//alert("hi from "+this.id);
				var linum_0 = this.id;
				var linum = linum_0.substr(3,linum_0.length);
				//alert(linum);
				ajax_only_li(linum,'n');
				//ajax_only_co(linum,'n');
				});
			});
			*/
		});
	}
	
	//comments
	if (a_10 == 2)
	{	
	//entering data	
		// var name = 'next';
		// var dataObject = {};
		// dataObject[name] = 1;
		var mapza = "11";
	
	//ajax request
		$.ajax
		({
			url: 'book.php',
			type: 'POST',
			data: {'line_number': mapza}
			//data: {"mapza_2": dataObject}
		}).done(function(result)
		{
			
			$("#comments").html(result);
	
			height_func_co();
		
		});
	}
}

function ajax_only (num, y_n)
{
	console.log("---ajax_only");
		
	if (result_text.by_number == 'Top 3')
	{
		var a_13_1 = 3;
	}	
	else
	{
		if (result_text.by_number == 'Top 10')
		{
			var a_13_1 = 10;
		}
		else
		{
			var a_13_1 = 1000;
		}
	}
		
	var kind_2 = JSON.stringify(order_by);
	console.log("kind_2",kind_2);
	console.log('order_by before json:',order_by);
//ajax request
	$.ajax
	({
		url: 'example.php',
		type: 'POST',
		data: {'kind': a_13_1,
			   'obj_2': kind_2}
		//data: {"mapza_2": dataObject}
	}).done(function(result)
	{
		$("#comments").html(result);
		
		/*		
		//changing color locally
		if (num !== 0 && y_n == 'y')
		{
			var linum_0 = "#check_circle_"+num;
			var linum_1 = "#times_circle_"+num;
			$(linum_0).css("color","green");		
			$(linum_1).css("color","");		
		}
		
		if (num !== 0 && y_n == 'n')
		{
			var linum_0 = "#check_circle_"+num;
			var linum_1 = "#times_circle_"+num;
			$(linum_0).css("color","");		
			$(linum_1).css("color","red");		
		}
		*/
		
		$(".check-circle_li").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(13,linum_0.length);
			alert("מסכים!");
			ajax_only_accordance(linum,'y');
			/*
			$(this).css("color","green");
			var n_1 = "#times_circle_" + linum;
			//alert(n_1);
			$(n_1).css("color","");
			//ajax_only_2();
			*/
			});
		});
		
		$(".times-circle_li").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(13,linum_0.length);
			alert("לא מסכים!");
			ajax_only_accordance(linum,'n');
			/*
			$(this).css("color","red");
			var n_1 = "#check_circle_" + linum;
			//alert(n_1);
			$(n_1).css("color","");
			//ajax_only_2();
			*/
			});
		});
		
		/*
		$("#comments_list li").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(3,linum_0.length);
			//alert(linum);
			ajax_only_li(linum,'n');
			});
		});
		*/
	});
}

function ajax_only_2 ()
{
	console.log("---ajax_only_2");
		
	if (result_text.by_number == 'Top 3')
	{
		var a_13_1 = 3;
	}	
	else
	{
		if (result_text.by_number == 'Top 10')
		{
			var a_13_1 = 10;
		}
		else
		{
			var a_13_1 = 1000;
		}
	}
		
	var kind_2 = JSON.stringify(order_by);
	console.log("kind_2",kind_2);
	console.log('order_by before json at ajax_only_2:',order_by);
//ajax request
	$.ajax
	({
		url: 'example.php',
		type: 'POST',
		data: {'kind': a_13_1,
			   'obj_2': kind_2}
		//data: {"mapza_2": dataObject}
	}).done(function(result)
	{
		$("#comments").html(result);
		/*
		$(".check-circle").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(13,linum_0.length);
			alert("Agreed!");
			ajax_only_accordance(linum,'y');
			$(this).css("color","green");
			var n_1 = "#times_circle_" + linum;
			//alert(n_1);
			$(n_1).css("color","");
			ajax_only_2();
			});
		});
		
		$(".times-circle").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(13,linum_0.length);
			alert("Disagreed!");
			ajax_only_accordance(linum,'n');
			$(this).css("color","red");
			var n_1 = "#check_circle_" + linum;
			//alert(n_1);
			$(n_1).css("color","");
			ajax_only_2();
			});
		});
		*/
		/*
		$("#comments_list li").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(3,linum_0.length);
			//alert(linum);
			ajax_only_li(linum,'n');
			});
		});
		*/
	});
}

function ajax_top_3 ()
{
	console.log("---ajax_top_3");
		
	
//ajax request
	$.ajax
	({
		url: 'example_top_3.php',
		type: 'POST',
		//data: {'kind': a_13_1,
		//	   'obj_2': kind_2}
		//data: {"mapza_2": dataObject}
	}).done(function(result)
	{
		var a = JSON.parse(result);
		console.log("result_a:",a);
		
		$("#most_popular_content").html(a[0]);
		$("#most_accordance_content").html(a[1]);
		$("#most_accordance_minus_content").html(a[2]);
		//$("#comments").html(result);
		/*
		$(".check-circle").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(13,linum_0.length);
			alert("Agreed!");
			ajax_only_accordance(linum,'y');
			$(this).css("color","green");
			var n_1 = "#times_circle_" + linum;
			//alert(n_1);
			$(n_1).css("color","");
			ajax_only_2();
			});
		});
		
		$(".times-circle").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(13,linum_0.length);
			alert("Disagreed!");
			ajax_only_accordance(linum,'n');
			$(this).css("color","red");
			var n_1 = "#check_circle_" + linum;
			//alert(n_1);
			$(n_1).css("color","");
			ajax_only_2();
			});
		});
		*/
		/*
		$("#comments_list li").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(3,linum_0.length);
			//alert(linum);
			ajax_only_li(linum,'n');
			});
		});
		*/
	});
}


function get_value()
{
	console.log("123:",$("#new_comment").html());
	$("#comment_text").val($("#new_comment").html()); 
}


</script>

<script>
function ajax_only_li (linum,linum_a)
{
	//logging
	console.log("---ajax_only_li");
	console.log("linum:",linum);
	console.log("linum_a:",linum_a);
	
	//putting station sign
	var $station = $("#li_"+linum);
		
	$("#station_result").html($station.html());	
	$("#station_result").css("text-align","center");	
	$("#station_result").css("font-size","16px");	
	$//("#station_header").css("border","1px black solid");	
	$("#station_result").css("padding","4px 8px");	
	$("#station_result").css("margin-right","6px");	
	$("#comments_header").html("Station 1 comments");	
	//$("#station_result_2").css("text-align","left");	
	//$(".verticalLine").css("display","block");
	//$("#station_result").css("font-size","20px");	

	///ajax request to get a elements
	/*	
		$.ajax
		({
			url: 'example_a.php',
			type: 'POST',
			data: {'li_num': linum,
				   'li_num_a':linum_a}
			
		}).done(function(result)
		{
			$("#a_result").html(result);
		});
	*/
}
</script>

<script>
function ajax_only_co (linum,linum_a)
{
	console.log("---ajax_only_co");
	console.log("linum:",linum);
	console.log("linum_a:",linum_a);
	
	//var $station = $("#li_"+linum);
	
	///$("#station_result").html($station.html());	
	//$("#station_result").html($station.html());	
	//$("#station_result").css("text-align","center");	
	//$("#station_result").css("font-size","20px");	
//ajax request
	$.ajax
	({
		url: 'example_co.php',
		type: 'POST',
		data: {'li_num': linum,
			   'li_num_a':linum_a}
		
	}).done(function(result)
	{
		
		//$("#station_result_2").html(result);
		$("#comments").html(result);
				
		$(".check-circle_co").each(function(){
			//$(this).unbind( "click" );
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(21,linum_0.length);
			alert("מסכים!");
			ajax_only_accordance_co(linum,'y');
			$(this).css("color","green");
			var n_1 = "#comment_times_circle_" + linum;
			//alert(n_1);
			$(n_1).css("color","");
			});
		});
		
		$(".times-circle_co").each(function(){
			//$(this).unbind( "click" );   
			
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(21,linum_0.length);
			alert("לא מסכים!");
			ajax_only_accordance_co(linum,'n');
			$(this).css("color","red");
			var n_1 = "#comment_check_circle_" + linum;
			//alert(n_1);
			$(n_1).css("color","");
			});
		});
		
		$("#comments_list_co li").each(function(){
			$(this) .click(function(){
			//alert("hi from "+this.id);
			var linum_0 = this.id;
			var linum = linum_0.substr(3,linum_0.length);
			//alert(linum);
			//ajax_only_li(linum,'n');
			//ajax_only_co(linum,'n');
			
			var $station = $("#co_"+linum);
	
			//$("#station_result").html($station.html());	
			$("#station_result_1_1").html($station.html());	
			                      
			$("#station_result_1_1").css("text-align","center");	
			//$("#station_header_2").css("font-size","16px");	
			//$("#station_header_2").css("border","1px black solid");	
			$("#station_result_1_1").css("padding","4px 8px");	
			//$(".verticalLine").css("display","block");
						
			$("#comments_header").html("Station 2 comments");	
			});
		});
	});
}
//ajax_only_co(1,1);
</script>

<script>
function ajax_only_accordance (num, y_n)
{
	console.log("---ajax_only_accordance");
	console.log("y_n:",y_n);
	console.log("num:",num);
		
//ajax request
	$.ajax
	({
		url: 'example_accordance.php',
		type: 'POST',
		data: {'Y_n': y_n,
			   'Number_0': num}
		
	}).done(function(result)
	{
		//$("#accordance_result").html(result);
		ajax_only(num, y_n);
	});
	
	ajax_top_3 ();
}
</script>

<script>
function ajax_only_accordance_co (num, y_n)
{
	console.log("---ajax_only_accordance_co");
	console.log("y_n:",y_n);
	console.log("num:",num);
		
//ajax request
	$.ajax
	({
		url: 'example_accordance_co.php',
		type: 'POST',
		data: {'Y_n': y_n,
			   'Number_0': num}
		
	}).done(function(result)
	{
		//$("#accordance_co_result").html(result);
	});
}
</script>

<script>

// PHP AJAX Function
// src: https://www.w3schools.com/php/php_ajax_database.asp 
// src2:https://www.w3schools.com/xml/ajax_xmlhttprequest_create.asp  

function send_to_ajax(linenumber,yesno,subject,subsubject){
		
		var line = "drill_completed_"+linenumber;
		console.log("send_2_ajax from:",line);
		
		if (document.getElementsByClassName(line)[0].innerHTML == '<i class="fa fa-check-square-o" style="font-size:24px;"></i>') 
		{
			cl("it's a check mark",1);
			yesno = "no";
			if (window.XMLHttpRequest) 
			{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
			}
			else
			{
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
				document.getElementsByClassName(line)[0].innerHTML = this.responseText;
				//get_check_marks(document.getElementsByClassName(line)[0],"unchecked");
				get_check_marks_of_group (subject,subsubject);
				}
			};
			xmlhttp.open("GET","co_2.php?ln=" + linenumber + "&yn=" + yesno + "&sub=" + subject,true);
			xmlhttp.send();
		} 
		else
		{ 
			if (window.XMLHttpRequest) 
			{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
			}
			else
			{
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
				document.getElementsByClassName(line)[0].innerHTML = this.responseText;
				//get_check_marks(document.getElementsByClassName(line)[0],"unchecked");
				get_check_marks_of_group (subject,subsubject);
				}
			};
		xmlhttp.open("GET","co_2.php?ln=" + linenumber + "&yn=" + yesno + "&sub=" + subject,true);
		xmlhttp.send();
		}
	}

// PHP AJAX Function End

</script>

<script>
cl("Working on adding Comments."+"\n"+"\n"+"Amazing, simply Amazing!"+"\n"+"\n"+"Next step: Putting in subjects."+"\n"+"\n"+"KEEP UP THE GREAT WORK!!!"+"\n"+"\n"+"Putting buttons in Legend."+"\n"+"\n"+"Finish first_check() to first load checks status with JSON, and then make get_check_marks_of_group() work on other subjects as for Probability. love you."+"\n"+"\n"+"Bonus: Switching all data to database."+"\n"+"\n"+"Well Done!"+"\n"+"\n"+"example_input - finish entering comment to data base.",545);
</script>

<script>
function first_check_all()	
{
	console.log("first_check_all");
	var obj = {};
		
	obj[0] = {P1:"Algebra",
		      P2:"Probability",
			  P3:"Series",
			 };
		   
	obj[1] = {P1:"Algebra",
			  S1:"Peruk",
			  P2:"Algebra",
			  S2:"SolvingEquations",
			  P3:"Algebra",
			  S3:"Unequalities",
			  P4:"Algebra",
			  S4:"Powers",
			  P5:"Algebra",
			  S5:"Roots",
			  P6:"Algebra",
			  S6:"PolynomDevision",
			  P7:"Algebra",
			  S7:"Problems",
			  P8:"Series",
			  S8:"Heshbonit",
			  P9:"Series",
			  S9:"Handasit",
			  P10:"Series",
			  S10:"HandasitInfinite",
			  P11:"Series",
			  S11:"Clalit",
			  P12:"Probability",
			  S12:"Intro",
			  P13:"Probability",
			  S13:"23stageSpace",
			  P14:"Probability",
			  S14:"Binom"
			  };   
	
	//console.log("obj:",obj);
	dbParam = JSON.stringify(obj);
	//console.log("dbParam:",dbParam);
	
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			a = JSON.parse(this.responseText);
			var b = Object.keys(a[0]).length;
			console.log("answer[0]:",a[0]);
			console.log("answer[1]:",a[1]);
			//console.log("b:",b);
			
			for(i=0;i<b;i++)
			{
				var p_index = i + 1;
				//console.log("p_index:",p_index);
				var p_name = "P"+ p_index;
				//console.log("p_name:",p_name);
				
				if(a[0][p_name] == 'y')
				{
					document.getElementById(obj[0][p_name]).style.backgroundColor = "green";
					document.getElementById(obj[0][p_name]).style.color = "white";
				}
				else
				{
					document.getElementById(obj[0][p_name]).style.backgroundColor = "white";
					document.getElementById(obj[0][p_name]).style.color = "black";
				}
			}
		}
	};
	xmlhttp.open("GET","re.php?ln=" + dbParam,true);
	xmlhttp.send();
}
</script>

<script>
function first_check_algebra()	
{
	console.log("first_check_algebra");
	var obj = {};
		
	obj[0] = {P1:"Algebra"
		     };
		   
	obj[1] = {P1:"Algebra",
			  S1:"Peruk",
			  P2:"Algebra",
			  S2:"SolvingEquations",
			  P3:"Algebra",
			  S3:"Unequalities",
			  P4:"Algebra",
			  S4:"Powers",
			  P5:"Algebra",
			  S5:"Roots",
			  P6:"Algebra",
			  S6:"PolynomDevision",
			  P7:"Algebra",
			  S7:"Problems"
			  };   
	
	//console.log("obj:",obj);
	dbParam = JSON.stringify(obj);
	//console.log("dbParam:",dbParam);
	
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			a = JSON.parse(this.responseText);
			var b = Object.keys(a[1]).length;
			var b_1 = b/2;
			console.log("answer[0]:",a[0]);
			console.log("answer[1]:",a[1]);
			console.log("b:",b);
			console.log("b_1:",b_1);
			
			for(i=0;i<b_1;i++)
			{
				var p_index = i + 1;
				console.log("p_index:",p_index);
				var p_name = "S"+ p_index;
				console.log("p_name:",p_name);
				
				if(a[1][p_name] == 'y')
				{
					if (i == 0)
					{
					document.getElementById("fire_1").style.backgroundColor = "green";
					document.getElementById("fire_1").style.color = "white";
					}
					
					if (i == 0)
					{
					document.getElementById("gold_1").style.backgroundColor = "green";
					document.getElementById("gold_1").style.color = "white";
					}
					if (i == 1)
					{
					document.getElementById("silver_1").style.backgroundColor = "green";
					document.getElementById("silver_1").style.color = "white";
					}
					if (i == 2)
					{
					document.getElementById("bronze_1").style.backgroundColor = "green";
					document.getElementById("bronze_1").style.color = "white";
					}
					if (i == 3)
					{
					document.getElementById("copper_1").style.backgroundColor = "green";
					document.getElementById("copper_1").style.color = "white";
					}
					if (i == 4)
					{
					document.getElementById("oil_1").style.backgroundColor = "green";
					document.getElementById("oil_1").style.color = "white";
					}
					if (i == 5)
					{
					document.getElementById("metal_1").style.backgroundColor = "green";
					document.getElementById("metal_1").style.color = "white";
					}
					if (i == 6)
					{
					document.getElementById("water_1").style.backgroundColor = "green";
					document.getElementById("water_1").style.color = "white";
					}
				}
			}
		}
	};
	xmlhttp.open("GET","re.php?ln=" + dbParam,true);
	xmlhttp.send();
}
</script>

<script>
function match_height(element_to_be_matched,match_to_element)
{
	var a_1="#"+element_to_be_matched;
	var a_2="#"+match_to_element;
	//console.log("#element_to_be_matched: ",a_1);
	//console.log("#match_to_element: ",a_2);
	//console.log("#match_to_element height: ",$("#"+match_to_element).outerHeight());
	$("#"+element_to_be_matched).css("height",$("#"+match_to_element).outerHeight()); 
	
}
</script>

<script>
function match_height_by_class(element_to_be_matched,match_to_element)
{
	var a_1="."+element_to_be_matched;
	var a_2="."+match_to_element;
	//console.log("#element_to_be_matched: ",a_1);
	//console.log("#match_to_element: ",a_2);
	//console.log("#match_to_element height: ",$("#"+match_to_element).outerHeight());
	$("."+element_to_be_matched).css("height",$("."+match_to_element).outerHeight()); 
	
}
</script>

<script>
function a_11_f() {
console.log("---a 11 f")

var a_11_loader = $(document).outerWidth()/2-60;
//console.log(a_11_loader);
var a_12_loader = $(window).outerHeight()/2-60;
$('.loader').css("left",a_11_loader);
$('.loader').css("top",a_12_loader);
}
</script>

<script>
// $(document).ready(function(){
// $(window).on('load',function(){
$(document).ready(function()
{
	send_comments (1,1,0,3);
	ajax_top_3 ();
	var var_select = 0;
	$("#comments_list").css("margin-top","0");
	
	//Adding class status name
	$("#comments").addClass("first_3");
	$("#comments").addClass("first_3_co");
	$("#comments").addClass("a_li_active");
	
	/*
		$("#refresh_comments").click({param1: first_time_1}, function(event){
			ajax_top_3();
		});
	*/
	
	var first_time_1 = 1;
    
	$("#station_result_home").click({param1: first_time_1}, function(event){
		order_by = JSON.parse(JSON.stringify(order_by_levels["L_1"]));
		result_text = JSON.parse(JSON.stringify(result_text_levels["L_1"]));
		
		sorting_value(result_text,order_by,order_by_2);
		send_comments("1","1","0","3",);
	});
	
	$("#station_result").click({param1: first_time_1}, function(event){
		order_by = JSON.parse(JSON.stringify(order_by_levels["L_2"]));
		result_text = JSON.parse(JSON.stringify(result_text_levels["L_2"]));
		
		sorting_value(result_text,order_by,order_by_2);
		send_comments("1","1","0","3",);
	});
	
	$("#under_comments").click({param1: first_time_1}, function(event){
		//$("#comments").removeClass("co_active").addClass("a_li_active");
		//send_comments("1","0");
	});
		
	$("#under_comments_co").click({param1: first_time_1}, function(event){
		$("#comments").removeClass("a_li_active").addClass("co_active");
		send_comments("2","0","0");
	});
	
	$("#search_x_div").click(function(){
		document.getElementById("myInput_co").value = '';
		send_comments(1,1,1000);
	});
	
	$("#Algebra").click(function()
	{
		$.post("metal_2.php",
			{
			string_1:"text"	,
			number_1:"12"	,
			},
			function(data, status)
			{
				$("#div_table_drills").html(data);
				
				$("#fire_1").click(function()
				{
					$(".fire").toggle();
					$("#trade").toggle(false);
					$("#trade_1").toggle(false);
					$("#trade_2").toggle(false);
					$("#trade_3").toggle(false);
					$("#trade_4").toggle(false);
					$("#trade_ex").toggle(false);
					cl("fire toggled",1);
					
				});
				cl("fire added",1);
				
				$("#trade_0").click(function()
				{
					$("#trade").toggle();
					$("#trade_ex").toggle();
					$("#trade_1").toggle(false);
					$("#trade_2").toggle(false);
					$("#trade_3").toggle(false);
					$("#trade_4").toggle(false);
					
					cl("trade toggled",1);
				});
				cl("trade added",1);
				
				$("#trade").click(function()
				{
					$("#trade_1").toggle();
					$("#trade_2").toggle(false);
					$("#trade_3").toggle();
					$("#trade_4").toggle(false);
					cl("trade_1 toggled",1);
					cl("trade_3 toggled",1);
				});
				cl("trade_1 added",1);
				
				$("#trade_1").click(function()
				{
					$("#trade_2").toggle();
				});
				
				$("#trade_3").click(function()
				{
					$("#trade_4").toggle();
				});
				
				$("#gold_1").click(function()
				{
					$(".gold").toggle();
					cl("gold toggled",1);
				});
				cl("gold added",1);
				
				$("#silver_1").click(function()
				{
					$(".silver").toggle();
					cl("silver toggled",1);
				});
				cl("silver added",1);
				
				$("#bronze_1").click(function()
				{
					$(".bronze").toggle();
					cl("bronze toggled",1);
				});
				cl("bronze added",1);
				
				$("#copper_1").click(function()
				{
					$(".copper").toggle();
					cl("copper toggled",1);
				});
				cl("copper added",1);
		
				$("#oil_1").click(function()
				{
					$(".oil").toggle();
					cl("oil toggled",1);
				});
				cl("oil added",1);
				
				$("#metal_1").click(function()
				{
					$(".metal").toggle();
					cl("metal toggled",1);
				});
				cl("metal added",1);
		
				$("#water_1").click(function()
				{
					$(".water").toggle();
					cl("water toggled",1);
				});
				cl("water added",1);
				
				//adding class and click function to td's in class try
				$(".try").each(function(index)
				{
					var a = index+1;
					var id_name = "drill_completed_"+a;
					var str_id_added = [];
					$(this).attr('class',id_name);
					cl(id_name+"-# added",index);
		
					$(this).click(function()
					{
						send_to_ajax(index+1,"yes","Algebra");
						cl(id_name+" clicked",index+1);
					});
				});
				
				//getting checked status
				ajax_checked("Algebra");
				//now checked status is in arrayD.
				first_check_algebra();
				$("#fire_1").click();
				$("#gold_1").click();
				$("#silver_1").click();
				$("#bronze_1").click();
				$("#copper_1").click();
				$("#oil_1").click();
				$("#metal_1").click();
				$("#water_1").click();
			}
		);
	});	
	
	$("#Series").click(function()
	{
		$.post("metal_3.php",
		{
			subject:"Series"	,
			subsubject:"Heshbonit"	,
			subsubject_1:"Handasit"	,
			subsubject_2:"HandasitInfinite"	,
			subsubject_3:"Clalit"	,
		},
			function(data, status)
			{
				$("#div_table_drills").html(data);
				$("#Heshbonit_1").click(function()
				{
					$(".Heshbonit").toggle();
					cl("Heshbonit toggled",1);
				});
				cl("Heshbonit added",1);
				
				$("#Handasit_1").click(function()
				{
					$(".Handasit").toggle();
					cl("Handasit toggled",1);
				});
				cl("Handasit added",1);
				
				$("#HandasitInfinite_1").click(function()
				{
					$(".HandasitInfinite").toggle();
					cl("HandasitInfinite toggled",1);
				});
				cl("HandasitInfinite added",1);
		
				$("#Clalit_1").click(function()
				{
					$(".Clalit").toggle();
					cl("Clalit toggled",1);
				});
				cl("Clalit added",1);
				
				//adding class and click function to td's in class try
				$(".try").each(function(index)
				{
					var a = index+1;
					var id_name = "drill_completed_"+a;
					var table_class_1 = this.parentElement.className; 
					var table_class = this.parentElement.className+"_2"; 
					//console.log("this parent element class name:",this.parentElement.className);
					var id_name_2 = id_name + " " + table_class;
					$(this).attr('class',id_name_2);
					cl("classes "+id_name + " and "+table_class+" added",index);
					
					$(this).click(function()
					{
						send_to_ajax(index+1,"yes","Series",table_class_1);
						cl(id_name+" clicked",index+1);
					});
				});
				
				//getting checked status
				ajax_checked("Series");
				//now checked status is in arrayD.
			
				$("#Heshbonit_1").click();
				$("#Handasit_1").click();
				$("#HandasitInfinite_1").click();
				$("#Clalit_1").click();
			}
		);
	});
	
	$("#Probability").click(function()
	{
		$.post("metal_5.php",
		{
			subject:"Probability"	,
			subsubject:"intro"	,
			subsubject_1:"23stageSpace"	,
			subsubject_2:"Binom"	,
		},
			function(data, status)
			{
				$("#div_table_drills").html(data);
				$("#car_1").click(function()
				{
					$(".intro").toggle();
					$("#space").toggle(false);
					$("#space_1").toggle(false);
					$("#space_2").toggle(false);
					cl("intro toggled",1);
					
				});
				cl("intro added",1);
				
				$("#space_0").click(function()
				{
					$("#space").toggle();
					$("#space_1").toggle(false);
					$("#space_2").toggle(false);
					cl("space toggled",1);
				});
				cl("space added",1);
				
				$("#space").click(function()
				{
					$("#space_1").toggle();
					$("#space_2").toggle(false);
					cl("space_1 toggled",1);
				});
				cl("space_1 added",1);
				
				$("#space_1").click(function()
				{
					$("#space_2").toggle();
				});
					
				$("#example_1").click(function()
				{
					$(".23stageSpace").toggle();
					cl("23stageSpace toggled",1);
				});
				cl("23stageSpace added",1);
	
				$("#giraffe_1").click(function()
				{
					$(".Binom").toggle();
					cl("Binom toggled",1);
				});
				cl("Binom added",1);
				
				//adding class and click function to td's in class try
				$(".try").each(function(index)
				{
					var a = index+1;
					var id_name = "drill_completed_"+a;
					var table_class_1 = this.parentElement.className; 
					var table_class = this.parentElement.className+"_2"; 
					//console.log("this parent element class name:",this.parentElement.className);
					var id_name_2 = id_name + " " + table_class;
					$(this).attr('class',id_name_2);
					cl("classes "+id_name + " and "+table_class+" added",index);
					
					$(this).click(function()
					{
						send_to_ajax(index+1,"yes","Probability",table_class_1);
						cl(id_name+" clicked",index+1);
					});
				});
				
				//getting checked status
				ajax_checked("Probability");
				//now checked status is in arrayD.
				
				$("#car_1").click();
				$("#example_1").click();
				$("#giraffe_1").click();
						
			}
		);
	});
	
	$("#all").click(function()
	{
		$.post("metal_4.php",
		{
			string_1:"text"	,
			number_1:"12"	,
		},
			function(data, status)
			{
				$("#div_table_drills").html(data);
				
				$("#fire_1").click(function()
				{
					$(".fire").toggle();
					$("#trade").toggle(false);
					$("#trade_1").toggle(false);
					$("#trade_2").toggle(false);
					cl("fire toggled",1);
				});
				cl("fire added",1);	
				
				$("#trade_0").click(function()
				{
					$("#trade").toggle();
					$("#trade_1").toggle(false);
					$("#trade_2").toggle(false);
					cl("trade toggled",1);
				});
				cl("trade added",1);
				
				$("#trade").click(function()
				{
					$("#trade_1").toggle();
					$("#trade_2").toggle(false);
					cl("trade_1 toggled",1);
				});
				cl("trade_1 added",1);
				
				$("#trade_1").click(function()
				{
					$("#trade_2").toggle();
				});
				
				$("#gold_1").click(function()
				{
					$(".gold").toggle();
					cl("gold toggled",1);
				});
				cl("gold added",1);
				
				$("#silver_1").click(function()
				{
					$(".silver").toggle();
					cl("silver toggled",1);
				});
				cl("silver added",1);
				
				$("#bronze_1").click(function()
				{
					$(".bronze").toggle();
					cl("bronze toggled",1);
				});
				cl("bronze added",1);
				
				$("#copper_1").click(function()
				{
					$(".copper").toggle();
					cl("copper toggled",1);
				});
				cl("copper added",1);
		
				$("#oil_1").click(function()
				{
					$(".oil").toggle();
					cl("oil toggled",1);
				});
				cl("oil added",1);
				
				$("#metal_1").click(function()
				{
					$(".metal").toggle();
					cl("metal toggled",1);
				});
				cl("metal added",1);
		
				$("#water_1").click(function()
				{
					$(".water").toggle();
					cl("water toggled",1);
				});
				cl("water added",1);
				
				$("#Heshbonit_1").click(function()
				{
					$(".Heshbonit").toggle();
					cl("Heshbonit toggled",1);
				});
				cl("Heshbonit added",1);
				
				$("#Handasit_1").click(function()
				{
					$(".Handasit").toggle();
					cl("Handasit toggled",1);
				});
				cl("Handasit added",1);
				
				$("#HandasitInfinite_1").click(function()
				{
					$(".HandasitInfinite").toggle();
					cl("HandasitInfinite toggled",1);
				});
				cl("HandasitInfinite added",1);
		
				$("#Clalit_1").click(function()
				{
					$(".Clalit").toggle();
					cl("Clalit toggled",1);
				});
				cl("Clalit added",1);
				
				$("#car_1").click(function()
				{
					$(".car").toggle();
					cl("car toggled",1);
				});
				cl("car added",1);
	
				$("#example_1").click(function()
				{
					$(".example").toggle();
					cl("example toggled",1);
				});
				cl("example added",1);
	
				$("#giraffe_1").click(function()
				{
					$(".giraffe").toggle();
					cl("giraffe toggled",1);
				});
				cl("giraffe added",1);
				
				//adding class and click function to td's in class try
				$(".try").each(function(index)
				{
					var a = index+1;
					var id_name = "drill_completed_"+a;
					var str_id_added = [];
					$(this).attr('class',id_name);
					cl(id_name+"-# added",index);
		
					$(this).click(function()
					{
						send_to_ajax(index+1,"yes","All");
						cl(id_name+" clicked",index+1);
					});
				});
				
				//getting checked status
				ajax_checked("All");
				//now checked status is in arrayD.
			}
		);
	});
	//get_check_marks_of_group("Probability","23stageSpace");
	//get_check_marks_of_group("Probability","intro");
	//get_check_marks_of_group("Probability","Binom");
	//get_check_marks_of_group("Algebra","Peruk");
	//first_check(["Probability","Algebra"],["Binom","intro","Peruk","23stageSpace"]);
	first_check_all();
	//match_height("comment_text","new_comment");
	//match_height("comment_text_2","new_comment");
	//match_height("comment_text_3","new_comment");
	//match_height("new_comment_form","new_comment");
	//match_height("comments_from_db","comments");
	var c_once=0;
	var d_once=0;
	$("#n").click(function()
	{
		if(c_once==0)
		{
			//alert("already clicked");
		
			c_once=1;
			console.log("c_once changed",c_once);
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
				for (i=2;i<Object.keys(result_1).length-2;i++)
				{
					var t = $("#real_time").html();
					t = t + "<div style='float:right;text-align:center;border:0.5px white solid;margin:4px;padding:4px;background-color:green;width:100px;color:white;'><div id='nam_"+i+"' style='margin:4px;padding:4px;'>Hi "+i+"</div>";
					t = t + "<div id='num_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div></div>";
					$("#real_time").html(t);
					console.log(t);
					var t_nam = "#nam_"+i;
					var t_num = "#num_"+i;
					$(t_nam).html(Object.keys(result_1)[i]+"<hr>");
					var d1 = Object.keys(result_1)[i];
					d_2 = d_2+Number(result_1[d1]);
					$(t_num).html(result_1[d1]);
					$("#M_num").html(' 2,000'+'/'+'<i class="fa fa-check-circle-o" style="color:green;" ></i>'+d_2);
					//console.log(result_1);
				}
				console.log("d_2:",d_2);
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
			console.log("c_once changed",c_once);
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
				for (i=2;i<Object.keys(result_1).length-2;i++)
				{
					var t = $("#real_time_2").html();
					t = t + "<div style='float:right;text-align:center;border:0.5px white solid;margin:4px;padding:4px;background-color:purple;width:100px;color:white;'><div id='nam_p_"+i+"' style='margin:4px;padding:4px;'>Hi "+i+"</div>";
					t = t + "<div id='num_p_"+i+"' style='margin:4px;padding:4px;color:white;'>Hi "+i+"</div></div>";
					$("#real_time_2").html(t);
					console.log(t);
					var t_nam = "#nam_p_"+i;
					var t_num = "#num_p_"+i;
					$(t_nam).html(Object.keys(result_1)[i]+"<hr>");
					var d1 = Object.keys(result_1)[i];
					d_2_p = d_2_p+Number(result_1[d1]);
					$(t_num).html(result_1[d1]);
					$("#P_num").html(' 1,000'+'/'+'<i class="fa fa-check-circle-o" style="color:green;" ></i>'+d_2_p);
					//$("#P_num").html('<i class="fa fa-circle-o"></i>');
					//console.log(result_1);
				}
				console.log("d_2_p:",d_2_p);
				
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				//scope.daily_income_1 = Number(result_1["Daily_IN_1"]);
				//console.log($("#tot").html());
			});
		}
	});
	setTimeout(function(){ $("#n").click(); }, 1000);
	console.log("c_once outside",c_once);
	setTimeout(function(){ $("#div_header_3").click(); }, 1000);
	console.log("d_once outside",d_once);
	//opacity for loader
	$('#div_header_3, #div_1, #div_table_drills, #hr_number_1, #footer_1, #new_comment, #new_comment_2, #new_comment_form').animate({opacity:1},1000);
	$('.loader').css ("display","none");
});
</script>

<script>
$( window ).resize(function() 
{
//loader
	a_11_f();
});
</script>

</body>
</html>