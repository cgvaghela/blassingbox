<?php session_start();
$pageName = explode("/",$_SERVER['PHP_SELF']);
$currentPageName = end($pageName);
include_once("admin/config/config.php");
$db = new db();

if(isset($_REQUEST['uid']) && !empty($_REQUEST['uid'])){
    $id = isset($_REQUEST['uid']) ? $_REQUEST['uid'] : '';
    $request = $db->getRow("SELECT * FROM `requests` WHERE `active`=? AND `id`=?",array("1",$id));
    if(!empty($request)){

    }else{
        header("Location:prayer-list.php");
        exit();
    }
}else{
    header("Location:prayer-list.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
      <?php  include("include/title.nav.php");?>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-config.php/css/font-config.php.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Navigation -->
		<?php  include("include/menu.nav.php");?>
    <!-- Header Carousel -->
    </br>
    <!-- Page Content -->
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
               <h1 class="page-header">Prayer Request
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
					<li><a href="prayer-list.php" class="text-red"> << Back to Request List</a></li>
                </ol>
				<h1><center><span class="as_color">Pray For Someone</span></center></h1>
				 <?php include_once('include/notification.php');?>
				</br>
				 <div class="col-lg-12">
					 <div class="col-md-3"></div>
					 <div class="col-md-6">
						<h2><?php echo $request['title']?></h2><br>
						<?php
							if($request['anon']==1){
								$submitted = "Anonymous";
							}else{
								$submitted = $request['first_name']." ".$request['last_name'];
							}
						?>
						<h4><strong>Submitted By:</strong> <?php echo $submitted?></h4>
						<p><strong>Prayer Request:</strong> <?php echo nl2br($request['body'])?></p>
						<div class="clearfix"></div>
						<div class="pull-left">
							<div class="col-lg-6">
								<form action="model/pray.php">
									<input type="hidden" name="reid" value="<?php echo $request['id']?>">
									<input type="submit" class="btn btn-success" value="I PRAYED FOR YOU">
								</form>
							</div>
							<div class="col-lg-6">
								<form action="model/abuse.php">
									<input type="hidden" name="reid" value="<?php echo $request['id']?>">
									<input type="submit" class="btn btn-danger" value="REPORT ABUSE">
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
            </div>
        </div>
        </hr>
     
        <!-- /.row -->
      
			
        
    </div>
	<div class="well" id="myCarousel">
            <div class="row">
			<div class="col-md-12">
                <div class="col-md-8">
                    <p><img src="images/arrow.png" width="50px" height="50px">Create your account here</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btnnn" href="#">Sign Up</a>
                </div>
			</div>
            </div>
        </div>
           
        <footer>
             <?php include('include/footer.nav.php'); ?>
        </footer>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	
</body>
</html>
