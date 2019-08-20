<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

// ==========================================
// PHP-NUKE: Shout Box
// ==========================
//
// Copyright (c) 2003-2005 by Aric Bolf (SuperCat)
// http://www.OurScripts.net
//
// This program is free software. You can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation
// ===========================================

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       08/10/2005
 ************************************************************************/

// NOTES: When creating a new version, remember to alter the following areas:
// 1. Move ShoutBoxSQLPostInstall(); from the bottom of the current SQL upgrade function to the new one.
// 2. Add an UpgradeToX_X() function call to the end of the upgrade function that ShoutBoxSQLPostInstall(); just got taken out of.
// 3. add the new SQL code to both the NewInstall() and the UpgradeToX_X() functions.
// 4. Add a new 'case' at the bottom of this file.
// 5. Add the preceding version option to the InstallSQL() function. Two spots.
// 6. Add any new tests needed to the SQLtestTables() function.
// 7. Update $Most_Current_Version
// 8. update version number in function Install_shoutbox_version()
// 9. Add SQL new version UPDATE to function UpgradeToX_X()
// 10. New table?
//   - Add new tables to SQLrepairOptions().
//   - Add new tables to SQLtestTables().
//   - Add new case at bottom for new tables for repairing.
//   - Add new function for new tables for repairing.

$Most_Current_Version = '8.5';

require_once(dirname(__FILE__).'/mainfile.php');
global $admin, $admin_file, $prefix, $db, $Most_Current_Version;
if (!is_array($admin)) {
    $admin2 = base64_decode($admin);
    $admin2 = explode(":", $admin2);
    $aid = "$admin2[0]";
} else {
    $aid = "$admin[0]";
}

define('INDEX_FILE', true);

