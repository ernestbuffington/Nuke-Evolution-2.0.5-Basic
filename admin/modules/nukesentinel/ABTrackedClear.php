<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2007 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_CLEARTRACKED;
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_CLEARTRACKED);
ipbanmenu();
CarryMenu();
trackedmenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
echo "<form action='".$admin_file.".php' method='post'>\n";
echo "<table align='center' border='0' cellpadding='2' cellspacing='2' width='100%'>\n";
echo "<tr><td align='center' class='content'>"._AB_CLEARTRACKEDS."<br />\n";
echo "<input type=hidden name='op' value='ABTrackedClearSave' />\n";
echo "<input type=submit value=\""._AB_CLEARTRACKED."\" /></td></tr>\n";
echo "</table>\n";
echo "</form>\n";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>