<?php session_start();
$pageName = explode("/",$_SERVER['PHP_SELF']);
$currentPageName = end($pageName);
include_once("admin/config/config.php");
$db = new db();
//$products = $db->getRows("select * from `product` ORDER BY product_id DESC",array());
?>
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
                <h1 class="page-header">Submit A Prayer Request
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Prayer Request </li>
                </ol>
				<h1><center><span class="as_color">Prayer Request</span></center></h1>
				 <?php include_once('include/notification.php');?>
				
				</br>
			<div class="col-md-12">
          	   <div class="">
			   <div class="col-md-2">
			   </div>
			   <div class="col-md-7">
			    <?php if(isset($_SESSION['form_display']) && !empty($_SESSION['form_display'])){
                    echo '<h4>Go to <a href="prayer-list.php"> Pray For Someone</a></h4>';
                    echo '<h4>Go to <a href="praise.php"> Praise Reports</a></h4>';
                    echo '<p>You will be receiving an email shortly that contains a link that will allow you to update your prayer request. If you have indicated that you would like to be notified when you are prayed for, you will receive an email once a day letting you know how many times your prayer request has been lifted up.</p>';
                    unset($_SESSION['form_display']);
                }else{ ?>
				
                <form name="prayer_frm" method="post" action="model/add.php" id="prayer_frm">
                    <p>Fill out the form below with details about your prayer request.</p>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>First Name:</label>
                            <input type="text" placeholder="First Name" class="form-control" id="first_name" name="first_name">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Last Name:</label>
                            <input type="text" placeholder="Last Name" class="form-control" id="last_name" name="last_name">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="checkbox" id="anonymous" name="anonymous" value="1"> <label for="anonymous">I would like to remain anonymous. Please do not post my name.</label>
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
                            <label>Prayer Request Title:</label>
                            <input type="text" placeholder="Prayer Request Title" class="form-control" id="title" name="title">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Prayer Request:</label>
                            <textarea placeholder="Prayer Request" class="form-control" id="body" name="body"></textarea>
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
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="checkbox" id="notify" name="notify" value="1"> <label for="notify">I would like to be notified (once per day) when I have been prayed for.</label>
                        </div>
                    </div>
                    <!-- For success/fail messages -->
                    <input type="submit" class="btn btn-success btn-squared" name="submit" value="Save My Prayer Request" id="submit"> 
                    <a class="btn btn-danger btn-squared" href="prayer-list.php">Cancel</a>
                </form>
			    <?php } ?>
			    </div>
          	   </div>		
            </div>	
         </div>
            
            </div>
           </hr>
     
	    </div>
        <footer>
             <?php include('include/footer.nav.php'); ?>
        </footer>
    <!-- /.container -->
    <!-- jQuery -->
	   <script src="js/jquery.min.js"></script>
    <!--<script src="js/jquery.js"></script>-->
	<script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
    <script src="js/flexslider-min.js"></script>
    <script src="js/goalProgress.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.prettyphoto.js"></script>
    <script src="js/waypoints-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/newsticker.js"></script>
    <script src="js/parallex.js"></script>
    <script src="js/styleswitch.js"></script>
    <script src="js/functions.js"></script>
	<!-- form validation -->
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/form-validation.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
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
