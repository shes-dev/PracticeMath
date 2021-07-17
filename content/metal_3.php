<?php

// Vars
$Subject=$_POST['subject'];
$SubSubject=$_POST['subsubject'];
$SubSubject_1=$_POST['subsubject_1'];
$SubSubject_2=$_POST['subsubject_2'];
$SubSubject_3=$_POST['subsubject_3'];

echo '<table id="table_drills" style="margin-top:2.5px;">
			
			<tr>
				<th style="width:10px;background-color:yellow;border-right-style:none;"></td>
				<th style="width:10px;background-color:blue;border-right-style:none;"></td>
				<th id="'.$SubSubject.'_1" colspan="3" style="border-right-style:none;"><h3><b>סדרה חשבונית</b></h3></td>
				
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<th rowspan="9" style="background-color:yellow;border-right-style:none;"></td>
				<th rowspan="9" style="background-color:blue;border-right-style:none;"></td>
				<th style="padding:0px 4px;">נושא</th>
				<th style="width:50px;">הסבר</th>
				<th style="width:50px;" class="tooltip">תרגול<span class="tooltiptext">לפחות שעה וחצי</span></th>
			</tr>			
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">איבר כללי</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">סכום</td>
				<td></td>
				<td class="try"></td>
			</tr>

			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">מעבר מכלל לפי מקום לכלל נסיגה</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">מעבר מכלל נסיגה לכלל לפי מקום</td>
				<td></td>
				<td class="try"></td>
			</tr>
			</table>
			
			<table id="table_drills" style="margin-top:2.5px;">
			
			<tr>
				<th style="width:10px;background-color:yellow;border-right-style:none;"></td>
				<th style="width:10px;background-color:red;border-right-style:none;"></td>
				<th id="'.$SubSubject_1.'_1" colspan="3" style="border-right-style:none;"><h3><b>סדרה הנדסית</b></h3></td>
				
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				<th rowspan="9" style="background-color:yellow;border-right-style:none;"></td>
				<th rowspan="9" style="background-color:red;border-right-style:none;"></td>
				<th style="padding:0px 4px;">נושא</th>
				<th style="width:50px;">הסבר</th>
				<th style="width:50px;" class="tooltip">תרגול<span class="tooltiptext">לפחות שעה וחצי</span></th>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">איבר כללי</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">סכום</td>
				<td></td>
				<td class="try"></td>
			</tr>

			<tr class="'.$SubSubject_1.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">מעבר מכלל לפי מקום לכלל נסיגה</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">מעבר מכלל נסיגה לכלל לפי מקום</td>
				<td></td>
				<td class="try"></td>
			</tr>
			</table>
			
			<table id="table_drills" style="margin-top:2.5px;">
			
			<tr>
				<th style="width:10px;background-color:yellow;border-right-style:none;"></td>
				<th style="width:10px;background-color:green;border-right-style:none;"></td>
				<th id="'.$SubSubject_2.'_1" colspan="3" style="border-right-style:none;"><h3><b>סדרה הנדסית אינסופית</b></h3></td>
				
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				<th rowspan="9" style="background-color:yellow;border-right-style:none;"></td>
				<th rowspan="9" style="background-color:green;border-right-style:none;"></td>
				<th style="padding:0px 4px;">נושא</th>
				<th style="width:50px;">הסבר</th>
				<th style="width:50px;" class="tooltip">תרגול<span class="tooltiptext">לפחות שעה וחצי</span></th>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">איבר כללי</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">סכום</td>
				<td></td>
				<td class="try"></td>
			</tr>

			<tr class="'.$SubSubject_2.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">מעבר מכלל לפי מקום לכלל נסיגה</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">מעבר מכלל נסיגה לכלל לפי מקום</td>
				<td></td>
				<td class="try"></td>
			</tr>
			</table>
			
			<table id="table_drills" style="margin-top:2.5px;">
			
			<tr>
				<th style="width:10px;background-color:yellow;border-right-style:none;"></td>
				<th style="width:10px;background-color:black;border-right-style:none;"></td>
				<th id="'.$SubSubject_3.'_1" colspan="3" style="border-right-style:none;"><h3><b>סדרה כללית</b></h3></td>
				
			</tr>
			
			<tr class="'.$SubSubject_3.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_3.'">
				<th rowspan="7" style="background-color:yellow;border-right-style:none;"></td>
				<th rowspan="7" style="background-color:black;border-right-style:none;"></td>
				<th style="padding:0px 4px;">נושא</th>
				<th style="width:50px;">הסבר</th>
				<th style="width:50px;" class="tooltip">תרגול<span class="tooltiptext">לפחות שעה וחצי</span></th>
			</tr>
			
			<tr class="'.$SubSubject_3.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_3.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">לפי מקום</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject_3.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_3.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">לפי נוסחת נסיגה</td>
				<td></td>
				<td class="try"></td>
			</tr>

			<tr class="'.$SubSubject_3.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			 
			<tr class="'.$SubSubject_3.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">(לא יידרש המעבר מכלל לפי מקום לכלל נסיגה או להיפך)</td>
				<td></td>
				<td class="try"></td>
			</tr>
			</table>';
?>