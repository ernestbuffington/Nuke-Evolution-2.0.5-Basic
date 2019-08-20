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

$bid = intval($bid);
$pagetitle = " - "._ML_ADMIN." ".$ml_config['version_number'];
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
title(_ML_ADMIN." ".$ml_config['version_number']);
ML_Admin();
echo "<br />\n";
OpenTable();
if(strlen($text) > 0) { $text = stripslashes($text)."\n"; }
if(strlen($htmltext) > 0) { $htmltext = stripslashes($htmltext)."\n"; }
if($bid != 0) {
  //if($ml_config['banner_table'] == 1) { $table_name = "_nsnba_banners"; } elseif($ml_config['download_table'] == 2) { $table_name = "_nsnbc_banners"; } else { $table_name = "_banner"; }
  $query = "SELECT `bid`, `imageurl`, `clickurl` FROM `".$prefix."_banner` WHERE `bid`='$bid'";
  $result = $db->sql_query($query);
  list($bid, $imageurl, $clickurl) = $db->sql_fetchrow($result);
}
$text = $text."\n"._ML_BANNERTEXT."\n$clickurl\n";
$htmltext = $htmltext."\n<a href='$clickurl'><img src='$imageurl'><br />\n";
if($seperator == '1') {
  $text = $text._ML_TEXTSEPERATOR;
  $htmltext = $htmltext._ML_HTMLSEPERATOR;
}
echo "<center><strong>"._ML_BANNERADDED."</strong></center><br />\n";
echo "<form action='".$admin_file.".php?op=MLAddIssue' method='POST'>\n";
echo "<input type='hidden' name='sub' value='".htmlspecialchars($sub, ENT_QUOTES)."'>\n";
echo "<input type='hidden' name='text' value='".htmlspecialchars($text, ENT_QUOTES)."'>\n";
echo "<input type='hidden' name='htmltext' value='".htmlspecialchars($htmltext, ENT_QUOTES)."'>\n";
echo "<center><input type='submit' value='"._ML_RESUME."'></center>\n";
echo "</form>\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>