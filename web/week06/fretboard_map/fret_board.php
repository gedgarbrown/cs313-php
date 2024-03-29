<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="week5.css">
	<script src="week5.js"></script>
		<?php
		
			//TODO get post ID code and pull name from Database
			$post = $_POST;
			
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
					
					$instrumentID = $post['InstrumentID'];
					
					//$instrumentName = $db->query("SELECT name FROM instruments WHERE id = 2");
					$instrumentName = '';
					
					foreach ($db->query("SELECT name FROM instruments WHERE id = {$instrumentID}") as $row) {
						$instrumentName = $row['name'];
					}
			//if ($post["InstrumentID"] == 0) {
			//	echo 'Guitar Fretboard Map';
			//}
			//else
			//	echo 'Cavaquinho Fretboard Map';
		
		
		?>
	<title>
		<?php echo $instrumentName.' Fretboard Map';?>
	</title>
</head>
<body>	
		<div id="content" class="content">
			<!-- Row 1 -->
			<div class="row">	
				<div class="col-3">&nbsp;
				</div>
				<div class="col-6 center">
					Fretboard map of:
					<?php echo $instrumentName;?>
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
				<div class="col-6 center fretboard">
					<?php
					
						
						
						
						//TODO declare variables (to be replaced with Post from SQL Queries
						$num_strings = 0;
						foreach ($db->query("SELECT num_strings FROM instruments WHERE id = {$instrumentID}") as $row) {
							$num_strings = $row['num_strings'];
						}
						
						$tuning = array();
						foreach ($db->query("SELECT s0, s1, s2, s3, s4, s5, s6, s7 FROM instruments WHERE id = {$instrumentID}") as $row) {
							
								$tuning[0] = $row['s0'];
								$tuning[1] = $row['s1'];
								$tuning[2] = $row['s2'];
								$tuning[3] = $row['s3'];
								$tuning[4] = $row['s4'];
								$tuning[5] = $row['s5'];
								$tuning[6] = $row['s6'];
								$tuning[7] = $row['s7'];
						}
						
						
						
			
						/*if ($post["InstrumentID"] == 0) {
							$num_strings = 6;
							$tuning = array(4, 9, 2, 7, 11, 4);
						}
						else {							
							$num_strings = 4;
							$tuning = array(2, 7, 11, 2);
						}*/
						
						//open strings
						echo '<img src="image/blank_note.png" class="fretboard" height="50" width="36">';
						
						for ($x=0; $x < $num_strings; $x++) {
							
							echo '<img src="image/note_'.$tuning[$x].'.png" class="fretboard" height="50" width="36">';					
						}
						
						echo '<img src="image/blank_note.png" class="fretboard" height="50" width="36"><br>';
						
						//nut
						echo '<img src="image/left_head.png" class="fretboard" height="50" width="36">';
						
						for ($x=0; $x < $num_strings; $x++) {
							
							echo '<img src="image/blank_open.png" class="fretboard" height="50" width="36">';					
						}
						
						echo '<img src="image/right_head.png" class="fretboard" height="50" width="36"><br>';
						
						for ($f = 1; $f <= 22; $f++) {
							
							//notes
							echo '<img src="image/left_note.png" class="fretboard" height="25" width="36">';
						
							for ($s=0; $s <$num_strings; $s++) {
								
								$image_name; 
								
								$fret_note = $f;
								
								if ($fret_note > 11){
									$fret_note -= 12;
								}
								
								$current_note = $tuning[$s] + $fret_note;
								
								if ($current_note > 11){
									$current_note -= 12;
								}
								
								
								
								echo '<img src="image/note_s_'.$current_note.'.png" class="fretboard" height="25" width="36">';					
							}
						
							echo '<img src="image/right_note.png"class="fretboard" height="25" width="36"><br>';
							
							
							//fret
							echo '<img src="image/left_edge_'.$f.'.png" class="fretboard" height="50" width="36">';
						
							for ($s=0; $s <$num_strings; $s++) {
							
								echo '<img src="image/string.png" class="fretboard" height="50" width="36">';					
							}
						
							echo '<img src="image/right_edge.png"class="fretboard" height="50" width="36"><br>';
							
							//end fretboard
							
						}
					
					
					
					?>
				</div>
				<div class="col-3">&nbsp;
				</div>
			</div>
			<br><hr><br><br>
			
		<div>
		
	</div>
	
	

</body>
</html>
