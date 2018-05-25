<?php if(isset($_SESSION['customer']['notification_success'])){?>
<div class="alert alert-success">
	<button class="close" data-dismiss="alert">
		X
	</button>
	<i class="fa fa-check-circle"></i>
	<strong>Well done!</strong> <?php echo $_SESSION['customer']['notification_success'];?>
</div>
<?php 
	unset($_SESSION['customer']['notification_success']);
	}
?>
<?php if(isset($_SESSION['customer']['notification_error'])){?>
	<div class="alert alert-danger">
		<button class="close" data-dismiss="alert">
			X
		</button>
		<i class="fa fa-times-circle"></i>
		<strong>Oh snap!</strong> <?php echo $_SESSION['customer']['notification_error'];?>
	</div>
<?php 
	unset($_SESSION['customer']['notification_error']);
	}
?>