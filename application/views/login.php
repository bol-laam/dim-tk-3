<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Custom styles for Login -->
    <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet">
	
  </head>
  <body>
    <!-- Login form -->
    <form class="form-signin" method="post" action="<?php echo site_url('Login/masuk'); ?>">
	  <div class="text-center mb-4">
		<h1 class="h3 mb-3 font-weight-normal">Binus Kelompok 5 - JTBA</h1>
	  </div>
		<br>
		<br>
	  <div class="form-label-group">
		<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
		<label for="username">Username</label>
	  </div>

	  <div class="form-label-group">
		<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		<label for="inputPassword">Password</label>
	  </div>

	  <div class="checkbox mb-3">
		<label>
		  <input type="checkbox" value="remember-me"> Remember me
		</label>
	  </div>
	  
	  <!-- Submit button for the login form -->
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>
  </body>
</html>
