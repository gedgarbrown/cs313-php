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
					
					
					//pulling instruments from database				
					foreach ($db->query("SELECT id, name FROM instruments WHERE standard='t'") as $row) {
						echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
					}
					
					 
					
					foreach ($db->query("SELECT id, name FROM instruments WHERE user_id={$_SESSION["user_id"]}") as $row) {
						if(isset($row)){
							echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
						}
					}
							
							//echo '<option value="0">Guitar</option>';
							//echo '<option value="1">Cavaquinho</option>';
					
					
						?>
					</select><br>
					
					<input type="submit" value="Create Map">
				</form>	
				<form method="post" action="createinstrument.php">
					<input type="submit" class="edit_submit" value="Create New Instrument">
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
							
							//Pulling instruments from database
							foreach ($db->query("SELECT id, name FROM instruments WHERE standard='t'") as $row) {
								echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
							}
							
							foreach ($db->query("SELECT id, name FROM instruments WHERE user_id={$_SESSION["user_id"]}") as $row) {
								if(isset($row)){
									echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
								}
							}
							
					
					
						?>
					</select><br>
					Scale: 
					<select name="ScaleID">
						<?php
							
							//pulling scale names from database
							foreach ($db->query("SELECT id, name FROM scales WHERE standard='t'") as $row) {
								echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
							}
							
							foreach ($db->query("SELECT id, name FROM scales WHERE user_id={$_SESSION["user_id"]}") as $row) {
								if(isset($row)){
									echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
								}
							}
							//echo '<option value="0">Major</option>';
							//echo '<option value="1">Minor</option>';
					
					
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
				<form method="post" action="createscale.php">
					<input type="submit" class="edit_submit" value="Create New Scale">
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
				<!--
				<form method="post" target="_blank" action="chords.php">
					Chord Map<br><hr>
					Instrument: 
					<select name="InstrumentID">
						<?php
							
							//Pulling instruments from database
							foreach ($db->query("SELECT id, name FROM instruments WHERE standard='t'") as $row) {
								echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
							}
							
							foreach ($db->query("SELECT id, name FROM instruments WHERE user_id={$_SESSION["user_id"]}") as $row) {
								if(isset($row)){
									echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
								}
							}
					
					
						?>
					</select><br>
					
					Chord: 
					<select name="ChordID">
						<?php
							
							//Pulling instruments from database
							foreach ($db->query("SELECT id, name FROM chords WHERE standard='t'") as $row) {
								echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
							}
							
							foreach ($db->query("SELECT id, name FROM chords WHERE user_id={$_SESSION["user_id"]}") as $row) {
								if(isset($row)){
									echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
								}
							}
					
					
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
	
				<form method="post" action="createchord.php">
					<input type="submit" class="edit_submit" value="Create New Chord">
				</form> 
				<br><hr><hr><br>
				-->
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