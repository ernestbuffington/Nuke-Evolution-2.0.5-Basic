-- --------------------------------------------------------

-- 
-- Table structure for table `nuke_journal`
-- 

CREATE TABLE `nuke_journal` (
  `jid` int(11) NOT NULL auto_increment,
  `aid` varchar(30) NOT NULL default '',
  `title` varchar(80) default NULL,
  `bodytext` text NOT NULL,
  `mood` varchar(48) NOT NULL default '',
  `pdate` varchar(48) NOT NULL default '',
  `ptime` varchar(48) NOT NULL default '',
  `status` varchar(48) NOT NULL default '',
  `mtime` varchar(48) NOT NULL default '',
  `mdate` varchar(48) NOT NULL default '',
  PRIMARY KEY  (`jid`),
  KEY `aid` (`aid`)
) TYPE=MyISAM;

-- 
-- Dumping data for table `nuke_journal`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `nuke_journal_comments`
-- 

CREATE TABLE `nuke_journal_comments` (
  `cid` int(11) NOT NULL auto_increment,
  `rid` varchar(48) NOT NULL default '',
  `aid` varchar(30) NOT NULL default '',
  `comment` text NOT NULL,
  `pdate` varchar(48) NOT NULL default '',
  `ptime` varchar(48) NOT NULL default '',
  PRIMARY KEY  (`cid`),
  KEY `rid` (`rid`),
  KEY `aid` (`aid`)
) TYPE=MyISAM;

-- 
-- Dumping data for table `nuke_journal_comments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `nuke_journal_stats`
-- 

CREATE TABLE `nuke_journal_stats` (
  `id` int(11) NOT NULL auto_increment,
  `joid` varchar(48) NOT NULL default '',
  `nop` varchar(48) NOT NULL default '',
  `ldp` varchar(24) NOT NULL default '',
  `ltp` varchar(24) NOT NULL default '',
  `micro` varchar(128) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

-- 
-- Dumping data for table `nuke_journal_stats`
-- 