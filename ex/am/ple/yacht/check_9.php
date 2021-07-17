<!--
	<h4 id="header_4" style="margin:2px;"><u>רשימות</u></h4>
	<textarea rows="10" id="next_lesson" style="width:100%;margin-top:4px;color:black;padding:4px;"></textarea>
-->

<script>
var app = angular.module('app_1', []);

app.controller('controller_1', function($scope,$http) {
  		
		//setting initial values	
		$http.get("check_1.php").then(function(response){
			
			<?php
				
				$getResponseAndSetScopeVars = new getResponseAndSetScopeVars();
				$getResponseAndSetScopeVars->displayContent();
			
			?>
			
		});
		
		$scope.d=[10, 20, 30, 40];
		$scope.daily_expense_1=0;
		
		//Physics func
		
		$scope.GetAllData = function () {
           			
			$http.get('check_1_p.php')
            .then(function (response, status, headers, config) {
                $scope.Details = response;
				console.log(response);
				
				<?php
					
					$getResponseAndSetScopeVars = new getResponseAndSetScopeVars();
					$getResponseAndSetScopeVars->displayContent();
				
				?>
            })
        };
		
		//Math func
		
		$scope.GetAllData_M = function () {
            $http.get('check_1.php')
            .then(function (response, status, headers, config) {
                $scope.Details = response;
				console.log(response);
				
				<?php
				
					$getResponseAndSetScopeVars = new getResponseAndSetScopeVars();
					$getResponseAndSetScopeVars->displayContent();
				
				?>
            })
        };
		
		//Py func
		
		$scope.GetAllData_Py = function () {
            $http.get('check_1_py.php')
            .then(function (response, status, headers, config) {
                $scope.Details = response;
				console.log(response);
				
				<?php
				
					$getResponseAndSetScopeVars = new getResponseAndSetScopeVars();
					$getResponseAndSetScopeVars->displayContent();
				
				?>
            })
        };
});
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


//RESETING INPUT COLOR
function inputBackgroundReset()
{
	$('table input').each(function(index)
	{
		var input = $(this);
		
		if(input.parent().css("background-color") == "orange")
		{
			input.parent().css( "background-color", "initial" );
			input.parent().css( "border", "none" );
		}
		
		
	});
}
//CHANGING INPUT COLOR END


//CHANGING INPUT COLOR
function inputBackground()
{
	$('table input').each(function(index)
	{
		var input = $(this);
		
		if(input.val()!=0)
		{
			//alert('Type: ' + input.attr('type') + 'Name: ' + input.attr('name') + 'Value: ' + input.val());
		
			input.parent().css( "background-color", "orange" );
			input.parent().css( "border", "0.5px black solid" );
		}
		
		
	});
}
//CHANGING INPUT COLOR END

</script>

