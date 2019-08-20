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
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_REQUESTS.": "._PJ_DELETESTATUS;
$status_id = intval($status_id);
if($status_id < 1) { header("Location: ".$admin_file.".php?op=PJRequestStatusList"); }
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
$statusresult = $db->sql_query("SELECT `status_name` FROM `".$prefix."_nsnpj_requests_status` WHERE `status_id`='$status_id'");
list($status_name) = $db->sql_fetchrow($statusresult);
pjadmin_menu(_PJ_REQUESTS.": "._PJ_DELETESTATUS);
echo "<br />";
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>";
echo "<form method='post' action='".$admin_file.".php'>";
echo "<input type='hidden' name='op' value='PJRequestStatusDelete'>";
echo "<input type='hidden' name='status_id' value='$status_id'>";
echo "<tr><td align='center'><strong>"._PJ_SWAPREQUESTSTATUS."</strong></td></tr>";
echo "<tr><td align='center'>$status_name -> <select name='swap_status_id'>";
echo "<option value='-1'>"._PJ_NA."</option>\n";
$statuslist = $db->sql_query("SELECT `status_id`, `status_name` FROM `".$prefix."_nsnpj_requests_status` WHERE `status_id` != '$status_id' AND `status_id` > 0 ORDER BY `status_weight`");
while(list($s_status_id, $s_status_name) = $db->sql_fetchrow($statuslist)){
  echo "<option value='$s_status_id'>$s_status_name</option>";
}
echo "</select></td></tr>";
echo "<tr><td align='center'><input type='submit' value='"._PJ_DELETESTATUS."'></td></tr>";
echo "</form>";
echo "</table>";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>