<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
 
   <link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Admin</b>Panel</a>
  </div>
  <?php if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])){?>
		<center><div class="login-box-body">
			<h3>Log Out</h3>
			<p>go to <a href="dashboard.php" class="log-out">dashboard</a></p>
			<p>click to <a href="logout.php" class="log-out">logout</a></p>
		</div></center>
	<?php }else{ ?>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
	<?php if(isset($_SESSION['loginCreate']) && !empty($_SESSION['loginCreate']) && ($_SESSION['loginCreate']=="yes")){?>
			<p>Login to Continue...</p>
		<?php }?>
    <form id="form-login" name="form-login" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username"  placeholder="username">
		<span class="glyphicon form-control-feedback"><i class="fa fa-user"></i></span>
      
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password"  placeholder="Password">
        <span class="glyphicon form-control-feedback"><i class="fa fa-key"></i></span>
		
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="button" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
   
  </div>
  <?php } ?>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="plugin/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="plugin/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="plugin/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/form-validation.js"></script>
<script>
jQuery(document).ready(function() {
	$(".box-login").show();
	document.getElementById("form-login").reset();
});
</script>
<script>
$(document).ready(function(){
	// Enter To fire Login code
	$('#form-login').keydown(function(e) {
		var key = e.which;
		if (key == 13){
			if(!$("#form-login").valid()){
				return false;	
			}else{
				var form = document.getElementById("form-login");
				formdata2 = new FormData(form);
				$.ajax({
					url : "model/login.php",
					cache : false,
					contentType : false,
					processData : false,
					data : formdata2,
					beforeSend: function() {
						$(".loading-div").removeClass('no-display');
						$(".loading-div").addClass('display');
						$(".main-form-div").addClass('no-display');
						$(".main-form-div").removeClass('display');
					},
					type : "post",
					success : function(data) {
						if(data == 1){
							$(".loading-div").removeClass('no-display');
							$(".loading-div").addClass('display');
							$(".main-form-div").addClass('no-display');
							$(".main-form-div").removeClass('display');
							window.location.href = 'dashboard.php';
						}else{
							$(".loading-div").removeClass('display');
							$(".loading-div").addClass('no-display');
							$(".main-form-div").addClass('display');
							$(".main-form-div").removeClass('no-display');

							$(".email").css("border","1px solid red");
							$(".password").css("border","1px solid red");
							alert("Email and Password Is Wrong...");
						}
					}
				});
			}
		}
	});
	
	$(".btn-login").click(function(){
		//form.validate();
		if(!$("#form-login").valid()){
			return false;	
		}else{
			var form = document.getElementById("form-login");
			formdata2 = new FormData(form);
			$.ajax({
				url : "model/login.php",
				cache : false,
				contentType : false,
				processData : false,
				data : formdata2,
				beforeSend: function() {
					$(".loading-div").removeClass('no-display');
					$(".loading-div").addClass('display');
					$(".main-form-div").addClass('no-display');
					$(".main-form-div").removeClass('display');
				},
				type : "post",
				success : function(data) {
					if(data == 1){
						$(".loading-div").removeClass('no-display');
						$(".loading-div").addClass('display');
						$(".main-form-div").addClass('no-display');
						$(".main-form-div").removeClass('display');
						window.location.href = 'dashboard.php';
					}else{
						$(".loading-div").removeClass('display');
						$(".loading-div").addClass('no-display');
						$(".main-form-div").addClass('display');
						$(".main-form-div").removeClass('no-display');

						$(".username").css("border","1px solid red");
						$(".password").css("border","1px solid red");
						alert("Email and Password Is Wrong...");
					}
				}
			});
		}
	});
});
</script>
</body>
</html>
