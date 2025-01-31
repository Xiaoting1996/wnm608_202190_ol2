<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product List</title>

	<link rel="stylesheet" href="https://use.typekit.net/pdt7con.css">
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<p><a href="U'sed.php">&lt;</a></p>
		<div class="card soft">
			<h2>Product List</h2>

			<ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>


			<?php

			include "lib/php/functions.php";

			$result = makeQuery(makeConn(),"SELECT * FROM`products`");

			print_p($result);

			 ?>
		</div>
	</div>
	
</body>
</html>