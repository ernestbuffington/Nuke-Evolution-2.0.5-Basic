<?php

/************************************************************************
   Nuke-Evolution: Site Map
   ============================================
   Copyright é 2005 by The Nuke-Evolution Team - Nuke-Evolution.com
  
   Filename      : lang-english.php
   Author        : LombudXa (Rodmar) (www.evolved-Systems.net)
   Version       : 2.0.0
   Date          : 12/18/2005 (mm-dd-yyyy)

   Description   : Site Map generates a list of useful links from your
                   modules and displays them on one page. Goal is to
                   provide search engines like Google with a static page
                   of links to dynamic pages. You should link to this
                   page from your sites home page somewhere.
************************************************************************/

global $nukeurl, $sitename;

//
//Administration
//
define('_SMADMIN','Oldaltérkép Adminisztráció');
define('_SMMAINADMIN','Adminisztráció');

//Admin Menu
define('_SMGENCONFIG','Általános beállítások');
define('_SMGENCONFIGDESC','Beállítások Változtatása az Oldaltérkép Modulban');
define('_SMMODS','Modulok/Kiegészítõk');
define('_SMMODSDESC','Engedélyez/Kiegézsítõk Kikapcsokása');
define('_SMLIMITS','Linkek Korlátozása');
define('_SMLIMITSDESC','Linkek Korlátozását Létrehozta Az Oldal Térkép Modul Bizonyos Esetekben a Moduloknál És Kiegészítõknél');
define('_SMGOOGLESETUP','Google Blokk Beállítás');
define('_SMGOOGLESETUPDESC','Google Blokk Beállításainak Megváltoztatása');

//General Configuration
define('_SMMATCHTHEME','Kiegészítõ Téma Engedélyezése');
define('_SMSOMMAIRE','Sommaire Blokk Engedélyezése');
define('_SMGT','GT-NExtGEn (GoogleTap) Engedélyezése');
define('_SMGOOGLE','Google Keresõ Blokk Engedélyezése');
define('_SMGENTIME','Oldal Létrehozás Engedélyezése');

define('_SMEMATCHTHEME','Script Megváltoztatása a Témánál');
define('_SMESOMMAIRE','Sommaire blokk, Engedélyezése');
define('_SMGOTGT','GoogleTap Engedélyezve');
define('_SMEGOOGLE','Megjelenjen a Sommaire blokk?');
define('_SMEGENTIME','Oldal Létrehozás Megjelenitése?');

//Modules/Addons
define('_SMNEWS','Hírek Engedélyezve');
define('_SMFNA','Fórum Hírek Engedélyezve');
define('_SMFORUMCAT','Fórum Kategoriák Engedélyezve');
define('_SMFORUMS','Fórum Engedélyezve');
define('_SMFORUMTOPICS','Fórum Rovatok Engedélyezve');
define('_SMKB','Ismertetõ Engedélyezve');
define('_SMDL','Letæltések Engedélyezve');
define('_SMWL','Linkek Engedélyezve');
define('_SMFAQ','GYIK Engedélyezve');
define('_SMCONTENT','Tartalom Engedélyezve');
define('_SMREVIEWS','Áttekintés Engedélyezve');
define('_SMTUTORIALS','Oktatóanyag Engedélyezve');
define('_SMPJ','Tervezõ Engedélyezve');
define('_SMSUPPORTERS','Támogatók Engedélyezve');
define('_SMCOPPERMINE','Coppermine Képek Engedélyezve');
define('_SMSPCHAT','SPChat Engedélyezve');
define('_SMSHOUTS','Shouts Engedélyezve');
define('_SMARCADE','Arcade Játékok Engedélyezve');
define('_SMRSS','RSS Feeds Engedélyezve');

//Limit Links
define('_SMLIMITNEWS','Új Link');
define('_SMLIMITFNA','Fórum Hírek');
define('_SMLIMITFORUMTOPICS','Fórum Rovatok');
define('_SMLIMITKB','Ismertetõ');
define('_SMLIMITDL','Letæltések');
define('_SMLIMITWL','Linkek');
define('_SMLIMITCONTENT','Tartalom');
define('_SMLIMITREVIEWS','Áttekintés');
define('_SMLIMITTUTORIALS','Oktatóanyag');
define('_SMLIMITPJ','Tervezõ');
define('_SMLIMITSUPPORTERS','Támogatók');
define('_SMLIMITCOP','Coppermine Képek');
define('_SMLIMITSHOUTS','Shouts');
define('_SMLIMITARCADE','Arcade Játékok');

