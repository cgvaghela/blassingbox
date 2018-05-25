<?php include_once('../include/comman_model_session.php');
include_once("../config/config.php");
if($_POST)
{
	$db = new db();
	include_once("../include/functions.php");

	$oldPassword = isset($_POST['oldPassword']) ? $_POST['oldPassword'] : '';
	$newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : '';
	$username = isset($_POST['username']) ? $_POST['username'] : $_SESSION['admin_username'];
	
	if(!empty($oldPassword) && !empty($newPassword))
	{
		$getRow = $db->numRow("SELECT * FROM `admin` WHERE `admin_id`=? AND `password`=?",array($_SESSION['admin_id'],$db->passwordEncrypt($oldPassword)));

		if($getRow > 0)
		{
			$update = $db->updateRow("UPDATE `admin` SET `username`=?,`password`=? WHERE `admin_id`=?",array($username,$db->passwordEncrypt($newPassword),$_SESSION['admin_id']));
			if(!$update){
				$_SESSION['notification_success'] = "Password Changed Successfully.";
				echo 1;
				exit();
			}else{
				$_SESSION['notification_error'] = "Update in error.";
				echo 0;
				exit();
			}
		}else{
			$_SESSION['notification_error'] = "Old Password may be wrong. try again";
			echo 0;
			exit();
		}
	}else{
		$_SESSION['notification_error'] = "Please try again.";
		echo 0;
		exit();
	}
}else{
	$_SESSION['notification_error'] = "please try again";
	echo 0;
	exit();
}
?>