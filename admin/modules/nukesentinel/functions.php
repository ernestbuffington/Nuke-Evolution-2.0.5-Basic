<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/**********************************************************/
/* NukeSentinel(tm)                                       */
/* By: NukeScripts Network (webmaster@nukescripts.net)    */
/* http://www.nukescripts.net                             */
/* Copyright (c) 2000-2006 by NukeScripts Network           */
/* See CREDITS.txt for ALL contributors                   */
/**********************************************************/

function abget_country($tempip){
  global $prefix, $db;
  $tempip = str_replace(".*", ".0", $tempip);
  $tempip = sprintf("%u", ip2long($tempip));
  $result = $db->sql_query("SELECT `c2c` FROM `".$prefix."_nsnst_ip2country` WHERE `ip_lo`<='$tempip' AND `ip_hi`>='$tempip'");
  $countryinfo = $db->sql_fetchrow($result);
  $db->sql_freeresult($result);
  $ctitle = abget_countrytitle($countryinfo['c2c']);
  $countryinfo['country'] = $ctitle['country'];
  if(!$countryinfo) {
    $countryinfo['c2c'] = "00";
    $countryinfo['country'] = _AB_UNKNOWN;
  } else {
    if(!file_exists("images/nukesentinel/countries/".$countryinfo['c2c'].".png")) { $countryinfo['c2c']="00"; }
  }
  return $countryinfo;
}

function abget_countrytitle($c2c){
  global $prefix, $db;
  $countrytitleinfo = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnst_countries` WHERE `c2c`='$c2c'"));
  if(!$countrytitleinfo) {
    $countrytitleinfo['c2c'] = "00";
    $countrytitleinfo['country'] = _AB_UNKNOWN;
  } else {
    if(!file_exists("images/nukesentinel/countries/".$countrytitleinfo['c2c'].".png")) { $countrytitleinfo['c2c']="00"; }
  }
  return $countrytitleinfo;
}

function absave_config($config_name, $config_value){
  global $prefix, $db, $cache;
  $resultnum = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_config` WHERE `config_name`='$config_name'"));
  if($resultnum < 1) {
    $db->sql_query("INSERT INTO `".$prefix."_nsnst_config` (`config_name`, `config_value`) VALUES ('$config_name', '$config_value')");
  } else {
    $db->sql_query("UPDATE `".$prefix."_nsnst_config` SET `config_value`='$config_value' WHERE `config_name`='$config_name'");
  }
/*****[BEGIN]******************************************
 [ Base:    Caching System                     v3.0.0 ]
 ******************************************************/
  $cache->delete('sentinel', 'config');
  $cache->resync();
/*****[END]********************************************
 [ Base:    Caching System                     v3.0.0 ]
 ******************************************************/
}

function absave_blocker($blocker_row){
  global $prefix, $db, $cache;
  $block_list = explode("\r\n", $blocker_row['list']);
  sort($block_list);
  $blocker_row['list'] = implode("\r\n", $block_list);
  $blocker_row['list'] = str_replace("\r\n\r\n", "\r\n", $blocker_row['list']);
  $blocker_row['duration'] = $blocker_row['duration'] * 86400;
  $db->sql_query("UPDATE `".$prefix."_nsnst_blockers` SET `activate`='".$blocker_row['activate']."', `block_type`='".$blocker_row['block_type']."', `email_lookup`='".$blocker_row['email_lookup']."', `forward`='".$blocker_row['forward']."', `reason`='".$blocker_row['reason']."', `template`='".$blocker_row['template']."', `duration`='".$blocker_row['duration']."', `htaccess`='".$blocker_row['htaccess']."', `list`='".$blocker_row['list']."' WHERE `block_name`='".$blocker_row['block_name']."'");
  $cache->delete('', 'sentinel');
  $cache->resync();
}

function blankmenu() {
  echo "<center>"._AB_SUBMENU."</center>\n";
}

