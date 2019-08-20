<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_EDITEXCLUDED;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_EDITEXCLUDED);
ipbanmenu();
CarryMenu();
excludedmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
$getIPs = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnst_excluded_ranges` WHERE `ip_lo`='$ip_lo' AND `ip_hi`='$ip_hi'"));
//$getIPs['ip_lo_ip'] = long2ip($getIPs['ip_lo']);
//$getIPs['ip_hi_ip'] = long2ip($getIPs['ip_hi']);
$ip_lo = explode(".", long2ip($getIPs['ip_lo']));
$ip_hi = explode(".", long2ip($getIPs['ip_hi']));
echo "<form action='".$admin_file.".php' method='post'>\n";
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<tr><td align='center' colspan='2'>"._AB_EDITEXCLUDEDS."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_IPLO.":</strong></td>\n";
echo "<td><input type='text' name='xip_lo[0]' size='4' maxlength='3' value='$ip_lo[0]' align='right' />\n";
echo ". <input type='text' name='xip_lo[1]' size='4' maxlength='3' value='$ip_lo[1]' align='right' />\n";
echo ". <input type='text' name='xip_lo[2]' size='4' maxlength='3' value='$ip_lo[2]' align='right' />\n";
echo ". <input type='text' name='xip_lo[3]' size='4' maxlength='3' value='$ip_lo[3]' align='right' /></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_IPHI.":</strong></td>\n";
echo "<td><input type='text' name='xip_hi[0]' size='4' maxlength='3' value='$ip_hi[0]' align='right' />\n";
echo ". <input type='text' name='xip_hi[1]' size='4' maxlength='3' value='$ip_hi[1]' align='right' />\n";
echo ". <input type='text' name='xip_hi[2]' size='4' maxlength='3' value='$ip_hi[2]' align='right' />\n";
echo ". <input type='text' name='xip_hi[3]' size='4' maxlength='3' value='$ip_hi[3]' align='right' /></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._AB_NOTES.":</strong></td><td><textarea name='xnotes' $textrowcol>".$getIPs['notes']."</textarea></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_COUNTRY.":</strong></td>\n";
echo "<td><select name='xc2c'>\n";
$result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_countries` ORDER BY `c2c`");
while($countryrow = $db->sql_fetchrow($result)) {
  echo "<option value='".$countryrow['c2c']."'";
  if($countryrow['c2c'] == $getIPs['c2c']) { echo " selected"; }
  echo ">".strtoupper($countryrow['c2c'])." - ".$countryrow['country']."</option>\n";
}
echo "</select></td></tr>\n";
echo "<tr><td align='center' colspan='2'>\n";
echo "<input type='hidden' name='op' value='ABExcludedEditSave' />\n";
echo "<input type='hidden' name='xop' value='$xop' />\n";
echo "<input type='hidden' name='sip' value='$sip' />\n";
echo "<input type='hidden' name='old_ip_lo' value='".$getIPs['ip_lo']."' />\n";
echo "<input type='hidden' name='old_ip_hi' value='".$getIPs['ip_hi']."' />\n";
echo "<input type='hidden' name='min' value='$min' />\n";
echo "<input type='hidden' name='column' value='$column' />\n";
echo "<input type='hidden' name='direction' value='$direction' /><input type=submit value='"._AB_SAVECHANGES."' /></td></tr>\n";
echo "</table></form>\n";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>