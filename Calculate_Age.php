<?php include('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> Calcul your age </title>
	<meta charset="UTF-8">
	
	<script src="Calculate_Age.js" type="text/javascript"></script> 
	
	</head>
	
	<body>
		<FORM name="Calculation">
		<p>Enter your birth year (YYYY) : <INPUT type=text name="bh_year" size=4 maxlength=4></br>
		</p>
		<INPUT type=button value="Calcul your age" onClick= "alert('You are either '+(calculateAge2(this.form.bh_year.value)-1)+' or '+(calculateAge2(this.form.bh_year.value))+' years old' )"></br>
		</FORM>
		
		<div >For example</br>
		
			If you are born in 1994. Now you are either <a id="age2"></a> or <a id="age1"/></a>.</br>
			If you are born in 2000. Now you are either <a id="age4"></a> or <a id="age3"/></a>.</br>
			If you are born in 2012. Now you are either <a id="age5"></a> or <a id="age6"/></a>.</br>
		</div>
	
	<script type="text/javascript">
		
        document.getElementById("age1").innerHTML = calculateAge(1994,2016);
		document.getElementById("age2").innerHTML = calculateAge(1994,2016)-1;
		document.getElementById("age3").innerHTML = calculateAge(2000,2016);
		document.getElementById("age4").innerHTML = calculateAge(2000,2016)-1;
		document.getElementById("age5").innerHTML = calculateAge(2012,2016)-1;
		document.getElementById("age6").innerHTML = calculateAge(2012,2016);
	
	</script>

</body>

</html>