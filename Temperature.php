<?php include('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title> Temperature </title>
	<meta charset="UTF-8">
	 
	 <script src="Temperature.js" type="text/javascript"></script>
	
	</head>
	
	<body>
	
	<form name="conversion">
	
	<p>Enter the Temperature(XXXX,XX) : <INPUT type=text name="ftoc" size=7 maxlength=7> °C   
	<INPUT type=button value="Convert in °F" onClick= "alert('The temperature is ' + celsiusToFahrenheit(this.form.ftoc.value)+' °F')"></p>
	<p>Enter the Temperature(XXXX,XX) : <INPUT type=text name="ctof" size=7 maxlength=7> °F     
	<INPUT type=button value="Convert in °C" onClick= "alert('The temperature is ' + celsiusToFahrenheit(this.form.cto.value)+' °C')"></p>
	</form>
	
	</body>
	</html>