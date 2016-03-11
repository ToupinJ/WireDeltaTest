var circumfrence;
var area;
var pi=Math.PI;
		
		function calcCircumfrence(radius){
			if (radius<0){
			alert('You have enter a wrong value');
			circumfrence= "an undefined value";
			}
			else{
			circumfrence=2*radius*pi; 
			
			}
			return circumfrence.toFixed(2); // I round up the result to the closest hundredth
		}
		
		function calcArea(radius){
			if (radius<0){
			alert('You have enter a wrong value');
			area= "an undefined value";
			}
			else{
				area=pi*radius*radius;
			}
			return area.toFixed(2); // I round up the result to the closest hundredth
		}