<?php session_start();
include_once("user/config/PDO.php");
$db = new db();
$currentTime = date("Y-m-d H:i:s");
$createWaitingList = $db->insertRow("INSERT INTO `testing` (`name`) VALUES (?)",array($currentTime));
?>