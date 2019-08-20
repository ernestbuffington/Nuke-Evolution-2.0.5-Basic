ALTER TABLE `nuke_autonews` ADD `ticon` TINYINT( 1 ) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_autonews` ADD `writes` TINYINT( 1 ) DEFAULT '1' NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `informant` `informant` VARCHAR(40) NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `aid` `aid` VARCHAR(30) NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `anid` `anid` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `nuke_autonews` CHANGE `topic` `topic` INT(11) DEFAULT '1' NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `ihome` `ihome` TINYINT(4) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `alanguage` `alanguage` VARCHAR(30) NOT NULL;
ALTER TABLE `nuke_autonews` CHANGE `acomm` `acomm` TINYINT(4) DEFAULT '0' NOT NULL;

ALTER TABLE `nuke_bannerclient` RENAME `nuke_banner_clients`;
ALTER TABLE `nuke_banner` ADD `ad_class` VARCHAR( 5 ) NOT NULL , ADD `ad_code` TEXT NOT NULL, ADD `ad_width` INT( 4 ) DEFAULT '0', ADD `ad_height` INT( 4 ) DEFAULT '0';
ALTER TABLE `nuke_banner` CHANGE `type` `type` varchar(255) NOT NULL default '';
ALTER TABLE `nuke_banner` ADD `position` INT( 10 ) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_banner` ADD `name` VARCHAR( 50 ) DEFAULT '' NOT NULL AFTER cid;

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

