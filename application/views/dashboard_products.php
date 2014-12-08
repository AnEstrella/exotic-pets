<html>
<head>
	<title></title>
	<link rel="stylesheet" type='text/css'href='/assets/css/bootstrap.css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>

<nav class='navbar-default' role='navigation'>
	<div class='container-fluid'>
		<div class='navbar-header'>
			<h3>Dashboard</h3>
      		<a href='#' id='orders_link'>Orders</a>
      		<a href='#' id='products_link'>Products</a>
      		<a href='#' id='logoff_link'>log off</a>
		</div>
	</div>
</nav>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-'>
				<form method='post' action='/searchProducts'>
					<input id='products_search' type='text' placeholder='search'>
					<input class='btn btn-primary' id='add_button' value='Add new product'>
				</form>
			</div>
		</div>
		<div class='row' id='table_row'>
			<table class='table table-striped table-bordered'>
				<thead>
					<th>Picture</th>
					<th>ID</th>
					<th>Name</th>
					<th>Inventory Count</th>
					<th>Quantity Sold</th>
					<th>Action</th>
				</thead>
				<tbody>
					<tr>
						<td>PICTURE</td>
						<td>1</td>
						<td>Elephant</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>2</td>
						<td>Giraffe</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>3</td>
						<td>Dog</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>4</td>
						<td>Cat</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>5</td>
						<td>Lion</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>6</td>
						<td>Hyena</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>7</td>
						<td>Hippopotamus</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>8</td>
						<td>Zebra</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>9</td>
						<td>Horse</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>10</td>
						<td>Hampster</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>11</td>
						<td>Snake</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>12</td>
						<td>Chameleon</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>13</td>
						<td>Elephant</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
					</tr>
					<tr>
						<td>PICTURE</td>
						<td>14</td>
						<td>Elephant</td>
						<td>20</td>
						<td>1000</td>
						<td><a href='#'>edit</a>  <a href='#'>remove</a></td>
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