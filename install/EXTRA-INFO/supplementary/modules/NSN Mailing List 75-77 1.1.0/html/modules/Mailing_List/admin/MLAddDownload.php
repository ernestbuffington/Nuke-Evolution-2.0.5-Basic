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
if(count($lid) > 0) {
  //if($ml_config['download_table'] == 1) { $table_name = "_nsngd_downloads"; } elseif($ml_config['download_table'] == 2) { $table_name = "_nsnde_files"; } else { $table_name = "_downloads_downloads"; }
  for($i=0; $i < count($lid); $i++) {
    $result = $db->sql_query("SELECT `title`, `version`, `description` FROM `".$prefix."_downloads_downloads` WHERE `lid`='$lid[$i]'");
    list($title, $version, $description) = $db->sql_fetchrow($result);
    if(strlen($title) == 0) {
      print "lidtype";
      $lidtype = '0';
    }
    switch($lidtype) {
      case '1' : // Send link only
        $text = $text.""._ML_NAME.": $title\n"._ML_VERSION.": $version\n"._ML_LINK.": $nukeurl/modules.php?name=Downloads&amp;op=viewdownload&amp;lid=$lid[$i]\n";
        $htmltext = $htmltext."<a href=\"$nukeurl/modules.php?name=Downloads&amp;op=viewdownload&amp;lid=$lid[$i]\">$title</a> $version\n";
      break;

      case '2' : // Send shorttext and link
        $text = $text.""._ML_NAME.": $title\n"._ML_VERSION.": $version\n"._ML_DESCRIPTION.": $description\n"._ML_LINK.": $nukeurl/modules.php?name=Downloads&amp;op=viewdownload&amp;lid=$lid[$i]\n";
        $htmltext = $htmltext."$title $version<br /><br />$description<br /><br /><a href=\"$nukeurl/modules.php?name=Downloads&amp;op=viewdownload&amp;lid=$lid[$i]\">"._ML_DOWNLOADTEXT."</a>\n";
      break;
    }
    if($seperator == '1') {
      $text = $text._ML_TEXTSEPERATOR;
      $htmltext = $htmltext._ML_HTMLSEPERATOR;
    }
  }
}
echo "<center><strong>"._ML_DOWNLOADADDED."</strong></center><br />\n";
echo "<form action='".$admin_file.".php?op=MLAddIssue' method='POST'>\n";
echo "<input type='hidden' name='sub' value='".htmlspecialchars($sub, ENT_QUOTES)."'>\n";
echo "<input type='hidden' name='text' value='".htmlspecialchars($text, ENT_QUOTES)."'>\n";
echo "<input type='hidden' name='htmltext' value='".htmlspecialchars($htmltext, ENT_QUOTES)."'>\n";
echo "<center><input type='submit' value='"._ML_RESUME."'></center>\n";
echo "</form>\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>