<?php @session_start();
	include_once("user/config/PDO.php");
	$db = new db();
	$currentTime = date("Y-m-d H:i:s");

	// find waiting list time over user found
	$getWaiting = $db->getRows("SELECT * FROM `waiting` WHERE (`user_1`!='0' AND `status_1`='0') OR (`user_2`!='0' AND `status_2`='0')",array());	
	if(!empty($getWaiting))
	{
		foreach ($getWaiting as $value)
		{
			if($value['user_1']!='0' && $value['status_1']=='0')
			{
				// check proof will uploded or not
				//print_r($)
				$getProof = $db->getRow("select * from `payer_proof` where `waiting_id`=? AND `payer_user_id`=? AND `payee_user_id`=?",array($value['id'],$value['user_1'],$value['user_id']));
				if(!empty($getProof)) {
					// alredy uploaded
				}else{
					// call finction
					$statusReturn = remainingTime($value['user_1_date']);
					if(!$statusReturn)
					{
						// update waiting table and move to block user
						$updateWaiting = $db->updateRow("update `waiting` set `user_1`=?, `user_1_date`=?, `status_1`=?, `updated_at`=? where `id`=?",array(0,"",0,$currentTime,$value['id']));
						// insert user in block list 
						$insertBlockUser = $db->insertRow("INSERT INTO `block_user` (`user_id`,`waiting_id`,`plan_name`,`waiting_date`,`updated_at`) VALUES (?,?,?,?,?)",array($value['user_1'],$value['id'],$value['plan_name'],$value['user_1_date'],$currentTime));
						// update user plan table
						$updateUserPlan = $db->updateRow("update `user_plan` set `status`=?,`updated_at`=? where `user_id`=? AND `plan`=?",array(2,$currentTime,$value['user_1'],$value['plan_name']));

					}
				}
			}
			if($value['user_2']!='0' && $value['status_2']=='0')
			{
				// check proof will uploded or not
				$getProof = $db->getRow("select * from `payer_proof` where `waiting_id`=? AND `payer_user_id`=? AND `payee_user_id`=?",array($value['id'],$value['user_2'],$value['user_id']));
			if(!empty($getProof)) {
				// alredy uploaded
			}else{
				// call finction
				$statusReturn = remainingTime($value['user_2_date']);
				if(!$statusReturn)
				{
					// update waiting table and move to block user
					$updateWaiting = $db->updateRow("update `waiting` set `user_2`=?, `user_2_date`=?, `status_2`=?, `updated_at`=? where `id`=?",array(0,"",0,$currentTime,$value['id']));
					// insert user in block list 
					$insertBlockUser = $db->insertRow("INSERT INTO `block_user` (`user_id`,`waiting_id`,`plan_name`,`waiting_date`,`updated_at`) VALUES (?,?,?,?,?)",array($value['user_2'],$value['id'],$value['plan_name'],$value['user_2_date'],$currentTime));
					// update user plan table
					$updateUserPlan = $db->updateRow("update `user_plan` set `status`=?,`updated_at`=? where `user_id`=? AND `plan`=?",array(2,$currentTime,$value['user_2'],$value['plan_name']));
				}
			}
		}
	}
}
// find time function
function remainingTime($string)
{
	if(!empty($string))
	{
		$plus6hours = strtotime(date('Y-m-d H:i:s', strtotime($string)+3600));
		$currentTime = strtotime(date('Y-m-d H:i:s'));
		if($currentTime <= $plus6hours)
		{
			return 1;
		}else{
			return 0;
		}
	}else{
		return 0;
	}
}
?>