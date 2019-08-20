DROP TABLE IF EXISTS nuke_bbgames;
CREATE TABLE nuke_bbgames (
  game_id mediumint(8) NOT NULL auto_increment,
  game_pic varchar(50) NOT NULL default '',
  game_desc varchar(255) NOT NULL default '',
  game_highscore mediumint(8) NOT NULL default '0',
  game_highdate int(11) NOT NULL default '0',
  game_highuser mediumint(8) NOT NULL default '0',
  game_name varchar(50) NOT NULL default '',
  game_swf varchar(50) NOT NULL default '',
  game_scorevar varchar(50) NOT NULL default '',
  game_type tinyint(4) NOT NULL default '0',
  game_width mediumint(5) NOT NULL default '550',
  game_height varchar(5) NOT NULL default '380',
  game_order MEDIUMINT(8) DEFAULT '0' NOT NULL,
  game_set MEDIUMINT(8) DEFAULT '0' NOT NULL,
  arcade_catid MEDIUMINT(8) DEFAULT '1' NOT NULL,
  KEY game_id (game_id)
);

DROP TABLE IF EXISTS nuke_bbscores;
CREATE TABLE nuke_bbscores (
  game_id mediumint(8) NOT NULL default '0',
  user_id mediumint(8) NOT NULL default '0',
  score_game mediumint(8) NOT NULL default '0',
  score_date int(11) NOT NULL default '0',
  score_time int(11) NOT NULL default '0',
  score_set mediumint(8) NOT NULL default '0'
);

DROP TABLE IF EXISTS nuke_bbgamehash;
CREATE TABLE nuke_bbgamehash (
gamehash_id CHAR(32) NOT NULL,
game_id MEDIUMINT(8) NOT NULL,
user_id MEDIUMINT(8) NOT NULL,
hash_date INT(11) NOT NULL
);

DROP TABLE IF EXISTS nuke_bbhackgame;
CREATE TABLE nuke_bbhackgame (
user_id MEDIUMINT(8) NOT NULL,
game_id MEDIUMINT(8) NOT NULL,
date_hack INT(11) NOT NULL
);

DROP TABLE IF EXISTS nuke_bbarcade_categories;
CREATE TABLE nuke_bbarcade_categories (
  arcade_catid mediumint(8) unsigned NOT NULL auto_increment,
  arcade_cattitle varchar(100) NOT NULL default '',
  arcade_nbelmt mediumint(8) unsigned NOT NULL default '0',
  arcade_catorder mediumint(8) unsigned NOT NULL default '0',
  KEY arcade_catid (arcade_catid)
) TYPE=MyISAM;

DROP TABLE IF EXISTS nuke_bbarcade;
CREATE TABLE nuke_bbarcade (
  arcade_name varchar(255) NOT NULL default '',
  arcade_value varchar(255) NOT NULL default '',
  PRIMARY KEY (arcade_name)
);

DROP TABLE IF EXISTS nuke_bbauth_arcade_access;
CREATE TABLE nuke_bbauth_arcade_access (
  group_id mediumint(8) NOT NULL default '0',
  arcade_catid mediumint(8) unsigned NOT NULL default '0',
  KEY group_id (group_id),
  KEY arcade_catid (arcade_catid)
) TYPE=MyISAM;

DROP TABLE IF EXISTS nuke_bbarcade_comments;
CREATE TABLE nuke_bbarcade_comments (
  game_id mediumint(8) NOT NULL default '0',
  comments_value varchar(255) NOT NULL default ''
) TYPE=MyISAM;

DROP TABLE IF EXISTS nuke_bbarcade_fav;
CREATE TABLE `nuke_bbarcade_fav` (
  `order` mediumint(8) NOT NULL default '0',
  `user_id` mediumint(8) NOT NULL default '0',
  `game_id` mediumint(8) NOT NULL default '0'
) TYPE=MyISAM;

UPDATE nuke_bbgames SET game_order = game_id WHERE game_order = 0 ;

ALTER TABLE nuke_bbarcade_categories ADD arcade_catauth TINYINT( 2 ) NOT NULL ;

ALTER TABLE nuke_bbscores CHANGE score_game score_game INT( 11 ) DEFAULT '0' NOT NULL;

ALTER TABLE nuke_bbgames CHANGE game_highscore game_highscore INT( 11 ) DEFAULT '0' NOT NULL;

ALTER TABLE nuke_users ADD user_allow_arcadepm TINYINT( 0 ) DEFAULT '0' NOT NULL;

ALTER TABLE `nuke_bbscores` ADD INDEX ( `game_id` );
ALTER TABLE `nuke_bbscores` ADD INDEX ( `user_id` );

INSERT INTO nuke_bbarcade VALUES ('arcade_announcement', 'Welcome to the Arcade!<br />Enjoy!');

INSERT INTO nuke_bbarcade_categories (arcade_catid, arcade_cattitle, arcade_catorder) VALUES ('1', 'Arcade', '1');

INSERT INTO nuke_bbarcade VALUES ('use_category_mod', '1');
INSERT INTO nuke_bbarcade VALUES ('category_preview_games', '5');
INSERT INTO nuke_bbarcade VALUES ('games_par_page', '15');
INSERT INTO nuke_bbarcade VALUES ('game_order', 'Alpha');
INSERT INTO nuke_bbarcade VALUES ('display_winner_avatar', '1');
INSERT INTO nuke_bbarcade VALUES ('stat_par_page', '10');
INSERT INTO nuke_bbarcade VALUES ('winner_avatar_position', 'left');
INSERT INTO nuke_bbarcade VALUES ('maxsize_avatar', '200');
INSERT INTO nuke_bbarcade VALUES ('linkcat_align', '2');
INSERT INTO nuke_bbarcade VALUES ('limit_by_posts', '0');
INSERT INTO nuke_bbarcade VALUES ('posts_needed', '5');
INSERT INTO nuke_bbarcade VALUES ('days_limit', '5');
INSERT INTO nuke_bbarcade VALUES ('limit_type', 'date');
INSERT INTO nuke_bbarcade VALUES ('use_fav_category', '1');