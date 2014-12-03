<?php


$id=$_GET['id'];
include_once'../model/user.php';
$edit=new Chaseuni();
$editStart=$edit->find($id);
extract($editStart);

if(isset($_POST['update'])):
	$name=$_POST['name'];
	$street_address=$_POST['street_address'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$zip_code=$_POST['zip_code'];
	$mobile_phone=$_POST['mobile_phone'];
	//var_dump($mobile_phone);
//$edits=new Chaseuni();
$edit->update($id,$name,$street_address,$country,$state,$zip_code,$mobile_phone);
header("location:../process/display-update.php");
endif;
?><link rel="stylesheet" href="../inc/bootstrap.css"/>
<form action="" method="POST">
<div class="col-md-4">
	<label>Name</label>
	<input type="text" name="name" value="<?php echo $name ;?>"/>
</div>
<div class="col-md-4">
	<label>Street Address</label>
	<input type="text" name="street_address" value="<?php echo $street_address;?>"/>
</div>
<div class="col-md-4">
	<label>Country</label>
	<input type="text" name="country" value="<?php echo $country;?>"/>
</div>
<div class="col-md-4">
	<label>State</label>
	<input type="text" name="state" value="<?php echo $state;?>"/>
</div>
<div class="col-md-4"> 
	<label>Zip Code</label>
	<input type="text" name="zip_code" value="<?php echo $zip_code;?>"/>
</div>
<div class="col-md-4">
	<label>Mobile Phone</label>
	<input type="text" name="mobile_phone" value="<?php echo $mobile_phone;?>"/>
</div>
<input type="submit" class="success" name="update" value="update"/>
</form>