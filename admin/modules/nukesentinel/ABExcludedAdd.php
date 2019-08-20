<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_ADDEXCLUDED;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_ADDEXCLUDED);
ipbanmenu();
CarryMenu();
excludedmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
echo "<form action='".$admin_file.".php' method='post'>\n";
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<tr bgcolor='$bgcolor1'><td align='center' class='content' colspan='2'>"._AB_ADDEXCLUDEDS."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_IPLO.":</strong></td>\n";
echo "<td><input type='text' name='xip_lo[0]' size='4' maxlength='3' align='right' />\n";
echo ". <input type='text' name='xip_lo[1]' size='4' value='0' maxlength='3' align='right' />\n";
echo ". <input type='text' name='xip_lo[2]' size='4' value='0' maxlength='3' align='right' />\n";
echo ". <input type='text' name='xip_lo[3]' size='4' value='0' maxlength='3' align='right' /></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_IPHI.":</strong></td>\n";
echo "<td><input type='text' name='xip_hi[0]' size='4' maxlength='3' align='right' />\n";
echo ". <input type='text' name='xip_hi[1]' size='4' value='255' maxlength='3' align='right' />\n";
echo ". <input type='text' name='xip_hi[2]' size='4' value='255' maxlength='3' align='right' />\n";
echo ". <input type='text' name='xip_hi[3]' size='4' value='255' maxlength='3' align='right' /></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._AB_NOTES.":</strong></td><td><textarea name='xnotes' $textrowcol>"._AB_ADDBY." $aid</textarea></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_COUNTRY.":</strong></td>\n";
echo "<td><select name='xc2c'>\n";
$result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_countries` ORDER BY `c2c`");
while($countryrow = $db->sql_fetchrow($result)) {
  echo "<option value='".$countryrow['c2c']."'>".strtoupper($countryrow['c2c'])." - ".$countryrow['country']."</option>\n";
}
echo "</select></td></tr>\n";
echo "<tr><td colspan='2' align='center'><input type='checkbox' name='another' value='1' checked='checked' />"._AB_ADDANOTHERRANGE."</td></tr>\n";
echo "<tr><td colspan='2' align='center'><input type='hidden' name='op' value='ABExcludedAddSave' /><input type=submit value='"._AB_ADDEXCLUDED."' /></td></tr>\n";
echo "</table>\n";
echo "</form>";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>