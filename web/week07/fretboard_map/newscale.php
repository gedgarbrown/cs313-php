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
					//echo $_SESSION['user_id'];
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
					
					$name = $post['scalename'];
					$num_strings = $post['num_strings'];
					$i = $post['i'];
					$ii = $post['ii'];
					$iii = $post['iii'];
					$iv = $post['iv'];
					$v = $post['v'];
					$vi = $post['vi'];
					$vii = $post['vii'];
					
					$standard = 'f';
				
					$user_id = $_SESSION['user_id'];
					
					
					$insInstSql = 'INSERT INTO scales(name, i, ii, iii, iv, v, vi, vii, standard, user_id) 
									VALUES(:name, :i, :ii, :iii, :iv, :v, :vi, :vii, :standard, :user_id)';
									
					$insInstPdo = $db->prepare($insInstSql);
					
					$insInstPdo->bindValue(':name', $name);
					$insInstPdo->bindValue(':standard', $standard);
					$insInstPdo->bindValue(':user_id', $user_id);
					
					
					$insInstPdo->bindValue(':i', $i);
					$insInstPdo->bindValue(':ii', $ii);
					$insInstPdo->bindValue(':iii', $iii);
					$insInstPdo->bindValue(':iv', $iv);
					$insInstPdo->bindValue(':v', $v);
					$insInstPdo->bindValue(':vi', $vi);
					$insInstPdo->bindValue(':vii', $vii);
					
					
					$insInstPdo->execute();
						
					
					
					
					echo 'Instrument Scale!!<br><br>';								
					echo '<form method="post" action="menu.php"><input type="submit" value="Menu"></form><br><br>';
					echo '<form method="post" action="createscale.php"><input type="submit" value="Create Another Scale"></form><br><br>';
						
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