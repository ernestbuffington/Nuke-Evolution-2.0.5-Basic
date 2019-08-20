ALTER TABLE `nuke_bbxdata_fields` ADD `manditory` TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER `field_regexp` ;
UPDATE `nuke_nsnst_config` SET `config_value` = '2.5.06' WHERE `config_name` = 'version_number';
UPDATE `nuke_nsnst_config` SET `config_value` = '2.5.06' WHERE `config_name` = 'version_newest';