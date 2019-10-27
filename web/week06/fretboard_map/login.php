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
					}
					$post =$_POST;
					
					$myUser = new User();
					$myUser->username = $post['username'];
					$myUser->password = $post['password'];
					
					//echo $myUser->username.'<br>';
					//echo $myUser->password.'<br>';
					
					$goodLogin = false;
					$userID = 0;
					
					foreach ($db->query('SELECT username, password, id FROM users') as $row)
					{
						
						//echo $row['username'].'<br>';
						//echo $row['password'].'<br>';
						
						
						if ($myUser->username == $row['username']){
								//echo $goodLogin.'<br>';
								
								if ($myUser->password == $row['password']) {
									//echo $goodLogin.'<br>';
									$goodLogin = true;
									$userID = $row['id'];
								}
						}
					}						
								
						
						//echo $goodLogin.'last<br>';
						if($goodLogin == TRUE) {
							
							
							echo 'Login Successful!!<br>';
							
							$_SESSION["loggedIn"] = true;
							$_SESSION["username"] = $post['username'];
							$_SESSION["user_id"] = $userID;
							echo $_SESSION["user_id"];
							echo '<form method="post" action="menu.php"><input type="submit" value="Continue">';
							echo '<br><br><br></form>';
							
						}
						else {
							echo 'Login Unsuccessful!!<br>';
							echo '<form method="post" action="index.php"><input type="submit" value="Try Again">';
							echo '<br><br><br></form>';
						}
				
					
				
						
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