<script>
$(document).ready(function()
{
	$("#tot").animate({opacity: 1}, 1000);
	
	<?php
		
		$monthToShowOnHover = new monthToShowOnHover();
		$monthToShowOnHover->displayContent();
		
	?>
	
//MORE STUFF	
	$("#header_1").addClass("M");
	
	$("#div_M").click(function(){
		$("#header_1").removeClass("P");
		$("#header_1").removeClass("Py");
		$("#header_1").addClass("M");
		$("#header_2").click();
		
		$("#div_M").css("background-color","green").css("color","white");
		$("#div_P").css("background-color","").css("color","black");
		$("#div_Py").css("background-color","").css("color","black");
		
		$("#a_div_M").css("background-color","green").css("color","white");
		$("#a_div_P").css("background-color","").css("color","black");
		$("#a_div_Py").css("background-color","").css("color","black");
		
		setTimeout(function() 
		{ 
			$('table input').each(function(index)
			{
				var input = $(this);
				
				if(input.val()!=0)
				{
					input.parent().css( "background-color", "orange" );
					input.parent().css( "border", "0.5px black solid" );
				}
				else
				{
					input.parent().css( "background-color", "" );
					input.parent().css( "border", "none" );
				}
			});
		}, 50);
	});
	
	
	$("#div_P").click(function(){
		$("#header_1").removeClass("M");
		$("#header_1").removeClass("Py");
		$("#header_1").addClass("P");
		$("#header_2").click();
		
		$("#div_P").css("background-color","purple").css("color","white");
		$("#div_M").css("background-color","").css("color","black");
		$("#div_Py").css("background-color","").css("color","black");
		
		$("#a_div_P").css("background-color","purple").css("color","white");
		$("#a_div_M").css("background-color","").css("color","black");
		$("#a_div_Py").css("background-color","").css("color","black");

		setTimeout(function() 
		{ 
			$('table input').each(function(index)
			{
				var input = $(this);
				
				if(input.val()!=0)
				{
					input.parent().css( "background-color", "orange" );
					input.parent().css( "border", "0.5px black solid" );
				}
				else
				{
					input.parent().css( "background-color", "" );
					input.parent().css( "border", "none" );
				}
			});
		}, 50);
	});
	
	$("#div_Py").click(function(){
		$("#header_1").removeClass("M");
		$("#header_1").removeClass("P");
		$("#header_1").addClass("Py");
		$("#header_2").click();
		
		$("#div_Py").css("background-color","purple").css("color","white");
		$("#div_P").css("background-color","").css("color","black");
		$("#div_M").css("background-color","").css("color","black");
		
		$("#a_div_Py").css("background-color","purple").css("color","white");
		$("#a_div_P").css("background-color","").css("color","black");
		$("#a_div_M").css("background-color","").css("color","black");

		setTimeout(function() 
		{ 
			$('table input').each(function(index)
			{
				var input = $(this);
				
				if(input.val()!=0)
				{
					input.parent().css( "background-color", "orange" );
					input.parent().css( "border", "0.5px black solid" );
				}
				else
				{
					input.parent().css( "background-color", "" );
					input.parent().css( "border", "none" );
				}
			});
		}, 50);
	});
	
	$("#div_M").click();
		
	$("#header_1").click(function(){
		var scope = angular.element("#div_1").scope();
			
			console.log(scope.daily_expense_1);
			
			<?php
				
				$setVarsForResponse = new setVarsForResponse();
				$setVarsForResponse->displayContent();
				
			?>
		
		};
		
		var data_1_js = JSON.stringify(data_1);
		
		//ajax request
		var className = $('#header_1').attr('class');
		//alert (className);
		if (className == "M")
		{
			$.ajax
			({
				url: 'check_2.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				data: {'Y_n': data_1_js}
			}).done(function(result)
			{
				//$("#container").html(result);
				//var result_1 = JSON.parse(result);
				//console.log(result_1);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				
				// debugging
				//var result_1 = JSON.parse(result);
				//console.log("3:",result_1);
				
				// notifying
				alert("העדכון עבר בהצלחה");
				
				setTimeout(function() 
				{ 
					$('table input').each(function(index)
					{
						var input = $(this);
						
						if(input.val()!=0)
						{
							input.parent().css( "background-color", "orange" );
							input.parent().css( "border", "0.5px black solid" );
						}
						else
						{
							input.parent().css( "background-color", "" );
							input.parent().css( "border", "none" );
						}
					});
				}, 300);
			});
		}
		if (className == "P")
		{
			$.ajax
			({
				url: 'check_2_p.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				data: {'Y_n': data_1_js}
			}).done(function(result)
			{
				//$("#container").html(result);
				//var result_1 = JSON.parse(result);
				//console.log(result_1);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				
				// debugging
				//var result_1 = JSON.parse(result);
				//console.log("3_p:",result_1);
				
				// notifying
				alert("העדכון עבר בהצלחה");
				
				setTimeout(function() 
				{ 
					$('table input').each(function(index)
					{
						var input = $(this);
						
						if(input.val()!=0)
						{
							input.parent().css( "background-color", "orange" );
							input.parent().css( "border", "0.5px black solid" );
						}
						else
						{
							input.parent().css( "background-color", "" );
							input.parent().css( "border", "none" );
						}
					});
				}, 300);
			});
		}
		
		if (className == "Py")
		{
			$.ajax
			({
				url: 'check_2_py.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				data: {'Y_n': data_1_js}
			}).done(function(result)
			{
				//$("#container").html(result);
				//var result_1 = JSON.parse(result);
				//console.log(result_1);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				
				// debugging
				//var result_1 = JSON.parse(result);
				//console.log("3_p:",result_1);
				
				// notifying
				alert("העדכון עבר בהצלחה");
				
				setTimeout(function() 
				{ 
					$('table input').each(function(index)
					{
						var input = $(this);
						
						if(input.val()!=0)
						{
							input.parent().css( "background-color", "orange" );
							input.parent().css( "border", "0.5px black solid" );
						}
						else
						{
							input.parent().css( "background-color", "" );
							input.parent().css( "border", "none" );
						}
					});
				}, 300);
			});
		}
});
	
	//opacity for loader
	$('#div_1,.w3-row,.w3-sidebar').animate({opacity:1},1000);
	$('.loader').css ("display","none");
	
	$("#header_2").click(function(){
		//var scope = angular.element("#div_1").scope();
		//console.log(scope.daily_expense_1);
				
		//ajax request
		var className = $('#header_1').attr('class');
		//alert (className);
		if (className == "M")
		{
			$.ajax
			({
				url: 'check_3.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				
			}).done(function(result)
			{
				//$("#container").html(result);
				
				var result_1 = JSON.parse(result);
				$("#stuff").val(result_1["Stuff"]);
				//console.log(result_1["Stuff"]);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				//scope.daily_income_1 = Number(result_1["Daily_IN_1"]);
				console.log($("#tot").html());
			});
		}
		if (className == "P")
		{
			$.ajax
			({
				url: 'check_3_p.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				
			}).done(function(result)
			{
				//$("#container").html(result);
				
				var result_1 = JSON.parse(result);
				$("#stuff").val(result_1["Stuff"]);
				//console.log(result_1["Stuff"]);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				//scope.daily_income_1 = Number(result_1["Daily_IN_1"]);
				console.log($("#tot").html());
			});
		}
		if (className == "Py")
		{
			$.ajax
			({
				url: 'check_3_py.php',
				type: 'POST',
				//data: {'Y_n': data_1_js,
				//		'Number_0': num}
				
			}).done(function(result)
			{
				//$("#container").html(result);
				
				var result_1 = JSON.parse(result);
				$("#stuff").val(result_1["Stuff"]);
				//console.log(result_1["Stuff"]);
				//var load_1 = JSON.parse(result);
				//console.log(load_1);
				//scope.daily_income_1 = Number(result_1["Daily_IN_1"]);
				console.log($("#tot").html());
			});
		}
	});
	$("#header_2").click();
	
	setTimeout(inputBackground, 1000);

	
});
</script>

<script>
$( window ).resize(function() 
{
  	//loader
	a_11_f();
	
});
</script>