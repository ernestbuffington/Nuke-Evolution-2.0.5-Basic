<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_SEARCHRANGES;
include(NUKE_BASE_DIR."header.php");
$sip = str_replace("X", "%", $sip);
OpenTable();
OpenMenu(_AB_SEARCHRANGES);
ipbanmenu();
CarryMenu();
searchmenu();
CloseMenu();
CloseTable();
if(isset($sip_lo[0]) && isset($sip_lo[1]) && isset($sip_lo[2]) && isset($sip_lo[3])) {
  if(($sip_lo[0] < 0 OR $sip_lo[0] > 255 OR !is_numeric($sip_lo[0])) OR ($sip_lo[1] < 0 OR $sip_lo[1] > 255 OR !is_numeric($sip_lo[1])) OR ($sip_lo[2] < 0 OR $sip_lo[2] > 255 OR !is_numeric($sip_lo[2])) OR ($sip_lo[3] < 0 OR $sip_lo[3] > 255 OR !is_numeric($sip_lo[3]))) {
    echo "<br />\n";
    OpenTable();
    echo "<br /><center><strong>"._AB_LOERROR." </strong></center>\n";
    echo "<br /><center><strong>"._GOBACK."</strong></center><br />\n";
    CloseTable();
    include(NUKE_BASE_DIR."footer.php");
    die();
  }
}
if(isset($sip_hi[0]) && isset($sip_hi[1]) && isset($sip_hi[2]) && isset($sip_hi[3])) {
  if(($sip_hi[0] < 0 OR $sip_hi[0] > 255 OR !is_numeric($sip_hi[0])) OR ($sip_hi[1] < 0 OR $sip_hi[1] > 255 OR !is_numeric($sip_hi[1])) OR ($sip_hi[2] < 0 OR $sip_hi[2] > 255 OR !is_numeric($sip_hi[2])) OR ($sip_hi[3] < 0 OR $sip_hi[3] > 255 OR !is_numeric($sip_hi[3]))) {
    echo "<br />\n";
    OpenTable();
    echo "<br /><center><strong>"._AB_HIERROR." </strong></center>\n";
    echo "<br /><center><strong>"._GOBACK."</strong></center><br />\n";
    CloseTable();
    include(NUKE_BASE_DIR."footer.php");
    die();
  }
}
echo "<br />\n";
if(!isset($sip_lo[0])) { $sip_lo[0] = 0; }
if(!isset($sip_lo[1])) { $sip_lo[1] = 0; }
if(!isset($sip_lo[2])) { $sip_lo[2] = 0; }
if(!isset($sip_lo[3])) { $sip_lo[3] = 0; }
if(!isset($sip_hi[0])) { $sip_hi[0] = 255; }
if(!isset($sip_hi[1])) { $sip_hi[1] = 255; }
if(!isset($sip_hi[2])) { $sip_hi[2] = 255; }
if(!isset($sip_hi[3])) { $sip_hi[3] = 255; }
OpenTable();
echo "<form action='".$admin_file.".php?op=ABSearchRangeResults' method='post'>\n";
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<tr><td align='center' colspan='2'><strong>"._AB_SEARCHIN.":</strong></td></tr>\n";
echo "<tr><td align='right'><strong>"._AB_IPLO.":</strong></td>\n";
echo "<td><input type='text' name='sip_lo[0]' size='4' value='$sip_lo[0]' maxlength='3' align='right' />\n";
echo ". <input type='text' name='sip_lo[1]' size='4' value='$sip_lo[1]' maxlength='3' align='right' />\n";
echo ". <input type='text' name='sip_lo[2]' size='4' value='$sip_lo[2]' maxlength='3' align='right' />\n";
echo ". <input type='text' name='sip_lo[3]' size='4' value='$sip_lo[3]' maxlength='3' align='right' /></td></tr>";
echo "\n";
echo "<tr><td align='right'><strong>"._AB_IPHI.":</strong></td>\n";
echo "<td><input type='text' name='sip_hi[0]' size='4' value='$sip_hi[0]' maxlength='3' align='right' />\n";
echo ". <input type='text' name='sip_hi[1]' size='4' value='$sip_hi[1]' maxlength='3' align='right' />\n";
echo ". <input type='text' name='sip_hi[2]' size='4' value='$sip_hi[2]' maxlength='3' align='right' />\n";
echo ". <input type='text' name='sip_hi[3]' size='4' value='$sip_hi[3]' maxlength='3' align='right' /></td></tr>";
echo "\n";
echo "<tr><td align='center' colspan='2'><input type='submit' value='"._AB_GO."' /></td></tr>\n";
echo "</table>\n";
echo "</form>\n";
CloseTable();
$sip_lo = implode(".", $sip_lo);
$longip_lo = sprintf("%u", ip2long($sip_lo)); // 0
$sip_hi = implode(".", $sip_hi);
$longip_hi = sprintf("%u", ip2long($sip_hi)); // 4294967295
//BLOCKED RANGES SEARCH RESULTS
if($longip_lo > 0 || $longip_hi < 4294967295) {
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_blocked_ranges` WHERE `ip_lo`>='$longip_lo' AND `ip_hi`<='$longip_hi'"));
if($totalselected > 0) {
  echo "<br />\n";
  OpenTable();
  echo "<center class='title'><strong>"._AB_SEARCHBLOCKEDRANGES."</strong></center><br />\n";
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
  echo "<tr bgcolor='$bgcolor2'>\n";
  echo "<td width='15%'><strong>"._AB_IPLO."</strong></td>\n";
  echo "<td width='15%'><strong>"._AB_IPHI."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_FLAG."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_CODE."</strong></td>\n";
  echo "<td align='center' width='25%'><strong>"._AB_COUNTRY."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_CIDRS."</strong></td>\n";
  echo "<td align='center' width='15%'><strong>"._AB_FUNCTIONS."</strong></td>\n";
  echo "</tr>\n";
  $x = 0;
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_blocked_ranges` WHERE `ip_lo`>='$longip_lo' AND `ip_hi`<='$longip_hi'");
  while($getIPs = $db->sql_fetchrow($result)) {
    $getIPs['ip_lo_ip'] = long2ip($getIPs['ip_lo']);
    $getIPs['ip_hi_ip'] = long2ip($getIPs['ip_hi']);
    $masscidr = ABGetCIDRs($getIPs['ip_lo'], $getIPs['ip_hi']);
    $masscidr = str_replace("||", ",<br />", $masscidr);
    if(stristr($masscidr, "<br />")) { $valign = " valign='top'"; } else { $valign = ""; }
    $getIPs['c2c'] = strtoupper($getIPs['c2c']);
    $countrytitleinfo = abget_countrytitle($getIPs['c2c']);
    $getIPs['country'] = $countrytitleinfo['country'];
    $getIPs['flag_img'] = flag_img($getIPs['c2c']);
    echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_lo_ip']."' target='".$getIPs['ip_lo_ip']."'>".$getIPs['ip_lo_ip']."</a></td>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_hi_ip']."' target='".$getIPs['ip_hi_ip']."'>".$getIPs['ip_hi_ip']."</a></td>\n";
    echo "<td align='center'$valign>".$getIPs['flag_img']."</td>\n";
    echo "<td align='center'$valign>".$getIPs['c2c']."</td>\n";
    echo "<td align='center'$valign>".$getIPs['country']."</td>\n";
    echo "<td align='center'$valign>$masscidr</td>\n";
    echo "<td align='center'$valign>&nbsp;<a href='".$admin_file.".php?op=ABBlockedRangeEdit&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;sip=$tempsip&amp;xop=$op'><img src='images/nukesentinel/edit.png' border='0' alt='"._AB_EDIT."' title='"._AB_EDIT."' height='16' width='16' /></a>&nbsp;<a ";
    echo "href='".$admin_file.".php?op=ABBlockedRangeDelete&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;sip=$tempsip&amp;xop=$op'><img src='images/nukesentinel/delete.png' border='0' alt='"._AB_DELETE."' title='"._AB_DELETE."' height='16' width='16' /></a>&nbsp;</td>\n";
    echo "</tr>\n";
    $x++;
  }
  echo "</table>\n";
  CloseTable();
}

