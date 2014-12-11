<html>
<head>
	<title></title>
<link rel="stylesheet" href="../../assets/css/shop_style.css">
	<!-- Latest compiled and minified CSS --> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href='/'>Exotic Pets</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="/admin_controller">Login</a></li>
            <li><a href="shop_cart">Shopping Cart (#)</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>

<div id="categories">
<!-- AJAX
<script>
	//   $(document).ready(function(){
	//    $('#keyword').submit(function(){
	// 	$('#product-images').html('');
	// 	$.post( 
	//       $('#search').attr('action'),
	//       $('#search').serialize(),
	//       function(output){
	//       	for (var i=0; i<output.length; i++)
	//       	{
	//       		$('#product-images').append(
	//       				// add this to div
	//       			);
	//       	}
	//       }, 'json'
	//     );
	//     return false;
	//    });
	//   });
</script>
-->	
		
	<form class="form-search form-inline" id="search" method="get" action="/searchitem">
		<input id="keyword" name="q" type="text" placeholder="product name" class="form-control">
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	</form>
	<h4>Categories</h4>
	<ul>
		<li><a href="/">All (<?= $item_count[0]['total'] ?>)</a></li>
		<?php 
			foreach(array_reverse($categories) as $category) {?>
			<li>
				<a href="/shop_products/<?= $category['id'] ?>"><?= $category['type'] ?> (#)</a>
			</li>
		<?}?> 
	</ul>
</div>

<div id="product-grid">
	<div id="grid-nav">
	  	<div id="grid-header">
	  		<h2>
	  			<?php if(!isset($items[0]['type'])){?>
	  				Animals 
	  			<?}
	  			else{?>
	  			<?= $items[0]['type'] ?>
	  			<?}?>
	  			(page 1)
	  		</h2>
	  	</div>
	  	<div id="grid-header-right">
		  	<ul class="navbar-right">
		      <li><a href="#">first</a></li>
		      <li><a href="#">prev</a></li>
		      <li><a href="#">1</a></li>
		      <li><a href="#">next</a></li>
		    </ul>
		</div>
 	</div>
<script>
	$("#sort_by_dropdown").change(function() {
	  alert( "Handler for .change() called." );
	});
</script>
 	<div id="sort-dropdown" class="navbar-right">
 		<p>
	 		Sort By:
	 		<form action="sort_items" method="get">
		 		<select id="sort_by_dropdown" name="sort_by">
		 			<option value="name">Name</option>
		 			<option value="price">Price</option>
		 			<option value="total_sold">Most Popular</option>
		 			<input type="submit" value="Sort">
		 		</select>
		 	</form >
		</p>
		 		<!-- <input type="submit" value="Sort"> -->
 	</div>

 	<div id="product-images">
	    <ul>
		<?php  
		// set 0 to start item
		//echo "<pre>"; print_r($items); echo "<pre>"; die(); 
		foreach(array_slice($items, 0,15) as $item) {
			if(!isset($item['item_id'])){?>
				<li>
					<a href="/shop_showitem/<?= $item['id'] ?>/<?= $item['category_id'] ?>">
						<img src="<?= $item['image_url'] ?>">
						<span class="thumbnail-price"><?= $item['price'] ?></span>
						<p><?= $item['name'] ?></p>
					</a>
				</li>
			<? } else
			 {?>
				<li>
					<a href="/shop_showitem/<?= $item['item_id']?>/<?= $item['category_id'] ?> ">
						<img src="<?= $item['image_url'] ?>">
						<span class="thumbnail-price"><?= $item['price'] ?></span>
						<p><?= $item['name'] ?></p>
					</a>
				</li>
		<?}}?>

	    </ul>
  </div>
  <div id="grid-footer">
    <ul class="nav navbar-nav">

<?php 
	if(isset($items[0]['id'])){
  	$item_count = $item_count[0]['total'];
  	}
  	else
  	{
 //replace with selected category count 
  	$item_count = 0;
  	}
  	$articlesPerPage = 15;
  	$total_pages = ceil($item_count / $articlesPerPage); 
  	// Check that the page number is set.
	if(!isset($_GET['page'])){
    $_GET['page'] = 0;
	}
	else{
    // Convert the page number to an integer
    $_GET['page'] = (int)$_GET['page'];
	}
	// If the page number is less than 1, make it 1.
	if($_GET['page'] < 1){
    $_GET['page'] = 1;
    // Check that the page is below the last page
	}
	else if($_GET['page'] > $total_pages){
    $_GET['page'] = $total_pages;
	}
	foreach(range(1, $total_pages) as $page){
    if($page == 1 || $page == $total_pages || ($page >= $_GET['page'] - 2 && $page <= $_GET['page'] + 2)){ ?>
    <!-- page link
	/shop_products/php echo $items[0]['id'] php close-->
      <li><a href="#"><?= $page ?></a></li>
      <?}}?>
    </ul>
  </div>
</div>

</body>
</html>