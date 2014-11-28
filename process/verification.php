<?php
	
	$id=$_GET['id'];
	include_once'../model/user.php';
	$toverify= new Chaseuni();
	$retrify=$toverify->getValueById($id);
	extract($retrify);

	 //if($_SERVER(REQUEST METHOD)="POST"):
		if(isset($_POST['edit'])):
	 	$verify=$_POST['verify'];
	 	$changed_email=$_POST['changed_email'];

		$processToverify = new Chaseuni();
	 	$ptv=$processToverify=Verify($id,$email,$verify);
	 	header("location:verify.php");

endif;


?>
	
	<form action="" method="POST">
		<div>
			<label>Email Address</label>
			<input type="email" name="changed_email" value="<?php echo $changed_email;?>"/>
		</div>
		<div>
			<label>Verifation link</label>
			<input type="text" name="verify" value="<?php echo $verify ;?>"/>
		</div>
		<input type="submit" name="edit" value="edit"/>
		</form>