$sql = "SELECT radminsuper FROM ".$prefix."_authors WHERE aid='$aid'";
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
if ($row['radminsuper'] == 1) {

function ShoutBoxSQLHeader() {
    echo "<p class=\"title\" align=\"center\">Shout Box SQL database configuration script</p>\n";

    echo "<p class=\"content\"><strong>Security note:</strong> This shout box is distributed for free from <strong><a href=\"http://www.ourscripts.net\" target=\"_blank\">OurScripts.net</a></strong> and licensed under the GPL. If you didn't download it from there, it is a good idea that you do so. We wouldn't want you installing a hacked version. Please encourage any webmasters that are distributing this script from their site to change their download link to <strong><a href=\"http://www.ourscripts.net/modules.php?name=Downloads&d_op=viewdownloaddetails&lid=95&title=Shout%20Box\" target=\"_blank\">here</a></strong>. Thank you!</p>\n";

    if (eregi("MSIE(.*)", $_SERVER['HTTP_USER_AGENT'])) {
        echo "<p class=\"content\"><strong>Note:</strong> If you want to start over, click in the browser URL bar and hit enter. Because you are using Internet Explorer, if you want to start over, you may have to close the browser and reopen it. This is not the case with Opera, FireFox, Netscape, or Mozilla.</p>\n";
    } else {
        echo "<p class=\"content\"><strong>Note:</strong> If you want to start over, click in the browser URL bar and hit enter.</p>\n";
    }
}

function ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL) {
    global $prefix, $db;
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    ShoutBoxSQLHeader();

    $sql = "SELECT * FROM ".$prefix."_shoutbox_version";
    $result = $db->sql_query($sql);
    if ($result) {
        // Automated version choice
        $row = $db->sql_fetchrow($result);
        $SB_Version_Installed = $row[1];
    } else {
        $SB_Version_Installed = 0;
    }

    // Upgrade and install options
    echo "<table align=\"center\" width=\"75%\" cellpadding=\"3\" border=\"1\" cellspacing=\"0\">";
    echo "<tr><td align=\"center\"><p class=\"title\" align=\"center\"><strong>Install or Upgrade:</strong></p>";

    if ($Most_Current_Version < $SB_Version_Installed) {
        // recommend they download the newest version
        echo "<p class=\"content\" align=\"center\">Your SQL database tables are of a newer version than this version of SQL can install. Please download a new copy at <a href=\"http://www.ourscripts.net\" target=\"_blank\">OurScripts.net</a>.</p><p class=\"content\" align=\"center\">Your version: v$SB_Version_Installed</p><p class=\"content\" align=\"center\">Installer version: v$Most_Current_Version</p>";
    } else {
        InstallSQL($Most_Current_Version, $SB_Version_Installed);
        echo "<br />&nbsp;";
    }
    echo "</td></tr></table><br />&nbsp;";

    // Report status of SQL
    SQLtestTables();

    // repair database tables
    SQLrepairOptions($RepairSBSQL);

    OurScriptsCopyright(); // You may not remove or edit this. It is our copyright.
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

function InstallSQL($Most_Current_Version, $SB_Version_Installed) {
    // install database tables
    echo "<form action=\"\" method=\"post\" style=\"margin-bottom: 0px;\"><center>";
    if ($SB_Version_Installed == 0) {
        // Define new versions here
        echo "Select your previous version:&nbsp;&nbsp;<select name=\"SQLaction\">
        <option value=\"NewInstall\" selected=\"selected\">New Install</option>
        <option value=\"Version8_0\">8.0</option>
        <option value=\"Version7_5\">7.5</option>
        <option value=\"Version7_0\">7.0</option>
        <option value=\"Version6_02\">6.02</option>
        <option value=\"Version6_01\">6.01</option>
        <option value=\"Version6_0\">6.0</option>
        <option value=\"Version5_04\">5.04</option>
        <option value=\"Version5_03\">5.03</option>
        <option value=\"Version5_02\">5.02</option>
        <option value=\"Version5_01\">5.01</option>
        <option value=\"Version5_0\">5.0</option>
        <option value=\"Version4_6\">4.6</option>
        <option value=\"Version4_5\">4.5</option>
        <option value=\"Version4_0\">4.0</option>
        <option value=\"Version3_5\">3.5</option>
        <option value=\"Version3_0_1\">3.0.1</option>
        <option value=\"Version3_0_0\">3.0.0</option>
        <option value=\"Version3_0_0beta3\">3.0.0 beta 3</option>
        <option value=\"Version3_0_0beta2\">3.0.0 beta 2</option>
        <option value=\"Version3_0_0beta1\">3.0.0 beta 1</option>
        <option value=\"Version2_6_1\">2.6.1</option>
        <option value=\"Version2_6\">2.6</option>
        <option value=\"Version2_5\">2.5</option>
        <option value=\"Version2_4\">2.4</option></select><br /><br />";
    } else {
        // Define new versions here

        if ($SB_Version_Installed == '8.0') { $SQLactionHidden = 'Version8_0'; }
        if ($SB_Version_Installed == '7.5') { $SQLactionHidden = 'Version7_5'; }
        if ($SB_Version_Installed == '7.0') { $SQLactionHidden = 'Version7_0'; }
        if ($SB_Version_Installed == '6.02') { $SQLactionHidden = 'Version6_02'; }
        if ($SB_Version_Installed == '6.01') { $SQLactionHidden = 'Version6_01'; }
        if ($SB_Version_Installed == '6.0') { $SQLactionHidden = 'Version6_0'; }
        if ($SB_Version_Installed == $Most_Current_Version) {
            echo "<p class=\"content\"><strong>WARNING:</strong> This option reinstalls the entire Shout Box database!</p><p class=\"content\" align=\"center\"><strong>You will lose all shouts and settings!</strong></p>";
            $SQLactionHidden = 'SQLVersionsMatch';
        }
        echo "<input type=\"hidden\" name=\"SQLaction\" value=\"$SQLactionHidden\" />";
    }
    echo "<input type=\"submit\" name=\"button\" value=\"Configure SQL for v$Most_Current_Version\" /></center></form>";
}

function UpgradeTo8_5() {
    global $prefix, $db;

    $sql = "ALTER TABLE ".$prefix."_shoutbox_conf ADD COLUMN blockxxx varchar(5) NOT NULL";
    $db->sql_query($sql);
    $sql = "UPDATE ".$prefix."_shoutbox_conf SET blockxxx='yes' WHERE id=1";
    $db->sql_query($sql);

    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_version";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_version (
    id int(5) NOT NULL,
    version varchar(10) NOT NULL,
    datechecked varchar(2) NOT NULL,
    versionreported varchar(10) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_version (id, version, datechecked, versionreported) VALUES (1,'8.5',0,0)";
    $db->sql_query($sql);
    ShoutBoxSQLPostInstall();
}

function UpgradeTo8_0() {
    global $prefix, $db;

    $sql = "ALTER TABLE ".$prefix."_shoutbox_conf ADD COLUMN serverTimezone varchar(5) NOT NULL";
    $db->sql_query($sql);
    $sql = "UPDATE ".$prefix."_shoutbox_conf SET serverTimezone='-6' WHERE id=1";
    $db->sql_query($sql);

    $sql = "ALTER TABLE ".$prefix."_shoutbox_conf ADD COLUMN urlanononoff varchar(10) NOT NULL";
    $db->sql_query($sql);
    $sql = "UPDATE ".$prefix."_shoutbox_conf SET urlanononoff='no' WHERE id=1";
    $db->sql_query($sql);

    $sql = "ALTER TABLE ".$prefix."_shoutbox_conf ADD COLUMN pointspershout varchar(5) NOT NULL";
    $db->sql_query($sql);
    $sql = "UPDATE ".$prefix."_shoutbox_conf SET pointspershout='0' WHERE id=1";
    $db->sql_query($sql);

    $sql = "ALTER TABLE ".$prefix."_shoutbox_conf ADD COLUMN shoutsperpage varchar(5) NOT NULL";
    $db->sql_query($sql);
    $sql = "UPDATE ".$prefix."_shoutbox_conf SET shoutsperpage='25' WHERE id=1";
    $db->sql_query($sql);

    $sql = "RENAME TABLE ".$prefix."_shoutbox TO ".$prefix."_shoutbox_shouts";
    $db->sql_query($sql);

    $sql = "ALTER TABLE ".$prefix."_shoutbox_shouts ADD COLUMN timestamp varchar(20) NOT NULL";
    $db->sql_query($sql);

    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_manage_count";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_manage_count (
    id int(9) NOT NULL auto_increment,
    admin varchar(25) NOT NULL,
    aCount varchar(5) default '10' NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);

    UpgradeTo8_5();
}

function UpgradeTo7_5() {
    global $prefix, $db;
    $sql = "UPDATE ".$prefix."_shoutbox_version set version='7.5' WHERE id='1'";
    $db->sql_query($sql);
    UpgradeTo8_0();
}

function UpgradeTo7_0() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_themes";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_themes (
   id int(9) NOT NULL auto_increment,
   themeName varchar(50),
   blockColor1 varchar(20),
   blockColor2 varchar(20),
   border varchar(20),
   menuColor1 varchar(20),
   menuColor2 varchar(20),
   PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_theme_images";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_theme_images (
   id int(9) NOT NULL auto_increment,
   themeName varchar(50),
   blockArrowColor varchar(50) NOT NULL,
   blockBackgroundImage varchar(50) NOT NULL,
   PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "UPDATE ".$prefix."_shoutbox_version set version='7.0' WHERE id='1'";
    $db->sql_query($sql);
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_sticky";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_sticky (
   id int(9) NOT NULL auto_increment,
   name varchar(20) NOT NULL,
   comment text NOT NULL,
   timestamp varchar(20) NOT NULL,
   stickySlot varchar(5) NOT NULL,
   PRIMARY KEY (id))";
    $db->sql_query($sql);
    UpgradeTo7_5();
}


