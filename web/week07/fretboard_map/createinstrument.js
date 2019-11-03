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
	
	if(document.newScale.scalename.value == "") {
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
	
	filled = false;
	
	i = document.getElementById("i");
	ii = document.getElementById("i");
	iii = document.getElementById("i");
	iv = document.getElementById("i");
	v = document.getElementById("i");
	vi = document.getElementById("i");
	vii = document.getElementById("i");
	
	if (i.options.[i.selectedIndex].value == 1 || i.options.[i.selectedIndex].value == 2){
		if (ii.options.[ii.selectedIndex].value == 1 || ii.options.[ii.selectedIndex].value == 2){
			if (iii.options.[iii.selectedIndex].value == 1 || iii.options.[iii.selectedIndex].value == 2){
				if (iv.options.[iv.selectedIndex].value == 1 || iv.options.[iv.selectedIndex].value == 2){
					if (v.options.[v.selectedIndex].value == 1 || v.options.[v.selectedIndex].value == 2){
						if (vi.options.[vi.selectedIndex].value == 1 || vi.options.[vi.selectedIndex].value == 2){
							if (vii.options.[vii.selectedIndex].value == 1 || vii.options.[vii.selectedIndex].value == 2){
									return = true;
		
							}
		
						}
		
					}
		
				}
		
			}
		
		}
		
	}
	else{
		alert("All degrees must be filled!!");
		return false;
	}		
	
	
	
	return true;
}

