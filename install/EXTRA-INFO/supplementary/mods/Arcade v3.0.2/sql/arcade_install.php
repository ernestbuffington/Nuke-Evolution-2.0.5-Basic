<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/********************************************************/
/* Arcade 3.0.2 - Installer Script                      */
/* By: JRSweets (JRSweets@gmail.com)                    */
/* http://www.jeffrusso.net                             */
/* Copyright (c) 2004 by JeffRusso.net                    */
/********************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/20/2005
 ************************************************************************/

require_once("mainfile.php");
global $admin, $user_prefix, $prefix;

if(!is_array($admin)) {
        $adm = base64_decode($admin);
        $adm = explode(":", $adm);
        $admin_name = "$adm[0]";
} else {
        $admin_name = "$admin[0]";
}

define("INDEX_FILE", true);

if (!$result = $db->sql_query("SELECT * FROM ".$prefix."_authors WHERE aid='$admin_name'")) {
        die("Unable to retrive Admin Information.");
}

$isadmin = $db->sql_fetchrow($result);

if ($isadmin['radminsuper']==1) {
        switch($op) {
                default:
                    $pagetitle = "Arcade";
                    include_once(NUKE_BASE_DIR.'header.php');
                    title("$pagetitle");

                    OpenTable();
                    echo "<table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
                    echo "<form action='".$_SERVER['PHP_SELF']."' method='post'>\n";
                    echo "<tr><td>This script will install, destall or upgrade the tables for the $pagetitle.</td></tr>\n";
                    echo "<tr><td><strong>Backup data tables before going on!</strong></td></tr>\n";
                    echo "<tr><td><select name='op'>\n";
                    echo "<option value=''>---- Install Options ----</option>\n";
                    echo "<option value='install'>First Time Install of $pagetitle</option>\n";
                    echo "<option value=''>---- Comments Mod Options ----</option>\n";
                    echo "<option value='sync'>Comments Sync - Use only if Comments Mod was not Installed</option>\n";
                    echo "<option value=''>---- Destall Options ----</option>\n";
                    echo "<option value='destall'>Destall $pagetitle</option>\n";
                    echo "</select> <input type='submit' value='COMMIT'></td></tr>\n";
                    echo "<tr><td><strong>Once you have finished with this script, delete it from your server!</strong></td></tr>\n";
                    echo "</form>";
                    echo "</table>\n";
                    CloseTable();

                    include_once(NUKE_BASE_DIR.'footer.php');
                    break;

                case "install":
                    $pagetitle = "Arcade: Install";
                    include_once(NUKE_BASE_DIR.'header.php');
                    title("$pagetitle");

                    $error12 = 0;

                    OpenTable();
                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbgames");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbgames (game_id mediumint(8) NOT NULL auto_increment,game_pic varchar(50) NOT NULL default '',game_desc varchar(255) NOT NULL default '',game_highscore INT(11) NOT NULL default '0',game_highdate int(11) NOT NULL default '0',game_highuser mediumint(8) NOT NULL default '0',game_name varchar(50) NOT NULL default '',game_swf varchar(50) NOT NULL default '',game_scorevar varchar(50) NOT NULL default '',game_type tinyint(4) NOT NULL default '0',game_width mediumint(5) NOT NULL default '550',game_height varchar(5) NOT NULL default '380',game_order MEDIUMINT(8) DEFAULT '0' NOT NULL,game_set MEDIUMINT(8) DEFAULT '0' NOT NULL,arcade_catid MEDIUMINT(8) DEFAULT '1' NOT NULL,KEY game_id (game_id))")) { echo "Table ".$prefix."_bbgames Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbgames Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbscores");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbscores (game_id mediumint(8) NOT NULL default '0',user_id mediumint(8) NOT NULL default '0',score_game INT(11) NOT NULL default '0',score_date int(11) NOT NULL default '0',score_time int(11) NOT NULL default '0',score_set mediumint(8) NOT NULL default '0')")) { echo "Table ".$prefix."_bbscores Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbscores Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbgamehash");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbgamehash (gamehash_id CHAR(32) NOT NULL,game_id MEDIUMINT(8) NOT NULL,user_id MEDIUMINT(8) NOT NULL,hash_date INT(11) NOT NULL)")) { echo "Table ".$prefix."_bbgamehash Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbgamehash Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbhackgame");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbhackgame (user_id MEDIUMINT(8) NOT NULL,game_id MEDIUMINT(8) NOT NULL,date_hack INT(11) NOT NULL)")) { echo "Table ".$prefix."_bbhackgame Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbhackgame Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_categories");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbarcade_categories (arcade_catid mediumint(8) unsigned NOT NULL auto_increment,arcade_cattitle varchar(100) NOT NULL default '',arcade_nbelmt mediumint(8) unsigned NOT NULL default '0',arcade_catorder mediumint(8) unsigned NOT NULL default '0', KEY arcade_catid (arcade_catid)) TYPE=MyISAM")) { echo "Table ".$prefix."_bbarcade_categories Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade_categories Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbarcade (arcade_name varchar(255) NOT NULL default '',arcade_value varchar(255) NOT NULL default '',PRIMARY KEY  (arcade_name))")) { echo "Table ".$prefix."_bbarcade Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbauth_arcade_access");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbauth_arcade_access (group_id mediumint(8) NOT NULL default '0',arcade_catid mediumint(8) unsigned NOT NULL default '0',KEY group_id (group_id),KEY arcade_catid (arcade_catid)) TYPE=MyISAM")) { echo "Table ".$prefix."_bbauth_arcade_access Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbauth_arcade_access Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_comments");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbarcade_comments (game_id mediumint(8) NOT NULL default '0',comments_value varchar(255) NOT NULL default '') TYPE=MyISAM")) { echo "Table ".$prefix."_bbarcade_comments Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade_comments Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_fav");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbarcade_fav (`order` mediumint(8) NOT NULL default '0',user_id mediumint(8) NOT NULL default '0',game_id mediumint(8) NOT NULL default '0') TYPE=MyISAM")) { echo "Table ".$prefix."_bbarcade_fav Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade_fav Unsuccessfully Created.</font><br />"; }

                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade_categories ADD arcade_catauth TINYINT(2) NOT NULL")) { echo "Successfully Altered Table ".$prefix."_bbarcade_categories.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade_categories.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$user_prefix."_users ADD user_allow_arcadepm TINYINT(0) DEFAULT '1' NOT NULL")) { echo "Successfully Altered Table ".$user_prefix."_users.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$user_prefix."_users.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbscores ADD INDEX ( `game_id` )")) { echo "Successfully Altered Table ".$prefix."_bbscores.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbscores.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbscores ADD INDEX ( `user_id` )")) { echo "Successfully Altered Table ".$prefix."_bbscores.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbscores.</font><br />"; }

                    if ($result = $db->sql_query("UPDATE ".$prefix."_bbgames SET game_order = game_id WHERE game_order = '0'")) { echo "Successfully Updated Table ".$prefix."_bbgames.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Updated Table ".$prefix."_bbgames.</font><br />"; }
                    if ($result = $db->sql_query("UPDATE ".$prefix."_bbgames SET game_order = game_id WHERE game_order = '0'")) { echo "Successfully Updated Table ".$prefix."_bbgames.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Updated Table ".$prefix."_bbgames.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade_categories (arcade_catid, arcade_cattitle, arcade_catorder) VALUES ('1', 'Arcade', '1')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade_categories.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade_categories.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('use_category_mod', '1')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('category_preview_games', '5')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('games_par_page', '15')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('game_order', 'Alpha')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('display_winner_avatar', '1')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('stat_par_page', '10')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('winner_avatar_position', 'left')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('maxsize_avatar', '200')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('linkcat_align', '2')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('limit_by_posts', '0')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('posts_needed', '5')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('days_limit', '5')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('limit_type', 'date')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('use_fav_category', '1')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('arcade_announcement', 'Welcome to the Arcade!<br />Enjoy!')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }

                    echo "<hr>\n";

                    if (!$error12 = 1) {
                            echo "Arcade Unsuccessfully Installed!<br />\n";
                    } else {
                            echo "Arcade Installed Successfully!<br />\n";
                    }

                    echo "Please delete this off your server now.\n";
                    CloseTable();

                    include_once(NUKE_BASE_DIR.'footer.php');
                    break;

                case "upgradev2x":
                    $pagetitle = "Arcade: Upgrade V2.0.x to V3.0.2";
                    include_once(NUKE_BASE_DIR.'header.php');
                    title("$pagetitle");

                    $error12 = 0;

                    OpenTable();
                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbauth_arcade_access");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbauth_arcade_access (group_id mediumint(8) NOT NULL default '0',arcade_catid mediumint(8) unsigned NOT NULL default '0',KEY group_id (group_id),KEY arcade_catid (arcade_catid)) TYPE=MyISAM")) { echo "Table ".$prefix."_bbauth_arcade_access Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbauth_arcade_access Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_comments");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbarcade_comments (game_id mediumint(8) NOT NULL default '0',comments_value varchar(255) NOT NULL default '') TYPE=MyISAM")) { echo "Table ".$prefix."_bbarcade_comments Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade_comments Unsuccessfully Created.</font><br />"; }

                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_fav");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbarcade_fav (`order` mediumint(8) NOT NULL default '0',user_id mediumint(8) NOT NULL default '0',game_id mediumint(8) NOT NULL default '0') TYPE=MyISAM")) { echo "Table ".$prefix."_bbarcade_fav Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade_fav Unsuccessfully Created.</font><br />"; }

                    if ($result = $db->sql_query("ALTER TABLE ".$user_prefix."_users ADD user_allow_arcadepm TINYINT(0) DEFAULT '1' NOT NULL")) { echo "Successfully Altered Table ".$user_prefix."_users.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$user_prefix."_users.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade_categories ADD arcade_catauth TINYINT(2) NOT NULL")) { echo "Successfully Altered Table ".$prefix."_bbarcade_categories.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade_categories.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS limit_by_posts")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS posts_needed")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS days_limit")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS limit_type")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS winner_avatar_position")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS maxsize_avatar")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS linkcat_align")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                                        if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbscores ADD INDEX ( `game_id` )")) { echo "Successfully Altered Table ".$prefix."_bbscores.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbscores.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbscores ADD INDEX ( `user_id` )")) { echo "Successfully Altered Table ".$prefix."_bbscores.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbscores.</font><br />"; }


                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('limit_by_posts', '0')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('posts_needed', '5')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('days_limit', '5')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('limit_type', 'date')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade (arcade_name, arcade_value) VALUES('winner_avatar_position','left')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade (arcade_name, arcade_value) VALUES('maxsize_avatar','200')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade (arcade_name, arcade_value) VALUES('linkcat_align','2')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('arcade_announcement', 'Welcome to the Arcade!<br />Enjoy!')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }

                    echo "<hr>\n";

                    if (!$error12 = 1) {
                            echo "Arcade Unsuccessfully Updated!<br />\n";
                    } else {
                            echo "Arcade Updated Successfully!<br />\n";
                    }

                    echo "<strong>***IMPORTANT***</strong> - If you didn't have the comments mod installed, re-run the installer and select the Comments Sync option.<br />\n";
                    echo "Please delete this off your server now.\n";
                    CloseTable();

                    include_once(NUKE_BASE_DIR.'footer.php');
                    break;

                case "upgradev3":
                    $pagetitle = "Arcade: Upgrade V3.0.0 to V3.0.2";
                    include_once(NUKE_BASE_DIR.'header.php');
                    title("$pagetitle");

                    $error12 = 0;

                    OpenTable();
                    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_fav");
                    if ($result = $db->sql_query("CREATE TABLE ".$prefix."_bbarcade_fav (`order` mediumint(8) NOT NULL default '0',user_id mediumint(8) NOT NULL default '0',game_id mediumint(8) NOT NULL default '0') TYPE=MyISAM")) { echo "Table ".$prefix."_bbarcade_fav Successfully Created.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade_fav Unsuccessfully Created.</font><br />"; }

                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS limit_by_posts")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS posts_needed")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS days_limit")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbarcade DROP IF EXISTS limit_type")) { echo "Successfully Altered Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$user_prefix."_users ADD user_allow_arcadepm TINYINT(0) DEFAULT '1' NOT NULL")) { echo "Successfully Altered Table ".$user_prefix."_users.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$user_prefix."_users.</font><br />"; }
                                        if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbscores ADD INDEX ( `game_id` )")) { echo "Successfully Altered Table ".$prefix."_bbscores.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbscores.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$prefix."_bbscores ADD INDEX ( `user_id` )")) { echo "Successfully Altered Table ".$prefix."_bbscores.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$prefix."_bbscores.</font><br />"; }


                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('limit_by_posts', '0')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('posts_needed', '5')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('days_limit', '5')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('limit_type', 'date')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('use_fav_category', '1')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }
                    if ($result = $db->sql_query("INSERT INTO ".$prefix."_bbarcade VALUES ('arcade_announcement', 'Welcome to the Arcade!<br />Enjoy!')")) { echo "Successfully Inserted Data into Table ".$prefix."_bbarcade.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unsuccessfully Inserted Data into Table ".$prefix."_bbarcade.</font><br />"; }

                    echo "<hr>\n";

                    if (!$error12 = 1) {
                            echo "Arcade Unsuccessfully Updated!<br />\n";
                    } else {
                            echo "Arcade Updated Successfully!<br />\n";
                    }

                    echo "<strong>***IMPORTANT***</strong> - If you didn't have the comments mod installed, re-run the installer and select the Comments Sync option.<br />\n";
                    echo "<br />Please delete this off your server when done.\n";
                    CloseTable();

                    include_once(NUKE_BASE_DIR.'footer.php');
                    break;

             case "sync":
        $pagetitle = "Comments Mod Sync - Use Only if Comments Mod was never installed";
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");
        OpenTable();

      //Creates Comments Table
      $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_comments");
      $db->sql_query("CREATE TABLE ".$prefix."_bbarcade_comments (game_id mediumint(8) NOT NULL default '0',comments_value varchar(255) NOT NULL default '') TYPE=MyISAM");
      echo "- Created Table successfully<br />\n";

      //Inserts games into Comments Table
      $result = $db->sql_query("SELECT game_id FROM $prefix"._bbgames." ORDER BY game_id");
        while ($row = $db->sql_fetchrow($result))
        {
            $game_id = $row['game_id'];
            $db->sql_query("INSERT INTO ".$prefix."_bbarcade_comments ( game_id, comments_value) VALUES ($game_id, '')");
        }
      echo "- Populated comments table successfully<br />\n";

      echo "<hr>\n";
        echo "Arcade Comments Sync Done!<br />\n";
        echo "Please delete this off your server now.\n";
        CloseTable();
        include_once(NUKE_BASE_DIR.'footer.php');
    break;

                case "destall":
                    $pagetitle = "Arcade 3.0.2: Destall";
                    include_once(NUKE_BASE_DIR.'header.php');
                    title("$pagetitle");

                    $error12 = 0;

                    OpenTable();
                    if ($result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbgames")) { echo "Table ".$prefix."_bbgames Successfully Deleted.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbgames Unsuccessfully Deleted.</font><br />"; }
                    if ($result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbscores")) { echo "Table ".$prefix."_bbscores Successfully Deleted.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbscores Unsuccessfully Deleted.</font><br />"; }
                    if ($result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbgamehash")) { echo "Table ".$prefix."_bbgamehash Successfully Deleted.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbgamehash Unsuccessfully Deleted.</font><br />"; }
                    if ($result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbhackgame")) { echo "Table ".$prefix."_bbhackgame Successfully Deleted.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbhackgame Unsuccessfully Deleted.</font><br />"; }
                    if ($result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_categories")) { echo "Table ".$prefix."_bbarcade_categories Successfully Deleted.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade_categories Unsuccessfully Deleted.</font><br />"; }
                    if ($result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade")) { echo "Table ".$prefix."_bbarcade Successfully Deleted.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade Unsuccessfully Deleted.</font><br />"; }
                    if ($result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbauth_arcade_access")) { echo "Table ".$prefix."_bbauth_arcade_access Successfully Deleted.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbauth_arcade_access Unsuccessfully Deleted.</font><br />"; }
                    if ($result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_comments")) { echo "Table ".$prefix."_bbarcade_comments Successfully Deleted.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade_comments Unsuccessfully Deleted.</font><br />"; }
                    if ($result = $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_bbarcade_fav")) { echo "Table ".$prefix."_bbarcade_fav Successfully Deleted.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Table ".$prefix."_bbarcade_fav Unsuccessfully Deleted.</font><br />"; }
                    if ($result = $db->sql_query("ALTER TABLE ".$user_prefix."_users DROP user_allow_arcadepm")) { echo "Successfully Altered Table ".$user_prefix."_users.<br />"; } else { $error12 = 1; echo "<font color=\"red\">Unable to Alter Table ".$user_prefix."_users.</font><br />"; }

                    echo "<hr>\n";

                    if (!$error12 = 1) {
                            echo "Arcade Unsuccessfully Un-Installed!<br />\n";
                    } else {
                            echo "Arcade Un-Installed Successfully!<br />\n";
                    }

                    echo "Thanks for trying out the Arcade. Please delete this file off your server now.\n";
                    CloseTable();

                    include_once(NUKE_BASE_DIR.'footer.php');
                    break;
        }
} else {
        $pagetitle = "Arcade 3.0.2: ERROR";
        include_once(NUKE_BASE_DIR.'header.php');
        title("$pagetitle");

        OpenTable();
        echo "<center><strong>Sorry, ONLY super admins may run this script</strong><center>\n";
        CloseTable();

        include_once(NUKE_BASE_DIR.'footer.php');
}

?>