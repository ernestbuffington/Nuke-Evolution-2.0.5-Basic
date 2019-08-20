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
$lang['Install_module'] = 'Modul telep�t�se';
$lang['Manage_modules'] = 'Modul Be�l�t�sok';
$lang['Stats_configuration'] = 'Be�l�t�sok';
$lang['Edit_module'] = 'Modul Szerkeszt�se';
$lang['Stats_langcp'] = 'Nyelvezet';

// Package Module
$lang['Package_module'] = 'Csomagolt Modulok';
$lang['Package_module_explain'] = 'Here you are able to package your three module files to one Module Package for delivery.';
$lang['Select_info_file'] = 'V�lassz f�jlt';
$lang['Select_lang_file'] = 'V�lassz nyelvi f�jlt';
$lang['Select_module_file'] = 'V�lassz modult php f�jlt';
$lang['Package_name'] = 'Csomag neve';
$lang['Create'] = 'L�trehoz�s';

// Install Module
$lang['Install_module_explain'] = 'Here you are able to install a new Module. You are able to do this with two methods. The first one is uploading your Module Package with the provided form you see below. If uploading does not work for you, you are able to upload the Module Package to your ./modules/pakfiles directory, it will be displayed automatically here then. For further Instructions how to install a Module Package, have a look at the provided Documentation.<br />After you have chosen a Module Package to install, you will be prompted with some Informations about the Module you have chosen. Please make sure the Module Informations are correct and that you meet the minimum requirements (i.e. the correct Statistics Mod Version). You are able to choose the Language you want to install with too. After you have verified everything and you are sure to install, click the Install Button.<br />The default Installation let the Module deactivated, you have to activate it before it shows up within the Statistics Page.';
$lang['Select_module_pak'] = 'Select Module Package';
$lang['Upload_module_pak'] = 'Upload Module Package';
$lang['Inst_module_already_exist'] = 'Module with the name \'%s\' already exist.<br />If you want to update this Module, you have to go to Module Management and Update the Module there.<br />If you want to completely reinstall this Module, you have to uninstall the old Module first.';
$lang['Incorrect_update_module'] = 'The selected Package is not an update to the selected Module. Please be sure you have selected the correct Package.';

$lang['Module_name'] = 'Modul Neve';
$lang['Module_description'] = 'Modul Le�r�sa';
$lang['Module_version'] = 'Modul Verzi�';
$lang['Required_stats_version'] = 'Minimum statisztika hozz�ad�sa';
$lang['Installed_stats_version'] = 'Telepitett statisztika Modul verzi�ja';
$lang['Module_author'] = 'Szerz� Modul';
$lang['Author_email'] = 'Szerz� E-Mail C�me';
$lang['Module_url'] = 'Modul/Szerz� Honlapja';
$lang['Update_url'] = 'Modul Friss�t�s Honlapja (Friss�t�s Keres�se)';
$lang['Provided_language'] = 'Nyelv';
$lang['Install_language'] = 'Nyelv Telep�t�se';
$lang['Module_installed'] = 'A Modul Telep�tve Lett.';
$lang['Module_updated'] = 'A Modul Friis�tve Lett.';

// Manage Modules
$lang['Manage_modules_explain'] = 'Itt tudod be�l�tani a modul tulajdons�gait. Szerkesztheted, t�r�lheted, mod�sithatod, bekapcsolhatod, kikapcsolhatod. Kattints a Modul nev�re az el�zetes megn�z�s�hez.';
$lang['Deactivate'] = 'Kikapcsol';
$lang['Activate'] = 'Bekapcsol';

// Delete Module
$lang['Confirm_delete_module'] = 'Biztos, hogy t�r�lni akarod a Modult';

// Configuration
$lang['Msg_config_updated'] = '- Statisztikai Modul Be�ll�t�sok Friss�tve.';
$lang['Msg_reset_view_count'] = '- Tilt�sok Megn�z�se.';
$lang['Msg_reset_install_date'] = '- Telep�t�sek Ideje.';
$lang['Msg_reset_cache'] = '- Napl�f�jlok t�r�lve.';
$lang['Msg_purge_modules'] = '- A Modul k�nyvt�r t�r�lve lett.';
$lang['Config_title'] = 'Statisztika Be�ll�t�sa';
$lang['Config_explain'] = 'Statisztika be�ll�t�sai.';
$lang['Messages'] = '�zenet';
$lang['Return_limit'] = 'Korl�toz�sok';
$lang['Return_limit_explain'] = 'Rangok sz�ma.';
$lang['Reset_settings_title'] = 'Alap be�ll�t�s';
$lang['Reset_view_count'] = 'Nem enged�lyez';
$lang['Reset_view_count_explain'] = 'Statisztika n�z�s�nek tilt�sa.';
$lang['Reset_install_date'] = 'Telep�t�s id�pontja t�rl�se';
$lang['Reset_install_date_explain'] = 'Telep�t�s id�pontja t�rl�se. Be�l�tja a mai d�tumot.';
$lang['Reset_cache'] = 'Gyors�t� t�r t�rl�se';
$lang['Reset_cache_explain'] = 'Gyors�t� t�r t�rl�se, minden sablon t�rl�se.';
$lang['Purge_module_dir'] = 'Modulok k�nyvt�r t�r�lve';
$lang['Purge_module_dir_explain'] = 'Minden modul k�nyvt�r t�rl�se, minden alk�nyvt�r, �s f�jl t�rl�se. Ez ut�n a statisztika nem lessz el�rhet�';

