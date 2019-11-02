function nameValid() {
	
		
		
		if((document.newInstrument.name.value == "") {
			document.getElementById("invalidUsername").innerHTML = "enter a name for the new instrument!!";
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
	
	$num_strings = document.getElementById("num_strings").value;
	
	document.getElementById("invalidName").innerHTML = $num_strings;
	
	
	
}