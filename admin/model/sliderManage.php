<?php include_once("../include/comman_model_session.php");
include_once("../config/config.php");
if($_POST)
{
	$db = new db();
	$table = "slider";
	$currentTime = date("Y-m-d H:i:s");
	
	if(isset($_POST['type']) && ($_POST['type']=="add"))
	
	{

		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$link = isset($_POST['link']) ? $_POST['link'] : '';
		if(!empty($name))
		{
			$image = $db->upload_image('image',SLIDER_IMAGE_PATH_UPLOAD,'');
			//$imageUploadSmall = $db->makeThumbnails(SLIDER_IMAGE_PATH_UPLOAD,$image,'thumbnail',150,80);
			
			$result = $db->insertRow("INSERT INTO ".$table." (`imgPath`,`name`,`link`,`updated_at`) VALUES (?,?,?,?)",array($image,$name,$link,$currentTime));
			
			if($result){
				$_SESSION['notification_success'] = "Add Successfully.";
				echo 1;
				exit();
			}else{
				$_SESSION['notification_error'] = "Add in Error.";
				echo 0;
				exit();
			}
		}else{
			$_SESSION['notification_error'] = "Add in Error.";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="edit"))
	{
		$id = isset($_POST['id']) ? $_POST['id'] : '';
		
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$link = isset($_POST['link']) ? $_POST['link'] : '';
		$old_img = isset($_POST['old_img']) ? $_POST['old_img'] : '';
		if(!empty($name) && !empty($id))
		{
			$image = $db->upload_image('image',SLIDER_IMAGE_PATH_UPLOAD,'');
			//if(!empty($image))
				//$imageUploadSmall = $db->makeThumbnails(SLIDER_IMAGE_PATH_UPLOAD,$image,'thumbnail',150,80);
			
			if(!empty($image)){
				if(!empty($old_img)){
					if(file_exists(SLIDER_IMAGE_PATH_UPLOAD.$old_img))
						unlink(SLIDER_IMAGE_PATH_UPLOAD.$old_img);
					//if(file_exists(SLIDER_IMAGE_PATH_UPLOAD."thumbnail_".$old_img))
						//unlink(SLIDER_IMAGE_PATH_UPLOAD."thumbnail_".$old_img);
				}
			}else{
				$image = $old_img;
			}
			
			$update = $db->updateRow("update ".$table." set `imgPath`=?,`name`=?,`link`=?,`updated_at`=? where `id`=?",array($image,$name,$link,$currentTime,$id));
			
			if(!$update){
				$_SESSION['notification_success'] = "Update Successfully.";
				echo 1;
				exit();
			}else{
				$_SESSION['notification_error'] = "Update in Error.";
				echo 0;
				exit();
			}
		}else{
			$_SESSION['notification_error'] = "Update in Error.";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="delete"))
	{
		$id = $_POST['mid'];
		$selectSlider = $db->getRow("SELECT * FROM ".$table." where `id`=?",array($id));
		
		if(!empty($selectSlider)){
			if(file_exists(SLIDER_IMAGE_PATH_UPLOAD.$selectSlider['imgPath']))
				unlink(SLIDER_IMAGE_PATH_UPLOAD.$selectSlider['imgPath']);
			//if(file_exists(SLIDER_IMAGE_PATH_UPLOAD."thumbnail_".$selectSlider['imgPath']))
				//unlink(SLIDER_IMAGE_PATH_UPLOAD."thumbnail_".$selectSlider['imgPath']);
		}
		
		$delete = $db->deleteRow("DELETE FROM ".$table." where `id`=?",array($id));
		if(!$delete){
			$_SESSION['notification_success'] = "Delete Successfully.";
			echo 1;
			exit();
		}else{
			$_SESSION['notification_error'] = "Delete in Error.";
			echo 0;
			exit();
		}
	}
	else if(isset($_POST['type']) && ($_POST['type']=="status"))
	{
		$id = $_POST['mid'];
		$status = $_POST['status'];
		$update = $db -> updateRow("update ".$table." set `status`=? where `id`=?",array($status,$id));
		
		if(!$update){
			$_SESSION['notification_success'] = "Update Successfully.";
			echo 1;
			exit();
		}else{
			$_SESSION['notification_error'] = "Update in Error.";
			echo 0;
			exit();
		}
	}
	else
	{
		$_SESSION['notification_error'] = "please don't try.";
		echo 0;
		exit();
	}
}else{
	$_SESSION['notification_error'] = "please don't try.";
	echo 0;
	exit();
}
?>