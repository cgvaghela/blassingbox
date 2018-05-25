<?php session_start();
// install core table
include_once("admin/config/config.php");
$db = new db();

// this is admin table
$tableAdmin = "CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) unsigned NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";
// insert first record in admin table for default login
$adminInsert = "INSERT INTO `admin` (`username`, `email`, `password`, `role`, `status`, `updated_at`) VALUES ('admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'main', 1, '".date('Y-m-d H:i:s')."')";
// this is banned ips table
$tableBanned = "CREATE TABLE IF NOT EXISTS `banned_ips` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `ip_address` varchar(15) NOT NULL,
  `banned_date` bigint(11) NOT NULL DEFAULT '0',
  `reason` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";
// this is flgs table
$tableFlag = "CREATE TABLE IF NOT EXISTS `flags` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `request_id` mediumint(9) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `flagged_date` bigint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
// this is praise table
$tablePraise = "CREATE TABLE IF NOT EXISTS `praise_reports` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `req_id` mediumint(9) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
// this is prayedfor table
$tablePrayed = "CREATE TABLE IF NOT EXISTS `prayedfor` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `request_id` mediumint(9) NOT NULL DEFAULT '0',
  `prayedfor_date` bigint(11) NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
// this is for request table
$tableRequest = "CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `anon` tinyint(1) NOT NULL,
  `email` varchar(64) NOT NULL,
  `authcode` varchar(12) NOT NULL,
  `submitted` bigint(11) NOT NULL DEFAULT '0',
  `closed` bigint(11) NOT NULL DEFAULT '0',
  `closed_comment` text NOT NULL,
  `title` varchar(64) NOT NULL,
  `body` text NOT NULL,
  `notify` tinyint(1) NOT NULL DEFAULT '1',
  `ip_address` varchar(15) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

// create table code
$db->queryRow($tableAdmin);
$db->queryRow($tableBanned);
$db->queryRow($tableFlag);
$db->queryRow($tablePraise);
$db->queryRow($tablePrayed);
$db->queryRow($tableRequest);
// insert admin first record
$adminDataRows = $db->numRow("SELECT * FROM `admin`",array());
if($adminDataRows <= 0){
	$db->insertRow($adminInsert,array());
}
echo '<h1>Table Intall Successfully</h1>';
echo '<h3>Default Username is: admin</h3>';
echo '<h3>Default Password is: admin</h3>';
echo '<a href="admin/">Admin Panel</a>';
?>