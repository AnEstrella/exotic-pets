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
      		<a href='/' id='orders_link'>Orders</a>
      		<a href='/showProducts' id='products_link'>Products</a>
      		<a href='#' id='logoff_link'>log off</a>
		</div>
	</div>
</nav>
	<div class='container'>
		<div class='row'>
			<div class='col-md-4'>
				<p>Order ID: <?=$order[0]['order_id']?></p>
				<p>Customer Shipping Info:</p>
				<ul id='show_customer_shipping'>


					<li>Name: <?=$order[0]['first_name'] . " " . $order[0]['last_name']?></li>
					<li>Address: <?=$order[0]['shipping_address']?></li>
					<li>City: <?=$order[0]['city']?></li>
					<li>State: <?=$order[0]['state']?></li>
					<li>Zip: <?=$order[0]['zip_code']?></li>
				</ul>
				<p>Customer Billing Info:</p>
				<ul id='show_customer_billing'>
					<li>Name: <?=$order[0]['first_name'] . " " . $order[0]['last_name']?></li>
					<li>Address: <?=$order[0]['billing_address']?></li>
					<li>City: <?=$order[0]['city']?></li>
					<li>State: <?=$order[0]['state']?></li>
					<li>Zip: <?=$order[0]['zip_code']?></li>
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
<?php
				foreach($order as $value)
{?>
					<tr>
						<td><?=$value['id']?></td>
						<td><?=$value['name']?></td>
						<td>$<?=$value['price']?></td>
						<td><?=$value['quantity']?></td>
						<td>$<?=$value['price_before_shipping']?></td>
					</tr>
<?php } ?>
					</tbody>
				</table>
				<p id='show_status'>Status: <?=$value['status']?></p>
				<ul id='show_price_total'>
					<li>Sub Total: $<?=$value['price_before_shipping']?></li>
					<li>Shipping: $<?=$value['shipping_price']?></li>
					<li>Total Price: $<?=$value['price_after_shipping']?></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>