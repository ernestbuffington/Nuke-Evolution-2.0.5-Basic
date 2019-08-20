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

$description = html_entity_decode($description, ENT_QUOTES);
$description = strip_tags($description);
if(!get_magic_quotes_runtime()) {
  $title = addslashes($title);
  $description = addslashes($description);
}
$query = $db->sql_query("UPDATE `".$prefix."_nsnml_lists` SET `title`='$title', `description`='$description' WHERE `lid`='$lid'");
if(!$query) {
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
  $query = $db->sql_query("OPTIMIZE TABLE `".$prefix."_nsnml_lists`");
  header("Location: ".$admin_file.".php?op=MLViewLists");
}

?>