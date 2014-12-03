<?php
include_once"process/email_verfication.php"; ?>
<div class="background-overlay">
	<div class="bg-overlay"></div>
</div>

		<!--=== Container === -->
<div class="container">
	<div class="container-center">
		<div class="center-block">
			<div class="col-md-12">
				<div class="grid-body">
					<h2 class="grid-header">Email Verification</h2>
					<?php include_once'inc/flashMsg.php';?>
					<div style="margin-top:15px;">

							<?php if ($flashsuccess!= ""):?>
								<a class='btn-btn-primary' href="login.php">Login here</a>

							<?php endif ;?>

							<?php if($flashError!=""):?>
								<a class='btn-btn-primary' href="login.php?user_id=<?php echo $_GET['user_id']?>&resend_verification=true">Resend Verification Email</a>
									
							<?php endif ;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