CREATE TABLE `nuke_banner_positions` (
  `apid` int(10) NOT NULL auto_increment,
  `position_number` int(5) NOT NULL default '0',
  `position_name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`apid`),
  KEY `position_number` (`position_number`)
) TYPE=MyISAM AUTO_INCREMENT=4 ;


INSERT INTO `nuke_banner_positions` VALUES (1, 0, 'Page Top');
INSERT INTO `nuke_banner_positions` VALUES (2, 1, 'Left Block');
INSERT INTO `nuke_banner_positions` VALUES (3, 2, 'Page Bottom');

CREATE TABLE `nuke_banner_terms` (
  `terms_body` text NOT NULL,
  `country` varchar(255) NOT NULL default ''
) TYPE=MyISAM;


INSERT INTO `nuke_banner_terms` VALUES ('<div align="justify"><strong>Introduction:</strong> This Agreement between you and&nbsp;[sitename] consists of these Terms and Conditions. &quot;You&quot; or &quot;Advertiser&quot; means the entity identified in this enrollment form, and/or any agency acting on its behalf, which shall also be bound by the terms of this Agreement. Please read very carefully these Terms and Conditions.<br /><strong><br />Uses:</strong> You agree that your ads may be placed on (i) [sitename] web site and (ii) Any ads may be modified without your consent to comply with any policy of [sitename]. [sitename] reserves the right to, and in its sole discretion may, at any time review, reject, modify, or remove any ad. No liability of [sitename] and/or its owner(s) shall result from any such decision.<br /><br /></div><div align="justify"><strong>Parties'' Responsibilities:</strong> You are responsible of your own site and/or service advertised in [sitename] web site. You are solely responsible for the advertising image creation, advertising text and for the content of your ads, including URL links. [sitename] is not responsible for anything regarding your Web site(s) including, but not limited to, maintenance of your Web site(s), order entry, customer service, payment processing, shipping, cancellations or returns.<br /><br /></div><div align="justify"><strong>Impressions Count:</strong> Any hit to [sitename] web site is counted as an impression. Due to our advertising price we don''t discriminate from users or automated robots. Even if you access to [sitename] web site and see your own banner ad it will be counted as a valid impression. Only in the case of [sitename] web site administrator, the impressions will not be counted.<br /><br /></div><div align="justify"><strong>Termination, Cancellation:</strong> [sitename] may at any time, in its sole discretion, terminate the Campaign, terminate this Agreement, or cancel any ad(s) or your use of any Target. [sitename] will notify you via email of any such termination or cancellation, which shall be effective immediately. No refund will be made for any reason. Remaining impressions will be stored in a database and you''ll be able to request another campaign to complete your inventory. You may cancel any ad and/or terminate this Agreement with or without cause at any time. Termination of your account shall be effective when [sitename] receives your notice via email. No refund will be made for any reason. Remaining impressions will be stored in a database for future uses by you and/or your company.<br /><br /></div><div align="justify"><strong>Content:</strong> [sitename] web site doesn''t accepts advertising that contains: (i) pornography, (ii) explicit adult content, (iii) moral questionable content, (iv) illegal content of any kind, (v) illegal drugs promotion, (vi) racism, (vii) politics content, (viii) religious content, and/or (ix) fraudulent suspicious content. If your advertising and/or target web site has any of this content and you purchased an advertising package, you''ll not receive refund of any kind but your banners ads impressions will be stored for future use.<br /><br /></div><div align="justify"><strong>Confidentiality:</strong> Each party agrees not to disclose Confidential Information of the other party without prior written consent except as provided herein. &quot;Confidential Information&quot; includes (i) ads, prior to publication, (ii) submissions or modifications relating to any advertising campaign, (iii) clickthrough rates or other statistics (except in an aggregated form that includes no identifiable information about you), and (iv) any other information designated in writing as &quot;Confidential.&quot; It does not include information that has become publicly known through no breach by a party, or has been (i) independently developed without access to the other party''s Confidential Information; (ii) rightfully received from a third party; or (iii) required to be disclosed by law or by a governmental authority.<br /><br /></div><div a
lign="justify"><strong>No Guarantee:</strong> [sitename] makes no guarantee regarding the levels of clicks for any ad on its site. [sitename] may offer the same Target to more than one advertiser. You may not receive exclusivity unless special private contract between [sitename] and you.<br /><br /></div><div align="justify"><strong>No Warranty:</strong> [sitename] MAKES NO WARRANTY, EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION WITH RESPECT TO ADVERTISING AND OTHER SERVICES, AND EXPRESSLY DISCLAIMS THE WARRANTIES OR CONDITIONS OF NONINFRINGEMENT, MERCHANTABILITY AND FITNESS FOR ANY PARTICULAR PURPOSE.<br /><br /></div><div align="justify"><strong>Limitations of Liability:</strong> In no event shall [sitename] be liable for any act or omission, or any event directly or indirectly resulting from any act or omission of Advertiser, Partner, or any third parties (if any). EXCEPT FOR THE PARTIES'' INDEMNIFICATION AND CONFIDENTIALITY OBLIGATIONS HEREUNDER, (i) IN NO EVENT SHALL EITHER PARTY BE LIABLE UNDER THIS AGREEMENT FOR ANY CONSEQUENTIAL, SPECIAL, INDIRECT, EXEMPLARY, PUNITIVE, OR OTHER DAMAGES WHETHER IN CONTRACT, TORT OR ANY OTHER LEGAL THEORY, EVEN IF SUCH PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES AND NOTWITHSTANDING ANY FAILURE OF ESSENTIAL PURPOSE OF ANY LIMITED REMEDY AND (ii) [sitename] AGGREGATE LIABILITY TO ADVERTISER UNDER THIS AGREEMENT FOR ANY CLAIM IS LIMITED TO THE AMOUNT PAID TO [sitename] BY ADVERTISER FOR THE AD GIVING RISE TO THE CLAIM. Each party acknowledges that the other party has entered into this Agreement relying on the limitations of liability stated herein and that those limitations are an essential basis of the bargain between the parties. Without limiting the foregoing and except for payment obligations, neither party shall have any liability for any failure or delay resulting from any condition beyond the reasonable control of such party, including but not limited to governmental action or acts of terrorism, earthquake or other acts of God, labor conditions, and power failures.<br /><br /></div><div align="justify"><strong>Payment:</strong> You agree to pay in advance the cost of the advertising. [sitename] will not setup any banner ads campaign(s) unless the payment process is complete. [sitename] may change its pricing at any time without prior notice. If you have an advertising campaign running and/or impressions stored for future use for any mentioned cause and [sitename] changes its pricing, you''ll not need to pay any difference. Your purchased banners fee will remain the same. Charges shall be calculated solely based on records maintained by [sitename]. No other measurements or statistics of any kind shall be accepted by [sitename] or have any effect under this Agreement.<br /><br /></div><div align="justify"><strong>Representations and Warranties:</strong> You represent and warrant that (a) all of the information provided by you to [sitename] to enroll in the Advertising Campaign is correct and current; (b) you hold all rights to permit [sitename] and any Partner(s) to use, reproduce, display, transmit and distribute your ad(s); and (c) [sitename] and any Partner(s) Use, your Target(s), and any site(s) linked to, and products or services to which users are directed, will not, in any state or country where the ad is displayed (i) violate any criminal laws or third party rights giving rise to civil liability, including but not limited to trademark rights or rights relating to the performance of music; or (ii) encourage conduct that would violate any criminal or civil law. You further represent and warrant that any Web site linked to your ad(s) (i) complies with all laws and regulations in any state or country where the ad is displayed; (ii) does not breach and has not breached any duty toward or rights of any person or entity including, without limitation, rights of publicity or privacy, or rights or duties under consumer protection, product liability, tort, or contract theories; and (iii) is not false, misleading, defamatory, libelous, slanderous or threatening.<br /
><br /></div><div align="justify"><strong>Your Obligation to Indemnify:</strong> You agree to indemnify, defend and hold [sitename], its agents, affiliates, subsidiaries, directors, officers, employees, and applicable third parties (e.g., all relevant Partner(s), licensors, licensees, consultants and contractors) (&quot;Indemnified Person(s)&quot;) harmless from and against any and all third party claims, liability, loss, and expense (including damage awards, settlement amounts, and reasonable legal fees), brought against any Indemnified Person(s), arising out of, related to or which may arise from your use of the Advertising Program, your Web site, and/or your breach of any term of this Agreement. Customer understands and agrees that each Partner, as defined herein, has the right to assert and enforce its rights under this Section directly on its own behalf as a third party beneficiary.<br /><br /></div><div align="justify"><strong>Information Rights:</strong> [sitename] may retain and use for its own purposes all information you provide, including but not limited to Targets, URLs, the content of ads, and contact and billing information. [sitename] may share this information about you with business partners and/or sponsors. [sitename] will not sell your information. Your name, web site''s URL and related graphics shall be used by [sitename] in its own web site at any time as a sample to the public, even if your Advertising Campaign has been finished.<br /><br /></div><div align="justify"><strong>Miscellaneous:</strong> Any decision made by [sitename] under this Agreement shall be final. [sitename] shall have no liability for any such decision. You will be responsible for all reasonable expenses (including attorneys'' fees) incurred by [sitename] in collecting unpaid amounts under this Agreement. This Agreement shall be governed by the laws of [country]. Any dispute or claim arising out of or in connection with this Agreement shall be adjudicated in [country]. This constitutes the entire agreement between the parties with respect to the subject matter hereof. Advertiser may not resell, assign, or transfer any of its rights hereunder. Any such attempt may result in termination of this Agreement, without liability to [sitename] and without any refund. The relationship(s) between [sitename] and the &quot;Partners&quot; is not one of a legal partnership relationship, but is one of independent contractors. This Agreement shall be construed as if both parties jointly wrote it.</div>', 'Canada');



ALTER TABLE `nuke_bbauth_access` ADD `auth_globalannounce` TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER `auth_announce`;
ALTER TABLE `nuke_bbauth_access` ADD `auth_download` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbbanlist` DROP `ban_expire_time`;
ALTER TABLE `nuke_bbbanlist` DROP `ban_by_userid`;
ALTER TABLE `nuke_bbbanlist` DROP `ban_priv_reason`;
ALTER TABLE `nuke_bbbanlist` DROP `ban_pub_reason_mode`;
ALTER TABLE `nuke_bbbanlist` DROP `ban_pub_reason`;

DROP TABLE `nuke_downloads_editorials` ;
DROP TABLE `nuke_downloads_modrequest` ;
DROP TABLE `nuke_downloads_votedata` ;
DROP TABLE `nuke_downloads_newdownload` ;

ALTER TABLE `nuke_downloads_categories` ADD `whoadd` TINYINT(2) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_downloads_categories` ADD `uploaddir` VARCHAR(255) DEFAULT '' NOT NULL;
ALTER TABLE `nuke_downloads_categories` ADD `canupload` TINYINT(2) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_downloads_categories` ADD `active` TINYINT(2) DEFAULT '1' NOT NULL;

ALTER TABLE `nuke_downloads_downloads` DROP `downloadratingsummary` ;
ALTER TABLE `nuke_downloads_downloads` DROP `totalvotes` ;
ALTER TABLE `nuke_downloads_downloads` DROP `totalcomments` ;
ALTER TABLE `nuke_downloads_downloads` DROP `filesize` ;
ALTER TABLE `nuke_downloads_downloads` DROP `version` ;
ALTER TABLE `nuke_downloads_downloads` DROP `homepage` ;

ALTER TABLE `nuke_downloads_downloads` ADD `sub_ip` VARCHAR(16) DEFAULT '0.0.0.0' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` ADD `filesize` BIGINT(20) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` ADD `version` VARCHAR(20) DEFAULT '' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` ADD `homepage` VARCHAR(255) DEFAULT '' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` ADD `active` TINYINT(2) DEFAULT '1' NOT NULL;
ALTER TABLE `nuke_downloads_downloads` CHANGE `url` `url` varchar(255) NOT NULL default '';
ALTER TABLE `nuke_downloads_downloads` CHANGE `date` `date` datetime NOT NULL default '0000-00-00 00:00:00';

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

UPDATE `nuke_bbconfig` SET `config_value` = '.0.22' WHERE `config_name` = 'version';
UPDATE `nuke_bbconfig` SET `config_value` = '0' WHERE `config_name` = 'enable_confirm';

INSERT INTO `nuke_bbconfig` VALUES ('board_disable_adminview', '1');
INSERT INTO `nuke_bbconfig` VALUES ('board_disable_msg', 'The board is currently disabled...');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_lines', '5');
INSERT INTO `nuke_bbconfig` VALUES ('sig_wordwrap', '100');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_font_sizes', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_min_font_size', '7');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_font_size', '12');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_bold', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_italic', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_underline', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_colors', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_quote', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_code', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_list', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_url', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_images', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_images', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_img_height', '75');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_img_width', '500');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_on_max_img_size_fail', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_img_files_size', '10');
INSERT INTO `nuke_bbconfig` VALUES ('sig_max_img_av_files_size', '0');
INSERT INTO `nuke_bbconfig` VALUES ('sig_exotic_bbcodes_disallowed', '');
INSERT INTO `nuke_bbconfig` VALUES ('sig_allow_smilies', '1');
INSERT INTO `nuke_bbconfig` VALUES ('report_email', '1');
INSERT INTO `nuke_bbconfig` VALUES ('ropm_quick_reply', '1');
INSERT INTO `nuke_bbconfig` VALUES ('ropm_quick_reply_bbc', '1');
INSERT INTO `nuke_bbconfig` VALUES ('ropm_quick_reply_smilies', '22');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_enable', '1');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_min', '50');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_max', '99');
INSERT INTO `nuke_bbconfig` VALUES ('wrap_def', '70');
INSERT INTO `nuke_bbconfig` VALUES ('allow_quickreply', '1');
INSERT INTO `nuke_bbconfig` VALUES ('anonymous_show_sqr', '0');
INSERT INTO `nuke_bbconfig` VALUES ('anonymous_sqr_mode', '0');
INSERT INTO `nuke_bbconfig` VALUES ('quick_search_enable', '1');
INSERT INTO `nuke_bbconfig` VALUES ('sig_line', '<hr>');
INSERT INTO `nuke_bbconfig` VALUES ('default_avatar_guests_url', 'modules/Forums/images/avatars/blank.gif');
INSERT INTO `nuke_bbconfig` VALUES ('default_avatar_users_url', 'modules/Forums/images/avatars/blank.gif');
INSERT INTO `nuke_bbconfig` VALUES ('default_avatar_set', '2');
INSERT INTO `nuke_bbconfig` VALUES ('pm_allow_threshold', '0');
INSERT INTO `nuke_bbconfig` VALUES ('welcome_pm', '0');
INSERT INTO `nuke_bbconfig` VALUES ('default_time_mode', '6');
INSERT INTO `nuke_bbconfig` VALUES ('default_dst_time_lag', '60');
INSERT INTO `nuke_bbconfig` VALUES ('glance_show', '1');
INSERT INTO `nuke_bbconfig` VALUES ('glance_show_override', '1');
INSERT INTO `nuke_bbconfig` VALUES ('glance_news_id', '0');
INSERT INTO `nuke_bbconfig` VALUES ('glance_num_news', '0');
INSERT INTO `nuke_bbconfig` VALUES ('glance_num', '6');
INSERT INTO `nuke_bbconfig` VALUES ('glance_ignore_forums', '0');
INSERT INTO `nuke_bbconfig` VALUES ('glance_table_width', '100%');
INSERT INTO `nuke_bbconfig` VALUES ('glance_auth_read', '1');
INSERT INTO `nuke_bbconfig` VALUES ('glance_topic_length', '0');
INSERT INTO `nuke_bbconfig` VALUES ('online_time', '60');
INSERT INTO `nuke_bbconfig` VALUES ('display_users_today', '0');
INSERT INTO `nuke_bbconfig` VALUES ('locked_view_open', 'Locked: <strike>');
INSERT INTO `nuke_bbconfig` VALUES ('locked_view_close', '</strike>');
INSERT INTO `nuke_bbconfig` VALUES ('global_view_open', 'Global Announcement:');
INSERT INTO `nuke_bbconfig` VALUES ('global_view_close', '');
INSERT INTO `nuke_bbconfig` VALUES ('announce_view_open', 'Announcement:');
INSERT INTO `nuke_bbconfig` VALUES ('announce_view_close', '');
INSERT INTO `nuke_bbconfig` VALUES ('sticky_view_open', 'Sticky:');
INSERT INTO `nuke_bbconfig` VALUES ('sticky_view_close', '');
INSERT INTO `nuke_bbconfig` VALUES ('moved_view_open', 'Moved:');
INSERT INTO `nuke_bbconfig` VALUES ('moved_view_close', '');
INSERT INTO `nuke_bbconfig` VALUES ('initial_group_id', '5');
INSERT INTO `nuke_bbconfig` VALUES ('hide_links', '0');
INSERT INTO `nuke_bbconfig` VALUES ('hide_emails', '0');
INSERT INTO `nuke_bbconfig` VALUES ('hide_images', '0');
INSERT INTO `nuke_bbconfig` VALUES ('use_dhtml', '1');
INSERT INTO `nuke_bbconfig` VALUES ('anonymous_open_sqr', '0');
INSERT INTO `nuke_bbconfig` VALUES ('smilies_in_titles', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_edited_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_locked_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_unlocked_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_splitted_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('show_moved_logs', '1');
INSERT INTO `nuke_bbconfig` VALUES ('logs_view_level', '2');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmArchive', '0');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmVersion', '1.6.0');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmView', '0');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmRows', '25');
INSERT INTO `nuke_bbconfig` VALUES ('aprvmIP', '1');
INSERT INTO `nuke_bbconfig` VALUES ('image_resize_width', '400');
INSERT INTO `nuke_bbconfig` VALUES ('image_resize_height', '400');
INSERT INTO `nuke_bbconfig` VALUES ('use_theme_style', '1');
INSERT INTO `nuke_bbconfig` VALUES ('allow_autologin','1');
INSERT INTO `nuke_bbconfig` VALUES ('max_autologin_time','0');
INSERT INTO `nuke_bbconfig` VALUES ('max_login_attempts', '5');
INSERT INTO `nuke_bbconfig` VALUES ('login_reset_time', '30');
INSERT INTO `nuke_bbconfig` VALUES ('show_sig_once', '0');
INSERT INTO `nuke_bbconfig` VALUES ('show_avatar_once', '0');
INSERT INTO `nuke_bbconfig` VALUES ('show_rank_once', '0');
INSERT INTO `nuke_bbconfig` VALUES ('loginpage', '1');
INSERT INTO `nuke_bbconfig` VALUES ('max_smilies', '15');
INSERT INTO `nuke_bbconfig` VALUES ('search_flood_interval', '15');
INSERT INTO `nuke_bbconfig` VALUES ('rand_seed', '0');

