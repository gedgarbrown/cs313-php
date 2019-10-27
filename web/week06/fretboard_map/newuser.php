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
					
										
					class User {
						public $username;
						public $password;
						public $firstName;
						public $lastName
					}
					
					$post =$_POST;
					
					$myUser = new User();
					$myUser->username = $post['username'];
					$myUser->password = $post['password'];
					$myUser->first_name = $post['first_name'];
					$myUser->last_name = $post['last_name'];
					
					//$insUserSql = 'INSERT INTO users(username, password, first_name, last_name) VALUES(:username, :password, :first_name, :last_name)';
					//$insUserPdo = $db->prepare($insUserSql);
					
					//$insUserPdo->bindValue(':username', $myUser->username);
					//$insUserPdo->bindValue(':password', $myUser->password);
					//$insUserPdo->bindValue(':first_name', $myUser->first_name);
					//$insUserPdo->bindValue(':last_name', $myUser->last_name);
					
					//$insUserPdo->execute();
					
					echo 'User '.$myUser->username.' created!!<br><br>';								
					echo '<form method="post" action="menu.php"><input type="submit" value="Continue">';
					
						
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
