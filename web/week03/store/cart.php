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
		<a href="index.php">Home</a>
<!--		<a href="cart.php">View Cart</a> -->
	</div>	
	<div id="main" class="main">
		<div id="header" class="header">
			Guitarras Emporium
		</div>			
		<div id="content" class="content">
			<!-- Row 1 -->
			<div class="row">	
				<div class="col-9">
					Shopping Cart:
					<hr>
				</div>
				<div class="col-3">
					&nbsp;
				</div>
			</div>
			<?php
			
			echo '<form id="form" method="post">
				 <!-- Row 2 -->
				 <div class="row">	
					 <div class="col-12">
						<table class="product">';
					
					
					if (empty($_POST['add'])){
						echo '<br><br><br>Cart is Empty!!!!<br><br><br>';
						echo '<a href="index.php">Return to Shopping</a><br><br><br>';
						echo '	</table>
				</div>
			</div>
			
			
			</div>
			
			</form>';
						
					}
					else {
						
							$added = $_POST['add'];
							if (empty($_POST['remove'])){
								$delete = $_POST['add'];	
							}
							else
								$delete = NULL;
					
							
							//loading class 
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
						
							
							$quantity = array();
							$cost = 0;
						
							//foreach loop								
							foreach ($added as $i){
								
								if ($delete != NULL){
									foreach ($delete as $x){
										if ($x == $i) {
											continue;
										}
									}
								}
									
								$quantity[$i] = 1;
															
								
								echo '<tr class="oneitem"><td class="oneitem"><img src="image/elifas'.$guitar[$i]->image.
									'.jpg" alt="item'.$guitar[$i]->image.'" height="40" width="40"></td>';
								echo '<td>							
									Model:<br> '.$guitar[$i]->model.'<br></td><td>&nbsp;</td>';
								echo '<td>Quantity: <span class="oneitem" name="quantity'.+$i.' value="'.$quantity[$i].'">'.
										$quantity[$i].'</span><br></td><td>&nbsp;</td>';
								echo '<td>Price: '.$guitar[$i]->price.'<br></td>';
								echo '<td>
										<input type="checkbox" name="removed[]" value="'.$guitar[$i]->image.'">Remove Item from cart 
									</td></tr>';
								$cost += $guitar[$i]->price;
								echo '<span name="add[]" value="'.$guitar[$i]->image.'"></span>';
							}	
									
								echo '<tr><td></td><td></td><td></td><td></td><td></td><td>Total: <span name="total" value="'.$cost.'">$'.$cost.'</span><br></td></<tr>';
								echo 	'</table>
				</div>
			</div>
			
			<!-- Row 3 -->
			<div class="row">	
				<div class="col-1">
					&nbsp;
				</div>
				<div class="col-4">
					<input type="submit" value="Update Cart" onclick="gotoViewCart();">
				</div>
				<div class="col-1">
					&nbsp;
				</div>
				<div class="col-6">
					<input type="submit" value="Checkout" onclick="gotoCheckout();">
				</div>
			</div>
			
			</form>';
						
					
					} 
					
						?>
				
		<div>
		 <br>
		 <br>
		
		<div id="footer" class="footer">
			Guitarras Emporium
		</div>	
	</div>
	
	

</body>
</html>