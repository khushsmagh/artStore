var changeBackground = function (){

	var x = document.getElementsByClassName("matt");
	var i;
	for (i = 0; i < x.length; i++) {
		var optionSelected = x[i].selectedIndex;
		var options = x[i].options;
		for (j = 0; j < options.length; j++){
			console.log(options[j]);
			//this will change the individual options background 
			//color, which is now done with inline css as the list
			//is being generated
			//options[j].style.background = options[j].className;
		}
		x[i].style.background = options[optionSelected].className;
	}
}
