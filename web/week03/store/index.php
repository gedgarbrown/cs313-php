<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="week3.css">
	<script src="week3.js"></script>
	<title>George Brown: Week 3 Store</title>
</head>
<body>	
	<div id="mySidenav" class="sidenav">
		<a href="#">Home</a>
<!--		<a href="cart.php">View Cart</a> -->
	</div>	
	<div id="main" class="main">
		<div id="header" class="header">
			Guitarras Emporium
		</div>			
		<div id="content" class="content">
			<!-- Row 1 -->
			<div class="row">	
				<div class="col-3">&nbsp;
				</div>
				<div class="col-6 center">
					Welcome to Guitarras Emporium!!
					<br>
					<hr>
				</div>
				<div class="col-3">&nbsp;
				</div>
			</div>
			<!-- Row 2 -->
			<div class="row">	
				<div class="col-9">
				Elifas Santana Series
				<hr>
				</div>	
				<div class="col-2">
				&nbsp;
				<hr>
				</div>
			</div>
			
			<form method="post" action="cart.php">
				<!-- Row 3 -->
				<div class="row">	
					<div class="col-12">
					
						<table class="product">
						<!--	<tr>
								<td>
									<img src="image/elifas0.jpg" alt="item1" height="80" width="80">
								</td>
								<td>							
									Model: Aruana<br>
									Body: Cedar<br>
									Neck: Yellowheart<br>
									Pickups:  Humbucker<br>
									Price: $680<br>
							
								</td>								
								<td>
									<input type="checkbox" name="add[]" value="0">Add item to cart
								</td>
						
							</tr>
							-->
							<?php
								class Item {
									public $image; 
									public $model;
									public $body;
									public $neck;
									public $fretboard;
									public $pickups;
									public $price;
								}
								$guitar[0] = new Item();
								$guitar[1] = new Item();
								$guitar[2] = new Item();
								$guitar[3] = new Item();
								
								//loading variable into array. with a database
								//this would be retrieved from database here
								$guitar[0]->image = 0;
								$guitar[0]->model = 'Arauna';
								$guitar[0]->body = 'Cedar';
								$guitar[0]->neck = 'Yellowheart';
								$guitar[0]->fretboard = 'Rosewood';
								$guitar[0]->pickups = '1 Humbucker';
								$guitar[0]->price = 680;
								
								$guitar[1]->image = 1;
								$guitar[1]->model = 'Caicó';
								$guitar[1]->body = 'Cedar';
								$guitar[1]->neck = 'Yellowheart';
								$guitar[1]->fretboard = 'Rosewood';
								$guitar[1]->pickups = '1 Humbucker';
								$guitar[1]->price = 1200;

								$guitar[2]->image = 2;
								$guitar[2]->model = 'Classic';
								$guitar[2]->body = 'Cedar';
								$guitar[2]->neck = 'Yellowheart';
								$guitar[2]->fretboard = 'Rosewood';
								$guitar[2]->pickups = '2 Humbuckers';
								$guitar[2]->price = 2000;		
								
								$guitar[3]->image = 3;
								$guitar[3]->model = 'Estudio';
								$guitar[3]->body = 'Cedar';
								$guitar[3]->neck = 'Yellowheart';
								$guitar[3]->fretboard = 'Rosewood';
								$guitar[3]->pickups = '1 Humbucker, 1 Single-Coil';
								$guitar[3]->price = 2480;
														
								//foreach loop								
								foreach ($guitar as $caico){
									echo '<tr class="oneitem"><td class="oneitem"><img src="image/elifas'.$caico->image.
										'.jpg" alt="item'.$caico->image.'" height="80" width="80"></td><td>&nbsp;</td>';
									
									echo '<td>							
										Model: '.$caico->model.'<br>
										Body: '.$caico->body.'<br>
										Neck: '.$caico->neck.'<br>
										Fretboard: '.$caico->fretboard.'<br>
										Pickups: '.$caico->neck.'<br>
										Price: $'.$caico->price.'<br></td><td>&nbsp;</td>';
									echo '<td>
											<input type="checkbox" name="add[]" value="'.$caico->image.'">Add item to cart 
										</td></tr><tr><td><br></td></tr>';
								}	
								
							?>
						</table>
				
					
				
					</div>
				
				</div>
				<!-- Row 4 -->
				<div class="row">
					<div class="col-2">
						&nbsp;
					</div>
					<div class="col-8">
					<br><br>
						<input type="submit" value="View Cart">
					</div>
					<div class="col-2">
						&nbsp;
					</div>
				</div>
			</form>
			<!-- Row 5 -->
				<div class="row">
					<div class="col-12">
						&nbsp;
					</div>
				</div>
			
		<div>
		
		<div id="footer" class="footer">
			Guitarras Emporium
		</div>	
	</div>
	
	

</body>
</html>
