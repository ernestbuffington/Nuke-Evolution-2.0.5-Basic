<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_RANGEDELETE;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_RANGEDELETE);
ipbanmenu();
CarryMenu();
blockedrangemenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
echo "<form action='".$admin_file.".php' method='post'>\n";
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<tr bgcolor='$bgcolor1'><td align='center' class='content'>"._AB_RANGEDELETES." ".long2ip($ip_lo)." to ".long2ip($ip_hi)."?</td></tr>\n";
echo "<tr><td align='center'>\n";
echo "<input type='hidden' name='op' value='ABBlockedRangeDeleteSave' />\n";
echo "<input type='hidden' name='ip_lo' value='$ip_lo' />\n";
echo "<input type='hidden' name='ip_hi' value='$ip_hi' />\n";
echo "<input type='hidden' name='xop' value='$xop' />\n";
echo "<input type='hidden' name='min' value='$min' />\n";
echo "<input type='hidden' name='sip' value='$sip' />\n";
echo "<input type='hidden' name='column' value='$column' />\n";
echo "<input type='hidden' name='direction' value='$direction' /><input type='submit' value='"._AB_RANGEDELETE."' /></td></tr>\n";
echo "<tr><td align='center'>"._GOBACK."</td></tr>\n";
echo "</table>\n";
echo "</form>";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>