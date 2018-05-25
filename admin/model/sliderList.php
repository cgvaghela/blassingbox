<?php include_once("../include/comman_model_session.php");
include_once("../config/config.php");

$db = new db();
$table = "slider";
$array = array();
$row = $db->numRow("SELECT (`id`) FROM ".$table."",array());

if($row > 0)
{
	$result = $db->getRows("SELECT * FROM ".$table." ORDER BY `created_at` DESC",array());
	$i = 0; $id=1;
	$main_array = array();

	foreach ($result as $key => $value) {
		$array = array();
		$array['id'] = $id;
		
		$array['name'] = $value['name'];
		$array['link'] = $value['link'];
		
		if(!empty($value['imgPath']))
			$array['image'] = "<a target='_blank' href='".SLIDER_IMAGE_PATH_DISPLAY.$value['imgPath']."'><img src='".SLIDER_IMAGE_PATH_DISPLAY.$value['imgPath']."' height='150'></a>";
		else
			$array['image'] = "no image inserted...";
		
		
		if($value['status']==1)
			$array['status']="<a class='to_statusSlider btn btn-danger btn-squared' status='".$value['status']."' id=\"".$value['id']."\"  href title='Click To Deactive'> Deactive </a>";
		else
			$array['status']="<a class='to_statusSlider btn btn-success btn-squared' status='".$value['status']."' id=\"".$value['id']."\" tablename='".$table."' fieldname='status' href title='Click To Active'> Active </a>";
		
		$array['action']="<a class='btn btn-success btn-squared' href=\"slider.php?aid=".$value['id']."\"><i class=\"fa fa-edit\"></i></a> <a class='btn btn-danger btn-squared to_deleteSlider' id=\"".$value['id']."\"><i class=\"fa fa-trash-o\"></i></a>";
		
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