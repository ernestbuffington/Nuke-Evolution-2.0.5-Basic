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

$pagetitle = $pagename.": Install";
include_once(NUKE_BASE_DIR.'header.php');
title($pagetitle);
OpenTable();
echo "Operation Status!<br />\n";
echo "<hr>\n";
$message = "Everything seems to have completed successfully :)<br />\n";
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnml_config` (`config_name` varchar(255) NOT NULL default '', `config_value` tinytext NOT NULL, PRIMARY KEY (`config_name`))");
if(!$result) { echo "- Create ".$prefix."_nsnml_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnml_config` VALUES ('date_format', 'Y-m-d H:i:s')");
if(!$result) { echo "- Insert into ".$prefix."_nsnml_config failed<br />\n"; $message = ""; }
/*$result = $db->sql_query("INSERT INTO `".$prefix."_nsnml_config` VALUES ('banner_table', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnml_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnml_config` VALUES ('download_table', '0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnml_config failed<br />\n"; $message = ""; }*/
$result = $db->sql_query("INSERT INTO `".$prefix."_nsnml_config` VALUES ('version_number', '1.1.0')");
if(!$result) { echo "- Insert into ".$prefix."_nsnml_config failed<br />\n"; $message = ""; }
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnml_issues` (`nid` int(11) NOT NULL auto_increment, `lid` int(11) NOT NULL default '0', `subject` varchar(255) default NULL, `text_plain` mediumtext, `text_html` mediumtext, `sent` int(20) NOT NULL default '0', PRIMARY KEY (`nid`))");
if(!$result) { echo "- Create ".$prefix."_nsnml_issues failed<br />\n"; $message = ""; }
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnml_lists` (`lid` int(11) NOT NULL auto_increment, `title` varchar(30) default NULL, `description` text, PRIMARY KEY (`lid`))");
if(!$result) { echo "- Create ".$prefix."_nsnml_lists failed<br />\n"; $message = ""; }
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnml_tracked` (`tid` int(11) NOT NULL auto_increment, `mid` int(11) NOT NULL default '0', `nid` int(11) NOT NULL default '0', `lid` int(11) NOT NULL default '0', `sent` int(20) NOT NULL default '0', PRIMARY KEY (`tid`))");
if(!$result) { echo "- Create ".$prefix."_nsnml_tracked failed<br />\n"; $message = ""; }
$result = $db->sql_query("CREATE TABLE `".$prefix."_nsnml_users` (`mid` int(11) NOT NULL auto_increment, `lid` int(11) NOT NULL default '0', `email` varchar(100) NOT NULL default '', `active` int(2) NOT NULL default '0', `html` int(2) NOT NULL default '0', `act_key` int(11) NOT NULL default '0', `joined` int(20) NOT NULL default '0', PRIMARY KEY (`mid`))");
if(!$result) { echo "- Create ".$prefix."_nsnml_users failed<br />\n"; $message = ""; }
echo "$message<hr>\n";
echo "Operation Complete!<br />\n";
echo _GOBACK."\n";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>