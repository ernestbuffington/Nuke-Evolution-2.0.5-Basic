<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

/***************************************************************************
 *                            lang_admin.php [English]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.10 2005/02/21 18:38:17 acydburn Exp $
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

/*****[CHANGES]**********************************************************
-=[Base]=-
      Admin Userlist                           v2.0.2       06/11/2005
-=[Mod]=-
      Global Announcements                     v1.2.8       06/13/2005
      PM Quick Reply                           v1.3.5       06/14/2005
      Force Word Wrapping - Configurator       v1.0.16      06/15/2005
      Advance Signature Divider Control        v1.0.0       06/16/2005
      Forum Blocks                             v1.0.0       06/23/2005
      Forum ACP Administration Links           v1.0.0       06/26/2005
      Faq Manager                              v1.0.0b      06/26/2005
      Board Rules                              v2.0.0       06/26/2005
      Default avatar                           v1.1.0       06/30/2005
      Disable Board Message                    v1.0.0       07/06/2005
      Disable Board Admin Override             v0.1.1       07/06/2005
      PM threshold                             v1.0.0       07/19/2005
      Limit smilies per post                   v1.0.2       07/24/2005
      Advance Admin Index Stats                v1.0.0       08/02/2005
      Log Moderator Actions                    v1.1.6       08/06/2005
      At a Glance Options                      v1.0.0       08/17/2005
      Online/Offline/Hidden                    v2.2.6       08/21/2005
      Quick Search                             v3.0.1       08/23/2005
      Show Users Today Toggle                  v1.0.0       08/24/2005
      Group Colors and Ranks                   v1.0.0       08/24/2005
      Customized Topic Status                  v1.0.0       08/25/2005
      Initial Usergroup                        v1.0.1       08/25/2005
      Hide Images and Links                    v1.0.0       08/30/2005
      DHTML Admin Menu                         v1.0.1       08/31/2005
      Hide Images                              v1.0.0       09/02/2005
      Super Quick Reply                        v1.3.2       09/08/2005
      Smilies in Topic Titles Toggle           v1.0.0       09/10/2005
      Log Actions Mod - Topic View             v2.0.0       09/18/2005
      Forum Admin Style Selection              v1.0.0       10/01/2005
      Edit User Post Count                     v1.0.0       12/19/2005
-=[Other]=-
      URL Check                                v1.0.0       07/01/2005
      Cookie Check                             v1.0.0       08/04/2005
 ************************************************************************/

/* CONTRIBUTORS
    2002-12-15    Philip M. White (pwhite@mailhaven.com)
        Fixed many minor grammatical mistakes
*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = '�ltal�nos';
$lang['Users'] = 'Felhaszn�l�k';
$lang['Groups'] = 'Csoportok';
$lang['Forums'] = 'F�rumok kezel�se';
/*****[BEGIN]******************************************
 [ Mod:     Faq Manager                       v1.0.0b ]
 ******************************************************/
$lang['Faq_manager'] = 'GYIK Admin';
/*****[END]********************************************
 [ Mod:     Faq Manager                       v1.0.0b ]
 ******************************************************/

$lang['Configuration'] = 'Be�ll�t�sok';
$lang['Permissions'] = 'Jogosults�g';
$lang['Manage'] = 'Be�ll�t�sok';
$lang['Disallow'] = 'Tiltott nevek';
$lang['Prune'] = 'Karbantart�s';
$lang['Mass_Email'] = 'Csoportos email';
$lang['Ranks'] = 'Rang';
$lang['Smilies'] = 'Emotikonok';
$lang['Ban_Management'] = 'Letilt�sok';
$lang['Word_Censor'] = 'Cenz�ra';
$lang['Export'] = 'Export�l�s';
$lang['Create_new'] = 'K�sz�t�s';
$lang['Add_new'] = 'Hozz�ad�s';
$lang['Backup_DB'] = 'Adatb�zis lement�se';
$lang['Restore_DB'] = 'Adatb�zis vissza�ll�t�sa';
// FLAGHACK-start
$lang['Flags'] = 'Flags';
// FLAGHACK-end

/*****[BEGIN]******************************************
 [ Mod:     Faq Manager                       v1.0.0b ]
 ******************************************************/
$lang['board_faq'] = 'Oldal GYIK';
$lang['bbcode_faq'] = 'BBcode GYIK';
$lang['attachment_faq'] = 'Hozz�kapcsol�s GYIK';
$lang['prillian_faq'] = '�ltal�nos GYIK';
$lang['bid_faq'] = 'Bar�tok List�ja GYIK';
/*****[END]********************************************
 [ Mod:     Faq Manager                       v1.0.0b ]
 ******************************************************/
 
/*****[BEGIN]******************************************
 [ Mod:     Display Poster Information Once    v2.0.0 ]
 ******************************************************/
$lang['once_settings'] = 'Avatar, Al�ir�s Be�ll�t�s';
$lang['show_sig_once'] = 'Al�ir�s mutat�sa, csak az els� hozz�sz�l�sn�l';
$lang['show_avatar_once'] = 'Avatar mutat�sa, csak az els� hozz�sz�l�sn�l';
$lang['show_rank_once'] = 'Rang mutat�sa, csak az els� hozz�sz�l�sn�l';
/*****[END]********************************************
 [ Mod:     Display Poster Information Once    v2.0.0 ]
 ******************************************************/
 
/*****[BEGIN]******************************************
 [ Mod:     Board Rules                        v2.0.0 ]
 ******************************************************/
$lang['site_rules'] = 'Site Rules';
/*****[END]********************************************
 [ Mod:     Board Rules                        v2.0.0 ]
 ******************************************************/

//
// Index
//
$lang['Admin'] = 'Adminisztr�ci�';
$lang['Not_admin'] = 'Nincs jogosults�god az adminsztr�ci�hoz!';
$lang['Welcome_phpBB'] = '�dv�zl�nk a phpBB-ben!';
$lang['Admin_intro'] = 'K�sz�nj�k, hogy a phpBB-t v�lasztottad a f�rumod megval�s�t�s�hoz. Ebben az ablakban egy gyors �ttekint�st l�thatsz a F�rum n�h�ny adat�r�l. Erre az oldalra mindig visszat�rhetsz, ha a bal oldali men�pontban r�kattintasz az <i>Admin Kezd�lap</i> linkre. A F�rumba val� visszat�r�shez kattints a phpBB ikonra, mely szint�n a bal oldali men� tetej�n tal�lhat� meg. A t�bbi hivatkoz�ssal a F�rum be�ll�t�sait v�ltoztathatod meg, a legapr�bb r�szletbe men�en. Minden oldalhoz egy k�l�n kis le�r�s tartozik, mely seg�t a be�ll�t�sokban.';
$lang['Main_index'] = 'F�rum Kezd�lap';
$lang['Forum_stats'] = 'F�rum Statisztika';
$lang['Admin_Index'] = 'Admin Kezd�lap';
$lang['Preview_forum'] = 'F�rum El�n�zet';
/*****[BEGIN]******************************************
 [ Mod:     Forum ACP Administration Links     v1.0.0 ]
 ******************************************************/
$lang['Admin_Index'] = 'Admin [F�rum]';
$lang['Admin_Nuke'] = 'Admin [Nuke-Evo]';
$lang['Home_Nuke'] = 'Kezd� Oldal [Nuke-Evo]';
/*****[END]********************************************
 [ Mod:     Forum ACP Administration Links     v1.0.0 ]
 ******************************************************/

$lang['Click_return_admin_index'] = 'Kattints %side%s, hogy visszat�rj az Admin Kezd�lapra';

$lang['Statistic'] = 'Statisztika';
$lang['Value'] = '�rt�k';
$lang['Number_posts'] = 'Hozz�sz�l�sok sz�ma';
$lang['Posts_per_day'] = 'Hozz�sz�l�s sz�ma naponta';
$lang['Number_topics'] = 'T�m�k sz�ma';
$lang['Topics_per_day'] = 'T�m�k sz�ma naponta';
$lang['Number_users'] = 'Felhaszn�l�k sz�ma';
$lang['Users_per_day'] = 'Felhaszn�l�k sz�ma naponta';
$lang['Board_started'] = 'F�rum indul�sa';
$lang['Avatar_dir_size'] = 'Avatar k�nyvt�r m�rete';
$lang['Database_size'] = 'Adatb�zis m�rete';
$lang['Gzip_compression'] ='Gzip t�m�r�t�s';
$lang['Not_available'] = 'Nem el�rhet�';

$lang['ON'] = 'Bekapcsolva'; // This is for GZip compression
$lang['OFF'] = 'Kikapcsolva';
//
// DB Utils
//
$lang['Database_Utilities'] = 'Adatb�zis eszk�z�k';

$lang['Restore'] = 'Vissza�ll�t�s';
$lang['Backup'] = 'Lement�s';
$lang['Restore_explain'] = 'Ezzel a funkci�val a phpBB F�rum adatb�zis�nak �sszes t�bl�j�t vissza lehet t�lteni egy kimentett fileb�l. Ha a szerver t�mogatja a kicsomagol�st, akkor egy GZIP-pel t�m�r�tett sz�veges fileb�l is be lehet t�lteni. <b>FIGYELEM!</b> Ez fel�l�rja az �ppen haszn�lt t�bl�zatot. Az adatb�zis vissza�ll�t�sa eltarthat egy ideig, ez�rt ne menj el addig err�l az oldalr�l, m�g nem jelzi, hogy k�sz van.';
$lang['Backup_explain'] = 'Ezzel a funkci�val a phpBB F�rum adatb�zis�nak �sszes t�bl�j�t ki lehet menteni egy k�ls� fileba. Ha van m�s, egy�ni phpBB-hez tartoz� t�bla is az adatb�zisban, akkor add meg azoknak a neveit is, vessz�vel elv�lasztva - az al�bbi Egy�b T�bl�k kiment�se mez�be. Ha t�mogatja a szerver, akkor haszn�lhatsz GZIP t�m�r�t�st is, hogy kisebb legyen a let�ltend� file m�rete.';

$lang['Backup_options'] = 'Kiment�si be�ll�t�sok';
$lang['Start_backup'] = 'Kiment�s ind�t�sa';
$lang['Full_backup'] = 'Teljes kiment�s';
$lang['Structure_backup'] = 'Csak a t�bl�zat el�p�t�s�nek kiment�se';
$lang['Data_backup'] = 'Csak az adatok kiment�se';
$lang['Additional_tables'] = 'Egy�b t�bl�k';
$lang['Gzip_compress'] = 'Gzip t�m�r�t�s';
$lang['Select_file'] = 'File kiv�laszt�sa';
$lang['Start_Restore'] = 'Vissza�ll�t�s ind�t�sa';

$lang['Restore_success'] = 'Az adatb�zis sikeresen helyre lett �ll�tva.<br /><br />A F�rum visszaker�lt a kiment�s el�tti �llapotba.';
$lang['Backup_download'] = 'A let�lt�s hamarosan elindul, v�rj a megkezd�s�ig.';
$lang['Backups_not_supported'] = 'Az adatb�zis kiment�se nem lehets�ges, mivel ez nincsen t�mogatva ebben az adatb�zis rendszerben.';

$lang['Restore_Error_uploading'] = 'Hiba, a kimentett file visszat�lt�se k�zben';
$lang['Restore_Error_filename'] = 'Hib�s filen�v, v�lassz egy m�sik filet';
$lang['Restore_Error_decompress'] = 'A GZIP kit�m�r�t�s nem lehets�ges, adj meg egy sima sz�veges filet';
$lang['Restore_Error_no_file'] = 'Nem lett file felt�ltve';
//
// Auth pages
//
$lang['Select_a_User'] = 'V�lassz egy felhaszn�l�t';
$lang['Select_a_Group'] = 'V�lassz egy Csoportot';
$lang['Select_a_Forum'] = 'V�lassz egy f�rumot';
$lang['Auth_Control_User'] = 'Felhaszn�l�i enged�lyek be�ll�t�sa';
$lang['Auth_Control_Group'] = 'Csoportenged�lyek be�ll�t�sa';
$lang['Auth_Control_Forum'] = 'F�rumhoz tartoz� jogosults�gok be�ll�t�sa';
$lang['Look_up_User'] = 'Felhaszn�l� keres�se';
$lang['Look_up_Group'] = 'Csoport keres�se';
$lang['Look_up_Forum'] = 'F�rum keres�se';

