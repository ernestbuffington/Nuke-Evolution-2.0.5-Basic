-- --------------------------------------------------------
--
-- Table structure for table 'nuke_uploads'
--

CREATE TABLE nuke_uploads (
   info varchar(255) NOT NULL,
   type varchar(255) NOT NULL,
   KEY type (type)
);

--
-- Dumping data for table 'nuke_uploads'
--

INSERT INTO nuke_uploads VALUES ('5242880', 'limit');
INSERT INTO nuke_uploads VALUES ('0', 'howtoban');
INSERT INTO nuke_uploads VALUES ('php', 'banned');
INSERT INTO nuke_uploads VALUES ('php3', 'banned');
INSERT INTO nuke_uploads VALUES ('php4', 'banned');
INSERT INTO nuke_uploads VALUES ('phtml', 'banned');
INSERT INTO nuke_uploads VALUES ('cgi', 'banned');
INSERT INTO nuke_uploads VALUES ('html', 'banned');
INSERT INTO nuke_uploads VALUES ('htm', 'banned');
INSERT INTO nuke_uploads VALUES ('htaccess', 'banned');
INSERT INTO nuke_uploads VALUES ('bat', 'banned');
INSERT INTO nuke_uploads VALUES ('exe', 'banned');
INSERT INTO nuke_uploads VALUES ('inc', 'banned');
INSERT INTO nuke_uploads VALUES ('com', 'banned');
INSERT INTO nuke_uploads VALUES ('pl', 'banned');
INSERT INTO nuke_uploads VALUES ('asp', 'banned');
INSERT INTO nuke_uploads VALUES ('files/', 'directory');
INSERT INTO nuke_uploads VALUES ('http://www.yoursite.com/files/', 'url');
INSERT INTO nuke_uploads VALUES ('4.4', 'version');
INSERT INTO nuke_uploads VALUES ('1', 'user_type');

-- --------------------------------------------------------
--
-- Table structure for table 'nuke_uploads_users'
--

CREATE TABLE nuke_uploads_users (
   user_id int(11) DEFAULT '0' NOT NULL,
   size int(11) DEFAULT '0' NOT NULL,
   KEY user_id (user_id)
);

--
-- Dumping data for table 'nuke_uploads_users'
--