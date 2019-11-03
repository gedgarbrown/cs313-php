<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="week5.css">
	<script src="week5.js"></script>
	<?php
		
			
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
					$scaleID = $post['ScaleID'];
					//$instrumentName = $db->query("SELECT name FROM instruments WHERE id = 2");
					$instrumentName = '';
					
					foreach ($db->query("SELECT name FROM instruments WHERE id = {$instrumentID}") as $row) {
						$instrumentName = $row['name'];
					}
					
					foreach ($db->query("SELECT name FROM scales WHERE id = {$scaleID}") as $row) {
						$scaleName = $row['name'];
					}
		
		
		?>
	<title>
		<?php echo $instrumentName.' '. $scaleName.' Scale'; ?>
	</title>
</head>
<body>	
			
		<div id="content" class="content">
			<!-- Row 1 -->
			<div class="row">	
				<div class="col-3">&nbsp;
				</div>
				<div class="col-6 center">
					<?php
		
			//TODO get post ID code and pull name from Database
			$post = $_POST;
			
			if ($post["InstrumentID"] == 0) {
				echo 'Guitar Fretboard: ';
			}
			else
				echo 'Cavaquinho Fretboard: ';
			
			if ($post["ScaleID"] == 0) {
				echo 'Major Scale ';
			}
			else
				echo 'Minor Scale ';
		
		
		?>
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
					
						
						//echo '<div line-height="10">Fretboard Map of:<br>';
						//enter in variable instrument
						//echo 'Guitar<br></div>';
						
						
						//declare variables (to be replaced with Post from SQL Queries
						$num_strings = 7;
						$tuning = array(0, 4, 9, 2, 7, 11, 4);
						
						$tonic = $post["tonic"];
						$intervals = array(0, 2, 2, 1, 2, 2, 2, 1);
						
						
						//open strings
						echo '<img src="image/blank_note.png" class="fretboard" height="50" width="36">';
						
						for ($s=0; $s < $num_strings; $s++) {
							
							echo '<img src="image/note_'.$tuning[$s].'.png" class="fretboard" height="50" width="36">';					
						}
						
						echo '<img src="image/blank_note.png" class="fretboard" height="50" width="36"><br>';
						
						//nut
						echo '<img src="image/left_head.png" class="fretboard" height="50" width="36">';
						
						for ($s=0; $s <$num_strings; $s++) {
								
								$current_note = $tuning[$s];
							
								if ($current_note > 11){
									$current_note -= 12;
								}
								
								$steps_from_tonic = $current_note - $tonic;
								
								if ($steps_from_tonic < 0) {
									$steps_from_tonic += 12;
								}
								
								$degree = 0;
								$current_interval = 0;
								
								foreach ($intervals as $n => $i) {
									
									$current_interval += $i;
									
									if($steps_from_tonic == $current_interval) {
										$degree = $n + 1;
									}
										
								}
							
								echo '<img src="image/open_'.$degree.'.png" class="fretboard" height="50" width="36">';					
							}
						
						echo '<img src="image/right_head.png" class="fretboard" height="50" width="36"><br>';
						
						for ($f = 1; $f <= 22; $f++) {
							
							//notes
							echo '<img src="image/left_note.png" class="fretboard" height="25" width="36">';
						
							//sets current note					
							$fret_note = $f;
							
							if ($fret_note > 11){
								$fret_note -= 12;
							}
								
						
							for ($s=0; $s <$num_strings; $s++) {
			
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
								
								$current_note = $tuning[$s] + $fret_note;
							
								if ($current_note > 11){
									$current_note -= 12;
								}
								
								$steps_from_tonic = $current_note - $tonic;
								
								if ($steps_from_tonic < 0) {
									$steps_from_tonic += 12;
								}
								
								$degree = 0;
								$current_interval = 0;
								
								foreach ($intervals as $n => $i) {
									
									$current_interval += $i;
									
									if($steps_from_tonic == $current_interval) {
										$degree = $n + 1;
									}
									
									
									
								}
							
								echo '<img src="image/fret_'.$degree.'.png" class="fretboard" height="50" width="36">';					
							}
						
							echo '<img src="image/right_edge.png"class="fretboard" height="50" width="36"><br>';
							
							//end fretboard
							
						}
					
					
					
					?>
				</div>
				<div class="col-3">&nbsp;
				</div>
			</div>
			<br>
			<hr>
			<br>
			<br>
			
			
		<div>
		
		
	</div>
	
	

</body>
</html>
