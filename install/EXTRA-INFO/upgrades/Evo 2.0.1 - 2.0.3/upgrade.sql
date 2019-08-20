UPDATE `nuke_bbattachments_config` SET `config_value` = '2.4.5' WHERE `config_name` = 'attach_version';

UPDATE `nuke_config` SET `foot1` = '<a href="modules.php?name=Spambot_Killer" target="_blank">Spambot Killer</a><br /><a href="modules.php?name=Site_Map" target="_blank"><strong>Site Map</strong></a><br />';
UPDATE `nuke_config` SET `foot2` = '<a href="rss.php?feed=news" target="_blank"><img border="0" src="images/powered/feed_20_news.png" width="94" height="15" alt="[News Feed]" title="News Feed" /></a> <a href="rss.php?feed=forums" target="_blank"><img border="0" src="images/powered/feed_20_forums.png" width="94" height="15" alt="[Forums Feed]" title="Forums Feed" /></a> <a href="rss.php?feed=downloads" target="_blank" /><img border="0" src="images/powered/feed_20_down.png" width="94" height="15" alt="[Downloads Feed]" title="Downloads Feed" /></a> <a href="rss.php?feed=weblinks" target="_blank"><img border="0" src="images/powered/feed_20_links.png" width="94" height="15" alt="[Web Links Feed]" title="Web Links Feed" /></a> <a href="http://tool.motoricerca.info/robots-checker.phtml?checkreferer=1" target="_blank"><img border="0" src="images/powered/valid-robots.png" width="80" height="15" alt="[Validate robots.txt]" title="Validate robots.txt" /></a><br />';

INSERT INTO `nuke_bbconfig` VALUES ('rand_seed', '0');

UPDATE `nuke_donators_config` SET `config_value` = 'images/donations/x-click-but04.gif' WHERE `config_name` = 'block_button_image';

UPDATE `nuke_bbconfig` SET `config_value` = '.0.22' WHERE `config_name` = 'version';

UPDATE `nuke_modules` SET `cat_id`='2' WHERE `cat_id`='1';

INSERT INTO `nuke_donators_config` VALUES ('gen_cookie', 'no');

ALTER TABLE `nuke_bbxdata_fields` ADD `manditory` TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER `field_regexp` ;
UPDATE `nuke_nsnst_config` SET `config_value` = '2.5.06' WHERE `config_name` = 'version_number';
UPDATE `nuke_nsnst_config` SET `config_value` = '2.5.06' WHERE `config_name` = 'version_newest';