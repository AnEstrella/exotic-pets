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
            <li><a href="shop_cart">Shopping Cart (#)</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>

	<div id="nav2">
		<a href='javascript:history.back(1);'>Go Back</a>
	</div>
	<div id="left-showitem" class="col-md-4">
		<h2><?= $items[0]['name'] ?></h2>
		<img src="<?= $items[0]['image_url'] ?>" width="270px" height="270px">
			<img src="#" width="40px" height="40px">
			<img src="#" width="40px" height="40px">
			<img src="#" width="40px" height="40px">
			<img src="#" width="40px" height="40px">
			<img src="#" width="40px" height="40px">
	</div>
	<div id="item-description" class="col-md-8">
		<p>
			<?= $items[0]['description'] ?>
		</p>
		<form>
			<h5>Price:</h5>
			<select>		
			  <option value="1">1 (<?= $items[0]['price'] ?>)</option>
			  <option value="2">2 (<?= ($items[0]['price']*2) ?>)</option>
			  <option value="3">3 (<?= ($items[0]['price']*3) ?>)</option>
			</select>
			<input type="submit" value="Buy">
		</form>
	</div>
	<div id="similar-items" class="col-md-12">
		<h4>Similar Items</h4>
		 <ul>
	      <li><img src="#" height="120px" width="120px"><p>Item 1</p></li>
	      <li><img src="#" height="120px" width="120px"><p>Item 2</p></li>
	      <li><img src="#" height="120px" width="120px"><p>Item 3</p></li>
	      <li><img src="#" height="120px" width="120px"><p>Item 4</p></li>
	      <li><img src="#" height="120px" width="120px"><p>Item 5</p></li>
	      <li><img src="#" height="120px" width="120px"><p>Item 6</p></li>
	  	</ul>
	</div>


</body>