$lang['Group_auth_explain'] = 'Itt �ll�thatsz be jogosults�gokat �s Moder�tor jogokat az egyes csoportokhoz. Ne felejtsd el, hogy a csoport jogosults�g megv�ltoztat�s�val egyes felhaszn�l�k m�g hozz�f�rhetnek a csoporthoz. Ebben az esetben egy figyelmezet� �zenetet fogsz kapni.';
$lang['User_auth_explain'] = 'Itt �ll�thatsz be jogosults�gokat �s Moder�tor jogokat az egyes felhaszn�l�khoz. Ne felejtsd el, hogy a felhaszn�l�i jogosults�g megv�ltoztat�s�val egyes felhaszn�l�k m�g hozz�f�rhetnek egyes f�rumokhoz, stb. Ebben az esetben egy figyelmezet� �zenetet fogsz kapni.';
$lang['Forum_auth_explain'] = 'Itt �ll�thatod be a hozz�f�r�si jogosults�gokat az egyes f�rumokhoz, az Egyszer� vagy B�v�tett lehet�s�get haszn�lva. Ne feledd, hogy a jogosults�gok megv�ltoztat�s�val a felhaszn�l�k �jabb opci�kat, �s v�ltoztat�si lehet�s�get �rhetnek el.';

$lang['Simple_mode'] = 'Egyszer� m�d';
$lang['Advanced_mode'] = 'B�v�tett m�d';
$lang['Moderator_status'] = 'Moder�tor st�tusz';

$lang['Allowed_Access'] = 'Hozz�f�r�s enged�lyezve';
$lang['Disallowed_Access'] = 'hozz�f�r�s megtagadva';
$lang['Is_Moderator'] = 'Moder�tor';
$lang['Not_Moderator'] = 'Nem Moder�tor';

$lang['Conflict_warning'] = 'Jogosults�g-�tk�z�s';
$lang['Conflict_access_userauth'] = 'Ennek a felhaszn�l�nak m�r van f�rum jogosults�ga, a Csoporttags�gon kereszt�l. Ha ezt meg akarod sz�ntetni vagy meg akarod v�ltoztatni, akkor a felhaszn�l� Egy�ni jogosults�gaiban v�ltoztasd meg. A felhaszn�l�nak az al�bbi jogosults�gai vannak:';
$lang['Conflict_mod_userauth'] = 'Ennek a felhaszn�l�nak m�r van Moder�tori joga ehhez a f�rumhoz a Csoporttags�gon kereszt�l. Ha ezt meg akarod sz�ntetni, akkor a felhaszn�l� Egy�ni jogosults�gaiban v�ltoztasd meg. A felhaszn�l�nak az al�bbi jogosults�gai vannak:';

$lang['Conflict_access_groupauth'] = 'Az egy�ni jogosults�gok be�ll�t�s�ban ennek a felhaszn�l�nak m�r van jogosults�ga ehhez a f�rumhoz. Ha ezt meg akarod v�ltoztatni, akkor a felhaszn�l� Egy�ni jogosults�gaiban tedd meg. A felhaszn�l�nak az al�bbi jogosults�gai vannak:';
$lang['Conflict_mod_groupauth'] = 'Az egy�ni jogosults�gok be�ll�t�s�ban ennek a felhaszn�l�nak m�r van moder�tori joga ehhez a f�rumhoz. Ha ezt meg akarod sz�ntetni, akkor a felhaszn�l� Egy�ni jogosults�gaiban v�ltoztasd meg. A felhaszn�l�nak az al�bbi jogosults�gai vannak:';

$lang['Public'] = 'Nyilv�nos';
$lang['Private'] = 'Priv�t';
$lang['Registered'] = 'Regisztr�lt';
$lang['Administrators'] = 'Adminisztr�tor';
$lang['Hidden'] = 'Rejtett';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'MINDENKI';
$lang['Forum_REG'] = 'REGISZTR�LTAK';
$lang['Forum_PRIVATE'] = 'PRIV�T';
$lang['Forum_MOD'] = 'MODER�TOROK';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Megtekint�s';
$lang['Read'] = 'Olvas�s';
$lang['Post'] = 'Hozz�sz�l�s';
$lang['Reply'] = 'V�laszk�ld�s';
$lang['Edit'] = 'Szerkeszt�s';
$lang['Delete'] = 'T�rl�s';
$lang['Sticky'] = 'Kiemelt';
$lang['Announce'] = 'K�zlem�ny';
$lang['Vote'] = 'Szavaz�s';
$lang['Pollcreate'] = 'Szavaz�s k�sz�t�se';

$lang['Permissions'] = 'Jogosults�gok';
$lang['Simple_Permission'] = 'Egyszer� jogosults�g';

$lang['User_Level'] = 'Felhaszn�l�szint';
$lang['Auth_User'] = 'Felhaszn�l�';
$lang['Auth_Admin'] = 'Adminisztr�tor';
$lang['Group_memberships'] = 'Csoporttags�gok';
$lang['Usergroup_members'] = 'A k�vetkez� felhaszn�l�k tartoznak ebbe a csoportba:';

$lang['Forum_auth_updated'] = 'F�rum enged�lyek friss�tve';
$lang['User_auth_updated'] = 'Felhaszn�l�i enged�lyek friss�tve';
$lang['Group_auth_updated'] = 'Csoport-jogosults�gok friss�tve';

$lang['Auth_updated'] = 'A Jogosults�gok sikeresen megv�ltoztak!';
$lang['Click_return_userauth'] = 'Kattints %side%s, hogy visszat�rj a Felhaszn�l�i Jogosults�g be�ll�t�saihoz';
$lang['Click_return_groupauth'] = 'Kattints %side%s hogy visszat�rj a Csoport Jogosults�g be�ll�t�saihoz';
$lang['Click_return_forumauth'] = 'Kattints %side%s hogy visszat�rj a F�rum Jogosults�g be�ll�t�saihoz';
//
// Banning
//
$lang['Ban_control'] = 'Kitilt�s';
$lang['Ban_explain'] = 'Itt tudsz letiltani egy vagy t�bb felhaszn�l�t, �gy azok nem tudj�k bet�lteni a F�rum kezd�oldal�t. Ezt vagy felhaszn�l�n�v, vagy IP-c�m (vagy IP-tartom�ny), vagy hostn�v megad�s�val �rheted el. Az emailc�met is letilthatod, hogy az ne regisztr�lja mag�t egy �j n�ven. Figyelem, egy email-c�m letilt�s�val m�g nem biztos, hogy a felhaszn�l� ki lett tiltva a F�rumr�l; ehhez a felhaszn�l�n�v �s az IP egyidej� letilt�s�t haszn�ld.';
$lang['Ban_explain_warn'] = 'Figyelem, az IP-tartom�ny megad�s�val a kezd�, �s az utols� IP k�z�tt az �sszes c�m le lesz tiltva. Lehet�s�g szerint min�l kisebb tartom�nyt adj meg, hogy ne legyen t�l nagy az adatb�zis m�rete, illetve ha t�l nagy tartom�nyt adsz meg, el�fordulhat, hogy v�tlen felhaszn�l�k sem fogj�k tudni haszn�lni a f�rumot. Ha musz�j tartom�nyt megadni, akkor lehet�leg min�l kisebbet adj meg, de jobb, ha csak az IP-c�met hat�rozod meg.';

$lang['Select_username'] = 'Felhaszn�l�n�v kiv�laszt�sa';
$lang['Select_ip'] = 'IP-c�m kiv�laszt�sa';
$lang['Select_email'] = 'Emailc�m kiv�laszt�sa';

$lang['Ban_username'] = 'Egy vagy t�bb felhaszn�l� kitilt�sa';
$lang['Ban_username_explain'] = 'A haszn�lt oper�ci�s rendszert�l �s b�ng�sz�t�l f�gg�en egyszerre t�bb felhaszn�l�t is ki lehet tiltani (kijel�l�ssel; a CTRL �s a SHIFT gombok haszn�lat�val).';

$lang['Ban_IP'] = 'Egy vagy t�bb IP-c�m, vagy hostn�v letilt�sa';
$lang['IP_hostname'] = 'IP-c�mek vagy hostnevek';
$lang['Ban_IP_explain'] = 'T�bb IP-c�m, vagy hostn�v megad�s�hoz vessz�vel v�laszd �ket. IP-tartom�ny megad�s�hoz az els� �s az utols� sz�m el� tegy�l egy k�t�jelet. Jokerkaraktert \(*\) is haszn�lhatsz.';

$lang['Ban_email'] = 'Egy vagy t�bb emailc�m kitilt�sa';
$lang['Ban_email_explain'] = 'T�bb emailc�m kitilt�s�hoz vessz�vel v�laszd el a c�meket. Jokerkaraktert \(*\) is haszn�lhatsz, pld. *@hotmail.com';

$lang['Unban_username'] = 'Egy vagy t�bb felhaszn�l� �jraenged�lyez�se';
$lang['Unban_username_explain'] = 'A haszn�lt oper�ci�s rendszert�l �s b�ng�sz�t�l f�gg�en egyszerre t�bb felhaszn�l�t is lehet �jraenged�lyezni (kijel�l�ssel; a CTRL �s a SHIFT gombok haszn�lat�val).';

$lang['Unban_IP'] = 'Egy vagy t�bb IP-c�m �jraenged�lyez�se';
$lang['Unban_IP_explain'] = 'A haszn�lt oper�ci�s rendszert�l �s b�ng�sz�t�l f�gg�en egyszerre t�bb IP-c�met is lehet �jraenged�lyezni (kijel�l�ssel; a CTRL �s a SHIFT gombok haszn�lat�val).';

$lang['Unban_email'] = 'Egy vagy t�bb emailc�m enged�lyez�se';
$lang['Unban_email_explain'] = 'A haszn�lt oper�ci�s rendszert�l �s b�ng�sz�t�l f�gg�en egyszerre t�bb emailc�met is lehet �jraenged�lyezni (kijel�l�ssel; a CTRL �s a SHIFT gombok haszn�lat�val).';

$lang['No_banned_users'] = 'Nincsen letiltott felhaszn�l�n�v';
$lang['No_banned_ip'] = 'Nincsen kitiltott IP-c�m';
$lang['No_banned_email'] = 'Nincsen kitiltott emailc�m';

$lang['Ban_update_sucessful'] = 'A Kitilt�s list�ja sikeresen megv�ltozott!';
$lang['Click_return_banadmin'] = 'Kattints %side%s, hogy visszat�rj a Kitilt�s be�ll�t�saihoz';
//
// Configuration
//
$lang['General_Config'] = '�ltal�nos be�ll�t�sok';
$lang['Config_explain'] = 'A F�rum alapvet� be�ll�t�sait adhatod meg itt. A Felhaszn�l�k �s az egyes f�rumok be�ll�t�sait a bal oldali men�ben �rheted el.';

$lang['Click_return_config'] = 'Kattints %side%s, hogy visszat�rj az �ltal�nos Be�ll�t�sokhoz';

$lang['General_settings'] = '�ltal�nos be�ll�t�sok';
$lang['Server_name'] = 'Domain n�v';
$lang['Server_name_explain'] = 'A domainn�v, melyen a F�rum fut';
$lang['Script_path'] = 'Script el�r�si �tvonal';
$lang['Script_path_explain'] = 'A phpBB relat�v el�r�si �tvonala, a domainn�vhez k�pest';
$lang['Server_port'] = 'Szerverport';
$lang['Server_port_explain'] = 'A haszn�lt port, �ltal�ban a 80-as.';
$lang['Site_name'] = 'Oldal neve';
$lang['Site_desc'] = 'Oldal le�r�sa';
$lang['Board_disable'] = 'F�rum kikapcsol�sa';
$lang['Board_disable_explain'] = 'A bekapcsol�s�val a felhaszn�l�k nem �rhetik el a f�rumot. Az Adminsztr�torok ett�l f�ggetlen�l bel�phetnek az Adminisztr�ci�s Panelbe.';
/*****[BEGIN]******************************************
 [ Mod:     Disable Board Message              v1.0.0 ]
 ******************************************************/
$lang['Board_disable_msg'] = 'Disable board message';
$lang['Board_disable_msg_explain'] = 'This text will be showed if "Disable board" is on "Yes".';
/*****[END]********************************************
 [ Mod:     Disable Board Message              v1.0.0 ]
 ******************************************************/
$lang['Acct_activation'] = 'Azonos�t� aktiv�l�sa';
$lang['Acc_None'] = 'Nincs'; // These three entries are the type of activation
$lang['Acc_User'] = 'Felhaszn�l�i';
$lang['Acc_Admin'] = 'Adminisztr�tori';

$lang['Abilities_settings'] = 'Felhaszn�l� �s F�rum be�ll�t�sok';
$lang['Max_poll_options'] = 'Maximum v�laszt�si lehet�s�gek sz�ma a szavaz�sban';

