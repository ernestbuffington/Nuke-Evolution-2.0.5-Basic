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
	
	// Table alteration for Moderated Comments to add the karma system
	$db->sql_query("ALTER TABLE ".$user_prefix."_users Drop karma");
	$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_comments_moderated");
	$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_pollcomments_moderated");
	$db->sql_query("DROP TABLE IF EXISTS ".$prefix."_reviews_comments_moderated");
	
	// News Comments table alteration for moderation system
	$db->sql_query("ALTER TABLE ".$prefix."_comments DROP last_moderation_ip");
	
	// Surveys Comments table alteration for moderation system
	$db->sql_query("ALTER TABLE ".$prefix."_pollcomments DROP last_moderation_ip");
	$db->sql_query("ALTER TABLE ".$prefix."_poll_desc DROP comments");
	
	// Articles rating system backdate
	$db->sql_query("ALTER TABLE ".$prefix."_stories DROP rating_ip");
	
	// Topic image field length Decreased
	$db->sql_query("ALTER TABLE ".$prefix."_topics CHANGE topicimage topicimage VARCHAR(20) NOT NULL");
	
	// Forums Table Backdate
	$db->sql_query("UPDATE ".$prefix."_bbconfig SET config_value='.0.10' where config_name='version'");
	
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