<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_DELETEIP;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_DELETEIP);
ipbanmenu();
CarryMenu();
blockedipmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
echo "<form action='".$admin_file.".php' method='post'>\n";
echo "<tr bgcolor='$bgcolor1'><td align='center' class='content'>"._AB_DELETEIPS." $xIPs?</td></tr>\n";
echo "<input type='hidden' name='op' value='ABBlockedIPDeleteSave' />\n";
echo "<input type='hidden' name='xIPs' value='$xIPs' />\n";
echo "<input type='hidden' name='xop' value='$xop' />\n";
echo "<input type='hidden' name='min' value='$min' />\n";
echo "<input type='hidden' name='sip' value='$sip' />\n";
echo "<input type='hidden' name='column' value='$column' />\n";
echo "<input type='hidden' name='direction' value='$direction' />\n";
echo "<tr><td align='center'><input type=submit value='"._AB_DELETEIP."' /></td></tr>\n";
echo "<tr><td align='center'>"._GOBACK."</td></tr>\n";
echo "</form>";
echo "</table>\n";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>