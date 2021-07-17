<!DOCTYPE html>
<html lang="iw" dir="rtl">
<!-- srcs -->
	<!-- w3schools jquery ajax -->
	<!-- https://www.w3schools.com/jquery/jquery_ajax_load.asp -->
	<!-- w3schools jquery ajax php post -->
	<!-- https://www.w3schools.com/jquery/jquery_ajax_get_post.asp -->
	<!-- jquery change innerHtml -->
	<!-- https://stackoverflow.com/questions/1309452/how-to-replace-innerhtml-of-a-div-using-jquery -->
	<!-- php variable syntax -->
	<!-- https://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php -->
<head>
<!-- Encoding -->
<meta charset="utf-8">
<!-- Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<!-- Link -->
	<!-- Styling-->
	<link rel="stylesheet" href="2.css" media="screen" />
		<!-- Carousel, tooltip & Image Gallery -->
		<link rel="stylesheet" href="3.css" media="screen" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
<center>
<button id="button_1"></button>
<div id="div_1"></>
</center>
<script>
$("#button_1").click(function(){
    $.post("metal_1.php",{
	string_1:"text"	,
	number_1:"12"	,
	},
    function(data, status){
        $("#div_1").html(data);
		$("#p_1").click(function(){
		alert ("ok");
		});
		$("#p_2").click(function(){
		alert ("ok 2");
		});
	});
});
</script>
</body>
</html>