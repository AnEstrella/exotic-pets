<html>
<head>
	<title></title>
	<link rel="stylesheet" type='text/css' href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/admin_style.css">

</head>
<body>

<nav class='navbar-default' role='navigation'>
	<div class='container-fluid'>
		<div class='navbar-header'>
			<h3>Dashboard</h3>
      		<a href='#' id='orders_link'>Orders</a>
      		<a href='/loadProducts' id='products_link'>Products</a>
      		<a href='#' id='logoff_link'>log off</a>
		</div>
	</div>
</nav>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-'>
				<form method='post' action='/searchOrders'>
					<input id='orders_search' type='text' placeholder='search'>
					<select id='order_status_dropdown'><option value='Show All'>Show All</option><option value='Order in process'>Order in process</option><option value='Shipped'>Shipped</option></select>
				</form>
			</div>
		</div>
		<div class='row' id='table_row'>
			<table class='table table-striped table-bordered'>
				<thead>
					<th>Order ID</th>
					<th>Name</th>
					<th>Date</th>
					<th>Billing Address</th>
					<th>Total</th>
					<th>Status</th>
				</thead>
				<tbody>
					<tr>
						<td><a href='#'>200</a></td>
						<td>John Doe</td>
						<td>12/5/2014</td>
						<td>1234 Coding Dojo Lane, Bellevue, WA 98005</td>
						<td>$100,000.99</td>
						<td><select><option value='Shipped'>Shipped</option><option value='Order in process'>Order in process</option><option value='Canceled'>Canceled</option></select></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class='row'>
			<ul class='table_pages'>
				<li><a href='#'><-</a></li>
				<li><a href='#'>1</a></li>
				<li><a href='#'>2</a></li>
				<li><a href='#'>3</a></li>
				<li><a href='#'>4</a></li>
				<li><a href='#'>5</a></li>
				<li><a href='#'>6</a></li>
				<li><a href='#'>7</a></li>
				<li><a href='#'>8</a></li>
				<li><a href='#'>9</a></li>
				<li><a href='#'>10</a></li>
				<li><a href='#'>-></a></li>
		</div>
	</div>
</body>
</html>