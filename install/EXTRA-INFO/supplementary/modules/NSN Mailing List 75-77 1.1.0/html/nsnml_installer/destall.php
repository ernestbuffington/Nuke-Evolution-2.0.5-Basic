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

$pagetitle = $pagename.": Destall";
include_once(NUKE_BASE_DIR.'header.php');
title($pagetitle);
OpenTable();
echo "Operation Status!<br />\n";
echo "<hr>\n";
$message = "Everything seems to have completed succeesfully :)<br />\n";
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnml_config`");
if(!$result) { echo "- Destall ".$prefix."_nsnml_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnml_issues`");
if(!$result) { echo "- Destall ".$prefix."_nsnml_issues failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnml_lists`");
if(!$result) { echo "- Destall ".$prefix."_nsnml_lists failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnml_tracked`");
if(!$result) { echo "- Destall ".$prefix."_nsnml_tracked failed<br />\n"; $message = ""; }
$result = $db->sql_query("DROP TABLE `".$prefix."_nsnml_users`");
if(!$result) { echo "- Destall ".$prefix."_nsnml_users failed<br />\n"; $message = ""; }
echo "$message<hr>\n";
echo "Operation Complete!<br />\n";
echo _GOBACK."\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>