//EXCLUDED RANGES SEARCH RESULTS
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_excluded_ranges` WHERE `ip_lo`>='$longip_lo' AND `ip_hi`<='$longip_hi'"));
if($totalselected > 0) {
  echo "<br />\n";
  OpenTable();
  echo "<center class='title'><strong>"._AB_SEARCHEXCLUDEDRANGES."</strong></center><br />\n";
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
  echo "<tr bgcolor='$bgcolor2'>\n";
  echo "<td width='15%'><strong>"._AB_IPLO."</strong></td>\n";
  echo "<td width='15%'><strong>"._AB_IPHI."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_FLAG."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_CODE."</strong></td>\n";
  echo "<td align='center' width='25%'><strong>"._AB_COUNTRY."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_CIDRS."</strong></td>\n";
  echo "<td align='center' width='15%'><strong>"._AB_FUNCTIONS."</strong></td>\n";
  echo "</tr>\n";
  $x = 0;
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_excluded_ranges` WHERE `ip_lo`>='$longip_lo' AND `ip_hi`<='$longip_hi'");
  while($getIPs = $db->sql_fetchrow($result)) {
    $getIPs['ip_lo_ip'] = long2ip($getIPs['ip_lo']);
    $getIPs['ip_hi_ip'] = long2ip($getIPs['ip_hi']);
    $masscidr = ABGetCIDRs($getIPs['ip_lo'], $getIPs['ip_hi']);
    $masscidr = str_replace("||", ",<br />", $masscidr);
    if(stristr($masscidr, "<br />")) { $valign = " valign='top'"; } else { $valign = ""; }
    $getIPs['c2c'] = strtoupper($getIPs['c2c']);
    $countrytitleinfo = abget_countrytitle($getIPs['c2c']);
    $getIPs['country'] = $countrytitleinfo['country'];
    $getIPs['flag_img'] = flag_img($getIPs['c2c']);
    echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_lo_ip']."' target='".$getIPs['ip_lo_ip']."'>".$getIPs['ip_lo_ip']."</a></td>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_hi_ip']."' target='".$getIPs['ip_hi_ip']."'>".$getIPs['ip_hi_ip']."</a></td>\n";
    echo "<td align='center'$valign>".$getIPs['flag_img']."</td>\n";
    echo "<td align='center'$valign>".$getIPs['c2c']."</td>\n";
    echo "<td align='center'$valign>".$getIPs['country']."</td>\n";
    echo "<td align='center'$valign>$masscidr</td>\n";
    echo "<td align='center'$valign>&nbsp;<a href='".$admin_file.".php?op=ABExcludedEdit&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;sip=$tempsip&amp;xop=$op'><img src='images/nukesentinel/edit.png' border='0' alt='"._AB_EDIT."' title='"._AB_EDIT."' height='16' width='16' /></a>&nbsp;<a ";
    echo "href='".$admin_file.".php?op=ABExcludedDelete&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;sip=$tempsip&amp;xop=$op'><img src='images/nukesentinel/delete.png' border='0' alt='"._AB_DELETE."' title='"._AB_DELETE."' height='16' width='16' /></a>&nbsp;</td>\n";
    echo "</tr>\n";
    $x++;
  }
  echo "</table>\n";
  CloseTable();
}

