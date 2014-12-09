<html>
<head>
	<title></title>
	<link rel="stylesheet" type='text/css'href='/assets/css/bootstrap.css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/admin_style.css">
</head>
<body>

<nav class='navbar-default' role='navigation'>
	<div class='container-fluid'>
		<div class='navbar-header'>
			<h3>Dashboard</h3>
      		<a href='#' id='orders_link'>Orders</a>
      		<a href='/loadProducts.php' id='products_link'>Products</a>
      		<a href='#' id='logoff_link'>log off</a>
		</div>
	</div>
</nav>
	<div class='container'>
		<div class='row'>
			<div class='col-md-4'>
				<p>Order ID: 1</p>
				<p>Customer Shipping Info:</p>
				<ul id='show_customer_shipping'>
					<li>Name:</li>
					<li>Address:</li>
					<li>City:</li>
					<li>State:</li>
					<li>Zip:</li>
				</ul>
				<p>Customer Billing Info:</p>
				<ul id='show_customer_billing'>
					<li>Name:</li>
					<li>Address:</li>
					<li>City:</li>
					<li>State:</li>
					<li>Zip:</li>
				</ul>
			</div>
			<div class='col-md-8'>
				<table id='show_table' class='table table-striped table-bordered'>
					<thead>
						<th>ID</th>
						<th>Item</th>
						<th>Prices</th>
						<th>Quantity</th>
						<th>Total</th>
					</thead>
					<tbody>
						<tr>
							<td>35</td>
							<td>Cat</td>
							<td>$1,000</td>
							<td>2</td>
							<td>$2,000</td>
						</tr>
					</tbody>
				</table>
				<p id='show_status'>Status: shipped</p>
				<ul id='show_price_total'>
					<li>Sub Total: $101.99</li>
					<li>Shipping: $50.99</li>
					<li>Total Price: $151.99</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>