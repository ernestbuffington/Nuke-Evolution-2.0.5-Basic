ALTER TABLE `nuke_authors` DROP radminarticle, DROP radmintopic, DROP radminuser, DROP radminsurvey, DROP radminlink , DROP radminfaq, DROP radmindownload, DROP radminreviews, DROP radminnewsletter, DROP radminforum, DROP radmincontent, DROP radminency;
ALTER TABLE `nuke_authors` CHANGE radminsuper radminsuper TINYINT( 1 ) DEFAULT '1' NOT NULL;

UPDATE `nuke_config` SET Version_Num='7.6';