
--
-- Table structure for table `nuke_autonews`
--

CREATE TABLE `nuke_autonews` (
    `anid` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `catid` INT(11) DEFAULT '0' NOT NULL,
    `aid` VARCHAR(30) NOT NULL,
    `title` VARCHAR(80) NOT NULL,
    `time` varchar(19) NOT NULL default '',
    `hometext` TEXT NOT NULL,
    `bodytext` TEXT NOT NULL,
    `topic` INT(11) DEFAULT '1' NOT NULL,
    `informant` VARCHAR(40) NOT NULL,
    `notes` TEXT NOT NULL,
    `ihome` TINYINT(4) DEFAULT '0' NOT NULL,
    `alanguage` VARCHAR(30) NOT NULL,
    `acomm` TINYINT(4) DEFAULT '0' NOT NULL,
    `associated` TEXT NOT NULL,
    `ticon` tinyint(1) NOT NULL default '0',
    `writes` TINYINT( 1 ) DEFAULT '1' NOT NULL,
    PRIMARY KEY (`anid`),
    UNIQUE `anid` (`anid`)
);

--
-- Dumping data for table `nuke_autonews`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_banner`
--

CREATE TABLE `nuke_banner` (
  `bid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `imptotal` int(11) NOT NULL default '0',
  `impmade` int(11) NOT NULL default '0',
  `clicks` int(11) NOT NULL default '0',
  `imageurl` varchar(100) NOT NULL default '',
  `clickurl` varchar(200) NOT NULL default '',
  `alttext` varchar(255) NOT NULL default '',
  `date` datetime default NULL,
  `dateend` datetime default NULL,
  `position` int(10) NOT NULL default '0',
  `active` tinyint(1) NOT NULL default '1',
  `ad_class` varchar(5) NOT NULL default '',
  `ad_code` text NOT NULL,
  `ad_width` int(4) default '0',
  `ad_height` int(4) default '0',
  `type` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`bid`),
  KEY `cid` (`cid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_banner`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_banner_clients`
--

CREATE TABLE `nuke_banner_clients` (
  `cid` int(11) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL default '',
  `contact` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `login` varchar(10) NOT NULL default '',
  `passwd` varchar(10) NOT NULL default '',
  `extrainfo` text NOT NULL,
  PRIMARY KEY  (`cid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_banner_clients`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_banner_plans`
--

CREATE TABLE `nuke_banner_plans` (
  `pid` int(10) NOT NULL auto_increment,
  `active` tinyint(1) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `description` text NOT NULL,
  `delivery` varchar(10) NOT NULL default '',
  `delivery_type` varchar(25) NOT NULL default '',
  `price` varchar(25) NOT NULL default '0',
  `buy_links` text NOT NULL,
  PRIMARY KEY  (`pid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_banner_plans`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_banner_positions`
--

CREATE TABLE `nuke_banner_positions` (
  `apid` int(10) NOT NULL auto_increment,
  `position_number` int(5) NOT NULL default '0',
  `position_name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`apid`),
  KEY `position_number` (`position_number`)
) TYPE=MyISAM AUTO_INCREMENT=4 ;

--
-- Dumping data for table `nuke_banner_positions`
--

INSERT INTO `nuke_banner_positions` VALUES (1, 0, 'Page Top');
INSERT INTO `nuke_banner_positions` VALUES (2, 1, 'Left Block');
INSERT INTO `nuke_banner_positions` VALUES (3, 2, 'Page Bottom');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_banner_terms`
--

CREATE TABLE `nuke_banner_terms` (
  `terms_body` text NOT NULL,
  `country` varchar(255) NOT NULL default ''
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_banner_terms`
--

INSERT INTO `nuke_banner_terms` VALUES ('<div align="justify"><strong>Introduction:</strong> This Agreement between you and&nbsp;[sitename] consists of these Terms and Conditions. &quot;You&quot; or &quot;Advertiser&quot; means the entity identified in this enrollment form, and/or any agency acting on its behalf, which shall also be bound by the terms of this Agreement. Please read very carefully these Terms and Conditions.<br /><strong><br />Uses:</strong> You agree that your ads may be placed on (i) [sitename] web site and (ii) Any ads may be modified without your consent to comply with any policy of [sitename]. [sitename] reserves the right to, and in its sole discretion may, at any time review, reject, modify, or remove any ad. No liability of [sitename] and/or its owner(s) shall result from any such decision.<br /><br /></div><div align="justify"><strong>Parties'' Responsibilities:</strong> You are responsible of your own site and/or service advertised in [sitename] web site. You are solely responsible for the advertising image creation, advertising text and for the content of your ads, including URL links. [sitename] is not responsible for anything regarding your Web site(s) including, but not limited to, maintenance of your Web site(s), order entry, customer service, payment processing, shipping, cancellations or returns.<br /><br /></div><div align="justify"><strong>Impressions Count:</strong> Any hit to [sitename] web site is counted as an impression. Due to our advertising price we don''t discriminate from users or automated robots. Even if you access to [sitename] web site and see your own banner ad it will be counted as a valid impression. Only in the case of [sitename] web site administrator, the impressions will not be counted.<br /><br /></div><div align="justify"><strong>Termination, Cancellation:</strong> [sitename] may at any time, in its sole discretion, terminate the Campaign, terminate this Agreement, or cancel any ad(s) or your use of any Target. [sitename] will notify you via email of any such termination or cancellation, which shall be effective immediately. No refund will be made for any reason. Remaining impressions will be stored in a database and you''ll be able to request another campaign to complete your inventory. You may cancel any ad and/or terminate this Agreement with or without cause at any time. Termination of your account shall be effective when [sitename] receives your notice via email. No refund will be made for any reason. Remaining impressions will be stored in a database for future uses by you and/or your company.<br /><br /></div><div align="justify"><strong>Content:</strong> [sitename] web site doesn''t accepts advertising that contains: (i) pornography, (ii) explicit adult content, (iii) moral questionable content, (iv) illegal content of any kind, (v) illegal drugs promotion, (vi) racism, (vii) politics content, (viii) religious content, and/or (ix) fraudulent suspicious content. If your advertising and/or target web site has any of this content and you purchased an advertising package, you''ll not receive refund of any kind but your banners ads impressions will be stored for future use.<br /><br /></div><div align="justify"><strong>Confidentiality:</strong> Each party agrees not to disclose Confidential Information of the other party without prior written consent except as provided herein. &quot;Confidential Information&quot; includes (i) ads, prior to publication, (ii) submissions or modifications relating to any advertising campaign, (iii) clickthrough rates or other statistics (except in an aggregated form that includes no identifiable information about you), and (iv) any other information designated in writing as &quot;Confidential.&quot; It does not include information that has become publicly known through no breach by a party, or has been (i) independently developed without access to the other party''s Confidential Information; (ii) rightfully received from a third party; or (iii) required to be disclosed by law or by a governmental authority.<br /><br /></div><div align="justify"><strong>No Guarantee:</strong> [sitename] makes no guarantee regarding the levels of clicks for any ad on its site. [sitename] may offer the same Target to more than one advertiser. You may not receive exclusivity unless special private contract between [sitename] and you.<br /><br /></div><div align="justify"><strong>No Warranty:</strong> [sitename] MAKES NO WARRANTY, EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION WITH RESPECT TO ADVERTISING AND OTHER SERVICES, AND EXPRESSLY DISCLAIMS THE WARRANTIES OR CONDITIONS OF NONINFRINGEMENT, MERCHANTABILITY AND FITNESS FOR ANY PARTICULAR PURPOSE.<br /><br /></div><div align="justify"><strong>Limitations of Liability:</strong> In no event shall [sitename] be liable for any act or omission, or any event directly or indirectly resulting from any act or omission of Advertiser, Partner, or any third parties (if any). EXCEPT FOR THE PARTIES'' INDEMNIFICATION AND CONFIDENTIALITY OBLIGATIONS HEREUNDER, (i) IN NO EVENT SHALL EITHER PARTY BE LIABLE UNDER THIS AGREEMENT FOR ANY CONSEQUENTIAL, SPECIAL, INDIRECT, EXEMPLARY, PUNITIVE, OR OTHER DAMAGES WHETHER IN CONTRACT, TORT OR ANY OTHER LEGAL THEORY, EVEN IF SUCH PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES AND NOTWITHSTANDING ANY FAILURE OF ESSENTIAL PURPOSE OF ANY LIMITED REMEDY AND (ii) [sitename] AGGREGATE LIABILITY TO ADVERTISER UNDER THIS AGREEMENT FOR ANY CLAIM IS LIMITED TO THE AMOUNT PAID TO [sitename] BY ADVERTISER FOR THE AD GIVING RISE TO THE CLAIM. Each party acknowledges that the other party has entered into this Agreement relying on the limitations of liability stated herein and that those limitations are an essential basis of the bargain between the parties. Without limiting the foregoing and except for payment obligations, neither party shall have any liability for any failure or delay resulting from any condition beyond the reasonable control of such party, including but not limited to governmental action or acts of terrorism, earthquake or other acts of God, labor conditions, and power failures.<br /><br /></div><div align="justify"><strong>Payment:</strong> You agree to pay in advance the cost of the advertising. [sitename] will not setup any banner ads campaign(s) unless the payment process is complete. [sitename] may change its pricing at any time without prior notice. If you have an advertising campaign running and/or impressions stored for future use for any mentioned cause and [sitename] changes its pricing, you''ll not need to pay any difference. Your purchased banners fee will remain the same. Charges shall be calculated solely based on records maintained by [sitename]. No other measurements or statistics of any kind shall be accepted by [sitename] or have any effect under this Agreement.<br /><br /></div><div align="justify"><strong>Representations and Warranties:</strong> You represent and warrant that (a) all of the information provided by you to [sitename] to enroll in the Advertising Campaign is correct and current; (b) you hold all rights to permit [sitename] and any Partner(s) to use, reproduce, display, transmit and distribute your ad(s); and (c) [sitename] and any Partner(s) Use, your Target(s), and any site(s) linked to, and products or services to which users are directed, will not, in any state or country where the ad is displayed (i) violate any criminal laws or third party rights giving rise to civil liability, including but not limited to trademark rights or rights relating to the performance of music; or (ii) encourage conduct that would violate any criminal or civil law. You further represent and warrant that any Web site linked to your ad(s) (i) complies with all laws and regulations in any state or country where the ad is displayed; (ii) does not breach and has not breached any duty toward or rights of any person or entity including, without limitation, rights of publicity or privacy, or rights or duties under consumer protection, product liability, tort, or contract theories; and (iii) is not false, misleading, defamatory, libelous, slanderous or threatening.<br /><br /></div><div align="justify"><strong>Your Obligation to Indemnify:</strong> You agree to indemnify, defend and hold [sitename], its agents, affiliates, subsidiaries, directors, officers, employees, and applicable third parties (e.g., all relevant Partner(s), licensors, licensees, consultants and contractors) (&quot;Indemnified Person(s)&quot;) harmless from and against any and all third party claims, liability, loss, and expense (including damage awards, settlement amounts, and reasonable legal fees), brought against any Indemnified Person(s), arising out of, related to or which may arise from your use of the Advertising Program, your Web site, and/or your breach of any term of this Agreement. Customer understands and agrees that each Partner, as defined herein, has the right to assert and enforce its rights under this Section directly on its own behalf as a third party beneficiary.<br /><br /></div><div align="justify"><strong>Information Rights:</strong> [sitename] may retain and use for its own purposes all information you provide, including but not limited to Targets, URLs, the content of ads, and contact and billing information. [sitename] may share this information about you with business partners and/or sponsors. [sitename] will not sell your information. Your name, web site''s URL and related graphics shall be used by [sitename] in its own web site at any time as a sample to the public, even if your Advertising Campaign has been finished.<br /><br /></div><div align="justify"><strong>Miscellaneous:</strong> Any decision made by [sitename] under this Agreement shall be final. [sitename] shall have no liability for any such decision. You will be responsible for all reasonable expenses (including attorneys'' fees) incurred by [sitename] in collecting unpaid amounts under this Agreement. This Agreement shall be governed by the laws of [country]. Any dispute or claim arising out of or in connection with this Agreement shall be adjudicated in [country]. This constitutes the entire agreement between the parties with respect to the subject matter hereof. Advertiser may not resell, assign, or transfer any of its rights hereunder. Any such attempt may result in termination of this Agreement, without liability to [sitename] and without any refund. The relationship(s) between [sitename] and the &quot;Partners&quot; is not one of a legal partnership relationship, but is one of independent contractors. This Agreement shall be construed as if both parties jointly wrote it.</div>', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_bblogs`
--

CREATE TABLE `nuke_bblogs` (
  `log_id` mediumint(10) NOT NULL auto_increment,
  `mode` varchar(50) default '',
  `topic_id` mediumint(10) default '0',
  `user_id` mediumint(8) default '0',
  `username` varchar(255) default '',
  `user_ip` varchar(8) NOT NULL default '0',
  `time` int(11) default '0',
  `new_topic_id` mediumint(10) NOT NULL default '0',
  `forum_id` mediumint(10) NOT NULL default '0',
  `new_forum_id` mediumint(10) NOT NULL default '0',
  `last_post_id` mediumint(10) NOT NULL default '0',
  PRIMARY KEY  (`log_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bblogs`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_bblogs_config`
--

CREATE TABLE `nuke_bblogs_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bblogs_config`
--

INSERT INTO `nuke_bblogs_config` VALUES ('all_admin', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbstats_module_admin_panel`
--

CREATE TABLE `nuke_bbstats_module_admin_panel` (
  `module_id` mediumint(8) unsigned NOT NULL default '0',
  `config_name` varchar(255) NOT NULL default '',
  `config_value` varchar(255) NOT NULL default '',
  `config_type` varchar(20) NOT NULL default '',
  `config_title` varchar(100) NOT NULL default '',
  `config_explain` varchar(100) default NULL,
  `config_trigger` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`module_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bbstats_module_admin_panel`
--

INSERT INTO `nuke_bbstats_module_admin_panel` VALUES (1, 'num_columns', '2', 'number', 'num_columns_title', 'num_columns_explain', 'integer');
INSERT INTO `nuke_bbstats_module_admin_panel` VALUES (15, 'exclude_images', '0', 'number', 'exclude_images_title', 'exclude_images_explain', 'enum');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbstats_module_cache`
--

CREATE TABLE `nuke_bbstats_module_cache` (
  `module_id` mediumint(8) NOT NULL default '0',
  `module_cache_time` int(12) NOT NULL default '0',
  `db_cache` text NOT NULL,
  `priority` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`module_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bbstats_module_cache`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbstats_module_group_auth`
--

CREATE TABLE `nuke_bbstats_module_group_auth` (
  `module_id` mediumint(8) unsigned NOT NULL default '0',
  `group_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`module_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bbstats_module_group_auth`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbstats_module_info`
--

CREATE TABLE `nuke_bbstats_module_info` (
  `module_id` mediumint(8) NOT NULL default '0',
  `long_name` varchar(100) NOT NULL default '',
  `author` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `url` varchar(100) default NULL,
  `version` varchar(10) NOT NULL default '',
  `update_site` varchar(100) default NULL,
  `extra_info` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`module_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bbstats_module_info`
--

INSERT INTO `nuke_bbstats_module_info` VALUES (1, 'Statistics Overview Section', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will print out a link Block with Links to the current Module at the Statistics Site.\nYou are able to define the number of columns displayed for this Module within the Administration Panel -&gt; Edit Module.');
INSERT INTO `nuke_bbstats_module_info` VALUES (2, 'Top Posters', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the Top Posters from your board.\nAnonymous Poster are not counted.');
INSERT INTO `nuke_bbstats_module_info` VALUES (3, 'Administrative Statistics', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays some Admin Statistics about your Board.\nIt is nearly the same you are able to see within the first Administration Panel visit.');
INSERT INTO `nuke_bbstats_module_info` VALUES (4, 'Most viewed topics', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the most viewed topics at your board.');
INSERT INTO `nuke_bbstats_module_info` VALUES (5, 'Top Posters this Month (Site History Mod)', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module does NOT require the Site History Mod,\nit will display the Top Posters on a Monthly basis.');
INSERT INTO `nuke_bbstats_module_info` VALUES (6, 'New topics by month', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will display the topics created at your Board in a monthly statistic.');
INSERT INTO `nuke_bbstats_module_info` VALUES (7, 'Most Interesting Topics', 'JRSweets', 'JRSweets@gmail.com', 'http://www.jeffrusso.net', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This module will show the most intresting topics.');
INSERT INTO `nuke_bbstats_module_info` VALUES (8, 'Top Words', 'JRSweets', 'JRSweets@gmail.com', 'http://www.jeffrusso.net', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the most used words on your board.');
INSERT INTO `nuke_bbstats_module_info` VALUES (9, 'Least Interesting Topics', 'JRSweets', 'JRSweets@gmail.com', 'http://www.jeffrusso.net', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This module will show the least intresting topics.');
INSERT INTO `nuke_bbstats_module_info` VALUES (10, 'Most Active Topicstarter', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the most active topicstarter on your board.\nAnonymous Poster are not counted.');
INSERT INTO `nuke_bbstats_module_info` VALUES (11, 'Top Smilies', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the Top Smilies used at your board.\nThis Module uses an Smilie Index Table for caching the smilie data and to not\nrequire re-indexing of all posts.');
INSERT INTO `nuke_bbstats_module_info` VALUES (12, 'New users by month', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will display the users registered to your Board in a monthly statistic.');
INSERT INTO `nuke_bbstats_module_info` VALUES (13, 'New posts by month', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will display the posts created at your Board in a monthly statistic.');
INSERT INTO `nuke_bbstats_module_info` VALUES (14, 'Top Posters this Week (Site History Mod)', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module does NOT require the Site History Mod,\nit will display the Top Posters on a Weekly basis.');
INSERT INTO `nuke_bbstats_module_info` VALUES (15, 'Top Downloaded Attachments', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will print out the most downloaded Files.\nThe Attachment Mod Version 2.3.x have to be installed in order to let this Module work.\nYou are able to exclude Images from the statistic too.');
INSERT INTO `nuke_bbstats_module_info` VALUES (16, 'Most active Topics', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the most active topics at your board.');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbstats_modules`
--

CREATE TABLE `nuke_bbstats_modules` (
  `module_id` mediumint(8) unsigned NOT NULL auto_increment,
  `short_name` varchar(100) default NULL,
  `update_time` mediumint(8) NOT NULL default '0',
  `module_order` mediumint(8) NOT NULL default '0',
  `active` tinyint(2) NOT NULL default '0',
  `perm_all` tinyint(2) unsigned NOT NULL default '1',
  `perm_reg` tinyint(2) unsigned NOT NULL default '1',
  `perm_mod` tinyint(2) unsigned NOT NULL default '1',
  `perm_admin` tinyint(2) unsigned NOT NULL default '1',
  PRIMARY KEY  (`module_id`)
) TYPE=MyISAM AUTO_INCREMENT=17 ;

--
-- Dumping data for table `nuke_bbstats_modules`
--

INSERT INTO `nuke_bbstats_modules` VALUES (1, 'stats_overview', 360, 10, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (2, 'top_posters', 360, 30, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (3, 'admin_statistics', 360, 20, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (4, 'most_viewed_topics', 360, 80, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (5, 'top_posters_month', 360, 60, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (6, 'topics_by_month', 360, 100, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (7, 'most_interesting_topics', 360, 120, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (8, 'top_words', 360, 90, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (9, 'least_interesting_topics', 360, 130, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (10, 'most_active_topicstarter', 360, 40, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (11, 'top_smilies', 0, 110, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (12, 'users_by_month', 360, 140, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (13, 'posts_by_month', 360, 150, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (14, 'top_posters_week', 360, 50, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (15, 'top_attachments', 360, 160, 1, 1, 1, 1, 1);
INSERT INTO `nuke_bbstats_modules` VALUES (16, 'most_active_topics', 360, 70, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbstats_smilies_index`
--

CREATE TABLE `nuke_bbstats_smilies_index` (
  `code` varchar(50) NOT NULL default '',
  `smile_url` varchar(100) default NULL,
  `smile_count` mediumint(8) default '0',
  PRIMARY KEY  (`code`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bbstats_smilies_index`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbstats_smilies_info`
--

CREATE TABLE `nuke_bbstats_smilies_info` (
  `last_post_id` mediumint(8) NOT NULL default '0',
  `last_update_time` int(12) NOT NULL default '0',
  `update_time` mediumint(8) NOT NULL default '10080',
  PRIMARY KEY  (`last_post_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bbstats_smilies_info`
--

INSERT INTO `nuke_bbstats_smilies_info` VALUES (0, 0, 10080);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbpost_reports`
--

CREATE TABLE `nuke_bbpost_reports` (
  `report_id` mediumint(8) NOT NULL auto_increment,
  `post_id` mediumint(8) NOT NULL default '0',
  `reporter_id` mediumint(8) NOT NULL default '0',
  `report_status` tinyint(1) NOT NULL default '0',
  `report_time` int(11) NOT NULL default '0',
  `report_comments` text,
  `last_action_user_id` mediumint(8) default '0',
  `last_action_time` int(11) NOT NULL default '0',
  `last_action_comments` text,
  PRIMARY KEY  (`report_id`)
);

--
-- Dumping data for table `nuke_bbpost_reports`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbquicksearch`
--

CREATE TABLE `nuke_bbquicksearch` (
  `search_id` mediumint(8) unsigned NOT NULL auto_increment,
  `search_name` varchar(255) NOT NULL default '',
  `search_url1` varchar(255) NOT NULL default '',
  `search_url2` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`search_id`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nuke_bbquicksearch`
--

INSERT INTO `nuke_bbquicksearch` VALUES (1, 'Google', 'http://www.google.com/search?hl=en&ie=UTF-8&oe=UTF-8&q=', '');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_bbsessions`
--

CREATE TABLE `nuke_bbsessions` (
  `session_id` varchar(32) NOT NULL default '',
  `session_user_id` mediumint(8) NOT NULL default '0',
  `session_start` int(11) NOT NULL default '0',
  `session_time` int(11) NOT NULL default '0',
  `session_ip` varchar(8) NOT NULL default '0',
  `session_page` int(11) NOT NULL default '0',
  `session_logged_in` tinyint(1) NOT NULL default '0',
  `session_admin` tinyint(2) NOT NULL default '0',
  `session_url_qs` text NOT NULL,
  `session_url_ps` text NOT NULL,
  `session_url_specific` int(10) NOT NULL default '0',
  PRIMARY KEY  (`session_id`),
  KEY `session_user_id` (`session_user_id`),
  KEY `session_id_ip_user_id` (`session_id`,`session_ip`,`session_user_id`)
) TYPE=MyISAM;

--
-- Table structure for table `nuke_bbsessions_keys`
--

CREATE TABLE `nuke_bbsessions_keys` (
    `key_id` varchar(32) DEFAULT '0' NOT NULL,
    `user_id` mediumint(8) DEFAULT '0' NOT NULL,
    `last_ip` varchar(8) DEFAULT '0' NOT NULL,
    `last_login` int(11) DEFAULT '0' NOT NULL,
    PRIMARY KEY (key_id, user_id),
    KEY last_login (last_login)
);


--
-- Dumping data for table `nuke_bbsessions_keys`
--


-- --------------------------------------------------------


--
-- Table structure for table `nuke_bbstats_config`
--

CREATE TABLE `nuke_bbstats_config` (
  `config_name` varchar(100) NOT NULL default '',
  `config_value` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bbstats_config`
--

INSERT INTO `nuke_bbstats_config` VALUES ('install_date', '0');
INSERT INTO `nuke_bbstats_config` VALUES ('return_limit', '10');
INSERT INTO `nuke_bbstats_config` VALUES ('version', '3.0.0');
INSERT INTO `nuke_bbstats_config` VALUES ('page_views', '0');

-- --------------------------------------------------------

--
-- Table structure for table nuke_bbxdata_fields
--

CREATE TABLE `nuke_bbxdata_fields` (
    field_id smallint(5) UNSIGNED NOT NULL,
    field_name varchar(255) NOT NULL default '',
    field_desc text NOT NULL default '',
    field_type varchar(255) NOT NULL default '',
    field_order smallint(5) UNSIGNED NOT NULL default '0',
    code_name varchar(255) NOT NULL default '',
    field_length mediumint(8) UNSIGNED NOT NULL default '0',
    field_values text NOT NULL default '',
    field_regexp text NOT NULL default '',
    manditory TINYINT( 1 ) NOT NULL DEFAULT '0',
    default_auth tinyint(1) NOT NULL default '1',
    display_register tinyint(1) NOT NULL default '1',
    display_viewprofile tinyint(1) NOT NULL default '0',
    display_posting tinyint(1) NOT NULL default '0',
    handle_input tinyint(1) NOT NULL default '0',
    allow_html tinyint(1) NOT NULL default '0',
    allow_bbcode tinyint(1) NOT NULL default '0',
    allow_smilies tinyint(1) NOT NULL default '0',
    viewtopic TINYINT( 1 ) DEFAULT '0' NOT NULL,
    signup TINYINT( 1 ) DEFAULT '0' NOT NULL,
    PRIMARY KEY  (field_id),
    UNIQUE KEY code_name (code_name)
);

-- --------------------------------------------------------

--
-- Table structure for table nuke_bbxdata_data
--

CREATE TABLE `nuke_bbxdata_data` (
  field_id smallint(5) UNSIGNED NOT NULL,
  user_id mediumint(8) UNSIGNED NOT NULL,
  xdata_value text NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table nuke_bbxdata_auth
--

CREATE TABLE `nuke_bbxdata_auth` (
  field_id smallint(5) UNSIGNED NOT NULL,
  group_id mediumint(8) UNSIGNED NOT NULL,
  auth_value tinyint(1) NOT NULL
);

--
-- Dumping data for table `nuke_bbxdata_field`
--

INSERT INTO `nuke_bbxdata_fields` (field_id, field_name, field_type, field_order, code_name, display_register) VALUES (1, 'ICQ Number', 'special', '1', 'icq', 2);
INSERT INTO `nuke_bbxdata_fields` (field_id, field_name, field_type, field_order, code_name, display_register) VALUES (2, 'AIM Address', 'special', '2', 'aim', 2);
INSERT INTO `nuke_bbxdata_fields` (field_id, field_name, field_type, field_order, code_name, display_register) VALUES (3, 'MSN Messenger', 'special', '3', 'msn', 2);
INSERT INTO `nuke_bbxdata_fields` (field_id, field_name, field_type, field_order, code_name, display_register) VALUES (4, 'Yahoo Messenger', 'special', '4', 'yim', 2);
INSERT INTO `nuke_bbxdata_fields` (field_id, field_name, field_type, field_order, code_name, display_register) VALUES (5, 'Website', 'special', '5', 'website', 2);
INSERT INTO `nuke_bbxdata_fields` (field_id, field_name, field_type, field_order, code_name, display_register) VALUES (6, 'Location', 'special', '6', 'location', 2);
INSERT INTO `nuke_bbxdata_fields` (field_id, field_name, field_type, field_order, code_name, display_register) VALUES (7, 'Occupation', 'special', '7', 'occupation', 2);
INSERT INTO `nuke_bbxdata_fields` (field_id, field_name, field_type, field_order, code_name, display_register) VALUES (8, 'Interests', 'special', '8', 'interests', 2);
INSERT INTO `nuke_bbxdata_fields` (field_id, field_name, field_type, field_order, code_name, display_register) VALUES (9, 'Signature', 'special', '9', 'signature', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_blocks`
--

CREATE TABLE `nuke_blocks` (
  `bid` int(10) NOT NULL auto_increment,
  `bkey` varchar(15) NOT NULL default '',
  `title` varchar(60) NOT NULL default '',
  `content` text NOT NULL,
  `url` varchar(200) NOT NULL default '',
  `bposition` char(1) NOT NULL default '',
  `weight` int(10) NOT NULL default '1',
  `active` int(1) NOT NULL default '1',
  `refresh` int(10) NOT NULL default '0',
  `time` varchar(14) NOT NULL default '0',
  `blanguage` varchar(30) NOT NULL default '',
  `blockfile` varchar(255) NOT NULL default '',
  `view` VARCHAR( 50 ) NOT NULL default '0',
  PRIMARY KEY  (`bid`),
  KEY `title` (`title`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_blocks`
--

INSERT INTO `nuke_blocks` VALUES (1, '', 'Main Menu', '', '', 'l', 1, 1, 0, '', '', 'block-Modules.php', '0');
INSERT INTO `nuke_blocks` VALUES (2, '', 'Administration', '', '', 'l', 3, 1, 0, '', '', 'block-Administration.php', '4');
INSERT INTO `nuke_blocks` VALUES (3, '', 'Search', '', '', 'l', 6, 0, 3600, '', '', 'block-Search.php', '0');
INSERT INTO `nuke_blocks` VALUES (4, '', 'Survey', '', '', 'r', 5, 1, 3600, '', '', 'block-Survey.php', '0');
INSERT INTO `nuke_blocks` VALUES (5, '', 'Information', '<br /><center><span class="content">\r\n<a href="http://phpnuke.org"><img src="images/powered/powered8.jpg" border="0" alt="Powered by PHP-Nuke" title="Powered by PHP-Nuke" width="88" height="31" /></a>\r\n<br /><br />\r\n<a href="http://validator.w3.org/check/referer"><img src="images/html401.gif" width="88" height="31" alt="Valid HTML 4.01!" title="Valid HTML 4.01!" border="0" /></a>\r\n<br /><br />\r\n<a href="http://jigsaw.w3.org/css-validator"><img src="images/css.gif" width="88" height="31" alt="Valid CSS!" title="Valid CSS!" border="0" /></a></span></center><br />', '', 'r', 6, 1, 0, '', '', '', '0');
INSERT INTO `nuke_blocks` VALUES (6, '', 'User Info', '', '', 'r', 3, 1, 0, '', '', 'block-Evo_User_Info.php', '0');
INSERT INTO `nuke_blocks` VALUES (7, '', 'Nuke-Evolution', '', '', 'c', 1, 1, 0, '', '', 'block-Nuke-Evolution.php', '0');
INSERT INTO `nuke_blocks` VALUES (8, '', 'Hacker Beware', '', '', 'l', 7, 1, 3600, '', '', 'block-Hacker_Beware2.php', '0');
INSERT INTO `nuke_blocks` VALUES (9, '', 'Top 10 Downloads', '', '', 'r', 7, 0, 3600, '', '', 'block-Top10_Downloads.php', '0');
INSERT INTO `nuke_blocks` VALUES (10, '', 'Top 10 Links', '', '', 'r', 8, 0, 3600, '', '', 'block-Top10_Links.php', '0');
INSERT INTO `nuke_blocks` VALUES (11, '', 'Forums', '', '', 'c', 1, 0, 3600, '', '', 'block-Forums.php', '0');
INSERT INTO `nuke_blocks` VALUES (12, '', 'Submissions', '', '', 'l', 4, 1, 0, '', '', 'block-Submissions.php', '4');
INSERT INTO `nuke_blocks` VALUES (13, '', 'Link to us', '', '', 'l', 10, 1, 3600, '', '', 'block-Link_to_us.php', '0');
INSERT INTO `nuke_blocks` VALUES (14, '', 'Donations', '', '', 'r', 1, 1, 3600, '0', '', 'block-Donations.php', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_cnbya_config`
--

CREATE TABLE `nuke_cnbya_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` longtext,
  UNIQUE KEY `config_name` (`config_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_cnbya_config`
--

INSERT INTO `nuke_cnbya_config` VALUES ('sendaddmail', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('senddeletemail', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('allowuserdelete', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('allowusertheme', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('allowuserreg', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('allowmailchange', '1');
INSERT INTO `nuke_cnbya_config` VALUES ('emailvalidate', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('requireadmin', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('servermail', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('useactivate', '1');
INSERT INTO `nuke_cnbya_config` VALUES ('autosuspend', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('perpage', '100');
INSERT INTO `nuke_cnbya_config` VALUES ('expiring', '86400');
INSERT INTO `nuke_cnbya_config` VALUES ('nick_min', '4');
INSERT INTO `nuke_cnbya_config` VALUES ('nick_max', '20');
INSERT INTO `nuke_cnbya_config` VALUES ('pass_min', '4');
INSERT INTO `nuke_cnbya_config` VALUES ('pass_max', '20');
INSERT INTO `nuke_cnbya_config` VALUES ('bad_mail', 'yoursite.com\r\nmysite.com');
INSERT INTO `nuke_cnbya_config` VALUES ('bad_nick', 'adm\r\nadmin\r\nanonimo\r\nanonymous\r\nannimo\r\ngod\r\nlinux\r\nnobody\r\noperator\r\nroot\r\nstaff\r\nwebmaster');
INSERT INTO `nuke_cnbya_config` VALUES ('coppa', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('tos', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('tosall', '1');
INSERT INTO `nuke_cnbya_config` VALUES ('cookiecheck', '1');
INSERT INTO `nuke_cnbya_config` VALUES ('cookiecleaner', '1');
INSERT INTO `nuke_cnbya_config` VALUES ('cookietimelife', '2592000');
INSERT INTO `nuke_cnbya_config` VALUES ('cookiepath', '');
INSERT INTO `nuke_cnbya_config` VALUES ('cookieinactivity', '-');
INSERT INTO `nuke_cnbya_config` VALUES ('autosuspendmain', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('doublecheckemail', '0');
INSERT INTO `nuke_cnbya_config` VALUES ('version', '4.4.2');
INSERT INTO `nuke_cnbya_config` VALUES ('tos_text', 'This is your default TOS. You may edit this through the Your Account Admin Panel.');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_cnbya_field`
--

CREATE TABLE `nuke_cnbya_field` (
  `fid` int(10) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default 'field',
  `value` varchar(255) default NULL,
  `size` int(3) default NULL,
  `need` int(1) NOT NULL default '1',
  `pos` int(3) default NULL,
  `public` int(1) NOT NULL default '1',
  PRIMARY KEY  (`fid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_cnbya_field`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_cnbya_value`
--

CREATE TABLE `nuke_cnbya_value` (
  `vid` int(10) NOT NULL auto_increment,
  `uid` int(10) NOT NULL default '0',
  `fid` int(10) NOT NULL default '0',
  `value` varchar(255) default NULL,
  PRIMARY KEY  (`vid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_cnbya_value`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_cnbya_value_temp`
--

CREATE TABLE `nuke_cnbya_value_temp` (
  `vid` int(10) NOT NULL auto_increment,
  `uid` int(10) NOT NULL default '0',
  `fid` int(10) NOT NULL default '0',
  `value` varchar(255) default NULL,
  PRIMARY KEY  (`vid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_cnbya_value_temp`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_comments`
--

CREATE TABLE `nuke_comments` (
  `tid` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `date` datetime default NULL,
  `name` varchar(60) NOT NULL default '',
  `email` varchar(60) default NULL,
  `url` varchar(60) default NULL,
  `host_name` varchar(60) default NULL,
  `subject` varchar(85) NOT NULL default '',
  `comment` text NOT NULL,
  `score` tinyint(4) NOT NULL default '0',
  `reason` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`tid`),
  KEY `pid` (`pid`),
  KEY `sid` (`sid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_config`
--

CREATE TABLE `nuke_config` (
  `sitename` varchar(255) NOT NULL default '',
  `nukeurl` varchar(255) NOT NULL default '',
  `site_logo` varchar(255) NOT NULL default '',
  `slogan` varchar(255) NOT NULL default '',
  `startdate` varchar(50) NOT NULL default '',
  `adminmail` varchar(255) NOT NULL default '',
  `anonpost` tinyint(1) NOT NULL default '0',
  `default_Theme` varchar(255) NOT NULL default '',
  `foot1` text NOT NULL,
  `foot2` text NOT NULL,
  `foot3` text NOT NULL,
  `commentlimit` int(9) NOT NULL default '4096',
  `anonymous` varchar(255) NOT NULL default '',
  `minpass` tinyint(1) NOT NULL default '5',
  `pollcomm` tinyint(1) NOT NULL default '1',
  `articlecomm` tinyint(1) NOT NULL default '1',
  `broadcast_msg` tinyint(1) NOT NULL default '1',
  `my_headlines` tinyint(1) NOT NULL default '1',
  `top` int(3) NOT NULL default '10',
  `storyhome` int(2) NOT NULL default '10',
  `user_news` tinyint(1) NOT NULL default '1',
  `oldnum` int(2) NOT NULL default '30',
  `ultramode` tinyint(1) NOT NULL default '0',
  `banners` tinyint(1) NOT NULL default '1',
  `backend_title` varchar(255) NOT NULL default '',
  `backend_language` varchar(10) NOT NULL default '',
  `language` varchar(100) NOT NULL default '',
  `locale` varchar(10) NOT NULL default '',
  `multilingual` tinyint(1) NOT NULL default '0',
  `useflags` tinyint(1) NOT NULL default '0',
  `notify` tinyint(1) NOT NULL default '0',
  `notify_email` varchar(255) NOT NULL default '',
  `notify_subject` varchar(255) NOT NULL default '',
  `notify_message` varchar(255) NOT NULL default '',
  `notify_from` varchar(255) NOT NULL default '',
  `moderate` tinyint(1) NOT NULL default '0',
  `admingraphic` tinyint(1) NOT NULL default '1',
  `httpref` tinyint(1) NOT NULL default '1',
  `httprefmax` int(5) NOT NULL default '1000',
  `CensorMode` tinyint(1) NOT NULL default '3',
  `CensorReplace` varchar(10) NOT NULL default '',
  `copyright` text NOT NULL,
  `Version_Num` varchar(10) NOT NULL default '',
  `admin_pos` tinyint(1) NOT NULL default '1',
  `admin_log_lines` int(11) NOT NULL default '0',
  `error_log_lines` int(11) NOT NULL default '0',
  `cache_data` MEDIUMBLOB NOT NULL,
  PRIMARY KEY  (`sitename`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_config`
--

INSERT INTO `nuke_config` VALUES ('My Site', 'http://--------.---', 'logo.gif', 'Your slogan here', 'December 2005', 'webmaster@------.---', 0, 'chromo', '<a href="modules.php?name=Spambot_Killer" target="_blank">Spambot Killer</a><br /><a href="modules.php?name=Site_Map" target="_blank"><strong>Site Map</strong></a><br />', '<a href="rss.php?feed=news" target="_blank"><img border="0" src="images/powered/feed_20_news.png" width="94" height="15" alt="[News Feed]" title="News Feed" /></a> <a href="rss.php?feed=forums" target="_blank"><img border="0" src="images/powered/feed_20_forums.png" width="94" height="15" alt="[Forums Feed]" title="Forums Feed" /></a> <a href="rss.php?feed=downloads" target="_blank" /><img border="0" src="images/powered/feed_20_down.png" width="94" height="15" alt="[Downloads Feed]" title="Downloads Feed" /></a> <a href="rss.php?feed=weblinks" target="_blank"><img border="0" src="images/powered/feed_20_links.png" width="94" height="15" alt="[Web Links Feed]" title="Web Links Feed" /></a> <a href="http://tool.motoricerca.info/robots-checker.phtml?checkreferer=1" target="_blank"><img border="0" src="images/powered/valid-robots.png" width="80" height="15" alt="[Validate robots.txt]" title="Validate robots.txt" /></a><br />', '', 4096, 'Anonymous', 5, 1, 1, 1, 1, 10, 10, 1, 30, 0, 0, 'Nuke-Evolution Powered Site', 'en-us', 'english', 'en_US', 0, 0, 0, 'webmaster@---------.---', 'NEWS for my site', 'Hey! You got a new submission for your site.', 'webmaster', 0, 1, 1, 1000, 3, '*****', 'PHP-Nuke Copyright &copy; 2006 by Francisco Burzi.<br />All logos, trademarks and posts in this site are property of their respective owners, all the rest &copy; 2006 by the site owner.<br />Powered by <a href="http://www.nuke-evolution.com" target="_blank">Nuke-Evolution</a>.<br />', '7.6.0', 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_confirm`
--

CREATE TABLE `nuke_confirm` (
  `confirm_id` char(32) NOT NULL default '',
  `session_id` char(32) NOT NULL default '',
  `code` char(6) NOT NULL default '',
  PRIMARY KEY  (`session_id`,`confirm_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_confirm`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_counter`
--

CREATE TABLE `nuke_counter` (
  `type` varchar(80) NOT NULL default '',
  `var` varchar(80) NOT NULL default '',
  `count` int(10) unsigned NOT NULL default '0',
  KEY `var` (`var`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_counter`
--

INSERT INTO `nuke_counter` VALUES ('total', 'hits', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Avant', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Camino', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Crazy', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'DEVONtech', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Dillo', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Galeon', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'ELinks', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Epiphany', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Firefox', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'iRider', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'K-Meleon', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Konqueror', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Lynx', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Maxthon', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Mozilla', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'MSIE', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'MultiZilla', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'NetCaptor', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Netscape', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'OmniWeb', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Opera', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Safari', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Shiira', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Voyager', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'w3m', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'WAP', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'WebWasher', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Bot', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Other', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'Windows', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'Linspire', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'Linux', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'Mac', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'FreeBSD', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'SunOS', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'IRIX', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'OS/2', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'AIX', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'Other', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_country`
--

CREATE TABLE `nuke_country` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(80) NOT NULL default '',
  KEY `id` (`id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_counter`
--

INSERT INTO `nuke_country` VALUES (1,'United States');
INSERT INTO `nuke_country` VALUES (0,'United Kingdom');
INSERT INTO `nuke_country` VALUES (2,'France');
INSERT INTO `nuke_country` VALUES (4,'Switzerland');
INSERT INTO `nuke_country` VALUES (5,'Afghanistan');
INSERT INTO `nuke_country` VALUES (6,'Albania');
INSERT INTO `nuke_country` VALUES (7,'Algeria');
INSERT INTO `nuke_country` VALUES (8,'American Somoa');
INSERT INTO `nuke_country` VALUES (9,'Andorra');
INSERT INTO `nuke_country` VALUES (10,'Angola');
INSERT INTO `nuke_country` VALUES (11,'Anguilla');
INSERT INTO `nuke_country` VALUES (12,'Antartica');
INSERT INTO `nuke_country` VALUES (13,'Antigua & Barbuda');
INSERT INTO `nuke_country` VALUES (14,'Argentina');
INSERT INTO `nuke_country` VALUES (15,'Armenia');
INSERT INTO `nuke_country` VALUES (16,'Aruba');
INSERT INTO `nuke_country` VALUES (17,'Australia');
INSERT INTO `nuke_country` VALUES (18,'Austria');
INSERT INTO `nuke_country` VALUES (19,'Azerbaijan');
INSERT INTO `nuke_country` VALUES (20,'Azores');
INSERT INTO `nuke_country` VALUES (21,'Bahamas');
INSERT INTO `nuke_country` VALUES (22,'Bahrain');
INSERT INTO `nuke_country` VALUES (23,'Balearic Islands');
INSERT INTO `nuke_country` VALUES (24,'Bangladesh');
INSERT INTO `nuke_country` VALUES (25,'Barbados');
INSERT INTO `nuke_country` VALUES (26,'Belarus');
INSERT INTO `nuke_country` VALUES (27,'Belgium');
INSERT INTO `nuke_country` VALUES (28,'Belize');
INSERT INTO `nuke_country` VALUES (29,'Benin');
INSERT INTO `nuke_country` VALUES (30,'Bermuda');
INSERT INTO `nuke_country` VALUES (31,'Bhutan');
INSERT INTO `nuke_country` VALUES (32,'Bolivia');
INSERT INTO `nuke_country` VALUES (33,'Bonaire');
INSERT INTO `nuke_country` VALUES (34,'Bosnia & Herzegovinia');
INSERT INTO `nuke_country` VALUES (35,'Botswana');
INSERT INTO `nuke_country` VALUES (36,'Brazil');
INSERT INTO `nuke_country` VALUES (37,'Brunei');
INSERT INTO `nuke_country` VALUES (38,'Bulgaria');
INSERT INTO `nuke_country` VALUES (39,'BurkinaFaso');
INSERT INTO `nuke_country` VALUES (40,'Burundi');
INSERT INTO `nuke_country` VALUES (41,'Cambodia');
INSERT INTO `nuke_country` VALUES (42,'Cameroon');
INSERT INTO `nuke_country` VALUES (43,'Canada');
INSERT INTO `nuke_country` VALUES (44,'Canary Islands');
INSERT INTO `nuke_country` VALUES (45,'Cape Verde');
INSERT INTO `nuke_country` VALUES (46,'Cayman Islands');
INSERT INTO `nuke_country` VALUES (47,'Central Africa Republic');
INSERT INTO `nuke_country` VALUES (48,'Chad');
INSERT INTO `nuke_country` VALUES (49,'Chile');
INSERT INTO `nuke_country` VALUES (50,'China');
INSERT INTO `nuke_country` VALUES (51,'Colombia');
INSERT INTO `nuke_country` VALUES (52,'Comoros');
INSERT INTO `nuke_country` VALUES (53,'Congo');
INSERT INTO `nuke_country` VALUES (54,'CostaRica');
INSERT INTO `nuke_country` VALUES (55,'Croatia');
INSERT INTO `nuke_country` VALUES (56,'Cuba');
INSERT INTO `nuke_country` VALUES (57,'Curacao');
INSERT INTO `nuke_country` VALUES (58,'Cyprus');
INSERT INTO `nuke_country` VALUES (59,'Czech Republic');
INSERT INTO `nuke_country` VALUES (60,'Denmark');
INSERT INTO `nuke_country` VALUES (61,'Djibouti');
INSERT INTO `nuke_country` VALUES (62,'Dominican Republic');
INSERT INTO `nuke_country` VALUES (63,'Ecuador');
INSERT INTO `nuke_country` VALUES (64,'Egypt');
INSERT INTO `nuke_country` VALUES (65,'ElSalvador');
INSERT INTO `nuke_country` VALUES (66,'Equatorial Guinea');
INSERT INTO `nuke_country` VALUES (67,'Eritrea');
INSERT INTO `nuke_country` VALUES (68,'Estonia');
INSERT INTO `nuke_country` VALUES (69,'Ethiopia');
INSERT INTO `nuke_country` VALUES (70,'Falkland Islands');
INSERT INTO `nuke_country` VALUES (71,'Fiji');
INSERT INTO `nuke_country` VALUES (72,'Finland');
INSERT INTO `nuke_country` VALUES (73,'French Guiana');
INSERT INTO `nuke_country` VALUES (74,'Gambia');
INSERT INTO `nuke_country` VALUES (75,'Georgia');
INSERT INTO `nuke_country` VALUES (76,'Germany');
INSERT INTO `nuke_country` VALUES (77,'Ghana');
INSERT INTO `nuke_country` VALUES (78,'Gibraltar');
INSERT INTO `nuke_country` VALUES (79,'Greece');
INSERT INTO `nuke_country` VALUES (80,'Greenland');
INSERT INTO `nuke_country` VALUES (81,'Grenada');
INSERT INTO `nuke_country` VALUES (82,'Guadeloupe');
INSERT INTO `nuke_country` VALUES (83,'Guatemala');
INSERT INTO `nuke_country` VALUES (84,'Guernsey');
INSERT INTO `nuke_country` VALUES (85,'Guinea Bissau');
INSERT INTO `nuke_country` VALUES (86,'Guyana');
INSERT INTO `nuke_country` VALUES (87,'Haiti');
INSERT INTO `nuke_country` VALUES (88,'Honduras');
INSERT INTO `nuke_country` VALUES (89,'HongKong');
INSERT INTO `nuke_country` VALUES (90,'Hungary');
INSERT INTO `nuke_country` VALUES (91,'Iceland');
INSERT INTO `nuke_country` VALUES (92,'India');
INSERT INTO `nuke_country` VALUES (93,'Indonesia');
INSERT INTO `nuke_country` VALUES (94,'Iran');
INSERT INTO `nuke_country` VALUES (95,'Iraq');
INSERT INTO `nuke_country` VALUES (96,'Ireland');
INSERT INTO `nuke_country` VALUES (97,'Israel');
INSERT INTO `nuke_country` VALUES (98,'Italy');
INSERT INTO `nuke_country` VALUES (99,'IvoryCoast');
INSERT INTO `nuke_country` VALUES (100,'Jamaica');
INSERT INTO `nuke_country` VALUES (101,'Japan');
INSERT INTO `nuke_country` VALUES (102,'Jersey');
INSERT INTO `nuke_country` VALUES (103,'Jordan');
INSERT INTO `nuke_country` VALUES (104,'Kazakhstan');
INSERT INTO `nuke_country` VALUES (105,'Kenya');
INSERT INTO `nuke_country` VALUES (106,'Kuwait');
INSERT INTO `nuke_country` VALUES (107,'Kyrgyzstan');
INSERT INTO `nuke_country` VALUES (108,'Laos');
INSERT INTO `nuke_country` VALUES (109,'Latvia');
INSERT INTO `nuke_country` VALUES (110,'Lebanon');
INSERT INTO `nuke_country` VALUES (111,'Lesotho');
INSERT INTO `nuke_country` VALUES (112,'Liberia');
INSERT INTO `nuke_country` VALUES (113,'Libya');
INSERT INTO `nuke_country` VALUES (114,'Liechtenstein');
INSERT INTO `nuke_country` VALUES (115,'Lithuania');
INSERT INTO `nuke_country` VALUES (116,'Luxembourg');
INSERT INTO `nuke_country` VALUES (117,'Macau');
INSERT INTO `nuke_country` VALUES (118,'Macedonia');
INSERT INTO `nuke_country` VALUES (119,'Madagascar');
INSERT INTO `nuke_country` VALUES (120,'Maderia');
INSERT INTO `nuke_country` VALUES (121,'Malawi');
INSERT INTO `nuke_country` VALUES (122,'Malaysia');
INSERT INTO `nuke_country` VALUES (123,'Maldives');
INSERT INTO `nuke_country` VALUES (124,'Mali');
INSERT INTO `nuke_country` VALUES (125,'Malta');
INSERT INTO `nuke_country` VALUES (126,'Martinique');
INSERT INTO `nuke_country` VALUES (127,'Mauritania');
INSERT INTO `nuke_country` VALUES (128,'Mauritius');
INSERT INTO `nuke_country` VALUES (129,'Mexico');
INSERT INTO `nuke_country` VALUES (130,'Moldova');
INSERT INTO `nuke_country` VALUES (131,'Monaco');
INSERT INTO `nuke_country` VALUES (132,'Mongolia');
INSERT INTO `nuke_country` VALUES (133,'Montserrat');
INSERT INTO `nuke_country` VALUES (134,'Morocco');
INSERT INTO `nuke_country` VALUES (135,'Mozambique');
INSERT INTO `nuke_country` VALUES (136,'Myanmar');
INSERT INTO `nuke_country` VALUES (137,'Myanmer');
INSERT INTO `nuke_country` VALUES (138,'Namibia');
INSERT INTO `nuke_country` VALUES (139,'Nauru');
INSERT INTO `nuke_country` VALUES (140,'Nepal');
INSERT INTO `nuke_country` VALUES (141,'Netherlands');
INSERT INTO `nuke_country` VALUES (142,'New Caledonia');
INSERT INTO `nuke_country` VALUES (143,'New Zealand');
INSERT INTO `nuke_country` VALUES (144,'Nicaragua');
INSERT INTO `nuke_country` VALUES (145,'Niger');
INSERT INTO `nuke_country` VALUES (146,'Nigeria');
INSERT INTO `nuke_country` VALUES (147,'North Korea');
INSERT INTO `nuke_country` VALUES (148,'Norway');
INSERT INTO `nuke_country` VALUES (149,'Oman');
INSERT INTO `nuke_country` VALUES (150,'Pakistan');
INSERT INTO `nuke_country` VALUES (151,'Panama');
INSERT INTO `nuke_country` VALUES (152,'Papua New Guinea');
INSERT INTO `nuke_country` VALUES (153,'Paraguay');
INSERT INTO `nuke_country` VALUES (154,'Peru');
INSERT INTO `nuke_country` VALUES (155,'Philippines');
INSERT INTO `nuke_country` VALUES (156,'Poland');
INSERT INTO `nuke_country` VALUES (157,'Portugal');
INSERT INTO `nuke_country` VALUES (158,'PuertoRico');
INSERT INTO `nuke_country` VALUES (159,'Qatar');
INSERT INTO `nuke_country` VALUES (160,'Reunion');
INSERT INTO `nuke_country` VALUES (161,'Romania');
INSERT INTO `nuke_country` VALUES (162,'Russia');
INSERT INTO `nuke_country` VALUES (163,'Rwanda');
INSERT INTO `nuke_country` VALUES (164,'Saint Eustatius');
INSERT INTO `nuke_country` VALUES (165,'Saint Kitts and Nevis');
INSERT INTO `nuke_country` VALUES (166,'Saint Lucia');
INSERT INTO `nuke_country` VALUES (167,'Saint Vincent and the Grenadines');
INSERT INTO `nuke_country` VALUES (168,'San Marino');
INSERT INTO `nuke_country` VALUES (169,'Sao Tome');
INSERT INTO `nuke_country` VALUES (170,'Saudi Arabia');
INSERT INTO `nuke_country` VALUES (171,'Senegal');
INSERT INTO `nuke_country` VALUES (172,'Seychelles');
INSERT INTO `nuke_country` VALUES (173,'SierraLeone');
INSERT INTO `nuke_country` VALUES (174,'Singapore');
INSERT INTO `nuke_country` VALUES (175,'Slovakia');
INSERT INTO `nuke_country` VALUES (176,'Slovenia');
INSERT INTO `nuke_country` VALUES (177,'Solomon Islands');
INSERT INTO `nuke_country` VALUES (178,'Somalia');
INSERT INTO `nuke_country` VALUES (179,'South Africa');
INSERT INTO `nuke_country` VALUES (180,'South Korea');
INSERT INTO `nuke_country` VALUES (181,'Spain');
INSERT INTO `nuke_country` VALUES (182,'Sri Lanka');
INSERT INTO `nuke_country` VALUES (183,'St Maarten');
INSERT INTO `nuke_country` VALUES (184,'Sudan');
INSERT INTO `nuke_country` VALUES (185,'Suriname');
INSERT INTO `nuke_country` VALUES (186,'Swaziland');
INSERT INTO `nuke_country` VALUES (187,'Sweden');
INSERT INTO `nuke_country` VALUES (188,'Syria');
INSERT INTO `nuke_country` VALUES (189,'Taiwan');
INSERT INTO `nuke_country` VALUES (190,'Tajikistan');
INSERT INTO `nuke_country` VALUES (191,'Tanzania');
INSERT INTO `nuke_country` VALUES (192,'Thailand');
INSERT INTO `nuke_country` VALUES (193,'Togo');
INSERT INTO `nuke_country` VALUES (194,'Trinidad and Tobago');
INSERT INTO `nuke_country` VALUES (195,'Tunisia');
INSERT INTO `nuke_country` VALUES (196,'Turkey');
INSERT INTO `nuke_country` VALUES (197,'Turkmenistan');
INSERT INTO `nuke_country` VALUES (198,'Turks and Caicos Islands');
INSERT INTO `nuke_country` VALUES (199,'Tuvalu');
INSERT INTO `nuke_country` VALUES (200,'Uganda');
INSERT INTO `nuke_country` VALUES (201,'Ukraine');
INSERT INTO `nuke_country` VALUES (202,'UnitedArabEmirates');
INSERT INTO `nuke_country` VALUES (203,'Uruguay');
INSERT INTO `nuke_country` VALUES (205,'Uzbekistan');
INSERT INTO `nuke_country` VALUES (206,'Vanuatu');
INSERT INTO `nuke_country` VALUES (207,'VaticanCity');
INSERT INTO `nuke_country` VALUES (208,'Venezuela');
INSERT INTO `nuke_country` VALUES (209,'Vietnam');
INSERT INTO `nuke_country` VALUES (210,'Virgin Islands - British');
INSERT INTO `nuke_country` VALUES (211,'Virgin Islands - US');
INSERT INTO `nuke_country` VALUES (212,'Yemen');
INSERT INTO `nuke_country` VALUES (213,'Yugoslavia');
INSERT INTO `nuke_country` VALUES (214,'Zaire (Congo)');
INSERT INTO `nuke_country` VALUES (215,'Zambia');
INSERT INTO `nuke_country` VALUES (216,'Zanzibar Island');
INSERT INTO `nuke_country` VALUES (217,'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_donators`
--

CREATE TABLE `nuke_donators` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL default '0',
  `uname` varchar(60) NOT NULL default '',
  `fname` varchar(25) NOT NULL default '',
  `lname` varchar(25) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `donated` decimal(8,2) NOT NULL default '0.00',
  `dondate` varchar(255) NOT NULL default '',
  `donshow` tinyint(1) NOT NULL default '0',
  `uip` varchar(255) NOT NULL default '',
  `donok` tinyint(1) NOT NULL default '0',
  `msg` text,
  `donto` VARCHAR( 255 ) NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_donators`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_donators_config`
--

CREATE TABLE `nuke_donators_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` text NOT NULL,
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_donators_config`
--

INSERT INTO `nuke_donators_config` VALUES ('values', '5,10,25,50,100');
INSERT INTO `nuke_donators_config` VALUES ('block_show_amount', 'yes');
INSERT INTO `nuke_donators_config` VALUES ('block_show_anon_amount', 'yes');
INSERT INTO `nuke_donators_config` VALUES ('block_button_image', 'images/donations/x-click-but04.gif');
INSERT INTO `nuke_donators_config` VALUES ('block_num_donations', '10');
INSERT INTO `nuke_donators_config` VALUES ('block_show_dates', 'yes');
INSERT INTO `nuke_donators_config` VALUES ('block_message', 'Find our site useful? Make a small donation to show your support.');
INSERT INTO `nuke_donators_config` VALUES ('block_show_goal', 'no');
INSERT INTO `nuke_donators_config` VALUES ('block_scroll', 'yes');
INSERT INTO `nuke_donators_config` VALUES ('block_numbers', 'no');
INSERT INTO `nuke_donators_config` VALUES ('page_num_donations', '25');
INSERT INTO `nuke_donators_config` VALUES ('page_show_anon_amount', 'yes');
INSERT INTO `nuke_donators_config` VALUES ('page_show_amount', 'yes');
INSERT INTO `nuke_donators_config` VALUES ('page_show_dates', 'no');
INSERT INTO `nuke_donators_config` VALUES ('page_header_image', '');
INSERT INTO `nuke_donators_config` VALUES ('gen_pp_email', '');
INSERT INTO `nuke_donators_config` VALUES ('gen_donation_name', 'Site Donation');
INSERT INTO `nuke_donators_config` VALUES ('gen_donation_code', 'site_donation');
INSERT INTO `nuke_donators_config` VALUES ('gen_button_image', 'images/donations/x-click-butcc-donate.gif');
INSERT INTO `nuke_donators_config` VALUES ('gen_currency', 'USD');
INSERT INTO `nuke_donators_config` VALUES ('gen_monthly_goal', '50.00');
INSERT INTO `nuke_donators_config` VALUES ('gen_date_format', 'm/d/Y');
INSERT INTO `nuke_donators_config` VALUES ('gen_type_private', 'no');
INSERT INTO `nuke_donators_config` VALUES ('gen_type_anon', 'no');
INSERT INTO `nuke_donators_config` VALUES ('gen_thank_image', '');
INSERT INTO `nuke_donators_config` VALUES ('gen_thank_message', 'Thank you for your kind donation!<br /><br />Please come again!');
INSERT INTO `nuke_donators_config` VALUES ('gen_cancel_image', 'images/logo.gif');
INSERT INTO `nuke_donators_config` VALUES ('gen_cancel_message', 'Sorry you could not donate!<br /><br />Please come again!');
INSERT INTO `nuke_donators_config` VALUES ('gen_page_image', 'images/logo.gif');
INSERT INTO `nuke_donators_config` VALUES ('gen_message', 'yes');
INSERT INTO `nuke_donators_config` VALUES ('gen_codes', '');
INSERT INTO `nuke_donators_config` VALUES ('gen_cookie', 'no');

-- --------------------------------------------------------


--
-- Table structure for table `nuke_downloads_accesses`
--

CREATE TABLE `nuke_downloads_accesses` (
  `username` varchar(60) NOT NULL default '',
  `downloads` int(11) NOT NULL default '0',
  `uploads` int(11) NOT NULL default '0',
  PRIMARY KEY  (`username`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_downloads_accesses`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_downloads_categories`
--

CREATE TABLE `nuke_downloads_categories` (
  `cid` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  `cdescription` text NOT NULL,
  `parentid` int(11) NOT NULL default '0',
  `whoadd` tinyint(2) NOT NULL default '0',
  `uploaddir` varchar(255) NOT NULL default '',
  `canupload` tinyint(2) NOT NULL default '0',
  `active` tinyint(2) NOT NULL default '1',
  PRIMARY KEY  (`cid`),
  KEY `title` (`title`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_downloads_categories`
--


-- --------------------------------------------------------


--
-- Table structure for table `nuke_downloads_config`
--

CREATE TABLE `nuke_downloads_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` text NOT NULL,
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_downloads_config`
--

INSERT INTO `nuke_downloads_config` VALUES ('admperpage', '50');
INSERT INTO `nuke_downloads_config` VALUES ('blockunregmodify', '0');
INSERT INTO `nuke_downloads_config` VALUES ('dateformat', 'D M j G:i:s T Y');
INSERT INTO `nuke_downloads_config` VALUES ('mostpopular', '25');
INSERT INTO `nuke_downloads_config` VALUES ('mostpopulartrig', '0');
INSERT INTO `nuke_downloads_config` VALUES ('perpage', '10');
INSERT INTO `nuke_downloads_config` VALUES ('popular', '500');
INSERT INTO `nuke_downloads_config` VALUES ('results', '10');
INSERT INTO `nuke_downloads_config` VALUES ('show_download', '0');
INSERT INTO `nuke_downloads_config` VALUES ('show_links_num', '0');
INSERT INTO `nuke_downloads_config` VALUES ('usegfxcheck', '0');

-- --------------------------------------------------------


--
-- Table structure for table `nuke_downloads_downloads`
--

CREATE TABLE `nuke_downloads_downloads` (
  `lid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
  `description` text NOT NULL,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `name` varchar(100) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `hits` int(11) NOT NULL default '0',
  `submitter` varchar(60) NOT NULL default '',
  `sub_ip` varchar(16) NOT NULL default '0.0.0.0',
  `filesize` bigint(20) NOT NULL default '0',
  `version` varchar(20) NOT NULL default '',
  `homepage` varchar(255) NOT NULL default '',
  `active` tinyint(2) NOT NULL default '1',
  PRIMARY KEY  (`lid`),
  KEY `cid` (`cid`),
  KEY `sid` (`sid`),
  KEY `title` (`title`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_downloads_downloads`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_downloads_extensions`
--

CREATE TABLE `nuke_downloads_extensions` (
  `eid` int(11) NOT NULL auto_increment,
  `ext` varchar(6) NOT NULL default '',
  `file` tinyint(1) NOT NULL default '0',
  `image` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`eid`),
  KEY `ext` (`ext`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_downloads_extensions`
--

INSERT INTO `nuke_downloads_extensions` VALUES (1, '.ace', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (2, '.arj', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (3, '.bz', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (4, '.bz2', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (5, '.cab', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (6, '.exe', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (7, '.gif', 0, 1);
INSERT INTO `nuke_downloads_extensions` VALUES (8, '.gz', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (9, '.iso', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (10, '.jpeg', 0, 1);
INSERT INTO `nuke_downloads_extensions` VALUES (11, '.jpg', 0, 1);
INSERT INTO `nuke_downloads_extensions` VALUES (12, '.lha', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (13, '.lzh', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (14, '.png', 0, 1);
INSERT INTO `nuke_downloads_extensions` VALUES (15, '.rar', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (16, '.tar', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (17, '.tgz', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (18, '.uue', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (19, '.zip', 1, 0);
INSERT INTO `nuke_downloads_extensions` VALUES (20, '.zoo', 1, 0);

-- --------------------------------------------------------


--
-- Table structure for table `nuke_downloads_mod`
--

CREATE TABLE `nuke_downloads_mods` (
  `rid` int(11) NOT NULL auto_increment,
  `lid` int(11) NOT NULL default '0',
  `cid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
  `description` text NOT NULL,
  `modifier` varchar(60) NOT NULL default '',
  `sub_ip` varchar(16) NOT NULL default '0.0.0.0',
  `brokendownload` int(3) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `filesize` bigint(20) NOT NULL default '0',
  `version` varchar(20) NOT NULL default '',
  `homepage` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`rid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_downloads_mod`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_downloads_new`
--

CREATE TABLE `nuke_downloads_new` (
  `lid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
  `description` text NOT NULL,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `name` varchar(100) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `submitter` varchar(60) NOT NULL default '',
  `sub_ip` varchar(16) NOT NULL default '0.0.0.0',
  `filesize` bigint(20) NOT NULL default '0',
  `version` varchar(20) NOT NULL default '',
  `homepage` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`lid`),
  KEY `cid` (`cid`),
  KEY `sid` (`sid`),
  KEY `title` (`title`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_downloads_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_evo_userinfo`
--

CREATE TABLE `nuke_evo_userinfo` (
`name` VARCHAR( 25 ) NOT NULL ,
`filename` VARCHAR( 25 ) NOT NULL ,
`active` TINYINT( 1 ) DEFAULT '0' NOT NULL ,
`position` INT(10) NOT NULL,
`image` VARCHAR( 255 ) NOT NULL
) TYPE = MYISAM;

INSERT INTO `nuke_evo_userinfo` VALUES ('Good Afternoon', 'good_afternoon', 1, 1, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Username', 'username', 0, 3, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Rank', 'rank', 1, 5, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Login/logout/register', 'login', 1, 8, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Current Online', 'online', 1, 10, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('PMs', 'pms', 1, 7, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Users', 'users', 1, 11, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Most Ever', 'mostever', 1, 13, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Members', 'members', 1, 4, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Avatar', 'avatar', 1, 2, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Personal Message', 'personal_message', 0, 2, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Language', 'language', 0, 4, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Posts', 'posts', 1, 15, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Break', 'Break', 1, 12, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Break', 'Break', 1, 9, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Break', 'Break', 1, 6, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Break', 'Break', 1, 3, '');
INSERT INTO `nuke_evo_userinfo` VALUES ('Break', 'Break', 1, 14, '');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_evo_userinfo_addons`
--

CREATE TABLE `nuke_evo_userinfo_addons` (
`name` VARCHAR( 255 ) NOT NULL ,
`value` TEXT NOT NULL
) TYPE = MYISAM;

INSERT INTO `nuke_evo_userinfo_addons` VALUES ('good_afternoon_message', 'Good morning %name%:');
INSERT INTO `nuke_evo_userinfo_addons` VALUES ('personal_message_message', '<div align="center">Hello %name%, <br />\r\nWelcome to %site%.</div>');
INSERT INTO `nuke_evo_userinfo_addons` VALUES ('username_center', 'yes');
INSERT INTO `nuke_evo_userinfo_addons` VALUES ('online_show_hv', 'no');
INSERT INTO `nuke_evo_userinfo_addons` VALUES ('online_scroll', 'yes');
INSERT INTO `nuke_evo_userinfo_addons` VALUES ('online_show_members', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_evolution`
--

CREATE TABLE `nuke_evolution` (
  `evo_field` varchar(50) NOT NULL default '',
  `evo_value` text NOT NULL,
  PRIMARY KEY  (`evo_field`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_evolution`
--

INSERT INTO `nuke_evolution` VALUES ('sub', 'basic');
INSERT INTO `nuke_evolution` VALUES ('ver_check', '0');
INSERT INTO `nuke_evolution` VALUES ('ver_previous', '0');
INSERT INTO `nuke_evolution` VALUES ('lock_modules', '0');
INSERT INTO `nuke_evolution` VALUES ('queries_count', '1');
INSERT INTO `nuke_evolution` VALUES ('adminssl', '0');
INSERT INTO `nuke_evolution` VALUES ('poll_random', '0');
INSERT INTO `nuke_evolution` VALUES ('poll_days', '30');
INSERT INTO `nuke_evolution` VALUES ('censor_words', 'ass asshole arse bitch bullshit c0ck clit cock crap cum cunt fag faggot fuck fucker fucking fuk fuking motherfucker pussy shit tits twat');
INSERT INTO `nuke_evolution` VALUES ('censor', '0');
INSERT INTO `nuke_evolution` VALUES ('usrclearcache', '0');
INSERT INTO `nuke_evolution` VALUES ('cache_last_cleared', UNIX_TIMESTAMP( ));
INSERT INTO `nuke_evolution` VALUES ('cache_data', '$saved_cache = array();');
INSERT INTO `nuke_evolution` VALUES ('textarea', 'none');
INSERT INTO `nuke_evolution` VALUES ('use_colors', '1');
INSERT INTO `nuke_evolution` VALUES ('usegfxcheck', '0');
INSERT INTO `nuke_evolution` VALUES ('codesize', '7');
INSERT INTO `nuke_evolution` VALUES ('codefont', 'verdana');
INSERT INTO `nuke_evolution` VALUES ('useimage', '1');
INSERT INTO `nuke_evolution` VALUES ('lazy_tap', '0');
INSERT INTO `nuke_evolution` VALUES ('img_resize', '1');
INSERT INTO `nuke_evolution` VALUES ('img_width', '300');
INSERT INTO `nuke_evolution` VALUES ('img_height', '300');
INSERT INTO `nuke_evolution` VALUES ('capfile', '');
INSERT INTO `nuke_evolution` VALUES ('module_collapse', '1');
INSERT INTO `nuke_evolution` VALUES ('collapse', '1');
INSERT INTO `nuke_evolution` VALUES ('evouserinfo_ec', '1');
INSERT INTO `nuke_evolution` VALUES ('collapsetype', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_faqanswer`
--

CREATE TABLE `nuke_faqanswer` (
  `id` tinyint(4) NOT NULL auto_increment,
  `id_cat` tinyint(4) NOT NULL default '0',
  `question` varchar(255) default '',
  `answer` text,
  PRIMARY KEY  (`id`),
  KEY `id_cat` (`id_cat`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_faqanswer`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_faqcategories`
--

CREATE TABLE `nuke_faqcategories` (
  `id_cat` tinyint(3) NOT NULL auto_increment,
  `categories` varchar(255) default NULL,
  `flanguage` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id_cat`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_faqcategories`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_headlines`
--

CREATE TABLE `nuke_headlines` (
  `hid` int(11) NOT NULL auto_increment,
  `sitename` varchar(30) NOT NULL default '',
  `headlinesurl` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`hid`)
) TYPE=MyISAM AUTO_INCREMENT=28 ;

--
-- Dumping data for table `nuke_headlines`
--

INSERT INTO `nuke_headlines` VALUES (1, 'AbsoluteGames', 'http://files.gameaholic.com/agfa.rdf');
INSERT INTO `nuke_headlines` VALUES (2, 'BrunchingShuttlecocks', 'http://www.brunching.com/brunching.rdf');
INSERT INTO `nuke_headlines` VALUES (3, 'DailyDaemonNews', 'http://daily.daemonnews.org/ddn.rdf.php3');
INSERT INTO `nuke_headlines` VALUES (4, 'DigitalTheatre', 'http://www.dtheatre.com/backend.php3?xml=yes');
INSERT INTO `nuke_headlines` VALUES (5, 'DotKDE', 'http://dot.kde.org/rdf');
INSERT INTO `nuke_headlines` VALUES (6, 'FreeDOS', 'http://sourceforge.net/export/rss2_projnews.php?group_id=5109');
INSERT INTO `nuke_headlines` VALUES (7, 'Freshmeat', 'http://freshmeat.net/backend/fm.rdf');
INSERT INTO `nuke_headlines` VALUES (8, 'Gnome Desktop', 'http://www.gnomedesktop.org/backend.php');
INSERT INTO `nuke_headlines` VALUES (9, 'HappyPenguin', 'http://happypenguin.org/html/news.rdf');
INSERT INTO `nuke_headlines` VALUES (10, 'HollywoodBitchslap', 'http://hollywoodbitchslap.com/hbs.rdf');
INSERT INTO `nuke_headlines` VALUES (11, 'Learning Linux', 'http://www.learninglinux.com/backend.php');
INSERT INTO `nuke_headlines` VALUES (12, 'LinuxCentral', 'http://linuxcentral.com/backend/lcnew.rdf');
INSERT INTO `nuke_headlines` VALUES (13, 'LinuxJournal', 'http://www.linuxjournal.com/news.rss');
INSERT INTO `nuke_headlines` VALUES (14, 'LinuxWeelyNews', 'http://lwn.net/headlines/rss');
INSERT INTO `nuke_headlines` VALUES (15, 'Listology', 'http://listology.com/recent.rdf');
INSERT INTO `nuke_headlines` VALUES (16, 'MozillaNews', 'http://www.mozilla.org/news.rdf');
INSERT INTO `nuke_headlines` VALUES (17, 'NewsForge', 'http://www.newsforge.com/newsforge.rdf');
INSERT INTO `nuke_headlines` VALUES (18, 'Nuke-Evolution', 'http://www.nuke-evolution.com/rss.php?feed=news');
INSERT INTO `nuke_headlines` VALUES (19, 'NukeResources', 'http://www.nukeresources.com/backend.php');
INSERT INTO `nuke_headlines` VALUES (20, 'NukeScripts', 'http://www.nukescripts.net/backend.php');
INSERT INTO `nuke_headlines` VALUES (21, 'PDABuzz', 'http://www.pdabuzz.com/Home/tabid/54/moduleid/489/RSS.aspx');
INSERT INTO `nuke_headlines` VALUES (22, 'PHP-Nuke', 'http://phpnuke.org/backend.php');
INSERT INTO `nuke_headlines` VALUES (23, 'PHP.net', 'http://www.php.net/news.rss');
INSERT INTO `nuke_headlines` VALUES (24, 'PHPBuilder', 'http://phpbuilder.com/rss_feed.php');
INSERT INTO `nuke_headlines` VALUES (25, 'PerlMonks', 'http://www.perlmonks.org/headlines.rdf');
INSERT INTO `nuke_headlines` VALUES (26, 'TheNextLevel', 'http://www.the-nextlevel.com/rss/news');
INSERT INTO `nuke_headlines` VALUES (27, 'WebReference', 'http://webreference.com/webreference.rdf');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_jmap`
--

CREATE TABLE `nuke_jmap` (
  `name` varchar(255) NOT NULL default '',
  `value` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_jmap`
--

INSERT INTO `nuke_jmap` VALUES ('xml', '1');
INSERT INTO `nuke_jmap` VALUES ('ntopics', '10');
INSERT INTO `nuke_jmap` VALUES ('nnews', '15');
INSERT INTO `nuke_jmap` VALUES ('ndown', '10');
INSERT INTO `nuke_jmap` VALUES ('nrev', '10');
INSERT INTO `nuke_jmap` VALUES ('nuser', '5');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_links_categories`
--

CREATE TABLE `nuke_links_categories` (
  `cid` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  `cdescription` text NOT NULL,
  `parentid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`cid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_links_categories`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_links_editorials`
--

CREATE TABLE `nuke_links_editorials` (
  `linkid` int(11) NOT NULL default '0',
  `adminid` varchar(60) NOT NULL default '',
  `editorialtimestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `editorialtext` text NOT NULL,
  `editorialtitle` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`linkid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_links_editorials`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_links_links`
--

CREATE TABLE `nuke_links_links` (
  `lid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `url` varchar(100) NOT NULL default '',
  `description` text NOT NULL,
  `date` datetime default NULL,
  `name` varchar(100) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `hits` int(11) NOT NULL default '0',
  `submitter` varchar(60) NOT NULL default '',
  `linkratingsummary` double(6,4) NOT NULL default '0.0000',
  `totalvotes` int(11) NOT NULL default '0',
  `totalcomments` int(11) NOT NULL default '0',
  PRIMARY KEY  (`lid`),
  KEY `cid` (`cid`),
  KEY `sid` (`sid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_links_links`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_links_modrequest`
--

CREATE TABLE `nuke_links_modrequest` (
  `requestid` int(11) NOT NULL auto_increment,
  `lid` int(11) NOT NULL default '0',
  `cid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `url` varchar(100) NOT NULL default '',
  `description` text NOT NULL,
  `modifysubmitter` varchar(60) NOT NULL default '',
  `brokenlink` int(3) NOT NULL default '0',
  PRIMARY KEY  (`requestid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_links_modrequest`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_links_newlink`
--

CREATE TABLE `nuke_links_newlink` (
  `lid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `url` varchar(100) NOT NULL default '',
  `description` text NOT NULL,
  `name` varchar(100) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `submitter` varchar(60) NOT NULL default '',
  PRIMARY KEY  (`lid`),
  KEY `cid` (`cid`),
  KEY `sid` (`sid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_links_newlink`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_links_votedata`
--

CREATE TABLE `nuke_links_votedata` (
  `ratingdbid` int(11) NOT NULL auto_increment,
  `ratinglid` int(11) NOT NULL default '0',
  `ratinguser` varchar(60) NOT NULL default '',
  `rating` int(11) NOT NULL default '0',
  `ratinghostname` varchar(60) NOT NULL default '',
  `ratingcomments` text NOT NULL,
  `ratingtimestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`ratingdbid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_links_votedata`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_main`
--

CREATE TABLE `nuke_main` (
  `main_module` varchar(255) NOT NULL default '',
  KEY `main_module` (`main_module`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_main`
--

INSERT INTO `nuke_main` VALUES ('News');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_message`
--

CREATE TABLE `nuke_message` (
  `mid` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `content` text NOT NULL,
  `date` varchar(14) NOT NULL default '',
  `expire` int(7) NOT NULL default '0',
  `active` int(1) NOT NULL default '1',
  `view` int(1) NOT NULL default '1',
  `groups` TEXT NOT NULL,
  `mlanguage` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`mid`),
  UNIQUE KEY `mid` (`mid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_message`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_meta`
--

CREATE TABLE `nuke_meta` (
  `meta_name` varchar(50) NOT NULL default '',
  `meta_content` text NOT NULL,
  PRIMARY KEY  (`meta_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_meta`
--

INSERT INTO `nuke_meta` VALUES ('resource-type', 'document');
INSERT INTO `nuke_meta` VALUES ('distribution', 'global');
INSERT INTO `nuke_meta` VALUES ('author', 'Nuke-Evolution');
INSERT INTO `nuke_meta` VALUES ('copyright', 'Copyright (c) by Nuke-Evolution');
INSERT INTO `nuke_meta` VALUES ('keywords', 'Nuke-Evolution, evo, pne, evolution, nuke, php-nuke, software, downloads, community, forums, bulletin, boards, cms, nuke-evo, phpnuke');
INSERT INTO `nuke_meta` VALUES ('description', 'Nuke-Evolution');
INSERT INTO `nuke_meta` VALUES ('robots', 'index, follow');
INSERT INTO `nuke_meta` VALUES ('revisit-after', '1 days');
INSERT INTO `nuke_meta` VALUES ('rating', 'general');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_modules`
--

CREATE TABLE `nuke_modules` (
    `mid` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `custom_title` VARCHAR(255) NOT NULL,
    `active` TINYINT(4) DEFAULT '0' NOT NULL,
    `view` TINYINT(4) DEFAULT '0' NOT NULL,
    `inmenu` TINYINT(4) DEFAULT '1' NOT NULL,
    `pos` TINYINT(4) DEFAULT '0' NOT NULL,
    `cat_id` TINYINT(4) DEFAULT '0' NOT NULL,
    `blocks` TINYINT(4) DEFAULT '1' NOT NULL,
    `admins` varchar(255) NOT NULL default '',
    `groups` VARCHAR(50) NULL,
    PRIMARY KEY (`mid`),
    UNIQUE `mid` (`mid`),
    KEY `title` (`title`),
    KEY `custom_title` (`custom_title`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_modules`
--

INSERT INTO `nuke_modules` VALUES (1, 'Advertising', 'Advertising', 0, 0, 1, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (2, 'Content', 'Content', 1, 0, 1, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (3, 'Docs', 'Docs', 1, 0, 1, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (4, 'Downloads', 'Downloads', 1, 0, 1, 0, 5, 1, '','');
INSERT INTO `nuke_modules` VALUES (6, 'FAQ', 'FAQ', 1, 0, 1, 0, 7, 1, '', '');
INSERT INTO `nuke_modules` VALUES (7, 'Feedback', 'Feedback', 1, 0, 1, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (8, 'Forums', 'Forums', 1, 0, 1, 0, 3, 1, '','');
INSERT INTO `nuke_modules` VALUES (9, 'Groups', 'Groups', 1, 0, 1, 0, 2, 1, '','');
INSERT INTO `nuke_modules` VALUES (10, 'Members_List', 'Members List', 1, 1, 1, 0, 2, 1, '','');
INSERT INTO `nuke_modules` VALUES (11, 'News', 'News', 1, 0, 1, 0, 6, 3, '','');
INSERT INTO `nuke_modules` VALUES (12, 'NukeSentinel', 'NukeSentinel', 0, 0, 1, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (13, 'Private_Messages', 'Private Messages', 1, 0, 1, 0, 2, 1, '','');
INSERT INTO `nuke_modules` VALUES (14, 'Profile', 'Profile', 1, 0, 1, 0, 2, 1, '','');
INSERT INTO `nuke_modules` VALUES (15, 'Recommend_Us', 'Recommend Us', 1, 0, 1, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (16, 'Reviews', 'Reviews', 0, 0, 1, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (17, 'Search', 'Search', 1, 0, 1, 0, 3, 1, '','');
INSERT INTO `nuke_modules` VALUES (18, 'Spambot_Killer', 'Spambot Killer', 1, 0, 0, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (19, 'Statistics', 'Statistics', 1, 0, 1, 0, 4, 1, '','');
INSERT INTO `nuke_modules` VALUES (20, 'Stories_Archive', 'Stories Archive', 1, 0, 1, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (21, 'Submit_News', 'Submit News', 1, 0, 1, 0, 6, 1, '','');
INSERT INTO `nuke_modules` VALUES (22, 'Supporters', 'Supporters', 1, 0, 1, 0, 3, 1, '','');
INSERT INTO `nuke_modules` VALUES (23, 'Surveys', 'Surveys', 1, 0, 1, 0, 3, 1, '','');
INSERT INTO `nuke_modules` VALUES (24, 'Top', 'Top 10', 1, 0, 1, 0, 4, 1, '','');
INSERT INTO `nuke_modules` VALUES (25, 'Topics', 'Topics', 1, 0, 1, 0, 6, 1, '','');
INSERT INTO `nuke_modules` VALUES (26, 'Web_Links', 'Web Links', 1, 0, 1, 0, 5, 1, '','');
INSERT INTO `nuke_modules` VALUES (27, 'Your_Account', 'Your Account', 1, 0, 1, 0, 2, 1, '','');
INSERT INTO `nuke_modules` VALUES (28, 'Site_Map', 'Site Map', 1, 0, 1, 0, 7, 1, '','');
INSERT INTO `nuke_modules` VALUES (29, 'Donations', 'Donations', 1, 0, 1, 0, 7, 1, '','');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_modules_categories`
--

CREATE TABLE `nuke_modules_cat` (
    `cid` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(30) NOT NULL,
    `image` TEXT NOT NULL,
    `pos` TINYINT(4) DEFAULT '0' NOT NULL,
    `link_type` TINYINT(4) DEFAULT '0' NOT NULL,
    `link` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`cid`),
    UNIQUE `cid` (`cid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_modules_categories`
--

INSERT INTO `nuke_modules_cat` VALUES (1, 'Home', 'icon_home.gif', 0, 2, 'index.php');
INSERT INTO `nuke_modules_cat` VALUES (2, 'Members', 'icon_members.gif', 1, 0, '');
INSERT INTO `nuke_modules_cat` VALUES (3, 'Community', 'icon_community.gif', 2, 0, '');
INSERT INTO `nuke_modules_cat` VALUES (4, 'Statistics', 'icon_poll.gif', 3, 0, '');
INSERT INTO `nuke_modules_cat` VALUES (5, 'Files &amp; Links', 'icon_web.gif', 4, 0, '');
INSERT INTO `nuke_modules_cat` VALUES (6, 'News', 'icon_pencil.gif', 5, 0, '');
INSERT INTO `nuke_modules_cat` VALUES (7, 'Other', 'icon_general.gif', 6, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_modules_links`
--

CREATE TABLE `nuke_modules_links` (
    `lid` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(30) NOT NULL,
    `link_type` TINYINT(4) DEFAULT '0' NOT NULL,
    `link` VARCHAR(255) NOT NULL,
    `active` TINYINT(4) DEFAULT '0' NOT NULL,
    `view` TINYINT(4) DEFAULT '0' NOT NULL,
    `pos` TINYINT(4) DEFAULT '0' NOT NULL,
    `cat_id` TINYINT(4) DEFAULT '0' NOT NULL,
    PRIMARY KEY (`lid`),
    UNIQUE `lid` (`lid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_modules_links`
--

INSERT INTO `nuke_modules_links` VALUES (2, 'Home', 1, 'index.php', 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_mostonline`
--

CREATE TABLE `nuke_mostonline` (
  `total` int(10) NOT NULL default '0',
  `members` int(10) NOT NULL default '0',
  `nonmembers` int(10) NOT NULL default '0',
  PRIMARY KEY  (`total`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_mostonline`
--

INSERT INTO `nuke_mostonline` VALUES (1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnne_config`
--

CREATE TABLE `nuke_nsnne_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` longtext NOT NULL,
  UNIQUE KEY `config_name` (`config_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnne_config`
--

INSERT INTO `nuke_nsnne_config` VALUES ('columns', '0');
INSERT INTO `nuke_nsnne_config` VALUES ('readmore', '0');
INSERT INTO `nuke_nsnne_config` VALUES ('texttype', '0');
INSERT INTO `nuke_nsnne_config` VALUES ('notifyauth', '0');
INSERT INTO `nuke_nsnne_config` VALUES ('homenumber', '0');
INSERT INTO `nuke_nsnne_config` VALUES ('hometopic', '0');
INSERT INTO `nuke_nsnne_config` VALUES ('version_number', '1.1.6');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnsp_config`
--

CREATE TABLE `nuke_nsnsp_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` text NOT NULL,
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnsp_config`
--

INSERT INTO `nuke_nsnsp_config` VALUES ('require_user', '1');
INSERT INTO `nuke_nsnsp_config` VALUES ('image_type', '0');
INSERT INTO `nuke_nsnsp_config` VALUES ('max_width', '88');
INSERT INTO `nuke_nsnsp_config` VALUES ('max_height', '31');
INSERT INTO `nuke_nsnsp_config` VALUES ('version_number', '1.3.0');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnsp_sites`
--

CREATE TABLE `nuke_nsnsp_sites` (
  `site_id` int(11) NOT NULL auto_increment,
  `site_name` varchar(60) NOT NULL default '',
  `site_url` varchar(255) NOT NULL default '',
  `site_image` varchar(255) NOT NULL default '',
  `site_status` int(1) NOT NULL default '0',
  `site_hits` int(10) NOT NULL default '0',
  `site_date` date NOT NULL default '0000-00-00',
  `site_description` text NOT NULL,
  `user_id` int(11) NOT NULL default '0',
  `user_name` varchar(60) NOT NULL default '',
  `user_email` varchar(60) NOT NULL default '',
  `user_ip` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`site_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnsp_sites`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_admins`
--

CREATE TABLE `nuke_nsnst_admins` (
  `aid` varchar(25) NOT NULL default '',
  `login` varchar(25) NOT NULL default '',
  `password` varchar(20) NOT NULL default '',
  `password_md5` varchar(60) NOT NULL default '',
  `password_crypt` varchar(60) NOT NULL default '',
  `protected` tinyint(2) NOT NULL default '0',
  PRIMARY KEY  (`aid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_admins`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_blocked_ips`
--

CREATE TABLE `nuke_nsnst_blocked_ips` (
  `ip_addr` varchar(15) NOT NULL default '',
  `ip_long` int(10) unsigned NOT NULL default '0',
  `user_id` int(11) NOT NULL default '1',
  `username` varchar(60) NOT NULL default 'Anonymous',
  `user_agent` text NOT NULL,
  `date` int(20) NOT NULL default '0',
  `notes` text NOT NULL,
  `reason` tinyint(1) NOT NULL default '0',
  `query_string` text NOT NULL,
  `get_string` text NOT NULL,
  `post_string` text NOT NULL,
  `x_forward_for` varchar(32) NOT NULL default 'None',
  `client_ip` varchar(32) NOT NULL default 'None',
  `remote_addr` varchar(32) NOT NULL default '',
  `remote_port` varchar(11) NOT NULL default 'Unknown',
  `request_method` varchar(10) NOT NULL default '',
  `expires` int(20) NOT NULL default '0',
  `c2c` char(2) NOT NULL default '00',
  PRIMARY KEY  (`ip_addr`),
  KEY `ip_long` (`ip_long`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_blocked_ips`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_blocked_ranges`
--

CREATE TABLE `nuke_nsnst_blocked_ranges` (
  `ip_lo` int(10) unsigned NOT NULL default '0',
  `ip_hi` int(10) unsigned NOT NULL default '0',
  `date` int(20) NOT NULL default '0',
  `notes` text NOT NULL,
  `reason` tinyint(1) NOT NULL default '0',
  `expires` int(20) NOT NULL default '0',
  `c2c` char(2) NOT NULL default '00',
  KEY `code` (`ip_lo`,`ip_hi`,`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_blocked_ranges`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_blockers`
--

CREATE TABLE `nuke_nsnst_blockers` (
  `blocker` int(4) NOT NULL default '0',
  `block_name` varchar(20) NOT NULL default '',
  `activate` int(4) NOT NULL default '0',
  `block_type` int(4) NOT NULL default '0',
  `email_lookup` int(4) NOT NULL default '0',
  `forward` varchar(255) NOT NULL default '',
  `reason` varchar(20) NOT NULL default '',
  `template` varchar(255) NOT NULL default '',
  `duration` int(20) NOT NULL default '0',
  `htaccess` int(4) NOT NULL default '0',
  `list` longtext NOT NULL,
  PRIMARY KEY  (`blocker`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_blockers`
--

INSERT INTO `nuke_nsnst_blockers` VALUES (0, 'other', 0, 0, 0, '', 'Abuse-Other', 'abuse_default.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (1, 'union', 5, 0, 2, '', 'Abuse-Union', 'abuse_union.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (2, 'clike', 5, 0, 2, '', 'Abuse-CLike', 'abuse_clike.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (3, 'harvester', 0, 0, 0, '', 'Abuse-Harvest', 'abuse_harvester.tpl', 0, 0, '@yahoo.com\r\nalexibot\r\nalligator\r\nanonymiz\r\nasterias\r\nbackdoorbot\r\nblack hole\r\nblackwidow\r\nblowfish\r\nbotalot\r\nbuiltbottough\r\nbullseye\r\nbunnyslippers\r\ncatch\r\ncegbfeieh\r\ncharon\r\ncheesebot\r\ncherrypicker\r\nchinaclaw\r\ncombine\r\ncopyrightcheck\r\ncosmos\r\ncrescent\r\ncurl\r\ndbrowse\r\ndisco\r\ndittospyder\r\ndlman\r\ndnloadmage\r\ndownload\r\ndreampassport\r\ndts agent\r\necatch\r\neirgrabber\r\nerocrawler\r\nexpress webpictures\r\nextractorpro\r\neyenetie\r\nfantombrowser\r\nfantomcrew browser\r\nfileheap\r\nfilehound\r\nflashget\r\nfoobot\r\nfranklin locator\r\nfreshdownload\r\nfscrawler\r\ngamespy_arcade\r\ngetbot\r\ngetright\r\ngetweb\r\ngo!zilla\r\ngo-ahead-got-it\r\ngrab\r\ngrafula\r\ngsa-crawler\r\nharvest\r\nhloader\r\nhmview\r\nhttplib\r\nhttpresume\r\nhttrack\r\nhumanlinks\r\nigetter\r\nimage stripper\r\nimage sucker\r\nindustry program\r\nindy library\r\ninfonavirobot\r\ninstallshield digitalwizard\r\nINTerget\r\niria\r\nirvine\r\niupui research bot\r\njbh agent\r\njennybot\r\njetcar\r\njobo\r\njoc\r\nkapere\r\nkenjin spider\r\nkeyword density\r\nlarbin\r\nleechftp\r\nleechget\r\nlexibot\r\nlibweb/clshttp\r\nlibwww-perl\r\nlightningdownload\r\nlincoln state web browser\r\nlinkextractorpro\r\nlinkscan/8.1a.unix\r\nlinkwalker\r\nlwp-trivial\r\nlwp::simple\r\nmac finder\r\nmata hari\r\nmediasearch\r\nmetaproducts\r\nmicrosoft url control\r\nmidown tool\r\nmiixpc\r\nmissauga locate\r\nmissouri college browse\r\nmister pix\r\nmoget\r\nmozilla.*newt\r\nmozilla/3.0 (compatible)\r\nmozilla/3.mozilla/2.01\r\nmsie 4.0 (win95)\r\nmultiblocker browser\r\nmydaemon\r\nmygetright\r\nnabot\r\nnavroad\r\nnearsite\r\nnet vampire\r\nnetants\r\nnetmechanic\r\nnetpumper\r\nnetspider\r\nnewsearchengine\r\nnicerspro\r\nninja\r\nnitro downloader\r\nnpbot\r\noctopus\r\noffline explorer\r\noffline navigator\r\nopenfind\r\npagegrabber\r\npapa foto\r\npavuk\r\npbrowse\r\npcbrowser\r\npeval\r\npompos/\r\nprogram shareware\r\npropowerbot\r\nprowebwalker\r\npsurf\r\npuf\r\npuxarapido\r\nqueryn metasearch\r\nrealdownload\r\nreget\r\nrepomonkey\r\nrsurf\r\nrumours-agent\r\nsakura\r\nscan4mail\r\nsemanticdiscovery\r\nsitesnagger\r\nslysearch\r\nspankbot\r\nspanner \r\nspiderzilla\r\nsq webscanner\r\nstamina\r\nstar downloader\r\nsteeler\r\nsteeler\r\nstrip\r\nsuperbot\r\nsuperhttp\r\nsurfbot\r\nsuzuran\r\nswbot\r\nszukacz\r\ntakeout\r\nteleport\r\ntelesoft\r\ntest spider\r\nthe INTraformant\r\nthenomad\r\ntighttwatbot\r\ntitan\r\ntocrawl/urldispatcher\r\ntrue_robot\r\ntsurf\r\nturing machine\r\nturingos\r\nurlblaze\r\nurlgetfile\r\nurly warning\r\nutilmind\r\nvci\r\nvoideye\r\nweb image collector\r\nweb sucker\r\nwebauto\r\nwebbandit\r\nwebcapture\r\nwebcollage\r\nwebcopier\r\nwebenhancer\r\nwebfetch\r\nwebgo\r\nwebleacher\r\nwebmasterworldforumbot\r\nwebql\r\nwebreaper\r\nwebsite extractor\r\nwebsite quester\r\nwebster\r\nwebstripper\r\nwebwhacker\r\nwep search\r\nwget\r\nwhizbang\r\nwidow\r\nwildsoft surfer\r\nwww-collector-e\r\nwww.netwu.com\r\nwwwoffle\r\nxaldon\r\nxenu\r\nzeus\r\nziggy\r\nzippy');
INSERT INTO `nuke_nsnst_blockers` VALUES (4, 'script', 5, 0, 2, '', 'Abuse-Script', 'abuse_script.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (5, 'author', 5, 0, 2, '', 'Abuse-Author', 'abuse_author.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (6, 'referer', 5, 0, 2, '', 'Abuse-Referer', 'abuse_referer.tpl', 0, 0, '121hr.com\r\n1st-call.net\r\n1stcool.com\r\n5000n.com\r\n69-xxx.com\r\n9irl.com\r\n9uy.com\r\na-day-at-the-party.com\r\naccessthepeace.com\r\nadult-model-nude-pictures.com\r\nadult-sex-toys-free-porn.com\r\nagnitum.com\r\nalfonssackpfeiffe.com\r\nalongwayfrommars.com\r\nanime-sex-1.com\r\nanorex-sf-stimulant-free.com\r\nantibot.net\r\nantique-tokiwa.com\r\napotheke-heute.com\r\narmada31.com\r\nartark.com\r\nartlilei.com\r\nascendbtg.com\r\naschalaecheck.com\r\nasian-sex-free-sex.com\r\naslowspeeker.com\r\nassasinatedfrogs.com\r\nathirst-for-tranquillity.net\r\naubonpanier.com\r\navalonumc.com\r\nayingba.com\r\nbayofnoreturn.com\r\nbbw4phonesex.com\r\nbeersarenotfree.com\r\nbierikiuetsch.com\r\nbilingualannouncements.com\r\nblack-pussy-toon-clip-anal-lover-single.com\r\nblownapart.com\r\nblueroutes.com\r\nboasex.com\r\nbooksandpages.com\r\nbootyquake.com\r\nbossyhunter.com\r\nboyz-sex.com\r\nbrokersaandpokers.com\r\nbrowserwindowcleaner.com\r\nbudobytes.com\r\nbusiness2fun.com\r\nbuymyshitz.com\r\nbyuntaesex.com\r\ncaniputsomeloveINToyou.com\r\ncartoons.net.ru\r\ncaverunsailing.com\r\ncertainhealth.com\r\nclantea.com\r\nclose-protection-services.com\r\nclubcanino.com\r\nclubstic.com\r\ncobrakai-skf.com\r\ncollegefucktour.co.uk\r\ncommanderspank.com\r\ncoolenabled.com\r\ncrusecountryart.com\r\ncrusingforsex.co.uk\r\ncunt-twat-pussy-juice-clit-licking.com\r\ncustomerhandshaker.com\r\ncyborgrama.com\r\ndarkprofits.co.uk\r\ndatingforme.co.uk\r\ndatingmind.com\r\ndegree.org.ru\r\ndelorentos.com\r\ndiggydigger.com\r\ndinkydonkyaussie.com\r\ndjpritchard.com\r\ndjtop.com\r\ndraufgeschissen.com\r\ndreamerteens.co.uk\r\nebonyarchives.co.uk\r\nebonyplaya.co.uk\r\necobuilder2000.com\r\nemailandemail.com\r\nemedici.net\r\nengine-on-fire.com\r\nerocity.co.uk\r\nesport3.com\r\neteenbabes.com\r\neurofreepages.com\r\neurotexans.com\r\nevolucionweb.com\r\nfakoli.com\r\nfe4ba.com\r\nferienschweden.com\r\nfindly.com\r\nfirsttimeteadrinker.com\r\nfishing.net.ru\r\nflatwonkers.com\r\nflowershopentertainment.com\r\nflymario.com\r\nfree-xxx-pictures-porno-gallery.com\r\nfreebestporn.com\r\nfreefuckingmovies.co.uk\r\nfreexxxstuff.co.uk\r\nfruitologist.net\r\nfruitsandbolts.com\r\nfuck-cumshots-free-midget-movie-clips.com\r\nfuck-michaelmoore.com\r\nfundacep.com\r\ngadless.com\r\ngallapagosrangers.com\r\ngalleries4free.co.uk\r\ngalofu.com\r\ngaypixpost.co.uk\r\ngeomasti.com\r\ngirltime.co.uk\r\nglassrope.com\r\ngodjustblessyouall.com\r\ngoldenageresort.com\r\ngonnabedaddies.com\r\ngranadasexi.com\r\ngranadasexi.com\r\nguardingtheangels.com\r\nguyprofiles.co.uk\r\nhappy1225.com\r\nhappychappywacky.com\r\nhealth.org.ru\r\nhexplas.com\r\nhighheelsmodels4fun.com\r\nhillsweb.com\r\nhiptuner.com\r\nhistoryINTospace.com\r\nhoa-tuoi.com\r\nhomebuyinginatlanta.com\r\nhorizonultra.com\r\nhorseminiature.net\r\nhotkiss.co.uk\r\nhotlivegirls.co.uk\r\nhotmatchup.co.uk\r\nhusler.co.uk\r\niaentertainment.com\r\niamnotsomeone.com\r\niconsofcorruption.com\r\nihavenotrustinyou.com\r\ninformat-systems.com\r\nINTeriorproshop.com\r\nINTersoftnetworks.com\r\nINThecrib.com\r\ninvestment4cashiers.com\r\niti-trailers.com\r\njackpot-hacker.com\r\njacks-world.com\r\njamesthesailorbasher.com\r\njesuislemonds.com\r\njustanotherdomainname.com\r\nkampelicka.com\r\nkanalrattenarsch.com\r\nkatzasher.com\r\nkerosinjunkie.com\r\nkillasvideo.com\r\nkoenigspisser.com\r\nkontorpara.com\r\nl8t.com\r\nlaestacion101.com\r\nlambuschlamppen.com\r\nlankasex.co.uk\r\nlaser-creations.com\r\nle-tour-du-monde.com\r\nlecraft.com\r\nledo-design.com\r\nleftregistration.com\r\nlekkikoomastas.com\r\nlepommeau.com\r\nlibr-animal.com\r\nlibraries.org.ru\r\nlikewaterlikewind.com\r\nlimbojumpers.com\r\nlink.ru\r\nlockportlinks.com\r\nloiproject.com\r\nlongtermalternatives.com\r\nlottoeco.com\r\nlucalozzi.com\r\nmaki-e-pens.com\r\nmalepayperview.co.uk\r\nmangaxoxo.com\r\nmaps.org.ru\r\nmarcofields.com\r\nmasterofcheese.com\r\nmasteroftheblasterhill.com\r\nmastheadwankers.com\r\nmegafrontier.com\r\nmeinschuppen.com\r\nmercurybar.com\r\nmetapannas.com\r\nmicelebre.com\r\nmidnightlaundries.com\r\nmikeapartment.co.uk\r\nmillenniumchorus.com\r\nmimundial2002.com\r\nminiaturegallerymm.com\r\nmixtaperadio.com\r\nmondialcoral.com\r\nmonja-wakamatsu.com\r\nmonstermonkey.net\r\nmouthfreshners.com\r\nmullensholiday.com\r\nmusilo.com\r\nmyhollowlog.com\r\nmyhomephonenumber.com\r\nmykeyboardisbroken.com\r\nmysofia.net\r\nnaked-cheaters.com\r\nnaked-old-women.com\r\nnastygirls.co.uk\r\nnationclan.net\r\nnatterratter.com\r\nnaughtyadam.com\r\nnestbeschmutzer.com\r\nnetwu.com\r\nnewrealeaseonline.com\r\nnewrealeasesonline.com\r\nnextfrontiersonline.com\r\nnikostaxi.com\r\nnotorious7.com\r\nnrecruiter.com\r\nnursingdepot.com\r\nnustramosse.com\r\nnuturalhicks.com\r\noccaz-auto49.com\r\nocean-db.net\r\noilburnerservice.net\r\nomburo.com\r\noneoz.com\r\nonepageahead.net\r\nonlinewithaline.com\r\norganizate.net\r\nourownweddingsong.com\r\nowen-music.com\r\np-partners.com\r\npaginadeautor.com\r\npakistandutyfree.com\r\npamanderson.co.uk\r\nparentsense.net\r\nparticlewave.net\r\npay-clic.com\r\npay4link.net\r\npcisp.com\r\npersist-pharma.com\r\npeteband.com\r\npetplusindia.com\r\npickabbw.co.uk\r\npicture-oral-position-lesbian.com\r\npl8again.com\r\nplaneting.net\r\npopusky.com\r\nporn-expert.com\r\npromoblitza.com\r\nproproducts-usa.com\r\nptcgzone.com\r\nptporn.com\r\npublishmybong.com\r\nputtingtogether.com\r\nqualifiedcancelations.com\r\nrahost.com\r\nrainbow21.com\r\nrakkashakka.com\r\nrandomfeeding.com\r\nrape-art.com\r\nrd-brains.com\r\nrealestateonthehill.net\r\nrebuscadobot\r\nrequested-stuff.com\r\nretrotrasher.com\r\nricopositive.com\r\nrisorseinrete.com\r\nrotatingcunts.com\r\nrunawayclicks.com\r\nrutalibre.com\r\ns-marche.com\r\nsabrosojazz.com\r\nsamuraidojo.com\r\nsanaldarbe.com\r\nsasseminars.com\r\nschlampenbruzzler.com\r\nsearchmybong.com\r\nseckur.com\r\nsex-asian-porn-INTerracial-photo.com\r\nsex-porn-fuck-hardcore-movie.com\r\nsexa3.net\r\nsexer.com\r\nsexINTention.com\r\nsexnet24.tv\r\nsexomundo.com\r\nsharks.com.ru\r\nshells.com.ru\r\nshop-ecosafe.com\r\nshop-toon-hardcore-fuck-cum-pics.com\r\nsilverfussions.com\r\nsin-city-sex.net\r\nsluisvan.com\r\nsmutshots.com\r\nsnagglersmaggler.com\r\nsomethingtoforgetit.com\r\nsophiesplace.net\r\nsoursushi.com\r\nsouthernxstables.com\r\nspeed467.com\r\nspeedpal4you.com\r\nsporty.org.ru\r\nstopdriving.net\r\nstw.org.ru\r\nsufficientlife.com\r\nsussexboats.net\r\nswinger-party-free-dating-porn-sluts.com\r\nsydneyhay.com\r\nszmjht.com\r\nteninchtrout.com\r\nthebalancedfruits.com\r\ntheendofthesummit.com\r\nthiswillbeit.com\r\nthosethosethose.com\r\nticyclesofindia.com\r\ntits-gay-fagot-black-tits-bigtits-amateur.com\r\ntonius.com\r\ntoohsoft.com\r\ntoolvalley.com\r\ntooporno.net\r\ntoosexual.com\r\ntorngat.com\r\ntour.org.ru\r\ntowneluxury.com\r\ntrafficmogger.com\r\ntriacoach.net\r\ntrottinbob.com\r\ntttframes.com\r\ntvjukebox.net\r\nundercvr.com\r\nunfinished-desires.com\r\nunicornonero.com\r\nunionvillefire.com\r\nupsandowns.com\r\nupthehillanddown.com\r\nvallartavideo.com\r\nvietnamdatingservices.com\r\nvinegarlemonshots.com\r\nvizy.net.ru\r\nvnladiesdatingservices.com\r\nvomitandbusted.com\r\nwalkingthewalking.com\r\nwell-I-am-the-type-of-boy.com\r\nwhales.com.ru\r\nwhincer.net\r\nwhitpagesrippers.com\r\nwhois.sc\r\nwipperrippers.com\r\nwordfilebooklets.com\r\nworld-sexs.com\r\nxsay.com\r\nxxxchyangel.com\r\nxxxzips.com\r\nyouarelostINTransit.com\r\nyuppieslovestocks.com\r\nyuzhouhuagong.com\r\nzhaori-food.com\r\nzwiebelbacke.com');
INSERT INTO `nuke_nsnst_blockers` VALUES (7, 'filter', 5, 0, 2, '', 'Abuse-Filter', 'abuse_filter.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (8, 'request', 0, 0, 0, '', 'Abuse-Request', 'abuse_request.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (9, 'string', 0, 0, 0, '', 'Abuse-String', 'abuse_string.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (10, 'admin', 0, 0, 0, '', 'Abuse-Admin', 'abuse_admin.tpl', 0, 0, '');
INSERT INTO `nuke_nsnst_blockers` VALUES (11, 'flood', 0, 1, 2, '', 'Abuse-Flood', 'abuse_flood.tpl', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_cidrs`
--

CREATE TABLE `nuke_nsnst_cidrs` (
  `cidr` int(2) NOT NULL default '0',
  `hosts` int(10) NOT NULL default '0',
  `mask` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`cidr`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_cidrs`
--

INSERT INTO `nuke_nsnst_cidrs` VALUES (1, 2147483647, '127.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (2, 1073741824, '63.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (3, 536870912, '31.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (4, 268435456, '15.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (5, 134217728, '7.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (6, 67108864, '3.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (7, 33554432, '1.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (8, 16777216, '0.255.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (9, 8388608, '0.127.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (10, 4194304, '0.63.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (11, 2097152, '0.31.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (12, 1048576, '0.15.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (13, 524288, '0.7.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (14, 262144, '0.3.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (15, 131072, '0.1.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (16, 65536, '0.0.255.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (17, 32768, '0.0.127.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (18, 16384, '0.0.63.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (19, 8192, '0.0.31.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (20, 4096, '0.0.15.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (21, 2048, '0.0.7.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (22, 1024, '0.0.3.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (23, 512, '0.0.1.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (24, 256, '0.0.0.255');
INSERT INTO `nuke_nsnst_cidrs` VALUES (25, 128, '0.0.0.127');
INSERT INTO `nuke_nsnst_cidrs` VALUES (26, 64, '0.0.0.63');
INSERT INTO `nuke_nsnst_cidrs` VALUES (27, 32, '0.0.0.31');
INSERT INTO `nuke_nsnst_cidrs` VALUES (28, 16, '0.0.0.15');
INSERT INTO `nuke_nsnst_cidrs` VALUES (29, 8, '0.0.0.7');
INSERT INTO `nuke_nsnst_cidrs` VALUES (30, 4, '0.0.0.3');
INSERT INTO `nuke_nsnst_cidrs` VALUES (31, 2, '0.0.0.1');
INSERT INTO `nuke_nsnst_cidrs` VALUES (32, 1, '0.0.0.0');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_config`
--

CREATE TABLE `nuke_nsnst_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` longtext NOT NULL,
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_config`
--

INSERT INTO `nuke_nsnst_config` VALUES ('admin_contact', 'webmaster@yoursite.com');
INSERT INTO `nuke_nsnst_config` VALUES ('block_perpage', '50');
INSERT INTO `nuke_nsnst_config` VALUES ('block_sort_column', 'date');
INSERT INTO `nuke_nsnst_config` VALUES ('block_sort_direction', 'desc');
INSERT INTO `nuke_nsnst_config` VALUES ('crypt_salt', 'N$');
INSERT INTO `nuke_nsnst_config` VALUES ('display_link', '3');
INSERT INTO `nuke_nsnst_config` VALUES ('display_reason', '3');
INSERT INTO `nuke_nsnst_config` VALUES ('force_nukeurl', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('help_switch', '1');
INSERT INTO `nuke_nsnst_config` VALUES ('htaccess_path', '');
INSERT INTO `nuke_nsnst_config` VALUES ('http_auth', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('lookup_link', 'http://www.DNSstuff.com/tools/whois.ch?ip=');
INSERT INTO `nuke_nsnst_config` VALUES ('page_delay', '5');
INSERT INTO `nuke_nsnst_config` VALUES ('prevent_dos', '1');
INSERT INTO `nuke_nsnst_config` VALUES ('proxy_reason', 'admin_proxy_reason.tpl');
INSERT INTO `nuke_nsnst_config` VALUES ('proxy_switch', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('santy_protection', '1');
INSERT INTO `nuke_nsnst_config` VALUES ('self_expire', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('site_reason', 'admin_site_reason.tpl');
INSERT INTO `nuke_nsnst_config` VALUES ('site_switch', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('staccess_path', '');
INSERT INTO `nuke_nsnst_config` VALUES ('track_active', '1');
INSERT INTO `nuke_nsnst_config` VALUES ('track_max', '604800');
INSERT INTO `nuke_nsnst_config` VALUES ('track_perpage', '50');
INSERT INTO `nuke_nsnst_config` VALUES ('track_sort_column', '6');
INSERT INTO `nuke_nsnst_config` VALUES ('track_sort_direction', 'desc');
INSERT INTO `nuke_nsnst_config` VALUES ('version_check', '$checktime');
INSERT INTO `nuke_nsnst_config` VALUES ('version_newest', '2.5.08');
INSERT INTO `nuke_nsnst_config` VALUES ('version_number', '2.5.08');
INSERT INTO `nuke_nsnst_config` VALUES ('ip_reason', 'admin_ip_reason.tpl');
INSERT INTO `nuke_nsnst_config` VALUES ('ip_switch', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('ftaccess_path', '');
INSERT INTO `nuke_nsnst_config` VALUES ('flood_delay', '2');
INSERT INTO `nuke_nsnst_config` VALUES ('disable_switch', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('track_clear', '0');
INSERT INTO `nuke_nsnst_config` VALUES ('blocked_clear', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_countries`
--

CREATE TABLE `nuke_nsnst_countries` (
  `c2c` char(2) NOT NULL default '',
  `country` varchar(60) NOT NULL default '',
  KEY `c2c` (`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_countries`
--

INSERT INTO `nuke_nsnst_countries` VALUES ('00', 'Unknown');
INSERT INTO `nuke_nsnst_countries` VALUES ('01', 'IANA Reserved');
INSERT INTO `nuke_nsnst_countries` VALUES ('ac', 'Ascension Island');
INSERT INTO `nuke_nsnst_countries` VALUES ('ad', 'Andorra');
INSERT INTO `nuke_nsnst_countries` VALUES ('ae', 'United Arab Emirates');
INSERT INTO `nuke_nsnst_countries` VALUES ('af', 'Afghanistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('ag', 'Antigua And Barbuda');
INSERT INTO `nuke_nsnst_countries` VALUES ('ai', 'Anguilla');
INSERT INTO `nuke_nsnst_countries` VALUES ('al', 'Albania');
INSERT INTO `nuke_nsnst_countries` VALUES ('am', 'Armenia');
INSERT INTO `nuke_nsnst_countries` VALUES ('an', 'Netherlands Antilles');
INSERT INTO `nuke_nsnst_countries` VALUES ('ao', 'Angola');
INSERT INTO `nuke_nsnst_countries` VALUES ('ap', 'Aripo');
INSERT INTO `nuke_nsnst_countries` VALUES ('aq', 'Antartica');
INSERT INTO `nuke_nsnst_countries` VALUES ('ar', 'Argentina');
INSERT INTO `nuke_nsnst_countries` VALUES ('as', 'Samoa, American');
INSERT INTO `nuke_nsnst_countries` VALUES ('at', 'Austria');
INSERT INTO `nuke_nsnst_countries` VALUES ('au', 'Australia');
INSERT INTO `nuke_nsnst_countries` VALUES ('aw', 'Aruba');
INSERT INTO `nuke_nsnst_countries` VALUES ('ax', 'Aaland Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('az', 'Azerbaijan');
INSERT INTO `nuke_nsnst_countries` VALUES ('ba', 'Bosnia And Herzegovina');
INSERT INTO `nuke_nsnst_countries` VALUES ('bb', 'Barbados');
INSERT INTO `nuke_nsnst_countries` VALUES ('bd', 'Bangladesh');
INSERT INTO `nuke_nsnst_countries` VALUES ('be', 'Belgium');
INSERT INTO `nuke_nsnst_countries` VALUES ('bf', 'Burkina Faso');
INSERT INTO `nuke_nsnst_countries` VALUES ('bg', 'Bulgaria');
INSERT INTO `nuke_nsnst_countries` VALUES ('bh', 'Bahrain');
INSERT INTO `nuke_nsnst_countries` VALUES ('bi', 'Burundi');
INSERT INTO `nuke_nsnst_countries` VALUES ('bj', 'Benin');
INSERT INTO `nuke_nsnst_countries` VALUES ('bm', 'Bermuda');
INSERT INTO `nuke_nsnst_countries` VALUES ('bn', 'Brunei Darussalam');
INSERT INTO `nuke_nsnst_countries` VALUES ('bo', 'Bolivia');
INSERT INTO `nuke_nsnst_countries` VALUES ('br', 'Brazil');
INSERT INTO `nuke_nsnst_countries` VALUES ('bs', 'Bahamas');
INSERT INTO `nuke_nsnst_countries` VALUES ('bt', 'Bhutan');
INSERT INTO `nuke_nsnst_countries` VALUES ('bv', 'Bouvet Island');
INSERT INTO `nuke_nsnst_countries` VALUES ('bw', 'Botswana');
INSERT INTO `nuke_nsnst_countries` VALUES ('by', 'Belarus');
INSERT INTO `nuke_nsnst_countries` VALUES ('bz', 'Belize');
INSERT INTO `nuke_nsnst_countries` VALUES ('ca', 'Canada');
INSERT INTO `nuke_nsnst_countries` VALUES ('cc', 'Cocos (Keeling) Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('cd', 'Congo, Democratic Republic Of The');
INSERT INTO `nuke_nsnst_countries` VALUES ('cf', 'Central African Republic');
INSERT INTO `nuke_nsnst_countries` VALUES ('cg', 'Congo, Republic Of The');
INSERT INTO `nuke_nsnst_countries` VALUES ('ch', 'Switzerland');
INSERT INTO `nuke_nsnst_countries` VALUES ('ci', 'Cote D''ivoire');
INSERT INTO `nuke_nsnst_countries` VALUES ('ck', 'Cook Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('cl', 'Chile');
INSERT INTO `nuke_nsnst_countries` VALUES ('cm', 'Cameroon');
INSERT INTO `nuke_nsnst_countries` VALUES ('cn', 'China');
INSERT INTO `nuke_nsnst_countries` VALUES ('co', 'Colombia');
INSERT INTO `nuke_nsnst_countries` VALUES ('cr', 'Costa Rica');
INSERT INTO `nuke_nsnst_countries` VALUES ('cs', 'Czechoslovakia (Former)');
INSERT INTO `nuke_nsnst_countries` VALUES ('cu', 'Cuba');
INSERT INTO `nuke_nsnst_countries` VALUES ('cv', 'Cape Verde');
INSERT INTO `nuke_nsnst_countries` VALUES ('cx', 'Christmas Island');
INSERT INTO `nuke_nsnst_countries` VALUES ('cy', 'Cyprus');
INSERT INTO `nuke_nsnst_countries` VALUES ('cz', 'Czech Republic');
INSERT INTO `nuke_nsnst_countries` VALUES ('de', 'Germany');
INSERT INTO `nuke_nsnst_countries` VALUES ('dj', 'Djibouti');
INSERT INTO `nuke_nsnst_countries` VALUES ('dk', 'Denmark');
INSERT INTO `nuke_nsnst_countries` VALUES ('dm', 'Dominica');
INSERT INTO `nuke_nsnst_countries` VALUES ('do', 'Dominican Republic');
INSERT INTO `nuke_nsnst_countries` VALUES ('dz', 'Algeria');
INSERT INTO `nuke_nsnst_countries` VALUES ('ec', 'Ecuador');
INSERT INTO `nuke_nsnst_countries` VALUES ('ee', 'Estonia');
INSERT INTO `nuke_nsnst_countries` VALUES ('eg', 'Egypt');
INSERT INTO `nuke_nsnst_countries` VALUES ('eh', 'Western Sahara');
INSERT INTO `nuke_nsnst_countries` VALUES ('er', 'Eritrea');
INSERT INTO `nuke_nsnst_countries` VALUES ('es', 'Spain');
INSERT INTO `nuke_nsnst_countries` VALUES ('et', 'Ethiopia');
INSERT INTO `nuke_nsnst_countries` VALUES ('eu', 'European Union');
INSERT INTO `nuke_nsnst_countries` VALUES ('fi', 'Finland');
INSERT INTO `nuke_nsnst_countries` VALUES ('fj', 'Fiji');
INSERT INTO `nuke_nsnst_countries` VALUES ('fk', 'Falkland Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('fm', 'Micronesia, Federated States Of');
INSERT INTO `nuke_nsnst_countries` VALUES ('fo', 'Faroe Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('fr', 'France');
INSERT INTO `nuke_nsnst_countries` VALUES ('fx', 'France, Metropolitan');
INSERT INTO `nuke_nsnst_countries` VALUES ('ga', 'Gabon');
INSERT INTO `nuke_nsnst_countries` VALUES ('gb', 'United Kingdom');
INSERT INTO `nuke_nsnst_countries` VALUES ('gd', 'Grenada');
INSERT INTO `nuke_nsnst_countries` VALUES ('ge', 'Georgia');
INSERT INTO `nuke_nsnst_countries` VALUES ('gf', 'French Guiana');
INSERT INTO `nuke_nsnst_countries` VALUES ('gg', 'Guernsey');
INSERT INTO `nuke_nsnst_countries` VALUES ('gh', 'Ghana');
INSERT INTO `nuke_nsnst_countries` VALUES ('gi', 'Gibraltar');
INSERT INTO `nuke_nsnst_countries` VALUES ('gl', 'Greenland');
INSERT INTO `nuke_nsnst_countries` VALUES ('gm', 'Gambia, The');
INSERT INTO `nuke_nsnst_countries` VALUES ('gn', 'Guinea');
INSERT INTO `nuke_nsnst_countries` VALUES ('gp', 'Guadeloupe');
INSERT INTO `nuke_nsnst_countries` VALUES ('gq', 'Equatorial Guinea');
INSERT INTO `nuke_nsnst_countries` VALUES ('gr', 'Greece');
INSERT INTO `nuke_nsnst_countries` VALUES ('gs', 'South Georgia and The Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('gt', 'Guatemala');
INSERT INTO `nuke_nsnst_countries` VALUES ('gu', 'Guam');
INSERT INTO `nuke_nsnst_countries` VALUES ('gw', 'Guinea-Bissau');
INSERT INTO `nuke_nsnst_countries` VALUES ('gy', 'Guyana');
INSERT INTO `nuke_nsnst_countries` VALUES ('hk', 'Hong Kong');
INSERT INTO `nuke_nsnst_countries` VALUES ('hm', 'Heard and Mc Donald Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('hn', 'Honduras');
INSERT INTO `nuke_nsnst_countries` VALUES ('hr', 'Croatia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ht', 'Haiti');
INSERT INTO `nuke_nsnst_countries` VALUES ('hu', 'Hungary');
INSERT INTO `nuke_nsnst_countries` VALUES ('id', 'Indonesia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ie', 'Ireland');
INSERT INTO `nuke_nsnst_countries` VALUES ('il', 'Israel');
INSERT INTO `nuke_nsnst_countries` VALUES ('im', 'Isle Of Man');
INSERT INTO `nuke_nsnst_countries` VALUES ('in', 'India');
INSERT INTO `nuke_nsnst_countries` VALUES ('io', 'British Indian Ocean Territory');
INSERT INTO `nuke_nsnst_countries` VALUES ('iq', 'Iraq');
INSERT INTO `nuke_nsnst_countries` VALUES ('ir', 'Iran');
INSERT INTO `nuke_nsnst_countries` VALUES ('is', 'Iceland');
INSERT INTO `nuke_nsnst_countries` VALUES ('it', 'Italy');
INSERT INTO `nuke_nsnst_countries` VALUES ('je', 'Jersey');
INSERT INTO `nuke_nsnst_countries` VALUES ('jm', 'Jamaica');
INSERT INTO `nuke_nsnst_countries` VALUES ('jo', 'Jordan');
INSERT INTO `nuke_nsnst_countries` VALUES ('jp', 'Japan');
INSERT INTO `nuke_nsnst_countries` VALUES ('ke', 'Kenya');
INSERT INTO `nuke_nsnst_countries` VALUES ('kg', 'Kyrgyzstan');
INSERT INTO `nuke_nsnst_countries` VALUES ('kh', 'Cambodia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ki', 'Kiribati');
INSERT INTO `nuke_nsnst_countries` VALUES ('km', 'Comoros');
INSERT INTO `nuke_nsnst_countries` VALUES ('kn', 'SaINT Kitts And Nevis');
INSERT INTO `nuke_nsnst_countries` VALUES ('kp', 'Korea, North');
INSERT INTO `nuke_nsnst_countries` VALUES ('kr', 'Korea, South');
INSERT INTO `nuke_nsnst_countries` VALUES ('kw', 'Kuwait');
INSERT INTO `nuke_nsnst_countries` VALUES ('ky', 'Cayman Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('kz', 'Kazakhstan');
INSERT INTO `nuke_nsnst_countries` VALUES ('la', 'Laos');
INSERT INTO `nuke_nsnst_countries` VALUES ('lb', 'Lebanon');
INSERT INTO `nuke_nsnst_countries` VALUES ('lc', 'SaINT Lucia');
INSERT INTO `nuke_nsnst_countries` VALUES ('li', 'Liechtenstein');
INSERT INTO `nuke_nsnst_countries` VALUES ('lk', 'Sri Lanka');
INSERT INTO `nuke_nsnst_countries` VALUES ('lr', 'Liberia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ls', 'Lesotho');
INSERT INTO `nuke_nsnst_countries` VALUES ('lt', 'Lithuania');
INSERT INTO `nuke_nsnst_countries` VALUES ('lu', 'Luxembourg');
INSERT INTO `nuke_nsnst_countries` VALUES ('lv', 'Latvia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ly', 'Libya');
INSERT INTO `nuke_nsnst_countries` VALUES ('ma', 'Morocco');
INSERT INTO `nuke_nsnst_countries` VALUES ('mc', 'Monaco');
INSERT INTO `nuke_nsnst_countries` VALUES ('md', 'Moldova');
INSERT INTO `nuke_nsnst_countries` VALUES ('me', 'Montenegro');
INSERT INTO `nuke_nsnst_countries` VALUES ('mg', 'Madagascar');
INSERT INTO `nuke_nsnst_countries` VALUES ('mh', 'Marshall Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('mk', 'Macedonia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ml', 'Mali');
INSERT INTO `nuke_nsnst_countries` VALUES ('mm', 'Myanmar');
INSERT INTO `nuke_nsnst_countries` VALUES ('mn', 'Mongolia');
INSERT INTO `nuke_nsnst_countries` VALUES ('mo', 'Macau');
INSERT INTO `nuke_nsnst_countries` VALUES ('mp', 'Northern Mariana Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('mq', 'Martinique');
INSERT INTO `nuke_nsnst_countries` VALUES ('mr', 'Mauritania');
INSERT INTO `nuke_nsnst_countries` VALUES ('ms', 'Montserrat');
INSERT INTO `nuke_nsnst_countries` VALUES ('mt', 'Malta');
INSERT INTO `nuke_nsnst_countries` VALUES ('mu', 'Mauritius');
INSERT INTO `nuke_nsnst_countries` VALUES ('mv', 'Maldives');
INSERT INTO `nuke_nsnst_countries` VALUES ('mw', 'Malawi');
INSERT INTO `nuke_nsnst_countries` VALUES ('mx', 'Mexico');
INSERT INTO `nuke_nsnst_countries` VALUES ('my', 'Malaysia');
INSERT INTO `nuke_nsnst_countries` VALUES ('mz', 'Mozambique');
INSERT INTO `nuke_nsnst_countries` VALUES ('na', 'Namibia');
INSERT INTO `nuke_nsnst_countries` VALUES ('nc', 'New Caledonia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ne', 'Niger');
INSERT INTO `nuke_nsnst_countries` VALUES ('nf', 'Norfork Island');
INSERT INTO `nuke_nsnst_countries` VALUES ('ng', 'Nigeria');
INSERT INTO `nuke_nsnst_countries` VALUES ('ni', 'Nicaragua');
INSERT INTO `nuke_nsnst_countries` VALUES ('nl', 'Netherlands');
INSERT INTO `nuke_nsnst_countries` VALUES ('no', 'Norway');
INSERT INTO `nuke_nsnst_countries` VALUES ('np', 'Nepal');
INSERT INTO `nuke_nsnst_countries` VALUES ('nr', 'Nauru');
INSERT INTO `nuke_nsnst_countries` VALUES ('nu', 'Niue');
INSERT INTO `nuke_nsnst_countries` VALUES ('nz', 'New Zealand');
INSERT INTO `nuke_nsnst_countries` VALUES ('om', 'Oman');
INSERT INTO `nuke_nsnst_countries` VALUES ('pa', 'Panama');
INSERT INTO `nuke_nsnst_countries` VALUES ('pe', 'Peru');
INSERT INTO `nuke_nsnst_countries` VALUES ('pf', 'French Polynesia');
INSERT INTO `nuke_nsnst_countries` VALUES ('pg', 'Papua New Guinea');
INSERT INTO `nuke_nsnst_countries` VALUES ('ph', 'Philippines');
INSERT INTO `nuke_nsnst_countries` VALUES ('pk', 'Pakistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('pl', 'Poland');
INSERT INTO `nuke_nsnst_countries` VALUES ('pm', 'SaINT Pierre and Miquelon');
INSERT INTO `nuke_nsnst_countries` VALUES ('pn', 'Pitcairn Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('pr', 'Puerto Rico');
INSERT INTO `nuke_nsnst_countries` VALUES ('ps', 'Palestine');
INSERT INTO `nuke_nsnst_countries` VALUES ('pt', 'Portugal');
INSERT INTO `nuke_nsnst_countries` VALUES ('pw', 'Palau');
INSERT INTO `nuke_nsnst_countries` VALUES ('py', 'Paraguay');
INSERT INTO `nuke_nsnst_countries` VALUES ('qa', 'Qatar');
INSERT INTO `nuke_nsnst_countries` VALUES ('re', 'Reunion');
INSERT INTO `nuke_nsnst_countries` VALUES ('rs', 'Serbia');
INSERT INTO `nuke_nsnst_countries` VALUES ('ro', 'Romania');
INSERT INTO `nuke_nsnst_countries` VALUES ('ru', 'Russia');
INSERT INTO `nuke_nsnst_countries` VALUES ('rw', 'Rwanda');
INSERT INTO `nuke_nsnst_countries` VALUES ('sa', 'Saudi Arabia');
INSERT INTO `nuke_nsnst_countries` VALUES ('sb', 'Solomon Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('sc', 'Seychelles');
INSERT INTO `nuke_nsnst_countries` VALUES ('sd', 'Sudan');
INSERT INTO `nuke_nsnst_countries` VALUES ('se', 'Sweden');
INSERT INTO `nuke_nsnst_countries` VALUES ('sg', 'Singapore');
INSERT INTO `nuke_nsnst_countries` VALUES ('sh', 'SaINT Helena');
INSERT INTO `nuke_nsnst_countries` VALUES ('si', 'Slovenia');
INSERT INTO `nuke_nsnst_countries` VALUES ('sj', 'Svalbard');
INSERT INTO `nuke_nsnst_countries` VALUES ('sk', 'Slovakia');
INSERT INTO `nuke_nsnst_countries` VALUES ('sl', 'Sierra Leone');
INSERT INTO `nuke_nsnst_countries` VALUES ('sm', 'San Marino');
INSERT INTO `nuke_nsnst_countries` VALUES ('sn', 'Senegal');
INSERT INTO `nuke_nsnst_countries` VALUES ('so', 'Somalia');
INSERT INTO `nuke_nsnst_countries` VALUES ('sr', 'Suriname');
INSERT INTO `nuke_nsnst_countries` VALUES ('st', 'Sao Tome And Principe');
INSERT INTO `nuke_nsnst_countries` VALUES ('su', 'Soviet Union');
INSERT INTO `nuke_nsnst_countries` VALUES ('sv', 'El Salvador');
INSERT INTO `nuke_nsnst_countries` VALUES ('sy', 'Syria');
INSERT INTO `nuke_nsnst_countries` VALUES ('sz', 'Swaziland');
INSERT INTO `nuke_nsnst_countries` VALUES ('tc', 'Turks And Caicos Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('td', 'Chad');
INSERT INTO `nuke_nsnst_countries` VALUES ('tf', 'French Southern Territories');
INSERT INTO `nuke_nsnst_countries` VALUES ('tg', 'Togo');
INSERT INTO `nuke_nsnst_countries` VALUES ('th', 'Thailand');
INSERT INTO `nuke_nsnst_countries` VALUES ('tj', 'Tajikistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('tk', 'Tokelau');
INSERT INTO `nuke_nsnst_countries` VALUES ('tl', 'Timor-leste');
INSERT INTO `nuke_nsnst_countries` VALUES ('tm', 'Turkmenistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('tn', 'Tunisia');
INSERT INTO `nuke_nsnst_countries` VALUES ('to', 'Tonga');
INSERT INTO `nuke_nsnst_countries` VALUES ('tp', 'East Timor');
INSERT INTO `nuke_nsnst_countries` VALUES ('tr', 'Turkey');
INSERT INTO `nuke_nsnst_countries` VALUES ('tt', 'Trinidad And Tobago');
INSERT INTO `nuke_nsnst_countries` VALUES ('tv', 'Tuvalu');
INSERT INTO `nuke_nsnst_countries` VALUES ('tw', 'Taiwan');
INSERT INTO `nuke_nsnst_countries` VALUES ('tz', 'Tanzania');
INSERT INTO `nuke_nsnst_countries` VALUES ('ua', 'Ukraine');
INSERT INTO `nuke_nsnst_countries` VALUES ('ug', 'Uganda');
INSERT INTO `nuke_nsnst_countries` VALUES ('um', 'United States Minor Outlying Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('un', 'United Nations');
INSERT INTO `nuke_nsnst_countries` VALUES ('us', 'United States');
INSERT INTO `nuke_nsnst_countries` VALUES ('uy', 'Uruguay');
INSERT INTO `nuke_nsnst_countries` VALUES ('uz', 'Uzbekistan');
INSERT INTO `nuke_nsnst_countries` VALUES ('va', 'Vatican City State');
INSERT INTO `nuke_nsnst_countries` VALUES ('vc', 'SaINT Vincent And The Grenadines');
INSERT INTO `nuke_nsnst_countries` VALUES ('ve', 'Venezuela');
INSERT INTO `nuke_nsnst_countries` VALUES ('vg', 'Virgin Islands, British');
INSERT INTO `nuke_nsnst_countries` VALUES ('vi', 'Virgin Islands, American');
INSERT INTO `nuke_nsnst_countries` VALUES ('vn', 'Viet Nam');
INSERT INTO `nuke_nsnst_countries` VALUES ('vu', 'Vanuatu');
INSERT INTO `nuke_nsnst_countries` VALUES ('wf', 'Wallis and Futuna Islands');
INSERT INTO `nuke_nsnst_countries` VALUES ('ws', 'Samoa');
INSERT INTO `nuke_nsnst_countries` VALUES ('xe', 'England');
INSERT INTO `nuke_nsnst_countries` VALUES ('xs', 'Scotland');
INSERT INTO `nuke_nsnst_countries` VALUES ('xw', 'Wales');
INSERT INTO `nuke_nsnst_countries` VALUES ('ye', 'Yemen');
INSERT INTO `nuke_nsnst_countries` VALUES ('yt', 'Mayotte');
INSERT INTO `nuke_nsnst_countries` VALUES ('yu', 'Yugoslavia');
INSERT INTO `nuke_nsnst_countries` VALUES ('za', 'South Africa');
INSERT INTO `nuke_nsnst_countries` VALUES ('zm', 'Zambia');
INSERT INTO `nuke_nsnst_countries` VALUES ('zw', 'Zimbabwe');
INSERT INTO `nuke_nsnst_countries` VALUES ('02', 'UnAllocated');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_excluded_ranges`
--

CREATE TABLE `nuke_nsnst_excluded_ranges` (
  `ip_lo` int(10) unsigned NOT NULL default '0',
  `ip_hi` int(10) unsigned NOT NULL default '0',
  `date` int(20) NOT NULL default '0',
  `notes` text NOT NULL,
  `c2c` char(2) NOT NULL default '00',
  KEY `code` (`ip_lo`,`ip_hi`,`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_excluded_ranges`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_ip2country`
--

CREATE TABLE `nuke_nsnst_ip2country` (
  `ip_lo` int(10) unsigned NOT NULL default '0',
  `ip_hi` int(10) unsigned NOT NULL default '0',
  `date` int(20) NOT NULL default '0',
  `c2c` char(2) NOT NULL default '',
  KEY `code` (`ip_lo`,`ip_hi`,`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_ip2country`
--


INSERT INTO `nuke_nsnst_ip2country` VALUES (0, 16777215, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (16777216, 33554431, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (33554432, 50331647, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (83886080, 100663295, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (117440512, 134217727, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (167772160, 184549375, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (234881024, 251658239, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (385875968, 402653183, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (452984832, 469762047, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (520093696, 536870911, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (603979776, 620756991, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (620756992, 637534207, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (687865856, 704643071, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (704643072, 721420287, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1241513984, 1258291199, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1258291200, 1275068415, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1291845632, 1308622847, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1308622848, 1325400063, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1325400064, 1342177279, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1526726656, 1543503871, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1543503872, 1560281087, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1560281088, 1577058303, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1577058304, 1593835519, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1593835520, 1610612735, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1610612736, 1627389951, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1627389952, 1644167167, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1644167168, 1660944383, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1660944384, 1677721599, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1677721600, 1694498815, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1694498816, 1711276031, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1711276032, 1728053247, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1728053248, 1744830463, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1744830464, 1761607679, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1761607680, 1778384895, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1778384896, 1795162111, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1795162112, 1811939327, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1811939328, 1828716543, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1828716544, 1845493759, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1845493760, 1862270975, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1862270976, 1879048191, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1879048192, 1895825407, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1895825408, 1912602623, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1912602624, 1929379839, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1929379840, 1946157055, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1946157056, 1962934271, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1962934272, 1979711487, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1979711488, 1996488703, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (1996488704, 2013265919, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2013265920, 2030043135, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2080374784, 2097151999, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2097152000, 2113929215, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2113929216, 2130706431, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2130706432, 2147483647, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2851995648, 2852061183, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2886729728, 2887778303, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2902458368, 2919235583, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2919235584, 2936012799, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2936012800, 2952790015, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2952790016, 2969567231, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2969567232, 2986344447, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (2986344448, 3003121663, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3003121664, 3019898879, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3019898880, 3036676095, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3036676096, 3053453311, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3053453312, 3070230527, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3070230528, 3087007743, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3087007744, 3103784959, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3103784960, 3120562175, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3120562176, 3137339391, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3137339392, 3154116607, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3187671040, 3204448255, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3221225472, 3221258239, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3305111552, 3321888767, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3741319168, 3758096383, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3758096384, 3774873599, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3774873600, 3791650815, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3791650816, 3808428031, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3808428032, 3825205247, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3825205248, 3841982463, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3841982464, 3858759679, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3858759680, 3875536895, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3875536896, 3892314111, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3892314112, 3909091327, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3909091328, 3925868543, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3925868544, 3942645759, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3942645760, 3959422975, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3959422976, 3976200191, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3976200192, 3992977407, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (3992977408, 4009754623, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4009754624, 4026531839, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4026531840, 4043309055, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4043309056, 4060086271, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4060086272, 4076863487, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4076863488, 4093640703, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4093640704, 4110417919, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4110417920, 4127195135, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4127195136, 4143972351, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4143972352, 4160749567, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4160749568, 4177526783, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4177526784, 4194303999, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4194304000, 4211081215, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4211081216, 4227858431, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4227858432, 4244635647, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4244635648, 4261412863, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4261412864, 4278190079, 1098424776, '01');
INSERT INTO `nuke_nsnst_ip2country` VALUES (4278190080, 4294967295, 1098424776, '01');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_protected_ranges`
--

CREATE TABLE `nuke_nsnst_protected_ranges` (
  `ip_lo` int(10) unsigned NOT NULL default '0',
  `ip_hi` int(10) unsigned NOT NULL default '0',
  `date` int(20) NOT NULL default '0',
  `notes` text NOT NULL,
  `c2c` char(2) NOT NULL default '00',
  KEY `code` (`ip_lo`,`ip_hi`,`c2c`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_nsnst_protected_ranges`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_nsnst_tracked_ips`
--

CREATE TABLE `nuke_nsnst_tracked_ips` (
  `tid` int(10) NOT NULL auto_increment,
  `ip_addr` varchar(15) NOT NULL default '',
  `ip_long` int(10) unsigned NOT NULL default '0',
  `user_id` int(11) NOT NULL default '1',
  `username` varchar(60) NOT NULL default '',
  `user_agent` text NOT NULL,
  `refered_from` text NOT NULL,
  `date` int(20) NOT NULL default '0',
  `page` text NOT NULL,
  `x_forward_for` varchar(32) NOT NULL default '',
  `client_ip` varchar(32) NOT NULL default '',
  `remote_addr` varchar(32) NOT NULL default '',
  `remote_port` varchar(11) NOT NULL default '',
  `request_method` varchar(10) NOT NULL default '',
  `c2c` char(2) NOT NULL default '00',
  PRIMARY KEY  (`tid`),
  KEY `maintracking` (`ip_addr`,`ip_long`),
  KEY `ip_addr` (`ip_addr`),
  KEY `ip_long` (`ip_long`),
  KEY `user_id` (`user_id`),
  KEY `username` (`username`),
  KEY `user_agent` (`user_agent`(255)),
  KEY `refered_from` (`refered_from`(255)),
  KEY `date` (`date`),
  KEY `page` (`page`(255)),
  KEY `c2c` (`c2c`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

--
-- Dumping data for table `nuke_nsnst_tracked_ips`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_pages`
--

CREATE TABLE `nuke_pages` (
  `pid` int(10) NOT NULL auto_increment,
  `cid` int(10) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `subtitle` varchar(255) NOT NULL default '',
  `active` int(1) NOT NULL default '0',
  `page_header` text NOT NULL,
  `text` text NOT NULL,
  `page_footer` text NOT NULL,
  `signature` text NOT NULL,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `counter` int(10) NOT NULL default '0',
  `clanguage` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`pid`),
  KEY `cid` (`cid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_pages`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_pages_categories`
--

CREATE TABLE `nuke_pages_categories` (
  `cid` int(10) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `description` text NOT NULL,
  PRIMARY KEY  (`cid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_pages_categories`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_poll_check`
--

CREATE TABLE `nuke_poll_check` (
  `ip` varchar(20) NOT NULL default '',
  `time` varchar(14) NOT NULL default '',
  `pollID` int(10) NOT NULL default '0'
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_poll_check`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_poll_data`
--

CREATE TABLE `nuke_poll_data` (
  `pollID` int(11) NOT NULL default '0',
  `optionText` char(50) NOT NULL default '',
  `optionCount` int(11) NOT NULL default '0',
  `voteID` int(11) NOT NULL default '0'
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_poll_data`
--

INSERT INTO `nuke_poll_data` VALUES (1, 'Ummmm, not bad', 0, 1);
INSERT INTO `nuke_poll_data` VALUES (1, 'Cool', 0, 2);
INSERT INTO `nuke_poll_data` VALUES (1, 'Terrific', 0, 3);
INSERT INTO `nuke_poll_data` VALUES (1, 'The best one!', 0, 4);
INSERT INTO `nuke_poll_data` VALUES (1, 'what the hell is this?', 0, 5);
INSERT INTO `nuke_poll_data` VALUES (1, '', 0, 6);
INSERT INTO `nuke_poll_data` VALUES (1, '', 0, 7);
INSERT INTO `nuke_poll_data` VALUES (1, '', 0, 8);
INSERT INTO `nuke_poll_data` VALUES (1, '', 0, 9);
INSERT INTO `nuke_poll_data` VALUES (1, '', 0, 10);
INSERT INTO `nuke_poll_data` VALUES (1, '', 0, 11);
INSERT INTO `nuke_poll_data` VALUES (1, '', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_poll_desc`
--

CREATE TABLE `nuke_poll_desc` (
  `pollID` int(11) NOT NULL auto_increment,
  `pollTitle` varchar(100) NOT NULL default '',
  `timeStamp` int(11) NOT NULL default '0',
  `voters` mediumint(9) NOT NULL default '0',
  `planguage` varchar(30) NOT NULL default '',
  `artid` int(10) NOT NULL default '0',
  PRIMARY KEY  (`pollID`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nuke_poll_desc`
--

INSERT INTO `nuke_poll_desc` VALUES (1, 'What do you think about this site?', 961405160, 0, 'english', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_pollcomments`
--

CREATE TABLE `nuke_pollcomments` (
  `tid` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `pollID` int(11) NOT NULL default '0',
  `date` datetime default NULL,
  `name` varchar(60) NOT NULL default '',
  `email` varchar(60) default NULL,
  `url` varchar(60) default NULL,
  `host_name` varchar(60) default NULL,
  `subject` varchar(60) NOT NULL default '',
  `comment` text NOT NULL,
  `score` tinyint(4) NOT NULL default '0',
  `reason` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`tid`),
  KEY `pid` (`pid`),
  KEY `pollID` (`pollID`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_pollcomments`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_queue`
--

CREATE TABLE `nuke_queue` (
  `qid` smallint(5) unsigned NOT NULL auto_increment,
  `uid` mediumint(9) NOT NULL default '0',
  `uname` varchar(40) NOT NULL default '',
  `subject` varchar(100) NOT NULL default '',
  `story` text,
  `storyext` text NOT NULL,
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  `topic` varchar(20) NOT NULL default '',
  `alanguage` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`qid`),
  KEY `uid` (`uid`),
  KEY `uname` (`uname`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_queue`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_quotes`
--

CREATE TABLE `nuke_quotes` (
  `qid` int(10) unsigned NOT NULL auto_increment,
  `quote` text,
  PRIMARY KEY  (`qid`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nuke_quotes`
--

INSERT INTO `nuke_quotes` VALUES (1, 'Nos morituri te salutamus - CBHS');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_referer`
--

CREATE TABLE `nuke_referer` (
   `url` varchar(100) NOT NULL,
   `lasttime` int(10) unsigned DEFAULT '0' NOT NULL,
   `link` VARCHAR( 100 ) NOT NULL,
   PRIMARY KEY (`url`),
   KEY `lasttime` (`lasttime`)
);

--
-- Dumping data for table `nuke_referer`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_related`
--

CREATE TABLE `nuke_related` (
  `rid` int(11) NOT NULL auto_increment,
  `tid` int(11) NOT NULL default '0',
  `name` varchar(30) NOT NULL default '',
  `url` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`rid`),
  KEY `tid` (`tid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_related`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_reviews`
--

CREATE TABLE `nuke_reviews` (
  `id` int(10) NOT NULL auto_increment,
  `date` date NOT NULL default '0000-00-00',
  `title` varchar(150) NOT NULL default '',
  `text` text NOT NULL,
  `reviewer` varchar(25) default NULL,
  `email` varchar(60) default NULL,
  `score` int(10) NOT NULL default '0',
  `cover` varchar(100) NOT NULL default '',
  `url` varchar(100) NOT NULL default '',
  `url_title` varchar(50) NOT NULL default '',
  `hits` int(10) NOT NULL default '0',
  `rlanguage` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_reviews`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_reviews_add`
--

CREATE TABLE `nuke_reviews_add` (
  `id` int(10) NOT NULL auto_increment,
  `date` date default NULL,
  `title` varchar(150) NOT NULL default '',
  `text` text NOT NULL,
  `reviewer` varchar(25) NOT NULL default '',
  `email` varchar(60) default NULL,
  `score` int(10) NOT NULL default '0',
  `url` varchar(100) NOT NULL default '',
  `url_title` varchar(50) NOT NULL default '',
  `rlanguage` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_reviews_add`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_reviews_comments`
--

CREATE TABLE `nuke_reviews_comments` (
  `cid` int(10) NOT NULL auto_increment,
  `rid` int(10) NOT NULL default '0',
  `userid` varchar(25) NOT NULL default '',
  `date` datetime default NULL,
  `comments` text,
  `score` int(10) NOT NULL default '0',
  PRIMARY KEY  (`cid`),
  KEY `rid` (`rid`),
  KEY `userid` (`userid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_reviews_comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_reviews_main`
--

CREATE TABLE `nuke_reviews_main` (
  `title` varchar(100) default NULL,
  `description` text,
  KEY `title` (`title`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_reviews_main`
--

INSERT INTO `nuke_reviews_main` VALUES ('Reviews Section Title', 'Reviews Section Long Description');

-- --------------------------------------------------------

CREATE TABLE `nuke_security_agents` (
  `agent_name` VARCHAR(20) NOT NULL default '',
  `agent_fullname` VARCHAR(30) NULL default '',
  `agent_hostname` VARCHAR(30) NULL default '',
  `agent_url` varchar(80) NULL default '',
  `agent_ban` INT(1) NOT NULL default 0,
  `agent_desc` text NULL,
  PRIMARY KEY  (`agent_name`)
) TYPE=MyISAM;

INSERT INTO `nuke_security_agents` VALUES('1Noon', '1Noonbot', NULL, '1nooncorp.com', -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('AI', 'AIBOT', NULL, '21seek.com', 0, '(China) robot (218.17.90.xxx)');
INSERT INTO `nuke_security_agents` VALUES('aip', 'aipbot/', NULL, 'nameprotect.com', 0, 'copyright search robot (24.177.134.x), s. also\r\n- np/0.1_(np;_http://www.nameprotect.com...\r\n- abot/0.1 (abot; http://www.abot.com...');
INSERT INTO `nuke_security_agents` VALUES('Alexa', 'ia_archiver', '.alexa.com', 'alexa.com', 0, 'Alexa (209.237.238.1xx)');
INSERT INTO `nuke_security_agents` VALUES('Archive', 'ia_archiver', '.archive.org', 'archive.org', 0, 'The Internet Archive (209.237.238.1xx)');
INSERT INTO `nuke_security_agents` VALUES('AltaVista', 'Scooter', NULL, 'altavista.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Amfibi', 'Amfibibot', NULL, 'amfibi.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Ansearch', 'AnsearchBot/', NULL, 'ansearch.com.au', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('AnswerBus', 'AnswerBus', NULL, 'answerbus.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Argus', 'Argus/', NULL, 'simpy.com/bot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Arachmo', 'Arachmo', NULL, NULL, -1, 'Impolite bandwidth sucker. Netblock owned by SOFTBANK BB CORP, Japan.\r\nDoesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Ask Jeeves', 'Ask Jeeves/Teoma', '.ask.com', 'sp.ask.com/docs/about/tech_crawling.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('ASPseek', 'ASPseek/', NULL, 'aspseek.org', 0, 'search engine software');
INSERT INTO `nuke_security_agents` VALUES('AvantGo', 'AvantGo', 'avantgo.com', 'avantgo.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Axadine', 'Axadine Crawler', NULL, 'axada.de', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Baidu', 'Baiduspider', NULL, 'baidu.com/search/spider.htm', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Become', 'BecomeBot', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('BigClique', 'BigCliqueBOT', NULL, 'bigclique.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('BilderSauger', 'BilderSauger', NULL, 'google.com/search?q=BilderSauger+data+becker', -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('BitTorrent', 'btbot/', NULL, 'btbot.com/btbot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Bruin', 'BruinBot', NULL, 'webarchive.cs.ucla.edu/bruinbot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('cfetch', 'cfetch/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Cipinet', 'Cipinet', NULL, 'cipinet.com/bot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Combine', 'Combine/', NULL, 'lub.lu.se/combine/', -1, 'harvesting robot');
INSERT INTO `nuke_security_agents` VALUES('Convera', 'ConveraCrawler/', NULL, 'authoritativeweb.com/crawl', -1, 'Impolite robot. Netblock owned by Convera Corp, Vienna');
INSERT INTO `nuke_security_agents` VALUES('Cydral', 'CydralSpider', NULL, 'cydral.com', 0, 'Cydral Web Image Search');
INSERT INTO `nuke_security_agents` VALUES('curl', 'curl/', NULL, 'curl.haxx.se', 0, 'file transferring tool');
INSERT INTO `nuke_security_agents` VALUES('Datapark', 'DataparkSearch/', NULL, 'dataparksearch.org', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Demo', 'Demo Bot', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('DHCrawler', 'DHCrawler', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Diamond', 'DiamondBot', NULL, 'searchscout.com', -1, 'Claria (ex Gator) robot (64.152.73.xx), s. also Claria');
INSERT INTO `nuke_security_agents` VALUES('DISCo', 'DISCo Pump', NULL, NULL, -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Dragonfly CMS', 'Dragonfly File Reader', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Drecom', 'Drecombot/', 'drecom.jp', 'career.drecom.jp/bot.html', -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Dumbfind', 'Dumbot', NULL, 'dumbfind.com/dumbot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('e-Society', 'e-SocietyRobot', NULL, 'yama.info.waseda.ac.jp/~yamana/es/', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('EmailSiphon', 'EmailSiphon', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('EmeraldShield', 'EmeraldShield.com WebBot', NULL, 'emeraldshield.com/webbot.aspx', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Educate', 'Educate Search', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Envolk', 'envolk[ITS]spider/', NULL, 'envolk.com/envolkspider.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Eruvo', 'EruvoBot', NULL, 'eruvo.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Esperanza', 'EsperanzaBot', NULL, 'esperanza.to/bot/', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('eStyle', 'eStyleSearch', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Eurip', 'EuripBot', NULL, 'eurip.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Fast', 'FAST MetaWeb Crawler', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('FAST Enterprise', 'FAST Enterprise Crawler', 'fastsearch.net', NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Feedster', 'Feedster Crawler', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('FetchAPI', 'Fetch API Request', NULL, NULL, -1, 'Some sort of application that tries to download and store your full website.\r\nDoesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('fg', 'fgcrawler', NULL, NULL, -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Filangy', 'Filangy', NULL, 'filangy.com/filangyinfo.jsp?inc=robots.jsp', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Findexa', 'Findexa Crawler', 'gulesider.no', 'findexa.no/gulesider/article26548.ece', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('FindLinks', 'findlinks', NULL, 'wortschatz.uni-leipzig.de/findlinks/', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Franklin', 'Franklin locator', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('FullWeb', 'Full Web Bot', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Fyber', 'FyberSpider', NULL, 'fybersearch.com/fyberspider.php', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Gais', 'Gaisbot', NULL, 'gais.cs.ccu.edu.tw/robot.php', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Genie', 'geniebot', NULL, 'genieknows.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('GetRight', 'GetRight/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Giga', 'Gigabot/', NULL, 'gigablast.com/spider.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Girafa', 'Girafabot', NULL, 'girafa.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('GoForIt', 'GOFORITBOT', NULL, 'goforit.com/about/', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Gonzo', 'gonzo1', '.t-ipconnect.de', 'telekom.de', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Google', 'Googlebot', 'crawl[0-9\\-]+.googlebot.com', 'google.com/bot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('GoogleAds', 'Mediapartners-Google', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('GoogleImg', 'Googlebot-Image', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('GPU', 'GPU p2p crawler', NULL, 'gpu.sourceforge.net/search_engine.php', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Grub', 'grub-client', NULL, 'grub.org', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('GSA', 'gsa-crawler', NULL, 'arsenaldigital.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('HappyFun', 'HappyFunBot/', NULL, 'happyfunsearch.com/bot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Harvest', 'Harvest/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('HeadScan', 'head-scan.pl/', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Heritrix', 'heritrix/', NULL, 'crawler.xtramind.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('HooWWWer', 'HooWWWer', NULL, 'cosco.hiit.fi/search/hoowwwer/', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('htdig', 'htdig/', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('HTMLParser', 'HTMLParser/', NULL, 'htmlparser.sourceforge.net', -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('HTTrack', 'HTTrack', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Ichiro', 'ichiro/', NULL, 'nttr.co.jp', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('IconSurf', 'IconSurf/', NULL, 'iconsurf.com/robot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Industry', 'Industry Program', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Indy', 'Indy Library', NULL, NULL, -1, 'Originally, the Indy Library is a programming library which is available at http://www.nevrona.com/Indy or http://indy.torry.net under an Open Source license. This library is included with Borland Delphi 6, 7, C++Builder 6, plus all of the Kylix versions. Unfortunately, this library is hi-jacked and abused by some Chinese spam bots. All recent user-agents with the unmodified \"Indy Library\" string were of Chinese origin.\r\nDoesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('InetURL', 'InetURL/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Infocious', 'InfociousBot', NULL, 'corp.infocious.com/tech_crawler.php', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Ingrid', 'INGRID', NULL, 'webmaster.ilse.nl/jsp/webmaster.jsp', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Interseek', 'InterseekWeb/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Ipwalk', 'IpwalkBot/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('IRL', 'IRLbot', NULL, 'irl.cs.tamu.edu/crawler', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Java', 'Java/', NULL, NULL, -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Jyxo', 'Jyxobot/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('KnowItAll', 'KnowItAll(', NULL, 'cs.washington.edu', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Kumm', 'KummHttp/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Lapozz', 'LapozzBot', NULL, 'robot.lapozz.hu/', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Larbin', 'larbin', NULL, 'larbin.sourceforge.net/index-eng.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('LeechGet', 'LeechGet', NULL, 'leechget.net', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('libwww-perl', 'libwww-perl/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('lmspider', 'lmspider', NULL, 'scansoft.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Local', 'LocalcomBot/', NULL, 'local.com/bot.htm', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Looksmart', 'ZyBorg/', '.looksmart.com', 'WISEnutbot.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('LoveSMS', 'LoveSMS Search Engine', NULL, 'cauta.lovesms.ro', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Lycos', 'Lycos_Spider', '.lycos.com', NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Mac Finder', 'Mac Finder', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Majestic-12', 'MJ12bot', NULL, 'majestic12.co.uk/bot.php', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('MapoftheInternet', 'MapoftheInternet.com', NULL, 'mapoftheinternet.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('McBot', 'McBot/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Medusa', 'Medusa', NULL, NULL, -1, 'Medusa is a tool for finding images, movie-clips or other kinds of files on webpages and downloading them. You start by entering a starting URL and Medusa searches for the filetypes you are interested in on this page and all pages found up to a given depth.\r\nDoesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Metaspinner', 'Metaspinner/', NULL, 'meta-spinner.de', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('MetaTag', 'MetaTagRobot', NULL, 'widexl.com/remote/search-engines/metatag-analyzer.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Minuteman', 'Minuteman', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Mirago', 'HenryTheMiragoRobot', NULL, 'miragorobot.com/scripts/mrinfo.asp', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Missauga', 'Missauga Locate', NULL, NULL, -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Missigua', 'Missigua Locator', NULL, NULL, -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Mister PiX', 'Mister PiX', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Mojeek', 'MojeekBot', NULL, 'mojeek.com/bot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('MSCCDS', 'Microsoft Scheduled Cache Cont', NULL, 'google.com/search?q=Scheduled+Cache+Content+Download+Service', -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('MDAIPP', 'Microsoft Data Access Internet', NULL, 'google.com/search?q=Microsoft+Data+Access+Internet+Publishin', -1, 'This agent is used to exploit your system regarding the following security issue in FrontPage2000: http://lists.grok.org.uk/pipermail/full-disclosure/2004-December/030467.html');
INSERT INTO `nuke_security_agents` VALUES('MSIECrawler', 'MSIECrawler', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('MSN', 'msnbot', 'msnbot.msn.com', 'search.msn.com/msnbot.htm', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('MSR', 'MSRBOT/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('MUC', 'Microsoft URL Control', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Naver', 'NaverBot', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('NetMechanic', 'NetMechanic', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('nicebot', 'nicebot', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Ninja', 'Download Ninja', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Noxtrum', 'noxtrumbot', NULL, 'noxtrum.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('NRS', 'NetResearchServer', NULL, 'loopimprovements.com/robot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Nutch', 'Nutch', NULL, 'nutch.org/docs/en/bot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('NutchCVS', 'NutchCVS/', NULL, 'lucene.apache.org/nutch/bot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Nutscrape', 'Nutscrape/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('oegp', 'oegp', NULL, NULL, -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Offline Explorer', 'Offline Explorer/', NULL, 'metaproducts.com', 0, 'A Windows offline browser that allows you to download an unlimited number of your favorite Web and FTP sites for later offline viewing, editing or browsing.');
INSERT INTO `nuke_security_agents` VALUES('OmniExplorer', 'OmniExplorer_Bot/', NULL, 'omni-explorer.com', -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Onet', 'OnetSzukaj/', NULL, 'szukaj.onet.pl', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Openfind', 'Openbot/', NULL, 'openfind.com.tw/robot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Orbit', 'Orbiter', NULL, 'dailyorbit.com/bot.htm', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('P3P Validator', 'P3P Validator', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Patsearch', 'Patwebbot', NULL, 'herz-power.de/technik.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('PhpDig', 'PhpDig/', NULL, 'phpdig.net/robot.php', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('PicSearch', 'psbot/', NULL, 'picsearch.com/bot.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Pipeline', 'pipeLiner', NULL, 'pipeline-search.com/webmaster.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Pogodak', 'Pogodak', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Poly', 'polybot', NULL, 'cis.poly.edu/polybot/', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Pompos', 'Pompos/', NULL, 'dir.com/pompos.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Poodle', 'Poodle predictor', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Powermarks', 'Powermarks/', NULL, 'kaylon.com/power.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('PrivacyFinder', 'PrivacyFinder Cache Bot', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Privatizer', 'privatizer.net', NULL, 'privatizer.net/whatis.php', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Production', 'Production Bot', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('PS', 'Program Shareware', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('PuxaRapido', 'PuxaRapido v1.0', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Python-urllib', 'Python-urllib/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Qweery', 'qweery', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Rambler', 'StackRambler/', NULL, 'rambler.ru', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Roffle', 'Roffle/', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('RPT-HTTP', 'RPT-HTTPClient/', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('rssImages', 'rssImagesBot', NULL, 'herbert.groot.jebbink.nl/?app=rssImages', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Ryan', 'Ryanbot/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('SBIder', 'SBIder/', NULL, 'sitesell.com/sbider.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('schibstedsok', 'schibstedsokbot', NULL, 'schibstedsok.no', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Schmozilla', 'Schmozilla/', NULL, NULL, -1, 'Doesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Scrubby', 'Scrubby', NULL, 'scrubtheweb.com/abs/meta-check.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('ScSpider', 'ScSpider/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('SearchGuild', 'SearchGuild/', NULL, NULL, 0, 'DMOZ Experiment');
INSERT INTO `nuke_security_agents` VALUES('Seekbot', 'Seekbot', NULL, 'seekbot.net', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Seznam', 'SeznamBot/', NULL, 'fulltext.seznam.cz', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Siets', 'SietsCrawler/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('SitiDi', '/SitiDiBot/', NULL, 'SitiDi.net', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Snoopy', 'Snoopy', NULL, 'sourceforge.net/projects/snoopy/', 0, 'Snoopy is a PHP class that simulates a web browser. It automates the task of retrieving web page content and posting forms, for example.');
INSERT INTO `nuke_security_agents` VALUES('Sohu', 'sohu-search', NULL, 'sogou.com', 0, 'Searchbot of sohu.com');
INSERT INTO `nuke_security_agents` VALUES('Spambot', NULL, NULL, NULL, -1, 'Global name for bots which try to fill guestbooks and other stuff with garbage\r\nThey don\'t follow robots.txt either\r\n\r\nCurrent agents in this list:\r\nMissigua Locator\r\nProduction Bot\r\nFull Web Bot\r\nDemo Bot\r\nEducate Search\r\nFranklin locator\r\nIndustry Program\r\nMac Finder\r\nProgram Shareware\r\nMissauga Locate ');
INSERT INTO `nuke_security_agents` VALUES('Spip', 'SPIP-', NULL, 'spip.net', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('SurveyBot', 'SurveyBot/', NULL, 'whois.sc', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Susie', '!Susie', NULL, 'sync2it.com/susie', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Thumbshots', 'thumbshots-de-Bot', NULL, 'thumbshots.de', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Turnitin', 'TurnitinBot', NULL, 'turnitin.com/robot/crawlerinfo.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('TutorGig', 'TutorGigBot', NULL, 'tutorgig.info', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Twiceler', 'Twiceler', NULL, 'cuill.com/robots.html', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Updated', 'updated/', NULL, 'updated.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Versus', 'versus crawler', NULL, 'eda.baykan@epfl.ch', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Vagabondo', 'Vagabondo', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Virgo', 'Virgo/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Voila', 'VoilaBot', NULL, 'voila.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('vspider', 'vspider', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('W3C Checklink', 'W3C-checklink', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('W3C Validator', 'W3C_Validator', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Walhello', 'appie', NULL, 'walhello.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('WebIndexer', 'WebIndexer/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('WebReaper', 'WebReaper', NULL, 'webreaper.net', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('WebStripper', 'WebStripper/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Wget', 'Wget/', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Wire', 'WIRE', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('YaCy', 'yacy', NULL, 'yacy.net/yacy/', -1, 'p2p-based distributed Web Search Engine\r\nDoesn\'t follow robots.txt');
INSERT INTO `nuke_security_agents` VALUES('Yadows', 'YadowsCrawler', NULL, 'yadows.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Yahoo', 'Yahoo! Slurp', NULL, 'help.yahoo.com/help/us/ysearch/slurp', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('YahooFS', 'YahooFeedSeeker/', '.yahoo.', 'help.yahoo.com/help/us/ysearch/slurp', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('YahooMM', 'Yahoo-MMCrawler', NULL, 'help.yahoo.com/help/us/ysearch/slurp', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('YANDEX', 'YANDEX', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Zeus', 'Zeus', NULL, NULL, 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('NextGen', 'NextGenSearchBot', NULL, 'about.zoominfo.com/PublicSite/NextGenSearchBot.asp', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('PoI', 'PictureOfInternet/', NULL, 'malfunction.org/poi', -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Sensis', 'Sensis Web Crawler', NULL, 'sensis.com.au', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('IlTrovatore', 'IlTrovatore-Setaccio/', NULL, 'iltrovatore.it/bot.html', -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Rufus', 'RufusBot', NULL, '64.124.122.252/feedback.html', -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('WebMiner', 'WebMiner', NULL, NULL, -1, 'See RufusBot');
INSERT INTO `nuke_security_agents` VALUES('Accoona', 'Accoona-AI-Agent/', NULL, 'accoona.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Xirq', 'xirq/', NULL, 'xirq.com/', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('Blogpulse', 'Blogpulse', NULL, 'blogpulse.com', 0, 'IntelliSeek service');
INSERT INTO `nuke_security_agents` VALUES('KnackAttack', 'KnackAttack', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Miva', 'Miva', NULL, 'miva.com', 0, NULL);
INSERT INTO `nuke_security_agents` VALUES('PictureRipper', 'PictureRipper/', NULL, 'pictureripper.com', -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Teleport', 'Teleport Pro/', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('NetSprint', 'NetSprint', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('SVSpider', 'SVSpider/', NULL, 'bildkiste.de', -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('SVSearch', 'SVSearchRobot/', NULL, NULL, -1, NULL);
INSERT INTO `nuke_security_agents` VALUES('Lorkyll', 'Lorkyll', NULL, '444.net', -1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_stats_hour`
--

CREATE TABLE `nuke_stats_hour` (
  `year` smallint(6) NOT NULL default '0',
  `month` tinyint(4) NOT NULL default '0',
  `date` tinyint(4) NOT NULL default '0',
  `hour` tinyint(4) NOT NULL default '0',
  `hits` int(11) NOT NULL default '0'
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_stats_hour`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuke_stories`
--

CREATE TABLE `nuke_stories` (
  `sid` int(11) NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `aid` varchar(25) NOT NULL default '',
  `title` varchar(80) default NULL,
  `time` datetime default NULL,
  `hometext` text,
  `bodytext` text NOT NULL,
  `comments` int(11) default '0',
  `counter` mediumint(8) unsigned default NULL,
  `topic` int(3) NOT NULL default '1',
  `informant` varchar(25) NOT NULL default '',
  `notes` text NOT NULL,
  `ihome` int(1) NOT NULL default '0',
  `alanguage` varchar(30) NOT NULL default '',
  `acomm` int(1) NOT NULL default '0',
  `haspoll` int(1) NOT NULL default '0',
  `pollID` int(10) NOT NULL default '0',
  `score` int(10) NOT NULL default '0',
  `ratings` int(10) NOT NULL default '0',
  `associated` text NOT NULL,
  `ticon` tinyint(1) NOT NULL default '0',
  `writes` TINYINT( 1 ) DEFAULT '1' NOT NULL,
  PRIMARY KEY  (`sid`),
  KEY `catid` (`catid`),
  KEY `counter` (`counter`),
  KEY `topic` (`topic`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nuke_stories`
--

INSERT INTO `nuke_stories` VALUES (1, 0, 'admin', 'Welcome To Nuke-Evolution', '2005-07-02 10:38:28', 'Welcome to Nuke-Evolution.<br /><br />\r\n\r\nYou must now setup an admin account.  You can do this by <a href="admin.php">clicking here</a>.<br /><br /><br /><br />\r\n\r\n<b>NOTE:</b> You can remove this by going into the News Administration or by clicking the delete button below.\r\n', '', 0, 3, 0, 'admin', '', 0, '', 0, 0, 0, 0, 0, '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_stories_cat`
--

CREATE TABLE `nuke_stories_cat` (
  `catid` int(11) NOT NULL auto_increment,
  `title` varchar(20) NOT NULL default '',
  `counter` int(11) NOT NULL default '0',
  PRIMARY KEY  (`catid`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_stories_cat`
--


-- --------------------------------------------------------

--
-- Table structure for table `nuke_themes`
--
CREATE TABLE `nuke_themes` (
  `theme_name` varchar(100) NOT NULL default '',
  `groups` varchar(50) NOT NULL default '',
  `permissions` tinyint(2) NOT NULL default '1',
  `custom_name` varchar(100) NOT NULL default '',
  `active` tinyint(1) NOT NULL default '0',
  `theme_info` text NOT NULL default '',
  PRIMARY KEY (`theme_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_themes`
--

INSERT INTO `nuke_themes` VALUES ('chromo', '', 1, 'Chromo', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `nuke_topics`
--

CREATE TABLE `nuke_topics` (
  `topicid` int(3) NOT NULL auto_increment,
  `topicname` varchar(20) default NULL,
  `topicimage` varchar(100) default NULL,
  `topictext` varchar(40) default NULL,
  `counter` int(11) NOT NULL default '0',
  PRIMARY KEY  (`topicid`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nuke_topics`
--

INSERT INTO `nuke_topics` VALUES (1, 'evolution', 'phpnuke.gif', 'Nuke-Evolution', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nuke_welcome_pm`
--

CREATE TABLE `nuke_welcome_pm` (
  `subject` varchar(30) NOT NULL default '',
  `msg` text NOT NULL,
  PRIMARY KEY  (`subject`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_welcome_pm`
--