//PROTECTED RANGES SEARCH RESULTS
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_protected_ranges` WHERE `ip_lo`>='$longip_lo' AND `ip_hi`<='$longip_hi'"));
if($totalselected > 0) {
  echo "<br />\n";
  OpenTable();
  echo "<center class='title'><strong>"._AB_SEARCHPROTECTEDRANGES."</strong></center><br />\n";
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
  echo "<tr bgcolor='$bgcolor2'>\n";
  echo "<td width='15%'><strong>"._AB_IPLO."</strong></td>\n";
  echo "<td width='15%'><strong>"._AB_IPHI."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_FLAG."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_CODE."</strong></td>\n";
  echo "<td align='center' width='25%'><strong>"._AB_COUNTRY."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_CIDRS."</strong></td>\n";
  echo "<td align='center' width='15%'><strong>"._AB_FUNCTIONS."</strong></td>\n";
  echo "</tr>\n";
  $x = 0;
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_protected_ranges` WHERE `ip_lo`>='$longip_lo' AND `ip_hi`<='$longip_hi'");
  while($getIPs = $db->sql_fetchrow($result)) {
    $getIPs['ip_lo_ip'] = long2ip($getIPs['ip_lo']);
    $getIPs['ip_hi_ip'] = long2ip($getIPs['ip_hi']);
    $masscidr = ABGetCIDRs($getIPs['ip_lo'], $getIPs['ip_hi']);
    $masscidr = str_replace("||", ",<br />", $masscidr);
    if(stristr($masscidr, "<br />")) { $valign = " valign='top'"; } else { $valign = ""; }
    $getIPs['c2c'] = strtoupper($getIPs['c2c']);
    $countrytitleinfo = abget_countrytitle($getIPs['c2c']);
    $getIPs['country'] = $countrytitleinfo['country'];
    $getIPs['flag_img'] = flag_img($getIPs['c2c']);
    echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_lo_ip']."' target='".$getIPs['ip_lo_ip']."'>".$getIPs['ip_lo_ip']."</a></td>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_hi_ip']."' target='".$getIPs['ip_hi_ip']."'>".$getIPs['ip_hi_ip']."</a></td>\n";
    echo "<td align='center'$valign>".$getIPs['flag_img']."</td>\n";
    echo "<td align='center'$valign>".$getIPs['c2c']."</td>\n";
    echo "<td align='center'$valign>".$getIPs['country']."</td>\n";
    echo "<td align='center'$valign>$masscidr</td>\n";
    echo "<td align='center'$valign>&nbsp;<a href='".$admin_file.".php?op=ABProtectedEdit&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;sip=$tempsip&amp;xop=$op'><img src='images/nukesentinel/edit.png' border='0' alt='"._AB_EDIT."' title='"._AB_EDIT."' height='16' width='16' /></a>&nbsp;<a ";
    echo "href='".$admin_file.".php?op=ABProtectedDelete&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;sip=$tempsip&amp;xop=$op'><img src='images/nukesentinel/delete.png' border='0' alt='"._AB_DELETE."' title='"._AB_DELETE."' height='16' width='16' /></a>&nbsp;</td>\n";
    echo "</tr>\n";
    $x++;
  }
  echo "</table>\n";
  CloseTable();
}

