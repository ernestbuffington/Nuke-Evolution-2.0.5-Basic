ALTER TABLE `nuke_authors` DROP `radminblocker`;

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

ALTER TABLE `nuke_authors` DROP INDEX `aid`;
ALTER TABLE `nuke_users` DROP INDEX `uid`;

ALTER TABLE `nuke_users` CHANGE `bio` `bio` TINYTEXT NULL;
ALTER TABLE `nuke_users` CHANGE `ublock` `ublock` TINYTEXT NULL;