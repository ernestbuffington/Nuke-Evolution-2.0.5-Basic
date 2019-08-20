/*****[NUKE-EVOLUTION BASIC: Upgrade]************************************

Before You Begin
----------------
Due to differences in the makeup of PHP-Nuke and Nuke-Evolution (Evo)
the upgrade is going to require you to READ this document closely.  
If you have any questions please feel free to ask in the Evo
support forums at http://www.nuke-evolution.com/modules.php?name=Forums

This upgrade is only for those that have PHP-Nuke standard and a version
between 6.5 and 7.9.  If you do not have this then this is most likely
not the correct upgrade for you.

It looks long and difficult, but it is not so bad.  We just have to cover everything
as much as possible.  Please do not be scared it will be ok.

Read EACH step COMPLETELY before attempting that step!!!

What You Will Lose
-------------------
Since there are many different modules, blocks and mods beyond the
ones included in the standard Nuke download it makes it impossible
for us to make a document to cover every possibility. Please understand
that this upgrade may not work for you if you have installed anything
beyond the standard download.

There should be nothing in the standard package that you might lose.

Prestart
--------
I would back up your site and DB if I were you.

First Step
----------
Download your config.php from your current working website.  Write down the
$dbhost, $dbuname, $dbpass, & $dbname settings to your new config.php in
Evo (html/config.php).  If you have changed $user_prefix, $sitekey, and/or
$admin_file in PHP-Nuke please make a note of them as well.

Second Step
----------
If your current Nuke version is less than 7.5 then you must follow the directions
in the Nuke upgrade to 7.6/ folder.  Once you have completed that then you need
to return to the Third Step in this file.

If you have 7.5 or 7.6 then you may continue to the next step.

If your current Nuke version is greater than 7.6 then you must follow the directions
in the Nuke DOWNgrade to 7.6/ folder.  Once you have completed that then you need
to return to the Third Step in this file.

Third Step
----------
Included are three folders that allow you to evolutionize your site depending on
how you want the database upgraded.

The following directions and scripts are intended for people that have the old
site in place. If you have installed a new copy of Evo and have (or want to) move
the tables by hand see the Manually Move Tables section below.

YOU CAN ONLY DO 1 OF THE 3!!!

Upgrade the whole db/
=====================
This folder contains directions and scripts that will allow you to upgrade
the entire PHP-Nuke database.

Move users & forum/
===================
This folder contains directions and scripts that will allow you to upgrade
JUST the current users and forum. This means that you will LOSE everything
else if you follow these directions. It is meant for people that want to
start over from scratch but want to keep the users and the forum.

Move users/
============
This folder contains directions and scripts that will allow you to upgrade
JUST the current users. This means that you will LOSE everything else if
you follow these directions.  It is meant for people that want to start over
from scratch but want to keep JUST the users.

Choose one of these folders and open the upgrade.txt inside. Once you have
completed the directions in that file return to this file and continue to the
next step.

Fourth Step
-----------
The upgrade assumes that you have upgraded/ported your theme before upgrading
or you will do so before reopening your site. This would be a good time to
do so if you haven't. If you wanted to use the chromo theme then you MUST
run the Fix Theme note below. If you do not your site will try to use the
old theme.

If you had installed any non-standard mods that are not included in the Evo
package already you should do so now though the site SHOULD work without doing
this step. The mod tables and fields should still exist as only the standard
PHP-Nuke tables and fields have been upgrade, changed, or removed.

Fifth Step
----------
Open your website and test all the areas to ensure that everything is working
correctly.

Changes To Modules
==================
Change: if (!stristr($_SERVER['SCRIPT_NAME'], "modules.php")) {
To: if (!defined('MODULE_FILE')) {

Changes To Blocks
=================
Change: if (stristr($_SERVER['SCRIPT_NAME'], "block-Name.php")) {}
To: if(!defined('NUKE_EVO')) exit;

Manually Move Tables
--------------------
This section is only intened for people that want to move the tables
from their old PHP-Nuke site's database to their new Evo site's database.

Move users & forum/
===================
Drop the nuke_authors table from the new Evo site's database
Drop the nuke_users table from the new Evo site's database
Export the nuke_authors table structure and data from you old site's database
Import the old nuke_authors table into the new Evo site's database
Export the nuke_users table structure and data from you old site's database
Import the old nuke_users table into the new Evo site's database

Drop all tables with the nuke_bb prefix (example: nuke_bbconfig, nuke_bbposts)
from the new Evo site's database EXCEPT the following tables:
nuke_bblogs
nuke_bblogs_config
nuke_bbmodule_admin_panel
nuke_bbmodule_cache
nuke_bbmodule_group_auth
nuke_bbmodule_info
nuke_bbmodules
nuke_bbpost_reports
nuke_bbquicksearch
nuke_bbstats_config
nuke_bbxdata_fields
nuke_bbxdata_data
nuke_bbxdata_auth

Export all tables with the nuke_bb prefix (example: nuke_bbconfig, nuke_bbposts)
from your old site's database and import them into your new Evo site's database.
 
Run the upgrade.sql (Move users & forum/upgrade/) in your new Evo site's database

Move users/
============
Drop the nuke_authors table from the new Evo site's database
Drop the nuke_users table from the new Evo site's database
Export the nuke_authors table structure and data from you old site's database
Import the old nuke_authors table into the new Evo site's database
Export the nuke_users table structure and data from you old site's database
Import the old nuke_users table into the new Evo site's database
Run the upgrade.sql (Move users/upgrade/) in your new Evo site's database

Fix Theme
=========
Run the following in phpMyAdmin:

UPDATE `nuke_config` SET `default_Theme` = 'chromo';

************************************************************************\ 