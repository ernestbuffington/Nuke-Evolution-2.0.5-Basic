DROP TABLE IF EXISTS nuke_legal;
CREATE TABLE IF NOT EXISTS nuke_legal (
  cfg_name varchar(255) NOT NULL default '',
  cfg_value text NOT NULL,
  cfg_country varchar(255) NOT NULL default '',
  PRIMARY KEY  (cfg_name)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO nuke_legal VALUES ('legal', 'legal tos here', 'Canada');
INSERT INTO nuke_legal VALUES ('privacy', 'legal privacy here ', 'Canada');
INSERT INTO nuke_legal VALUES ('terms', 'legal terms here', 'Canada');
