<html>
<head>
	<title></title>
<link rel="stylesheet" href="../../assets/css/shop_style.css">
	<!-- Latest compiled and minified CSS --> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style>

#categories{
	border: 2px solid black;
	margin-top: 63px;
	margin-left:15px;
	display: inline-block;
	width: 250px;
	vertical-align: top;
	padding: 10px;
}
#categories span{
	position: absolute;
	top: 85px;
	left: 220px;
}
#product-grid{
	border: 2px solid black;
	max-width: 800px;
	display: inline-block;
	vertical-align: top;
	margin-top: 63px;
	margin-left: 10px;
	padding-left: 20px;
	min-height: 620px;
	position: relative;
}
#grid-header{
	position: absolute;
	display: inline-block;
}
#grid-nav{
	margin-right: 20px;
	padding-top: 45px;
}
#product-images{
	margin-top: 50px;
}
	#product-images ul{
		list-style-type: none;
	}
	#product-images li{
		display: inline-block;
		padding: 5px;
}
.thumbnail-price{
    background: none repeat scroll 0 0 #FFFFFF;
    opacity: 0.5;
    top:100;
    left:60;
    position: absolute;
}
.thumbnail{
    position:relative;  
    width: 120px;
    height: 120px;
    display: inline-block;
}
#grid-footer{
	position: absolute;
	bottom: 10px;
} 
</style>
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
		<li>Lions</li>
		<li>Tigers</li>
		<li>Bears</li>
	</ul>
</div>

<div id="product-grid">
  <div id="grid-header">
  	<h2>Products (page #)</h2>
  </div>
  <div id="grid-nav">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="shop_cart">first</a></li>
      <li><a href="shop_cart">prev</a></li>
      <li><a href="shop_cart">#</a></li>
      <li><a href="shop_cart">next</a></li>
    </ul>
  </div>
  <div id="product-images">
    <ul>
      <li><img src="http://upload.wikimedia.org/wikipedia/commons/7/76/120px-Single.png" height="120px" width="120px"><p>Item 1</p></li>
      <li><img src="http://www.online-image-editor.com/styles/2013/images/example_image.png" height="120px" width="120px"><p>Item 2</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 3</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 4</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 5</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 6</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 7</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 8</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 9</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 10</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 11</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 12</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 13</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 14</p></li>
      <li><img src="#" height="120px" width="120px"><p>Item 15</p></li>
    </ul>
  </div>
  <div id="grid-footer">
    <ul class="nav navbar-nav">
      <li><a href="shop_cart">1</a></li>
      <li><a href="shop_cart">2</a></li>
      <li><a href="shop_cart">3</a></li>
      <li><a href="shop_cart">4</a></li>
    </ul>
  </div>
</div>

</body>
</html>