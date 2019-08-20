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

$pagetitle = $pagename.": Upgrade 1.0.3 to 1.1.0";
include_once(NUKE_BASE_DIR.'header.php');
title($pagetitle);
OpenTable();
echo "Operation Status!<br />\n";
echo "<hr>\n";
$message = "Everything seems to have completed succeesfully :)<br />\n";
/*$result = $db->sql_query("INSERT INTO `".$prefix."_nsnml_config` VALUES ('banner_table', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnml_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnml_config` VALUES ('download_table', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnml_config failed<br />\n"; $message = ""; }*/
$result = $db->sql_query("UPDATE `".$prefix."_nsnml_config` SET `config_value`='1.1.0' WHERE `config_name`='version_number'");
if(!$result) { echo "- Update ".$prefix."_nsnml_config failed<br />\n"; $message = ""; }
echo "$message<hr>\n";
echo "Operation Complete!<br />\n";
echo _GOBACK."\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>