<?php include_once('../include/comman_model_session.php');
include_once("../config/config.php");

$db = new db();
$table = "requests";
$array = array();

$row = $db->numRow("SELECT (`id`) FROM ".$table." WHERE `active`=? ORDER BY `id` DESC",array("3"));
if($row > 0)
{
	$result = $db->getRows("SELECT * FROM ".$table." WHERE `active`=? ORDER BY `id` DESC",array("3"));
	$i = 0; $id = 1;
	$main_array = array();

	foreach ($result as $key => $value) {
		$array = array();
		$array['id'] = $id;
		$array['info'] = $value['first_name']." ".$value['last_name']." <br>".$value['email'];
		
		$array['request'] = "<b>".$value['title']."</b><br>".nl2br(substr($value['body'],0,25));
		$array['ip'] = $value['ip_address'];
		$array['date'] = date("Y-m-d",$value['submitted']);

		$prayes = $db->numRow("SELECT * FROM `prayedfor` WHERE `request_id`=?",array($value['id']));
		$array['prayes'] = $prayes;
		
		$main_array['data'][$i++] = $array;
		$id++;
	}
	$array = json_encode($main_array);
	echo $array;
}
else
{
	for ($i=0; $i < 6 ; $i++) { 
		$main_array['data'][$i++] = $array;
	}	
	$array = json_encode($main_array);
	echo $array;
}

?>