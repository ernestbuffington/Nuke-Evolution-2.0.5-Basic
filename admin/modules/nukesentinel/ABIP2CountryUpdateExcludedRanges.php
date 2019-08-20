<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

@set_time_limit(600);
$perpage = 200;
if(!$ab_config['page_delay'] OR $ab_config['page_delay'] < 1) { $pagedelay = 5; } else { $pagedelay = $ab_config['page_delay']; }
$totalselected = $db->sql_numrows($db->sql_query("SELECT `ip_lo` FROM `".$prefix."_nsnst_excluded_ranges`"));
if(!isset($min)) {
  $min=0;
  $pagesint = ($totalselected / $perpage);
  $pages = ceil($pagesint);
  $pagetitle = _AB_NUKESENTINEL.": "._AB_IP2CUPDATEEXCLUDEDRANGES;
  include(NUKE_BASE_DIR."header.php");
  OpenTable();
  OpenMenu(_AB_IP2CUPDATEEXCLUDEDRANGES);
  ipbanmenu();
  CarryMenu();
  ip2cmenu();
  CloseMenu();
  CloseTable();
  echo "<br />\n";
  OpenTable();
  echo _AB_IP2CUPDATEEXCLUDEDRANGES01."<br />\n";
  echo _AB_IP2CUPDATEEXCLUDEDRANGES02."<br />\n";
  echo _AB_IP2CINSECTIONS."<br />\n";
  echo _AB_YOUHAVE."$pages"._AB_SECTIONSTOGO."<br />\n";
  echo _AB_IP2CUPDATE04C."<br />\n";
  echo "<br />\n";
  echo "<form method='post' action='".$admin_file.".php'>\n";
  echo "<input type='hidden' name='op' value='ABIP2CountryUpdateExcludedRanges' />\n";
  echo "<input type='hidden' name='min' value='$min' />\n";
  echo "<input type='submit' value=\""._AB_LETSGETSTART."\" />\n";
  echo "</form>\n";
  CloseTable();
  include(NUKE_BASE_DIR."footer.php");
} else if($min < $totalselected) {
  $db->sql_query("UPDATE `".$prefix."_nsnst_config` SET `config_value`='1' WHERE `config_name`='site_switch'");
  $ab_config['site_switch'] = 1;
  $result = $db->sql_query("SELECT `ip_lo` FROM `".$prefix."_nsnst_excluded_ranges` LIMIT $min, $perpage");
  while(list($xip_lo) = $db->sql_fetchrow($result)) {
    list($xc2c) = $db->sql_fetchrow($db->sql_query("SELECT `c2c` FROM `".$prefix."_nsnst_ip2country` WHERE `ip_lo`<='$xip_lo' AND `ip_hi`>='$xip_lo'"));
    if(!$xc2c) { $xc2c = "00"; }
    $db->sql_query("UPDATE `".$prefix."_nsnst_excluded_ranges` SET `c2c`='$xc2c' WHERE `ip_lo`='$xip_lo'");
  }
  $max=$min+$perpage;
  $pagesint = ($totalselected / $perpage);
  $pages = ceil($pagesint);
  $currentpage = ($max / $perpage);
  $pagetitle = _AB_NUKESENTINEL.": "._AB_IP2CUPDATEEXCLUDEDRANGES;
  include(NUKE_BASE_DIR."header.php");
  title($pagetitle);
  OpenTable();
  echo "<META HTTP-EQUIV=\"refresh\" content=\"$pagedelay;URL=".$admin_file.".php?op=ABIP2CountryUpdateExcludedRanges&min=$max\">";
  echo "<strong>"._AB_SECTION." $currentpage "._AB_OF." $pages "._AB_COMPLETED."</strong><br />\n";
  if($currentpage < $pages) {
    echo "<strong>"._AB_SECTION." ".($currentpage+1)." "._AB_WILLSTART."</strong><br />\n";
  }
  CloseTable();
  include(NUKE_BASE_DIR."footer.php");
} else {
  $db->sql_query("UPDATE `".$prefix."_nsnst_config` SET `config_value`='0' WHERE `config_name`='site_switch'");
  $ab_config['site_switch'] = 0;
  $pagetitle = _AB_NUKESENTINEL.": "._AB_IP2CUPDATEEXCLUDEDRANGES;
  include(NUKE_BASE_DIR."header.php");
  OpenTable();
  OpenMenu(_AB_IP2CUPDATEEXCLUDEDRANGES);
  ipbanmenu();
  CarryMenu();
  ip2cmenu();
  CloseMenu();
  CloseTable();
  echo "<br />\n";
  OpenTable();
  echo "<center><strong>"._AB_IP2CUPDATEEXCLUDEDRANGES." "._AB_COMPLETED."</strong><br /></center>\n";
  CloseTable();
  include(NUKE_BASE_DIR."footer.php");
}

?>