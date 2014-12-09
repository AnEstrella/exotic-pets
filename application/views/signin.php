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


  	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->

  	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"> -->

<link rel="stylesheet" type='text/css'href='/assets/css/bootstrap.css'>
    <link rel="stylesheet" type="text/css" href="../../assets/css/signin.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/admin_style.css">

  </head>

  <body>
<nav class='navbar-default' role='navigation'>
  <div class='container-fluid' id='admin_login_header_box'>
    <div class='navbar-header'>
      <h3 id='admin_login'>Admin Login</h3>
    </div>
  </div>
</nav>
    <div class="container">

      <form class="form-signin" role="form" method='post' action='/admin_login'>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name='email' required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name='password' required>
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
