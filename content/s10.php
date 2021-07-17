<?php
//SESSION
session_start();

//ERRORS
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

//HTTPS
if ($_SERVER["HTTPS"] != "on") {
	header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
	exit();
}

//VARS
$_SESSION['count'] = 0;
$_SESSION['wl'] = 0;
$_SESSION['v_wait'] = 0;

include 'indexHeader.php';
include '../ex/am/ple/yacht/structure.php';

?>

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
		var a_11_loader = $(document.body).outerWidth() / 2 - 60;

		//debugging
		//console.log("window width: ",$(window).outerWidth());
		//console.log("width from left: ",a_11);

		// setting height variable
		var a_12_loader = $(window).outerHeight() / 2 - 60;

		//console.log("window height: ",$(window).outerHeight());
		//console.log("height from top: ",a_12_loader);

		// setting height and width
		$('.loader').css("left", a_11_loader);
		$('.loader').css("top", a_12_loader);
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
			<a href="example_cleveland.php">
				<div style="margin:2px 0px 1px 0px;padding:0px 2px;border:1px black solid;float:right;">הרשמה</div>
			</a>
			<a href="example_cleveland_l.php">
				<div style="margin:2px 2px 1px 0px;padding:0px 2px;border:1px black solid;float:right;">התחברות</div>
			</a>
		</div>

		<!-- HEADER -->
		<div id="div_table_drills" style="text-align:center;float:right;">
			<!-- TEXT -->
			<h2 id="n">ברוכים הבאים!</a>

				<div id="div_header_py"></div>
				
				<!-- HORIZONTAL LINE -->
				<hr>

				<!-- DATE -->
				<h3 id="div_header_p"><?php echo date("d/m/Y"); ?></h3>

				<!-- HORIZONTAL LINE -->
				<hr>
		</div>

		<!-- DRILLS TABLE -->
		<div id="div_table_drills" style="text-align:center;float:right;">
			<!-- DRILLS 1ST LINE -->
			<table style="width:100%;">
				<tr>
					<th colspan="11">
						<h3 style="margin:5px auto;"><u>תרגילים</u></h3>
					</th>
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
					<th colspan="11">
						<h3 style="margin:5px auto;"><u>תדירות</u></h3>
					</th>
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
		<footer id="footer_1" style="float:right;clear:both;text-align:center;">

			<!-- Include site_navigation model -->
			<?php include 'site_navigation.php'; ?>

			<!-- REAL DRILL DATA -->
			<div id="real_time_py" style="float:right;clear:both;padding:4px;text-align:center;width:100%;">
				<h2 style="margin-bottom:0px;"><u>פסיכומטרי</u></h2>
				<h2 id="py_num" style="margin-top:0px;"></h2>
			</div>

			<!-- REAL DRILL DATA -->
			<div id="real_time" style="float:right;clear:both;padding:4px;text-align:center;">
				<h2 style="margin-bottom:0px;"><u>מתמטיקה</u></h2>
				<h2 id="M_num" style="margin-top:0px;"></h2>
			</div>

			<div id="real_time_p" style="float:right;clear:both;padding:4px;text-align:center;">
				<a id="example-link" style="text-decoration:none;" href="https://lior.explainit.online">פרופיל לדוגמה</a>
				<h2 style="margin-bottom:0px;"><u>פיזיקה</u></h2>
				<h2 id="p_num" style="margin-top:0px;"></h2>
			</div>

			<!-- NEW LINE -->
			<br>
		</footer>
	</div><!-- CONTENT -->

	<div id="disqus_thread"></div>
	<script>
		/**
		 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

		var disqus_config = function() {
			this.page.url = 'https://www.practiceit.xyz/s1/s8_f/s10.php'; // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = 'practiceitIndex'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		};

		(function() { // DON'T EDIT BELOW THIS LINE
			var d = document,
				s = d.createElement('script');
			s.src = 'https://https-www-practiceit-xyz.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
		})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


	<!-- Funcs -->
	<script>
		<!-- cl script cl.js 
		-->
		function
		cl(str, variable)
		{
		console.log(str, variable);
		}

	<!-- a_11_f script -->
	// loader window resize function
	function a_11_f()
	{
	console.log("---a 11 f")

	var a_11_loader = $(document.body).outerWidth()/2-60;
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
	var p_once=0;
	var py_once=0;

	<?php

	$getDrillsDataForHomePageMath = new getDrillsDataForHomePageMath();
	$getDrillsDataForHomePageMath->displayContent();

	$getDrillsDataForHomePage = new getDrillsDataForHomePage('p');
	$getDrillsDataForHomePage->displayContent();

	$getDrillsDataForHomePage = new getDrillsDataForHomePage('py');
	$getDrillsDataForHomePage->displayContent();
	?>
	// setting Timeout
	setTimeout(function(){ $("#n").click(); }, 1000);
	setTimeout(function(){ $("#div_header_p").click(); }, 1000);
	setTimeout(function(){ $("#div_header_py").click(); }, 1000);

	//debugging
	//console.log("d_once outside",d_once);
	//console.log("c_once outside",c_once);

	setTimeout(function(){$("#nam_15").css("padding","0px");}, 2000);
	setTimeout(function(){$("#nam_p_15").css("padding","0px");}, 2000);
	setTimeout(function(){$("#nam_py_15").css("padding","0px");}, 2000);

	setTimeout(function(){$("#wrapper_1" ).find(".ribbon_2").html('97');}, 2000);
	setTimeout(function(){$("#wrapper_1" ).find(".ribbon_2").css("padding","4px");}, 2000);

	setTimeout(function(){$("#main_wrapper_p_1").find("#wrapper_1").find(".ribbon_2").html('95');}, 2000);
	setTimeout(function(){$("#main_wrapper_p_1").find("#wrapper_1").find(".ribbon_2").css("padding","4px");}, 2000);

	setTimeout(function(){$("#main_wrapper_py_1").find("#wrapper_1").find(".ribbon_2").html('95');}, 2000);
	setTimeout(function(){$("#main_wrapper_py_1").find("#wrapper_1").find(".ribbon_2").css("padding","4px");}, 2000);

	//opacity for loader
	$('#div_header_p, #div_header_py, #div_1, #div_table_drills, #div_table_drills_2, #hr_number_1, #footer_1, #new_comment, #new_comment_2, #new_comment_form').animate({opacity:1},1000);
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