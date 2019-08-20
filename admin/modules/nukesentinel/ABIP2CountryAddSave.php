<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$datetime = time();
if(($xip_lo[0] < 0 OR $xip_lo[0] > 255 OR !is_numeric($xip_lo[0])) OR ($xip_lo[1] < 0 OR $xip_lo[1] > 255 OR !is_numeric($xip_lo[1])) OR ($xip_lo[2] < 0 OR $xip_lo[2] > 255 OR !is_numeric($xip_lo[2])) OR ($xip_lo[3] < 0 OR $xip_lo[3] > 255 OR !is_numeric($xip_lo[3]))) {
  $pagetitle = _AB_NUKESENTINEL.": "._AB_ADDRANGEERROR;
  include(NUKE_BASE_DIR."header.php");
  title($pagetitle);
  OpenTable();
  echo "<br /><center><strong>"._AB_LOERROR." </strong></center>\n";
  echo "<br /><center><strong>"._GOBACK."</strong></center><br />\n";
  CloseTable();
  include(NUKE_BASE_DIR."footer.php");
  die();
}
$xip_lo = implode(".", $xip_lo);
$longip_lo = sprintf("%u", ip2long($xip_lo));
if(($xip_hi[0] < 0 OR $xip_hi[0] > 255 OR !is_numeric($xip_hi[0])) OR ($xip_hi[1] < 0 OR $xip_hi[1] > 255 OR !is_numeric($xip_hi[1])) OR ($xip_hi[2] < 0 OR $xip_hi[2] > 255 OR !is_numeric($xip_hi[2])) OR ($xip_hi[3] < 0 OR $xip_hi[3] > 255 OR !is_numeric($xip_hi[3]))) {
  $pagetitle = _AB_NUKESENTINEL.": "._AB_ADDRANGEERROR;
  include(NUKE_BASE_DIR."header.php");
  title($pagetitle);
  OpenTable();
  echo "<br /><center><strong>"._AB_HIERROR." </strong></center>\n";
  echo "<br /><center><strong>"._GOBACK."</strong></center><br />\n";
  CloseTable();
  include(NUKE_BASE_DIR."footer.php");
  die();
}
$xip_hi = implode(".", $xip_hi);
$longip_hi = sprintf("%u", ip2long($xip_hi));
list($xcountry) = $db->sql_fetchrow($db->sql_query("SELECT `country` FROM `".$prefix."_nsnst_countries` WHERE `c2c`='$xc2c'"));
$test1 = $db->sql_query("SELECT * FROM ".$prefix."_nsnst_ip2country WHERE ip_lo<='$longip_lo' AND ip_hi>='$longip_lo' ORDER BY `ip_lo`");
$test2 = $db->sql_query("SELECT * FROM ".$prefix."_nsnst_ip2country WHERE ip_lo<='$longip_hi' AND ip_hi>='$longip_hi' ORDER BY `ip_lo`");
$test3 = $db->sql_query("SELECT * FROM ".$prefix."_nsnst_ip2country WHERE ip_lo>='$longip_lo' AND ip_hi<='$longip_hi' ORDER BY `ip_lo`");
$test4 = $db->sql_query("SELECT * FROM ".$prefix."_nsnst_ip2country WHERE ip_lo<='$longip_lo' AND ip_hi>='$longip_hi' ORDER BY `ip_lo`");
$testnum1 = $db->sql_numrows($test1);
$testnum2 = $db->sql_numrows($test2);
$testnum3 = $db->sql_numrows($test3);
$testnum4 = $db->sql_numrows($test4);
if($testnum1 > 0 OR $testnum2 >0 OR $testnum3 >0 OR $testnum4 >0) {
  $pagetitle = _AB_NUKESENTINEL.": "._AB_ADDIP2COUNTRYERROR;
  include(NUKE_BASE_DIR."header.php");
  OpenTable();
  OpenMenu(_AB_ADDIP2COUNTRYERROR);
  ipbanmenu();
  CarryMenu();
  ip2cmenu();
  CloseMenu();
  CloseTable();
  echo "<br />\n";
  OpenTable();
  if($testnum1 > 0) {
    echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
    echo "<tr bgcolor='$bgcolor1'><td align='center' colspan='6'><strong>$xip_lo "._AB_IN.":</strong></td></tr>\n";
    echo "<tr bgcolor='$bgcolor2'>\n";
    echo "<td width='15%'><strong>"._AB_IPLO."</strong></td>\n";
    echo "<td width='15%'><strong>"._AB_IPHI."</strong></td>\n";
    echo "<td align='center' width='10%'><strong>"._AB_FLAG."</strong></td>\n";
    echo "<td align='center' width='10%'><strong>"._AB_CODE."</strong></td>\n";
    echo "<td align='center' width='35%'><strong>"._AB_COUNTRY."</strong></td>\n";
    echo "<td align='center' width='15%'><strong>"._AB_FUNCTIONS."</strong></td>\n";
    echo "</tr>\n";
    while($testrow1 = $db->sql_fetchrow($test1)) {
      $testrow1['ip_lo_ip'] = long2ip($testrow1['ip_lo']);
      $testrow1['ip_hi_ip'] = long2ip($testrow1['ip_hi']);
      $trow1 = abget_countrytitle($testrow1['c2c']);
      $testrow1['country'] = $trow1['country'];
      $testrow1['c2c'] = strtoupper($testrow1['c2c']);
      $testrow1['flag_img'] = flag_img($testrow1['c2c']);
      echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
      echo "<td><a href=\"".$ab_config['lookup_link'].$testrow1['ip_lo_ip']."\" target=\"_blank\">".$testrow1['ip_lo_ip']."</a></td>\n";
      echo "<td><a href=\"".$ab_config['lookup_link'].$testrow1['ip_hi_ip']."\" target=\"_blank\">".$testrow1['ip_hi_ip']."</a></td>\n";
      echo "<td align='center'>".$testrow1['flag_img']."</td>\n";
      echo "<td align='center'>".$testrow1['c2c']."</td>\n";
      echo "<td align='center'>".$testrow1['country']."</td>\n";
      echo "<td align='center'>&nbsp;<a href='".$admin_file.".php?op=ABIP2CountryEdit&amp;ip_lo=".$testrow1['ip_lo']."&amp;ip_hi=".$testrow1['ip_hi']."&amp;xop=ABMain' target='_blank'><img src='images/nukesentinel/edit.png' border='0' alt='"._AB_EDIT."' title='"._AB_EDIT."' height='16' width='16' /></a>&nbsp;<a ";
      echo "href='".$admin_file.".php?op=ABIP2CountryDelete&amp;ip_lo=".$testrow1['ip_lo']."&amp;ip_hi=".$testrow1['ip_hi']."&amp;xop=ABMain' target='_blank'><img src='images/nukesentinel/delete.png' border='0' alt='"._AB_DELETE."' title='"._AB_DELETE."' height='16' width='16' /></a>&nbsp;</td>\n";
      echo "</tr>\n";
    }
    echo "</table>\n";
    echo "<br />\n";
  }
  if($testnum2 > 0) {
    echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
    echo "<tr bgcolor='$bgcolor1'><td align='center' colspan='6'><strong>$xip_hi "._AB_IN.":</strong></td></tr>\n";
    echo "<tr bgcolor='$bgcolor2'>\n";
    echo "<td width='15%'><strong>"._AB_IPLO."</strong></td>\n";
    echo "<td width='15%'><strong>"._AB_IPHI."</strong></td>\n";
    echo "<td align='center' width='10%'><strong>"._AB_FLAG."</strong></td>\n";
    echo "<td align='center' width='10%'><strong>"._AB_CODE."</strong></td>\n";
    echo "<td align='center' width='35%'><strong>"._AB_COUNTRY."</strong></td>\n";
    echo "<td align='center' width='15%'><strong>"._AB_FUNCTIONS."</strong></td>\n";
    echo "</tr>\n";
    while($testrow2 = $db->sql_fetchrow($test2)) {
      $testrow2['ip_lo_ip'] = long2ip($testrow2['ip_lo']);
      $testrow2['ip_hi_ip'] = long2ip($testrow2['ip_hi']);
      $trow2 = abget_countrytitle($testrow2['c2c']);
      $testrow2['country'] = $trow2['country'];
      $testrow2['c2c'] = strtoupper($testrow2['c2c']);
      $testrow2['flag_img'] = flag_img($testrow2['c2c']);
      echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
      echo "<td><a href=\"".$ab_config['lookup_link'].$testrow2['ip_lo_ip']."\" target=\"_blank\">".$testrow2['ip_lo_ip']."</a></td>\n";
      echo "<td><a href=\"".$ab_config['lookup_link'].$testrow2['ip_hi_ip']."\" target=\"_blank\">".$testrow2['ip_hi_ip']."</a></td>\n";
      echo "<td align='center'>".$testrow2['flag_img']."</td>\n";
      echo "<td align='center'>".$testrow2['c2c']."</td>\n";
      echo "<td align='center'>".$testrow2['country']."</td>\n";
      echo "<td align='center'>&nbsp;<a href='".$admin_file.".php?op=ABIP2CountryEdit&amp;ip_lo=".$testrow2['ip_lo']."&amp;ip_hi=".$testrow2['ip_hi']."&amp;xop=ABMain' target='_blank'><img src='images/nukesentinel/edit.png' border='0' alt='"._AB_EDIT."' title='"._AB_EDIT."' height='16' width='16' /></a>&nbsp;<a ";
      echo "href='".$admin_file.".php?op=ABIP2CountryDelete&amp;ip_lo=".$testrow2['ip_lo']."&amp;ip_hi=".$testrow2['ip_hi']."&amp;xop=ABMain' target='_blank'><img src='images/nukesentinel/delete.png' border='0' alt='"._AB_DELETE."' title='"._AB_DELETE."' height='16' width='16' /></a>&nbsp;</td>\n";
      echo "</tr>\n";
    }
    echo "</table>\n";
    echo "<br />\n";
  }
  if($testnum3 > 0) {
    echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
    echo "<tr bgcolor='$bgcolor1'><td align='center' colspan='6'><strong>$xip_lo - $xip_hi "._AB_COVERS.":</strong></td></tr>\n";
    echo "<tr bgcolor='$bgcolor2'>\n";
    echo "<td width='15%'><strong>"._AB_IPLO."</strong></td>\n";
    echo "<td width='15%'><strong>"._AB_IPHI."</strong></td>\n";
    echo "<td align='center' width='10%'><strong>"._AB_FLAG."</strong></td>\n";
    echo "<td align='center' width='10%'><strong>"._AB_CODE."</strong></td>\n";
    echo "<td align='center' width='35%'><strong>"._AB_COUNTRY."</strong></td>\n";
    echo "<td align='center' width='15%'><strong>"._AB_FUNCTIONS."</strong></td>\n";
    echo "</tr>\n";
    while($testrow3 = $db->sql_fetchrow($test3)) {
      $testrow3['ip_lo_ip'] = long2ip($testrow3['ip_lo']);
      $testrow3['ip_hi_ip'] = long2ip($testrow3['ip_hi']);
      $trow3 = abget_countrytitle($testrow3['c2c']);
      $testrow3['country'] = $trow3['country'];
      $testrow3['c2c'] = strtoupper($testrow3['c2c']);
      $testrow3['flag_img'] = flag_img($testrow3['c2c']);
      echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
      echo "<td><a href=\"".$ab_config['lookup_link'].$testrow3['ip_lo_ip']."\" target=\"_blank\">".$testrow3['ip_lo_ip']."</a></td>\n";
      echo "<td><a href=\"".$ab_config['lookup_link'].$testrow3['ip_hi_ip']."\" target=\"_blank\">".$testrow3['ip_hi_ip']."</a></td>\n";
      echo "<td align='center'>".$testrow3['flag_img']."</td>\n";
      echo "<td align='center'>".$testrow3['c2c']."</td>\n";
      echo "<td align='center'>".$testrow3['country']."</td>\n";
      echo "<td align='center'>&nbsp;<a href='".$admin_file.".php?op=ABIP2CountryEdit&amp;ip_lo=".$testrow3['ip_lo']."&amp;ip_hi=".$testrow3['ip_hi']."&amp;xop=ABMain' target='_blank'><img src='images/nukesentinel/edit.png' border='0' alt='"._AB_EDIT."' title='"._AB_EDIT."' height='16' width='16' /></a>&nbsp;<a ";
      echo "href='".$admin_file.".php?op=ABIP2CountryDelete&amp;ip_lo=".$testrow3['ip_lo']."&amp;ip_hi=".$testrow3['ip_hi']."&amp;xop=ABMain' target='_blank'><img src='images/nukesentinel/delete.png' border='0' alt='"._AB_DELETE."' title='"._AB_DELETE."' height='16' width='16' /></a>&nbsp;</td>\n";
      echo "</tr>\n";
    }
    echo "</table>\n";
    echo "<br />\n";
  }
  if($testnum4 > 0) {
    echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2' width='100%'>\n";
    echo "<tr bgcolor='$bgcolor1'><td align='center' colspan='6'><strong>$xip_lo - $xip_hi "._AB_ISCOVERED.":</strong></td></tr>\n";
    echo "<tr bgcolor='$bgcolor2'>\n";
    echo "<td width='15%'><strong>"._AB_IPLO."</strong></td>\n";
    echo "<td width='15%'><strong>"._AB_IPHI."</strong></td>\n";
    echo "<td align='center' width='10%'><strong>"._AB_FLAG."</strong></td>\n";
    echo "<td align='center' width='10%'><strong>"._AB_CODE."</strong></td>\n";
    echo "<td align='center' width='35%'><strong>"._AB_COUNTRY."</strong></td>\n";
    echo "<td align='center' width='15%'><strong>"._AB_FUNCTIONS."</strong></td>\n";
    echo "</tr>\n";
    while($testrow4 = $db->sql_fetchrow($test4)) {
      $testrow4['ip_lo_ip'] = long2ip($testrow4['ip_lo']);
      $testrow4['ip_hi_ip'] = long2ip($testrow4['ip_hi']);
      $trow4 = abget_countrytitle($testrow4['c2c']);
      $testrow4['country'] = $trow4['country'];
      $testrow4['c2c'] = strtoupper($testrow4['c2c']);
      $testrow4['flag_img'] = flag_img($testrow4['c2c']);
      echo "<tr onmouseover=\"this.style.backgroundColor='$bgcolor2'\" onmouseout=\"this.style.backgroundColor='$bgcolor1'\" bgcolor='$bgcolor1'>\n";
      echo "<td><a href=\"".$ab_config['lookup_link'].$testrow4['ip_lo_ip']."\" target=\"_blank\">".$testrow4['ip_lo_ip']."</a></td>\n";
      echo "<td><a href=\"".$ab_config['lookup_link'].$testrow4['ip_hi_ip']."\" target=\"_blank\">".$testrow4['ip_hi_ip']."</a></td>\n";
      echo "<td align='center'>".$testrow4['flag_img']."</td>\n";
      echo "<td align='center'>".$testrow4['c2c']."</td>\n";
      echo "<td align='center'>".$testrow4['country']."</td>\n";
      echo "<td align='center'>&nbsp;<a href='".$admin_file.".php?op=ABIP2CountryEdit&amp;ip_lo=".$testrow4['ip_lo']."&amp;ip_hi=".$testrow4['ip_hi']."&amp;xop=ABMain' target='_blank'><img src='images/nukesentinel/edit.png' border='0' alt='"._AB_EDIT."' title='"._AB_EDIT."' height='16' width='16' /></a>&nbsp;<a ";
      echo "href='".$admin_file.".php?op=ABIP2CountryDelete&amp;ip_lo=".$testrow4['ip_lo']."&amp;ip_hi=".$testrow4['ip_hi']."&amp;xop=ABMain' target='_blank'><img src='images/nukesentinel/delete.png' border='0' alt='"._AB_DELETE."' title='"._AB_DELETE."' height='16' width='16' /></a>&nbsp;</td>\n";
      echo "</tr>\n";
    }
    echo "</table>\n";
    echo "<br />\n";
  }
  echo "<center><strong>"._GOBACK."</strong></center><br />\n";
  CloseTable();
  include(NUKE_BASE_DIR."footer.php");
} else {
  $db->sql_query("INSERT INTO `".$prefix."_nsnst_ip2country` VALUES ('$longip_lo', '$longip_hi', '$datetime', '$xc2c')");
  if($submittonsn == 1) {
    $subject = _AB_NUKESENTINEL.": "._AB_ADDIP2COUNTRY;
    $message  = _AB_IPLO.": $xip_lo ($longip_lo)\n";
    $message .= _AB_IPHI.": $xip_hi ($longip_hi)\n";
    $message .= _AB_COUNTRY.": ".stripslashes($xcountry)." ($xc2c)\n";
    $message .= _AB_SITENAME.": ".stripslashes($sitename)."\n";
    $message .= _AB_SITEURL.": $nukeurl\n";
    @evo_mail("ip2c@nukescripts.net", $subject, $message,"From: $adminmail\r\nX-Mailer: "._AB_NUKESENTINEL);
  }
  $db->sql_query("UPDATE `".$prefix."_nsnst_tracked_ips` SET `c2c`='$xc2c' WHERE `ip_addr` >= '$xip_lo' AND `ip_addr` <= '$xip_hi'");
  $db->sql_query("UPDATE `".$prefix."_nsnst_blocked_ips` SET `c2c`='$xc2c' WHERE `ip_addr` >= '$xip_lo' AND `ip_addr` <= '$xip_hi'");
  if($another == 1) {
    Header("Location: ".$admin_file.".php?op=ABIP2CountryAdd");
  }else {
    Header("Location: ".$admin_file.".php?op=ABIP2Country");
  }
}

?>