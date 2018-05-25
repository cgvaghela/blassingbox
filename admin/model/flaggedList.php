<?php include_once('../include/comman_model_session.php');
include_once("../config/config.php");

$db = new db();
$table = "flags";
$array = array();

$row = $db->numRow("SELECT (`id`) FROM ".$table." GROUP BY `request_id` ORDER BY `id` DESC",array());
if($row > 0)
{
	$result = $db->getRows("SELECT * FROM ".$table." GROUP BY `request_id` ORDER BY `id` DESC",array());
	$i = 0; $id = 1;
	$main_array = array();

	foreach ($result as $key => $value) {
		$array = array();
		$array['id'] = $id;
		$requests = $db->getRow("SELECT * FROM `requests` WHERE `id`=?",array($value['request_id']));
		$array['name'] = $requests['first_name']." ".$requests['last_name']." <br>".$requests['email'];
		
		$array['title'] = $requests['title'];
		$array['body'] = $requests['body'];
		$array['ip'] = $value['ip_address'];
		$array['date'] = date("Y-m-d",$value['flagged_date']);

		$prayes = $db->numRow("SELECT * FROM `flags` WHERE `request_id`=?",array($requests['id']));
		$array['flagged'] = $prayes;
		
		$array['action'] = "<a title='Remove Request' class='btn btn-danger btn-squared to_delete' id=\"".$requests['id']."\" href ><i class=\"fa fa-trash-o\"></i></a> <a title='Clear Flags' class='btn btn-info btn-squared to_flags' id=\"".$requests['id']."\" href ><i class=\"fa fa-times\"></i></a> <a title='Click To Banned' class='btn btn-success btn-squared to_banned' href id=\"".$requests['id']."\"><i class=\"fa fa-eraser\"></i></a>";
	
		$main_array['data'][$i++] = $array;
		$id++;
	}
	$array = json_encode($main_array);
	echo $array;
}
else
{
	for ($i=0; $i < 7 ; $i++) { 
		$main_array['data'][$i++] = $array;
	}	
	$array = json_encode($main_array);
	echo $array;
}

?>