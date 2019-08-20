
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

-- --------------------------------------------------------

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
-- Table structure for table `nuke_bbtopic_moved`
--

CREATE TABLE `nuke_bbtopic_moved` (
  `moved_id` mediumint(8) unsigned NOT NULL auto_increment,
  `moved_topic_id` mediumint(8) unsigned NOT NULL default '0',
  `moved_oldtopic_id` mediumint(8) unsigned default '0',
  `moved_type` varchar(8) NOT NULL default '0',
  `moved_parent` mediumint(8) unsigned default '0',
  `moved_target` mediumint(8) unsigned default '0',
  `moved_mod` mediumint(8) NOT NULL default '0',
  `moved_time` int(11) NOT NULL default '0',
  `last_post_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`moved_id`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_bbtopic_moved`
--


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

DROP TABLE `nuke_blocks`;
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

CREATE TABLE `nuke_downloads_accesses` (
  `username` varchar(60) NOT NULL default '',
  `downloads` int(11) NOT NULL default '0',
  `uploads` int(11) NOT NULL default '0',
  PRIMARY KEY  (`username`)
) TYPE=MyISAM;

CREATE TABLE `nuke_downloads_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` text NOT NULL,
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

CREATE TABLE `nuke_downloads_extensions` (
  `eid` int(11) NOT NULL auto_increment,
  `ext` varchar(6) NOT NULL default '',
  `file` tinyint(1) NOT NULL default '0',
  `image` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`eid`),
  KEY `ext` (`ext`)
) TYPE=MyISAM;

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


DROP TABLE `nuke_modules`;
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


--
-- Table structure for table `nuke_security_agents`
--

CREATE TABLE `nuke_security_agents` (
  `agent_name` VARCHAR(20) NOT NULL default '',
  `agent_fullname` VARCHAR(30) NULL default '',
  `agent_hostname` VARCHAR(30) NULL default '',
  `agent_url` varchar(80) NULL default '',
  `agent_ban` INT(1) NOT NULL default 0,
  `agent_desc` text NULL,
  PRIMARY KEY  (`agent_name`)
) TYPE=MyISAM;

--
-- Dumping data for table `nuke_security_agents`
--

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

