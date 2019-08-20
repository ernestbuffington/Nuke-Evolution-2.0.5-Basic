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
$query = $db->sql_query("INSERT `".$prefix."_nsnml_lists` VALUES (NULL, '$title', '$description')");
if(!$query) {
  $pagetitle = " - "._ML_ADMIN." ".$ml_config['version_number'];
  include_once(NUKE_BASE_DIR.'header.php');
  OpenTable();
  echo "<div align=\"center\">\n<a href=\"$admin_file.php?op=MLAdmin\">" . _ML_ADMIN_HEADER . "</a></div>\n";
  echo "<br /><br />";
  echo "<div align=\"center\">\n[ <a href=\"$admin_file.php\">" . _ML_RETURNMAIN . "</a> ]</div>\n";
  CloseTable();
  echo "<br />";
  title(_ML_ADMIN." ".$ml_config['version_number']);
  ML_Admin();
  echo "<br />\n";
  OpenTable();
  $result = $db->sql_error($query);
  echo "<center><strong>".$result['code'].": ".$result['message']."</strong></center>\n";
  CloseTable();
  include_once(NUKE_BASE_DIR.'footer.php');
  exit;
}
header("Location: ".$admin_file.".php?op=MLViewLists");

?>