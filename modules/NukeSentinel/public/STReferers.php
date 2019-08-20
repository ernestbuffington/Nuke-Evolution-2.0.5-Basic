<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

$pagetitle = _AB_BLOCKEDREFERERS;
include(NUKE_BASE_DIR."header.php");
title($pagetitle);
stmain_menu();
echo "<br />\n";
OpenTable();
$blocker_row = abget_blocker("referer");
$blockedreferers = explode("\r\n",$blocker_row['list']);
echo "<table align='center' border='0' cellpadding='2' cellspacing='2' bgcolor='$bgcolor2'>\n";
echo "<tr bgcolor='$bgcolor2'>\n";
echo "<td>&nbsp;</td><td align='center'><strong>"._AB_BLOCKEDREFERERS." (".count($blockedreferers).")</strong></td>\n";
echo "</tr>\n";
for ($i=0; $i < count($blockedreferers); $i++) {
  $j = $i + 1;
  echo "<tr bgcolor='$bgcolor1'>\n";
  echo "<td align='right'>&nbsp;$j&nbsp;</td>\n";
  echo "<td>&nbsp;$blockedreferers[$i]&nbsp;</td>\n";
  echo "</tr>\n";
}
echo "</table>\n";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>