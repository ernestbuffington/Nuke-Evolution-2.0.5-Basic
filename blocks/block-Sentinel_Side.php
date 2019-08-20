<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* block-Sentinel_Side.php                              */
/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/
/* Hacker Beware center block        (SQL Programing)   */
/* By: Stephen2417 (Orignal Code) &    xfsunolesphp     */
/* http://stephen2417.com          http://xfsunoles.com */
/* Copyright (c) 2004 by Stephen2417 & xfsunolesphp       */
/********************************************************/
/* Recoded for 100% W3C Compliance by 64bitguy          */
/* http://64bit.us                                      */
/********************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if(!defined('NUKE_EVO')) exit;

global $db, $prefix, $ab_config, $currentlang;

$result = $db->sql_query("SELECT * FROM `".$prefix."_nsnst_blocked_ips`");
$total_ips = $db->sql_numrows($result);
$db->sql_freeresult($result);
if(!$total_ips) { $total_ips = 0; }
$content  = "<div align=\"center\"><img src=\"images/nukesentinel/Sentinel_Medium.png\" alt=\" "._AB_WARNED."\" title=\" "._AB_WARNED."\" /><br />"._AB_CAUGHT." ".intval($total_ips)." "._AB_SHAME."</div>";
$content .= "<hr /><div align=\"center\"><a href=\"http://www.nukescripts.net\">"._AB_NUKESENTINEL." ".$ab_config['version_number']."</a></div>\n";

?>