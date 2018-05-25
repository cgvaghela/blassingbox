<?php session_start();
if($_POST){
	extract($_POST);
		include_once("../admin/config/config.php");
	include_once("../include/getipbrowser.php");
	$db = new db();
	$ip = new IpBrowser();

	$aid = isset($_POST['aid']) ? $_POST['aid'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$report = isset($_POST['report']) ? $_POST['report'] : '';
	
	$requests = $db->getRow("SELECT * FROM `requests` WHERE `id`=?",array($aid));
	if(!empty($requests) && !empty($report))
	{
		$requests1 = $db->getRow("SELECT * FROM `requests` WHERE `id`=? AND `email`=?",array($aid,$email));
		if(!empty($requests1))
		{
			// update main table
			$update = $db->updateRow("UPDATE `requests` SET `closed`=?,`closed_comment`=?,`active`=? WHERE `id`=?",array(strtotime(date("Y-m-d H:i:s")),$report,'2',$requests1['id']));
			// insert in praise report table
			$insert = $db->insertRow("INSERT INTO `praise_reports` (`req_id`) VALUES (?) ",array($requests1['id']));
			if(!$update){
				$_SESSION['customer']['notification_success'] = "Praise Report Has Been Submitted";
				$_SESSION['form_display'] = 1;
				header('Location:../praise-report.php?aid='.$aid);
				exit();
			}else{
				$_SESSION['customer']['notification_error'] = "Praise Report in Error...";
				$_SESSION['form_display'] = 0;
				header('Location:../prayer-list.php');
				exit();
			}
		}else{
			$_SESSION['customer']['notification_error'] = "Praise Report in Error. Email Is not match. Please try again.";
			$_SESSION['form_display'] = 0;
			header('Location:../prayer-list.php');
			exit();
		}
	}else{
		$_SESSION['customer']['notification_error'] = "Praise Report in Error...";
		$_SESSION['form_display'] = 0;
		header('Location:../prayer-list.php');
		exit();
	}
}else{
	$_SESSION['customer']['notification_error'] = "Praise Report in Error...";
	$_SESSION['form_display'] = 0;
	header('Location:../prayer-list.php');
	exit();
}
?>