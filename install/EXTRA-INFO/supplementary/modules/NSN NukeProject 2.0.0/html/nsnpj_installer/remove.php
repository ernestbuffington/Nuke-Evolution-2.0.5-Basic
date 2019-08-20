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

$pagetitle = $pagename.": Removal";
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
$label = "<tr><td align='center' class='title'>$pagetitle</td></tr>";
$warning = "";
include_once(NUKE_BASE_DIR."nsnpj_installer/default.php");
echo "<br /><br /><strong>Operation Status!</strong><hr>\n";
$message = "Everything seems to have completed succeesfully :)\n";
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_config`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_members`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_members failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_members_positions`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_members_positions failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_projects`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_projects failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_projects_members`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_projects_members failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_projects_priorities`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_projects_priorities failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_projects_status`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_projects_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_reports`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_nsnpj_reports failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_reports_comments`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_reports_comments failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_reports_members`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_reports_members failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_reports_status`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_reports_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_reports_types`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_reports_types failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_requests`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_requests failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_requests_comments`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_requests_comments failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_requests_members`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_requests_members failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_requests_status`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_requests_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_requests_types`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_requests_types failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_tasks`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_tasks failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_tasks_members`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_tasks_members failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_tasks_priorities`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_tasks_priorities failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnpj_tasks_status`");
if(!$result) { echo "- Remove ".$prefix."_nsnpj_tasks_status failed<br />\n"; $message = ""; }
echo "$message<br /><hr>\n";
echo "<strong>Operation Complete!</strong><br />\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>