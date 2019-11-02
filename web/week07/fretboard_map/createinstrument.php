<?php
	session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="week5.css">
	<script src="week5.js"></script>
	<script src="createinstrument.js"></script>
	<title>George Brown: Week 5 Fretboard Mapper</title>
</head>
<body onload="loadIndex()">	
	<div id="mySidenav" class="sidenav">
		<span class="sidetext">
		<?php
			if (isset($_SESSION["loggedIn"]) || isset($_SESSION["username"])) {
				if ($_SESSION["loggedIn"] == true) {
					echo 'Logged in as:<br>'.$_SESSION["username"].'<br>';
					echo '<a href="index.php">Log Out</a>';
					//echo $_SESSION["user_id"];
				}
			}
		?>
		</span>
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
					Create A New Instrument!!
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
					<form name="newInstrument" method="post" action="newinstrument.php" onsubmit="return submitNewInstrument()">
						Please enter information for Instrument:<br><br>
						Name: <input type="text" name="name" size="20" onblur="newUsernameValid()">
						<span class="error" id="invalidName"></span><br>
						Number of Strings: 
						<select name="num_strings" id="num_strings" onchange="hideStrings()">
							<option value="1">1</option>
							<option value="1">2</option>
							<option value="1">3</option>
							<option value="1">4</option>
							<option value="1">5</option>
							<option value="1">6</option>
							<option value="1">7</option>
							<option value="1">8</option>
						</select>
						<br>
						Select tuning for each string:<br>
						
						
					String : 
					<select name="s0">
						<option value=""></option>
						<option value="0">C</option>
						<option value="1">C#/D♭</option>
						<option value="2">D</option>
						<option value="3">D#/E♭</option>
						<option value="4">E</option>
						<option value="5">F</option>
						<option value="6">F#/G♭</option>
						<option value="7">G</option>
						<option value="8">G#/A♭</option>
						<option value="9">A</option>
						<option value="10">A#/B♭</option>
						<option value="11">B</option>					
					</select>
					<br>
					
					String : 
					<select name="s1">
						<option value=""></option>
						<option value="0">C</option>
						<option value="1">C#/D♭</option>
						<option value="2">D</option>
						<option value="3">D#/E♭</option>
						<option value="4">E</option>
						<option value="5">F</option>
						<option value="6">F#/G♭</option>
						<option value="7">G</option>
						<option value="8">G#/A♭</option>
						<option value="9">A</option>
						<option value="10">A#/B♭</option>
						<option value="11">B</option>					
					</select>
					<br>
					
					String : 
					<select name="s2">
						<option value=""></option>
						<option value="0">C</option>
						<option value="1">C#/D♭</option>
						<option value="2">D</option>
						<option value="3">D#/E♭</option>
						<option value="4">E</option>
						<option value="5">F</option>
						<option value="6">F#/G♭</option>
						<option value="7">G</option>
						<option value="8">G#/A♭</option>
						<option value="9">A</option>
						<option value="10">A#/B♭</option>
						<option value="11">B</option>					
					</select>
					<br>
					
					String : 
					<select name="s3">
						<option value=""></option>
						<option value="0">C</option>
						<option value="1">C#/D♭</option>
						<option value="2">D</option>
						<option value="3">D#/E♭</option>
						<option value="4">E</option>
						<option value="5">F</option>
						<option value="6">F#/G♭</option>
						<option value="7">G</option>
						<option value="8">G#/A♭</option>
						<option value="9">A</option>
						<option value="10">A#/B♭</option>
						<option value="11">B</option>					
					</select>
					<br>
					
					String : 
					<select name="s4">
						<option value=""></option>
						<option value="0">C</option>
						<option value="1">C#/D♭</option>
						<option value="2">D</option>
						<option value="3">D#/E♭</option>
						<option value="4">E</option>
						<option value="5">F</option>
						<option value="6">F#/G♭</option>
						<option value="7">G</option>
						<option value="8">G#/A♭</option>
						<option value="9">A</option>
						<option value="10">A#/B♭</option>
						<option value="11">B</option>					
					</select>
					<br>
					
					String : 
					<select name="s5">
						<option value=""></option>
						<option value="0">C</option>
						<option value="1">C#/D♭</option>
						<option value="2">D</option>
						<option value="3">D#/E♭</option>
						<option value="4">E</option>
						<option value="5">F</option>
						<option value="6">F#/G♭</option>
						<option value="7">G</option>
						<option value="8">G#/A♭</option>
						<option value="9">A</option>
						<option value="10">A#/B♭</option>
						<option value="11">B</option>					
					</select>
					<br>
					
					String : 
					<select name="s6">
						<option value=""></option>
						<option value="0">C</option>
						<option value="1">C#/D♭</option>
						<option value="2">D</option>
						<option value="3">D#/E♭</option>
						<option value="4">E</option>
						<option value="5">F</option>
						<option value="6">F#/G♭</option>
						<option value="7">G</option>
						<option value="8">G#/A♭</option>
						<option value="9">A</option>
						<option value="10">A#/B♭</option>
						<option value="11">B</option>					
					</select>
					<br>
					
					String : 
					<select name="s7">
						<option value=""></option>
						<option value="0">C</option>
						<option value="1">C#/D♭</option>
						<option value="2">D</option>
						<option value="3">D#/E♭</option>
						<option value="4">E</option>
						<option value="5">F</option>
						<option value="6">F#/G♭</option>
						<option value="7">G</option>
						<option value="8">G#/A♭</option>
						<option value="9">A</option>
						<option value="10">A#/B♭</option>
						<option value="11">B</option>					
					</select>
					<br>
						
						
						<input type="submit" value="Create This Instrument" ><br><br>
					</form>	
					<form name="cancel" method="post" action="menu.php">
						<input type="submit" value="Cancel" ><br><br>
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
