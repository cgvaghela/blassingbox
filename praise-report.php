<?php 
@session_start();
include_once("admin/config/config.php");

$pageName = explode("/",$_SERVER['PHP_SELF']);
$currentPageName = end($pageName);

$db = new db();
if(isset($_SESSION['form_display']) && $_SESSION['form_display']=='1'){
    // go to direct success msg
}else{
    if(!isset($_REQUEST['aid']) && empty($_REQUEST['aid'])){
        $_SESSION['customer']['notification_error'] = "please don't try this way";
        header("Location:index.php");
        exit();
    }else{
        $request = $db->getRow("SELECT * FROM `requests` WHERE `id`=?",array($_REQUEST['aid']));
        if(empty($request)){
            $_SESSION['customer']['notification_error'] = "please don't try this way";
            header("Location:index.php");
            exit();
        }else{
            // for praise reports table
            $praiseReports = $db->getRow("SELECT * FROM `praise_reports` WHERE `req_id`=? AND `status`=?",array($_REQUEST['aid'],'1'));
            if(!empty($praiseReports)){
                $_SESSION['customer']['notification_error'] = "This Prayer Request Already Close";
                header("Location:index.php");
                exit();
            }
            // for main table request
            if(($request['active'] >= '2') && ($request['closed']!='0') && !empty($request['closed_comment'])){
                $_SESSION['customer']['notification_error'] = "This Prayer Request Already Close";
                header("Location:index.php");
                exit();
            }
        }
    }    
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
               <h1 class="page-header">Submit Praise Report
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Submit Praise Report</li>
                </ol>
				<h1><center><span class="as_color">Submit Praise Report</span></center></h1>
				 <?php include_once('include/notification.php');?>
				</br>
				
				<div class="col-md-3"></div>
				<div class="col-md-6">
						<?php if(isset($_SESSION['form_display']) && !empty($_SESSION['form_display'])){
							echo '<h4>Go to <a href="praise.php"> Praise Reports</a></h4>';
							unset($_SESSION['form_display']);
						}else{ ?>
						<form name="praise_frm" method="post" action="model/praise.php" id="praise_frm">
							<input type="hidden" name="aid" id="aid" value="<?php echo $request['id']?>">
							<div class="control-group form-group">
								<div class="controls">
									<label><?php echo $request['title']?></label>
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<label>Email Address:</label>
									<input type="text" placeholder="Email Address" class="form-control" id="email" name="email">
								</div>
							</div>
							<div class="control-group form-group">
								<div class="controls">
									<label>Praise Report:</label>
									<textarea placeholder="Praise Report" class="form-control" id="report" name="report"></textarea>
								</div>
							</div>
							<div class="form-group">
								<td align="right" valign="top"> Validation code:</td>
								<td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
								<label for='message'>Enter the code above here :</label>
								<input id="captcha_code" name="captcha_code" type="text" id="captcha_code">
								<div id="captcha_msg"></div>
								<br>
								Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
							</div>
							<!-- For success/fail messages -->
							<input type="submit" class="btn btn-success btn-squared" name="submit" value="Submit Praise Report" id="submit"> 
							<a class="btn btn-danger btn-squared" href="prayer-list.php">Cancel</a>
						</form>
						<br>
						<?php } ?>
				</div>
				<div class="col-md-3"></div>
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
	<script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/form-validation.js"></script>
    <script type="text/javascript">
        $("#captcha_code").keyup(function(){
            var captcha = $(this).val();
            if(captcha.length >= 6)
            {
                $.ajax({
                    url : "model/check_captcha.php",
                    data : "captcha="+captcha,
                    type : "post",
                    success : function(data){
                        if (data == 0) {
                            $("#captcha_msg").html("The Validation code does not match!").show().fadeOut(1000).css("color","red");
                            $("#captcha_code").val("");
                        }else if(data == 1) {
                            $("#captcha_msg").html("The Validation code has been matched.").show().fadeOut(5000).css("color","green");
                        }
                    }
                });
            }
        });
        
        function refreshCaptcha(){
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
    </script>
	
</body>
</html>
