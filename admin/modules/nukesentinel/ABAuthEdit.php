<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(is_god($_COOKIE['admin'])) {
  $pagetitle = _AB_NUKESENTINEL.": "._AB_EDITADMINS;
  include(NUKE_BASE_DIR."header.php");
  $sapi_name = strtolower(php_sapi_name());
  OpenTable();
  OpenMenu(_AB_EDITADMINS);
  ipbanmenu();
  CarryMenu();
  searchmenu();
  CloseMenu();
  CloseTable();
  echo "<br />\n";
  OpenTable();
  $admin_row = abget_admin($a_aid);
  echo "<form action='".$admin_file.".php' method='post'>\n";
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
  echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_ADMIN.":</strong></td><td><strong>$a_aid</strong></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_AUTHLOGIN.":</strong></td>";
  echo "<td><input type='text' name='xlogin' size='20' maxlength='25' value='".$admin_row['login']."'></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_PASSWORD.":</strong></td>";
  echo "<td><input type='text' name='xpassword' size='20' maxlength='20' value='".$admin_row['password']."'></td></tr>\n";
  echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_PROTECTED.":</strong></td>";
  $sel1=$sel2='';
  if($admin_row['protected']==0) { $sel1 = " selected='selected'"; } else { $sel2 = " selected='selected'"; }
  echo "<td><select name='xprotected'>\n";
  echo "<option value='0'$sel1>"._AB_NOTPROTECTED."</option>\n<option value='1'$sel2>"._AB_ISPROTECTED."</option>\n";
  echo "</select></td></tr>\n";
  echo "<tr><td align='center' colspan='2'><input type='hidden' name='op' value='ABAuthEditSave' />\n";
  echo "<input type='hidden' name='a_aid' value='$a_aid' />\n";
  echo "<input type=submit value='"._AB_SAVECHANGES."' /></td></tr>\n";
  echo "</table></form>\n";
  CloseTable();
  include(NUKE_BASE_DIR."footer.php");
} else {
  header("Location: ".$admin_file.".php?op=ABMain");
}

?>