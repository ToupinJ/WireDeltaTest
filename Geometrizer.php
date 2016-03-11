<?php include('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title> Geometrizer </title>
	<meta charset="UTF-8">
	 
	 <script src="Geometrizer.js" type="text/javascript"></script>
	
	</head>
	
	<body>
	
	<form name="circum">
	
	<p>Enter the radius(XX) : <INPUT type=text name="radius" size=8 maxlength=8></br>
	<INPUT type=button value="Calcul the circumference" onClick= "alert('The circumference is ' + calcCircumfrence(this.form.radius.value))">
	<input type=button value="Calcul the area of the circle" onClick= "alert('The area is '+calcArea(this.form.radius.value))"></br>
	
	</form>
	
	</body>
	</html>
	