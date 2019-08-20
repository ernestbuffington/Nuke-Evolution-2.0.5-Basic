<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_ADMINISTRATION;
include(NUKE_BASE_DIR."header.php");
$ip_sets = abget_configs();
OpenTable();
OpenMenu(_AB_ADMINISTRATION);
ipbanmenu();
CarryMenu();
blankmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
echo "<form action='".$admin_file.".php' method='post'>";
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>";
echo "<tr><td align='center' bgcolor='$bgcolor2' colspan='2'><strong>"._AB_GENERALSETTINGS."</strong></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_068)." "._AB_HELPSWITCH.":</td><td>\n";
$selhelp1 = $selhelp2 = "";
if($ip_sets['help_switch'] == 1) { $selhelp2 = "selected='selected'"; } else { $selhelp1 = "selected='selected'"; }
echo "<select name='xhelp_switch'>\n<option value='0' $selhelp1>"._AB_ONMOUSEOVER."</option>\n";
echo "<option value='1' $selhelp2>"._AB_ONMOUSECLICK."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_048)." "._AB_DISABLESWITCH.":</td><td>\n";
$seldable1 = $seldable2 = "";
if($ip_sets['disable_switch'] == 1) { $seldable2 = "selected='selected'"; } else { $seldable1 = "selected='selected'"; }
echo "<select name='xdisable_switch'>\n<option value='0' $seldable1>"._AB_ENABLED."</option>\n";
echo "<option value='1' $seldable2>"._AB_DISABLED."</option>\n";
echo "</select></td></tr>\n";
$seldns1=$seldns2='';
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_086)." "._AB_IPLOOKUPSITE.":</td><td>\n";
if(stristr($ip_sets['lookup_link'], "DNSstuff.com/")) { $seldns2 = "selected='selected'"; } else { $seldns1 = "selected='selected'"; }
echo "<select name='xlookup_link'>\n";
echo "<option value='http://ws.arin.net/cgi-bin/whois.pl?queryinput=' $seldns1>Arin Net</option>\n";
echo "<option value='http://www.DNSstuff.com/tools/whois.ch?ip=' $seldns2>DNS Stuff</option>\n";
echo "</select>\n</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_047)." "._AB_FORCENUKEURL.":</td><td><select name='xforce_nukeurl'>\n";
$selforce1=$selforce2='';
if($ip_sets['force_nukeurl']==0) { $selforce1 = " selected='selected'"; } else { $selforce2 = " selected='selected'"; }
echo "<option value='0'$selforce1>"._AB_NO."</option>\n<option value='1'$selforce2>"._AB_YES."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_118)." "._AB_PAGEDELAY.":</td><td><select name='xpage_delay'>\n";
$i=1;
while($i<=10) {
  echo "<option value='$i'";
  if($ip_sets['page_delay']==$i) { echo " selected='selected'"; }
  echo ">$i</option>\n";
  $i++;
}
echo "</select> "._AB_INSECONDS."</td></tr>\n";

echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_072)." "._AB_FLOODDELAY.":</td><td><select name='xflood_delay'>\n";
$i=1;
while($i<=5) {
  echo "<option value='$i'";
  if($ip_sets['flood_delay']==$i) { echo " selected='selected'"; }
  echo ">$i</option>\n";
  $i++;
}
echo "</select> "._AB_INSECONDS."<br />"._AB_FLOODNOTE."</td></tr>\n";

echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_001)." "._AB_DISPLAYLINK.":</td><td><select name='xdisplay_link'>\n";
$sel1 = $sel2 = $sel3 = $sel4 = "";
if($ip_sets['display_link']==1) { $sel2 = " selected='selected'"; } elseif($ip_sets['display_link']==2) { $sel3 = " selected='selected'"; } elseif($ip_sets['display_link']==3) { $sel4 = " selected='selected'"; } else { $sel1 = " selected='selected'"; }
echo "<option value='0'$sel1>"._AB_NONE."</option>\n<option value='1'$sel2>"._AB_ADMINS."</option>\n";
echo "<option value='2'$sel3>"._AB_USERS."</option>\n<option value='3'$sel4>"._AB_VISITORS."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_002)." "._AB_DISPLAYREASON.":</td><td><select name='xdisplay_reason'>\n";
$sel1 = $sel2 = $sel3 = $sel4 = "";
if($ip_sets['display_reason']==1) { $sel2 = " selected='selected'"; } elseif($ip_sets['display_reason']==2) { $sel3 = " selected='selected'"; } elseif($ip_sets['display_reason']==3) { $sel4 = " selected='selected'"; } else { $sel1 = " selected='selected'"; }
echo "<option value='0'$sel1>"._AB_NONE."</option>\n<option value='1'$sel2>"._AB_ADMINS."</option>\n";
echo "<option value='2'$sel3>"._AB_USERS."</option>\n<option value='3'$sel4>"._AB_VISITORS."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_003)." "._AB_SITESWITCH.":</td><td><select name='xsite_switch'>\n";
$sel1 = $sel2 = "";
if($ip_sets['site_switch']==1) { $sel2 = " selected='selected'"; } else { $sel1 = " selected='selected'"; }
echo "<option value='0'$sel1>"._AB_SITEENABLED."</option>\n<option value='1'$sel2>"._AB_SITEDISABLED."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_004)." "._AB_TEMPLATE.":</td><td><select name='xsite_reason'>\n";
$templatedir = dir(NUKE_INCLUDE_DIR.'nukesentinel/abuse/');
$templatelist = "";
while($func=$templatedir->read()) {
  if(substr($func, 0, 6) == "admin_") {
    $templatelist .= "$func ";
  }
}
closedir($templatedir->handle);
$templatelist = explode(" ", $templatelist);
sort($templatelist);
for($i=0; $i < sizeof($templatelist); $i++) {
  if($templatelist[$i]!="") {
    $bl = ereg_replace("admin_","",$templatelist[$i]);
    $bl = ereg_replace(".tpl","",$bl);
    $bl = ereg_replace("_"," ",$bl);
    echo "<option ";
    if($templatelist[$i]==$ip_sets['site_reason']) { echo "selected='selected' "; }
    echo "value='$templatelist[$i]'>".ucfirst($bl)."</option>\n";
  }
}
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_044)." "._AB_PROXYBLOCKER.":</td><td>\n";
$selproxy1=$selproxy2=$selproxy3=$selproxy4='';
if($ip_sets['proxy_switch'] == 1) { $selproxy2 = "selected='selected'"; } elseif($ip_sets['proxy_switch'] == 2) { $selproxy3 = "selected='selected'"; } elseif($ip_sets['proxy_switch'] == 3) { $selproxy4 = "selected='selected'"; } else { $selproxy1 = "selected='selected'"; }
echo "<select name='xproxy_switch'>\n";
echo "<option value='0' $selproxy1>"._AB_OFF."</option>\n<option value='1' $selproxy2>"._AB_PROXYLITE."</option>\n";
echo "<option value='2' $selproxy3>"._AB_PROXYMILD."</option>\n<option value='3' $selproxy4>"._AB_PROXYSTRONG."</option>\n";
echo "</select>\n</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_045)." "._AB_TEMPLATE.":</td><td><select name='xproxy_reason'>\n";
$templatedir = dir(NUKE_INCLUDE_DIR.'nukesentinel/abuse/');
$templatelist = "";
while($func=$templatedir->read()) {
  if(substr($func, 0, 6) == "abuse_") {
    $templatelist .= "$func ";
  }
}
closedir($templatedir->handle);
$templatelist = explode(" ", $templatelist);
sort($templatelist);
for($i=0; $i < sizeof($templatelist); $i++) {
  if($templatelist[$i]!="") {
    $bl = ereg_replace("abuse_","",$templatelist[$i]);
    $bl = ereg_replace(".tpl","",$bl);
    $bl = ereg_replace("_"," ",$bl);
    echo "<option ";
    if($templatelist[$i]==$ip_sets['proxy_reason']) { echo "selected='selected' "; }
    echo "value='$templatelist[$i]'>".ucfirst($bl)."</option>\n";
  }
}
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_042)." "._AB_SELFEXPIRE.":</td><td>\n";
$selexpire1=$selexpire2='';
if($ip_sets['self_expire'] == 1) { $selexpire2 = "selected='selected'"; } else { $selexpire1 = "selected='selected'"; }
echo "<select name='xself_expire'>\n<option value='0' $selexpire1>"._AB_OFF."</option>\n";
echo "<option value='1' $selexpire2>"._AB_ON."</option>\n</select>\n";
echo "</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_056)." "._AB_SANTYPROTECTION.":</td><td>\n";
$selsanty1=$selsanty2='';
if($ip_sets['santy_protection'] == 1) { $selsanty2 = "selected='selected'"; } else { $selsanty1 = "selected='selected'"; }
echo "<select name='xsanty_protection'>\n<option value='0' $selsanty1>"._AB_OFF."</option>\n";
echo "<option value='1' $selsanty2>"._AB_ON."</option>\n</select>\n";
echo "</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_046)." "._AB_PREVENTDOS.":</td><td>\n";
$seldos1=$seldos2='';
if($ip_sets['prevent_dos'] == 1) { $seldos2 = "selected='selected'"; } else { $seldos1 = "selected='selected'"; }
echo "<select name='xprevent_dos'>\n<option value='0' $seldos1>"._AB_OFF."</option>\n";
echo "<option value='1' $seldos2>"._AB_ON."</option>\n</select>\n";
echo "</td></tr>\n";
echo "<tr><td align='center' bgcolor='$bgcolor2' colspan='2'><strong>"._AB_ADMINISTRATIVE."</strong></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_007)." "._AB_ADMINAUTH.":</td><td>\n";
$apass = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_admins` WHERE `password_md5`='' OR `password`='' OR `password_crypt`=''"));
$sapi_name = strtolower(php_sapi_name());
$selauth1=$selauth2=$selauth3='';
if($ip_sets['http_auth'] == 1) { $selauth2 = "selected='selected'"; } else if($ip_sets['http_auth'] == 2) { $selauth3 = "selected='selected'"; } else { $selauth1 = "selected='selected'"; }
echo "<select name='xhttp_auth'>\n<option value='0' $selauth1>"._AB_OFF."</option>\n";
if(strpos($sapi_name,"cgi")===FALSE && ini_get("register_globals")) {
  echo "<option value='1' $selauth2>"._AB_HTTPAUTH."</option>\n";
}
echo "<option value='2' $selauth3>"._AB_CGIAUTH."</option>\n</select>\n";
if($apass > 0) { echo "<br /><strong>"._AB_SETPASSWORDS."</strong>"; }
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_005)." "._AB_HTACCESSPATH.":</td>\n<td>";
  echo "<input type='text' name='xhtaccess_path' size='50' value='".$ip_sets['htaccess_path']."' />";
  $rp = strtolower(str_replace ('index.php', '', realpath('index.php')));
  echo "<br />"._AB_NORMALLY.": ".$rp.".htaccess";
  if($ip_sets['htaccess_path']>"") {
    $httest = is_writable($ip_sets['htaccess_path']);
    if(!$httest) { echo "<br /><strong>"._AB_HTWARNING."</strong>"; }
    if(!stristr($_SERVER['SERVER_SOFTWARE'], "apache")) { echo "<br /><strong>"._AB_NOTSUPPORTED."</strong>\n"; }
  }
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_057)." "._AB_STACCESSPATH.":<br /><a href='".$admin_file.".php?op=ABCGIAuth' target='_blank'>"._AB_CGIAUTHSETUP."</a></td>\n<td>";
  echo "<input type='text' name='xstaccess_path' size='50' value='".$ip_sets['staccess_path']."' />";
  $rp = strtolower(str_replace ('index.php', '', realpath('index.php')));
  echo "<br />"._AB_NORMALLY.": ".$rp.".staccess";
  if($ip_sets['staccess_path']>"") {
    $httest = is_writable($ip_sets['staccess_path']);
    if(!$httest) { echo "<br /><strong>"._AB_STWARNING."</strong>"; }
    if(!stristr($_SERVER['SERVER_SOFTWARE'], "apache")) { echo "<br /><strong>"._AB_NOTSUPPORTED."</strong>"; }
  }
echo "</td>\n</tr>\n";

echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_119)." "._AB_FTACCESSPATH.":</td>\n<td>";
if(stristr($_SERVER['SERVER_SOFTWARE'], "Apache")) {
  echo "<input type='text' name='xftaccess_path' size='50' value='".$ip_sets['ftaccess_path']."' />";
  $rp = strtolower(str_replace ('index.php', '', realpath('index.php')));
  echo "<br />"._AB_NORMALLY.": ".$rp.".ftaccess";
  if($ip_sets['ftaccess_path']>"") {
    $fttest = is_writable($ip_sets['ftaccess_path']);
    if(!$fttest) {
      echo "<br /><strong>"._AB_FTWARNING."</strong>";
    }
  }
} else {
  echo "<strong>"._AB_NOTAVAILABLE."</strong><input type='hidden' name='xftaccess_path' value='' />\n";
}

echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_067)." "._AB_CRYPTSALT.":</td><td><input type='text' name='xcrypt_salt' size='3' maxlength='2' value='".$ip_sets['crypt_salt']."' /></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'>".help_img(_AB_HELP_006)." "._AB_ADMINLIST.":</td><td><textarea name='xadmin_contact' $textrowcol>".$ip_sets['admin_contact']."</textarea></td></tr>\n";
echo "<tr><td align='center' bgcolor='$bgcolor2' colspan='2'><strong>"._AB_IPTRACKERSETTINGS."</strong></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_050)." "._AB_IPTRACKER.":</td><td><select name='xtrack_active'>\n";
$sel1 = $sel2 = "";
if($ip_sets['track_active']==0) { $sel1 = " selected='selected'"; } else { $sel2 = " selected='selected'"; }
echo "<option value='0'$sel1>"._AB_OFF."</option>\n<option value='1'$sel2>"._AB_ON."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_051)." "._AB_MAXIMUMDAYS.":</td><td><select name='xtrack_max'>";
$selmax='';
if($ip_sets['track_max']==0) { $selmax = _AB_UNLIMITED; }
echo "<option value='0'$selmax>"._AB_UNLIMITED."</option>\n";
$i=1;
while($i<=31) {
  $j = $i * 86400;
  echo "<option value='$j'";
  if($ip_sets['track_max']==$j) { echo " selected='selected'"; }
  echo ">$i</option>\n";
  $i++;
}
echo "</select></td></tr>\n";
echo "<tr><td align='center' bgcolor='$bgcolor2' colspan='2'><strong>"._AB_BLOCKEDPAGE."</strong></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_008)." "._AB_IPSPERPAGE.":</td><td><input type='text' name='xblock_perpage' size='5' value='".$ip_sets['block_perpage']."' /></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_009)." "._AB_SORTCOLUMN.":</td><td><select name='xblock_sort_column'>\n";
$selcolumn1 = $selcolumn2 = $selcolumn3 = $selcolumn4 = $selcolumn5 = "";
if($ip_sets['block_sort_column'] == "ip_long") $selcolumn1 = "selected='selected'";
if($ip_sets['block_sort_column'] == "expires") $selcolumn2 = "selected='selected'";
if($ip_sets['block_sort_column'] == "date") $selcolumn3 = "selected='selected'";
if($ip_sets['block_sort_column'] == "reason") $selcolumn4 = "selected='selected'";
if($ip_sets['block_sort_column'] == "c2c") $selcolumn5 = "selected='selected'";
echo "<option value='ip_long'$selcolumn1>"._AB_IPBLOCKED."</option>\n";
echo "<option value='expires'$selcolumn2>"._AB_EXPIRES."</option>\n";
echo "<option value='date'$selcolumn3>"._AB_DATE."</option>\n";
echo "<option value='reason'$selcolumn4>"._AB_REASON."</option>\n";
echo "<option value='c2c'$selcolumn5>"._AB_C2CODE."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_010)." "._AB_SORTDIRECTION.":</td><td><select name='xblock_sort_direction'>\n";
$seldirection1 = $seldirection2 = "";
if($ip_sets['block_sort_direction'] == "asc") $seldirection1 = "selected='selected'";
if($ip_sets['block_sort_direction'] == "desc") $seldirection2 = "selected='selected'";
echo "<option value='asc'$seldirection1>"._AB_ASC."</option>\n";
echo "<option value='desc'$seldirection2>"._AB_DESC."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td align='center' bgcolor='$bgcolor2' colspan='2'><strong>"._AB_TRACKEDPAGE."</strong></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_053)." "._AB_IPSPERPAGE.":</td><td><input type='text' name='xtrack_perpage' size='5' value='".$ip_sets['track_perpage']."' /></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_054)." "._AB_SORTCOLUMN.":</td><td><select name='xtrack_sort_column'>\n";
$selcolumn1 = $selcolumn2 = $selcolumn3 = $selcolumn4 = $selcolumn5 = $selcolumn6 = "";
if($ip_sets['track_sort_column'] == "ip_long") $selcolumn1 = "selected='selected'";
if($ip_sets['track_sort_column'] == "date") $selcolumn3 = "selected='selected'";
if($ip_sets['track_sort_column'] == "username") $selcolumn4 = "selected='selected'";
if($ip_sets['track_sort_column'] == 5) $selcolumn5 = "selected='selected'";
if($ip_sets['track_sort_column'] == "c2c") $selcolumn6 = "selected='selected'";
echo "<option value='ip_long'$selcolumn1>"._AB_IPTRACKED."</option>\n";
echo "<option value='date'$selcolumn3>"._AB_DATE."</option>\n";
echo "<option value='username'$selcolumn4>"._AB_USERNAME."</option>\n";
echo "<option value=5 $selcolumn5>"._AB_HITS."</option>\n";
echo "<option value='c2c'$selcolumn6>"._AB_C2CODE."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'>".help_img(_AB_HELP_055)." "._AB_SORTDIRECTION.":</td><td><select name='xtrack_sort_direction'>\n";
$seldirection1 = $seldirection2 = "";
if($ip_sets['track_sort_direction'] == "asc") $seldirection1 = "selected='selected'";
if($ip_sets['track_sort_direction'] == "desc") $seldirection2 = "selected='selected'";
echo "<option value='asc'$seldirection1>"._AB_ASC."</option>\n";
echo "<option value='desc'$seldirection2>"._AB_DESC."</option>\n";
echo "</select></td></tr>\n";
echo "<tr><td align='center' colspan='2'><input type='hidden' name='op' value='ABMainSave' /><input type=submit value='"._AB_SAVECHANGES."' /></td></tr>\n";
echo "</table></form>\n";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>