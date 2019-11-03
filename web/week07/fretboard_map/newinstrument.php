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
					
										
									
					$post =$_POST;
					
					$name = $post['name'];
					$num_strings = $post['num_strings'];
					$s0 = $post['s0'];
					$s1 = $post['s1'];
					$s2 = $post['s2'];
					$s3 = $post['s3'];
					$s4 = $post['s4'];
					$s5 = $post['s5'];
					$s6 = $post['s6'];
					$s7 = $post['s7'];
					
					$insInstSql = 'INSERT INTO instruments(name, num_strings) VALUES(:name, :num_strings)';
					$insInstPdo = $db->prepare($insInstSql);
					
					$insInstPdo->bindValue(':name', $name);
					$insInstPdo->bindValue(':num_strings', $num_strings);
					
					/*
					$insInstPdo->bindValue(':s0', $s0);
					$insInstPdo->bindValue(':s1', $s1);
					$insInstPdo->bindValue(':s2', $s2);
					$insInstPdo->bindValue(':s3', $s3);
					$insInstPdo->bindValue(':s4', $s4);
					$insInstPdo->bindValue(':s5', $s5);
					$insInstPdo->bindValue(':s6', $s6);
					$insInstPdo->bindValue(':s7', $s7);
					
					*/
					//$insInstPdo->execute();
						
					//$newId = $db->lastInsertId();
								
					if ($num_strings > 0) {
						
						echo 'working..<br>';
						$s0Sql = 'UPDATE instruments SET s0 = :s0 WHERE id = :id';
						$s0Pdo = $db->prepare($s0Sql);
					
					
						$s0Pdo->bindValue(':s0', $s0);
						$s0Pdo->bindValue(':id', $newId);
					
						$s0Pdo->execute();
					}
					/*
					if ( $num_strings > 1) {
						$s1Sql = 'UPDATE instruments SET s1 = :s1 WHERE id = :id';
						$s1Pdo = $db->prepare($s1Sql);
					
					
						$s1Pdo->bindValue(':s0', $s0);
						$s1Pdo->bindValue(':id', $newId);
					
						$s1Pdo->execute();
					}
					
					if ( $num_strings > 2) {
						$s2Sql = 'UPDATE instruments SET s2 = :s2 WHERE id = :id';
						$s2Pdo = $db->prepare($s0Sql);
					
					
						$s2Pdo->bindValue(':s2', $s2);
						$s2Pdo->bindValue(':id', $newId);
					
						$s2Pdo->execute();
					}
					
					if ( $num_strings > 3) {
						$s3Sql = 'UPDATE instruments SET s3 = :s3 WHERE id = :id';
						$s3Pdo = $db->prepare($s3Sql);
					
					
						$s3Pdo->bindValue(':s3', $s0);
						$s3Pdo->bindValue(':id', $newId);
					
						$s3Pdo->execute();
					}
					
					if ( $num_strings > 4) {
						$s4Sql = 'UPDATE instruments SET s4 = :s4 WHERE id = :id';
						$s4Pdo = $db->prepare($s0Sql);
					
					
						$s4Pdo->bindValue(':s0', $s4);
						$s4Pdo->bindValue(':id', $newId);
					
						$s4Pdo->execute();
					}
					
					if ( $num_strings > 5) {
						$s5Sql = 'UPDATE instruments SET s5 = :s5 WHERE id = :id';
						$s5Pdo = $db->prepare($s5Sql);
					
					
						$s5Pdo->bindValue(':s5', $s5);
						$s5Pdo->bindValue(':id', $newId);
					
						$s5Pdo->execute();
					}
					
					if ( $num_strings > 6) {
						$s6Sql = 'UPDATE instruments SET s6 = :s6 WHERE id = :id';
						$s6Pdo = $db->prepare($s0Sql);
					
					
						$s0Pdo->bindValue(':s6', $s6);
						$s0Pdo->bindValue(':id', $newId);
					
						$s6Pdo->execute();
					}
					
					if ( $num_strings > 7) {
						$s0Sql = 'UPDATE instruments SET s0 = :s0 WHERE id = :id';
						$s0Pdo = $db->prepare($s7Sql);
					
					
						$s7Pdo->bindValue(':s7', $s7);
						$s7Pdo->bindValue(':id', $newId);
					
						$s7Pdo->execute();
					}
					*/
					
					echo 'Instrument Created!!<br><br>';								
					echo '<form method="post" action="menu.php"><input type="submit" value="Menu"></form><br><br>';
					echo '<form method="post" action="createinstrument.php"><input type="submit" value="Create Another Instrument"></form><br><br>';
						
					?>
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