$lang['Flood_Interval'] = 'Flood id�k�z';
$lang['Flood_Interval_explain'] = 'Ennyi m�sodpercet kell v�rni a k�vetkez� hozz�sz�l�s elk�ld�s�ig';
$lang['Board_email_form'] = 'Felhaszn�l�i levelez�s enged�lyez�se az oldalon kereszt�l';
$lang['Board_email_form_explain'] = 'A felhaszn�l�k email-�zeneteket k�ldhetnek egym�snak az oldalon kereszt�l';
$lang['Topics_per_page'] = 'T�ma oldalak�nt';
$lang['Posts_per_page'] = 'Hozz�sz�l�sok oldalank�nt';
$lang['Hot_threshold'] = 'N�pszer� hozz�sz�l�sok';
$lang['Default_style'] = 'Alap st�lus';
$lang['Override_style'] = 'Felhaszn�l� st�lus�nak fel�l�r�sa';
$lang['Override_style_explain'] = 'Mindenki csak az alap st�lust haszn�lhatja';
$lang['Default_language'] = 'Alapbe�ll�t�s� nyelv';
$lang['Date_format'] = 'D�tum form�tum';
$lang['System_timezone'] = 'Rendszer id�z�na';
$lang['Enable_gzip'] = 'GZIP t�m�r�t�s bekapcsol�sa';
$lang['Enable_prune'] = 'F�rum karbantart�s bekapcsol�sa';
$lang['Allow_HTML'] = 'HTML enged�lyez�se';
$lang['Allow_BBCode'] = 'BBCode enged�lyez�se';
$lang['Allowed_tags'] = 'Enged�lyezett HTML tagek';
$lang['Allowed_tags_explain'] = 'A tageket vessz�vel kell elv�lasztani';
$lang['Allow_smilies'] = 'Emotikonok enged�lyez�se';
$lang['Smilies_path'] = 'Emotikonok el�r�si �tvonala';
$lang['Smilies_path_explain'] = 'A phpBB-n bel�li el�r�si �t, �ltal�ban: images/smiles';
$lang['Allow_sig'] = 'Al��r�s enged�lyez�se';
$lang['Max_sig_length'] = 'Al��r�s maxim�lis hossza';
$lang['Max_sig_length_explain'] = 'Karakterek maxim�lis sz�ma az al��r�sban';
$lang['Allow_name_change'] = 'Felhaszn�l�n�v cser�j�nek enged�lyez�se';

$lang['Avatar_settings'] = 'Avatar be�ll�t�sok';
$lang['Allow_local'] = 'Avatar gal�ria bekapcsol�sa';
$lang['Allow_remote'] = 'T�voli Avatar enged�lyez�se';
$lang['Allow_remote_explain'] = 'M�s weboldalr�l belinkelt Avatarok';
$lang['Allow_upload'] = 'Avatar felt�lt�s enged�lyez�se';
$lang['Max_filesize'] = 'Maximum Avatar k�pm�ret';
$lang['Max_filesize_explain'] = 'A felt�lt�tt k�pekhez, KByte-ben megadva';
$lang['Max_avatar_size'] = 'Maximum Avatar felbont�s';
$lang['Max_avatar_size_explain'] = '(Sz�less�g x Magass�g pixelben)';
$lang['Avatar_storage_path'] = 'Avatar t�rol�s�nak helye';
$lang['Avatar_storage_path_explain'] = 'A phpBB-n bel�li el�r�si �t, �ltal�ban: images/avatars';
$lang['Avatar_gallery_path'] = 'Avatar gal�ria helye';
$lang['Avatar_gallery_path_explain'] = 'A phpBB-n bel�li el�r�si �t, �ltal�ban: images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA be�ll�t�sok';
$lang['COPPA_fax'] = 'COPPA fax-sz�m';
$lang['COPPA_mail'] = 'COPPA levelez�si c�m';
$lang['COPPA_mail_explain'] = 'Az a lev�lc�m, ahova a sz�l�knek a COPPA regisztr�ci�s k�relmeket kell k�ldeni�k';

$lang['Email_settings'] = 'Email be�ll�t�sok';
$lang['Admin_email'] = 'Az Adminisztr�tor emailc�me';
$lang['Email_sig'] = 'Email al��r�s';
$lang['Email_sig_explain'] = 'Ez a sz�veg lesz, mely a F�rum �ltal a kik�ld�tt levelek v�g�hez lesz csatolva';
$lang['Use_SMTP'] = 'SMTP szerver haszn�lata emailk�ld�shez';
$lang['Use_SMTP_explain'] = 'Kapcsold be, ha egy k�ls� email-szervert akarsz haszn�lni';
$lang['SMTP_server'] = 'SMTP szerver c�me';
$lang['SMTP_username'] = 'SMTP felhaszn�l�n�v';
$lang['SMTP_username_explain'] = 'Csak akkor t�ltsd ki, ha sz�ks�ges';
$lang['SMTP_password'] = 'SMTP jelsz�';
$lang['SMTP_password_explain'] = 'Csak akkor t�ltsd ki, ha sz�ks�ges';

$lang['Disable_privmsg'] = 'Priv�t �zenetk�ld�s';
$lang['Inbox_limits'] = '�zenetek maxim�lis sz�ma az �rkezett fi�kban';
$lang['Sentbox_limits'] = '�zenetek maxim�lis sz�ma az Elk�ld�tt fi�kban';
$lang['Savebox_limits'] = '�zenetek maxim�lis sz�ma az Ment�s fi�kban';

$lang['Cookie_settings'] = 'Cookie be�ll�t�sa';
$lang['Cookie_settings_explain'] = 'Itt �ll�thatod be a felhaszn�l�k b�ng�sz�inek kik�ld�tt cookie-kat. A legt�bb esetben elegend�ek az alapbe�ll�t�sok, �gy csak �vatosan v�ltoztass rajtuk, mert el�fordulhat, hogy a felhaszn�l�k nem fognak tudni bel�pni';
$lang['Cookie_domain'] = 'Cookie domain';
$lang['Cookie_name'] = 'Cookie neve';
$lang['Cookie_path'] = 'Cookie el�r�si �t';
$lang['Cookie_secure'] = 'Cookie biztons�g';
$lang['Cookie_secure_explain'] = 'Ha a szerver SSL titkos�t�ssal fut, akkor kapcsold be ezt az opci�t; k�l�nben hagyd kikapcsolva';
$lang['Session_length'] = 'Session hossz [ m�sodperc ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Regisztr�ci� vizu�lis meger�s�t�se';
$lang['Visual_confirm_explain'] = 'A regisztr�ci� alatt a felhaszn�l�nak be kell �rnia egy automatikusan gener�lt k�dot, amivel j�v�hagyja a regisztr�ci�t.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Lehetov� tesz automatikus bel�p�st';
$lang['Allow_autologin_explain'] = 'Meghat�roz vajon felhaszn�l�kat lehet�v� tesznek kiv�lasztani automatikusan amikor l�togat� a f�rumba l�p.';
$lang['Autologin_time'] = 'Automata bel�p�s lej�rata';
$lang['Autologin_time_explain'] = 'Hogy hossz� egy autologin kulcs van-e �rv�nyes �t napokban ha a felhaszn�l� nem l�togatja a fed�lzetet. Be�ll�tott null�nak tilt�snak lej�rat.';
$lang['Stylesheet_explain'] = 'Filen�v CSS st�luslap haszn�latnak eznek t�ma.';
//
// Forum Management
//
$lang['Forum_admin'] = 'F�rum adminisztr�ci�';
$lang['Forum_admin_explain'] = 'Innen tudsz �j f�rumot nyitni, t�r�lni, szerkeszteni, �trendezni, kategoriz�lni �s �jraszinkroniz�lni';
$lang['Edit_forum'] = 'F�rum szerkeszt�se';
$lang['Create_forum'] = '�j f�rum';
$lang['Create_category'] = '�j kateg�ria';
$lang['Remove'] = 'Elt�vol�t';
$lang['Action'] = 'Utas�t�s';
$lang['Update_order'] = 'Friss�t�si sorrend';
$lang['Config_updated'] = 'A F�rum be�ll�t�sai sikeresen friss�ltek!';
$lang['Edit'] = 'Szerkeszt';
$lang['Delete'] = 'T�r�l';
$lang['Move_up'] = 'Feljebb';
$lang['Move_down'] = 'Lejjebb';
$lang['Resync'] = 'Szinkroniz�l';
$lang['No_mode'] = 'Nem lett m�d kiv�lasztva';
$lang['Forum_edit_delete_explain'] = 'Az al�bbi oldallal be�ll�thatod a f�rum legfontosabb tulajdons�gait. A F�rum �s a Felhaszn�l�k be�ll�t�s�hoz haszn�ld a baloldali men�t.';

$lang['Move_contents'] = '�sszes tartalom �tmozgat�sa';
$lang['Forum_delete'] = 'F�rum t�rl�se';
$lang['Forum_delete_explain'] = 'Az al�bbi oldallal t�r�lhetsz egy f�rumot, (vagy kateg�ri�t), megadva, hogy a tartalmazott f�rumok (vagy t�m�k) hova ker�ljenek �t.';

$lang['Status_locked'] = 'Z�rt';
$lang['Status_unlocked'] = 'Nyitott';
$lang['Forum_settings'] = '�ltal�nos F�rum be�ll�t�sok';
$lang['Forum_name'] = 'F�rum neve';
$lang['Forum_desc'] = 'Le�r�s';
$lang['Forum_status'] = 'F�rum st�tusz';
$lang['Forum_icon'] = 'Forum icon'; // Forum Icon MOD
$lang['Forum_icon_explain'] = 'e.g. Ha a k�ped van-e <b>http://yoursite/modules/Forums/images/topics/test.gif</b><br /> akkor szil�rd ez mint <b>images/topics/test.gif</b>'; // Forum Icon MOD

$lang['Forum_pruning'] = 'Automatikus karbantart�s';

$lang['prune_freq'] = 'T�ma kor�nak ellen�rz�se';
$lang['prune_days'] = 'T�m�k keres�se, melyekbe nem �rkezett hozz�sz�l�s';
$lang['Set_prune_data'] = 'Az automatikus karbantart�s be van kapcsolva, de ehhez a f�rumhoz nincsen megadva a karbantart�s gyakoris�ga. L�pj vissza, �s �ll�tsd be.';

$lang['Move_and_Delete'] = '�tmozgat�s �s T�rl�s';

$lang['Delete_all_posts'] = '�sszes hozz�sz�l�s t�rl�se';
$lang['Nowhere_to_move'] = 'Sehova sem lehet �thelyezni';

$lang['Edit_Category'] = 'Kateg�ria szerkeszt�se';
$lang['Edit_Category_explain'] = 'Ezzel a kateg�ria nev�t v�ltoztathatod meg.';

$lang['Forums_updated'] = 'A F�rum �s Kateg�ria be�ll�t�sai sikeresen friss�ltek!';

$lang['Must_delete_forums'] = 'El�bb az �sszes f�rumot t�r�ln�d kell, hogy t�r�lhesd ezt a kateg�ri�t.';

$lang['Click_return_forumadmin'] = 'Kattints %side%s, hogy visszat�rj a F�rum be�ll�t�saihoz.';
//
// Smiley Management
//
$lang['smiley_title'] = 'Emotikon szerkeszt�';
$lang['smile_desc'] = 'Ezen az oldalon kezelheted az Emotikonokat, melyeket a felhaszn�l�k a hozz�sz�l�sn�l, �s a priv�t �zenetekben haszn�lhatnak; hozz�ad�s, t�rl�s, szerkeszt�s.';

$lang['smiley_config'] = 'Emotikonok be�ll�t�sa';
$lang['smiley_code'] = 'Emotikon k�d';
$lang['smiley_url'] = 'Emotikon k�pfile';
$lang['smiley_emot'] = 'Smiley Emotikon';
$lang['smile_add'] = '�j emotikon hozz�ad�sa';
$lang['Smile'] = 'Smiley';
$lang['Emotion'] = 'Emotikon';

$lang['Select_pak'] = 'Emotikon csomag-file (.pak) kiv�laszt�sa';
$lang['replace_existing'] = 'Jelenlegi Emotikonok fel�l�r�sa';
$lang['keep_existing'] = 'Jelenlegi Emotikonok megtart�sa';
$lang['smiley_import_inst'] = 'T�ltsd fel a megfelel� k�nyvt�rba az Emotikonokat. Ut�na a megfelel� adatok megad�s�val import�lhat� az Emotikon csomag.';
$lang['smiley_import'] = 'Emotikonok import�l�sa';
$lang['choose_smile_pak'] = 'Emotikon csomag kiv�laszt�sa (.pak file)';
$lang['import'] = 'Emotikonok import�l�sa';
$lang['smile_conflicts'] = 'Mi a teend� probl�ma eset�n?';
$lang['del_existing_smileys'] = 'Jelenleg telep�tett emotikonok t�rl�se import�l�s el�tt';
$lang['import_smile_pack'] = 'Emotikon csomag import�l�sa';
$lang['export_smile_pack'] = 'Emotikon csomag export�l�sa';
$lang['export_smiles'] = 'Az Emotikon csomag export�l�s�hoz kattints %sIDE%s, hogy let�ltsd a smiles.pak filet. Ha �t akarod nevezni, akkor figyelj arra, hogy a .pak kiterjeszt�s megmaradjon. Ut�na a .pak filet �s az emotikon k�peket t�m�r�tsd be egy fileba.';

