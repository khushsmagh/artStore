var changeBackground = function (){

	var x = document.getElementsByClassName("matt");
	var i;
	for (i = 0; i < x.length; i++) {
		var optionSelected = x[i].selectedIndex;
		// set his background-color to the class'name of the option
		x[i].style.background = x[i].options[optionSelected].className;
		//Then color each option in her proper class
		for (var option in x[i].options){
			x[i].options[option].style.background =  x[i].options[option].className;
		}
	}
}
