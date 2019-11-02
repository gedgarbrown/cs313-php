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
	</div
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
					
					//echo '<pre>';
					//print_r($_POST);
					//die();				
									
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
					
					//echo $s0.'<br>';
					//echo $s1.'<br>';
					//echo $s2.'<br>';
					//echo $s3.'<br>';
					//echo $s4.'<br>';
					//echo $s5.'<br>';
					//echo $s6.'<br>';
					//echo $s7.'<br>';
					
					$insInstSql = 'INSERT INTO instruments(name, num_strings, s0, s1, s2, s3, s4, s5, s6, s7, standard, user_id)
							VALUES(:name, :num_strings, :s0, :s1, :s2, :s3, :s4, :s5, :s6, :s7, :standard, :user_id)';
					$insInstPdo = $db->prepare($insInstSql);
					
					$insInstPdo->bindValue(':name', $name);
					$insInstPdo->bindValue(':num_strings', $num_strings);
					$insInstPdo->bindValue(':s0', $s0);
					if (isset(s1)){
						$insInstPdo->bindValue(':s1', $s1);
					}
					else { 
						$insInstPdo->bindValue(':s1', NULL);
					}
					
					if (isset(s2)){
						$insInstPdo->bindValue(':s2', $s2);
					}
					else { 
						$insInstPdo->bindValue(':s2', NULL);
					}
					
					if (isset(s3)){
						$insInstPdo->bindValue(':s3', $s3);
					}
					else { 
						$insInstPdo->bindValue(':s3', NULL);
					}
					
					if (isset(s4)){
						$insInstPdo->bindValue(':s4', $s4);
					}
					else { 
						$insInstPdo->bindValue(':s4', NULL);
					}
					
					if (isset(s5)){
						$insInstPdo->bindValue(':s5', $s5);
					}
					else { 
						$insInstPdo->bindValue(':s5', NULL);
					}
					
					if (isset(s6)){
						$insInstPdo->bindValue(':s6', $s6);
					}
					else { 
						$insInstPdo->bindValue(':s6', NULL);
					}
					
					if (isset(s7)){
						$insInstPdo->bindValue(':s7', $s7);
					}
					else { 
						$insInstPdo->bindValue(':s7', NULL);
					}
					
					$insInstPdo->bindValue(':standard', FALSE);
					$insInstPdo->user_id(':user_id', $_SESSION["userID"]);
					
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
