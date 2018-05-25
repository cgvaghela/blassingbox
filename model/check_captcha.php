<?php session_start();
$captcha = $_REQUEST['captcha'];
if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $captcha) != 0){
	echo 0;
}else{
	echo 1;
}	
?>