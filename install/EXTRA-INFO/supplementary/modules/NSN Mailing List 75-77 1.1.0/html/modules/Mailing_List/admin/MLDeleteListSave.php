<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* NSN Mailing List                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2005 by NukeScripts Network         */
/********************************************************/

$lid = intval($lid);
$query1 = $db->sql_query("DELETE FROM `".$prefix."_nsnml_lists` WHERE `lid`='$lid'");
$query2 = $db->sql_query("DELETE FROM `".$prefix."_nsnml_users` WHERE `lid`='$lid'");
$query3 = $db->sql_query("DELETE FROM `".$prefix."_nsnml_issues` WHERE `lid`='$lid'");
$query4 = $db->sql_query("DELETE FROM `".$prefix."_nsnml_tracked` WHERE `lid`='$lid'");
if(!$query1 || !$query2 || !$query3 || !$query4) {
  include_once(NUKE_BASE_DIR.'header.php');
  OpenTable();
  echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
  echo "<br /><br />";
  echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
  CloseTable();
  echo "<br />";
  OpenTable();
  $result = $db->sql_error($query);
  echo "<center><strong>".$result['code'].": ".$result['message']."</strong></center>\n";
  CloseTable();
  include_once(NUKE_BASE_DIR.'footer.php');
  return;
} else {
  $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnml_lists`");
  $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnml_users`");
  $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnml_issues`");
  $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnml_tracked`");
  header("Location: ".$admin_file.".php?op=MLViewLists");
}

?>