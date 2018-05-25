<?php include_once('../include/comman_model_session.php');
include_once("../config/config.php");

$db = new db();
$table = "praise_reports";
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
		$requests = $db->getRow("SELECT * FROM `requests` WHERE `id`=?",array($value['req_id']));
		$array['info'] = $requests['first_name']." ".$requests['last_name']." <br>".$requests['email'];
		
		$mainBody = "<b>".$requests['title']."</b><br>";
		$mainBody .= nl2br($requests['body'])."<br>";
		$mainBody .= "<b>Praise Report:</b><br>";
		$mainBody .= $requests['closed_comment'].".";
		$array['request'] = $mainBody;
		
		$prayes = $db->numRow("SELECT * FROM `flags` WHERE `request_id`=?",array($requests['id']));
		$array['prayes'] = $prayes;
		
		if($value['status']=='1')
			$array['action'] = "<a title='Click To Hide' class='btn btn-success btn-squared to_status' href status='".$value['status']."' id=\"".$value['id']."\"><i class=\"fa fa-clipboard\"></i></a>";
		else
			$array['action'] = "<a title='Click To Show' class='btn btn-danger btn-squared to_status' href status='".$value['status']."' id=\"".$value['id']."\"><i class=\"fa fa-file\"></i></a>";
	
		$main_array['data'][$i++] = $array;
		$id++;
	}
	$array = json_encode($main_array);
	echo $array;
}
else
{
	for ($i=0; $i < 5 ; $i++) { 
		$main_array['data'][$i++] = $array;
	}	
	$array = json_encode($main_array);
	echo $array;
}

?>