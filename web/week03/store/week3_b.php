<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" type="text/css" href="assign11.css">
	<title>George Brown: Assignment 11</title>
</head>

<body>
	<h1>Assignment 11: PHP Form Processing</h1>
	<br>
	<hr>

	<h2>
		<?php
			if(isset($_POST['confirm'])) {
				echo 'Thank you!! Your order has been placed.';
			}
			elseif (isset($_POST['cancel'])) {
				echo 'Your order has been cancelled.';
			}		
		?>	
			<img src="elifas.jpg" height="30" width="150">
	</h2>
	
	<hr>
	<br>
	<input type="button" name="newOrder" value="Place a New Order!" onclick="location.href='assign11.html';">
	<br>
	<br>

	<hr>
	<hr>
	<footer>
		<a href="../index.html">CS 213 Assignments</a>
		<br>
		<br>
		<br>
	</footer>


</body>
</html>