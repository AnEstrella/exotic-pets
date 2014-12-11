<html>
<head>
	<title></title>
	<link rel="stylesheet" type='text/css' href="/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/admin_style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click', '.dropdown-inverse li > a', function(e){
		    $('.status').text(this.innerHTML);
		    $('.status').val();
		});
		$(document).on('keyup', '#orders_form', function(){
			$('#table_body').html('');
			$.post(
				$(this).attr("action"),
				$(this).serialize(),
				function(orders_received)
				{
					jQuery.each(orders_received['orders'], function(i, val)
					{
						if (val.status === 'Shipped')
						{
							$('#table_body').append("<tr><td>" + "<a href='/viewOrder/" + val.order_id + "'>" + val.order_id + "</a></td><td>" + val.first_name + " " + val.last_name + "</td><td>" + val.ordered_on + "</td><td>" + val.billing_address + ", " + val.city + ", " + val.state + " " + val.zip_code + "</td><td>" + val.total_price + "</td><td><div class='btn-group'><button type='button' class='btn btn-success dropdown-toggle' data-toggle'dropdown' aria-expanded='false'>"+"Shipped <span class='caret'></span>"+"</button>"+"<ul class='dropdown-menu' role='menu'>"+"<li><a href='#'>Processing</a></li>"+"<li><a href='#''>Canceled</a></li>"+"</ul>"+"</div></td></tr>")
						}
						else if (val.status === 'Processing')
						{
							$('#table_body').append("<tr><td>" + "<a href='/viewOrder/" + val.order_id + "'>" + val.order_id + "</a></td><td>" + val.first_name + " " + val.last_name + "</td><td>" + val.ordered_on + "</td><td>" + val.billing_address + ", " + val.city + ", " + val.state + " " + val.zip_code + "</td><td>" + val.total_price + "</td><td><div class='btn-group'><button type='button' class='btn btn-info dropdown-toggle' data-toggle'dropdown' aria-expanded='false'>"+"Processing <span class='caret'></span>"+"</button>"+"<ul class='dropdown-menu' role='menu'>"+"<li><a href='#'>Shipped</a></li>"+"<li><a href='#''>Canceled</a></li>"+"</ul>"+"</div></td></tr>")
						}
						else if (val.status === 'Canceled')
						{
							$('#table_body').append("<tr><td>" + "<a href='/viewOrder/" + val.order_id + "'>" + val.order_id + "</a></td><td>" + val.first_name + " " + val.last_name + "</td><td>" + val.ordered_on + "</td><td>" + val.billing_address + ", " + val.city + ", " + val.state + " " + val.zip_code + "</td><td>" + val.total_price + "</td><td><div class='btn-group'><button type='button' class='btn btn-danger dropdown-toggle' data-toggle'dropdown' aria-expanded='false'>"+"Canceled <span class='caret'></span>"+"</button>"+"<ul class='dropdown-menu' role='menu'>"+"<li><a href='#'>Processing</a></li>"+"<li><a href='#''>Shipped</a></li>"+"</ul>"+"</div></td></tr>")
						}
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
						if (val.status === 'Shipped')
						{
							$('#table_body').append("<tr><td>" + "<a href='/viewOrder/" + val.order_id + "'>" + val.order_id + "</a></td><td>" + val.first_name + " " + val.last_name + "</td><td>" + val.ordered_on + "</td><td>" + val.billing_address + ", " + val.city + ", " + val.state + " " + val.zip_code + "</td><td>" + val.total_price + "</td><td><div class='btn-group'><button type='button' class='btn btn-success dropdown-toggle' data-toggle'dropdown' aria-expanded='false'>"+"Shipped <span class='caret'></span>"+"</button>"+"<ul class='dropdown-menu' role='menu'>"+"<li><a href='#'>Processing</a></li>"+"<li><a href='#''>Canceled</a></li>"+"</ul>"+"</div></td></tr>")
						}
						else if (val.status === 'Processing')
						{
							$('#table_body').append("<tr><td>" + "<a href='/viewOrder/" + val.order_id + "'>" + val.order_id + "</a></td><td>" + val.first_name + " " + val.last_name + "</td><td>" + val.ordered_on + "</td><td>" + val.billing_address + ", " + val.city + ", " + val.state + " " + val.zip_code + "</td><td>" + val.total_price + "</td><td><div class='btn-group'><button type='button' class='btn btn-info dropdown-toggle' data-toggle'dropdown' aria-expanded='false'>"+"Processing <span class='caret'></span>"+"</button>"+"<ul class='dropdown-menu' role='menu'>"+"<li><a href='#'>Shipped</a></li>"+"<li><a href='#''>Canceled</a></li>"+"</ul>"+"</div></td></tr>")
						}
						else if (val.status === 'Canceled')
						{
							$('#table_body').append("<tr><td>" + "<a href='/viewOrder/" + val.order_id + "'>" + val.order_id + "</a></td><td>" + val.first_name + " " + val.last_name + "</td><td>" + val.ordered_on + "</td><td>" + val.billing_address + ", " + val.city + ", " + val.state + " " + val.zip_code + "</td><td>" + val.total_price + "</td><td><div class='btn-group'><button type='button' class='btn btn-danger dropdown-toggle' data-toggle'dropdown' aria-expanded='false'>"+"Canceled <span class='caret'></span>"+"</button>"+"<ul class='dropdown-menu' role='menu'>"+"<li><a href='#'>Processing</a></li>"+"<li><a href='#''>Shipped</a></li>"+"</ul>"+"</div></td></tr>")
						}
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
      		<a href='/logOff' id='logoff_link'>log off</a>
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
					<select class='btn btn-primary' name='order_dropdown' id='order_dropdown'><option value='Show All'>Show All</option><option value='Processing'>Processing</option><option value='Shipped'>Shipped</option><option value='Canceled'>Canceled</option></select>
					</div>
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
<?php 
						if ($order['status'] == 'Shipped')
						{?>
							<td><div class="btn-group">
							  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							    Shipped <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
							    <li><a href="#">Processing</a></li>
							    <li><a href="#">Canceled</a></li>
							  </ul>
							</div></td></tr>

<?php } 				else if ($order['status'] == 'Canceled')
						{?>
							<td><div class="btn-group">
							  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							    Canceled <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
							    <li><a href="#">Shipped</a></li>
							    <li><a href="#">Processing</a></li>
							  </ul>
							</div></td></tr>
<?php 			
						} 
						else if ($order['status'] == 'Processing')
						{?>
							<td><div class="btn-group">
							  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							    Processing <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
							    <li><a href="#">Shipped</a></li>
							    <li><a href="#">Canceled</a></li>
							  </ul>
							</div></td></tr>					

<?php 					} 
				}?>
					</tr>
				</tbody>
			</table>
		</div>
<nav>
  <ul class="pagination pagination-lg">
    <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
  </ul>
</nav>
	</div>
</body>
</html>