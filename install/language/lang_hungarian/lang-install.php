<?php

/************************************************************************
   Nuke-Evolution: Advanced Installer
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team
  
   Filename      : lang-install.php
   Author        : JeFFb68CAM (www.Evo-Mods.com)
   Version       : 1.0.0
   Date          : 11/05/2005 (mm-dd-yyyy)
                                                                        
   Notes         : You may NOT use this installer for your own 
                   needs or script. It is written specifically 
                   for Nuke-Evolution.
************************************************************************/

$step_a[1] = "Magyarázat";
$step_a[2] = "Fájl Attribumok [CHMOD] beálítása";
$step_a[3] = "Config Fájl Létrehozása";
$step_a[4] = "Rendszer Ellenõrzése";
$step_a[5] = "Telepítés";
$step_a[6] = "Oldal Beállítás";

$install_lang['briefing'] = "Telepítés A(z) $nuke_name Szerverre";
$install_lang['couldnt_connect'] = "Adatbázis Kapcsolodási Hiba<br />";
$install_lang['couldnt_select_db'] = "Nincs Kiválaszva Adatbázis<br />";
$install_lang['continue'] = "Tovább a Telepítõbe";
$install_lang['connection_failed'] = "Adatbázis Kapcsolodási Hiba! Változtasd Meg a Beállításokat.";
$install_lang['connection_failed2'] = "Adatbázis Kapcsolodási Hiba! Változtasd Meg a Beállításokat. (Database name)";
$install_lang['chmod'] = "CHMOD Fájl Modósítás";
$install_lang['config_maker'] = "Config.php Létrehozása";
$install_lang['configure'] = "Oldal Beállítása";
$install_lang['cant_open'] = "Fájl Megnyitási Hiba";
$install_lang['cantwrite'] = "Fájl Írási Hiba";
$install_lang['chmod_failed'] = "Egy Vagy Több Fájl Hibás, Kérlek Változtasd Meg a chmod -ot.";
$install_lang['config_success'] = "Config.php Hibanélkül Létrehozva.";
$install_lang['cookie_name'] = "Cookie Neve:";
$install_lang['cookie_path'] = "Cookie Elérés:";
$install_lang['cookie_domain'] = "Cookie Domain:";
$install_lang['config_failed'] = "Config.php Létrehozási Hiba.";
$install_lang['installer_heading'] = "Telepítõ :: Lépések";
$install_lang['installer_heading2'] = "-ból";
$install_lang['dbhost'] = "DB Host:";
$install_lang['dbname'] = "DB Name:";
$install_lang['dbuser'] = "DB User:";
$install_lang['dbpass'] = "DB Password:";
$install_lang['dbtype'] = "DB Type:";
$install_lang['dbhost_error'] = "Kérem Az adatbázis Kapcsolatot (alapértelmezett \"localhost\")";
$install_lang['dbname_error'] = "Kérem Az Adatbázis Nevét.";
$install_lang['dbuser_error'] = "Kérem A Felhasználó Nevét.";
$install_lang['dbpass_error'] = "Kérem Az Adatbázis Jelszavát.";
$install_lang['dbtype_error'] = "Válaszd Ki Az adatbázis Tipusát.";
$install_lang['data_success'] = "Az Adatok Ellenõrizve, SQL Szerver Ellenõrzése Kész!";
$install_lang['die_message'] = "Álltalános Hiba";
$install_lang['prefix'] = "Elõtag:";
$install_lang['user_prefix'] = "Felhasználó Elõtag:";
$install_lang['confirm_data'] = "Dátum Beállítása";
$install_lang['server_check'] = "Szerver Ellenõrzés";
$install_lang['skip'] = "Konfiguráció Kihagyása";
$install_lang['failed'] = "HIBÁS";
$install_lang['success'] = "SIKERES";
$install_lang['thefile'] = "A Fájl";
$install_lang['is_missing'] = "Kihagyott Fájl.<br />";
$install_lang['prefix_error'] = "Kérem Az elõtagot.";
$install_lang['uprefix_error'] = "Kérem a Felhasználó Elõtagját.";
$install_lang['mysql_incorrect'] = "<font color=red>A MySQL Verzió Nem Megfelelõ!</font><br />A Szerver Ezt Üzeni.  '.$sql_version.' 4.x Verziót Igényel Legalább.";
$install_lang['dbtype_que'] = "Biztos, Hogy Helyessen Választottad Ki Az Adatbázis Tipusát? Ha Nem Akkor Lépj Vissza És Válaszd a MySQL -t.";
$install_lang['session_lost'] = "Az Üsszegyüjtött Adatok Elvesztek, Kérlek Inditsd Újra a Telepítõt.";
$install_lang['php_ver'] = "A PHP verzió Nem Megfelelõ!</font></b><br />4.x.x Verziót Igényel Legalább";
$install_lang['checks_good'] = "Az Ellenõrzések Sikeressek. Lépj Tovább.";
$install_lang['sql_error'] = "MySQL Hiba. <b>MySQL Hiba Részletek:</b></font><br />";
$install_lang['install_success'] = "A Telepítés a $nuke_name Befejezõdött.";
$install_lang['get_config_error'] = "Konfigurációs Információk<br />";
$install_lang['update_fail'] = "Beálítási hiba";
$install_lang['sitename'] = "Az Oldal Neve:";
$install_lang['sitedescr'] = "Az Oldal Leírása:";
$install_lang['namechange'] = "Név Változás Engedéjezése:";
$install_lang['yes'] = "Igen:";
$install_lang['no'] = "Nem:";
$install_lang['email_sig'] = "E-mail Címe:";
$install_lang['site_email'] = "Oldal E-Mail:";
$install_lang['default_lang'] = "Alapértelmezett Nyelv:";
$install_lang['server_name'] = "Szerver Neve:";
$install_lang['server_port'] = "Szerver Port:";
$install_lang['done'] = "Köszönt a Nuke-Evolution.<br /><br /><a href=index.php>Irány a Kezdõ Oldal</a>";
$install_lang['delete'] = "<font color=\"red\">Kérlek Töröld az install.php -t, És Az Install Könyvtárat</font>";
$install_lang['install_complete_header'] = " :: A Telepítés Befejezõdött";
$install_lang['general_message'] = "Álltalános Üzenet";
$install_lang['data_error'] = "data.txt -t Nemlehet Megnyitni";
$install_lang['safe_mode'] = "Az Oldal Jelenleg Nem Biztonságos.<br /><br />A telepítés Befejezõdik.<br /><br /Telepitsd a Nuke-Evolution -t Sajátkezüleg.<br /><br />Kérlek Olvasd El az install help fájlt a Sajátkezû Ttelepítéshez.";

?>
