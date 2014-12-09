<?php defined('BASEPATH') OR exit('No direct script access allowed');

	// 		Admin Sign In - Ecommerce Website Project - View Classes

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ecommerce website project code igniter coding dojo">
    <meta name="author" content="exotic pets site">

    <title>Admin Login - Exotic Pets</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

  	<!-- Optional theme -->
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

  	<!-- Latest compiled and minified JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="./assets/css/signin.css">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Admin Login</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

    </div> <!-- /container -->

 </body>
</html>
