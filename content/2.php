<!DOCTYPE html>
<html lang="iw" dir="rtl">
<!-- src -->
	<!-- https://www.w3schools.com/css/css_tooltip.asp -->
<head>
<!-- Encoding -->
<meta charset="utf-8">
<!-- Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<!-- Styling -->
<style>
* {font-family: 'Varela Round', sans-serif;}

#div_upper {width:100%;
	background-color:green;}
	
#div_header_2 {width:100%;
	background-color:blue;}

#div_table_names {width:100%;
	margin:auto;}

#div_table_drills {width:100%;
	margin:auto;}
	
#table_names {width:100%;
	margin:auto;
	border:1px solid black;
	text-align:center;
	/*border-collapse:collapse;*/
	/*border-spacing:0.5px;*/}

#table_names th {border:1px solid black;}
#table_names th {border-collapse:collapse;}
	
#table_drills {width:100%;
	margin:auto;
	border:1px solid black;
	text-align:center;
	/*border-collapse:collapse;*/
	/*border-spacing:0.5px;*/}

#table_drills th {border:1px solid black;}
#table_drills th {border-collapse:collapse;}
#table_drills td {border-right-style:ridge;}

hr {margin:0.5px;
	/*border-style:dashed;*/}

#hr_1 {
	margin:-0.5px;
	height:0.75px;
	background-color:darkgrey;
	}
	
#hr_2 {
	margin:0.5px;
	border-style:solid;}
/* Tooltip styling */

/* Tooltip container */
.tooltip {
    position: relative;
    /*display: inline-block;*/
    /*border-bottom: 1px dotted black; /* If you want dots under the hoverable text */*/
}

/* Tooltip text */
.tooltiptext {
    visibility: hidden;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
	width: 120px;
    bottom: 100%;
    left: 50%; 
    margin-left: -60px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
	}

/* Tooltip arrow */
.tooltip .tooltiptext::after {
    content: " ";
    position: absolute;
    top: 100%; /* At the bottom of the tooltip */
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: black transparent transparent transparent;
}
</style>
</head>

<body>
<!-- Welcome div -->
<div id="div_upper">
	<h1><center>ברוכים הבאים</center></h1>
</div>

<div id="div_table_names">
	<table id="table_names">
		<tr>
			<th></th>
			<th colspan="2">תלמיד/ה</th>
			<th colspan="2">שעור הבא</th>
			<th colspan="2">שעורים</th>
		</tr>
		<tr>
			<th></th>
			<th>שם</th>
			<th>אזור</th>
			<th>תאריך</th>
			<th>שעה</th>
			<th class="tooltip">עשינו<span class="tooltiptext">מה עשינו</span></th>
			<th class="tooltip">נשארו<span class="tooltiptext">מה עוד נשאר</span></th>
		</tr>
		<tr>
			<td>1</td>
			<td>ארבל</td>
			<td>ת"א</td>
			<td>12.04</td>
			<td>15</td>
			<td>18</td>
			<td>12</td>
		</tr>
		<tr><td colspan="7"><hr></td></tr>
		<tr>
			<td>2</td>
			<td>עמית</td>
			<td>ת"א</td>
			<td>12.04</td>
			<td>17</td>
			<td>18</td>
			<td>12</td>
		</tr>
		<tr><td colspan="7"><hr></td></tr>
		<tr>
			<td>3</td>
			<td>הילי</td>
			<td>ת"א</td>
			<td>12.04</td>
			<td>20:45</td>
			<td>18</td>
			<td>12</td>
		</tr>
	</table>
</div>

<br>

<div>
<a href="https://www.tel-aviv.gov.il/Transparency/DocLib/%D7%9E%D7%A4%D7%AA%20%D7%A9%D7%9B%D7%95%D7%A0%D7%95%D7%AA%202011.pdf">למפת שכונות תל אביב</a>
<a href="page2.html">דף 2</a>
</div>

<div id="div_header_2">
	<h1><center>מצב תרגולים</center></h1>
</div>

<div id="div_table_drills">
	<table id="table_drills">
		<tr>
			<th rowspan="2"></th>
			<th rowspan="2"></th>
			<th rowspan="2">נושא</th>
			<th rowspan="2">הסבר</th>
			<th colspan="2">תרגול</th>
		</tr>
		<tr>
			
			<th class="tooltip">לבד<span class="tooltiptext">לפחות שעה וחצי</span></th>
			<th class="tooltip">קבוצתי<span class="tooltiptext">לא חובה</span></th>
		</tr>
		<tr>
			<td rowspan="15" style="background-color:violet;border-right-style:none;"></td>
			<td rowspan="5" style="background-color:blue;border-right-style:none;"></td>
			<td style="border-right-style:none;">פוטנציאל ושדה</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">אנרגיה ועבודה חשמלית</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">קיבול</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="7" style="border-right-style:none;"><hr id="hr_1"></td>
		</tr>
		<tr>
			
			<td rowspan="9" style="background-color:green;border-right-style:none;"></td>
			<td style="border-right-style:none;">מעגלי זרם ישר</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">כא"מ והתנגדות פנימית</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">חוקי קירכהוף</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">טעינת ופריקת קבל</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">מעגלים עם קבלים</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr><td colspan="6" style="border-right-style:none;"><hr id="hr_2"></td></tr>
		<tr>
			<td rowspan="7" style="background-color:yellow;border-right-style:none;"></td>
			<td rowspan="7" style="border-right-style:none;"></td>
			<td style="border-right-style:none;">כח מגנטי על מטען</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">כח מגנטי על זרם</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">מקורות שדה מגנטי</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">כא"מ מושרה</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr><td colspan="6" style="border-right-style:none;"><hr id="hr_2"></td></tr>
		<tr>
			<td rowspan="20" style="background-color:orange;border-right-style:none;"></td>
			<td rowspan="5" style="background-color:red;border-right-style:none;"></td>
			<td style="border-right-style:none;">שקול כוחות</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">תנע ומתקף</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="border-right-style:none;"><hr></td>
		</tr>
		<tr>
			
			
			<td style="border-right-style:none;">עבודה ואנרגיה</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="7" style="border-right-style:none;"><hr id="hr_1"></td>
		</tr>
		<tr>
			
			<td rowspan="9" style="background-color:blue;border-right-style:none;"></td>
			<td style="border-right-style:none;">תנועה בתאוצה קבועה</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		</tr>
		<tr><td colspan="6" style="border-right-style:none;"><hr></td></tr>
		<tr>
			
			
			<td style="border-right-style:none;">תנועה מעגלית אופקית</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		</tr>
		<tr><td colspan="6" style="border-right-style:none;"><hr></td></tr>
		<tr>
		<tr>
			
			
			<td style="border-right-style:none;">תנועה מעגלית אנכית</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		</tr>
		<tr><td colspan="6" style="border-right-style:none;"><hr></td></tr>
		<tr>
		<tr>
			
			
			<td style="border-right-style:none;">תנועה הרמונית</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="7" style="border-right-style:none;"><hr id="hr_1"></td>
		</tr>
		<tr>
			
			<td style="background-color:magenta;border-right-style:none;"></td>
			<td style="border-right-style:none;">כבידה</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</div>

</body>
</html>