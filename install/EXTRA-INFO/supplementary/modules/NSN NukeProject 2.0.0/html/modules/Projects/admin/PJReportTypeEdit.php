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
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_REPORTS.": "._PJ_TYPEEDIT;
$type_id = intval($type_id);
if($type_id < 1) { header("Location: ".$admin_file.".php?op=PJRequestTypeList"); }
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
$type = pjreporttype_info($type_id);
pjadmin_menu(_PJ_REPORTS.": "._PJ_TYPEEDIT);
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<form method='post' action='".$admin_file.".php'>\n";
echo "<input type='hidden' name='op' value='PJReportTypeUpdate'>\n";
echo "<input type='hidden' name='type_id' value='$type_id'>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._PJ_TYPE.":</td>\n";
echo "<td><input type='text' name='type_name' value=\"".$type['type_name']."\" size='30'></td></tr>\n";
echo "<tr><td colspan='2' align='center'><input type='submit' value='"._PJ_TYPEUPDATE."'></td></tr>\n";
echo "</form>\n";
echo "</table>\n";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>