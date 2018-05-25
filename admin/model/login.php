<?php session_start();
if($_POST)
{
	include_once("../config/config.php");
	$db = new db();
	$table = "admin";
	
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	if(!empty($username) && !empty($password))
	{
		$res = $db->getRow("SELECT * FROM ".$table." WHERE `username`=? AND `password`=?",array($username,$db->passwordEncrypt($password)));
		if(!empty($res))
		{
			$_SESSION['admin_id'] = $res['admin_id'];
			$_SESSION['admin_username'] = $res['username'];
			$_SESSION['admin_role'] = 1;
			$_SESSION['admin_email'] = $res['email'];
			echo 1; exit();
		}else{
			echo 0; exit();
		}
	}else{
		echo 0; exit();
	}
}else{
	echo 2;	exit();
}
?>