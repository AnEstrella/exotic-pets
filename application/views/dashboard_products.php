<html>
<head>
	<title></title>
	<link rel="stylesheet" type='text/css'href='/assets/css/bootstrap.css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/admin_style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
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
						$('#table_body').append("<tr><td class='image_column'>" + "<img height='80' width='100' src='" + val.image_url + "'></a></td><td class='small_column'>" + val.id + "</td><td class='small_column'>" + val.name + "</td><td class='small'>" + val.inventory_count + "</td><td class='small'>" + val.total_sold + "</td><form method='post' action='/deleteItem/" + val.id + "'><td><input type='submit' class='btn btn-warning' value='Edit'> <button class='btn btn-danger' data-href='/deleteItem/" + val.id + "'data-toggle='modal' data-target='#confirm-delete' href='" + val.id + "'>Delete</a></button>");
																																																																																							
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
      		<a href='/loadOrders' id='orders_link'>Orders</a>
      		<a href='#' id='products_link_on_products'>Products</a>
      		<a href='/logOff' id='logoff_link'>log off</a>
		</div>
	</div>
</nav>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-'>
				<form method='post' action='/searchProducts' id='products_form'>
					<input id='products_search' type='text' placeholder='search' name='products_search'>
				</form>
					<input class='btn btn-primary' id='add_button' type='button' data-toggle='modal' data-target='#myModal' value='Add new product'>
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
						<td><input type='submit' class='btn btn-warning' data-toggle="modal" data-target="#editModal" value='Edit'>  <button class='btn btn-danger' data-href='<?=base_url("/deleteItem/{$product['id']}")?>' data-toggle="modal" data-target="#confirm-delete" href='<?=base_url("{$product['id']}")?>'>Delete</a></button>
					</tr>
<?php } ?>
				</tbody>
			</table>
		</div>

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body">
                    <p>You are about to delete this item. Are you sure you want to do this?</p>
                    <p>Do you want to proceed?</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="#" class="btn btn-danger danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.danger').attr('href') + '</strong>');
        })
    </script>
 <div class="container">
  <!-- Edit Product modal content -->
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Product</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
                <label for="InputProductName">Name:</label>
                <input type="text" class="form-control" name="InputProductName" id="InputProductName" placeholder="Enter Product Name" required>
            </div>
            <div class="form-group">
              <label for="InputProductDesc">Description:</label>
              <textarea name="InputProductDesc" id="InputProductDesc" class="form-control" rows="5" required></textarea>
            </div>
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
              Categories
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Indoor</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Female</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bird</a></li>
              </ul>
            </div>
            <div class="form-group">
                <label for="InputNewProductCategory">Add Category:</label>
                <input type="text" class="form-control" name="InputNewProductCategory" id="InputNewProductCategory" placeholder="Add Category" required>
            </div>
            <div class="form-group">
                <label for="InputImage">Upload Image</label>
                <input type="text" class="form-control" name="InputImage" id="InputImage" placeholder="Browse Images..." required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-secondary">Preview</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Edit Product modal content -->
  <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Edit Product</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
                <label for="InputProductName">Name:</label>
                <input type="text" class="form-control" name="InputProductName" id="InputProductName" placeholder="Enter Product Name" required>
            </div>
            <div class="form-group">
              <label for="InputProductDesc">Description:</label>
              <textarea name="InputProductDesc" id="InputProductDesc" class="form-control" rows="5" required></textarea>
            </div>
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
              Categories
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Indoor</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Female</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bird</a></li>
              </ul>
            </div>
            <div class="form-group">
                <label for="InputNewProductCategory">Add Category:</label>
                <input type="text" class="form-control" name="InputNewProductCategory" id="InputNewProductCategory" placeholder="Add Category" required>
            </div>
            <div class="form-group">
                <label for="InputImage">Upload Image</label>
                <input type="text" class="form-control" name="InputImage" id="InputImage" placeholder="Browse Images..." required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-secondary">Preview</button>
          <button type="button" class="btn btn-primary">Update</button>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="bs-example" style="padding-bottom: 24px;">



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