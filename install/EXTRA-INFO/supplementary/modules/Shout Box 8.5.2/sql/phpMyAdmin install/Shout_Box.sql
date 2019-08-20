DROP TABLE IF EXISTS nuke_shoutbox_manage_count;
CREATE TABLE nuke_shoutbox_manage_count (
   id int(9) NOT NULL auto_increment,
   admin varchar(25) NOT NULL,
   aCount varchar(5) default '10' NOT NULL,
   PRIMARY KEY (id)
);

DROP TABLE IF EXISTS nuke_shoutbox_sticky;
CREATE TABLE nuke_shoutbox_sticky (
   id int(9) NOT NULL auto_increment,
   name varchar(20) NOT NULL,
   comment text NOT NULL,
   timestamp varchar(20) NOT NULL,
   stickySlot varchar(5) NOT NULL,
   PRIMARY KEY (id)
);

DROP TABLE IF EXISTS nuke_shoutbox_theme_images;
CREATE TABLE nuke_shoutbox_theme_images (
   id int(9) NOT NULL auto_increment,
   themeName varchar(50),
   blockArrowColor varchar(50) NOT NULL,
   blockBackgroundImage varchar(50) NOT NULL,
   PRIMARY KEY (id)
);

DROP TABLE IF EXISTS nuke_shoutbox_themes;
CREATE TABLE nuke_shoutbox_themes (
   id int(9) NOT NULL auto_increment,
   themeName varchar(50),
   blockColor1 varchar(20),
   blockColor2 varchar(20),
   border varchar(20),
   menuColor1 varchar(20),
   menuColor2 varchar(20),
   PRIMARY KEY (id)
);

DROP TABLE IF EXISTS nuke_shoutbox_version;
CREATE TABLE nuke_shoutbox_version (
   id int(5) NOT NULL,
   version varchar(10) NOT NULL,
   datechecked varchar(2) NOT NULL,
   versionreported varchar(10) NOT NULL,
   PRIMARY KEY (id)
);
INSERT INTO nuke_shoutbox_version (id, version, datechecked, versionreported) VALUES (1,'8.5',0,0);

DROP TABLE IF EXISTS nuke_shoutbox_conf;
CREATE TABLE nuke_shoutbox_conf (
   id int(9) NOT NULL,
   color1 varchar(20) NOT NULL,
   color2 varchar(20) NOT NULL,
   date varchar(5) NOT NULL,
   time varchar(5) NOT NULL,
   number varchar(5) NOT NULL,
   ipblock varchar(5) NOT NULL,
   nameblock varchar(5) NOT NULL,
   censor varchar(5) NOT NULL,
   tablewidth varchar(3) NOT NULL,
   urlonoff varchar(5) NOT NULL,
   delyourlastpost varchar(5) NOT NULL,
   anonymouspost varchar(5) NOT NULL,
   height varchar(5) NOT NULL,
   themecolors varchar(5) NOT NULL,
   textWidth varchar(4) NOT NULL,
   nameWidth varchar(4) NOT NULL,
   smiliesPerRow varchar(4) NOT NULL,
   reversePosts varchar(4) NOT NULL,
   timeOffset varchar(10) NOT NULL,
   urlanononoff varchar(10) NOT NULL,
   pointspershout varchar(5) NOT NULL,
   shoutsperpage varchar(5) NOT NULL,
   serverTimezone varchar(5) NOT NULL,
   blockxxx varchar(5) NOT NULL,
   PRIMARY KEY (id)
);
INSERT INTO nuke_shoutbox_conf (id, color1, color2, date, time, number, ipblock, nameblock, censor, tablewidth, urlonoff, delyourlastpost, anonymouspost, height, themecolors, textWidth, nameWidth, smiliesPerRow, reversePosts, timeOffset, urlanononoff, pointspershout, shoutsperpage, serverTimezone, blockxxx) VALUES (1,'#EBEBEB','#FFFFFF' ,'yes' ,'yes','10','yes','yes','yes','150','yes','yes','yes','150','no','20','10','7','no','0','no','0','25','-6','yes');

