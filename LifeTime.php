<?php include('base.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title> THE LIFETIME SUPPLY CALCULATOR  </title>
	<meta charset="UTF-8">
	 
	 <script src="LifeTime.js" type="text/javascript"></script>
	
	</head>
	<body>
	
	<FORM name="Death">
		<p>Enter your Age (XX) : <INPUT type=text name="age" size=2 maxlength=2></br>
		   Enter your Amount Per day(XX) : <INPUT type=text name="amountPerDay" size=2 maxlength=2></br>
		</p>
		
		<INPUT type=button value="LifetimeSupply" onClick= "alert('You will need ' + calculateSupply(this.form.age.value, this.form.amountPerDay.value) + ' to last you until the ripe old age of 80'  )"></br>
	</FORM>
	
	<div>For example</br>
		
			If  you eat two apple per day and you have 40 . You will need <a id="lte1"></a> apples to last you until the ripe old age of 80.</br>
			If you eat one Mc Donald's burger per day and you are 72. You will need <a id="lte2"></a>> Mc Donald's to last you until the ripe old age of 80.</br>
			If you eat five fruits and vegetables per day and you are 12. You will need <a id="lte3"></a> to last you until the ripe old age of 80.</br>
	</div>
	
	<script type="text/javascript">
		
        document.getElementById("lte1").innerHTML = calculateSupply(40,2);
		document.getElementById("lte2").innerHTML = calculateSupply(72,1);
		document.getElementById("lte3").innerHTML = calculateSupply(12,5);
		
	</script>
	</body>
	</html>
