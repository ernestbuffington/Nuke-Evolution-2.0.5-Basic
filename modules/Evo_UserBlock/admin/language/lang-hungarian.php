<?php

/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    exit('Access Denied');
}

global $lang_evo_userblock;

//Common
$lang_evo_userblock['ADMIN']['EVO_USERINFO'] = 'Evolution Bejelentkezo Blokk';
$lang_evo_userblock['ADMIN']['BREAK'] = 'Hiba';
$lang_evo_userblock['ADMIN']['SAVE'] = 'Mentés';
$lang_evo_userblock['ADMIN']['SAVED'] = 'Mentve';
$lang_evo_userblock['ADMIN']['HELP'] = 'Segitség';
$lang_evo_userblock['ADMIN']['MSG_SAVED'] = 'Üzenet mentve';
$lang_evo_userblock['YES'] = 'Igen';
$lang_evo_userblock['NO'] = 'Nem';

//Errors
$lang_evo_userblock['ACCESS_DENIED'] = 'Hozzáférés megtagadva';
$lang_evo_userblock['VALUES_NF'] = 'Nincs találat ';

//Admin
$lang_evo_userblock['ADMIN']['ADMIN_HELP'] = 'Fogd meg és vidd a blokkot a helyére<br />Duplán klikkeljrá a szerkeszteni kivánt felületre';
$lang_evo_userblock['ADMIN']['ADMIN_HEADER'] = 'Nuke-Evolution Bejelentkezo Blokk :: Modulok Admin Képernyo';
$lang_evo_userblock['ADMIN']['ADMIN_RETURN'] = 'Vissza az adminisztrációs felületre';
$lang_evo_userblock['ADMIN']['COLLAPSE'] = 'Modul bekapcsolása?';

/*~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-*/

//Good Afternoon
$lang_evo_userblock['GOOD_AFTERNOON']['GOOD_AFTERNOON'] = 'Üdvözlet';
$lang_evo_userblock['GOOD_AFTERNOON']['HELP'] = 'Üzenet a blokkba.<br /><br /> %name% Név megjelenitése';

//Personal Message
$lang_evo_userblock['PERSONAL_MESSAGE']['PERSONAL_MESSAGE'] = 'Üzenetek';
$lang_evo_userblock['PERSONAL_MESSAGE']['HELP'] = 'Üzenet küldése felhasználónak<br /><br /> %name% Név megjelenitése<br /> %site% oldal neve name<br />HTML is ok';

//Username
$lang_evo_userblock['USERNAME']['USERNAME'] = 'Neve';
$lang_evo_userblock['USERNAME']['CENTER'] = 'Középen:';

//Online
$lang_evo_userblock['ONLINE']['ONLINE'] = 'Jelenvan';
$lang_evo_userblock['ONLINE']['SHOW_MEMBERS'] = 'Jelen vannak Stats:';
$lang_evo_userblock['ONLINE']['SHOW_HV'] = 'Elrejt/Mutat Stats:';
$lang_evo_userblock['ONLINE']['SCROLL'] = 'Görget:';
?>