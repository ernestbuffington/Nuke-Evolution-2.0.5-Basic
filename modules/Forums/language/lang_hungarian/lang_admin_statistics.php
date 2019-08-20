<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/***************************************************************************
 *                            lang_admin_statistics.php [English]
 *                              -------------------
 *     begin                : Fri Jan 24 2003
 *     copyright            : (C) 2003 Meik Sievertsen
 *     email                : acyd.burn@gmx.de
 *
 *     $Id: lang_admin_statistics.php,v 1.21 2003/03/16 18:38:29 acydburn Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

$lang['LEFT_Package_Module'] = 'Csomagolt Modulok';
$lang['Install_module'] = 'Modul telepítése';
$lang['Manage_modules'] = 'Modul Beálítások';
$lang['Stats_configuration'] = 'Beálítások';
$lang['Edit_module'] = 'Modul Szerkesztése';
$lang['Stats_langcp'] = 'Nyelvezet';

// Package Module
$lang['Package_module'] = 'Csomagolt Modulok';
$lang['Package_module_explain'] = 'Here you are able to package your three module files to one Module Package for delivery.';
$lang['Select_info_file'] = 'Válassz fájlt';
$lang['Select_lang_file'] = 'Válassz nyelvi fájlt';
$lang['Select_module_file'] = 'Válassz modult php fájlt';
$lang['Package_name'] = 'Csomag neve';
$lang['Create'] = 'Létrehozás';

// Install Module
$lang['Install_module_explain'] = 'Here you are able to install a new Module. You are able to do this with two methods. The first one is uploading your Module Package with the provided form you see below. If uploading does not work for you, you are able to upload the Module Package to your ./modules/pakfiles directory, it will be displayed automatically here then. For further Instructions how to install a Module Package, have a look at the provided Documentation.<br />After you have chosen a Module Package to install, you will be prompted with some Informations about the Module you have chosen. Please make sure the Module Informations are correct and that you meet the minimum requirements (i.e. the correct Statistics Mod Version). You are able to choose the Language you want to install with too. After you have verified everything and you are sure to install, click the Install Button.<br />The default Installation let the Module deactivated, you have to activate it before it shows up within the Statistics Page.';
$lang['Select_module_pak'] = 'Select Module Package';
$lang['Upload_module_pak'] = 'Upload Module Package';
$lang['Inst_module_already_exist'] = 'Module with the name \'%s\' already exist.<br />If you want to update this Module, you have to go to Module Management and Update the Module there.<br />If you want to completely reinstall this Module, you have to uninstall the old Module first.';
$lang['Incorrect_update_module'] = 'The selected Package is not an update to the selected Module. Please be sure you have selected the correct Package.';

$lang['Module_name'] = 'Modul Neve';
$lang['Module_description'] = 'Modul Leírása';
$lang['Module_version'] = 'Modul Verzió';
$lang['Required_stats_version'] = 'Minimum statisztika hozzáadása';
$lang['Installed_stats_version'] = 'Telepitett statisztika Modul verziója';
$lang['Module_author'] = 'Szerzõ Modul';
$lang['Author_email'] = 'Szerzõ E-Mail Címe';
$lang['Module_url'] = 'Modul/Szerzõ Honlapja';
$lang['Update_url'] = 'Modul Frissítés Honlapja (Frissítés Keresése)';
$lang['Provided_language'] = 'Nyelv';
$lang['Install_language'] = 'Nyelv Telepítése';
$lang['Module_installed'] = 'A Modul Telepítve Lett.';
$lang['Module_updated'] = 'A Modul Friisítve Lett.';

// Manage Modules
$lang['Manage_modules_explain'] = 'Itt tudod beálítani a modul tulajdonságait. Szerkesztheted, törölheted, modósithatod, bekapcsolhatod, kikapcsolhatod. Kattints a Modul nevére az elõzetes megnézéséhez.';
$lang['Deactivate'] = 'Kikapcsol';
$lang['Activate'] = 'Bekapcsol';

// Delete Module
$lang['Confirm_delete_module'] = 'Biztos, hogy törölni akarod a Modult';

// Configuration
$lang['Msg_config_updated'] = '- Statisztikai Modul Beállítások Frissítve.';
$lang['Msg_reset_view_count'] = '- Tiltások Megnézése.';
$lang['Msg_reset_install_date'] = '- Telepítések Ideje.';
$lang['Msg_reset_cache'] = '- Naplófájlok törölve.';
$lang['Msg_purge_modules'] = '- A Modul könyvtár törölve lett.';
$lang['Config_title'] = 'Statisztika Beállítása';
$lang['Config_explain'] = 'Statisztika beállításai.';
$lang['Messages'] = 'Üzenet';
$lang['Return_limit'] = 'Korlátozások';
$lang['Return_limit_explain'] = 'Rangok száma.';
$lang['Reset_settings_title'] = 'Alap beállítás';
$lang['Reset_view_count'] = 'Nem engedélyez';
$lang['Reset_view_count_explain'] = 'Statisztika nézésének tiltása.';
$lang['Reset_install_date'] = 'Telepítés idõpontja törlése';
$lang['Reset_install_date_explain'] = 'Telepítés idõpontja törlése. Beálítja a mai dátumot.';
$lang['Reset_cache'] = 'Gyorsító tár törlése';
$lang['Reset_cache_explain'] = 'Gyorsító tár törlése, minden sablon törlése.';
$lang['Purge_module_dir'] = 'Modulok könyvtár törölve';
$lang['Purge_module_dir_explain'] = 'Minden modul könyvtár törlése, minden alkönyvtár, és fájl törlése. Ez után a statisztika nem lessz elérhetõ';

// Edit Module
$lang['Msg_changed_update_time'] = '- Idõ beálítások frissítve.';
$lang['Msg_cleared_module_cache'] = '- Gyorsító tár törölve.';
$lang['Msg_module_fields_updated'] = '- Kijelölt Modul frissítve.';

$lang['Module_select_title'] = 'Modul Kiválasztása';
$lang['Module_select_explain'] = 'Modul kiválasztása szerkesztésre.';
$lang['Edit_module_explain'] = 'Itt a modulok beállításait végezheted el. At the Top you see some Module Informations, then the Message Window where all Update Messages are displayed. At the Buttom you will find the Configuration Area and the Update Module Area. Within the Update Module Area, please select an Module Package \'or\' upload a Module Package, not both please.<br />The Configuration Area may differ from Module to Module, because some Modules have special Configuration Options the Author thought would be helpful for you.';
$lang['Module_informations'] = 'Modul Információ';
$lang['Module_languages'] = 'Nyelvezet linkelve a modulhoz';
$lang['Preview_module'] = 'Modul elõzetes';
$lang['Module_configuration'] = 'Modul beállítás';
$lang['Update_time'] = 'Idõ frissítése';
$lang['Update_time_explain'] = 'Time Intervall (in Minutes) of refreshing the cached data with new Data. Every x Minutes the Module get reloaded.<br />Since the Statistics is using an priority system, this could be greater than x minutes, but not more than one day.';
$lang['Module_status'] = 'Modul állapota';
$lang['Active'] = 'Actív';
$lang['Not_active'] = 'Nem aktív';
$lang['Clear_module_cache'] = 'Modul gyorsítótár törlése';
$lang['Clear_module_cache_explain'] = 'Modul gyorsító tár törlése. A statisztika meghivásakor a Modul újra feltöltödik.';
$lang['Update_module'] = 'Modul friisítése';
$lang['No_module_packages_found'] = 'Modul csomag nem található';

// Permissions
$lang['Msg_permissions_updated'] = '- Frissítve';
$lang['Permissions'] = 'Permissions';
$lang['Set_permissions_title'] = 'Beállíthatod, hogy kik nézhetik meg a statisztikai modult. Csak felhasználók (Vendég, Regisztrált, Munkatárs és Adminisztrátor) és csoportok számára/mutassa a statisztikai oldalt.';
$lang['Perm_all'] = 'Vendég Felhasználó';
$lang['Perm_reg'] = 'Regisztrált Felhasználó';
$lang['Perm_mod'] = 'Munkatárs';
$lang['Perm_admin'] = 'Adminisztrátor';
$lang['Perm_group'] = 'Csoport';
$lang['Added_groups'] = 'Hozzáadott Csoport';
$lang['Perm_add_group'] = 'Csoport Hozzáadása';
$lang['Perm_remove_group'] = 'Csoport Törlése';
$lang['Perm_groups_title'] = 'Csoportok Megnézése';
$lang['No_groups_selected'] = 'Nincs csoport kiválasztva';
$lang['No_groups_to_add'] = 'További csoportok hozzáadása';

// Language CP
$lang['Language_key'] = 'Nyelvi Beállítás -> Kulcs';
$lang['Language_value'] = 'Nyelvi Beállítás -> Érték';
$lang['Update_all_lang'] = 'Frissítés';
$lang['Add_new_key'] = 'Új kulcs hozzáadása';
$lang['Create_new_lang'] = 'Új nyelv létrehozása';
$lang['Delete_language'] = 'Nyelv frissítése';
$lang['Language_cp_title'] = 'Nyelvi Beállítások';
$lang['Language_cp_explain'] = 'Itt álíthatod be a nyelvi fájlok tulajdonságait. (Mentés/Feltöltés)';
$lang['Export_lang_module'] = 'Nyelvi Modul Mentése';
$lang['Export_language'] = 'Nyelvezet Mentése';
$lang['Export_everything'] = 'Export everything';
$lang['Import_new_language'] = 'Nyelvezet Betöltése';
$lang['Import_new_language_explain'] = 'A kiválasztott nyelvi fájl telepítve.';
$lang['Select_language_pak'] = 'Válassz Nyelvi Csomagot';
$lang['Upload_language_pak'] = 'Nyelvi Csomag Feltöltése';

$lang['Language'] = 'Nyelvezet';
$lang['Modules'] = 'Modulok';
$lang['Language_pak_installed'] = 'Nyelvi Csomag Telepítve.';

?>