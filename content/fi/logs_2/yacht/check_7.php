<?php

// display errors
//	error_reporting(E_ALL);
//	ini_set('display_errors', 'On');

// setting encoding for Hebrew
	header("Content-Type: text/html; charset=UTF-8");
			
//Extracting data
	
$rows = "{";
//echo '<br>rows array created:'.$rows;
while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
{
	
	//JANUARY 
	$rows.= '"jan_01_1":"'  . $row["jan_01_1"] . '",';
	$rows.= '"jan_01_2":"'  . $row["jan_01_2"] . '",';
	$rows.= '"jan_01_3":"'  . $row["jan_01_3"] . '",';
	$rows.= '"jan_01_4":"'  . $row["jan_01_4"] . '",';
	$rows.= '"jan_01_5":"'  . $row["jan_01_5"] . '",';
	$rows.= '"jan_01_6":"'  . $row["jan_01_6"] . '",';
	$rows.= '"jan_01_7":"'  . $row["jan_01_7"] . '",';
	
	$rows.= '"jan_02_1":"'  . $row["jan_02_1"] . '",';
	$rows.= '"jan_02_2":"'  . $row["jan_02_2"] . '",';
	$rows.= '"jan_02_3":"'  . $row["jan_02_3"] . '",';
	$rows.= '"jan_02_4":"'  . $row["jan_02_4"] . '",';
	$rows.= '"jan_02_5":"'  . $row["jan_02_5"] . '",';
	$rows.= '"jan_02_6":"'  . $row["jan_02_6"] . '",';
	$rows.= '"jan_02_7":"'  . $row["jan_02_7"] . '",';
	
	$rows.= '"jan_03_1":"'  . $row["jan_03_1"] . '",';
	$rows.= '"jan_03_2":"'  . $row["jan_03_2"] . '",';
	$rows.= '"jan_03_3":"'  . $row["jan_03_3"] . '",';
	$rows.= '"jan_03_4":"'  . $row["jan_03_4"] . '",';
	$rows.= '"jan_03_5":"'  . $row["jan_03_5"] . '",';
	$rows.= '"jan_03_6":"'  . $row["jan_03_6"] . '",';
	$rows.= '"jan_03_7":"'  . $row["jan_03_7"] . '",';
	
	$rows.= '"jan_04_1":"'  . $row["jan_04_1"] . '",';
	$rows.= '"jan_04_2":"'  . $row["jan_04_2"] . '",';
	$rows.= '"jan_04_3":"'  . $row["jan_04_3"] . '",';
	$rows.= '"jan_04_4":"'  . $row["jan_04_4"] . '",';
	$rows.= '"jan_04_5":"'  . $row["jan_04_5"] . '",';
	$rows.= '"jan_04_6":"'  . $row["jan_04_6"] . '",';
	$rows.= '"jan_04_7":"'  . $row["jan_04_7"] . '",';
	
	$rows.= '"jan_05_1":"'  . $row["jan_05_1"] . '",';
	$rows.= '"jan_05_2":"'  . $row["jan_05_2"] . '",';
	$rows.= '"jan_05_3":"'  . $row["jan_05_3"] . '",';
		
	//FABRUARY
	$rows.= '"feb_01_1":"'  . $row["feb_01_1"] . '",';
	$rows.= '"feb_01_2":"'  . $row["feb_01_2"] . '",';
	$rows.= '"feb_01_3":"'  . $row["feb_01_3"] . '",';
	$rows.= '"feb_01_4":"'  . $row["feb_01_4"] . '",';
	$rows.= '"feb_01_5":"'  . $row["feb_01_5"] . '",';
	$rows.= '"feb_01_6":"'  . $row["feb_01_6"] . '",';
	$rows.= '"feb_01_7":"'  . $row["feb_01_7"] . '",';
	
	$rows.= '"feb_02_1":"'  . $row["feb_02_1"] . '",';
	$rows.= '"feb_02_2":"'  . $row["feb_02_2"] . '",';
	$rows.= '"feb_02_3":"'  . $row["feb_02_3"] . '",';
	$rows.= '"feb_02_4":"'  . $row["feb_02_4"] . '",';
	$rows.= '"feb_02_5":"'  . $row["feb_02_5"] . '",';
	$rows.= '"feb_02_6":"'  . $row["feb_02_6"] . '",';
	$rows.= '"feb_02_7":"'  . $row["feb_02_7"] . '",';
	
	$rows.= '"feb_03_1":"'  . $row["feb_03_1"] . '",';
	$rows.= '"feb_03_2":"'  . $row["feb_03_2"] . '",';
	$rows.= '"feb_03_3":"'  . $row["feb_03_3"] . '",';
	$rows.= '"feb_03_4":"'  . $row["feb_03_4"] . '",';
	$rows.= '"feb_03_5":"'  . $row["feb_03_5"] . '",';
	$rows.= '"feb_03_6":"'  . $row["feb_03_6"] . '",';
	$rows.= '"feb_03_7":"'  . $row["feb_03_7"] . '",';
	
	$rows.= '"feb_04_1":"'  . $row["feb_04_1"] . '",';
	$rows.= '"feb_04_2":"'  . $row["feb_04_2"] . '",';
	$rows.= '"feb_04_3":"'  . $row["feb_04_3"] . '",';
	$rows.= '"feb_04_4":"'  . $row["feb_04_4"] . '",';
	$rows.= '"feb_04_5":"'  . $row["feb_04_5"] . '",';
	$rows.= '"feb_04_6":"'  . $row["feb_04_6"] . '",';
	$rows.= '"feb_04_7":"'  . $row["feb_04_7"] . '",';
	
	//mar 18
	$rows.= '"mar_01_1":"'  . $row["mar_01_1"] . '",';
	$rows.= '"mar_01_2":"'  . $row["mar_01_2"] . '",';
	$rows.= '"mar_01_3":"'  . $row["mar_01_3"] . '",';
	$rows.= '"mar_01_4":"'  . $row["mar_01_4"] . '",';
	$rows.= '"mar_01_5":"'  . $row["mar_01_5"] . '",';
	$rows.= '"mar_01_6":"'  . $row["mar_01_6"] . '",';
	$rows.= '"mar_01_7":"'  . $row["mar_01_7"] . '",';
	
	$rows.= '"mar_02_1":"'  . $row["mar_02_1"] . '",';
	$rows.= '"mar_02_2":"'  . $row["mar_02_2"] . '",';
	$rows.= '"mar_02_3":"'  . $row["mar_02_3"] . '",';
	$rows.= '"mar_02_4":"'  . $row["mar_02_4"] . '",';
	$rows.= '"mar_02_5":"'  . $row["mar_02_5"] . '",';
	$rows.= '"mar_02_6":"'  . $row["mar_02_6"] . '",';
	$rows.= '"mar_02_7":"'  . $row["mar_02_7"] . '",';
	
	$rows.= '"mar_03_1":"'  . $row["mar_03_1"] . '",';
	$rows.= '"mar_03_2":"'  . $row["mar_03_2"] . '",';
	$rows.= '"mar_03_3":"'  . $row["mar_03_3"] . '",';
	$rows.= '"mar_03_4":"'  . $row["mar_03_4"] . '",';
	$rows.= '"mar_03_5":"'  . $row["mar_03_5"] . '",';
	$rows.= '"mar_03_6":"'  . $row["mar_03_6"] . '",';
	$rows.= '"mar_03_7":"'  . $row["mar_03_7"] . '",';
	
	$rows.= '"mar_04_1":"'  . $row["mar_04_1"] . '",';
	$rows.= '"mar_04_2":"'  . $row["mar_04_2"] . '",';
	$rows.= '"mar_04_3":"'  . $row["mar_04_3"] . '",';
	$rows.= '"mar_04_4":"'  . $row["mar_04_4"] . '",';
	$rows.= '"mar_04_5":"'  . $row["mar_04_5"] . '",';
	$rows.= '"mar_04_6":"'  . $row["mar_04_6"] . '",';
	$rows.= '"mar_04_7":"'  . $row["mar_04_7"] . '",';
	
	$rows.= '"mar_05_1":"'  . $row["mar_05_1"] . '",';
	$rows.= '"mar_05_2":"'  . $row["mar_05_2"] . '",';
	$rows.= '"mar_05_3":"'  . $row["mar_05_3"] . '",';
	
	//apr 18
	$rows.= '"apr_01_1":"'  . $row["apr_01_1"] . '",';
	$rows.= '"apr_01_2":"'  . $row["apr_01_2"] . '",';
	$rows.= '"apr_01_3":"'  . $row["apr_01_3"] . '",';
	$rows.= '"apr_01_4":"'  . $row["apr_01_4"] . '",';
	$rows.= '"apr_01_5":"'  . $row["apr_01_5"] . '",';
	$rows.= '"apr_01_6":"'  . $row["apr_01_6"] . '",';
	$rows.= '"apr_01_7":"'  . $row["apr_01_7"] . '",';
	
	$rows.= '"apr_02_1":"'  . $row["apr_02_1"] . '",';
	$rows.= '"apr_02_2":"'  . $row["apr_02_2"] . '",';
	$rows.= '"apr_02_3":"'  . $row["apr_02_3"] . '",';
	$rows.= '"apr_02_4":"'  . $row["apr_02_4"] . '",';
	$rows.= '"apr_02_5":"'  . $row["apr_02_5"] . '",';
	$rows.= '"apr_02_6":"'  . $row["apr_02_6"] . '",';
	$rows.= '"apr_02_7":"'  . $row["apr_02_7"] . '",';
	
	$rows.= '"apr_03_1":"'  . $row["apr_03_1"] . '",';
	$rows.= '"apr_03_2":"'  . $row["apr_03_2"] . '",';
	$rows.= '"apr_03_3":"'  . $row["apr_03_3"] . '",';
	$rows.= '"apr_03_4":"'  . $row["apr_03_4"] . '",';
	$rows.= '"apr_03_5":"'  . $row["apr_03_5"] . '",';
	$rows.= '"apr_03_6":"'  . $row["apr_03_6"] . '",';
	$rows.= '"apr_03_7":"'  . $row["apr_03_7"] . '",';
	
	$rows.= '"apr_04_1":"'  . $row["apr_04_1"] . '",';
	$rows.= '"apr_04_2":"'  . $row["apr_04_2"] . '",';
	$rows.= '"apr_04_3":"'  . $row["apr_04_3"] . '",';
	$rows.= '"apr_04_4":"'  . $row["apr_04_4"] . '",';
	$rows.= '"apr_04_5":"'  . $row["apr_04_5"] . '",';
	$rows.= '"apr_04_6":"'  . $row["apr_04_6"] . '",';
	$rows.= '"apr_04_7":"'  . $row["apr_04_7"] . '",';
	
	$rows.= '"apr_05_1":"'  . $row["apr_05_1"] . '",';
	$rows.= '"apr_05_2":"'  . $row["apr_05_2"] . '",';
	
	//may 18
	$rows.= '"may_01_1":"'  . $row["may_01_1"] . '",';
	$rows.= '"may_01_2":"'  . $row["may_01_2"] . '",';
	$rows.= '"may_01_3":"'  . $row["may_01_3"] . '",';
	$rows.= '"may_01_4":"'  . $row["may_01_4"] . '",';
	$rows.= '"may_01_5":"'  . $row["may_01_5"] . '",';
	$rows.= '"may_01_6":"'  . $row["may_01_6"] . '",';
	$rows.= '"may_01_7":"'  . $row["may_01_7"] . '",';
	
	$rows.= '"may_02_1":"'  . $row["may_02_1"] . '",';
	$rows.= '"may_02_2":"'  . $row["may_02_2"] . '",';
	$rows.= '"may_02_3":"'  . $row["may_02_3"] . '",';
	$rows.= '"may_02_4":"'  . $row["may_02_4"] . '",';
	$rows.= '"may_02_5":"'  . $row["may_02_5"] . '",';
	$rows.= '"may_02_6":"'  . $row["may_02_6"] . '",';
	$rows.= '"may_02_7":"'  . $row["may_02_7"] . '",';
	
	$rows.= '"may_03_1":"'  . $row["may_03_1"] . '",';
	$rows.= '"may_03_2":"'  . $row["may_03_2"] . '",';
	$rows.= '"may_03_3":"'  . $row["may_03_3"] . '",';
	$rows.= '"may_03_4":"'  . $row["may_03_4"] . '",';
	$rows.= '"may_03_5":"'  . $row["may_03_5"] . '",';
	$rows.= '"may_03_6":"'  . $row["may_03_6"] . '",';
	$rows.= '"may_03_7":"'  . $row["may_03_7"] . '",';
	
	$rows.= '"may_04_1":"'  . $row["may_04_1"] . '",';
	$rows.= '"may_04_2":"'  . $row["may_04_2"] . '",';
	$rows.= '"may_04_3":"'  . $row["may_04_3"] . '",';
	$rows.= '"may_04_4":"'  . $row["may_04_4"] . '",';
	$rows.= '"may_04_5":"'  . $row["may_04_5"] . '",';
	$rows.= '"may_04_6":"'  . $row["may_04_6"] . '",';
	$rows.= '"may_04_7":"'  . $row["may_04_7"] . '",';
	
	$rows.= '"may_05_1":"'  . $row["may_05_1"] . '",';
	$rows.= '"may_05_2":"'  . $row["may_05_2"] . '",';
	$rows.= '"may_05_3":"'  . $row["may_05_3"] . '",';
	
	//june 18
	$rows.= '"jun_01_1":"'  . $row["jun_01_1"] . '",';
	$rows.= '"jun_01_2":"'  . $row["jun_01_2"] . '",';
	$rows.= '"jun_01_3":"'  . $row["jun_01_3"] . '",';
	$rows.= '"jun_01_4":"'  . $row["jun_01_4"] . '",';
	$rows.= '"jun_01_5":"'  . $row["jun_01_5"] . '",';
	$rows.= '"jun_01_6":"'  . $row["jun_01_6"] . '",';
	$rows.= '"jun_01_7":"'  . $row["jun_01_7"] . '",';
	
	$rows.= '"jun_02_1":"'  . $row["jun_02_1"] . '",';
	$rows.= '"jun_02_2":"'  . $row["jun_02_2"] . '",';
	$rows.= '"jun_02_3":"'  . $row["jun_02_3"] . '",';
	$rows.= '"jun_02_4":"'  . $row["jun_02_4"] . '",';
	$rows.= '"jun_02_5":"'  . $row["jun_02_5"] . '",';
	$rows.= '"jun_02_6":"'  . $row["jun_02_6"] . '",';
	$rows.= '"jun_02_7":"'  . $row["jun_02_7"] . '",';
	
	$rows.= '"jun_03_1":"'  . $row["jun_03_1"] . '",';
	$rows.= '"jun_03_2":"'  . $row["jun_03_2"] . '",';
	$rows.= '"jun_03_3":"'  . $row["jun_03_3"] . '",';
	$rows.= '"jun_03_4":"'  . $row["jun_03_4"] . '",';
	$rows.= '"jun_03_5":"'  . $row["jun_03_5"] . '",';
	$rows.= '"jun_03_6":"'  . $row["jun_03_6"] . '",';
	$rows.= '"jun_03_7":"'  . $row["jun_03_7"] . '",';
	
	$rows.= '"jun_04_1":"'  . $row["jun_04_1"] . '",';
	$rows.= '"jun_04_2":"'  . $row["jun_04_2"] . '",';
	$rows.= '"jun_04_3":"'  . $row["jun_04_3"] . '",';
	$rows.= '"jun_04_4":"'  . $row["jun_04_4"] . '",';
	$rows.= '"jun_04_5":"'  . $row["jun_04_5"] . '",';
	$rows.= '"jun_04_6":"'  . $row["jun_04_6"] . '",';
	$rows.= '"jun_04_7":"'  . $row["jun_04_7"] . '",';
	
	$rows.= '"jun_05_1":"'  . $row["jun_05_1"] . '",';
	$rows.= '"jun_05_2":"'  . $row["jun_05_2"] . '",';
	
	//jul 18
	$rows.= '"jul_01_1":"'  . $row["jul_01_1"] . '",';
	$rows.= '"jul_01_2":"'  . $row["jul_01_2"] . '",';
	$rows.= '"jul_01_3":"'  . $row["jul_01_3"] . '",';
	$rows.= '"jul_01_4":"'  . $row["jul_01_4"] . '",';
	$rows.= '"jul_01_5":"'  . $row["jul_01_5"] . '",';
	$rows.= '"jul_01_6":"'  . $row["jul_01_6"] . '",';
	$rows.= '"jul_01_7":"'  . $row["jul_01_7"] . '",';
	
	$rows.= '"jul_02_1":"'  . $row["jul_02_1"] . '",';
	$rows.= '"jul_02_2":"'  . $row["jul_02_2"] . '",';
	$rows.= '"jul_02_3":"'  . $row["jul_02_3"] . '",';
	$rows.= '"jul_02_4":"'  . $row["jul_02_4"] . '",';
	$rows.= '"jul_02_5":"'  . $row["jul_02_5"] . '",';
	$rows.= '"jul_02_6":"'  . $row["jul_02_6"] . '",';
	$rows.= '"jul_02_7":"'  . $row["jul_02_7"] . '",';
	
	$rows.= '"jul_03_1":"'  . $row["jul_03_1"] . '",';
	$rows.= '"jul_03_2":"'  . $row["jul_03_2"] . '",';
	$rows.= '"jul_03_3":"'  . $row["jul_03_3"] . '",';
	$rows.= '"jul_03_4":"'  . $row["jul_03_4"] . '",';
	$rows.= '"jul_03_5":"'  . $row["jul_03_5"] . '",';
	$rows.= '"jul_03_6":"'  . $row["jul_03_6"] . '",';
	$rows.= '"jul_03_7":"'  . $row["jul_03_7"] . '",';
	
	$rows.= '"jul_04_1":"'  . $row["jul_04_1"] . '",';
	$rows.= '"jul_04_2":"'  . $row["jul_04_2"] . '",';
	$rows.= '"jul_04_3":"'  . $row["jul_04_3"] . '",';
	$rows.= '"jul_04_4":"'  . $row["jul_04_4"] . '",';
	$rows.= '"jul_04_5":"'  . $row["jul_04_5"] . '",';
	$rows.= '"jul_04_6":"'  . $row["jul_04_6"] . '",';
	$rows.= '"jul_04_7":"'  . $row["jul_04_7"] . '",';
	
	$rows.= '"jul_05_1":"'  . $row["jul_05_1"] . '",';
	$rows.= '"jul_05_2":"'  . $row["jul_05_2"] . '",';
	$rows.= '"jul_05_3":"'  . $row["jul_05_3"] . '",';
	
	//aug 18
	$rows.= '"aug_01_1":"'  . $row["aug_01_1"] . '",';
	$rows.= '"aug_01_2":"'  . $row["aug_01_2"] . '",';
	$rows.= '"aug_01_3":"'  . $row["aug_01_3"] . '",';
	$rows.= '"aug_01_4":"'  . $row["aug_01_4"] . '",';
	$rows.= '"aug_01_5":"'  . $row["aug_01_5"] . '",';
	$rows.= '"aug_01_6":"'  . $row["aug_01_6"] . '",';
	$rows.= '"aug_01_7":"'  . $row["aug_01_7"] . '",';
	
	$rows.= '"aug_02_1":"'  . $row["aug_02_1"] . '",';
	$rows.= '"aug_02_2":"'  . $row["aug_02_2"] . '",';
	$rows.= '"aug_02_3":"'  . $row["aug_02_3"] . '",';
	$rows.= '"aug_02_4":"'  . $row["aug_02_4"] . '",';
	$rows.= '"aug_02_5":"'  . $row["aug_02_5"] . '",';
	$rows.= '"aug_02_6":"'  . $row["aug_02_6"] . '",';
	$rows.= '"aug_02_7":"'  . $row["aug_02_7"] . '",';
	
	$rows.= '"aug_03_1":"'  . $row["aug_03_1"] . '",';
	$rows.= '"aug_03_2":"'  . $row["aug_03_2"] . '",';
	$rows.= '"aug_03_3":"'  . $row["aug_03_3"] . '",';
	$rows.= '"aug_03_4":"'  . $row["aug_03_4"] . '",';
	$rows.= '"aug_03_5":"'  . $row["aug_03_5"] . '",';
	$rows.= '"aug_03_6":"'  . $row["aug_03_6"] . '",';
	$rows.= '"aug_03_7":"'  . $row["aug_03_7"] . '",';
	
	$rows.= '"aug_04_1":"'  . $row["aug_04_1"] . '",';
	$rows.= '"aug_04_2":"'  . $row["aug_04_2"] . '",';
	$rows.= '"aug_04_3":"'  . $row["aug_04_3"] . '",';
	$rows.= '"aug_04_4":"'  . $row["aug_04_4"] . '",';
	$rows.= '"aug_04_5":"'  . $row["aug_04_5"] . '",';
	$rows.= '"aug_04_6":"'  . $row["aug_04_6"] . '",';
	$rows.= '"aug_04_7":"'  . $row["aug_04_7"] . '",';
	
	$rows.= '"aug_05_1":"'  . $row["aug_05_1"] . '",';
	$rows.= '"aug_05_2":"'  . $row["aug_05_2"] . '",';
	$rows.= '"aug_05_3":"'  . $row["aug_05_3"] . '",';
	
	//sep 18
	$rows.= '"sep_01_1":"'  . $row["sep_01_1"] . '",';
	$rows.= '"sep_01_2":"'  . $row["sep_01_2"] . '",';
	$rows.= '"sep_01_3":"'  . $row["sep_01_3"] . '",';
	$rows.= '"sep_01_4":"'  . $row["sep_01_4"] . '",';
	$rows.= '"sep_01_5":"'  . $row["sep_01_5"] . '",';
	$rows.= '"sep_01_6":"'  . $row["sep_01_6"] . '",';
	$rows.= '"sep_01_7":"'  . $row["sep_01_7"] . '",';
	
	$rows.= '"sep_02_1":"'  . $row["sep_02_1"] . '",';
	$rows.= '"sep_02_2":"'  . $row["sep_02_2"] . '",';
	$rows.= '"sep_02_3":"'  . $row["sep_02_3"] . '",';
	$rows.= '"sep_02_4":"'  . $row["sep_02_4"] . '",';
	$rows.= '"sep_02_5":"'  . $row["sep_02_5"] . '",';
	$rows.= '"sep_02_6":"'  . $row["sep_02_6"] . '",';
	$rows.= '"sep_02_7":"'  . $row["sep_02_7"] . '",';
	
	$rows.= '"sep_03_1":"'  . $row["sep_03_1"] . '",';
	$rows.= '"sep_03_2":"'  . $row["sep_03_2"] . '",';
	$rows.= '"sep_03_3":"'  . $row["sep_03_3"] . '",';
	$rows.= '"sep_03_4":"'  . $row["sep_03_4"] . '",';
	$rows.= '"sep_03_5":"'  . $row["sep_03_5"] . '",';
	$rows.= '"sep_03_6":"'  . $row["sep_03_6"] . '",';
	$rows.= '"sep_03_7":"'  . $row["sep_03_7"] . '",';
	
	$rows.= '"sep_04_1":"'  . $row["sep_04_1"] . '",';
	$rows.= '"sep_04_2":"'  . $row["sep_04_2"] . '",';
	$rows.= '"sep_04_3":"'  . $row["sep_04_3"] . '",';
	$rows.= '"sep_04_4":"'  . $row["sep_04_4"] . '",';
	$rows.= '"sep_04_5":"'  . $row["sep_04_5"] . '",';
	$rows.= '"sep_04_6":"'  . $row["sep_04_6"] . '",';
	$rows.= '"sep_04_7":"'  . $row["sep_04_7"] . '",';
	
	$rows.= '"sep_05_1":"'  . $row["sep_05_1"] . '",';
	$rows.= '"sep_05_2":"'  . $row["sep_05_2"] . '",';
	
	
	//oct 18
	$rows.= '"oct_01_1":"'  . $row["oct_01_1"] . '",';
	$rows.= '"oct_01_2":"'  . $row["oct_01_2"] . '",';
	$rows.= '"oct_01_3":"'  . $row["oct_01_3"] . '",';
	$rows.= '"oct_01_4":"'  . $row["oct_01_4"] . '",';
	$rows.= '"oct_01_5":"'  . $row["oct_01_5"] . '",';
	$rows.= '"oct_01_6":"'  . $row["oct_01_6"] . '",';
	$rows.= '"oct_01_7":"'  . $row["oct_01_7"] . '",';
	
	$rows.= '"oct_02_1":"'  . $row["oct_02_1"] . '",';
	$rows.= '"oct_02_2":"'  . $row["oct_02_2"] . '",';
	$rows.= '"oct_02_3":"'  . $row["oct_02_3"] . '",';
	$rows.= '"oct_02_4":"'  . $row["oct_02_4"] . '",';
	$rows.= '"oct_02_5":"'  . $row["oct_02_5"] . '",';
	$rows.= '"oct_02_6":"'  . $row["oct_02_6"] . '",';
	$rows.= '"oct_02_7":"'  . $row["oct_02_7"] . '",';
	
	$rows.= '"oct_03_1":"'  . $row["oct_03_1"] . '",';
	$rows.= '"oct_03_2":"'  . $row["oct_03_2"] . '",';
	$rows.= '"oct_03_3":"'  . $row["oct_03_3"] . '",';
	$rows.= '"oct_03_4":"'  . $row["oct_03_4"] . '",';
	$rows.= '"oct_03_5":"'  . $row["oct_03_5"] . '",';
	$rows.= '"oct_03_6":"'  . $row["oct_03_6"] . '",';
	$rows.= '"oct_03_7":"'  . $row["oct_03_7"] . '",';
	
	$rows.= '"oct_04_1":"'  . $row["oct_04_1"] . '",';
	$rows.= '"oct_04_2":"'  . $row["oct_04_2"] . '",';
	$rows.= '"oct_04_3":"'  . $row["oct_04_3"] . '",';
	$rows.= '"oct_04_4":"'  . $row["oct_04_4"] . '",';
	$rows.= '"oct_04_5":"'  . $row["oct_04_5"] . '",';
	$rows.= '"oct_04_6":"'  . $row["oct_04_6"] . '",';
	$rows.= '"oct_04_7":"'  . $row["oct_04_7"] . '",';
	
	$rows.= '"oct_05_1":"'  . $row["oct_05_1"] . '",';
	$rows.= '"oct_05_2":"'  . $row["oct_05_2"] . '",';
	$rows.= '"oct_05_3":"'  . $row["oct_05_3"] . '",';
	
	
	//nov 18
	$rows.= '"nov_01_1":"'  . $row["nov_01_1"] . '",';
	$rows.= '"nov_01_2":"'  . $row["nov_01_2"] . '",';
	$rows.= '"nov_01_3":"'  . $row["nov_01_3"] . '",';
	$rows.= '"nov_01_4":"'  . $row["nov_01_4"] . '",';
	$rows.= '"nov_01_5":"'  . $row["nov_01_5"] . '",';
	$rows.= '"nov_01_6":"'  . $row["nov_01_6"] . '",';
	$rows.= '"nov_01_7":"'  . $row["nov_01_7"] . '",';
	
	$rows.= '"nov_02_1":"'  . $row["nov_02_1"] . '",';
	$rows.= '"nov_02_2":"'  . $row["nov_02_2"] . '",';
	$rows.= '"nov_02_3":"'  . $row["nov_02_3"] . '",';
	$rows.= '"nov_02_4":"'  . $row["nov_02_4"] . '",';
	$rows.= '"nov_02_5":"'  . $row["nov_02_5"] . '",';
	$rows.= '"nov_02_6":"'  . $row["nov_02_6"] . '",';
	$rows.= '"nov_02_7":"'  . $row["nov_02_7"] . '",';
	
	$rows.= '"nov_03_1":"'  . $row["nov_03_1"] . '",';
	$rows.= '"nov_03_2":"'  . $row["nov_03_2"] . '",';
	$rows.= '"nov_03_3":"'  . $row["nov_03_3"] . '",';
	$rows.= '"nov_03_4":"'  . $row["nov_03_4"] . '",';
	$rows.= '"nov_03_5":"'  . $row["nov_03_5"] . '",';
	$rows.= '"nov_03_6":"'  . $row["nov_03_6"] . '",';
	$rows.= '"nov_03_7":"'  . $row["nov_03_7"] . '",';
	
	$rows.= '"nov_04_1":"'  . $row["nov_04_1"] . '",';
	$rows.= '"nov_04_2":"'  . $row["nov_04_2"] . '",';
	$rows.= '"nov_04_3":"'  . $row["nov_04_3"] . '",';
	$rows.= '"nov_04_4":"'  . $row["nov_04_4"] . '",';
	$rows.= '"nov_04_5":"'  . $row["nov_04_5"] . '",';
	$rows.= '"nov_04_6":"'  . $row["nov_04_6"] . '",';
	$rows.= '"nov_04_7":"'  . $row["nov_04_7"] . '",';
	
	$rows.= '"nov_05_1":"'  . $row["nov_05_1"] . '",';
	$rows.= '"nov_05_2":"'  . $row["nov_05_2"] . '",';
		
	//dec 18
	$rows.= '"dec_01_1":"'  . $row["dec_01_1"] . '",';
	$rows.= '"dec_01_2":"'  . $row["dec_01_2"] . '",';
	$rows.= '"dec_01_3":"'  . $row["dec_01_3"] . '",';
	$rows.= '"dec_01_4":"'  . $row["dec_01_4"] . '",';
	$rows.= '"dec_01_5":"'  . $row["dec_01_5"] . '",';
	$rows.= '"dec_01_6":"'  . $row["dec_01_6"] . '",';
	$rows.= '"dec_01_7":"'  . $row["dec_01_7"] . '",';
	
	$rows.= '"dec_02_1":"'  . $row["dec_02_1"] . '",';
	$rows.= '"dec_02_2":"'  . $row["dec_02_2"] . '",';
	$rows.= '"dec_02_3":"'  . $row["dec_02_3"] . '",';
	$rows.= '"dec_02_4":"'  . $row["dec_02_4"] . '",';
	$rows.= '"dec_02_5":"'  . $row["dec_02_5"] . '",';
	$rows.= '"dec_02_6":"'  . $row["dec_02_6"] . '",';
	$rows.= '"dec_02_7":"'  . $row["dec_02_7"] . '",';
	
	$rows.= '"dec_03_1":"'  . $row["dec_03_1"] . '",';
	$rows.= '"dec_03_2":"'  . $row["dec_03_2"] . '",';
	$rows.= '"dec_03_3":"'  . $row["dec_03_3"] . '",';
	$rows.= '"dec_03_4":"'  . $row["dec_03_4"] . '",';
	$rows.= '"dec_03_5":"'  . $row["dec_03_5"] . '",';
	$rows.= '"dec_03_6":"'  . $row["dec_03_6"] . '",';
	$rows.= '"dec_03_7":"'  . $row["dec_03_7"] . '",';
	
	$rows.= '"dec_04_1":"'  . $row["dec_04_1"] . '",';
	$rows.= '"dec_04_2":"'  . $row["dec_04_2"] . '",';
	$rows.= '"dec_04_3":"'  . $row["dec_04_3"] . '",';
	$rows.= '"dec_04_4":"'  . $row["dec_04_4"] . '",';
	$rows.= '"dec_04_5":"'  . $row["dec_04_5"] . '",';
	$rows.= '"dec_04_6":"'  . $row["dec_04_6"] . '",';
	$rows.= '"dec_04_7":"'  . $row["dec_04_7"] . '",';
	
	$rows.= '"dec_05_1":"'  . $row["dec_05_1"] . '",';
	$rows.= '"dec_05_2":"'  . $row["dec_05_2"] . '",';
	$rows.= '"dec_05_3":"'  . $row["dec_05_3"] . '"}';
	
}

$rows ='{"records":['.$rows.']}';	

echo ($rows);

?>