<html>
<head>
	<title></title>
	<link rel="stylesheet" type='text/css' href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/admin_style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('keyup', '#orders_form', function(){
			$('#table_body').html('');
			$.post(
				$(this).attr("action"),
				$(this).serialize(),
				function(orders_received)
				{
					jQuery.each(orders_received['orders'], function(i, val)
					{
						$('#table_body').append("<tr><td>" + "<a href='/viewOrder/" + val.order_id + "'>" + val.order_id + "</a></td><td>" + val.first_name + " " + val.last_name + "</td><td>" + val.ordered_on + "</td><td>" + val.billing_address + ", " + val.city + ", " + val.state + " " + val.zip_code + "</td><td>" + val.total_price + "</td><td><select><option value='" + val.status + "'>" + val.status + "</option><option value='Processing'>Processing</option><option value='Canceled'>Canceled</option></select></td></tr>");
					});
				},
				"json"
				);
			return false;
		});
		$(document).on('change', '#order_status_dropdown', function(){	
			$('#table_body').html('');
			$.post(
				$(this).attr("action"),
				$(this).serialize(),
				function(orders_sorted)
				{
					jQuery.each(orders_sorted['orders'], function(i, val)
					{
						$('#table_body').append("<tr><td>" + "<a href='/viewOrder/" + val.order_id + "'>" + val.order_id + "</a></td><td>" + val.first_name + " " + val.last_name + "</td><td>" + val.ordered_on + "</td><td>" + val.billing_address + ", " + val.city + ", " + val.state + " " + val.zip_code + "</td><td>" + val.total_price + "</td><td><select><option value='" + val.status + "'>" + val.status + "</option><option value='Processing'>Processing</option><option value='Canceled'>Canceled</option></select></td></tr>");	
					});
				},
				"json"
				);
		return false;
		});
	});
	</script>
</head>
<body>
<nav class='navbar-default' role='navigation'>
	<div class='container-fluid'>
		<div class='navbar-header'>
			<h3>Dashboard</h3>
      		<a href='#' id='orders_link_on_orders'>Orders</a>
      		<a href='/showProducts' id='products_link'>Products</a>
      		<a href='#' id='logoff_link'>log off</a>
		</div>
	</div>
</nav>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-'>
				<form method='post' action='/searchOrders' id='orders_form'>
					<input id='orders_search' type='text' placeholder='search' name='search_orders'>
				</form>
				<form method='post' action='/sortOrders' id='order_status_dropdown'>
					<select name='order_dropdown' id='order_dropdown'><option value='Show All'>Show All</option><option value='Processing'>Processing</option><option value='Shipped'>Shipped</option></select>
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
				<tbody id='table_body'>
<?php 
				foreach($orders as $order)
{?>			
					<tr>
						<td><a href='/viewOrder/<?=$order['order_id']?>'><?=$order['order_id']?></a></td>
						<td><?=$order['first_name'] . " " . $order['last_name']?></td>
						<td><?=$order['ordered_on']?></td>
						<td><?=$order['billing_address'] . ", " . $order['city'] . ", " . $order['state'] . " " . $order['zip_code']?></td>
						<td>$<?=$order['total_price']?></td>
						<td><select><option value='<?=$order['status']?>'><?=$order['status']?><option value='Shipped'>Shipped</option><option value='Processing'>Processing</option><option value='Canceled'>Canceled</option></select></td>
					</tr>
<?php } ?>
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