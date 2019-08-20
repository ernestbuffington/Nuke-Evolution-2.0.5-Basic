<?php

/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

global $lang_evo_userblock;

//Common
$lang_evo_userblock['BLOCK']['EVO_USERINFO'] = 'Evolution Bejelentkezo blokk';
$lang_evo_userblock['BLOCK']['ANON'] = 'Vend�g';
$lang_evo_userblock['BLOCK']['BREAK'] = ':';

//Error
$lang_evo_userblock['BLOCK']['ERR_NF'] = 'Could not retrieve addon values';

//Login
$lang_evo_userblock['BLOCK']['LOGIN']['REG'] = 'Regisztr�ci�';
$lang_evo_userblock['BLOCK']['LOGIN']['LOST'] = 'Elfelejtett Jelsz�';
$lang_evo_userblock['BLOCK']['LOGIN']['LOGIN'] = 'Bejelentkez�s';
$lang_evo_userblock['BLOCK']['LOGIN']['USERNAME'] = 'Neved';
$lang_evo_userblock['BLOCK']['LOGIN']['PASSWORD'] = 'Jelsz�';
$lang_evo_userblock['BLOCK']['LOGIN']['LOGOUT'] = 'Kijelentkez�s';

//Online
$lang_evo_userblock['BLOCK']['ONLINE']['BREAK'] = ':';
$lang_evo_userblock['BLOCK']['ONLINE']['HIDDEN'] = 'Rejtett';
$lang_evo_userblock['BLOCK']['ONLINE']['VISIBLE'] = 'Jelenl�v�k';
$lang_evo_userblock['BLOCK']['ONLINE']['GUESTS'] = 'Vend�g';
$lang_evo_userblock['BLOCK']['ONLINE']['MEMBERS'] = 'Tag';
$lang_evo_userblock['BLOCK']['ONLINE']['TOTAL'] = '�sszesen';
$lang_evo_userblock['BLOCK']['ONLINE']['GUEST'] = 'Vend�g';
$lang_evo_userblock['BLOCK']['ONLINE']['VIEW'] = 'Olvasva';
$lang_evo_userblock['BLOCK']['ONLINE']['PROFILE'] = 'Profilod';
$lang_evo_userblock['BLOCK']['ONLINE']['ONLINE'] = 'Jelenvannak';
$lang_evo_userblock['BLOCK']['ONLINE']['STATS'] = 'Jelenl�t inf�';

//Language
$lang_evo_userblock['BLOCK']['LANG']['SELECT'] = 'Kezel�fel�let nyelve';

//Most Online
$lang_evo_userblock['BLOCK']['MOST']['MOST'] = 'Legt�bben itt';
$lang_evo_userblock['BLOCK']['MOST']['STATS'] = 'Statisztika';

//PMs
$lang_evo_userblock['BLOCK']['PMS']['INBOX'] = 'Bej�v� lev�l';
$lang_evo_userblock['BLOCK']['PMS']['OPEN_INBOX'] = 'Lev�l megnyit�sa';

//Members
$lang_evo_userblock['BLOCK']['MEMBERS']['MEMBERS'] = 'Csoport tags�g';

//Users
$lang_evo_userblock['BLOCK']['USERS']['MEMBERSHIPS'] = 'Regisztr�ltak';
$lang_evo_userblock['BLOCK']['USERS']['NEW_TODAY'] = '�j ma';
$lang_evo_userblock['BLOCK']['USERS']['NEW_YESTERDAY'] = '�j tegnap';
$lang_evo_userblock['BLOCK']['USERS']['WAITING'] = 'V�rakoz�';
$lang_evo_userblock['BLOCK']['USERS']['TOTAL'] = '�sszesen';
$lang_evo_userblock['BLOCK']['USERS']['LATEST'] = 'Utolj�ra';

//Posts
$lang_evo_userblock['BLOCK']['POSTS']['FORUMS'] = 'F�rumok';
$lang_evo_userblock['BLOCK']['POSTS']['TOPICS'] = 'Rovatok';
$lang_evo_userblock['BLOCK']['POSTS']['POSTS'] = 'Bek�ld�tt';
$lang_evo_userblock['BLOCK']['POSTS']['UR_POSTS'] = 'Te k�ldted';
$lang_evo_userblock['BLOCK']['POSTS']['UR_TOPICS'] = 'Cikkeid';

//Good afternoon
$lang_evo_userblock['BLOCK']['AFTERNOON']['GOOD'] = 'J�';
$lang_evo_userblock['BLOCK']['AFTERNOON']['AFTERNOON'] = 'reggelt';
$lang_evo_userblock['BLOCK']['AFTERNOON']['MORNING'] = 'napot';
$lang_evo_userblock['BLOCK']['AFTERNOON']['EVENING'] = 'd�lut�nt';
$lang_evo_userblock['BLOCK']['AFTERNOON']['NIGHT'] = 'est�t';
?>