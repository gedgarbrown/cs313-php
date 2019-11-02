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
					
					$insInstSql = 'INSERT INTO instruments(name, num_strings, s0, s1, s2, s3, s4, s5, s6, s7) VALUES(:name, :num_strings, :s0, :s1, :s2, :s3, :s4, :s5, :s6, :s7)';
					$insInstPdo = $db->prepare($insInstSql);
					
					$insInstPdo->bindValue(':name', $name);
					$insInstPdo->bindValue(':num_strings', $num_strings);
					$insInstPdo->bindValue(':s0', $s0);
					$insInstPdo->bindValue(':s1', $s1);
					$insInstPdo->bindValue(':s2', $s2);
					$insInstPdo->bindValue(':s3', $s3);
					$insInstPdo->bindValue(':s4', $s4);
					$insInstPdo->bindValue(':s5', $s5);
					$insInstPdo->bindValue(':s6', $s6);
					$insInstPdo->bindValue(':s7', $s7);

					
					$insInstPdo->execute();
										
					
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
