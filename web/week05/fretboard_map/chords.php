<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="week5.css">
	<script src="week5.js"></script>
	<title>
		<?php
		
			//TODO get post ID code and pull name from Database
			$post = $_POST;
			
			if ($post["InstrumentID"] == 0) {
				echo 'Guitar Map: ';
			}
			else
				echo 'Cavaquinho Map: ';
			
			if ($post["ChordID"] == 0) {
				echo 'Major Chord ';
			}
			else
				echo 'Minor Chord ';
		
		
		?>
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
			
			if ($post["ChordID"] == 0) {
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
				<div class="col-6 center">
					<?php
						$post = $_POST;
						
						//echo '<div line-height="10">Fretboard Map of:<br>';
						//enter in variable instrument
						//echo 'Guitar<br></div>';
						
						echo 'Images unavailable for Chords<br>';
						
						echo 'Chord will have the following notes:';
						
							
						
					
					
					
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