UPDATE `nuke_bbconfig` SET `config_value` = '300' WHERE `config_name` = 'online_time';
UPDATE `nuke_bbconfig` SET `config_value` = 'nukeevo' WHERE `config_name` = 'cookie_name';

ALTER TABLE `nuke_bbforums` ADD `auth_globalannounce` tinyint(2) NOT NULL default '3' AFTER `auth_announce`;
ALTER TABLE `nuke_bbforums` ADD `auth_download` tinyint(2) NOT NULL default '0';
ALTER TABLE `nuke_bbforums` ADD `forum_display_sort` TINYINT( 1 ) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_bbforums` ADD `forum_display_order` TINYINT( 1 ) DEFAULT '0' NOT NULL;

ALTER TABLE `nuke_bbgroups` ADD `group_allow_pm` tinyint(2) NOT NULL default '5';
ALTER TABLE `nuke_bbgroups` ADD `group_color` varchar(15) NOT NULL default '';
ALTER TABLE `nuke_bbgroups` ADD `group_rank` varchar(5) NOT NULL default '0';
ALTER TABLE `nuke_bbgroups` ADD `max_inbox` mediumint( 10 ) NOT NULL default '100';
ALTER TABLE `nuke_bbgroups` ADD `max_sentbox` mediumint( 10 ) NOT NULL default '100';
ALTER TABLE `nuke_bbgroups` ADD `max_savebox` mediumint( 10 ) NOT NULL default '100';
ALTER TABLE `nuke_bbgroups` ADD `override_max_inbox` tinyint( 1 ) NOT NULL default '0';
ALTER TABLE `nuke_bbgroups` ADD `override_max_sentbox` tinyint( 1 ) NOT NULL default '0';
ALTER TABLE `nuke_bbgroups` ADD `override_max_savebox` tinyint( 1 ) NOT NULL default '0';
ALTER TABLE `nuke_bbgroups` ADD `group_count` INT( 4 ) UNSIGNED NOT NULL DEFAULT '99999999', ADD `group_count_max` INT( 4 ) UNSIGNED NOT NULL DEFAULT '99999999', ADD `group_count_enable` SMALLINT( 2 ) UNSIGNED NOT NULL DEFAULT '0';

INSERT INTO `nuke_bbgroups` VALUES (5, 0, 'Users', 'Default Usergroup', 2, 0, 5, '', '', 0, 0, 0, 0, 0, 0,'99999999','99999999','0');

ALTER TABLE `nuke_bbprivmsgs` ADD `privmsgs_attachment` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbposts` ADD `post_attachment` tinyint(1) NOT NULL default '0', ADD `post_move` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbranks` CHANGE `rank_title` `rank_title` varchar(100) NOT NULL default '';

ALTER TABLE `nuke_bbsearch_wordmatch` ADD INDEX (post_id);

ALTER TABLE `nuke_bbsearch_wordlist` CHANGE `word_text` `word_text` varchar(255) binary NOT NULL DEFAULT '';
ALTER TABLE `nuke_bbsearch_wordlist` CHANGE `word_common` `word_common` mediumint(8) unsigned DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_bbsearch_wordlist` ADD  `post_id` mediumint(8) unsigned DEFAULT '0' NOT NULL;

