<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="week5.css">
	<script src="week5.js"></script>
	<title>George Brown: Week 5 Fretboard Mapper</title>
</head>
<body onload="loadIndex()">	
	<div id="mySidenav" class="sidenav">
		<a href="index.php">Login</a>
		

	</div>	
	<div id="main" class="main">
		<div id="header" class="header">
			Fretboard Mapper
		</div>			
		<div id="content" class="content">
			<!-- Row 1 -->
			<div class="row">	
				<div class="col-3">&nbsp;
				</div>
				<div class="col-6 center">
					Welcome to the Fretboard Mapper!!
					<br>
					<hr>
				</div>
				<div class="col-3">&nbsp;
				</div>
			</div>
			<!-- Row 2 -->
			
			<div class="row">	
				<div class="col-3">&nbsp;
				</div>
				<div class="col-6">
					<form name="newUser" method="post" action="newuser.php" onsubmit="return submitNewUser()">
						Please enter information for New User:<br><br>
						Username: <input type="text" name="username" size="20" onblur="newUsernameValid()">
						<span class="error" id="invalidUsername"></span><br>
						First Name: <input type="text" name="first_name" size="20" onblur="firstNameValid()">
						<span class="error" id="invalidFirstname"></span><br>
						Last Name: <input type="text" name="last_name" size="20" onblur="lastNameValid()">
						<span class="error" id="invalidLastname"></span><br>
						Password: <input type="password" name="password" size="20" onblur="newPasswordValid()">
						<span class="error" id="invalidPassword"></span><br>
						Confirm Password: <input type="password" name="confirm_password" size="20" onblur="confirm_passwordValid()">
						<span class="error" id="invalidConfirm_Password"></span><br>
						<input type="submit" value="Create User" ><br><br>
					</form>	
				</div>
				<div class="col-3">&nbsp;
				</div>
			</div>
						
			
		<div>
		
		<div id="footer" class="footer">
			Fretboard Mapper
		</div>	
	</div>
	
	

</body>
</html>
