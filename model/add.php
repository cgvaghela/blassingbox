<?php session_start();
if($_POST){
	extract($_POST);
	include_once("../admin/config/config.php");
	include_once("../include/getipbrowser.php");
	$db = new db();
	$ip = new IpBrowser();

	$table = "requests";
	
	$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
	$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$title = isset($_POST['title']) ? $_POST['title'] : '';
	$body = isset($_POST['body']) ? $_POST['body'] : '';
	$anonymous = isset($_POST['anonymous']) ? 1 : 0;
	$notify = isset($_POST['notify']) ? 1 : 0;
	
	$bannedIPCheck = $db->getRow("SELECT * FROM `banned_ips` WHERE `ip_address`=?",array($ip->getIp()));
	if(empty($bannedIPCheck))
	{
		if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($title) && !empty($body))
		{
			$insert = $db->insertRow("INSERT INTO ".$table." (`first_name`,`last_name`,`anon`,`email`,`authcode`,`submitted`,`title`,`body`,`notify`,`ip_address`) VALUES (?,?,?,?,?,?,?,?,?,?) ",array($first_name,$last_name,$anonymous,$email,$db->generateRandomString(),strtotime(date("Y-m-d H:i:s")),$title,$body,$notify,$ip->getIp()));
			if($insert){
				$_SESSION['customer']['notification_success'] = "Your Prayer Request Has Been Submitted";
				$_SESSION['form_display'] = 1;
				header('Location:../prayer.php');
				exit();
			}else{
				$_SESSION['customer']['notification_error'] = "Prayer Request in Error...";
				$_SESSION['form_display'] = 0;
				header('Location:../prayer.php');
				exit();
			}
		}else{
			$_SESSION['customer']['notification_error'] = "Prayer Request in Error...";
			$_SESSION['form_display'] = 0;
			header('Location:../view.php');
			exit();
		}
	}else{
		$_SESSION['customer']['notification_error'] = "You Are Banned. By ".$bannedIPCheck['reason'];
		$_SESSION['form_display'] = 0;
		header('Location:../prayer.php');
		exit();
	}
}else{
	$_SESSION['customer']['notification_error'] = "Prayer Request in Error...";
	$_SESSION['form_display'] = 0;
	header('Location:../view.php');
	exit();
}
?>