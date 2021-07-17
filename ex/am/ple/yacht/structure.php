<?php
session_start();

//ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	
	//include 'loginAlert.php';
	
class getDrillsDataForHomePageMath
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
		
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
					url: \'check_1.php\',
					type: \'POST\',
					//data: {\'Y_n\': data_1_js,
					//		\'Number_0\': num}
					
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
						
						//Not show if drills number is 0
						if(result_1[d1][\'drills_number\'] == 0)
						{
							continue;
						}
						
						//cases 
						t = t + "<div id=\'main_wrapper_"+i+"\' class=\'corner-ribbon-main-wrapper score-board\' style=\'float:right;text-align:center;border:0.5px white solid;margin:4px;padding:4px;background-color:green;height:80px;color:white;\'><div id=\'nam_"+i+"\' style=\'margin:4px;padding:4px;\'>Hi "+i+"</div>";
						if (result_1[d1][\'total\'] == \'היום\')
						{
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'אתמול\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div></div>";
							/* when changing:
								*replace "<div class=\'ribbon\'>היום</div>" with "<div class=\'ribbon_1\'>אתמול</div>".
							*/
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'יומיים ברצף\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_3\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_4\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_5\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_6\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_7\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_8\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div></div>";
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_9\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_10\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_11\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_12\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_13\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_14\')
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else
						{
							//t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-car\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						
						
						//putting html in div
						$("#real_time").html(t);
						
						//updating veteran number
						if (result_1[d1][\'veteran\'] == 3)
						{
							var div_name = "main_wrapper_"+i;
							$("#"+div_name).css("background-color","rgb(74, 114, 194)");
						}
						
						if (result_1[d1][\'veteran\'] == 7)
						{
							var div_name = "main_wrapper_"+i;
							$("#"+div_name).css("background-color","orange");
						}
						
						if (result_1[d1][\'veteran\'] == 14)
						{
							var div_name = "main_wrapper_"+i;
							$("#"+div_name).css("background-color","magenta");
						}
						
						//debugging
						//console.log(t);
						
						var t_nam = "#nam_"+i;
						var t_num = "#num_"+i;
						
						$(t_nam).html(Object.keys(result_1)[i]+"<hr>");
						
						d_2 = d_2+Number(result_1[d1][\'drills_number\']);
						$(t_num).html(result_1[d1][\'drills_number\']);
						
						$("#M_num").html(\' 2,000\'+\'/\'+\'<i class="fa fa-check-circle-o" style="color:green;"></i>\'+d_2);
						
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
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class getDrillsDataForHomePage
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct($function_name)
	{
		$this->content = '
		
		$("#div_header_'.$function_name.'").click(function()
		{	
			if('.$function_name.'_once==0)
			{
						
				'.$function_name.'_once=1;
												
				//ajax request
				$.ajax
				({
					url: \'check_1_'.$function_name.'.php\',
					type: \'POST\',
					//data: {\'Y_n\': data_1_js,
					//		\'Number_0\': num}
					
				}).done(function(result)
				{
					//$("#container").html(result);
					
					var d_2_'.$function_name.'=0;
					var result_1 = JSON.parse(result);
					
					// debugging
					console.log("RESULT_'.$function_name.':",result_1);
					
					for (i=0;i<Object.keys(result_1).length;i++)
					{
						//vars
						var t = $("#real_time_'.$function_name.'").html();
						var d1 = Object.keys(result_1)[i];
						
						//Not show if drills number is 0
						if(result_1[d1][\'drills_number\'] == 0)
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
						t = t + "<div id=\'main_wrapper_'.$function_name.'_"+i+"\' class=\'corner-ribbon-main-wrapper score-board\' style=\'float:right;text-align:center;border:0.5px white solid;margin:4px;padding:4px;background-color:green;height:80px;color:white;\'><div id=\'nam_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;\'>Hi "+i+"</div>";
						if (result_1[d1][\'total\'] == \'היום\')
						{
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon\'>היום</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'אתמול\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div></div>";
							/* when changing:
								*replace "<div class=\'ribbon\'>היום</div>" with "<div class=\'ribbon_1\'>אתמול</div>".
							*/
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
								}
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_1\'>אתמול</div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'יומיים ברצף\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x2<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_3\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
								}
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x3<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_4\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x4<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_5\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}	
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
								}
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x5<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_6\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								if (result_1[d1][\'crown\'] == 1)//has a crown
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
								}	
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x6<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_7\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x7<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_8\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div></div>";
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x8<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_9\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x9<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_10\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x10<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_11\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x11<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_12\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x12<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_13\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x13<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else if(result_1[d1][\'total\'] == \'strike_14\')
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div></div>";
														
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_3\'>x14<i class=\'em em-trophy\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						else
						{
							//t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-car\'></i></div></div></div>";
							
							if (result_1[d1][\'drills_number\'] < 10)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-desert\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 50)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-snowboarder\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 100)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-rocket\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-racing_car\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 300)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-arrow_upper_right\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-bow_and_arrow\' style=\'transform:rotate(45deg);\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-factory\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-fire\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-first_place_medal\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1200)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-ferris_wheel\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1400)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-dizzy\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1600)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-checkered_flag\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 1800)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-camping\'></i></div></div></div>";
							}
							else if (result_1[d1][\'drills_number\'] < 2000)
							{
								t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-crown\'></i></div></div></div>";
							}
							else 
							{
								if(result_1[d1][\'crown\'] == 1)// has a crown
								{	
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div><div class=\'ribbon_right_top\'><i class=\'em em-crown\'></i></div></div>";
								}
								else
								{
									t = t + "<div id=\'num_'.$function_name.'_"+i+"\' style=\'margin:4px;padding:4px;color:white;\'>Hi "+i+"</div><div id=\'wrapper_"+i+"\' class=\'ribbon-wrapper\'><div class=\'ribbon_2\'><i class=\'em em-man-shrugging\'></i></div></div><div class=\'ribbon-wrapper_bottom\'><div class=\'ribbon_right_bottom\'><i class=\'em em-beach_with_umbrella\'></i></div></div></div>";
								}
							}
						}
						
						//putting html in div
						$("#real_time_'.$function_name.'").html(t);
											
						//updating veteran number
						if (result_1[d1][\'veteran\'] == 3)
						{
							var div_name = "main_wrapper_'.$function_name.'_"+i;
							$("#"+div_name).css("background-color","rgb(74, 114, 194)");
						}
						
						
						if (result_1[d1][\'veteran\'] == 7)
						{
							var div_name = "main_wrapper_'.$function_name.'_"+i;
							$("#"+div_name).css("background-color","orange");
						}
						
						if (result_1[d1][\'veteran\'] == 14)
						{
							var div_name = "main_wrapper_'.$function_name.'_"+i;
							$("#"+div_name).css("background-color","magenta");
						}
												
						//debugging
						//console.log(t);
						
						var t_nam = "#nam_'.$function_name.'_"+i;
						var t_num = "#num_'.$function_name.'_"+i;
						
						$(t_nam).html(Object.keys(result_1)[i]+"<hr>");
						
						d_2_'.$function_name.' = d_2_'.$function_name.'+Number(result_1[d1][\'drills_number\']);
						$(t_num).html(result_1[d1][\'drills_number\']);
						
						$("#'.$function_name.'_num").html(\' 1,000\'+\'/\'+\'<i class="fa fa-check-circle-o" style="color:green;"></i>\'+d_2_'.$function_name.');
						
					}
				});
			}
		});
		
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class getResponseAndSetScopeVars
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
		
		//converting to numbers
			
			//Jan 18
			
			var jan_01_1 = response.data.records[0]["jan_01_1"];
			var jan_01_2 = response.data.records[0]["jan_01_2"];
			var jan_01_3 = response.data.records[0]["jan_01_3"];
			var jan_01_4 = response.data.records[0]["jan_01_4"];
			var jan_01_5 = response.data.records[0]["jan_01_5"];
			var jan_01_6 = response.data.records[0]["jan_01_6"];
			var jan_01_7 = response.data.records[0]["jan_01_7"];
			
			var jan_02_1 = response.data.records[0]["jan_02_1"];
			var jan_02_2 = response.data.records[0]["jan_02_2"];
			var jan_02_3 = response.data.records[0]["jan_02_3"];
			var jan_02_4 = response.data.records[0]["jan_02_4"];
			var jan_02_5 = response.data.records[0]["jan_02_5"];
			var jan_02_6 = response.data.records[0]["jan_02_6"];
			var jan_02_7 = response.data.records[0]["jan_02_7"];
			
			var jan_03_1 = response.data.records[0]["jan_03_1"];
			var jan_03_2 = response.data.records[0]["jan_03_2"];
			var jan_03_3 = response.data.records[0]["jan_03_3"];
			var jan_03_4 = response.data.records[0]["jan_03_4"];
			var jan_03_5 = response.data.records[0]["jan_03_5"];
			var jan_03_6 = response.data.records[0]["jan_03_6"];
			var jan_03_7 = response.data.records[0]["jan_03_7"];
			
			var jan_04_1 = response.data.records[0]["jan_04_1"];
			var jan_04_2 = response.data.records[0]["jan_04_2"];
			var jan_04_3 = response.data.records[0]["jan_04_3"];
			var jan_04_4 = response.data.records[0]["jan_04_4"];
			var jan_04_5 = response.data.records[0]["jan_04_5"];
			var jan_04_6 = response.data.records[0]["jan_04_6"];
			var jan_04_7 = response.data.records[0]["jan_04_7"];
			
			var jan_05_1 = response.data.records[0]["jan_05_1"];
			var jan_05_2 = response.data.records[0]["jan_05_2"];
			var jan_05_3 = response.data.records[0]["jan_05_3"];
			
			//Feb
			
			var feb_01_1 = response.data.records[0]["feb_01_1"];
			var feb_01_2 = response.data.records[0]["feb_01_2"];
			var feb_01_3 = response.data.records[0]["feb_01_3"];
			var feb_01_4 = response.data.records[0]["feb_01_4"];
			var feb_01_5 = response.data.records[0]["feb_01_5"];
			var feb_01_6 = response.data.records[0]["feb_01_6"];
			var feb_01_7 = response.data.records[0]["feb_01_7"];
			
			var feb_02_1 = response.data.records[0]["feb_02_1"];
			var feb_02_2 = response.data.records[0]["feb_02_2"];
			var feb_02_3 = response.data.records[0]["feb_02_3"];
			var feb_02_4 = response.data.records[0]["feb_02_4"];
			var feb_02_5 = response.data.records[0]["feb_02_5"];
			var feb_02_6 = response.data.records[0]["feb_02_6"];
			var feb_02_7 = response.data.records[0]["feb_02_7"];
			
			var feb_03_1 = response.data.records[0]["feb_03_1"];
			var feb_03_2 = response.data.records[0]["feb_03_2"];
			var feb_03_3 = response.data.records[0]["feb_03_3"];
			var feb_03_4 = response.data.records[0]["feb_03_4"];
			var feb_03_5 = response.data.records[0]["feb_03_5"];
			var feb_03_6 = response.data.records[0]["feb_03_6"];
			var feb_03_7 = response.data.records[0]["feb_03_7"];
			
			var feb_04_1 = response.data.records[0]["feb_04_1"];
			var feb_04_2 = response.data.records[0]["feb_04_2"];
			var feb_04_3 = response.data.records[0]["feb_04_3"];
			var feb_04_4 = response.data.records[0]["feb_04_4"];
			var feb_04_5 = response.data.records[0]["feb_04_5"];
			var feb_04_6 = response.data.records[0]["feb_04_6"];
			var feb_04_7 = response.data.records[0]["feb_04_7"];
			
			//mar
			
			var mar_01_1 = response.data.records[0]["mar_01_1"];
			var mar_01_2 = response.data.records[0]["mar_01_2"];
			var mar_01_3 = response.data.records[0]["mar_01_3"];
			var mar_01_4 = response.data.records[0]["mar_01_4"];
			var mar_01_5 = response.data.records[0]["mar_01_5"];
			var mar_01_6 = response.data.records[0]["mar_01_6"];
			var mar_01_7 = response.data.records[0]["mar_01_7"];
			
			var mar_02_1 = response.data.records[0]["mar_02_1"];
			var mar_02_2 = response.data.records[0]["mar_02_2"];
			var mar_02_3 = response.data.records[0]["mar_02_3"];
			var mar_02_4 = response.data.records[0]["mar_02_4"];
			var mar_02_5 = response.data.records[0]["mar_02_5"];
			var mar_02_6 = response.data.records[0]["mar_02_6"];
			var mar_02_7 = response.data.records[0]["mar_02_7"];
			
			var mar_03_1 = response.data.records[0]["mar_03_1"];
			var mar_03_2 = response.data.records[0]["mar_03_2"];
			var mar_03_3 = response.data.records[0]["mar_03_3"];
			var mar_03_4 = response.data.records[0]["mar_03_4"];
			var mar_03_5 = response.data.records[0]["mar_03_5"];
			var mar_03_6 = response.data.records[0]["mar_03_6"];
			var mar_03_7 = response.data.records[0]["mar_03_7"];
			
			var mar_04_1 = response.data.records[0]["mar_04_1"];
			var mar_04_2 = response.data.records[0]["mar_04_2"];
			var mar_04_3 = response.data.records[0]["mar_04_3"];
			var mar_04_4 = response.data.records[0]["mar_04_4"];
			var mar_04_5 = response.data.records[0]["mar_04_5"];
			var mar_04_6 = response.data.records[0]["mar_04_6"];
			var mar_04_7 = response.data.records[0]["mar_04_7"];
			
			var mar_05_1 = response.data.records[0]["mar_05_1"];
			var mar_05_2 = response.data.records[0]["mar_05_2"];
			var mar_05_3 = response.data.records[0]["mar_05_3"];
						
			//apr
			
			var apr_01_1 = response.data.records[0]["apr_01_1"];
			var apr_01_2 = response.data.records[0]["apr_01_2"];
			var apr_01_3 = response.data.records[0]["apr_01_3"];
			var apr_01_4 = response.data.records[0]["apr_01_4"];
			var apr_01_5 = response.data.records[0]["apr_01_5"];
			var apr_01_6 = response.data.records[0]["apr_01_6"];
			var apr_01_7 = response.data.records[0]["apr_01_7"];
			
			var apr_02_1 = response.data.records[0]["apr_02_1"];
			var apr_02_2 = response.data.records[0]["apr_02_2"];
			var apr_02_3 = response.data.records[0]["apr_02_3"];
			var apr_02_4 = response.data.records[0]["apr_02_4"];
			var apr_02_5 = response.data.records[0]["apr_02_5"];
			var apr_02_6 = response.data.records[0]["apr_02_6"];
			var apr_02_7 = response.data.records[0]["apr_02_7"];
			
			var apr_03_1 = response.data.records[0]["apr_03_1"];
			var apr_03_2 = response.data.records[0]["apr_03_2"];
			var apr_03_3 = response.data.records[0]["apr_03_3"];
			var apr_03_4 = response.data.records[0]["apr_03_4"];
			var apr_03_5 = response.data.records[0]["apr_03_5"];
			var apr_03_6 = response.data.records[0]["apr_03_6"];
			var apr_03_7 = response.data.records[0]["apr_03_7"];
			
			var apr_04_1 = response.data.records[0]["apr_04_1"];
			var apr_04_2 = response.data.records[0]["apr_04_2"];
			var apr_04_3 = response.data.records[0]["apr_04_3"];
			var apr_04_4 = response.data.records[0]["apr_04_4"];
			var apr_04_5 = response.data.records[0]["apr_04_5"];
			var apr_04_6 = response.data.records[0]["apr_04_6"];
			var apr_04_7 = response.data.records[0]["apr_04_7"];
			
			var apr_05_1 = response.data.records[0]["apr_05_1"];
			var apr_05_2 = response.data.records[0]["apr_05_2"];
						
			//may
			
			var may_01_1 = response.data.records[0]["may_01_1"];
			var may_01_2 = response.data.records[0]["may_01_2"];
			var may_01_3 = response.data.records[0]["may_01_3"];
			var may_01_4 = response.data.records[0]["may_01_4"];
			var may_01_5 = response.data.records[0]["may_01_5"];
			var may_01_6 = response.data.records[0]["may_01_6"];
			var may_01_7 = response.data.records[0]["may_01_7"];
			
			var may_02_1 = response.data.records[0]["may_02_1"];
			var may_02_2 = response.data.records[0]["may_02_2"];
			var may_02_3 = response.data.records[0]["may_02_3"];
			var may_02_4 = response.data.records[0]["may_02_4"];
			var may_02_5 = response.data.records[0]["may_02_5"];
			var may_02_6 = response.data.records[0]["may_02_6"];
			var may_02_7 = response.data.records[0]["may_02_7"];
			
			var may_03_1 = response.data.records[0]["may_03_1"];
			var may_03_2 = response.data.records[0]["may_03_2"];
			var may_03_3 = response.data.records[0]["may_03_3"];
			var may_03_4 = response.data.records[0]["may_03_4"];
			var may_03_5 = response.data.records[0]["may_03_5"];
			var may_03_6 = response.data.records[0]["may_03_6"];
			var may_03_7 = response.data.records[0]["may_03_7"];
			
			var may_04_1 = response.data.records[0]["may_04_1"];
			var may_04_2 = response.data.records[0]["may_04_2"];
			var may_04_3 = response.data.records[0]["may_04_3"];
			var may_04_4 = response.data.records[0]["may_04_4"];
			var may_04_5 = response.data.records[0]["may_04_5"];
			var may_04_6 = response.data.records[0]["may_04_6"];
			var may_04_7 = response.data.records[0]["may_04_7"];
			
			var may_05_1 = response.data.records[0]["may_05_1"];
			var may_05_2 = response.data.records[0]["may_05_2"];
			var may_05_3 = response.data.records[0]["may_05_3"];
			
			//jun
			
			var jun_01_1 = response.data.records[0]["jun_01_1"];
			var jun_01_2 = response.data.records[0]["jun_01_2"];
			var jun_01_3 = response.data.records[0]["jun_01_3"];
			var jun_01_4 = response.data.records[0]["jun_01_4"];
			var jun_01_5 = response.data.records[0]["jun_01_5"];
			var jun_01_6 = response.data.records[0]["jun_01_6"];
			var jun_01_7 = response.data.records[0]["jun_01_7"];
			
			var jun_02_1 = response.data.records[0]["jun_02_1"];
			var jun_02_2 = response.data.records[0]["jun_02_2"];
			var jun_02_3 = response.data.records[0]["jun_02_3"];
			var jun_02_4 = response.data.records[0]["jun_02_4"];
			var jun_02_5 = response.data.records[0]["jun_02_5"];
			var jun_02_6 = response.data.records[0]["jun_02_6"];
			var jun_02_7 = response.data.records[0]["jun_02_7"];
			
			var jun_03_1 = response.data.records[0]["jun_03_1"];
			var jun_03_2 = response.data.records[0]["jun_03_2"];
			var jun_03_3 = response.data.records[0]["jun_03_3"];
			var jun_03_4 = response.data.records[0]["jun_03_4"];
			var jun_03_5 = response.data.records[0]["jun_03_5"];
			var jun_03_6 = response.data.records[0]["jun_03_6"];
			var jun_03_7 = response.data.records[0]["jun_03_7"];
			
			var jun_04_1 = response.data.records[0]["jun_04_1"];
			var jun_04_2 = response.data.records[0]["jun_04_2"];
			var jun_04_3 = response.data.records[0]["jun_04_3"];
			var jun_04_4 = response.data.records[0]["jun_04_4"];
			var jun_04_5 = response.data.records[0]["jun_04_5"];
			var jun_04_6 = response.data.records[0]["jun_04_6"];
			var jun_04_7 = response.data.records[0]["jun_04_7"];
			
			var jun_05_1 = response.data.records[0]["jun_05_1"];
			var jun_05_2 = response.data.records[0]["jun_05_2"];
			
			//july
			
			var jul_01_1 = response.data.records[0]["jul_01_1"];
			var jul_01_2 = response.data.records[0]["jul_01_2"];
			var jul_01_3 = response.data.records[0]["jul_01_3"];
			var jul_01_4 = response.data.records[0]["jul_01_4"];
			var jul_01_5 = response.data.records[0]["jul_01_5"];
			var jul_01_6 = response.data.records[0]["jul_01_6"];
			var jul_01_7 = response.data.records[0]["jul_01_7"];
			
			var jul_02_1 = response.data.records[0]["jul_02_1"];
			var jul_02_2 = response.data.records[0]["jul_02_2"];
			var jul_02_3 = response.data.records[0]["jul_02_3"];
			var jul_02_4 = response.data.records[0]["jul_02_4"];
			var jul_02_5 = response.data.records[0]["jul_02_5"];
			var jul_02_6 = response.data.records[0]["jul_02_6"];
			var jul_02_7 = response.data.records[0]["jul_02_7"];
			
			var jul_03_1 = response.data.records[0]["jul_03_1"];
			var jul_03_2 = response.data.records[0]["jul_03_2"];
			var jul_03_3 = response.data.records[0]["jul_03_3"];
			var jul_03_4 = response.data.records[0]["jul_03_4"];
			var jul_03_5 = response.data.records[0]["jul_03_5"];
			var jul_03_6 = response.data.records[0]["jul_03_6"];
			var jul_03_7 = response.data.records[0]["jul_03_7"];
			
			var jul_04_1 = response.data.records[0]["jul_04_1"];
			var jul_04_2 = response.data.records[0]["jul_04_2"];
			var jul_04_3 = response.data.records[0]["jul_04_3"];
			var jul_04_4 = response.data.records[0]["jul_04_4"];
			var jul_04_5 = response.data.records[0]["jul_04_5"];
			var jul_04_6 = response.data.records[0]["jul_04_6"];
			var jul_04_7 = response.data.records[0]["jul_04_7"];
			
			var jul_05_1 = response.data.records[0]["jul_05_1"];
			var jul_05_2 = response.data.records[0]["jul_05_2"];
			var jul_05_3 = response.data.records[0]["jul_05_3"];
			
			//august
			
			var aug_01_1 = response.data.records[0]["aug_01_1"];
			var aug_01_2 = response.data.records[0]["aug_01_2"];
			var aug_01_3 = response.data.records[0]["aug_01_3"];
			var aug_01_4 = response.data.records[0]["aug_01_4"];
			var aug_01_5 = response.data.records[0]["aug_01_5"];
			var aug_01_6 = response.data.records[0]["aug_01_6"];
			var aug_01_7 = response.data.records[0]["aug_01_7"];
			
			var aug_02_1 = response.data.records[0]["aug_02_1"];
			var aug_02_2 = response.data.records[0]["aug_02_2"];
			var aug_02_3 = response.data.records[0]["aug_02_3"];
			var aug_02_4 = response.data.records[0]["aug_02_4"];
			var aug_02_5 = response.data.records[0]["aug_02_5"];
			var aug_02_6 = response.data.records[0]["aug_02_6"];
			var aug_02_7 = response.data.records[0]["aug_02_7"];
			
			var aug_03_1 = response.data.records[0]["aug_03_1"];
			var aug_03_2 = response.data.records[0]["aug_03_2"];
			var aug_03_3 = response.data.records[0]["aug_03_3"];
			var aug_03_4 = response.data.records[0]["aug_03_4"];
			var aug_03_5 = response.data.records[0]["aug_03_5"];
			var aug_03_6 = response.data.records[0]["aug_03_6"];
			var aug_03_7 = response.data.records[0]["aug_03_7"];
			
			var aug_04_1 = response.data.records[0]["aug_04_1"];
			var aug_04_2 = response.data.records[0]["aug_04_2"];
			var aug_04_3 = response.data.records[0]["aug_04_3"];
			var aug_04_4 = response.data.records[0]["aug_04_4"];
			var aug_04_5 = response.data.records[0]["aug_04_5"];
			var aug_04_6 = response.data.records[0]["aug_04_6"];
			var aug_04_7 = response.data.records[0]["aug_04_7"];
			
			var aug_05_1 = response.data.records[0]["aug_05_1"];
			var aug_05_2 = response.data.records[0]["aug_05_2"];
			var aug_05_3 = response.data.records[0]["aug_05_3"];
			
			//sep
			
			var sep_01_1 = response.data.records[0]["sep_01_1"];
			var sep_01_2 = response.data.records[0]["sep_01_2"];
			var sep_01_3 = response.data.records[0]["sep_01_3"];
			var sep_01_4 = response.data.records[0]["sep_01_4"];
			var sep_01_5 = response.data.records[0]["sep_01_5"];
			var sep_01_6 = response.data.records[0]["sep_01_6"];
			var sep_01_7 = response.data.records[0]["sep_01_7"];
			
			var sep_02_1 = response.data.records[0]["sep_02_1"];
			var sep_02_2 = response.data.records[0]["sep_02_2"];
			var sep_02_3 = response.data.records[0]["sep_02_3"];
			var sep_02_4 = response.data.records[0]["sep_02_4"];
			var sep_02_5 = response.data.records[0]["sep_02_5"];
			var sep_02_6 = response.data.records[0]["sep_02_6"];
			var sep_02_7 = response.data.records[0]["sep_02_7"];
			
			var sep_03_1 = response.data.records[0]["sep_03_1"];
			var sep_03_2 = response.data.records[0]["sep_03_2"];
			var sep_03_3 = response.data.records[0]["sep_03_3"];
			var sep_03_4 = response.data.records[0]["sep_03_4"];
			var sep_03_5 = response.data.records[0]["sep_03_5"];
			var sep_03_6 = response.data.records[0]["sep_03_6"];
			var sep_03_7 = response.data.records[0]["sep_03_7"];
			
			var sep_04_1 = response.data.records[0]["sep_04_1"];
			var sep_04_2 = response.data.records[0]["sep_04_2"];
			var sep_04_3 = response.data.records[0]["sep_04_3"];
			var sep_04_4 = response.data.records[0]["sep_04_4"];
			var sep_04_5 = response.data.records[0]["sep_04_5"];
			var sep_04_6 = response.data.records[0]["sep_04_6"];
			var sep_04_7 = response.data.records[0]["sep_04_7"];
			
			var sep_05_1 = response.data.records[0]["sep_05_1"];
			var sep_05_2 = response.data.records[0]["sep_05_2"];
			
			//oct
			
			var oct_01_1 = response.data.records[0]["oct_01_1"];
			var oct_01_2 = response.data.records[0]["oct_01_2"];
			var oct_01_3 = response.data.records[0]["oct_01_3"];
			var oct_01_4 = response.data.records[0]["oct_01_4"];
			var oct_01_5 = response.data.records[0]["oct_01_5"];
			var oct_01_6 = response.data.records[0]["oct_01_6"];
			var oct_01_7 = response.data.records[0]["oct_01_7"];
			
			var oct_02_1 = response.data.records[0]["oct_02_1"];
			var oct_02_2 = response.data.records[0]["oct_02_2"];
			var oct_02_3 = response.data.records[0]["oct_02_3"];
			var oct_02_4 = response.data.records[0]["oct_02_4"];
			var oct_02_5 = response.data.records[0]["oct_02_5"];
			var oct_02_6 = response.data.records[0]["oct_02_6"];
			var oct_02_7 = response.data.records[0]["oct_02_7"];
			
			var oct_03_1 = response.data.records[0]["oct_03_1"];
			var oct_03_2 = response.data.records[0]["oct_03_2"];
			var oct_03_3 = response.data.records[0]["oct_03_3"];
			var oct_03_4 = response.data.records[0]["oct_03_4"];
			var oct_03_5 = response.data.records[0]["oct_03_5"];
			var oct_03_6 = response.data.records[0]["oct_03_6"];
			var oct_03_7 = response.data.records[0]["oct_03_7"];
			
			var oct_04_1 = response.data.records[0]["oct_04_1"];
			var oct_04_2 = response.data.records[0]["oct_04_2"];
			var oct_04_3 = response.data.records[0]["oct_04_3"];
			var oct_04_4 = response.data.records[0]["oct_04_4"];
			var oct_04_5 = response.data.records[0]["oct_04_5"];
			var oct_04_6 = response.data.records[0]["oct_04_6"];
			var oct_04_7 = response.data.records[0]["oct_04_7"];
			
			var oct_05_1 = response.data.records[0]["oct_05_1"];
			var oct_05_2 = response.data.records[0]["oct_05_2"];
			var oct_05_3 = response.data.records[0]["oct_05_3"];
			
			//nov
			
			var nov_01_1 = response.data.records[0]["nov_01_1"];
			var nov_01_2 = response.data.records[0]["nov_01_2"];
			var nov_01_3 = response.data.records[0]["nov_01_3"];
			var nov_01_4 = response.data.records[0]["nov_01_4"];
			var nov_01_5 = response.data.records[0]["nov_01_5"];
			var nov_01_6 = response.data.records[0]["nov_01_6"];
			var nov_01_7 = response.data.records[0]["nov_01_7"];
			
			var nov_02_1 = response.data.records[0]["nov_02_1"];
			var nov_02_2 = response.data.records[0]["nov_02_2"];
			var nov_02_3 = response.data.records[0]["nov_02_3"];
			var nov_02_4 = response.data.records[0]["nov_02_4"];
			var nov_02_5 = response.data.records[0]["nov_02_5"];
			var nov_02_6 = response.data.records[0]["nov_02_6"];
			var nov_02_7 = response.data.records[0]["nov_02_7"];
			
			var nov_03_1 = response.data.records[0]["nov_03_1"];
			var nov_03_2 = response.data.records[0]["nov_03_2"];
			var nov_03_3 = response.data.records[0]["nov_03_3"];
			var nov_03_4 = response.data.records[0]["nov_03_4"];
			var nov_03_5 = response.data.records[0]["nov_03_5"];
			var nov_03_6 = response.data.records[0]["nov_03_6"];
			var nov_03_7 = response.data.records[0]["nov_03_7"];
			
			var nov_04_1 = response.data.records[0]["nov_04_1"];
			var nov_04_2 = response.data.records[0]["nov_04_2"];
			var nov_04_3 = response.data.records[0]["nov_04_3"];
			var nov_04_4 = response.data.records[0]["nov_04_4"];
			var nov_04_5 = response.data.records[0]["nov_04_5"];
			var nov_04_6 = response.data.records[0]["nov_04_6"];
			var nov_04_7 = response.data.records[0]["nov_04_7"];
			
			var nov_05_1 = response.data.records[0]["nov_05_1"];
			var nov_05_2 = response.data.records[0]["nov_05_2"];
			
			//dec
			
			var dec_01_1 = response.data.records[0]["dec_01_1"];
			var dec_01_2 = response.data.records[0]["dec_01_2"];
			var dec_01_3 = response.data.records[0]["dec_01_3"];
			var dec_01_4 = response.data.records[0]["dec_01_4"];
			var dec_01_5 = response.data.records[0]["dec_01_5"];
			var dec_01_6 = response.data.records[0]["dec_01_6"];
			var dec_01_7 = response.data.records[0]["dec_01_7"];
			
			var dec_02_1 = response.data.records[0]["dec_02_1"];
			var dec_02_2 = response.data.records[0]["dec_02_2"];
			var dec_02_3 = response.data.records[0]["dec_02_3"];
			var dec_02_4 = response.data.records[0]["dec_02_4"];
			var dec_02_5 = response.data.records[0]["dec_02_5"];
			var dec_02_6 = response.data.records[0]["dec_02_6"];
			var dec_02_7 = response.data.records[0]["dec_02_7"];
			
			var dec_03_1 = response.data.records[0]["dec_03_1"];
			var dec_03_2 = response.data.records[0]["dec_03_2"];
			var dec_03_3 = response.data.records[0]["dec_03_3"];
			var dec_03_4 = response.data.records[0]["dec_03_4"];
			var dec_03_5 = response.data.records[0]["dec_03_5"];
			var dec_03_6 = response.data.records[0]["dec_03_6"];
			var dec_03_7 = response.data.records[0]["dec_03_7"];
			
			var dec_04_1 = response.data.records[0]["dec_04_1"];
			var dec_04_2 = response.data.records[0]["dec_04_2"];
			var dec_04_3 = response.data.records[0]["dec_04_3"];
			var dec_04_4 = response.data.records[0]["dec_04_4"];
			var dec_04_5 = response.data.records[0]["dec_04_5"];
			var dec_04_6 = response.data.records[0]["dec_04_6"];
			var dec_04_7 = response.data.records[0]["dec_04_7"];
			
			var dec_05_1 = response.data.records[0]["dec_05_1"];
			var dec_05_2 = response.data.records[0]["dec_05_2"];
			var dec_05_3 = response.data.records[0]["dec_05_3"];
			
			
			//setting scope variables
			
			//Jan 18
			
			$scope.jan_01_1 = Number(jan_01_1);
			$scope.jan_01_2 = Number(jan_01_2);
			$scope.jan_01_3 = Number(jan_01_3);
			$scope.jan_01_4 = Number(jan_01_4);
			$scope.jan_01_5 = Number(jan_01_5);
			$scope.jan_01_6 = Number(jan_01_6);
			$scope.jan_01_7 = Number(jan_01_7);
			
			$scope.jan_02_1 = Number(jan_02_1);
			$scope.jan_02_2 = Number(jan_02_2);
			$scope.jan_02_3 = Number(jan_02_3);
			$scope.jan_02_4 = Number(jan_02_4);
			$scope.jan_02_5 = Number(jan_02_5);
			$scope.jan_02_6 = Number(jan_02_6);
			$scope.jan_02_7 = Number(jan_02_7);
			
			$scope.jan_03_1 = Number(jan_03_1);
			$scope.jan_03_2 = Number(jan_03_2);
			$scope.jan_03_3 = Number(jan_03_3);
			$scope.jan_03_4 = Number(jan_03_4);
			$scope.jan_03_5 = Number(jan_03_5);
			$scope.jan_03_6 = Number(jan_03_6);
			$scope.jan_03_7 = Number(jan_03_7);
			
			$scope.jan_04_1 = Number(jan_04_1);
			$scope.jan_04_2 = Number(jan_04_2);
			$scope.jan_04_3 = Number(jan_04_3);
			$scope.jan_04_4 = Number(jan_04_4);
			$scope.jan_04_5 = Number(jan_04_5);
			$scope.jan_04_6 = Number(jan_04_6);
			$scope.jan_04_7 = Number(jan_04_7);
			
			$scope.jan_05_1 = Number(jan_05_1);
			$scope.jan_05_2 = Number(jan_05_2);
			$scope.jan_05_3 = Number(jan_05_3);
			
			//Feb 18
			
			$scope.feb_01_1 = Number(feb_01_1);
			$scope.feb_01_2 = Number(feb_01_2);
			$scope.feb_01_3 = Number(feb_01_3);
			$scope.feb_01_4 = Number(feb_01_4);
			$scope.feb_01_5 = Number(feb_01_5);
			$scope.feb_01_6 = Number(feb_01_6);
			$scope.feb_01_7 = Number(feb_01_7);
			
			$scope.feb_02_1 = Number(feb_02_1);
			$scope.feb_02_2 = Number(feb_02_2);
			$scope.feb_02_3 = Number(feb_02_3);
			$scope.feb_02_4 = Number(feb_02_4);
			$scope.feb_02_5 = Number(feb_02_5);
			$scope.feb_02_6 = Number(feb_02_6);
			$scope.feb_02_7 = Number(feb_02_7);
			
			$scope.feb_03_1 = Number(feb_03_1);
			$scope.feb_03_2 = Number(feb_03_2);
			$scope.feb_03_3 = Number(feb_03_3);
			$scope.feb_03_4 = Number(feb_03_4);
			$scope.feb_03_5 = Number(feb_03_5);
			$scope.feb_03_6 = Number(feb_03_6);
			$scope.feb_03_7 = Number(feb_03_7);
			
			$scope.feb_04_1 = Number(feb_04_1);
			$scope.feb_04_2 = Number(feb_04_2);
			$scope.feb_04_3 = Number(feb_04_3);
			$scope.feb_04_4 = Number(feb_04_4);
			$scope.feb_04_5 = Number(feb_04_5);
			$scope.feb_04_6 = Number(feb_04_6);
			$scope.feb_04_7 = Number(feb_04_7);
			
			//mar 18
			
			$scope.mar_01_1 = Number(mar_01_1);
			$scope.mar_01_2 = Number(mar_01_2);
			$scope.mar_01_3 = Number(mar_01_3);
			$scope.mar_01_4 = Number(mar_01_4);
			$scope.mar_01_5 = Number(mar_01_5);
			$scope.mar_01_6 = Number(mar_01_6);
			$scope.mar_01_7 = Number(mar_01_7);
			
			$scope.mar_02_1 = Number(mar_02_1);
			$scope.mar_02_2 = Number(mar_02_2);
			$scope.mar_02_3 = Number(mar_02_3);
			$scope.mar_02_4 = Number(mar_02_4);
			$scope.mar_02_5 = Number(mar_02_5);
			$scope.mar_02_6 = Number(mar_02_6);
			$scope.mar_02_7 = Number(mar_02_7);
			
			$scope.mar_03_1 = Number(mar_03_1);
			$scope.mar_03_2 = Number(mar_03_2);
			$scope.mar_03_3 = Number(mar_03_3);
			$scope.mar_03_4 = Number(mar_03_4);
			$scope.mar_03_5 = Number(mar_03_5);
			$scope.mar_03_6 = Number(mar_03_6);
			$scope.mar_03_7 = Number(mar_03_7);
			
			$scope.mar_04_1 = Number(mar_04_1);
			$scope.mar_04_2 = Number(mar_04_2);
			$scope.mar_04_3 = Number(mar_04_3);
			$scope.mar_04_4 = Number(mar_04_4);
			$scope.mar_04_5 = Number(mar_04_5);
			$scope.mar_04_6 = Number(mar_04_6);
			$scope.mar_04_7 = Number(mar_04_7);
			
			$scope.mar_05_1 = Number(mar_05_1);
			$scope.mar_05_2 = Number(mar_05_2);
			$scope.mar_05_3 = Number(mar_05_3);
			
			//apr 18
			
			$scope.apr_01_1 = Number(apr_01_1);
			$scope.apr_01_2 = Number(apr_01_2);
			$scope.apr_01_3 = Number(apr_01_3);
			$scope.apr_01_4 = Number(apr_01_4);
			$scope.apr_01_5 = Number(apr_01_5);
			$scope.apr_01_6 = Number(apr_01_6);
			$scope.apr_01_7 = Number(apr_01_7);
			
			$scope.apr_02_1 = Number(apr_02_1);
			$scope.apr_02_2 = Number(apr_02_2);
			$scope.apr_02_3 = Number(apr_02_3);
			$scope.apr_02_4 = Number(apr_02_4);
			$scope.apr_02_5 = Number(apr_02_5);
			$scope.apr_02_6 = Number(apr_02_6);
			$scope.apr_02_7 = Number(apr_02_7);
			
			$scope.apr_03_1 = Number(apr_03_1);
			$scope.apr_03_2 = Number(apr_03_2);
			$scope.apr_03_3 = Number(apr_03_3);
			$scope.apr_03_4 = Number(apr_03_4);
			$scope.apr_03_5 = Number(apr_03_5);
			$scope.apr_03_6 = Number(apr_03_6);
			$scope.apr_03_7 = Number(apr_03_7);
			
			$scope.apr_04_1 = Number(apr_04_1);
			$scope.apr_04_2 = Number(apr_04_2);
			$scope.apr_04_3 = Number(apr_04_3);
			$scope.apr_04_4 = Number(apr_04_4);
			$scope.apr_04_5 = Number(apr_04_5);
			$scope.apr_04_6 = Number(apr_04_6);
			$scope.apr_04_7 = Number(apr_04_7);
			
			$scope.apr_05_1 = Number(apr_05_1);
			$scope.apr_05_2 = Number(apr_05_2);
			
			//may 18
			
			$scope.may_01_1 = Number(may_01_1);
			$scope.may_01_2 = Number(may_01_2);
			$scope.may_01_3 = Number(may_01_3);
			$scope.may_01_4 = Number(may_01_4);
			$scope.may_01_5 = Number(may_01_5);
			$scope.may_01_6 = Number(may_01_6);
			$scope.may_01_7 = Number(may_01_7);
			
			$scope.may_02_1 = Number(may_02_1);
			$scope.may_02_2 = Number(may_02_2);
			$scope.may_02_3 = Number(may_02_3);
			$scope.may_02_4 = Number(may_02_4);
			$scope.may_02_5 = Number(may_02_5);
			$scope.may_02_6 = Number(may_02_6);
			$scope.may_02_7 = Number(may_02_7);
			
			$scope.may_03_1 = Number(may_03_1);
			$scope.may_03_2 = Number(may_03_2);
			$scope.may_03_3 = Number(may_03_3);
			$scope.may_03_4 = Number(may_03_4);
			$scope.may_03_5 = Number(may_03_5);
			$scope.may_03_6 = Number(may_03_6);
			$scope.may_03_7 = Number(may_03_7);
			
			$scope.may_04_1 = Number(may_04_1);
			$scope.may_04_2 = Number(may_04_2);
			$scope.may_04_3 = Number(may_04_3);
			$scope.may_04_4 = Number(may_04_4);
			$scope.may_04_5 = Number(may_04_5);
			$scope.may_04_6 = Number(may_04_6);
			$scope.may_04_7 = Number(may_04_7);
			
			$scope.may_05_1 = Number(may_05_1);
			$scope.may_05_2 = Number(may_05_2);
			$scope.may_05_3 = Number(may_05_3);
			
			//jun 18
			
			$scope.jun_01_1 = Number(jun_01_1);
			$scope.jun_01_2 = Number(jun_01_2);
			$scope.jun_01_3 = Number(jun_01_3);
			$scope.jun_01_4 = Number(jun_01_4);
			$scope.jun_01_5 = Number(jun_01_5);
			$scope.jun_01_6 = Number(jun_01_6);
			$scope.jun_01_7 = Number(jun_01_7);
			
			$scope.jun_02_1 = Number(jun_02_1);
			$scope.jun_02_2 = Number(jun_02_2);
			$scope.jun_02_3 = Number(jun_02_3);
			$scope.jun_02_4 = Number(jun_02_4);
			$scope.jun_02_5 = Number(jun_02_5);
			$scope.jun_02_6 = Number(jun_02_6);
			$scope.jun_02_7 = Number(jun_02_7);
			
			$scope.jun_03_1 = Number(jun_03_1);
			$scope.jun_03_2 = Number(jun_03_2);
			$scope.jun_03_3 = Number(jun_03_3);
			$scope.jun_03_4 = Number(jun_03_4);
			$scope.jun_03_5 = Number(jun_03_5);
			$scope.jun_03_6 = Number(jun_03_6);
			$scope.jun_03_7 = Number(jun_03_7);
			
			$scope.jun_04_1 = Number(jun_04_1);
			$scope.jun_04_2 = Number(jun_04_2);
			$scope.jun_04_3 = Number(jun_04_3);
			$scope.jun_04_4 = Number(jun_04_4);
			$scope.jun_04_5 = Number(jun_04_5);
			$scope.jun_04_6 = Number(jun_04_6);
			$scope.jun_04_7 = Number(jun_04_7);
			
			$scope.jun_05_1 = Number(jun_05_1);
			$scope.jun_05_2 = Number(jun_05_2);
			
			//jul 18
			
			$scope.jul_01_1 = Number(jul_01_1);
			$scope.jul_01_2 = Number(jul_01_2);
			$scope.jul_01_3 = Number(jul_01_3);
			$scope.jul_01_4 = Number(jul_01_4);
			$scope.jul_01_5 = Number(jul_01_5);
			$scope.jul_01_6 = Number(jul_01_6);
			$scope.jul_01_7 = Number(jul_01_7);
			
			$scope.jul_02_1 = Number(jul_02_1);
			$scope.jul_02_2 = Number(jul_02_2);
			$scope.jul_02_3 = Number(jul_02_3);
			$scope.jul_02_4 = Number(jul_02_4);
			$scope.jul_02_5 = Number(jul_02_5);
			$scope.jul_02_6 = Number(jul_02_6);
			$scope.jul_02_7 = Number(jul_02_7);
			
			$scope.jul_03_1 = Number(jul_03_1);
			$scope.jul_03_2 = Number(jul_03_2);
			$scope.jul_03_3 = Number(jul_03_3);
			$scope.jul_03_4 = Number(jul_03_4);
			$scope.jul_03_5 = Number(jul_03_5);
			$scope.jul_03_6 = Number(jul_03_6);
			$scope.jul_03_7 = Number(jul_03_7);
			
			$scope.jul_04_1 = Number(jul_04_1);
			$scope.jul_04_2 = Number(jul_04_2);
			$scope.jul_04_3 = Number(jul_04_3);
			$scope.jul_04_4 = Number(jul_04_4);
			$scope.jul_04_5 = Number(jul_04_5);
			$scope.jul_04_6 = Number(jul_04_6);
			$scope.jul_04_7 = Number(jul_04_7);
			
			$scope.jul_05_1 = Number(jul_05_1);
			$scope.jul_05_2 = Number(jul_05_2);
			$scope.jul_05_3 = Number(jul_05_3);
			
			//aug 18
			
			$scope.aug_01_1 = Number(aug_01_1);
			$scope.aug_01_2 = Number(aug_01_2);
			$scope.aug_01_3 = Number(aug_01_3);
			$scope.aug_01_4 = Number(aug_01_4);
			$scope.aug_01_5 = Number(aug_01_5);
			$scope.aug_01_6 = Number(aug_01_6);
			$scope.aug_01_7 = Number(aug_01_7);
			
			$scope.aug_02_1 = Number(aug_02_1);
			$scope.aug_02_2 = Number(aug_02_2);
			$scope.aug_02_3 = Number(aug_02_3);
			$scope.aug_02_4 = Number(aug_02_4);
			$scope.aug_02_5 = Number(aug_02_5);
			$scope.aug_02_6 = Number(aug_02_6);
			$scope.aug_02_7 = Number(aug_02_7);
			
			$scope.aug_03_1 = Number(aug_03_1);
			$scope.aug_03_2 = Number(aug_03_2);
			$scope.aug_03_3 = Number(aug_03_3);
			$scope.aug_03_4 = Number(aug_03_4);
			$scope.aug_03_5 = Number(aug_03_5);
			$scope.aug_03_6 = Number(aug_03_6);
			$scope.aug_03_7 = Number(aug_03_7);
			
			$scope.aug_04_1 = Number(aug_04_1);
			$scope.aug_04_2 = Number(aug_04_2);
			$scope.aug_04_3 = Number(aug_04_3);
			$scope.aug_04_4 = Number(aug_04_4);
			$scope.aug_04_5 = Number(aug_04_5);
			$scope.aug_04_6 = Number(aug_04_6);
			$scope.aug_04_7 = Number(aug_04_7);
			
			$scope.aug_05_1 = Number(aug_05_1);
			$scope.aug_05_2 = Number(aug_05_2);
			$scope.aug_05_3 = Number(aug_05_3);
			
			//sep 18
			
			$scope.sep_01_1 = Number(sep_01_1);
			$scope.sep_01_2 = Number(sep_01_2);
			$scope.sep_01_3 = Number(sep_01_3);
			$scope.sep_01_4 = Number(sep_01_4);
			$scope.sep_01_5 = Number(sep_01_5);
			$scope.sep_01_6 = Number(sep_01_6);
			$scope.sep_01_7 = Number(sep_01_7);
			
			$scope.sep_02_1 = Number(sep_02_1);
			$scope.sep_02_2 = Number(sep_02_2);
			$scope.sep_02_3 = Number(sep_02_3);
			$scope.sep_02_4 = Number(sep_02_4);
			$scope.sep_02_5 = Number(sep_02_5);
			$scope.sep_02_6 = Number(sep_02_6);
			$scope.sep_02_7 = Number(sep_02_7);
			
			$scope.sep_03_1 = Number(sep_03_1);
			$scope.sep_03_2 = Number(sep_03_2);
			$scope.sep_03_3 = Number(sep_03_3);
			$scope.sep_03_4 = Number(sep_03_4);
			$scope.sep_03_5 = Number(sep_03_5);
			$scope.sep_03_6 = Number(sep_03_6);
			$scope.sep_03_7 = Number(sep_03_7);
			
			$scope.sep_04_1 = Number(sep_04_1);
			$scope.sep_04_2 = Number(sep_04_2);
			$scope.sep_04_3 = Number(sep_04_3);
			$scope.sep_04_4 = Number(sep_04_4);
			$scope.sep_04_5 = Number(sep_04_5);
			$scope.sep_04_6 = Number(sep_04_6);
			$scope.sep_04_7 = Number(sep_04_7);
			
			$scope.sep_05_1 = Number(sep_05_1);
			$scope.sep_05_2 = Number(sep_05_2);
			
			//oct 18
			
			$scope.oct_01_1 = Number(oct_01_1);
			$scope.oct_01_2 = Number(oct_01_2);
			$scope.oct_01_3 = Number(oct_01_3);
			$scope.oct_01_4 = Number(oct_01_4);
			$scope.oct_01_5 = Number(oct_01_5);
			$scope.oct_01_6 = Number(oct_01_6);
			$scope.oct_01_7 = Number(oct_01_7);
			
			$scope.oct_02_1 = Number(oct_02_1);
			$scope.oct_02_2 = Number(oct_02_2);
			$scope.oct_02_3 = Number(oct_02_3);
			$scope.oct_02_4 = Number(oct_02_4);
			$scope.oct_02_5 = Number(oct_02_5);
			$scope.oct_02_6 = Number(oct_02_6);
			$scope.oct_02_7 = Number(oct_02_7);
			
			$scope.oct_03_1 = Number(oct_03_1);
			$scope.oct_03_2 = Number(oct_03_2);
			$scope.oct_03_3 = Number(oct_03_3);
			$scope.oct_03_4 = Number(oct_03_4);
			$scope.oct_03_5 = Number(oct_03_5);
			$scope.oct_03_6 = Number(oct_03_6);
			$scope.oct_03_7 = Number(oct_03_7);
			
			$scope.oct_04_1 = Number(oct_04_1);
			$scope.oct_04_2 = Number(oct_04_2);
			$scope.oct_04_3 = Number(oct_04_3);
			$scope.oct_04_4 = Number(oct_04_4);
			$scope.oct_04_5 = Number(oct_04_5);
			$scope.oct_04_6 = Number(oct_04_6);
			$scope.oct_04_7 = Number(oct_04_7);
			
			$scope.oct_05_1 = Number(oct_05_1);
			$scope.oct_05_2 = Number(oct_05_2);
			$scope.oct_05_3 = Number(oct_05_3);
			
			//nov 18
			
			$scope.nov_01_1 = Number(nov_01_1);
			$scope.nov_01_2 = Number(nov_01_2);
			$scope.nov_01_3 = Number(nov_01_3);
			$scope.nov_01_4 = Number(nov_01_4);
			$scope.nov_01_5 = Number(nov_01_5);
			$scope.nov_01_6 = Number(nov_01_6);
			$scope.nov_01_7 = Number(nov_01_7);
			
			$scope.nov_02_1 = Number(nov_02_1);
			$scope.nov_02_2 = Number(nov_02_2);
			$scope.nov_02_3 = Number(nov_02_3);
			$scope.nov_02_4 = Number(nov_02_4);
			$scope.nov_02_5 = Number(nov_02_5);
			$scope.nov_02_6 = Number(nov_02_6);
			$scope.nov_02_7 = Number(nov_02_7);
			
			$scope.nov_03_1 = Number(nov_03_1);
			$scope.nov_03_2 = Number(nov_03_2);
			$scope.nov_03_3 = Number(nov_03_3);
			$scope.nov_03_4 = Number(nov_03_4);
			$scope.nov_03_5 = Number(nov_03_5);
			$scope.nov_03_6 = Number(nov_03_6);
			$scope.nov_03_7 = Number(nov_03_7);
			
			$scope.nov_04_1 = Number(nov_04_1);
			$scope.nov_04_2 = Number(nov_04_2);
			$scope.nov_04_3 = Number(nov_04_3);
			$scope.nov_04_4 = Number(nov_04_4);
			$scope.nov_04_5 = Number(nov_04_5);
			$scope.nov_04_6 = Number(nov_04_6);
			$scope.nov_04_7 = Number(nov_04_7);
			
			$scope.nov_05_1 = Number(nov_05_1);
			$scope.nov_05_2 = Number(nov_05_2);
			
			//dec 18
			
			$scope.dec_01_1 = Number(dec_01_1);
			$scope.dec_01_2 = Number(dec_01_2);
			$scope.dec_01_3 = Number(dec_01_3);
			$scope.dec_01_4 = Number(dec_01_4);
			$scope.dec_01_5 = Number(dec_01_5);
			$scope.dec_01_6 = Number(dec_01_6);
			$scope.dec_01_7 = Number(dec_01_7);
			
			$scope.dec_02_1 = Number(dec_02_1);
			$scope.dec_02_2 = Number(dec_02_2);
			$scope.dec_02_3 = Number(dec_02_3);
			$scope.dec_02_4 = Number(dec_02_4);
			$scope.dec_02_5 = Number(dec_02_5);
			$scope.dec_02_6 = Number(dec_02_6);
			$scope.dec_02_7 = Number(dec_02_7);
			
			$scope.dec_03_1 = Number(dec_03_1);
			$scope.dec_03_2 = Number(dec_03_2);
			$scope.dec_03_3 = Number(dec_03_3);
			$scope.dec_03_4 = Number(dec_03_4);
			$scope.dec_03_5 = Number(dec_03_5);
			$scope.dec_03_6 = Number(dec_03_6);
			$scope.dec_03_7 = Number(dec_03_7);
			
			$scope.dec_04_1 = Number(dec_04_1);
			$scope.dec_04_2 = Number(dec_04_2);
			$scope.dec_04_3 = Number(dec_04_3);
			$scope.dec_04_4 = Number(dec_04_4);
			$scope.dec_04_5 = Number(dec_04_5);
			$scope.dec_04_6 = Number(dec_04_6);
			$scope.dec_04_7 = Number(dec_04_7);
			
			$scope.dec_05_1 = Number(dec_05_1);
			$scope.dec_05_2 = Number(dec_05_2);
			$scope.dec_05_3 = Number(dec_05_3);
		
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class monthToShowOnHover
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
	//MONTH TO SHOW ON HOVER
		$(\'#table_12\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_12").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_12\').hover(function()
		{
			$("#month_12").addClass("month-hovered");
		},
		function()
		{
			$("#month_12").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_11\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_11").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_11\').hover(function()
		{
			$("#month_11").addClass("month-hovered");
		},
		function()
		{
			$("#month_11").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_10\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_10").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_10\').hover(function()
		{
			$("#month_10").addClass("month-hovered");
		},
		function()
		{
			$("#month_10").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_09\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_09").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_09\').hover(function()
		{
			$("#month_09").addClass("month-hovered");
		},
		function()
		{
			$("#month_09").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_08\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_08").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_08\').hover(function()
		{
			$("#month_08").addClass("month-hovered");
		},
		function()
		{
			$("#month_08").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_07\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_07").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_07\').hover(function()
		{
			$("#month_07").addClass("month-hovered");
		},
		function()
		{
			$("#month_07").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_06\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_06").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_06\').hover(function()
		{
			$("#month_06").addClass("month-hovered");
		},
		function()
		{
			$("#month_06").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_05\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_05").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_05\').hover(function()
		{
			$("#month_05").addClass("month-hovered");
		},
		function()
		{
			$("#month_05").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_04\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_04").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_04\').hover(function()
		{
			$("#month_04").addClass("month-hovered");
		},
		function()
		{
			$("#month_04").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END

	//MONTH TO SHOW ON HOVER
		$(\'#table_03\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_03").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_03\').hover(function()
		{
			$("#month_03").addClass("month-hovered");
		},
		function()
		{
			$("#month_03").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_02\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_02").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_02\').hover(function()
		{
			$("#month_02").addClass("month-hovered");
		},
		function()
		{
			$("#month_02").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
	//MONTH TO SHOW ON HOVER
		$(\'#table_01\').find(\'td\').hover(function()
		{
			$(this).find(\'hr\').css("border", "1px black solid"); 
			$(this).find(\'input\').css("color", "black"); 
			$("#month_01").addClass("month-hovered");
		},
		function()
		{
			$(this).find(\'hr\').css("border", "1px white solid"); 
			$(this).find(\'input\').css("color", "black"); 
		});
		
		$(\'#table_01\').hover(function()
		{
			$("#month_01").addClass("month-hovered");
		},
		function()
		{
			$("#month_01").removeClass("month-hovered");
		});
	//MONTH TO SHOW ON HOVER END
	
		
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class setVarsForResponse
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
			var data_1 = {
			  "jan_01_1":scope.jan_01_1,
			  "jan_01_2":scope.jan_01_2,
			  "jan_01_3":scope.jan_01_3,
			  "jan_01_4":scope.jan_01_4,
			  "jan_01_5":scope.jan_01_5,
			  "jan_01_6":scope.jan_01_6,
			  "jan_01_7":scope.jan_01_7,
			  
			  "jan_02_1":scope.jan_02_1,
			  "jan_02_2":scope.jan_02_2,
			  "jan_02_3":scope.jan_02_3,
			  "jan_02_4":scope.jan_02_4,
			  "jan_02_5":scope.jan_02_5,
			  "jan_02_6":scope.jan_02_6,
			  "jan_02_7":scope.jan_02_7,
			  
			  "jan_03_1":scope.jan_03_1,
			  "jan_03_2":scope.jan_03_2,
			  "jan_03_3":scope.jan_03_3,
			  "jan_03_4":scope.jan_03_4,
			  "jan_03_5":scope.jan_03_5,
			  "jan_03_6":scope.jan_03_6,
			  "jan_03_7":scope.jan_03_7,
			  
			  "jan_04_1":scope.jan_04_1,
			  "jan_04_2":scope.jan_04_2,
			  "jan_04_3":scope.jan_04_3,
			  "jan_04_4":scope.jan_04_4,
			  "jan_04_5":scope.jan_04_5,
			  "jan_04_6":scope.jan_04_6,
			  "jan_04_7":scope.jan_04_7,
			  
			  "jan_05_1":scope.jan_05_1,
			  "jan_05_2":scope.jan_05_2,
			  "jan_05_3":scope.jan_05_3,
			  
			  //feb 18
			  
			  "feb_01_1":scope.feb_01_1,
			  "feb_01_2":scope.feb_01_2,
			  "feb_01_3":scope.feb_01_3,
			  "feb_01_4":scope.feb_01_4,
			  "feb_01_5":scope.feb_01_5,
			  "feb_01_6":scope.feb_01_6,
			  "feb_01_7":scope.feb_01_7,
			  
			  "feb_02_1":scope.feb_02_1,
			  "feb_02_2":scope.feb_02_2,
			  "feb_02_3":scope.feb_02_3,
			  "feb_02_4":scope.feb_02_4,
			  "feb_02_5":scope.feb_02_5,
			  "feb_02_6":scope.feb_02_6,
			  "feb_02_7":scope.feb_02_7,
			  
			  "feb_03_1":scope.feb_03_1,
			  "feb_03_2":scope.feb_03_2,
			  "feb_03_3":scope.feb_03_3,
			  "feb_03_4":scope.feb_03_4,
			  "feb_03_5":scope.feb_03_5,
			  "feb_03_6":scope.feb_03_6,
			  "feb_03_7":scope.feb_03_7,
			  
			  "feb_04_1":scope.feb_04_1,
			  "feb_04_2":scope.feb_04_2,
			  "feb_04_3":scope.feb_04_3,
			  "feb_04_4":scope.feb_04_4,
			  "feb_04_5":scope.feb_04_5,
			  "feb_04_6":scope.feb_04_6,
			  "feb_04_7":scope.feb_04_7,
			  
			  //mar 18
			  
			  "mar_01_1":scope.mar_01_1,
			  "mar_01_2":scope.mar_01_2,
			  "mar_01_3":scope.mar_01_3,
			  "mar_01_4":scope.mar_01_4,
			  "mar_01_5":scope.mar_01_5,
			  "mar_01_6":scope.mar_01_6,
			  "mar_01_7":scope.mar_01_7,
			  
			  "mar_02_1":scope.mar_02_1,
			  "mar_02_2":scope.mar_02_2,
			  "mar_02_3":scope.mar_02_3,
			  "mar_02_4":scope.mar_02_4,
			  "mar_02_5":scope.mar_02_5,
			  "mar_02_6":scope.mar_02_6,
			  "mar_02_7":scope.mar_02_7,
			  
			  "mar_03_1":scope.mar_03_1,
			  "mar_03_2":scope.mar_03_2,
			  "mar_03_3":scope.mar_03_3,
			  "mar_03_4":scope.mar_03_4,
			  "mar_03_5":scope.mar_03_5,
			  "mar_03_6":scope.mar_03_6,
			  "mar_03_7":scope.mar_03_7,
			  
			  "mar_04_1":scope.mar_04_1,
			  "mar_04_2":scope.mar_04_2,
			  "mar_04_3":scope.mar_04_3,
			  "mar_04_4":scope.mar_04_4,
			  "mar_04_5":scope.mar_04_5,
			  "mar_04_6":scope.mar_04_6,
			  "mar_04_7":scope.mar_04_7,
			  
			  "mar_05_1":scope.mar_05_1,
			  "mar_05_2":scope.mar_05_2,
			  "mar_05_3":scope.mar_05_3,
			  
			  //apr 18
			  
			  "apr_01_1":scope.apr_01_1,
			  "apr_01_2":scope.apr_01_2,
			  "apr_01_3":scope.apr_01_3,
			  "apr_01_4":scope.apr_01_4,
			  "apr_01_5":scope.apr_01_5,
			  "apr_01_6":scope.apr_01_6,
			  "apr_01_7":scope.apr_01_7,
			  
			  "apr_02_1":scope.apr_02_1,
			  "apr_02_2":scope.apr_02_2,
			  "apr_02_3":scope.apr_02_3,
			  "apr_02_4":scope.apr_02_4,
			  "apr_02_5":scope.apr_02_5,
			  "apr_02_6":scope.apr_02_6,
			  "apr_02_7":scope.apr_02_7,
			  
			  "apr_03_1":scope.apr_03_1,
			  "apr_03_2":scope.apr_03_2,
			  "apr_03_3":scope.apr_03_3,
			  "apr_03_4":scope.apr_03_4,
			  "apr_03_5":scope.apr_03_5,
			  "apr_03_6":scope.apr_03_6,
			  "apr_03_7":scope.apr_03_7,
			  
			  "apr_04_1":scope.apr_04_1,
			  "apr_04_2":scope.apr_04_2,
			  "apr_04_3":scope.apr_04_3,
			  "apr_04_4":scope.apr_04_4,
			  "apr_04_5":scope.apr_04_5,
			  "apr_04_6":scope.apr_04_6,
			  "apr_04_7":scope.apr_04_7,
			  
			  "apr_05_1":scope.apr_05_1,
			  "apr_05_2":scope.apr_05_2,
			  
			  //may 18
			  
			  "may_01_1":scope.may_01_1,
			  "may_01_2":scope.may_01_2,
			  "may_01_3":scope.may_01_3,
			  "may_01_4":scope.may_01_4,
			  "may_01_5":scope.may_01_5,
			  "may_01_6":scope.may_01_6,
			  "may_01_7":scope.may_01_7,
			  
			  "may_02_1":scope.may_02_1,
			  "may_02_2":scope.may_02_2,
			  "may_02_3":scope.may_02_3,
			  "may_02_4":scope.may_02_4,
			  "may_02_5":scope.may_02_5,
			  "may_02_6":scope.may_02_6,
			  "may_02_7":scope.may_02_7,
			  
			  "may_03_1":scope.may_03_1,
			  "may_03_2":scope.may_03_2,
			  "may_03_3":scope.may_03_3,
			  "may_03_4":scope.may_03_4,
			  "may_03_5":scope.may_03_5,
			  "may_03_6":scope.may_03_6,
			  "may_03_7":scope.may_03_7,
			  
			  "may_04_1":scope.may_04_1,
			  "may_04_2":scope.may_04_2,
			  "may_04_3":scope.may_04_3,
			  "may_04_4":scope.may_04_4,
			  "may_04_5":scope.may_04_5,
			  "may_04_6":scope.may_04_6,
			  "may_04_7":scope.may_04_7,
			  
			  "may_05_1":scope.may_05_1,
			  "may_05_2":scope.may_05_2,
			  "may_05_3":scope.may_05_3,
			  
			  //jun 18
			  
			  "jun_01_1":scope.jun_01_1,
			  "jun_01_2":scope.jun_01_2,
			  "jun_01_3":scope.jun_01_3,
			  "jun_01_4":scope.jun_01_4,
			  "jun_01_5":scope.jun_01_5,
			  "jun_01_6":scope.jun_01_6,
			  "jun_01_7":scope.jun_01_7,
			  
			  "jun_02_1":scope.jun_02_1,
			  "jun_02_2":scope.jun_02_2,
			  "jun_02_3":scope.jun_02_3,
			  "jun_02_4":scope.jun_02_4,
			  "jun_02_5":scope.jun_02_5,
			  "jun_02_6":scope.jun_02_6,
			  "jun_02_7":scope.jun_02_7,
			  
			  "jun_03_1":scope.jun_03_1,
			  "jun_03_2":scope.jun_03_2,
			  "jun_03_3":scope.jun_03_3,
			  "jun_03_4":scope.jun_03_4,
			  "jun_03_5":scope.jun_03_5,
			  "jun_03_6":scope.jun_03_6,
			  "jun_03_7":scope.jun_03_7,
			  
			  "jun_04_1":scope.jun_04_1,
			  "jun_04_2":scope.jun_04_2,
			  "jun_04_3":scope.jun_04_3,
			  "jun_04_4":scope.jun_04_4,
			  "jun_04_5":scope.jun_04_5,
			  "jun_04_6":scope.jun_04_6,
			  "jun_04_7":scope.jun_04_7,
			  
			  "jun_05_1":scope.jun_05_1,
			  "jun_05_2":scope.jun_05_2,
			  
			   //jul 18
			  
			  "jul_01_1":scope.jul_01_1,
			  "jul_01_2":scope.jul_01_2,
			  "jul_01_3":scope.jul_01_3,
			  "jul_01_4":scope.jul_01_4,
			  "jul_01_5":scope.jul_01_5,
			  "jul_01_6":scope.jul_01_6,
			  "jul_01_7":scope.jul_01_7,
			  
			  "jul_02_1":scope.jul_02_1,
			  "jul_02_2":scope.jul_02_2,
			  "jul_02_3":scope.jul_02_3,
			  "jul_02_4":scope.jul_02_4,
			  "jul_02_5":scope.jul_02_5,
			  "jul_02_6":scope.jul_02_6,
			  "jul_02_7":scope.jul_02_7,
			  
			  "jul_03_1":scope.jul_03_1,
			  "jul_03_2":scope.jul_03_2,
			  "jul_03_3":scope.jul_03_3,
			  "jul_03_4":scope.jul_03_4,
			  "jul_03_5":scope.jul_03_5,
			  "jul_03_6":scope.jul_03_6,
			  "jul_03_7":scope.jul_03_7,
			  
			  "jul_04_1":scope.jul_04_1,
			  "jul_04_2":scope.jul_04_2,
			  "jul_04_3":scope.jul_04_3,
			  "jul_04_4":scope.jul_04_4,
			  "jul_04_5":scope.jul_04_5,
			  "jul_04_6":scope.jul_04_6,
			  "jul_04_7":scope.jul_04_7,
			  
			  "jul_05_1":scope.jul_05_1,
			  "jul_05_2":scope.jul_05_2,
			  "jul_05_3":scope.jul_05_3,
			  
			   //aug 18
			  
			  "aug_01_1":scope.aug_01_1,
			  "aug_01_2":scope.aug_01_2,
			  "aug_01_3":scope.aug_01_3,
			  "aug_01_4":scope.aug_01_4,
			  "aug_01_5":scope.aug_01_5,
			  "aug_01_6":scope.aug_01_6,
			  "aug_01_7":scope.aug_01_7,
			  
			  "aug_02_1":scope.aug_02_1,
			  "aug_02_2":scope.aug_02_2,
			  "aug_02_3":scope.aug_02_3,
			  "aug_02_4":scope.aug_02_4,
			  "aug_02_5":scope.aug_02_5,
			  "aug_02_6":scope.aug_02_6,
			  "aug_02_7":scope.aug_02_7,
			  
			  "aug_03_1":scope.aug_03_1,
			  "aug_03_2":scope.aug_03_2,
			  "aug_03_3":scope.aug_03_3,
			  "aug_03_4":scope.aug_03_4,
			  "aug_03_5":scope.aug_03_5,
			  "aug_03_6":scope.aug_03_6,
			  "aug_03_7":scope.aug_03_7,
			  
			  "aug_04_1":scope.aug_04_1,
			  "aug_04_2":scope.aug_04_2,
			  "aug_04_3":scope.aug_04_3,
			  "aug_04_4":scope.aug_04_4,
			  "aug_04_5":scope.aug_04_5,
			  "aug_04_6":scope.aug_04_6,
			  "aug_04_7":scope.aug_04_7,
			  
			  "aug_05_1":scope.aug_05_1,
			  "aug_05_2":scope.aug_05_2,
			  "aug_05_3":scope.aug_05_3,
			  
			   //sep 18
			  
			  "sep_01_1":scope.sep_01_1,
			  "sep_01_2":scope.sep_01_2,
			  "sep_01_3":scope.sep_01_3,
			  "sep_01_4":scope.sep_01_4,
			  "sep_01_5":scope.sep_01_5,
			  "sep_01_6":scope.sep_01_6,
			  "sep_01_7":scope.sep_01_7,
			  
			  "sep_02_1":scope.sep_02_1,
			  "sep_02_2":scope.sep_02_2,
			  "sep_02_3":scope.sep_02_3,
			  "sep_02_4":scope.sep_02_4,
			  "sep_02_5":scope.sep_02_5,
			  "sep_02_6":scope.sep_02_6,
			  "sep_02_7":scope.sep_02_7,
			  
			  "sep_03_1":scope.sep_03_1,
			  "sep_03_2":scope.sep_03_2,
			  "sep_03_3":scope.sep_03_3,
			  "sep_03_4":scope.sep_03_4,
			  "sep_03_5":scope.sep_03_5,
			  "sep_03_6":scope.sep_03_6,
			  "sep_03_7":scope.sep_03_7,
			  
			  "sep_04_1":scope.sep_04_1,
			  "sep_04_2":scope.sep_04_2,
			  "sep_04_3":scope.sep_04_3,
			  "sep_04_4":scope.sep_04_4,
			  "sep_04_5":scope.sep_04_5,
			  "sep_04_6":scope.sep_04_6,
			  "sep_04_7":scope.sep_04_7,
			  
			  "sep_05_1":scope.sep_05_1,
			  "sep_05_2":scope.sep_05_2,
			  
			   //oct 18
			  
			  "oct_01_1":scope.oct_01_1,
			  "oct_01_2":scope.oct_01_2,
			  "oct_01_3":scope.oct_01_3,
			  "oct_01_4":scope.oct_01_4,
			  "oct_01_5":scope.oct_01_5,
			  "oct_01_6":scope.oct_01_6,
			  "oct_01_7":scope.oct_01_7,
			  
			  "oct_02_1":scope.oct_02_1,
			  "oct_02_2":scope.oct_02_2,
			  "oct_02_3":scope.oct_02_3,
			  "oct_02_4":scope.oct_02_4,
			  "oct_02_5":scope.oct_02_5,
			  "oct_02_6":scope.oct_02_6,
			  "oct_02_7":scope.oct_02_7,
			  
			  "oct_03_1":scope.oct_03_1,
			  "oct_03_2":scope.oct_03_2,
			  "oct_03_3":scope.oct_03_3,
			  "oct_03_4":scope.oct_03_4,
			  "oct_03_5":scope.oct_03_5,
			  "oct_03_6":scope.oct_03_6,
			  "oct_03_7":scope.oct_03_7,
			  
			  "oct_04_1":scope.oct_04_1,
			  "oct_04_2":scope.oct_04_2,
			  "oct_04_3":scope.oct_04_3,
			  "oct_04_4":scope.oct_04_4,
			  "oct_04_5":scope.oct_04_5,
			  "oct_04_6":scope.oct_04_6,
			  "oct_04_7":scope.oct_04_7,
			  
			  "oct_05_1":scope.oct_05_1,
			  "oct_05_2":scope.oct_05_2,
			  "oct_05_3":scope.oct_05_3,
			  
			   //nov 18
			  
			  "nov_01_1":scope.nov_01_1,
			  "nov_01_2":scope.nov_01_2,
			  "nov_01_3":scope.nov_01_3,
			  "nov_01_4":scope.nov_01_4,
			  "nov_01_5":scope.nov_01_5,
			  "nov_01_6":scope.nov_01_6,
			  "nov_01_7":scope.nov_01_7,
			  
			  "nov_02_1":scope.nov_02_1,
			  "nov_02_2":scope.nov_02_2,
			  "nov_02_3":scope.nov_02_3,
			  "nov_02_4":scope.nov_02_4,
			  "nov_02_5":scope.nov_02_5,
			  "nov_02_6":scope.nov_02_6,
			  "nov_02_7":scope.nov_02_7,
			  
			  "nov_03_1":scope.nov_03_1,
			  "nov_03_2":scope.nov_03_2,
			  "nov_03_3":scope.nov_03_3,
			  "nov_03_4":scope.nov_03_4,
			  "nov_03_5":scope.nov_03_5,
			  "nov_03_6":scope.nov_03_6,
			  "nov_03_7":scope.nov_03_7,
			  
			  "nov_04_1":scope.nov_04_1,
			  "nov_04_2":scope.nov_04_2,
			  "nov_04_3":scope.nov_04_3,
			  "nov_04_4":scope.nov_04_4,
			  "nov_04_5":scope.nov_04_5,
			  "nov_04_6":scope.nov_04_6,
			  "nov_04_7":scope.nov_04_7,
			  
			  "nov_05_1":scope.nov_05_1,
			  "nov_05_2":scope.nov_05_2,
			  
			   //dec 18
			  
			  "dec_01_1":scope.dec_01_1,
			  "dec_01_2":scope.dec_01_2,
			  "dec_01_3":scope.dec_01_3,
			  "dec_01_4":scope.dec_01_4,
			  "dec_01_5":scope.dec_01_5,
			  "dec_01_6":scope.dec_01_6,
			  "dec_01_7":scope.dec_01_7,
			  
			  "dec_02_1":scope.dec_02_1,
			  "dec_02_2":scope.dec_02_2,
			  "dec_02_3":scope.dec_02_3,
			  "dec_02_4":scope.dec_02_4,
			  "dec_02_5":scope.dec_02_5,
			  "dec_02_6":scope.dec_02_6,
			  "dec_02_7":scope.dec_02_7,
			  
			  "dec_03_1":scope.dec_03_1,
			  "dec_03_2":scope.dec_03_2,
			  "dec_03_3":scope.dec_03_3,
			  "dec_03_4":scope.dec_03_4,
			  "dec_03_5":scope.dec_03_5,
			  "dec_03_6":scope.dec_03_6,
			  "dec_03_7":scope.dec_03_7,
			  
			  "dec_04_1":scope.dec_04_1,
			  "dec_04_2":scope.dec_04_2,
			  "dec_04_3":scope.dec_04_3,
			  "dec_04_4":scope.dec_04_4,
			  "dec_04_5":scope.dec_04_5,
			  "dec_04_6":scope.dec_04_6,
			  "dec_04_7":scope.dec_04_7,
			  
			  "dec_05_1":scope.dec_05_1,
			  "dec_05_2":scope.dec_05_2,
			  "dec_05_3":scope.dec_05_3,
			   
			  "stuff":$("#stuff").val(),
			  "tot":$("#tot").html()
		
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class solutionArray 
{
	// property declaration
    public $settings = array(
		"month"     			  =>'',
		"monthNumber"             =>''
	);
    
	public function __call($methodName, $params = null)
    {
        if($methodName == 'set' && count($params) == 2)
        {
            $key = $params[0];
            $value = $params[1];
            $this->settings[$key] = $value;
        }
        elseif($methodName == 'get' && count($params) == 1)
        {
            $key = $params[0];
            if(array_key_exists($key, $this->settings)) return $this->settings[$key];
        }
        else
        {
            exit('Opps! The method is not defined!');
        }
    }
	
	// method declaration
    public function displaySolutionArray() 
	{
		return $this->settings;
    }
}

class month31 
{
	// property declaration
    public $month;
	public $monthNumber;
    
	public function __construct($solution_array)
	{
		
		$this->month=$solution_array['month'];
		$this->monthNumber=$solution_array['monthNumber'];
		
		$this->content = '
		<div id="div_table_'.$this->month.'" class="w3-row">
			<div class="w3-col l2 m2 s0" style="opacity:0;float:left;">&nbsp;</div>
			<div class="w3-col l8 m8 s12 w3-center" style="float:left;">
			<table id="table_'.$this->monthNumber.'" class="w3-table-all w3-card-4 w3-center">
				<tr>
					<td class="rotate_2">חודש</td>
					<td id="days-weeks-'.$this->monthNumber.'" class="rotate">שבוע</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
					<td>&Sigma;</td>
				</tr>
				
				<tr>
					<td id="month_'.$this->monthNumber.'" rowspan="11">'.$this->monthNumber.'</td>
					<td>#01</td>
					<td>
						01.'.$this->monthNumber.'
					</td>
					<td>
						02.'.$this->monthNumber.'
					</td>
					<td>
						03.'.$this->monthNumber.'
					</td>
					<td>
						04.'.$this->monthNumber.'
					</td>
					<td>
						05.'.$this->monthNumber.'
					</td>
					<td>
						06.'.$this->monthNumber.'
					</td>
					<td>
						07.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input id="in_1" type="number" ng-model="'.$this->month.'_01_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_7"></td>
					<td class="total">{{'.$this->month.'_01_1 + '.$this->month.'_01_2 + '.$this->month.'_01_3 + '.$this->month.'_01_4 + '.$this->month.'_01_5 + '.$this->month.'_01_6 + '.$this->month.'_01_7}}</td>
				</tr>
					
				<tr>
					<td>#02</td>
					<td>
						08.'.$this->monthNumber.'
					</td>
					<td>
						09.'.$this->monthNumber.'
					</td>
					<td>
						10.'.$this->monthNumber.'
					</td>
					<td>
						11.'.$this->monthNumber.'
					</td>
					<td>
						12.'.$this->monthNumber.'
					</td>
					<td>
						13.'.$this->monthNumber.'
					</td>
					<td>
						14.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_7"></td>
					<td class="total">{{'.$this->month.'_02_1 + '.$this->month.'_02_2 + '.$this->month.'_02_3 + '.$this->month.'_02_4 + '.$this->month.'_02_5 + '.$this->month.'_02_6 + '.$this->month.'_02_7}}</td>
				</tr>
				
				<tr>
					<td>#03</td>
					<td>
						15.'.$this->monthNumber.'
					</td>
					<td>
						16.'.$this->monthNumber.'
					</td>
					<td>
						17.'.$this->monthNumber.'
					</td>
					<td>
						18.'.$this->monthNumber.'
					</td>
					<td>
						19.'.$this->monthNumber.'
					</td>
					<td>
						20.'.$this->monthNumber.'
					</td>
					<td>
						21.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_7"></td>
					<td class="total">{{'.$this->month.'_03_1 + '.$this->month.'_03_2 + '.$this->month.'_03_3 + '.$this->month.'_03_4 + '.$this->month.'_03_5 + '.$this->month.'_03_6 + '.$this->month.'_03_7}}</td>
				</tr>
				
				<tr>
					<td>#04</td>
					<td>
						22.'.$this->monthNumber.'
					</td>
					<td>
						23.'.$this->monthNumber.'
					</td>
					<td>
						24.'.$this->monthNumber.'
					</td>
					<td>
						25.'.$this->monthNumber.'
					</td>
					<td>
						26.'.$this->monthNumber.'
					</td>
					<td>
						27.'.$this->monthNumber.'
					</td>
					<td>
						28.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_7"></td>
					<td class="total">{{'.$this->month.'_04_1 + '.$this->month.'_04_2 + '.$this->month.'_04_3 + '.$this->month.'_04_4 + '.$this->month.'_04_5 + '.$this->month.'_04_6 + '.$this->month.'_04_7}}</td>
				</tr>
				
				<tr>
					<td>#05</td>
					<td>
						29.'.$this->monthNumber.'
					</td>
					<td>
						30.'.$this->monthNumber.'
					</td>
					<td>
						31.'.$this->monthNumber.'
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_05_1">
					</td>
					<td>
						<input type="number" ng-model="'.$this->month.'_05_2">
					</td>
					<td>
						<input type="number" ng-model="'.$this->month.'_05_3">
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td class="total">{{'.$this->month.'_05_1 + '.$this->month.'_05_2 + '.$this->month.'_05_3}}</td>
				</tr>
				
				<tr>
					<td>סה"כ</td>
					<td class="total">{{'.$this->month.'_01_1 + '.$this->month.'_02_1 + '.$this->month.'_03_1 + '.$this->month.'_04_1 + '.$this->month.'_05_1}}</td>
					<td class="total">{{'.$this->month.'_01_2 + '.$this->month.'_02_2 + '.$this->month.'_03_2 + '.$this->month.'_04_2 + '.$this->month.'_05_2}}</td>
					<td class="total">{{'.$this->month.'_01_3 + '.$this->month.'_02_3 + '.$this->month.'_03_3 + '.$this->month.'_04_3 + '.$this->month.'_05_3}}</td>
					<td class="total">{{'.$this->month.'_01_4 + '.$this->month.'_02_4 + '.$this->month.'_03_4 + '.$this->month.'_04_4}}</td>
					<td class="total">{{'.$this->month.'_01_5 + '.$this->month.'_02_5 + '.$this->month.'_03_5 + '.$this->month.'_04_5}}</td>
					<td class="total">{{'.$this->month.'_01_6 + '.$this->month.'_02_6 + '.$this->month.'_03_6 + '.$this->month.'_04_6}}</td>
					<td class="total">{{'.$this->month.'_01_7 + '.$this->month.'_02_7 + '.$this->month.'_03_7 + '.$this->month.'_04_7}}</td>
					<td class="total">{{'.$this->month.'_01_1 + '.$this->month.'_01_2 + '.$this->month.'_01_3 + '.$this->month.'_01_4 + '.$this->month.'_01_5 + '.$this->month.'_01_6 + '.$this->month.'_01_7 + '.$this->month.'_02_1 + '.$this->month.'_02_2 + '.$this->month.'_02_3 + '.$this->month.'_02_4 + '.$this->month.'_02_5 + '.$this->month.'_02_6 + '.$this->month.'_02_7 + '.$this->month.'_03_1 + '.$this->month.'_03_2 + '.$this->month.'_03_3 + '.$this->month.'_03_4 + '.$this->month.'_03_5 + '.$this->month.'_03_6 + '.$this->month.'_03_7 + '.$this->month.'_04_1 + '.$this->month.'_04_2 + '.$this->month.'_04_3 + '.$this->month.'_04_4 + '.$this->month.'_04_5 + '.$this->month.'_04_6 + '.$this->month.'_04_7 + '.$this->month.'_05_1 + '.$this->month.'_05_2 + '.$this->month.'_05_3}}</td>
				</tr>';
			
			if($this->monthNumber == '12')
			{
				$this->content.='<tr>
					<td colspan=\'10\'>
						<h4 id="header_2" style="margin:2px;"><u style="color:white;">יומן מסע</u></h4>	
					</td>
				</tr>
		
				<tr>
					<td colspan=\'10\'>
						<textarea rows="10" id="stuff" style="width:100%;margin-top:4px;color:black;padding:4px;"></textarea>
					</td>
				</tr>';
			}
			
			$this->content.='		
			</table>
			<div class="w3-col l2 m2 s0" style="opacity:0;float:right;"></div>
		</div>
		</div>';

	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class month30 
{
	// property declaration
    public $month;
	public $monthNumber;
    
	public function __construct($solution_array)
	{
		
		$this->month=$solution_array['month'];
		$this->monthNumber=$solution_array['monthNumber'];
		
		$this->content = '
		<div id="div_table_'.$this->month.'" class="w3-row">
			<div class="w3-col l2 m2 s0" style="opacity:0;float:left;">&nbsp;</div>
			<div class="w3-col l8 m8 s12 w3-center" style="float:left;">
			<table id="table_'.$this->monthNumber.'" class="w3-table-all w3-card-4 w3-center">
				<tr>
					<td class="rotate_2">חודש</td>
					<td id="days-weeks-'.$this->monthNumber.'" class="rotate">שבוע</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
					<td>&Sigma;</td>
				</tr>
				
				<tr>
					<td id="month_'.$this->monthNumber.'" rowspan="11">'.$this->monthNumber.'</td>
					<td>#01</td>
					<td>
						01.'.$this->monthNumber.'
					</td>
					<td>
						02.'.$this->monthNumber.'
					</td>
					<td>
						03.'.$this->monthNumber.'
					</td>
					<td>
						04.'.$this->monthNumber.'
					</td>
					<td>
						05.'.$this->monthNumber.'
					</td>
					<td>
						06.'.$this->monthNumber.'
					</td>
					<td>
						07.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input id="in_1" type="number" ng-model="'.$this->month.'_01_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_7"></td>
					<td class="total">{{'.$this->month.'_01_1 + '.$this->month.'_01_2 + '.$this->month.'_01_3 + '.$this->month.'_01_4 + '.$this->month.'_01_5 + '.$this->month.'_01_6 + '.$this->month.'_01_7}}</td>
				</tr>
					
				<tr>
					<td>#02</td>
					<td>
						08.'.$this->monthNumber.'
					</td>
					<td>
						09.'.$this->monthNumber.'
					</td>
					<td>
						10.'.$this->monthNumber.'
					</td>
					<td>
						11.'.$this->monthNumber.'
					</td>
					<td>
						12.'.$this->monthNumber.'
					</td>
					<td>
						13.'.$this->monthNumber.'
					</td>
					<td>
						14.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_7"></td>
					<td class="total">{{'.$this->month.'_02_1 + '.$this->month.'_02_2 + '.$this->month.'_02_3 + '.$this->month.'_02_4 + '.$this->month.'_02_5 + '.$this->month.'_02_6 + '.$this->month.'_02_7}}</td>
				</tr>
				
				<tr>
					<td>#03</td>
					<td>
						15.'.$this->monthNumber.'
					</td>
					<td>
						16.'.$this->monthNumber.'
					</td>
					<td>
						17.'.$this->monthNumber.'
					</td>
					<td>
						18.'.$this->monthNumber.'
					</td>
					<td>
						19.'.$this->monthNumber.'
					</td>
					<td>
						20.'.$this->monthNumber.'
					</td>
					<td>
						21.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_7"></td>
					<td class="total">{{'.$this->month.'_03_1 + '.$this->month.'_03_2 + '.$this->month.'_03_3 + '.$this->month.'_03_4 + '.$this->month.'_03_5 + '.$this->month.'_03_6 + '.$this->month.'_03_7}}</td>
				</tr>
				
				<tr>
					<td>#04</td>
					<td>
						22.'.$this->monthNumber.'
					</td>
					<td>
						23.'.$this->monthNumber.'
					</td>
					<td>
						24.'.$this->monthNumber.'
					</td>
					<td>
						25.'.$this->monthNumber.'
					</td>
					<td>
						26.'.$this->monthNumber.'
					</td>
					<td>
						27.'.$this->monthNumber.'
					</td>
					<td>
						28.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_7"></td>
					<td class="total">{{'.$this->month.'_04_1 + '.$this->month.'_04_2 + '.$this->month.'_04_3 + '.$this->month.'_04_4 + '.$this->month.'_04_5 + '.$this->month.'_04_6 + '.$this->month.'_04_7}}</td>
				</tr>
				
				<tr>
					<td>#05</td>
					<td>
						29.'.$this->monthNumber.'
					</td>
					<td>
						30.'.$this->monthNumber.'
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_05_1">
					</td>
					<td>
						<input type="number" ng-model="'.$this->month.'_05_2">
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td class="total">{{'.$this->month.'_05_1 + '.$this->month.'_05_2}}</td>
				</tr>
				
				<tr>
					<td>סה"כ</td>
					<td class="total">{{'.$this->month.'_01_1 + '.$this->month.'_02_1 + '.$this->month.'_03_1 + '.$this->month.'_04_1 + '.$this->month.'_05_1}}</td>
					<td class="total">{{'.$this->month.'_01_2 + '.$this->month.'_02_2 + '.$this->month.'_03_2 + '.$this->month.'_04_2 + '.$this->month.'_05_2}}</td>
					<td class="total">{{'.$this->month.'_01_3 + '.$this->month.'_02_3 + '.$this->month.'_03_3 + '.$this->month.'_04_3 + '.$this->month.'_05_3}}</td>
					<td class="total">{{'.$this->month.'_01_4 + '.$this->month.'_02_4 + '.$this->month.'_03_4 + '.$this->month.'_04_4}}</td>
					<td class="total">{{'.$this->month.'_01_5 + '.$this->month.'_02_5 + '.$this->month.'_03_5 + '.$this->month.'_04_5}}</td>
					<td class="total">{{'.$this->month.'_01_6 + '.$this->month.'_02_6 + '.$this->month.'_03_6 + '.$this->month.'_04_6}}</td>
					<td class="total">{{'.$this->month.'_01_7 + '.$this->month.'_02_7 + '.$this->month.'_03_7 + '.$this->month.'_04_7}}</td>
					<td class="total">{{'.$this->month.'_01_1 + '.$this->month.'_01_2 + '.$this->month.'_01_3 + '.$this->month.'_01_4 + '.$this->month.'_01_5 + '.$this->month.'_01_6 + '.$this->month.'_01_7 + '.$this->month.'_02_1 + '.$this->month.'_02_2 + '.$this->month.'_02_3 + '.$this->month.'_02_4 + '.$this->month.'_02_5 + '.$this->month.'_02_6 + '.$this->month.'_02_7 + '.$this->month.'_03_1 + '.$this->month.'_03_2 + '.$this->month.'_03_3 + '.$this->month.'_03_4 + '.$this->month.'_03_5 + '.$this->month.'_03_6 + '.$this->month.'_03_7 + '.$this->month.'_04_1 + '.$this->month.'_04_2 + '.$this->month.'_04_3 + '.$this->month.'_04_4 + '.$this->month.'_04_5 + '.$this->month.'_04_6 + '.$this->month.'_04_7 + '.$this->month.'_05_1 + '.$this->month.'_05_2}}</td>
				</tr>
			</table>
			<div class="w3-col l2 m2 s0" style="opacity:0;float:right;"></div>
		</div>
	</div>';

	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class month28 
{
	// property declaration
    public $month;
	public $monthNumber;
    
	public function __construct($solution_array)
	{
		
		$this->month=$solution_array['month'];
		$this->monthNumber=$solution_array['monthNumber'];
		
		$this->content = '
		<div id="div_table_'.$this->month.'" class="w3-row">
			<div class="w3-col l2 m2 s0" style="opacity:0;float:left;">&nbsp;</div>
			<div class="w3-col l8 m8 s12 w3-center" style="float:left;">
			<table id="table_'.$this->monthNumber.'" class="w3-table-all w3-card-4 w3-center">
				<tr>
					<td class="rotate_2">חודש</td>
					<td id="days-weeks-'.$this->monthNumber.'" class="rotate">שבוע</td>
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>4</td>
					<td>5</td>
					<td>6</td>
					<td>7</td>
					<td>&Sigma;</td>
				</tr>
				
				<tr>
					<td id="month_'.$this->monthNumber.'" rowspan="11">'.$this->monthNumber.'</td>
					<td>#01</td>
					<td>
						01.'.$this->monthNumber.'
					</td>
					<td>
						02.'.$this->monthNumber.'
					</td>
					<td>
						03.'.$this->monthNumber.'
					</td>
					<td>
						04.'.$this->monthNumber.'
					</td>
					<td>
						05.'.$this->monthNumber.'
					</td>
					<td>
						06.'.$this->monthNumber.'
					</td>
					<td>
						07.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input id="in_1" type="number" ng-model="'.$this->month.'_01_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_01_7"></td>
					<td class="total">{{'.$this->month.'_01_1 + '.$this->month.'_01_2 + '.$this->month.'_01_3 + '.$this->month.'_01_4 + '.$this->month.'_01_5 + '.$this->month.'_01_6 + '.$this->month.'_01_7}}</td>
				</tr>
					
				<tr>
					<td>#02</td>
					<td>
						08.'.$this->monthNumber.'
					</td>
					<td>
						09.'.$this->monthNumber.'
					</td>
					<td>
						10.'.$this->monthNumber.'
					</td>
					<td>
						11.'.$this->monthNumber.'
					</td>
					<td>
						12.'.$this->monthNumber.'
					</td>
					<td>
						13.'.$this->monthNumber.'
					</td>
					<td>
						14.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_02_7"></td>
					<td class="total">{{'.$this->month.'_02_1 + '.$this->month.'_02_2 + '.$this->month.'_02_3 + '.$this->month.'_02_4 + '.$this->month.'_02_5 + '.$this->month.'_02_6 + '.$this->month.'_02_7}}</td>
				</tr>
				
				<tr>
					<td>#03</td>
					<td>
						15.'.$this->monthNumber.'
					</td>
					<td>
						16.'.$this->monthNumber.'
					</td>
					<td>
						17.'.$this->monthNumber.'
					</td>
					<td>
						18.'.$this->monthNumber.'
					</td>
					<td>
						19.'.$this->monthNumber.'
					</td>
					<td>
						20.'.$this->monthNumber.'
					</td>
					<td>
						21.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_03_7"></td>
					<td class="total">{{'.$this->month.'_03_1 + '.$this->month.'_03_2 + '.$this->month.'_03_3 + '.$this->month.'_03_4 + '.$this->month.'_03_5 + '.$this->month.'_03_6 + '.$this->month.'_03_7}}</td>
				</tr>
				
				<tr>
					<td>#04</td>
					<td>
						22.'.$this->monthNumber.'
					</td>
					<td>
						23.'.$this->monthNumber.'
					</td>
					<td>
						24.'.$this->monthNumber.'
					</td>
					<td>
						25.'.$this->monthNumber.'
					</td>
					<td>
						26.'.$this->monthNumber.'
					</td>
					<td>
						27.'.$this->monthNumber.'
					</td>
					<td>
						28.'.$this->monthNumber.'
					</td>
					<td></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_1"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_2"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_3"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_4"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_5"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_6"></td>
					<td>
						<input type="number" ng-model="'.$this->month.'_04_7"></td>
					<td class="total">{{'.$this->month.'_04_1 + '.$this->month.'_04_2 + '.$this->month.'_04_3 + '.$this->month.'_04_4 + '.$this->month.'_04_5 + '.$this->month.'_04_6 + '.$this->month.'_04_7}}</td>
				</tr>
								
				<tr>
					<td>סה"כ</td>
					<td class="total">{{'.$this->month.'_01_1 + '.$this->month.'_02_1 + '.$this->month.'_03_1 + '.$this->month.'_04_1 + '.$this->month.'_05_1}}</td>
					<td class="total">{{'.$this->month.'_01_2 + '.$this->month.'_02_2 + '.$this->month.'_03_2 + '.$this->month.'_04_2 + '.$this->month.'_05_2}}</td>
					<td class="total">{{'.$this->month.'_01_3 + '.$this->month.'_02_3 + '.$this->month.'_03_3 + '.$this->month.'_04_3 + '.$this->month.'_05_3}}</td>
					<td class="total">{{'.$this->month.'_01_4 + '.$this->month.'_02_4 + '.$this->month.'_03_4 + '.$this->month.'_04_4}}</td>
					<td class="total">{{'.$this->month.'_01_5 + '.$this->month.'_02_5 + '.$this->month.'_03_5 + '.$this->month.'_04_5}}</td>
					<td class="total">{{'.$this->month.'_01_6 + '.$this->month.'_02_6 + '.$this->month.'_03_6 + '.$this->month.'_04_6}}</td>
					<td class="total">{{'.$this->month.'_01_7 + '.$this->month.'_02_7 + '.$this->month.'_03_7 + '.$this->month.'_04_7}}</td>
					<td class="total">{{'.$this->month.'_01_1 + '.$this->month.'_01_2 + '.$this->month.'_01_3 + '.$this->month.'_01_4 + '.$this->month.'_01_5 + '.$this->month.'_01_6 + '.$this->month.'_01_7 + '.$this->month.'_02_1 + '.$this->month.'_02_2 + '.$this->month.'_02_3 + '.$this->month.'_02_4 + '.$this->month.'_02_5 + '.$this->month.'_02_6 + '.$this->month.'_02_7 + '.$this->month.'_03_1 + '.$this->month.'_03_2 + '.$this->month.'_03_3 + '.$this->month.'_03_4 + '.$this->month.'_03_5 + '.$this->month.'_03_6 + '.$this->month.'_03_7 + '.$this->month.'_04_1 + '.$this->month.'_04_2 + '.$this->month.'_04_3 + '.$this->month.'_04_4 + '.$this->month.'_04_5 + '.$this->month.'_04_6 + '.$this->month.'_04_7}}</td>
				</tr>
			</table>
			<div class="w3-col l2 m2 s0" style="opacity:0;float:right;"></div>
		</div>
	</div>';

	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class question
{
	// property declaration
    public $content;
	public $demoNumber;
    public $imgName;
    public $questionName;
    public $questionTag1;
    public $questionTag2;
    public $questionTag3;
    public $questionTag4;
	public $questionTag1Flag;
    public $questionTag2Flag;
    public $questionTag3Flag;
    public $questionTag4Flag;
    public $questionNumber;
    public $descriptionText;
    public $questionMathjax;
    public $questionAdImg;
    public $questionAdImgFlag;
    public $questionAdImgIframeFlag;
    public $views;
	
	public function __construct($solution_array)
	{
		
		$this->demoNumber=$solution_array['questionDemoNumber'];
		$this->descriptionText=$solution_array['questionDescriptionText'];
		
		$this->imgName=$solution_array['imgName'];
		$this->questionName=$solution_array['questionName'];
		$this->questionTag1=$solution_array['questionTag1'];
		$this->questionTag1Color=$solution_array['questionTag1Color'];
		$this->questionTag2=$solution_array['questionTag2'];
		$this->questionTag2Color=$solution_array['questionTag2Color'];
		$this->questionTag3=$solution_array['questionTag3'];
		$this->questionTag3Color=$solution_array['questionTag3Color'];
		$this->questionTag4=$solution_array['questionTag4'];
		$this->questionTag4Color=$solution_array['questionTag4Color'];
		$this->questionNumber=$solution_array['questionNumber'];
		$this->questionMathjax=$solution_array['questionMathjax'];
		$this->views=$solution_array['views'];
		
		$this->questionAdImgFlag=0;
		$this->questionAdImgIframeFlag=0;
		
		if(isset($solution_array['questionTag1']) && !empty($solution_array['questionTag1']))	
		{
			$this->questionTag1=$solution_array['questionTag1'];
			$this->questionTag1Flag=1;
		}
		
		if(isset($solution_array['questionTag2']) && !empty($solution_array['questionTag2']))	
		{
			$this->questionTag2=$solution_array['questionTag2'];
			$this->questionTag2Flag=1;
		}
		
		if(isset($solution_array['questionTag3']) && !empty($solution_array['questionTag3']))	
		{
			$this->questionTag3=$solution_array['questionTag3'];
			$this->questionTag3Flag=1;
		}
		
		if(isset($solution_array['questionTag4']) && !empty($solution_array['questionTag4']))	
		{
			$this->questionTag4=$solution_array['questionTag4'];
			$this->questionTag4Flag=1;
		}
				
		if(isset($solution_array['questionAdImg']) && !empty($solution_array['questionAdImg']))	
		{
			$this->questionAdImg=$solution_array['questionAdImg'];
			$this->questionAdImgFlag=1;
			
			//Iframe
			if(substr($this->questionAdImg,0,26) == '<div class="videoWrapper">')
			{
				$this->questionAdImgIframeFlag=1;
			}
		}
		
		$this->content = '
			<li class="w3-bar" onclick="myFunction(\'Demo'.$this->demoNumber.'\')" style="width:100%;">
				<div class="w3-rest">
					<div class="w3-bar-item w3-right">
						<span class="w3-large">'.$this->questionName.'</span>
						<p class="margin-bottom-0px">';
													
						$this->content.='</p>
						<span>'.$this->descriptionText.'</span>
					</div>
				</div>';
				
				if($this->questionAdImgIframeFlag)
				{
					$this->content.='<div class="w3-container w3-hide Demo'.$this->demoNumber.' no-padding">';
				}
				else
				{
					$this->content.='<div class="w3-container w3-hide Demo'.$this->demoNumber.'">';
				}
			    
				$this->content.='<div style="width:75%;margin:auto;">
						<hr style="margin:6px;">
					</div>';
					
					if($this->questionAdImgFlag)
					{
						//$this->content.=$this->questionMathjax.'<img src='.$this->questionAdImg.' style="width:100%;" /></div></li>';
						$this->content.=$this->questionMathjax.$this->questionAdImg.'</div></li>';
					}
					else
					{
						$this->content.=$this->questionMathjax.'</div></li>';
					}
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class documentHeader
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
			<!DOCTYPE html>
<html lang="iw">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148580909-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \'UA-148580909-1\');
</script>

<!-- FAVICON --><!-- OUTPUT 01_NOT NUMBERED -->
<link rel="icon" type="image/png" href="../css/favicon.ico">

<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
<link rel="apple-touch-icon" sizes="16x16" href="../css/favicon-16x16.png" />
<link rel="apple-touch-icon" sizes="32x32" href="../css/favicon-32x32.png" />
<link rel="apple-touch-icon" sizes="192x192" href="../css/android-chrome-192x192.png" />
<link rel="apple-touch-icon" sizes="512x512" href="../css/android-chrome-512x512.png" />
<link rel="apple-touch-icon" href="../css/apple-touch-icon.png" />

<!-- Encoding -->
<meta charset="utf-8">
	
<title>הפלגות ישראל</title>
<meta name="description" content="בואו לפרסם ולהצטרף להפלגות.">
<meta name="keywords" content="הפלגות, הפלגות לקפריסין, הפלגות מקפריסין, הצטרפות להפלגה, הפלגות ליוון, הפלגות מיוון, הפלגות לתורכיה, הפלגות מתורכיה, הפלגות לאיטליה, הפלגות מאיטליה, הפלגות לצרפת, הפלגות מצרפת, הפלגות לישראל, הפלגות מישראל">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="css/w3css_4_w3.css">
<!-- JQUERY --><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="questionJs/questions.js"></script>
<!-- MATHJAX --><script src=\'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML\' async></script>
<!-- MATH LATEX SYNTAX: https://en.wikibooks.org/wiki/LaTeX/Mathematics -->
<!-- MATHJAX SYNTAX: https://docs.mathjax.org/en/latest/start.html -->
<link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- EMOJI CSS --><link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
</head>

<body>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large" style="text-align:right;">&times; סגירה</button>
  
  <div class="w3-bar-item w3-button" style="text-align:right;"><b>הפלגות יוצאות</b></div>
  <a href="../questions/index.php" class="w3-bar-item w3-button" style="text-align:right;">לקפריסין</a>
  <a href="../questions_01/index.php" class="w3-bar-item w3-button" style="text-align:right;">לתורכיה</a>
  <a href="../questions_02/index.php" class="w3-bar-item w3-button" style="text-align:right;">ליוון</a>
  <a href="../questions_03/index.php" class="w3-bar-item w3-button" style="text-align:right;">לצרפת</a>
  <a href="../questions_04/index.php" class="w3-bar-item w3-button" style="text-align:right;">לאיטליה</a>
  
  <div class="w3-bar-item w3-button" style="text-align:right;"><b>הפלגות נכנסות</b></div>
  <a href="../questions_05/index.php" class="w3-bar-item w3-button" style="text-align:right;">מקפריסין</a>
  <a href="../questions_06/index.php" class="w3-bar-item w3-button" style="text-align:right;">מתורכיה</a>
  <a href="../questions_07/index.php" class="w3-bar-item w3-button" style="text-align:right;">מיוון</a>
  <a href="../questions_08/index.php" class="w3-bar-item w3-button" style="text-align:right;">מצרפת</a>
  <a href="../questions_09/index.php" class="w3-bar-item w3-button" style="text-align:right;">מאיטליה</a>
  
  <div class="w3-bar-item w3-button" style="text-align:right;"><b>הצטרפות להפלגה יוצאת</b></div>
  <a href="../questions_10/index.php" class="w3-bar-item w3-button" style="text-align:right;">לקפריסין</a>
  <a href="../questions_11/index.php" class="w3-bar-item w3-button" style="text-align:right;">לתורכיה</a>
  <a href="../questions_12/index.php" class="w3-bar-item w3-button" style="text-align:right;">ליוון</a>
  <a href="../questions_13/index.php" class="w3-bar-item w3-button" style="text-align:right;">לצרפת</a>
  <a href="../questions_14/index.php" class="w3-bar-item w3-button" style="text-align:right;">לאיטליה</a>
  
  <div class="w3-bar-item w3-button" style="text-align:right;"><b>הצטרפות להפלגה נכנסת</b></div>
  <a href="../questions_15/index.php" class="w3-bar-item w3-button" style="text-align:right;">מקפריסין</a>
  <a href="../questions_16/index.php" class="w3-bar-item w3-button" style="text-align:right;">מתורכיה</a>
  <a href="../questions_17/index.php" class="w3-bar-item w3-button" style="text-align:right;">מיוון</a>
  <a href="../questions_18/index.php" class="w3-bar-item w3-button" style="text-align:right;">מצרפת</a>
  <a href="../questions_19/index.php" class="w3-bar-item w3-button" style="text-align:right;">מאיטליה</a>
</div>

<!-- Page Content -->
<div class="w3-blue">
  <button class="w3-button w3-blue w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container w3-center">
    <h1 style="margin-top:0px;">הפלגות ישראל</h1>
  </div>
</div>
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class subjectHeader
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct($subjectName)
	{
		$this->content = '
		
<div class="w3-container w3-center">
  <h2 style="margin-top:10px;">'.$subjectName.'</h2>
</div>

<div class="w3-row w3-container w3-center">
    <div class="w3-card-4 w3-col l3 m2 s0 w3-center" style="opacity:0;float:right;">&nbsp;</div>

		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class middlePart
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '
    
	<div class="w3-col l6 m8 s12 w3-center" style="float:right;">
		<ul id="div1" class="w3-ul w3-card-4">
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class listBeforeFooter
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct()
	{
		$this->content = '</ul>';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}

class footer
{
	// property declaration
    // none
	
	// method declaration
	// none
	
	public function __construct($indexPage = null, $indexSailing = null)
	{
		$this->content = '
			<li class="w3-bar" onclick="myFunction(\'Demo5\')" style="width:100%;background-color:buttonface;">
				<div class="w3-bar-item w3-right"';
			if($indexSailing == 1)
			{
				$this->content.='<span class="w3-large">הוספת הפלגה</span><br>';
			}
			else
			{
				$this->content.='<span class="w3-large">הצטרפות להפלגה</span><br>';
			}
			
			$this->content.='</div>
			</li>
			
			<li class="w3-bar w3-hide Demo5" style="width:100%;">
				<div class="w3-container w3-teal">
					<h4 style="margin-top:10px;">הוספה</h4>
				</div>
				
				<form class="w3-container w3-card-4">
					<p class="align-right margin-bottom-0px">      
						<label class="w3-text-grey margin-bottom-0px margin-top-5px">העלאת תמונה</label>
						<p class="align-right margin-bottom-0px">התמונה צריכה לכלול את הפרטים הבאים:</p>';
						
						if($indexSailing == 1)
						{
							$this->content.='<img src="../questions_01/questionPics/00 (1).jpg" style="width:100%;"/>';
						}
						else
						{
							$this->content.='<img src="../questions_01/questionPics/00 (2).jpg" style="width:100%;"/>';
						}
						
						$this->content.='
						<p class="align-right margin-bottom-0px">לאחר העלאת התמונה היא תאושר ותפורסם עד סוף אותו היום.</p>
						<!-- FORM 01 -->
						<table style="width:100%;margin:auto;border-collapse:collapse;direction:ltr;">
							<tr style="width:100%;">
								<td style="width:100%;text-align:left;">
									<input class="w3-input" type="file" name="file_01" id="file_01" style="display:inline;padding-right:0px;">
								</td>
							</tr>
							<tr style="width:100%;">
								<td style="width:100%;text-align:left;">
									<input class="w3-input" type="button" value="Upload File" onclick="uploadFile_01()" style="display:inline;margin-top:2px;">
									<input class="w3-input" type="button" value="Cancel" id="cancel" style="display:inline;margin-top:2px;">
								</td>
							</tr>
							<tr>
								<td style="width:100%;text-align:left;direction:ltr;">
									<!-- PROGRESS BAR -->
									<progress style="vertical-align:top;width:100%;float:right;" id="progressBar_01" value="0" max="100"></progress>
									<h3 class="w3-input" id="status_01" style="width:100%;direction:ltr;font-size:14px;"></h3>
									<p class="w3-input" id="loaded_n_total_01" style="display:none;"></p> 
								</td>
							</tr>
						</table>
					</p>
				</form>
			</li>
		</ul>
	</div>
</div>
<div class="w3-card-4 w3-col l3 m2 s0 w3-center" style="opacity:0;float:right;">&nbsp;</div>

<div id="disqus_thread" style="padding:10px;margin-top:20px;"></div>
<script>

	/**
	*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
	
	var disqus_config = function () {
	this.page.url = \'http://sailing.explainit.online\';  // Replace PAGE_URL with your page\'s canonical URL variable
	this.page.identifier = \'Index\'; // Replace PAGE_IDENTIFIER with your page\'s unique identifier variable
	};
	
	(function() { // DON\'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement(\'script\');
	s.src = \'https://www-sailing-explainit-online.disqus.com/embed.js\';
	s.setAttribute(\'data-timestamp\', +new Date());
	(d.head || d.body).appendChild(s);
	})();
</script>

<script>
$(document).ready(function(){';
	
	if(isset($indexPage)&&!empty($indexPage))
	{
		$this->content.='$("#button01").css("background-color","#009688").css("color","white");';
	}
	
	$this->content.='$("#button01").click(function(){
	$(this).css("background-color","#009688").css("color","white");
	$("#button02").css("background-color","white").css("color","black");
	$("#button03").css("background-color","white").css("color","black");
	$("#button04").css("background-color","white").css("color","black");
	
    $.ajax({url: "solution/solution_01.php", success: function(result){
      $("#div2").html(result);
	  
		$.ajax({url: "questions/questions_01.php", success: function(result){
			 $("#div1").html(result);
		}});
	}});
  });
  
  $("#button02").click(function(){
	$(this).css("background-color","#009688");
	$(this).css("color","white");
	$("#button01").css("background-color","white").css("color","black");
	$("#button03").css("background-color","white").css("color","black");
	$("#button04").css("background-color","white").css("color","black");
	
	$.ajax({url: "solution/solution_02.php", success: function(result){
      $("#div2").html(result);
	  
		$.ajax({url: "questions/questions_02.php", success: function(result){
			 $("#div1").html(result);
		}});
	}});
  });
  
  $("#button03").click(function(){
	$(this).css("background-color","#009688");
	$(this).css("color","white");
	$("#button01").css("background-color","white").css("color","black");
	$("#button02").css("background-color","white").css("color","black");
	$("#button04").css("background-color","white").css("color","black");
	
    $.ajax({url: "solution/solution_03.php", success: function(result){
      $("#div2").html(result);
	  
		$.ajax({url: "questions/questions_03.php", success: function(result){
			 $("#div1").html(result);
		}});
	}});
  });
  
  $("#button04").click(function(){
	$(this).css("background-color","#009688");
	$(this).css("color","white");
	$("#button01").css("background-color","white").css("color","black");
	$("#button02").css("background-color","white").css("color","black");
	$("#button03").css("background-color","white").css("color","black");
	
    $.ajax({url: "solution/solution_04.php", success: function(result){
      $("#div2").html(result);
	  
		$.ajax({url: "questions/questions_04.php", success: function(result){
			 $("#div1").html(result);
		}});
	}});
  });
});
</script>

<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</body>
</html>           
		';
	}
	
	// method declaration
    public function displayContent() 
	{
        echo $this->content;
    }
}
