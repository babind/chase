<?php

	$id=$_GET['id'];
	include_once'../model/user.php';
	$edit=new Chaseuni();
	$editStart=$edit->getValueById($id);
	extract($editStart);

	if(isset($_POST['update'])&& !empty($_POST['changed_password'])):
		$password = $_POST['password'];
	 	$newpassword=$_POST['new_password'];
	 	$changedpassword=$_POST['changed_password'];
	 	if($password==$newpassword){
	 		$changedPassword=$_POST['changed_password'];
	 		$edit=new Chaseuni();
	 		$edit->changePassword($id,$changedpassword);
		header("location:../inc/read.php");
	 	}
		else{
	 	echo"Validation Fails";
	 }
	endif;
?>
<link rel="stylesheet" href="../inc/bootstrap.css"/>
<form action="" method="POST">
	<div class="col-md-4-offset-2">
		<label>password</label>
		<input type="password" name="password" value="<?php echo $password ;?>"/>
	</div>
	<div class="col-md-4-offset-1">
		<label>Old Password</label>
		<input type="password" name="new_password" value="<?php echo $newpassword;?>"/>
	</div>
	<div class="col-md-4">
		<label>Change Passsword</label>
		<input type="password" name="changed_password" value="<?php echo $changedPassword ;?>"/>
	<input type="submit" name="update" value="update"/>
</form>