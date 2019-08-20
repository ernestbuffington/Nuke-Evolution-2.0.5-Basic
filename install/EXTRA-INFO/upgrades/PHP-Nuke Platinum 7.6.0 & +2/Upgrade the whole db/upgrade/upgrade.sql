ALTER TABLE `nuke_authors` DROP `radminblocker`;

ALTER TABLE `nuke_autonews` ADD `ticon` TINYINT( 1 ) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_autonews` ADD `writes` TINYINT( 1 ) DEFAULT '1' NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `informant` `informant` VARCHAR(40) NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `aid` `aid` VARCHAR(30) NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `anid` `anid` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `nuke_autonews` CHANGE `topic` `topic` INT(11) DEFAULT '1' NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `ihome` `ihome` TINYINT(4) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `alanguage` `alanguage` VARCHAR(30) NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `acomm` `acomm` TINYINT(4) DEFAULT '0' NOT NULL;

ALTER TABLE `nuke_bbadvanced_username_color` ADD `group_weight` SMALLINT( 2 ) DEFAULT '0' NOT NULL;

INSERT INTO `nuke_bbadvanced_username_color` VALUES ('', 'Administrators', 'FFA34F', 1);
INSERT INTO `nuke_bbadvanced_username_color` VALUES ('', 'Moderators', '006600', 2);

UPDATE `nuke_bbattachments_config` SET `config_value` = 'modules/Forums/images/icon_clip.gif' WHERE `config_name` = 'upload_img';
UPDATE `nuke_bbattachments_config` SET `config_value` = 'modules/Forums/images/icon_clip.gif' WHERE `config_name` = 'topic_icon';
UPDATE `nuke_bbattachments_config` SET `config_value` = '2.4.5' WHERE `config_name` = 'attach_version';

ALTER TABLE `nuke_bbauth_access` CHANGE `auth_globalannounce` `auth_globalannounce` TINYINT( 1 ) NOT NULL DEFAULT '0';

ALTER TABLE `nuke_bbbanlist` DROP `ban_expire_time`;
ALTER TABLE `nuke_bbbanlist` DROP `ban_by_userid`;
ALTER TABLE `nuke_bbbanlist` DROP `ban_priv_reason`;
ALTER TABLE `nuke_bbbanlist` DROP `ban_pub_reason_mode`;
ALTER TABLE `nuke_bbbanlist` DROP `ban_pub_reason`;

UPDATE `nuke_bbconfig` SET `config_value` = '.0.22' WHERE `config_name` = 'version';
UPDATE `nuke_bbconfig` SET `config_value` = '0' WHERE `config_name` = 'enable_confirm';

INSERT INTO `nuke_bbconfig` VALUES ('board_disable_adminview', '1');
INSERT INTO `nuke_bbconfig` VALUES ('board_disable_msg', 'The board is currently disabled...');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_lines', '5');
INSERT INTO `nuke_bbconfig` VALUES ('sig_wordwrap', '100');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_font_sizes', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_min_font_size', '7');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_font_size', '12');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_bold', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_italic', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_underline', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_colors', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_quote', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_code', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_list', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_url', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_images', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_images', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_img_height', '75');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_img_width', '500');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_on_max_img_size_fail', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_img_files_size', '10');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_img_av_files_size', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_exotic_bbcodes_disallowed', '');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_smilies', '1');
INSERT INTO `nuke_bbconfig` VALUES ('report_email', '1');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_enable', '1');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_min', '50');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_max', '99');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_def', '70');
INSERT INTO `nuke_bbconfig` VALUES ('anonymous_show_sqr', '0');
INSERT INTO `nuke_bbconfig` VALUES ('anonymous_sqr_mode', '0');
INSERT INTO `nuke_bbconfig` VALUES ('quick_search_enable', '1');
INSERT INTO `nuke_bbconfig` VALUES ('default_avatar_guests_url', 'modules/Forums/images/avatars/blank.gif');
INSERT INTO `nuke_bbconfig` VALUES ('default_avatar_users_url', 'modules/Forums/images/avatars/blank.gif');
INSERT INTO `nuke_bbconfig` VALUES ('default_avatar_set', '2');
INSERT INTO `nuke_bbconfig` VALUES ('pm_allow_threshold', '0');
INSERT INTO `nuke_bbconfig` VALUES ('welcome_pm', '0');
INSERT INTO `nuke_bbconfig` VALUES ('default_time_mode', '6');
INSERT INTO `nuke_bbconfig` VALUES ('default_dst_time_lag', '60');
INSERT INTO `nuke_bbconfig` VALUES ('glance_show', '1');
INSERT INTO `nuke_bbconfig` VALUES ('glance_show_override', '1');
INSERT INTO `nuke_bbconfig` VALUES ('glance_news_id', '0');
INSERT INTO `nuke_bbconfig` VALUES ('glance_num_news', '0');
INSERT INTO `nuke_bbconfig` VALUES ('glance_num', '6');
INSERT INTO `nuke_bbconfig` VALUES ('glance_ignore_forums', '0');
INSERT INTO `nuke_bbconfig` VALUES ('glance_table_width', '100%');
INSERT INTO `nuke_bbconfig` VALUES ('glance_auth_read', '1');
INSERT INTO `nuke_bbconfig` VALUES ('glance_topic_length', '0');
INSERT INTO `nuke_bbconfig` VALUES ('online_time', '300');
INSERT INTO `nuke_bbconfig` VALUES ('display_users_today', '0');
INSERT INTO `nuke_bbconfig` VALUES ('locked_view_open', 'Locked: <strike>');
INSERT INTO `nuke_bbconfig` VALUES ('locked_view_close', '</strike>');
INSERT INTO `nuke_bbconfig` VALUES ('global_view_open', 'Global Announcement:');
INSERT INTO `nuke_bbconfig` VALUES ('global_view_close', '');
INSERT INTO `nuke_bbconfig` VALUES ('announce_view_open', 'Announcement:');
INSERT INTO `nuke_bbconfig` VALUES ('announce_view_close', '');
INSERT INTO `nuke_bbconfig` VALUES ('sticky_view_open', 'Sticky:');
INSERT INTO `nuke_bbconfig` VALUES ('sticky_view_close', '');
INSERT INTO `nuke_bbconfig` VALUES ('moved_view_open', 'Moved:');
INSERT INTO `nuke_bbconfig` VALUES ('moved_view_close', '');
INSERT INTO `nuke_bbconfig` VALUES ('initial_group_id', '5');
INSERT INTO `nuke_bbconfig` VALUES ('hide_links', '0');
INSERT INTO `nuke_bbconfig` VALUES ('hide_emails', '0');
INSERT INTO `nuke_bbconfig` VALUES ('hide_images', '0');
INSERT INTO `nuke_bbconfig` VALUES ('use_dhtml', '1');
INSERT INTO `nuke_bbconfig` VALUES ('anonymous_open_sqr', '0');
INSERT INTO `nuke_bbconfig` VALUES ('smilies_in_titles', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_edited_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_locked_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_unlocked_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_splitted_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_moved_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('logs_view_level', '2');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmArchive', '0');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmVersion', '1.6.0');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmView', '0');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmRows', '25');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmIP', '1');
INSERT INTO `nuke_bbconfig` VALUES ('image_resize_width', '400');
INSERT INTO `nuke_bbconfig` VALUES ('image_resize_height', '400');
INSERT INTO `nuke_bbconfig` VALUES ('use_theme_style', '1');
INSERT INTO `nuke_bbconfig` VALUES ('allow_autologin','1');
INSERT INTO `nuke_bbconfig` VALUES ('max_autologin_time','0');
INSERT INTO `nuke_bbconfig` VALUES ('max_login_attempts', '5');
INSERT INTO `nuke_bbconfig` VALUES ('login_reset_time', '30');
INSERT INTO `nuke_bbconfig` VALUES ('search_flood_interval', '15');
INSERT INTO `nuke_bbconfig` VALUES ('show_sig_once', '0');
INSERT INTO `nuke_bbconfig` VALUES ('show_avatar_once', '0');
INSERT INTO `nuke_bbconfig` VALUES ('show_rank_once', '0');
INSERT INTO `nuke_bbconfig` VALUES ('loginpage', '1');
INSERT INTO `nuke_bbconfig` VALUES ('rand_seed', '0');

UPDATE `nuke_bbconfig` SET `config_value` = 'nukeevo' WHERE `config_name` = 'cookie_name';

INSERT INTO `nuke_bbforbidden_extensions` VALUES ('', 'com');
INSERT INTO `nuke_bbforbidden_extensions` VALUES ('', 'bat');
INSERT INTO `nuke_bbforbidden_extensions` VALUES ('', 'scr');

ALTER TABLE `nuke_bbforums` ADD `forum_display_sort` TINYINT( 1 ) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_bbforums` ADD `forum_display_order` TINYINT( 1 ) DEFAULT '0' NOT NULL ;

