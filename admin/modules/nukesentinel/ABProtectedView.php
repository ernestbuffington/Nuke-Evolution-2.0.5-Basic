<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_VIEWPROTECTED;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_VIEWPROTECTED);
ipbanmenu();
CarryMenu();
protectedmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
$getIPs = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnst_protected_ranges` WHERE `ip_lo`='$ip_lo' AND `ip_hi`='$ip_hi'"));
$getIPs['ip_lo_ip'] = long2ip($getIPs['ip_lo']);
$getIPs['ip_hi_ip'] = long2ip($getIPs['ip_hi']);
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_IPLO.":</strong></td><td>".$getIPs['ip_lo_ip']."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_IPHI.":</strong></td><td>".$getIPs['ip_hi_ip']."</td></tr>\n";
echo "<tr><td bgcolor='$bgcolor2' valign='top'><strong>"._AB_NOTES.":</strong></td><td>".$getIPs['notes']."</td></tr>\n";
$countryrow = $db->sql_fetchrow($db->sql_query("SELECT * FROM `".$prefix."_nsnst_countries` WHERE `c2c`='".$getIPs['c2c']."'"));
echo "<tr><td bgcolor='$bgcolor2'><strong>"._AB_COUNTRY.":</strong></td><td>".$countryrow['country']."</td></tr>\n";
echo "</table>\n";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>