$lang['smiley_add_success'] = 'Az emotikon sikeresen beker�lt a list�ba!';
$lang['smiley_edit_success'] = 'Az emotikon be�ll�t�sai sikeresen megv�ltoztak!';
$lang['smiley_import_success'] = 'Az emotikon-csomag import�l�sa sikeres volt!';
$lang['smiley_del_success'] = 'Az emotikon elt�vol�t�sa sikeres volt!';
$lang['Click_return_smileadmin'] = 'Kattints %side%s, hogy visszat�rj az Emotikonok be�ll�t�saihoz';
//
// User Management
//
$lang['User_admin'] = 'Felhaszn�l�i be�ll�t�sok';
$lang['User_admin_explain'] = 'Ezen az oldalon megadhatod, megv�ltoztathatod a felhaszn�l�k adatait, �s n�h�ny �ltal�nos tulajdons�got �ll�thatsz be. A jogosults�gok kioszt�s�hoz haszn�ld az Egy�ni- �s Csoportjogosults�g-kezel� rendszert.';

$lang['Look_up_user'] = 'Felhaszn�l� keres�se';

$lang['Admin_user_fail'] = 'A felhaszn�l� profilj�nak friss�t�se sikertelen.';
$lang['Admin_user_updated'] = 'A felhaszn�l� profilja sikeresen m�dosult!';
$lang['Click_return_useradmin'] = 'Kattints %side%s, hogy visszat�rj a Felhaszn�l� be�ll�t�sokhoz';

$lang['User_delete'] = 'Felhaszn�l� t�rl�se';
$lang['User_delete_explain'] = 'Kattints ide, ha t�nyleg t�r�lni akarod a felhaszn�l�t; a t�rl�s ut�n nem lehet visszahozni!';
$lang['User_deleted'] = 'A felhaszn�l� sikeresen t�r�lve lett.';

$lang['User_status'] = 'Akt�v felhaszn�l�';
$lang['User_allowpm'] = 'K�ldhet Mag�n�zenetet';
$lang['User_allowavatar'] = 'Be�ll�that Avatart';

$lang['Admin_avatar_explain'] = 'Itt n�zheted meg, �s t�r�lheted a felhaszn�l� Avatarj�t.';

$lang['User_special'] = 'Egy�b be�l�lt�sok';
$lang['User_special_explain'] = 'A felhaszn�l�k nem m�dos�thatj�k ezeket a be�l�lt�sokat. Itt adhatod meg a felhaszn�l� st�tusz�t, �s egy�b be�ll�t�sait.';
//
// Group Management
//
$lang['Group_administration'] = 'Csoportok be�ll�t�sa';
$lang['Group_admin_explain'] = 'Ezzel az oldallal kezelni tudod a Csoportokat, t�r�lheted, m�dos�thatod �ket, �s �jakat k�sz�thetsz. V�laszhatsz Moder�tort a csoporthoz, megadhatod, hogy ny�lt vagy z�rt csoport legyen-e, megadhatod a csoport nev�t �s le�r�s�t.';
$lang['Error_updating_groups'] = 'A friss�t�s k�zben hiba t�rt�nt.';
$lang['Updated_group'] = 'A Csoport sikeresen friss�lt!';
$lang['Added_new_group'] = 'A Csoport sikeresen elk�sz�lt!';
$lang['Deleted_group'] = 'A Csoport sikeresen t�r�lve lett!';
$lang['New_group'] = '�j csoport';
$lang['Edit_group'] = 'Csoport szerkeszt�se';
$lang['group_name'] = 'Csoport neve';
$lang['group_description'] = 'Csoport le�r�sa';
$lang['group_moderator'] = 'Csoport moder�tor';
$lang['group_status'] = 'Csoport st�tusz';
$lang['group_open'] = 'Nyitott csoport';
$lang['group_closed'] = 'Z�rt csoport';
$lang['group_hidden'] = 'Rejtett csoport';
$lang['group_delete'] = 'Csoport t�rl�se';
$lang['group_delete_check'] = 'Csoport t�rl�se';
$lang['submit_group_changes'] = 'V�ltoz�sok elk�ld�se';
$lang['reset_group_changes'] = 'V�ltoz�sok t�rl�se';
$lang['No_group_name'] = 'Meg kell adnod egy csoportnevet';
$lang['No_group_moderator'] = 'Meg kell adnond a csoportnak egy Moder�tort';
$lang['No_group_mode'] = 'Meg kell hat�roznod, hogy nyitott vagy z�rt csoport legyen-e';
$lang['No_group_action'] = 'Nem hat�rozt�l meg utas�t�st';
$lang['delete_group_moderator'] = 'R�gi moder�tor t�rl�se?';
$lang['delete_moderator_explain'] = 'Ha meg akarod v�ltoztatni a csoport Moder�tor�t, �s t�r�lni akarod a r�git, akkor jel�ld be ezt a n�gyzetet. Ha nem jel�l�d be, akkor a felhaszn�l� sima tag lesz a csoportban.';
$lang['Click_return_groupsadmin'] = 'Kattints %side%s, hogy visszat�rj a Csoportok be�ll�t�saihoz.';
$lang['Select_group'] = 'Csoport kiv�laszt�sa';
$lang['Look_up_group'] = 'Csoport keres�se';
//
// Prune Administration
//
$lang['Forum_Prune'] = 'F�rum karbantart�s';
$lang['Forum_Prune_explain'] = 'A F�rum karbantart�s minden olyan t�m�t automatikusan t�r�l, ahova a megadott id�n bel�l nem �rkezik hozz�sz�l�s. Ha nem adsz meg id�t. akkor az �sszes t�ma t�rl�dik. Ezzel nem lehet t�r�lni azokat a t�m�kat, ahol akt�v szavaz�s van �rv�nyben, vagy azokat, melyek a kiemelt K�zlem�nyek kateg�ri�ba tartoznak. Ezeket k�zzel kell t�r�ln�d.';
$lang['Do_Prune'] = 'Karbantart�s ind�t�sa';
$lang['All_Forums'] = '�sszes f�rum';
$lang['Prune_topics_not_posted'] = 'T�m�k karbantart�sa, ahova ennyi ideig nem �rkezett �j hozz�sz�l�s.';
$lang['Topics_pruned'] = 'A t�m�k karbantart�sa befejez�dtt.';
$lang['Posts_pruned'] = 'A hozz�sz�l�sok karbantart�sa befejez�dtt.';
$lang['Prune_success'] = 'A F�rumok karbantart�sa sikeres volt!';
//
// Word censor
//
$lang['Words_title'] = 'Cenz�ra';
$lang['Words_explain'] = 'Ezzel az oldallal olyan szavakat adhatsz meg (szerkeszthetsz, vehetsz el), melyeket automatikusan cenz�r�z a f�rum. Ezekkel a szavakkal (vagy ilyen szavakat tartalmaz� szavakkal) nem regisztr�lhatnak �j fehaszn�l�t. A * jokerkarakter haszn�lhat�, pld. az *lap*-ra az alaplap sz� is cenz�r�zva lesz, a lap*-ra a lapsz�m, �s a *lap-ra a f�lap szavak is.';
$lang['Word'] = 'Sz�';
$lang['Edit_word_censor'] = 'Cenz�ra szerkeszt�se';
$lang['Replacement'] = 'Helyette';
$lang['Add_new_word'] = '�j sz� hozz�ad�sa';
$lang['Update_word'] = 'Cenz�ra friss�t�se';

$lang['Must_enter_word'] = 'Meg kell adnod egy sz�t �s a helyettes�t�s�t';
$lang['No_word_selected'] = 'Nem v�lasztott�l ki sz�t';

$lang['Word_updated'] = 'A kiv�laszott cenz�ra sikeresen friss�lt!';
$lang['Word_added'] = 'Cenz�ra sikeresen hozz� lett adva!';
$lang['Word_removed'] = 'A kiv�lasztott cenz�ra sikeresen t�r�lve lett!';

$lang['Click_return_wordadmin'] = 'Kattints %side%s, hogy visszat�rj a Cenz�ra be�ll�t�saihoz';
//
// Mass Email
//
$lang['Mass_email_explain'] = 'A Csoportos lev�l opci�val egy emailt k�ldhetsz minden felhaszn�l�nak, vagy egy adott csoport �sszes felhaszn�l�j�nak. Az email az adminisztr�tori c�mre post�z�dik, �s egy titkos m�solatot kap az �sszes felhaszn�l�. Ha sok emberr�l van sz�, akkor a lev�lk�ld�s eltarthat egy darabig, ne szak�tsd meg k�zben. Amennyiben elk�sz�lt, akkor az oldal �rtes�t err�l.';
$lang['Compose'] = 'Lev�l�r�s';

$lang['Recipients'] = 'C�mzett';
$lang['All_users'] = '�sszes felhaszn�l�';

$lang['Email_successfull'] = '�zenet elk�ldve';
$lang['Click_return_massemail'] = 'Kattints %side%s, hogy visszat�rj a Csoportos E-mail be�ll�t�saihoz';
//
// Ranks admin
//
$lang['Ranks_title'] = 'Rang be�ll�t�sa';
$lang['Ranks_explain'] = 'Itt �ll�thatod be a rangokat; hozz�ad�s, szerkeszt�s, megtekint�s �s t�rl�s. Ezenk�v�l saj�t rangsort is k�sz�thetsz, melyeket a Felhaszn�l�k be�ll�t�s�n�l hozz�rendelhetsz egyes felhaszn�l�khoz.';

$lang['Add_new_rank'] = '�j rang hozz�ad�sa';

$lang['Rank_title'] = 'Rang neve';
$lang['Rank_special'] = 'Speci�lis rang';
$lang['Rank_minimum'] = 'Minimum hozz�sz�l�sok sz�ma';
$lang['Rank_maximum'] = 'Maximum hozz�sz�l�sok sz�ma';
$lang['Rank_image'] = 'Rang k�p�nek el�r�si �tvonala (relat�v el�r�si �t, a phpBB gy�k�rk�nyvt�r�t�l)';
$lang['Rank_image_explain'] = 'A rangot reprezent�l� k�p';

$lang['Must_select_rank'] = 'Ki kell v�lasztanod egy rangot';
$lang['No_assigned_rank'] = 'Nem lett speci�lis rang kiv�lasztva';

$lang['Rank_updated'] = 'A Rang sikeresen megv�ltozott!';
$lang['Rank_added'] = 'A Rang sikeresen hozz� lett adva!';
$lang['Rank_removed'] = 'A Rang sikeresen t�r�lve lett!';
$lang['No_update_ranks'] = 'A Rang sikeresen t�r�lve lett, b�r a felhaszn�l�i azonos�t�k nem friss�ltek. Ezt k�zzel kell megtenned ezeken az azonos�t�kon';

$lang['Click_return_rankadmin'] = 'Kattints %side%s hogy vissza�rj a Rang be�ll�t�saihoz';
// FLAGHACK-start
//
// Flags admin
//
$lang['Flags_title'] = 'Z�szl� Adminisztr�ci�';
$lang['Flags_explain'] = 'Haszn�l� ez forma hozz�adn�l, szerkesztenek, n�zet �s t�r�lnek fellobog�z. Lenn�l vonatkozva szint�n teremtenek szok�sos z�szl�kat amelyikek kereszt�l tud egy felhaszn�l�nak a felhaszn�l�n vezet�si k�nny�s�g';

$lang['Add_new_flag'] = 'Hozz�adnak �j z�szl�t';

$lang['Flag_name'] = 'Z�szl� Megnevezel';
$lang['Flag_pic'] = 'K�p';
$lang['Flag_image'] = 'Z�szl� K�p (a  images/flags/ alk�nyvt�rban)';
$lang['Flag_image_explain'] = 'Haszn�lat ez meghat�rozni a z�szl�val kapcsol�dott egy kis k�pet';

$lang['Must_select_flag'] = 'Kiv�lasztan�l egy z�szl�t';
$lang['Flag_updated'] = 'A z�szl�t sikeresen friss�tettek';
$lang['Flag_added'] = 'A z�szl�t sikeresen hozz�adtak';
$lang['Flag_removed'] = 'A z�szl�t sikeresen t�r�ltek';
$lang['No_update_flags'] = 'A z�szl�t sikeresen t�r�ltek. Azonban, ez haszn�l� felhaszn�l�i fi�kokat z�szl� nem friss�tettek. Fogsz kelleni �jra be�ll�tani manu�lisan a z�szl�t ezeken a sz�ml�kon';

$lang['Flag_confirm'] = 'Z�szl� T�rl�s' ;
$lang['Confirm_delete_flag'] = 'Val�ban k�v�nja elt�vol�tani a kiv�lasztott z�szl�t?' ;

