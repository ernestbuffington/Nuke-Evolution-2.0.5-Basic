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
$lang_evo_userblock['ADMIN']['SAVE'] = 'Ment�s';
$lang_evo_userblock['ADMIN']['SAVED'] = 'Mentve';
$lang_evo_userblock['ADMIN']['HELP'] = 'Segits�g';
$lang_evo_userblock['ADMIN']['MSG_SAVED'] = '�zenet mentve';
$lang_evo_userblock['YES'] = 'Igen';
$lang_evo_userblock['NO'] = 'Nem';

//Errors
$lang_evo_userblock['ACCESS_DENIED'] = 'Hozz�f�r�s megtagadva';
$lang_evo_userblock['VALUES_NF'] = 'Nincs tal�lat ';

//Admin
$lang_evo_userblock['ADMIN']['ADMIN_HELP'] = 'Fogd meg �s vidd a blokkot a hely�re<br />Dupl�n klikkeljr� a szerkeszteni kiv�nt fel�letre';
$lang_evo_userblock['ADMIN']['ADMIN_HEADER'] = 'Nuke-Evolution Bejelentkezo Blokk :: Modulok Admin K�pernyo';
$lang_evo_userblock['ADMIN']['ADMIN_RETURN'] = 'Vissza az adminisztr�ci�s fel�letre';
$lang_evo_userblock['ADMIN']['COLLAPSE'] = 'Modul bekapcsol�sa?';

/*~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-*/

//Good Afternoon
$lang_evo_userblock['GOOD_AFTERNOON']['GOOD_AFTERNOON'] = '�dv�zlet';
$lang_evo_userblock['GOOD_AFTERNOON']['HELP'] = '�zenet a blokkba.<br /><br /> %name% N�v megjelenit�se';

//Personal Message
$lang_evo_userblock['PERSONAL_MESSAGE']['PERSONAL_MESSAGE'] = '�zenetek';
$lang_evo_userblock['PERSONAL_MESSAGE']['HELP'] = '�zenet k�ld�se felhaszn�l�nak<br /><br /> %name% N�v megjelenit�se<br /> %site% oldal neve name<br />HTML is ok';

//Username
$lang_evo_userblock['USERNAME']['USERNAME'] = 'Neve';
$lang_evo_userblock['USERNAME']['CENTER'] = 'K�z�pen:';

//Online
$lang_evo_userblock['ONLINE']['ONLINE'] = 'Jelenvan';
$lang_evo_userblock['ONLINE']['SHOW_MEMBERS'] = 'Jelen vannak Stats:';
$lang_evo_userblock['ONLINE']['SHOW_HV'] = 'Elrejt/Mutat Stats:';
$lang_evo_userblock['ONLINE']['SCROLL'] = 'G�rget:';
?>