<!DOCTYPE html>
	<html>
		<head>

		<title></title>
		<link rel="stylesheet" href="bootstrap.css"/>
		<header>
			<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation" class="danger"><a href="#">Profile</a></li>
  <li role="presentation" class="info"><a href="#">Change Email</a></li>
	</ul>
		</header>
		
		</head>

<?php
include_once'../model/user.php';
$read=new Chaseuni();
$readStart=$read->read();
//extract($readStart);

?>
<h2>My Account Page</h2>
<table class="table table-bordered">
	<tr>
		<td class="info">S.N</td>
		<td class="success">Name</td>
		<td class="danger">Email</td>
		<td class="danger">Password</td>
		<td class="info">Edit password</td>
		<td class="success">Edit my Acoount</td>
		<td class="danger">Change Your Email</td>
	<tr>
	<?php $i=1;?>
	<?php foreach($readStart as $key=>$value):?>
		<tr>
			<td class="info"><?php echo $i++ ;?></td>
			<td class="success"><?php echo $value['name'];?></td>
			<td class="danger"><?php echo $value['email'];?></td>
			<td class="warning"><?php echo $value['password'];?></td>
			<td class="info"><a href="../change/password.php?id=<?php echo $value['user_id'];?>">yes</a></td>
			<td class="success"><a href="../change/account.php?id=<?php echo $value['user_id'];?>">Yes</a></td>
			<td class="danger"><a href="../process/change-email.php?id=<?php echo $value['user_id'];?>">Yes</a></td>
		</tr>
	<?php endforeach;?>
	</table>