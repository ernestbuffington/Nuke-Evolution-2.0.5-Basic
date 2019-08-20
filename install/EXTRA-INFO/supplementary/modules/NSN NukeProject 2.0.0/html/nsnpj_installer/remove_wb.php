<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Work Board                                       */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

$pagetitle = "NSN Work Board: Removal";
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
$label = "<tr><td align='center' class='title'>$pagetitle</td></tr>";
$warning = "";
include_once(NUKE_BASE_DIR."nsnpj_installer/default.php");
echo "<br /><br /><strong>Operation Status!</strong><hr>\n";
$message = "Everything seems to have completed succeesfully :)\n";
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_members");
if(!$result) { echo "Remove ".$prefix."_nsnwb_members failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_members_positions");
if(!$result) { echo "Remove ".$prefix."_nsnwb_members_positions failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_projects");
if(!$result) { echo "Remove ".$prefix."_nsnwb_projects failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_projects_members");
if(!$result) { echo "Remove ".$prefix."_nsnwb_projects_members failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_projects_priorities");
if(!$result) { echo "Remove ".$prefix."_nsnwb_projects_priorities failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_projects_status");
if(!$result) { echo "Remove ".$prefix."_nsnwb_projects_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_tasks");
if(!$result) { echo "Remove ".$prefix."_nsnwb_tasks failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_tasks_members");
if(!$result) { echo "Remove ".$prefix."_nsnwb_tasks_members failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_tasks_priorities");
if(!$result) { echo "Remove ".$prefix."_nsnwb_tasks_priorities failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_tasks_status");
if(!$result) { echo "Remove ".$prefix."_nsnwb_tasks_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE ".$prefix."_nsnwb_config");
if(!$result) { echo "Remove ".$prefix."_nsnwb_config failed<br />\n"; $message = ""; }
echo "$message<br /><hr>\n";
echo "<strong>Operation Complete!</strong><br />\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>