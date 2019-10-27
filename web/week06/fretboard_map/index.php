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
					<form name="loginForm" method="post" action="login.php" onsubmit="return submitLogin()">
						Please Login:<br><br>
						Username: <input type="text" name="username" size="20" onblur="usernameValid()">
						<span class="error" id="invalidUsername"></span><br>
						Password: <input type="password" name="password" size="20" onblur="passwordValid()">
						<span class="error" id="invalidPassword"></span><br>
						<input type="submit" value="Login" ><br><br>
					</form>	
				</div>
				<div class="col-3">&nbsp;
				</div>
			</div>
			<div class="row">	
				<div class="col-3">&nbsp;
				</div>
				<div class="col-6">
					<form name="signupForm" method="post" action="signup.php">
						<input type="submit" value="Create User" >
					</form>
					<br><br>
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
