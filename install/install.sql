# ========================================================
#
# Database : evo
# Dátum: 11-09-2007
#
# ========================================================


#
# Table structure for table 'nuke_authors'
#

DROP TABLE IF EXISTS nuke_authors;
CREATE TABLE nuke_authors (
   aid varchar(25) NOT NULL,
   name varchar(50),
   url varchar(255) NOT NULL,
   email varchar(255) NOT NULL,
   pwd varchar(40),
   counter int(11) DEFAULT '0' NOT NULL,
   radminsuper tinyint(1) DEFAULT '1' NOT NULL,
   admlanguage varchar(30) NOT NULL,
   PRIMARY KEY (aid)
);


#
# Dumping data for table 'nuke_authors'
#

#
# Table structure for table 'nuke_autonews'
#

DROP TABLE IF EXISTS nuke_autonews;
CREATE TABLE nuke_autonews (
   anid int(10) unsigned NOT NULL auto_increment,
   catid int(11) DEFAULT '0' NOT NULL,
   aid varchar(30) NOT NULL,
   title varchar(80) NOT NULL,
   time varchar(19) NOT NULL,
   hometext text NOT NULL,
   bodytext text NOT NULL,
   topic int(11) DEFAULT '1' NOT NULL,
   informant varchar(40) NOT NULL,
   notes text NOT NULL,
   ihome tinyint(4) DEFAULT '0' NOT NULL,
   alanguage varchar(30) NOT NULL,
   acomm tinyint(4) DEFAULT '0' NOT NULL,
   associated text NOT NULL,
   ticon tinyint(1) DEFAULT '0' NOT NULL,
   writes tinyint(1) DEFAULT '1' NOT NULL,
   PRIMARY KEY (anid),
   UNIQUE anid (anid)
);


#
# Dumping data for table 'nuke_autonews'
#


#
# Table structure for table 'nuke_banner'
#

DROP TABLE IF EXISTS nuke_banner;
CREATE TABLE nuke_banner (
   bid int(11) NOT NULL auto_increment,
   cid int(11) DEFAULT '0' NOT NULL,
   name varchar(50) NOT NULL,
   imptotal int(11) DEFAULT '0' NOT NULL,
   impmade int(11) DEFAULT '0' NOT NULL,
   clicks int(11) DEFAULT '0' NOT NULL,
   imageurl varchar(100) NOT NULL,
   clickurl varchar(200) NOT NULL,
   alttext varchar(255) NOT NULL,
   date datetime,
   dateend datetime,
   position int(10) DEFAULT '0' NOT NULL,
   active tinyint(1) DEFAULT '1' NOT NULL,
   ad_class varchar(5) NOT NULL,
   ad_code text NOT NULL,
   ad_width int(4) DEFAULT '0',
   ad_height int(4) DEFAULT '0',
   type varchar(255) NOT NULL,
   PRIMARY KEY (bid),
   KEY cid (cid)
);


#
# Dumping data for table 'nuke_banner'
#


#
# Table structure for table 'nuke_banner_clients'
#

DROP TABLE IF EXISTS nuke_banner_clients;
CREATE TABLE nuke_banner_clients (
   cid int(11) NOT NULL auto_increment,
   name varchar(60) NOT NULL,
   contact varchar(60) NOT NULL,
   email varchar(60) NOT NULL,
   login varchar(10) NOT NULL,
   passwd varchar(10) NOT NULL,
   extrainfo text NOT NULL,
   PRIMARY KEY (cid)
);


#
# Dumping data for table 'nuke_banner_clients'
#


#
# Table structure for table 'nuke_banner_plans'
#

DROP TABLE IF EXISTS nuke_banner_plans;
CREATE TABLE nuke_banner_plans (
   pid int(10) NOT NULL auto_increment,
   active tinyint(1) DEFAULT '0' NOT NULL,
   name varchar(255) NOT NULL,
   description text NOT NULL,
   delivery varchar(10) NOT NULL,
   delivery_type varchar(25) NOT NULL,
   price varchar(25) DEFAULT '0' NOT NULL,
   buy_links text NOT NULL,
   PRIMARY KEY (pid)
);


#
# Dumping data for table 'nuke_banner_plans'
#


#
# Table structure for table 'nuke_banner_positions'
#

DROP TABLE IF EXISTS nuke_banner_positions;
CREATE TABLE nuke_banner_positions (
   apid int(10) NOT NULL auto_increment,
   position_number int(5) DEFAULT '0' NOT NULL,
   position_name varchar(255) NOT NULL,
   PRIMARY KEY (apid),
   KEY position_number (position_number)
);


#
# Dumping data for table 'nuke_banner_positions'
#

INSERT INTO nuke_banner_positions  VALUES ('1', '0', 'Oldal Fejléce');
INSERT INTO nuke_banner_positions  VALUES ('2', '1', 'Bal Blokk');
INSERT INTO nuke_banner_positions  VALUES ('3', '2', 'Oldal Lábléce');

#
# Table structure for table 'nuke_banner_terms'
#

DROP TABLE IF EXISTS nuke_banner_terms;
CREATE TABLE nuke_banner_terms (
   terms_body text NOT NULL,
   country varchar(255) NOT NULL
);


#
# Dumping data for table 'nuke_banner_terms'
#

INSERT INTO nuke_banner_terms  VALUES ('<div align=\"justify\"><strong>Introduction:</strong> This Agreement between you and&nbsp;[sitename] consists of these Terms and Conditions. &quot;You&quot; or &quot;Advertiser&quot; means the entity identified in this enrollment form, and/or any agency acting on its behalf, which shall also be bound by the terms of this Agreement. Please read very carefully these Terms and Conditions.<br /><strong><br />Uses:</strong> You agree that your ads may be placed on (i) [sitename] web site and (ii) Any ads may be modified without your consent to comply with any policy of [sitename]. [sitename] reserves the right to, and in its sole discretion may, at any time review, reject, modify, or remove any ad. No liability of [sitename] and/or its owner(s) shall result from any such decision.<br /><br /></div><div align=\"justify\"><strong>Parties\' Responsibilities:</strong> You are responsible of your own site and/or service advertised in [sitename] web site. You are solely responsible for the advertising image creation, advertising text and for the content of your ads, including URL links. [sitename] is not responsible for anything regarding your Web site(s) including, but not limited to, maintenance of your Web site(s), order entry, customer service, payment processing, shipping, cancellations or returns.<br /><br /></div><div align=\"justify\"><strong>Impressions Count:</strong> Any hit to [sitename] web site is counted as an impression. Due to our advertising price we don\'t discriminate from users or automated robots. Even if you access to [sitename] web site and see your own banner ad it will be counted as a valid impression. Only in the case of [sitename] web site administrator, the impressions will not be counted.<br /><br /></div><div align=\"justify\"><strong>Termination, Cancellation:</strong> [sitename] may at any time, in its sole discretion, terminate the Campaign, terminate this Agreement, or cancel any ad(s) or your use of any Target. [sitename] will notify you via email of any such termination or cancellation, which shall be effective immediately. No refund will be made for any reason. Remaining impressions will be stored in a database and you\'ll be able to request another campaign to complete your inventory. You may cancel any ad and/or terminate this Agreement with or without cause at any time. Termination of your account shall be effective when [sitename] receives your notice via email. No refund will be made for any reason. Remaining impressions will be stored in a database for future uses by you and/or your company.<br /><br /></div><div align=\"justify\"><strong>Content:</strong> [sitename] web site doesn\'t accepts advertising that contains: (i) pornography, (ii) explicit adult content, (iii) moral questionable content, (iv) illegal content of any kind, (v) illegal drugs promotion, (vi) racism, (vii) politics content, (viii) religious content, and/or (ix) fraudulent suspicious content. If your advertising and/or target web site has any of this content and you purchased an advertising package, you\'ll not receive refund of any kind but your banners ads impressions will be stored for future use.<br /><br /></div><div align=\"justify\"><strong>Confidentiality:</strong> Each party agrees not to disclose Confidential Information of the other party without prior written consent except as provided herein. &quot;Confidential Information&quot; includes (i) ads, prior to publication, (ii) submissions or modifications relating to any advertising campaign, (iii) clickthrough rates or other statistics (except in an aggregated form that includes no identifiable information about you), and (iv) any other information designated in writing as &quot;Confidential.&quot; It does not include information that has become publicly known through no breach by a party, or has been (i) independently developed without access to the other party\'s Confidential Information; (ii) rightfully received from a third party; or (iii) required to be disclosed by law or by a governmental authority.<br /><br /></div><div align=\"justify\"><strong>No Guarantee:</strong> [sitename] makes no guarantee regarding the levels of clicks for any ad on its site. [sitename] may offer the same Target to more than one advertiser. You may not receive exclusivity unless special private contract between [sitename] and you.<br /><br /></div><div align=\"justify\"><strong>No Warranty:</strong> [sitename] MAKES NO WARRANTY, EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION WITH RESPECT TO ADVERTISING AND OTHER SERVICES, AND EXPRESSLY DISCLAIMS THE WARRANTIES OR CONDITIONS OF NONINFRINGEMENT, MERCHANTABILITY AND FITNESS FOR ANY PARTICULAR PURPOSE.<br /><br /></div><div align=\"justify\"><strong>Limitations of Liability:</strong> In no event shall [sitename] be liable for any act or omission, or any event directly or indirectly resulting from any act or omission of Advertiser, Partner, or any third parties (if any). EXCEPT FOR THE PARTIES\' INDEMNIFICATION AND CONFIDENTIALITY OBLIGATIONS HEREUNDER, (i) IN NO EVENT SHALL EITHER PARTY BE LIABLE UNDER THIS AGREEMENT FOR ANY CONSEQUENTIAL, SPECIAL, INDIRECT, EXEMPLARY, PUNITIVE, OR OTHER DAMAGES WHETHER IN CONTRACT, TORT OR ANY OTHER LEGAL THEORY, EVEN IF SUCH PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES AND NOTWITHSTANDING ANY FAILURE OF ESSENTIAL PURPOSE OF ANY LIMITED REMEDY AND (ii) [sitename] AGGREGATE LIABILITY TO ADVERTISER UNDER THIS AGREEMENT FOR ANY CLAIM IS LIMITED TO THE AMOUNT PAID TO [sitename] BY ADVERTISER FOR THE AD GIVING RISE TO THE CLAIM. Each party acknowledges that the other party has entered into this Agreement relying on the limitations of liability stated herein and that those limitations are an essential basis of the bargain between the parties. Without limiting the foregoing and except for payment obligations, neither party shall have any liability for any failure or delay resulting from any condition beyond the reasonable control of such party, including but not limited to governmental action or acts of terrorism, earthquake or other acts of God, labor conditions, and power failures.<br /><br /></div><div align=\"justify\"><strong>Payment:</strong> You agree to pay in advance the cost of the advertising. [sitename] will not setup any banner ads campaign(s) unless the payment process is complete. [sitename] may change its pricing at any time without prior notice. If you have an advertising campaign running and/or impressions stored for future use for any mentioned cause and [sitename] changes its pricing, you\'ll not need to pay any difference. Your purchased banners fee will remain the same. Charges shall be calculated solely based on records maintained by [sitename]. No other measurements or statistics of any kind shall be accepted by [sitename] or have any effect under this Agreement.<br /><br /></div><div align=\"justify\"><strong>Representations and Warranties:</strong> You represent and warrant that (a) all of the information provided by you to [sitename] to enroll in the Advertising Campaign is correct and current; (b) you hold all rights to permit [sitename] and any Partner(s) to use, reproduce, display, transmit and distribute your ad(s); and (c) [sitename] and any Partner(s) Use, your Target(s), and any site(s) linked to, and products or services to which users are directed, will not, in any state or country where the ad is displayed (i) violate any criminal laws or third party rights giving rise to civil liability, including but not limited to trademark rights or rights relating to the performance of music; or (ii) encourage conduct that would violate any criminal or civil law. You further represent and warrant that any Web site linked to your ad(s) (i) complies with all laws and regulations in any state or country where the ad is displayed; (ii) does not breach and has not breached any duty toward or rights of any person or entity including, without limitation, rights of publicity or privacy, or rights or duties under consumer protection, product liability, tort, or contract theories; and (iii) is not false, misleading, defamatory, libelous, slanderous or threatening.<br /><br /></div><div align=\"justify\"><strong>Your Obligation to Indemnify:</strong> You agree to indemnify, defend and hold [sitename], its agents, affiliates, subsidiaries, directors, officers, employees, and applicable third parties (e.g., all relevant Partner(s), licensors, licensees, consultants and contractors) (&quot;Indemnified Person(s)&quot;) harmless from and against any and all third party claims, liability, loss, and expense (including damage awards, settlement amounts, and reasonable legal fees), brought against any Indemnified Person(s), arising out of, related to or which may arise from your use of the Advertising Program, your Web site, and/or your breach of any term of this Agreement. Customer understands and agrees that each Partner, as defined herein, has the right to assert and enforce its rights under this Section directly on its own behalf as a third party beneficiary.<br /><br /></div><div align=\"justify\"><strong>Information Rights:</strong> [sitename] may retain and use for its own purposes all information you provide, including but not limited to Targets, URLs, the content of ads, and contact and billing information. [sitename] may share this information about you with business partners and/or sponsors. [sitename] will not sell your information. Your name, web site\'s URL and related graphics shall be used by [sitename] in its own web site at any time as a sample to the public, even if your Advertising Campaign has been finished.<br /><br /></div><div align=\"justify\"><strong>Miscellaneous:</strong> Any decision made by [sitename] under this Agreement shall be final. [sitename] shall have no liability for any such decision. You will be responsible for all reasonable expenses (including attorneys\' fees) incurred by [sitename] in collecting unpaid amounts under this Agreement. This Agreement shall be governed by the laws of [country]. Any dispute or claim arising out of or in connection with this Agreement shall be adjudicated in [country]. This constitutes the entire agreement between the parties with respect to the subject matter hereof. Advertiser may not resell, assign, or transfer any of its rights hereunder. Any such attempt may result in termination of this Agreement, without liability to [sitename] and without any refund. The relationship(s) between [sitename] and the &quot;Partners&quot; is not one of a legal partnership relationship, but is one of independent contractors. This Agreement shall be construed as if both parties jointly wrote it.</div>', 'Canada');

#
# Table structure for table 'nuke_bbadvanced_username_color'
#

DROP TABLE IF EXISTS nuke_bbadvanced_username_color;
CREATE TABLE nuke_bbadvanced_username_color (
   group_id int(10) unsigned NOT NULL auto_increment,
   group_name varchar(255) NOT NULL,
   group_color varchar(6) NOT NULL,
   group_weight smallint(2) DEFAULT '0' NOT NULL,
   PRIMARY KEY (group_id)
);


#
# Dumping data for table 'nuke_bbadvanced_username_color'
#

INSERT INTO nuke_bbadvanced_username_color  VALUES ('1', 'Administrators', 'FFA34F', '1');
INSERT INTO nuke_bbadvanced_username_color  VALUES ('2', 'Moderators', '006600', '2');

#
# Table structure for table 'nuke_bbattach_quota'
#

DROP TABLE IF EXISTS nuke_bbattach_quota;
CREATE TABLE nuke_bbattach_quota (
   user_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   group_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   quota_type smallint(2) DEFAULT '0' NOT NULL,
   quota_limit_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   KEY quota_type (quota_type)
);


#
# Dumping data for table 'nuke_bbattach_quota'
#


#
# Table structure for table 'nuke_bbattachments'
#

DROP TABLE IF EXISTS nuke_bbattachments;
CREATE TABLE nuke_bbattachments (
   attach_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   post_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   privmsgs_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   user_id_1 mediumint(8) DEFAULT '0' NOT NULL,
   user_id_2 mediumint(8) DEFAULT '0' NOT NULL,
   KEY attach_id_post_id (attach_id, post_id),
   KEY attach_id_privmsgs_id (attach_id, privmsgs_id),
   KEY post_id (post_id),
   KEY privmsgs_id (privmsgs_id)
);


#
# Dumping data for table 'nuke_bbattachments'
#


#
# Table structure for table 'nuke_bbattachments_config'
#

DROP TABLE IF EXISTS nuke_bbattachments_config;
CREATE TABLE nuke_bbattachments_config (
   config_name varchar(255) NOT NULL,
   config_value varchar(255) NOT NULL,
   PRIMARY KEY (config_name)
);


#
# Dumping data for table 'nuke_bbattachments_config'
#

INSERT INTO nuke_bbattachments_config  VALUES ('upload_dir', 'modules/Forums/files');
INSERT INTO nuke_bbattachments_config  VALUES ('upload_img', 'modules/Forums/images/icon_clip.gif');
INSERT INTO nuke_bbattachments_config  VALUES ('topic_icon', 'modules/Forums/images/icon_clip.gif');
INSERT INTO nuke_bbattachments_config  VALUES ('display_order', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('max_filesize', '262144');
INSERT INTO nuke_bbattachments_config  VALUES ('attachment_quota', '52428800');
INSERT INTO nuke_bbattachments_config  VALUES ('max_filesize_pm', '262144');
INSERT INTO nuke_bbattachments_config  VALUES ('max_attachments', '3');
INSERT INTO nuke_bbattachments_config  VALUES ('max_attachments_pm', '1');
INSERT INTO nuke_bbattachments_config  VALUES ('disable_mod', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('allow_pm_attach', '1');
INSERT INTO nuke_bbattachments_config  VALUES ('attachment_topic_review', '1');
INSERT INTO nuke_bbattachments_config  VALUES ('allow_ftp_upload', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('show_apcp', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('attach_version', '2.4.5');
INSERT INTO nuke_bbattachments_config  VALUES ('default_upload_quota', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('default_pm_quota', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('ftp_server', 'ftp.yoursite.com');
INSERT INTO nuke_bbattachments_config  VALUES ('ftp_path', '/public_html/modules/Forums/files');
INSERT INTO nuke_bbattachments_config  VALUES ('download_path', 'http://www.yoursite.com/modules/Forums/files');
INSERT INTO nuke_bbattachments_config  VALUES ('ftp_user', '');
INSERT INTO nuke_bbattachments_config  VALUES ('ftp_pass', '');
INSERT INTO nuke_bbattachments_config  VALUES ('ftp_pasv_mode', '1');
INSERT INTO nuke_bbattachments_config  VALUES ('img_display_inlined', '1');
INSERT INTO nuke_bbattachments_config  VALUES ('img_max_width', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('img_max_height', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('img_link_width', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('img_link_height', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('img_create_thumbnail', '1');
INSERT INTO nuke_bbattachments_config  VALUES ('img_min_thumb_filesize', '12000');
INSERT INTO nuke_bbattachments_config  VALUES ('img_imagick', '/usr/bin/convert');
INSERT INTO nuke_bbattachments_config  VALUES ('use_gd2', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('wma_autoplay', '0');
INSERT INTO nuke_bbattachments_config  VALUES ('flash_autoplay', '0');

#
# Table structure for table 'nuke_bbattachments_desc'
#

DROP TABLE IF EXISTS nuke_bbattachments_desc;
CREATE TABLE nuke_bbattachments_desc (
   attach_id mediumint(8) unsigned NOT NULL auto_increment,
   physical_filename varchar(255) NOT NULL,
   real_filename varchar(255) NOT NULL,
   download_count mediumint(8) unsigned DEFAULT '0' NOT NULL,
   comment varchar(255),
   extension varchar(100),
   mimetype varchar(100),
   filesize int(20) DEFAULT '0' NOT NULL,
   filetime int(11) DEFAULT '0' NOT NULL,
   thumbnail tinyint(1) DEFAULT '0' NOT NULL,
   PRIMARY KEY (attach_id),
   KEY filetime (filetime),
   KEY physical_filename (physical_filename),
   KEY filesize (filesize)
);


#
# Dumping data for table 'nuke_bbattachments_desc'
#


#
# Table structure for table 'nuke_bbauth_access'
#

DROP TABLE IF EXISTS nuke_bbauth_access;
CREATE TABLE nuke_bbauth_access (
   group_id mediumint(8) DEFAULT '0' NOT NULL,
   forum_id smallint(5) unsigned DEFAULT '0' NOT NULL,
   auth_view tinyint(1) DEFAULT '0' NOT NULL,
   auth_read tinyint(1) DEFAULT '0' NOT NULL,
   auth_post tinyint(1) DEFAULT '0' NOT NULL,
   auth_reply tinyint(1) DEFAULT '0' NOT NULL,
   auth_edit tinyint(1) DEFAULT '0' NOT NULL,
   auth_delete tinyint(1) DEFAULT '0' NOT NULL,
   auth_sticky tinyint(1) DEFAULT '0' NOT NULL,
   auth_announce tinyint(1) DEFAULT '0' NOT NULL,
   auth_globalannounce tinyint(1) DEFAULT '0' NOT NULL,
   auth_vote tinyint(1) DEFAULT '0' NOT NULL,
   auth_pollcreate tinyint(1) DEFAULT '0' NOT NULL,
   auth_attachments tinyint(1) DEFAULT '0' NOT NULL,
   auth_mod tinyint(1) DEFAULT '0' NOT NULL,
   auth_download tinyint(1) DEFAULT '0' NOT NULL,
   KEY group_id (group_id),
   KEY forum_id (forum_id)
);


#
# Dumping data for table 'nuke_bbauth_access'
#


#
# Table structure for table 'nuke_bbbanlist'
#

DROP TABLE IF EXISTS nuke_bbbanlist;
CREATE TABLE nuke_bbbanlist (
   ban_id mediumint(8) unsigned NOT NULL auto_increment,
   ban_userid mediumint(8) DEFAULT '0' NOT NULL,
   ban_ip varchar(8) NOT NULL,
   ban_email varchar(255),
   ban_time int(11),
   PRIMARY KEY (ban_id),
   KEY ban_ip_user_id (ban_ip, ban_userid)
);


#
# Dumping data for table 'nuke_bbbanlist'
#

INSERT INTO nuke_bbbanlist  VALUES ('2', '0', '', '*@evodesign.hu', NULL);

#
# Table structure for table 'nuke_bbcash'
#

DROP TABLE IF EXISTS nuke_bbcash;
CREATE TABLE nuke_bbcash (
   cash_id smallint(6) NOT NULL auto_increment,
   cash_order smallint(6) DEFAULT '0' NOT NULL,
   cash_settings smallint(4) DEFAULT '3313' NOT NULL,
   cash_dbfield varchar(64) DEFAULT 'user_cash' NOT NULL,
   cash_name varchar(64) DEFAULT 'cash' NOT NULL,
   cash_default int(11) DEFAULT '0' NOT NULL,
   cash_decimals tinyint(2) DEFAULT '0' NOT NULL,
   cash_imageurl varchar(255) DEFAULT ' ' NOT NULL,
   cash_exchange int(11) DEFAULT '1' NOT NULL,
   cash_perpost int(11) DEFAULT '25' NOT NULL,
   cash_postbonus int(11) DEFAULT '2' NOT NULL,
   cash_perreply int(11) DEFAULT '25' NOT NULL,
   cash_maxearn int(11) DEFAULT '75' NOT NULL,
   cash_perpm int(11) DEFAULT '0' NOT NULL,
   cash_perchar int(11) DEFAULT '20' NOT NULL,
   cash_allowance tinyint(1) DEFAULT '0' NOT NULL,
   cash_allowanceamount int(11) DEFAULT '0' NOT NULL,
   cash_allowancetime tinyint(2) DEFAULT '2' NOT NULL,
   cash_allowancenext int(11) DEFAULT '0' NOT NULL,
   cash_forumlist varchar(255) DEFAULT ' ' NOT NULL,
   PRIMARY KEY (cash_id)
);


#
# Dumping data for table 'nuke_bbcash'
#


#
# Table structure for table 'nuke_bbcash_events'
#

DROP TABLE IF EXISTS nuke_bbcash_events;
CREATE TABLE nuke_bbcash_events (
   event_name varchar(32) DEFAULT ' ' NOT NULL,
   event_data varchar(255) DEFAULT ' ' NOT NULL,
   PRIMARY KEY (event_name)
);


#
# Dumping data for table 'nuke_bbcash_events'
#


#
# Table structure for table 'nuke_bbcash_exchange'
#

DROP TABLE IF EXISTS nuke_bbcash_exchange;
CREATE TABLE nuke_bbcash_exchange (
   ex_cash_id1 int(11) DEFAULT '0' NOT NULL,
   ex_cash_id2 int(11) DEFAULT '0' NOT NULL,
   ex_cash_enabled int(1) DEFAULT '0' NOT NULL,
   PRIMARY KEY (ex_cash_id1, ex_cash_id2)
);


#
# Dumping data for table 'nuke_bbcash_exchange'
#


#
# Table structure for table 'nuke_bbcash_groups'
#

DROP TABLE IF EXISTS nuke_bbcash_groups;
CREATE TABLE nuke_bbcash_groups (
   group_id mediumint(6) DEFAULT '0' NOT NULL,
   group_type tinyint(2) DEFAULT '0' NOT NULL,
   cash_id smallint(6) DEFAULT '0' NOT NULL,
   cash_perpost int(11) DEFAULT '0' NOT NULL,
   cash_postbonus int(11) DEFAULT '0' NOT NULL,
   cash_perreply int(11) DEFAULT '0' NOT NULL,
   cash_perchar int(11) DEFAULT '0' NOT NULL,
   cash_maxearn int(11) DEFAULT '0' NOT NULL,
   cash_perpm int(11) DEFAULT '0' NOT NULL,
   cash_allowance tinyint(1) DEFAULT '0' NOT NULL,
   cash_allowanceamount int(11) DEFAULT '0' NOT NULL,
   cash_allowancetime tinyint(2) DEFAULT '2' NOT NULL,
   cash_allowancenext int(11) DEFAULT '0' NOT NULL,
   PRIMARY KEY (group_id, group_type, cash_id)
);


#
# Dumping data for table 'nuke_bbcash_groups'
#


#
# Table structure for table 'nuke_bbcash_log'
#

DROP TABLE IF EXISTS nuke_bbcash_log;
CREATE TABLE nuke_bbcash_log (
   log_id int(11) NOT NULL auto_increment,
   log_time int(11) DEFAULT '0' NOT NULL,
   log_type smallint(6) DEFAULT '0' NOT NULL,
   log_action varchar(255) DEFAULT ' ' NOT NULL,
   log_text varchar(255) DEFAULT ' ' NOT NULL,
   PRIMARY KEY (log_id)
);


#
# Dumping data for table 'nuke_bbcash_log'
#


#
# Table structure for table 'nuke_bbcategories'
#

DROP TABLE IF EXISTS nuke_bbcategories;
CREATE TABLE nuke_bbcategories (
   cat_id mediumint(8) unsigned NOT NULL auto_increment,
   cat_title varchar(100),
   cat_order mediumint(8) unsigned DEFAULT '0' NOT NULL,
   PRIMARY KEY (cat_id),
   KEY cat_order (cat_order)
);


#
# Dumping data for table 'nuke_bbcategories'
#

INSERT INTO nuke_bbcategories  VALUES ('1', 'General', '10');

#
# Table structure for table 'nuke_bbconfig'
#

DROP TABLE IF EXISTS nuke_bbconfig;
CREATE TABLE nuke_bbconfig (
   config_name varchar(255) NOT NULL,
   config_value varchar(255) NOT NULL,
   PRIMARY KEY (config_name)
);


#
# Dumping data for table 'nuke_bbconfig'
#

INSERT INTO nuke_bbconfig  VALUES ('config_id', '1');
INSERT INTO nuke_bbconfig  VALUES ('board_disable', '0');
INSERT INTO nuke_bbconfig  VALUES ('board_disable_adminview', '1');
INSERT INTO nuke_bbconfig  VALUES ('board_disable_msg', 'The board is currently disabled...');
INSERT INTO nuke_bbconfig  VALUES ('sitename', 'My Site');
INSERT INTO nuke_bbconfig  VALUES ('site_desc', '');
INSERT INTO nuke_bbconfig  VALUES ('cookie_name', 'nukeevo');
INSERT INTO nuke_bbconfig  VALUES ('cookie_path', '/');
INSERT INTO nuke_bbconfig  VALUES ('cookie_domain', 'MySite.com');
INSERT INTO nuke_bbconfig  VALUES ('cookie_secure', '0');
INSERT INTO nuke_bbconfig  VALUES ('session_length', '3600');
INSERT INTO nuke_bbconfig  VALUES ('allow_html', '1');
INSERT INTO nuke_bbconfig  VALUES ('allow_html_tags', 'b,i,u,pre');
INSERT INTO nuke_bbconfig  VALUES ('allow_bbcode', '1');
INSERT INTO nuke_bbconfig  VALUES ('allow_smilies', '1');
INSERT INTO nuke_bbconfig  VALUES ('allow_sig', '1');
INSERT INTO nuke_bbconfig  VALUES ('allow_namechange', '0');
INSERT INTO nuke_bbconfig  VALUES ('allow_theme_create', '0');
INSERT INTO nuke_bbconfig  VALUES ('allow_avatar_local', '1');
INSERT INTO nuke_bbconfig  VALUES ('allow_avatar_remote', '0');
INSERT INTO nuke_bbconfig  VALUES ('allow_avatar_upload', '0');
INSERT INTO nuke_bbconfig  VALUES ('override_user_style', '1');
INSERT INTO nuke_bbconfig  VALUES ('posts_per_page', '15');
INSERT INTO nuke_bbconfig  VALUES ('topics_per_page', '50');
INSERT INTO nuke_bbconfig  VALUES ('hot_threshold', '25');
INSERT INTO nuke_bbconfig  VALUES ('max_poll_options', '10');
INSERT INTO nuke_bbconfig  VALUES ('max_sig_chars', '255');
INSERT INTO nuke_bbconfig  VALUES ('max_smilies', '15');
INSERT INTO nuke_bbconfig  VALUES ('max_inbox_privmsgs', '100');
INSERT INTO nuke_bbconfig  VALUES ('max_sentbox_privmsgs', '100');
INSERT INTO nuke_bbconfig  VALUES ('max_savebox_privmsgs', '100');
INSERT INTO nuke_bbconfig  VALUES ('board_email_sig', 'Köszönöm, Webmaster@MySite.com');
INSERT INTO nuke_bbconfig  VALUES ('board_email', 'Webmaster@MySite.com');
INSERT INTO nuke_bbconfig  VALUES ('smtp_delivery', '0');
INSERT INTO nuke_bbconfig  VALUES ('smtp_host', '');
INSERT INTO nuke_bbconfig  VALUES ('require_activation', '0');
INSERT INTO nuke_bbconfig  VALUES ('flood_interval', '15');
INSERT INTO nuke_bbconfig  VALUES ('search_flood_interval', '15');
INSERT INTO nuke_bbconfig  VALUES ('board_email_form', '0');
INSERT INTO nuke_bbconfig  VALUES ('avatar_filesize', '6144');
INSERT INTO nuke_bbconfig  VALUES ('avatar_max_width', '80');
INSERT INTO nuke_bbconfig  VALUES ('avatar_max_height', '80');
INSERT INTO nuke_bbconfig  VALUES ('avatar_path', 'modules/Forums/images/avatars');
INSERT INTO nuke_bbconfig  VALUES ('avatar_gallery_path', 'modules/Forums/images/avatars');
INSERT INTO nuke_bbconfig  VALUES ('smilies_path', 'modules/Forums/images/smiles');
INSERT INTO nuke_bbconfig  VALUES ('default_style', '1');
INSERT INTO nuke_bbconfig  VALUES ('default_dateformat', 'D M d, Y g:i a');
INSERT INTO nuke_bbconfig  VALUES ('board_timezone', '10');
INSERT INTO nuke_bbconfig  VALUES ('prune_enable', '0');
INSERT INTO nuke_bbconfig  VALUES ('privmsg_disable', '0');
INSERT INTO nuke_bbconfig  VALUES ('gzip_compress', '0');
INSERT INTO nuke_bbconfig  VALUES ('coppa_fax', '');
INSERT INTO nuke_bbconfig  VALUES ('coppa_mail', '');
INSERT INTO nuke_bbconfig  VALUES ('board_startdate', '1131089812');
INSERT INTO nuke_bbconfig  VALUES ('default_lang', 'english');
INSERT INTO nuke_bbconfig  VALUES ('smtp_username', '');
INSERT INTO nuke_bbconfig  VALUES ('smtp_password', '');
INSERT INTO nuke_bbconfig  VALUES ('record_online_users', '2');
INSERT INTO nuke_bbconfig  VALUES ('record_online_date', '1034668530');
INSERT INTO nuke_bbconfig  VALUES ('server_name', 'Teoldalad.hu');
INSERT INTO nuke_bbconfig  VALUES ('server_port', '80');
INSERT INTO nuke_bbconfig  VALUES ('script_path', '/modules/Forums/');
INSERT INTO nuke_bbconfig  VALUES ('version', '.0.22');
INSERT INTO nuke_bbconfig  VALUES ('enable_confirm', '0');
INSERT INTO nuke_bbconfig  VALUES ('sendmail_fix', '0');
INSERT INTO nuke_bbconfig  VALUES ('sig_max_lines', '5');
INSERT INTO nuke_bbconfig  VALUES ('sig_wordwrap', '100');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_font_sizes', '1');
INSERT INTO nuke_bbconfig  VALUES ('sig_min_font_size', '7');
INSERT INTO nuke_bbconfig  VALUES ('sig_max_font_size', '12');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_bold', '1');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_italic', '1');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_underline', '1');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_colors', '1');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_quote', '0');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_code', '0');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_list', '0');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_url', '1');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_images', '1');
INSERT INTO nuke_bbconfig  VALUES ('sig_max_images', '0');
INSERT INTO nuke_bbconfig  VALUES ('sig_max_img_height', '75');
INSERT INTO nuke_bbconfig  VALUES ('sig_max_img_width', '500');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_on_max_img_size_fail', '0');
INSERT INTO nuke_bbconfig  VALUES ('sig_max_img_files_size', '10');
INSERT INTO nuke_bbconfig  VALUES ('sig_max_img_av_files_size', '0');
INSERT INTO nuke_bbconfig  VALUES ('sig_exotic_bbcodes_disallowed', '');
INSERT INTO nuke_bbconfig  VALUES ('sig_allow_smilies', '1');
INSERT INTO nuke_bbconfig  VALUES ('report_email', '1');
INSERT INTO nuke_bbconfig  VALUES ('ropm_quick_reply', '1');
INSERT INTO nuke_bbconfig  VALUES ('ropm_quick_reply_bbc', '1');
INSERT INTO nuke_bbconfig  VALUES ('ropm_quick_reply_smilies', '22');
INSERT INTO nuke_bbconfig  VALUES ('wrap_enable', '1');
INSERT INTO nuke_bbconfig  VALUES ('wrap_min', '50');
INSERT INTO nuke_bbconfig  VALUES ('wrap_max', '99');
INSERT INTO nuke_bbconfig  VALUES ('wrap_def', '70');
INSERT INTO nuke_bbconfig  VALUES ('allow_quickreply', '1');
INSERT INTO nuke_bbconfig  VALUES ('anonymous_show_sqr', '0');
INSERT INTO nuke_bbconfig  VALUES ('anonymous_sqr_mode', '0');
INSERT INTO nuke_bbconfig  VALUES ('quick_search_enable', '1');
INSERT INTO nuke_bbconfig  VALUES ('sig_line', '<hr>');
INSERT INTO nuke_bbconfig  VALUES ('default_avatar_guests_url', 'modules/Forums/images/avatars/blank.gif');
INSERT INTO nuke_bbconfig  VALUES ('default_avatar_users_url', 'modules/Forums/images/avatars/blank.gif');
INSERT INTO nuke_bbconfig  VALUES ('default_avatar_set', '2');
INSERT INTO nuke_bbconfig  VALUES ('pm_allow_threshold', '0');
INSERT INTO nuke_bbconfig  VALUES ('welcome_pm', '0');
INSERT INTO nuke_bbconfig  VALUES ('default_time_mode', '6');
INSERT INTO nuke_bbconfig  VALUES ('default_dst_time_lag', '60');
INSERT INTO nuke_bbconfig  VALUES ('glance_show', '1');
INSERT INTO nuke_bbconfig  VALUES ('glance_show_override', '1');
INSERT INTO nuke_bbconfig  VALUES ('glance_news_id', '0');
INSERT INTO nuke_bbconfig  VALUES ('glance_num_news', '0');
INSERT INTO nuke_bbconfig  VALUES ('glance_num', '6');
INSERT INTO nuke_bbconfig  VALUES ('glance_ignore_forums', '0');
INSERT INTO nuke_bbconfig  VALUES ('glance_table_width', '100%');
INSERT INTO nuke_bbconfig  VALUES ('glance_auth_read', '1');
INSERT INTO nuke_bbconfig  VALUES ('glance_topic_length', '0');
INSERT INTO nuke_bbconfig  VALUES ('online_time', '300');
INSERT INTO nuke_bbconfig  VALUES ('display_users_today', '0');
INSERT INTO nuke_bbconfig  VALUES ('locked_view_open', 'Zárolva: <strike>');
INSERT INTO nuke_bbconfig  VALUES ('locked_view_close', '</strike>');
INSERT INTO nuke_bbconfig  VALUES ('global_view_open', 'Global Announcement:');
INSERT INTO nuke_bbconfig  VALUES ('global_view_close', '');
INSERT INTO nuke_bbconfig  VALUES ('announce_view_open', 'Announcement:');
INSERT INTO nuke_bbconfig  VALUES ('announce_view_close', '');
INSERT INTO nuke_bbconfig  VALUES ('sticky_view_open', 'Sticky:');
INSERT INTO nuke_bbconfig  VALUES ('sticky_view_close', '');
INSERT INTO nuke_bbconfig  VALUES ('moved_view_open', 'Moved:');
INSERT INTO nuke_bbconfig  VALUES ('moved_view_close', '');
INSERT INTO nuke_bbconfig  VALUES ('initial_group_id', '5');
INSERT INTO nuke_bbconfig  VALUES ('hide_links', '0');
INSERT INTO nuke_bbconfig  VALUES ('hide_emails', '0');
INSERT INTO nuke_bbconfig  VALUES ('hide_images', '0');
INSERT INTO nuke_bbconfig  VALUES ('use_dhtml', '1');
INSERT INTO nuke_bbconfig  VALUES ('anonymous_open_sqr', '0');
INSERT INTO nuke_bbconfig  VALUES ('smilies_in_titles', '1');
INSERT INTO nuke_bbconfig  VALUES ('show_edited_logs', '1');
INSERT INTO nuke_bbconfig  VALUES ('show_locked_logs', '1');
INSERT INTO nuke_bbconfig  VALUES ('show_unlocked_logs', '1');
INSERT INTO nuke_bbconfig  VALUES ('show_splitted_logs', '1');
INSERT INTO nuke_bbconfig  VALUES ('show_moved_logs', '1');
INSERT INTO nuke_bbconfig  VALUES ('logs_view_level', '2');
INSERT INTO nuke_bbconfig  VALUES ('aprvmArchive', '0');
INSERT INTO nuke_bbconfig  VALUES ('aprvmVersion', '1.6.0');
INSERT INTO nuke_bbconfig  VALUES ('aprvmView', '0');
INSERT INTO nuke_bbconfig  VALUES ('aprvmRows', '25');
INSERT INTO nuke_bbconfig  VALUES ('aprvmIP', '1');
INSERT INTO nuke_bbconfig  VALUES ('image_resize_width', '400');
INSERT INTO nuke_bbconfig  VALUES ('image_resize_height', '400');
INSERT INTO nuke_bbconfig  VALUES ('use_theme_style', '1');
INSERT INTO nuke_bbconfig  VALUES ('allow_autologin', '1');
INSERT INTO nuke_bbconfig  VALUES ('max_autologin_time', '0');
INSERT INTO nuke_bbconfig  VALUES ('max_login_attempts', '5');
INSERT INTO nuke_bbconfig  VALUES ('login_reset_time', '30');
INSERT INTO nuke_bbconfig  VALUES ('show_sig_once', '0');
INSERT INTO nuke_bbconfig  VALUES ('show_avatar_once', '0');
INSERT INTO nuke_bbconfig  VALUES ('show_rank_once', '0');
INSERT INTO nuke_bbconfig  VALUES ('loginpage', '1');
INSERT INTO nuke_bbconfig  VALUES ('rand_seed', '1d29e2ad4a1f11e1a9f9979951b599f5');
INSERT INTO nuke_bbconfig  VALUES ('xs_auto_compile', '1');
INSERT INTO nuke_bbconfig  VALUES ('xs_auto_recompile', '1');
INSERT INTO nuke_bbconfig  VALUES ('xs_use_cache', '1');
INSERT INTO nuke_bbconfig  VALUES ('xs_php', 'php');
INSERT INTO nuke_bbconfig  VALUES ('xs_def_template', 'subSilver');
INSERT INTO nuke_bbconfig  VALUES ('xs_check_switches', '1');
INSERT INTO nuke_bbconfig  VALUES ('xs_warn_includes', '1');
INSERT INTO nuke_bbconfig  VALUES ('xs_add_comments', '0');
INSERT INTO nuke_bbconfig  VALUES ('xs_ftp_host', '');
INSERT INTO nuke_bbconfig  VALUES ('xs_ftp_login', '');
INSERT INTO nuke_bbconfig  VALUES ('xs_ftp_path', '');
INSERT INTO nuke_bbconfig  VALUES ('xs_downloads_count', '0');
INSERT INTO nuke_bbconfig  VALUES ('xs_downloads_default', '0');
INSERT INTO nuke_bbconfig  VALUES ('xs_shownav', '1');
INSERT INTO nuke_bbconfig  VALUES ('xs_template_time', '1193251272');
INSERT INTO nuke_bbconfig  VALUES ('xs_version', '8');
INSERT INTO nuke_bbconfig  VALUES ('suggestion_type', '0');
INSERT INTO nuke_bbconfig  VALUES ('suggest_announcements', '0');
INSERT INTO nuke_bbconfig  VALUES ('suggested_topic_id', '0');
INSERT INTO nuke_bbconfig  VALUES ('suggestion_source', '0');
INSERT INTO nuke_bbconfig  VALUES ('bday_show', '1');
INSERT INTO nuke_bbconfig  VALUES ('bday_require', '0');
INSERT INTO nuke_bbconfig  VALUES ('bday_year', '0');
INSERT INTO nuke_bbconfig  VALUES ('bday_lock', '0');
INSERT INTO nuke_bbconfig  VALUES ('bday_lookahead', '7');
INSERT INTO nuke_bbconfig  VALUES ('bday_max', '100');
INSERT INTO nuke_bbconfig  VALUES ('bday_min', '5');
INSERT INTO nuke_bbconfig  VALUES ('ad_after_post', '1');
INSERT INTO nuke_bbconfig  VALUES ('ad_post_threshold', '');
INSERT INTO nuke_bbconfig  VALUES ('ad_every_post', '');
INSERT INTO nuke_bbconfig  VALUES ('ad_who', '1');
INSERT INTO nuke_bbconfig  VALUES ('ad_no_forums', '');
INSERT INTO nuke_bbconfig  VALUES ('ad_no_groups', '');
INSERT INTO nuke_bbconfig  VALUES ('ad_old_style', '1');
INSERT INTO nuke_bbconfig  VALUES ('cash_disable', '0');
INSERT INTO nuke_bbconfig  VALUES ('cash_display_after_posts', '1');
INSERT INTO nuke_bbconfig  VALUES ('cash_post_message', 'You earned %s for that post');
INSERT INTO nuke_bbconfig  VALUES ('cash_disable_spam_num', '10');
INSERT INTO nuke_bbconfig  VALUES ('cash_disable_spam_time', '24');
INSERT INTO nuke_bbconfig  VALUES ('cash_disable_spam_message', 'You have exceeded the alloted amount of posts and will not earn anything for your post');
INSERT INTO nuke_bbconfig  VALUES ('cash_installed', 'yes');
INSERT INTO nuke_bbconfig  VALUES ('cash_version', '2.2.5');
INSERT INTO nuke_bbconfig  VALUES ('points_name', 'Points');
INSERT INTO nuke_bbconfig  VALUES ('cash_adminnavbar', '1');
INSERT INTO nuke_bbconfig  VALUES ('cash_adminbig', '0');
INSERT INTO nuke_bbconfig  VALUES ('version_check_delay', '1193251441');

#
# Table structure for table 'nuke_bbdisallow'
#

DROP TABLE IF EXISTS nuke_bbdisallow;
CREATE TABLE nuke_bbdisallow (
   disallow_id mediumint(8) unsigned NOT NULL auto_increment,
   disallow_username varchar(25),
   PRIMARY KEY (disallow_id)
);


#
# Dumping data for table 'nuke_bbdisallow'
#

INSERT INTO nuke_bbdisallow  VALUES ('1', 'predikator');
INSERT INTO nuke_bbdisallow  VALUES ('2', 'flashzene');
INSERT INTO nuke_bbdisallow  VALUES ('3', 'dragon');

#
# Table structure for table 'nuke_bbextension_groups'
#

DROP TABLE IF EXISTS nuke_bbextension_groups;
CREATE TABLE nuke_bbextension_groups (
   group_id mediumint(8) NOT NULL auto_increment,
   group_name varchar(20) NOT NULL,
   cat_id tinyint(2) DEFAULT '0' NOT NULL,
   allow_group tinyint(1) DEFAULT '0' NOT NULL,
   download_mode tinyint(1) unsigned DEFAULT '1' NOT NULL,
   upload_icon varchar(100),
   max_filesize int(20) DEFAULT '0' NOT NULL,
   forum_permissions varchar(255) NOT NULL,
   PRIMARY KEY (group_id)
);


#
# Dumping data for table 'nuke_bbextension_groups'
#

INSERT INTO nuke_bbextension_groups  VALUES ('1', 'Kép', '1', '1', '2', '', '262144', '');
INSERT INTO nuke_bbextension_groups  VALUES ('2', 'Tömöritvény', '0', '1', '2', '', '262144', '');
INSERT INTO nuke_bbextension_groups  VALUES ('3', 'Sima Szöveg', '0', '0', '2', '', '262144', '');
INSERT INTO nuke_bbextension_groups  VALUES ('4', 'Dokumentum', '0', '0', '2', '', '262144', '');
INSERT INTO nuke_bbextension_groups  VALUES ('5', 'Real Media', '0', '0', '2', '', '262144', '');
INSERT INTO nuke_bbextension_groups  VALUES ('6', 'Streams', '2', '0', '2', '', '262144', '');
INSERT INTO nuke_bbextension_groups  VALUES ('7', 'Flash Fájl', '3', '0', '2', '', '262144', '');

#
# Table structure for table 'nuke_bbextensions'
#

DROP TABLE IF EXISTS nuke_bbextensions;
CREATE TABLE nuke_bbextensions (
   ext_id mediumint(8) unsigned NOT NULL auto_increment,
   group_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   extension varchar(100) NOT NULL,
   comment varchar(100),
   PRIMARY KEY (ext_id)
);


#
# Dumping data for table 'nuke_bbextensions'
#

INSERT INTO nuke_bbextensions  VALUES ('1', '1', 'gif', '');
INSERT INTO nuke_bbextensions  VALUES ('2', '1', 'png', '');
INSERT INTO nuke_bbextensions  VALUES ('3', '1', 'jpeg', '');
INSERT INTO nuke_bbextensions  VALUES ('4', '1', 'jpg', '');
INSERT INTO nuke_bbextensions  VALUES ('5', '1', 'tif', '');
INSERT INTO nuke_bbextensions  VALUES ('6', '1', 'tga', '');
INSERT INTO nuke_bbextensions  VALUES ('7', '2', 'gtar', '');
INSERT INTO nuke_bbextensions  VALUES ('8', '2', 'gz', '');
INSERT INTO nuke_bbextensions  VALUES ('9', '2', 'tar', '');
INSERT INTO nuke_bbextensions  VALUES ('10', '2', 'zip', '');
INSERT INTO nuke_bbextensions  VALUES ('11', '2', 'rar', '');
INSERT INTO nuke_bbextensions  VALUES ('12', '2', 'ace', '');
INSERT INTO nuke_bbextensions  VALUES ('13', '3', 'txt', '');
INSERT INTO nuke_bbextensions  VALUES ('14', '3', 'c', '');
INSERT INTO nuke_bbextensions  VALUES ('15', '3', 'h', '');
INSERT INTO nuke_bbextensions  VALUES ('16', '3', 'cpp', '');
INSERT INTO nuke_bbextensions  VALUES ('17', '3', 'hpp', '');
INSERT INTO nuke_bbextensions  VALUES ('18', '3', 'diz', '');
INSERT INTO nuke_bbextensions  VALUES ('19', '4', 'xls', '');
INSERT INTO nuke_bbextensions  VALUES ('20', '4', 'doc', '');
INSERT INTO nuke_bbextensions  VALUES ('21', '4', 'dot', '');
INSERT INTO nuke_bbextensions  VALUES ('22', '4', 'pdf', '');
INSERT INTO nuke_bbextensions  VALUES ('23', '4', 'ai', '');
INSERT INTO nuke_bbextensions  VALUES ('24', '4', 'ps', '');
INSERT INTO nuke_bbextensions  VALUES ('25', '4', 'ppt', '');
INSERT INTO nuke_bbextensions  VALUES ('26', '5', 'rm', '');
INSERT INTO nuke_bbextensions  VALUES ('27', '6', 'wma', '');
INSERT INTO nuke_bbextensions  VALUES ('28', '7', 'swf', '');

#
# Table structure for table 'nuke_bbflags'
#

DROP TABLE IF EXISTS nuke_bbflags;
CREATE TABLE nuke_bbflags (
   flag_id int(10) NOT NULL auto_increment,
   flag_name varchar(25),
   flag_image varchar(25),
   PRIMARY KEY (flag_id)
);


#
# Dumping data for table 'nuke_bbflags'
#

INSERT INTO nuke_bbflags  VALUES ('1', 'usa', 'usa.gif');
INSERT INTO nuke_bbflags  VALUES ('2', 'afghanistan', 'afghanistan.gif');
INSERT INTO nuke_bbflags  VALUES ('3', 'albania', 'albania.gif');
INSERT INTO nuke_bbflags  VALUES ('4', 'algeria', 'algeria.gif');
INSERT INTO nuke_bbflags  VALUES ('5', 'andorra', 'andorra.gif');
INSERT INTO nuke_bbflags  VALUES ('6', 'angola', 'angola.gif');
INSERT INTO nuke_bbflags  VALUES ('7', 'antigua and barbuda', 'antiguabarbuda.gif');
INSERT INTO nuke_bbflags  VALUES ('8', 'argentina', 'argentina.gif');
INSERT INTO nuke_bbflags  VALUES ('9', 'armenia', 'armenia.gif');
INSERT INTO nuke_bbflags  VALUES ('10', 'australia', 'australia.gif');
INSERT INTO nuke_bbflags  VALUES ('11', 'austria', 'austria.gif');
INSERT INTO nuke_bbflags  VALUES ('12', 'azerbaijan', 'azerbaijan.gif');
INSERT INTO nuke_bbflags  VALUES ('13', 'bahamas', 'bahamas.gif');
INSERT INTO nuke_bbflags  VALUES ('14', 'bahrain', 'bahrain.gif');
INSERT INTO nuke_bbflags  VALUES ('15', 'bangladesh', 'bangladesh.gif');
INSERT INTO nuke_bbflags  VALUES ('16', 'barbados', 'barbados.gif');
INSERT INTO nuke_bbflags  VALUES ('17', 'belarus', 'belarus.gif');
INSERT INTO nuke_bbflags  VALUES ('18', 'belgium', 'belgium.gif');
INSERT INTO nuke_bbflags  VALUES ('19', 'belize', 'belize.gif');
INSERT INTO nuke_bbflags  VALUES ('20', 'benin', 'benin.gif');
INSERT INTO nuke_bbflags  VALUES ('21', 'bhutan', 'bhutan.gif');
INSERT INTO nuke_bbflags  VALUES ('22', 'bolivia', 'bolivia.gif');
INSERT INTO nuke_bbflags  VALUES ('23', 'bosnia herzegovina', 'bosnia_herzegovina.gif');
INSERT INTO nuke_bbflags  VALUES ('24', 'botswana', 'botswana.gif');
INSERT INTO nuke_bbflags  VALUES ('25', 'brazil', 'brazil.gif');
INSERT INTO nuke_bbflags  VALUES ('26', 'brunei', 'brunei.gif');
INSERT INTO nuke_bbflags  VALUES ('27', 'bulgaria', 'bulgaria.gif');
INSERT INTO nuke_bbflags  VALUES ('28', 'burkinafaso', 'burkinafaso.gif');
INSERT INTO nuke_bbflags  VALUES ('29', 'burma', 'burma.gif');
INSERT INTO nuke_bbflags  VALUES ('30', 'burundi', 'burundi.gif');
INSERT INTO nuke_bbflags  VALUES ('31', 'cambodia', 'cambodia.gif');
INSERT INTO nuke_bbflags  VALUES ('32', 'cameroon', 'cameroon.gif');
INSERT INTO nuke_bbflags  VALUES ('33', 'canada', 'canada.gif');
INSERT INTO nuke_bbflags  VALUES ('34', 'central african rep', 'centralafricanrep.gif');
INSERT INTO nuke_bbflags  VALUES ('35', 'chad', 'chad.gif');
INSERT INTO nuke_bbflags  VALUES ('36', 'chile', 'chile.gif');
INSERT INTO nuke_bbflags  VALUES ('37', 'china', 'china.gif');
INSERT INTO nuke_bbflags  VALUES ('38', 'columbia', 'columbia.gif');
INSERT INTO nuke_bbflags  VALUES ('39', 'comoros', 'comoros.gif');
INSERT INTO nuke_bbflags  VALUES ('40', 'congo', 'congo.gif');
INSERT INTO nuke_bbflags  VALUES ('41', 'costarica', 'costarica.gif');
INSERT INTO nuke_bbflags  VALUES ('42', 'croatia', 'croatia.gif');
INSERT INTO nuke_bbflags  VALUES ('43', 'cuba', 'cuba.gif');
INSERT INTO nuke_bbflags  VALUES ('44', 'cyprus', 'cyprus.gif');
INSERT INTO nuke_bbflags  VALUES ('45', 'czech republic', 'czechrepublic.gif');
INSERT INTO nuke_bbflags  VALUES ('46', 'demrepcongo', 'demrepcongo.gif');
INSERT INTO nuke_bbflags  VALUES ('47', 'denmark', 'denmark.gif');
INSERT INTO nuke_bbflags  VALUES ('48', 'djibouti', 'djibouti.gif');
INSERT INTO nuke_bbflags  VALUES ('49', 'dominica', 'dominica.gif');
INSERT INTO nuke_bbflags  VALUES ('50', 'dominican rep', 'dominicanrep.gif');
INSERT INTO nuke_bbflags  VALUES ('51', 'ecuador', 'ecuador.gif');
INSERT INTO nuke_bbflags  VALUES ('52', 'egypt', 'egypt.gif');
INSERT INTO nuke_bbflags  VALUES ('53', 'elsalvador', 'elsalvador.gif');
INSERT INTO nuke_bbflags  VALUES ('54', 'eq guinea', 'eq_guinea.gif');
INSERT INTO nuke_bbflags  VALUES ('55', 'eritrea', 'eritrea.gif');
INSERT INTO nuke_bbflags  VALUES ('56', 'estonia', 'estonia.gif');
INSERT INTO nuke_bbflags  VALUES ('57', 'ethiopia', 'ethiopia.gif');
INSERT INTO nuke_bbflags  VALUES ('58', 'fiji', 'fiji.gif');
INSERT INTO nuke_bbflags  VALUES ('59', 'finland', 'finland.gif');
INSERT INTO nuke_bbflags  VALUES ('60', 'france', 'france.gif');
INSERT INTO nuke_bbflags  VALUES ('61', 'gabon', 'gabon.gif');
INSERT INTO nuke_bbflags  VALUES ('62', 'gambia', 'gambia.gif');
INSERT INTO nuke_bbflags  VALUES ('63', 'georgia', 'georgia.gif');
INSERT INTO nuke_bbflags  VALUES ('64', 'germany', 'germany.gif');
INSERT INTO nuke_bbflags  VALUES ('65', 'ghana', 'ghana.gif');
INSERT INTO nuke_bbflags  VALUES ('66', 'greece', 'greece.gif');
INSERT INTO nuke_bbflags  VALUES ('67', 'grenada', 'grenada.gif');
INSERT INTO nuke_bbflags  VALUES ('68', 'grenadines', 'grenadines.gif');
INSERT INTO nuke_bbflags  VALUES ('69', 'guatemala', 'guatemala.gif');
INSERT INTO nuke_bbflags  VALUES ('70', 'guinea', 'guinea.gif');
INSERT INTO nuke_bbflags  VALUES ('71', 'guineabissau', 'guineabissau.gif');
INSERT INTO nuke_bbflags  VALUES ('72', 'guyana', 'guyana.gif');
INSERT INTO nuke_bbflags  VALUES ('73', 'haiti', 'haiti.gif');
INSERT INTO nuke_bbflags  VALUES ('74', 'honduras', 'honduras.gif');
INSERT INTO nuke_bbflags  VALUES ('75', 'hong kong', 'hong_kong.gif');
INSERT INTO nuke_bbflags  VALUES ('76', 'hungary', 'hungary.gif');
INSERT INTO nuke_bbflags  VALUES ('77', 'iceland', 'iceland.gif');
INSERT INTO nuke_bbflags  VALUES ('78', 'india', 'india.gif');
INSERT INTO nuke_bbflags  VALUES ('79', 'indonesia', 'indonesia.gif');
INSERT INTO nuke_bbflags  VALUES ('80', 'iran', 'iran.gif');
INSERT INTO nuke_bbflags  VALUES ('81', 'iraq', 'iraq.gif');
INSERT INTO nuke_bbflags  VALUES ('82', 'ireland', 'ireland.gif');
INSERT INTO nuke_bbflags  VALUES ('83', 'israel', 'israel.gif');
INSERT INTO nuke_bbflags  VALUES ('84', 'italy', 'italy.gif');
INSERT INTO nuke_bbflags  VALUES ('85', 'ivory coast', 'ivorycoast.gif');
INSERT INTO nuke_bbflags  VALUES ('86', 'jamaica', 'jamaica.gif');
INSERT INTO nuke_bbflags  VALUES ('87', 'japan', 'japan.gif');
INSERT INTO nuke_bbflags  VALUES ('88', 'jordan', 'jordan.gif');
INSERT INTO nuke_bbflags  VALUES ('89', 'kazakhstan', 'kazakhstan.gif');
INSERT INTO nuke_bbflags  VALUES ('90', 'kenya', 'kenya.gif');
INSERT INTO nuke_bbflags  VALUES ('91', 'kiribati', 'kiribati.gif');
INSERT INTO nuke_bbflags  VALUES ('92', 'kuwait', 'kuwait.gif');
INSERT INTO nuke_bbflags  VALUES ('93', 'kyrgyzstan', 'kyrgyzstan.gif');
INSERT INTO nuke_bbflags  VALUES ('94', 'laos', 'laos.gif');
INSERT INTO nuke_bbflags  VALUES ('95', 'latvia', 'latvia.gif');
INSERT INTO nuke_bbflags  VALUES ('96', 'lebanon', 'lebanon.gif');
INSERT INTO nuke_bbflags  VALUES ('97', 'liberia', 'liberia.gif');
INSERT INTO nuke_bbflags  VALUES ('98', 'libya', 'libya.gif');
INSERT INTO nuke_bbflags  VALUES ('99', 'liechtenstein', 'liechtenstein.gif');
INSERT INTO nuke_bbflags  VALUES ('100', 'lithuania', 'lithuania.gif');
INSERT INTO nuke_bbflags  VALUES ('101', 'luxembourg', 'luxembourg.gif');
INSERT INTO nuke_bbflags  VALUES ('102', 'macadonia', 'macadonia.gif');
INSERT INTO nuke_bbflags  VALUES ('103', 'macau', 'macau.gif');
INSERT INTO nuke_bbflags  VALUES ('104', 'madagascar', 'madagascar.gif');
INSERT INTO nuke_bbflags  VALUES ('105', 'malawi', 'malawi.gif');
INSERT INTO nuke_bbflags  VALUES ('106', 'malaysia', 'malaysia.gif');
INSERT INTO nuke_bbflags  VALUES ('107', 'maldives', 'maldives.gif');
INSERT INTO nuke_bbflags  VALUES ('108', 'mali', 'mali.gif');
INSERT INTO nuke_bbflags  VALUES ('109', 'malta', 'malta.gif');
INSERT INTO nuke_bbflags  VALUES ('110', 'mauritania', 'mauritania.gif');
INSERT INTO nuke_bbflags  VALUES ('111', 'mauritius', 'mauritius.gif');
INSERT INTO nuke_bbflags  VALUES ('112', 'mexico', 'mexico.gif');
INSERT INTO nuke_bbflags  VALUES ('113', 'micronesia', 'micronesia.gif');
INSERT INTO nuke_bbflags  VALUES ('114', 'moldova', 'moldova.gif');
INSERT INTO nuke_bbflags  VALUES ('115', 'monaco', 'monaco.gif');
INSERT INTO nuke_bbflags  VALUES ('116', 'mongolia', 'mongolia.gif');
INSERT INTO nuke_bbflags  VALUES ('117', 'morocco', 'morocco.gif');
INSERT INTO nuke_bbflags  VALUES ('118', 'mozambique', 'mozambique.gif');
INSERT INTO nuke_bbflags  VALUES ('119', 'namibia', 'namibia.gif');
INSERT INTO nuke_bbflags  VALUES ('120', 'nauru', 'nauru.gif');
INSERT INTO nuke_bbflags  VALUES ('121', 'nepal', 'nepal.gif');
INSERT INTO nuke_bbflags  VALUES ('122', 'neth antilles', 'neth_antilles.gif');
INSERT INTO nuke_bbflags  VALUES ('123', 'netherlands', 'netherlands.gif');
INSERT INTO nuke_bbflags  VALUES ('124', 'new zealand', 'newzealand.gif');
INSERT INTO nuke_bbflags  VALUES ('125', 'nicaragua', 'nicaragua.gif');
INSERT INTO nuke_bbflags  VALUES ('126', 'niger', 'niger.gif');
INSERT INTO nuke_bbflags  VALUES ('127', 'nigeria', 'nigeria.gif');
INSERT INTO nuke_bbflags  VALUES ('128', 'north korea', 'north_korea.gif');
INSERT INTO nuke_bbflags  VALUES ('129', 'norway', 'norway.gif');
INSERT INTO nuke_bbflags  VALUES ('130', 'oman', 'oman.gif');
INSERT INTO nuke_bbflags  VALUES ('131', 'pakistan', 'pakistan.gif');
INSERT INTO nuke_bbflags  VALUES ('132', 'panama', 'panama.gif');
INSERT INTO nuke_bbflags  VALUES ('133', 'papua newguinea', 'papuanewguinea.gif');
INSERT INTO nuke_bbflags  VALUES ('134', 'paraguay', 'paraguay.gif');
INSERT INTO nuke_bbflags  VALUES ('135', 'peru', 'peru.gif');
INSERT INTO nuke_bbflags  VALUES ('136', 'philippines', 'philippines.gif');
INSERT INTO nuke_bbflags  VALUES ('137', 'poland', 'poland.gif');
INSERT INTO nuke_bbflags  VALUES ('138', 'portugal', 'portugal.gif');
INSERT INTO nuke_bbflags  VALUES ('139', 'puertorico', 'puertorico.gif');
INSERT INTO nuke_bbflags  VALUES ('140', 'qatar', 'qatar.gif');
INSERT INTO nuke_bbflags  VALUES ('141', 'rawanda', 'rawanda.gif');
INSERT INTO nuke_bbflags  VALUES ('142', 'romania', 'romania.gif');
INSERT INTO nuke_bbflags  VALUES ('143', 'russia', 'russia.gif');
INSERT INTO nuke_bbflags  VALUES ('144', 'sao tome', 'sao_tome.gif');
INSERT INTO nuke_bbflags  VALUES ('145', 'saudiarabia', 'saudiarabia.gif');
INSERT INTO nuke_bbflags  VALUES ('146', 'senegal', 'senegal.gif');
INSERT INTO nuke_bbflags  VALUES ('147', 'serbia', 'serbia.gif');
INSERT INTO nuke_bbflags  VALUES ('148', 'seychelles', 'seychelles.gif');
INSERT INTO nuke_bbflags  VALUES ('149', 'sierraleone', 'sierraleone.gif');
INSERT INTO nuke_bbflags  VALUES ('150', 'singapore', 'singapore.gif');
INSERT INTO nuke_bbflags  VALUES ('151', 'slovakia', 'slovakia.gif');
INSERT INTO nuke_bbflags  VALUES ('152', 'slovenia', 'slovenia.gif');
INSERT INTO nuke_bbflags  VALUES ('153', 'solomon islands', 'solomon_islands.gif');
INSERT INTO nuke_bbflags  VALUES ('154', 'somalia', 'somalia.gif');
INSERT INTO nuke_bbflags  VALUES ('155', 'south_korea', 'south_korea.gif');
INSERT INTO nuke_bbflags  VALUES ('156', 'south africa', 'southafrica.gif');
INSERT INTO nuke_bbflags  VALUES ('157', 'spain', 'spain.gif');
INSERT INTO nuke_bbflags  VALUES ('158', 'srilanka', 'srilanka.gif');
INSERT INTO nuke_bbflags  VALUES ('159', 'stkitts nevis', 'stkitts_nevis.gif');
INSERT INTO nuke_bbflags  VALUES ('160', 'stlucia', 'stlucia.gif');
INSERT INTO nuke_bbflags  VALUES ('161', 'sudan', 'sudan.gif');
INSERT INTO nuke_bbflags  VALUES ('162', 'suriname', 'suriname.gif');
INSERT INTO nuke_bbflags  VALUES ('163', 'sweden', 'sweden.gif');
INSERT INTO nuke_bbflags  VALUES ('164', 'switzerland', 'switzerland.gif');
INSERT INTO nuke_bbflags  VALUES ('165', 'syria', 'syria.gif');
INSERT INTO nuke_bbflags  VALUES ('166', 'taiwan', 'taiwan.gif');
INSERT INTO nuke_bbflags  VALUES ('167', 'tajikistan', 'tajikistan.gif');
INSERT INTO nuke_bbflags  VALUES ('168', 'tanzania', 'tanzania.gif');
INSERT INTO nuke_bbflags  VALUES ('169', 'thailand', 'thailand.gif');
INSERT INTO nuke_bbflags  VALUES ('170', 'togo', 'togo.gif');
INSERT INTO nuke_bbflags  VALUES ('171', 'tonga', 'tonga.gif');
INSERT INTO nuke_bbflags  VALUES ('172', 'trinidad and tobago', 'trinidadandtobago.gif');
INSERT INTO nuke_bbflags  VALUES ('173', 'tunisia', 'tunisia.gif');
INSERT INTO nuke_bbflags  VALUES ('174', 'turkey', 'turkey.gif');
INSERT INTO nuke_bbflags  VALUES ('175', 'turkmenistan', 'turkmenistan.gif');
INSERT INTO nuke_bbflags  VALUES ('176', 'tuvala', 'tuvala.gif');
INSERT INTO nuke_bbflags  VALUES ('177', 'uae', 'uae.gif');
INSERT INTO nuke_bbflags  VALUES ('178', 'uganda', 'uganda.gif');
INSERT INTO nuke_bbflags  VALUES ('179', 'uk', 'uk.gif');
INSERT INTO nuke_bbflags  VALUES ('180', 'ukraine', 'ukraine.gif');
INSERT INTO nuke_bbflags  VALUES ('181', 'uruguay', 'uruguay.gif');
INSERT INTO nuke_bbflags  VALUES ('182', 'ussr', 'ussr.gif');
INSERT INTO nuke_bbflags  VALUES ('183', 'uzbekistan', 'uzbekistan.gif');
INSERT INTO nuke_bbflags  VALUES ('184', 'vanuatu', 'vanuatu.gif');
INSERT INTO nuke_bbflags  VALUES ('185', 'venezuela', 'venezuela.gif');
INSERT INTO nuke_bbflags  VALUES ('186', 'vietnam', 'vietnam.gif');
INSERT INTO nuke_bbflags  VALUES ('187', 'western samoa', 'western_samoa.gif');
INSERT INTO nuke_bbflags  VALUES ('188', 'yemen', 'yemen.gif');
INSERT INTO nuke_bbflags  VALUES ('189', 'yugoslavia', 'yugoslavia.gif');
INSERT INTO nuke_bbflags  VALUES ('190', 'zaire', 'zaire.gif');
INSERT INTO nuke_bbflags  VALUES ('191', 'zambia', 'zambia.gif');
INSERT INTO nuke_bbflags  VALUES ('192', 'zimbabwe', 'zimbabwe.gif');

#
# Table structure for table 'nuke_bbforbidden_extensions'
#

DROP TABLE IF EXISTS nuke_bbforbidden_extensions;
CREATE TABLE nuke_bbforbidden_extensions (
   ext_id mediumint(8) unsigned NOT NULL auto_increment,
   extension varchar(100) NOT NULL,
   PRIMARY KEY (ext_id)
);


#
# Dumping data for table 'nuke_bbforbidden_extensions'
#

INSERT INTO nuke_bbforbidden_extensions  VALUES ('1', 'php');
INSERT INTO nuke_bbforbidden_extensions  VALUES ('2', 'php3');
INSERT INTO nuke_bbforbidden_extensions  VALUES ('3', 'php4');
INSERT INTO nuke_bbforbidden_extensions  VALUES ('4', 'phtml');
INSERT INTO nuke_bbforbidden_extensions  VALUES ('5', 'pl');
INSERT INTO nuke_bbforbidden_extensions  VALUES ('6', 'asp');
INSERT INTO nuke_bbforbidden_extensions  VALUES ('7', 'cgi');
INSERT INTO nuke_bbforbidden_extensions  VALUES ('8', 'com');
INSERT INTO nuke_bbforbidden_extensions  VALUES ('9', 'bat');
INSERT INTO nuke_bbforbidden_extensions  VALUES ('10', 'scr');

#
# Table structure for table 'nuke_bbforum_prune'
#

DROP TABLE IF EXISTS nuke_bbforum_prune;
CREATE TABLE nuke_bbforum_prune (
   prune_id mediumint(8) unsigned NOT NULL auto_increment,
   forum_id smallint(5) unsigned DEFAULT '0' NOT NULL,
   prune_days tinyint(4) unsigned DEFAULT '0' NOT NULL,
   prune_freq tinyint(4) unsigned DEFAULT '0' NOT NULL,
   PRIMARY KEY (prune_id),
   KEY forum_id (forum_id)
);


#
# Dumping data for table 'nuke_bbforum_prune'
#


#
# Table structure for table 'nuke_bbforums'
#

DROP TABLE IF EXISTS nuke_bbforums;
CREATE TABLE nuke_bbforums (
   forum_id smallint(5) unsigned NOT NULL auto_increment,
   cat_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   forum_name varchar(150),
   forum_desc text,
   forum_status tinyint(4) DEFAULT '0' NOT NULL,
   forum_order mediumint(8) unsigned DEFAULT '1' NOT NULL,
   forum_posts mediumint(8) unsigned DEFAULT '0' NOT NULL,
   forum_topics mediumint(8) unsigned DEFAULT '0' NOT NULL,
   forum_last_post_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   prune_next int(11),
   prune_enable tinyint(1) DEFAULT '1' NOT NULL,
   auth_view tinyint(2) DEFAULT '0' NOT NULL,
   auth_read tinyint(2) DEFAULT '0' NOT NULL,
   auth_post tinyint(2) DEFAULT '0' NOT NULL,
   auth_reply tinyint(2) DEFAULT '0' NOT NULL,
   auth_edit tinyint(2) DEFAULT '0' NOT NULL,
   auth_delete tinyint(2) DEFAULT '0' NOT NULL,
   auth_sticky tinyint(2) DEFAULT '0' NOT NULL,
   auth_announce tinyint(2) DEFAULT '0' NOT NULL,
   auth_globalannounce tinyint(2) DEFAULT '3' NOT NULL,
   auth_vote tinyint(2) DEFAULT '0' NOT NULL,
   auth_pollcreate tinyint(2) DEFAULT '0' NOT NULL,
   auth_attachments tinyint(2) DEFAULT '0' NOT NULL,
   forum_display_sort tinyint(1) DEFAULT '0' NOT NULL,
   forum_display_order tinyint(1) DEFAULT '0' NOT NULL,
   auth_download tinyint(2) DEFAULT '0' NOT NULL,
   forum_parent int(11) DEFAULT '0' NOT NULL,
   forum_icon varchar(255),
   PRIMARY KEY (forum_id),
   KEY forums_order (forum_order),
   KEY cat_id (cat_id),
   KEY forum_last_post_id (forum_last_post_id)
);


#
# Dumping data for table 'nuke_bbforums'
#

INSERT INTO nuke_bbforums  VALUES ('1', '1', 'Oldal', '', '0', '10', '1', '1', '1', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '3', '1', '1', '1', '0', '0', '1', '0', NULL);

#
# Table structure for table 'nuke_bbgroups'
#

DROP TABLE IF EXISTS nuke_bbgroups;
CREATE TABLE nuke_bbgroups (
   group_id mediumint(8) NOT NULL auto_increment,
   group_type tinyint(4) DEFAULT '1' NOT NULL,
   group_name varchar(40) NOT NULL,
   group_description varchar(255) NOT NULL,
   group_moderator mediumint(8) DEFAULT '0' NOT NULL,
   group_single_user tinyint(1) DEFAULT '1' NOT NULL,
   group_allow_pm tinyint(2) DEFAULT '5' NOT NULL,
   group_color varchar(15) NOT NULL,
   group_rank varchar(5) DEFAULT '0' NOT NULL,
   max_inbox mediumint(10) DEFAULT '100' NOT NULL,
   max_sentbox mediumint(10) DEFAULT '100' NOT NULL,
   max_savebox mediumint(10) DEFAULT '100' NOT NULL,
   override_max_inbox tinyint(1) DEFAULT '0' NOT NULL,
   override_max_sentbox tinyint(1) DEFAULT '0' NOT NULL,
   override_max_savebox tinyint(1) DEFAULT '0' NOT NULL,
   group_count int(4) unsigned DEFAULT '99999999',
   group_count_max int(4) unsigned DEFAULT '99999999',
   group_count_enable smallint(2) unsigned DEFAULT '0',
   PRIMARY KEY (group_id),
   KEY group_single_user (group_single_user)
);


#
# Dumping data for table 'nuke_bbgroups'
#

INSERT INTO nuke_bbgroups  VALUES ('1', '1', 'Vendég', 'Látogató', '0', '1', '0', '', '', '0', '0', '0', '0', '0', '0', '99999999', '99999999', '0');
INSERT INTO nuke_bbgroups  VALUES ('3', '2', 'Moderátor', 'Moderálja a Fórumot', '2', '0', '5', '', '', '0', '0', '0', '0', '0', '0', '99999999', '99999999', '0');
INSERT INTO nuke_bbgroups  VALUES ('5', '0', 'Új Tag', 'Alapértelmezett Csoport', '2', '0', '5', '', '', '0', '0', '0', '0', '0', '0', '99999999', '99999999', '0');

#
# Table structure for table 'nuke_bbinline_ads'
#

DROP TABLE IF EXISTS nuke_bbinline_ads;
CREATE TABLE nuke_bbinline_ads (
   ad_id tinyint(5) NOT NULL auto_increment,
   ad_code text NOT NULL,
   ad_name char(25) NOT NULL,
   PRIMARY KEY (ad_id)
);


#
# Dumping data for table 'nuke_bbinline_ads'
#

INSERT INTO nuke_bbinline_ads  VALUES ('1', '<a href=\"http://www.evo-hungary.hu\" target=\"_blank\" name=\"Evo-Hungary Today\"><img src=\"http://www.evo-hungary.hu/modules/LinktoUs/images/Logo.gif\" border=\"0\" alt=\"Evo-Hungary Today\" /></a>', 'Default');

#
# Table structure for table 'nuke_bbjr_admin_users'
#

DROP TABLE IF EXISTS nuke_bbjr_admin_users;
CREATE TABLE nuke_bbjr_admin_users (
   user_id mediumint(9) DEFAULT '0' NOT NULL,
   user_jr_admin longtext NOT NULL,
   start_date int(10) unsigned DEFAULT '0' NOT NULL,
   update_date int(10) unsigned DEFAULT '0' NOT NULL,
   admin_notes text NOT NULL,
   notes_view tinyint(1) DEFAULT '0' NOT NULL,
   PRIMARY KEY (user_id)
);


#
# Dumping data for table 'nuke_bbjr_admin_users'
#


#
# Table structure for table 'nuke_bblogs'
#

DROP TABLE IF EXISTS nuke_bblogs;
CREATE TABLE nuke_bblogs (
   log_id mediumint(10) NOT NULL auto_increment,
   mode varchar(50),
   topic_id mediumint(10) DEFAULT '0',
   user_id mediumint(8) DEFAULT '0',
   username varchar(255),
   user_ip varchar(8) DEFAULT '0' NOT NULL,
   time int(11) DEFAULT '0',
   new_topic_id mediumint(10) DEFAULT '0' NOT NULL,
   forum_id mediumint(10) DEFAULT '0' NOT NULL,
   new_forum_id mediumint(10) DEFAULT '0' NOT NULL,
   last_post_id mediumint(10) DEFAULT '0' NOT NULL,
   PRIMARY KEY (log_id)
);


#
# Dumping data for table 'nuke_bblogs'
#

INSERT INTO nuke_bblogs  VALUES ('1', 'Accessed Forum Admin', '0', '2', 'Shadow', '7f000001', '1193251435', '0', '0', '0', '0');
INSERT INTO nuke_bblogs  VALUES ('2', 'Hozzászólás szerkesztése', '1', '2', 'Shadow', '7f000001', '1193320983', '0', '0', '0', '1');
INSERT INTO nuke_bblogs  VALUES ('3', 'Accessed Forum Admin', '0', '2', 'Shadow', '7f000001', '1193499839', '0', '0', '0', '0');

#
# Table structure for table 'nuke_bblogs_config'
#

DROP TABLE IF EXISTS nuke_bblogs_config;
CREATE TABLE nuke_bblogs_config (
   config_name varchar(255) NOT NULL,
   config_value varchar(255) NOT NULL,
   PRIMARY KEY (config_name)
);


#
# Dumping data for table 'nuke_bblogs_config'
#

INSERT INTO nuke_bblogs_config  VALUES ('all_admin', '0');

#
# Table structure for table 'nuke_bbpost_reports'
#

DROP TABLE IF EXISTS nuke_bbpost_reports;
CREATE TABLE nuke_bbpost_reports (
   report_id mediumint(8) NOT NULL auto_increment,
   post_id mediumint(8) DEFAULT '0' NOT NULL,
   reporter_id mediumint(8) DEFAULT '0' NOT NULL,
   report_status tinyint(1) DEFAULT '0' NOT NULL,
   report_time int(11) DEFAULT '0' NOT NULL,
   report_comments text,
   last_action_user_id mediumint(8) DEFAULT '0',
   last_action_time int(11) DEFAULT '0' NOT NULL,
   last_action_comments text,
   PRIMARY KEY (report_id)
);


#
# Dumping data for table 'nuke_bbpost_reports'
#


#
# Table structure for table 'nuke_bbposts'
#

DROP TABLE IF EXISTS nuke_bbposts;
CREATE TABLE nuke_bbposts (
   post_id mediumint(8) unsigned NOT NULL auto_increment,
   topic_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   forum_id smallint(5) unsigned DEFAULT '0' NOT NULL,
   poster_id mediumint(8) DEFAULT '0' NOT NULL,
   post_time int(11) DEFAULT '0' NOT NULL,
   poster_ip varchar(8) NOT NULL,
   post_username varchar(25),
   enable_bbcode tinyint(1) DEFAULT '1' NOT NULL,
   enable_html tinyint(1) DEFAULT '0' NOT NULL,
   enable_smilies tinyint(1) DEFAULT '1' NOT NULL,
   enable_sig tinyint(1) DEFAULT '1' NOT NULL,
   post_edit_time int(11),
   post_edit_count smallint(5) unsigned DEFAULT '0' NOT NULL,
   post_attachment tinyint(1) DEFAULT '0' NOT NULL,
   post_move tinyint(1) DEFAULT '0' NOT NULL,
   PRIMARY KEY (post_id),
   KEY forum_id (forum_id),
   KEY topic_id (topic_id),
   KEY poster_id (poster_id),
   KEY post_time (post_time)
);


#
# Dumping data for table 'nuke_bbposts'
#

INSERT INTO nuke_bbposts  VALUES ('1', '1', '1', '2', '1125187439', '7f000001', '', '1', '1', '1', '0', NULL, '0', '0', '0');

#
# Table structure for table 'nuke_bbposts_text'
#

DROP TABLE IF EXISTS nuke_bbposts_text;
CREATE TABLE nuke_bbposts_text (
   post_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   bbcode_uid varchar(10) NOT NULL,
   post_subject varchar(60),
   post_text text,
   PRIMARY KEY (post_id)
);


#
# Dumping data for table 'nuke_bbposts_text'
#

INSERT INTO nuke_bbposts_text  VALUES ('1', 'f8f4424aea', 'Üdvözöl a  Nuke-Evolution!', 'Köszönjük, hogy telepítetted a [b:f8f4424aea]Nuke Evolution Pro[/b:f8f4424aea] (v2.0.6) Final verziót. [b:f8f4424aea]Copyright &#169; 2007 by Nuke-Evolution Hungary[/b:f8f4424aea]. Az Evo Csapata elkészítette az eddigi legjobb, legbiztonságossabb PHP-Nuke verziót. Kérünk olvasd el a csatolt dokumentációt, melyben megtalálhatod kérdéseidre a válaszokat.. \r\n\r\nA mostani &quot;Telepíto&quot; könyvtárat, és az install.php fájlt, töröld a szerveredrol.\r\n\r\nReményeink szerint a Nuke-Evolution a legjobb Nuke program a számodra. Élvezd, és használd a www.nuke-evolution.com, és a www.evo-hungary.hu támogatását.\r\n\r\n[b:f8f4424aea]- The Nuke-Evolution Team[/b:f8f4424aea]\r\n\r\nA Nuke-Evolution magyarnyelvu hivatalos támogatója [ Evo-Hungary] \r\n\r\nA Nuke-Evolution egy nyílt forráskodu tartalom kezelo rendszer...\r\n\r\nMiért jó\r\n\r\n...a webes tartalomkezelo rendszer (CMS) alkalmazása?\r\n\r\nMert így minimális betanítás után lehetovéválik, hogy az internetes technológiákhoz nem érto munkatárs is frissíthesse, bovíthesse a weboldalak tartalmát.\r\n[list:f8f4424aea]Nemzetközi támogatás, dinamikussan fejlödo közösség!\r\nÁllandó fejlesztés, megbizható, biztonságos, gyors!\r\nElotérben a minoség, a rugalmasság és a megbízhatóság![/list:u:f8f4424aea]\r\n\r\nChangelog:\r\n\r\n[quote:f8f4424aea]\r\n05/11/2007 - 2.0.5\r\n &nbsp; &nbsp; &nbsp; TECHNOCRAT\r\n &nbsp; &nbsp; &nbsp; -[05/11/2007] Updated Enhanced Journal to 2.0.1 -&gt; thanks SLiCK_303\r\n &nbsp; &nbsp; &nbsp; -[05/13/2007] Fixed submit news error\r\n &nbsp; &nbsp; &nbsp; -[05/13/2007] Fixed forum common.php typo\r\n &nbsp; &nbsp; &nbsp; -[05/13/2007] Added default to variable class\r\n &nbsp; &nbsp; &nbsp; -[05/13/2007] Fixed admin socket error\r\n &nbsp; &nbsp; &nbsp; -[05/13/2007] Fixed at a glance offset issue\r\n &nbsp; &nbsp; &nbsp; -[05/16/2007] Updated swiftmailer 3.2.2\r\n &nbsp; &nbsp; &nbsp; -[05/17/2007] Fixed new lines in YA emails\r\n &nbsp; &nbsp; &nbsp; -[05/17/2007] Took out SQL cache in SwiftMail\r\n &nbsp; &nbsp; &nbsp; -[05/17/2007] Commented out Sendmail (left it in case someone wants to try and make it work)\r\n &nbsp; &nbsp; &nbsp; -[05/17/2007] Find a minor warning with evo_mail\r\n &nbsp; &nbsp; &nbsp; -[05/21/2007] Fixed a typo in the board_config\r\n &nbsp; &nbsp; &nbsp; -[05/21/2007] Added new sites to the Nuke-Evolution block\r\n &nbsp; &nbsp; &nbsp; -[05/21/2007] Added x_click to donations\r\n &nbsp; &nbsp; &nbsp; \r\n &nbsp; &nbsp; &nbsp; TULISAN\r\n &nbsp; &nbsp; &nbsp; -[05/15/2007] Changed &lt;br&gt; to &lt;br&gt; in modcp (Thanks Rodmar)\r\n\r\n &nbsp; &nbsp; &nbsp; REORGANISATION\r\n &nbsp; &nbsp; &nbsp; -[05/17/2007] 1st part of phpBB changes -&gt; board-config directory [/quote:f8f4424aea]\r\n\r\nCserék, modósítások:\r\n[quote:f8f4424aea]\r\n &nbsp; &nbsp; &nbsp; SHADOW\r\n-[/2007/10/24] Magyarnyelvû SQL adatbázis.\r\n-[/2007/10/24] Magyarnyelvû admin fájlok javítása.\r\n-[/2007/10/24] Magyarnyelvû fájlok integrálása.\r\n-[/2007/10/24] Új Evo-képek.\r\nMOD Title: Birthdays \r\nMOD Description: Adds a Birthday field to the user profile.\r\nMOD Author: TerraFrost &lt;N&gt; (Jim Wigginton) http://www.frostjedi.com/terra/wordpress/\r\nMOD Porter: JeFFb68CAM\r\n\r\nMOD Title: Simple Subforums MOD \r\nMOD Description: This MOD is a simple subforums MOD that doesn\'t include any extras and makes only one small database change. It supports only one level deep subforums that should be enough for most forums.\r\nMOD Author: pentapenguin &lt;pentapenguin&gt; (Jeremy Conley) http://www.pentapenguin.com\r\nMOD Porter: v2.0.0 ShoKKer &lt;shokker&gt; http://www.Evo-Mods.com\r\n\r\nMOD Title: Users Reputations System \r\nMOD Description: Allows users to give reputation points to each others, earn it by posts and by &quot;living&quot; on forum, see the history of givings. Admin can edit users\' reputations in admin cp. The whole system can be a text or a graphic version (5 different medals) and simple or advanced version (with choosing of how much reputation to give).\r\nMOD Author: antongranik &lt;anton&gt; (Anton Granik) http://granik.com\r\nMOD Porter: Rodmar &lt;http&gt;\r\n\r\nMOD Title: Junior Admin\r\nMOD Description: This will allow you to define any and all users you\'d like to have access to whatever admin modules you\'d like.\r\nMOD Author: Nivisec &lt;support&gt; http://www.nivisec.com\r\nMOD Porter: v2.0.0 ShoKKer &lt;shokker&gt; http://www.Evo-Mods.com\r\n\r\nMOD Title: Inline Banner Ad\r\nMOD Description: Allows placement of banner ads inline with posts. Contains a variety of options to control display behavior.\r\nMOD Author: geocator &lt;geocator&gt; (Brian) http://www.geocator.us\r\nMOD Porter: v2.0.1 Rodmar &lt;http&gt;\r\n\r\nMOD Title: Forum Icon with ACP Control \r\nMOD Description: This mod allow admin to give each forum a icon.\r\nMOD Author: Mac (Y.C. LIN) &lt;ycl_6&gt; http://endless-tw.net\r\nMOD Porter: JeFFb68CAM\r\n\r\nMOD Title: Cash\r\nMOD Description: Cash for users to gain money/points by posting.\r\nMOD Author: Xore &lt;mods&gt; (Robert Hetzler) http://www.xore.ca\r\nMOD Porter: ShoKKer &lt;shokker&gt; http://www.Evo-Mods.com\r\n\r\nMOD Title: Hide\r\nMOD Description: This mod allow users to hide a message via some &quot;bbcodes&quot;, ex : [hide] message [/hide]. To see a hidden message, you must be a member and you must post a reply to the message.\r\nMOD Author: Philiweb &lt;http&gt;\r\nMOD Porter: KingRico\r\n\r\nMOD Title: Gender \r\nMOD Description: This mod will add a Gender field into users\' profile, and display &quot;Gender: |image|&quot; in posts too. \r\nMOD Author: Niels &lt;ncr&gt; (Niels Chr. Rød) http://mods.db9.dk\r\nMOD Porter: Jean-Luc - http://www.nuke-evolution.fr\r\n\r\nMOD Title: Profile Views\r\nMOD Description: Shows how many times a user\'s profile has been viewed, just above the joined date. Only shows individual visitors. Visitors who visit the same profile more than once in a day are only counted as one view.\r\nMOD Author: Manipe &lt;admin&gt; (N/A) http://www.manipef1.com\r\nMOD Porter: Electricoverride &lt;http&gt;\r\n\r\nMOD Title: Myspace\r\nMOD Description: This mod adds a myspace button to your profile.\r\nMOD Author: houndoftheb &lt;bbolman&gt; (Brad Bolman)\r\nMOD Porter: Electricoverride &lt;http&gt;\r\n\r\nMOD Title: Password Security\r\nMOD Description: When a new password is entered, the user will receive a Java Script warning.\r\nMOD Author: Underhill &lt;webmaster&gt; (N/A) http://www.underhill.de/\r\nMOD Porter: Electricoverride &lt;http&gt;\r\n\r\nMOD Title: Ban List in Who Is Online\r\nMOD Description: This mod will add banned members to the index page of your forums.\r\n\r\nMOD Title: Advanced Pruning\r\nMOD Description: This provides some advanced options in pruning, for example choosing to leave sticky posts (even if they are outdated) unpruned, prune also the active votes (although they are outdated) or to prune outdated active votes and announcements.\r\nMOD Author: kp3011 &lt;asv83&gt; (Jisp Cheung) http://269m.no-ip.org\r\nMOD Porter: ShoKKer &lt;shokker&gt; http://www.Evo-Mods.com\r\n\r\nMOD Title: Country Flags\r\nMod Description: This mod allows your registered board members to select the flag of their country. Their flag will then display though out the forum system.\r\nMod Author: Nuttzy99 &lt;pktoolkit&gt; (Nuttzy) http://www.blizzhackers.com\r\nMOD Porter: FortKnox http://www.nuke-php.net\r\n\r\nMOD Title: Welcome Panel On Index\r\nMOD Description: This hack adds a welcome panel at the top of the index page with many information about user such as the amount of the new messages, new topics, new private messages and new users since his last visit. A suggested topic is also displayed. If user is a guest, a special welcome message is displayed.\r\nMOD Author: Aiencran\r\nMOD Porter: FortKnox http://www.nuke-php.net\r\n\r\nMOD Title: Users of the day\r\nMOD Description: Displays, under the online users list, a list of the registered users who have visited during the last XX hours. Can also display the list of the users who didn\'t come.\r\nMOD Author: ZoZo &lt;zozo&gt;\r\nMOD Porter: Rodmar &lt;http&gt;\r\n\r\nMOD Title: Advanced Topic Types \r\nMOD Description: This allows you to add and manage custom topic types.\r\nMOD Author: Poupoune &lt;poupoune&gt; (N/A) http://php-tools.org/poupoune/\r\nMOD Porter: JeFFb68CAM\r\n\r\nMOD Title: Evo Network Bar\r\nMOD Description: Adds a Quick Links Nuke-Evolution Network Bar to your site.\r\nMOD Author: JeFFb68CAM\r\n\r\nMOD Title: InfoBar on Top\r\nMOD Description: Adds an Info Bar to the top below your header. Taken from VBulletin Forum Systems and ported to Nuke-Evolution. [/quote:f8f4424aea]\r\n\r\nWeboldal ingyen. Miért fizetne érte. http://www.evo-hungary.hu');

#
# Table structure for table 'nuke_bbprivmsgs'
#

DROP TABLE IF EXISTS nuke_bbprivmsgs;
CREATE TABLE nuke_bbprivmsgs (
   privmsgs_id mediumint(8) unsigned NOT NULL auto_increment,
   privmsgs_type tinyint(4) DEFAULT '0' NOT NULL,
   privmsgs_subject varchar(255) DEFAULT '0' NOT NULL,
   privmsgs_from_userid mediumint(8) DEFAULT '0' NOT NULL,
   privmsgs_to_userid mediumint(8) DEFAULT '0' NOT NULL,
   privmsgs_date int(11) DEFAULT '0' NOT NULL,
   privmsgs_ip varchar(8) NOT NULL,
   privmsgs_enable_bbcode tinyint(1) DEFAULT '1' NOT NULL,
   privmsgs_enable_html tinyint(1) DEFAULT '0' NOT NULL,
   privmsgs_enable_smilies tinyint(1) DEFAULT '1' NOT NULL,
   privmsgs_attach_sig tinyint(1) DEFAULT '1' NOT NULL,
   privmsgs_attachment tinyint(1) DEFAULT '0' NOT NULL,
   PRIMARY KEY (privmsgs_id),
   KEY privmsgs_from_userid (privmsgs_from_userid),
   KEY privmsgs_to_userid (privmsgs_to_userid)
);


#
# Dumping data for table 'nuke_bbprivmsgs'
#


#
# Table structure for table 'nuke_bbprivmsgs_archive'
#

DROP TABLE IF EXISTS nuke_bbprivmsgs_archive;
CREATE TABLE nuke_bbprivmsgs_archive (
   privmsgs_id mediumint(8) unsigned NOT NULL auto_increment,
   privmsgs_type tinyint(4) DEFAULT '0' NOT NULL,
   privmsgs_subject varchar(255) DEFAULT '0' NOT NULL,
   privmsgs_from_userid mediumint(8) DEFAULT '0' NOT NULL,
   privmsgs_to_userid mediumint(8) DEFAULT '0' NOT NULL,
   privmsgs_date int(11) DEFAULT '0' NOT NULL,
   privmsgs_ip varchar(8) NOT NULL,
   privmsgs_enable_bbcode tinyint(1) DEFAULT '1' NOT NULL,
   privmsgs_enable_html tinyint(1) DEFAULT '0' NOT NULL,
   privmsgs_enable_smilies tinyint(1) DEFAULT '1' NOT NULL,
   privmsgs_attach_sig tinyint(1) DEFAULT '1' NOT NULL,
   PRIMARY KEY (privmsgs_id),
   KEY privmsgs_from_userid (privmsgs_from_userid),
   KEY privmsgs_to_userid (privmsgs_to_userid)
);


#
# Dumping data for table 'nuke_bbprivmsgs_archive'
#


#
# Table structure for table 'nuke_bbprivmsgs_text'
#

DROP TABLE IF EXISTS nuke_bbprivmsgs_text;
CREATE TABLE nuke_bbprivmsgs_text (
   privmsgs_text_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   privmsgs_bbcode_uid varchar(10) DEFAULT '0' NOT NULL,
   privmsgs_text text,
   PRIMARY KEY (privmsgs_text_id)
);


#
# Dumping data for table 'nuke_bbprivmsgs_text'
#


#
# Table structure for table 'nuke_bbquicksearch'
#

DROP TABLE IF EXISTS nuke_bbquicksearch;
CREATE TABLE nuke_bbquicksearch (
   search_id mediumint(8) unsigned NOT NULL auto_increment,
   search_name varchar(255) NOT NULL,
   search_url1 varchar(255) NOT NULL,
   search_url2 varchar(255) NOT NULL,
   PRIMARY KEY (search_id)
);


#
# Dumping data for table 'nuke_bbquicksearch'
#

INSERT INTO nuke_bbquicksearch  VALUES ('1', 'Google', 'http://www.google.com/search?hl=en&ie=UTF-8&oe=UTF-8&q=', '');

#
# Table structure for table 'nuke_bbquota_limits'
#

DROP TABLE IF EXISTS nuke_bbquota_limits;
CREATE TABLE nuke_bbquota_limits (
   quota_limit_id mediumint(8) unsigned NOT NULL auto_increment,
   quota_desc varchar(20) NOT NULL,
   quota_limit bigint(20) unsigned DEFAULT '0' NOT NULL,
   PRIMARY KEY (quota_limit_id)
);


#
# Dumping data for table 'nuke_bbquota_limits'
#

INSERT INTO nuke_bbquota_limits  VALUES ('1', 'Low', '262144');
INSERT INTO nuke_bbquota_limits  VALUES ('2', 'Medium', '2097152');
INSERT INTO nuke_bbquota_limits  VALUES ('3', 'High', '5242880');

#
# Table structure for table 'nuke_bbranks'
#

DROP TABLE IF EXISTS nuke_bbranks;
CREATE TABLE nuke_bbranks (
   rank_id smallint(5) unsigned NOT NULL auto_increment,
   rank_title varchar(100) NOT NULL,
   rank_min mediumint(8) DEFAULT '0' NOT NULL,
   rank_special tinyint(1) DEFAULT '0',
   rank_image varchar(255),
   PRIMARY KEY (rank_id)
);


#
# Dumping data for table 'nuke_bbranks'
#

INSERT INTO nuke_bbranks  VALUES ('1', 'Site Owner', '-1', '1', 'modules/Forums/images/ranks/site_owner.gif');
INSERT INTO nuke_bbranks  VALUES ('2', 'Site Admin', '-1', '1', 'modules/Forums/images/ranks/admin.gif');

#
# Table structure for table 'nuke_bbreputation'
#

DROP TABLE IF EXISTS nuke_bbreputation;
CREATE TABLE nuke_bbreputation (
   user_id mediumint(8) DEFAULT '0' NOT NULL,
   user_id_2 mediumint(8) DEFAULT '0' NOT NULL,
   post_id mediumint(8) DEFAULT '0' NOT NULL,
   rep_sum float DEFAULT '0' NOT NULL,
   rep_neg tinyint(1) DEFAULT '0' NOT NULL,
   rep_comment varchar(200) NOT NULL,
   rep_time int(11) DEFAULT '0' NOT NULL,
   KEY user_id (user_id)
);


#
# Dumping data for table 'nuke_bbreputation'
#


#
# Table structure for table 'nuke_bbreputation_config'
#

DROP TABLE IF EXISTS nuke_bbreputation_config;
CREATE TABLE nuke_bbreputation_config (
   config_name varchar(255) NOT NULL,
   config_value varchar(255) NOT NULL
);


#
# Dumping data for table 'nuke_bbreputation_config'
#

INSERT INTO nuke_bbreputation_config  VALUES ('posts_to_earn', '50');
INSERT INTO nuke_bbreputation_config  VALUES ('rep_disable', '0');
INSERT INTO nuke_bbreputation_config  VALUES ('days_to_earn', '30');
INSERT INTO nuke_bbreputation_config  VALUES ('flood_control_time', '30');
INSERT INTO nuke_bbreputation_config  VALUES ('graphic_version', '1');
INSERT INTO nuke_bbreputation_config  VALUES ('medal4_to_earn', '10');
INSERT INTO nuke_bbreputation_config  VALUES ('medal3_to_earn', '50');
INSERT INTO nuke_bbreputation_config  VALUES ('medal2_to_earn', '100');
INSERT INTO nuke_bbreputation_config  VALUES ('medal1_to_earn', '200');
INSERT INTO nuke_bbreputation_config  VALUES ('given_rep_to_earn', '20');
INSERT INTO nuke_bbreputation_config  VALUES ('show_stats_to_mods', '0');
INSERT INTO nuke_bbreputation_config  VALUES ('repsum_limit', '0');
INSERT INTO nuke_bbreputation_config  VALUES ('pm_notify', '1');
INSERT INTO nuke_bbreputation_config  VALUES ('default_amount', '0');

#
# Table structure for table 'nuke_bbsearch_results'
#

DROP TABLE IF EXISTS nuke_bbsearch_results;
CREATE TABLE nuke_bbsearch_results (
   search_id int(11) unsigned DEFAULT '0' NOT NULL,
   session_id varchar(32) NOT NULL,
   search_array text NOT NULL,
   search_time int(11) DEFAULT '0' NOT NULL,
   PRIMARY KEY (search_id),
   KEY session_id (session_id)
);


#
# Dumping data for table 'nuke_bbsearch_results'
#


#
# Table structure for table 'nuke_bbsearch_wordlist'
#

DROP TABLE IF EXISTS nuke_bbsearch_wordlist;
CREATE TABLE nuke_bbsearch_wordlist (
   word_text varchar(255) NOT NULL,
   word_id mediumint(8) unsigned NOT NULL auto_increment,
   word_common mediumint(8) unsigned DEFAULT '0' NOT NULL,
   post_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   PRIMARY KEY (word_text),
   KEY word_id (word_id)
);


#
# Dumping data for table 'nuke_bbsearch_wordlist'
#

INSERT INTO nuke_bbsearch_wordlist  VALUES ('0', '1', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('1', '2', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('2', '3', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('11', '4', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('13', '5', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('15', '6', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('16', '7', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('17', '8', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('169', '9', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('1st', '10', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('21', '11', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('24', '12', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('2007', '13', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('above', '14', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('access', '15', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('acp', '16', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('active', '17', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('adatbázis', '18', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('add', '19', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('added', '20', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('adds', '21', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('admin', '22', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('ads', '23', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('advanced', '24', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('aiencran', '25', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('alkalmazása', '26', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('allow', '27', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('allows', '28', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('although', '29', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('amount', '30', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('announcements', '31', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('anton', '32', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('antongranik', '33', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('asv83', '34', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('author', '35', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('az', '36', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('ban', '37', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('banned', '38', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('banner', '39', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('bar', '40', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('bbcodes', '41', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('bbolman', '42', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('behavior', '43', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('below', '44', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('betanítás', '45', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('birthday', '46', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('birthdays', '47', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('biztonságos', '48', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('block', '49', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('board', '50', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('boardconfig', '51', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('bolman', '52', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('bovíthesse', '53', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('br', '54', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('brad', '55', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('brian', '56', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('button', '57', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('c', '58', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('cache', '59', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('case', '60', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('cash', '61', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('change', '62', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('changed', '63', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('changelog', '64', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('changes', '65', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('cheung', '66', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('choosing', '67', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('chr', '68', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('class', '69', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('cms', '70', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('com', '71', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('commented', '72', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('common', '73', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('conley', '74', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('contains', '75', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('control', '76', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('copyright', '77', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('counted', '78', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('country', '79', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('csapata', '80', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('csatolt', '81', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('cserék', '82', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('custom', '83', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('database', '84', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('date', '85', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('deep', '86', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('default', '87', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('define', '88', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('different', '89', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('dinamikussan', '90', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('directory', '91', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('discription', '92', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('display', '93', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('displayed', '94', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('displays', '95', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('dokumentációt', '96', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('donations', '97', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('during', '98', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('earn', '99', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('eddigi', '100', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('edit', '101', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('egy', '102', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('electricoverride', '103', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('elkészítette', '104', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('elotérben', '105', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('emails', '106', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('enhanced', '107', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('enough', '108', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('entered', '109', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('error', '110', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('evo', '111', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('evohungary', '112', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('evoképek', '113', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('evolution', '114', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('evomail', '115', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('example', '116', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('extras', '117', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('fejlesztés', '118', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('fejlödo', '119', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('field', '120', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('final', '121', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('fixed', '122', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('fizetne', '123', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('flag', '124', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('flags', '125', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('forráskodu', '126', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('fortknox', '127', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('forum', '128', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('forums', '129', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('frissíthesse', '130', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('fájlok', '131', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('fájlt', '132', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('gain', '133', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('gender', '134', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('geocator', '135', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('give', '136', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('givings', '137', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('glance', '138', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('granik', '139', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('graphic', '140', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('guest', '141', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('gyors', '142', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('hack', '143', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('használd', '144', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('header', '145', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('hetzler', '146', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('hidden', '147', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('hide', '148', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('history', '149', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('hivatalos', '150', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('hogy', '151', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('houndoftheb', '152', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('hours', '153', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('http', '154', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('hungary', '155', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('icon', '156', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('image', '157', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('include', '158', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('index', '159', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('individual', '160', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('info', '161', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('infobar', '162', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('information', '163', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('ingyen', '164', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('inline', '165', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('install', '166', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('integrálása', '167', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('internetes', '168', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('issue', '169', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('java', '170', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('javítása', '171', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('jeanluc', '172', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('jeffb68cam', '173', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('jeremy', '174', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('jim', '175', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('jisp', '176', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('joined', '177', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('journal', '178', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('junior', '179', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('kezelo', '180', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('kingrico', '181', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('kp3011', '182', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('kérdéseidre', '183', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('kérünk', '184', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('könyvtárat', '185', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('köszönjük', '186', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('közösség', '187', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('last', '188', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('leave', '189', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('left', '190', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('legbiztonságossabb', '191', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('legjobb', '192', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('lehetovéválik', '193', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('level', '194', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('lin', '195', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('lines', '196', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('links', '197', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('list', '198', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('living', '199', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('mac', '200', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('magyarnyelvu', '201', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('magyarnyelvû', '202', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('make', '203', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('makes', '204', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('manage', '205', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('manipe', '206', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('medals', '207', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('megbizható', '208', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('megbízhatóság', '209', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('megtalálhatod', '210', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('melyben', '211', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('member', '212', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('members', '213', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('mert', '214', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('message', '215', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('messages', '216', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('minimális', '217', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('minor', '218', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('minoség', '219', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('miért', '220', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('mod', '221', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('modcp', '222', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('mods', '223', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('modules', '224', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('modósítások', '225', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('money', '226', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('mostani', '227', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('munkatárs', '228', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('myspace', '229', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('n', '230', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('nbsp', '231', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('ncr', '232', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('nem', '233', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('nemzetközi', '234', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('network', '235', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('niels', '236', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('nivisec', '237', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('nuke', '238', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('nukeevolution', '239', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('nuttzy', '240', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('nuttzy99', '241', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('nyílt', '242', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('offset', '243', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('olvasd', '244', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('one', '245', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('online', '246', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('options', '247', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('others', '248', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('outdated', '249', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('panel', '250', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('part', '251', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('password', '252', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('pentapenguin', '253', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('philiweb', '254', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('php', '255', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('phpbb', '256', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('phpnuke', '257', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('pktoolkit', '258', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('placement', '259', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('points', '260', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('ported', '261', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('porter', '262', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('post', '263', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('posting', '264', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('posts', '265', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('poupoune', '266', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('private', '267', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('pro', '268', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('profile', '269', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('program', '270', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('provides', '271', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('prune', '272', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('pruning', '273', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('quick', '274', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('quot', '275', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('recieve', '276', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('registered', '277', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('reményeink', '278', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('rendszer', '279', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('reorganisation', '280', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('reply', '281', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('reputation', '282', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('reputations', '283', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('robert', '284', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('rodmar', '285', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('rugalmasság', '286', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('rød', '287', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('same', '288', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('script', '289', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('security', '290', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('select', '291', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('sendmail', '292', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('shadow', '293', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('shokker', '294', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('shows', '295', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('simple', '296', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('since', '297', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('site', '298', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('slick303', '299', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('socket', '300', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('someone', '301', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('special', '302', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('sql', '303', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('sticky', '304', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('subforums', '305', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('submit', '306', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('such', '307', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('suggested', '308', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('support', '309', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('supports', '310', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('swiftmail', '311', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('swiftmailer', '312', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('system', '313', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('systems', '314', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('szerint', '315', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('szerveredrol', '316', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('számodra', '317', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('taken', '318', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('tartalmát', '319', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('tartalom', '320', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('tartalomkezelo', '321', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('team', '322', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('technocrat', '323', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('technológiákhoz', '324', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('telepítetted', '325', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('telepíto', '326', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('terrafrost', '327', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('text', '328', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('thanks', '329', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('title', '330', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('took', '331', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('top', '332', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('topic', '333', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('topics', '334', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('try', '335', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('tulisan', '336', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('types', '337', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('typo', '338', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('támogatás', '339', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('támogatását', '340', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('támogatója', '341', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('töröld', '342', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('underhill', '343', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('unpruned', '344', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('updated', '345', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('user', '346', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('után', '347', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('variable', '348', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('variety', '349', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('vbulletin', '350', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('verziót', '351', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('view', '352', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('viewed', '353', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('views', '354', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('visit', '355', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('visited', '356', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('visitors', '357', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('votes', '358', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('válaszokat', '359', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('wants', '360', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('warning', '361', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('webes', '362', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('webmaster', '363', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('weboldal', '364', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('weboldalak', '365', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('welcome', '366', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('whatever', '367', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('whole', '368', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('wigginton', '369', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('work', '370', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('xclick', '371', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('xore', '372', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('ya', '373', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('ycl6', '374', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('zozo', '375', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('állandó', '376', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('élvezd', '377', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('érte', '378', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('érto', '379', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('így', '380', '0', '0');
INSERT INTO nuke_bbsearch_wordlist  VALUES ('üdvözöl', '381', '0', '0');

#
# Table structure for table 'nuke_bbsearch_wordmatch'
#

DROP TABLE IF EXISTS nuke_bbsearch_wordmatch;
CREATE TABLE nuke_bbsearch_wordmatch (
   post_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   word_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   title_match tinyint(1) DEFAULT '0' NOT NULL,
   KEY post_id (post_id),
   KEY word_id (word_id)
);


#
# Dumping data for table 'nuke_bbsearch_wordmatch'
#

INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '1', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '2', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '3', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '4', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '5', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '6', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '7', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '8', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '9', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '10', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '11', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '12', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '13', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '14', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '15', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '16', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '17', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '18', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '19', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '20', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '21', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '22', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '23', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '24', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '25', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '26', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '27', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '28', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '29', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '30', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '31', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '32', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '33', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '34', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '35', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '36', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '37', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '38', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '39', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '40', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '41', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '42', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '43', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '44', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '45', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '46', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '47', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '48', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '49', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '50', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '51', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '52', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '53', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '54', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '55', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '56', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '57', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '58', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '59', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '60', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '61', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '62', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '63', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '64', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '65', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '66', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '67', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '68', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '69', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '70', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '71', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '72', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '73', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '74', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '75', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '76', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '77', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '78', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '79', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '80', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '81', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '82', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '83', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '84', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '85', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '86', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '87', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '88', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '89', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '90', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '91', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '92', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '93', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '94', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '95', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '96', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '97', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '98', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '99', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '100', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '101', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '102', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '103', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '104', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '105', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '106', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '107', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '108', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '109', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '110', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '111', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '112', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '113', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '114', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '115', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '116', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '117', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '118', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '119', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '120', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '121', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '122', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '123', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '124', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '125', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '126', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '127', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '128', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '129', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '130', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '131', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '132', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '133', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '134', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '135', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '136', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '137', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '138', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '139', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '140', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '141', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '142', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '143', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '144', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '145', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '146', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '147', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '148', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '149', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '150', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '151', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '152', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '153', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '154', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '155', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '156', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '157', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '158', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '159', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '160', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '161', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '162', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '163', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '164', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '165', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '166', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '167', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '168', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '169', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '170', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '171', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '172', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '173', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '174', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '175', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '176', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '177', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '178', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '179', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '180', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '181', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '182', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '183', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '184', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '185', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '186', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '187', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '188', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '189', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '190', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '191', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '192', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '193', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '194', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '195', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '196', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '197', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '198', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '199', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '200', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '201', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '202', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '203', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '204', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '205', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '206', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '207', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '208', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '209', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '210', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '211', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '212', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '213', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '214', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '215', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '216', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '217', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '218', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '219', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '220', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '221', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '222', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '223', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '224', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '225', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '226', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '227', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '228', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '229', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '230', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '231', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '232', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '233', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '234', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '235', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '236', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '237', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '238', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '239', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '240', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '241', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '242', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '243', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '244', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '245', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '246', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '247', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '248', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '249', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '250', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '251', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '252', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '253', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '254', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '255', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '256', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '257', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '258', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '259', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '260', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '261', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '262', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '263', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '264', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '265', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '266', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '267', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '268', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '269', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '270', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '271', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '272', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '273', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '274', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '275', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '276', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '277', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '278', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '279', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '280', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '281', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '282', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '283', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '284', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '285', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '286', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '287', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '288', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '289', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '290', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '291', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '292', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '293', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '294', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '295', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '296', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '297', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '298', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '299', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '300', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '301', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '302', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '303', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '304', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '305', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '306', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '307', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '308', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '309', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '310', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '311', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '312', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '313', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '314', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '315', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '316', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '317', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '318', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '319', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '320', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '321', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '322', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '323', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '324', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '325', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '326', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '327', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '328', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '329', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '330', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '331', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '332', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '333', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '334', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '335', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '336', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '337', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '338', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '339', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '340', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '341', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '342', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '343', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '344', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '345', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '346', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '347', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '348', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '349', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '350', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '351', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '352', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '353', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '354', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '355', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '356', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '357', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '358', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '359', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '360', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '361', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '362', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '363', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '364', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '365', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '366', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '367', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '368', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '369', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '370', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '371', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '372', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '373', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '374', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '375', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '376', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '377', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '378', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '379', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '380', '0');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '239', '1');
INSERT INTO nuke_bbsearch_wordmatch  VALUES ('1', '381', '1');

#
# Table structure for table 'nuke_bbsessions'
#

DROP TABLE IF EXISTS nuke_bbsessions;
CREATE TABLE nuke_bbsessions (
   session_id varchar(32) NOT NULL,
   session_user_id mediumint(8) DEFAULT '0' NOT NULL,
   session_start int(11) DEFAULT '0' NOT NULL,
   session_time int(11) DEFAULT '0' NOT NULL,
   session_ip varchar(8) DEFAULT '0' NOT NULL,
   session_page int(11) DEFAULT '0' NOT NULL,
   session_logged_in tinyint(1) DEFAULT '0' NOT NULL,
   session_admin tinyint(2) DEFAULT '0' NOT NULL,
   session_url_qs text NOT NULL,
   session_url_ps text NOT NULL,
   session_url_specific int(10) DEFAULT '0' NOT NULL,
   PRIMARY KEY (session_id),
   KEY session_user_id (session_user_id),
   KEY session_id_ip_user_id (session_id, session_ip, session_user_id)
);


#
# Dumping data for table 'nuke_bbsessions'
#

INSERT INTO nuke_bbsessions  VALUES ('557be76dfab0f99ee8eb61c00b9ee742', '1', '1194603888', '1194603888', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('a9d26ef26152dec5d458824876f52942', '1', '1194603893', '1194603893', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('bc2e77edd15b6b77c64e745dcb347c6f', '1', '1194603886', '1194603886', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('fd48828f494c21726f68e336de973509', '2', '1194093930', '1194093930', '7f000001', '0', '1', '0', 'name=Forums&file=viewtopic&p=1', '/evo/modules.php', '1');
INSERT INTO nuke_bbsessions  VALUES ('2f422bd78205d6262a3a2440026e6584', '2', '1193499838', '1193501816', '7f000001', '0', '1', '0', 'name=Forums', '/evo/modules.php', '0');
INSERT INTO nuke_bbsessions  VALUES ('f77595ecd1eafa3f93eaaf12f1c97013', '2', '1193559419', '1193559419', '7f000001', '0', '1', '0', 'name=Forums&file=viewtopic&p=1', '/evo/modules.php', '1');
INSERT INTO nuke_bbsessions  VALUES ('6563817d6d59565ee7d4667a5e119a62', '1', '1194603918', '1194603918', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('2444803eaa3031d3ba905f6ac4e97bfe', '1', '1194603918', '1194603918', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('3fd57bb67851519f58f3fb91c92c5d00', '1', '1194603928', '1194603928', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('22a6d15aeecba8c15103483deed8a54c', '1', '1194603943', '1194603943', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('f3eae1503d54d70c30ea0108af9515c3', '1', '1194603947', '1194603947', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('0ed7be08e72b7f41d31d88b31fda9acc', '1', '1194603959', '1194603959', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('06a4471bc15fb6054ff55df1fcb9f1b6', '1', '1194603962', '1194603962', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('20cb52e02121167ab18c56b55f59e86a', '1', '1194603968', '1194603968', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('ca6737034b2715ad13997408348c94dd', '1', '1194603970', '1194603970', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('609bb4abf2c298b45fff783820eedd47', '1', '1194603977', '1194603977', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('2423cc341fdc30cc149c4db60b9475d8', '1', '1194603979', '1194603979', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('1ed6191cc7e45b802e901225f6106d06', '1', '1194603990', '1194603990', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('bfa1e1061846c422afb717ae3678e7c3', '1', '1194603994', '1194603994', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('1d367df7348666f5993061623ded3a36', '1', '1194604026', '1194604026', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('847277aa8a689f80d47f1726a5d9ebbd', '1', '1194604030', '1194604030', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('6c6913cfade14d1b00d165da63ef9ecd', '1', '1194604045', '1194604045', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('4d9c69143c60419b485a9eb049ada68f', '1', '1194604047', '1194604047', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('975aa0aa67fee69d0e91f543c906ec6b', '1', '1194604060', '1194604060', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('9d184134a6eb82a002e722221b050891', '1', '1194604063', '1194604063', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('deade9082bafe4076478b7b1e4b0d455', '1', '1194604152', '1194604152', '7f000001', '0', '0', '0', '', '', '0');
INSERT INTO nuke_bbsessions  VALUES ('ddde18bfa103907d77433ea56c6beae0', '1', '1194604154', '1194604154', '7f000001', '0', '0', '0', '', '', '0');

#
# Table structure for table 'nuke_bbsessions_keys'
#

DROP TABLE IF EXISTS nuke_bbsessions_keys;
CREATE TABLE nuke_bbsessions_keys (
   key_id varchar(32) DEFAULT '0' NOT NULL,
   user_id mediumint(8) DEFAULT '0' NOT NULL,
   last_ip varchar(8) DEFAULT '0' NOT NULL,
   last_login int(11) DEFAULT '0' NOT NULL,
   PRIMARY KEY (key_id, user_id),
   KEY last_login (last_login)
);


#
# Dumping data for table 'nuke_bbsessions_keys'
#


#
# Table structure for table 'nuke_bbsmilies'
#

DROP TABLE IF EXISTS nuke_bbsmilies;
CREATE TABLE nuke_bbsmilies (
   smilies_id smallint(5) unsigned NOT NULL auto_increment,
   code varchar(50),
   smile_url varchar(100),
   emoticon varchar(75),
   smile_stat mediumint(8) unsigned DEFAULT '0' NOT NULL,
   PRIMARY KEY (smilies_id)
);


#
# Dumping data for table 'nuke_bbsmilies'
#

INSERT INTO nuke_bbsmilies  VALUES ('1', ':D', 'icon_biggrin.gif', 'Nagyon boldog', '0');
INSERT INTO nuke_bbsmilies  VALUES ('2', ':-D', 'icon_biggrin.gif', 'Nagyon boldog', '0');
INSERT INTO nuke_bbsmilies  VALUES ('3', ':grin:', 'icon_biggrin.gif', 'Nagyon boldog', '0');
INSERT INTO nuke_bbsmilies  VALUES ('4', ':)', 'icon_smile.gif', 'Mosoly', '0');
INSERT INTO nuke_bbsmilies  VALUES ('5', ':-)', 'icon_smile.gif', 'Mosoly', '0');
INSERT INTO nuke_bbsmilies  VALUES ('6', ':smile:', 'icon_smile.gif', 'Mosoly', '0');
INSERT INTO nuke_bbsmilies  VALUES ('7', ':(', 'icon_sad.gif', 'Szomorú', '0');
INSERT INTO nuke_bbsmilies  VALUES ('8', ':-(', 'icon_sad.gif', 'Szomorú', '0');
INSERT INTO nuke_bbsmilies  VALUES ('9', ':sad:', 'icon_sad.gif', 'Szomorú', '0');
INSERT INTO nuke_bbsmilies  VALUES ('10', ':o', 'icon_surprised.gif', 'Csodálkozó', '0');
INSERT INTO nuke_bbsmilies  VALUES ('11', ':-o', 'icon_surprised.gif', 'Csodálkozó', '0');
INSERT INTO nuke_bbsmilies  VALUES ('12', ':eek:', 'icon_surprised.gif', 'Csodálkozó', '0');
INSERT INTO nuke_bbsmilies  VALUES ('13', '8O', 'icon_eek.gif', 'Sokkolt', '0');
INSERT INTO nuke_bbsmilies  VALUES ('14', '8-O', 'icon_eek.gif', 'Sokkolt', '0');
INSERT INTO nuke_bbsmilies  VALUES ('15', ':shock:', 'icon_eek.gif', 'Sokkolt', '0');
INSERT INTO nuke_bbsmilies  VALUES ('16', ':?', 'icon_confused.gif', 'Zavart', '0');
INSERT INTO nuke_bbsmilies  VALUES ('17', ':-?', 'icon_confused.gif', 'Zavart', '0');
INSERT INTO nuke_bbsmilies  VALUES ('18', ':???:', 'icon_confused.gif', 'Zavart', '0');
INSERT INTO nuke_bbsmilies  VALUES ('19', '8)', 'icon_cool.gif', 'Laza', '0');
INSERT INTO nuke_bbsmilies  VALUES ('20', '8-)', 'icon_cool.gif', 'Laza', '0');
INSERT INTO nuke_bbsmilies  VALUES ('21', ':cool:', 'icon_cool.gif', 'Laza', '0');
INSERT INTO nuke_bbsmilies  VALUES ('22', ':lol:', 'icon_lol.gif', 'Neveto', '0');
INSERT INTO nuke_bbsmilies  VALUES ('23', ':x', 'icon_mad.gif', 'Orült', '0');
INSERT INTO nuke_bbsmilies  VALUES ('24', ':-x', 'icon_mad.gif', 'Orült', '0');
INSERT INTO nuke_bbsmilies  VALUES ('25', ':mad:', 'icon_mad.gif', 'Orült', '0');
INSERT INTO nuke_bbsmilies  VALUES ('26', ':P', 'icon_razz.gif', 'Vicces', '0');
INSERT INTO nuke_bbsmilies  VALUES ('27', ':-P', 'icon_razz.gif', 'Vicces', '0');
INSERT INTO nuke_bbsmilies  VALUES ('28', ':razz:', 'icon_razz.gif', 'Vicces', '0');
INSERT INTO nuke_bbsmilies  VALUES ('29', ':oops:', 'icon_redface.gif', 'Zavarban levo', '0');
INSERT INTO nuke_bbsmilies  VALUES ('30', ':cry:', 'icon_cry.gif', 'Síró vagy nagyon szomorú', '0');
INSERT INTO nuke_bbsmilies  VALUES ('31', ':evil:', 'icon_evil.gif', 'Evil or Very Mad', '0');
INSERT INTO nuke_bbsmilies  VALUES ('32', ':twisted:', 'icon_twisted.gif', 'Twisted Evil', '0');
INSERT INTO nuke_bbsmilies  VALUES ('33', ':roll:', 'icon_rolleyes.gif', 'Rolling Eyes', '0');
INSERT INTO nuke_bbsmilies  VALUES ('34', ':wink:', 'icon_wink.gif', 'Wink', '0');
INSERT INTO nuke_bbsmilies  VALUES ('35', ';)', 'icon_wink.gif', 'Wink', '0');
INSERT INTO nuke_bbsmilies  VALUES ('36', ';-)', 'icon_wink.gif', 'Wink', '0');
INSERT INTO nuke_bbsmilies  VALUES ('37', ':!:', 'icon_exclaim.gif', 'Exclamation', '0');
INSERT INTO nuke_bbsmilies  VALUES ('38', ':?:', 'icon_question.gif', 'Question', '0');
INSERT INTO nuke_bbsmilies  VALUES ('39', ':idea:', 'icon_idea.gif', 'Idea', '0');
INSERT INTO nuke_bbsmilies  VALUES ('40', ':arrow:', 'icon_arrow.gif', 'Arrow', '0');
INSERT INTO nuke_bbsmilies  VALUES ('41', ':|', 'icon_neutral.gif', 'Neutral', '0');
INSERT INTO nuke_bbsmilies  VALUES ('42', ':-|', 'icon_neutral.gif', 'Neutral', '0');
INSERT INTO nuke_bbsmilies  VALUES ('43', ':neutral:', 'icon_neutral.gif', 'Neutral', '0');
INSERT INTO nuke_bbsmilies  VALUES ('44', ':mrgreen:', 'icon_mrgreen.gif', 'Mr. Green', '0');

#
# Table structure for table 'nuke_bbstats_config'
#

DROP TABLE IF EXISTS nuke_bbstats_config;
CREATE TABLE nuke_bbstats_config (
   config_name varchar(100) NOT NULL,
   config_value varchar(100) NOT NULL,
   PRIMARY KEY (config_name)
);


#
# Dumping data for table 'nuke_bbstats_config'
#

INSERT INTO nuke_bbstats_config  VALUES ('install_date', '0');
INSERT INTO nuke_bbstats_config  VALUES ('return_limit', '10');
INSERT INTO nuke_bbstats_config  VALUES ('version', '3.0.0');
INSERT INTO nuke_bbstats_config  VALUES ('page_views', '0');

#
# Table structure for table 'nuke_bbstats_module_admin_panel'
#

DROP TABLE IF EXISTS nuke_bbstats_module_admin_panel;
CREATE TABLE nuke_bbstats_module_admin_panel (
   module_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   config_name varchar(255) NOT NULL,
   config_value varchar(255) NOT NULL,
   config_type varchar(20) NOT NULL,
   config_title varchar(100) NOT NULL,
   config_explain varchar(100),
   config_trigger varchar(20) NOT NULL,
   PRIMARY KEY (module_id)
);


#
# Dumping data for table 'nuke_bbstats_module_admin_panel'
#

INSERT INTO nuke_bbstats_module_admin_panel  VALUES ('1', 'num_columns', '2', 'number', 'num_columns_title', 'num_columns_explain', 'integer');
INSERT INTO nuke_bbstats_module_admin_panel  VALUES ('15', 'exclude_images', '0', 'number', 'exclude_images_title', 'exclude_images_explain', 'enum');

#
# Table structure for table 'nuke_bbstats_module_cache'
#

DROP TABLE IF EXISTS nuke_bbstats_module_cache;
CREATE TABLE nuke_bbstats_module_cache (
   module_id mediumint(8) DEFAULT '0' NOT NULL,
   module_cache_time int(12) DEFAULT '0' NOT NULL,
   db_cache text NOT NULL,
   priority mediumint(8) unsigned DEFAULT '0' NOT NULL,
   PRIMARY KEY (module_id)
);


#
# Dumping data for table 'nuke_bbstats_module_cache'
#


#
# Table structure for table 'nuke_bbstats_module_group_auth'
#

DROP TABLE IF EXISTS nuke_bbstats_module_group_auth;
CREATE TABLE nuke_bbstats_module_group_auth (
   module_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   group_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   PRIMARY KEY (module_id)
);


#
# Dumping data for table 'nuke_bbstats_module_group_auth'
#


#
# Table structure for table 'nuke_bbstats_module_info'
#

DROP TABLE IF EXISTS nuke_bbstats_module_info;
CREATE TABLE nuke_bbstats_module_info (
   module_id mediumint(8) DEFAULT '0' NOT NULL,
   long_name varchar(100) NOT NULL,
   author varchar(50),
   email varchar(50),
   url varchar(100),
   version varchar(10) NOT NULL,
   update_site varchar(100),
   extra_info varchar(255) NOT NULL,
   PRIMARY KEY (module_id)
);


#
# Dumping data for table 'nuke_bbstats_module_info'
#

INSERT INTO nuke_bbstats_module_info  VALUES ('1', 'Statistics Overview Section', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will print out a link Block with Links to the current Module at the Statistics Site.\nYou are able to define the number of columns displayed for this Module within the Administration Panel -&gt; Edit Module.');
INSERT INTO nuke_bbstats_module_info  VALUES ('2', 'Top Posters', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the Top Posters from your board.\nAnonymous Poster are not counted.');
INSERT INTO nuke_bbstats_module_info  VALUES ('3', 'Administrative Statistics', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays some Admin Statistics about your Board.\nIt is nearly the same you are able to see within the first Administration Panel visit.');
INSERT INTO nuke_bbstats_module_info  VALUES ('4', 'Most viewed topics', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the most viewed topics at your board.');
INSERT INTO nuke_bbstats_module_info  VALUES ('5', 'Top Posters this Month (Site History Mod)', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module does NOT require the Site History Mod,\nit will display the Top Posters on a Monthly basis.');
INSERT INTO nuke_bbstats_module_info  VALUES ('6', 'New topics by month', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will display the topics created at your Board in a monthly statistic.');
INSERT INTO nuke_bbstats_module_info  VALUES ('7', 'Most Interesting Topics', 'JRSweets', 'JRSweets@gmail.com', 'http://www.jeffrusso.net', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This module will show the most intresting topics.');
INSERT INTO nuke_bbstats_module_info  VALUES ('8', 'Top Words', 'JRSweets', 'JRSweets@gmail.com', 'http://www.jeffrusso.net', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the most used words on your board.');
INSERT INTO nuke_bbstats_module_info  VALUES ('9', 'Least Interesting Topics', 'JRSweets', 'JRSweets@gmail.com', 'http://www.jeffrusso.net', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This module will show the least intresting topics.');
INSERT INTO nuke_bbstats_module_info  VALUES ('10', 'Most Active Topicstarter', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the most active topicstarter on your board.\nAnonymous Poster are not counted.');
INSERT INTO nuke_bbstats_module_info  VALUES ('11', 'Top Smilies', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the Top Smilies used at your board.\nThis Module uses an Smilie Index Table for caching the smilie data and to not\nrequire re-indexing of all posts.');
INSERT INTO nuke_bbstats_module_info  VALUES ('12', 'New users by month', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will display the users registered to your Board in a monthly statistic.');
INSERT INTO nuke_bbstats_module_info  VALUES ('13', 'New posts by month', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will display the posts created at your Board in a monthly statistic.');
INSERT INTO nuke_bbstats_module_info  VALUES ('14', 'Top Posters this Week (Site History Mod)', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module does NOT require the Site History Mod,\nit will display the Top Posters on a Weekly basis.');
INSERT INTO nuke_bbstats_module_info  VALUES ('15', 'Top Downloaded Attachments', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module will print out the most downloaded Files.\nThe Attachment Mod Version 2.3.x have to be installed in order to let this Module work.\nYou are able to exclude Images from the statistic too.');
INSERT INTO nuke_bbstats_module_info  VALUES ('16', 'Most active Topics', 'Acyd Burn', 'acyd.burn@gmx.de', 'http://www.opentools.de', '3.0.0', 'http://www.opentools.de/board/show_modules.php', 'This Module displays the most active topics at your board.');

#
# Table structure for table 'nuke_bbstats_modules'
#

DROP TABLE IF EXISTS nuke_bbstats_modules;
CREATE TABLE nuke_bbstats_modules (
   module_id mediumint(8) unsigned NOT NULL auto_increment,
   short_name varchar(100),
   update_time mediumint(8) DEFAULT '0' NOT NULL,
   module_order mediumint(8) DEFAULT '0' NOT NULL,
   active tinyint(2) DEFAULT '0' NOT NULL,
   perm_all tinyint(2) unsigned DEFAULT '1' NOT NULL,
   perm_reg tinyint(2) unsigned DEFAULT '1' NOT NULL,
   perm_mod tinyint(2) unsigned DEFAULT '1' NOT NULL,
   perm_admin tinyint(2) unsigned DEFAULT '1' NOT NULL,
   PRIMARY KEY (module_id)
);


#
# Dumping data for table 'nuke_bbstats_modules'
#

INSERT INTO nuke_bbstats_modules  VALUES ('1', 'stats_overview', '360', '10', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('2', 'top_posters', '360', '30', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('3', 'admin_statistics', '360', '20', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('4', 'most_viewed_topics', '360', '80', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('5', 'top_posters_month', '360', '60', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('6', 'topics_by_month', '360', '100', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('7', 'most_interesting_topics', '360', '120', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('8', 'top_words', '360', '90', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('9', 'least_interesting_topics', '360', '130', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('10', 'most_active_topicstarter', '360', '40', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('11', 'top_smilies', '0', '110', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('12', 'users_by_month', '360', '140', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('13', 'posts_by_month', '360', '150', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('14', 'top_posters_week', '360', '50', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('15', 'top_attachments', '360', '160', '1', '1', '1', '1', '1');
INSERT INTO nuke_bbstats_modules  VALUES ('16', 'most_active_topics', '360', '70', '1', '1', '1', '1', '1');

#
# Table structure for table 'nuke_bbstats_smilies_index'
#

DROP TABLE IF EXISTS nuke_bbstats_smilies_index;
CREATE TABLE nuke_bbstats_smilies_index (
   code varchar(50) NOT NULL,
   smile_url varchar(100),
   smile_count mediumint(8) DEFAULT '0',
   PRIMARY KEY (code)
);


#
# Dumping data for table 'nuke_bbstats_smilies_index'
#


#
# Table structure for table 'nuke_bbstats_smilies_info'
#

DROP TABLE IF EXISTS nuke_bbstats_smilies_info;
CREATE TABLE nuke_bbstats_smilies_info (
   last_post_id mediumint(8) DEFAULT '0' NOT NULL,
   last_update_time int(12) DEFAULT '0' NOT NULL,
   update_time mediumint(8) DEFAULT '10080' NOT NULL,
   PRIMARY KEY (last_post_id)
);


#
# Dumping data for table 'nuke_bbstats_smilies_info'
#

INSERT INTO nuke_bbstats_smilies_info  VALUES ('0', '0', '10080');

#
# Table structure for table 'nuke_bbthemes'
#

DROP TABLE IF EXISTS nuke_bbthemes;
CREATE TABLE nuke_bbthemes (
   themes_id mediumint(8) unsigned NOT NULL auto_increment,
   template_name varchar(30) NOT NULL,
   style_name varchar(30) NOT NULL,
   head_stylesheet varchar(100),
   body_background varchar(100),
   body_bgcolor varchar(6),
   body_text varchar(6),
   body_link varchar(6),
   body_vlink varchar(6),
   body_alink varchar(6),
   body_hlink varchar(6),
   tr_color1 varchar(6),
   tr_color2 varchar(6),
   tr_color3 varchar(6),
   tr_class1 varchar(25),
   tr_class2 varchar(25),
   tr_class3 varchar(25),
   th_color1 varchar(6),
   th_color2 varchar(6),
   th_color3 varchar(6),
   th_class1 varchar(25),
   th_class2 varchar(25),
   th_class3 varchar(25),
   td_color1 varchar(6),
   td_color2 varchar(6),
   td_color3 varchar(6),
   td_class1 varchar(25),
   td_class2 varchar(25),
   td_class3 varchar(25),
   fontface1 varchar(50),
   fontface2 varchar(50),
   fontface3 varchar(50),
   fontsize1 tinyint(4),
   fontsize2 tinyint(4),
   fontsize3 tinyint(4),
   fontcolor1 varchar(6),
   fontcolor2 varchar(6),
   fontcolor3 varchar(6),
   span_class1 varchar(25),
   span_class2 varchar(25),
   span_class3 varchar(25),
   img_size_poll smallint(5) unsigned,
   img_size_privmsg smallint(5) unsigned,
   online_color varchar(6) NOT NULL,
   offline_color varchar(6) NOT NULL,
   hidden_color varchar(6) NOT NULL,
   PRIMARY KEY (themes_id)
);


#
# Dumping data for table 'nuke_bbthemes'
#

INSERT INTO nuke_bbthemes  VALUES ('1', 'subSilver', 'subSilver', 'subSilver.css', '', '0E3259', '000000', '006699', '5493B4', '', 'DD6900', 'EFEFEF', 'DEE3E7', 'D1D7DC', '', '', '', '98AAB1', '006699', 'FFFFFF', 'cellpic1.gif', 'cellpic3.gif', 'cellpic2.jpg', 'FAFAFA', 'FFFFFF', '', 'row1', 'row2', '', 'Verdana, Arial, Helvetica, sans-serif', 'Trebuchet MS', 'Courier, \'Courier New\', sans-serif', '10', '11', '12', '444444', '006600', 'FFA34F', '', '', '', NULL, NULL, '008500', 'DF0000', 'EBD400');

#
# Table structure for table 'nuke_bbthemes_name'
#

DROP TABLE IF EXISTS nuke_bbthemes_name;
CREATE TABLE nuke_bbthemes_name (
   themes_id smallint(5) unsigned DEFAULT '0' NOT NULL,
   tr_color1_name char(50),
   tr_color2_name char(50),
   tr_color3_name char(50),
   tr_class1_name char(50),
   tr_class2_name char(50),
   tr_class3_name char(50),
   th_color1_name char(50),
   th_color2_name char(50),
   th_color3_name char(50),
   th_class1_name char(50),
   th_class2_name char(50),
   th_class3_name char(50),
   td_color1_name char(50),
   td_color2_name char(50),
   td_color3_name char(50),
   td_class1_name char(50),
   td_class2_name char(50),
   td_class3_name char(50),
   fontface1_name char(50),
   fontface2_name char(50),
   fontface3_name char(50),
   fontsize1_name char(50),
   fontsize2_name char(50),
   fontsize3_name char(50),
   fontcolor1_name char(50),
   fontcolor2_name char(50),
   fontcolor3_name char(50),
   span_class1_name char(50),
   span_class2_name char(50),
   span_class3_name char(50),
   PRIMARY KEY (themes_id)
);


#
# Dumping data for table 'nuke_bbthemes_name'
#

INSERT INTO nuke_bbthemes_name  VALUES ('1', 'Világos sorszín', 'Közepes sorszín', 'Sötét sorszín', '', '', '', 'Oldalszegély', 'Külso táblázatszegély', 'Belso táblázatszegély', 'Szürke átmenet', 'Kék átmenet', 'Halványodó átmenet a fooldalon', 'Idézetek szegélye', 'Fehér területek', '', 'Hozzászólások háttere 1', 'Hozzászólások háttere 2', '', 'Alap betuk', 'Témák címének betui', 'Urlapok betui', 'Kis betuk', 'Közepes betuk', 'Normál betuk (pl. szövegtörzs)', 'Idézetek és szerzoi jogi szöveg betui', 'Kódok betui', 'Táblázatfejléc színe', '', '', '');

#
# Table structure for table 'nuke_bbtopic_add_type'
#

DROP TABLE IF EXISTS nuke_bbtopic_add_type;
CREATE TABLE nuke_bbtopic_add_type (
   topic_type_name varchar(64) NOT NULL,
   topic_type_id tinyint(4) DEFAULT '0' NOT NULL,
   topic_type_auth tinyint(1) DEFAULT '-1' NOT NULL,
   topic_type_active tinyint(1) DEFAULT '0' NOT NULL,
   topic_type_order tinyint(3) DEFAULT '0' NOT NULL,
   topic_type_color varchar(6) DEFAULT '0' NOT NULL,
   topic_type_image varchar(255),
   topic_type_image_new varchar(255)
);


#
# Dumping data for table 'nuke_bbtopic_add_type'
#

INSERT INTO nuke_bbtopic_add_type  VALUES ('announce', '0', '-1', '0', '-1', 'FF0000', '', '');
INSERT INTO nuke_bbtopic_add_type  VALUES ('sticky', '0', '-1', '0', '-1', 'FAD400', '', '');
INSERT INTO nuke_bbtopic_add_type  VALUES ('global', '0', '-1', '0', '-1', 'FFD015', '', '');

#
# Table structure for table 'nuke_bbtopic_moved'
#

DROP TABLE IF EXISTS nuke_bbtopic_moved;
CREATE TABLE nuke_bbtopic_moved (
   moved_id mediumint(8) unsigned NOT NULL auto_increment,
   moved_topic_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   moved_oldtopic_id mediumint(8) unsigned DEFAULT '0',
   moved_type varchar(8) DEFAULT '0' NOT NULL,
   moved_parent mediumint(8) unsigned DEFAULT '0',
   moved_target mediumint(8) unsigned DEFAULT '0',
   moved_mod mediumint(8) DEFAULT '0' NOT NULL,
   moved_time int(11) DEFAULT '0' NOT NULL,
   last_post_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   PRIMARY KEY (moved_id)
);


#
# Dumping data for table 'nuke_bbtopic_moved'
#


#
# Table structure for table 'nuke_bbtopics'
#

DROP TABLE IF EXISTS nuke_bbtopics;
CREATE TABLE nuke_bbtopics (
   topic_id mediumint(8) unsigned NOT NULL auto_increment,
   forum_id smallint(8) unsigned DEFAULT '0' NOT NULL,
   topic_title char(60) NOT NULL,
   topic_poster mediumint(8) DEFAULT '0' NOT NULL,
   topic_time int(11) DEFAULT '0' NOT NULL,
   topic_views mediumint(8) unsigned DEFAULT '0' NOT NULL,
   topic_replies mediumint(8) unsigned DEFAULT '0' NOT NULL,
   topic_status tinyint(3) DEFAULT '0' NOT NULL,
   topic_vote tinyint(1) DEFAULT '0' NOT NULL,
   topic_type tinyint(3) DEFAULT '0' NOT NULL,
   topic_type_active tinyint(1) DEFAULT '0' NOT NULL,
   topic_last_post_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   topic_first_post_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   topic_moved_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   topic_priority smallint(6) DEFAULT '0' NOT NULL,
   topic_attachment tinyint(1) DEFAULT '0' NOT NULL,
   topic_glance_priority smallint(6) DEFAULT '0' NOT NULL,
   PRIMARY KEY (topic_id),
   KEY forum_id (forum_id),
   KEY topic_moved_id (topic_moved_id),
   KEY topic_status (topic_status),
   KEY topic_type (topic_type)
);


#
# Dumping data for table 'nuke_bbtopics'
#

INSERT INTO nuke_bbtopics  VALUES ('1', '1', 'Üdvözöl a  Nuke-Evolution!', '2', '1125188724', '10', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', '0');

#
# Table structure for table 'nuke_bbtopics_watch'
#

DROP TABLE IF EXISTS nuke_bbtopics_watch;
CREATE TABLE nuke_bbtopics_watch (
   topic_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   user_id mediumint(8) DEFAULT '0' NOT NULL,
   notify_status tinyint(1) DEFAULT '0' NOT NULL,
   KEY topic_id (topic_id),
   KEY user_id (user_id),
   KEY notify_status (notify_status)
);


#
# Dumping data for table 'nuke_bbtopics_watch'
#


#
# Table structure for table 'nuke_bbuser_group'
#

DROP TABLE IF EXISTS nuke_bbuser_group;
CREATE TABLE nuke_bbuser_group (
   group_id mediumint(8) DEFAULT '0' NOT NULL,
   user_id mediumint(8) DEFAULT '0' NOT NULL,
   user_pending tinyint(1),
   KEY group_id (group_id),
   KEY user_id (user_id)
);


#
# Dumping data for table 'nuke_bbuser_group'
#

INSERT INTO nuke_bbuser_group  VALUES ('1', '-1', '0');
INSERT INTO nuke_bbuser_group  VALUES ('3', '2', '0');
INSERT INTO nuke_bbuser_group  VALUES ('5', '2', '0');

#
# Table structure for table 'nuke_bbvote_desc'
#

DROP TABLE IF EXISTS nuke_bbvote_desc;
CREATE TABLE nuke_bbvote_desc (
   vote_id mediumint(8) unsigned NOT NULL auto_increment,
   topic_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   vote_text text NOT NULL,
   vote_start int(11) DEFAULT '0' NOT NULL,
   vote_length int(11) DEFAULT '0' NOT NULL,
   poll_view_toggle tinyint(1) DEFAULT '0' NOT NULL,
   PRIMARY KEY (vote_id),
   KEY topic_id (topic_id)
);


#
# Dumping data for table 'nuke_bbvote_desc'
#


#
# Table structure for table 'nuke_bbvote_results'
#

DROP TABLE IF EXISTS nuke_bbvote_results;
CREATE TABLE nuke_bbvote_results (
   vote_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   vote_option_id tinyint(4) unsigned DEFAULT '0' NOT NULL,
   vote_option_text varchar(255) NOT NULL,
   vote_result int(11) DEFAULT '0' NOT NULL,
   KEY vote_option_id (vote_option_id),
   KEY vote_id (vote_id)
);


#
# Dumping data for table 'nuke_bbvote_results'
#


#
# Table structure for table 'nuke_bbvote_voters'
#

DROP TABLE IF EXISTS nuke_bbvote_voters;
CREATE TABLE nuke_bbvote_voters (
   vote_id mediumint(8) unsigned DEFAULT '0' NOT NULL,
   vote_user_id mediumint(8) DEFAULT '0' NOT NULL,
   vote_user_ip char(8) NOT NULL,
   vote_cast tinyint(4) unsigned DEFAULT '0' NOT NULL,
   KEY vote_id (vote_id),
   KEY vote_user_id (vote_user_id),
   KEY vote_user_ip (vote_user_ip),
   KEY vote_cast (vote_cast)
);


#
# Dumping data for table 'nuke_bbvote_voters'
#


#
# Table structure for table 'nuke_bbwords'
#

DROP TABLE IF EXISTS nuke_bbwords;
CREATE TABLE nuke_bbwords (
   word_id mediumint(8) unsigned NOT NULL auto_increment,
   word char(100) NOT NULL,
   replacement char(100) NOT NULL,
   PRIMARY KEY (word_id)
);


#
# Dumping data for table 'nuke_bbwords'
#


#
# Table structure for table 'nuke_bbxdata_auth'
#

DROP TABLE IF EXISTS nuke_bbxdata_auth;
CREATE TABLE nuke_bbxdata_auth (
   field_id smallint(5) unsigned NOT NULL,
   group_id mediumint(8) unsigned NOT NULL,
   auth_value tinyint(1) NOT NULL
);


#
# Dumping data for table 'nuke_bbxdata_auth'
#


#
# Table structure for table 'nuke_bbxdata_data'
#

DROP TABLE IF EXISTS nuke_bbxdata_data;
CREATE TABLE nuke_bbxdata_data (
   field_id smallint(5) unsigned NOT NULL,
   user_id mediumint(8) unsigned NOT NULL,
   xdata_value text NOT NULL
);


#
# Dumping data for table 'nuke_bbxdata_data'
#


#
# Table structure for table 'nuke_bbxdata_fields'
#

DROP TABLE IF EXISTS nuke_bbxdata_fields;
CREATE TABLE nuke_bbxdata_fields (
   field_id smallint(5) unsigned NOT NULL,
   field_name varchar(255) NOT NULL,
   field_desc text NOT NULL,
   field_type varchar(255) NOT NULL,
   field_order smallint(5) unsigned DEFAULT '0' NOT NULL,
   code_name varchar(255) NOT NULL,
   field_length mediumint(8) unsigned DEFAULT '0' NOT NULL,
   field_values text NOT NULL,
   field_regexp text NOT NULL,
   manditory tinyint(1) DEFAULT '0' NOT NULL,
   default_auth tinyint(1) DEFAULT '1' NOT NULL,
   display_register tinyint(1) DEFAULT '1' NOT NULL,
   display_viewprofile tinyint(1) DEFAULT '0' NOT NULL,
   display_posting tinyint(1) DEFAULT '0' NOT NULL,
   handle_input tinyint(1) DEFAULT '0' NOT NULL,
   allow_html tinyint(1) DEFAULT '0' NOT NULL,
   allow_bbcode tinyint(1) DEFAULT '0' NOT NULL,
   allow_smilies tinyint(1) DEFAULT '0' NOT NULL,
   viewtopic tinyint(1) DEFAULT '0' NOT NULL,
   signup tinyint(1) DEFAULT '0' NOT NULL,
   PRIMARY KEY (field_id),
   UNIQUE code_name (code_name)
);


#
# Dumping data for table 'nuke_bbxdata_fields'
#

INSERT INTO nuke_bbxdata_fields  VALUES ('1', 'ICQ Number', '', 'special', '1', 'icq', '0', '', '', '0', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO nuke_bbxdata_fields  VALUES ('2', 'AIM Address', '', 'special', '2', 'aim', '0', '', '', '0', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO nuke_bbxdata_fields  VALUES ('3', 'MSN Messenger', '', 'special', '3', 'msn', '0', '', '', '0', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO nuke_bbxdata_fields  VALUES ('4', 'Yahoo Messenger', '', 'special', '4', 'yim', '0', '', '', '0', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO nuke_bbxdata_fields  VALUES ('5', 'Website', '', 'special', '5', 'website', '0', '', '', '0', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO nuke_bbxdata_fields  VALUES ('6', 'Location', '', 'special', '6', 'location', '0', '', '', '0', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO nuke_bbxdata_fields  VALUES ('7', 'Occupation', '', 'special', '7', 'occupation', '0', '', '', '0', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO nuke_bbxdata_fields  VALUES ('8', 'Interests', '', 'special', '8', 'interests', '0', '', '', '0', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO nuke_bbxdata_fields  VALUES ('9', 'Signature', '', 'special', '9', 'signature', '0', '', '', '0', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0');

#
# Table structure for table 'nuke_blocks'
#

DROP TABLE IF EXISTS nuke_blocks;
CREATE TABLE nuke_blocks (
   bid int(10) NOT NULL auto_increment,
   bkey varchar(15) NOT NULL,
   title varchar(60) NOT NULL,
   content text NOT NULL,
   url varchar(200) NOT NULL,
   bposition char(1) NOT NULL,
   weight int(10) DEFAULT '1' NOT NULL,
   active int(1) DEFAULT '1' NOT NULL,
   refresh int(10) DEFAULT '0' NOT NULL,
   time varchar(14) DEFAULT '0' NOT NULL,
   blanguage varchar(30) NOT NULL,
   blockfile varchar(255) NOT NULL,
   view varchar(50) DEFAULT '0' NOT NULL,
   PRIMARY KEY (bid),
   KEY title (title)
);


#
# Dumping data for table 'nuke_blocks'
#

INSERT INTO nuke_blocks  VALUES ('1', '', 'Navigáció', '', '', 'l', '0', '1', '0', '', '', 'block-Modules.php', '0');
INSERT INTO nuke_blocks  VALUES ('2', '', 'Adminisztráció', '', '', 'l', '1', '1', '0', '', '', 'block-Administration.php', '4');
INSERT INTO nuke_blocks  VALUES ('4', '', 'Szavazások', '', '', 'r', '2', '1', '3600', '', '', 'block-Survey.php', '0');
INSERT INTO nuke_blocks  VALUES ('5', '', 'Információ', '<br /><center><span class=\"content\">\r\n<a href=\"http://phpnuke.org\"><img src=\"images/powered/powered8.jpg\" border=\"0\" alt=\"Powered by PHP-Nuke\" title=\"Powered by PHP-Nuke\" width=\"88\" height=\"31\" /></a>\r\n<br /><br />\r\n<a href=\"http://validator.w3.org/check/referer\"><img src=\"images/html401.gif\" width=\"88\" height=\"31\" alt=\"Valid HTML 4.01!\" title=\"Valid HTML 4.01!\" border=\"0\" /></a>\r\n<br /><br />\r\n<a href=\"http://jigsaw.w3.org/css-validator\"><img src=\"images/css.gif\" width=\"88\" height=\"31\" alt=\"Valid CSS!\" title=\"Valid CSS!\" border=\"0\" /></a></span></center><br />', '', 'r', '3', '1', '0', '', '', '', '0');
INSERT INTO nuke_blocks  VALUES ('6', '', 'User Info', '', '', 'r', '1', '1', '1800', '0', '', 'block-User_Info.php', '1');
INSERT INTO nuke_blocks  VALUES ('7', '', 'Nuke-Evolution', '', '', 'c', '0', '1', '0', '', '', 'block-Nuke-Evolution.php', '0');
INSERT INTO nuke_blocks  VALUES ('8', '', 'Támadások Õre', '', '', 'l', '4', '1', '3600', '', '', 'block-Hacker_Beware2.php', '0');
INSERT INTO nuke_blocks  VALUES ('18', '', 'Dowmload Themes Center', '', '', 'd', '1', '1', '3600', '0', '', 'block-Random_Themes_Multi_Center.php', '1');
INSERT INTO nuke_blocks  VALUES ('11', '', 'Fórumok', '', '', 'c', '1', '1', '3600', '', '', 'block-Forums.php', '0');
INSERT INTO nuke_blocks  VALUES ('12', '', 'Értesítések', '', '', 'l', '2', '1', '0', '', '', 'block-Submissions.php', '4');
INSERT INTO nuke_blocks  VALUES ('13', '', 'Ajánjl Minket', '', '', 'l', '3', '1', '3600', '', '', 'block-Link_to_us.php', '0');
INSERT INTO nuke_blocks  VALUES ('14', '', 'Adományok', '', '', 'r', '0', '1', '3600', '0', '', 'block-Donations.php', '0');
INSERT INTO nuke_blocks  VALUES ('15', '', 'Service', '', '', 'd', '0', '1', '3600', '0', '', 'block-Service.php', '1');

#
# Table structure for table 'nuke_cnbya_config'
#

DROP TABLE IF EXISTS nuke_cnbya_config;
CREATE TABLE nuke_cnbya_config (
   config_name varchar(255) NOT NULL,
   config_value longtext,
   UNIQUE config_name (config_name)
);


#
# Dumping data for table 'nuke_cnbya_config'
#

INSERT INTO nuke_cnbya_config  VALUES ('sendaddmail', '0');
INSERT INTO nuke_cnbya_config  VALUES ('senddeletemail', '0');
INSERT INTO nuke_cnbya_config  VALUES ('allowuserdelete', '0');
INSERT INTO nuke_cnbya_config  VALUES ('allowusertheme', '0');
INSERT INTO nuke_cnbya_config  VALUES ('allowuserreg', '0');
INSERT INTO nuke_cnbya_config  VALUES ('allowmailchange', '1');
INSERT INTO nuke_cnbya_config  VALUES ('emailvalidate', '0');
INSERT INTO nuke_cnbya_config  VALUES ('requireadmin', '0');
INSERT INTO nuke_cnbya_config  VALUES ('servermail', '0');
INSERT INTO nuke_cnbya_config  VALUES ('useactivate', '1');
INSERT INTO nuke_cnbya_config  VALUES ('autosuspend', '0');
INSERT INTO nuke_cnbya_config  VALUES ('perpage', '100');
INSERT INTO nuke_cnbya_config  VALUES ('expiring', '86400');
INSERT INTO nuke_cnbya_config  VALUES ('nick_min', '4');
INSERT INTO nuke_cnbya_config  VALUES ('nick_max', '20');
INSERT INTO nuke_cnbya_config  VALUES ('pass_min', '4');
INSERT INTO nuke_cnbya_config  VALUES ('pass_max', '20');
INSERT INTO nuke_cnbya_config  VALUES ('bad_mail', 'evodesign.hu\r\nmysite.com\r\nyoursite.com');
INSERT INTO nuke_cnbya_config  VALUES ('bad_nick', 'adm\r\nadmin\r\nannimo\r\nanonimo\r\nanonymous\r\ndragon\r\nflashzene\r\ngod\r\nlinux\r\nnobody\r\noperator\r\npredikator\r\nroot\r\nstaff\r\nwebmaster');
INSERT INTO nuke_cnbya_config  VALUES ('coppa', '0');
INSERT INTO nuke_cnbya_config  VALUES ('tos', '0');
INSERT INTO nuke_cnbya_config  VALUES ('tosall', '1');
INSERT INTO nuke_cnbya_config  VALUES ('cookiecheck', '1');
INSERT INTO nuke_cnbya_config  VALUES ('cookiecleaner', '1');
INSERT INTO nuke_cnbya_config  VALUES ('cookietimelife', '2592000');
INSERT INTO nuke_cnbya_config  VALUES ('cookiepath', '');
INSERT INTO nuke_cnbya_config  VALUES ('cookieinactivity', '-');
INSERT INTO nuke_cnbya_config  VALUES ('autosuspendmain', '0');
INSERT INTO nuke_cnbya_config  VALUES ('doublecheckemail', '0');
INSERT INTO nuke_cnbya_config  VALUES ('version', '4.4.2');
INSERT INTO nuke_cnbya_config  VALUES ('tos_text', 'This is your default TOS. You may edit this through the Your Account Admin Panel.');

#
# Table structure for table 'nuke_cnbya_field'
#

DROP TABLE IF EXISTS nuke_cnbya_field;
CREATE TABLE nuke_cnbya_field (
   fid int(10) NOT NULL auto_increment,
   name varchar(255) DEFAULT 'field' NOT NULL,
   value varchar(255),
   size int(3),
   need int(1) DEFAULT '1' NOT NULL,
   pos int(3),
   public int(1) DEFAULT '1' NOT NULL,
   PRIMARY KEY (fid)
);


#
# Dumping data for table 'nuke_cnbya_field'
#


#
# Table structure for table 'nuke_cnbya_value'
#

DROP TABLE IF EXISTS nuke_cnbya_value;
CREATE TABLE nuke_cnbya_value (
   vid int(10) NOT NULL auto_increment,
   uid int(10) DEFAULT '0' NOT NULL,
   fid int(10) DEFAULT '0' NOT NULL,
   value varchar(255),
   PRIMARY KEY (vid)
);


#
# Dumping data for table 'nuke_cnbya_value'
#


#
# Table structure for table 'nuke_cnbya_value_temp'
#

DROP TABLE IF EXISTS nuke_cnbya_value_temp;
CREATE TABLE nuke_cnbya_value_temp (
   vid int(10) NOT NULL auto_increment,
   uid int(10) DEFAULT '0' NOT NULL,
   fid int(10) DEFAULT '0' NOT NULL,
   value varchar(255),
   PRIMARY KEY (vid)
);


#
# Dumping data for table 'nuke_cnbya_value_temp'
#


#
# Table structure for table 'nuke_comments'
#

DROP TABLE IF EXISTS nuke_comments;
CREATE TABLE nuke_comments (
   tid int(11) NOT NULL auto_increment,
   pid int(11) DEFAULT '0' NOT NULL,
   sid int(11) DEFAULT '0' NOT NULL,
   date datetime,
   name varchar(60) NOT NULL,
   email varchar(60),
   url varchar(60),
   host_name varchar(60),
   subject varchar(85) NOT NULL,
   comment text NOT NULL,
   score tinyint(4) DEFAULT '0' NOT NULL,
   reason tinyint(4) DEFAULT '0' NOT NULL,
   PRIMARY KEY (tid),
   KEY pid (pid),
   KEY sid (sid)
);


#
# Dumping data for table 'nuke_comments'
#


#
# Table structure for table 'nuke_config'
#

DROP TABLE IF EXISTS nuke_config;
CREATE TABLE nuke_config (
   sitename varchar(255) NOT NULL,
   nukeurl varchar(255) NOT NULL,
   site_logo varchar(255) NOT NULL,
   slogan varchar(255) NOT NULL,
   startdate varchar(50) NOT NULL,
   adminmail varchar(255) NOT NULL,
   anonpost tinyint(1) DEFAULT '0' NOT NULL,
   default_Theme varchar(255) NOT NULL,
   foot1 text NOT NULL,
   foot2 text NOT NULL,
   foot3 text NOT NULL,
   commentlimit int(9) DEFAULT '4096' NOT NULL,
   anonymous varchar(255) NOT NULL,
   minpass tinyint(1) DEFAULT '5' NOT NULL,
   pollcomm tinyint(1) DEFAULT '1' NOT NULL,
   articlecomm tinyint(1) DEFAULT '1' NOT NULL,
   broadcast_msg tinyint(1) DEFAULT '1' NOT NULL,
   my_headlines tinyint(1) DEFAULT '1' NOT NULL,
   top int(3) DEFAULT '10' NOT NULL,
   storyhome int(2) DEFAULT '10' NOT NULL,
   user_news tinyint(1) DEFAULT '1' NOT NULL,
   oldnum int(2) DEFAULT '30' NOT NULL,
   ultramode tinyint(1) DEFAULT '0' NOT NULL,
   banners tinyint(1) DEFAULT '1' NOT NULL,
   backend_title varchar(255) NOT NULL,
   backend_language varchar(10) NOT NULL,
   language varchar(100) NOT NULL,
   locale varchar(10) NOT NULL,
   multilingual tinyint(1) DEFAULT '0' NOT NULL,
   useflags tinyint(1) DEFAULT '0' NOT NULL,
   notify tinyint(1) DEFAULT '0' NOT NULL,
   notify_email varchar(255) NOT NULL,
   notify_subject varchar(255) NOT NULL,
   notify_message varchar(255) NOT NULL,
   notify_from varchar(255) NOT NULL,
   moderate tinyint(1) DEFAULT '0' NOT NULL,
   admingraphic tinyint(1) DEFAULT '1' NOT NULL,
   httpref tinyint(1) DEFAULT '1' NOT NULL,
   httprefmax int(5) DEFAULT '1000' NOT NULL,
   CensorMode tinyint(1) DEFAULT '3' NOT NULL,
   CensorReplace varchar(10) NOT NULL,
   copyright text NOT NULL,
   Version_Num varchar(10) NOT NULL,
   admin_pos tinyint(1) DEFAULT '1' NOT NULL,
   admin_log_lines int(11) DEFAULT '0' NOT NULL,
   error_log_lines int(11) DEFAULT '0' NOT NULL,
   cache_data mediumblob NOT NULL,
   PRIMARY KEY (sitename)
);


#
# Dumping data for table 'nuke_config'
#

INSERT INTO nuke_config  VALUES ('Evo-Hungary', 'http://www.evo-hungary.hu', 'logo.gif', 'Evolution-Revolution', 'Oktober 2007', 'admin@teoldalad.hu', '0', 'MG-gs101', '<a href=\"modules.php?name=Spambot_Killer\" target=\"_blank\">Kéretlen Levélszürö aktiv</a><br /><a href=\"modules.php?name=Site_Map\" target=\"_blank\"><strong>Oldal Térkép</strong></a><br />', '<a href=\"rss.php?feed=news\" target=\"_blank\"><img border=\"0\" src=\"images/powered/feed_20_news.png\" width=\"94\" height=\"15\" alt=\"[News Feed]\" title=\"News Feed\" /></a> <a href=\"rss.php?feed=forums\" target=\"_blank\"><img border=\"0\" src=\"images/powered/feed_20_forums.png\" width=\"94\" height=\"15\" alt=\"[Forums Feed]\" title=\"Forums Feed\" /></a> <a href=\"rss.php?feed=downloads\" target=\"_blank\" /><img border=\"0\" src=\"images/powered/feed_20_down.png\" width=\"94\" height=\"15\" alt=\"[Downloads Feed]\" title=\"Downloads Feed\" /></a> <a href=\"rss.php?feed=weblinks\" target=\"_blank\"><img border=\"0\" src=\"images/powered/feed_20_links.png\" width=\"94\" height=\"15\" alt=\"[Web Links Feed]\" title=\"Web Links Feed\" /></a> <a href=\"http://tool.motoricerca.info/robots-checker.phtml?checkreferer=1\" target=\"_blank\"><img border=\"0\" src=\"images/powered/valid-robots.png\" width=\"80\" height=\"15\" alt=\"[Validate robots.txt]\" title=\"Validate robots.txt\" /></a><br />', '', '4096', 'Visitor', '5', '0', '0', '1', '1', '10', '10', '1', '30', '1', '1', 'Revolution', 'hu-hu', 'hungarian', 'hu_HU', '1', '1', '0', 'admin@teoldalad.hu', 'Hírek az oldaladról', 'Helo! Hírek érkezett az oldaladra.', 'webmester', '0', '1', '1', '1000', '3', '*****', 'PHP-Nuke Copyright &copy; 2007 by Francisco Burzi.<br />Powered by <a href=\"http://www.nuke-evolution.com\" target=\"_blank\"><b>Nuke-Evolution</b></a>.<br /><br>Ez a weboldal a Nuke-Evolution támogatásával jött létre. &copy; 2007<br />Magyar nyelvü támogatás &copy; 2007 <a href=\"http://www.evo-hungary.hu\" target=\"_blank\"><b>Nuke-Evolution Hungary</b></a>.<br /><br>\r\n<a href=\"http://www.reality.info.hu/\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoHungary.png\" width=\"94\" height=\"15\" alt=\"[Evo Hungary]\" title=\"Evo Hungary\"></a>&nbsp;\r\n<a href=\"modules.php?name=Supporters\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoSupporter.png\" width=\"94\" height=\"15\" alt=\"[Supporter]\" title=\"Supporter\"></a>&nbsp;<a href=\"modules.php?name=Club\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoClubZone.png\" width=\"94\" height=\"15\" alt=\"[Evo Hungary Club]\" title=\"Evo Hungary Club\"></a>\r\n&nbsp;<a href=\"http://www.evo-hungary.hu/Topsites/\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoTopsites.png\" width=\"94\" height=\"15\" alt=\"[Evo Topsites]\" title=\"Evo Topsites\"></a>&nbsp;\r\n<a href=\"http://www.evo-hungary.hu/directory/\" target=\"_blank\"><img border=\"0\" src=\"images/evo/Directory4u.png\" width=\"94\" height=\"15\" alt=\"[Evo Directory]\" title=\"Evo Directory\"></a>&nbsp;\r\n<a href=\"http://evothemes.extra.hu/\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoThemes.png\" width=\"94\" height=\"15\" alt=\"[Evo Themes]\" title=\"Evo Themes\"></a>\r\n<br>\r\n<center><strong><TT>Nuke Evolution Pro (v2.0.6) Final.</TT></strong></center>\r\n<br>\r\n<center><strong><TT>Copyright &copy; 2007 by Nuke-Evolution Hungary.</TT></strong></center>\r\n', '7.6.0', '1', '0', '0', '$saved_cache = array();');
INSERT INTO nuke_config  VALUES ('', '', '', '', '', '', '0', 'MG-gs101', '', '', '', '4096', '', '5', '1', '1', '1', '1', '10', '10', '1', '30', '0', '1', '', '', '', '', '0', '0', '0', '', '', '', '', '0', '1', '1', '1000', '3', '', 'PHP-Nuke Copyright &copy; 2007 by Francisco Burzi.<br />Powered by <a href=\"http://www.nuke-evolution.com\" target=\"_blank\"><b>Nuke-Evolution</b></a>.<br /><br>Ez a weboldal a Nuke-Evolution támogatásával jött létre. &copy; 2007<br />Magyar nyelvü támogatás &copy; 2007 <a href=\"http://www.evo-hungary.hu\" target=\"_blank\"><b>Nuke-Evolution Hungary</b></a>.<br /><br>\r\n<a href=\"http://www.reality.info.hu/\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoHungary.png\" width=\"94\" height=\"15\" alt=\"[Evo Hungary]\" title=\"Evo Hungary\"></a>&nbsp;\r\n<a href=\"modules.php?name=Supporters\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoSupporter.png\" width=\"94\" height=\"15\" alt=\"[Supporter]\" title=\"Supporter\"></a>&nbsp;<a href=\"modules.php?name=Club\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoClubZone.png\" width=\"94\" height=\"15\" alt=\"[Evo Hungary Club]\" title=\"Evo Hungary Club\"></a>\r\n&nbsp;<a href=\"http://www.evo-hungary.hu/Topsites/\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoTopsites.png\" width=\"94\" height=\"15\" alt=\"[Evo Topsites]\" title=\"Evo Topsites\"></a>&nbsp;\r\n<a href=\"http://www.evo-hungary.hu/directory/\" target=\"_blank\"><img border=\"0\" src=\"images/evo/Directory4u.png\" width=\"94\" height=\"15\" alt=\"[Evo Directory]\" title=\"Evo Directory\"></a>&nbsp;\r\n<a href=\"http://evothemes.extra.hu/\" target=\"_blank\"><img border=\"0\" src=\"images/evo/EvoThemes.png\" width=\"94\" height=\"15\" alt=\"[Evo Themes]\" title=\"Evo Themes\"></a>&nbsp;', '', '1', '0', '0', '');

#
# Table structure for table 'nuke_confirm'
#

DROP TABLE IF EXISTS nuke_confirm;
CREATE TABLE nuke_confirm (
   confirm_id char(32) NOT NULL,
   session_id char(32) NOT NULL,
   code char(6) NOT NULL,
   PRIMARY KEY (session_id, confirm_id)
);


#
# Dumping data for table 'nuke_confirm'
#


#
# Table structure for table 'nuke_counter'
#

DROP TABLE IF EXISTS nuke_counter;
CREATE TABLE nuke_counter (
   type varchar(80) NOT NULL,
   var varchar(80) NOT NULL,
   count int(10) unsigned DEFAULT '0' NOT NULL,
   KEY var (var)
);


#
# Dumping data for table 'nuke_counter'
#

INSERT INTO nuke_counter  VALUES ('total', 'hits', '139');
INSERT INTO nuke_counter  VALUES ('browser', 'Avant', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Camino', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Crazy', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'DEVONtech', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Dillo', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Galeon', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'ELinks', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Epiphany', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Firefox', '139');
INSERT INTO nuke_counter  VALUES ('browser', 'iRider', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'K-Meleon', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Konqueror', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Lynx', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Maxthon', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Mozilla', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'MSIE', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'MultiZilla', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'NetCaptor', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Netscape', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'OmniWeb', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Opera', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Safari', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Shiira', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Voyager', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'w3m', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'WAP', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'WebWasher', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Bot', '0');
INSERT INTO nuke_counter  VALUES ('browser', 'Other', '0');
INSERT INTO nuke_counter  VALUES ('os', 'Windows', '139');
INSERT INTO nuke_counter  VALUES ('os', 'Linspire', '0');
INSERT INTO nuke_counter  VALUES ('os', 'Linux', '0');
INSERT INTO nuke_counter  VALUES ('os', 'Mac', '0');
INSERT INTO nuke_counter  VALUES ('os', 'FreeBSD', '0');
INSERT INTO nuke_counter  VALUES ('os', 'SunOS', '0');
INSERT INTO nuke_counter  VALUES ('os', 'IRIX', '0');
INSERT INTO nuke_counter  VALUES ('os', 'OS/2', '0');
INSERT INTO nuke_counter  VALUES ('os', 'AIX', '0');
INSERT INTO nuke_counter  VALUES ('os', 'Other', '0');

#
# Table structure for table 'nuke_country'
#

DROP TABLE IF EXISTS nuke_country;
CREATE TABLE nuke_country (
   id int(10) NOT NULL auto_increment,
   name varchar(80) NOT NULL,
   KEY id (id)
);


#
# Dumping data for table 'nuke_country'
#

INSERT INTO nuke_country  VALUES ('1', 'United States');
INSERT INTO nuke_country  VALUES ('2', 'United Kingdom');
INSERT INTO nuke_country  VALUES ('2', 'France');
INSERT INTO nuke_country  VALUES ('4', 'Switzerland');
INSERT INTO nuke_country  VALUES ('5', 'Afghanistan');
INSERT INTO nuke_country  VALUES ('6', 'Albania');
INSERT INTO nuke_country  VALUES ('7', 'Algeria');
INSERT INTO nuke_country  VALUES ('8', 'American Somoa');
INSERT INTO nuke_country  VALUES ('9', 'Andorra');
INSERT INTO nuke_country  VALUES ('10', 'Angola');
INSERT INTO nuke_country  VALUES ('11', 'Anguilla');
INSERT INTO nuke_country  VALUES ('12', 'Antartica');
INSERT INTO nuke_country  VALUES ('13', 'Antigua & Barbuda');
INSERT INTO nuke_country  VALUES ('14', 'Argentina');
INSERT INTO nuke_country  VALUES ('15', 'Armenia');
INSERT INTO nuke_country  VALUES ('16', 'Aruba');
INSERT INTO nuke_country  VALUES ('17', 'Australia');
INSERT INTO nuke_country  VALUES ('18', 'Austria');
INSERT INTO nuke_country  VALUES ('19', 'Azerbaijan');
INSERT INTO nuke_country  VALUES ('20', 'Azores');
INSERT INTO nuke_country  VALUES ('21', 'Bahamas');
INSERT INTO nuke_country  VALUES ('22', 'Bahrain');
INSERT INTO nuke_country  VALUES ('23', 'Balearic Islands');
INSERT INTO nuke_country  VALUES ('24', 'Bangladesh');
INSERT INTO nuke_country  VALUES ('25', 'Barbados');
INSERT INTO nuke_country  VALUES ('26', 'Belarus');
INSERT INTO nuke_country  VALUES ('27', 'Belgium');
INSERT INTO nuke_country  VALUES ('28', 'Belize');
INSERT INTO nuke_country  VALUES ('29', 'Benin');
INSERT INTO nuke_country  VALUES ('30', 'Bermuda');
INSERT INTO nuke_country  VALUES ('31', 'Bhutan');
INSERT INTO nuke_country  VALUES ('32', 'Bolivia');
INSERT INTO nuke_country  VALUES ('33', 'Bonaire');
INSERT INTO nuke_country  VALUES ('34', 'Bosnia & Herzegovinia');
INSERT INTO nuke_country  VALUES ('35', 'Botswana');
INSERT INTO nuke_country  VALUES ('36', 'Brazil');
INSERT INTO nuke_country  VALUES ('37', 'Brunei');
INSERT INTO nuke_country  VALUES ('38', 'Bulgaria');
INSERT INTO nuke_country  VALUES ('39', 'BurkinaFaso');
INSERT INTO nuke_country  VALUES ('40', 'Burundi');
INSERT INTO nuke_country  VALUES ('41', 'Cambodia');
INSERT INTO nuke_country  VALUES ('42', 'Cameroon');
INSERT INTO nuke_country  VALUES ('43', 'Canada');
INSERT INTO nuke_country  VALUES ('44', 'Canary Islands');
INSERT INTO nuke_country  VALUES ('45', 'Cape Verde');
INSERT INTO nuke_country  VALUES ('46', 'Cayman Islands');
INSERT INTO nuke_country  VALUES ('47', 'Central Africa Republic');
INSERT INTO nuke_country  VALUES ('48', 'Chad');
INSERT INTO nuke_country  VALUES ('49', 'Chile');
INSERT INTO nuke_country  VALUES ('50', 'China');
INSERT INTO nuke_country  VALUES ('51', 'Colombia');
INSERT INTO nuke_country  VALUES ('52', 'Comoros');
INSERT INTO nuke_country  VALUES ('53', 'Congo');
INSERT INTO nuke_country  VALUES ('54', 'CostaRica');
INSERT INTO nuke_country  VALUES ('55', 'Croatia');
INSERT INTO nuke_country  VALUES ('56', 'Cuba');
INSERT INTO nuke_country  VALUES ('57', 'Curacao');
INSERT INTO nuke_country  VALUES ('58', 'Cyprus');
INSERT INTO nuke_country  VALUES ('59', 'Czech Republic');
INSERT INTO nuke_country  VALUES ('60', 'Denmark');
INSERT INTO nuke_country  VALUES ('61', 'Djibouti');
INSERT INTO nuke_country  VALUES ('62', 'Dominican Republic');
INSERT INTO nuke_country  VALUES ('63', 'Ecuador');
INSERT INTO nuke_country  VALUES ('64', 'Egypt');
INSERT INTO nuke_country  VALUES ('65', 'ElSalvador');
INSERT INTO nuke_country  VALUES ('66', 'Equatorial Guinea');
INSERT INTO nuke_country  VALUES ('67', 'Eritrea');
INSERT INTO nuke_country  VALUES ('68', 'Estonia');
INSERT INTO nuke_country  VALUES ('69', 'Ethiopia');
INSERT INTO nuke_country  VALUES ('70', 'Falkland Islands');
INSERT INTO nuke_country  VALUES ('71', 'Fiji');
INSERT INTO nuke_country  VALUES ('72', 'Finland');
INSERT INTO nuke_country  VALUES ('73', 'French Guiana');
INSERT INTO nuke_country  VALUES ('74', 'Gambia');
INSERT INTO nuke_country  VALUES ('75', 'Georgia');
INSERT INTO nuke_country  VALUES ('76', 'Germany');
INSERT INTO nuke_country  VALUES ('77', 'Ghana');
INSERT INTO nuke_country  VALUES ('78', 'Gibraltar');
INSERT INTO nuke_country  VALUES ('79', 'Greece');
INSERT INTO nuke_country  VALUES ('80', 'Greenland');
INSERT INTO nuke_country  VALUES ('81', 'Grenada');
INSERT INTO nuke_country  VALUES ('82', 'Guadeloupe');
INSERT INTO nuke_country  VALUES ('83', 'Guatemala');
INSERT INTO nuke_country  VALUES ('84', 'Guernsey');
INSERT INTO nuke_country  VALUES ('85', 'Guinea Bissau');
INSERT INTO nuke_country  VALUES ('86', 'Guyana');
INSERT INTO nuke_country  VALUES ('87', 'Haiti');
INSERT INTO nuke_country  VALUES ('88', 'Honduras');
INSERT INTO nuke_country  VALUES ('89', 'HongKong');
INSERT INTO nuke_country  VALUES ('90', 'Hungary');
INSERT INTO nuke_country  VALUES ('91', 'Iceland');
INSERT INTO nuke_country  VALUES ('92', 'India');
INSERT INTO nuke_country  VALUES ('93', 'Indonesia');
INSERT INTO nuke_country  VALUES ('94', 'Iran');
INSERT INTO nuke_country  VALUES ('95', 'Iraq');
INSERT INTO nuke_country  VALUES ('96', 'Ireland');
INSERT INTO nuke_country  VALUES ('97', 'Israel');
INSERT INTO nuke_country  VALUES ('98', 'Italy');
INSERT INTO nuke_country  VALUES ('99', 'IvoryCoast');
INSERT INTO nuke_country  VALUES ('100', 'Jamaica');
INSERT INTO nuke_country  VALUES ('101', 'Japan');
INSERT INTO nuke_country  VALUES ('102', 'Jersey');
INSERT INTO nuke_country  VALUES ('103', 'Jordan');
INSERT INTO nuke_country  VALUES ('104', 'Kazakhstan');
INSERT INTO nuke_country  VALUES ('105', 'Kenya');
INSERT INTO nuke_country  VALUES ('106', 'Kuwait');
INSERT INTO nuke_country  VALUES ('107', 'Kyrgyzstan');
INSERT INTO nuke_country  VALUES ('108', 'Laos');
INSERT INTO nuke_country  VALUES ('109', 'Latvia');
INSERT INTO nuke_country  VALUES ('110', 'Lebanon');
INSERT INTO nuke_country  VALUES ('111', 'Lesotho');
INSERT INTO nuke_country  VALUES ('112', 'Liberia');
INSERT INTO nuke_country  VALUES ('113', 'Libya');
INSERT INTO nuke_country  VALUES ('114', 'Liechtenstein');
INSERT INTO nuke_country  VALUES ('115', 'Lithuania');
INSERT INTO nuke_country  VALUES ('116', 'Luxembourg');
INSERT INTO nuke_country  VALUES ('117', 'Macau');
INSERT INTO nuke_country  VALUES ('118', 'Macedonia');
INSERT INTO nuke_country  VALUES ('119', 'Madagascar');
INSERT INTO nuke_country  VALUES ('120', 'Maderia');
INSERT INTO nuke_country  VALUES ('121', 'Malawi');
INSERT INTO nuke_country  VALUES ('122', 'Malaysia');
INSERT INTO nuke_country  VALUES ('123', 'Maldives');
INSERT INTO nuke_country  VALUES ('124', 'Mali');
INSERT INTO nuke_country  VALUES ('125', 'Malta');
INSERT INTO nuke_country  VALUES ('126', 'Martinique');
INSERT INTO nuke_country  VALUES ('127', 'Mauritania');
INSERT INTO nuke_country  VALUES ('128', 'Mauritius');
INSERT INTO nuke_country  VALUES ('129', 'Mexico');
INSERT INTO nuke_country  VALUES ('130', 'Moldova');
INSERT INTO nuke_country  VALUES ('131', 'Monaco');
INSERT INTO nuke_country  VALUES ('132', 'Mongolia');
INSERT INTO nuke_country  VALUES ('133', 'Montserrat');
INSERT INTO nuke_country  VALUES ('134', 'Morocco');
INSERT INTO nuke_country  VALUES ('135', 'Mozambique');
INSERT INTO nuke_country  VALUES ('136', 'Myanmar');
INSERT INTO nuke_country  VALUES ('137', 'Myanmer');
INSERT INTO nuke_country  VALUES ('138', 'Namibia');
INSERT INTO nuke_country  VALUES ('139', 'Nauru');
INSERT INTO nuke_country  VALUES ('140', 'Nepal');
INSERT INTO nuke_country  VALUES ('141', 'Netherlands');
INSERT INTO nuke_country  VALUES ('142', 'New Caledonia');
INSERT INTO nuke_country  VALUES ('143', 'New Zealand');
INSERT INTO nuke_country  VALUES ('144', 'Nicaragua');
INSERT INTO nuke_country  VALUES ('145', 'Niger');
INSERT INTO nuke_country  VALUES ('146', 'Nigeria');
INSERT INTO nuke_country  VALUES ('147', 'North Korea');
INSERT INTO nuke_country  VALUES ('148', 'Norway');
INSERT INTO nuke_country  VALUES ('149', 'Oman');
INSERT INTO nuke_country  VALUES ('150', 'Pakistan');
INSERT INTO nuke_country  VALUES ('151', 'Panama');
INSERT INTO nuke_country  VALUES ('152', 'Papua New Guinea');
INSERT INTO nuke_country  VALUES ('153', 'Paraguay');
INSERT INTO nuke_country  VALUES ('154', 'Peru');
INSERT INTO nuke_country  VALUES ('155', 'Philippines');
INSERT INTO nuke_country  VALUES ('156', 'Poland');
INSERT INTO nuke_country  VALUES ('157', 'Portugal');
INSERT INTO nuke_country  VALUES ('158', 'PuertoRico');
INSERT INTO nuke_country  VALUES ('159', 'Qatar');
INSERT INTO nuke_country  VALUES ('160', 'Reunion');
INSERT INTO nuke_country  VALUES ('161', 'Romania');
INSERT INTO nuke_country  VALUES ('162', 'Russia');
INSERT INTO nuke_country  VALUES ('163', 'Rwanda');
INSERT INTO nuke_country  VALUES ('164', 'Saint Eustatius');
INSERT INTO nuke_country  VALUES ('165', 'Saint Kitts and Nevis');
INSERT INTO nuke_country  VALUES ('166', 'Saint Lucia');
INSERT INTO nuke_country  VALUES ('167', 'Saint Vincent and the Grenadines');
INSERT INTO nuke_country  VALUES ('168', 'San Marino');
INSERT INTO nuke_country  VALUES ('169', 'Sao Tome');
INSERT INTO nuke_country  VALUES ('170', 'Saudi Arabia');
INSERT INTO nuke_country  VALUES ('171', 'Senegal');
INSERT INTO nuke_country  VALUES ('172', 'Seychelles');
INSERT INTO nuke_country  VALUES ('173', 'SierraLeone');
INSERT INTO nuke_country  VALUES ('174', 'Singapore');
INSERT INTO nuke_country  VALUES ('175', 'Slovakia');
INSERT INTO nuke_country  VALUES ('176', 'Slovenia');
INSERT INTO nuke_country  VALUES ('177', 'Solomon Islands');
INSERT INTO nuke_country  VALUES ('178', 'Somalia');
INSERT INTO nuke_country  VALUES ('179', 'South Africa');
INSERT INTO nuke_country  VALUES ('180', 'South Korea');
INSERT INTO nuke_country  VALUES ('181', 'Spain');
INSERT INTO nuke_country  VALUES ('182', 'Sri Lanka');
INSERT INTO nuke_country  VALUES ('183', 'St Maarten');
INSERT INTO nuke_country  VALUES ('184', 'Sudan');
INSERT INTO nuke_country  VALUES ('185', 'Suriname');
INSERT INTO nuke_country  VALUES ('186', 'Swaziland');
INSERT INTO nuke_country  VALUES ('187', 'Sweden');
INSERT INTO nuke_country  VALUES ('188', 'Syria');
INSERT INTO nuke_country  VALUES ('189', 'Taiwan');
INSERT INTO nuke_country  VALUES ('190', 'Tajikistan');
INSERT INTO nuke_country  VALUES ('191', 'Tanzania');
INSERT INTO nuke_country  VALUES ('192', 'Thailand');
INSERT INTO nuke_country  VALUES ('193', 'Togo');
INSERT INTO nuke_country  VALUES ('194', 'Trinidad and Tobago');
INSERT INTO nuke_country  VALUES ('195', 'Tunisia');
INSERT INTO nuke_country  VALUES ('196', 'Turkey');
INSERT INTO nuke_country  VALUES ('197', 'Turkmenistan');
INSERT INTO nuke_country  VALUES ('198', 'Turks and Caicos Islands');
INSERT INTO nuke_country  VALUES ('199', 'Tuvalu');
INSERT INTO nuke_country  VALUES ('200', 'Uganda');
INSERT INTO nuke_country  VALUES ('201', 'Ukraine');
INSERT INTO nuke_country  VALUES ('202', 'UnitedArabEmirates');
INSERT INTO nuke_country  VALUES ('203', 'Uruguay');
INSERT INTO nuke_country  VALUES ('205', 'Uzbekistan');
INSERT INTO nuke_country  VALUES ('206', 'Vanuatu');
INSERT INTO nuke_country  VALUES ('207', 'VaticanCity');
INSERT INTO nuke_country  VALUES ('208', 'Venezuela');
INSERT INTO nuke_country  VALUES ('209', 'Vietnam');
INSERT INTO nuke_country  VALUES ('210', 'Virgin Islands - British');
INSERT INTO nuke_country  VALUES ('211', 'Virgin Islands - US');
INSERT INTO nuke_country  VALUES ('212', 'Yemen');
INSERT INTO nuke_country  VALUES ('213', 'Yugoslavia');
INSERT INTO nuke_country  VALUES ('214', 'Zaire (Congo)');
INSERT INTO nuke_country  VALUES ('215', 'Zambia');
INSERT INTO nuke_country  VALUES ('216', 'Zanzibar Island');
INSERT INTO nuke_country  VALUES ('217', 'Zimbabwe');

#
# Table structure for table 'nuke_donators'
#

DROP TABLE IF EXISTS nuke_donators;
CREATE TABLE nuke_donators (
   id int(11) NOT NULL auto_increment,
   uid int(11) DEFAULT '0' NOT NULL,
   uname varchar(60) NOT NULL,
   fname varchar(25) NOT NULL,
   lname varchar(25) NOT NULL,
   email varchar(255) NOT NULL,
   donated decimal(8,2) DEFAULT '0.00' NOT NULL,
   dondate varchar(255) NOT NULL,
   donshow tinyint(1) DEFAULT '0' NOT NULL,
   uip varchar(255) NOT NULL,
   donok tinyint(1) DEFAULT '0' NOT NULL,
   msg text,
   donto varchar(255),
   PRIMARY KEY (id)
);


#
# Dumping data for table 'nuke_donators'
#


#
# Table structure for table 'nuke_donators_config'
#

DROP TABLE IF EXISTS nuke_donators_config;
CREATE TABLE nuke_donators_config (
   config_name varchar(255) NOT NULL,
   config_value text NOT NULL,
   PRIMARY KEY (config_name)
);


#
# Dumping data for table 'nuke_donators_config'
#

INSERT INTO nuke_donators_config  VALUES ('values', '5,10,25,50,100');
INSERT INTO nuke_donators_config  VALUES ('block_show_amount', 'yes');
INSERT INTO nuke_donators_config  VALUES ('block_show_anon_amount', 'yes');
INSERT INTO nuke_donators_config  VALUES ('block_button_image', 'images/donations/x-click-but04.gif');
INSERT INTO nuke_donators_config  VALUES ('block_num_donations', '10');
INSERT INTO nuke_donators_config  VALUES ('block_show_dates', 'yes');
INSERT INTO nuke_donators_config  VALUES ('block_message', 'Find our site useful? Make a small donation to show your support.');
INSERT INTO nuke_donators_config  VALUES ('block_show_goal', 'no');
INSERT INTO nuke_donators_config  VALUES ('block_scroll', 'yes');
INSERT INTO nuke_donators_config  VALUES ('block_numbers', 'no');
INSERT INTO nuke_donators_config  VALUES ('page_num_donations', '25');
INSERT INTO nuke_donators_config  VALUES ('page_show_anon_amount', 'yes');
INSERT INTO nuke_donators_config  VALUES ('page_show_amount', 'yes');
INSERT INTO nuke_donators_config  VALUES ('page_show_dates', 'no');
INSERT INTO nuke_donators_config  VALUES ('page_header_image', '');
INSERT INTO nuke_donators_config  VALUES ('gen_pp_email', '');
INSERT INTO nuke_donators_config  VALUES ('gen_donation_name', 'Site Donation');
INSERT INTO nuke_donators_config  VALUES ('gen_donation_code', 'site_donation');
INSERT INTO nuke_donators_config  VALUES ('gen_button_image', 'images/donations/x-click-butcc-donate.gif');
INSERT INTO nuke_donators_config  VALUES ('gen_currency', 'USD');
INSERT INTO nuke_donators_config  VALUES ('gen_monthly_goal', '50.00');
INSERT INTO nuke_donators_config  VALUES ('gen_date_format', 'm/d/Y');
INSERT INTO nuke_donators_config  VALUES ('gen_type_private', 'no');
INSERT INTO nuke_donators_config  VALUES ('gen_type_anon', 'no');
INSERT INTO nuke_donators_config  VALUES ('gen_thank_image', '');
INSERT INTO nuke_donators_config  VALUES ('gen_thank_message', 'Thank you for your kind donation!<br /><br />Please come again!');
INSERT INTO nuke_donators_config  VALUES ('gen_cancel_image', 'images/logo.gif');
INSERT INTO nuke_donators_config  VALUES ('gen_cancel_message', 'Sorry you could not donate!<br /><br />Please come again!');
INSERT INTO nuke_donators_config  VALUES ('gen_page_image', 'images/logo.gif');
INSERT INTO nuke_donators_config  VALUES ('gen_message', 'yes');
INSERT INTO nuke_donators_config  VALUES ('gen_codes', '');
INSERT INTO nuke_donators_config  VALUES ('gen_cookie', 'no');

#
# Table structure for table 'nuke_downloads_accesses'
#

DROP TABLE IF EXISTS nuke_downloads_accesses;
CREATE TABLE nuke_downloads_accesses (
   username varchar(60) NOT NULL,
   downloads int(11) DEFAULT '0' NOT NULL,
   uploads int(11) DEFAULT '0' NOT NULL,
   PRIMARY KEY (username)
);


#
# Dumping data for table 'nuke_downloads_accesses'
#


#
# Table structure for table 'nuke_downloads_categories'
#

DROP TABLE IF EXISTS nuke_downloads_categories;
CREATE TABLE nuke_downloads_categories (
   cid int(11) NOT NULL auto_increment,
   title varchar(50) NOT NULL,
   cdescription text NOT NULL,
   parentid int(11) DEFAULT '0' NOT NULL,
   whoadd tinyint(2) DEFAULT '0' NOT NULL,
   uploaddir varchar(255) NOT NULL,
   canupload tinyint(2) DEFAULT '0' NOT NULL,
   active tinyint(2) DEFAULT '1' NOT NULL,
   PRIMARY KEY (cid),
   KEY title (title)
);


#
# Dumping data for table 'nuke_downloads_categories'
#


#
# Table structure for table 'nuke_downloads_config'
#

DROP TABLE IF EXISTS nuke_downloads_config;
CREATE TABLE nuke_downloads_config (
   config_name varchar(255) NOT NULL,
   config_value text NOT NULL,
   PRIMARY KEY (config_name)
);


#
# Dumping data for table 'nuke_downloads_config'
#

INSERT INTO nuke_downloads_config  VALUES ('admperpage', '50');
INSERT INTO nuke_downloads_config  VALUES ('blockunregmodify', '0');
INSERT INTO nuke_downloads_config  VALUES ('dateformat', 'D M j G:i:s T Y');
INSERT INTO nuke_downloads_config  VALUES ('mostpopular', '25');
INSERT INTO nuke_downloads_config  VALUES ('mostpopulartrig', '0');
INSERT INTO nuke_downloads_config  VALUES ('perpage', '10');
INSERT INTO nuke_downloads_config  VALUES ('popular', '500');
INSERT INTO nuke_downloads_config  VALUES ('results', '10');
INSERT INTO nuke_downloads_config  VALUES ('show_download', '0');
INSERT INTO nuke_downloads_config  VALUES ('show_links_num', '0');
INSERT INTO nuke_downloads_config  VALUES ('usegfxcheck', '0');

#
# Table structure for table 'nuke_downloads_downloads'
#

DROP TABLE IF EXISTS nuke_downloads_downloads;
CREATE TABLE nuke_downloads_downloads (
   lid int(11) NOT NULL auto_increment,
   cid int(11) DEFAULT '0' NOT NULL,
   sid int(11) DEFAULT '0' NOT NULL,
   title varchar(100) NOT NULL,
   url varchar(255) NOT NULL,
   description text NOT NULL,
   date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
   name varchar(100) NOT NULL,
   email varchar(100) NOT NULL,
   hits int(11) DEFAULT '0' NOT NULL,
   submitter varchar(60) NOT NULL,
   sub_ip varchar(16) DEFAULT '0.0.0.0' NOT NULL,
   filesize bigint(20) DEFAULT '0' NOT NULL,
   version varchar(20) NOT NULL,
   homepage varchar(255) NOT NULL,
   active tinyint(2) DEFAULT '1' NOT NULL,
   PRIMARY KEY (lid),
   KEY cid (cid),
   KEY sid (sid),
   KEY title (title)
);


#
# Dumping data for table 'nuke_downloads_downloads'
#


#
# Table structure for table 'nuke_downloads_extensions'
#

DROP TABLE IF EXISTS nuke_downloads_extensions;
CREATE TABLE nuke_downloads_extensions (
   eid int(11) NOT NULL auto_increment,
   ext varchar(6) NOT NULL,
   file tinyint(1) DEFAULT '0' NOT NULL,
   image tinyint(1) DEFAULT '0' NOT NULL,
   PRIMARY KEY (eid),
   KEY ext (ext)
);


#
# Dumping data for table 'nuke_downloads_extensions'
#

INSERT INTO nuke_downloads_extensions  VALUES ('1', '.ace', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('2', '.arj', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('3', '.bz', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('4', '.bz2', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('5', '.cab', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('6', '.exe', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('7', '.gif', '0', '1');
INSERT INTO nuke_downloads_extensions  VALUES ('8', '.gz', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('9', '.iso', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('10', '.jpeg', '0', '1');
INSERT INTO nuke_downloads_extensions  VALUES ('11', '.jpg', '0', '1');
INSERT INTO nuke_downloads_extensions  VALUES ('12', '.lha', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('13', '.lzh', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('14', '.png', '0', '1');
INSERT INTO nuke_downloads_extensions  VALUES ('15', '.rar', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('16', '.tar', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('17', '.tgz', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('18', '.uue', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('19', '.zip', '1', '0');
INSERT INTO nuke_downloads_extensions  VALUES ('20', '.zoo', '1', '0');

#
# Table structure for table 'nuke_downloads_mods'
#

DROP TABLE IF EXISTS nuke_downloads_mods;
CREATE TABLE nuke_downloads_mods (
   rid int(11) NOT NULL auto_increment,
   lid int(11) DEFAULT '0' NOT NULL,
   cid int(11) DEFAULT '0' NOT NULL,
   sid int(11) DEFAULT '0' NOT NULL,
   title varchar(100) NOT NULL,
   url varchar(255) NOT NULL,
   description text NOT NULL,
   modifier varchar(60) NOT NULL,
   sub_ip varchar(16) DEFAULT '0.0.0.0' NOT NULL,
   brokendownload int(3) DEFAULT '0' NOT NULL,
   name varchar(100) NOT NULL,
   email varchar(100) NOT NULL,
   filesize bigint(20) DEFAULT '0' NOT NULL,
   version varchar(20) NOT NULL,
   homepage varchar(255) NOT NULL,
   PRIMARY KEY (rid)
);


#
# Dumping data for table 'nuke_downloads_mods'
#


#
# Table structure for table 'nuke_downloads_new'
#

DROP TABLE IF EXISTS nuke_downloads_new;
CREATE TABLE nuke_downloads_new (
   lid int(11) NOT NULL auto_increment,
   cid int(11) DEFAULT '0' NOT NULL,
   sid int(11) DEFAULT '0' NOT NULL,
   title varchar(100) NOT NULL,
   url varchar(255) NOT NULL,
   description text NOT NULL,
   date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
   name varchar(100) NOT NULL,
   email varchar(100) NOT NULL,
   submitter varchar(60) NOT NULL,
   sub_ip varchar(16) DEFAULT '0.0.0.0' NOT NULL,
   filesize bigint(20) DEFAULT '0' NOT NULL,
   version varchar(20) NOT NULL,
   homepage varchar(255) NOT NULL,
   PRIMARY KEY (lid),
   KEY cid (cid),
   KEY sid (sid),
   KEY title (title)
);


#
# Dumping data for table 'nuke_downloads_new'
#


#
# Table structure for table 'nuke_evo_userinfo'
#

DROP TABLE IF EXISTS nuke_evo_userinfo;
CREATE TABLE nuke_evo_userinfo (
   name varchar(25) NOT NULL,
   filename varchar(25) NOT NULL,
   active tinyint(1) DEFAULT '0' NOT NULL,
   position int(10) NOT NULL,
   image varchar(255) NOT NULL
);


#
# Dumping data for table 'nuke_evo_userinfo'
#

INSERT INTO nuke_evo_userinfo  VALUES ('Jó napot', 'good_afternoon', '1', '1', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Felhasználói név', 'username', '0', '3', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Rank', 'rank', '1', '5', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Bejelentkezés/kilépés/reg', 'bejelentkezés', '1', '8', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Current Online', 'online', '1', '10', '');
INSERT INTO nuke_evo_userinfo  VALUES ('PMs', 'pms', '1', '7', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Felhasználók', 'users', '1', '11', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Legtöbb Valaha', 'mostever', '1', '13', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Tag', 'members', '1', '4', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Avatar', 'avatar', '1', '2', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Személyi Üzenet', 'personal_message', '0', '2', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Language', 'language', '0', '4', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Posta', 'posts', '1', '15', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Összetör', 'Break', '1', '12', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Összetör', 'Break', '1', '9', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Összetör', 'Break', '1', '6', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Összetör', 'Break', '1', '3', '');
INSERT INTO nuke_evo_userinfo  VALUES ('Összetör', 'Break', '1', '14', '');

#
# Table structure for table 'nuke_evo_userinfo_addons'
#

DROP TABLE IF EXISTS nuke_evo_userinfo_addons;
CREATE TABLE nuke_evo_userinfo_addons (
   name varchar(255) NOT NULL,
   value text NOT NULL
);


#
# Dumping data for table 'nuke_evo_userinfo_addons'
#

INSERT INTO nuke_evo_userinfo_addons  VALUES ('good_afternoon_message', 'Jó reggelt %name%:');
INSERT INTO nuke_evo_userinfo_addons  VALUES ('personal_message_message', '<div align=\"center\">Hello %name%, <br />\r\nIsten hozta to %site%.</div>');
INSERT INTO nuke_evo_userinfo_addons  VALUES ('username_center', 'yes');
INSERT INTO nuke_evo_userinfo_addons  VALUES ('online_show_hv', 'no');
INSERT INTO nuke_evo_userinfo_addons  VALUES ('online_scroll', 'yes');
INSERT INTO nuke_evo_userinfo_addons  VALUES ('online_show_members', 'no');

#
# Table structure for table 'nuke_evolution'
#

DROP TABLE IF EXISTS nuke_evolution;
CREATE TABLE nuke_evolution (
   evo_field varchar(50) NOT NULL,
   evo_value text NOT NULL,
   PRIMARY KEY (evo_field)
);


#
# Dumping data for table 'nuke_evolution'
#

INSERT INTO nuke_evolution  VALUES ('sub', 'basic');
INSERT INTO nuke_evolution  VALUES ('ver_check', '1193250901');
INSERT INTO nuke_evolution  VALUES ('ver_previous', '2.0.5');
INSERT INTO nuke_evolution  VALUES ('lock_modules', '0');
INSERT INTO nuke_evolution  VALUES ('queries_count', '1');
INSERT INTO nuke_evolution  VALUES ('adminssl', '0');
INSERT INTO nuke_evolution  VALUES ('poll_random', '0');
INSERT INTO nuke_evolution  VALUES ('poll_days', '30');
INSERT INTO nuke_evolution  VALUES ('censor_words', 'ass asshole arse bitch bullshit c0ck clit cock crap cum cunt fag faggot fuck fucker fucking fuk fuking motherfucker pussy shit tits twat');
INSERT INTO nuke_evolution  VALUES ('censor', '0');
INSERT INTO nuke_evolution  VALUES ('usrclearcache', '0');
INSERT INTO nuke_evolution  VALUES ('cache_last_cleared', '1193250813');
INSERT INTO nuke_evolution  VALUES ('textarea', 'none');
INSERT INTO nuke_evolution  VALUES ('use_colors', '1');
INSERT INTO nuke_evolution  VALUES ('usegfxcheck', '0');
INSERT INTO nuke_evolution  VALUES ('codesize', '7');
INSERT INTO nuke_evolution  VALUES ('codefont', 'verdana');
INSERT INTO nuke_evolution  VALUES ('useimage', '1');
INSERT INTO nuke_evolution  VALUES ('lazy_tap', '0');
INSERT INTO nuke_evolution  VALUES ('img_resize', '1');
INSERT INTO nuke_evolution  VALUES ('img_width', '300');
INSERT INTO nuke_evolution  VALUES ('img_height', '300');
INSERT INTO nuke_evolution  VALUES ('capfile', '');
INSERT INTO nuke_evolution  VALUES ('module_collapse', '1');
INSERT INTO nuke_evolution  VALUES ('collapse', '1');
INSERT INTO nuke_evolution  VALUES ('evouserinfo_ec', '1');
INSERT INTO nuke_evolution  VALUES ('collapsetype', '0');
INSERT INTO nuke_evolution  VALUES ('infobar', '1');

#
# Table structure for table 'nuke_faqanswer'
#

DROP TABLE IF EXISTS nuke_faqanswer;
CREATE TABLE nuke_faqanswer (
   id int(25) NOT NULL auto_increment,
   id_cat int(25) DEFAULT '0' NOT NULL,
   question varchar(255),
   answer text,
   PRIMARY KEY (id),
   KEY id_cat (id_cat)
);


#
# Dumping data for table 'nuke_faqanswer'
#


#
# Table structure for table 'nuke_faqcategories'
#

DROP TABLE IF EXISTS nuke_faqcategories;
CREATE TABLE nuke_faqcategories (
   id_cat tinyint(3) NOT NULL auto_increment,
   categories varchar(255),
   flanguage varchar(30) NOT NULL,
   PRIMARY KEY (id_cat)
);


#
# Dumping data for table 'nuke_faqcategories'
#


#
# Table structure for table 'nuke_headlines'
#

DROP TABLE IF EXISTS nuke_headlines;
CREATE TABLE nuke_headlines (
   hid int(11) NOT NULL auto_increment,
   sitename varchar(30) NOT NULL,
   headlinesurl varchar(200) NOT NULL,
   PRIMARY KEY (hid)
);


#
# Dumping data for table 'nuke_headlines'
#

INSERT INTO nuke_headlines  VALUES ('1', 'AbsoluteGames', 'http://files.gameaholic.com/agfa.rdf');
INSERT INTO nuke_headlines  VALUES ('2', 'BrunchingShuttlecocks', 'http://www.brunching.com/brunching.rdf');
INSERT INTO nuke_headlines  VALUES ('3', 'DailyDaemonNews', 'http://daily.daemonnews.org/ddn.rdf.php3');
INSERT INTO nuke_headlines  VALUES ('4', 'DigitalTheatre', 'http://www.dtheatre.com/backend.php3?xml=yes');
INSERT INTO nuke_headlines  VALUES ('5', 'DotKDE', 'http://dot.kde.org/rdf');
INSERT INTO nuke_headlines  VALUES ('6', 'FreeDOS', 'http://sourceforge.net/export/rss2_projnews.php?group_id=5109');
INSERT INTO nuke_headlines  VALUES ('7', 'Freshmeat', 'http://freshmeat.net/backend/fm.rdf');
INSERT INTO nuke_headlines  VALUES ('8', 'Gnome Desktop', 'http://www.gnomedesktop.org/backend.php');
INSERT INTO nuke_headlines  VALUES ('9', 'HappyPenguin', 'http://happypenguin.org/html/news.rdf');
INSERT INTO nuke_headlines  VALUES ('10', 'HollywoodBitchslap', 'http://hollywoodbitchslap.com/hbs.rdf');
INSERT INTO nuke_headlines  VALUES ('11', 'Learning Linux', 'http://www.learninglinux.com/backend.php');
INSERT INTO nuke_headlines  VALUES ('12', 'LinuxCentral', 'http://linuxcentral.com/backend/lcnew.rdf');
INSERT INTO nuke_headlines  VALUES ('13', 'LinuxJournal', 'http://www.linuxjournal.com/news.rss');
INSERT INTO nuke_headlines  VALUES ('14', 'LinuxWeelyNews', 'http://lwn.net/headlines/rss');
INSERT INTO nuke_headlines  VALUES ('15', 'Listology', 'http://listology.com/recent.rdf');
INSERT INTO nuke_headlines  VALUES ('16', 'MozillaNews', 'http://www.mozilla.org/news.rdf');
INSERT INTO nuke_headlines  VALUES ('17', 'NewsForge', 'http://www.newsforge.com/newsforge.rdf');
INSERT INTO nuke_headlines  VALUES ('18', 'Nuke-Evolution', 'http://www.nuke-evolution.com/rss.php?feed=news');
INSERT INTO nuke_headlines  VALUES ('19', 'NukeResources', 'http://www.nukeresources.com/backend.php');
INSERT INTO nuke_headlines  VALUES ('20', 'NukeScripts', 'http://www.nukescripts.net/backend.php');
INSERT INTO nuke_headlines  VALUES ('21', 'PDABuzz', 'http://www.pdabuzz.com/Home/tabid/54/moduleid/489/RSS.aspx');
INSERT INTO nuke_headlines  VALUES ('22', 'PHP-Nuke', 'http://phpnuke.org/backend.php');
INSERT INTO nuke_headlines  VALUES ('23', 'PHP.net', 'http://www.php.net/news.rss');
INSERT INTO nuke_headlines  VALUES ('24', 'PHPBuilder', 'http://phpbuilder.com/rss_feed.php');
INSERT INTO nuke_headlines  VALUES ('25', 'PerlMonks', 'http://www.perlmonks.org/headlines.rdf');
INSERT INTO nuke_headlines  VALUES ('26', 'TheNextLevel', 'http://www.the-nextlevel.com/rss/news');
INSERT INTO nuke_headlines  VALUES ('27', 'WebReference', 'http://webreference.com/webreference.rdf');

#
# Table structure for table 'nuke_jmap'
#

DROP TABLE IF EXISTS nuke_jmap;
CREATE TABLE nuke_jmap (
   name varchar(255) NOT NULL,
   value varchar(255) NOT NULL,
   PRIMARY KEY (name)
);


#
# Dumping data for table 'nuke_jmap'
#

INSERT INTO nuke_jmap  VALUES ('xml', '1');
INSERT INTO nuke_jmap  VALUES ('ntopics', '10');
INSERT INTO nuke_jmap  VALUES ('nnews', '15');
INSERT INTO nuke_jmap  VALUES ('ndown', '10');
INSERT INTO nuke_jmap  VALUES ('nrev', '10');
INSERT INTO nuke_jmap  VALUES ('nuser', '5');

#
# Table structure for table 'nuke_links_categories'
#

DROP TABLE IF EXISTS nuke_links_categories;
CREATE TABLE nuke_links_categories (
   cid int(11) NOT NULL auto_increment,
   title varchar(50) NOT NULL,
   cdescription text NOT NULL,
   parentid int(11) DEFAULT '0' NOT NULL,
   PRIMARY KEY (cid)
);


#
# Dumping data for table 'nuke_links_categories'
#


#
# Table structure for table 'nuke_links_editorials'
#

DROP TABLE IF EXISTS nuke_links_editorials;
CREATE TABLE nuke_links_editorials (
   linkid int(11) DEFAULT '0' NOT NULL,
   adminid varchar(60) NOT NULL,
   editorialtimestamp datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
   editorialtext text NOT NULL,
   editorialtitle varchar(100) NOT NULL,
   PRIMARY KEY (linkid)
);


#
# Dumping data for table 'nuke_links_editorials'
#


#
# Table structure for table 'nuke_links_links'
#

DROP TABLE IF EXISTS nuke_links_links;
CREATE TABLE nuke_links_links (
   lid int(11) NOT NULL auto_increment,
   cid int(11) DEFAULT '0' NOT NULL,
   sid int(11) DEFAULT '0' NOT NULL,
   title varchar(100) NOT NULL,
   url varchar(100) NOT NULL,
   description text NOT NULL,
   date datetime,
   name varchar(100) NOT NULL,
   email varchar(100) NOT NULL,
   hits int(11) DEFAULT '0' NOT NULL,
   submitter varchar(60) NOT NULL,
   linkratingsummary double(6,4) DEFAULT '0.0000' NOT NULL,
   totalvotes int(11) DEFAULT '0' NOT NULL,
   totalcomments int(11) DEFAULT '0' NOT NULL,
   PRIMARY KEY (lid),
   KEY cid (cid),
   KEY sid (sid)
);


#
# Dumping data for table 'nuke_links_links'
#


#
# Table structure for table 'nuke_links_modrequest'
#

DROP TABLE IF EXISTS nuke_links_modrequest;
CREATE TABLE nuke_links_modrequest (
   requestid int(11) NOT NULL auto_increment,
   lid int(11) DEFAULT '0' NOT NULL,
   cid int(11) DEFAULT '0' NOT NULL,
   sid int(11) DEFAULT '0' NOT NULL,
   title varchar(100) NOT NULL,
   url varchar(100) NOT NULL,
   description text NOT NULL,
   modifysubmitter varchar(60) NOT NULL,
   brokenlink int(3) DEFAULT '0' NOT NULL,
   PRIMARY KEY (requestid)
);


#
# Dumping data for table 'nuke_links_modrequest'
#


#
# Table structure for table 'nuke_links_newlink'
#

DROP TABLE IF EXISTS nuke_links_newlink;
CREATE TABLE nuke_links_newlink (
   lid int(11) NOT NULL auto_increment,
   cid int(11) DEFAULT '0' NOT NULL,
   sid int(11) DEFAULT '0' NOT NULL,
   title varchar(100) NOT NULL,
   url varchar(100) NOT NULL,
   description text NOT NULL,
   name varchar(100) NOT NULL,
   email varchar(100) NOT NULL,
   submitter varchar(60) NOT NULL,
   PRIMARY KEY (lid),
   KEY cid (cid),
   KEY sid (sid)
);


#
# Dumping data for table 'nuke_links_newlink'
#


#
# Table structure for table 'nuke_links_votedata'
#

DROP TABLE IF EXISTS nuke_links_votedata;
CREATE TABLE nuke_links_votedata (
   ratingdbid int(11) NOT NULL auto_increment,
   ratinglid int(11) DEFAULT '0' NOT NULL,
   ratinguser varchar(60) NOT NULL,
   rating int(11) DEFAULT '0' NOT NULL,
   ratinghostname varchar(60) NOT NULL,
   ratingcomments text NOT NULL,
   ratingtimestamp datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
   PRIMARY KEY (ratingdbid)
);


#
# Dumping data for table 'nuke_links_votedata'
#


#
# Table structure for table 'nuke_main'
#

DROP TABLE IF EXISTS nuke_main;
CREATE TABLE nuke_main (
   main_module varchar(255) NOT NULL,
   KEY main_module (main_module)
);


#
# Dumping data for table 'nuke_main'
#

INSERT INTO nuke_main  VALUES ('News');

#
# Table structure for table 'nuke_message'
#

DROP TABLE IF EXISTS nuke_message;
CREATE TABLE nuke_message (
   mid int(11) NOT NULL auto_increment,
   title varchar(100) NOT NULL,
   content text NOT NULL,
   date varchar(14) NOT NULL,
   expire int(7) DEFAULT '0' NOT NULL,
   active int(1) DEFAULT '1' NOT NULL,
   view int(1) DEFAULT '1' NOT NULL,
   groups text NOT NULL,
   mlanguage varchar(30) NOT NULL,
   PRIMARY KEY (mid),
   UNIQUE mid (mid)
);


#
# Dumping data for table 'nuke_message'
#


#
# Table structure for table 'nuke_meta'
#

DROP TABLE IF EXISTS nuke_meta;
CREATE TABLE nuke_meta (
   meta_name varchar(50) NOT NULL,
   meta_content text NOT NULL,
   PRIMARY KEY (meta_name)
);


#
# Dumping data for table 'nuke_meta'
#

INSERT INTO nuke_meta  VALUES ('resource-type', 'document');
INSERT INTO nuke_meta  VALUES ('distribution', 'global');
INSERT INTO nuke_meta  VALUES ('author', 'Nuke-Evolution');
INSERT INTO nuke_meta  VALUES ('copyright', 'Copyright (c) by Nuke-Evolution');
INSERT INTO nuke_meta  VALUES ('keywords', 'Nuke-Evolution, evo, pne, evolution, nuke, php-nuke, software, downloads, community, forums, bulletin, boards, cms, nuke-evo, phpnuke');
INSERT INTO nuke_meta  VALUES ('description', 'Nuke-Evolution');
INSERT INTO nuke_meta  VALUES ('robots', 'index, follow');
INSERT INTO nuke_meta  VALUES ('revisit-after', '1 days');
INSERT INTO nuke_meta  VALUES ('rating', 'general');

#
# Table structure for table 'nuke_modules'
#

DROP TABLE IF EXISTS nuke_modules;
CREATE TABLE nuke_modules (
   mid int(10) unsigned NOT NULL auto_increment,
   title varchar(255) NOT NULL,
   custom_title varchar(255) NOT NULL,
   active tinyint(4) DEFAULT '0' NOT NULL,
   view tinyint(4) DEFAULT '0' NOT NULL,
   inmenu tinyint(4) DEFAULT '1' NOT NULL,
   pos tinyint(4) DEFAULT '0' NOT NULL,
   cat_id tinyint(4) DEFAULT '0' NOT NULL,
   blocks tinyint(4) DEFAULT '1' NOT NULL,
   admins varchar(255) NOT NULL,
   groups varchar(50),
   PRIMARY KEY (mid),
   UNIQUE mid (mid),
   KEY title (title),
   KEY custom_title (custom_title)
);


#
# Dumping data for table 'nuke_modules'
#

INSERT INTO nuke_modules  VALUES ('1', 'Advertising', 'Hírdetések', '0', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('2', 'Content', 'Tartalom', '1', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('3', 'Docs', 'Jogi információk', '1', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('4', 'Downloads', 'Letöltések', '1', '0', '1', '0', '5', '1', '', '');
INSERT INTO nuke_modules  VALUES ('6', 'FAQ', 'GYIK', '1', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('7', 'Feedback', 'Kapcsolat', '1', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('8', 'Forums', 'Fórum', '1', '0', '1', '0', '3', '1', '', '');
INSERT INTO nuke_modules  VALUES ('9', 'Groups', 'Csoportok', '1', '0', '1', '0', '2', '1', '', '');
INSERT INTO nuke_modules  VALUES ('10', 'Members_List', 'Felhasználók listája', '1', '1', '1', '0', '2', '1', '', '');
INSERT INTO nuke_modules  VALUES ('11', 'News', 'Hírek', '1', '0', '1', '0', '6', '3', '', '');
INSERT INTO nuke_modules  VALUES ('12', 'NukeSentinel', 'Õrszem', '0', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('13', 'Private_Messages', 'Saját Üzenet', '1', '0', '1', '0', '2', '1', '', '');
INSERT INTO nuke_modules  VALUES ('14', 'Profile', 'Profilod', '1', '0', '1', '0', '2', '1', '', '');
INSERT INTO nuke_modules  VALUES ('15', 'Recommend_Us', 'Ajánlj Minket', '1', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('16', 'Reviews', 'Áttekintés', '0', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('17', 'Search', 'Keresés', '1', '0', '1', '0', '3', '1', '', '');
INSERT INTO nuke_modules  VALUES ('18', 'Spambot_Killer', 'Kéretlen Levélszürõ', '1', '0', '0', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('19', 'Statistics', 'Statisztikák', '1', '0', '1', '0', '4', '1', '', '');
INSERT INTO nuke_modules  VALUES ('20', 'Stories_Archive', 'Hírek archívuma', '1', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('21', 'Submit_News', 'Hírek Küldése', '1', '0', '1', '0', '6', '1', '', '');
INSERT INTO nuke_modules  VALUES ('22', 'Supporters', 'Támogatók', '1', '0', '1', '0', '3', '1', '', '');
INSERT INTO nuke_modules  VALUES ('23', 'Surveys', 'Szavazások', '1', '0', '1', '0', '3', '1', '', '');
INSERT INTO nuke_modules  VALUES ('24', 'Top', 'Top 10', '1', '0', '1', '0', '4', '1', '', '');
INSERT INTO nuke_modules  VALUES ('25', 'Topics', 'Rovatok', '1', '0', '1', '0', '6', '1', '', '');
INSERT INTO nuke_modules  VALUES ('26', 'Web_Links', 'Web Linkek', '1', '0', '1', '0', '5', '1', '', '');
INSERT INTO nuke_modules  VALUES ('27', 'Your_Account', 'Adataid', '1', '0', '1', '0', '2', '1', '', '');
INSERT INTO nuke_modules  VALUES ('28', 'Site_Map', 'Oldal Térkép', '1', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('29', 'Donations', 'Adományok', '1', '0', '1', '0', '7', '1', '', '');
INSERT INTO nuke_modules  VALUES ('30', 'Evo_UserBlock', 'Evo UserBlock', '0', '0', '1', '0', '7', '1', '', '');

#
# Table structure for table 'nuke_modules_cat'
#

DROP TABLE IF EXISTS nuke_modules_cat;
CREATE TABLE nuke_modules_cat (
   cid int(10) unsigned NOT NULL auto_increment,
   name varchar(30) NOT NULL,
   image text NOT NULL,
   pos tinyint(4) DEFAULT '0' NOT NULL,
   link_type tinyint(4) DEFAULT '0' NOT NULL,
   link varchar(255) NOT NULL,
   PRIMARY KEY (cid),
   UNIQUE cid (cid)
);


#
# Dumping data for table 'nuke_modules_cat'
#

INSERT INTO nuke_modules_cat  VALUES ('1', 'Fõ Oldal', 'icon_home.gif', '0', '2', 'index.php');
INSERT INTO nuke_modules_cat  VALUES ('2', 'Tagoknak', 'icon_members.gif', '1', '0', '');
INSERT INTO nuke_modules_cat  VALUES ('3', 'Közösség', 'icon_community.gif', '2', '0', '');
INSERT INTO nuke_modules_cat  VALUES ('4', 'Statisztika', 'icon_poll.gif', '3', '0', '');
INSERT INTO nuke_modules_cat  VALUES ('5', 'Letöltés & Link', 'icon_web.gif', '4', '0', '');
INSERT INTO nuke_modules_cat  VALUES ('6', 'Hírek', 'icon_pencil.gif', '5', '0', '');
INSERT INTO nuke_modules_cat  VALUES ('7', 'Általános', 'icon_general.gif', '6', '0', '');

#
# Table structure for table 'nuke_modules_links'
#

DROP TABLE IF EXISTS nuke_modules_links;
CREATE TABLE nuke_modules_links (
   lid int(10) unsigned NOT NULL auto_increment,
   title varchar(30) NOT NULL,
   link_type tinyint(4) DEFAULT '0' NOT NULL,
   link varchar(255) NOT NULL,
   active tinyint(4) DEFAULT '0' NOT NULL,
   view tinyint(4) DEFAULT '0' NOT NULL,
   pos tinyint(4) DEFAULT '0' NOT NULL,
   cat_id tinyint(4) DEFAULT '0' NOT NULL,
   PRIMARY KEY (lid),
   UNIQUE lid (lid)
);


#
# Dumping data for table 'nuke_modules_links'
#

INSERT INTO nuke_modules_links  VALUES ('2', 'Home', '1', 'index.php', '1', '0', '0', '1');

#
# Table structure for table 'nuke_mostonline'
#

DROP TABLE IF EXISTS nuke_mostonline;
CREATE TABLE nuke_mostonline (
   total int(10) DEFAULT '0' NOT NULL,
   members int(10) DEFAULT '0' NOT NULL,
   nonmembers int(10) DEFAULT '0' NOT NULL,
   PRIMARY KEY (total)
);


#
# Dumping data for table 'nuke_mostonline'
#

INSERT INTO nuke_mostonline  VALUES ('1', '1', '0');

#
# Table structure for table 'nuke_nsnne_config'
#

DROP TABLE IF EXISTS nuke_nsnne_config;
CREATE TABLE nuke_nsnne_config (
   config_name varchar(255) NOT NULL,
   config_value longtext NOT NULL,
   UNIQUE config_name (config_name)
);


#
# Dumping data for table 'nuke_nsnne_config'
#

INSERT INTO nuke_nsnne_config  VALUES ('columns', '0');
INSERT INTO nuke_nsnne_config  VALUES ('readmore', '0');
INSERT INTO nuke_nsnne_config  VALUES ('texttype', '0');
INSERT INTO nuke_nsnne_config  VALUES ('notifyauth', '0');
INSERT INTO nuke_nsnne_config  VALUES ('homenumber', '0');
INSERT INTO nuke_nsnne_config  VALUES ('hometopic', '0');
INSERT INTO nuke_nsnne_config  VALUES ('version_number', '1.1.6');

#
# Table structure for table 'nuke_nsnsp_config'
#

DROP TABLE IF EXISTS nuke_nsnsp_config;
CREATE TABLE nuke_nsnsp_config (
   config_name varchar(255) NOT NULL,
   config_value text NOT NULL,
   PRIMARY KEY (config_name)
);


#
# Dumping data for table 'nuke_nsnsp_config'
#

INSERT INTO nuke_nsnsp_config  VALUES ('require_user', '1');
INSERT INTO nuke_nsnsp_config  VALUES ('image_type', '0');
INSERT INTO nuke_nsnsp_config  VALUES ('max_width', '88');
INSERT INTO nuke_nsnsp_config  VALUES ('max_height', '31');
INSERT INTO nuke_nsnsp_config  VALUES ('version_number', '1.3.0');

#
# Table structure for table 'nuke_nsnsp_sites'
#

DROP TABLE IF EXISTS nuke_nsnsp_sites;
CREATE TABLE nuke_nsnsp_sites (
   site_id int(11) NOT NULL auto_increment,
   site_name varchar(60) NOT NULL,
   site_url varchar(255) NOT NULL,
   site_image varchar(255) NOT NULL,
   site_status int(1) DEFAULT '0' NOT NULL,
   site_hits int(10) DEFAULT '0' NOT NULL,
   site_date date DEFAULT '0000-00-00' NOT NULL,
   site_description text NOT NULL,
   user_id int(11) DEFAULT '0' NOT NULL,
   user_name varchar(60) NOT NULL,
   user_email varchar(60) NOT NULL,
   user_ip varchar(20) NOT NULL,
   PRIMARY KEY (site_id)
);


#
# Dumping data for table 'nuke_nsnsp_sites'
#

INSERT INTO nuke_nsnsp_sites  VALUES ('1', 'Evo-Hungary', 'http://www.evo-hungary.hu', 'http://www.evo-hungary.hu/images/evo/minilogo.gif', '1', '0', '2007-02-27', 'Evo-Hungary.\r\nNuke-Evolution Magyar Támogatói Oldal.', '0', '', '', 'none');

#
# Table structure for table 'nuke_nsnst_admins'
#

DROP TABLE IF EXISTS nuke_nsnst_admins;
CREATE TABLE nuke_nsnst_admins (
   aid varchar(25) NOT NULL,
   login varchar(25) NOT NULL,
   password varchar(20) NOT NULL,
   password_md5 varchar(60) NOT NULL,
   password_crypt varchar(60) NOT NULL,
   protected tinyint(2) DEFAULT '0' NOT NULL,
   PRIMARY KEY (aid)
);


#
# Dumping data for table 'nuke_nsnst_admins'
#

INSERT INTO nuke_nsnst_admins  VALUES ('Shadow', 'Shadow', '', '', '', '1');

#
# Table structure for table 'nuke_nsnst_blocked_ips'
#

DROP TABLE IF EXISTS nuke_nsnst_blocked_ips;
CREATE TABLE nuke_nsnst_blocked_ips (
   ip_addr varchar(15) NOT NULL,
   ip_long int(10) unsigned DEFAULT '0' NOT NULL,
   user_id int(11) DEFAULT '1' NOT NULL,
   username varchar(60) DEFAULT 'Vendég' NOT NULL,
   user_agent text NOT NULL,
   date int(20) DEFAULT '0' NOT NULL,
   notes text NOT NULL,
   reason tinyint(1) DEFAULT '0' NOT NULL,
   query_string text NOT NULL,
   get_string text NOT NULL,
   post_string text NOT NULL,
   x_forward_for varchar(32) DEFAULT 'None' NOT NULL,
   client_ip varchar(32) DEFAULT 'None' NOT NULL,
   remote_addr varchar(32) NOT NULL,
   remote_port varchar(11) DEFAULT 'Unknown' NOT NULL,
   request_method varchar(10) NOT NULL,
   expires int(20) DEFAULT '0' NOT NULL,
   c2c char(2) DEFAULT '00' NOT NULL,
   PRIMARY KEY (ip_addr),
   KEY ip_long (ip_long)
);


#
# Dumping data for table 'nuke_nsnst_blocked_ips'
#


#
# Table structure for table 'nuke_nsnst_blocked_ranges'
#

DROP TABLE IF EXISTS nuke_nsnst_blocked_ranges;
CREATE TABLE nuke_nsnst_blocked_ranges (
   ip_lo int(10) unsigned DEFAULT '0' NOT NULL,
   ip_hi int(10) unsigned DEFAULT '0' NOT NULL,
   date int(20) DEFAULT '0' NOT NULL,
   notes text NOT NULL,
   reason tinyint(1) DEFAULT '0' NOT NULL,
   expires int(20) DEFAULT '0' NOT NULL,
   c2c char(2) DEFAULT '00' NOT NULL,
   KEY code (ip_lo, ip_hi, c2c)
);


#
# Dumping data for table 'nuke_nsnst_blocked_ranges'
#


#
# Table structure for table 'nuke_nsnst_blockers'
#

DROP TABLE IF EXISTS nuke_nsnst_blockers;
CREATE TABLE nuke_nsnst_blockers (
   blocker int(4) DEFAULT '0' NOT NULL,
   block_name varchar(20) NOT NULL,
   activate int(4) DEFAULT '0' NOT NULL,
   block_type int(4) DEFAULT '0' NOT NULL,
   email_lookup int(4) DEFAULT '0' NOT NULL,
   forward varchar(255) NOT NULL,
   reason varchar(20) NOT NULL,
   template varchar(255) NOT NULL,
   duration int(20) DEFAULT '0' NOT NULL,
   htaccess int(4) DEFAULT '0' NOT NULL,
   list longtext NOT NULL,
   PRIMARY KEY (blocker)
);


#
# Dumping data for table 'nuke_nsnst_blockers'
#

INSERT INTO nuke_nsnst_blockers  VALUES ('0', 'other', '0', '0', '0', '', 'Abuse-Other', 'abuse_default.tpl', '0', '0', '');
INSERT INTO nuke_nsnst_blockers  VALUES ('1', 'union', '5', '0', '2', '', 'Abuse-Union', 'abuse_union.tpl', '0', '0', '');
INSERT INTO nuke_nsnst_blockers  VALUES ('2', 'clike', '5', '0', '2', '', 'Abuse-CLike', 'abuse_clike.tpl', '0', '0', '');
INSERT INTO nuke_nsnst_blockers  VALUES ('3', 'harvester', '0', '0', '0', '', 'Abuse-Harvest', 'abuse_harvester.tpl', '0', '0', '@yahoo.com\r\nalexibot\r\nalligator\r\nanonymiz\r\nasterias\r\nbackdoorbot\r\nblack hole\r\nblackwidow\r\nblowfish\r\nbotalot\r\nbuiltbottough\r\nbullseye\r\nbunnyslippers\r\ncatch\r\ncegbfeieh\r\ncharon\r\ncheesebot\r\ncherrypicker\r\nchinaclaw\r\ncombine\r\ncopyrightcheck\r\ncosmos\r\ncrescent\r\ncurl\r\ndbrowse\r\ndisco\r\ndittospyder\r\ndlman\r\ndnloadmage\r\ndownload\r\ndreampassport\r\ndts agent\r\necatch\r\neirgrabber\r\nerocrawler\r\nexpress webpictures\r\nextractorpro\r\neyenetie\r\nfantombrowser\r\nfantomcrew browser\r\nfileheap\r\nfilehound\r\nflashget\r\nfoobot\r\nfranklin locator\r\nfreshdownload\r\nfscrawler\r\ngamespy_arcade\r\ngetbot\r\ngetright\r\ngetweb\r\ngo!zilla\r\ngo-ahead-got-it\r\ngrab\r\ngrafula\r\ngsa-crawler\r\nharvest\r\nhloader\r\nhmview\r\nhttplib\r\nhttpresume\r\nhttrack\r\nhumanlinks\r\nigetter\r\nimage stripper\r\nimage sucker\r\nindustry program\r\nindy library\r\ninfonavirobot\r\ninstallshield digitalwizard\r\nINTerget\r\niria\r\nirvine\r\niupui research bot\r\njbh agent\r\njennybot\r\njetcar\r\njobo\r\njoc\r\nkapere\r\nkenjin spider\r\nkeyword density\r\nlarbin\r\nleechftp\r\nleechget\r\nlexibot\r\nlibweb/clshttp\r\nlibwww-perl\r\nlightningdownload\r\nlincoln state web browser\r\nlinkextractorpro\r\nlinkscan/8.1a.unix\r\nlinkwalker\r\nlwp-trivial\r\nlwp::simple\r\nmac finder\r\nmata hari\r\nmediasearch\r\nmetaproducts\r\nmicrosoft url control\r\nmidown tool\r\nmiixpc\r\nmissauga locate\r\nmissouri college browse\r\nmister pix\r\nmoget\r\nmozilla.*newt\r\nmozilla/3.0 (compatible)\r\nmozilla/3.mozilla/2.01\r\nmsie 4.0 (win95)\r\nmultiblocker browser\r\nmydaemon\r\nmygetright\r\nnabot\r\nnavroad\r\nnearsite\r\nnet vampire\r\nnetants\r\nnetmechanic\r\nnetpumper\r\nnetspider\r\nnewsearchengine\r\nnicerspro\r\nninja\r\nnitro downloader\r\nnpbot\r\noctopus\r\noffline explorer\r\noffline navigator\r\nopenfind\r\npagegrabber\r\npapa foto\r\npavuk\r\npbrowse\r\npcbrowser\r\npeval\r\npompos/\r\nprogram shareware\r\npropowerbot\r\nprowebwalker\r\npsurf\r\npuf\r\npuxarapido\r\nqueryn metasearch\r\nrealdownload\r\nreget\r\nrepomonkey\r\nrsurf\r\nrumours-agent\r\nsakura\r\nscan4mail\r\nsemanticdiscovery\r\nsitesnagger\r\nslysearch\r\nspankbot\r\nspanner \r\nspiderzilla\r\nsq webscanner\r\nstamina\r\nstar downloader\r\nsteeler\r\nsteeler\r\nstrip\r\nsuperbot\r\nsuperhttp\r\nsurfbot\r\nsuzuran\r\nswbot\r\nszukacz\r\ntakeout\r\nteleport\r\ntelesoft\r\ntest spider\r\nthe INTraformant\r\nthenomad\r\ntighttwatbot\r\ntitan\r\ntocrawl/urldispatcher\r\ntrue_robot\r\ntsurf\r\nturing machine\r\nturingos\r\nurlblaze\r\nurlgetfile\r\nurly warning\r\nutilmind\r\nvci\r\nvoideye\r\nweb image collector\r\nweb sucker\r\nwebauto\r\nwebbandit\r\nwebcapture\r\nwebcollage\r\nwebcopier\r\nwebenhancer\r\nwebfetch\r\nwebgo\r\nwebleacher\r\nwebmasterworldforumbot\r\nwebql\r\nwebreaper\r\nwebsite extractor\r\nwebsite quester\r\nwebster\r\nwebstripper\r\nwebwhacker\r\nwep search\r\nwget\r\nwhizbang\r\nwidow\r\nwildsoft surfer\r\nwww-collector-e\r\nwww.netwu.com\r\nwwwoffle\r\nxaldon\r\nxenu\r\nzeus\r\nziggy\r\nzippy');
INSERT INTO nuke_nsnst_blockers  VALUES ('4', 'script', '5', '0', '2', '', 'Abuse-Script', 'abuse_script.tpl', '0', '0', '');
INSERT INTO nuke_nsnst_blockers  VALUES ('5', 'author', '5', '0', '2', '', 'Abuse-Author', 'abuse_author.tpl', '0', '0', '');
INSERT INTO nuke_nsnst_blockers  VALUES ('6', 'referer', '5', '0', '2', '', 'Abuse-Referer', 'abuse_referer.tpl', '0', '0', '121hr.com\r\n1st-call.net\r\n1stcool.com\r\n5000n.com\r\n69-xxx.com\r\n9irl.com\r\n9uy.com\r\na-day-at-the-party.com\r\naccessthepeace.com\r\nadult-model-nude-pictures.com\r\nadult-sex-toys-free-porn.com\r\nagnitum.com\r\nalfonssackpfeiffe.com\r\nalongwayfrommars.com\r\nanime-sex-1.com\r\nanorex-sf-stimulant-free.com\r\nantibot.net\r\nantique-tokiwa.com\r\napotheke-heute.com\r\narmada31.com\r\nartark.com\r\nartlilei.com\r\nascendbtg.com\r\naschalaecheck.com\r\nasian-sex-free-sex.com\r\naslowspeeker.com\r\nassasinatedfrogs.com\r\nathirst-for-tranquillity.net\r\naubonpanier.com\r\navalonumc.com\r\nayingba.com\r\nbayofnoreturn.com\r\nbbw4phonesex.com\r\nbeersarenotfree.com\r\nbierikiuetsch.com\r\nbilingualannouncements.com\r\nblack-pussy-toon-clip-anal-lover-single.com\r\nblownapart.com\r\nblueroutes.com\r\nboasex.com\r\nbooksandpages.com\r\nbootyquake.com\r\nbossyhunter.com\r\nboyz-sex.com\r\nbrokersaandpokers.com\r\nbrowserwindowcleaner.com\r\nbudobytes.com\r\nbusiness2fun.com\r\nbuymyshitz.com\r\nbyuntaesex.com\r\ncaniputsomeloveINToyou.com\r\ncartoons.net.ru\r\ncaverunsailing.com\r\ncertainhealth.com\r\nclantea.com\r\nclose-protection-services.com\r\nclubcanino.com\r\nclubstic.com\r\ncobrakai-skf.com\r\ncollegefucktour.co.uk\r\ncommanderspank.com\r\ncoolenabled.com\r\ncrusecountryart.com\r\ncrusingforsex.co.uk\r\ncunt-twat-pussy-juice-clit-licking.com\r\ncustomerhandshaker.com\r\ncyborgrama.com\r\ndarkprofits.co.uk\r\ndatingforme.co.uk\r\ndatingmind.com\r\ndegree.org.ru\r\ndelorentos.com\r\ndiggydigger.com\r\ndinkydonkyaussie.com\r\ndjpritchard.com\r\ndjtop.com\r\ndraufgeschissen.com\r\ndreamerteens.co.uk\r\nebonyarchives.co.uk\r\nebonyplaya.co.uk\r\necobuilder2000.com\r\nemailandemail.com\r\nemedici.net\r\nengine-on-fire.com\r\nerocity.co.uk\r\nesport3.com\r\neteenbabes.com\r\neurofreepages.com\r\neurotexans.com\r\nevolucionweb.com\r\nfakoli.com\r\nfe4ba.com\r\nferienschweden.com\r\nfindly.com\r\nfirsttimeteadrinker.com\r\nfishing.net.ru\r\nflatwonkers.com\r\nflowershopentertainment.com\r\nflymario.com\r\nfree-xxx-pictures-porno-gallery.com\r\nfreebestporn.com\r\nfreefuckingmovies.co.uk\r\nfreexxxstuff.co.uk\r\nfruitologist.net\r\nfruitsandbolts.com\r\nfuck-cumshots-free-midget-movie-clips.com\r\nfuck-michaelmoore.com\r\nfundacep.com\r\ngadless.com\r\ngallapagosrangers.com\r\ngalleries4free.co.uk\r\ngalofu.com\r\ngaypixpost.co.uk\r\ngeomasti.com\r\ngirltime.co.uk\r\nglassrope.com\r\ngodjustblessyouall.com\r\ngoldenageresort.com\r\ngonnabedaddies.com\r\ngranadasexi.com\r\ngranadasexi.com\r\nguardingtheangels.com\r\nguyprofiles.co.uk\r\nhappy1225.com\r\nhappychappywacky.com\r\nhealth.org.ru\r\nhexplas.com\r\nhighheelsmodels4fun.com\r\nhillsweb.com\r\nhiptuner.com\r\nhistoryINTospace.com\r\nhoa-tuoi.com\r\nhomebuyinginatlanta.com\r\nhorizonultra.com\r\nhorseminiature.net\r\nhotkiss.co.uk\r\nhotlivegirls.co.uk\r\nhotmatchup.co.uk\r\nhusler.co.uk\r\niaentertainment.com\r\niamnotsomeone.com\r\niconsofcorruption.com\r\nihavenotrustinyou.com\r\ninformat-systems.com\r\nINTeriorproshop.com\r\nINTersoftnetworks.com\r\nINThecrib.com\r\ninvestment4cashiers.com\r\niti-trailers.com\r\njackpot-hacker.com\r\njacks-world.com\r\njamesthesailorbasher.com\r\njesuislemonds.com\r\njustanotherdomainname.com\r\nkampelicka.com\r\nkanalrattenarsch.com\r\nkatzasher.com\r\nkerosinjunkie.com\r\nkillasvideo.com\r\nkoenigspisser.com\r\nkontorpara.com\r\nl8t.com\r\nlaestacion101.com\r\nlambuschlamppen.com\r\nlankasex.co.uk\r\nlaser-creations.com\r\nle-tour-du-monde.com\r\nlecraft.com\r\nledo-design.com\r\nleftregistration.com\r\nlekkikoomastas.com\r\nlepommeau.com\r\nlibr-animal.com\r\nlibraries.org.ru\r\nlikewaterlikewind.com\r\nlimbojumpers.com\r\nlink.ru\r\nlockportlinks.com\r\nloiproject.com\r\nlongtermalternatives.com\r\nlottoeco.com\r\nlucalozzi.com\r\nmaki-e-pens.com\r\nmalepayperview.co.uk\r\nmangaxoxo.com\r\nmaps.org.ru\r\nmarcofields.com\r\nmasterofcheese.com\r\nmasteroftheblasterhill.com\r\nmastheadwankers.com\r\nmegafrontier.com\r\nmeinschuppen.com\r\nmercurybar.com\r\nmetapannas.com\r\nmicelebre.com\r\nmidnightlaundries.com\r\nmikeapartment.co.uk\r\nmillenniumchorus.com\r\nmimundial2002.com\r\nminiaturegallerymm.com\r\nmixtaperadio.com\r\nmondialcoral.com\r\nmonja-wakamatsu.com\r\nmonstermonkey.net\r\nmouthfreshners.com\r\nmullensholiday.com\r\nmusilo.com\r\nmyhollowlog.com\r\nmyhomephonenumber.com\r\nmykeyboardisbroken.com\r\nmysofia.net\r\nnaked-cheaters.com\r\nnaked-old-women.com\r\nnastygirls.co.uk\r\nnationclan.net\r\nnatterratter.com\r\nnaughtyadam.com\r\nnestbeschmutzer.com\r\nnetwu.com\r\nnewrealeaseonline.com\r\nnewrealeasesonline.com\r\nnextfrontiersonline.com\r\nnikostaxi.com\r\nnotorious7.com\r\nnrecruiter.com\r\nnursingdepot.com\r\nnustramosse.com\r\nnuturalhicks.com\r\noccaz-auto49.com\r\nocean-db.net\r\noilburnerservice.net\r\nomburo.com\r\noneoz.com\r\nonepageahead.net\r\nonlinewithaline.com\r\norganizate.net\r\nourownweddingsong.com\r\nowen-music.com\r\np-partners.com\r\npaginadeautor.com\r\npakistandutyfree.com\r\npamanderson.co.uk\r\nparentsense.net\r\nparticlewave.net\r\npay-clic.com\r\npay4link.net\r\npcisp.com\r\npersist-pharma.com\r\npeteband.com\r\npetplusindia.com\r\npickabbw.co.uk\r\npicture-oral-position-lesbian.com\r\npl8again.com\r\nplaneting.net\r\npopusky.com\r\nporn-expert.com\r\npromoblitza.com\r\nproproducts-usa.com\r\nptcgzone.com\r\nptporn.com\r\npublishmybong.com\r\nputtingtogether.com\r\nqualifiedcancelations.com\r\nrahost.com\r\nrainbow21.com\r\nrakkashakka.com\r\nrandomfeeding.com\r\nrape-art.com\r\nrd-brains.com\r\nrealestateonthehill.net\r\nrebuscadobot\r\nrequested-stuff.com\r\nretrotrasher.com\r\nricopositive.com\r\nrisorseinrete.com\r\nrotatingcunts.com\r\nrunawayclicks.com\r\nrutalibre.com\r\ns-marche.com\r\nsabrosojazz.com\r\nsamuraidojo.com\r\nsanaldarbe.com\r\nsasseminars.com\r\nschlampenbruzzler.com\r\nsearchmybong.com\r\nseckur.com\r\nsex-asian-porn-INTerracial-photo.com\r\nsex-porn-fuck-hardcore-movie.com\r\nsexa3.net\r\nsexer.com\r\nsexINTention.com\r\nsexnet24.tv\r\nsexomundo.com\r\nsharks.com.ru\r\nshells.com.ru\r\nshop-ecosafe.com\r\nshop-toon-hardcore-fuck-cum-pics.com\r\nsilverfussions.com\r\nsin-city-sex.net\r\nsluisvan.com\r\nsmutshots.com\r\nsnagglersmaggler.com\r\nsomethingtoforgetit.com\r\nsophiesplace.net\r\nsoursushi.com\r\nsouthernxstables.com\r\nspeed467.com\r\nspeedpal4you.com\r\nsporty.org.ru\r\nstopdriving.net\r\nstw.org.ru\r\nsufficientlife.com\r\nsussexboats.net\r\nswinger-party-free-dating-porn-sluts.com\r\nsydneyhay.com\r\nszmjht.com\r\nteninchtrout.com\r\nthebalancedfruits.com\r\ntheendofthesummit.com\r\nthiswillbeit.com\r\nthosethosethose.com\r\nticyclesofindia.com\r\ntits-gay-fagot-black-tits-bigtits-amateur.com\r\ntonius.com\r\ntoohsoft.com\r\ntoolvalley.com\r\ntooporno.net\r\ntoosexual.com\r\ntorngat.com\r\ntour.org.ru\r\ntowneluxury.com\r\ntrafficmogger.com\r\ntriacoach.net\r\ntrottinbob.com\r\ntttframes.com\r\ntvjukebox.net\r\nundercvr.com\r\nunfinished-desires.com\r\nunicornonero.com\r\nunionvillefire.com\r\nupsandowns.com\r\nupthehillanddown.com\r\nvallartavideo.com\r\nvietnamdatingservices.com\r\nvinegarlemonshots.com\r\nvizy.net.ru\r\nvnladiesdatingservices.com\r\nvomitandbusted.com\r\nwalkingthewalking.com\r\nwell-I-am-the-type-of-boy.com\r\nwhales.com.ru\r\nwhincer.net\r\nwhitpagesrippers.com\r\nwhois.sc\r\nwipperrippers.com\r\nwordfilebooklets.com\r\nworld-sexs.com\r\nxsay.com\r\nxxxchyangel.com\r\nxxxzips.com\r\nyouarelostINTransit.com\r\nyuppieslovestocks.com\r\nyuzhouhuagong.com\r\nzhaori-food.com\r\nzwiebelbacke.com');
INSERT INTO nuke_nsnst_blockers  VALUES ('7', 'filter', '5', '0', '2', '', 'Abuse-Filter', 'abuse_filter.tpl', '0', '0', '');
INSERT INTO nuke_nsnst_blockers  VALUES ('8', 'request', '0', '0', '0', '', 'Abuse-Request', 'abuse_request.tpl', '0', '0', '');
INSERT INTO nuke_nsnst_blockers  VALUES ('9', 'string', '0', '0', '0', '', 'Abuse-String', 'abuse_string.tpl', '0', '0', '');
INSERT INTO nuke_nsnst_blockers  VALUES ('10', 'admin', '0', '0', '0', '', 'Abuse-Admin', 'abuse_admin.tpl', '0', '0', '');
INSERT INTO nuke_nsnst_blockers  VALUES ('11', 'flood', '0', '1', '2', '', 'Abuse-Flood', 'abuse_flood.tpl', '0', '1', '');

#
# Table structure for table 'nuke_nsnst_cidrs'
#

DROP TABLE IF EXISTS nuke_nsnst_cidrs;
CREATE TABLE nuke_nsnst_cidrs (
   cidr int(2) DEFAULT '0' NOT NULL,
   hosts int(10) DEFAULT '0' NOT NULL,
   mask varchar(15) NOT NULL,
   PRIMARY KEY (cidr)
);


#
# Dumping data for table 'nuke_nsnst_cidrs'
#

INSERT INTO nuke_nsnst_cidrs  VALUES ('1', '2147483647', '127.255.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('2', '1073741824', '63.255.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('3', '536870912', '31.255.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('4', '268435456', '15.255.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('5', '134217728', '7.255.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('6', '67108864', '3.255.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('7', '33554432', '1.255.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('8', '16777216', '0.255.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('9', '8388608', '0.127.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('10', '4194304', '0.63.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('11', '2097152', '0.31.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('12', '1048576', '0.15.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('13', '524288', '0.7.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('14', '262144', '0.3.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('15', '131072', '0.1.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('16', '65536', '0.0.255.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('17', '32768', '0.0.127.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('18', '16384', '0.0.63.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('19', '8192', '0.0.31.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('20', '4096', '0.0.15.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('21', '2048', '0.0.7.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('22', '1024', '0.0.3.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('23', '512', '0.0.1.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('24', '256', '0.0.0.255');
INSERT INTO nuke_nsnst_cidrs  VALUES ('25', '128', '0.0.0.127');
INSERT INTO nuke_nsnst_cidrs  VALUES ('26', '64', '0.0.0.63');
INSERT INTO nuke_nsnst_cidrs  VALUES ('27', '32', '0.0.0.31');
INSERT INTO nuke_nsnst_cidrs  VALUES ('28', '16', '0.0.0.15');
INSERT INTO nuke_nsnst_cidrs  VALUES ('29', '8', '0.0.0.7');
INSERT INTO nuke_nsnst_cidrs  VALUES ('30', '4', '0.0.0.3');
INSERT INTO nuke_nsnst_cidrs  VALUES ('31', '2', '0.0.0.1');
INSERT INTO nuke_nsnst_cidrs  VALUES ('32', '1', '0.0.0.0');

#
# Table structure for table 'nuke_nsnst_config'
#

DROP TABLE IF EXISTS nuke_nsnst_config;
CREATE TABLE nuke_nsnst_config (
   config_name varchar(255) NOT NULL,
   config_value longtext NOT NULL,
   PRIMARY KEY (config_name)
);


#
# Dumping data for table 'nuke_nsnst_config'
#

INSERT INTO nuke_nsnst_config  VALUES ('admin_contact', 'webmaster@yoursite.com');
INSERT INTO nuke_nsnst_config  VALUES ('block_perpage', '50');
INSERT INTO nuke_nsnst_config  VALUES ('block_sort_column', 'date');
INSERT INTO nuke_nsnst_config  VALUES ('block_sort_direction', 'desc');
INSERT INTO nuke_nsnst_config  VALUES ('crypt_salt', 'N$');
INSERT INTO nuke_nsnst_config  VALUES ('display_link', '3');
INSERT INTO nuke_nsnst_config  VALUES ('display_reason', '3');
INSERT INTO nuke_nsnst_config  VALUES ('force_nukeurl', '0');
INSERT INTO nuke_nsnst_config  VALUES ('help_switch', '1');
INSERT INTO nuke_nsnst_config  VALUES ('htaccess_path', '');
INSERT INTO nuke_nsnst_config  VALUES ('http_auth', '0');
INSERT INTO nuke_nsnst_config  VALUES ('lookup_link', 'http://www.DNSstuff.com/tools/whois.ch?ip=');
INSERT INTO nuke_nsnst_config  VALUES ('page_delay', '5');
INSERT INTO nuke_nsnst_config  VALUES ('prevent_dos', '1');
INSERT INTO nuke_nsnst_config  VALUES ('proxy_reason', 'admin_proxy_reason.tpl');
INSERT INTO nuke_nsnst_config  VALUES ('proxy_switch', '0');
INSERT INTO nuke_nsnst_config  VALUES ('santy_protection', '1');
INSERT INTO nuke_nsnst_config  VALUES ('self_expire', '0');
INSERT INTO nuke_nsnst_config  VALUES ('site_reason', 'admin_site_reason.tpl');
INSERT INTO nuke_nsnst_config  VALUES ('site_switch', '0');
INSERT INTO nuke_nsnst_config  VALUES ('staccess_path', '');
INSERT INTO nuke_nsnst_config  VALUES ('track_active', '1');
INSERT INTO nuke_nsnst_config  VALUES ('track_max', '604800');
INSERT INTO nuke_nsnst_config  VALUES ('track_perpage', '50');
INSERT INTO nuke_nsnst_config  VALUES ('track_sort_column', '6');
INSERT INTO nuke_nsnst_config  VALUES ('track_sort_direction', 'desc');
INSERT INTO nuke_nsnst_config  VALUES ('ip_reason', 'admin_ip_reason.tpl');
INSERT INTO nuke_nsnst_config  VALUES ('ip_switch', '0');
INSERT INTO nuke_nsnst_config  VALUES ('ftaccess_path', '');
INSERT INTO nuke_nsnst_config  VALUES ('flood_delay', '2');
INSERT INTO nuke_nsnst_config  VALUES ('disable_switch', '0');
INSERT INTO nuke_nsnst_config  VALUES ('track_clear', '1194562800');
INSERT INTO nuke_nsnst_config  VALUES ('blocked_clear', '0');
INSERT INTO nuke_nsnst_config  VALUES ('version_check', '$checktime');
INSERT INTO nuke_nsnst_config  VALUES ('version_newest', '$nsnab_ver_info');
INSERT INTO nuke_nsnst_config  VALUES ('version_number', '2.5.08');

#
# Table structure for table 'nuke_nsnst_countries'
#

DROP TABLE IF EXISTS nuke_nsnst_countries;
CREATE TABLE nuke_nsnst_countries (
   c2c char(2) NOT NULL,
   country varchar(60) NOT NULL,
   KEY c2c (c2c)
);


#
# Dumping data for table 'nuke_nsnst_countries'
#

INSERT INTO nuke_nsnst_countries  VALUES ('00', 'Unknown');
INSERT INTO nuke_nsnst_countries  VALUES ('01', 'IANA Reserved');
INSERT INTO nuke_nsnst_countries  VALUES ('ac', 'Ascension Island');
INSERT INTO nuke_nsnst_countries  VALUES ('ad', 'Andorra');
INSERT INTO nuke_nsnst_countries  VALUES ('ae', 'United Arab Emirates');
INSERT INTO nuke_nsnst_countries  VALUES ('af', 'Afghanistan');
INSERT INTO nuke_nsnst_countries  VALUES ('ag', 'Antigua And Barbuda');
INSERT INTO nuke_nsnst_countries  VALUES ('ai', 'Anguilla');
INSERT INTO nuke_nsnst_countries  VALUES ('al', 'Albania');
INSERT INTO nuke_nsnst_countries  VALUES ('am', 'Armenia');
INSERT INTO nuke_nsnst_countries  VALUES ('an', 'Netherlands Antilles');
INSERT INTO nuke_nsnst_countries  VALUES ('ao', 'Angola');
INSERT INTO nuke_nsnst_countries  VALUES ('ap', 'Aripo');
INSERT INTO nuke_nsnst_countries  VALUES ('aq', 'Antartica');
INSERT INTO nuke_nsnst_countries  VALUES ('ar', 'Argentina');
INSERT INTO nuke_nsnst_countries  VALUES ('as', 'Samoa, American');
INSERT INTO nuke_nsnst_countries  VALUES ('at', 'Austria');
INSERT INTO nuke_nsnst_countries  VALUES ('au', 'Australia');
INSERT INTO nuke_nsnst_countries  VALUES ('aw', 'Aruba');
INSERT INTO nuke_nsnst_countries  VALUES ('ax', 'Aaland Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('az', 'Azerbaijan');
INSERT INTO nuke_nsnst_countries  VALUES ('ba', 'Bosnia And Herzegovina');
INSERT INTO nuke_nsnst_countries  VALUES ('bb', 'Barbados');
INSERT INTO nuke_nsnst_countries  VALUES ('bd', 'Bangladesh');
INSERT INTO nuke_nsnst_countries  VALUES ('be', 'Belgium');
INSERT INTO nuke_nsnst_countries  VALUES ('bf', 'Burkina Faso');
INSERT INTO nuke_nsnst_countries  VALUES ('bg', 'Bulgaria');
INSERT INTO nuke_nsnst_countries  VALUES ('bh', 'Bahrain');
INSERT INTO nuke_nsnst_countries  VALUES ('bi', 'Burundi');
INSERT INTO nuke_nsnst_countries  VALUES ('bj', 'Benin');
INSERT INTO nuke_nsnst_countries  VALUES ('bm', 'Bermuda');
INSERT INTO nuke_nsnst_countries  VALUES ('bn', 'Brunei Darussalam');
INSERT INTO nuke_nsnst_countries  VALUES ('bo', 'Bolivia');
INSERT INTO nuke_nsnst_countries  VALUES ('br', 'Brazil');
INSERT INTO nuke_nsnst_countries  VALUES ('bs', 'Bahamas');
INSERT INTO nuke_nsnst_countries  VALUES ('bt', 'Bhutan');
INSERT INTO nuke_nsnst_countries  VALUES ('bv', 'Bouvet Island');
INSERT INTO nuke_nsnst_countries  VALUES ('bw', 'Botswana');
INSERT INTO nuke_nsnst_countries  VALUES ('by', 'Belarus');
INSERT INTO nuke_nsnst_countries  VALUES ('bz', 'Belize');
INSERT INTO nuke_nsnst_countries  VALUES ('ca', 'Canada');
INSERT INTO nuke_nsnst_countries  VALUES ('cc', 'Cocos (Keeling) Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('cd', 'Congo, Democratic Republic Of The');
INSERT INTO nuke_nsnst_countries  VALUES ('cf', 'Central African Republic');
INSERT INTO nuke_nsnst_countries  VALUES ('cg', 'Congo, Republic Of The');
INSERT INTO nuke_nsnst_countries  VALUES ('ch', 'Switzerland');
INSERT INTO nuke_nsnst_countries  VALUES ('ci', 'Cote D\'ivoire');
INSERT INTO nuke_nsnst_countries  VALUES ('ck', 'Cook Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('cl', 'Chile');
INSERT INTO nuke_nsnst_countries  VALUES ('cm', 'Cameroon');
INSERT INTO nuke_nsnst_countries  VALUES ('cn', 'China');
INSERT INTO nuke_nsnst_countries  VALUES ('co', 'Colombia');
INSERT INTO nuke_nsnst_countries  VALUES ('cr', 'Costa Rica');
INSERT INTO nuke_nsnst_countries  VALUES ('cs', 'Czechoslovakia (Former)');
INSERT INTO nuke_nsnst_countries  VALUES ('cu', 'Cuba');
INSERT INTO nuke_nsnst_countries  VALUES ('cv', 'Cape Verde');
INSERT INTO nuke_nsnst_countries  VALUES ('cx', 'Christmas Island');
INSERT INTO nuke_nsnst_countries  VALUES ('cy', 'Cyprus');
INSERT INTO nuke_nsnst_countries  VALUES ('cz', 'Czech Republic');
INSERT INTO nuke_nsnst_countries  VALUES ('de', 'Germany');
INSERT INTO nuke_nsnst_countries  VALUES ('dj', 'Djibouti');
INSERT INTO nuke_nsnst_countries  VALUES ('dk', 'Denmark');
INSERT INTO nuke_nsnst_countries  VALUES ('dm', 'Dominica');
INSERT INTO nuke_nsnst_countries  VALUES ('do', 'Dominican Republic');
INSERT INTO nuke_nsnst_countries  VALUES ('dz', 'Algeria');
INSERT INTO nuke_nsnst_countries  VALUES ('ec', 'Ecuador');
INSERT INTO nuke_nsnst_countries  VALUES ('ee', 'Estonia');
INSERT INTO nuke_nsnst_countries  VALUES ('eg', 'Egypt');
INSERT INTO nuke_nsnst_countries  VALUES ('eh', 'Western Sahara');
INSERT INTO nuke_nsnst_countries  VALUES ('er', 'Eritrea');
INSERT INTO nuke_nsnst_countries  VALUES ('es', 'Spain');
INSERT INTO nuke_nsnst_countries  VALUES ('et', 'Ethiopia');
INSERT INTO nuke_nsnst_countries  VALUES ('eu', 'European Union');
INSERT INTO nuke_nsnst_countries  VALUES ('fi', 'Finland');
INSERT INTO nuke_nsnst_countries  VALUES ('fj', 'Fiji');
INSERT INTO nuke_nsnst_countries  VALUES ('fk', 'Falkland Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('fm', 'Micronesia, Federated States Of');
INSERT INTO nuke_nsnst_countries  VALUES ('fo', 'Faroe Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('fr', 'France');
INSERT INTO nuke_nsnst_countries  VALUES ('fx', 'France, Metropolitan');
INSERT INTO nuke_nsnst_countries  VALUES ('ga', 'Gabon');
INSERT INTO nuke_nsnst_countries  VALUES ('gb', 'United Kingdom');
INSERT INTO nuke_nsnst_countries  VALUES ('gd', 'Grenada');
INSERT INTO nuke_nsnst_countries  VALUES ('ge', 'Georgia');
INSERT INTO nuke_nsnst_countries  VALUES ('gf', 'French Guiana');
INSERT INTO nuke_nsnst_countries  VALUES ('gg', 'Guernsey');
INSERT INTO nuke_nsnst_countries  VALUES ('gh', 'Ghana');
INSERT INTO nuke_nsnst_countries  VALUES ('gi', 'Gibraltar');
INSERT INTO nuke_nsnst_countries  VALUES ('gl', 'Greenland');
INSERT INTO nuke_nsnst_countries  VALUES ('gm', 'Gambia, The');
INSERT INTO nuke_nsnst_countries  VALUES ('gn', 'Guinea');
INSERT INTO nuke_nsnst_countries  VALUES ('gp', 'Guadeloupe');
INSERT INTO nuke_nsnst_countries  VALUES ('gq', 'Equatorial Guinea');
INSERT INTO nuke_nsnst_countries  VALUES ('gr', 'Greece');
INSERT INTO nuke_nsnst_countries  VALUES ('gs', 'South Georgia and The Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('gt', 'Guatemala');
INSERT INTO nuke_nsnst_countries  VALUES ('gu', 'Guam');
INSERT INTO nuke_nsnst_countries  VALUES ('gw', 'Guinea-Bissau');
INSERT INTO nuke_nsnst_countries  VALUES ('gy', 'Guyana');
INSERT INTO nuke_nsnst_countries  VALUES ('hk', 'Hong Kong');
INSERT INTO nuke_nsnst_countries  VALUES ('hm', 'Heard and Mc Donald Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('hn', 'Honduras');
INSERT INTO nuke_nsnst_countries  VALUES ('hr', 'Croatia');
INSERT INTO nuke_nsnst_countries  VALUES ('ht', 'Haiti');
INSERT INTO nuke_nsnst_countries  VALUES ('hu', 'Hungary');
INSERT INTO nuke_nsnst_countries  VALUES ('id', 'Indonesia');
INSERT INTO nuke_nsnst_countries  VALUES ('ie', 'Ireland');
INSERT INTO nuke_nsnst_countries  VALUES ('il', 'Israel');
INSERT INTO nuke_nsnst_countries  VALUES ('im', 'Isle Of Man');
INSERT INTO nuke_nsnst_countries  VALUES ('in', 'India');
INSERT INTO nuke_nsnst_countries  VALUES ('io', 'British Indian Ocean Territory');
INSERT INTO nuke_nsnst_countries  VALUES ('iq', 'Iraq');
INSERT INTO nuke_nsnst_countries  VALUES ('ir', 'Iran');
INSERT INTO nuke_nsnst_countries  VALUES ('is', 'Iceland');
INSERT INTO nuke_nsnst_countries  VALUES ('it', 'Italy');
INSERT INTO nuke_nsnst_countries  VALUES ('je', 'Jersey');
INSERT INTO nuke_nsnst_countries  VALUES ('jm', 'Jamaica');
INSERT INTO nuke_nsnst_countries  VALUES ('jo', 'Jordan');
INSERT INTO nuke_nsnst_countries  VALUES ('jp', 'Japan');
INSERT INTO nuke_nsnst_countries  VALUES ('ke', 'Kenya');
INSERT INTO nuke_nsnst_countries  VALUES ('kg', 'Kyrgyzstan');
INSERT INTO nuke_nsnst_countries  VALUES ('kh', 'Cambodia');
INSERT INTO nuke_nsnst_countries  VALUES ('ki', 'Kiribati');
INSERT INTO nuke_nsnst_countries  VALUES ('km', 'Comoros');
INSERT INTO nuke_nsnst_countries  VALUES ('kn', 'SaINT Kitts And Nevis');
INSERT INTO nuke_nsnst_countries  VALUES ('kp', 'Korea, North');
INSERT INTO nuke_nsnst_countries  VALUES ('kr', 'Korea, South');
INSERT INTO nuke_nsnst_countries  VALUES ('kw', 'Kuwait');
INSERT INTO nuke_nsnst_countries  VALUES ('ky', 'Cayman Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('kz', 'Kazakhstan');
INSERT INTO nuke_nsnst_countries  VALUES ('la', 'Laos');
INSERT INTO nuke_nsnst_countries  VALUES ('lb', 'Lebanon');
INSERT INTO nuke_nsnst_countries  VALUES ('lc', 'SaINT Lucia');
INSERT INTO nuke_nsnst_countries  VALUES ('li', 'Liechtenstein');
INSERT INTO nuke_nsnst_countries  VALUES ('lk', 'Sri Lanka');
INSERT INTO nuke_nsnst_countries  VALUES ('lr', 'Liberia');
INSERT INTO nuke_nsnst_countries  VALUES ('ls', 'Lesotho');
INSERT INTO nuke_nsnst_countries  VALUES ('lt', 'Lithuania');
INSERT INTO nuke_nsnst_countries  VALUES ('lu', 'Luxembourg');
INSERT INTO nuke_nsnst_countries  VALUES ('lv', 'Latvia');
INSERT INTO nuke_nsnst_countries  VALUES ('ly', 'Libya');
INSERT INTO nuke_nsnst_countries  VALUES ('ma', 'Morocco');
INSERT INTO nuke_nsnst_countries  VALUES ('mc', 'Monaco');
INSERT INTO nuke_nsnst_countries  VALUES ('md', 'Moldova');
INSERT INTO nuke_nsnst_countries  VALUES ('me', 'Montenegro');
INSERT INTO nuke_nsnst_countries  VALUES ('mg', 'Madagascar');
INSERT INTO nuke_nsnst_countries  VALUES ('mh', 'Marshall Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('mk', 'Macedonia');
INSERT INTO nuke_nsnst_countries  VALUES ('ml', 'Mali');
INSERT INTO nuke_nsnst_countries  VALUES ('mm', 'Myanmar');
INSERT INTO nuke_nsnst_countries  VALUES ('mn', 'Mongolia');
INSERT INTO nuke_nsnst_countries  VALUES ('mo', 'Macau');
INSERT INTO nuke_nsnst_countries  VALUES ('mp', 'Northern Mariana Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('mq', 'Martinique');
INSERT INTO nuke_nsnst_countries  VALUES ('mr', 'Mauritania');
INSERT INTO nuke_nsnst_countries  VALUES ('ms', 'Montserrat');
INSERT INTO nuke_nsnst_countries  VALUES ('mt', 'Malta');
INSERT INTO nuke_nsnst_countries  VALUES ('mu', 'Mauritius');
INSERT INTO nuke_nsnst_countries  VALUES ('mv', 'Maldives');
INSERT INTO nuke_nsnst_countries  VALUES ('mw', 'Malawi');
INSERT INTO nuke_nsnst_countries  VALUES ('mx', 'Mexico');
INSERT INTO nuke_nsnst_countries  VALUES ('my', 'Malaysia');
INSERT INTO nuke_nsnst_countries  VALUES ('mz', 'Mozambique');
INSERT INTO nuke_nsnst_countries  VALUES ('na', 'Namibia');
INSERT INTO nuke_nsnst_countries  VALUES ('nc', 'New Caledonia');
INSERT INTO nuke_nsnst_countries  VALUES ('ne', 'Niger');
INSERT INTO nuke_nsnst_countries  VALUES ('nf', 'Norfork Island');
INSERT INTO nuke_nsnst_countries  VALUES ('ng', 'Nigeria');
INSERT INTO nuke_nsnst_countries  VALUES ('ni', 'Nicaragua');
INSERT INTO nuke_nsnst_countries  VALUES ('nl', 'Netherlands');
INSERT INTO nuke_nsnst_countries  VALUES ('no', 'Norway');
INSERT INTO nuke_nsnst_countries  VALUES ('np', 'Nepal');
INSERT INTO nuke_nsnst_countries  VALUES ('nr', 'Nauru');
INSERT INTO nuke_nsnst_countries  VALUES ('nu', 'Niue');
INSERT INTO nuke_nsnst_countries  VALUES ('nz', 'New Zealand');
INSERT INTO nuke_nsnst_countries  VALUES ('om', 'Oman');
INSERT INTO nuke_nsnst_countries  VALUES ('pa', 'Panama');
INSERT INTO nuke_nsnst_countries  VALUES ('pe', 'Peru');
INSERT INTO nuke_nsnst_countries  VALUES ('pf', 'French Polynesia');
INSERT INTO nuke_nsnst_countries  VALUES ('pg', 'Papua New Guinea');
INSERT INTO nuke_nsnst_countries  VALUES ('ph', 'Philippines');
INSERT INTO nuke_nsnst_countries  VALUES ('pk', 'Pakistan');
INSERT INTO nuke_nsnst_countries  VALUES ('pl', 'Poland');
INSERT INTO nuke_nsnst_countries  VALUES ('pm', 'SaINT Pierre and Miquelon');
INSERT INTO nuke_nsnst_countries  VALUES ('pn', 'Pitcairn Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('pr', 'Puerto Rico');
INSERT INTO nuke_nsnst_countries  VALUES ('ps', 'Palestine');
INSERT INTO nuke_nsnst_countries  VALUES ('pt', 'Portugal');
INSERT INTO nuke_nsnst_countries  VALUES ('pw', 'Palau');
INSERT INTO nuke_nsnst_countries  VALUES ('py', 'Paraguay');
INSERT INTO nuke_nsnst_countries  VALUES ('qa', 'Qatar');
INSERT INTO nuke_nsnst_countries  VALUES ('re', 'Reunion');
INSERT INTO nuke_nsnst_countries  VALUES ('rs', 'Serbia');
INSERT INTO nuke_nsnst_countries  VALUES ('ro', 'Romania');
INSERT INTO nuke_nsnst_countries  VALUES ('ru', 'Russia');
INSERT INTO nuke_nsnst_countries  VALUES ('rw', 'Rwanda');
INSERT INTO nuke_nsnst_countries  VALUES ('sa', 'Saudi Arabia');
INSERT INTO nuke_nsnst_countries  VALUES ('sb', 'Solomon Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('sc', 'Seychelles');
INSERT INTO nuke_nsnst_countries  VALUES ('sd', 'Sudan');
INSERT INTO nuke_nsnst_countries  VALUES ('se', 'Sweden');
INSERT INTO nuke_nsnst_countries  VALUES ('sg', 'Singapore');
INSERT INTO nuke_nsnst_countries  VALUES ('sh', 'SaINT Helena');
INSERT INTO nuke_nsnst_countries  VALUES ('si', 'Slovenia');
INSERT INTO nuke_nsnst_countries  VALUES ('sj', 'Svalbard');
INSERT INTO nuke_nsnst_countries  VALUES ('sk', 'Slovakia');
INSERT INTO nuke_nsnst_countries  VALUES ('sl', 'Sierra Leone');
INSERT INTO nuke_nsnst_countries  VALUES ('sm', 'San Marino');
INSERT INTO nuke_nsnst_countries  VALUES ('sn', 'Senegal');
INSERT INTO nuke_nsnst_countries  VALUES ('so', 'Somalia');
INSERT INTO nuke_nsnst_countries  VALUES ('sr', 'Suriname');
INSERT INTO nuke_nsnst_countries  VALUES ('st', 'Sao Tome And Principe');
INSERT INTO nuke_nsnst_countries  VALUES ('su', 'Soviet Union');
INSERT INTO nuke_nsnst_countries  VALUES ('sv', 'El Salvador');
INSERT INTO nuke_nsnst_countries  VALUES ('sy', 'Syria');
INSERT INTO nuke_nsnst_countries  VALUES ('sz', 'Swaziland');
INSERT INTO nuke_nsnst_countries  VALUES ('tc', 'Turks And Caicos Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('td', 'Chad');
INSERT INTO nuke_nsnst_countries  VALUES ('tf', 'French Southern Territories');
INSERT INTO nuke_nsnst_countries  VALUES ('tg', 'Togo');
INSERT INTO nuke_nsnst_countries  VALUES ('th', 'Thailand');
INSERT INTO nuke_nsnst_countries  VALUES ('tj', 'Tajikistan');
INSERT INTO nuke_nsnst_countries  VALUES ('tk', 'Tokelau');
INSERT INTO nuke_nsnst_countries  VALUES ('tl', 'Timor-leste');
INSERT INTO nuke_nsnst_countries  VALUES ('tm', 'Turkmenistan');
INSERT INTO nuke_nsnst_countries  VALUES ('tn', 'Tunisia');
INSERT INTO nuke_nsnst_countries  VALUES ('to', 'Tonga');
INSERT INTO nuke_nsnst_countries  VALUES ('tp', 'East Timor');
INSERT INTO nuke_nsnst_countries  VALUES ('tr', 'Turkey');
INSERT INTO nuke_nsnst_countries  VALUES ('tt', 'Trinidad And Tobago');
INSERT INTO nuke_nsnst_countries  VALUES ('tv', 'Tuvalu');
INSERT INTO nuke_nsnst_countries  VALUES ('tw', 'Taiwan');
INSERT INTO nuke_nsnst_countries  VALUES ('tz', 'Tanzania');
INSERT INTO nuke_nsnst_countries  VALUES ('ua', 'Ukraine');
INSERT INTO nuke_nsnst_countries  VALUES ('ug', 'Uganda');
INSERT INTO nuke_nsnst_countries  VALUES ('um', 'United States Minor Outlying Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('un', 'United Nations');
INSERT INTO nuke_nsnst_countries  VALUES ('us', 'United States');
INSERT INTO nuke_nsnst_countries  VALUES ('uy', 'Uruguay');
INSERT INTO nuke_nsnst_countries  VALUES ('uz', 'Uzbekistan');
INSERT INTO nuke_nsnst_countries  VALUES ('va', 'Vatican City State');
INSERT INTO nuke_nsnst_countries  VALUES ('vc', 'SaINT Vincent And The Grenadines');
INSERT INTO nuke_nsnst_countries  VALUES ('ve', 'Venezuela');
INSERT INTO nuke_nsnst_countries  VALUES ('vg', 'Virgin Islands, British');
INSERT INTO nuke_nsnst_countries  VALUES ('vi', 'Virgin Islands, American');
INSERT INTO nuke_nsnst_countries  VALUES ('vn', 'Viet Nam');
INSERT INTO nuke_nsnst_countries  VALUES ('vu', 'Vanuatu');
INSERT INTO nuke_nsnst_countries  VALUES ('wf', 'Wallis and Futuna Islands');
INSERT INTO nuke_nsnst_countries  VALUES ('ws', 'Samoa');
INSERT INTO nuke_nsnst_countries  VALUES ('xe', 'England');
INSERT INTO nuke_nsnst_countries  VALUES ('xs', 'Scotland');
INSERT INTO nuke_nsnst_countries  VALUES ('xw', 'Wales');
INSERT INTO nuke_nsnst_countries  VALUES ('ye', 'Yemen');
INSERT INTO nuke_nsnst_countries  VALUES ('yt', 'Mayotte');
INSERT INTO nuke_nsnst_countries  VALUES ('yu', 'Yugoslavia');
INSERT INTO nuke_nsnst_countries  VALUES ('za', 'South Africa');
INSERT INTO nuke_nsnst_countries  VALUES ('zm', 'Zambia');
INSERT INTO nuke_nsnst_countries  VALUES ('zw', 'Zimbabwe');
INSERT INTO nuke_nsnst_countries  VALUES ('02', 'UnAllocated');

#
# Table structure for table 'nuke_nsnst_excluded_ranges'
#

DROP TABLE IF EXISTS nuke_nsnst_excluded_ranges;
CREATE TABLE nuke_nsnst_excluded_ranges (
   ip_lo int(10) unsigned DEFAULT '0' NOT NULL,
   ip_hi int(10) unsigned DEFAULT '0' NOT NULL,
   date int(20) DEFAULT '0' NOT NULL,
   notes text NOT NULL,
   c2c char(2) DEFAULT '00' NOT NULL,
   KEY code (ip_lo, ip_hi, c2c)
);


#
# Dumping data for table 'nuke_nsnst_excluded_ranges'
#


#
# Table structure for table 'nuke_nsnst_ip2country'
#

DROP TABLE IF EXISTS nuke_nsnst_ip2country;
CREATE TABLE nuke_nsnst_ip2country (
   ip_lo int(10) unsigned DEFAULT '0' NOT NULL,
   ip_hi int(10) unsigned DEFAULT '0' NOT NULL,
   date int(20) DEFAULT '0' NOT NULL,
   c2c char(2) NOT NULL,
   KEY code (ip_lo, ip_hi, c2c)
);


#
# Dumping data for table 'nuke_nsnst_ip2country'
#

INSERT INTO nuke_nsnst_ip2country  VALUES ('0', '16777215', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('16777216', '33554431', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('33554432', '50331647', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('83886080', '100663295', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('117440512', '134217727', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('167772160', '184549375', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('234881024', '251658239', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('385875968', '402653183', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('452984832', '469762047', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('520093696', '536870911', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('603979776', '620756991', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('620756992', '637534207', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('687865856', '704643071', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('704643072', '721420287', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1241513984', '1258291199', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1258291200', '1275068415', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1291845632', '1308622847', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1308622848', '1325400063', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1325400064', '1342177279', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1526726656', '1543503871', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1543503872', '1560281087', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1560281088', '1577058303', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1577058304', '1593835519', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1593835520', '1610612735', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1610612736', '1627389951', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1627389952', '1644167167', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1644167168', '1660944383', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1660944384', '1677721599', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1677721600', '1694498815', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1694498816', '1711276031', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1711276032', '1728053247', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1728053248', '1744830463', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1744830464', '1761607679', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1761607680', '1778384895', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1778384896', '1795162111', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1795162112', '1811939327', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1811939328', '1828716543', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1828716544', '1845493759', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1845493760', '1862270975', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1862270976', '1879048191', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1879048192', '1895825407', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1895825408', '1912602623', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1912602624', '1929379839', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1929379840', '1946157055', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1946157056', '1962934271', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1962934272', '1979711487', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1979711488', '1996488703', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('1996488704', '2013265919', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2013265920', '2030043135', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2080374784', '2097151999', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2097152000', '2113929215', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2113929216', '2130706431', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2130706432', '2147483647', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2851995648', '2852061183', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2886729728', '2887778303', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2902458368', '2919235583', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2919235584', '2936012799', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2936012800', '2952790015', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2952790016', '2969567231', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2969567232', '2986344447', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('2986344448', '3003121663', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3003121664', '3019898879', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3019898880', '3036676095', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3036676096', '3053453311', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3053453312', '3070230527', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3070230528', '3087007743', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3087007744', '3103784959', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3103784960', '3120562175', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3120562176', '3137339391', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3137339392', '3154116607', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3187671040', '3204448255', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3221225472', '3221258239', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3305111552', '3321888767', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3741319168', '3758096383', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3758096384', '3774873599', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3774873600', '3791650815', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3791650816', '3808428031', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3808428032', '3825205247', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3825205248', '3841982463', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3841982464', '3858759679', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3858759680', '3875536895', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3875536896', '3892314111', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3892314112', '3909091327', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3909091328', '3925868543', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3925868544', '3942645759', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3942645760', '3959422975', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3959422976', '3976200191', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3976200192', '3992977407', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('3992977408', '4009754623', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4009754624', '4026531839', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4026531840', '4043309055', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4043309056', '4060086271', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4060086272', '4076863487', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4076863488', '4093640703', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4093640704', '4110417919', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4110417920', '4127195135', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4127195136', '4143972351', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4143972352', '4160749567', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4160749568', '4177526783', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4177526784', '4194303999', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4194304000', '4211081215', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4211081216', '4227858431', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4227858432', '4244635647', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4244635648', '4261412863', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4261412864', '4278190079', '1098424776', '01');
INSERT INTO nuke_nsnst_ip2country  VALUES ('4278190080', '4294967295', '1098424776', '01');

#
# Table structure for table 'nuke_nsnst_protected_ranges'
#

DROP TABLE IF EXISTS nuke_nsnst_protected_ranges;
CREATE TABLE nuke_nsnst_protected_ranges (
   ip_lo int(10) unsigned DEFAULT '0' NOT NULL,
   ip_hi int(10) unsigned DEFAULT '0' NOT NULL,
   date int(20) DEFAULT '0' NOT NULL,
   notes text NOT NULL,
   c2c char(2) DEFAULT '00' NOT NULL,
   KEY code (ip_lo, ip_hi, c2c)
);


#
# Dumping data for table 'nuke_nsnst_protected_ranges'
#


#
# Table structure for table 'nuke_nsnst_tracked_ips'
#

DROP TABLE IF EXISTS nuke_nsnst_tracked_ips;
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


#
# Dumping data for table 'nuke_nsnst_tracked_ips'
#

INSERT INTO nuke_nsnst_tracked_ips  VALUES ('333', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604334', '/evo/admin.php?tablelist=Array&op=BackupDB&dbdata=1&dbstruct=1&drop=1', 'none', 'none', '127.0.0.1', '3924', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('332', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604326', '/evo/admin.php?op=database', 'none', 'none', '127.0.0.1', '3921', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('331', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604303', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '3909', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('330', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604298', '/evo/admin.php?op=adminStory', 'none', 'none', '127.0.0.1', '3909', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('329', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604298', '/evo/admin.php?topic=1&catid=0&topic_icon=0&writes=1&ihome=0&acomm=0&alanguage=&sid=1&op=ChangeStory', 'none', 'none', '127.0.0.1', '3909', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('328', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604257', '/evo/admin.php?op=EditStory&sid=1', 'none', 'none', '127.0.0.1', '3902', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('327', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604212', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '3896', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('326', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604154', '/evo/modules/Forums/admin/admin_user_ban.php?none', 'none', 'none', '127.0.0.1', '3869', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('325', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604152', '/evo/modules/Forums/admin/admin_user_ban.php?username=&mode=edit&ban_ip=&ban_email=*@evodesign.hu&submit=Elküld', 'none', 'none', '127.0.0.1', '3869', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('324', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604063', '/evo/modules/Forums/admin/admin_user_ban.php?none', 'none', 'none', '127.0.0.1', '3864', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('323', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604060', '/evo/modules/Forums/admin/admin_user_ban.php?username=&mode=edit&ban_ip=&unban_ip=Array&ban_email=&submit=Elküld', 'none', 'none', '127.0.0.1', '3864', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('322', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604047', '/evo/modules/Forums/admin/admin_user_ban.php?sid=&module=af5c1095a6343088fc51dc361d6ec755', 'none', 'none', '127.0.0.1', '3858', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('321', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604044', '/evo/modules/Forums/admin/admin_user_ban.php?username=&mode=edit&ban_ip=&ban_email=&submit=Elküld', 'none', 'none', '127.0.0.1', '3858', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('287', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603513', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '3743', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('286', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194094786', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '4761', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('285', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194094783', '/evo/admin.php?op=blocks&rs=deleteBlock&rst=&rsrnd=1194094783453&rsargs=Array', 'none', 'none', '127.0.0.1', '4761', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('283', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194094722', '/evo/admin.php?op=blocks', 'none', 'none', '127.0.0.1', '4750', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('284', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194094783', '/evo/admin.php?op=blocks&rs=blocks_update&rst=&rsrnd=1194094783437&rsargs=Array', 'none', 'none', '127.0.0.1', '4760', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('282', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194094722', '/evo/admin.php?op=newBlock&bid=19&url=&headline=0&blockfile=block-CDC_radio.php&bposition=l&blanguage=&active=1&refresh=3600&view=1&update=1', 'none', 'none', '127.0.0.1', '4750', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('281', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194094712', '/evo/admin.php?op=newBlock', 'none', 'none', '127.0.0.1', '4747', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('279', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194094700', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '4739', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('280', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194094707', '/evo/admin.php?op=blocks', 'none', 'none', '127.0.0.1', '4744', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('278', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093983', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '4483', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('277', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093927', '/evo/modules.php?name=Forums&file=viewtopic&p=1', 'none', 'none', '127.0.0.1', '4475', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('276', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093889', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '4466', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('275', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093867', '/evo/admin.php?tablelist=Array&op=BackupDB&dbdata=1&dbstruct=1&drop=1', 'none', 'none', '127.0.0.1', '4464', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('274', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093849', '/evo/admin.php?op=database', 'none', 'none', '127.0.0.1', '4459', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('273', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093281', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '4408', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('272', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093278', '/evo/admin.php?op=adminStory', 'none', 'none', '127.0.0.1', '4408', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('271', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093277', '/evo/admin.php?topic=1&catid=0&topic_icon=0&writes=1&ihome=0&acomm=0&alanguage=&sid=1&op=ChangeStory', 'none', 'none', '127.0.0.1', '4408', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('270', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093251', '/evo/admin.php?op=EditStory&sid=1', 'none', 'none', '127.0.0.1', '4404', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('269', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093125', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '4392', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('268', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093118', '/evo/admin.php?op=adminStory', 'none', 'none', '127.0.0.1', '4388', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('267', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093117', '/evo/admin.php?topic=1&catid=0&topic_icon=0&writes=1&ihome=0&acomm=0&alanguage=&sid=1&op=ChangeStory', 'none', 'none', '127.0.0.1', '4388', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('266', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093099', '/evo/admin.php?op=EditStory&sid=1', 'none', 'none', '127.0.0.1', '4382', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('265', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093048', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '4365', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('264', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093044', '/evo/admin.php?op=adminStory', 'none', 'none', '127.0.0.1', '4365', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('263', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194093044', '/evo/admin.php?topic=1&catid=0&topic_icon=0&writes=1&ihome=0&acomm=0&alanguage=&sid=1&op=ChangeStory', 'none', 'none', '127.0.0.1', '4365', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('262', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194092896', '/evo/admin.php?op=EditStory&sid=1', 'none', 'none', '127.0.0.1', '4353', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('320', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604030', '/evo/modules/Forums/admin/admin_user_ban.php?sid=&module=af5c1095a6343088fc51dc361d6ec755', 'none', 'none', '127.0.0.1', '3855', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('319', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194604026', '/evo/modules/Forums/admin/admin_user_ban.php?username=&mode=edit&ban_ip=evodesign.hu&ban_email=&submit=Elküld', 'none', 'none', '127.0.0.1', '3855', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('318', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603994', '/evo/modules/Forums/admin/admin_user_ban.php?sid=&module=af5c1095a6343088fc51dc361d6ec755', 'none', 'none', '127.0.0.1', '3840', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('317', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603990', '/evo/modules/Forums/admin/admin_user_ban.php?username=dragon&mode=edit&ban_ip=&ban_email=&submit=Elküld', 'none', 'none', '127.0.0.1', '3840', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('316', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603979', '/evo/modules/Forums/admin/admin_user_ban.php?sid=&module=af5c1095a6343088fc51dc361d6ec755', 'none', 'none', '127.0.0.1', '3837', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('315', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603977', '/evo/modules/Forums/admin/admin_disallow.php?sid=&module=ea5035549df8de028f30e5723aac468d', 'none', 'none', '127.0.0.1', '3837', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('314', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603970', '/evo/modules/Forums/admin/admin_disallow.php?none', 'none', 'none', '127.0.0.1', '3834', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('313', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603968', '/evo/modules/Forums/admin/admin_disallow.php?disallowed_user=dragon&add_name=Hozzáadás&disallowed_id=1', 'none', 'none', '127.0.0.1', '3834', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('312', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603962', '/evo/modules/Forums/admin/admin_disallow.php?none', 'none', 'none', '127.0.0.1', '3831', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('311', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603959', '/evo/modules/Forums/admin/admin_disallow.php?disallowed_user=flashzene&add_name=Hozzáadás&disallowed_id=1', 'none', 'none', '127.0.0.1', '3831', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('310', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603947', '/evo/modules/Forums/admin/admin_disallow.php?none', 'none', 'none', '127.0.0.1', '3827', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('309', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603943', '/evo/modules/Forums/admin/admin_disallow.php?disallowed_user=predikator&add_name=Hozzáadás&disallowed_id=', 'none', 'none', '127.0.0.1', '3827', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('308', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603927', '/evo/modules/Forums/admin/admin_disallow.php?sid=&module=ea5035549df8de028f30e5723aac468d', 'none', 'none', '127.0.0.1', '3825', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('307', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603917', '/evo/modules/Forums/admin/admin_topic_type.php?sid=&module=6c1a7344e33b489244c5ef0a9f5fd89e', 'none', 'none', '127.0.0.1', '3823', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('306', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603888', '/evo/modules/Forums/admin/index.php?pane=left', 'none', 'none', '127.0.0.1', '3817', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('305', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603888', '/evo/modules/Forums/admin/index.php?pane=right', 'none', 'none', '127.0.0.1', '3820', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('304', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603885', '/evo/modules/Forums/admin/index.php?none', 'none', 'none', '127.0.0.1', '3817', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('303', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603884', '/evo/admin.php?op=forums', 'none', 'none', '127.0.0.1', '3817', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('302', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603826', '/evo/modules.php?name=Your_Account&file=admin&op=UsersConfig', 'none', 'none', '127.0.0.1', '3814', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('301', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603820', '/evo/modules.php?name=Your_Account&file=admin', 'none', 'none', '127.0.0.1', '3811', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('300', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603805', '/evo/modules.php?name=Your_Account&file=admin&op=UsersConfig', 'none', 'none', '127.0.0.1', '3807', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('299', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603798', '/evo/modules.php?name=Your_Account&file=admin', 'none', 'none', '127.0.0.1', '3804', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('298', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603736', '/evo/modules.php?name=Your_Account&file=admin&op=UsersConfig', 'none', 'none', '127.0.0.1', '3801', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('296', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603648', '/evo/modules.php?name=Your_Account&file=admin&op=UsersConfig', 'none', 'none', '127.0.0.1', '3771', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('297', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603678', '/evo/modules.php?name=Your_Account&file=admin', 'none', 'none', '127.0.0.1', '3776', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('295', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603643', '/evo/modules.php?name=Your_Account&file=admin', 'none', 'none', '127.0.0.1', '3771', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('294', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603625', '/evo/admin.php?op=ABMain', 'none', 'none', '127.0.0.1', '3766', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('293', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603615', '/evo/admin.php?none', 'none', 'none', '127.0.0.1', '3759', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('292', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603615', '/evo/admin.php?aid=Shadow&persistent=1&op=login', 'none', 'none', '127.0.0.1', '3759', 'POST', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('291', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603611', '/evo/admin.php?none', 'none', 'none', '127.0.0.1', '3756', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('290', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603603', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '3753', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('289', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603587', '/evo/modules.php?name=News&file=topics&topic=1', 'none', 'none', '127.0.0.1', '3749', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('288', '127.0.0.1', '2130706433', '1', '', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194603587', '/evo/modules.php?name=News&new_topic=1', 'none', 'none', '127.0.0.1', '3749', 'GET', '01');
INSERT INTO nuke_nsnst_tracked_ips  VALUES ('261', '127.0.0.1', '2130706433', '2', 'Shadow', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; hu; rv:1.8.1.9) Gecko/20071025 Firefox/2.0.0.9', '', '1194092862', '/evo/index.php?none', 'none', 'none', '127.0.0.1', '4344', 'GET', '01');

#
# Table structure for table 'nuke_pages'
#

DROP TABLE IF EXISTS nuke_pages;
CREATE TABLE nuke_pages (
   pid int(10) NOT NULL auto_increment,
   cid int(10) DEFAULT '0' NOT NULL,
   title varchar(255) NOT NULL,
   subtitle varchar(255) NOT NULL,
   active int(1) DEFAULT '0' NOT NULL,
   page_header text NOT NULL,
   text text NOT NULL,
   page_footer text NOT NULL,
   signature text NOT NULL,
   date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
   counter int(10) DEFAULT '0' NOT NULL,
   clanguage varchar(30) NOT NULL,
   PRIMARY KEY (pid),
   KEY cid (cid)
);


#
# Dumping data for table 'nuke_pages'
#


#
# Table structure for table 'nuke_pages_categories'
#

DROP TABLE IF EXISTS nuke_pages_categories;
CREATE TABLE nuke_pages_categories (
   cid int(10) NOT NULL auto_increment,
   title varchar(255) NOT NULL,
   description text NOT NULL,
   PRIMARY KEY (cid)
);


#
# Dumping data for table 'nuke_pages_categories'
#


#
# Table structure for table 'nuke_poll_check'
#

DROP TABLE IF EXISTS nuke_poll_check;
CREATE TABLE nuke_poll_check (
   ip varchar(20) NOT NULL,
   time varchar(14) NOT NULL,
   pollID int(10) DEFAULT '0' NOT NULL
);


#
# Dumping data for table 'nuke_poll_check'
#


#
# Table structure for table 'nuke_poll_data'
#

DROP TABLE IF EXISTS nuke_poll_data;
CREATE TABLE nuke_poll_data (
   pollID int(11) DEFAULT '0' NOT NULL,
   optionText char(50) NOT NULL,
   optionCount int(11) DEFAULT '0' NOT NULL,
   voteID int(11) DEFAULT '0' NOT NULL
);


#
# Dumping data for table 'nuke_poll_data'
#

INSERT INTO nuke_poll_data  VALUES ('1', 'Hmm, Nem rossz', '0', '1');
INSERT INTO nuke_poll_data  VALUES ('1', 'Szuper', '0', '2');
INSERT INTO nuke_poll_data  VALUES ('1', 'Borzalmas', '0', '3');
INSERT INTO nuke_poll_data  VALUES ('1', 'A legjobb!', '0', '4');
INSERT INTO nuke_poll_data  VALUES ('1', 'Mi az ördög ez?', '0', '5');
INSERT INTO nuke_poll_data  VALUES ('1', '', '0', '6');
INSERT INTO nuke_poll_data  VALUES ('1', '', '0', '7');
INSERT INTO nuke_poll_data  VALUES ('1', '', '0', '8');
INSERT INTO nuke_poll_data  VALUES ('1', '', '0', '9');
INSERT INTO nuke_poll_data  VALUES ('1', '', '0', '10');
INSERT INTO nuke_poll_data  VALUES ('1', '', '0', '11');
INSERT INTO nuke_poll_data  VALUES ('1', '', '0', '12');

#
# Table structure for table 'nuke_poll_desc'
#

DROP TABLE IF EXISTS nuke_poll_desc;
CREATE TABLE nuke_poll_desc (
   pollID int(11) NOT NULL auto_increment,
   pollTitle varchar(100) NOT NULL,
   timeStamp int(11) DEFAULT '0' NOT NULL,
   voters mediumint(9) DEFAULT '0' NOT NULL,
   planguage varchar(30) NOT NULL,
   artid int(10) DEFAULT '0' NOT NULL,
   PRIMARY KEY (pollID)
);


#
# Dumping data for table 'nuke_poll_desc'
#

INSERT INTO nuke_poll_desc  VALUES ('1', 'Mit gondolsz a weboldalunkról?', '961405160', '0', 'hungarian', '0');

#
# Table structure for table 'nuke_pollcomments'
#

DROP TABLE IF EXISTS nuke_pollcomments;
CREATE TABLE nuke_pollcomments (
   tid int(11) NOT NULL auto_increment,
   pid int(11) DEFAULT '0' NOT NULL,
   pollID int(11) DEFAULT '0' NOT NULL,
   date datetime,
   name varchar(60) NOT NULL,
   email varchar(60),
   url varchar(60),
   host_name varchar(60),
   subject varchar(60) NOT NULL,
   comment text NOT NULL,
   score tinyint(4) DEFAULT '0' NOT NULL,
   reason tinyint(4) DEFAULT '0' NOT NULL,
   PRIMARY KEY (tid),
   KEY pid (pid),
   KEY pollID (pollID)
);


#
# Dumping data for table 'nuke_pollcomments'
#


#
# Table structure for table 'nuke_profile_views'
#

DROP TABLE IF EXISTS nuke_profile_views;
CREATE TABLE nuke_profile_views (
   user_id mediumint(8) NOT NULL,
   time int(11) NOT NULL,
   ip_address varchar(20) NOT NULL
);


#
# Dumping data for table 'nuke_profile_views'
#

INSERT INTO nuke_profile_views  VALUES ('2', '1193251365', '7f000001');

#
# Table structure for table 'nuke_queue'
#

DROP TABLE IF EXISTS nuke_queue;
CREATE TABLE nuke_queue (
   qid smallint(5) unsigned NOT NULL auto_increment,
   uid mediumint(9) DEFAULT '0' NOT NULL,
   uname varchar(40) NOT NULL,
   subject varchar(100) NOT NULL,
   story text,
   storyext text NOT NULL,
   timestamp datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
   topic varchar(20) NOT NULL,
   alanguage varchar(30) NOT NULL,
   PRIMARY KEY (qid),
   KEY uid (uid),
   KEY uname (uname)
);


#
# Dumping data for table 'nuke_queue'
#


#
# Table structure for table 'nuke_quotes'
#

DROP TABLE IF EXISTS nuke_quotes;
CREATE TABLE nuke_quotes (
   qid int(10) unsigned NOT NULL auto_increment,
   quote text,
   PRIMARY KEY (qid)
);


#
# Dumping data for table 'nuke_quotes'
#

INSERT INTO nuke_quotes  VALUES ('1', 'Nos morituri te salutamus - CBHS');

#
# Table structure for table 'nuke_referer'
#

DROP TABLE IF EXISTS nuke_referer;
CREATE TABLE nuke_referer (
   url varchar(100) NOT NULL,
   lasttime int(10) unsigned DEFAULT '0' NOT NULL,
   link varchar(100) NOT NULL,
   PRIMARY KEY (url),
   KEY lasttime (lasttime)
);


#
# Dumping data for table 'nuke_referer'
#


#
# Table structure for table 'nuke_related'
#

DROP TABLE IF EXISTS nuke_related;
CREATE TABLE nuke_related (
   rid int(11) NOT NULL auto_increment,
   tid int(11) DEFAULT '0' NOT NULL,
   name varchar(30) NOT NULL,
   url varchar(200) NOT NULL,
   PRIMARY KEY (rid),
   KEY tid (tid)
);


#
# Dumping data for table 'nuke_related'
#


#
# Table structure for table 'nuke_reviews'
#

DROP TABLE IF EXISTS nuke_reviews;
CREATE TABLE nuke_reviews (
   id int(10) NOT NULL auto_increment,
   date date DEFAULT '0000-00-00' NOT NULL,
   title varchar(150) NOT NULL,
   text text NOT NULL,
   reviewer varchar(25),
   email varchar(60),
   score int(10) DEFAULT '0' NOT NULL,
   cover varchar(100) NOT NULL,
   url varchar(100) NOT NULL,
   url_title varchar(50) NOT NULL,
   hits int(10) DEFAULT '0' NOT NULL,
   rlanguage varchar(30) NOT NULL,
   PRIMARY KEY (id)
);


#
# Dumping data for table 'nuke_reviews'
#


#
# Table structure for table 'nuke_reviews_add'
#

DROP TABLE IF EXISTS nuke_reviews_add;
CREATE TABLE nuke_reviews_add (
   id int(10) NOT NULL auto_increment,
   date date,
   title varchar(150) NOT NULL,
   text text NOT NULL,
   reviewer varchar(25) NOT NULL,
   email varchar(60),
   score int(10) DEFAULT '0' NOT NULL,
   url varchar(100) NOT NULL,
   url_title varchar(50) NOT NULL,
   rlanguage varchar(30) NOT NULL,
   PRIMARY KEY (id)
);


#
# Dumping data for table 'nuke_reviews_add'
#


#
# Table structure for table 'nuke_reviews_comments'
#

DROP TABLE IF EXISTS nuke_reviews_comments;
CREATE TABLE nuke_reviews_comments (
   cid int(10) NOT NULL auto_increment,
   rid int(10) DEFAULT '0' NOT NULL,
   userid varchar(25) NOT NULL,
   date datetime,
   comments text,
   score int(10) DEFAULT '0' NOT NULL,
   PRIMARY KEY (cid),
   KEY rid (rid),
   KEY userid (userid)
);


#
# Dumping data for table 'nuke_reviews_comments'
#


#
# Table structure for table 'nuke_reviews_main'
#

DROP TABLE IF EXISTS nuke_reviews_main;
CREATE TABLE nuke_reviews_main (
   title varchar(100),
   description text,
   KEY title (title)
);


#
# Dumping data for table 'nuke_reviews_main'
#

INSERT INTO nuke_reviews_main  VALUES ('Ismertetõk modul címsora', 'Ismertetõk modul leírása');

#
# Table structure for table 'nuke_security_agents'
#

DROP TABLE IF EXISTS nuke_security_agents;
CREATE TABLE nuke_security_agents (
   agent_name varchar(20) NOT NULL,
   agent_fullname varchar(30),
   agent_hostname varchar(30),
   agent_url varchar(80),
   agent_ban int(1) DEFAULT '0' NOT NULL,
   agent_desc text,
   PRIMARY KEY (agent_name)
);


#
# Dumping data for table 'nuke_security_agents'
#

INSERT INTO nuke_security_agents  VALUES ('1Noon', '1Noonbot', NULL, '1nooncorp.com', '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('AI', 'AIBOT', NULL, '21seek.com', '0', '(China) robot (218.17.90.xxx)');
INSERT INTO nuke_security_agents  VALUES ('aip', 'aipbot/', NULL, 'nameprotect.com', '0', 'copyright search robot (24.177.134.x), s. also\r\n- np/0.1_(np;_http://www.nameprotect.com...\r\n- abot/0.1 (abot; http://www.abot.com...');
INSERT INTO nuke_security_agents  VALUES ('Alexa', 'ia_archiver', '.alexa.com', 'alexa.com', '0', 'Alexa (209.237.238.1xx)');
INSERT INTO nuke_security_agents  VALUES ('Archive', 'ia_archiver', '.archive.org', 'archive.org', '0', 'The Internet Archive (209.237.238.1xx)');
INSERT INTO nuke_security_agents  VALUES ('AltaVista', 'Scooter', NULL, 'altavista.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Amfibi', 'Amfibibot', NULL, 'amfibi.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Ansearch', 'AnsearchBot/', NULL, 'ansearch.com.au', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('AnswerBus', 'AnswerBus', NULL, 'answerbus.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Argus', 'Argus/', NULL, 'simpy.com/bot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Arachmo', 'Arachmo', NULL, NULL, '-1', 'Impolite bandwidth sucker. Netblock owned by SOFTBANK BB CORP, Japan.\r\nDoesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Ask Jeeves', 'Ask Jeeves/Teoma', '.ask.com', 'sp.ask.com/docs/about/tech_crawling.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('ASPseek', 'ASPseek/', NULL, 'aspseek.org', '0', 'search engine software');
INSERT INTO nuke_security_agents  VALUES ('AvantGo', 'AvantGo', 'avantgo.com', 'avantgo.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Axadine', 'Axadine Crawler', NULL, 'axada.de', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Baidu', 'Baiduspider', NULL, 'baidu.com/search/spider.htm', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Become', 'BecomeBot', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('BigClique', 'BigCliqueBOT', NULL, 'bigclique.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('BilderSauger', 'BilderSauger', NULL, 'google.com/search?q=BilderSauger+data+becker', '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('BitTorrent', 'btbot/', NULL, 'btbot.com/btbot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Bruin', 'BruinBot', NULL, 'webarchive.cs.ucla.edu/bruinbot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('cfetch', 'cfetch/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Cipinet', 'Cipinet', NULL, 'cipinet.com/bot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Combine', 'Combine/', NULL, 'lub.lu.se/combine/', '-1', 'harvesting robot');
INSERT INTO nuke_security_agents  VALUES ('Convera', 'ConveraCrawler/', NULL, 'authoritativeweb.com/crawl', '-1', 'Impolite robot. Netblock owned by Convera Corp, Vienna');
INSERT INTO nuke_security_agents  VALUES ('Cydral', 'CydralSpider', NULL, 'cydral.com', '0', 'Cydral Web Image Search');
INSERT INTO nuke_security_agents  VALUES ('curl', 'curl/', NULL, 'curl.haxx.se', '0', 'file transferring tool');
INSERT INTO nuke_security_agents  VALUES ('Datapark', 'DataparkSearch/', NULL, 'dataparksearch.org', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Demo', 'Demo Bot', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('DHCrawler', 'DHCrawler', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Diamond', 'DiamondBot', NULL, 'searchscout.com', '-1', 'Claria (ex Gator) robot (64.152.73.xx), s. also Claria');
INSERT INTO nuke_security_agents  VALUES ('DISCo', 'DISCo Pump', NULL, NULL, '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Dragonfly CMS', 'Dragonfly File Reader', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Drecom', 'Drecombot/', 'drecom.jp', 'career.drecom.jp/bot.html', '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Dumbfind', 'Dumbot', NULL, 'dumbfind.com/dumbot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('e-Society', 'e-SocietyRobot', NULL, 'yama.info.waseda.ac.jp/~yamana/es/', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('EmailSiphon', 'EmailSiphon', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('EmeraldShield', 'EmeraldShield.com WebBot', NULL, 'emeraldshield.com/webbot.aspx', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Educate', 'Educate Search', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Envolk', 'envolk[ITS]spider/', NULL, 'envolk.com/envolkspider.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Eruvo', 'EruvoBot', NULL, 'eruvo.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Esperanza', 'EsperanzaBot', NULL, 'esperanza.to/bot/', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('eStyle', 'eStyleSearch', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Eurip', 'EuripBot', NULL, 'eurip.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Fast', 'FAST MetaWeb Crawler', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('FAST Enterprise', 'FAST Enterprise Crawler', 'fastsearch.net', NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Feedster', 'Feedster Crawler', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('FetchAPI', 'Fetch API Request', NULL, NULL, '-1', 'Some sort of application that tries to download and store your full website.\r\nDoesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('fg', 'fgcrawler', NULL, NULL, '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Filangy', 'Filangy', NULL, 'filangy.com/filangyinfo.jsp?inc=robots.jsp', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Findexa', 'Findexa Crawler', 'gulesider.no', 'findexa.no/gulesider/article26548.ece', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('FindLinks', 'findlinks', NULL, 'wortschatz.uni-leipzig.de/findlinks/', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Franklin', 'Franklin locator', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('FullWeb', 'Full Web Bot', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Fyber', 'FyberSpider', NULL, 'fybersearch.com/fyberspider.php', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Gais', 'Gaisbot', NULL, 'gais.cs.ccu.edu.tw/robot.php', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Genie', 'geniebot', NULL, 'genieknows.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('GetRight', 'GetRight/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Giga', 'Gigabot/', NULL, 'gigablast.com/spider.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Girafa', 'Girafabot', NULL, 'girafa.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('GoForIt', 'GOFORITBOT', NULL, 'goforit.com/about/', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Gonzo', 'gonzo1', '.t-ipconnect.de', 'telekom.de', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Google', 'Googlebot', 'crawl[0-9-]+.googlebot.com', 'google.com/bot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('GoogleAds', 'Mediapartners-Google', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('GoogleImg', 'Googlebot-Image', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('GPU', 'GPU p2p crawler', NULL, 'gpu.sourceforge.net/search_engine.php', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Grub', 'grub-client', NULL, 'grub.org', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('GSA', 'gsa-crawler', NULL, 'arsenaldigital.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('HappyFun', 'HappyFunBot/', NULL, 'happyfunsearch.com/bot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Harvest', 'Harvest/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('HeadScan', 'head-scan.pl/', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Heritrix', 'heritrix/', NULL, 'crawler.xtramind.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('HooWWWer', 'HooWWWer', NULL, 'cosco.hiit.fi/search/hoowwwer/', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('htdig', 'htdig/', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('HTMLParser', 'HTMLParser/', NULL, 'htmlparser.sourceforge.net', '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('HTTrack', 'HTTrack', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Ichiro', 'ichiro/', NULL, 'nttr.co.jp', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('IconSurf', 'IconSurf/', NULL, 'iconsurf.com/robot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Industry', 'Industry Program', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Indy', 'Indy Library', NULL, NULL, '-1', 'Originally, the Indy Library is a programming library which is available at http://www.nevrona.com/Indy or http://indy.torry.net under an Open Source license. This library is included with Borland Delphi 6, 7, C++Builder 6, plus all of the Kylix versions. Unfortunately, this library is hi-jacked and abused by some Chinese spam bots. All recent user-agents with the unmodified \"Indy Library\" string were of Chinese origin.\r\nDoesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('InetURL', 'InetURL/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Infocious', 'InfociousBot', NULL, 'corp.infocious.com/tech_crawler.php', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Ingrid', 'INGRID', NULL, 'webmaster.ilse.nl/jsp/webmaster.jsp', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Interseek', 'InterseekWeb/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Ipwalk', 'IpwalkBot/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('IRL', 'IRLbot', NULL, 'irl.cs.tamu.edu/crawler', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Java', 'Java/', NULL, NULL, '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Jyxo', 'Jyxobot/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('KnowItAll', 'KnowItAll(', NULL, 'cs.washington.edu', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Kumm', 'KummHttp/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Lapozz', 'LapozzBot', NULL, 'robot.lapozz.hu/', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Larbin', 'larbin', NULL, 'larbin.sourceforge.net/index-eng.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('LeechGet', 'LeechGet', NULL, 'leechget.net', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('libwww-perl', 'libwww-perl/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('lmspider', 'lmspider', NULL, 'scansoft.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Local', 'LocalcomBot/', NULL, 'local.com/bot.htm', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Looksmart', 'ZyBorg/', '.looksmart.com', 'WISEnutbot.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('LoveSMS', 'LoveSMS Search Engine', NULL, 'cauta.lovesms.ro', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Lycos', 'Lycos_Spider', '.lycos.com', NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Mac Finder', 'Mac Finder', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Majestic-12', 'MJ12bot', NULL, 'majestic12.co.uk/bot.php', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('MapoftheInternet', 'MapoftheInternet.com', NULL, 'mapoftheinternet.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('McBot', 'McBot/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Medusa', 'Medusa', NULL, NULL, '-1', 'Medusa is a tool for finding images, movie-clips or other kinds of files on webpages and downloading them. You start by entering a starting URL and Medusa searches for the filetypes you are interested in on this page and all pages found up to a given depth.\r\nDoesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Metaspinner', 'Metaspinner/', NULL, 'meta-spinner.de', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('MetaTag', 'MetaTagRobot', NULL, 'widexl.com/remote/search-engines/metatag-analyzer.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Minuteman', 'Minuteman', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Mirago', 'HenryTheMiragoRobot', NULL, 'miragorobot.com/scripts/mrinfo.asp', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Missauga', 'Missauga Locate', NULL, NULL, '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Missigua', 'Missigua Locator', NULL, NULL, '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Mister PiX', 'Mister PiX', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Mojeek', 'MojeekBot', NULL, 'mojeek.com/bot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('MSCCDS', 'Microsoft Scheduled Cache Cont', NULL, 'google.com/search?q=Scheduled+Cache+Content+Download+Service', '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('MDAIPP', 'Microsoft Data Access Internet', NULL, 'google.com/search?q=Microsoft+Data+Access+Internet+Publishin', '-1', 'This agent is used to exploit your system regarding the following security issue in FrontPage2000: http://lists.grok.org.uk/pipermail/full-disclosure/2004-December/030467.html');
INSERT INTO nuke_security_agents  VALUES ('MSIECrawler', 'MSIECrawler', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('MSN', 'msnbot', 'msnbot.msn.com', 'search.msn.com/msnbot.htm', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('MSR', 'MSRBOT/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('MUC', 'Microsoft URL Control', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Naver', 'NaverBot', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('NetMechanic', 'NetMechanic', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('nicebot', 'nicebot', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Ninja', 'Download Ninja', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Noxtrum', 'noxtrumbot', NULL, 'noxtrum.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('NRS', 'NetResearchServer', NULL, 'loopimprovements.com/robot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Nutch', 'Nutch', NULL, 'nutch.org/docs/en/bot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('NutchCVS', 'NutchCVS/', NULL, 'lucene.apache.org/nutch/bot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Nutscrape', 'Nutscrape/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('oegp', 'oegp', NULL, NULL, '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Offline Explorer', 'Offline Explorer/', NULL, 'metaproducts.com', '0', 'A Windows offline browser that allows you to download an unlimited number of your favorite Web and FTP sites for later offline viewing, editing or browsing.');
INSERT INTO nuke_security_agents  VALUES ('OmniExplorer', 'OmniExplorer_Bot/', NULL, 'omni-explorer.com', '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Onet', 'OnetSzukaj/', NULL, 'szukaj.onet.pl', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Openfind', 'Openbot/', NULL, 'openfind.com.tw/robot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Orbit', 'Orbiter', NULL, 'dailyorbit.com/bot.htm', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('P3P Validator', 'P3P Validator', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Patsearch', 'Patwebbot', NULL, 'herz-power.de/technik.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('PhpDig', 'PhpDig/', NULL, 'phpdig.net/robot.php', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('PicSearch', 'psbot/', NULL, 'picsearch.com/bot.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Pipeline', 'pipeLiner', NULL, 'pipeline-search.com/webmaster.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Pogodak', 'Pogodak', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Poly', 'polybot', NULL, 'cis.poly.edu/polybot/', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Pompos', 'Pompos/', NULL, 'dir.com/pompos.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Poodle', 'Poodle predictor', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Powermarks', 'Powermarks/', NULL, 'kaylon.com/power.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('PrivacyFinder', 'PrivacyFinder Cache Bot', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Privatizer', 'privatizer.net', NULL, 'privatizer.net/whatis.php', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Production', 'Production Bot', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('PS', 'Program Shareware', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('PuxaRapido', 'PuxaRapido v1.0', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Python-urllib', 'Python-urllib/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Qweery', 'qweery', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Rambler', 'StackRambler/', NULL, 'rambler.ru', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Roffle', 'Roffle/', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('RPT-HTTP', 'RPT-HTTPClient/', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('rssImages', 'rssImagesBot', NULL, 'herbert.groot.jebbink.nl/?app=rssImages', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Ryan', 'Ryanbot/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('SBIder', 'SBIder/', NULL, 'sitesell.com/sbider.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('schibstedsok', 'schibstedsokbot', NULL, 'schibstedsok.no', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Schmozilla', 'Schmozilla/', NULL, NULL, '-1', 'Doesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Scrubby', 'Scrubby', NULL, 'scrubtheweb.com/abs/meta-check.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('ScSpider', 'ScSpider/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('SearchGuild', 'SearchGuild/', NULL, NULL, '0', 'DMOZ Experiment');
INSERT INTO nuke_security_agents  VALUES ('Seekbot', 'Seekbot', NULL, 'seekbot.net', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Seznam', 'SeznamBot/', NULL, 'fulltext.seznam.cz', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Siets', 'SietsCrawler/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('SitiDi', '/SitiDiBot/', NULL, 'SitiDi.net', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Snoopy', 'Snoopy', NULL, 'sourceforge.net/projects/snoopy/', '0', 'Snoopy is a PHP class that simulates a web browser. It automates the task of retrieving web page content and posting forms, for example.');
INSERT INTO nuke_security_agents  VALUES ('Sohu', 'sohu-search', NULL, 'sogou.com', '0', 'Searchbot of sohu.com');
INSERT INTO nuke_security_agents  VALUES ('Spambot', NULL, NULL, NULL, '-1', 'Global name for bots which try to fill guestbooks and other stuff with garbage\r\nThey don\'t follow robots.txt either\r\n\r\nCurrent agents in this list:\r\nMissigua Locator\r\nProduction Bot\r\nFull Web Bot\r\nDemo Bot\r\nEducate Search\r\nFranklin locator\r\nIndustry Program\r\nMac Finder\r\nProgram Shareware\r\nMissauga Locate ');
INSERT INTO nuke_security_agents  VALUES ('Spip', 'SPIP-', NULL, 'spip.net', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('SurveyBot', 'SurveyBot/', NULL, 'whois.sc', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Susie', '!Susie', NULL, 'sync2it.com/susie', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Thumbshots', 'thumbshots-de-Bot', NULL, 'thumbshots.de', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Turnitin', 'TurnitinBot', NULL, 'turnitin.com/robot/crawlerinfo.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('TutorGig', 'TutorGigBot', NULL, 'tutorgig.info', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Twiceler', 'Twiceler', NULL, 'cuill.com/robots.html', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Updated', 'updated/', NULL, 'updated.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Versus', 'versus crawler', NULL, 'eda.baykan@epfl.ch', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Vagabondo', 'Vagabondo', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Virgo', 'Virgo/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Voila', 'VoilaBot', NULL, 'voila.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('vspider', 'vspider', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('W3C Checklink', 'W3C-checklink', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('W3C Validator', 'W3C_Validator', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Walhello', 'appie', NULL, 'walhello.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('WebIndexer', 'WebIndexer/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('WebReaper', 'WebReaper', NULL, 'webreaper.net', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('WebStripper', 'WebStripper/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Wget', 'Wget/', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Wire', 'WIRE', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('YaCy', 'yacy', NULL, 'yacy.net/yacy/', '-1', 'p2p-based distributed Web Search Engine\r\nDoesn\'t follow robots.txt');
INSERT INTO nuke_security_agents  VALUES ('Yadows', 'YadowsCrawler', NULL, 'yadows.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Yahoo', 'Yahoo! Slurp', NULL, 'help.yahoo.com/help/us/ysearch/slurp', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('YahooFS', 'YahooFeedSeeker/', '.yahoo.', 'help.yahoo.com/help/us/ysearch/slurp', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('YahooMM', 'Yahoo-MMCrawler', NULL, 'help.yahoo.com/help/us/ysearch/slurp', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('YANDEX', 'YANDEX', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Zeus', 'Zeus', NULL, NULL, '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('NextGen', 'NextGenSearchBot', NULL, 'about.zoominfo.com/PublicSite/NextGenSearchBot.asp', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('PoI', 'PictureOfInternet/', NULL, 'malfunction.org/poi', '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Sensis', 'Sensis Web Crawler', NULL, 'sensis.com.au', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('IlTrovatore', 'IlTrovatore-Setaccio/', NULL, 'iltrovatore.it/bot.html', '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Rufus', 'RufusBot', NULL, '64.124.122.252/feedback.html', '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('WebMiner', 'WebMiner', NULL, NULL, '-1', 'See RufusBot');
INSERT INTO nuke_security_agents  VALUES ('Accoona', 'Accoona-AI-Agent/', NULL, 'accoona.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Xirq', 'xirq/', NULL, 'xirq.com/', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('Blogpulse', 'Blogpulse', NULL, 'blogpulse.com', '0', 'IntelliSeek service');
INSERT INTO nuke_security_agents  VALUES ('KnackAttack', 'KnackAttack', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Miva', 'Miva', NULL, 'miva.com', '0', NULL);
INSERT INTO nuke_security_agents  VALUES ('PictureRipper', 'PictureRipper/', NULL, 'pictureripper.com', '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Teleport', 'Teleport Pro/', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('NetSprint', 'NetSprint', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('SVSpider', 'SVSpider/', NULL, 'bildkiste.de', '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('SVSearch', 'SVSearchRobot/', NULL, NULL, '-1', NULL);
INSERT INTO nuke_security_agents  VALUES ('Lorkyll', 'Lorkyll', NULL, '444.net', '-1', NULL);

#
# Table structure for table 'nuke_session'
#

DROP TABLE IF EXISTS nuke_session;
CREATE TABLE nuke_session (
   uname varchar(25) NOT NULL,
   time varchar(14) NOT NULL,
   starttime varchar(14) NOT NULL,
   host_addr varchar(48) NOT NULL,
   guest int(1) DEFAULT '0' NOT NULL,
   module varchar(30) NOT NULL,
   url varchar(255) NOT NULL,
   PRIMARY KEY (uname),
   KEY time (time),
   KEY guest (guest)
);


#
# Dumping data for table 'nuke_session'
#

INSERT INTO nuke_session  VALUES ('127.0.0.1', '1194604326', '1194604212', '127.0.0.1', '1', '', 'index.php');

#
# Table structure for table 'nuke_stats_hour'
#

DROP TABLE IF EXISTS nuke_stats_hour;
CREATE TABLE nuke_stats_hour (
   year smallint(6) DEFAULT '0' NOT NULL,
   month tinyint(4) DEFAULT '0' NOT NULL,
   date tinyint(4) DEFAULT '0' NOT NULL,
   hour tinyint(4) DEFAULT '0' NOT NULL,
   hits int(11) DEFAULT '0' NOT NULL
);


#
# Dumping data for table 'nuke_stats_hour'
#

INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '24', '20', '18');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '24', '21', '34');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '24', '22', '2');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '25', '14', '13');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '25', '15', '21');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '25', '16', '14');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '26', '19', '2');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '27', '17', '1');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '27', '18', '2');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '28', '8', '5');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '28', '9', '3');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '28', '12', '1');
INSERT INTO nuke_stats_hour  VALUES ('2007', '10', '29', '22', '1');
INSERT INTO nuke_stats_hour  VALUES ('2007', '11', '3', '13', '9');
INSERT INTO nuke_stats_hour  VALUES ('2007', '11', '9', '11', '13');

#
# Table structure for table 'nuke_stories'
#

DROP TABLE IF EXISTS nuke_stories;
CREATE TABLE nuke_stories (
   sid int(11) NOT NULL auto_increment,
   catid int(11) DEFAULT '0' NOT NULL,
   aid varchar(25) NOT NULL,
   title varchar(80),
   time datetime,
   hometext text,
   bodytext text NOT NULL,
   comments int(11) DEFAULT '0',
   counter mediumint(8) unsigned,
   topic int(3) DEFAULT '1' NOT NULL,
   informant varchar(25) NOT NULL,
   notes text NOT NULL,
   ihome int(1) DEFAULT '0' NOT NULL,
   alanguage varchar(30) NOT NULL,
   acomm int(1) DEFAULT '0' NOT NULL,
   haspoll int(1) DEFAULT '0' NOT NULL,
   pollID int(10) DEFAULT '0' NOT NULL,
   score int(10) DEFAULT '0' NOT NULL,
   ratings int(10) DEFAULT '0' NOT NULL,
   associated text NOT NULL,
   ticon tinyint(1) DEFAULT '0' NOT NULL,
   writes tinyint(1) DEFAULT '1' NOT NULL,
   PRIMARY KEY (sid),
   KEY catid (catid),
   KEY counter (counter),
   KEY topic (topic)
);


#
# Dumping data for table 'nuke_stories'
#

INSERT INTO nuke_stories  VALUES ('1', '0', 'admin', 'Üdvözlet a Nuke-Evolution-tól', '2007-05-20 10:38:28', '&Uuml;dv&ouml;z&ouml;l a <span style=\"font-weight: bold;\">Nuke-Evolution Hungary</span>.<br />\r\nGratul&aacute;lunk &uacute;j port&aacute;lrendszeredhez! Copyright&nbsp; 2007 by <span style=\"font-weight: bold;\">Nuke-Evolution Hungary</span>.<br />\r\nElsõ l&eacute;p&eacute;sk&eacute;nt hozd l&eacute;tre az elsõ teljes jog&uacute; adminisztr&aacute;tort, ezen a linken <a href=\"http://admin.php\">kattints ide</a>.<br />\r\nEzt az &uuml;zenetet a rendszer adminisztr&aacute;ci&oacute;s oldal&aacute;n tudod megv&aacute;ltoztatni. Ugyanott egy egyszer&uuml; felhaszn&aacute;l&oacute;t is l&eacute;trehozhatsz magadnak, vagy kattints r&ouml;gt&ouml;n a Szem&eacute;lyes adatokra! K&eacute;r&uuml;nk, figyelmesen olvasd el a csatolt dokument&aacute;ci&oacute;s f&aacute;jlokat, amelyekben inform&aacute;ci&oacute;kat tal&aacute;lsz a szabad szoftverekrõl, valamint a GPL licenszrõl. Rem&eacute;lj&uuml;k, olyan &ouml;r&ouml;mmel fogod haszn&aacute;lni a <span style=\"font-weight: bold;\">Nuke-Evolution</span>-t, amilyennel mi azt fejlesztett&uuml;k. Az esetleges hib&aacute;kat a k&ouml;vetkezõ verzi&oacute; megjelen&eacute;s&eacute;vel igyeksz&uuml;nk jav&iacute;tani.<br />\r\n<br />\r\nHa tetszik a szoftver, a k&eacute;sz&iacute;tõk v&aacute;rj&aacute;k a <span style=\"font-weight: bold;\">Te</span> anyagi t&aacute;mogat&aacute;sodat is. Ennek el&ouml;nye, hogy az &uacute;j verzi&oacute;kat hamarabb kaphatod meg, mint azok, akik nem t&aacute;mogatj&aacute;k ilyen m&oacute;don a fejleszt&eacute;st. <a href=\"http://www.evo-hungary.hu/modules.php?name=Club\">R&eacute;szletek itt olvashat&oacute;k,</a> illetve itt k&eacute;rhetsz klubtags&aacute;got. A <span style=\"font-weight: bold;\">Nuke-Evolution Hungary</span>-t&oacute;l k&uuml;l&ouml;n d&iacute;j&eacute;rt azonnali term&eacute;kt&aacute;mogat&aacute;st is kaphatsz, illetve ig&eacute;ny szerint tov&aacute;bbi d&iacute;j ellen&eacute;ben a telep&iacute;t&eacute;st/hibaelh&aacute;r&iacute;t&aacute;st online is v&eacute;gezz&uuml;k. <span style=\"font-weight: bold;\">Klubtags&aacute;godat</span> k&eacute;rve sok hasznos dologhoz juthatsz hozz&aacute;, &eacute;s haszn&aacute;lhatod a fejlesztõi f&oacute;rumot is.<br />\r\n<br />\r\nA Nuke-Evolution egy fejlett tartalomkezelõ rendszer, amely egyre agyobb felhaszn&aacute;l&oacute;i t&aacute;borral b&iacute;r a piacon. Te is nyomon k&ouml;vetheted a fejleszt&eacute;st, ha rendszeresen l&aacute;togatod a www.evo-hungary.hu-t. Ugyanitt t&eacute;m&aacute;kat, blokkokat, modulokat &eacute;s m&aacute;s kieg&eacute;sz&iacute;tõket is let&ouml;lthetsz.<br />\r\n<br />\r\n<a target=\"_blank\" href=\"http://www.evo-hungary.hu/pics/NukeEvolutionPro.jpg\"><img width=\"400\" height=\"200\" align=\"middle\" src=\"http://www.evo-hungary.hu/pics/NukeEvolutionPro.jpg\" alt=\"Nuke Evolution Pro (v2.0.6) Final\" /></a><br />\r\n<br />\r\n<span style=\"font-weight: bold; color: rgb(255, 0, 0);\">Az oldalak alj&aacute;n tal&aacute;lhat&oacute; szerzõi jogi sz&ouml;veget csak a fejlesztõk &iacute;r&aacute;sos enged&eacute;ly&eacute;vel t&aacute;vol&iacute;thatod el.</span><br />\r\n<br />\r\n<span style=\"font-weight: bold; color: rgb(255, 0, 0);\"><TT>A Magyar forditás az <b>Evo-Hungary</b> tulajdona!</TT></span>\r\n<br /><br />\r\nK&ouml;sz&ouml;nj&uuml;k, hogy a PHPNuke-Evolution rendszert haszn&aacute;lod! \r\n<script type=\"text/javascript\" src=\"http://shots.snap.com//client/inject.js?site_name=0\"></script>', '', '0', '3', '1', 'admin belépés', '', '0', '', '0', '0', '0', '0', '0', '', '0', '1');

#
# Table structure for table 'nuke_stories_cat'
#

DROP TABLE IF EXISTS nuke_stories_cat;
CREATE TABLE nuke_stories_cat (
   catid int(11) NOT NULL auto_increment,
   title varchar(20) NOT NULL,
   counter int(11) DEFAULT '0' NOT NULL,
   PRIMARY KEY (catid)
);


#
# Dumping data for table 'nuke_stories_cat'
#


#
# Table structure for table 'nuke_themes'
#

DROP TABLE IF EXISTS nuke_themes;
CREATE TABLE nuke_themes (
   theme_name varchar(100) NOT NULL,
   groups varchar(50) NOT NULL,
   permissions tinyint(2) DEFAULT '1' NOT NULL,
   custom_name varchar(100) NOT NULL,
   active tinyint(1) DEFAULT '0' NOT NULL,
   theme_info text NOT NULL,
   PRIMARY KEY (theme_name)
);


#
# Dumping data for table 'nuke_themes'
#

INSERT INTO nuke_themes  VALUES ('chromo', '', '1', 'Chromo', '1', '');
INSERT INTO nuke_themes  VALUES ('MG-gs101', '', '1', 'MG-gs101', '1', '');

#
# Table structure for table 'nuke_topics'
#

DROP TABLE IF EXISTS nuke_topics;
CREATE TABLE nuke_topics (
   topicid int(3) NOT NULL auto_increment,
   topicname varchar(20),
   topicimage varchar(100),
   topictext varchar(40),
   counter int(11) DEFAULT '0' NOT NULL,
   PRIMARY KEY (topicid)
);


#
# Dumping data for table 'nuke_topics'
#

INSERT INTO nuke_topics  VALUES ('1', 'evolution', 'phpnuke.gif', 'Nuke-Evolution', '1');

#
# Table structure for table 'nuke_users'
#

DROP TABLE IF EXISTS nuke_users;
CREATE TABLE nuke_users (
   user_id int(11) NOT NULL auto_increment,
   name varchar(60) NOT NULL,
   username varchar(25) NOT NULL,
   user_email varchar(255) NOT NULL,
   femail varchar(255) NOT NULL,
   user_website varchar(255) NOT NULL,
   user_avatar varchar(255) NOT NULL,
   user_regdate varchar(20) NOT NULL,
   user_icq varchar(15),
   user_occ varchar(100),
   user_from varchar(100),
   user_from_flag varchar(25),
   user_interests varchar(150) NOT NULL,
   user_sig text,
   user_viewemail tinyint(2),
   user_theme int(3),
   user_aim varchar(255),
   user_yim varchar(255),
   user_msnm varchar(255),
   user_password varchar(40) NOT NULL,
   storynum tinyint(4) DEFAULT '10' NOT NULL,
   umode varchar(10) NOT NULL,
   uorder tinyint(1) DEFAULT '0' NOT NULL,
   thold tinyint(1) DEFAULT '0' NOT NULL,
   noscore tinyint(1) DEFAULT '0' NOT NULL,
   bio tinytext,
   ublockon tinyint(1) DEFAULT '0' NOT NULL,
   ublock tinytext,
   theme varchar(255) NOT NULL,
   commentmax int(11) DEFAULT '4096' NOT NULL,
   counter int(11) DEFAULT '0' NOT NULL,
   newsletter int(1) DEFAULT '0' NOT NULL,
   user_posts int(10) DEFAULT '0' NOT NULL,
   user_attachsig int(2) DEFAULT '1' NOT NULL,
   user_rank int(10) DEFAULT '0' NOT NULL,
   user_level int(10) DEFAULT '1' NOT NULL,
   broadcast tinyint(1) DEFAULT '1' NOT NULL,
   popmeson tinyint(1) DEFAULT '0' NOT NULL,
   user_active tinyint(1) DEFAULT '1',
   user_session_time int(11) DEFAULT '0' NOT NULL,
   user_session_page smallint(5) DEFAULT '0' NOT NULL,
   user_lastvisit int(11) DEFAULT '0' NOT NULL,
   user_timezone decimal(5,2) DEFAULT '0.00' NOT NULL,
   user_style tinyint(4),
   user_lang varchar(255) DEFAULT 'english' NOT NULL,
   user_dateformat varchar(14) DEFAULT 'D M d, Y g:i a' NOT NULL,
   user_new_privmsg smallint(5) unsigned DEFAULT '0' NOT NULL,
   user_unread_privmsg smallint(5) unsigned DEFAULT '0' NOT NULL,
   user_last_privmsg int(11) DEFAULT '0' NOT NULL,
   user_emailtime int(11),
   user_allowhtml tinyint(1) DEFAULT '1',
   user_allowbbcode tinyint(1) DEFAULT '1',
   user_allowsmile tinyint(1) DEFAULT '1',
   user_allowavatar tinyint(1) DEFAULT '1' NOT NULL,
   user_allow_pm tinyint(1) DEFAULT '1' NOT NULL,
   user_allow_mass_pm tinyint(1) DEFAULT '4',
   user_allow_viewonline tinyint(1) DEFAULT '1' NOT NULL,
   user_notify tinyint(1) DEFAULT '0' NOT NULL,
   user_notify_pm tinyint(1) DEFAULT '1' NOT NULL,
   user_popup_pm tinyint(1) DEFAULT '1' NOT NULL,
   user_avatar_type tinyint(4) DEFAULT '3' NOT NULL,
   user_sig_bbcode_uid varchar(10),
   user_actkey varchar(32),
   user_newpasswd varchar(32),
   points int(10) DEFAULT '0',
   last_ip varchar(15) DEFAULT '0' NOT NULL,
   user_wordwrap smallint(3) DEFAULT '70' NOT NULL,
   agreedtos tinyint(1) DEFAULT '0' NOT NULL,
   user_allowsignature tinyint(4) DEFAULT '1' NOT NULL,
   user_report_optout tinyint(1) DEFAULT '0' NOT NULL,
   user_show_quickreply tinyint(1) DEFAULT '1' NOT NULL,
   user_quickreply_mode tinyint(1) DEFAULT '1' NOT NULL,
   user_color_gc varchar(6),
   user_color_gi text,
   user_showavatars tinyint(1) DEFAULT '1',
   user_showsignatures tinyint(1) DEFAULT '1',
   user_time_mode tinyint(4) DEFAULT '6' NOT NULL,
   user_dst_time_lag tinyint(4) DEFAULT '60' NOT NULL,
   user_pc_timeOffsets varchar(11) DEFAULT '0' NOT NULL,
   user_view_log tinyint(4) DEFAULT '0' NOT NULL,
   user_glance_show varchar(255) DEFAULT '1' NOT NULL,
   user_hide_images tinyint(2) DEFAULT '0' NOT NULL,
   user_open_quickreply tinyint(1) DEFAULT '1' NOT NULL,
   xdata_bbcode varchar(10),
   user_myspace varchar(255),
   user_profile_views mediumint(8) NOT NULL,
   user_gender tinyint(4) DEFAULT '0' NOT NULL,
   user_reputation float DEFAULT '0' NOT NULL,
   user_rep_last_time int(11) NOT NULL,
   user_birthday int(8) DEFAULT '0' NOT NULL,
   PRIMARY KEY (user_id),
   KEY uname (username),
   KEY user_session_time (user_session_time)
);


#
# Dumping data for table 'nuke_users'
#

INSERT INTO nuke_users  VALUES ('1', '', 'Vendég', '', '', '', 'blank.gif', 'Nov 09, 2007', '', '', '', NULL, '', '', '0', '0', '', '', '', '', '10', '', '0', '0', '0', '', '0', '', '', '4096', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '10.00', NULL, 'hungarian', 'D M d, Y g:i a', '0', '0', '0', NULL, '1', '1', '1', '1', '1', '0', '1', '1', '0', '0', '3', NULL, NULL, NULL, '0', '0', '70', '0', '0', '0', '0', '0', '', '', '1', '1', '6', '60', '0', '0', '1', '0', '1', '', NULL, '0', '0', '0', '0', '0');


#
# Table structure for table 'nuke_users_temp'
#

DROP TABLE IF EXISTS nuke_users_temp;
CREATE TABLE nuke_users_temp (
   user_id int(10) NOT NULL auto_increment,
   username varchar(25) NOT NULL,
   user_email varchar(255) NOT NULL,
   user_password varchar(40) NOT NULL,
   user_regdate varchar(20) NOT NULL,
   check_num varchar(50) NOT NULL,
   time varchar(14) NOT NULL,
   realname varchar(255) NOT NULL,
   PRIMARY KEY (user_id)
);


#
# Dumping data for table 'nuke_users_temp'
#


#
# Table structure for table 'nuke_welcome_pm'
#

DROP TABLE IF EXISTS nuke_welcome_pm;
CREATE TABLE nuke_welcome_pm (
   subject varchar(30) NOT NULL,
   msg text NOT NULL,
   PRIMARY KEY (subject)
);


#
# Dumping data for table 'nuke_welcome_pm'
#

