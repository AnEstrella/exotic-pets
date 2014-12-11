<html>
<head>
	<title></title>
<link rel="stylesheet" href="../../assets/css/shop_style.css">
	<!-- Latest compiled and minified CSS --> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


<script>
$("#sort_by_dropdown").change(function() {
  alert( "Handler for .change() called." );
});
</script>

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
            <li><a href="shop_cart">Shopping Cart (#)</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>

<div id="categories">
	<form class="form-search form-inline">
	<input type="search-query" placeholder="product name" class="form-control">
	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	</form>
	<h4>Categories</h4>
	<ul>
		<li><a href="/">All (#)</a></li>
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
	  			(page #)
	  		</h2>
	  	</div>
	  	<div id="grid-header-right">
		  	<ul class="navbar-right">
		      <li><a href="#">first</a></li>
		      <li><a href="#">prev</a></li>
		      <li><a href="#">#</a></li>
		      <li><a href="#">next</a></li>
		    </ul>
		</div>
 	</div>
 	<div id="sort-dropdown" class="navbar-right">
 		<p>
	 		Sort By:
	 		<select class="sort_by_dropdown">
	 			<option value="price">Price</option>
	 			<option value="most popular">Most Popular</option>
	 			<option value="name">Name</option>
	 		</select>
 		</p>
 	</div>

 	<div id="product-images">
	    <ul>
		<?php 
		foreach(array_slice($items, 0,15) as $item) {
			if(!isset($item['item_id'])){?>
				<li>
					<a href="/shop_showitem/<?= $item['id'] ?>">
						<img src="<?= $item['image_url'] ?>">
						<span class="thumbnail-price"><?= $item['price'] ?></span>
						<p><?= $item['name'] ?></p>
					</a>
				</li>
			<? } else
			 {?>
				<li>
					<a href="/shop_showitem/<?= $item['item_id'] ?>">
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
      <li><a href="shop_cart">1</a></li>
      <li><a href="shop_cart">2</a></li>
      <li><a href="shop_cart">3</a></li>
      <li><a href="shop_cart">4</a></li>
      <li><a href="shop_cart">5</a></li>
      <li><a href="shop_cart">6</a></li>
      <li><a href="shop_cart">7</a></li>
      <li><a href="shop_cart">8</a></li>
      <li><a href="shop_cart">9</a></li>
      <li><a href="shop_cart">10</a></li>
    </ul>
  </div>
</div>

</body>
</html>