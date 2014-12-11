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

  	<script type="text/javascript">
  		function fillinBilling(userForm)
  		{
  			if (userForm.sameAddress.checked == true)
  			{
  				console.log(userForm);
  				userForm.BillingFirstName.value = userForm.ShippingFirstName.value;
  				userForm.BillingLastName.value = userForm.ShippingLastName.value;
  				userForm.BillingAddress.value = userForm.ShippingAddress.value;
  				userForm.BillingAddress2.value = userForm.ShippingAddress2.value;
  				userForm.BillingCity.value = userForm.ShippingCity.value;
  				userForm.BillingState.value = userForm.ShippingState.value;
  				userForm.BillingZipcode.value = userForm.ShippingZipcode.value;				 
  			}


  		}
  	</script>
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

	.errors {
		color: red;
	}

  	</style>
  </head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class='container-fluid'>
			<div class='navbar-header'>
				<a class="navbar-brand"href='/'><h3>Exotic Pets</h3></a>
				<p>&nbsp;&nbsp;</p>
			</div>
				<h3 class="navbar-right">Shopping Cart (<?php echo $this->session->userdata("total_items"); ?>)</h3>
		</div>
	</nav>
	<div class="container"> <!-- Shopping Cart Items -->
		<div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
		</div>
		<div class='row' id='table_row'>
			<table class='table table-striped table-bordered'>
				<thead>
					<th>Item #</th>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</thead>
				<tbody>
<?php 				
	
					if (isset($this->session->userdata['cart'])) 
					{
						foreach ($this->session->userdata("cart") as $cartitem)
						{
							echo "<tr>";
							
							foreach ($cartitem as $values) 
								echo "<td>" . $values . "</td>";

							echo "</tr>";
						} 
					}
?>
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					</tbody>
			</table>
		<div class='row'>
			<div class='navbar-right'>
				<p class="pull-right">Product Total: $<?= $this->session->userdata("total_price") ?>.00</p>
				<!-- <form action='process' method='post'> -->
				<p><a href="/"><input class='btn btn-primary' id='continueShopping' name="continueShopping" value='Continue Shopping'></a></p>
				<!-- </form> -->
			</div>
		</div> <!-- End Shopping Cart Items -->
		<div class="row errors">  <!-- Print any form entry errors. -->
<?php 	
				echo "<br>";
 				if ($this->session->flashdata("registration_error"))
					{
						echo $this->session->flashdata("registration_error") . "<br>";
					}
