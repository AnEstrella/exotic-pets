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
#product-grid{
	border: 2px solid black;
	width: 900px;
	display: inline-block;
	vertical-align: top;
	margin-top: 63px;
	margin-left: 10px;
	padding-left: 20px;
	height: 620px;
	position: relative;
}
#grid-header{
	position: absolute;
	display: inline-block;
}
#grid-nav{
	margin-right: 20px;
	padding-top: 10px;
}
#product-images{
	margin-top: 50px;
}
	#product-images ul{
		list-style-type: none;
	}
	#product-images li{
		display: inline-block;
		padding: 10px;
}
#grid-footer{
	position: absolute;
	bottom: 10px;
} 
#nav2
{
	display: block;
	margin-top: 70px;
	margin-left: 20px;
}
#left-showitem{
	margin-top: 10px;
	margin-left:15px;
	display: inline-block;
	width: 300px;
	vertical-align: top;
	padding: 10px;	
}
#left-showitem img{
	padding: 5px;
}
#item-description{
	display: inline-block;
	vertical-align: top;
	margin-top: 10px;
	margin-left: 10px;
	padding-left: 20px;
	height: 400px;
	position: relative;
	max-width: 800px;
	padding-top: 70px;
}
#item-description select{
	position: absolute;
	right: 100px;
}
#similar-items
{
	width: 1000px;
	height: 200px;
	margin-left:15px;
	margin-top: 10px;
	display: inline-block;
}
	#similar-items ul{
		list-style-type: none;
	}
	#similar-items li{
		display: inline-block;
		padding: 10px;
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

	<div id="nav2">
		<a href="#">Go Back</a>
	</div>
	<div id="left-showitem" class="col-md-4">
		<h2>Black Belt for Staff</h2>
		<img src="#" width="270px" height="270px">
			<img src="#" width="40px" height="40px">
			<img src="#" width="40px" height="40px">
			<img src="#" width="40px" height="40px">
			<img src="#" width="40px" height="40px">
			<img src="#" width="40px" height="40px">
	</div>
	<div id="item-description" class="col-md-8">
		<p>
			Item Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<select>
		  <option value="1">$19.99</option>
		  <option value="2">$13.98</option>
		  <option value="3">$59.97</option>
		</select>
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