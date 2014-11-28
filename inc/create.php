	<?php
	include_once'../model/user.php';
	if(isset($_POST['login'])&& !empty($_POST['name']) AND !empty($_POST['password'])&& !empty($_POST['email'])):
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		//var_dump($password);
		//
	$createStart = new Chaseuni();
	$create = $createStart->create($name,$email,$password);
	header("location:read.php");

	endif;
	?>
		<h1> Registration</h1>
		<link rel="stylesheet" href="bootstrap.css"/>
	<form action="" method="POST">
	<div class="col-md-5-offset-3">
		<label>Name</label>
		<input type="text" name="name"/>
	</div>
	<div class="col-md-4-offset-4">
		<label>Email</label>
		<input type="email" name="email"/>
	</div>
	<div class="col-md-4-offset-4">
		<label>Password</label>
		<input type="password" name="password"/>
	</div>
	<input type="submit" name="login" value="login"/>
	</form>
