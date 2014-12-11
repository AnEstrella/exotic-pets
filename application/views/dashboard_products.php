<html>
<head>
	<title></title>
	<link rel="stylesheet" type='text/css'href='/assets/css/bootstrap.css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/admin_style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('keyup', '#products_form', function(){
			$('#table_body').html('');
			$.post(
				$(this).attr("action"),
				$(this).serialize(),
				function(products)
				{
					jQuery.each(products['products'], function(i, val)
					{
						$('#table_body').append("<tr><td class='image_column'>" + "<img height='80' width='100' src='" + val.image_url + "'></a></td><td class='small_column'>" + val.id + "</td><td class='small_column'>" + val.name + "</td><td class='small'>" + val.inventory_count + "</td><td class='small'>" + val.total_sold + "</td><form method='post' action='/deleteItem/" + val.id + "'><td><input type='submit' class='btn btn-warning' value='Edit'> <input type='submit' class='btn btn-danger' value='Delete'></form>");
																																																																						
																																																																							
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
      		<a href='/' id='orders_link'>Orders</a>
      		<a href='#' id='products_link_on_products'>Products</a>
      		<a href='#' id='logoff_link'>log off</a>
		</div>
	</div>
</nav>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-'>
				<form method='post' action='/searchProducts' id='products_form'>
					<input id='products_search' type='text' placeholder='search' name='products_search'>
				</form>
					<input class='btn btn-primary' id='add_button' value='Add new product'>
			</div>
		</div>
		<div class='row' id='table_row'>
			<table class='table table-striped table-bordered'>
				<thead>
					<th>Picture</th>
					<th class='small_column'>ID</th>
					<th class='small_column'>Name</th>
					<th class='small_column'>Inventory Count</th>
					<th class='small_column'>Quantity Sold</th>
					<th class='small_column'>Action</th>
				</thead>
				<tbody id='table_body'>
<?php 				
					foreach($products as $product)
				{?>
					<tr>
						<td class='image_column'><img src='<?=$product['image_url']?>' height='80' width='100'></td>
						<td class='small_column'><?=$product['id']?></td>
						<td><?=$product['name']?></td>
						<td class='small_column'><?=$product['inventory_count']?></td>
						<td class='small_column'><?=$product['total_sold']?></td>
						<form method='post' action='<?=base_url("/deleteItem/{$product['id']}")?>'>
							<td><input type='submit' class='btn btn-warning' value='Edit'>  <input type='submit' class='btn btn-danger' value='Delete'>
					
						</form>
					</tr>
<?php } ?>
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