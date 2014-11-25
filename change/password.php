<?php


$id=$_GET['id'];
include_once'../model/user.php';
$edit=new Chaseuni();
$editStart=$edit->getValueById($id);
extract($editStart);

if(isset($_POST['update'])):
	$password = ($_POST['password']);
 	$newpassword=($_POST['new_password']);
 	if($password==$newpassword){
 		$chagnedPassword=($_POST['changed_password']);
 		$edit->changePassword($id,$password);
	header("location:../inc/read.php");
 	}
 else{
 	echo"Validation Fails";
 }

	//var_dump($mobile_phone);
//$edits=new Chaseuni();

endif;
?>
<form action="" method="POST">
<div>
	<label>password</label>
	<input type="password" name="password" value="<?php echo $password ;?>"/>
</div>
<div>
	<label>Old Password</label>
	<input type="password" name="new_password" value="<?php echo $newpassword;?>"/>
</div>
<div>
	<label>Change Passsword</label>
	<input type="password" name="changed_password" value="<?php echo $changedPassword ;?>"/>
<input type="submit" name="update" value="update"/>
</form>