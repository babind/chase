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
	<html>
		<head>
		<link rel="stylesheet" href="bootstrap.css"/>

		<meta name="Viewport" content="width=device-width",initial-scale="1">
			
		</head>
			<body>
					<div class="container">
						<div class="container-center">
							<div class="center-block">
								
								<div class="col-md-7-offset-5">
								<h1> Registration</h1>
								</div>
									<div class="container">
									<div class="form-group has-success">
								<form action="" method="POST">
									
									<div class="col-md-4">
										<div class="form-group has-suceess">
										<label>Name</label>
										<input type="text" class="form-control" name="name" placeholder="Please Enter your name"/>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group has-warning">
										<label>Email</label>
										<input type="email" class="form-control" name="email" placeholder="Enter your User Email"/>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password" placeholder="Enter Your password"/>
										</div>
								

									<input type="submit" name="login" value="login"/>

								</form>
								</div>
								</div>
								
							</div>
						</div>
					</div>
			</body>
	</html>