ALTER TABLE `nuke_bbsessions` ADD COLUMN session_admin tinyint(2) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_bbsessions` ADD COLUMN `session_url_qs` text NOT NULL;
ALTER TABLE `nuke_bbsessions` ADD COLUMN `session_url_ps` text NOT NULL;
ALTER TABLE `nuke_bbsessions` ADD COLUMN `session_url_specific` int(10) NOT NULL default '0';

ALTER TABLE `nuke_bbsmilies` ADD `smile_stat` mediumint(8) unsigned NOT NULL default '0';

ALTER TABLE `nuke_bbthemes` ADD `online_color` varchar(6) NOT NULL default '',
ADD `offline_color` varchar(6) NOT NULL default '',
ADD `hidden_color` varchar(6) NOT NULL default '';

ALTER TABLE `nuke_bbtopics` ADD `topic_priority` smallint(6) NOT NULL default '0', ADD `topic_glance_priority` smallint(6) NOT NULL default '0';

ALTER TABLE `nuke_bbtopics` ADD `topic_attachment` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbvote_desc` ADD `poll_view_toggle` tinyint(1) NOT NULL default '0';

ALTER TABLE `nuke_bbvote_voters` ADD `vote_cast` tinyint(4) unsigned NOT NULL default '0';
ALTER TABLE `nuke_bbvote_voters` ADD KEY `vote_cast` (`vote_cast`);

