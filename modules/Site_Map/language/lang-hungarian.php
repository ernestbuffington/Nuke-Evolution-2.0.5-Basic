<?php

/************************************************************************
   Nuke-Evolution: Site Map
   ============================================
   Copyright � 2005 by The Nuke-Evolution Team - Nuke-Evolution.com
  
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
define('_SMADMIN','Oldalt�rk�p Adminisztr�ci�');
define('_SMMAINADMIN','Adminisztr�ci�');

//Admin Menu
define('_SMGENCONFIG','�ltal�nos be�ll�t�sok');
define('_SMGENCONFIGDESC','Be�ll�t�sok V�ltoztat�sa az Oldalt�rk�p Modulban');
define('_SMMODS','Modulok/Kieg�sz�t�k');
define('_SMMODSDESC','Enged�lyez/Kieg�zs�t�k Kikapcsok�sa');
define('_SMLIMITS','Linkek Korl�toz�sa');
define('_SMLIMITSDESC','Linkek Korl�toz�s�t L�trehozta Az Oldal T�rk�p Modul Bizonyos Esetekben a Modulokn�l �s Kieg�sz�t�kn�l');
define('_SMGOOGLESETUP','Google Blokk Be�ll�t�s');
define('_SMGOOGLESETUPDESC','Google Blokk Be�ll�t�sainak Megv�ltoztat�sa');

//General Configuration
define('_SMMATCHTHEME','Kieg�sz�t� T�ma Enged�lyez�se');
define('_SMSOMMAIRE','Sommaire Blokk Enged�lyez�se');
define('_SMGT','GT-NExtGEn (GoogleTap) Enged�lyez�se');
define('_SMGOOGLE','Google Keres� Blokk Enged�lyez�se');
define('_SMGENTIME','Oldal L�trehoz�s Enged�lyez�se');

define('_SMEMATCHTHEME','Script Megv�ltoztat�sa a T�m�n�l');
define('_SMESOMMAIRE','Sommaire blokk, Enged�lyez�se');
define('_SMGOTGT','GoogleTap Enged�lyezve');
define('_SMEGOOGLE','Megjelenjen a Sommaire blokk?');
define('_SMEGENTIME','Oldal L�trehoz�s Megjelenit�se?');

//Modules/Addons
define('_SMNEWS','H�rek Enged�lyezve');
define('_SMFNA','F�rum H�rek Enged�lyezve');
define('_SMFORUMCAT','F�rum Kategori�k Enged�lyezve');
define('_SMFORUMS','F�rum Enged�lyezve');
define('_SMFORUMTOPICS','F�rum Rovatok Enged�lyezve');
define('_SMKB','Ismertet� Enged�lyezve');
define('_SMDL','Let�lt�sek Enged�lyezve');
define('_SMWL','Linkek Enged�lyezve');
define('_SMFAQ','GYIK Enged�lyezve');
define('_SMCONTENT','Tartalom Enged�lyezve');
define('_SMREVIEWS','�ttekint�s Enged�lyezve');
define('_SMTUTORIALS','Oktat�anyag Enged�lyezve');
define('_SMPJ','Tervez� Enged�lyezve');
define('_SMSUPPORTERS','T�mogat�k Enged�lyezve');
define('_SMCOPPERMINE','Coppermine K�pek Enged�lyezve');
define('_SMSPCHAT','SPChat Enged�lyezve');
define('_SMSHOUTS','Shouts Enged�lyezve');
define('_SMARCADE','Arcade J�t�kok Enged�lyezve');
define('_SMRSS','RSS Feeds Enged�lyezve');

//Limit Links
define('_SMLIMITNEWS','�j Link');
define('_SMLIMITFNA','F�rum H�rek');
define('_SMLIMITFORUMTOPICS','F�rum Rovatok');
define('_SMLIMITKB','Ismertet�');
define('_SMLIMITDL','Let�lt�sek');
define('_SMLIMITWL','Linkek');
define('_SMLIMITCONTENT','Tartalom');
define('_SMLIMITREVIEWS','�ttekint�s');
define('_SMLIMITTUTORIALS','Oktat�anyag');
define('_SMLIMITPJ','Tervez�');
define('_SMLIMITSUPPORTERS','T�mogat�k');
define('_SMLIMITCOP','Coppermine K�pek');
define('_SMLIMITSHOUTS','Shouts');
define('_SMLIMITARCADE','Arcade J�t�kok');

//Google Block Setup
define('_SMSITELOGO','Oldal Szalagc�m Neve (Alap: logo.gif)');
define('_SMSITELOGOPATH','Oldal Szalagc�m El�r�se (Alap: images/)');
define('_SMSITELOGOHEIGHT','Oldal Szalagc�m Magass�ga (max. 50)');
define('_SMSITELOGOWIDTH','Oldal Szalagc�m Sz�less�ge (Alap: 425)');
define('_SMSITELOGOHEADER','Keres�s Eredm�nye fejl�cben (Alap: #ffffff)');
define('_SMSITELOGOBG','Keres�s Eredm�nye H�tt�r (Alap: #ffffff)');
define('_SMGOOGLELOGO','Google Szalagc�m Neve (Alap: google.gif)');
define('_SMGOOGLELOGOPATH','Google Szalagc�m El�r�se (Alap: images/powered/)');

//
// Module
//
define("_SM","Oldal T�rk�p");
define("_SM_VIEWING","Jelenleg Az Oldalt�rk�p Kezd� Oldal�t L�tod.<br />Eredeti <a href=\"".$nukeurl."\">Be�ll�t�s�ban</a>.<p><br /><br />");
define("_SM_GOOGLE","Google Web &amp; ".$sitename." Domain Keres�");
define("_SM_HOME","Kezd� Oldal");
define("_SM_ACTIVE_MODULES","Akt�v Modulok");
define("_SM_NEWS","H�rek");
define("_SM_NEWS_ART"," H�r Cikkek");
define("_SM_LATEST","Legutols� ");
define("_SM_TOP","Legjobb ");
define("_SM_FNA","F�rum H�rek");
define("_SM_FNA_TOPICS"," F�rum Rovatok");
define("_SM_FNA_CAT"," F�rum H�rek Kateg�ri�k");
define("_SM_FORUMS","F�rum");
define("_SM_FORUM_CAT","F�rum Kateg�ri�k");
define("_SM_PUB_FORUM","Nyilv�nos F�rum");
define("_SM_PUB_TOPICS_FNA"," Nyilv�nos Rovatok (Kiv�les� F�rum H�rek Rovatok)");
define("_SM_PUB_TOPICS"," Nyilv�nos Rovatok");
define("_SM_KB_CAT","Ismert Alap Kateg�ri�k");
define("_SM_KB_ART"," Ismert Alap Bekezd�sek");
define("_SM_DL"," Let�lt�sek");
define("_SM_WL"," Linkek");
define("_SM_FAQ","Gyik");
define("_SM_CONTENT"," Oldal Tartalom");
define("_SM_REVIEWS"," �ttekint�s");
define("_SM_TUTORIALS_CAT","Oktat�anyag Kateg�ri�k");
define("_SM_TUTORIALS_ART"," Oktat�anyag Rovatok");
define("_SM_PROJECTS"," Tervez�");
define("_SM_SUPPORTERS"," T�mogat�k");
define("_SM_HITS","Tal�lat ");
define("_SM_COP_GAL_CAT","Coppermine K�p Kategori�k");
define("_SM_COP_GAL_ALB","Coppermine K�p Album");
define("_SM_COP_GAL_PIC"," Coppermine K�pek");
define("_SM_SPCHAT_ROOMS","SPChat Termek");
define("_SM_SHOUT_BOX"," �zenetek a Shout Box");
define("_SM_ARCADE"," Arcade J�t�kok");
define("_SM_RSS","RSS Csoport");
define("_SM_CREDITS","<br />Az Oldalt L�trehozta a <a href=\"http://www.evolved-systems.net\">Site Map Module</a> ");
define("_SM_SUPPORT","<br /><br />K�rem T�mogassa a :<br /><a href=\"http://www.evolved-systems.net\" target=\"_blank\">evolved-Systems.net</a><br /><a href=\"http://www.nuke-evolution.com\" target=\"_blank\">Nuke-Evolution.com</a>");
define("_SM_DBCONFIG","Adatb�zis Hiba. K�rlek �rtes�ds a Wemestert az Oldalt�rk�p Rossz Be��l�t�s�r�l!");

?>