?>		
		</div>
    	<div class="row">
	    	<h1>Shipping Information</h1>
	        <form role="form" action="/cart/submitorder" method="post">
	            <div class="col-lg-6">
	                <div class="form-group">
	                    <label for="ShippingFirstName">First Name:</label>
	                    <input type="text" class="form-control" name="ShippingFirstName" id="ShippingFirstName" placeholder="Enter First Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="ShippingLastName">Last Name:</label>
	                    <input type="text" class="form-control" name="ShippingLastName" id="ShippingLastName" placeholder="Enter Last Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="Password">Enter Password</label>
	                    <input type="password" class="form-control" id="Password" name="Password" placeholder="Enter Your Password" required>
	                </div>
	                <div class="form-group">
	                    <label for="PasswordConfirm">Confirm Password</label>
	                    <input type="password" class="form-control" id="PasswordConfirm" name="PasswordConfirm" placeholder="Confirm Your Password" required>
	                </div>	                
	                <div class="form-group">
	                    <label for="Email">Enter Email</label>
	                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter Email" required>
	                </div>
	                <div class="form-group">
	                    <label for="EmailConfirm">Confirm Email</label>
	                    <input type="email" class="form-control" id="EmailConfirm" name="EmailConfirm" placeholder="Confirm Email" required>
	                </div>	                
	                <div class="form-group">
	                    <label for="ShippingAddress">Address:</label>
	                    <input type="text" class="form-control" name="ShippingAddress" id="ShippingAddress" placeholder="Enter Address" required>
	                </div>
	                <div class="form-group">
	                    <label for="ShippingAddress2">Address 2:</label>
	                    <input type="text" class="form-control" name="ShippingAddress2" id="ShippingAddress2" placeholder="Enter Address 2" required>
	                </div>
	                <div class="form-group">
	                    <label for="ShippingCity">City:</label>
	                    <input type="text" class="form-control" name="ShippingCity" id="ShippingCity" placeholder="Enter City" required>
	                </div>
	                <div class="form-group">
	                    <label for="ShippingState">State:</label>
	                    <input type="text" class="form-control" name="ShippingState" id="ShippingState" placeholder="Enter State" required>
	                </div>
	                <div class="form-group">
	                    <label for="ShippingZipcode">Zipcode:</label>
	                    <input type="text" class="form-control" name="ShippingZipcode" id="ShippingZipcode" placeholder="Enter Zipcode" required>
	                </div>
	            </div>
    	</div>
    	<div class="input-group">
      		<span class="input-group-addon">
        		<input type="checkbox" name="sameAddress" onclick="fillinBilling(this.form)">&nbsp;Billing Address Same as Shipping
      		</span>
    	</div> <!-- /input-group for Billing/Shipping -->
    	<div class="row">
	    	<h1>Billing Information</h1>
	            <div class="col-lg-6">
	                <div class="form-group">
	                    <label for="BillingFirstName">First Name:</label>
	                    <input type="text" class="form-control" name="BillingFirstName" id="BillingFirstName" placeholder="Enter First Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="BillingLastName">Last Name:</label>
	                    <input type="text" class="form-control" name="BillingLastName" id="BillingLastName" placeholder="Enter Last Name" required>
	                </div>
	                <div class="form-group">
	                    <label for="BillingAddress">Address:</label>
	                    <input type="text" class="form-control" name="BillingAddress" id="BillingAddress" placeholder="Enter Address" required>
	                </div>
	                <div class="form-group">
	                    <label for="BillingAddress2">Address 2:</label>
	                    <input type="text" class="form-control" name="BillingAddress2" id="BillingAddress2" placeholder="Enter Address 2" required>
	                </div>
	                <div class="form-group">
	                    <label for="BillingCity">City:</label>
	                    <input type="text" class="form-control" name="BillingCity" id="BillingCity" placeholder="Enter City" required>
	                </div>
	                <div class="form-group">
	                    <label for="BillingState">State:</label>
	                    <input type="text" class="form-control" name="BillingState" id="BillingState" placeholder="Enter State" required>
	                </div>
	                <div class="form-group">
	                    <label for="BillingZipcode">Zipcode:</label>
	                    <input type="text" class="form-control" name="BillingZipcode" id="BillingZipcode" placeholder="Enter Zipcode" required>
	                </div>	                
	                <div class="form-group">
	                    <label for="CreditCard">Credit Card:</label>
	                    <input type="number" class="form-control" id="CreditCard" name="CreditCard" placeholder="Enter Credit Card Number" required>
	                </div>
	                <div class="form-group">
	                    <label for="SecurityCode">Security Code:</label>
	                    <input type="number" class="form-control" id="SecurityCode" name="SecurityCode" placeholder="Enter Card Security Code" required>
	                </div>
	                <div class="form-group">
	                    <label for="ExpirationMonth">Expiration Month:</label>
	                    <input type="number" class="form-control" id="ExpirationMonth" name="ExpirationMonth" placeholder="Enter 2 Digit Card Expiration Month" required>
	                </div>
	                <div class="form-group">
	                    <label for="ExpirationYear">Expiration Year:</label>
	                    <input type="number" class="form-control" id="ExpirationYear" name="ExpirationYear" placeholder="Enter 4 Digit Card Expiration Year" required>
	                </div>
				<div class="dropdown pull-right">
  					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    					Shipping Method
    					<span class="caret"></span>
  					</button>
				  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Overnight</a></li>
				    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Express</a></li>
				    	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ground</a></li>
				  	</ul>
	                <input type="submit" name="submit" id="submit" value="Pay" class="btn btn-info pull-right">
				</div>

	            </div>
	        </form>
    	</div>
  	</div>
</body>
</html>