function UpgradeTo6_02() {
    global $admin, $prefix, $db;
    $sql = "UPDATE ".$prefix."_shoutbox_version set version='6.02' WHERE id='1'";
    $db->sql_query($sql);
    UpgradeTo7_0();
}

function UpgradeTo6_01() {
    global $admin, $prefix, $db;
    $sql = "UPDATE ".$prefix."_shoutbox_version set version='6.01' WHERE id='1'";
    $db->sql_query($sql);
    UpgradeTo6_02();
}

function UpgradeTo6_0() {
    // 5.04
    // to
    // 6.0
    global $admin, $prefix, $db;

    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_version";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_version (
   id int(5) NOT NULL auto_increment,
   version varchar(10) NOT NULL,
   PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_version (id, version) VALUES (1,'6.0')";
    $db->sql_query($sql);

    $sql = "ALTER TABLE ".$prefix."_shoutbox_conf ADD COLUMN timeOffset varchar(10)";
    $db->sql_query($sql);
    $sql = "UPDATE ".$prefix."_shoutbox_conf SET timeOffset = '0' WHERE timeOffset IS NULL";
    $db->sql_query($sql);
    UpgradeTo6_01();
}

function NewInstall() {
    Install_shoutbox_shouts();
    Install_shoutbox_censor();
    Install_shoutbox_conf();
    Install_shoutbox_date();
    Install_shoutbox_emoticons();
    Install_shoutbox_ipblock();
    Install_shoutbox_nameblock();
    Install_shoutbox_version();
    Install_shoutbox_themes();
    Install_shoutbox_theme_images();
    Install_shoutbox_sticky();
    Install_shoutbox_manage_count();
    ShoutBoxSQLPostInstall();
}

function ReinstallAllExceptShoutsTable() {
    Install_shoutbox_censor();
    Install_shoutbox_conf();
    Install_shoutbox_date();
    Install_shoutbox_emoticons();
    Install_shoutbox_ipblock();
    Install_shoutbox_nameblock();
    Install_shoutbox_version();
    Install_shoutbox_themes();
    Install_shoutbox_theme_images();
    Install_shoutbox_sticky();
    Install_shoutbox_manage_count();
    ShoutBoxSQLPostInstall();
}

function Install_shoutbox_manage_count() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_manage_count";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_manage_count (
    id int(9) NOT NULL auto_increment,
    admin varchar(25) NOT NULL,
    aCount varchar(5) default '10' NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
}

function Install_shoutbox_sticky() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_sticky";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_sticky (
   id int(9) NOT NULL auto_increment,
   name varchar(20) NOT NULL,
   comment text NOT NULL,
   timestamp varchar(20) NOT NULL,
   stickySlot varchar(5) NOT NULL,
   PRIMARY KEY (id))";
    $db->sql_query($sql);
}

function Install_shoutbox_theme_images() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_theme_images";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_theme_images (
   id int(9) NOT NULL auto_increment,
   themeName varchar(50),
   blockArrowColor varchar(50) NOT NULL,
   blockBackgroundImage varchar(50) NOT NULL,
   PRIMARY KEY (id))";
    $db->sql_query($sql);
}

function Install_shoutbox_themes() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_themes";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_themes (
   id int(9) NOT NULL auto_increment,
   themeName varchar(50),
   blockColor1 varchar(20),
   blockColor2 varchar(20),
   border varchar(20),
   menuColor1 varchar(20),
   menuColor2 varchar(20),
   PRIMARY KEY (id))";
    $db->sql_query($sql);
}

function Install_shoutbox_shouts() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_shouts";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_shouts (
    id int(9) NOT NULL auto_increment,
    name varchar(20) NOT NULL,
    comment text NOT NULL,
    date varchar(10) NOT NULL,
    time varchar(10) NOT NULL,
    ip varchar(39),
    timestamp varchar(20) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_shouts (name, comment, date, time, ip, timestamp) VALUES ('OurScripts.net','Thank You for trying this out!','2-1-05','24:00','noip','1102320000')";
    $db->sql_query($sql);
}

