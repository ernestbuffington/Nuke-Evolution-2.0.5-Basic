ALTER TABLE `nuke_bbauth_access` ADD `auth_globalannounce` TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER `auth_announce`;
ALTER TABLE `nuke_bbauth_access` ADD `auth_download` tinyint(1) NOT NULL default '0';

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
INSERT INTO `nuke_bbconfig` VALUES ('ropm_quick_reply', '1');
INSERT INTO `nuke_bbconfig` VALUES ('ropm_quick_reply_bbc', '1');
INSERT INTO `nuke_bbconfig` VALUES ('ropm_quick_reply_smilies', '22');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_enable', '1');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_min', '50');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_max', '99');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_def', '70');
INSERT INTO `nuke_bbconfig` VALUES ('allow_quickreply', '1');
INSERT INTO `nuke_bbconfig` VALUES ('anonymous_show_sqr', '0');
INSERT INTO `nuke_bbconfig` VALUES ('anonymous_sqr_mode', '0');
INSERT INTO `nuke_bbconfig` VALUES ('quick_search_enable', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_line', '<hr>');
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
INSERT INTO `nuke_bbconfig` VALUES ('online_time', '60');
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
INSERT INTO `nuke_bbconfig` VALUES ('initial_group_id', '0');
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
INSERT INTO `nuke_bbconfig` VALUES ('use_theme_style', '0');
INSERT INTO `nuke_bbconfig` VALUES ('allow_autologin','1');
INSERT INTO `nuke_bbconfig` VALUES ('max_autologin_time','0');
INSERT INTO `nuke_bbconfig` VALUES ('max_login_attempts', '5');
INSERT INTO `nuke_bbconfig` VALUES ('login_reset_time', '30');
INSERT INTO `nuke_bbconfig` VALUES ('show_sig_once', '0');
INSERT INTO `nuke_bbconfig` VALUES ('show_avatar_once', '0');
INSERT INTO `nuke_bbconfig` VALUES ('show_rank_once', '0');
INSERT INTO `nuke_bbconfig` VALUES ('loginpage', '1');
INSERT INTO `nuke_bbconfig` VALUES ('rand_seed', '0');

ALTER TABLE `nuke_bbforums` ADD `auth_globalannounce` tinyint(2) NOT NULL default '3' AFTER `auth_announce`;
ALTER TABLE `nuke_bbforums` ADD `auth_download` tinyint(2) NOT NULL default '0';
ALTER TABLE `nuke_bbforums` ADD `forum_display_sort` TINYINT( 1 ) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_bbforums` ADD `forum_display_order` TINYINT( 1 ) DEFAULT '0' NOT NULL;

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

ALTER TABLE `nuke_bbprivmsgs` ADD `privmsgs_attachment` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbposts` ADD `post_attachment` tinyint(1) NOT NULL default '0', ADD `post_move` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbsearch_wordmatch` ADD INDEX (post_id);

ALTER TABLE `nuke_bbsearch_wordlist` CHANGE `word_text` `word_text` varchar(255) binary NOT NULL DEFAULT '';
ALTER TABLE `nuke_bbsearch_wordlist` CHANGE `word_common` `word_common` mediumint(8) unsigned DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_bbsearch_wordlist` ADD  `post_id` mediumint(8) unsigned DEFAULT '0' NOT NULL;

ALTER TABLE `nuke_bbsessions` ADD COLUMN session_admin tinyint(2) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_bbsessions` ADD COLUMN `session_url_qs` text NOT NULL;
ALTER TABLE `nuke_bbsessions` ADD COLUMN `session_url_ps` text NOT NULL;
ALTER TABLE `nuke_bbsessions` ADD COLUMN `session_url_specific` text NOT NULL;

ALTER TABLE `nuke_bbsmilies` ADD `smile_stat` mediumint(8) unsigned NOT NULL default '0';

ALTER TABLE `nuke_bbthemes` ADD `online_color` varchar(6) NOT NULL default '',
ADD `offline_color` varchar(6) NOT NULL default '',
ADD `hidden_color` varchar(6) NOT NULL default '';

ALTER TABLE `nuke_bbtopics` ADD `topic_priority` smallint(6) NOT NULL default '0', ADD `topic_glance_priority` smallint(6) NOT NULL default '0';

ALTER TABLE `nuke_bbtopics` ADD `topic_attachment` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbvote_desc` ADD `poll_view_toggle` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_users` CHANGE `user_sig` `user_sig` TEXT DEFAULT NULL;

ALTER TABLE `nuke_users` CHANGE `user_msnm` `user_msnm` varchar(255) default NULL,
CHANGE `user_aim` `user_aim` varchar(255) default NULL,
CHANGE `user_yim` `user_yim` varchar(255) default NULL;

ALTER TABLE `nuke_users` CHANGE `user_timezone` `user_timezone` decimal(5,2) NOT NULL default '0.00';

ALTER TABLE `nuke_users` ADD `user_allow_mass_pm` TINYINT( 1 ) DEFAULT '4' NOT NULL AFTER `user_allow_pm` ;

ALTER TABLE `nuke_users` ADD `user_color_gc` varchar(6) default '';
ALTER TABLE `nuke_users` ADD `user_color_gi` text;
ALTER TABLE `nuke_users` ADD `user_wordwrap` smallint(3) NOT NULL default '70';
ALTER TABLE `nuke_users` ADD `agreedtos` tinyint(1) NOT NULL default '0';
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


ALTER TABLE `nuke_authors` DROP INDEX `aid`;
ALTER TABLE `nuke_users` DROP INDEX `uid`;


ALTER TABLE `nuke_bbsearch_results` ADD COLUMN `search_time` int(11) DEFAULT '0' NOT NULL;
INSERT INTO `nuke_bbconfig` VALUES ('search_flood_interval', '15');

ALTER TABLE `nuke_users` CHANGE `bio` `bio` TINYTEXT NULL;
ALTER TABLE `nuke_users` CHANGE `ublock` `ublock` TINYTEXT NULL;