<?php include_once('../include/comman_model_session.php');
include_once("../config/config.php");

$db = new db();
$table = "banned_ips";
$array = array();

$row = $db->numRow("SELECT (`id`) FROM ".$table." ORDER BY `id` DESC",array());
if($row > 0)
{
	$result = $db->getRows("SELECT * FROM ".$table." ORDER BY `id` DESC",array());
	$i = 0; $id = 1;
	$main_array = array();

	foreach ($result as $key => $value) {
		$array = array();
		$array['id'] = $id;
		$array['ip'] = $value['ip_address'];
		$array['date'] = date("Y-m-d",$value['banned_date']);
		$array['reason'] = $value['reason'];
		
		$array['action']="<a title='Click To Unbanned' class='btn btn-danger btn-squared to_delete' id=\"".$value['id']."\" href ><i class=\"fa fa-rotate-left\"></i></a>";
	
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