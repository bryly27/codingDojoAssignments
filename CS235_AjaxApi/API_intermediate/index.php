<html>
<head>
	<title></title>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	  <script type="text/javascript">
	  	$(document).ready(function(){
	  		$('form').submit(function(){
	  			// console.log(dojo.data);
	  			$.get(

	  				$(this).attr('action')+'?callback=?', 
	  				$(this).serialize(), 
	  				function(dojo){
	  				var city = dojo.data.request[0].query;
	  				var tempF = dojo.data.current_condition[0].temp_F;
	  				var tempC = dojo.data.current_condition[0].temp_C;
	  				var windspeed = dojo.data.current_condition[0].windspeedMiles;
	  				var weather = dojo.data.current_condition[0].weatherDesc[0].value;
	  				$('#forecast').html('<h1>Weather for: '+city+'</h1>');
	  				$('#forecast').append('<p>Current temp F: '+tempF+ ' degrees</p>');
	  				$('#forecast').append('<p>Current temp C: '+tempC+ ' degrees</p>');
	  				$('#forecast').append('<p>Current Windspeed: '+windspeed+ 'mph</p>');
	  				$('#forecast').append('<p>Weather Description: '+weather+ '</p>');



		  			},'json');
	  			return false;
		  	});
	  	
	  	});
	  </script>
</head>
<body>
	<form action='http://api.worldweatheronline.com/free/v2/weather.ashx' method='get'>
		<select name='q'>
			<option value='Mountain+view'>Mountain View</option>
			<option value='Seattle'>Seattle</option>
			<option value='Houston'>Houston</option>
			<option value='Oakland'>Oakland</option>
		</select>
		<input type='hidden' name='key' value='995cf084c8f8681b43f6e795a5ea1'>
		<input type='hidden' name='format' value='json'>
		<input type='submit' value='get weather!'>
	</form>
	<div id='forecast'>

	</div>
</body>
</html>