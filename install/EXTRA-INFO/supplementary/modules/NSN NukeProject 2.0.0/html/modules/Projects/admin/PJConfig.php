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
$pagetitle = ": "._PJ_TITLE." ".$pj_config['version_number'].": "._PJ_GENCONFIG;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=PJMain\">" . _PJ_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _PJ_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
pjadmin_menu(_PJ_GENCONFIG);
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<form method='post' action='".$admin_file.".php'>\n";
echo "<input type='hidden' name='op' value='PJConfigUpdate'>\n";
$modlocation = basename(str_replace("/admin", "", dirname(__FILE__)));
echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._PJ_MODLOCATION.":</strong></td><td><select name='location'>\n";
$handle=opendir('modules');
while($file = readdir($handle)) {
  if( (!ereg("[.]",$file) AND file_exists("modules/$file/index.php")) ) { $modulelist .= "$file "; }
}
closedir($handle);
$modulelist = explode(" ", $modulelist);
sort($modulelist);
for($i=0; $i < sizeof($modulelist); $i++) {
  if($modulelist[$i]!="") {
    echo "<option value=\"$modulelist[$i]\" ";
    if($modulelist[$i] == $pj_config['location']) echo "selected";
    echo ">$modulelist[$i]\n";
  }
}
echo "</select><br />"._PJ_MODLOCATIONNOTE." $modlocation<br />"._PJ_MODLOCATIONNOTE2."</td></tr>\n";
echo "<tr><td colspan='2' align='center'><input type='submit' value='"._PJ_CONFIGUPDATE."'></td></tr>\n";
echo "</form>\n";
echo "</table>\n";
CloseTable();
pj_copy();
include_once(NUKE_BASE_DIR.'footer.php');

?>