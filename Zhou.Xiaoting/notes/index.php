<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo "<div> Hello world </div>";

	$a = 5;


	//String Interpolation

	echo "<div>I have $a Things</div>";
	echo '<div>I have $a Things</div>';

	// Number
	// Integer
	$b = 15;
	// Float
	$b = 0.576;

	$b = 10;

	// String
	$name = "Xiaoting2";

	//Boolean
	$isON = true;



	// Math
	// PEMDAS
	//echo (5 - 4) * 2;

	// Concatenation
	echo "<div>b + a"."= c</div>";
	echo "<div>$b + $a= ".($a+$b)."</div>";








	echo $a;
	 ?>

	 <hr>
	 <div>This is my name</div>
	 <div>
	 	<?php

	 	$firstname = "Xiaoting";
	 	$lastname = "Zhou";
	 	$fullname = $firstname." ".$lastname;


	 	echo $fullname;

	 	?>

	 	<hr>
	 	<?php
	 	// Superglobal
	 	// ?name=Neil
	 	echo "<a href= '?name=Neil'>vistit></a><br>";
	 	echo "<div>My name is {$_GET['name']}</div>";

	 	// ?name=Neil&type=textarea

	 	echo "<a href= '?name=Neil&type=textarea'>visit></a><br>";
	 	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

	 	?>
	 	<hr>
	 	<?php 

	 	// Array
	 	$colors = array("red","green","blue");

	 	echo $colos[0];

	 	echo "
	 		<br>$colors[0]
	 		<br>$colors[1]
	 		<br>$colors[2]
	 	";

	 		echo count($colors);

	 	 ?>


	 	 <div style="color:<?= $colors[1] ?>">
	 	 	This text is green
	 	 </div>


	 	 <hr>
	 	 <?php 
	 	 // Associative Array
	 	 $colorsAssociative = [
	 	 	"red" => "#f00",
	 	 	"green" => "#0f0",
	 	 	"blue" => "#00f"
	 	 ];

	 	 echo $colorsAssociative['green'];

	 	  ?>
	 	  <hr>
	 	  <?php 
	 	   // Casting
	 	  $c = "$a";
	 	  $d = $c*1;

	 	  $colorsObject = (object)$colorsAssociative;

	 	  // echo $colorsObkect;

	 	  echo "<hr>";

	 	  //Array Index Notation
	 	  echo $colors[0]."<br>";
	 	  echo $colorsAssociative['red']."<br>";
	 	  echo $colorsAssociative[$colors[0]]."<br>";

	 	  // Object Property Nptation
	 	  echo $colorsObject->red."<br>";
	 	  echo $colorsObject->{$colors[0]}."<br>";



	 	  ?>

	 	  <hr>

	 	  <?php 

	 	  print_r($colors);
	 	  echo "<hr>";
	 	  print_r($colorsAssociative);
	 	  echo "<hr>";
	 	  echo "<pre>",print_r($colorsObject),"</pre>";

	 	  // Function
	 	  function print_p($v) {
	 	  	echo "<pre>",print_r($v),"</pre>";
	 	  }

	 	  print_p($_GET);

	 	   ?>






	 </div>

</body>
</html>