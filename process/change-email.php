<?php
	 
	 $id=$_GET['id'];
	 include_once'../model/user.php';
	 $editEmail=new Chaseuni();
	 $editmail=$editEmail->getValueById($id);
	 extract($editmail);
	 
	if(isset($_POST['update'])):
	 	$email=$_POST['email'];
	 	$newemail=$_POST['new_email'];
	 	$changed_email=$_POST['changed_email'];
	 	if($email==$newemail){
	 		$changed_email=$_POST['changed_email'];
	 		var_dump($changed_email);
	 		$editail=new Chaseuni();
	 		$Medit=$editail->updateEmail($id,$changed_email);
	 		header("Location:../inc/read.php");
	 	}
	 	else{
	 		echo"You have Entered Wrong Emails";
	 	}
	 
	endif;
?>
	<link rel="stylesheet" href="../inc/bootstrap.css"/>
	<form action="" method="POST">
		<div class="col-md-4">
			<label>Original Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>"/>
		</div>
		<div class="col-md-4">
			<label>Type Original Email</label>
			<input type="email" name="new_email" value="<?php echo $newemail;?>"/>
		</div>
		<div class="col-md-4">
			<label>Changed Email</label>
			<input type="email" name="changed_email" value="<?php echo $changed_email;?>"/>
		</div>
		<input type="submit" name="update" value="update"/> 
	</form>

