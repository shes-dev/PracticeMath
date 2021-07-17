<?php

// Vars
$Subject=$_POST['subject'];
$SubSubject=$_POST['subsubject'];
$SubSubject_1=$_POST['subsubject_1'];
$SubSubject_2=$_POST['subsubject_2'];

echo '<table id="table_drills" style="margin-top:2.5px;">
			
			<tr>
				<th style="width:10px;background-color:magenta;border-right-style:none;"></td>
				<th style="width:10px;background-color:black;border-right-style:none;"></td>
				<th id="'.$SubSubject.'_1" colspan="3" style="border-right-style:none;"><h3><b>מבוא</b></h3></td>
				
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<th rowspan="18" style="background-color:magenta;border-right-style:none;"></td>
				<th rowspan="18" style="background-color:black;border-right-style:none;"></td>
				<th style="padding:0px 4px;">נושא</th>
				<th style="width:50px;">הסבר</th>
				<th style="width:50px;" class="tooltip">תרגול<span class="tooltiptext">לפחות שעה וחצי</span></th>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr id="space_0" class="'.$SubSubject.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">אקראיות</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr id="space" class="'.$SubSubject.'">
				
				
				<td style="border-right-style:none;text-align:center;padding:2px 10px;border-right-style:none;">השאלה עם הקופץ לגובה והפלאפל</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr id="space_1" class="'.$SubSubject.'">
				
				
				<td style="border-right-style:none;text-align:center;padding:2px 10px;border-right-style:none;"><img src="pics/2.png" style="width:100%;"></td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr id="space_2" class="'.$SubSubject.'">
				
				
				<td style="border-right-style:none;text-align:center;padding:2px 10px;border-right-style:none;"><img src="pics/2_Ans_1.jpg" style="width:100%;"></td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">מרחב הסתברות סופי</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">חוקי ההסתברות</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">מאורעות בלתי תלויים</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">מאורעות תלויים</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">הסתברות מותנית</td>
				<td></td>
				<td class="try"></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject.'">
				
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">נוסחת בייס</td>
				<td></td>
				<td class="try"></td>
			</tr>
			</table>

			<table id="table_drills" style="margin-top:2.5px;"><tr>
				<th style="width:10px;background-color:magenta;border-right-style:none;"></td>
				<th style="width:10px;background-color:blue;border-right-style:none;"></td>
				<th id="'.$SubSubject_1.'_1" colspan="3" style="border-right-style:none;"><h3><b>מרחב דו ותלת שלבי</b></h3></td>
				
			</tr><tr class="'.$SubSubject_1.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr><tr class="'.$SubSubject_1.'">
				<th rowspan="15" style="background-color:magenta;border-right-style:none;"></td>
				<th rowspan="15" style="background-color:blue;border-right-style:none;"></td>
				<th style="padding:0px 4px;">נושא</th>
				<th style="width:50px;">הסבר</th>
				<th style="width:50px;" class="tooltip">תרגול<span class="tooltiptext">לפחות שעה וחצי</span></th>
			</tr><tr class="'.$SubSubject_1.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">טבלאות</td>
				<td></td>
				<td class="try"></td>
			</tr><tr class="'.$SubSubject_1.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_1.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">עצים</td>
				<td></td>
				<td class="try"></td>
			</tr></table><table id="table_drills" style="margin-top:2.5px;"><tr>
				<th style="width:10px;background-color:magenta;border-right-style:none;"></td>
				<th style="width:10px;background-color:yellow;border-right-style:none;"></td>
				<th id="'.$SubSubject_2.'_1" colspan="3" style="border-right-style:none;"><h3><b>התפלגות בינומית</b></h3></td>
				
			</tr><tr class="'.$SubSubject_2.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr><tr class="'.$SubSubject_2.'">
				<th rowspan="15" style="background-color:magenta;border-right-style:none;"></td>
				<th rowspan="15" style="background-color:yellow;border-right-style:none;"></td>
				<th style="padding:0px 4px;">נושא</th>
				<th style="width:50px;">הסבר</th>
				<th style="width:50px;" class="tooltip">תרגול<span class="tooltiptext">לפחות שעה וחצי</span></th>
			</tr><tr class="'.$SubSubject_2.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">נוסחת ברנולי</td>
				<td></td>
				<td class="try"></td>
			</tr><tr class="'.$SubSubject_2.'">
				<td colspan="5" style="border-right-style:none;"><hr></td>
			</tr>
			
			<tr class="'.$SubSubject_2.'">
				
				
				<td style="border-right-style:none;text-align:right;padding:2px 10px;border-right-style:none;">הערה: יש ללמד קומבינטוריקה רק לצורכי ההתפלגות הבינומית</td>
				<td></td>
				<td class="try"></td>
			</tr></table>';
?>