ALTER TABLE `nuke_bbgroups` ADD `group_allow_pm` tinyint(2) NOT NULL default '5';
ALTER TABLE `nuke_bbgroups` ADD `group_color` varchar(15) NOT NULL default '';
ALTER TABLE `nuke_bbgroups` ADD `group_rank` varchar(5) NOT NULL default '0';
ALTER TABLE `nuke_bbgroups` ADD `max_inbox` mediumint( 10 ) NOT NULL default '100';
ALTER TABLE `nuke_bbgroups` ADD `max_sentbox` mediumint( 10 ) NOT NULL default '100';
ALTER TABLE `nuke_bbgroups` ADD `max_savebox` mediumint( 10 ) NOT NULL default '100';
ALTER TABLE `nuke_bbgroups` ADD `override_max_inbox` tinyint( 1 ) NOT NULL default '0';
ALTER TABLE `nuke_bbgroups` ADD `override_max_sentbox` tinyint( 1 ) NOT NULL default '0';
ALTER TABLE `nuke_bbgroups` ADD `override_max_savebox` tinyint( 1 ) NOT NULL default '0';
ALTER TABLE `nuke_bbgroups` ADD `group_count` INT( 4 ) UNSIGNED NOT NULL DEFAULT '99999999', ADD `group_count_max` INT( 4 ) UNSIGNED NOT NULL DEFAULT '99999999', ADD `group_count_enable` SMALLINT( 2 ) UNSIGNED NOT NULL DEFAULT '0';

