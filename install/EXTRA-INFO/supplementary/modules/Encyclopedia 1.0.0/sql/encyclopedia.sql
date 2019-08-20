CREATE TABLE nuke_encyclopedia (
  eid int(10) NOT NULL auto_increment,
  title varchar(255) NOT NULL default '',
  description text NOT NULL,
  elanguage varchar(30) NOT NULL default '',
  active int(1) NOT NULL default '0',
  PRIMARY KEY  (eid)
) TYPE=MyISAM;

CREATE TABLE nuke_encyclopedia_text (
  tid int(10) NOT NULL auto_increment,
  eid int(10) NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  text text NOT NULL,
  counter int(10) NOT NULL default '0',
  PRIMARY KEY  (tid),
  KEY eid (eid),
  KEY title (title)
) TYPE=MyISAM;