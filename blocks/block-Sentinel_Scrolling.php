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
/* Recoded for 100% W3C Compliance (If Scroll Disabled) */
/* by 64bitguy                                          */
/* http://64bit.us                                      */
/********************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

/* NOTE: To Make this block 100% W3C Compliant, simply
   comment out line's 35 and 52 to Disable The "Marquee
   Function.  Ths block will appear smaller, but will
   grow until it reaches 20 blocked IP's and will stop
   at , size refreshing the list with only the latest 20
   blocked IP addresses.  To change that number, change
   the number after "DESC LIMIT" on line 36 to what you want! */

if(!defined('NUKE_EVO')) exit;

global $prefix, $db, $user, $admin, $ab_config, $currentlang;

$usemarquee = 1;
$scrolldirection = "Down";
$content = "";
$content .= "<table border=1><tr><td ALIGN=\"center\" VALIGN=\"top\"> "._AB_LIST."</td></tr></table><hr />\n";
$content .= "<marquee Behavior=\"Scroll\" Direction=\"$scrolldirection\" Height=\"150\" ScrollAmount=\"1\" ScrollDelay=\"75\" onMouseOver=\"this.stop()\" onMouseOut=\"this.start()\"><br />";  // Comment This Line Out for W3C Compliance Step #1
$result = $db->sql_query("SELECT `ip_addr`, `reason` FROM `".$prefix."_nsnst_blocked_ips` ORDER BY `date` DESC LIMIT 20");
while (list($ip_addr, $ip_reason) = $db->sql_fetchrow($result)) {
  if((is_admin() AND $ab_config['display_link']==1) OR ((is_user() OR is_admin()) AND $ab_config['display_link']==2) OR $ab_config['display_link']==3) {
    $lookupip = str_replace("*", "0", $ip_addr);
    $content .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"".$ab_config['lookup_link']."$lookupip\" target=\"_blank\">$ip_addr</a>\n";
  } else {
    $content .= "<strong><big>&middot;</big></strong>&nbsp;$ip_addr\n";
  }
  if((is_admin() AND $ab_config['display_reason']==1) OR ((is_user() OR is_admin()) AND $ab_config['display_reason']==2) OR $ab_config['display_reason']==3) {
    $result2 = $db->sql_query("SELECT `reason` FROM `".$prefix."_nsnst_blockers` WHERE `blocker`='$ip_reason'");
    list($reason) = $db->sql_fetchrow($result2);
    $db->sql_freeresult($result2);
    $reason = str_replace("Abuse-","",$reason);
    $content .= "&nbsp;-&nbsp;$reason\n";
  }
  $content .= "<br />\n";
}
$db->sql_freeresult($result);
$content .= "</marquee>";  // Comment This Line Out for W3C Compliance Step #2
$content .= "<br />";
$content .= "<hr /><div align=\"center\"><a href=\"http://www.nukescripts.net\" title=\"NukeSentinel&trade; Available at Nuke Scripts Network\" target=\"_blank\">"._AB_NUKESENTINEL." ".$ab_config['version_number']."</a></div>\n";

?>