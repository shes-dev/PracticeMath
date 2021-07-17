<?php

//JANUARY
$mon[0] = 'jan';
$mon[1] = 'feb';
$mon[2] = 'mar';
$mon[3] = 'apr';
$mon[4] = 'may';
$mon[5] = 'jun';
$mon[6] = 'jul';
$mon[7] = 'aug';
$mon[8] = 'sep';
$mon[9] = 'oct';
$mon[10] = 'nov';
$mon[11] = 'dec';


//COLUMNS
echo '<h1>COLUMNS:</h1>';

for($i=0;$i<count($mon);$i++)
{
	for($s=1;$s<6;$s++)
	{
		for($m=1;$m<8;$m++)
		{
			echo $mon[$i].'_0'.$s.'_'.$m;
			
			if($s == 5 && $m == 3)
			{break;}
			
			echo ', ';
		}
	}
	
	//echo '<br><br>';
}

echo '<br><br>';

//VALUES
echo '<h1>VALUES:</h1>';

for($i=0;$i<count($mon);$i++)
{
	for($s=1;$s<6;$s++)
	{
		for($m=1;$m<8;$m++)
		{
			echo '\'$'.$mon[$i].'_0'.$s.'_'.$m.'\'';
			
			if($s == 5 && $m == 3)
			{break;}
			
			echo ', ';
		}
	}
	
	//echo '<br><br>';
}

/* SQL

ALTER TABLE `Ie` ADD `jan_01_1` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_01_2` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_01_3` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_01_4` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_01_5` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_01_6` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_01_7` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_02_1` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_02_2` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_02_3` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_02_4` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_02_5` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_02_6` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_02_7` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_03_1` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_03_2` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_03_3` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_03_4` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_03_5` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_03_6` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_03_7` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_04_1` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_04_2` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_04_3` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_04_4` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_04_5` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_04_6` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_04_7` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_05_1` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_05_2` INT(4) NOT NULL;
ALTER TABLE `Ie` ADD `jan_05_3` INT(4) NOT NULL;


*/
?>