<?php
$id=$_GET['id'];
include_once'../model/user.php';

$updateDisplay=new Chaseuni();
$update=$updateDisplay->read();



?>
<link rel="stylesheet" href="../inc/bootstrap.css"/>
<table class="table table-bordered">
	<tr class="danger">
		<td>S.N</td>
		<td>Name:</td>
		<td>Street Address:</td>
		<td>Country:</td>
		<td>State</td>
		<td>Zip code</td>
		<td>Mobile Number</td>
	</tr>
	<?php $i=1	;?>
	<?php foreach($update as $key=>$value):?>
		<tr class="info">
			<td><?php echo $i++ ;?></td>
			<td><?php echo $value['name'] ;?></td>
			<td><?php echo $value['street_address'] ;?></td>
			<td><?php echo $value['country'] ;?></td>
			<td><?php echo $value['state'] ;?></td>
			<td><?php echo $value['zip_code'];?></td>
			<td><?php echo $value['mobile_phone'] ;?></td>
			<td><a href="../inc/read.php?id=<?php echo $value["user_id"];?>"/>Redirect</a></td>
			</tr>
		<?php endforeach;?>
		</table>