<?php session_start();
include_once('config/config.php');
$db = new db();
if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']))
{
	$adminLogin = $db->getRow("SELECT (`admin_id`) FROM `admin` where `admin_id`=? AND `status`=?",array($_SESSION['admin_id'],1));
	if($_SESSION['admin_id'] == $adminLogin['admin_id'])
	{
		$pageName = explode("/",$_SERVER['PHP_SELF']);
		$currentPageName = end($pageName);
		// All User Rights in Array
		include_once('rightes.php');
		if(!in_array($currentPageName, $rightsArray)){
			header('Location:dashboard.php');
			exit();
		}
	}else{
		header('Location:index.php');
		exit();
	}
}else{
	header('Location:index.php');
	exit();
}
?>