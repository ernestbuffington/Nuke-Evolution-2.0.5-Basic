ALTER TABLE `nuke_users` ADD points INT(10) DEFAULT '0';
ALTER TABLE `nuke_bbbanlist` ADD ban_time int(11) default NULL;
ALTER TABLE `nuke_bbbanlist` ADD ban_expire_time int(11) default NULL;
ALTER TABLE `nuke_bbbanlist` ADD ban_by_userid mediumint(8) default NULL;
ALTER TABLE `nuke_bbbanlist` ADD ban_priv_reason text;
ALTER TABLE `nuke_bbbanlist` ADD ban_pub_reason_mode tinyint(1) default NULL;
ALTER TABLE `nuke_bbbanlist` ADD ban_pub_reason text;

UPDATE `nuke_bbconfig` SET config_value='3600' where config_name='session_length';

CREATE TABLE `nuke_subscriptions` (id INT( 10 ) DEFAULT '0' AUTO_INCREMENT, userid INT( 10 ) DEFAULT '0', subscription_expire VARCHAR( 50 ) NOT NULL , INDEX ( id , userid ));

ALTER TABLE `nuke_users` ADD last_ip VARCHAR(15) DEFAULT '0' NOT NULL;

DROP TABLE IF EXISTS `nuke_sections`;
DROP TABLE IF EXISTS `nuke_seccont`;

ALTER TABLE `nuke_authors` DROP radminsection, DROP radminephem;

ALTER TABLE `nuke_authors` DROP radminarticle, DROP radmintopic, DROP radminuser, DROP radminsurvey, DROP radminlink , DROP radminfaq, DROP radmindownload, DROP radminreviews, DROP radminnewsletter, DROP radminforum, DROP radmincontent, DROP radminency;
ALTER TABLE `nuke_authors` CHANGE radminsuper radminsuper TINYINT( 1 ) DEFAULT '1' NOT NULL;

CREATE TABLE `nuke_confirm` (
  confirm_id char(32) NOT NULL default '',
  session_id char(32) NOT NULL default '',
  code char(6) NOT NULL default '',
  PRIMARY KEY  (session_id,confirm_id)
) TYPE=MyISAM;

ALTER TABLE `nuke_modules` ADD `mod_group` int(10) default '0';
ALTER TABLE `nuke_modules` ADD `admins` varchar(255) NOT NULL default '';

ALTER TABLE `nuke_faqAnswer` RENAME `nuke_faqanswer`;
ALTER TABLE `nuke_faqCategories` RENAME `nuke_faqcategories`;

UPDATE `nuke_config` SET Version_Num='7.6';