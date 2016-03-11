
	var age;
	var year;
		function calculateAge(birthYear, currentYear){
	
			if (birthYear=="" || currentYear ==""){
				alert("You do not enter the parameters.");
				age="undefined";
			}
			else
				if (birthYear>currentYear) {
				alert("You are not born yet, it's imposible!!!!!!");
				age="undefined"
			}
			else {
				age = currentYear-birthYear;
			}
		
			return age;		

		}
		
		
		function calculateAge2(birthYear){
			year=new Date();
			if (birthYear==""){
				alert("You do not enter the parameters.");
				age="undefined";
			}
			else
				if (birthYear>year.getFullYear()) {
				alert("You are not born yet, it's imposible!!!!!!");
				age="undefined"
			}
			else {
			
				age = year.getFullYear()- birthYear;
			}
		
			return age;		

		}

    