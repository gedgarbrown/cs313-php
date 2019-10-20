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
<body>	
	<div id="mySidenav" class="sidenav">
		<span class="sidetext">
		<?php
			if (isset($_SESSION["loggedIn"]) || isset($_SESSION["username"])) {
				if ($_SESSION["loggedIn"] == true) {
					echo 'Logged in as:<br>'.$_SESSION["username"].'<br>';
					echo '<a href="index.php">Log Out</a>';
				}
			}
		?>
		</span>
		
<!--		<a href="cart.php">View Cart</a> -->
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
					Choose which Fretboard Map you would like!!
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
				<form method="post" target="_blank" action="fret_board.php">
					Fretboard Map<br><hr>
					Instrument: 
					<select name="InstrumentID">
						<?php
							
					//setup database
					try
					{
						$dbUrl = getenv('DATABASE_URL');

						$dbOpts = parse_url($dbUrl);

						$dbHost = $dbOpts["host"];
						$dbPort = $dbOpts["port"];
						$dbUser = $dbOpts["user"];
						$dbPassword = $dbOpts["pass"];
						$dbName = ltrim($dbOpts["path"],'/');

						$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	
						$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);				
					}
						catch (PDOException $ex)
					{
						echo 'Error!: ' . $ex->getMessage();
						die();
					}
					
					class Instrument {
						public $ID;
						public $Name;
					}
					
					foreach ($db->query('SELECT id, name FROM instruments') as $row)
					{
						echo $row["id"].' '.$row["name"].'<br>';
						echo '<option value="'.$row["id"].'>'.$row["name"].'</option>';				
						
						
					}		
					
						?>
					</select><br>
					
					<input type="submit" value="Create Map">
				</form>	
				<br><hr><hr><br>
				</div>
				<div class="col-3">&nbsp;
				</div>
			</div>
			<!-- Row 3 -->
			
			<div class="row">	
				<div class="col-3">&nbsp;
				</div>
				<div class="col-6">
				<form method="post" target="_blank" action="scales.php">
					Scale Map<br><hr>
					Instrument: 
					<select name="InstrumentID">
						<?php
							
							//TODO get available options from Database
							
							echo '<option value="0">Guitar</option>';
							echo '<option value="1">Cavaquinho</option>';
					
					
						?>
					</select><br>
					Scale: 
					<select name="ScaleID">
						<?php
							
							//TODO get available options from Database
							
							echo '<option value="0">Major</option>';
							echo '<option value="1">Minor</option>';
					
					
						?>
					</select>
					<br>
					Note: 
					<select name="tonic">
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
					<input type="submit" value="Create Map">
				</form>	
				<br><hr><hr><br>
				</div>
				<div class="col-3">&nbsp;
				</div>
			</div>
			
			<!-- Row 4 -->
			
			<div class="row">	
				<div class="col-3">&nbsp;
				</div>
				<div class="col-6">
				<form method="post" target="_blank" action="chords.php">
					Chord Map<br><hr>
					Instrument: 
					<select name="InstrumentID">
						<?php
							
							//TODO get available options from Database
							
							echo '<option value="0">Guitar</option>';
							echo '<option value="1">Cavaquinho</option>';
					
					
						?>
					</select><br>
					Chord: 
					<select name="ChordID">
						<?php
							
							//TODO get available options from Database
							
							echo '<option value="0">Major</option>';
							echo '<option value="1">Minor</option>';
					
					
						?>
					</select>
					<br>
					Note: 
					<select name="tonic">
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
					<input type="submit" value="Create Map">
				</form>	
				<br><hr><hr><br>
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
