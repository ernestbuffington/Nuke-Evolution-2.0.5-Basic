INSERT INTO `nuke_nsnst_countries` VALUES ('rs', 'Serbia');
INSERT INTO `nuke_nsnst_countries` VALUES ('me', 'Montenegro');
INSERT INTO `nuke_nsnst_countries` VALUES ('su', 'Soviet Union');
UPDATE `nuke_nsnst_countries` SET `country` = 'Brunei' WHERE `c2c` = 'bn';
UPDATE `nuke_nsnst_countries` SET `country` = 'Czechoslovakia (Former)' WHERE `c2c` = 'cs';
UPDATE `nuke_nsnst_countries` SET `country` = 'Cocos (Keeling) Islands' WHERE `c2c` = 'cc';
UPDATE `nuke_nsnst_countries` SET `country` = 'Congo, Republic Of The' WHERE `c2c` = 'cg';
UPDATE `nuke_nsnst_countries` SET `country` = 'Gambia, The' WHERE `c2c` = 'gm';
UPDATE `nuke_nsnst_countries` SET `country` = 'Micronesia, Federated States Of' WHERE`c2c` = 'fm';
UPDATE `nuke_nsnst_countries` SET `country` = 'Pitcairn Islands' WHERE `c2c` = 'pn';
UPDATE `nuke_nsnst_countries` SET `country` = 'South Georgia and The Islands' WHERE `c2c` = 'gs';
UPDATE `nuke_nsnst_countries` SET `country` = 'Svalbard' WHERE `c2c` = 'sj';
ALTER TABLE `nuke_nsnst_countries` ORDER BY `c2c`;

UPDATE `nuke_nsnst_config` SET `config_value`='2.5.08' WHERE `config_name`='version_newest';
UPDATE `nuke_nsnst_config` SET `config_value`='2.5.08' WHERE `config_name`='version_number';
ALTER TABLE `nuke_nsnst_config` ORDER BY `config_name`;
OPTIMIZE TABLE `nuke_nsnst_config`;