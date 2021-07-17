<!-- COMMENTS MODULE -->
	<script>
	var result_text = {
			by_number : 'Top 3',
			by_date : '',
			by_popularity : '',
			by_accordance : '',
			by_users : ''
		}; 
			
		// debugging
		// console.log('result_text:',result_text);
	
	var result_text_2 = {
			by_number : '3',
			by_date : '',
			by_popularity : '',
			by_accordance : '',
			by_users : ''
		}; 
	
		// debugging
		// console.log('result_text_2:',result_text_2);
	
	var order_by = {
			first : {},
			second : {},
			third : {}
		}; 
		
		// debugging
		// console.log('order_by:',order_by);
	
	var order_by_2 = {
			first : {},
			second : {},
			third : {}
		}; 
			
		// debugging
		// console.log('order_by_2:',order_by_2);
	
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
			
		// debugging
		// console.log('Order_by_levels:',order_by_levels);
	
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
			
		// debugging
		// console.log('Result_text_levels:',result_text_levels);
	
	/* When the user clicks on the button,
	toggle between hiding and showing the dropdown content */
	function myFunction() 
	{
		document.getElementById("myDropdown").classList.toggle("show");
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

