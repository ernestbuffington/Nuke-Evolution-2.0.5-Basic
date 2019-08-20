ALTER TABLE `nuke_users` ADD last_ip VARCHAR(15) DEFAULT '0' NOT NULL;

DROP TABLE IF EXISTS `nuke_sections`;
DROP TABLE IF EXISTS `nuke_seccont`;

ALTER TABLE `nuke_authors` DROP radminsection, DROP radminephem;

ALTER TABLE `nuke_modules` ADD `admins` varchar(255) NOT NULL default '';

ALTER TABLE `nuke_authors` DROP radminarticle, DROP radmintopic, DROP radminuser, DROP radminsurvey, DROP radminlink , DROP radminfaq, DROP radmindownload, DROP radminreviews, DROP radminnewsletter, DROP radminforum, DROP radmincontent, DROP radminency;
ALTER TABLE `nuke_authors` CHANGE radminsuper radminsuper TINYINT( 1 ) DEFAULT '1' NOT NULL;

UPDATE `nuke_config` SET Version_Num='7.6';