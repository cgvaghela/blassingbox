<?php include_once('../include/comman_model_session.php');
include_once("../config/config.php");

$db = new db();
$table = "requests";
$array = array();

$row = $db->numRow("SELECT (`id`) FROM ".$table." WHERE `active`=? ORDER BY `id` DESC",array("2"));
if($row > 0)
{
	$result = $db->getRows("SELECT * FROM ".$table." WHERE `active`=? ORDER BY `id` DESC",array("2"));
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
		
		$array['action']="<!--<a title='Click To Archived' class='btn btn-success btn-squared to_archived' href id=\"".$value['id']."\"><i class=\"fa fa-archive\"></i></a>--> <a title='Click To Remove' class='btn btn-danger btn-squared to_delete' id=\"".$value['id']."\" href ><i class=\"fa fa-trash-o\"></i></a> <a title='Click To Reopen' class='btn btn-info btn-squared to_reopen' id=\"".$value['id']."\" href ><i class=\"fa fa-folder-open\"></i></a>";
	
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