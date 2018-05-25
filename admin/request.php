<?php include_once('include/comman_session.php');
include_once("config/config.php");
include("include/header.php");
$db = new db();
$table = "requests";
if(isset($_REQUEST['aid'])){
	$id=$_REQUEST['aid'];
}else{
	header("Location:list-active.php");
}
$select = $db->getRow("SELECT * FROM ".$table." where `id`=?",array($id));
if($select){
	$type = "edit";
}else{
	header("Location:list-active.php");
}
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
       Request Edit
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Request Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	 <div class="row">
		<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Request <?php echo $type;?> </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  class="form-horizontal" method="post" action="model/activeManage.php" method="post" id="request_add_frm" name="request_add_frm">
			<!-- Notification File Start -->
                             <?php include_once('include/notification.php');?>
            <!-- Notification File End -->
			<input type="hidden" value="<?php echo $id;?>" name="id">
			<input type="hidden" value="<?php echo $type;?>" name="type">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2"  for="exampleInputEmail1">First Name</label>
				  <div class="col-sm-7">
					  <input type="text" placeholder="First Name..." id="pdname" class="form-control" name="first_name" value="<?php echo !empty($select['first_name']) ? $select['first_name'] : '' ?>">
				 </div>
                </div>
                <div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Last Name
								</label>
								<div class="col-sm-7">
									<input type="text" placeholder="Last Name" id="last_name" class="form-control" name="last_name" value="<?php echo !empty($select['last_name']) ? $select['last_name'] : '' ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Email
								</label>
								<div class="col-sm-7">
									<input type="text" placeholder="Email" id="email" class="form-control" name="email" value="<?php echo !empty($select['email']) ? $select['email'] : '' ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Request Title
								</label>
								<div class="col-sm-7">
									<input type="text" placeholder="Request Title" id="title" class="form-control" name="title" value="<?php echo !empty($select['title']) ? $select['title'] : '' ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="form-field-1">
									Request Body
								</label>
								<div class="col-sm-7">
									<textarea placeholder="Request Body" id="body" class="form-control" name="body"><?php echo !empty($select['body']) ? $select['body'] : '' ?></textarea>
								</div>
							</div>
               
               
              </div>
              <!-- /.box-body -->
			   
              <div class="box-footer">
                  <input type="submit" class="btn btn-success btn-squared" name="submit" value="<?php echo $type=="add" ? 'Add' : 'Save Changes'?>"/>
				   <a href="list-active.php" class="btn btn-danger btn-squared">Cancel</a>
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
<script type="text/javascript" src="dist/js/custom.js"></script>
</body>
</html>
