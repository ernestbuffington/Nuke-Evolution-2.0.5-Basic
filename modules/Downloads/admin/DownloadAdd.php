<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/************************************************************************
   Nuke-Evolution: Advanced Downloads Module
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : DownloadAdd.php
   Author        : Quake (www.Nuke-Evolution.com)
   Version       : 1.0.0
   Date          : 11.21.2005 (mm.dd.yyyy)

   Notes         : Advanced Downloads module with BBGroups Integration
                   based on NSN GR Downloads.
************************************************************************/

/********************************************************/
/* Based on NSN GR Downloads                            */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

$pagetitle = _DOWNLOADSADMIN.": "._ADDDOWNLOAD;
include_once(NUKE_BASE_DIR.'header.php');
OpenTable();
echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=DLMain\">" . _DOWNLOADS_ADMIN_HEADER . "</a></div>\n";
echo "<br /><br />";
echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _DOWNLOADS_RETURNMAIN . "</a> ]</div>\n";
CloseTable();
echo "<br />";
title($pagetitle);
DLadminmain();
echo "<br />\n";
OpenTable();
echo "<table align='center' cellpadding='2' cellspacing='2' border='0'>\n";
echo "<form action='".$admin_file.".php' method='post'>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._TITLE.":</td><td><input type='text' name='title' size='50' maxlength='100'></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._URL.":</td><td><input type='text' name='url' size='50' maxlength='255' value='http://'></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._CATEGORY.":</td><td><select name='cat'><option value='0'>"._DL_NONE."</option>\n";
$result2 = $db->sql_query("SELECT * FROM ".$prefix."_downloads_categories ORDER BY parentid,title");
while($cidinfo = $db->sql_fetchrow($result2)) {
  if ($cidinfo['parentid'] != 0) $cidinfo['title'] = getparent($cidinfo['parentid'],$cidinfo['title']);
  echo "<option value='".$cidinfo['cid']."'>".$cidinfo['title']."</option>\n";
}
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._DL_PERM.":</td><td><select name='perm'>\n";
echo "<optgroup label='General'>\n";
echo "<option value='0'>"._DL_ALL."</option>\n";
echo "<option value='1'>"._DL_USERS."</option>\n";
echo "<option value='2'>"._DL_ADMIN."</option>\n";
echo "</optgroup><optgroup label='Groups'>\n";
$gresult = $db->sql_query("SELECT * FROM ".$prefix."_bbgroups WHERE group_single_user != '1' ORDER BY group_name");
while($gidinfo = $db->sql_fetchrow($gresult)) {
  $gidinfo['group_id'] = $gidinfo['group_id'] + 2;
  echo "<option value='".$gidinfo['group_id']."'>".$gidinfo['group_name']." "._DL_ONLY."</option>\n";
}
echo "</optgroup></select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'>"._DESCRIPTION."</td><td><textarea name='description' cols='50' rows='5'></textarea></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._AUTHORNAME.":</td><td><input type='text' name='sname' size='30' maxlength='60'></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._AUTHOREMAIL.":</td><td><input type='text' name='email' size='30' maxlength='60'></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._FILESIZE.":</td><td><input type='text' name='filesize' size='12' maxlength='20'> ("._INBYTES.")</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._VERSION.":</td><td><input type='text' name='version' size='11' maxlength='20'></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._HOMEPAGE.":</td><td><input type='text' name='homepage' size='50' maxlength='255' value='http://'></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>"._HITS.":</td><td><input type='text' name='hits' size='12' maxlength='11'></td></tr>\n";
echo "<input type='hidden' name='op' value='DownloadAddSave'>\n";
echo "<input type='hidden' name='new' value='0'>\n";
echo "<input type='hidden' name='lid' value='0'>\n";
echo "<tr><td align='center' colspan='2'><input type='submit' value='"._ADDDOWNLOAD."'></td></tr>\n";
echo "</form>\n</table>\n";
CloseTable();
@include(NUKE_BASE_DIR.'footer.php');

?>