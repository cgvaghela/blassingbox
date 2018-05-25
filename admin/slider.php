<?php include_once('include/comman_session.php');
include_once("config/config.php");
$db = new db();
$table = "slider";

if(isset($_REQUEST['aid']) && !empty($_REQUEST['aid'])){
	$id=$_REQUEST['aid'];
}else{
	$id=0;
}
$slider = $db->getRow("SELECT * FROM ".$table." where `id`=?",array($id));
if($slider){
	$type = "edit";
}else{
	$type = "add";
}
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
		Slider
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slider</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	 <div class="row">
		<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Slider <?php echo $type;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" id="iconSliderForm" name="iconSliderForm" enctype="multipart/form-data">
			<!-- Notification File Start -->
                        <?php include_once('include/notification.php');?>
            <!-- Notification File End -->
			<input type="hidden" value="<?php echo $id;?>" name="id">
			<input type="hidden" value="<?php echo $type;?>" name="type">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2" for="exampleInputEmail1">Slider Name</label>
                  <div class="col-sm-7"><input type="text" class="form-control" id="name" name="name" value="<?php echo !empty($slider['name']) ? $slider['name'] : '' ?>"  placeholder="Slider Name">  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2" for="exampleInputEmail1">Slider Link</label>
                  <div class="col-sm-7"><input type="text" class="form-control" id="link" name="link" value="<?php echo !empty($slider['link']) ? $slider['link'] : '' ?>" placeholder="Slider Link">  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2" for="exampleInputEmail1">Slider Image</label>
                  <div class="col-sm-7">
										<input type="file" name="image" id="image"> 
										<span class="label-danger">upload Only ( png, jpg, jpeg ) file </br>For Best Resolution width:1349px & height:450px Images Upload</span>
				  </div>
				<div class="col-sm-6">
						<?php if(!empty($slider['imgPath'])){?>
						<input type="hidden" name="old_img" value="<?php echo $slider['imgPath'];?>">
							<span class="no-display appned-image"></span>
							<div class="col-sm-3 image-delete ">
								<a target="_blank" href="<?php echo SLIDER_IMAGE_PATH_DISPLAY.$slider['imgPath'];?>"><img class="img-responsive" alt="" src="<?php echo SLIDER_IMAGE_PATH_DISPLAY.$slider['imgPath'];?>"></a>
							</div>
						<?php }?>
				</div>
               </div>
                
               
               
              </div>
              <!-- /.box-body -->
			   
              <div class="box-footer">
                   <button type="button" id="iconSliderBtn" class="btn btn-success icon-page btn-squared"><?php echo $type=="add" ? 'Add' : 'Update';?></button>
					<a href="slider_list.php" class="btn btn-danger btn-squared">Cancel</a>
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
