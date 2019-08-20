<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/*************************************************************************/
/* ForumNews Advance v3.0                                      COPYRIGHT */
/*                                                                       */
/* Copyright (c) 2002 - 2006 by http://www.code-area51.com               */
/*     Mighty_Y - Yannick Reekmans           (webmaster@code-area51.com) */
/*                                                                       */
/* See Code-Area51.com for detailed information on the ForumNews Advance */
/*                                                                       */
/*************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/26/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
    die ("You can't access this file directly...");
}

define('NUKE_BASE_MODULES', preg_replace('/modules/i', '', dirname(dirname(__FILE__))));

include_once(NUKE_BASE_MODULES.'mainfile.php');
define('INDEX_FILE', true);
$module_name = basename(dirname(__FILE__));
get_lang($module_name);
if (!is_admin()) { die ("Sorry you are not an administrator, You can not install this module"); }
$version = "3.0";
switch($op) {

    default:
        $pagetitle = "ForumNews Advance v".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
        echo "<form action='modules.php?name=".$module_name."&amp;file=install' method='post'>\n";
        echo "<tr><td>This script will install or uninstall the tables for $pagetitle.</td></tr>\n";
        echo "<tr><td><strong>Backup data tables before going on!</strong></td></tr>\n";
        echo "<tr><td><select name='op'>\n";
        echo "<option value=''>---- Install Options ----</option>\n";
        echo "<option value='install'>First Time Install of ForumNews Advance (v".$version.")</option>\n";
        echo "<option value=''>---- Update Options ----</option>\n";
        echo "<option value='update100'>Upgrade ForumNews Advance from 1.0.0 to latest</option>\n";
        echo "<option value='update110'>Upgrade ForumNews Advance from 1.1.0 to latest</option>\n";
        echo "<option value='update132'>Upgrade ForumNews Advance from 1.3.2 to latest</option>\n";
        echo "<option value='update20'>Upgrade ForumNews Advance from 2.0 to latest</option>\n";
        echo "<option value='update202'>Upgrade ForumNews Advance from 2.0.2 to latest</option>\n";
        echo "<option value='update203'>Upgrade ForumNews Advance from 2.0.3 to latest</option>\n";
        echo "<option value='update204'>Upgrade ForumNews Advance from 2.0.4 to latest</option>\n";
        echo "<option value='update21'>Upgrade ForumNews Advance from 2.1 to latest</option>\n";
        echo "<option value='update22'>Upgrade ForumNews Advance from 2.2 to latest</option>\n";
        echo "<option value=''>---- Uninstall Options ----</option>\n";
        echo "<option value='uninstall'>Uninstall $pagetitle</option>\n";
        echo "</select><input type='submit' value='Adjust DB'></td></tr>\n";
        echo "<tr><td><strong>Once you have finished with this script, delete it from your server!</strong></td></tr>\n";
        echo "</form>";
        echo "</table>\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;

    case "install":
        $pagetitle = "ForumNews Advance v".$version.": Install";
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "CREATE TABLE ".$prefix."_bbnews (
                news_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
                news_category VARCHAR( 70 ) NOT NULL ,
                news_image VARCHAR( 70 ) NOT NULL ,
                PRIMARY KEY ( news_id )
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_forums (
                forum_id smallint(5) unsigned NOT NULL default '0',
                enabled tinyint(1) NOT NULL default '0',
                approve_posts tinyint(1) NOT NULL default '0',
                approve_topics tinyint(1) NOT NULL default '0',
                approve_users tinyint(1) NOT NULL default '0',
                approve_poste tinyint(1) NOT NULL default '0',
                approve_topice tinyint(1) NOT NULL default '0',
                approve_notify tinyint(1) NOT NULL default '0',
                approve_notify_approval tinyint(1) NOT NULL default '0',
                approve_notify_type tinyint(1) NOT NULL default '0',
                approve_notify_message tinyint(1) NOT NULL default '0',
                approve_notify_message_len smallint(5) NOT NULL default '500',
                approve_moderators varchar(255) NOT NULL default '0',
                approve_notify_posts tinyint(1) NOT NULL default '0',
                approve_notify_poste tinyint(1) NOT NULL default '0',
                approve_notify_topics tinyint(1) NOT NULL default '0',
                approve_notify_topice tinyint(1) NOT NULL default '0',
                forum_hide_unapproved_topics tinyint(1) NOT NULL default '0',
                forum_hide_unapproved_posts tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (forum_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_posts (
                approval_id mediumint(8) unsigned NOT NULL auto_increment,
                topic_id mediumint(8) unsigned NOT NULL default '0',
                post_id mediumint(8) unsigned NOT NULL default '0',
                is_topic tinyint(1) NOT NULL default '0',
                is_post tinyint(1) NOT NULL default '0',
                poster_id mediumint(8) NOT NULL default '0',
                PRIMARY KEY  (approval_id),
                KEY post_id (post_id),
                KEY topic_id (topic_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_topics (
                topic_id mediumint(8) unsigned NOT NULL default '0',
                approve_moderate tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (topic_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_users (
                user_id mediumint(8) NOT NULL default '0',
                approve_moderate tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (user_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO ".$prefix."_bbapprove_users ( user_id, approve_moderate ) VALUES (-1, 1);";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "ALTER TABLE ".$prefix."_bbtopics ADD news_id INT UNSIGNED DEFAULT '0' NOT NULL;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "ALTER TABLE ".$prefix."_bbtopics ADD INDEX ( news_id );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "ALTER TABLE ".$prefix."_bbforums ADD auth_news TINYINT( 2 ) DEFAULT '2' NOT NULL;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "ALTER TABLE ".$prefix."_bbauth_access ADD auth_news TINYINT( 1 ) DEFAULT '0' NOT NULL;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO ".$prefix."_bbconfig ( config_name , config_value ) VALUES ( 'allow_news', '1' );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "update100":
        $pagetitle = "ForumNews Advance: Update from 1.0.0 to ".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "CREATE TABLE ".$prefix."_bbapprove_posts (
                approval_id mediumint(8) unsigned NOT NULL auto_increment,
                topic_id mediumint(8) unsigned NOT NULL default '0',
                post_id mediumint(8) unsigned NOT NULL default '0',
                is_topic tinyint(1) NOT NULL default '0',
                is_post tinyint(1) NOT NULL default '0',
                poster_id mediumint(8) NOT NULL default '0',
                PRIMARY KEY  (approval_id),
                KEY post_id (post_id),
                KEY topic_id (topic_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_topics (
                topic_id mediumint(8) unsigned NOT NULL default '0',
                approve_moderate tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (topic_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_users (
                user_id mediumint(8) NOT NULL default '0',
                approve_moderate tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (user_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_forums (
                forum_id smallint(5) unsigned NOT NULL default '0',
                enabled tinyint(1) NOT NULL default '0',
                approve_posts tinyint(1) NOT NULL default '0',
                approve_topics tinyint(1) NOT NULL default '0',
                approve_users tinyint(1) NOT NULL default '0',
                approve_poste tinyint(1) NOT NULL default '0',
                approve_topice tinyint(1) NOT NULL default '0',
                approve_notify tinyint(1) NOT NULL default '0',
                approve_notify_approval tinyint(1) NOT NULL default '0',
                approve_notify_type tinyint(1) NOT NULL default '0',
                approve_notify_message tinyint(1) NOT NULL default '0',
                approve_notify_message_len smallint(5) NOT NULL default '500',
                approve_moderators varchar(255) NOT NULL default '0',
                approve_notify_posts tinyint(1) NOT NULL default '0',
                approve_notify_poste tinyint(1) NOT NULL default '0',
                approve_notify_topics tinyint(1) NOT NULL default '0',
                approve_notify_topice tinyint(1) NOT NULL default '0',
                forum_hide_unapproved_topics tinyint(1) NOT NULL default '0',
                forum_hide_unapproved_posts tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (forum_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_title_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_image_desc';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_image';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_cat';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_ttl';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_language';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_desc';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'allow_rss';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_path';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO ".$prefix."_bbapprove_users ( user_id, approve_moderate ) VALUES (-1, 1);";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><a href=\"modules.php?name=".$module_name."&amp;file=install&amp;op=update110132\">Continue with the next upgrade step!</a><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "update110":
        $pagetitle = "ForumNews Advance: Update from 1.1.0 to ".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "CREATE TABLE ".$prefix."_bbapprove_posts (
                approval_id mediumint(8) unsigned NOT NULL auto_increment,
                topic_id mediumint(8) unsigned NOT NULL default '0',
                post_id mediumint(8) unsigned NOT NULL default '0',
                is_topic tinyint(1) NOT NULL default '0',
                is_post tinyint(1) NOT NULL default '0',
                poster_id mediumint(8) NOT NULL default '0',
                PRIMARY KEY  (approval_id),
                KEY post_id (post_id),
                KEY topic_id (topic_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_topics (
                topic_id mediumint(8) unsigned NOT NULL default '0',
                approve_moderate tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (topic_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_users (
                user_id mediumint(8) NOT NULL default '0',
                approve_moderate tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (user_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_forums (
                forum_id smallint(5) unsigned NOT NULL default '0',
                enabled tinyint(1) NOT NULL default '0',
                approve_posts tinyint(1) NOT NULL default '0',
                approve_topics tinyint(1) NOT NULL default '0',
                approve_users tinyint(1) NOT NULL default '0',
                approve_poste tinyint(1) NOT NULL default '0',
                approve_topice tinyint(1) NOT NULL default '0',
                approve_notify tinyint(1) NOT NULL default '0',
                approve_notify_approval tinyint(1) NOT NULL default '0',
                approve_notify_type tinyint(1) NOT NULL default '0',
                approve_notify_message tinyint(1) NOT NULL default '0',
                approve_notify_message_len smallint(5) NOT NULL default '500',
                approve_moderators varchar(255) NOT NULL default '0',
                approve_notify_posts tinyint(1) NOT NULL default '0',
                approve_notify_poste tinyint(1) NOT NULL default '0',
                approve_notify_topics tinyint(1) NOT NULL default '0',
                approve_notify_topice tinyint(1) NOT NULL default '0',
                forum_hide_unapproved_topics tinyint(1) NOT NULL default '0',
                forum_hide_unapproved_posts tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (forum_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_title_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_image_desc';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_image';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_cat';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_ttl';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_language';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_desc';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'allow_rss';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_path';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_num';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO ".$prefix."_bbapprove_users ( user_id, approve_moderate ) VALUES (-1, 1);";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
       $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><a href=\"modules.php?name=".$module_name."&amp;file=install&amp;op=update13222\">Continue with the next upgrade step!</a><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "update132":
        $pagetitle = "ForumNews Advance: Update from 1.3.2 to ".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "DROP TABLE IF EXISTS ".$prefix."_bbapprove_forums;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE ".$prefix."_bbapprove_forums (
                forum_id smallint(5) unsigned NOT NULL default '0',
                enabled tinyint(1) NOT NULL default '0',
                approve_posts tinyint(1) NOT NULL default '0',
                approve_topics tinyint(1) NOT NULL default '0',
                approve_users tinyint(1) NOT NULL default '0',
                approve_poste tinyint(1) NOT NULL default '0',
                approve_topice tinyint(1) NOT NULL default '0',
                approve_notify tinyint(1) NOT NULL default '0',
                approve_notify_approval tinyint(1) NOT NULL default '0',
                approve_notify_type tinyint(1) NOT NULL default '0',
                approve_notify_message tinyint(1) NOT NULL default '0',
                approve_notify_message_len smallint(5) NOT NULL default '500',
                approve_moderators varchar(255) NOT NULL default '0',
                approve_notify_posts tinyint(1) NOT NULL default '0',
                approve_notify_poste tinyint(1) NOT NULL default '0',
                approve_notify_topics tinyint(1) NOT NULL default '0',
                approve_notify_topice tinyint(1) NOT NULL default '0',
                forum_hide_unapproved_topics tinyint(1) NOT NULL default '0',
                forum_hide_unapproved_posts tinyint(1) NOT NULL default '0',
                PRIMARY KEY  (forum_id)
                ) TYPE=MyISAM;";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_title_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'sig_enable';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_image_desc';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_image';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_cat';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_ttl';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_language';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_rss_desc';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'allow_rss';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_path';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_num';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO ".$prefix."_bbapprove_users ( user_id, approve_moderate ) VALUES (-1, 1);";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><a href=\"modules.php?name=".$module_name."&amp;file=install&amp;op=update2230\">Continue with the next upgrade step!</a><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "update20":
        $pagetitle = "ForumNews Advance: Update from 2.0 to ".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "update202":
        $pagetitle = "ForumNews Advance: Update from 2.0.2 to ".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "update203":
        $pagetitle = "ForumNews Advance: Update from 2.0.3 to ".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "update204":
        $pagetitle = "ForumNews Advance: Update from 2.0.4 to ".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "update21":
        $pagetitle = "ForumNews Advance: Update from 2.1 to ".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "update22":
        $pagetitle = "ForumNews Advance: Update from 2.2 to ".$version;
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "CREATE TABLE `".$prefix."_fna_config` (
                `newsnumber` INT( 2 ) DEFAULT '10' NOT NULL ,
                `allownews` TINYINT( 1 ) DEFAULT '1' NOT NULL ,
                `news_trim` VARCHAR( 255 ) DEFAULT '0' NOT NULL,
                `rss` TINYINT( 1 ) DEFAULT '1' NOT NULL,
                `timezone` TINYINT( 4 ) DEFAULT '10' NOT NULL,
                `version` INT( 2 ) DEFAULT '10' NOT NULL
                );";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "INSERT INTO `".$prefix."_fna_config` ( `newsnumber` , `allownews` , `news_trim` , `rss` , `timezone` , `version` ) VALUES ('10', '1', '0', '1', '10', '$version');";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'news_item_trim';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-1)\">Go Back</a> ]\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
    case "uninstall":
        $pagetitle = "ForumNews Advance v".$version.": Uninstall";
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();
        if($ok==1){
        echo "Operation Status!<br />\n";
        echo "<hr>\n";
        $error = 0;
        $sql = "DROP TABLE ".$prefix."_fna_config";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DROP TABLE ".$prefix."_bbnews";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DROP TABLE ".$prefix."_bbapprove_forums";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DROP TABLE ".$prefix."_bbapprove_posts";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DROP TABLE ".$prefix."_bbapprove_topics";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DROP TABLE ".$prefix."_bbapprove_users";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "ALTER TABLE ".$prefix."_bbtopics DROP news_id";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "ALTER TABLE ".$prefix."_bbforums DROP auth_news";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "ALTER TABLE ".$prefix."_bbauth_access DROP auth_news";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        $sql = "DELETE FROM ".$prefix."_bbconfig where config_name = 'allow_news';";
        $result = $db->sql_query($sql);
        if (!$result) { echo "- ".$sql." => <font color=red>Query failed</font><br />\n"; $error++;} else { echo "- ".$sql." => <font color=green>Query succeeded</font><br />\n"; }
        echo "<hr>\n";
        if($error==0){
        echo "Operation Complete!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }else{
        echo "There were ".$error." error(s)! Fix them First!<br /><font size=16><strong>NOW DELETE THIS FILE</strong></font><br />\n";
        }
        echo "[ <a href=\"javascript:history.go(-2)\">Go Back</a> ]\n";
        }else{
        echo "Are you sure you want to uninstall 'ForumNews Advance v".$version."'??<br />You will lose all data in the tables!!<br /><br />";
        echo "<center><a href=\"modules.php?name=".$module_name."&amp;file=install&amp;op=uninstall&amp;ok=1\">Yes</a> | <a href=\"modules.php?name=".$module_name."&amp;file=install\">No</a></center>";
        }
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;
}
?>