function Install_shoutbox_censor() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_censor";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_censor (
    id int(9) NOT NULL auto_increment,
    text varchar(30) NOT NULL,
    replacement varchar(30) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('\@\$\$', 'butt')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('a\$\$', 'butt')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('anton', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('arse', 'butt')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('arsehole', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('ass', 'butt')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('ass muncher', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('asshole', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('asstooling', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('asswipe', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('b\!tch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('b17ch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('b1tch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bastard', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('beefcurtins', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bi7ch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bitch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bitchy', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('boiolas', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bollocks', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('breasts', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('brown nose', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bugger', ' damn ')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('butt pirate', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('c0ck', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cawk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('chink', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('clitsaq', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cock', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cockbite', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cockgobbler', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cocksucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cum', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cunt', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dago', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('daygo', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dego', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dick', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dick wad', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dickhead', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dickweed', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('douchebag', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dziwka', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('ekto', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('enculer', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('faen', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fag', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('faggot', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fart', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fatass', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('feg', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('felch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('ficken', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fitta', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fitte', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('flikker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fok', '$#%!')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fuck', '$#%!')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fu\(k', '$#%!')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fucking', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fuckwit', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fuk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fuking', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('futkretzn', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fux0r', '$#%!')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('gook', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('h0r', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('handjob', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('helvete', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('honkey', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('hore', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('hump', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('injun', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kawk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kike', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('knulle', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kraut', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kuk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kuksuger', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kurac', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kurwa', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('langer', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('masturbation', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('merd', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('motherfucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('motherfuckingcocksucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('mutherfucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nepesaurio', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nigga', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nigger', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nonce', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nutsack', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('one\-eyed\-trouser\-snake', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('penis', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('picka', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('pissant', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('pizda', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('politician', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('prick', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('puckface', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('pule', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('pussy', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('puta', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('puto', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('rimjob', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('rubber', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('scheisse', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('schlampe', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('schlong', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('screw', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('shit', '****')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('shiteater', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('shiz', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('skribz', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('skurwysyn', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('slut', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('spermburper', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('spic', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('spierdalaj', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('splooge', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('spunk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('tatas', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('tits', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('toss the salad', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('twat', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('unclefucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('vagina', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('vittu', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('votze', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wank', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wanka', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wanker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wankers', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wankstain', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('whore', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wichser', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wop', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('yed', '[censored]')";
    $db->sql_query($sql);
}

function Install_shoutbox_conf() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_conf";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_conf (
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
   )";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_conf (id, color1, color2, date, time, number, ipblock, nameblock, censor, tablewidth, urlonoff, delyourlastpost, anonymouspost, height, themecolors, textWidth, nameWidth, smiliesPerRow, reversePosts, timeOffset, urlanononoff, pointspershout, shoutsperpage, serverTimezone, blockxxx) VALUES (1,'#EBEBEB','#FFFFFF' ,'yes' ,'yes','10','yes','yes','yes','150','yes','yes','yes','150','no','20','10','7','no','0','no','0','25','-6','yes')";
    $db->sql_query($sql);
}

function Install_shoutbox_date() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_date";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_date (
    id int(5) NOT NULL,
    date varchar(10) NOT NULL,
    time varchar(10) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_date (id, date, time) VALUES (1,'d-m-Y','g:i:a')";
    $db->sql_query($sql);
}

function Install_shoutbox_emoticons() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_emoticons";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_emoticons (
    id int(9) NOT NULL auto_increment,
    text varchar(20) NOT NULL,
    image varchar(70) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':D', '<img src=images/blocks/shout_box/icon_biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-D', '<img src=images/blocks/shout_box/icon_biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':grin:', '<img src=images/blocks/shout_box/icon_biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':)', '<img src=images/blocks/shout_box/icon_smile.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-)', '<img src=images/blocks/shout_box/icon_smile.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':smile:', '<img src=images/blocks/shout_box/icon_smile.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':(', '<img src=images/blocks/shout_box/icon_sad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-(', '<img src=images/blocks/shout_box/icon_sad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':sad:', '<img src=images/blocks/shout_box/icon_sad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':o', '<img src=images/blocks/shout_box/icon_surprised.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-o', '<img src=images/blocks/shout_box/icon_surprised.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (';)', '<img src=images/blocks/shout_box/icon_wink.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (';-)', '<img src=images/blocks/shout_box/icon_wink.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':wink:', '<img src=images/blocks/shout_box/icon_wink.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':lol:', '<img src=images/blocks/shout_box/icon_lol.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('8O', '<img src=images/blocks/shout_box/icon_eek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('8-O', '<img src=images/blocks/shout_box/icon_eek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':eek:', '<img src=images/blocks/shout_box/icon_eek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':shock:', '<img src=images/blocks/shout_box/icon_eek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':?', '<img src=images/blocks/shout_box/icon_confused.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-?', '<img src=images/blocks/shout_box/icon_confused.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':S', '<img src=images/blocks/shout_box/icon_confused.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('8)', '<img src=images/blocks/shout_box/icon_cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('8-)', '<img src=images/blocks/shout_box/icon_cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':x', '<img src=images/blocks/shout_box/icon_mad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-x', '<img src=images/blocks/shout_box/icon_mad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':P', '<img src=images/blocks/shout_box/icon_razz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-P', '<img src=images/blocks/shout_box/icon_razz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':razz:', '<img src=images/blocks/shout_box/icon_razz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':oops:', '<img src=images/blocks/shout_box/icon_redface.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':redface:', '<img src=images/blocks/shout_box/icon_redface.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':cry:', '<img src=images/blocks/shout_box/icon_cry.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':evil:', '<img src=images/blocks/shout_box/icon_evil.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':twisted:', '<img src=images/blocks/shout_box/icon_twisted.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':roll:', '<img src=images/blocks/shout_box/icon_rolleyes.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':!:', '<img src=images/blocks/shout_box/icon_exclaim.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':exclaim:', '<img src=images/blocks/shout_box/icon_exclaim.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':?:', '<img src=images/blocks/shout_box/icon_question.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':question:', '<img src=images/blocks/shout_box/icon_question.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':idea:', '<img src=images/blocks/shout_box/icon_idea.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':arrow:', '<img src=images/blocks/shout_box/icon_arrow.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':|', '<img src=images/blocks/shout_box/icon_neutral.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-|', '<img src=images/blocks/shout_box/icon_neutral.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':mrgreen:', '<img src=images/blocks/shout_box/icon_mrgreen.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':shy:', '<img src=images/blocks/shout_box/shy.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':dead:', '<img src=images/blocks/shout_box/dead.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':embar:', '<img src=images/blocks/shout_box/embar.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':bigrazz:', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':yes:', '<img src=images/blocks/shout_box/yes.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':no:', '<img src=images/blocks/shout_box/no.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':uhoh:', '<img src=images/blocks/shout_box/uhoh.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':upset:', '<img src=images/blocks/shout_box/upset.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':sigh:', '<img src=images/blocks/shout_box/sigh.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('zzz', '<img src=images/blocks/shout_box/sleep.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':sleep:', '<img src=images/blocks/shout_box/sleep.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':confused:', '<img src=images/blocks/shout_box/confused.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':aua:', '<img src=images/blocks/shout_box/aua.gif>')";
    $db->sql_query($sql);
}

function Install_shoutbox_ipblock() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_ipblock";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_ipblock (
    id int(9) NOT NULL auto_increment,
    name varchar(50) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
}

function Install_shoutbox_nameblock() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_nameblock";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_nameblock (
    id int(9) NOT NULL auto_increment,
    name varchar(50) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
}

function Install_shoutbox_version() {
    global $prefix, $db;
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_version";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_version (
    id int(5) NOT NULL,
    version varchar(10) NOT NULL,
    datechecked varchar(2) NOT NULL,
    versionreported varchar(10) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_version (id, version, datechecked, versionreported) VALUES (1,'8.5',0,0)";
    $db->sql_query($sql);
}

function UpgradeTo5_04() {
    // 4.6 5.03 5.02 5.01 5.0
    // to
    // 5.04
    global $prefix, $db;

    //drop, create, insert
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_censor";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_censor (
    id int(9) NOT NULL auto_increment,
    text varchar(30) NOT NULL,
    replacement varchar(30) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('\@\$\$', 'butt')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('a\$\$', 'butt')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('anton', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('arse', 'butt')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('arsehole', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('ass', 'butt')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('ass muncher', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('asshole', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('asstooling', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('asswipe', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('b\!tch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('b17ch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('b1tch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bastard', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('beefcurtins', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bi7ch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bitch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bitchy', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('boiolas', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bollocks', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('breasts', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('brown nose', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('bugger', ' damn ')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('butt pirate', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('c0ck', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cawk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('chink', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('clitsaq', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cock', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cockbite', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cockgobbler', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cocksucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cum', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('cunt', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dago', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('daygo', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dego', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dick', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dick wad', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dickhead', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dickweed', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('douchebag', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('dziwka', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('ekto', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('enculer', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('faen', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fag', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('faggot', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fart', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fatass', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('feg', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('felch', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('ficken', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fitta', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fitte', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('flikker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fok', '$#%!')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fuck', '$#%!')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fu\(k', '$#%!')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fucking', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fuckwit', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fuk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fuking', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('futkretzn', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('fux0r', '$#%!')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('gook', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('h0r', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('handjob', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('helvete', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('honkey', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('hore', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('hump', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('injun', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kawk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kike', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('knulle', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kraut', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kuk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kuksuger', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kurac', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('kurwa', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('langer', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('masturbation', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('merd', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('motherfucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('motherfuckingcocksucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('mutherfucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nepesaurio', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nigga', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nigger', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nonce', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('nutsack', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('one\-eyed\-trouser\-snake', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('penis', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('picka', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('pissant', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('pizda', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('politician', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('prick', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('puckface', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('pule', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('pussy', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('puta', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('puto', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('rimjob', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('rubber', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('scheisse', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('schlampe', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('schlong', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('screw', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('shit', '****')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('shiteater', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('shiz', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('skribz', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('skurwysyn', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('slut', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('spermburper', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('spic', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('spierdalaj', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('splooge', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('spunk', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('tatas', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('tits', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('toss the salad', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('twat', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('unclefucker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('vagina', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('vittu', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('votze', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wank', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wanka', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wanker', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wankers', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wankstain', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('whore', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wichser', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('wop', '[censored]')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_censor (text, replacement) VALUES ('yed', '[censored]')";
    $db->sql_query($sql);

    //drop, create, insert
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_date";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_date (
    id int(5) NOT NULL,
    date varchar(10) NOT NULL,
    time varchar(10) NOT NULL,
    PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_date (id, date, time) VALUES (1,'d-m-Y','g:i:a')";
    $db->sql_query($sql);

    $sql = "ALTER TABLE ".$prefix."_shoutbox ADD COLUMN ip varchar(39)";
    $db->sql_query($sql);
    $sql = "UPDATE ".$prefix."_shoutbox SET ip = 'noip' WHERE ip IS NULL";
    $db->sql_query($sql);

    UpgradeTo6_0();
}

function UpgradeTo4_6() {
    // 4.0 4.5
    // to
    // 4.6
    global $prefix, $db;

    //drop, create, insert
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_conf";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_conf (
    id int(9) NOT NULL auto_increment,
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
   PRIMARY KEY (id)
   )";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_conf (id, color1, color2, date, time, number, ipblock, nameblock, censor, tablewidth, urlonoff, delyourlastpost, anonymouspost, height, themecolors, textWidth, nameWidth, smiliesPerRow, reversePosts) VALUES (1,'#EBEBEB','#FFFFFF' ,'yes' ,'yes','10','yes','yes','yes','150','yes','yes','no','150','no','20','10','7','no')";
    $db->sql_query($sql);

    UpgradeTo5_04();
}


function UpgradeTo4_0() {
    // 3.5
    // to
    // 4.0
    global $prefix, $db;

    $db->sql_query("ALTER TABLE ".$prefix."_quiecom_shoutblock RENAME ".$prefix."_shoutbox");
    $db->sql_query("ALTER TABLE ".$prefix."_quiecom_shoutblock_censor RENAME ".$prefix."_shoutbox_censor");
    $db->sql_query("ALTER TABLE ".$prefix."_quiecom_shoutblock_conf RENAME ".$prefix."_shoutbox_conf");
    $db->sql_query("DROP TABLE IF EXISTS ".$prefix."_quiecom_shoutblock_emoticons");
    $db->sql_query("ALTER TABLE ".$prefix."_quiecom_shoutblock_ipblock RENAME ".$prefix."_shoutbox_ipblock");
    $db->sql_query("ALTER TABLE ".$prefix."_quiecom_shoutblock_nameblock RENAME ".$prefix."_shoutbox_nameblock");

    //drop, create, insert
    $sql = "DROP TABLE IF EXISTS ".$prefix."_shoutbox_emoticons";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_shoutbox_emoticons (id int(9) NOT NULL auto_increment,
   text varchar(20) NOT NULL, image varchar(70) NOT NULL, PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':confused:', '<img src=images/blocks/shout_box/confused.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':sigh:', '<img src=images/blocks/shout_box/sigh.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':sleep:', '<img src=images/blocks/shout_box/sleep.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':upset:', '<img src=images/blocks/shout_box/upset.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':none:', '<img src=images/blocks/shout_box/none.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':eek:', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':rolleyes:', '<img src=images/blocks/shout_box/rolleyes.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':mad:', '<img src=images/blocks/shout_box/mad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':yes:', '<img src=images/blocks/shout_box/yes.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':no:', '<img src=images/blocks/shout_box/no.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':shy:', '<img src=images/blocks/shout_box/shy.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':laugh:', '<img src=images/blocks/shout_box/laugh.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':dead:', '<img src=images/blocks/shout_box/dead.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':cry:', '<img src=images/blocks/shout_box/cry.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':)', '<img src=images/blocks/shout_box/smile.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':(', '<img src=images/blocks/shout_box/sad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (';)', '<img src=images/blocks/shout_box/smilewinkgrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':|', '<img src=images/blocks/shout_box/none.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-)', '<img src=images/blocks/shout_box/smile.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-(', '<img src=images/blocks/shout_box/sad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (';-)', '<img src=images/blocks/shout_box/smilewinkgrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-|', '<img src=images/blocks/shout_box/none.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':0', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('B)', '<img src=images/blocks/shout_box/cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':D', '<img src=images/blocks/shout_box/biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':P', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':B', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('B-)', '<img src=images/blocks/shout_box/cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-D', '<img src=images/blocks/shout_box/biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-P', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':O', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('b)', '<img src=images/blocks/shout_box/cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':d', '<img src=images/blocks/shout_box/biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':p', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':b', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('b-)', '<img src=images/blocks/shout_box/cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-d', '<img src=images/blocks/shout_box/biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-p', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':-b', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES (':o', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('o_O', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('O_o', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('o_o', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_shoutbox_emoticons (text, image) VALUES ('O_O', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);

    UpgradeTo4_6();
}

function UpgradeTo3_5() {
    // 3.0.1 3.0.0 3.0.0 beta 3 3.0.0 beta 2 3.0.0 beta 1 2.6.1 2.6 2.5 2.4 qshoutblock
    // to
    // 3.5
    global $prefix, $db;
    //drop, create, insert
    $sql = "DROP TABLE IF EXISTS ".$prefix."_quiecom_shoutblock_conf";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_quiecom_shoutblock_conf (id int(9) NOT NULL auto_increment,
   color1 varchar(20) NOT NULL, color2 varchar(20) NOT NULL, date varchar(5) NOT NULL, time varchar(5) NOT NULL,
   number varchar(5) NOT NULL, ipblock varchar(5) NOT NULL,  nameblock varchar(5) NOT NULL,
   censor varchar(5) NOT NULL, tablewidth varchar(3) NOT NULL, urlonoff varchar(5) NOT NULL, delyourlastpost varchar(5) NOT NULL, anonymouspost varchar(5) NOT NULL, height varchar(5) NOT NULL, themecolors varchar(5) NOT NULL, PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_conf (id, color1, color2, date, time, number, ipblock, nameblock, censor, tablewidth, urlonoff, delyourlastpost, anonymouspost, height, themecolors) VALUES (1,'#EBEBEB','#FFFFFF' ,'yes' ,'yes','10','yes','yes','yes','150','yes','yes','no','150','no')";
    $db->sql_query($sql);

    //drop, create, insert
    $sql = "DROP TABLE IF EXISTS ".$prefix."_quiecom_shoutblock_emoticons";
    $db->sql_query($sql);
    $sql = "CREATE TABLE ".$prefix."_quiecom_shoutblock_emoticons (id int(9) NOT NULL auto_increment,
   text varchar(20) NOT NULL, image varchar(50) NOT NULL, PRIMARY KEY (id))";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':confused:', '<img src=images/blocks/shout_box/confused.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':sigh:', '<img src=images/blocks/shout_box/sigh.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':sleep:', '<img src=images/blocks/shout_box/sleep.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':upset:', '<img src=images/blocks/shout_box/upset.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':none:', '<img src=images/blocks/shout_box/none.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':eek:', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':rolleyes:', '<img src=images/blocks/shout_box/rolleyes.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':mad:', '<img src=images/blocks/shout_box/mad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':yes:', '<img src=images/blocks/shout_box/yes.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':no:', '<img src=images/blocks/shout_box/no.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':shy:', '<img src=images/blocks/shout_box/shy.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':laugh:', '<img src=images/blocks/shout_box/laugh.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':dead:', '<img src=images/blocks/shout_box/dead.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':cry:', '<img src=images/blocks/shout_box/cry.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':)', '<img src=images/blocks/shout_box/smile.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':(', '<img src=images/blocks/shout_box/sad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (';)', '<img src=images/blocks/shout_box/smilewinkgrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':|', '<img src=images/blocks/shout_box/none.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':-)', '<img src=images/blocks/shout_box/smile.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':-(', '<img src=images/blocks/shout_box/sad.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (';-)', '<img src=images/blocks/shout_box/smilewinkgrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':-|', '<img src=images/blocks/shout_box/none.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':0', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES ('B)', '<img src=images/blocks/shout_box/cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':D', '<img src=images/blocks/shout_box/biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':P', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':B', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES ('B-)', '<img src=images/blocks/shout_box/cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':-D', '<img src=images/blocks/shout_box/biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':-P', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':O', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES ('b)', '<img src=images/blocks/shout_box/cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':d', '<img src=images/blocks/shout_box/biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':p', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':b', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES ('b-)', '<img src=images/blocks/shout_box/cool.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':-d', '<img src=images/blocks/shout_box/biggrin.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':-p', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':-b', '<img src=images/blocks/shout_box/bigrazz.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES (':o', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES ('o_O', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES ('O_o', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES ('o_o', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);
    $sql = "INSERT INTO ".$prefix."_quiecom_shoutblock_emoticons (text, image) VALUES ('O_O', '<img src=images/blocks/shout_box/bigeek.gif>')";
    $db->sql_query($sql);

    UpgradeTo4_0();
}

function OurScriptsCopyright() {
    // You may not remove or edit this function. It is our copyright.
    echo "<p class=\"tiny\" align=\"center\">Shout Box SQL database configuration script &copy;2004-2005 by <a href=\"http://www.ourscripts.net\" target=\"_blank\">OurScripts.net</a></p>";
}

function SQLtestTables() {
    global $prefix, $db;

    $sql = "SELECT * FROM ".$prefix."_shoutbox_version";
    $result = $db->sql_query($sql);
    if ($result) {
        // Automated version choice
        $row = $db->sql_fetchrow($result);
        $SB_Version_Installed = $row[1];
    } else {
        $SB_Version_Installed = 0;
    }

    // test SQL table install and report
    $SBSQLerror = 0;
    $errorContent = "";
    $sql = "SELECT * FROM ".$prefix."_shoutbox_shouts";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_shouts</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_censor";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_censor</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_conf";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_conf</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_date";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_date</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_emoticons";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_emoticons</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_ipblock";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_ipblock</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_nameblock";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_nameblock</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_version";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_version</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_themes";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_themes</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_theme_images";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_theme_images</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_sticky";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_sticky</li>";
    }
    $sql = "SELECT * FROM ".$prefix."_shoutbox_manage_count";
    $result = $db->sql_query($sql);
    if ($result == NULL) {
        $SBSQLerror++;
        $errorContent .= "<li><strong>Missing/Locked critical SQL table:</strong> ".$prefix."_shoutbox_manage_count</li>";
    }
    // Add any new SQL tests here






    echo "<table align=\"center\" width=\"75%\" cellpadding=\"3\" border=\"1\" cellspacing=\"0\">";
    echo "<tr><td><p class=\"title\" align=\"center\"><strong>Database Status:</strong></p>";
    if ($SB_Version_Installed == 0) {
        echo "<p class=\"content\" align=\"center\">Shout Box version not found</p>";
    } else {
        echo "<p class=\"content\" align=\"center\">Shout Box version installed: <strong>v$SB_Version_Installed</strong></p>";
    }
    if ($SBSQLerror == 0) {
        echo "<p align=\"center\" class=\"content\">SQL configuration tests <strong>OK</strong></p>";
    } elseif ($SBSQLerror > 0) {
        echo "<p class=\"content\"><strong>IMPORTANT:</strong> SQL configuration test found $SBSQLerror problems. You may want to view the repair options. If you are installing or upgrading, and haven't run the \"Configure SQL\" button yet, you can ignore these warnings.</p><ol class=\"content\">$errorContent</ol>";
    }
    echo "</td></tr></table><br />&nbsp;";
}

function SQLrepairOptions($RepairSBSQL) {
    global $prefix, $db;

    echo "<table align=\"center\" width=\"75%\" cellpadding=\"3\" border=\"1\" cellspacing=\"0\">";
    echo "<tr><td align=\"center\"><p class=\"title\" align=\"center\"><strong>Repair:</strong></p>";

    if ($RepairSBSQL == 'Yes') {
        echo "<table align=\"center\" cellpadding=\"3\" border=\"1\" cellspacing=\"0\">";
        echo "<tr><td colspan=\"3\"><p class=\"content\" align=\"center\"><strong>Reinstall any of these SQL tables?</strong></p></td></tr>\n";

        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_censor\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_censor</p></td><td><p class=\"content\">censor</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_conf\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_conf</p></td><td><p class=\"content\">admin options</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_date\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_date</p></td><td><p class=\"content\">date format</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_emoticons\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_emoticons</p></td><td><p class=\"content\">smilies</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_ipblock\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_ipblock</p></td><td><p class=\"content\">banned IPs</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_nameblock\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_nameblock</p></td><td><p class=\"content\">banned names</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_themes\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_themes</p></td><td><p class=\"content\">theme colors</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_theme_images\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_theme_images</p></td><td><p class=\"content\">theme images</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_version\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_version</p></td><td><p class=\"content\">current version</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_sticky\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_sticky</p></td><td><p class=\"content\">Sticky Shouts</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_manage_count\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_manage_count</p></td><td><p class=\"content\">Admin manage count</p></td></tr>\n";
        // Add new tables here for repairing







        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"_shoutbox_shouts\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td><p class=\"content\">".$prefix."_shoutbox_shouts</p></td><td><p class=\"content\">saved shouts</p></td></tr>\n";
        echo "<tr><td><form action=\"\" method=\"post\" style=\"margin-bottom: 0px; margin-top: 0px;\"><input type=\"hidden\" name=\"SQLaction\" value=\"ReinstallAllExceptShoutsTable\" /><input type=\"submit\" name=\"button\" value=\"Reinstall\" /></form></td><td colspan=\"2\"><p class=\"content\">Reinstall all shout box SQL tables except shouts table.</p></td></tr>\n";

        echo "</table><br />&nbsp;";
    } else {
        echo "<form action=\"\" method=\"post\" style=\"margin-bottom: 0px;\"><center><input type=\"hidden\" name=\"SQLaction\" value=\"Yes\" /><input type=\"submit\" name=\"button\" value=\"View repair options\" /></center></form><br />&nbsp;";
    }

    echo "</td></tr></table>";
}

function defaultThemeColors() {
    global $prefix, $db;
    $totalThemes = 0;
    // Start of code from PHP-Nuke 'Your Account' module.
    $handle=opendir('themes');
    while ($file = readdir($handle)) {
        if ( (!ereg("[.]",$file) AND file_exists("themes/$file/theme.php")) ) {
            $themelist .= "$file ";
        }
    }
    closedir($handle);
    $themelist = explode(" ", $themelist);
    sort($themelist);
    for ($i=0; $i < sizeof($themelist); $i++) {
        if(!empty($themelist[$i])) {
            // End of code from PHP-Nuke 'Your Account' module.
            // Insert default colors to SQL when a new theme is found
            $sql = "SELECT * FROM ".$prefix."_shoutbox_themes WHERE themeName='$themelist[$i]'";
            $result = $db->sql_query($sql);
            $themeRow = $db->sql_fetchrow($result);
            if (empty($themeRow)) {
                $sql = "INSERT INTO ".$prefix."_shoutbox_themes (themeName, blockColor1, blockColor2, border, menuColor1, menuColor2) VALUES ('$themelist[$i]','#EBEBEB','#FFFFFF','#BBBBBB','#EBEBEB','#FFFFFF')";
                $db->sql_query($sql);
            }
            // End default colors
        }
    }
}

function ShoutBoxSQLPostInstall() {
    defaultThemeColors();
    global $prefix, $db;
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    ShoutBoxSQLHeader();

    // Upgrade and install options
    echo "<table align=\"center\" width=\"75%\" cellpadding=\"3\" border=\"1\" cellspacing=\"0\">";
    echo "<tr><td align=\"center\"><p class=\"title\" align=\"center\"><strong>Install or Upgrade:</strong></p>";
    echo "<p align=\"center\" class=\"content\"><strong>Shout Box SQL install/update completed.</strong></p></td></tr></table><br />&nbsp;";

    // Report status of SQL
    SQLtestTables();

    // repair database tables
    $RepairSBSQL = "";
    SQLrepairOptions($RepairSBSQL);

    OurScriptsCopyright(); // You may not remove or edit this. It is our copyright.
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

switch($SQLaction) {

    case "ReinstallAllExceptShoutsTable":
    ReinstallAllExceptShoutsTable();
    break;

    case "NewInstall":
    NewInstall();
    break;

    case "SQLVersionsMatch":
    NewInstall();
    break;

    // Add new case for each new version below this line






    case "Version8_0":
    UpgradeTo8_5();
    break;

    case "Version7_5":
    UpgradeTo8_0();
    break;

    case "Version7_0":
    UpgradeTo7_5();
    break;

    case "Version6_02":
    UpgradeTo7_0();
    break;

    case "Version6_01":
    UpgradeTo6_02();
    break;

    case "Version6_0":
    UpgradeTo6_01();
    break;

    case "Version5_04":
    UpgradeTo6_0();
    break;

    case "Version5_03":
    UpgradeTo6_0();
    break;

    case "Version5_02":
    UpgradeTo6_0();
    break;

    case "Version5_01":
    UpgradeTo6_0();
    break;

    case "Version5_0":
    UpgradeTo6_0();
    break;

    case "Version4_6":
    UpgradeTo5_04();
    break;

    case "Version4_5":
    UpgradeTo4_6();
    break;

    case "Version4_0":
    UpgradeTo4_6();
    break;

    case "Version3_5":
    UpgradeTo4_0();
    break;

    case "Version3_0_1":
    UpgradeTo3_5();
    break;

    case "Version3_0_0":
    UpgradeTo3_5();
    break;

    case "Version3_0_0beta3":
    UpgradeTo3_5();
    break;

    case "Version3_0_0beta2":
    UpgradeTo3_5();
    break;

    case "Version3_0_0beta1":
    UpgradeTo3_5();
    break;

    case "Version2_6_1":
    UpgradeTo3_5();
    break;

    case "Version2_6":
    UpgradeTo3_5();
    break;

    case "Version2_5":
    UpgradeTo3_5();
    break;

    case "Version2_4":
    UpgradeTo3_5();
    break;

    case "Yes":
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_shouts":
    Install_shoutbox_shouts();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_censor":
    Install_shoutbox_censor();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_conf":
    Install_shoutbox_conf();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_date":
    Install_shoutbox_date();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_emoticons":
    Install_shoutbox_emoticons();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_ipblock":
    Install_shoutbox_ipblock();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_nameblock":
    Install_shoutbox_nameblock();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_themes":
    Install_shoutbox_themes();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_theme_images":
    Install_shoutbox_theme_images();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_version":
    Install_shoutbox_version();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_sticky":
    Install_shoutbox_sticky();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    case "_shoutbox_manage_count":
    Install_shoutbox_manage_count();
    $RepairSBSQL = 'Yes';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;

    default:
    $RepairSBSQL = '';
    ShoutBoxSQLPreInstall($Most_Current_Version, $RepairSBSQL);
    break;
}

} else {
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    echo "<p class=\"title\" align=\"center\">Shout Box SQL database configuration script</p>\n";

    echo "<p class=\"content\"><strong>Security note:</strong> This shout box is distributed for free from <strong><a href=\"http://www.ourscripts.net\" target=\"_blank\">OurScripts.net</a></strong> and licensed under the GPL. If you didn't download it from there, it is a good idea that you do so. We wouldn't want you installing a hacked version. Please encourage any webmasters that are distributing this script from their site to change their download link to <strong><a href=\"http://www.ourscripts.net/modules.php?name=Downloads&d_op=viewdownloaddetails&lid=95&title=Shout%20Box\" target=\"_blank\">here</a></strong>. Thank you!</p>\n";

    echo "<p class=\"title\" align=\"center\">Access Denied to non-Super Administrators!</p>";
    echo "<p class=\"content\" align=\"center\"><a href=\"".$admin_file.".php\">Login as Super Administrator</a></p>";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
}

?>