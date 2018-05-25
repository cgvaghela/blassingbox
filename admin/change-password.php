<?php include_once('include/comman_session.php');
include("include/header.php");

?>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <?php include("include/sidebar.php"); ?> 
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Change Password 
       
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Change Password </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	 <div class="row">
		<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Change Password </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="post" class="form-horizontal" id="iconChangePasswordForm" name="iconChangePasswordForm">
			<!-- Notification File Start -->
                             <?php include_once('include/notification.php');?>
            <!-- Notification File End -->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2"  for="exampleInputEmail1">Username</label>
				  <div class="col-sm-7">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username"> </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2"  for="exampleInputPassword1">Old Password</label>
                  <div class="col-sm-7"><input type="password" class="form-control" id="oldPassword" name="oldPassword"	placeholder="Old Password"> </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2"  for="exampleInputPassword1">New Password</label>
                  <div class="col-sm-7"><input type="password" class="form-control" id="newPassword" name="newPassword"	placeholder="New Password"> </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2"  for="exampleInputPassword1"> Confim Password</label>
                  <div class="col-sm-7"><input type="password" class="form-control" id="confirmPassword" name="confirmPassword"	placeholder="Confim Password"> </div>
                </div>
               
               
              </div>
              <!-- /.box-body -->
			   
              <div class="box-footer">
                   <button type="button" id="iconChangePasswordBtn" class="btn btn-success icon-page btn-squared">Update</button>
					<a href="dashboard.php" class="btn btn-danger btn-squared">Cancel</a>
              </div>
            </form>
          </div> 
          </div> 
        </div> 
          
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <?php include("include/footer.php"); ?>
 
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/form-validation.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
