-- --------------------------------------------------------

-- 
-- Table structure for table `nuke_fancynl_archives`
-- 

CREATE TABLE `nuke_fancynl_archives` (
  `nid` int(11) NOT NULL auto_increment,
  `mode` int(11) NOT NULL default '0',
  `extended` int(11) NOT NULL default '0',
  `template` varchar(30) NOT NULL default '',
  `aid` varchar(30) NOT NULL default '',
  `title` varchar(80) default NULL,
  `time` datetime default NULL,
  `inhalt` text,
  `hometext` text,
  `sent` datetime default '0000-00-00 00:00:00',
  `bid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`nid`),
  KEY `mode` (`mode`),
  KEY `extended` (`extended`),
  KEY `sent` (`sent`)
) TYPE=MyISAM;

-- 
-- Dumping data for table `nuke_fancynl_archives`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `nuke_fancynl_config`
-- 

CREATE TABLE `nuke_fancynl_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` text NOT NULL,
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

-- 
-- Dumping data for table `nuke_fancynl_config`
-- 

INSERT INTO `nuke_fancynl_config` VALUES ('version_number', '2.5.1');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_archive', '3');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_calc_news', '1');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_num_news', '0');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_calc_dowl', '1');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_num_dowl', '0');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_calc_webl', '1');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_num_webl', '0');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_calc_foru', '1');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_num_foru', '0');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_show_stat', '0');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_downloadstable', 'downloads');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_sign', '');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_archive_paging', '20');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_bannersystem', '');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_randombanner', '0');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_queued', '0');
INSERT INTO `nuke_fancynl_config` VALUES ('fancynl_ads', '0');