ALTER TABLE `nuke_config` ADD `admin_pos` tinyint(1) NOT NULL default '1';
ALTER TABLE `nuke_config` ADD `log_lines` int(11) NOT NULL default '0';
UPDATE `nuke_config` SET `backend_title` = 'Nuke-Evolution Powered Site';
UPDATE `nuke_config` SET `copyright` = 'PHP-Nuke Copyright &copy; 2006 by Francisco Burzi.<br />All logos, trademarks and posts in this site are property of their respective owners, all the rest &copy; 2006 by the site owner.<br />Powered by <a href="http://www.nuke-evolution.com" target="_blank">Nuke-Evolution</a>.<br />';
UPDATE `nuke_config` SET `Version_Num` = '7.6.0';
ALTER TABLE `nuke_config` ADD `cache_data` MEDIUMBLOB NOT NULL ;

UPDATE `nuke_evolution` SET `evo_value`= UNIX_TIMESTAMP( ) WHERE `evo_field` = 'cache_last_cleared';

ALTER TABLE `nuke_message` ADD `groups` TEXT NOT NULL;

ALTER TABLE `nuke_session` ADD `module` varchar(30) NOT NULL default '';
ALTER TABLE `nuke_session` ADD `url` varchar(255) NOT NULL default '';
ALTER TABLE `nuke_session` ADD `starttime` varchar(14) NOT NULL default '';
ALTER TABLE `nuke_session` ADD PRIMARY KEY `uname` (`uname`);

