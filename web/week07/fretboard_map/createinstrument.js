function nameValid() {
	
	if(document.newInstrument.name.value == "") {
		document.getElementById("invalidName").innerHTML = "enter a name for the new instrument!!";
		return false;
	}
	
	document.getElementById("invalidName").innerHTML = "";
	return true;
	
}

function submitNewInstrument() {
	
	if(!nameValid()){
		alert("Enter a name for the new instrument!!");
		return false;
	}
	
	return true;
}

function hideStrings() {
	
	
	var selector = document.getElementById("num_strings");
	var num_strings = selector.options[selector.selectedIndex].value;
	
	for (x = 1; x < 8; x++) {
		
		var currentOption = "s" + x;
		alert(currentOption);
		
		if (x < num_strings) {
			getElementById(currentOption).style.display = "inline";
		}
		else {
			getElementById(currentOption).style.display = "none";
		}
		
	}
	
	//document.getElementById("invalidName").innerHTML = num_strings;
	
	
	
}