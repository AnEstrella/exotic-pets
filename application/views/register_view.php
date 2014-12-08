<html>
<head>
	<title></title>
	<link rel="stylesheet" type='text/css'href='/assets/css/bootstrap.css'>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
	<nav class='navbar-default' id='register_navbar' role='navigation'>
		<div class='container-fluid'>
			<div class='navbar-header'>
				<h3>Registration</h3>
				<a id='home_button' href='/index'>Home</a>
			</div>
		</div>
	</nav>
	<div class='container 2'>
		<div class='row 2'>
			<div class='col-lg-' id='register_container'>
				<form action='<?php echo base_url('/register');?>' method='post'>
					<h1>Register </h1>
					<ul>
						<li>First Name: <input type='text' name='first_name'></li>
						<li>Last Name: <input type='text' name='last_name'></li>
						<li>Billing Address: <input type='text' name='billing_address'</li>
						<li>Email: <input type='text' name='email'></li>
						<li>Password: <input type='password' name='password'></li>
						<li>Confirm Password: <input type='password' name='confirm_password'></li>
					<input type='submit' value='Register' class='btn btn-success' id='register_button'>
					</ul>
				</form>
			</div>
		</div>
	</div>
	<div id='error_box'>
		<?php echo $this->session->flashdata("registration_error"); ?>
	</div>
</body>
</html>