// Edit Module
$lang['Msg_changed_update_time'] = '- Id� be�l�t�sok friss�tve.';
$lang['Msg_cleared_module_cache'] = '- Gyors�t� t�r t�r�lve.';
$lang['Msg_module_fields_updated'] = '- Kijel�lt Modul friss�tve.';

$lang['Module_select_title'] = 'Modul Kiv�laszt�sa';
$lang['Module_select_explain'] = 'Modul kiv�laszt�sa szerkeszt�sre.';
$lang['Edit_module_explain'] = 'Itt a modulok be�ll�t�sait v�gezheted el. At the Top you see some Module Informations, then the Message Window where all Update Messages are displayed. At the Buttom you will find the Configuration Area and the Update Module Area. Within the Update Module Area, please select an Module Package \'or\' upload a Module Package, not both please.<br />The Configuration Area may differ from Module to Module, because some Modules have special Configuration Options the Author thought would be helpful for you.';
$lang['Module_informations'] = 'Modul Inform�ci�';
$lang['Module_languages'] = 'Nyelvezet linkelve a modulhoz';
$lang['Preview_module'] = 'Modul el�zetes';
$lang['Module_configuration'] = 'Modul be�ll�t�s';
$lang['Update_time'] = 'Id� friss�t�se';
$lang['Update_time_explain'] = 'Time Intervall (in Minutes) of refreshing the cached data with new Data. Every x Minutes the Module get reloaded.<br />Since the Statistics is using an priority system, this could be greater than x minutes, but not more than one day.';
$lang['Module_status'] = 'Modul �llapota';
$lang['Active'] = 'Act�v';
$lang['Not_active'] = 'Nem akt�v';
$lang['Clear_module_cache'] = 'Modul gyors�t�t�r t�rl�se';
$lang['Clear_module_cache_explain'] = 'Modul gyors�t� t�r t�rl�se. A statisztika meghiv�sakor a Modul �jra felt�lt�dik.';
$lang['Update_module'] = 'Modul friis�t�se';
$lang['No_module_packages_found'] = 'Modul csomag nem tal�lhat�';

// Permissions
$lang['Msg_permissions_updated'] = '- Friss�tve';
$lang['Permissions'] = 'Permissions';
$lang['Set_permissions_title'] = 'Be�ll�thatod, hogy kik n�zhetik meg a statisztikai modult. Csak felhaszn�l�k (Vend�g, Regisztr�lt, Munkat�rs �s Adminisztr�tor) �s csoportok sz�m�ra/mutassa a statisztikai oldalt.';
$lang['Perm_all'] = 'Vend�g Felhaszn�l�';
$lang['Perm_reg'] = 'Regisztr�lt Felhaszn�l�';
$lang['Perm_mod'] = 'Munkat�rs';
$lang['Perm_admin'] = 'Adminisztr�tor';
$lang['Perm_group'] = 'Csoport';
$lang['Added_groups'] = 'Hozz�adott Csoport';
$lang['Perm_add_group'] = 'Csoport Hozz�ad�sa';
$lang['Perm_remove_group'] = 'Csoport T�rl�se';
$lang['Perm_groups_title'] = 'Csoportok Megn�z�se';
$lang['No_groups_selected'] = 'Nincs csoport kiv�lasztva';
$lang['No_groups_to_add'] = 'Tov�bbi csoportok hozz�ad�sa';

// Language CP
$lang['Language_key'] = 'Nyelvi Be�ll�t�s -> Kulcs';
$lang['Language_value'] = 'Nyelvi Be�ll�t�s -> �rt�k';
$lang['Update_all_lang'] = 'Friss�t�s';
$lang['Add_new_key'] = '�j kulcs hozz�ad�sa';
$lang['Create_new_lang'] = '�j nyelv l�trehoz�sa';
$lang['Delete_language'] = 'Nyelv friss�t�se';
$lang['Language_cp_title'] = 'Nyelvi Be�ll�t�sok';
$lang['Language_cp_explain'] = 'Itt �l�thatod be a nyelvi f�jlok tulajdons�gait. (Ment�s/Felt�lt�s)';
$lang['Export_lang_module'] = 'Nyelvi Modul Ment�se';
$lang['Export_language'] = 'Nyelvezet Ment�se';
$lang['Export_everything'] = 'Export everything';
$lang['Import_new_language'] = 'Nyelvezet Bet�lt�se';
$lang['Import_new_language_explain'] = 'A kiv�lasztott nyelvi f�jl telep�tve.';
$lang['Select_language_pak'] = 'V�lassz Nyelvi Csomagot';
$lang['Upload_language_pak'] = 'Nyelvi Csomag Felt�lt�se';

$lang['Language'] = 'Nyelvezet';
$lang['Modules'] = 'Modulok';
$lang['Language_pak_installed'] = 'Nyelvi Csomag Telep�tve.';

?>