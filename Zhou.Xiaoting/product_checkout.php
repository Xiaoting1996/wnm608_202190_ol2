<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>U's ED Checkout </title>
<meta name="viewport" content="width=device-width">

<base href="http://xiaotingzhou.com/aau/wnm608/Zhou.Xiaoting/">


<link rel="stylesheet" href="https://use.typekit.net/pdt7con.css">
<link rel="stylesheet" href="lib/css/styleguide.css">
<link rel="stylesheet" href="lib/css/gridsystem.css">
<link rel="stylesheet" href="css/storetheme.css">
</head>
<body>

	<?php include "parts/navbar.php"; ?>


<div class="container">
	<div class="card soft">
		<form>
		<h3>Address</h3>
			<div class="form-control">
				<label class="address-street" class="form-label">Street</label>
				<input id="address-street" type="text" placeholder="Street" class="form-input">
			</div>
			<div class="form-control">
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
				 		<label for="address-city" class="form-label">City</label>
				 		<input id="address-city" type="text" placeholder="City" class="form-input">
					</div>
					<div class="col-xs-12 col-md-6">
				 		<label for="address-state" class="form-label">State</label>
				 		<input id="address-state" type="text" placeholder="State" class="form-input">
					</div>
				</div>
			</div>
			<div class="form-control">
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
				 		<label for="address-zip" class="form-label">Zip Code</label>
				 		<input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
					</div>
					<div class="col-xs-12 col-md-6">
				 		<label for="address-country" class="form-label">Country</label>
				 		<input id="address-country" type="text" placeholder="Country" class="form-input">
					</div>
				</div>
			</div>
		<h3>Payment</h3>
			<div class="form-control">
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
				 		<label for="payment-firstname" class="form-label">First Name</label>
				 		<input id="payment-firstname" type="text" placeholder="First Name" class="form-input">
					</div>
					<div class="col-xs-12 col-md-6">
				 		<label for="payment-lastname" class="form-label">Last Name</label>
				 		<input id="payment-lastname" type="text" placeholder="Last Name" class="form-input">
					</div>
				</div>
			</div>

			<div class="form-control">
				<label class="payment-number" class="form-label">Card Number</label>
				<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
			</div>
			<div class="form-control">
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
				 		<label for="payment-expiration" class="form-label">Expiration</label>
				 		<input id="payment-expiration" type="text" placeholder="MM/YY" class="form-input">
					</div>
					<div class="col-xs-12 col-md-6">
				 		<label for="payment-cvv" class="form-label">CVV</label>
				 		<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
					</div>
				</div>
			<div class="form-control">
				<label class="payment-zip" class="form-label">Zip Code</label>
				<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
			</div>
			</div>
			<div class="form-control">
				<a href="product_confirmation.php" class="form-button"> Submit </a>
			</div>
		</form>

	</div>
</div>
	
</body>
</html>