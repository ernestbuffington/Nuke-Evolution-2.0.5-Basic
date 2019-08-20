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

$lid = intval($lid);
$pagetitle = " - "._ML_ADMIN." ".$ml_config['version_number'];
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
title(_ML_VIEWLISTISSUES);
ML_Admin();
echo "<br />\n";
OpenTable();
$result = $db->sql_query("SELECT * FROM `".$prefix."_nsnml_issues` WHERE `lid`='$lid' ORDER BY `sent`");
$num = $db->sql_numrows($result);
if($num) {
  echo "<table align='center' border='0' width='100%' bgcolor='$bgcolor2'>";
  echo "<tr bgcolor='$bgcolor2'>";
  echo "<td width='50%'><strong>"._ML_SUBJECT."</strong></td>";
  echo "<td align='center' width='40%'><strong>"._ML_DATE."</strong></td>";
  echo "<td align='center' width='10%'><strong>"._ML_SUBSCRIBERS."</strong></td>";
  while($issue_info = $db->sql_fetchrow($result)) {
    echo "<tr bgcolor='$bgcolor1'>";
    echo "<td><a href='".$admin_file.".php?op=MLViewIssue&amp;nid=".$issue_info['nid']."'>".$issue_info['subject']."</a></td>";
    echo "<td align='center'>".date($ml_config['date_format'], $issue_info['sent'])."</td>";
    $user_info = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnml_tracked` WHERE `nid`='".$issue_info['nid']."'"));
    echo "<td align='center'>".$user_info."</td>\n";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "<center><strong>"._ML_NOISSUES."</strong></center>\n";
}
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>