<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Work Probe                                       */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

$pagetitle = "NSN Work Probe: Removal";
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
$label = "<tr><td align='center' class='title'>$pagetitle</td></tr>";
$warning = "";
include_once(NUKE_BASE_DIR."nsnpj_installer/default.php");
echo "<br /><br /><strong>Operation Status!</strong><hr>\n";
$message = "Everything seems to have completed succeesfully :)\n";
$result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_nsnwp_reports_config");
if(!$result) { echo "Remove ".$prefix."_nsnwp_reports_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_nsnwp_reports");
if(!$result) { echo "Remove ".$prefix."_nsnwp_reports failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_nsnwp_reports_comments");
if(!$result) { echo "Remove ".$prefix."_nsnwp_reports_comments failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_nsnwp_reports_members");
if(!$result) { echo "Remove ".$prefix."_nsnwp_reports_members failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_nsnwp_reports_status");
if(!$result) { echo "Remove ".$prefix."_nsnwp_reports_status failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_nsnwp_reports_types");
if(!$result) { echo "Remove ".$prefix."_nsnwp_reports_types failed<br />\n"; $message = ""; }
echo "$message<br /><hr>\n";
echo "<strong>Operation Complete!</strong><br />\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>