ALTER TABLE `nuke_stories` ADD `ticon` tinyint(1) NOT NULL default '0';
ALTER TABLE `nuke_stories` CHANGE informant informant varchar(25) not null default '';
ALTER TABLE `nuke_stories` CHANGE aid aid varchar(25) not null default '';
ALTER TABLE `nuke_stories` ADD `writes` TINYINT( 1 ) DEFAULT '1' NOT NULL;

ALTER TABLE `nuke_themes` CHANGE `theme_info` `theme_info` text NOT NULL default '';

ALTER TABLE `nuke_topics` CHANGE `topicimage` `topicimage` varchar(100) default NULL;

ALTER TABLE `nuke_users` CHANGE `user_sig` `user_sig` TEXT DEFAULT NULL;

ALTER TABLE `nuke_users` CHANGE `user_msnm` `user_msnm` varchar(255) default NULL,
CHANGE `user_aim` `user_aim` varchar(255) default NULL,
CHANGE `user_yim` `user_yim` varchar(255) default NULL;

ALTER TABLE `nuke_users` CHANGE `user_timezone` `user_timezone` decimal(5,2) NOT NULL default '0.00';

ALTER TABLE `nuke_users` ADD `user_allow_mass_pm` TINYINT( 1 ) DEFAULT '4' NOT NULL AFTER `user_allow_pm` ;

