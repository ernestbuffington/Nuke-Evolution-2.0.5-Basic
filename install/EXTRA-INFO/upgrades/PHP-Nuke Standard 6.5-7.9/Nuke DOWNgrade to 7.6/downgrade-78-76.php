<?php

########################################################
# File to Downgrade from PHP-Nuke 7.8 to PHP-Nuke 7.6  #
# After you used this file, you can safely delete it.  #
########################################################
#            -= WARNING: PLEASE READ =-                #
#                                                      #
# NOTE: This file uses config.php to retrieve needed   #
# variables values. So, to do the upgrade PLEASE copy  #
# this file in your server root directory and execute  #
# it from your browser.                                #
########################################################
#     Made By Platinum @ www.GamersDatabase.com        #
#                for Php Nuke Evolution                #
#                www.nuke-evolution.com                #
#                                                      #
########################################################

require_once(dirname(__FILE__) . '/mainfile.php');

$module_name = basename(dirname(__FILE__));

include(dirname(__FILE__) . "/header.php");

global $admin;

if (!is_admin($admin)) {
	OpenTable();
	echo "<center>Access Denied</center>";
	CloseTable();
} else {
	$index = 0;
	
	// Table Removal and alteration for Moderated Comments to drop the karma system
	$db->sql_query("ALTER TABLE ".$user_prefix."_users Drop karma ");
	$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_comments_moderated");
	$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_pollcomments_moderated");
	$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_reviews_comments_moderated");
	
	// News Comments table alteration for moderation system
	$db->sql_query("ALTER TABLE ".$prefix."_comments DROP last_moderation_ip ");
	
	// Surveys Comments table alteration for moderation system
	$db->sql_query("ALTER TABLE ".$prefix."_pollcomments DROP last_moderation_ip ");
	$db->sql_query("ALTER TABLE ".$prefix."_poll_desc DROP comments ");
	
	// Articles rating system Backdate
	$db->sql_query("ALTER TABLE ".$prefix."_stories DROP rating_ip ");
	
	// Topic image field length Decreased
	$db->sql_query("ALTER TABLE ".$prefix."_topics CHANGE topicimage topicimage varchar(20) default NULL");
	
	// Forums Table Backdate *
	$db->sql_query("UPDATE ".$prefix."_bbconfig SET config_value='.0.10' WHERE config_name='version'");
	$db->sql_query("DROP TABLE IF EXISTS".$prefix."_bbsessions session_admin tinyint(2) DEFAULT '0' NOT NULL");
	$db->sql_query("CREATE TABLE ".$prefix."_bbsessions (session_id char(32) NOT NULL default '', session_user_id mediumint(8) NOT NULL default '0', session_start int(11) NOT NULL default '0', session_time int(11) NOT NULL default '0', session_ip char(8) NOT NULL default '0', session_page int(11) NOT NULL default '0', session_logged_in tinyint(1) NOT NULL default '0', PRIMARY KEY  (session_id), KEY session_user_id (session_user_id), KEY session_id_ip_user_id (session_id,session_ip,session_user_id))");
	
	
	// Banners Table Alteration
	$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_banner_positions"); 
	$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_banner_terms");
	$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_banner_plans");
	$db->sql_query("ALTER TABLE ".$prefix."_banner_clients RENAME nuke_bannerclient");
	$db->sql_query("ALTER TABLE ".$prefix."_banner DROP ad_class , DROP ad_code , DROP ad_width , DROP ad_height ");
	$db->sql_query("ALTER TABLE ".$prefix."_banner CHANGE type position INT( 10 ) DEFAULT '0' NOT NULL");
	$db->sql_query("ALTER TABLE ".$prefix."_banner DROP name");
	$db->sql_query("ALTER TABLE ".$prefix."_banner CHANGE type tinyint(1) NOT NULL default '0'");
	
	
	
	// Tables user field length defixes 
	$db->sql_query("alter table ".$prefix."_stories change informant informant varchar(20) NOT NULL default ''"); 
	$db->sql_query("alter table ".$prefix."_stories change aid aid varchar(30) NOT NULL default ''"); 
	$db->sql_query("alter table ".$prefix."_autonews change informant informant varchar(20) NOT NULL default ''"); 
	$db->sql_query("alter table ".$prefix."_autonews change aid aid varchar(30) NOT NULL default ''"); 
	$db->sql_query("alter table ".$prefix."_reviews change reviewer reviewer varchar(20) default NULL"); 
	$db->sql_query("alter table ".$prefix."_reviews_add change reviewer reviewer varchar(20) not null default ''"); 
	
	
	// Countries and Cities Table Drop
	// It's used in the banners system and will be used in the future. Very useful for some modules developers
	
	$db->sql_query("DROP TABLE IF EXISTS nuke_cities");
	
	// PHP-Nuke copyright notice modification. (c) year changed.
	$db->sql_query("UPDATE ".$prefix."_config SET copyright='<a href=\"http://phpnuke.org\"><font class=\"footmsg_l\">PHP-Nuke</font></a> Copyright &copy; 2006 by Francisco Burzi. This is free software, and you may redistribute it under the <a href=\"http://phpnuke.org/files/gpl.txt\"><font class=\"footmsg_l\">GPL</font></a>. PHP-Nuke comes with absolutely no warranty, for details, see the <a href=\"http://phpnuke.org/files/gpl.txt\"><font class=\"footmsg_l\">license</font></a>.'");
	
	
	// PHP-Nuke Version Number Update
	$db->sql_query("UPDATE ".$prefix."_config SET Version_Num='7.6'");
	
	OpenTable();
	
	echo "<br />PHP-Nuke Update finished!<br /><br />"
	    ."Your Php Nuke Version is now 7.6<br /><br />"
	    ."You should now delete this Downgrade file from your server.<br /><br />";

	CloseTable();
}

include(dirname(__FILE__) . "/footer.php");

?>