<?php session_start();
if($_REQUEST){
	extract($_REQUEST);
	include_once("../admin/config/config.php");
	include_once("../include/getipbrowser.php");
	$db = new db();
	$ip = new IpBrowser();

	$table = "flags";
	
	$reid = isset($_REQUEST['reid']) ? $_REQUEST['reid'] : '';
	
	if(!empty($reid))
	{
		$insert = $db->insertRow("INSERT INTO ".$table." (`request_id`,`flagged_date`,`ip_address`) VALUES (?,?,?) ",array($reid,strtotime(date("Y-m-d H:i:s")),$ip->getIp()));
		if($insert){
			$_SESSION['customer']['notification_success'] = "Thank you for reporting inappropriate content.";
			$_SESSION['form_display'] = 1;
			header('Location:../prayer-list.php');
			exit();
		}else{
			$_SESSION['customer']['notification_error'] = "Request in Error...";
			$_SESSION['form_display'] = 0;
			header('Location:../prayer-list.php');
			exit();
		}
	}else{
		$_SESSION['customer']['notification_error'] = "Request in Error...";
		$_SESSION['form_display'] = 0;
		header('Location:../prayer-list.php');
		exit();
	}
}else{
	$_SESSION['customer']['notification_error'] = "Request in Error...";
	$_SESSION['form_display'] = 0;
	header('Location:../prayer-list.php');
	exit();
}
?>