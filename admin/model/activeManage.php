<?php include_once('../include/comman_model_session.php');
include_once("../config/config.php");
if($_POST){
	extract($_POST);
	$db = new db();
	$table = "requests";
	include_once("../include/functions.php");
	
	if(isset($_POST['type']) && ($_POST['type']=="delete"))
	{
		$id = isset($_POST['mid']) ? $_POST['mid'] : "";
		$select = $db->getRow("SELECT * FROM ".$table." WHERE `id`=?",array($id));
		if(!empty($select))
		{
			// delete flags
			$flags = $db->getRows("SELECT * FROM `flags` WHERE `request_id`=?",array($select['id']));
			if(!empty($flags)){
				foreach ($flags as $flag){
					$deleteFlags = $db->deleteRow("delete from `flags` where `id`=?",array($flag['id']));
				}
			}
			// delete prayedfor
			$prayedfor = $db->getRows("SELECT * FROM `prayedfor` WHERE `request_id`=?",array($select['id']));
			if(!empty($prayedfor)){
				foreach ($prayedfor as $prayed){
					$deletePrayedfor = $db->deleteRow("delete from `prayedfor` where `id`=?",array($prayed['id']));
				}
			}
			// delete in praise_reports table
			$deletePraise = $db->deleteRow("DELETE FROM `praise_reports` WHERE `req_id`=?",array($id));

			$delete = $db->deleteRow("delete from ".$table." where `id`=?",array($id));
			if(!$delete){
				$_SESSION['notification_success'] = "Remove Successfully...";
				echo 1;
				exit();
			}else{
				$_SESSION['notification_error'] = "Remove in Error...";
				echo 0;
				exit();
			}
		}else{
			$_SESSION['notification_error'] = "Remove in Error...";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="closed"))
	{
		$id = isset($_POST['mid']) ? $_POST['mid'] : "";
		if(!empty($id))
		{
			$select = $db->getRow("SELECT * FROM ".$table." WHERE `id`=?",array($id));
			if(!empty($select))
			{
				// insert in praise_reports
				$insertPraise = $db->insertRow("INSERT INTO `praise_reports`(`req_id`) VALUES (?)",array($select['id']));

				$closeBy = "Close By ".$_SESSION['admin_username'];
				$update = $db->updateRow("update ".$table." set `closed`=?,`closed_comment`=?,`active`=? where `id`=?",array(strtotime(date("Y-m-d H:i:s")),$closeBy,'2',$id));
		
				if(!$update){
					$_SESSION['notification_success'] = "Closed Successfully...";
					echo 1;
					exit();
				}else{
					$_SESSION['notification_error'] = "Closed in Error...";
					echo 0;
					exit();
				}
			}else{
				$_SESSION['notification_error'] = "Closed in Error...";
				echo 0;
				exit();
			}
		}else{
			$_SESSION['notification_error'] = "Closed in Error...";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="reopen"))
	{
		$id = isset($_POST['mid']) ? $_POST['mid'] : "";
		if(!empty($id))
		{
			$select = $db->getRow("SELECT * FROM ".$table." WHERE `id`=?",array($id));
			if(!empty($select))
			{
				$update = $db->updateRow("update ".$table." set `closed`=?,`closed_comment`=?,`active`=? where `id`=?",array("","",'1',$id));
				// delete praise report
				
				$deletePraise = $db->deleteRow("DELETE FROM `praise_reports` WHERE `req_id`=?",array($id));

				if(!$update){
					$_SESSION['notification_success'] = "Reopen Successfully...";
					echo 1;
					exit();
				}else{
					$_SESSION['notification_error'] = "Reopen in Error...";
					echo 0;
					exit();
				}
			}else{
				$_SESSION['notification_error'] = "Reopen in Error...";
				echo 0;
				exit();
			}
		}else{
			$_SESSION['notification_error'] = "Reopen in Error...";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="archived"))
	{
		$id = isset($_POST['mid']) ? $_POST['mid'] : "";
		if(!empty($id))
		{
			$select = $db->getRow("SELECT * FROM ".$table." WHERE `id`=?",array($id));
			if(!empty($select))
			{
				$update = $db->updateRow("update ".$table." set `active`=? where `id`=?",array('3',$id));
		
				if(!$update){
					$_SESSION['notification_success'] = "Archived Successfully...";
					echo 1;
					exit();
				}else{
					$_SESSION['notification_error'] = "Archived in Error...";
					echo 0;
					exit();
				}
			}else{
				$_SESSION['notification_error'] = "Archived in Error...";
				echo 0;
				exit();
			}
		}else{
			$_SESSION['notification_error'] = "Archived in Error...";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="banned"))
	{
		$id = isset($_POST['mid']) ? $_POST['mid'] : "";
		if(!empty($id))
		{
			$select = $db->getRow("SELECT * FROM ".$table." WHERE `id`=?",array($id));
			if(!empty($select))
			{
				$bannedBy = "request flagged as inappropriate";
				$insert = $db->insertRow("INSERT INTO `banned_ips`(`ip_address`,`banned_date`,`reason`) VALUES (?,?,?)",array($select['ip_address'],strtotime(date("Y-m-d H:i:s")),$bannedBy));
				// delete flags
				$flags = $db->getRows("SELECT * FROM `flags` WHERE `request_id`=?",array($select['id']));
				if(!empty($flags)){
					foreach ($flags as $flag){
						$deleteFlags = $db->deleteRow("delete from `flags` where `id`=?",array($flag['id']));
					}
				}
				// delete prayedfor
				$prayedfor = $db->getRows("SELECT * FROM `prayedfor` WHERE `request_id`=?",array($select['id']));
				if(!empty($prayedfor)){
					foreach ($prayedfor as $prayed){
						$deletePrayedfor = $db->deleteRow("delete from `prayedfor` where `id`=?",array($prayed['id']));
					}
				}
				// delete in praise_reports table
				$deletePraise = $db->deleteRow("DELETE FROM `praise_reports` WHERE `req_id`=?",array($id));
				$delete = $db->deleteRow("DELETE FROM ".$table." WHERE `id`=?",array($id));
				if($insert){
					$_SESSION['notification_success'] = "IP Banned Successfully...";
					echo 1;
					exit();
				}else{
					$_SESSION['notification_error'] = "IP Banned in Error...";
					echo 0;
					exit();
				}
			}else{
				$_SESSION['notification_error'] = "IP Banned in Error...";
				echo 0;
				exit();
			}
		}else{
			$_SESSION['notification_error'] = "IP Banned in Error...";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="unbanned"))
	{
		$id = isset($_POST['mid']) ? $_POST['mid'] : "";
		if(!empty($id))
		{
			$delete = $db->deleteRow("DELETE FROM `banned_ips` WHERE `id`=?",array($id));

			if(!$delete){
				$_SESSION['notification_success'] = "IP Unbanned Successfully...";
				echo 1;
				exit();
			}else{
				$_SESSION['notification_error'] = "IP Unbanned in Error...";
				echo 0;
				exit();
			}
		}else{
			$_SESSION['notification_error'] = "IP Unbanned in Error...";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="flagdelete"))
	{
		$id = isset($_POST['mid']) ? $_POST['mid'] : "";
		$flags = $db->getRows("SELECT * FROM `flags` WHERE `request_id`=?",array($id));
		if(!empty($flags)){
			foreach ($flags as $flag){
				$delete = $db->deleteRow("delete from `flags` where `id`=?",array($flag['id']));
			}
		}
		if(!$delete){
			$_SESSION['notification_success'] = "Close Flags Successfully...";
			echo 1;
			exit();
		}else{
			$_SESSION['notification_error'] = "Remove in Error...";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="praise_status"))
	{
		$id = isset($_POST['mid']) ? $_POST['mid'] : 0;
		$status = isset($_POST['status']) ? $_POST['status'] : 0;
		$update = $db->updateRow("update `praise_reports` set `status`=? where `id`=?",array($status,$id));
		
		if(!$update){
			$_SESSION['notification_success'] = "Status Change Successfully...";
			echo 1;
			exit();
		}else{
			$_SESSION['notification_error'] = "Status in Error...";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="edit"))
	{	
		$id = isset($_POST['id']) ? $_POST['id'] : 0;
		
		$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
		$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$title = isset($_POST['title']) ? $_POST['title'] : '';
		$body = isset($_POST['body']) ? $_POST['body'] : '';
		
		$update = $db->updateRow("update ".$table." set `first_name`=?,`last_name`=?,`email`=?,`title`=?,`body`=? where `id`=?",array($first_name,$last_name,$email,$title,$body,$id));
			
		if(!$update){
			$_SESSION['notification_success'] = "Update Successfully...";
			header('Location:../list-active.php');
			exit();
		}else{
			$_SESSION['notification_error'] = "Update in Error...";
			header('Location:../list-active.php');
			exit();
		}
	}else{
		$_SESSION['notification_error'] = "in Error...";
		header('Location:../list-active.php');
		exit();
	}
}else{
	$_SESSION['notification_error'] = "in Error...";
	header('Location:../depot-list.php');
	exit();
}
?>