ALTER TABLE `nuke_users` ADD `user_color_gc` varchar(6) default '';
ALTER TABLE `nuke_users` ADD `user_color_gi` text;
ALTER TABLE `nuke_users` ADD `user_wordwrap` smallint(3) NOT NULL default '70';
ALTER TABLE `nuke_users` ADD `agreedtos` tinyint(1) NOT NULL default '0';
ALTER TABLE `nuke_users` ADD `user_allowsignature` tinyint(4) NOT NULL default '1';
ALTER TABLE `nuke_users` ADD `user_report_optout` tinyint(1) DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_users` ADD `user_show_quickreply` tinyint(1) NOT NULL default '1';
ALTER TABLE `nuke_users` ADD `user_quickreply_mode` tinyint(1) NOT NULL default '1';
ALTER TABLE `nuke_users` ADD `user_showavatars` tinyint(1) default '1';
ALTER TABLE `nuke_users` ADD `user_showsignatures` tinyint(1) default '1';
ALTER TABLE `nuke_users` ADD `user_time_mode` tinyint(4) NOT NULL default '6';
ALTER TABLE `nuke_users` ADD `user_dst_time_lag` tinyint(4) NOT NULL default '60';
ALTER TABLE `nuke_users` ADD `user_pc_timeOffsets` varchar(11) NOT NULL default '0';
ALTER TABLE `nuke_users` ADD `user_view_log` tinyint(4) NOT NULL default '0';
ALTER TABLE `nuke_users` ADD `user_glance_show` varchar(255) NOT NULL default '1';
ALTER TABLE `nuke_users` ADD `user_hide_images` tinyint(2) NOT NULL default '0';
ALTER TABLE `nuke_users` ADD `user_open_quickreply` TINYINT(1) DEFAULT '1' NOT NULL;
ALTER TABLE `nuke_users` ADD `xdata_bbcode` VARCHAR( 10 );

ALTER TABLE `nuke_users_temp` ADD `realname` varchar(255) NOT NULL default '';

UPDATE `nuke_counter` SET var = 'Firefox' WHERE var = 'FireFox';

INSERT INTO `nuke_counter` VALUES ('browser', 'Galeon', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'K-Meleon', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'Shiira', 0);
INSERT INTO `nuke_counter` VALUES ('browser', 'Camino', 0);

DELETE FROM `nuke_counter` WHERE var = 'WebTV';

DROP TABLE IF EXISTS `nuke_stats_year`;
DROP TABLE IF EXISTS `nuke_stats_month`;
DROP TABLE IF EXISTS `nuke_stats_date`;

DROP TABLE IF EXISTS `nuke_downloads_accesses`;
CREATE TABLE `nuke_downloads_accesses` (
  `username` varchar(60) NOT NULL default '',
  `downloads` int(11) NOT NULL default '0',
  `uploads` int(11) NOT NULL default '0',
  PRIMARY KEY  (`username`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `nuke_downloads_config`;
CREATE TABLE `nuke_downloads_config` (
  `config_name` varchar(255) NOT NULL default '',
  `config_value` text NOT NULL,
  PRIMARY KEY  (`config_name`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `nuke_downloads_extensions`;
CREATE TABLE `nuke_downloads_extensions` (
  `eid` int(11) NOT NULL auto_increment,
  `ext` varchar(6) NOT NULL default '',
  `file` tinyint(1) NOT NULL default '0',
  `image` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`eid`),
  KEY `ext` (`eid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `nuke_downloads_mods`;
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
  PRIMARY KEY  (`rid`),
  UNIQUE KEY `rid` (`rid`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `nuke_downloads_new`;
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
  KEY `lid` (`lid`),
  KEY `cid` (`cid`),
  KEY `sid` (`sid`),
  KEY `title` (`title`)
) TYPE=MyISAM;


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


ALTER TABLE `nuke_config` ADD `admin_log_lines` int(11) NOT NULL default '0';
ALTER TABLE `nuke_config` ADD `error_log_lines` int(11) NOT NULL default '0';
ALTER TABLE `nuke_config` DROP `log_lines`;

DROP TABLE IF EXISTS `nuke_journal`;
DROP TABLE IF EXISTS `nuke_journal_comments`;
DROP TABLE IF EXISTS `nuke_journal_stats`;

ALTER TABLE `nuke_authors` DROP INDEX `aid`;
ALTER TABLE `nuke_autonews` DROP INDEX `anid`;
ALTER TABLE `nuke_banner` DROP INDEX `bid`;
ALTER TABLE `nuke_banner_clients` DROP INDEX `cid`;
ALTER TABLE `nuke_comments` DROP INDEX `tid`;
ALTER TABLE `nuke_counter` ADD INDEX ( `var` );

ALTER TABLE `nuke_downloads_categories` DROP INDEX `cid`;
ALTER TABLE `nuke_downloads_downloads` DROP INDEX `lid`;
ALTER TABLE `nuke_faqanswer` DROP INDEX `id`;
ALTER TABLE `nuke_faqcategories` DROP INDEX `id_cat`;
ALTER TABLE `nuke_headlines` DROP INDEX `hid`;
ALTER TABLE `nuke_links_categories` DROP INDEX `cid`;
ALTER TABLE `nuke_links_editorials` DROP INDEX `linkid`;
ALTER TABLE `nuke_links_links` DROP INDEX `lid`;
ALTER TABLE `nuke_links_modrequest` DROP INDEX `requestid`;
ALTER TABLE `nuke_links_newlink` DROP INDEX `lid`;
ALTER TABLE `nuke_links_votedata` DROP INDEX `ratingdbid`;

