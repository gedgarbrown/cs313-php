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
		<span onclick="openNav()">&#9776;Navigation</span>
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
						date_default_timezone_set("America/Denver");
						echo "Current Date: " . date("Y/m/d") . "<br>";
						echo "Current Time: " . date("h:i:sa") . "<br> <br> <hr>";
																
					?>
				</div>
				
				<div class="col-2">&nbsp;
				</div>
			</div>
			
			<!-- Row 2 -->
			<div class="row">	
				<div class="col-2">&nbsp;
				</div>
				<div class="col-3">
					<figure>
						<img src="images/me.jpg" alt="George Brown"  width="100%">
							<figcaption class="caption">
								George Brown
							</figcaption>
					</figure>
				</div>
				
				<div class="col-5">
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
				<div class="col-6">
					This is one of my Cavaquinhos. The Cavaquinho is a guitar-like instrument originating from Portugal but used widely in Brazil to play Samba and Choro. This Cavaco is a Rozini RC20 ATN, 
					it has a spruce top and walnut back and sides.  The traditional tuning for Cavaquinho is d-g-b-d.  However, another less common tuning is that of the mandolin, g-d-a-e.  Many of the famous recordings
					the 70s and 80s were performed by Carlinhos do Cavaco who used the mandolin tuning.  He can be heard backing famous artists like Clara Nunes and Bezerra da Silva.
				</div>
				
				<div class="col-2">
					<figure>
						<img src="images/RoziniRC20ATN.jpg" alt="Cavaquinho"  width="100%">
							<figcaption class="caption">
								Cavaquinho Rozini RC20 ATN
							</figcaption>
					</figure>
				</div>
				<div class="col-2">&nbsp;
				</div>
			</div>
			
			<!-- Row 4 -->
			<div class="row">	
				<div class="col-2">&nbsp;
				</div>
				<div class="col-4">
					<figure>
						<img src="images/xire.png" alt="Xir"  width="100%">
							<figcaption class="caption">
								Xirê, November 15,16 2019
							</figcaption>
					</figure>
				</div>
				
				<div class="col-4">
				<br>
					Currently I am involved in a project based on Afro-Brazilian cultural mythology.  Xirê is a mixture of western classical elements with rhythms and folklore from candomblé. 
					All pieces in this program were written by me.  If you are in the Salt Lake area around November 15th and 16th this year come support me and satisfy your curiosity.  
				</div>
				<div class="col-2">&nbsp;
				</div>
			</div>
			
			
			
			
		</div>
		<hr>
		<div id="footer">
			
			<a href="index.php">Home</a>
			<br>
			<br>
			<hr>
		</div>
	</div>
</body>
</html>


