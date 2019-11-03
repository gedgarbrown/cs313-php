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

function scaleNameValid() {
	
	if(document.newInstrument.scalename.value == "") {
		document.getElementById("invalidName").innerHTML = "enter a name for the new scale!!";
		return false;
	}
	
	document.getElementById("invalidName").innerHTML = "";
	return true;
	
}
function submitNewScale() {
	
	if(!scaleNameValid()){
		alert("Enter a name for the new instrument!!");
		return false;
	}
	
	return true;
}