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
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_PROJECTS.": "._PJ_DELETEPROJECT;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
$project = pjproject_info($project_id);
pjadmin_menu(_PJ_PROJECTS.": "._PJ_DELETEPROJECT);
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<form method='post' action='".$admin_file.".php'>\n";
echo "<input type='hidden' name='op' value='PJProjectDelete'>\n";
echo "<input type='hidden' name='project_id' value='$project_id'>\n";
echo "<tr><td align='center'><strong>"._PJ_PROJECTCONFIRMDELETE."</strong></td></tr>\n";
echo "<tr><td align='center'><strong><i>".$project['project_name'].":</i></strong></td></tr>\n";
echo "<tr><td align='center'><i>".$project['project_description']."</i></td></tr>\n";
echo "<tr><td align='center'><input type='submit' value='"._PJ_DELETEPROJECT."'></td></tr>\n";
echo "</form>\n";
echo "</table>\n";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>