<?php if($flashError!=""){?>
	<div class="alert alert-danger flash_msg">
		<?php echo $flashError;?>
	</div>

<?php } else if ($flashSuccess!=""){?>
	<div class="alert alert-success flash_msg">
	<?php echo $flashSuccess;?>
	</div>

<?php }?>
 


