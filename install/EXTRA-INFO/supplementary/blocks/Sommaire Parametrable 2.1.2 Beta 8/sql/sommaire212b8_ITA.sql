#
# Structure de la table `nuke_sommaire`
#

DROP TABLE IF EXISTS `nuke_sommaire`;
CREATE TABLE `nuke_sommaire` (
  `groupmenu` int(2) NOT NULL default '0',
  `name` varchar(200) default NULL,
  `image` varchar(99) default NULL,
  `lien` text,
  `hr` char(2) default NULL,
  `center` char(2) default NULL,
  `bgcolor` tinytext,
  `invisible` int(1) default NULL,
  `class` tinytext,
  `bold` char(2) default NULL,
  `new` char(2) default NULL,
  `listbox` char(2) default NULL,
  `dynamic` char(2) default NULL,
  PRIMARY KEY  (`groupmenu`)
) TYPE=MyISAM;

#
# Contenu de la table `nuke_sommaire`
#

INSERT INTO `nuke_sommaire` (`groupmenu`, `name`, `image`, `lien`, `hr`, `center`, `bgcolor`, `invisible`, `class`, `bold`, `new`, `listbox`, `dynamic`) VALUES (0, 'Home', 'icon_home.gif', 'index.php', '', '', '', 2, 'storytitle', '', '', '', 'on'),
(1, 'Community', 'icon_community.gif', '', 'on', '', '', 2, 'storytitle', '', '', '', 'on'),
(2, 'News', 'favoritos.gif', '', '', '', '', 2, 'storytitle', '', '', '', 'on'),
(3, 'Downloads e Links', 'som_downloads.gif', '', '', '', '', 2, 'storytitle', '', '', '', 'on'),
(4, 'Contenuti', 'icon_poll.gif', '', '', '', '', 2, 'storytitle', '', '', '', 'on'),
(5, 'Informazioni', 'icon_members.gif', '', '', '', '', 2, 'storytitle', '', '', '', 'on'),
(99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
# --------------------------------------------------------

#
# Structure de la table `nuke_sommaire_categories`
#

DROP TABLE IF EXISTS `nuke_sommaire_categories`;
CREATE TABLE `nuke_sommaire_categories` (
  `id` int(11) NOT NULL auto_increment,
  `groupmenu` int(2) NOT NULL default '0',
  `module` varchar(50) NOT NULL default '',
  `url` text NOT NULL,
  `url_text` text NOT NULL,
  `image` varchar(50) NOT NULL default '',
  `new` char(2) default NULL,
  `new_days` tinyint(4) NOT NULL default '-1',
  `class` varchar(20) default NULL,
  `bold` char(2) default NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

#
# Contenu de la table `nuke_sommaire_categories`
#

INSERT INTO `nuke_sommaire_categories` (`id`, `groupmenu`, `module`, `url`, `url_text`, `image`, `new`, `new_days`, `class`, `bold`) VALUES (1, 1, 'Forums', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(2, 1, 'Private_Messages', '', '', 'tree-L.gif', '', 7, 'boxcontent', ''),
(3, 2, 'News', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(4, 2, 'Topics', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(5, 2, 'Stories_Archive', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(6, 2, 'Submit_News', '', '', 'tree-L.gif', '', 7, 'boxcontent', ''),
(7, 3, 'Downloads', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(8, 3, 'Web_Links', '', '', 'tree-L.gif', '', 7, 'boxcontent', ''),
(9, 4, 'Content', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(10, 4, 'faq', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(11, 4, 'Top', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(12, 4, 'Reviews', '', '', 'tree-L.gif', '', 7, 'boxcontent', ''),
(13, 5, 'Feedback', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(14, 5, 'Recommend_Us', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(15, 5, 'Statistics', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(16, 5, 'Search', '', '', 'tree-T.gif', '', 7, 'boxcontent', ''),
(17, 5, 'Your_Account', '', '', 'tree-L.gif', '', 7, 'boxcontent', '');