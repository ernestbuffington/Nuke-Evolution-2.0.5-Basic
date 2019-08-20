<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright (c) 2000-2006 by NukeScripts Network         */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

$pagetitle = _AB_NUKESENTINEL.": "._AB_VIEWTEMPLATE;
if(empty($template)) { $template = "abuse_default.tpl"; }
//$filename = "abuse/".$template;
$filename = NUKE_INCLUDE_DIR."nukesentinel/abuse/".$template;
if(!file_exists($filename)) { $filename = "abuse/abuse_default.tpl"; }
include(NUKE_BASE_DIR."header.php");
OpenTable();
OpenMenu(_AB_VIEWTEMPLATE);
ipbanmenu();
CarryMenu();
templatemenu();
CloseMenu();
CloseTable();
echo "<br />\n";
OpenTable();
echo "<center class='title'>"._AB_SOURCEOF." $template<br /></center>\n";
echo "<center class='content'><strong>"._AB_NOTEDITOR."<strong></center><br />\n";
$handle = @fopen($filename, "r");
$templatefile = fread($handle, filesize($filename));
@fclose($handle);
echo "<center><textarea rows='30' cols='70'>".$templatefile."</textarea></center>\n";
CloseTable();
include(NUKE_BASE_DIR."footer.php");

?>