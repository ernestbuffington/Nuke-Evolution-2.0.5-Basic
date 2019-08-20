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

if(!defined('NSNPJ_ADMIN')) { die("Illegal Access Detected!!!"); }
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_PROJECTS.": "._PJ_DELETESTATUS;
$status_id = intval($status_id);
if($status_id < 1) { header("Location: ".$admin_file.".php?op=PJProjectStatusList"); }
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
$status = pjprojectstatus_info($status_id);
pjadmin_menu(_PJ_PROJECTS.": "._PJ_DELETESTATUS);
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<form method='post' action='".$admin_file.".php'>\n";
echo "<input type='hidden' name='op' value='PJProjectStatusDelete'>\n";
echo "<input type='hidden' name='status_id' value='$status_id'>\n";
echo "<tr><td align='center'><strong>"._PJ_SWAPPROJECTSTATUS."</strong></td></tr>\n";
echo "<tr><td align='center'>".$status['status_name']." -> <select name='swap_status_id'>\n";
echo "<option value='-1'>"._PJ_NA."</option>\n";
$statuslist = $db->sql_query("SELECT `status_id`, `status_name` FROM `".$prefix."_nsnpj_projects_status` WHERE `status_id` != '$status_id' AND `status_id` > 0 ORDER BY `status_weight`");
while(list($s_status_id, $s_status_name) = $db->sql_fetchrow($statuslist)){
    echo "<option value='$s_status_id'>$s_status_name</option>\n";
}
echo "</select></td></tr>\n";
echo "<tr><td align='center'><input type='submit' value='"._PJ_DELETESTATUS."'></td></tr>\n";
echo "</form>\n";
echo "</table>\n";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>