$lang['Click_return_flagadmin'] = 'Kattints %sIde%s visszat�r�s Z�szl� Adminisztr�ci�ba';
// FLAGHACK-end

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Nem enged�lyezett felhaszn�l�nevek be�ll�t�sa';
$lang['Disallow_explain'] = 'Itt �ll�thatod be azokat a felhaszn�l�neveket, melyeket nem regisztr�lhanak. Haszn�lhat� a * jokerkarakter. Nem adhatsz meg olyan sz�t, amelyet m�r haszn�l valaki, ehhez el�sz�r ki kell t�r�ln�d a felhaszn�l�t, �s ut�na tilthatod le.';

$lang['Delete_disallow'] = 'T�rl�s';
$lang['Delete_disallow_title'] = 'Tiltott felhaszn�l�n�v t�rl�se';
$lang['Delete_disallow_explain'] = 'Levehetsz a list�r�l egy tiltott felhaszn�l�nevet. Jel�ld ki �s kattints az T�rl�s gombra';

$lang['Add_disallow'] = 'Hozz�ad�s';
$lang['Add_disallow_title'] = 'Tiltott felhaszn�l�n�v hozz�ad�sa';
$lang['Add_disallow_explain'] = 'Haszn�lhatsz * jokerkaraktert';

$lang['No_disallowed'] = 'Nincsenek letiltott felhaszn�l�nevek';

$lang['Disallowed_deleted'] = 'A letiltott felhaszn�l�n�v sikeresen t�r�lve lett';
$lang['Disallow_successful'] = 'A letiltott felhaszn�l�n�v sikeresen hozz� lett adva';
$lang['Disallowed_already'] = 'A be�rt felhaszn�l�nevet nem lehet letiltani; vagy m�r l�tezik a list�ban, vagy l�tezik a cenz�r�zott szavak k�z�tt, esetleg van ilyen nev� felhaszn�l�.';

$lang['Click_return_disallowadmin'] = 'Kattints %side%s, hogy visszat�rj a Nem enged�lyezett Felhaszn�l�nevek be�ll�t�saihoz';

$lang['Install'] = 'Telepit�s';
$lang['Upgrade'] = 'Friss�t�s';

$lang['Install_No_PCRE'] = 'phpBB2 tartalmazza a Perl-kompatibilis Modulokat aPHP sz�m�ra, PHP konfigur�l�sa\be�ll�t�sa!';

$lang['theme'] = 'T�ma';

/*****[BEGIN]******************************************
 [ Mod:    Force Word Wrapping - Configurator v1.0.16 ]
 ******************************************************/
$lang['wrap_title'] = 'Szavak t�rdel�se';
$lang['wrap_enable'] = 'Szavak t�rdel�se';
$lang['wrap_min'] = 'Minimum k�perny� sz�less�g';
$lang['wrap_max'] = 'Maximum k�perny� sz�less�g';
$lang['wrap_def'] = 'Alap k�perny� sz�less�g';
$lang['wrap_units'] = 'Karakter';
/*****[END]********************************************
 [ Mod:    Force Word Wrapping - Configurator v1.0.16 ]
 ******************************************************/

//
// Version Check
//
$lang['Version_up_to_date'] = 'A phpBB-d a legfrissebb, nem �rhet� el �jabb verzi�.';
$lang['Version_not_up_to_date'] = 'A phpBB-d <b>nem</b> a legfrissebb verzi�j�! A friss�t�s el�rhet� a <a href="http://www.phpbb.com/downloads.php" target="_phpBB">phpBB</a>, vagy a <a href="http://download.phpbb.hu" target="_hunphpBB">Magyar phpBB k�z�ss�g</a> oldal�n.';
$lang['Latest_version_info'] = 'A phpBB legfrissebb el�rhet� verzi�ja a <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'Jelenlegi f�rumod verzi�ja: <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Nem siker�lt csatlakozni a phpBB szerverhez, a k�vetkez� hiba l�pett fel:<br />%s';
$lang['Socket_functions_disabled'] = 'A konnektor funkci�k nem enged�lyezettek.';
$lang['Mailing_list_subscribe_reminder'] = 'Hogy mindig azonnal �rtes�lj a phpBB friss�t�seir�l, <a href="http://www.phpbb.com/support/" target="_maillist">Iratkozz fel a h�rlevel�nkre</a>.';
$lang['Version_information'] = 'Verzi� inform�ci�';

/*****[BEGIN]******************************************
 [ Mod:    Advance Admin Index Stats           v1.0.0 ]
 ******************************************************/
$lang['Board_statistic'] = 'Oldal statisztika';
$lang['Database_statistic'] = 'Adatb�zis statisztika';
$lang['Version_info'] = 'Verzi� inform�ci�';
$lang['Thereof_deactivated_users'] = 'Nem akt�v tagok sz�ma';
$lang['Thereof_Moderators'] = 'Munkat�rsak sz�ma';
$lang['Thereof_Administrators'] = 'Adminisztr�torok sz�ma';
$lang['Deactivated_Users'] = 'Aktiv�l�sra v�r�k sz�ma';
$lang['Users_with_Admin_Privileges'] = 'El�joggal rendelkez� tagok';
$lang['Users_with_Mod_Privileges'] = 'El�joggal rendelkez� munkat�rsak';
$lang['DB_size'] = 'Adatb�zis nagys�ga';
$lang['Version_of_board'] = 'Verzi� <a href="http://www.phpbb.com">phpbb</a>';
$lang['Version_of_PHP'] = 'Verzi� <a href="http://www.php.net/">PHP</a>';
$lang['Version_of_MySQL'] = 'Verzi� <a href="http://www.mysql.com/">MySQL</a>';
/*****[END]********************************************
 [ Mod:    Advance Admin Index Stats           v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Super Quick Reply                  v1.3.2 ]
 ******************************************************/
$lang['SQR_settings'] = 'Gyorsv�lasz Be�ll�t�sa';
$lang['Allow_quick_reply'] = 'Gyorsv�lasz enged�lyez�se';
$lang['Anonymous_show_SQR'] = 'Gyorsv�lasz mutat�sa vend�g r�sz�re';
$lang['Anonymous_SQR_mode'] = 'Gyorsv�lasz vend�g m�dja';
$lang['Anonymous_open_SQR'] = 'Gyorsv�lasz megnyit�sa vend�gek sz�m�ra';
/*****[END]********************************************
 [ Mod:     Super Quick Reply                  v1.3.2 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:       Admin Userlist                      v2.0.2 ]
 ******************************************************/
$lang['Userlist'] = 'Felhaszn�l� lista';
$lang['Userlist_description'] = 'Teljes lista a felhszn�l�kr�l, k�l�b�z� v�ltoztat�sok alkalmazhat�k adataikban';

$lang['Add_group'] = 'Felv�tel egy csoportba';
$lang['Add_group_explain'] = 'Melyik csoportba k�v�nod felvenni';

$lang['Open_close'] = 'Nyit/Z�r';
$lang['Active'] = 'Akt�v';
$lang['Group'] = 'Csoport(ok)';
$lang['Rank'] = 'Rang';
$lang['Last_activity'] = 'Utols� aktiv�t�s';
$lang['Never'] = 'Soha';
$lang['User_manage'] = 'Adat v�ltoztat�s';
$lang['Find_all_posts'] = 'Hozz�sz�l�sainak keres�se';

$lang['Select_one'] = 'V�lassz';
$lang['Ban'] = 'Tiltva';
$lang['Activate_deactivate'] = 'Activ�l/Inact�v�l';

$lang['User_id'] = 'Felhaszn�l� id';
$lang['User_level'] = 'Felhaszn�l� Szint';
$lang['Ascending'] = 'N�vekv�';
$lang['Descending'] = 'Cs�kken�';
$lang['Show'] = 'Mutat';
$lang['All'] = 'Mindegyik';

$lang['Member'] = 'Tag';
$lang['Pending'] = 'F�gg�';

$lang['Confirm_user_ban'] = 'Biztosan bannolod a kiv�lasztott felhaszn�l�t/felhaszn�l�kat?';
$lang['Confirm_user_deleted'] = 'Biztosan t�rl�d kiv�lasztott felhaszn�l�t/felhaszn�l�kat?';

$lang['User_status_updated'] = 'Felhaszn�l�(k) �llapota friss�tve!';
$lang['User_banned_successfully'] = 'Felhaszn�l�(k) bannolva!';
$lang['User_deleted_successfully'] = 'Felhaszn�l�(k) t�r�lve!';
$lang['User_add_group_successfully'] = 'Felhaszn�l�(k) hozz�adva a csoporthoz!';
$lang['Cancel'] = 'M�gsem';
$lang['Click_return_userlist'] = 'Kattints %side%s, hogy visszat�rj a Felhaszn�l� list�hoz';
/*****[END]********************************************
 [ Mod:       Admin Userlist                      v2.0.2 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Global Announcements               v1.2.8 ]
 ******************************************************/
$lang['Globalannounce'] ='Glob�lis k�zlem�ny';
/*****[END]********************************************
 [ Mod:     Global Announcements               v1.2.8 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    PM Quick Reply                      v1.3.5 ]
 ******************************************************/
$lang['ropm_quick_reply'] = 'Priv�t �zenet gyors v�lasz';
$lang['enable_ropm_quick_reply'] = "Priv�t �zenet, gyors v�lasz enged�lyez�se";
$lang['ropm_quick_reply_bbc'] = "BBk�d-gombok enged�lyez�se";
$lang['ropm_quick_reply_smilies'] = "Smiley-k sz�ma";
$lang['ropm_quick_reply_smilies_info'] = "�rj 0-t, ha nem akarod a Smiley-t megjelen�teni.";
/*****[END]********************************************
 [ Mod:    PM Quick Reply                      v1.3.5 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Quick Search                       v3.0.1 ]
 ******************************************************/
$lang['Must_select_search'] = 'V�laszd a gyors keres�st';
$lang['Search_title'] = 'Gyors keres�s';
$lang['Search_explain'] = 'Itt hozz� tudsz adni, szerkeszteni, �s v�lasztani a gyors keres�sek k�z�l.';
$lang['Search_name'] = 'Keres�s neve';
$lang['Search_name_explain'] = 'Keres�s neve a list�ban. P�ld�ul: <b>Yahoo / Google</b>';
$lang['Search_url'] = 'URL Keres�se';
$lang['Search_url_explain'] = 'Az URL feldolgoz�sa. P�ld�ul:<br /><span style="color:red">Jegyzet: A keres�shez tov�bbi adatok kellenek <b>AFTER</b> a</span> <b>Kulcs</b><span style="color:red">, �rj be tov�bbi adatot! Felv�tel\a kulcs szavakhoz</span> <b>Kulcs sz�</b> <span style="color:red">vagy hagyd �ressen.</span><br /><br />- <span style="color:blue">http://search.yahoo.com/search?ei=UTF-8&fr=sfp&p=</span><b>Keyword</b><br />- <span style="color:blue">http://www.google.com/search?hl=en&ie=UTF-8&oe=UTF-8&q=</span><b>Keyword</b><br />- <span style="color:blue">http://www.alltheweb.com/search?cat=web&cs=utf8&q=</span><b>Keyword</b><span style="color:blue">&rys=0&itag=crv&_sb_lang=pref</span><br />';
$lang['Must_enter_search_name'] = '�rd be a keres�s nev�t';
$lang['Search_updated'] = 'A keres�s hozz�adva';
$lang['Search_added'] = 'A keres�s hozz�adva';
$lang['Click_return_addsearchadmin'] = 'Kattints %side%s visszat�r�s a keres� be�ll�t�sokhozl';
// a href, /a tags
$lang['Search_removed'] = 'A keres�s t�r�lve';
$lang['Add_new_search'] = '�j keres�s hozz�ad�sa';
// Quick Search Enable Setting for Board Configuration Panel
$lang['Quick_search_enable'] = 'Gyors keres�s enged�lyez�se';
$lang['Quick_search_enable_explain'] = 'Gyors keres�s mutat�sa.';
/*****[END]********************************************
 [ Mod:     Quick Search                       v3.0.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Advance Signature Divider Control  v1.0.0 ]
 ******************************************************/
$lang['sig_title']   = 'Speci�lis al��r�s-elv�laszt� be�ll�t�s';
$lang['sig_divider'] = 'Jelenlegi al��r�s-elv�laszt�';
$lang['sig_explain'] = "Be�ll�thatod az elv�laszt�t a felhaszn�l� hozz�sz�l�sa �s al��r�sa k�z�tt";
/*****[END]********************************************
 [ Mod:     Advance Signature Divider Control  v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Default avatar                     v1.1.0 ]
 ******************************************************/