ALTER TABLE `nuke_main` ADD INDEX `main_module` ( `main_module` );

ALTER TABLE `nuke_message` DROP INDEX `mid`;

ALTER TABLE `nuke_pages` DROP INDEX `pid`;
ALTER TABLE `nuke_pages_categories` DROP INDEX `cid`;
ALTER TABLE `nuke_poll_desc` DROP INDEX `pollID`;
ALTER TABLE `nuke_pollcomments` DROP INDEX `tid`;
ALTER TABLE `nuke_queue` DROP INDEX `qid`;
ALTER TABLE `nuke_quotes` DROP INDEX `qid`;
ALTER TABLE `nuke_related` DROP INDEX `rid`;
ALTER TABLE `nuke_reviews` DROP INDEX `id`;
ALTER TABLE `nuke_reviews` CHANGE `reviewer` `reviewer` varchar(25) default NULL;
ALTER TABLE `nuke_reviews_add` DROP INDEX `id`;
ALTER TABLE `nuke_reviews_add` CHANGE `reviewer` `reviewer` varchar(25) NOT NULL default '';
ALTER TABLE `nuke_reviews_comments` DROP INDEX `cid`;

ALTER TABLE `nuke_reviews_main` ADD INDEX `title` ( `title` );

ALTER TABLE `nuke_stories` DROP INDEX `sid`;
ALTER TABLE `nuke_stories_cat` DROP INDEX `catid`;
ALTER TABLE `nuke_topics` DROP INDEX `topicid`;
ALTER TABLE `nuke_users` DROP INDEX `uid`;

INSERT INTO `nuke_counter` VALUES ('browser', 'Avant', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Crazy', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'DEVONtech', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Dillo', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'ELinks', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Epiphany', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'iRider', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Maxthon', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Mozilla', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'MultiZilla', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'NetCaptor', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'OmniWeb', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Safari', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'Voyager', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'w3m', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'WAP', '0');
INSERT INTO `nuke_counter` VALUES ('browser', 'WebWasher', '0');
INSERT INTO `nuke_counter` VALUES ('os', 'Linspire', '0');


ALTER TABLE `nuke_bbsearch_results` ADD COLUMN `search_time` int(11) DEFAULT '0' NOT NULL;


ALTER TABLE `nuke_referer` DROP `rid`;
ALTER TABLE `nuke_referer` ADD `lasttime` int(10) unsigned DEFAULT '0' NOT NULL;
ALTER TABLE `nuke_referer` ADD `link` VARCHAR( 100 ) NOT NULL;
ALTER TABLE `nuke_referer` ADD PRIMARY KEY (`url`);
ALTER TABLE `nuke_referer` ADD KEY `lasttime` (`lasttime`);
ALTER TABLE `nuke_referer` CHANGE `url` `url` varchar(100) NOT NULL;

ALTER TABLE `nuke_users` CHANGE `bio` `bio` TINYTEXT NULL;
ALTER TABLE `nuke_users` CHANGE `ublock` `ublock` TINYTEXT NULL;

UPDATE `nuke_config` SET `foot1` = '<a href="modules.php?name=Spambot_Killer" target="_blank">Spambot Killer</a><br /><a href="modules.php?name=Site_Map" target="_blank"><strong>Site Map</strong></a><br />';
UPDATE `nuke_config` SET `foot2` = '<a href="rss.php?feed=news" target="_blank"><img border="0" src="images/powered/feed_20_news.png" width="94" height="15" alt="[News Feed]" title="News Feed" /></a> <a href="rss.php?feed=forums" target="_blank"><img border="0" src="images/powered/feed_20_forums.png" width="94" height="15" alt="[Forums Feed]" title="Forums Feed" /></a> <a href="rss.php?feed=downloads" target="_blank" /><img border="0" src="images/powered/feed_20_down.png" width="94" height="15" alt="[Downloads Feed]" title="Downloads Feed" /></a> <a href="rss.php?feed=weblinks" target="_blank"><img border="0" src="images/powered/feed_20_links.png" width="94" height="15" alt="[Web Links Feed]" title="Web Links Feed" /></a> <a href="http://tool.motoricerca.info/robots-checker.phtml?checkreferer=1" target="_blank"><img border="0" src="images/powered/valid-robots.png" width="80" height="15" alt="[Validate robots.txt]" title="Validate robots.txt" /></a><br />';
