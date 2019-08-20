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
$lang_evo_userblock['BLOCK']['ANON'] = 'Vendég';
$lang_evo_userblock['BLOCK']['BREAK'] = ':';

//Error
$lang_evo_userblock['BLOCK']['ERR_NF'] = 'Could not retrieve addon values';

//Login
$lang_evo_userblock['BLOCK']['LOGIN']['REG'] = 'Regisztráció';
$lang_evo_userblock['BLOCK']['LOGIN']['LOST'] = 'Elfelejtett Jelszó';
$lang_evo_userblock['BLOCK']['LOGIN']['LOGIN'] = 'Bejelentkezés';
$lang_evo_userblock['BLOCK']['LOGIN']['USERNAME'] = 'Neved';
$lang_evo_userblock['BLOCK']['LOGIN']['PASSWORD'] = 'Jelszó';
$lang_evo_userblock['BLOCK']['LOGIN']['LOGOUT'] = 'Kijelentkezés';

//Online
$lang_evo_userblock['BLOCK']['ONLINE']['BREAK'] = ':';
$lang_evo_userblock['BLOCK']['ONLINE']['HIDDEN'] = 'Rejtett';
$lang_evo_userblock['BLOCK']['ONLINE']['VISIBLE'] = 'Jelenlévõk';
$lang_evo_userblock['BLOCK']['ONLINE']['GUESTS'] = 'Vendég';
$lang_evo_userblock['BLOCK']['ONLINE']['MEMBERS'] = 'Tag';
$lang_evo_userblock['BLOCK']['ONLINE']['TOTAL'] = 'Összesen';
$lang_evo_userblock['BLOCK']['ONLINE']['GUEST'] = 'Vendég';
$lang_evo_userblock['BLOCK']['ONLINE']['VIEW'] = 'Olvasva';
$lang_evo_userblock['BLOCK']['ONLINE']['PROFILE'] = 'Profilod';
$lang_evo_userblock['BLOCK']['ONLINE']['ONLINE'] = 'Jelenvannak';
$lang_evo_userblock['BLOCK']['ONLINE']['STATS'] = 'Jelenlét infó';

//Language
$lang_evo_userblock['BLOCK']['LANG']['SELECT'] = 'Kezelõfelület nyelve';

//Most Online
$lang_evo_userblock['BLOCK']['MOST']['MOST'] = 'Legtöbben itt';
$lang_evo_userblock['BLOCK']['MOST']['STATS'] = 'Statisztika';

//PMs
$lang_evo_userblock['BLOCK']['PMS']['INBOX'] = 'Bejövö levél';
$lang_evo_userblock['BLOCK']['PMS']['OPEN_INBOX'] = 'Levél megnyitása';

//Members
$lang_evo_userblock['BLOCK']['MEMBERS']['MEMBERS'] = 'Csoport tagság';

//Users
$lang_evo_userblock['BLOCK']['USERS']['MEMBERSHIPS'] = 'Regisztráltak';
$lang_evo_userblock['BLOCK']['USERS']['NEW_TODAY'] = 'Új ma';
$lang_evo_userblock['BLOCK']['USERS']['NEW_YESTERDAY'] = 'Új tegnap';
$lang_evo_userblock['BLOCK']['USERS']['WAITING'] = 'Várakozó';
$lang_evo_userblock['BLOCK']['USERS']['TOTAL'] = 'Összesen';
$lang_evo_userblock['BLOCK']['USERS']['LATEST'] = 'Utoljára';

//Posts
$lang_evo_userblock['BLOCK']['POSTS']['FORUMS'] = 'Fórumok';
$lang_evo_userblock['BLOCK']['POSTS']['TOPICS'] = 'Rovatok';
$lang_evo_userblock['BLOCK']['POSTS']['POSTS'] = 'Beküldött';
$lang_evo_userblock['BLOCK']['POSTS']['UR_POSTS'] = 'Te küldted';
$lang_evo_userblock['BLOCK']['POSTS']['UR_TOPICS'] = 'Cikkeid';

//Good afternoon
$lang_evo_userblock['BLOCK']['AFTERNOON']['GOOD'] = 'Jó';
$lang_evo_userblock['BLOCK']['AFTERNOON']['AFTERNOON'] = 'reggelt';
$lang_evo_userblock['BLOCK']['AFTERNOON']['MORNING'] = 'napot';
$lang_evo_userblock['BLOCK']['AFTERNOON']['EVENING'] = 'délutánt';
$lang_evo_userblock['BLOCK']['AFTERNOON']['NIGHT'] = 'estét';
?>