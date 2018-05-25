<?php 
	@session_start();
		include_once("../admin/config/config.php");
	
	$db = new db();
	$table = "product";

	$id = isset($_POST['pro_id']) ? $_POST['pro_id'] : '';
	$res = $db->getRow("SELECT * FROM ".$table." where `product_id`=?",array($id));
	
	if($res){
		echo $res['link'];
	}else{
		echo 0;
	}

?>