INSERT INTO `nuke_bbgroups` VALUES (5, 0, 'Users', 'Default Usergroup', 2, 0, 5, '', '', 0, 0, 0, 0, 0, 0,'99999999','99999999','0');

ALTER TABLE `nuke_bbranks` DROP `rank_max`;
ALTER TABLE `nuke_bbranks` CHANGE `rank_title` `rank_title` varchar(100) NOT NULL default '';

ALTER TABLE `nuke_bbsearch_wordmatch` ADD INDEX (post_id);

ALTER TABLE `nuke_bbsearch_wordlist` CHANGE `word_text` `word_text` varchar(255) binary NOT NULL DEFAULT '';
ALTER TABLE `nuke_bbsearch_wordlist` CHANGE `word_common` `word_common` mediumint(8) unsigned DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_bbsearch_wordlist` ADD  `post_id` mediumint(8) unsigned DEFAULT '0' NOT NULL;

ALTER TABLE `nuke_bbposts` ADD `post_move` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbtopics` ADD `topic_glance_priority` smallint(6) NOT NULL default '0';
ALTER TABLE `nuke_bbtopics` ADD `topic_priority` smallint(6) NOT NULL default '0';

ALTER TABLE `nuke_bbvote_desc` ADD `poll_view_toggle` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbvote_voters` ADD KEY `vote_cast` (`vote_cast`);

UPDATE `nuke_bbuser_group` SET `group_id` = '3' WHERE `user_id` ='2';
INSERT INTO `nuke_bbuser_group` VALUES (5, 2, 0);

ALTER TABLE `nuke_config` ADD `admin_pos` tinyint(1) NOT NULL default '1';

UPDATE `nuke_config` SET `Default_Theme` = 'chromo';
UPDATE `nuke_config` SET `backend_title` = 'Nuke-Evolution Powered Site';
UPDATE `nuke_config` SET `copyright` = 'PHP-Nuke Copyright &copy; 2006 by Francisco Burzi.<br />All logos, trademarks and posts in this site are property of their respective owners, all the rest &copy; 2006 by the site owner.<br />Powered by <a href="http://www.nuke-evolution.com" target="_blank">Nuke-Evolution</a>.<br />';
UPDATE `nuke_config` SET `Version_Num` = '7.6.0';
ALTER TABLE `nuke_config` ADD `cache_data` MEDIUMBLOB NOT NULL ;

UPDATE `nuke_evolution` SET `evo_value`= UNIX_TIMESTAMP( ) WHERE `evo_field` = 'cache_last_cleared';

ALTER TABLE `nuke_downloads_categories` ADD `whoadd` TINYINT(2) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_downloads_categories` ADD `uploaddir` VARCHAR(255) DEFAULT '' NOT NULL;
ALTER TABLE `nuke_downloads_categories` ADD `canupload` TINYINT(2) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_downloads_categories` ADD `active` TINYINT(2) DEFAULT '1' NOT NULL;

ALTER TABLE `nuke_downloads_downloads` DROP `downloadratingsummary` ;
ALTER TABLE `nuke_downloads_downloads` DROP `totalvotes` ;
ALTER TABLE `nuke_downloads_downloads` DROP `totalcomments` ;
ALTER TABLE `nuke_downloads_downloads` DROP `filesize` ;
ALTER TABLE `nuke_downloads_downloads` DROP `version` ;
ALTER TABLE `nuke_downloads_downloads` DROP `homepage` ;
ALTER TABLE `nuke_downloads_downloads` DROP `ns_compat`;
ALTER TABLE `nuke_downloads_downloads` DROP `ns_des_img`;

ALTER TABLE `nuke_downloads_downloads` ADD `sub_ip` VARCHAR(16) DEFAULT '0.0.0.0' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` ADD `filesize` BIGINT(20) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` ADD `version` VARCHAR(20) DEFAULT '' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` ADD `homepage` VARCHAR(255) DEFAULT '' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` ADD `active` TINYINT(2) DEFAULT '1' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` CHANGE `url` `url` varchar(255) NOT NULL default '';
ALTER TABLE `nuke_downloads_downloads` CHANGE `date` `date` datetime NOT NULL default '0000-00-00 00:00:00';