function ipbanmenu() {
  global $ab_config, $getAdmin, $prefix, $db, $op, $admin, $admin_file, $nsnab_ver;
  $sapi_name = strtolower(php_sapi_name());
  $checkrow = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_ip2country`"));
  if($checkrow > 0) { $tableexist = 1; } else { $tableexist = 0; }
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr>\n";
  echo "<td align='left' valign='top' width='50%'>\n<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
  echo "<tr><td>".help_img(_AB_HELP_023)."</td><td><a href='".$admin_file.".php?op=ABMain'>"._AB_NUKESENTINEL." "._AB_ADMINISTRATION."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_065)."</td><td><a href='".$admin_file.".php?op=ABBlockedIPMenu'>"._AB_BLOCKEDIPMENU."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_097)."</td><td><a href='".$admin_file.".php?op=ABBlockedRangeMenu'>"._AB_BLOCKEDRANGEMENU."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_098)."</td><td><a href='".$admin_file.".php?op=ABExcludedMenu'>"._AB_EXCLUDEDRANGEMENU."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_099)."</td><td><a href='".$admin_file.".php?op=ABProtectedMenu'>"._AB_PROTECTEDRANGEMENU."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_066)."</td><td><a href='".$admin_file.".php?op=ABTrackedMenu'>"._AB_TRACKEDIPMENU."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_117)."</td><td><a href='".$admin_file.".php?op=ABCountryList'>"._AB_COUNTRYLISTING."</a></td></tr>\n";
  echo "</table>\n</td>\n";
  echo "<td align='left' valign='top' width='50%'>\n<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
  echo "<tr><td>".help_img(_AB_HELP_024)."</td><td><a href='".$admin_file.".php?op=ABConfig'>"._AB_BLOCKERCONFIG."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_030)."</td><td><a href='".$admin_file.".php?op=ABSearch'>"._AB_SEARCHIPS."</a></td></tr>\n";
  if($tableexist == 1) { echo "<tr><td>".help_img(_AB_HELP_077)."</td><td><a href='".$admin_file.".php?op=ABIP2Country'>"._AB_IP2COUNTRY."</a></td>\n"; }
  else { echo "<tr><td>".help_img(_AB_HELP_078)."</td><td>"._AB_IP2COUNTRY."</td>\n"; }
  echo "<tr><td>".help_img(_AB_HELP_031)."</td><td>";
  if(is_god($admin)) { echo "<a href='".$admin_file.".php?op=ABAuthList'>"; }
  echo _AB_LISTHTTPAUTH."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_032)."</td><td>";
  if(is_god($admin)) { echo "<a href='".$admin_file.".php?op=ABAuthListScan'>"; }
  echo _AB_SCANADMINS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_058)."</td><td>";
  if(is_god($admin)) { echo "<a href='".$admin_file.".php?op=ABDBMaintence'>"; }
  echo _AB_DBMAINTENCE."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_114)."</td><td><a href='".$admin_file.".php?op=ABImport'>"._AB_IMPORTDATA."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_075)."</td><td><a href='".$admin_file.".php?op=ABTemplate'>"._AB_TEMPLATEMENU."</a></td></tr>\n";
  echo "</table>\n</td>\n";
  echo "</tr>\n";
  echo "<tr>\n<td align='center' colspan='2'>".help_img(_AB_HELP_025)." <a href='".$admin_file.".php'>"._AB_SITEADMIN."</a></td>\n</tr>\n";
  echo "<tr><td align='center' colspan='2'>";
  if($ab_config['help_switch'] > 0) { echo _AB_HELPNOTE1; } else { echo _AB_HELPNOTE0; }
  echo "</td></tr>\n";
  echo "</table>\n";
}

function searchmenu() {
  global $op, $sip, $nuke_config, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
  echo "<tr><td>".help_img(_AB_HELP_088)."</td><td><a href='".$admin_file.".php?op=ABSearchResults'>"._AB_SEARCHIPS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_092)."</td><td><a href='".$admin_file.".php?op=ABSearchRangeResults'>"._AB_SEARCHRANGES."</a></td></tr>\n";
  echo "</table>\n";
}

function ipsubmenu() {
  global $ab_config, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr><td align='left' valign='top' width='33%'>\n<table align='center' border='0' cellpadding='2' cellspacing='0'>\n";
  echo "<tr><td>".help_img(_AB_HELP_064)."</td><td><a href='".$admin_file.".php?op=ABConfigAdmin'>"._AB_ADMINBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_033)."</td><td><a href='".$admin_file.".php?op=ABConfigAuthor'>"._AB_AUTHORBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_034)."</td><td><a href='".$admin_file.".php?op=ABConfigClike'>"._AB_CLIKEBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_035)."</td><td><a href='".$admin_file.".php?op=ABConfigUnion'>"._AB_UNIONBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_036)."</td><td><a href='".$admin_file.".php?op=ABConfigFilter'>"._AB_FILTERBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_120)."</td><td><a href='".$admin_file.".php?op=ABConfigFlood'>"._AB_FLOODBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_037)."</td><td><a href='".$admin_file.".php?op=ABConfigHarvester'>"._AB_HARVESTBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_038)."</td><td><a href='".$admin_file.".php?op=ABConfigReferer'>"._AB_REFERERBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_039)."</td><td><a href='".$admin_file.".php?op=ABConfigScript'>"._AB_SCRIPTBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_040)."</td><td><a href='".$admin_file.".php?op=ABConfigRequest'>"._AB_REQUESTBLOCKER."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_041)."</td><td><a href='".$admin_file.".php?op=ABConfigString'>"._AB_STRINGBLOCKER."</a></td></tr>\n";
  echo "</table>\n</td>\n</tr>\n";
  echo "</table>\n";
}

function ipdbmenu() {
  global $admin, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr><td align='left' valign='top' width='33%'>\n<table align='center' border='0' cellpadding='2' cellspacing='0'>\n";
  echo "<tr><td>".help_img(_AB_HELP_059)."</td><td><a href='".$admin_file.".php?op=ABDBStructure'>"._AB_DBSTRUCTURE."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_060)."</td><td><a href='".$admin_file.".php?op=ABDBOptimize'>"._AB_DBOPTIMIZE."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_061)."</td><td><a href='".$admin_file.".php?op=ABDBRepair'>"._AB_DBREPAIR."</a></td></tr>\n";
  echo "</table>\n</td>\n</tr>\n";
  echo "</table>\n";
}

function ip2cmenu() {
  global $admin, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr>\n<td align='left' valign='top' width='33%'>\n<table align='center' border='0' cellpadding='2' cellspacing='0'>\n";
  echo "<tr><td>".help_img(_AB_HELP_085)."</td><td><a href='".$admin_file.".php?op=ABIP2CountryAdd'>"._AB_IP2CADD."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_079)."</td><td><a href='".$admin_file.".php?op=ABIP2CountryList'>"._AB_IP2CLISTING."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_052)."</td><td><a href='".$admin_file.".php?op=ABIP2CountryOverlapCheck'>"._AB_IP2COVERLAPCHECK."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_083)."</td><td><a href='".$admin_file.".php?op=ABIP2CountryUpdateBlocked'>"._AB_IP2CUPDATEBLOCKED."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_084)."</td><td><a href='".$admin_file.".php?op=ABIP2CountryUpdateTracked'>"._AB_IP2CUPDATETRACKED."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_110)."</td><td><a href='".$admin_file.".php?op=ABIP2CountryUpdateBlockedRanges'>"._AB_IP2CUPDATEBLOCKEDRANGES."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_111)."</td><td><a href='".$admin_file.".php?op=ABIP2CountryUpdateExcludedRanges'>"._AB_IP2CUPDATEEXCLUDEDRANGES."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_112)."</td><td><a href='".$admin_file.".php?op=ABIP2CountryUpdateProtectedRanges'>"._AB_IP2CUPDATEPROTECTEDRANGES."</a></td></tr>\n";
  echo "</table>\n</td>\n</tr>\n";
  echo "</table>\n";
}

function importmenu() {
  global $admin, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr>\n<td align='left' valign='top' width='33%'>\n<table align='center' border='0' cellpadding='2' cellspacing='0'>\n";
  echo "<tr><td>".help_img(_AB_HELP_115)."</td><td><a href='".$admin_file.".php?op=ABImportBlockedRange'>"._AB_IMPORTRANGE."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_116)."</td><td><a href='".$admin_file.".php?op=ABImportIP2Country'>"._AB_IMPORTIP2C."</a></td></tr>\n";
  echo "</table>\n</td>\n</tr>\n";
  echo "</table>\n";
}

function excludedmenu() {
  global $admin, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr>\n<td align='left' valign='top' width='33%'>\n<table align='center' border='0' cellpadding='2' cellspacing='0'>\n";
  echo "<tr><td>".help_img(_AB_HELP_100)."</td><td><a href='".$admin_file.".php?op=ABExcludedAdd'>"._AB_ADDEXCLUDED."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_102)."</td><td><a href='".$admin_file.".php?op=ABExcludedList'>"._AB_EXCLUDEDLISTING."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_103)."</td><td><a href='".$admin_file.".php?op=ABPrintExcludedList' target='_blank'>"._AB_PRINTEXCLUDEDRANGES."</a></td></tr>\n";
  echo "<tr><td>&nbsp;</td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_069)."</td><td><a href='".$admin_file.".php?op=ABExcludedOverlapCheck'>"._AB_EXCLUDEDOVERLAPCHECK."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_101)."</td><td><a href='".$admin_file.".php?op=ABExcludedClear'>"._AB_CLEAREXCLUDED."</a></td></tr>\n";
  echo "</table>\n</td>\n</tr>\n";
  echo "</table>\n";
}

function protectedmenu() {
  global $admin, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr>\n<td align='left' valign='top' width='33%'>\n<table align='center' border='0' cellpadding='2' cellspacing='0'>\n";
  echo "<tr><td>".help_img(_AB_HELP_104)."</td><td><a href='".$admin_file.".php?op=ABProtectedAdd'>"._AB_ADDPROTECTED."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_106)."</td><td><a href='".$admin_file.".php?op=ABProtectedList'>"._AB_PROTECTEDLISTING."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_107)."</td><td><a href='".$admin_file.".php?op=ABPrintProtectedList' target='_blank'>"._AB_PRINTPROTECTEDRANGES."</a></td></tr>\n";
  echo "<tr><td>&nbsp;</td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_070)."</td><td><a href='".$admin_file.".php?op=ABProtectedOverlapCheck'>"._AB_PROTECTEDOVERLAPCHECK."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_105)."</td><td><a href='".$admin_file.".php?op=ABProtectedClear'>"._AB_CLEARPROTECTED."</a></td></tr>\n";
  echo "</table>\n</td>\n</tr>\n";
  echo "</table>\n";
}

function blockedipmenu() {
  global $admin, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr>\n<td align='left' valign='top' width='33%'>\n<table align='center' border='0' cellpadding='2' cellspacing='0'>\n";
  echo "<tr><td>".help_img(_AB_HELP_027)."</td><td><a href='".$admin_file.".php?op=ABBlockedIPAdd'>"._AB_ADDIP."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_026)."</td><td><a href='".$admin_file.".php?op=ABBlockedIP'>"._AB_BLOCKEDIPS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_062)."</td><td><a href='".$admin_file.".php?op=ABPrintBlockedIP' target='_blank'>"._AB_PRINTBLOCKEDIPS."</a></td></tr>\n";
  echo "<tr><td>&nbsp;</td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_028)."</td><td><a href='".$admin_file.".php?op=ABBlockedIPClear'>"._AB_CLEARIP."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_029)."</td><td><a href='".$admin_file.".php?op=ABBlockedIPClearExpired'>"._AB_CLEAREXPIRED."</a></td></tr>\n";
  echo "</table>\n</td>\n</tr>\n";
  echo "</table>\n";
}

function blockedrangemenu() {
  global $admin, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr>\n<td align='left' valign='top' width='33%'>\n<table align='center' border='0' cellpadding='2' cellspacing='0'>\n";
  echo "<tr><td>".help_img(_AB_HELP_089)."</td><td><a href='".$admin_file.".php?op=ABBlockedRangeAdd'>"._AB_ADDRANGE."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_090)."</td><td><a href='".$admin_file.".php?op=ABBlockedRange'>"._AB_BLOCKEDRANGES."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_091)."</td><td><a href='".$admin_file.".php?op=ABPrintBlockedRange' target='_blank'>"._AB_PRINTBLOCKEDRANGES."</a></td></tr>\n";
  echo "<tr><td>&nbsp;</td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_071)."</td><td><a href='".$admin_file.".php?op=ABBlockedOverlapCheck'>"._AB_BLOCKEDOVERLAPCHECK."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_093)."</td><td><a href='".$admin_file.".php?op=ABBlockedRangeClear'>"._AB_CLEARRANGE."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_094)."</td><td><a href='".$admin_file.".php?op=ABBlockedRangeClearExpired'>"._AB_CLEARRANGEEXPIRED."</a></td></tr>\n";
  echo "</table>\n</td>\n</tr>\n";
  echo "</table>\n";
}

function trackedmenu() {
  global $admin, $admin_file;
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='90%'>\n";
  echo "<tr>\n<td align='left' valign='top' width='33%'>\n<table align='center' border='0' cellpadding='2' cellspacing='0'>\n";
  echo "<tr><td>".help_img(_AB_HELP_049)."</td><td><a href='".$admin_file.".php?op=ABTracked'>"._AB_TRACKEDIPS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_063)."</td><td><a href='".$admin_file.".php?op=ABPrintTracked' target='_blank'>"._AB_PRINTTRACKEDIPS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_108)."</td><td><a href='".$admin_file.".php?op=ABTrackedUsers'>"._AB_TRACKEDUSERS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_109)."</td><td><a href='".$admin_file.".php?op=ABPrintTrackedUsers' target='_blank'>"._AB_PRINTTRACKEDUSERS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_076)."</td><td><a href='".$admin_file.".php?op=ABTrackedAgents'>"._AB_TRACKEDAGENTS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_081)."</td><td><a href='".$admin_file.".php?op=ABPrintTrackedAgents' target='_blank'>"._AB_PRINTTRACKEDAGENTS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_073)."</td><td><a href='".$admin_file.".php?op=ABTrackedRefers'>"._AB_TRACKEDREFERS."</a></td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_087)."</td><td><a href='".$admin_file.".php?op=ABPrintTrackedRefers' target='_blank'>"._AB_PRINTTRACKEDREFERS."</a></td></tr>\n";
  echo "<tr><td>&nbsp;</td></tr>\n";
  echo "<tr><td>".help_img(_AB_HELP_096)."</td><td><a href='".$admin_file.".php?op=ABTrackedClear'>"._AB_CLEARTRACKED."</a></td></tr>\n";
  echo "</table>\n</td>\n</tr>\n";
  echo "</table>\n";
}

function flag_img($c2c) {
  global $prefix, $db;
  $c2c = strtolower($c2c);
  list($xcountry) = $db->sql_fetchrow($db->sql_query("SELECT `country` FROM `".$prefix."_nsnst_countries` WHERE `c2c`='$c2c'"));
  if(!file_exists("images/nukesentinel/countries/".$c2c.".png")) {
    return "<img src=\"images/nukesentinel/countries/00.png\" border=\"0\" height=\"15\" width=\"25\" alt=\"($c2c) $xcountry\" title=\"($c2c) $xcountry\" />";
  } else {
    return "<img src=\"images/nukesentinel/countries/$c2c.png\" border=\"0\" height=\"15\" width=\"25\" alt=\"($c2c) $xcountry\" title=\"($c2c) $xcountry\" />";
  }
}

function help_img($abinfo) {
  global $ab_config;
  if($ab_config['help_switch'] > 0) {
    return "<a href=\"javascript:void(0);\" onclick=\"return overlib('".addslashes($abinfo)."', STICKY, CENTERPOPUP, CAPTION, '"._AB_HELPSYS."', STATUS, '"._AB_HELPSYS."', WIDTH, 400, FGCOLOR, '#ffffff', BGCOLOR, '#000000', TEXTCOLOR, '#000000', CAPCOLOR, '#ffffff', CLOSECOLOR, '#ffffff', CAPICON, 'images/nukesentinel/helpicon.png', BORDER, '2');\"><img src='images/nukesentinel/helpicon.png' border='0' height='12' width='12' alt='' title=''></a>";
  } else {
    return "<a href=\"javascript:void(0);\" onmouseover=\"return overlib('".addslashes($abinfo)."', STICKY, CENTERPOPUP, CAPTION, '"._AB_HELPSYS."', STATUS, '"._AB_HELPSYS."', WIDTH, 400, FGCOLOR, '#ffffff', BGCOLOR, '#000000', TEXTCOLOR, '#000000', CAPCOLOR, '#ffffff', CLOSECOLOR, '#ffffff', CAPICON, 'images/nukesentinel/helpicon.png', BORDER, '2');\" onmouseout=\"return nd();\"><img src='images/nukesentinel/helpicon.png' border='0' height='12' width='12' alt='' title=''></a>";
  }
}

function info_img($abinfo) {
 global $ab_config;
  if($ab_config['help_switch'] > 0) {
    return "<a href=\"javascript:void(0);\" onclick=\"return overlib('".addslashes($abinfo)."', STICKY, CENTERPOPUP, CAPTION, '"._AB_INFOSYS."', STATUS, '"._AB_INFOSYS."', WIDTH, 400, FGCOLOR, '#ffffff', BGCOLOR, '#000000', TEXTCOLOR, '#000000', CAPCOLOR, '#ffffff', CLOSECOLOR, '#ffffff', CAPICON, 'images/nukesentinel/infoicon.png', BORDER, '2');\"><img src='images/nukesentinel/infoicon.png' border='0' height='12' width='12' alt='' title=''></a>";
  } else {
    return "<a href=\"javascript:void(0);\" onmouseover=\"return overlib('".addslashes($abinfo)."', STICKY, CENTERPOPUP, CAPTION, '"._AB_INFOSYS."', STATUS, '"._AB_INFOSYS."', WIDTH, 400, FGCOLOR, '#ffffff', BGCOLOR, '#000000', TEXTCOLOR, '#000000', CAPCOLOR, '#ffffff', CLOSECOLOR, '#ffffff', CAPICON, 'images/nukesentinel/infoicon.png', BORDER, '2');\" onmouseout=\"return nd();\"><img src='images/nukesentinel/infoicon.png' border='0' height='12' width='12' alt='' title=''></a>";
  }
}

function templatemenu($template="") {
  global $nuke_config, $ab_config, $nsnst_const, $admin_file;
  echo "<form action='".$admin_file.".php' method='post' target='templateview'>";
  echo "<input type='hidden' name='op' value='ABTemplateView' />\n";
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>";
  echo "<tr><td>"._AB_TEMPLATE.":</td><td><select name='template'>\n";
  $templatelist = "";
  $templatedir = dir(NUKE_INCLUDE_DIR.'nukesentinel/abuse/');
  while($func=$templatedir->read()) {
    if(substr($func, -4) == ".tpl") { $templatelist .= "$func "; }
  }
  closedir($templatedir->handle);
  $templatelist = explode(" ", $templatelist);
  sort($templatelist);
  for($i=0; $i < sizeof($templatelist); $i++) {
    if($templatelist[$i]!="") {
      $bl = ereg_replace(".tpl","",$templatelist[$i]);
      $bl = ereg_replace("_"," ",$bl);
      echo "<option value='$templatelist[$i]'>".$bl."</option>\n";
    }
  }
  echo "</select></td></tr>\n";
  echo "<tr><td align='center' colspan='2'><input type=submit value='"._AB_VIEWTEMPLATE."' /></td></tr>\n";
  echo "</table>\n</form>\n";
  echo "<hr noshade='noshade' />\n";
  echo "<form action='".$admin_file.".php' method='post'>";
  echo "<input type='hidden' name='op' value='ABTemplateSource' />\n";
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>";
  echo "<tr><td>"._AB_TEMPLATE.":</td><td><select name='template'>\n";
  $templatelist = "";
  $templatedir = dir(NUKE_INCLUDE_DIR.'nukesentinel/abuse/');
  while($func=$templatedir->read()) {
    if(substr($func, -4) == ".tpl") { $templatelist .= "$func "; }
  }
  closedir($templatedir->handle);
  $templatelist = explode(" ", $templatelist);
  sort($templatelist);
  for($i=0; $i < sizeof($templatelist); $i++) {
    if($templatelist[$i]!="") {
      $bl = ereg_replace(".tpl","",$templatelist[$i]);
      $bl = ereg_replace("_"," ",$bl);
      echo "<option value='$templatelist[$i]'>".$bl."</option>\n";
    }
  }
  echo "</select></td></tr>\n";
  echo "<tr><td align='center' colspan='2'><input type=submit value='"._AB_VIEWTEMPLATESOURCE."' /></td></tr>\n";
  echo "</table>\n</form>\n";
}

function abview_template($template="") {
  global $nuke_config, $ab_config, $nsnst_const, $db, $prefix, $ip;
  if(empty($template)) { $template = "abuse_default.tpl"; }
  $sitename = $nuke_config['sitename'];
  $adminmail = $nuke_config['adminmail'];
  $adminmail = str_replace("@", "(at)", $adminmail);
  $adminmail = str_replace(".", "(dot)", $adminmail);
  $adminmail2 = urlencode($nuke_config['adminmail']);
  $querystring = get_query_string();
  $filename = NUKE_INCLUDE_DIR."nukesentinel/abuse/".$template; //NUKE_INCLUDE_DIR.'nukesentinel/abuse/'
  if(!file_exists($filename)) { $filename = "abuse/abuse_default.tpl"; }
  $handle = @fopen($filename, "r");
  $display_page = fread($handle, filesize($filename));
  @fclose($handle);
  $display_page = str_replace("__SITENAME__", $sitename, $display_page);
  $display_page = str_replace("__ADMINMAIL1__", $adminmail, $display_page);
  $display_page = str_replace("__ADMINMAIL2__", $adminmail2, $display_page);
  $display_page = str_replace("__REMOTEPORT__", $nsnst_const['remote_port'], $display_page);
  $display_page = str_replace("__REQUESTMETHOD__", $nsnst_const['request_method'], $display_page);
  $display_page = str_replace("__SCRIPTNAME__", $nsnst_const['script_name'], $display_page);
  $display_page = str_replace("__HTTPHOST__", $nsnst_const['http_host'], $display_page);
  $display_page = str_replace("__USERAGENT__", $nsnst_const['user_agent'], $display_page);
  $display_page = str_replace("__CLIENTIP__", $nsnst_const['client_ip'], $display_page);
  $display_page = str_replace("__FORWARDEDFOR__", $nsnst_const['forward_ip'], $display_page);
  $display_page = str_replace("__REMOTEADDR__", $nsnst_const['remote_addr'], $display_page);
  $display_page = str_replace("__TIMEDATE__", date("Y-m-d \@ H:i:s T \G\M\T O", $nsnst_const['ban_time']), $display_page);
  $display_page = str_replace("__DATEEXPIRES__", _AB_UNKNOWN, $display_page);
  return $display_page;
}

function OpenMenu($adsection="") {
  global $bgcolor1, $bgcolor2, $textcolor1, $ab_config, $getAdmin, $prefix, $db, $op, $admin, $nsnab_ver;
  echo "<script type=\"text/javascript\" src=\"includes/nukesentinel1.js\"><!-- overLIB (c) Erik Bosrup --></script>\n";
  echo "<script type=\"text/javascript\" src=\"includes/nukesentinel2.js\"><!-- overLIB_hideform (c) Erik Bosrup --></script>\n";
  echo "<script type=\"text/javascript\" src=\"includes/nukesentinel3.js\"><!-- overLIB_centerpopup (c) Erik Bosrup --></script>\n";
  echo "<div id=\"overDiv\" style=\"position:absolute; visibility:hidden; z-index:9999;\"></div>\n";
  echo "<table width='100%' border='0' cellspacing='1' cellpadding='4'>\n";
  $nsnstcopy  = "<strong>Module's Name:</strong> NukeSentinel(tm)<br />";
  $nsnstcopy .= "<strong>License:</strong> Copyright &copy; 2000-2006 NukeSentinel(tm) Team<br />";
  $nsnstcopy .= "<strong>Author's Name:</strong> <a href='http://www.nukescripts.net' title='NukeSentinel(tm) Available at Nuke Scripts Network' target='_blank'>NukeScripts Network</a><br />";
  $nsnstcopy .= "<strong>Module's Description:</strong> Advanced site security proudly produced by: NukeScripts Network, Raven PHPScripts, &amp; NukeResources.<br />100% W3C Compliance Coded by http://64bit.us";
  if($ab_config['disable_switch'] == 1) { $nsnststatus = _AB_DISABLED; } else { $nsnststatus = _AB_ENABLED; }
  if(!empty($adsection)) { $adsection = ": ".$adsection; }
  echo "<tr>\n<td align='center' colspan='2'><a href='http://www.nukescripts.net/modules.php?name=Downloads&amp;cid=700' target='_blank'><span class='title'><strong>"._AB_NUKESENTINEL."</strong></span></a><span class='title'><strong> ".$ab_config['version_number'].": ".$nsnststatus."$adsection</strong></span> ";
  if($ab_config['help_switch'] > 0) {
    echo "<a href=\"javascript:void(0);\" onclick=\"return overlib('".addslashes($nsnstcopy)."', STICKY, CENTERPOPUP, CAPTION, 'Module Copyright &copy; Information', STATUS, 'NukeSentinel(tm): Copyright Information', WIDTH, 400, FGCOLOR, '#ffffff', BGCOLOR, '#000000', TEXTCOLOR, '#000000', CAPCOLOR, '#ffffff', CLOSECOLOR, '#ffffff', CAPICON, 'images/nukesentinel/copyicon.png', BORDER, '2');\"><img src='images/nukesentinel/copyicon.png' border='0' height='12' width='12' alt='' title=''></a>";
  } else {
    echo "<a href=\"javascript:void(0);\" onmouseover=\"return overlib('".addslashes($nsnstcopy)."', STICKY, CENTERPOPUP, CAPTION, 'Module Copyright &copy; Information', STATUS, 'NukeSentinel(tm): Copyright Information', WIDTH, 400, FGCOLOR, '#ffffff', BGCOLOR, '#000000', TEXTCOLOR, '#000000', CAPCOLOR, '#ffffff', CLOSECOLOR, '#ffffff', CAPICON, 'images/nukesentinel/copyicon.png', BORDER, '2');\" onmouseout=\"return nd();\"><img src='images/nukesentinel/copyicon.png' border='0' height='12' width='12' alt='' title=''></a>";
  }
  echo "</td>\n</tr>\n";
  echo "$nsnab_ver\n";
  echo "<tr><td align='center' valign='top' width='66%'>\n";
}

function CarryMenu() {
  echo "</td><td align='center' valign='top' width='34%'>\n";
}

function CloseMenu() {
  echo "</td></tr></table>\n";
}

function ABLoadDataMenu($importer="", $xop) {
  global $admin_file;
  echo "<center><form name='myform' action='".$admin_file.".php?op=".$xop."' method='post'>\n";
  echo "<strong>"._AB_SELECTCOUNTRY.":</strong><br />\n";
  echo "<select name='importer' SIZE='15' onChange='submit()'>\n";
  echo "<option value=''";
  if(empty($importer)) { echo  "selected='selected'"; }
  echo ">"._AB_SELECTONE."</option>\n";
  $handle=opendir(NUKE_INCLUDE_DIR."nukesentinel/import");
  $importlist = '';
  while($file = readdir($handle)) {
    if($file != "." and $file != ".." AND !stristr($file, ".ht")) {
      $file = str_replace(".data", "", $file);
      $importlist .= "$file ";
    }
  }
  closedir($handle);
  $importlist = explode(" ", $importlist);
  sort($importlist);
  $selectflag = 0;
  for($i=0, $maxi=count($importlist); $i < $maxi; $i++) {
    if($importlist[$i]!="") {
      echo "<option value='$importlist[$i]'";
      if($selectflag == 1) { echo " selected='selected'"; $selectflag = 0; }
      if($importlist[$i]==$importer) { $selectflag = 1; }
      echo ">".str_replace("_", " ", $importlist[$i])."</option>\n";
    }
  }
  echo "</select><br />\n";
  echo "<input type='submit' value='"._AB_IMPORTDATA."' />";
  echo "</form></center>";
  if ($importer>"" && $xop == "ABImportIP2Country") {
     echo "<script language=\"JavaScript\">\n";
     echo "document.myform.submit();\n";
     echo "</script>\n";
  }
  if($importer>"") { echo "<hr /><center class='title'><strong>".str_replace("_", " ", $importer)." "._AB_ADDED."!</strong></center><br />\n"; }
}

?>