//Google Block Setup
define('_SMSITELOGO','Oldal Szalagcím Neve (Alap: logo.gif)');
define('_SMSITELOGOPATH','Oldal Szalagcím Elérése (Alap: images/)');
define('_SMSITELOGOHEIGHT','Oldal Szalagcím Magassága (max. 50)');
define('_SMSITELOGOWIDTH','Oldal Szalagcím Szélessége (Alap: 425)');
define('_SMSITELOGOHEADER','Keresés Eredménye fejlécben (Alap: #ffffff)');
define('_SMSITELOGOBG','Keresés Eredménye Háttér (Alap: #ffffff)');
define('_SMGOOGLELOGO','Google Szalagcím Neve (Alap: google.gif)');
define('_SMGOOGLELOGOPATH','Google Szalagcím Elérése (Alap: images/powered/)');

//
// Module
//
define("_SM","Oldal Térkép");
define("_SM_VIEWING","Jelenleg Az Oldaltérkép Kezdõ Oldalát Látod.<br />Eredeti <a href=\"".$nukeurl."\">Beállításában</a>.<p><br /><br />");
define("_SM_GOOGLE","Google Web &amp; ".$sitename." Domain Keresõ");
define("_SM_HOME","Kezdõ Oldal");
define("_SM_ACTIVE_MODULES","Aktív Modulok");
define("_SM_NEWS","Hírek");
define("_SM_NEWS_ART"," Hír Cikkek");
define("_SM_LATEST","Legutolsó ");
define("_SM_TOP","Legjobb ");
define("_SM_FNA","Fórum Hírek");
define("_SM_FNA_TOPICS"," Fórum Rovatok");
define("_SM_FNA_CAT"," Fórum Hírek Kategóriák");
define("_SM_FORUMS","Fórum");
define("_SM_FORUM_CAT","Fórum Kategóriák");
define("_SM_PUB_FORUM","Nyilvános Fórum");
define("_SM_PUB_TOPICS_FNA"," Nyilvános Rovatok (Kivìlesõ Fórum Hírek Rovatok)");
define("_SM_PUB_TOPICS"," Nyilvános Rovatok");
define("_SM_KB_CAT","Ismert Alap Kategóriák");
define("_SM_KB_ART"," Ismert Alap Bekezdések");
define("_SM_DL"," Letõltések");
define("_SM_WL"," Linkek");
define("_SM_FAQ","Gyik");
define("_SM_CONTENT"," Oldal Tartalom");
define("_SM_REVIEWS"," Áttekintés");
define("_SM_TUTORIALS_CAT","Oktatóanyag Kategóriák");
define("_SM_TUTORIALS_ART"," Oktatóanyag Rovatok");
define("_SM_PROJECTS"," Tervezõ");
define("_SM_SUPPORTERS"," Támogatók");
define("_SM_HITS","Találat ");
define("_SM_COP_GAL_CAT","Coppermine Kép Kategoriák");
define("_SM_COP_GAL_ALB","Coppermine Kép Album");
define("_SM_COP_GAL_PIC"," Coppermine Képek");
define("_SM_SPCHAT_ROOMS","SPChat Termek");
define("_SM_SHOUT_BOX"," œzenetek a Shout Box");
define("_SM_ARCADE"," Arcade Játékok");
define("_SM_RSS","RSS Csoport");
define("_SM_CREDITS","<br />Az Oldalt Létrehozta a <a href=\"http://www.evolved-systems.net\">Site Map Module</a> ");
define("_SM_SUPPORT","<br /><br />Kérem Támogassa a :<br /><a href=\"http://www.evolved-systems.net\" target=\"_blank\">evolved-Systems.net</a><br /><a href=\"http://www.nuke-evolution.com\" target=\"_blank\">Nuke-Evolution.com</a>");
define("_SM_DBCONFIG","Adatbázis Hiba. Kérlek ‰rtesíds a Wemestert az Oldaltérkép Rossz Beáálításáról!");

?>
