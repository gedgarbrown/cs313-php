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
<body onload="loadCreateScale()">	
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
					Create A New Scale!!
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
					<form name="newScale" method="post" action="newscale.php" onsubmit="return submitNewScale()">
						Please enter information for Scale:<br><br>
						Name: <input type="text" name="scalename" size="20" onblur="scaleNameValid()">
						<span class="error" id="invalidName"></span><br>
						Enter intervals for scale in number of half steps from previous note: 
					    <br>
						Degree I
						<select name="i" id="i">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
						<br>
						Degree II
						<select name="ii" id="ii">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
						<br>
						Degree III
						<select name="iii" id="i">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
						<br>
						Degree IV
						<select name="iv" id="ii">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
						<br>
						Degree V
						<select name="v" id="i">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
						<br>
						Degree VI
						<select name="vi" id="i">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
						<br>
						Degree VII
						<select name="vii" id="ii">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
						<br>
						
						
						
						<input type="submit" value="Create This Scale" ><br><br>
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