DROP TABLE IF EXISTS nuke_shoutbox_emoticons;
CREATE TABLE nuke_shoutbox_emoticons (
   id int(9) NOT NULL auto_increment,
   text varchar(20) NOT NULL,
   image varchar(70) NOT NULL,
   PRIMARY KEY (id)
);
INSERT INTO nuke_shoutbox_emoticons VALUES (1, ':D', '<img src=images/blocks/shout_box/icon_biggrin.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (2, ':-D', '<img src=images/blocks/shout_box/icon_biggrin.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (3, ':grin:', '<img src=images/blocks/shout_box/icon_biggrin.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (4, ':)', '<img src=images/blocks/shout_box/icon_smile.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (5, ':-)', '<img src=images/blocks/shout_box/icon_smile.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (6, ':smile:', '<img src=images/blocks/shout_box/icon_smile.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (7, ':(', '<img src=images/blocks/shout_box/icon_sad.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (8, ':-(', '<img src=images/blocks/shout_box/icon_sad.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (9, ':sad:', '<img src=images/blocks/shout_box/icon_sad.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (10, ':o', '<img src=images/blocks/shout_box/icon_surprised.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (11, ':-o', '<img src=images/blocks/shout_box/icon_surprised.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (12, ';)', '<img src=images/blocks/shout_box/icon_wink.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (13, ';-)', '<img src=images/blocks/shout_box/icon_wink.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (14, ':wink:', '<img src=images/blocks/shout_box/icon_wink.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (15, ':lol:', '<img src=images/blocks/shout_box/icon_lol.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (16, '8O', '<img src=images/blocks/shout_box/icon_eek.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (17, '8-O', '<img src=images/blocks/shout_box/icon_eek.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (18, ':eek:', '<img src=images/blocks/shout_box/icon_eek.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (19, ':shock:', '<img src=images/blocks/shout_box/icon_eek.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (20, ':?', '<img src=images/blocks/shout_box/icon_confused.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (21, ':-?', '<img src=images/blocks/shout_box/icon_confused.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (22, ':S', '<img src=images/blocks/shout_box/icon_confused.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (23, '8)', '<img src=images/blocks/shout_box/icon_cool.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (24, '8-)', '<img src=images/blocks/shout_box/icon_cool.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (25, ':x', '<img src=images/blocks/shout_box/icon_mad.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (26, ':-x', '<img src=images/blocks/shout_box/icon_mad.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (27, ':P', '<img src=images/blocks/shout_box/icon_razz.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (28, ':-P', '<img src=images/blocks/shout_box/icon_razz.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (29, ':razz:', '<img src=images/blocks/shout_box/icon_razz.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (30, ':oops:', '<img src=images/blocks/shout_box/icon_redface.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (31, ':redface:', '<img src=images/blocks/shout_box/icon_redface.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (32, ':cry:', '<img src=images/blocks/shout_box/icon_cry.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (33, ':evil:', '<img src=images/blocks/shout_box/icon_evil.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (34, ':twisted:', '<img src=images/blocks/shout_box/icon_twisted.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (35, ':roll:', '<img src=images/blocks/shout_box/icon_rolleyes.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (36, ':!:', '<img src=images/blocks/shout_box/icon_exclaim.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (37, ':exclaim:', '<img src=images/blocks/shout_box/icon_exclaim.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (38, ':?:', '<img src=images/blocks/shout_box/icon_question.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (39, ':question:', '<img src=images/blocks/shout_box/icon_question.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (40, ':idea:', '<img src=images/blocks/shout_box/icon_idea.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (41, ':arrow:', '<img src=images/blocks/shout_box/icon_arrow.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (42, ':|', '<img src=images/blocks/shout_box/icon_neutral.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (43, ':-|', '<img src=images/blocks/shout_box/icon_neutral.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (44, ':mrgreen:', '<img src=images/blocks/shout_box/icon_mrgreen.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (45, ':shy:', '<img src=images/blocks/shout_box/shy.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (46, ':dead:', '<img src=images/blocks/shout_box/dead.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (47, ':embar:', '<img src=images/blocks/shout_box/embar.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (48, ':bigrazz:', '<img src=images/blocks/shout_box/bigrazz.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (49, ':yes:', '<img src=images/blocks/shout_box/yes.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (50, ':no:', '<img src=images/blocks/shout_box/no.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (51, ':uhoh:', '<img src=images/blocks/shout_box/uhoh.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (52, ':upset:', '<img src=images/blocks/shout_box/upset.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (53, ':sigh:', '<img src=images/blocks/shout_box/sigh.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (54, 'zzz', '<img src=images/blocks/shout_box/sleep.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (55, ':sleep:', '<img src=images/blocks/shout_box/sleep.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (56, ':confused:', '<img src=images/blocks/shout_box/confused.gif>');
INSERT INTO nuke_shoutbox_emoticons VALUES (57, ':aua:', '<img src=images/blocks/shout_box/aua.gif>');

DROP TABLE IF EXISTS nuke_shoutbox_ipblock;
CREATE TABLE nuke_shoutbox_ipblock (
   id int(9) NOT NULL auto_increment,
   name varchar(50) NOT NULL,
   PRIMARY KEY (id)
);

DROP TABLE IF EXISTS nuke_shoutbox_nameblock;
CREATE TABLE nuke_shoutbox_nameblock (
   id int(9) NOT NULL auto_increment,
   name varchar(50) NOT NULL,
   PRIMARY KEY (id)
);

DROP TABLE IF EXISTS nuke_shoutbox_censor;
CREATE TABLE nuke_shoutbox_censor (
   id int(9) NOT NULL auto_increment,
   text varchar(30) NOT NULL,
   replacement varchar(30) NOT NULL,
   PRIMARY KEY (id)
);
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('\@\$\$', 'butt');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('a\$\$', 'butt');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('anton', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('arse', 'butt');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('arsehole', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('ass', 'butt');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('ass muncher', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('asshole', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('asstooling', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('asswipe', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('b\!tch', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('b17ch', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('b1tch', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('bastard', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('beefcurtins', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('bi7ch', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('bitch', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('bitchy', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('boiolas', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('bollocks', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('breasts', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('brown nose', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('bugger', 'damn');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('butt pirate', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('c0ck', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('cawk', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('chink', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('clitsaq', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('cock', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('cockbite', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('cockgobbler', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('cocksucker', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('cum', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('cunt', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('dago', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('daygo', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('dego', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('dick', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('dick wad', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('dickhead', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('dickweed', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('douchebag', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('dziwka', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('ekto', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('enculer', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('faen', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fag', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('faggot', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fart', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fatass', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('feg', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('felch', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('ficken', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fitta', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fitte', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('flikker', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fok', '$#%!');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fuck', '$#%!');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fu\(k', '$#%!');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fucker', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fucking', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fuckwit', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fuk', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fuking', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('futkretzn', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('fux0r', '$#%!');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('gook', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('h0r', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('handjob', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('helvete', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('honkey', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('hore', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('hump', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('injun', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('kawk', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('kike', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('knulle', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('kraut', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('kuk', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('kuksuger', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('kurac', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('kurwa', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('langer', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('masturbation', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('merd', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('motherfucker', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('motherfuckingcocksucker', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('mutherfucker', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('nepesaurio', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('nigga', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('nigger', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('nonce', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('nutsack', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('one\-eyed\-trouser\-snake', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('penis', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('picka', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('pissant', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('pizda', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('politician', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('prick', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('puckface', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('pule', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('pussy', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('puta', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('puto', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('rimjob', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('rubber', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('scheisse', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('schlampe', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('schlong', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('screw', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('shit', '****');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('shiteater', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('shiz', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('skribz', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('skurwysyn', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('slut', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('spermburper', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('spic', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('spierdalaj', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('splooge', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('spunk', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('tatas', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('tits', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('toss the salad', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('twat', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('unclefucker', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('vagina', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('vittu', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('votze', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('wank', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('wanka', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('wanker', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('wankers', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('wankstain', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('whore', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('wichser', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('wop', '[censored]');
INSERT INTO nuke_shoutbox_censor (text, replacement) VALUES ('yed', '[censored]');

DROP TABLE IF EXISTS nuke_shoutbox_date;
CREATE TABLE nuke_shoutbox_date (
   id int(5) NOT NULL,
   date varchar(10) NOT NULL,
   time varchar(10) NOT NULL,
   PRIMARY KEY (id)
);
INSERT INTO nuke_shoutbox_date (id, date, time) VALUES (1,'d-m-Y','g:i:a');

DROP TABLE IF EXISTS nuke_shoutbox_shouts;
CREATE TABLE nuke_shoutbox_shouts (
   id int(9) NOT NULL auto_increment,
   name varchar(20) NOT NULL,
   comment text NOT NULL,
   date varchar(10) NOT NULL,
   time varchar(10) NOT NULL,
   ip varchar(39),
   timestamp varchar(20) NOT NULL,
   PRIMARY KEY (id)
);
INSERT INTO nuke_shoutbox_shouts (name, comment, date, time, ip, timestamp) VALUES ('OurScripts.net','Thank You for trying this out!','8-6-05','24:00','noip','1102320000');

