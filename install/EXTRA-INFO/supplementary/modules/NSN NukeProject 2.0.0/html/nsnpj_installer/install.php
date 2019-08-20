<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NukeProject(tm)                                      */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

$pagetitle = $pagename.": Install";
include_once(NUKE_BASE_DIR.'header.php');
$result = $db->sql_query("SHOW TABLE STATUS LIKE '".$prefix."_nsnw%'");
while($row = $db->sql_fetchrow($result)) { $nsnwb[] = $row['Name']; }
OpenTable();
$label = "<tr><td align='center' class='title'>$pagetitle</td></tr>";
$warning = "";
include_once(NUKE_BASE_DIR."nsnpj_installer/default.php");
global $db, $prefix, $dbname;
echo "<br /><br /><strong>Operation Status!</strong><hr>\n";
$message = "Everything seems to have completed succeesfully :)\n";
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_config` (`config_name` varchar(255) NOT NULL default '', `config_value` text NOT NULL)");
if(!$result) { echo "- Create ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('admin_report_email', '$adminmail')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('admin_request_email', '$adminmail')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('location', 'Projects')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_project_position', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_project_priority', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_project_status', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_report_position', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_report_status', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_report_type', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_request_position', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_request_status', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_request_type', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_task_position', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_task_priority', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('new_task_status', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('notify_report_admin', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('notify_report_submitter', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('notify_request_admin', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('notify_request_submitter', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('project_date_format', 'Y-m-d H:i:s')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('report_date_format', 'Y-m-d H:i:s')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('request_date_format', 'Y-m-d H:i:s')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('task_date_format', 'Y-m-d H:i:s')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_config` VALUES ('version_number', '2.0.0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
//if(is_array($nsnwb)) {
// nsnwb conversion
if(in_array($prefix."_nsnwb_config", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_config` ORDER BY `config_name`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("UPDATE `".$prefix."_nsnpj_config` SET `config_value`='".$frow['config_value']."' WHERE `config_name`='".$frow['config_name']."'");
    if(!$result) { echo "- Update ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
  }
}
// nsnwp conversion
if(in_array($prefix."_nsnwp_reports_config", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwp_reports_config` ORDER BY `config_name`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("UPDATE `".$prefix."_nsnpj_config` SET `config_value`='".$frow['config_value']."' WHERE `config_name`='".$frow['config_name']."'");
    if(!$result) { echo "- Update ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
  }
}
// nsnwr conversion
if(in_array($prefix."_nsnwr_requests_config", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwr_requests_config` ORDER BY `config_name`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("UPDATE `".$prefix."_nsnpj_config` SET `config_value`='".$frow['config_value']."' WHERE `config_name`='".$frow['config_name']."'");
    if(!$result) { echo "- Update ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_members` (`member_id` int(11) NOT NULL auto_increment, `member_name` varchar(255) NOT NULL default '', `member_email` varchar(255) NOT NULL default '', PRIMARY KEY  (`member_id`), KEY `member_id` (`member_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_members failed<br />\n"; $message = ""; }
// nsnwb conversion
if(in_array($prefix."_nsnwb_members", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_members`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_members` VALUES ('".$frow['member_id']."', '".$frow['member_name']."', '".$frow['member_email']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_members failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_members_positions` (`position_id` int(11) NOT NULL auto_increment, `position_name` varchar(255) NOT NULL default '', `position_weight` int(11) NOT NULL default '0', PRIMARY KEY  (`position_id`), KEY `position_id` (`position_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_members_positions failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_members_positions` VALUES (-1, 'N/A', 0)");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_members_positions failed<br />\n"; $message = ""; }
// nsnwb conversion
if(in_array($prefix."_nsnwb_members_positions", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_members_positions` ORDER BY `position_id`");
  $i = 1;
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_members_positions` VALUES ('".$frow['position_id']."', '".$frow['position_name']."', '$i')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_members_positions failed<br />\n"; $message = ""; }
    $i++;
  }
} else {
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_members_positions` VALUES (1, 'Manager', 1)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_members_positions failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_members_positions` VALUES (2, 'Developer', 2)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_members_positions failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_members_positions` VALUES (3, 'Tester', 3)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_members_positions failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_members_positions` VALUES (4, 'Sponsor', 4)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_members_positions failed<br />\n"; $message = ""; }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_projects` (`project_id` int(11) NOT NULL auto_increment, `project_name` varchar(255) NOT NULL default '', `project_description` text NOT NULL, `project_site` varchar(255) NOT NULL default '', `priority_id` int(11) NOT NULL default '0', `status_id` int(11) NOT NULL default '0', `project_percent` float NOT NULL default '0', `weight` int(11) NOT NULL default '0', `featured` tinyint(2) NOT NULL default '0', `allowreports` tinyint(2) NOT NULL default '0', `allowrequests` tinyint(2) NOT NULL default '0', `date_created` int(14) NOT NULL default '0', `date_started` int(14) NOT NULL default '0', `date_finished` int(14) NOT NULL default '0', PRIMARY KEY  (`project_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_projects failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwb_projects", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_projects` ORDER BY `project_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects` VALUES ('".$frow['project_id']."', '".$frow['project_name']."', '".addslashes(stripslashes($frow['project_description']))."', '', '".$frow['priority_id']."', '".$frow['status_id']."', '".$frow['project_percent']."', '".$frow['weight']."', '".$frow['featured']."', '0', '0', '".$frow['date_created']."', '".$frow['date_started']."', '".$frow['date_finished']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_projects_members` (`project_id` int(11) NOT NULL default '0', `member_id` int(11) NOT NULL default '0', `position_id` int(11) NOT NULL default '0', KEY `project_id` (`project_id`), KEY `member_id` (`member_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_projects_members failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwb_projects_members", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_projects_members` ORDER BY `project_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_members` VALUES ('".$frow['project_id']."', '".$frow['member_id']."', '".$frow['position_id']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_members failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_projects_priorities` (`priority_id` int(11) NOT NULL auto_increment, `priority_name` varchar(30) NOT NULL default '', `priority_weight` int(11) NOT NULL default '1', PRIMARY KEY  (`priority_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_projects_priorities failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_priorities` VALUES (-1, 'N/A', 0)");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_priorities failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwb_projects_priorities", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_projects_priorities` ORDER BY `priority_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_priorities` VALUES ('".$frow['priority_id']."', '".$frow['priority_name']."', '".$frow['priority_weight']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_priorities failed<br />\n"; $message = ""; }
  }
} else {
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_priorities` VALUES (1, 'Low', 1)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_priorities failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_priorities` VALUES (2, 'Low-Med', 2)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_priorities failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_priorities` VALUES (3, 'Medium', 3)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_priorities failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_priorities` VALUES (4, 'High-Med', 4)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_priorities failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_priorities` VALUES (5, 'High', 5)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_priorities failed<br />\n"; $message = ""; }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_projects_status` (`status_id` int(11) NOT NULL auto_increment, `status_name` varchar(255) NOT NULL default '', `status_weight` int(11) NOT NULL default '0', PRIMARY KEY  (`status_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_projects_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_status` VALUES (-1, 'N/A', 0)");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_status failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwb_projects_status", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_projects_status` ORDER BY `status_id`");
  $i = 1;
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_status` VALUES ('".$frow['status_id']."', '".$frow['status_name']."', '$i')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_status failed<br />\n"; $message = ""; }
    $i++;
  }
} else {
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_status` VALUES (1, 'Pending', 1)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_status` VALUES (2, 'Completed', 2)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_status` VALUES (3, 'Active', 3)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_status` VALUES (4, 'Inactive', 4)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_projects_status` VALUES (5, 'Released', 5)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_projects_status failed<br />\n"; $message = ""; }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_reports` (`report_id` int(11) NOT NULL auto_increment, `project_id` int(11) NOT NULL default '0', `type_id` int(11) NOT NULL default '0', `status_id` int(11) NOT NULL default '0', `report_name` varchar(255) NOT NULL default '', `report_description` text NOT NULL, `submitter_name` varchar(32) NOT NULL default '', `submitter_email` varchar(255) NOT NULL default '', `submitter_ip` varchar(20) NOT NULL default '0.0.0.0', `date_submitted` int(14) NOT NULL default '0', `date_commented` int(14) NOT NULL default '0', `date_modified` int(14) NOT NULL default '0', PRIMARY KEY  (`report_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_reports failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwp_reports", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwp_reports` ORDER BY `report_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports` VALUES ('".$frow['report_id']."', '".$frow['project_id']."', '".$frow['type_id']."', '".$frow['status_id']."', '".$frow['report_name']."', '".addslashes(stripslashes($frow['report_description']))."', '".$frow['submitter_name']."', '".$frow['submitter_email']."', '".$frow['submitter_ip']."', '".$frow['date_submitted']."', '".$frow['date_commented']."', '".$frow['date_modified']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_reports_comments` (`comment_id` int(11) NOT NULL auto_increment, `report_id` int(11) NOT NULL default '0', `commenter_name` varchar(32) NOT NULL default '', `commenter_email` varchar(255) NOT NULL default '', `commenter_ip` varchar(20) NOT NULL default '0.0.0.0', `comment_description` text NOT NULL, `date_commented` int(14) NOT NULL default '0', PRIMARY KEY  (`comment_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_reports_comments failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwp_reports_comments", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwp_reports_comments` ORDER BY `comment_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_comments` VALUES ('".$frow['comment_id']."', '".$frow['report_id']."', '".$frow['commenter_name']."', '".$frow['commenter_email']."', '".$frow['commenter_ip']."', '".$frow['comment_description']."', '".$frow['date_commented']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_comments failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_reports_members` (`report_id` int(11) NOT NULL default '0', `member_id` int(11) NOT NULL default '0', `position_id` int(11) NOT NULL default '0', KEY `report_id` (`report_id`), KEY `member_id` (`member_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_reports_members failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwp_reports_members", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwp_reports_members` ORDER BY `report_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_members` VALUES ('".$frow['report_id']."', '".$frow['member_id']."', '0')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_members failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_reports_status` (`status_id` int(11) NOT NULL auto_increment, `status_name` varchar(255) NOT NULL default '', `status_weight` int(11) NOT NULL default '0', PRIMARY KEY  (`status_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (-1, 'N/A', 0)");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwp_reports_status", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwp_reports_status` ORDER BY `status_id`");
  $i = 1;
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES ('".$frow['status_id']."', '".$frow['status_name']."', '$i')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
    $i++;
  }
} else {
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (1, 'Open', 1)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (2, 'Closed', 2)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (3, 'Duplicate', 3)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (4, 'Feedback', 4)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (5, 'Submitted', 5)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (6, 'Suspended', 6)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (7, 'Assigned', 7)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (8, 'Info Needed', 8)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_status` VALUES (9, 'Unverifiable', 9)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_reports_types` (`type_id` int(11) NOT NULL auto_increment, `type_name` varchar(255) NOT NULL default '', `type_weight` int(11) NOT NULL default '0', PRIMARY KEY  (`type_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_reports_types failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_types` VALUES (-1, 'N/A', 0)");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_types failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwp_reports_types", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwp_reports_types` ORDER BY `type_id`");
  $i = 1;
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_types` VALUES ('".$frow['type_id']."', '".$frow['type_name']."', '$i')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_types failed<br />\n"; $message = ""; }
    $i++;
  }
} else {
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_reports_types` VALUES (1, 'General', 1)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_reports_types failed<br />\n"; $message = ""; }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_requests` (`request_id` int(11) NOT NULL auto_increment, `project_id` int(11) NOT NULL default '0', `type_id` int(11) NOT NULL default '0', `status_id` int(11) NOT NULL default '0', `request_name` varchar(255) NOT NULL default '', `request_description` text NOT NULL, `submitter_name` varchar(32) NOT NULL default '', `submitter_email` varchar(255) NOT NULL default '', `submitter_ip` varchar(20) NOT NULL default '0.0.0.0', `date_submitted` int(14) NOT NULL default '0', `date_commented` int(14) NOT NULL default '0', `date_modified` int(14) NOT NULL default '0', PRIMARY KEY  (`request_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_requests failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwr_requests", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwr_requests` ORDER BY `request_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests` VALUES ('".$frow['request_id']."', '".$frow['project_id']."', '".$frow['type_id']."', '".$frow['status_id']."', '".$frow['request_name']."', '".addslashes(stripslashes($frow['request_description']))."', '".$frow['submitter_name']."', '".$frow['submitter_email']."', '".$frow['submitter_ip']."', '".$frow['date_submitted']."', '".$frow['date_commented']."', '".$frow['date_modified']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_requests_comments` (`comment_id` int(11) NOT NULL auto_increment, `request_id` int(11) NOT NULL default '0', `commenter_name` varchar(32) NOT NULL default '', `commenter_email` varchar(255) NOT NULL default '', `commenter_ip` varchar(20) NOT NULL default '0.0.0.0', `comment_description` text NOT NULL, `date_commented` int(14) NOT NULL default '0', PRIMARY KEY  (`comment_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_requests_comments failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwb_requests_comments", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_requests_comments` ORDER BY `comment_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_comments` VALUES ('".$frow['comment_id']."', '".$frow['request_id']."', '".$frow['commenter_name']."', '".$frow['commenter_email']."', '".$frow['commenter_ip']."', '".$frow['comment_description']."', '".$frow['date_commented']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_comments failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_requests_members` (`request_id` int(11) NOT NULL default '0', `member_id` int(11) NOT NULL default '0', `position_id` int(11) NOT NULL default '0', KEY `request_id` (`request_id`), KEY `member_id` (`member_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_requests_members failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwr_requests_members", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwr_requests_members` ORDER BY `request_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_members` VALUES ('".$frow['request_id']."', '".$frow['member_id']."', '0')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_members failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_requests_status` (`status_id` int(11) NOT NULL auto_increment, `status_name` varchar(255) NOT NULL default '', `status_weight` int(11) NOT NULL default '0', PRIMARY KEY  (`status_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES (-1, 'N/A', 0)");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwr_requests_status", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwr_requests_status` ORDER BY `status_id`");
  $i = 1;
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES ('".$frow['status_id']."', '".$frow['status_name']."', '$i')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
    $i++;
  }
} else {
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES (1, 'Duplicate', 1)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES (2, 'Closed', 2)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES (3, 'Inclusion', 3)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES (4, 'Open', 4)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES (5, 'Feedback', 5)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES (6, 'Submitted', 6)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES (7, 'Discarded', 7)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_status` VALUES (8, 'Assigned', 8)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_requests_types` (`type_id` int(11) NOT NULL auto_increment, `type_name` varchar(255) NOT NULL default '', `type_weight` int(11) NOT NULL default '0', PRIMARY KEY  (`type_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_requests_types failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_types` VALUES (-1, 'N/A', 0)");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_types failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwr_requests_types", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwr_requests_types` ORDER BY `type_id`");
  $i = 1;
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_types` VALUES ('".$frow['type_id']."', '".$frow['type_name']."', '$i')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_types failed<br />\n"; $message = ""; }
    $i++;
  }
} else {
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_requests_types` VALUES (1, 'General', 1)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_requests_types failed<br />\n"; $message = ""; }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_tasks` (`task_id` int(11) NOT NULL auto_increment, `project_id` int(11) NOT NULL default '0', `task_name` varchar(255) NOT NULL default '', `task_description` text NOT NULL, `priority_id` int(11) NOT NULL default '1', `status_id` int(11) NOT NULL default '0', `task_percent` float NOT NULL default '0', `date_created` int(14) NOT NULL default '0', `date_started` int(14) NOT NULL default '0', `date_finished` int(14) NOT NULL default '0', PRIMARY KEY  (`task_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_tasks failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwb_tasks", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_tasks` ORDER BY `task_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks` VALUES ('".$frow['task_id']."', '".$frow['project_id']."', '".$frow['task_name']."', '".addslashes(stripslashes($frow['task_description']))."', '".$frow['priority_id']."', '".$frow['status_id']."', '".$frow['task_percent']."', '".$frow['date_created']."', '".$frow['date_started']."', '".$frow['date_finished']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks failed<br />\n"; $message = ""; }
  }
}
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_tasks_members` (`task_id` int(11) NOT NULL default '0', `member_id` int(11) NOT NULL default '0', `position_id` int(11) NOT NULL default '0', KEY `task_id` (`task_id`), KEY `member_id` (`member_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_tasks_members failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwb_tasks_members", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_tasks_members` ORDER BY `task_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_members` VALUES ('".$frow['task_id']."', '".$frow['member_id']."', '".$frow['position_id']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_members failed<br />\n"; $message = ""; }
  }
}

$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_tasks_priorities` (`priority_id` int(11) NOT NULL auto_increment, `priority_name` varchar(30) NOT NULL default '', `priority_weight` int(11) NOT NULL default '1', PRIMARY KEY  (`priority_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_tasks_priorities failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_priorities` VALUES (-1, 'N/A', 0)");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_priorities failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwb_tasks_priorities", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_tasks_priorities` ORDER BY `priority_id`");
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_priorities` VALUES ('".$frow['priority_id']."', '".$frow['priority_name']."', '".$frow['priority_weight']."')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_priorities failed<br />\n"; $message = ""; }
  }
} else {
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_priorities` VALUES (1, 'Low', 1)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_priorities failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_priorities` VALUES (2, 'Low-Med', 2)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_priorities failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_priorities` VALUES (3, 'Medium', 3)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_priorities failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_priorities` VALUES (4, 'High-Med', 4)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_priorities failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_priorities` VALUES (5, 'High', 5)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_priorities failed<br />\n"; $message = ""; }
}

$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnpj_tasks_status` (`status_id` int(11) NOT NULL auto_increment, `status_name` varchar(255) NOT NULL default '', `status_weight` int(11) NOT NULL default '0', PRIMARY KEY  (`status_id`))");
if(!$result) { echo "- Create ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_status` VALUES (-1, 'N/A', 0)");
if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
if(in_array($prefix."_nsnwb_tasks_status", $nsnwb)) {
  $filler = $db->sql_query("SELECT * FROM `".$prefix."_nsnwb_tasks_status` ORDER BY `status_id`");
  $i = 1;
  while($frow = $db->sql_fetchrow($filler)) {
    $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_status` VALUES ('".$frow['status_id']."', '".$frow['status_name']."', '$i')");
    if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
    $i++;
  }
} else {
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_status` VALUES (1, 'Inactive', 1)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_status` VALUES (2, 'On Going', 2)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_status` VALUES (3, 'Holding', 3)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_status` VALUES (4, 'Open', 4)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_status` VALUES (5, 'Completed', 5)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_status` VALUES (6, 'Discontinued', 6)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
  $result = $db->sql_query("INSERT INTO `".$prefix."_nsnpj_tasks_status` VALUES (7, 'Active', 7)");
  if(!$result) { echo "- Insert into ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
}
//}

echo "$message<br /><hr>\n";
echo "<strong>Operation Complete!</strong><br />\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>