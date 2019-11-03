function usernameValid() {
	
		
		
		if((document.loginForm.username.value == "") || (document.loginForm.username.value == "<enter username>")) {
			document.getElementById("invalidUsername").innerHTML = "enter username!!";
			return false;
		}
		
		document.getElementById("invalidUsername").innerHTML = "";
		return true;
	
}

function passwordValid() {
	
		
		
		if(document.loginForm.password.value == "") {
			document.getElementById("invalidPassword").innerHTML = "enter password!!";
			return false;
		}
		
		document.getElementById("invalidPassword").innerHTML = "";
		return true;
	
}

// TODO Finish funcitons for signup page

function firstNameValid() {
	
		//var otherPassword = document.
		
		//if(document.loginForm.password.value == "") {
		//	document.getElementById("invalidConfirm_Password").innerHTML = "enter password!!";
		//	return false;
		//}
		
		//document.getElementById("invalidConfirm_Password").innerHTML = "";
		return true;
	
}

function lastNameValid() {
	
		//var otherPassword = document.
		
		//if(document.loginForm.password.value == "") {
		//	document.getElementById("invalidConfirm_Password").innerHTML = "enter password!!";
		//	return false;
		//}
		
		//document.getElementById("invalidConfirm_Password").innerHTML = "";
		return true;
	
}

function newUsernameValid() {
	
		//var otherPassword = document.
		
		//if(document.loginForm.password.value == "") {
		//	document.getElementById("invalidConfirm_Password").innerHTML = "enter password!!";
		//	return false;
		//}
		
		//document.getElementById("invalidConfirm_Password").innerHTML = "";
		return true;
	
}

function newPasswordValid() {
	
		//var otherPassword = document.
		
		//if(document.loginForm.password.value == "") {
		//	document.getElementById("invalidConfirm_Password").innerHTML = "enter password!!";
		//	return false;
		//}
		
		//document.getElementById("invalidConfirm_Password").innerHTML = "";
		return true;
	
}

function confirm_passwordValid() {
	
		//var otherPassword = document.
		
		//if(document.loginForm.password.value == "") {
		//	document.getElementById("invalidConfirm_Password").innerHTML = "enter password!!";
		//	return false;
		//}
		
		//document.getElementById("invalidConfirm_Password").innerHTML = "";
		return true;
	
}

function confirm_passwordValid() {
	
		//var otherPassword = document.
		
		//if(document.loginForm.password.value == "") {
		//	document.getElementById("invalidConfirm_Password").innerHTML = "enter password!!";
		//	return false;
		//}
		
		//document.getElementById("invalidConfirm_Password").innerHTML = "";
		return true;
	
}

function confirm_passwordValid() {
	
		//var otherPassword = document.
		
		//if(document.loginForm.password.value == "") {
		//	document.getElementById("invalidConfirm_Password").innerHTML = "enter password!!";
		//	return false;
		//}
		
		//document.getElementById("invalidConfirm_Password").innerHTML = "";
		return true;
	
}

function loginIsValid(){
	var isValid = true;
	
	if(!usernameValid()) {
		isValid = false;
	}
	
	if(!passwordValid()) {
		isValid = false;
	}
	
	return isValid;
	
}



function submitLogin() {
	
	if(!loginIsValid()){
		alert("Enter username and password!!");
		return false;
	}
	
	//alert("Login Successful!");
	
	return true;
}

function submitNewUser() {
	
	//if(!loginIsValid()){
		//alert("Enter username and password!!");
		//return false;
	//}
	
	//alert("Login Successful!");
	
	return true;
}

function submitNewInstrument() {
	
	//if(!loginIsValid()){
		//alert("Enter username and password!!");
		//return false;
	//}
	
	//alert("Login Successful!");
	
	return true;
}

function loadIndex() {
	
	document.loginForm.username.focus();
}

function loadCreateInstrument() {
	
	document.newInstrument.name.focus();
}

function loadCreateScale() {
	
	document.newInstrument.scalename.focus();
}
