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

function stmain_menu() {
  global $db, $prefix, $module_name;
  OpenTable();
  $checkrow = $db->sql_numrows($db->sql_query("SELECT * FROM `".$prefix."_nsnst_ip2country`"));
  echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
  echo "<tr><td><a href='modules.php?name=$module_name&amp;op=STIPS'>"._AB_BLOCKEDIPS."</a></td></tr>\n";
  echo "<tr><td><a href='modules.php?name=$module_name&amp;op=STRanges'>"._AB_BLOCKEDRANGES."</a></td></tr>\n";
  echo "<tr><td><a href='modules.php?name=$module_name&amp;op=STReferers'>"._AB_BLOCKEDREFERERS."</a></td></tr>\n";
  if($checkrow > 0) { echo "<tr><td><a href='modules.php?name=$module_name&amp;op=STIP2C'>"._AB_IP2COUNTRY."</a></td>\n"; }
  echo "</table>\n";
  CloseTable();
}

?>