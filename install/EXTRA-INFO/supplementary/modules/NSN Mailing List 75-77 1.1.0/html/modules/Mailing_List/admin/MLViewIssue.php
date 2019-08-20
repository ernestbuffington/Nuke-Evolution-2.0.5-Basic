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

$nid = intval($nid);
$pagetitle = " - "._ML_ADMIN." ".$ml_config['version_number'];
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
title(_ML_VIEWCONTENT);
ML_Admin();
echo "<br />\n";
OpenTable();
$result = $db->sql_query("SELECT * FROM `".$prefix."_nsnml_issues` WHERE `nid`='$nid'");
if($issue_info = $db->sql_fetchrow($result)) {
  OpenTable2();
  echo stripslashes($issue_info['subject'])."\n";
  CloseTable2();
  echo "<br />\n";
  OpenTable2();
  echo strip_tags(stripslashes(str_replace("\r\n", "<br />", $issue_info['text_plain'])), '<br />')."\n";
  CloseTable2();
  echo "<br />\n";
  OpenTable2();
  echo stripslashes($issue_info['text_html'])."\n";
  CloseTable2();
  echo "<br /><center>"._GOBACK."</center>\n";
} else {
  echo "<center><strong>"._ML_NOISSUE."</strong></center><br />\n";
  echo "<center>"._GOBACK."</center>\n";
}
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>