$lang['Default_avatar'] = 'Avatar be�l�t�sa';
$lang['Default_avatar_explain'] = 'Itt v�laszthatsz k�pet\v�lassz  avatart. Alap�rtelmezett avatar felhaszn�l�k �s vend�gek r�sz�re, ez fog megjelenni a regisztr�lt tagoknak, vend�gek r�sz�re nem.<br />Az el�r�se \'modules/Forums/avatars/gallery\'';
$lang['Default_avatar_guests'] = 'Vend�g';
$lang['Default_avatar_users'] = 'Felhaszn�l�';
$lang['Default_avatar_both'] = 'Mindkett�';
$lang['Default_avatar_none'] = 'Nincs';
/*****[END]********************************************
 [ Mod:     Default avatar                     v1.1.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Disable Board Admin Override       v0.1.1 ]
 ******************************************************/
$lang['Board_disable_adminview'] = 'Adminisztr�tor bel�phet ha z�rol�s van';
$lang['Board_disable_adminview_explain'] = 'Az �sszes adminisztr�tor bel�phet ha z�rol�s van.';
/*****[END]********************************************
 [ Mod:     Disable Board Admin Override       v0.1.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:  URL Check                           v1.0.0 ]
 ******************************************************/
$lang['URL_server_error'] = 'A be�rt URL nem megfelel� (%s) a szerver hiba�zenetet �rt, az �zenet (%s)';
$lang['URL_error_confirm'] = 'Mented ezt a be�ll�t�st?';
/*****[END]********************************************
 [ Other:  URL Check                           v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     PM threshold                       v1.0.0 ]
 ******************************************************/
$lang['pm_allow_threshold'] = 'Minden Priv�t �zenet �rt�ke';
$lang['pm_allow_threshold_explain'] = 'Minim�lis Priv�t �zenet k�ld�se.';
/*****[END]********************************************
 [ Mod:     PM threshold                       v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Limit smilies per post              v1.0.2 ]
 ******************************************************/
$lang['Max_smilies'] = 'Smiley-k maxim�lis sz�ma hozz�sz�l�sonk�nt';
/*****[END]********************************************
 [ Mod:    Limit smilies per post              v1.0.2 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:  Cookie Check                        v1.0.0 ]
 ******************************************************/
$lang['Cookie_server_error'] = 'A Cookie el�r�si �tvonala (%s) nem megfelel�, a szerver �zeni (%s)';
$lang['Cookie_error_confirm'] = 'Mented ezt a be�ll�t�st?';
$lang['Cookie_name_error'] = 'A Cookie neve (%s) lehet a probl�ma. <br/> Tan�csos megv�ltoztatni %s';
/*****[END]********************************************
 [ Other:  Cookie Check                        v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Log Moderator Actions              v1.1.6 ]
 ******************************************************/
$lang['File_not_deleted'] = 'M�g nem lett t�r�lve az install_tables.php : addig nem tudod bet�lteni.';
$lang['Log_action_title'] = 'Napl� akci�k';
$lang['Log_action_explain'] = 'Itt tudod megn�zni a munkat�rs/adminisztr�tor akci�kat';
$lang['Choose_sort_method'] = 'V�lassz rendezett rendszert';
$lang['Order'] = 'Vagy';
$lang['Go'] = 'Gyer�nk';
$lang['Id_log'] = 'Napl� ID';
$lang['Choose_log'] = 'Napl� v�laszt�sa';
$lang['Delete'] = 'T�rl�s';
$lang['Action'] = 'Akci�';
$lang['Topic'] = 'T�m�k';
$lang['Done_by'] = 'K�szitette';
$lang['User_ip'] = 'Felhaszn�l� IP';
$lang['Select_all'] = 'Kijel�l mindet';
$lang['Unselect_all'] = 'Kijel�l�st megsz�ntet';
$lang['Date'] = 'D�tum';
$lang['See_topic'] = '�zenetek olvas�sa';
$lang['Log_delete'] = 'A napl� t�r�lve.';
$lang['Click_return_admin_log'] = 'Kattints %sIde%s vissza az akci�khoz';
$lang['Log_Config_updated'] = 'Gratul�lunk a napl� Akci� MOD siker�lt';
$lang['Click_return_admin_log_config'] = 'Kattints %sIde%s vissza az akci� MOD be�ll�t�s�hoz';
$lang['Log_Config'] = 'Napl� be�ll�t�sa';
$lang['Log_Config_explain'] = 'Itt tudod be�ll�ttani a napl� MOD ot.';
$lang['General_Config_Log'] = '�llt�l�nos napl� be�ll�t�sok MOD';
$lang['Allow_all_admin'] = 'Minden admin megn�zheti ?';
$lang['Allow_all_admin_explain'] = 'Ebben a be�ll�t�sban csak a GOD admin n�zheti meg';
$lang['Admin_not_authorized'] = 'Eln�z�st te\'nem vagy jogosult az oldal megtekint�s�hez. Csak az admin bele eggyez�s�vel.';
$lang['Add_username_admin_explain'] = 'V�laszd ki az Admin napl�t';
$lang['Delete_username_admin_explain'] = 'V�laszd ki az Admin nev�t\nem n�zheti meg a napl�t';
$lang['No_other_admins'] = 'M�s adminok nem v�ltoztathatnak';
$lang['No_admins_authorized'] = 'Nincs t�bb regisztr�lt admin';
$lang['Add_Admin_Username'] = 'V�lassz nevet a hozz�ad�shoz';
$lang['Delete_Admin_Username'] = 'V�lassz nevet a t�rl�shez';
$lang['No_admins_allow'] = 'T�bbi admin nem n�zheti meg a napl�t';
$lang['No_admins_disallow'] = 'Ha nem vagy admin, elutasitva a napl� megtekint�se';
$lang['Admins_add_success'] = 'Admin hozz�adva a list�hoz';
$lang['Admins_del_success'] = 'Admi t�r�lve a lit�r�l';
$lang['Prune_success'] = 'A napl� t�r�lve';
$lang['Prune_of_logs'] = 'Napl� t�rl�se';
$lang['Prune'] = 'Napl� t�rl�se';
$lang['Prune_!'] = 'T�rl�s !';
$lang['Prune_explain'] = '�rd be a nap sz�m�t amit t�r�lni akarsz. 0 = minden napl�';
/*****[END]********************************************
 [ Mod:     Log Moderator Actions              v1.1.6 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:   At a Glance Option                   v1.0.0 ]
 ******************************************************/
$lang['glance_title'] = 'Tov�bbi be�ll�t�sok';
$lang['glance_override_title'] = 'Be�ll�tott adatok megsemm�s�t�se';
$lang['glance_news_explain'] = '�rd be a F�rum sz�m�t a megjelen�t�shez<br /><small>�rj 0 �s nem jelenik meg. Megjelenitett F�rum , (1,2,3).</small>';
$lang['glance_num_news_explain'] = '�rd be a cikk sz�m�t a megjelen�t�shez.<br /><small>�rj 0 �s nem jelenik meg.</small>';
$lang['glance_num_explain'] = 'Leg�jabb t�m�k megjelenit�se';
$lang['glance_ignore_forums_explain'] = '�rd be a F�rum sz�m�t amit a t�m�kn�l ne vegyen figyelembe.<br /><small>jelenitett F�rum , (1,2,3). Hagyd �ressen, �s minden megjelenik.</small>';
$lang['glance_table_width_explain'] = 'Blokk sz�less�ge. (Alap : 100%)';
$lang['glance_auth_read_explain'] = 'T�ma mutat�sa csak olvas�sra?';
$lang['glance_topic_length_explain'] = 'Karakterek sz�m�nak megjelen�t�se.<br /><small>�rj 0 mindet mutatja.</small>';
/*****[END]********************************************
 [ Mod:   At a Glance Option                   v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Online/Offline/Hidden               v2.2.6 ]
 ******************************************************/
$lang['Online_time'] = 'Elt�lt�tt id�';
$lang['Online_time_explain'] = 'Milyen id�k�z�nk�nt friss�tsen (sz�m) (ne legyen kissebb 60).';
$lang['Online_setting'] = 'Online be�ll�t�s';
$lang['Online_color'] = 'Szinek bekapcsol�sa';
$lang['Offline_color'] = 'Szinek kikapcsol�sa';
$lang['Hidden_color'] = 'Ne mutassa a sz�veg szineit';
/*****[END]********************************************
 [ Mod:    Online/Offline/Hidden               v2.2.6 ]
 ******************************************************/

 /*****[BEGIN]******************************************
 [ Mod:   Show Users Today Toggle              v1.0.0 ]
 ******************************************************/
 $lang['show_users_today'] = 'Tagok kijelz�se<br><small>Jegyzet: Ne alkalmazd nagy terjedelm� oldalakn�l</small>';
/*****[END]********************************************
 [ Mod:   Show Users Today Toggle              v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Group Colors and Ranks             v1.0.0 ]
 ******************************************************/
$lang['group_color'] = 'Sz�n kiv�laszt�sa a csoporthoz.';
$lang['group_rank'] = 'Besorol�s kiv�laszt�sa a csoporthoz.';
/*****[BEGIN]******************************************
 [ Mod:     Group Colors and Ranks             v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Customized Topic Status            v1.0.0 ]
 ******************************************************/
$lang['topic_explain'] = 'Megtudod nyitni a F�rumban a HTML be�ll�t�sokat, tov�bbi stilusokat a t�m�kn�l';
$lang['locked'] = 'Z�rolt t�ma';
$lang['sticky'] = 'Fontos';
$lang['global'] = '�ltal�nos k�zlem�ny';
$lang['announce'] = 'K�zlem�ny';
$lang['current'] = 'Aktu�lis';
$lang['current_explain'] = 'Ezek a be�ll�t�sok jelennek meg a F�rumban.';
$lang['tag'] = 'N�zet v�ltoztat�sa (Ne nyiss quotes itt, html. Ex: &lt;font color=#FFFFFF&gt;C�me&lt;/font&gt;)';
$lang['topic_title'] = 'T�ma c�me';
$lang['moved'] = '�tmozgatott';
$lang['topic_view_settings'] = 'T�m�k be�ll�t�sa';
/*****[END]********************************************
 [ Mod:     Customized Topic Status            v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Initial Usergroup                  v1.0.1 ]
 ******************************************************/
$lang['Initial_user_group'] = 'Kezd� felhaszn�l�i csoport';
$lang['Initial_user_group_explain'] = 'Regisztr�l�sn�l ebbe a csoportba tartoznak az �j tagok';
/*****[END]********************************************
 [ Mod:     Initial Usergroup                  v1.0.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Hide Images and Links              v1.0.0 ]
 ******************************************************/
$lang['hide_images'] = 'K�p elrejt�se vend�gek el�l';
$lang['hide_links'] = 'Link elrejt�se vend�gek el�l';
$lang['hide_emails'] = 'Email-link elrejt�se vend�gek el�l';
/*****[END]********************************************
 [ Mod:     Hide Images and Links              v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Admin DHTML Menu                   v1.0.0 ]
 ******************************************************/
$lang['dhtml_menu'] = 'DHTML megnyit�sa a F�rum be�ll�t�sokn�l.<br /><small>Tov�bbi be�ll�t�sok</small>';
/*****[END]********************************************
 [ Mod:     Admin DHTML Menu                   v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Hide Images                         v1.0.0 ]
 ******************************************************/
$lang['user_hide_images'] = 'K�pek elrejt�se a F�rumban';
/*****[END]********************************************
 [ Mod:    Hide Images                         v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Smilies in Topic Titles Toggle     v1.0.0 ]
 ******************************************************/
$lang['smilies_in_titles'] = 'Smilies megjelen�t�se a t�m�kn�l';
/*****[END]********************************************
 [ Mod:     Smilies in Topic Titles Toggle     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:   Log Actions Mod - Topic View         v2.0.0 ]
 ******************************************************/
$lang['logs_view_level'][0] = 'Adminisztr�tor, Munkat�rs, Felhaszn�l�, Vend�g';
$lang['logs_view_level'][1] = 'Adminisztr�tor, Munkat�rs, Felhaszn�l�';
$lang['logs_view_level'][3] = 'Adminisztr�tor, Munkat�rs';
$lang['logs_view_level'][2] = 'Adminisztr�tor';
$lang['show_edited_logs'] = 'T�m�k napl�ja';
$lang['show_locked_logs'] = 'Z�rolt t�m�k napl�ja';
$lang['show_unlocked_logs'] = 'Nem z�rolt t�m�k napl�ja';
$lang['show_moved_logs'] = '�tmozgatott t�m�k napl�ja';
$lang['show_splitted_logs'] = 'Sz�tv�lasztott t�m�k napl�ja';
$lang['allow_logs_view'] = 'Napl�k mutat�sa';
/*****[END]********************************************
 [ Mod:   Log Actions Mod - Topic View         v2.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:   Resize Posted Images                 v2.4.5 ]
 ******************************************************/
$lang['image_resize_width'] = 'K�p sz�less�ge';
$lang['image_resize_height'] = 'K�p magass�ga';
/*****[END]********************************************
 [ Mod:   Resize Posted Images                 v2.4.5 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Forum Admin Style Selection        v1.0.0 ]
 ******************************************************/
