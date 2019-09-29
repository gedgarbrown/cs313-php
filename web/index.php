<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width">
<script src="script.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<title>George Brown: CS313</title>
</head>

<body>	
	<div id="container">	
		<div id="SideNav" class="sidenav">
			
			<div id="navmenu">&nbsp; &nbsp; Navigation Menu</div>
			
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">close&times;</a>
			
			<br>
			<span class="placeholder">Home</span>
			<a href="week02/week02.html">Week 2</a>
			<a href="week03/week03.html">Week 3</a>
			<a href="week04/week04.html">Week 4</a>
			<a href="week05/week05.html">Week 5</a>
			<a href="week06/week06.html">Week 6</a>
			<a href="week07/week07.html">Week 7</a>
			<a href="week08/week08.html">Week 8</a>
			<a href="week09/week09.html">Week 9</a>
			<a href="week10/week10.html">Week 10</a>
			<a href="week11/week11.html">Week 11</a>
			<a href="week12/week12.html">Week 12</a>
			<a href="week13/week13.html">Week 13</a>
			<a href="week14/week14.html">Week 14</a>
		</div>
	
		<hr>
		<span onclick="openNav()">&#9776;Navigation Menu</span>
		<hr>
		<div id="header">
		
			George Brown: CS313
		
		</div>
		<hr>
	
	

		<!-- Main Content here -->
		<div id="main">
			<!-- Row 1 -->
			<div class="row">	
				<div class="col-2">&nbsp;
				</div>
				<div class="col-8">
					
					<?php
						echo "Current Date: " . date("Y/m/d") . "<br>";
						echo "Current Time: " . date("h:i:sa") . "<br>";
										
					?>
				</div>
				
				<div class="col-2">&nbsp;
				</div>
			</div>
			
			<!-- Row 2 -->
			<div class="row">	
				<div class="col-2">&nbsp;
				</div>
				<div class="col-2">
					<figure>
						<img src="images/me.jpg" alt="George Brown" height="50%" width="100%">
							<figcaption class="caption">
								George Brown
							</figcaption>
					</figure>
				</div>
				
				<div class="col-6">
					Hi!! I'm George Brown and I am taking CS313 this semester.  I have a BA in Linguistics from BYU but am currently studying a second degree in Software Engineering
					at BYUI. I currently work in banking, but I am also a musician.  I am married with two boys.  I support Fluminense Football Club rather avidly and enjoy playing ball when
					time permits.  I also enjoy backpacking and try to do at least one trip every year.
				</div>
				<div class="col-2">&nbsp;
				</div>
			</div>
			
			<!-- Row 3 -->
			<div class="row">	
				<div class="col-2">&nbsp;
				</div>
				<div class="col-2">
					<figure>
						<img src="images/me.jpg" alt="George Brown" height="50%" width="100%">
							<figcaption class="caption">
								George Brown
							</figcaption>
					</figure>
				</div>
				
				<div class="col-6">
					Hi!! I'm George Brown and I am taking CS313 this semester.  I have a BA in Linguistics from BYU but am currently studying a second degree in Software Engineering
					at BYUI. I currently work in banking, but I am also a musician.  I am married with two boys.  I support Fluminense Football Club rather avidly and enjoy playing ball when
					time permits.  I also enjoy backpacking and try to do at least one trip every year.
				</div>
				<div class="col-2">&nbsp;
				</div>
			</div>
			
		</div>

		<div id="footer">
			<hr>
			<a href="index.php">Home</a>
			<br>
			<br>
			<hr>
		</div>
	</div>
</body>
</html>



