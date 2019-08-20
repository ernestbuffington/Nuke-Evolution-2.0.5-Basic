<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Mailing List                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

$mid = intval($mid);
$pagetitle = " - "._ML_ADMIN." ".$ml_config['version_number'];
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
title(_ML_SENTISSUES);
ML_Admin();
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0' width='70%' bgcolor='$bgcolor2'>\n";
echo "<tr bgcolor='$bgcolor2'>\n";
echo "<td width='70%'><strong>"._ML_SUBJECT."</strong></td>\n";
echo "<td align='center' width='30%'><strong>"._ML_DATE."</strong></td>\n";
echo "</tr>\n";
$result = $db->sql_query("SELECT * FROM `".$prefix."_nsnml_tracked` WHERE `mid`='$mid' ORDER BY `sent`");
while($track_info = $db->sql_fetchrow($result)) {
  echo "<tr bgcolor='$bgcolor1'>\n";
  $issue_info = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnml_issues` WHERE `nid`='".$track_info['nid']."'"));
  echo "<td><a href='".$admin_file.".php?op=MLViewIssue&amp;nid=".$issue_info['nid']."'>".$issue_info['subject']."</a></td>\n";
  echo "<td align='center'>".date($ml_config['date_format'], $issue_info['sent'])."</td>\n";
  echo "</tr>\n";
}
echo "</table>\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>