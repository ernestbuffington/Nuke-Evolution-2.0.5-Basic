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
title(_ML_CREATENEWISSUE);
ML_Admin();
echo "<br />\n";
$maxstories = 50;
$send = $adminmail;
if(strlen($sub) == 0) { $sub = _ML_TITLE; }
$text = stripslashes($text);
$htmltext = stripslashes($htmltext);
$num1 = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnml_users`"));
$num2 = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnml_lists`"));
list($next_issue) = $db->sql_fetchrow($db->sql_query("SELECT `nid` FROM `".$prefix."_nsnml_issues` ORDER BY `nid` DESC LIMIT 0,1"));
$next_issue = $next_issue + 1;
if($num1 && $num2) {
  OpenTable();
  echo "<table align='center' border='0'>\n";
  echo "<form action='".$admin_file.".php?op=MLSend' method='POST'>\n";
  echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_SUBJECT."</strong></td><td><input type='text' name='sub' value='"._ML_ISSUE." $next_issue' size='50' maxlength='100'></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_MAIN."</strong></td><td><select name ='lid'>\n";
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnml_lists`");
  while($list_info = $db->sql_fetchrow($result)) { echo "<option value='".$list_info['lid']."'>".$list_info['title']."</option>\n"; }
  echo "</select></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._ML_ENTERTEXTPLAIN."</strong></td><td><textarea name='text' class='none' $textrowcol>".$text."</textarea></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._ML_ENTERTEXTHTML."</strong></td><td><textarea name='htmltext' $textrowcol>".$htmltext."</textarea></td></tr>\n";
  echo "<tr><td align='center' colspan='2'><input type='submit' value='"._ML_SEND."'></td></tr>\n";
  echo "</form>\n";
  echo "</table>\n";
  CloseTable();
  $result = $db->sql_query("SELECT `sid`, `title` FROM `".$prefix."_stories` ORDER BY `sid` DESC LIMIT $maxstories");
  $num = $db->sql_numrows($result);
  if($num) {
    echo "<br />";
    OpenTable();
    echo "<table align='center' border='0'>\n";
    echo "<form action='".$admin_file.".php?op=MLAddStory' method='POST'>\n";
    echo "<input type='hidden' name='sub' value='".htmlspecialchars($sub, ENT_QUOTES)."'>\n";
    echo "<input type='hidden' name='text' value='".htmlspecialchars($text, ENT_QUOTES)."'>\n";
    echo "<input type='hidden' name='htmltext' value='".htmlspecialchars($htmltext, ENT_QUOTES)."'>\n";
    echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_ADDSTORY."</strong></td><td><select name ='sid[]' size='5' multiple>\n";
    while(list ($sid, $title) = $db->sql_fetchrow($result)) { echo "<option value='$sid'>$title</option>\n"; }
    echo "</select></td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_ADDAS."</strong></td><td><select name ='sidtype'>\n";
    echo "<option value='1'>"._ML_TITLELINK."</option>\n";
    echo "<option value='2'>"._ML_HOMELINK."</option>\n";
    echo "<option value='3'>"._ML_FULLTEXT."</option>\n";
    echo "</select></td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_ADDSEPERATOR."</strong></td><td><input type='checkbox' name='seperator' value='1' checked='checked'></td></tr>\n";
    echo "<tr><td align='center' colspan='2'><input type='submit' value='"._ML_ADD."'></td></tr>\n";
    echo "</form>";
    echo "</table>\n";
    CloseTable();
  }
  //if($ml_config['download_table'] == 1) { $table_name = "_nsngd_downloads"; } elseif($ml_config['download_table'] == 2) { $table_name = "_nsnde_files"; } else { $table_name = "_downloads_downloads"; }
  $result = $db->sql_query("SELECT `lid`, `title` FROM `".$prefix."_downloads_downloads` ORDER BY `date` DESC");
  $num = $db->sql_numrows($result);
  if($num) {
    echo "<br />";
    OpenTable();
    echo "<table align='center' border='0'>\n";
    echo "<form action='".$admin_file.".php?op=MLAddDownload' method='POST'>\n";
    echo "<input type='hidden' name='sub' value='".htmlspecialchars($sub, ENT_QUOTES)."'>\n";
    echo "<input type='hidden' name='text' value='".htmlspecialchars($text, ENT_QUOTES)."'>\n";
    echo "<input type='hidden' name='htmltext' value='".htmlspecialchars($htmltext, ENT_QUOTES)."'>\n";
    echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._ML_ADDDOWNLOAD."</strong></td><td><select name ='lid[]' size='5' multiple>\n";
    while(list ($lid, $title) = $db->sql_fetchrow($result)) { echo "<option value='$lid'>$title</option>\n"; }
    echo "</select></td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_ADDAS."</strong></td><td><select name ='lidtype'>\n";
    echo "<option value='1'>"._ML_DOWNLOADLINK."</option>\n";
    echo "<option value='2'>"._ML_DESCRIPTIONLINK."</option>\n";
    echo "</select></td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_ADDSEPERATOR."</strong></td><td><input type='checkbox' name='seperator' value='1' checked='checked'></td></tr>\n";
    echo "<tr><td align='center' colspan='2'><input type='submit' value='"._ML_ADD."'></td></tr>\n";
    echo "</form>";
    echo "</table>\n";
    CloseTable();
  }
  //if($ml_config['banner_table'] == 1) { $table_name = "_nsnba_banners"; } elseif($ml_config['download_table'] == 2) { $table_name = "_nsnbc_banners"; } else { $table_name = "_banner"; }
  $result = $db->sql_query("SELECT `bid`, `imageurl` FROM `".$prefix."_banner`");
  $num = $db->sql_numrows($result);
  if($num) {
    echo "<br />\n";
    OpenTable();
    echo "<table align='center' border='0'>\n";
    echo "<form action='".$admin_file.".php?op=MLAddBanner' method='POST'>\n";
    echo "<input type='hidden' name='sub' value='".htmlspecialchars($sub, ENT_QUOTES)."'>\n";
    echo "<input type='hidden' name='text' value='".htmlspecialchars($text, ENT_QUOTES)."'>\n";
    echo "<input type='hidden' name='htmltext' value='".htmlspecialchars($htmltext, ENT_QUOTES)."'>\n";
    echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._ML_ADDBANNER."</strong></td><td>";
    while(list ($bid, $imageurl) = $db->sql_fetchrow($result)) {
      if(strlen($imageurl) > 0) {
        echo("<input type='radio' name='bid' value='$bid'> <img src='$imageurl' width='200' height='40'><br />\n");
      }
    }
    echo "</td></tr>";
    echo "<tr><td bgcolor='$bgcolor2'><strong>"._ML_ADDSEPERATOR."</strong></td><td><input type='checkbox' name='seperator' value='1' checked='checked'></td></tr>\n";
    echo "<tr><td align='center' colspan='2'><input type='submit' value='"._ML_ADD."'></td></tr>\n";
    echo "</form>\n";
    echo "</table>\n";
    CloseTable();
  }
} else {
  OpenTable();
  if(!$num1) { echo "<center><strong>"._ML_NOSUBSCRIBERS."</strong></center><br />\n"; }
  if(!$num2) { echo "<center><strong>"._ML_NOLISTS."</strong></center><br />\n"; }
  echo "<center>"._GOBACK."</center>";
  CloseTable();
}
include_once(NUKE_BASE_DIR.'footer.php');

?>