//IP 2 COUNTRY SEARCH
$totalselected = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_ip2country` WHERE `ip_lo`>='$longip_lo' AND `ip_hi`<='$longip_hi'"));
if($totalselected > 0) {
  echo "<br />\n";
  OpenTable();
  echo "<center class='title'><strong>"._AB_IP2CSEARCH."</strong></center><br />\n";
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
  echo "<tr bgcolor='$bgcolor2'>\n";
  echo "<td width='15%'><strong>"._AB_IPLO."</strong></td>\n";
  echo "<td width='15%'><strong>"._AB_IPHI."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_FLAG."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_CODE."</strong></td>\n";
  echo "<td align='center' width='25%'><strong>"._AB_COUNTRY."</strong></td>\n";
  echo "<td align='center' width='10%'><strong>"._AB_CIDRS."</strong></td>\n";
  echo "<td align='center' width='15%'><strong>"._AB_FUNCTIONS."</strong></td>\n";
  echo "</tr>\n";
  $x = 0;
  $result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_ip2country` WHERE `ip_lo`>='$longip_lo' AND `ip_hi`<='$longip_hi'");
  while($getIPs = $db->sql_fetchrow($result)) {
    $getIPs['ip_lo_ip'] = long2ip($getIPs['ip_lo']);
    $getIPs['ip_hi_ip'] = long2ip($getIPs['ip_hi']);
    $masscidr = ABGetCIDRs($getIPs['ip_lo'], $getIPs['ip_hi']);
    $masscidr = str_replace("||", ",<br />", $masscidr);
    if(stristr($masscidr, "<br />")) { $valign = " valign='top'"; } else { $valign = ""; }
    $getIPs['c2c'] = strtoupper($getIPs['c2c']);
    $getIPs['flag_img'] = flag_img($getIPs['c2c']);
    echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_lo_ip']."' target='".$getIPs['ip_lo_ip']."'>".$getIPs['ip_lo_ip']."</a></td>\n";
    echo "<td$valign><a href='".$ab_config['lookup_link'].$getIPs['ip_hi_ip']."' target='".$getIPs['ip_hi_ip']."'>".$getIPs['ip_hi_ip']."</a></td>\n";
    echo "<td align='center'$valign>".$getIPs['flag_img']."</td>\n";
    echo "<td align='center'$valign>".$getIPs['c2c']."</td>\n";
    echo "<td align='center'$valign>".$getIPs['country']."</td>\n";
    echo "<td align='center'$valign>$masscidr</td>\n";
    echo "<td align='center'$valign>&nbsp;<a href='".$admin_file.".php?op=ABIP2CountryEdit&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;sip=$tempsip&amp;xop=$op'><img src='images/nukesentinel/edit.png' border='0' alt='"._AB_EDIT."' title='"._AB_EDIT."' height='16' width='16' /></a>&nbsp;<a ";
    echo "href='".$admin_file.".php?op=ABIP2CountryDelete&amp;ip_lo=".$getIPs['ip_lo']."&amp;ip_hi=".$getIPs['ip_hi']."&amp;min=$min&amp;column=$column&amp;direction=$direction&amp;sip=$tempsip&amp;xop=$op'><img src='images/nukesentinel/delete.png' border='0' alt='"._AB_DELETE."' title='"._AB_DELETE."' height='16' width='16' /></a>&nbsp;</td>\n";
    echo "</tr>\n";
    $x++;
  }
  echo "</table>\n";
  CloseTable();
}
}
include(NUKE_BASE_DIR."footer.php");

?>