$lang['admin_style'] = 'Oldal t�ma kiv�laszt�sa\a f�rom adminisztr�ci�hoz';
/*****[END]********************************************
 [ Mod:     Forum Admin Style Selection        v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Admin IP Lock                       v2.0.1 ]
 ******************************************************/
$lang['ADMIN_IP_LOCK'] = 'Admin IP Z�rol�s';
$lang['ADMIN_IP_LOCK_OFF'] = 'Kikapcsolva';
$lang['ADMIN_IP_LOCK_ON'] = 'Enged�lyez';
/*****[END]********************************************
 [ Mod:    Admin IP Lock                       v2.0.1 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Edit User Post Count                v1.0.0 ]
 *****************************************************/
$lang['user_posts'] = 'Tov�bbi levelek';
/*****[END]********************************************
 [ Mod:    Edit User Post Count                v1.0.0 ]
 *****************************************************/

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Enged�lyezett bel�p�si k�s�rletek sz�ma';
$lang['Max_login_attempts_explain'] = 'Legfeljebb ennyiszer pr�b�lkozhat bel�pni a felhaszn�l�.';
$lang['Login_reset_time'] = 'Bel�p�s z�rol�s�nak ideje';
$lang['Login_reset_time_explain'] = 'Ennyi percet kell v�rnia a felhaszn�l�nak, hogy bel�phessen, miut�n t�ll�pte az enged�lyezett bel�p�si k�s�rletek sz�m�t.';

/*****[BEGIN]******************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
$lang['sotw_desc'] = 'A H�t Al�ir�sa, leir�sa';
$lang['sotw_desc_explain'] = 'R�vid leir�s\'A H�t Al�ir�sa';
$lang['sotw_img'] = 'K�p el�r�se';
$lang['sotw_img_explain'] = '�t a k�pnek egyik a f�rumra vonatkoz�lag alk�nyvt�r vagy egy teljes �t kapcsol t�voli helyet.';
/*****[END]********************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
 
/*****[BEGIN]******************************************
 [ Mod:     Medal System                       v0.4.5 ]
 ******************************************************/
$lang['Medals'] = 'Medal Admin';
$lang['Manage'] = 'Management';
$lang['Medal_Config'] = 'Medal Configuration';
$lang['Medal_Config_explain'] = 'The form below will allow you to customize all the general medal options.';
$lang['Medal_setting'] = 'Medal Setting';
$lang['Allow_medal'] = 'Allow Medal Display in Viewtopic';
$lang['Medal_rand'] = 'Allow Random Medal Image in Viewtopic';
$lang['Medal_rand_explain'] = 'Image will displayed in random order, only work if you allow medal display in viewtopic';
$lang['Medal_display'] = 'Medal table (Rows x Columns)';
$lang['Medal_display_explain'] = 'Define how many rows and columns the medal table in <b>viewtopic</b>.<br />E.g. 1 row and 1 column display 1 image, and 1 row 2 columns display 2 images. <br />Make sure you set this correctly so it does not distort or introduce extra spaces your viewtopic.';
$lang['Medal_size'] = 'Maximum Medal Dimensions in Viewtopic';
$lang['Medal_size_explain'] = '(Height x Width in pixels)<br />If blank, images will display in it\'s original size';
$lang['Click_return_medalcfg'] = 'Click %sHere%s to return to Medal Configuration.';
$lang['Medal_admin'] = 'Medal Administration';
$lang['Medal_admin_explain'] = 'From this panel you can administer all your medals. You can delete, create and edit existing medals. You may choose moderators and set the medal name and description';
$lang['Updated_medal'] = 'Medal was successfully updated';
$lang['Updated_medal_category'] = 'Medal category was successfully updated';
$lang['Added_new_medal'] = 'New medal was successfully created';
$lang['Added_new_category'] = 'New medal category was successfully created';
$lang['Deleted_medal'] = 'Medal was successfully deleted';
$lang['Deleted_medal_category'] = 'Medal category was successfully deleted';
$lang['New_medal'] = 'Create new medal';
$lang['medal_name'] = 'Medal name';
$lang['medal_description'] = 'Medal description';
$lang['medal_image'] = 'Medal Image';
$lang['medal_image_explain'] = 'Use this to define a image associated with the medal<br />(Relative to phpBB2 root path)';
$lang['No_medal_name'] = 'You must specify a name for this medal';
$lang['No_medal_description'] = 'You must specify a description for this medal';
$lang['No_medal_image'] = 'You must specify an image for this medal';
$lang['Must_select_medal'] = 'Must specify a medal';
$lang['Click_return_medaladmin'] = 'Click %sHere%s to return to Medal Administration.';
$lang['Medal_mod'] = 'Medal Moderator';
$lang['Medal_mod_admin'] = 'Medal Moderator Administration';
$lang['Medal_mod_admin_explain'] = 'From this panel you can appoint medal moderators for your medals.';
$lang['Medal_mod_username'] = 'Appoint one or more specific users to be Medal Moderator';
$lang['Medal_unmod_username'] = 'Remove one or more specific users from Medal Moderator';
$lang['Medal_unmod_username_explain'] = 'You can remove multiple users in one go using the appropriate combination of mouse and keyboard for your computer and browser';
$lang['No_medal_mod'] = 'No Medal Moderator';
$lang['No_medal_in_cat'] = 'No medal in this category';
$lang['Must_delete_medal'] = 'You need to delete all medals before you can delete this category';
$lang['Category_delete'] = 'Delete Medal Category';
$lang['Category_delete_explain'] = 'The form below will allow you to delete a category and decide where you want to put all medals it contained.';
$lang['Move_medals'] = 'Move medals to';
$lang['Category_name'] = 'Category Name';
$lang['Medal_mod_update_sucessful'] = 'Medal Moderator has been updated successfully';
$lang['Click_return_medal_mod_admin'] = 'Click %sHere%s to return to Medal Moderator Administration.';
/*****[END]********************************************
 [ Mod:     Medal System                       v0.4.5 ]
 ******************************************************/


/*****[BEGIN]******************************************
 [ Mod:     Users Reputations Systems          v1.0.0 ]
 ******************************************************/
$lang['Reputation'] = 'H�rn�v';
$lang['Reputation_Config_Title'] = 'H�rn�v Rendszer Konfigur�ci�';
$lang['Reputation_Config_Explain'] = 'Itt be�ll�tan�d a v�laszt�sokat Felhaszn�l�knak H�rn�v Rendszer.';
$lang['Rep_config_updated'] = 'H�rn�v Rendszer konfigur�ci� friss�tett';
$lang['Click_return_rep_config'] = '%sVisszat�rnek H�rn�vnek Rendszer konfigur�ci�%s';
$lang['Disable_rep'] = 'Tilt�s H�rn�v Rendszer';
$lang['Graphic_version'] = 'Grafikai v�ltozat';
$lang['Show_stats_to_mods'] = 'Bemutat� adott pontok a stats egyetlen �gyint�zoknek/k�zvet�tok';
$lang['PM_notify'] = 'Bejelentenek felhaszn�l�kat k�zvetlen minisztereln�k amikor kap �j h�rnevet pontok';
$lang['Posts_to_earn'] = '�rnek post�kb�l elnyernek 1 h�rnevet pont (0  tilt�snak)';
$lang['Days_to_earn'] = '�rnek napokb�l f�rumon elnyernek 1 h�rnevet pont (0  tilt�snak)';
$lang['Flood_control_time'] = 'Percek minim�lis mennyis�ge k�zt h�rn�v ad�sok ugyanazzal felhaszn�l�val (nem haszn�lat admins �s mods)';
$lang['Medal1_to_earn'] = 'Afelm�szik h�rn�vbol pontok elnyerni az 1. m�retet �rem';
$lang['Medal2_to_earn'] = 'felm�szik h�rn�vbol pontok elnyerni az 2. m�retet �rem';
$lang['Medal3_to_earn'] = 'felm�szik h�rn�vbol pontok elnyerni az 3. m�retet �rem';
$lang['Medal4_to_earn'] = 'felm�szik h�rn�vbol pontok elnyerni az 4. m�retet �rem';
$lang['Given_rep_to_earn'] = '�rnek adott h�rn�vbol elnyernek 1 h�rnevet pont (0  tilt�snak)';
$lang['Repsum_limit'] = 'Korl�ta ad� h�rn�v mutat egy felhaszn�l�nak (0  nem korl�tok)';
$lang['Default_amount'] = 'Ford�tj�k az egyszeru v�ltozatot kinyitva �s k�szlet az alap�rtelmez�s �rsz minden ad� ez sz�ml�lsz (0  tilt�snak)';
/*****[END]********************************************
 [ Mod:     Users Reputations System           v1.0.0 ]
 ******************************************************/
 
$lang['Events_Forum'] = 'Lehetov� tesznek napt�ri esem�nyeket';

$lang['Blog_admin'] = 'Weblog Admin';
$lang['Action_choices'] = 'Tev�kenys�g V�laszt�sok';
$lang['Mood_choices'] = 'Hangulat V�laszt�sok';
$lang['Templates'] = 'Weblog Sablonok';
$lang['Weblog_tools'] = 'Eszk�z�k & Vezet�s';

$lang['Group_allow_weblogs'] = 'Kiad�s Csoportos Tagok Teremtesz egy Weblog';

// Points System MOD - Admin
$lang['Points_updated']	= 'Points Configuration Updated Successfully';
$lang['Click_return_points'] = 'Click %sHere%s to return to Points Configuration';
$lang['Points_config_explian'] = 'The form below will allow you to edit your point system configuration.';
$lang['Points_sys_settings'] = 'Points System Settings';
$lang['Points_disabled'] = 'Disable %s';
$lang['Points_enable_post']	= 'Earn %s by posting';
$lang['Points_enable_donation']	= 'Enable Donation';
$lang['Points_name'] = 'Points Name';
$lang['Points_per_reply'] = 'Points Per Reply';
$lang['Points_per_topic'] = 'Points Per New Topic';
$lang['Points_user_group_auth'] = 'Authorized Groups';
$lang['Points_enable_post_explain']	= 'Let users earn %s by posting new topics and replies';
$lang['Points_enable_donation_explain']	= 'Let users donate %s to their friends';
$lang['Points_name_explain'] = 'Whatever you call your points on your board e.g. (money, gil, gold)';
$lang['Points_per_reply_explain'] = 'The amount of %s they earn per reply';
$lang['Points_per_topic_explain'] = 'The amount of %s they earn per new topic';
$lang['Points_user_group_auth_explain'] = 'Enter ids of groups who are authorized to access the points control panel, one id per line.';
$lang['Allow_Points'] = 'Use the Points System?';
$lang['Points_reset'] = 'Reset everyones Points';
$lang['Points_reset_explain'] = 'Input a number and submit. Everyones Points will become the number you entered.';

//
// That's all Folks!
// -------------------------------------------------

/*****[BEGIN]******************************************
 [ Mod:     Forum Icons                        v1.0.4 ]
 ******************************************************/
$lang['Forum_icon'] = 'Forum icon';
/*****[END]********************************************
 [ Mod:     Forum Icons                        v1.0.4 ]
 ******************************************************/
