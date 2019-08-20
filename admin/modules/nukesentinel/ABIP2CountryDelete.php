<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_IP2CDELETE;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_IP2CDELETE);
ipbanmenu();
CarryMenu();
ip2cmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
echo "<form action='".$admin_file.".php' method='post'>\n";
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<tr><td align='center'>"._AB_IP2CDELETES." ".long2ip($ip_lo)." to ".long2ip($ip_hi)."?</td></tr>\n";
echo "<tr><td>\n";
echo "<input type='hidden' name='op' value='ABIP2CountryDeleteSave' />\n";
echo "<input type='hidden' name='ip_lo' value='$ip_lo' />\n";
echo "<input type='hidden' name='ip_hi' value='$ip_hi' />\n";
echo "<input type='hidden' name='xop' value='$xop' />\n";
echo "<input type='hidden' name='min' value='$min' />\n";
echo "<input type='hidden' name='sip' value='$sip' />\n";
echo "<input type='hidden' name='column' value='$column' />\n";
echo "<input type='hidden' name='direction' value='$direction' />\n";
echo "<input type='hidden' name='showcountry' value='$showcountry' /></td></tr>\n";
echo "<tr><td align='center'><input type=submit value='"._AB_IP2CDELETE."' /></td></tr>\n";
echo "<tr><td align='center'>"._GOBACK."</td></tr>\n";
echo "</table>\n";
echo "</form>";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>