INSERT INTO `nuke_downloads_config` VALUES ('admperpage', '50');
INSERT INTO `nuke_downloads_config` VALUES ('blockunregmodify', '0');
INSERT INTO `nuke_downloads_config` VALUES ('dateformat', 'D M j G:i:s T Y');
INSERT INTO `nuke_downloads_config` VALUES ('mostpopular', '25');
INSERT INTO `nuke_downloads_config` VALUES ('mostpopulartrig', '0');
INSERT INTO `nuke_downloads_config` VALUES ('perpage', '10');
INSERT INTO `nuke_downloads_config` VALUES ('popular', '500');
INSERT INTO `nuke_downloads_config` VALUES ('results', '10');
INSERT INTO `nuke_downloads_config` VALUES ('show_download', '0');
INSERT INTO `nuke_downloads_config` VALUES ('show_links_num', '0');
INSERT INTO `nuke_downloads_config` VALUES ('usegfxcheck', '0');

INSERT INTO `nuke_downloads_extensions` VALUES (1, '.ace', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (2, '.arj', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (3, '.bz', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (4, '.bz2', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (5, '.cab', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (6, '.exe', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (7, '.gif', 0, 1);
INSERT INTO `nuke_downloads_extensions` VALUES (8, '.gz', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (9, '.iso', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (10, '.jpeg', 0, 1);
INSERT INTO `nuke_downloads_extensions` VALUES (11, '.jpg', 0, 1);
INSERT INTO `nuke_downloads_extensions` VALUES (12, '.lha', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (13, '.lzh', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (14, '.png', 0, 1);
INSERT INTO `nuke_downloads_extensions` VALUES (15, '.rar', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (16, '.tar', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (17, '.tgz', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (18, '.uue', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (19, '.zip', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (20, '.zoo', 1, 0);

ALTER TABLE `nuke_links_categories` DROP `ldescription`;

ALTER TABLE `nuke_session` ADD `module` varchar(30) NOT NULL default '';
ALTER TABLE `nuke_session` ADD `url` varchar(255) NOT NULL default '';
ALTER TABLE `nuke_session` ADD `starttime` varchar(14) NOT NULL default '';
ALTER TABLE `nuke_session` ADD PRIMARY KEY `uname` (`uname`);

ALTER TABLE `nuke_stories` ADD `ticon` tinyint(1) NOT NULL default '0';
ALTER TABLE `nuke_stories` ADD `writes` TINYINT( 1 ) DEFAULT '1' NOT NULL;
ALTER TABLE `nuke_stories` CHANGE informant informant varchar(25) not null default '';
ALTER TABLE `nuke_stories` CHANGE aid aid varchar(25) not null default '';

ALTER TABLE `nuke_themes` CHANGE `theme_info` `theme_info` text NOT NULL default '';
ALTER TABLE `nuke_topics` CHANGE `topicimage` `topicimage` varchar(100) default NULL;
ALTER TABLE `nuke_users` CHANGE `user_sig` `user_sig` TEXT DEFAULT NULL;

ALTER TABLE `nuke_users` CHANGE `user_msnm` `user_msnm` varchar(255) default NULL,
CHANGE `user_aim` `user_aim` varchar(255) default NULL,
CHANGE `user_yim` `user_yim` varchar(255) default NULL;

ALTER TABLE `nuke_users` CHANGE `user_timezone` `user_timezone` decimal(5,2) NOT NULL default '0.00';

ALTER TABLE `nuke_users` ADD `user_allow_mass_pm` TINYINT( 1 ) DEFAULT '4' NOT NULL AFTER `user_allow_pm` ;

ALTER TABLE `nuke_users` CHANGE `user_wordwrap` `user_wordwrap` SMALLINT( 3 ) DEFAULT '70' NOT NULL ;

ALTER TABLE `nuke_users` CHANGE `user_color_gi` `user_color_gi` TEXT;

ALTER TABLE `nuke_users` CHANGE `user_color_gc` `user_color_gc` VARCHAR( 6 ) NOT NULL;

ALTER TABLE `nuke_users` ADD `user_allowsignature` tinyint(4) NOT NULL default '1';
ALTER TABLE `nuke_users` ADD `user_report_optout` tinyint(1) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_users` ADD `user_show_quickreply` tinyint(1) NOT NULL default '1';
ALTER TABLE `nuke_users` ADD `user_quickreply_mode` tinyint(1) NOT NULL default '1';
ALTER TABLE `nuke_users` ADD `user_showavatars` tinyint(1) default '1';
ALTER TABLE `nuke_users` ADD `user_showsignatures` tinyint(1) default '1';
ALTER TABLE `nuke_users` ADD `user_time_mode` tinyint(4) NOT NULL default '6';
ALTER TABLE `nuke_users` ADD `user_dst_time_lag` tinyint(4) NOT NULL default '60';
ALTER TABLE `nuke_users` ADD `user_pc_timeOffsets` varchar(11) NOT NULL default '0';
ALTER TABLE `nuke_users` ADD `user_view_log` tinyint(4) NOT NULL default '0';
ALTER TABLE `nuke_users` ADD `user_glance_show` varchar(255) NOT NULL default '1';
ALTER TABLE `nuke_users` ADD `user_hide_images` tinyint(2) NOT NULL default '0';
ALTER TABLE `nuke_users` ADD `user_open_quickreply` TINYINT(1) DEFAULT '1' NOT NULL;
ALTER TABLE `nuke_users` ADD `xdata_bbcode` VARCHAR( 10 );

INSERT INTO `nuke_cnbya_config` VALUES ('tos_text', 'This is your default TOS. You may edit this through the Your Account Admin Panel.');


UPDATE `nuke_counter` SET var = 'Firefox' WHERE var = 'FireFox';

INSERT INTO `nuke_counter` VALUES ('browser', 'Galeon', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'K-Meleon', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'Shiira', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'Camino', 0);

DELETE FROM `nuke_counter` WHERE var = 'WebTV';

ALTER TABLE `nuke_config` ADD `admin_log_lines` int(11) NOT NULL default '0';
ALTER TABLE `nuke_config` ADD `error_log_lines` int(11) NOT NULL default '0';


DELETE FROM `nuke_cnbya_config` WHERE config_name = 'usegfxcheck';
DELETE FROM `nuke_cnbya_config` WHERE config_name = 'codesize';

UPDATE `nuke_cnbya_config` SET `config_value` = '4.4.2' WHERE `config_name` = 'version';


ALTER TABLE `nuke_authors` DROP INDEX `aid`;
ALTER TABLE `nuke_autonews` DROP INDEX `anid`;
ALTER TABLE `nuke_cnbya_field` DROP INDEX `fid`;
ALTER TABLE `nuke_cnbya_value` DROP INDEX `vid`;
ALTER TABLE `nuke_cnbya_value_temp` DROP INDEX `vid`;
ALTER TABLE `nuke_comments` DROP INDEX `tid`;

ALTER TABLE `nuke_counter` ADD INDEX ( `var` );

ALTER TABLE `nuke_downloads_categories` DROP INDEX `cid`;
ALTER TABLE `nuke_downloads_downloads` DROP INDEX `lid`;
ALTER TABLE `nuke_faqanswer` DROP INDEX `id`;
ALTER TABLE `nuke_faqcategories` DROP INDEX `id_cat`;
ALTER TABLE `nuke_headlines` DROP INDEX `hid`;
ALTER TABLE `nuke_links_categories` DROP INDEX `cid`;
ALTER TABLE `nuke_links_editorials` DROP INDEX `linkid`;
ALTER TABLE `nuke_links_links` DROP INDEX `lid`;
ALTER TABLE `nuke_links_modrequest` DROP INDEX `requestid`;
ALTER TABLE `nuke_links_newlink` DROP INDEX `lid`;
ALTER TABLE `nuke_links_votedata` DROP INDEX `ratingdbid`;

ALTER TABLE `nuke_main` ADD INDEX `main_module` ( `main_module` );

ALTER TABLE `nuke_message` DROP INDEX `mid`;

ALTER TABLE `nuke_pages` DROP INDEX `pid`;
ALTER TABLE `nuke_pages_categories` DROP INDEX `cid`;
ALTER TABLE `nuke_poll_desc` DROP INDEX `pollID`;
ALTER TABLE `nuke_pollcomments` DROP INDEX `tid`;
ALTER TABLE `nuke_queue` DROP INDEX `qid`;
ALTER TABLE `nuke_quotes` DROP INDEX `qid`;
ALTER TABLE `nuke_related` DROP INDEX `rid`;

ALTER TABLE `nuke_stories` DROP INDEX `sid`;
ALTER TABLE `nuke_stories_cat` DROP INDEX `catid`;
ALTER TABLE `nuke_topics` DROP INDEX `topicid`;
ALTER TABLE `nuke_users` DROP INDEX `uid`;

INSERT INTO `nuke_counter` VALUES ('browser', 'Avant', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Crazy', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'DEVONtech', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Dillo', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'ELinks', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Epiphany', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'iRider', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Maxthon', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Mozilla', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'MultiZilla', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'NetCaptor', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'OmniWeb', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Safari', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Voyager', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'w3m', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'WAP', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'WebWasher', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'Linspire', '0');

ALTER TABLE `nuke_bbsearch_results` ADD COLUMN `search_time` int(11) DEFAULT '0' NOT NULL;



ALTER TABLE `nuke_referer` DROP `rid`;
ALTER TABLE `nuke_referer` ADD `lasttime` int(10) unsigned DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_referer` ADD `link` VARCHAR( 100 ) NOT NULL;
ALTER TABLE `nuke_referer` ADD PRIMARY KEY (`url`);
ALTER TABLE `nuke_referer` ADD KEY `lasttime` (`lasttime`);
ALTER TABLE `nuke_referer` CHANGE `url` `url` varchar(100) NOT NULL;


ALTER TABLE `nuke_users` CHANGE `bio` `bio` TINYTEXT NULL;
ALTER TABLE `nuke_users` CHANGE `ublock` `ublock` TINYTEXT NULL;

UPDATE `nuke_config` SET `foot1` = '<a href="modules.php?name=Spambot_Killer" target="_blank">Spambot Killer</a><br /><a href="modules.php?name=Site_Map" target="_blank"><strong>Site Map</strong></a><br />';
UPDATE `nuke_config` SET `foot2` = '<a href="rss.php?feed=news" target="_blank"><img border="0" src="images/powered/feed_20_news.png" width="94" height="15" alt="[News Feed]" title="News Feed" /></a> <a href="rss.php?feed=forums" target="_blank"><img border="0" src="images/powered/feed_20_forums.png" width="94" height="15" alt="[Forums Feed]" title="Forums Feed" /></a> <a href="rss.php?feed=downloads" target="_blank" /><img border="0" src="images/powered/feed_20_down.png" width="94" height="15" alt="[Downloads Feed]" title="Downloads Feed" /></a> <a href="rss.php?feed=weblinks" target="_blank"><img border="0" src="images/powered/feed_20_links.png" width="94" height="15" alt="[Web Links Feed]" title="Web Links Feed" /></a> <a href="http://tool.motoricerca.info/robots-checker.phtml?checkreferer=1" target="_blank"><img border="0" src="images/powered/valid-robots.png" width="80" height="15" alt="[Validate robots.txt]" title="Validate robots.txt" /></a><br />';