/*****[BEGIN]*****************************************
[ Mod: Inline Banner Ad                       v1.2.3 ]
******************************************************/
$lang['ad_managment']  = 'Rekl�m Vezet�s';
$lang['inline_ad_config']  = 'Vonalban Rekl�m Konfigur�ci�';
$lang['inline_ads']  = 'Vonalban Rekl�mok';
$lang['ad_code_about']  = 'Ez az oldal list�k jelenlegi rekl�mok.  Szerkeszthetsz, t�rl�s vagy hozz�adsz �j rekl�mokat itt.';
$lang['Click_return_firstpost'] = 'Click %sHere%s to return to Inline Ad Configuration';
$lang['Click_return_inline_code'] = 'Kattints %sIde%s visszat�r�snek fel� vonalban Rekl�m K�d Konfigur�ci�';
$lang['ad_after_post'] = 'Megjelen�t�s Rekl�m Ut�n x betu Feladsz';
$lang['ad_every_post'] = 'Megjelen�t�s Rekl�m Minden x betu Feladsz';
$lang['ad_display'] = 'Megjelen�t�s Rekl�mok Fel�';
$lang['ad_all'] = 'Mind';
$lang['ad_reg'] = 'Regisztr�lt Felhaszn�l�kat';
$lang['ad_guest'] = 'Vend�gek';
$lang['ad_exclude'] = 'Kiz�rj�k Ezeket a Csoportokat (kiv�laszthatsz t�bb csoportokat)';
$lang['ad_forums'] = 'Kiz�rj�k Ezeket a F�rumokat (kiv�laszthatsz multi- f�rumok)';
$lang['ad_code'] = 'Rekl�m K�d';
$lang['ad_style'] = 'Megjelen�t�s St�lus';
$lang['ad_new_style'] = 'Rekl�m �gy n�z ki mint egy k�l�nleges felhaszn�l�t posta';
$lang['ad_old_style'] = 'Rekl�m beleesik vonalaznak a t�m�val';
$lang['ad_post_threshold'] = 'Rendelkezik nem mutat-e ha felhaszn�l� t�bb mint x betu felad (T�voznak feh�r�tenek tilt�snak)';
$lang['ad_add']  = 'Hozz�adnak �j Rekl�mot';
$lang['ad_name']  = 'R�vid n�v felismerni rekl�mot';
$lang['exclude_none']  = 'Nem z�rnak ki Egyik sem';
/*****[END]*******************************************
[ Mod: Inline Banner Ad                       v1.2.3 ]
******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
$lang['Birthdays'] = 'Sz�let�snapok';
$lang['bday_show'] = 'Sz�let�snapi Panel L�that�s�g';
$lang['Unconditional'] = 'Felt�tlen';
$lang['Conditional'] = 'Felt�teles';
$lang['bday_show_explain'] = 'Meghat�roz vajon vagy nem a Sz�let�snapi Panel a fo Indexen kell lennie l�that� az esem�nyben ami nincsenek sz�let�snapokat vagy felj�vo sz�let�snapok (felt�tlen = igen, felt�teles = nem)';
$lang['bday_require'] = 'Megk�vetelnek Sz�let�si idopontot';
$lang['bday_require_explain'] = 'Sz�let�si akarat az �v�t csak megk�veteln�nek ha a "Megk�vetelnek �v "v�laszt�st kiv�lasztanak';
$lang['bday_year'] = 'Megk�vetelnek �vet';
$lang['bday_year_explain'] = 'Amikor ez v�laszt�st kiv�lasztanak, felhaszn�l�k megk�s�relo ny�jtani egy sz�let�si idopontot fognak kelleni szint�n ny�jtani sz�let�s egy �v�t.';
$lang['bday_lock'] = 'Helytelen�t Sz�let�si idopont V�ltoztat�sok';
$lang['bday_lock_explain'] = 'Amint be�rt, a sz�let�si idopontot nem v�ltozn�nak, �jra.  Legal�bb amikor ez v�laszt�st kiv�lasztanak.';
$lang['bday_lookahead'] = 'Sz�ma Napok Eloren�zni';
$lang['bday_lookahead_explain'] = 'Hat�ssal van a Sz�let�snapi Panelre a fo Indexen.  Be�r� 1 fog tilteni Sz�let�snap Eloren�zel';
$lang['bday_age_range'] = 'Engedheto Kor Sor (�vekben)';
/*****[END]********************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
 /*****[BEGIN]******************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
$lang['sotw_desc'] = 'SOTW le�r�s';
$lang['sotw_desc_explain'] = 'Kis le�r�s le�rni ezet h�t SOTW';
$lang['sotw_img'] = '�t SOTW k�p';
$lang['sotw_img_explain'] = '�t a k�pnek egyik a f�rumra vonatkoz�lag alk�nyvt�r vagy egy teljes �t kapcsol t�voli helyet.';
/*****[END]********************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
 /*****[BEGIN]******************************************
 [ Mod:     Advanced Topic Types               v1.0.1 ]
 ******************************************************/
$lang['admin_topic_type'] = 'T�ma T�pus Admin';
$lang['Topic_type_gestion'] = 'T�ma t�pusok vezet�s';
$lang['Topic_type_gestion_explain'] = 'Ez a tulajdons�g lehetov� tesz hozz�adni t�m�t t�pusok.';
$lang['Topic_type_name'] = 'T�ma t�pus megnevezel';
$lang['Color'] = 'T�ma t�pus sz�n';
$lang['Topic_type_order'] = 'T�ma t�pusok rendelnek';
$lang['already_first'] = 'T�ma t�pus van-e m�r elosz�r';
$lang['already_last'] = 'T�ma t�pus tartasz m�r';
$lang['Click_return_admintopictype'] = 'Kattints %sIde%s vissza az adminisztr�ci�ba';
$lang['tt_updated'] = 'T�ma t�pust sikeresen friss�tettek';
$lang['tt_added'] = 'T�ma t�pust sikeresen hozz�adtak';
$lang['tt_Deleted'] = 'T�ma t�pust sikeres t�r�ltek';
$lang['Add_topic_type'] = 'Hozz�adnak t�m�t t�pus';
$lang['topic_type_active'] = 'Tett fel�l';
$lang['active_explain'] = 'V�lasztan�l ha akarsz tev�snek fel�l a post�k ezzel t�ma beg�pelsz viewforum. Ha tekinten�nek nem v�lasztanak, t�ma t�pus fogsz mint egy norm�lis post�t.';
$lang['topic_type_folder'] = 'T�ma t�pus k�p (phpBB �t)';
$lang['folder_explain'] = 'Ha nemet k�pet mutatn�nak kapcsol�dnak, egy alap�rtelmez�s ikon akarat';
$lang['edit_topic_type'] = 'Szerkeszt�s t�ma g�pelsz';
$lang['edit_topic_type_explain'] = 'Te doboz itt m�dos�t�s az inform�ci�k a t�ma g�pel';
$lang['Not_active'] = 'Nem tev�s fel�l';
$lang['Actual_color'] = 'Aktu�lis sz�n: ';
$lang['Change_color'] = 'P�nzv�lt� sz�n';
$lang['tt_Announce'] = 'Bejelentenek';
$lang['Global'] = 'Glob�lis Bejelentenek';
$lang['topic_type_folder_new'] = 'T�ma t�pus k�p egy �j post�nak';
$lang['folder_new_explain'] = 'Ez ikont fognak mutatni amikor egy �j �zenetet feladnak';
/*****[END]********************************************
 [ Mod:     Advanced Topic Types               v1.0.1 ]
 ******************************************************/
// Welcome Panel On Index MOD - START
$lang['Welcome_Panel'] = '�dv�zlet Panel';
$lang['Welcome_Panel_explain'] = 'A forma akarat alatt figyelembe veszlek t�ged szok�soss� tennie mind a be�ll�t�sot �dv�zlet Panel Indexen.';
$lang['Suggested_Topics'] = 'Javasolt T�m�kat';
$lang['Suggested_Topics_explain'] = 'Kiv�lasztanak t�m�t javaslat jelleg v�gyt�l:';
$lang['Do_not_suggest'] = 'Nem javasol b�rmilyet t�m�t';
$lang['Suggest_faq'] = 'Javasolj�k ez az GYIK';
$lang['Suggest_topic_from'] = 'Javasolnak egy t�ma fogva ';
$lang['Suggest_specific'] = 'Javasolnak mindig a t�ma ki azonos�t� sz�m van-e ';
$lang['Suggest_announcements'] = 'Javasolnak egyetlen K�zlem�nyeket �s Ragad�s T�m�kat';
$lang['Suggestion_Warning'] = '* Ha felhaszn�l�t enged�lyek olvasnia a kiv�lasztott t�m�t, egy link GYIK akaratnak mutatn�nak';
// Welcome Panel On Index MOD - END

// Start add - myCalendar MOD
$lang['Events_Forum'] = 'Lehetov� tesznek napt�ri esem�nyeket';
// End add - myCalendar MOD 
// Lottery Variables
$lang['lottery_second'] = 'Second';
$lang['lottery_seconds'] = 'Seconds';
$lang['lottery_minute'] = 'Minute';
$lang['lottery_minutes'] = 'Minutes';
$lang['lottery_hour'] = 'Hour';
$lang['lottery_hours'] = 'Hours';
$lang['lottery_day'] = 'Day';
$lang['lottery_days'] = 'Days';
$lang['lottery_no_items'] = 'There are no items in the shop database!';
$lang['lottery_rand'] = 'Random';
$lang['lottery_statistics'] = 'Lottery Statistics';
$lang['lottery_edit_settings'] = 'Edit Lottery Settings';
$lang['lottery_no_one'] = 'No One';
$lang['lottery_editor'] = 'Lottery Editor';
$lang['lottery_index_explain'] = 'This section allows you to edit the lottery settings.';
$lang['lottery_no_item'] = 'No such item exists!';
$lang['lottery_invalid_action'] = 'Invalid Action!';
$lang['lottery_click_to_return'] = 'Click %sHere%s to return to Lottery Settings.';
$lang['lottery_random_items_updated'] = 'Random item settings sucessfully updated!';
$lang['lottery_item_added'] = 'Item successfully added to item pool!';
$lang['lottery_item_removed'] = 'Item successfully removed from item pool!';
$lang['lottery_updated'] = 'Lottery sucessfully updated!';
$lang['lottery_status'] = 'Lottery Status';
$lang['lottery_add_item'] = 'Add Item';
$lang['lottery_add_items'] = 'Add Item to Pool';
$lang['lottery_remove_item'] = 'Remove Item';
$lang['lottery_current_items'] = 'Current Item Pool';
$lang['lottery_update_settings'] = 'Update Settings';
$lang['lottery_max_cost'] = 'Maximum Cost';
$lang['lottery_min_cost'] = 'Minimum Cost';
$lang['lottery_all_shops'] = 'All Shops';
$lang['lottery_from_shop'] = 'From Shop';
$lang['lottery_update'] = 'Update';
$lang['lottery_currency'] = 'Currency to Use';
$lang['lottery_history'] = 'Lottery History';
$lang['lottery_item_pool'] = 'Item Pool';
$lang['lottery_full_display'] = 'Full Display';
$lang['lottery_max'] = 'max';
$lang['lottery_off'] = 'Off';
$lang['lottery_on'] = 'On';
$lang['lottery_mult_tickets'] = 'Multiple Tickets';
$lang['lottery_multiple'] = 'Multiple';
$lang['lottery_single'] = 'Single';
$lang['lottery_tickets_allowed'] = 'Tickets Allowed';
$lang['lottery_draw_periods'] = 'Lottery Draw Periods';
$lang['lottery_entry_cost'] = 'Entry Cost';
$lang['lottery_base_amount'] = 'Lottery Base Amount';
$lang['lottery_name'] = 'Lottery Name';
$lang['lottery_auto_restart'] = 'Auto Restart';
$lang['lottery_last_won'] = 'Last Won';
$lang['lottery_pool'] = 'Lottery Pool';
$lang['lottery_time_left'] = 'Time Left';
$lang['lottery_duration_left'] = 'Duration Left';
$lang['lottery_total_entries'] = 'Total Entries';
$lang['lottery_items_table'] = 'Edit Item Pool';
$lang['lottery_items_settings'] = 'Edit Item Settings';

// Lottery Error Variables
$lang['lottery_error_updating'] = 'Error updating %s table!';
$lang['lottery_error_deleting'] = 'Error deleting from %s table!';
$lang['lottery_error_selecting'] = 'Error getting information from %s table!';
$lang['lottery_error_inserting'] = 'Error inserting into %s table!';
$lang['lottery_error_variable'] = 'Could not read %s variable!';
//
// Begin: DlMod
//
$lang['Traffic_single_user_admin_explain'] = "Here you can modify the Traffic for a single user.";
$lang['Traffic_all_users_admin_explain'] = "Here you can modify the Traffic for all users.";
$lang['Single_user_traffic_title'] = "Traffic for single user";
$lang['All_users_traffic_title'] = "Traffic for all users";
$lang['Dl_files_title'] = "Files";
$lang['Dl_files_explain'] = "Upload the file with your FTP- Client into the Download- directory and specify the path here.";
$lang['Dl_files_url'] = "URL";
$lang['Dl_files_url_explain'] = "According to the Download- directory.";
$lang['Download_updated'] = "The informations were updated";
$lang['Download_added'] = "The Download is added";
$lang['Download_removed'] = "The Download is deleted";
$lang['Click_return_downloadadmin'] = "Click %shere%s to return to the Downloads- administration.";
$lang['Click_return_user_traffic_admin'] = "Click %shere%s to modify the Traffic of another user.";
$lang['Must_select_download'] = "Choose a Download.";
$lang['Dl_function'] = "Funktion";
$lang['Add_new_download'] = "Add new Download";
$lang['Dl_add'] = "Add";
$lang['Dl_set'] = "Set";
$lang['Traffic_now'] = "At present on account";
$lang['Dl_is_free'] = "free";
$lang['Dl_yes'] = "Yes";
$lang['Dl_no'] = "No";
$lang['DL_free_explain'] = "Activate this funktion if the Download should be able for everybody. The accounts will not be used.";
$lang['Dl_order'] = "Sort";
$lang['Dl_up'] = "up";
$lang['Dl_down'] = "down";
$lang['Dl_extern'] = "Extern";
$lang['Dl_extern_explain'] = "Activate this funktion for remote files (http://www.example.com/media.mp3). Funktion 'Free' becomes irrelevant.";
//
// End: DlMod
//

?>