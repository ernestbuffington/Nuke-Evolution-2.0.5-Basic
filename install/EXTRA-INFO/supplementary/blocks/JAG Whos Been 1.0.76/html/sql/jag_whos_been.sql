#
# Table structure for table `nuke_jag_whos_been`
#

DROP TABLE IF EXISTS `nuke_jag_whos_been`;
CREATE TABLE `nuke_jag_whos_been` (
  `jag_whos_been_id` int(15) NOT NULL auto_increment,
  `jag_whos_been_user_id` int(11) NOT NULL default '0',
  `jag_whos_been_username` varchar(25) NOT NULL default '',
  `jag_whos_been_time` int(15) default NULL,
  `jag_whos_been_ip` varchar(50) default NULL,
  PRIMARY KEY  (`jag_whos_been_id`),
  UNIQUE KEY id (jag_whos_been_id)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

#
# Dumping data for table `nuke_jag_whos_been`
#

INSERT INTO `nuke_jag_whos_been` (`jag_whos_been_id`, `jag_whos_been_user_id`, `jag_whos_been_username`, `jag_whos_been_time`, `jag_whos_been_ip`) VALUES (1, 2, 'Dashe', 1068411766, '127.0.0.1');

# --------------------------------------------------------

#
# Table structure for table `nuke_jag_whos_been_config`
#

DROP TABLE IF EXISTS `nuke_jag_whos_been_config`;
CREATE TABLE `nuke_jag_whos_been_config` (
  `jag_whos_been_user_maxi` int(5) NOT NULL default '0',
  `jag_whos_been_show_numb` int(1) NOT NULL default '0',
  `jag_whos_been_numb_lead` int(5) NOT NULL default '0',
  `jag_whos_been_name_leng` int(5) NOT NULL default '0',
  `jag_whos_been_show_expl` int(1) NOT NULL default '0',
  `jag_whos_been_expl_name` varchar(50) NOT NULL default ''
) TYPE=MyISAM;

#
# Dumping data for table `nuke_jag_whos_been_config`
#

INSERT INTO `nuke_jag_whos_been_config` (`jag_whos_been_user_maxi`, `jag_whos_been_show_numb`, `jag_whos_been_numb_lead`, `jag_whos_been_name_leng`, `jag_whos_been_show_expl`, `jag_whos_been_expl_name`) VALUES (10, 1, 1, 15, 1, '[Shown as HH:MM:SS]');
