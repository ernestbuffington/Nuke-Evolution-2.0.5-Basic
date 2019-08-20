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
if(count($sid) > 0) {
  for($i=0; $i < count($sid); $i++) {
    $result = $db->sql_query("SELECT `title`, `hometext`, `bodytext` FROM `".$prefix."_stories` WHERE `sid`='$sid[$i]'");
    list($title, $hometext, $bodytext) = $db->sql_fetchrow($result);
    $texthome = strip_tags($hometext, "<br />");
    $textbody = strip_tags($bodytext, "<br />");
    if(strlen($title) == 0) {
      print "sidtype";
      $sidtype = '0';
    }
    switch($sidtype) {
      case '1' : // Send link only
        $text = $text."$title\n"._ML_STORYLINKTEXT."\n$nukeurl/modules.php?name=News&amp;file=article&amp;sid=$sid[$i]&amp;mode=nested\n";
        $htmltext = $htmltext."<a href=\"$nukeurl/modules.php?name=News&amp;file=article&amp;sid=$sid[$i]&amp;mode=nested\">$title</a>\n";
      break;

      case '2' : // Send hometext and link
        $text = $text."$title\n$hometext\n\n"._ML_STORYLINKTEXT."\n$nukeurl/modules.php?name=News&amp;file=article&amp;sid=$sid[$i]&amp;mode=nested\n";
        $htmltext = $htmltext."$title<br /><br />$hometext<br /><br /><a href=\"$nukeurl/modules.php?name=News&amp;file=article&amp;sid=$sid[$i]&amp;mode=nested\">"._ML_STORYLINKTEXT."</a>\n";
      break;

      case '3' : // Send full Story
        $text = $text."$title\n$hometext\n$bodytext\n\n"._ML_STORYLINKTEXT."\n$nukeurl/modules.php?name=News&amp;file=article&amp;sid=$sid[$i]&amp;mode=nested\n";
        $htmltext = $htmltext."$title<br /><br />$hometext<br />$bodytext<br /><br /><a href=\"$nukeurl/modules.php?name=News&amp;file=article&amp;sid=$sid[$i]&amp;mode=nested\">"._ML_STORYLINKTEXT."</a>\n";
      break;
    }
    if($seperator == '1') {
      $text = $text._ML_TEXTSEPERATOR;
      $htmltext = $htmltext._ML_HTMLSEPERATOR;
    }
  }
}
echo "<center><strong>"._ML_STORYADDED."</strong></center><br />\n";
echo "<form action='".$admin_file.".php?op=MLAddIssue' method='POST'>\n";
echo "<input type='hidden' name='sub' value='".htmlspecialchars($sub, ENT_QUOTES)."'>\n";
echo "<input type='hidden' name='text' value='".htmlspecialchars($text, ENT_QUOTES)."'>\n";
echo "<input type='hidden' name='htmltext' value='".htmlspecialchars($htmltext, ENT_QUOTES)."'>\n";
echo "<center><input type='submit' value='"._ML_RESUME."'></center>\n";
echo "</form>\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>