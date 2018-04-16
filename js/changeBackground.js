var changeBackground = function (){

	var x = document.getElementsByClassName("matt");
	var i;
	for (i = 0; i < x.length; i++) {
		var optionSelected = x[i].selectedIndex;
		for (var option in x[i].options){
			x[i].style.background = x[i].options[optionSelected].className;
			x[i].options[option].style.background =  x[i].options[option].className;
		}
	}
}
