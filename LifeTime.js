
var amountUntilDeath;  
		function calculateSupply(age,amountPerDay){
			if (age<1 || amountPerDay <1){
			alert('You have enter a wrong value');
			amountUntilDeath= "an undefined value";
			}
			else {
				amountUntilDeath = (80-age)*365*amountPerDay;
			}
			return amountUntilDeath;
		}