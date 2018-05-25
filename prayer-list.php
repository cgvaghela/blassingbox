<?php 
@session_start();
include_once("admin/config/config.php");

$pageName = explode("/",$_SERVER['PHP_SELF']);
$currentPageName = end($pageName);

$db = new db();
$requests = $db->getRows("SELECT * FROM `requests` WHERE `active`=? ORDER BY `id` DESC",array("1"));
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
               <h1 class="page-header">Pray For Someone
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Pray For Someone </li>
                </ol>
				<h1><center><span class="as_color">Pray For Someone</span></center></h1>
				 <?php include_once('include/notification.php');?>
				</br>
				<div class="as-title-text"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <br>
                
				</div>
				<div class="col-lg-12">
				 <div class="col-md-2"></div>
				 <div class="col-md-7">
				 
						<?php if(isset($_SESSION['form_display']) && !empty($_SESSION['form_display'])){
							echo '<h4><a href="prayer-list.php"> << Back to Request List</a></h4>';
							unset($_SESSION['form_display']);
						}else{ ?>
							<table class="table table-striped table-bordered table-hover dataTables-example" id="listCat">
							<thead>
								<tr>
									<td><h4>Request Title</h4></td>
									<td><h4># Prayers</h4></td>
									<td><h4>Date</h4></td>
									<td><h4></h4></td>
								</tr>
							</thead>
							<tbody>
							<?php foreach($requests as $value){?>
								<tr>
									<td><h4><span><?php echo $value['title'];?></span></h4></td>
									<?php $prayes = $db->numRow("SELECT * FROM `prayedfor` WHERE `request_id`=?",array($value['id']));?>
									<td><h4><span><?php echo $prayes;?></span></h4></td>
									<td><h4><span><?php echo date("Y-m-d",$value['submitted']);?></span></h4></td>
									<td>
										<h4><span><a href="view.php?uid=<?php echo $value['id'];?>">View Details</a></span>
										<span class="pull-right"><a href="praise-report.php?aid=<?php echo $value['id'];?>">Submit praise report</a></span></h4>
									</td>
								</tr>
							<?php } ?>
							</tbody>
							</table>
						<?php } ?>
					</div>
            	</div>
			 <div class="col-md-2"></div>
            </div>
            </div>
           </hr>
     
        <!-- /.row -->
      
			
        
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
