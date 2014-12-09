<?php defined('BASEPATH') OR exit('No direct script access allowed');

	// 		Shopping Cart - Ecommerce Website Project - View Classes

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ecommerce website project code igniter coding dojo">
    <meta name="author" content="exotic pets site">

    <title>Shopping Cart - Exotic Pets</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="./assets/css/signin.css">

  	<style type="text/css">

	.navbar {
  		background-color: #000; /* background color will be black for all browsers */
  		background-image: none;
  		background-repeat: no-repeat;
  		filter: none;
	}

	h3 {
		padding: 10px;
	}

  	</style>
  </head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class='container-fluid'>
			<div class='navbar-header'>
				<h3>Dojo eCommerce</h3>
			</div>
				<h3 class="navbar-right">Shopping Cart (22)</h3>
		</div>
	</nav>
	<div class="container">
		<div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
		</div>
		<div class='row' id='table_row'>
			<table class='table table-striped table-bordered'>
				<thead>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</thead>
				<tbody>
					<tr>
						<td>Clown Fish</td>
						<td>$12.00</td>
						<td>20&nbsp;<a href='#'>update</a>  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
						<td>$240.00</td>
					</tr>
					<tr>
						<td>Puppy</td>
						<td>$500.00</td>
						<td>&nbsp;1&nbsp;&nbsp;<a href='#'>update</a>  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
						<td>$500.00</td>
					</tr>
					<tr>
						<td>Baby Elephant</td>
						<td>$250,000.00</td>
						<td>&nbsp;1&nbsp;&nbsp;<a href='#'>update</a>  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
						<td>$250,000.00</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					</tbody>
			</table>
		<div class='row'>
			<div class='col-lg-'>
				<p class="navbar-right">Total: $250,740.00</p>
				<p>&nbsp;</p>
				<form method='post' action='/searchProducts'>
					<input class='btn btn-primary navbar-right' id='add_button' value='Continue Shopping'>
				</form>
			</div>
		</div>

    	<div class="row">
	    	<h1>Shipping Information</h1>
	        <form role="form">
	            <div class="col-lg-6">
	                <div class="form-group">
	                    <label for="InputFirstName">First Name:</label>
	                    <input type="text" class="form-control" name="InputFirstName" id="InputFirstName" placeholder="Enter First Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputLastName">Last Name:</label>
	                    <input type="text" class="form-control" name="InputLastName" id="InputLastName" placeholder="Enter Last Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputAddress">Address:</label>
	                    <input type="text" class="form-control" name="InputAddress" id="InputAddress" placeholder="Enter Address" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputAddress2">Address 2:</label>
	                    <input type="text" class="form-control" name="InputAddress" id="InputAddress2" placeholder="Enter Address 2" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputCity">City:</label>
	                    <input type="text" class="form-control" name="InputCity" id="InputCity" placeholder="Enter City" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputState">State:</label>
	                    <input type="text" class="form-control" name="InputState" id="InputState" placeholder="Enter State" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputZipcode">Zipcode:</label>
	                    <input type="text" class="form-control" name="InputZipcode" id="InputZipcode" placeholder="Enter Zipcode" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputEmail">Enter Email</label>
	                    <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputEmail">Confirm Email</label>
	                    <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
	                </div>
	            </div>
	        </form>
    	</div>
    	<div class="input-group">
      		<span class="input-group-addon">
        		<input type="checkbox">&nbsp;Billing Address Same as Shipping
      		</span>
    	</div> <!-- /input-group for Billing/Shipping -->
    	<div class="row">
	    	<h1>Billing Information</h1>
	        <form role="form">
	            <div class="col-lg-6">
	                <div class="form-group">
	                    <label for="InputFirstName">First Name:</label>
	                    <input type="text" class="form-control" name="InputFirstName" id="InputFirstName" placeholder="Enter First Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputLastName">Last Name:</label>
	                    <input type="text" class="form-control" name="InputLastName" id="InputLastName" placeholder="Enter Last Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputAddress">Address:</label>
	                    <input type="text" class="form-control" name="InputAddress" id="InputAddress" placeholder="Enter Address" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputAddress2">Address 2:</label>
	                    <input type="text" class="form-control" name="InputAddress" id="InputAddress2" placeholder="Enter Address 2" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputCity">City:</label>
	                    <input type="text" class="form-control" name="InputCity" id="InputCity" placeholder="Enter City" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputState">State:</label>
	                    <input type="text" class="form-control" name="InputState" id="InputState" placeholder="Enter State" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputZipcode">Zipcode:</label>
	                    <input type="text" class="form-control" name="InputZipcode" id="InputZipcode" placeholder="Enter Zipcode" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputEmail">Enter Email:</label>
	                    <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputEmail">Confirm Email:</label>
	                    <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputCreditCard">Credit Card:</label>
	                    <input type="email" class="form-control" id="InputCreditCard" name="InputCreditCard" placeholder="Enter Credit Card Number" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputSecurityCode">Security Code:</label>
	                    <input type="email" class="form-control" id="InputSecurityCode" name="InputSecurityCode" placeholder="Enter Card Security Code" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputExpirationMonth">Expiration Month:</label>
	                    <input type="email" class="form-control" id="InputExpirationMonth" name="InputExpirationMonth" placeholder="Enter Card Expiration Month" required>
	                </div>
	                <div class="form-group">
	                    <label for="InputExpirationMonth">Expiration Year:</label>
	                    <input type="email" class="form-control" id="InputExpirationYear" name="InputExpirationYear" placeholder="Enter Card Expiration Year" required>
	                </div>
	                <input type="submit" name="submit" id="submit" value="Pay for Order" class="btn btn-info pull-right">
	            </div>
	        </form>
    	</div>
  	</div>
</body>
</html>
