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
$lang['General'] = 'Általános';
$lang['Users'] = 'Felhasználók';
$lang['Groups'] = 'Csoportok';
$lang['Forums'] = 'Fórumok kezelése';
/*****[BEGIN]******************************************
 [ Mod:     Faq Manager                       v1.0.0b ]
 ******************************************************/
$lang['Faq_manager'] = 'GYIK Admin';
/*****[END]********************************************
 [ Mod:     Faq Manager                       v1.0.0b ]
 ******************************************************/

$lang['Configuration'] = 'Beállítások';
$lang['Permissions'] = 'Jogosultság';
$lang['Manage'] = 'Beállítások';
$lang['Disallow'] = 'Tiltott nevek';
$lang['Prune'] = 'Karbantartás';
$lang['Mass_Email'] = 'Csoportos email';
$lang['Ranks'] = 'Rang';
$lang['Smilies'] = 'Emotikonok';
$lang['Ban_Management'] = 'Letiltások';
$lang['Word_Censor'] = 'Cenzúra';
$lang['Export'] = 'Exportálás';
$lang['Create_new'] = 'Készítés';
$lang['Add_new'] = 'Hozzáadás';
$lang['Backup_DB'] = 'Adatbázis lementése';
$lang['Restore_DB'] = 'Adatbázis visszaállítása';
// FLAGHACK-start
$lang['Flags'] = 'Flags';
// FLAGHACK-end

/*****[BEGIN]******************************************
 [ Mod:     Faq Manager                       v1.0.0b ]
 ******************************************************/
$lang['board_faq'] = 'Oldal GYIK';
$lang['bbcode_faq'] = 'BBcode GYIK';
$lang['attachment_faq'] = 'Hozzákapcsolás GYIK';
$lang['prillian_faq'] = 'Általános GYIK';
$lang['bid_faq'] = 'Barátok Listája GYIK';
/*****[END]********************************************
 [ Mod:     Faq Manager                       v1.0.0b ]
 ******************************************************/
 
/*****[BEGIN]******************************************
 [ Mod:     Display Poster Information Once    v2.0.0 ]
 ******************************************************/
$lang['once_settings'] = 'Avatar, Aláirás Beállítás';
$lang['show_sig_once'] = 'Aláirás mutatása, csak az elsõ hozzászólásnál';
$lang['show_avatar_once'] = 'Avatar mutatása, csak az elsõ hozzászólásnál';
$lang['show_rank_once'] = 'Rang mutatása, csak az elsõ hozzászólásnál';
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
$lang['Admin'] = 'Adminisztráció';
$lang['Not_admin'] = 'Nincs jogosultságod az adminsztrációhoz!';
$lang['Welcome_phpBB'] = 'Üdvözlünk a phpBB-ben!';
$lang['Admin_intro'] = 'Köszönjük, hogy a phpBB-t választottad a fórumod megvalósításához. Ebben az ablakban egy gyors áttekintést láthatsz a Fórum néhány adatáról. Erre az oldalra mindig visszatérhetsz, ha a bal oldali menüpontban rákattintasz az <i>Admin Kezdõlap</i> linkre. A Fórumba való visszatéréshez kattints a phpBB ikonra, mely szintén a bal oldali menü tetején található meg. A többi hivatkozással a Fórum beállításait változtathatod meg, a legapróbb részletbe menõen. Minden oldalhoz egy külön kis leírás tartozik, mely segít a beállításokban.';
$lang['Main_index'] = 'Fórum Kezdõlap';
$lang['Forum_stats'] = 'Fórum Statisztika';
$lang['Admin_Index'] = 'Admin Kezdõlap';
$lang['Preview_forum'] = 'Fórum Elõnézet';
/*****[BEGIN]******************************************
 [ Mod:     Forum ACP Administration Links     v1.0.0 ]
 ******************************************************/
$lang['Admin_Index'] = 'Admin [Fórum]';
$lang['Admin_Nuke'] = 'Admin [Nuke-Evo]';
$lang['Home_Nuke'] = 'Kezdõ Oldal [Nuke-Evo]';
/*****[END]********************************************
 [ Mod:     Forum ACP Administration Links     v1.0.0 ]
 ******************************************************/

$lang['Click_return_admin_index'] = 'Kattints %side%s, hogy visszatérj az Admin Kezdõlapra';

$lang['Statistic'] = 'Statisztika';
$lang['Value'] = 'Érték';
$lang['Number_posts'] = 'Hozzászólások száma';
$lang['Posts_per_day'] = 'Hozzászólás száma naponta';
$lang['Number_topics'] = 'Témák száma';
$lang['Topics_per_day'] = 'Témák száma naponta';
$lang['Number_users'] = 'Felhasználók száma';
$lang['Users_per_day'] = 'Felhasználók száma naponta';
$lang['Board_started'] = 'Fórum indulása';
$lang['Avatar_dir_size'] = 'Avatar könyvtár mérete';
$lang['Database_size'] = 'Adatbázis mérete';
$lang['Gzip_compression'] ='Gzip tömörítés';
$lang['Not_available'] = 'Nem elérhetõ';

$lang['ON'] = 'Bekapcsolva'; // This is for GZip compression
$lang['OFF'] = 'Kikapcsolva';
//
// DB Utils
//
$lang['Database_Utilities'] = 'Adatbázis eszközök';

$lang['Restore'] = 'Visszaállítás';
$lang['Backup'] = 'Lementés';
$lang['Restore_explain'] = 'Ezzel a funkcióval a phpBB Fórum adatbázisának összes tábláját vissza lehet tölteni egy kimentett fileból. Ha a szerver támogatja a kicsomagolást, akkor egy GZIP-pel tömörített szöveges fileból is be lehet tölteni. <b>FIGYELEM!</b> Ez felülírja az éppen használt táblázatot. Az adatbázis visszaállítása eltarthat egy ideig, ezért ne menj el addig errõl az oldalról, míg nem jelzi, hogy kész van.';
$lang['Backup_explain'] = 'Ezzel a funkcióval a phpBB Fórum adatbázisának összes tábláját ki lehet menteni egy külsõ fileba. Ha van más, egyéni phpBB-hez tartozó tábla is az adatbázisban, akkor add meg azoknak a neveit is, vesszõvel elválasztva - az alábbi Egyéb Táblák kimentése mezõbe. Ha támogatja a szerver, akkor használhatsz GZIP tömörítést is, hogy kisebb legyen a letöltendõ file mérete.';

$lang['Backup_options'] = 'Kimentési beállítások';
$lang['Start_backup'] = 'Kimentés indítása';
$lang['Full_backup'] = 'Teljes kimentés';
$lang['Structure_backup'] = 'Csak a táblázat elépítésének kimentése';
$lang['Data_backup'] = 'Csak az adatok kimentése';
$lang['Additional_tables'] = 'Egyéb táblák';
$lang['Gzip_compress'] = 'Gzip tömörítés';
$lang['Select_file'] = 'File kiválasztása';
$lang['Start_Restore'] = 'Visszaállítás indítása';

$lang['Restore_success'] = 'Az adatbázis sikeresen helyre lett állítva.<br /><br />A Fórum visszakerült a kimentés elõtti állapotba.';
$lang['Backup_download'] = 'A letöltés hamarosan elindul, várj a megkezdéséig.';
$lang['Backups_not_supported'] = 'Az adatbázis kimentése nem lehetséges, mivel ez nincsen támogatva ebben az adatbázis rendszerben.';

$lang['Restore_Error_uploading'] = 'Hiba, a kimentett file visszatöltése közben';
$lang['Restore_Error_filename'] = 'Hibás filenév, válassz egy másik filet';
$lang['Restore_Error_decompress'] = 'A GZIP kitömörítés nem lehetséges, adj meg egy sima szöveges filet';
$lang['Restore_Error_no_file'] = 'Nem lett file feltöltve';
//
// Auth pages
//
$lang['Select_a_User'] = 'Válassz egy felhasználót';
$lang['Select_a_Group'] = 'Válassz egy Csoportot';
$lang['Select_a_Forum'] = 'Válassz egy fórumot';
$lang['Auth_Control_User'] = 'Felhasználói engedélyek beállítása';
$lang['Auth_Control_Group'] = 'Csoportengedélyek beállítása';
$lang['Auth_Control_Forum'] = 'Fórumhoz tartozó jogosultságok beállítása';
$lang['Look_up_User'] = 'Felhasználó keresése';
$lang['Look_up_Group'] = 'Csoport keresése';
$lang['Look_up_Forum'] = 'Fórum keresése';

$lang['Group_auth_explain'] = 'Itt állíthatsz be jogosultságokat és Moderátor jogokat az egyes csoportokhoz. Ne felejtsd el, hogy a csoport jogosultság megváltoztatásával egyes felhasználók még hozzáférhetnek a csoporthoz. Ebben az esetben egy figyelmezetõ üzenetet fogsz kapni.';
$lang['User_auth_explain'] = 'Itt állíthatsz be jogosultságokat és Moderátor jogokat az egyes felhasználókhoz. Ne felejtsd el, hogy a felhasználói jogosultság megváltoztatásával egyes felhasználók még hozzáférhetnek egyes fórumokhoz, stb. Ebben az esetben egy figyelmezetõ üzenetet fogsz kapni.';
$lang['Forum_auth_explain'] = 'Itt állíthatod be a hozzáférési jogosultságokat az egyes fórumokhoz, az Egyszerû vagy Bõvített lehetõséget használva. Ne feledd, hogy a jogosultságok megváltoztatásával a felhasználók újabb opciókat, és változtatási lehetõséget érhetnek el.';

$lang['Simple_mode'] = 'Egyszerû mód';
$lang['Advanced_mode'] = 'Bõvített mód';
$lang['Moderator_status'] = 'Moderátor státusz';

$lang['Allowed_Access'] = 'Hozzáférés engedélyezve';
$lang['Disallowed_Access'] = 'hozzáférés megtagadva';
$lang['Is_Moderator'] = 'Moderátor';
$lang['Not_Moderator'] = 'Nem Moderátor';

$lang['Conflict_warning'] = 'Jogosultság-ütközés';
$lang['Conflict_access_userauth'] = 'Ennek a felhasználónak már van fórum jogosultsága, a Csoporttagságon keresztül. Ha ezt meg akarod szüntetni vagy meg akarod változtatni, akkor a felhasználó Egyéni jogosultságaiban változtasd meg. A felhasználónak az alábbi jogosultságai vannak:';
$lang['Conflict_mod_userauth'] = 'Ennek a felhasználónak már van Moderátori joga ehhez a fórumhoz a Csoporttagságon keresztül. Ha ezt meg akarod szüntetni, akkor a felhasználó Egyéni jogosultságaiban változtasd meg. A felhasználónak az alábbi jogosultságai vannak:';

$lang['Conflict_access_groupauth'] = 'Az egyéni jogosultságok beállításában ennek a felhasználónak már van jogosultsága ehhez a fórumhoz. Ha ezt meg akarod változtatni, akkor a felhasználó Egyéni jogosultságaiban tedd meg. A felhasználónak az alábbi jogosultságai vannak:';
$lang['Conflict_mod_groupauth'] = 'Az egyéni jogosultságok beállításában ennek a felhasználónak már van moderátori joga ehhez a fórumhoz. Ha ezt meg akarod szüntetni, akkor a felhasználó Egyéni jogosultságaiban változtasd meg. A felhasználónak az alábbi jogosultságai vannak:';

$lang['Public'] = 'Nyilvános';
$lang['Private'] = 'Privát';
$lang['Registered'] = 'Regisztrált';
$lang['Administrators'] = 'Adminisztrátor';
$lang['Hidden'] = 'Rejtett';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'MINDENKI';
$lang['Forum_REG'] = 'REGISZTRÁLTAK';
$lang['Forum_PRIVATE'] = 'PRIVÁT';
$lang['Forum_MOD'] = 'MODERÁTOROK';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Megtekintés';
$lang['Read'] = 'Olvasás';
$lang['Post'] = 'Hozzászólás';
$lang['Reply'] = 'Válaszküldés';
$lang['Edit'] = 'Szerkesztés';
$lang['Delete'] = 'Törlés';
$lang['Sticky'] = 'Kiemelt';
$lang['Announce'] = 'Közlemény';
$lang['Vote'] = 'Szavazás';
$lang['Pollcreate'] = 'Szavazás készítése';

$lang['Permissions'] = 'Jogosultságok';
$lang['Simple_Permission'] = 'Egyszerû jogosultság';

$lang['User_Level'] = 'Felhasználószint';
$lang['Auth_User'] = 'Felhasználó';
$lang['Auth_Admin'] = 'Adminisztrátor';
$lang['Group_memberships'] = 'Csoporttagságok';
$lang['Usergroup_members'] = 'A következõ felhasználók tartoznak ebbe a csoportba:';

$lang['Forum_auth_updated'] = 'Fórum engedélyek frissítve';
$lang['User_auth_updated'] = 'Felhasználói engedélyek frissítve';
$lang['Group_auth_updated'] = 'Csoport-jogosultságok frissítve';

$lang['Auth_updated'] = 'A Jogosultságok sikeresen megváltoztak!';
$lang['Click_return_userauth'] = 'Kattints %side%s, hogy visszatérj a Felhasználói Jogosultság beállításaihoz';
$lang['Click_return_groupauth'] = 'Kattints %side%s hogy visszatérj a Csoport Jogosultság beállításaihoz';
$lang['Click_return_forumauth'] = 'Kattints %side%s hogy visszatérj a Fórum Jogosultság beállításaihoz';
//
// Banning
//
$lang['Ban_control'] = 'Kitiltás';
$lang['Ban_explain'] = 'Itt tudsz letiltani egy vagy több felhasználót, így azok nem tudják betölteni a Fórum kezdõoldalát. Ezt vagy felhasználónév, vagy IP-cím (vagy IP-tartomány), vagy hostnév megadásával érheted el. Az emailcímet is letilthatod, hogy az ne regisztrálja magát egy új néven. Figyelem, egy email-cím letiltásával még nem biztos, hogy a felhasználó ki lett tiltva a Fórumról; ehhez a felhasználónév és az IP egyidejû letiltását használd.';
$lang['Ban_explain_warn'] = 'Figyelem, az IP-tartomány megadásával a kezdõ, és az utolsó IP között az összes cím le lesz tiltva. Lehetõség szerint minél kisebb tartományt adj meg, hogy ne legyen túl nagy az adatbázis mérete, illetve ha túl nagy tartományt adsz meg, elõfordulhat, hogy vétlen felhasználók sem fogják tudni használni a fórumot. Ha muszáj tartományt megadni, akkor lehetõleg minél kisebbet adj meg, de jobb, ha csak az IP-címet határozod meg.';

$lang['Select_username'] = 'Felhasználónév kiválasztása';
$lang['Select_ip'] = 'IP-cím kiválasztása';
$lang['Select_email'] = 'Emailcím kiválasztása';

$lang['Ban_username'] = 'Egy vagy több felhasználó kitiltása';
$lang['Ban_username_explain'] = 'A használt operációs rendszertõl és böngészõtõl függõen egyszerre több felhasználót is ki lehet tiltani (kijelöléssel; a CTRL és a SHIFT gombok használatával).';

$lang['Ban_IP'] = 'Egy vagy több IP-cím, vagy hostnév letiltása';
$lang['IP_hostname'] = 'IP-címek vagy hostnevek';
$lang['Ban_IP_explain'] = 'Több IP-cím, vagy hostnév megadásához vesszõvel válaszd õket. IP-tartomány megadásához az elsõ és az utolsó szám elé tegyél egy kötõjelet. Jokerkaraktert \(*\) is használhatsz.';

$lang['Ban_email'] = 'Egy vagy több emailcím kitiltása';
$lang['Ban_email_explain'] = 'Több emailcím kitiltásához vesszõvel válaszd el a címeket. Jokerkaraktert \(*\) is használhatsz, pld. *@hotmail.com';

$lang['Unban_username'] = 'Egy vagy több felhasználó újraengedélyezése';
$lang['Unban_username_explain'] = 'A használt operációs rendszertõl és böngészõtõl függõen egyszerre több felhasználót is lehet újraengedélyezni (kijelöléssel; a CTRL és a SHIFT gombok használatával).';

$lang['Unban_IP'] = 'Egy vagy több IP-cím újraengedélyezése';
$lang['Unban_IP_explain'] = 'A használt operációs rendszertõl és böngészõtõl függõen egyszerre több IP-címet is lehet újraengedélyezni (kijelöléssel; a CTRL és a SHIFT gombok használatával).';

$lang['Unban_email'] = 'Egy vagy több emailcím engedélyezése';
$lang['Unban_email_explain'] = 'A használt operációs rendszertõl és böngészõtõl függõen egyszerre több emailcímet is lehet újraengedélyezni (kijelöléssel; a CTRL és a SHIFT gombok használatával).';

$lang['No_banned_users'] = 'Nincsen letiltott felhasználónév';
$lang['No_banned_ip'] = 'Nincsen kitiltott IP-cím';
$lang['No_banned_email'] = 'Nincsen kitiltott emailcím';

$lang['Ban_update_sucessful'] = 'A Kitiltás listája sikeresen megváltozott!';
$lang['Click_return_banadmin'] = 'Kattints %side%s, hogy visszatérj a Kitiltás beállításaihoz';
//
// Configuration
//
$lang['General_Config'] = 'Általános beállítások';
$lang['Config_explain'] = 'A Fórum alapvetõ beállításait adhatod meg itt. A Felhasználók és az egyes fórumok beállításait a bal oldali menüben érheted el.';

$lang['Click_return_config'] = 'Kattints %side%s, hogy visszatérj az Általános Beállításokhoz';

$lang['General_settings'] = 'Általános beállítások';
$lang['Server_name'] = 'Domain név';
$lang['Server_name_explain'] = 'A domainnév, melyen a Fórum fut';
$lang['Script_path'] = 'Script elérési útvonal';
$lang['Script_path_explain'] = 'A phpBB relatív elérési útvonala, a domainnévhez képest';
$lang['Server_port'] = 'Szerverport';
$lang['Server_port_explain'] = 'A használt port, általában a 80-as.';
$lang['Site_name'] = 'Oldal neve';
$lang['Site_desc'] = 'Oldal leírása';
$lang['Board_disable'] = 'Fórum kikapcsolása';
$lang['Board_disable_explain'] = 'A bekapcsolásával a felhasználók nem érhetik el a fórumot. Az Adminsztrátorok ettõl függetlenül beléphetnek az Adminisztrációs Panelbe.';
/*****[BEGIN]******************************************
 [ Mod:     Disable Board Message              v1.0.0 ]
 ******************************************************/
$lang['Board_disable_msg'] = 'Disable board message';
$lang['Board_disable_msg_explain'] = 'This text will be showed if "Disable board" is on "Yes".';
/*****[END]********************************************
 [ Mod:     Disable Board Message              v1.0.0 ]
 ******************************************************/
$lang['Acct_activation'] = 'Azonosító aktiválása';
$lang['Acc_None'] = 'Nincs'; // These three entries are the type of activation
$lang['Acc_User'] = 'Felhasználói';
$lang['Acc_Admin'] = 'Adminisztrátori';

$lang['Abilities_settings'] = 'Felhasználó és Fórum beállítások';
$lang['Max_poll_options'] = 'Maximum választási lehetõségek száma a szavazásban';

$lang['Flood_Interval'] = 'Flood idõköz';
$lang['Flood_Interval_explain'] = 'Ennyi másodpercet kell várni a következõ hozzászólás elküldéséig';
$lang['Board_email_form'] = 'Felhasználói levelezés engedélyezése az oldalon keresztül';
$lang['Board_email_form_explain'] = 'A felhasználók email-üzeneteket küldhetnek egymásnak az oldalon keresztül';
$lang['Topics_per_page'] = 'Téma oldalaként';
$lang['Posts_per_page'] = 'Hozzászólások oldalanként';
$lang['Hot_threshold'] = 'Népszerû hozzászólások';
$lang['Default_style'] = 'Alap stílus';
$lang['Override_style'] = 'Felhasználó stílusának felülírása';
$lang['Override_style_explain'] = 'Mindenki csak az alap stílust használhatja';
$lang['Default_language'] = 'Alapbeállítású nyelv';
$lang['Date_format'] = 'Dátum formátum';
$lang['System_timezone'] = 'Rendszer idõzóna';
$lang['Enable_gzip'] = 'GZIP tömörítés bekapcsolása';
$lang['Enable_prune'] = 'Fórum karbantartás bekapcsolása';
$lang['Allow_HTML'] = 'HTML engedélyezése';
$lang['Allow_BBCode'] = 'BBCode engedélyezése';
$lang['Allowed_tags'] = 'Engedélyezett HTML tagek';
$lang['Allowed_tags_explain'] = 'A tageket vesszõvel kell elválasztani';
$lang['Allow_smilies'] = 'Emotikonok engedélyezése';
$lang['Smilies_path'] = 'Emotikonok elérési útvonala';
$lang['Smilies_path_explain'] = 'A phpBB-n belüli elérési út, általában: images/smiles';
$lang['Allow_sig'] = 'Aláírás engedélyezése';
$lang['Max_sig_length'] = 'Aláírás maximális hossza';
$lang['Max_sig_length_explain'] = 'Karakterek maximális száma az aláírásban';
$lang['Allow_name_change'] = 'Felhasználónév cseréjének engedélyezése';

$lang['Avatar_settings'] = 'Avatar beállítások';
$lang['Allow_local'] = 'Avatar galéria bekapcsolása';
$lang['Allow_remote'] = 'Távoli Avatar engedélyezése';
$lang['Allow_remote_explain'] = 'Más weboldalról belinkelt Avatarok';
$lang['Allow_upload'] = 'Avatar feltöltés engedélyezése';
$lang['Max_filesize'] = 'Maximum Avatar képméret';
$lang['Max_filesize_explain'] = 'A feltöltött képekhez, KByte-ben megadva';
$lang['Max_avatar_size'] = 'Maximum Avatar felbontás';
$lang['Max_avatar_size_explain'] = '(Szélesség x Magasság pixelben)';
$lang['Avatar_storage_path'] = 'Avatar tárolásának helye';
$lang['Avatar_storage_path_explain'] = 'A phpBB-n belüli elérési út, általában: images/avatars';
$lang['Avatar_gallery_path'] = 'Avatar galéria helye';
$lang['Avatar_gallery_path_explain'] = 'A phpBB-n belüli elérési út, általában: images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA beállítások';
$lang['COPPA_fax'] = 'COPPA fax-szám';
$lang['COPPA_mail'] = 'COPPA levelezési cím';
$lang['COPPA_mail_explain'] = 'Az a levélcím, ahova a szülõknek a COPPA regisztrációs kérelmeket kell küldeniük';

$lang['Email_settings'] = 'Email beállítások';
$lang['Admin_email'] = 'Az Adminisztrátor emailcíme';
$lang['Email_sig'] = 'Email aláírás';
$lang['Email_sig_explain'] = 'Ez a szöveg lesz, mely a Fórum által a kiküldött levelek végéhez lesz csatolva';
$lang['Use_SMTP'] = 'SMTP szerver használata emailküldéshez';
$lang['Use_SMTP_explain'] = 'Kapcsold be, ha egy külsõ email-szervert akarsz használni';
$lang['SMTP_server'] = 'SMTP szerver címe';
$lang['SMTP_username'] = 'SMTP felhasználónév';
$lang['SMTP_username_explain'] = 'Csak akkor töltsd ki, ha szükséges';
$lang['SMTP_password'] = 'SMTP jelszó';
$lang['SMTP_password_explain'] = 'Csak akkor töltsd ki, ha szükséges';

$lang['Disable_privmsg'] = 'Privát üzenetküldés';
$lang['Inbox_limits'] = 'Üzenetek maximális száma az Érkezett fiókban';
$lang['Sentbox_limits'] = 'Üzenetek maximális száma az Elküldött fiókban';
$lang['Savebox_limits'] = 'Üzenetek maximális száma az Mentés fiókban';

$lang['Cookie_settings'] = 'Cookie beállítása';
$lang['Cookie_settings_explain'] = 'Itt állíthatod be a felhasználók böngészõinek kiküldött cookie-kat. A legtöbb esetben elegendõek az alapbeállítások, így csak óvatosan változtass rajtuk, mert elõfordulhat, hogy a felhasználók nem fognak tudni belépni';
$lang['Cookie_domain'] = 'Cookie domain';
$lang['Cookie_name'] = 'Cookie neve';
$lang['Cookie_path'] = 'Cookie elérési út';
$lang['Cookie_secure'] = 'Cookie biztonság';
$lang['Cookie_secure_explain'] = 'Ha a szerver SSL titkosítással fut, akkor kapcsold be ezt az opciót; különben hagyd kikapcsolva';
$lang['Session_length'] = 'Session hossz [ másodperc ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Regisztráció vizuális megerõsítése';
$lang['Visual_confirm_explain'] = 'A regisztráció alatt a felhasználónak be kell írnia egy automatikusan generált kódot, amivel jóváhagyja a regisztrációt.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Lehetové tesz automatikus belépést';
$lang['Allow_autologin_explain'] = 'Meghatároz vajon felhasználókat lehetõvé tesznek kiválasztani automatikusan amikor látogató a fórumba lép.';
$lang['Autologin_time'] = 'Automata belépés lejárata';
$lang['Autologin_time_explain'] = 'Hogy hosszú egy autologin kulcs van-e érvényes át napokban ha a felhasználó nem látogatja a fedélzetet. Beállított nullának tiltásnak lejárat.';
$lang['Stylesheet_explain'] = 'Filenév CSS stíluslap használatnak eznek téma.';
//
// Forum Management
//
$lang['Forum_admin'] = 'Fórum adminisztráció';
$lang['Forum_admin_explain'] = 'Innen tudsz új fórumot nyitni, törölni, szerkeszteni, átrendezni, kategorizálni és újraszinkronizálni';
$lang['Edit_forum'] = 'Fórum szerkesztése';
$lang['Create_forum'] = 'Új fórum';
$lang['Create_category'] = 'Új kategória';
$lang['Remove'] = 'Eltávolít';
$lang['Action'] = 'Utasítás';
$lang['Update_order'] = 'Frissítési sorrend';
$lang['Config_updated'] = 'A Fórum beállításai sikeresen frissültek!';
$lang['Edit'] = 'Szerkeszt';
$lang['Delete'] = 'Töröl';
$lang['Move_up'] = 'Feljebb';
$lang['Move_down'] = 'Lejjebb';
$lang['Resync'] = 'Szinkronizál';
$lang['No_mode'] = 'Nem lett mód kiválasztva';
$lang['Forum_edit_delete_explain'] = 'Az alábbi oldallal beállíthatod a fórum legfontosabb tulajdonságait. A Fórum és a Felhasználók beállításához használd a baloldali menüt.';

$lang['Move_contents'] = 'Összes tartalom átmozgatása';
$lang['Forum_delete'] = 'Fórum törlése';
$lang['Forum_delete_explain'] = 'Az alábbi oldallal törölhetsz egy fórumot, (vagy kategóriát), megadva, hogy a tartalmazott fórumok (vagy témák) hova kerüljenek át.';

$lang['Status_locked'] = 'Zárt';
$lang['Status_unlocked'] = 'Nyitott';
$lang['Forum_settings'] = 'Általános Fórum beállítások';
$lang['Forum_name'] = 'Fórum neve';
$lang['Forum_desc'] = 'Leírás';
$lang['Forum_status'] = 'Fórum státusz';
$lang['Forum_icon'] = 'Forum icon'; // Forum Icon MOD
$lang['Forum_icon_explain'] = 'e.g. Ha a képed van-e <b>http://yoursite/modules/Forums/images/topics/test.gif</b><br /> akkor szilárd ez mint <b>images/topics/test.gif</b>'; // Forum Icon MOD

$lang['Forum_pruning'] = 'Automatikus karbantartás';

$lang['prune_freq'] = 'Téma korának ellenõrzése';
$lang['prune_days'] = 'Témák keresése, melyekbe nem érkezett hozzászólás';
$lang['Set_prune_data'] = 'Az automatikus karbantartás be van kapcsolva, de ehhez a fórumhoz nincsen megadva a karbantartás gyakorisága. Lépj vissza, és állítsd be.';

$lang['Move_and_Delete'] = 'Átmozgatás és Törlés';

$lang['Delete_all_posts'] = 'Összes hozzászólás törlése';
$lang['Nowhere_to_move'] = 'Sehova sem lehet áthelyezni';

$lang['Edit_Category'] = 'Kategória szerkesztése';
$lang['Edit_Category_explain'] = 'Ezzel a kategória nevét változtathatod meg.';

$lang['Forums_updated'] = 'A Fórum és Kategória beállításai sikeresen frissültek!';

$lang['Must_delete_forums'] = 'Elõbb az összes fórumot törölnöd kell, hogy törölhesd ezt a kategóriát.';

$lang['Click_return_forumadmin'] = 'Kattints %side%s, hogy visszatérj a Fórum beállításaihoz.';
//
// Smiley Management
//
$lang['smiley_title'] = 'Emotikon szerkesztõ';
$lang['smile_desc'] = 'Ezen az oldalon kezelheted az Emotikonokat, melyeket a felhasználók a hozzászólásnál, és a privát üzenetekben használhatnak; hozzáadás, törlés, szerkesztés.';

$lang['smiley_config'] = 'Emotikonok beállítása';
$lang['smiley_code'] = 'Emotikon kód';
$lang['smiley_url'] = 'Emotikon képfile';
$lang['smiley_emot'] = 'Smiley Emotikon';
$lang['smile_add'] = 'Új emotikon hozzáadása';
$lang['Smile'] = 'Smiley';
$lang['Emotion'] = 'Emotikon';

$lang['Select_pak'] = 'Emotikon csomag-file (.pak) kiválasztása';
$lang['replace_existing'] = 'Jelenlegi Emotikonok felülírása';
$lang['keep_existing'] = 'Jelenlegi Emotikonok megtartása';
$lang['smiley_import_inst'] = 'Töltsd fel a megfelelõ könyvtárba az Emotikonokat. Utána a megfelelõ adatok megadásával importálható az Emotikon csomag.';
$lang['smiley_import'] = 'Emotikonok importálása';
$lang['choose_smile_pak'] = 'Emotikon csomag kiválasztása (.pak file)';
$lang['import'] = 'Emotikonok importálása';
$lang['smile_conflicts'] = 'Mi a teendõ probléma esetén?';
$lang['del_existing_smileys'] = 'Jelenleg telepített emotikonok törlése importálás elõtt';
$lang['import_smile_pack'] = 'Emotikon csomag importálása';
$lang['export_smile_pack'] = 'Emotikon csomag exportálása';
$lang['export_smiles'] = 'Az Emotikon csomag exportálásához kattints %sIDE%s, hogy letöltsd a smiles.pak filet. Ha át akarod nevezni, akkor figyelj arra, hogy a .pak kiterjesztés megmaradjon. Utána a .pak filet és az emotikon képeket tömörítsd be egy fileba.';

$lang['smiley_add_success'] = 'Az emotikon sikeresen bekerült a listába!';
$lang['smiley_edit_success'] = 'Az emotikon beállításai sikeresen megváltoztak!';
$lang['smiley_import_success'] = 'Az emotikon-csomag importálása sikeres volt!';
$lang['smiley_del_success'] = 'Az emotikon eltávolítása sikeres volt!';
$lang['Click_return_smileadmin'] = 'Kattints %side%s, hogy visszatérj az Emotikonok beállításaihoz';
//
// User Management
//
$lang['User_admin'] = 'Felhasználói beállítások';
$lang['User_admin_explain'] = 'Ezen az oldalon megadhatod, megváltoztathatod a felhasználók adatait, és néhány általános tulajdonságot állíthatsz be. A jogosultságok kiosztásához használd az Egyéni- és Csoportjogosultság-kezelõ rendszert.';

$lang['Look_up_user'] = 'Felhasználó keresése';

$lang['Admin_user_fail'] = 'A felhasználó profiljának frissítése sikertelen.';
$lang['Admin_user_updated'] = 'A felhasználó profilja sikeresen módosult!';
$lang['Click_return_useradmin'] = 'Kattints %side%s, hogy visszatérj a Felhasználó beállításokhoz';

$lang['User_delete'] = 'Felhasználó törlése';
$lang['User_delete_explain'] = 'Kattints ide, ha tényleg törölni akarod a felhasználót; a törlés után nem lehet visszahozni!';
$lang['User_deleted'] = 'A felhasználó sikeresen törölve lett.';

$lang['User_status'] = 'Aktív felhasználó';
$lang['User_allowpm'] = 'Küldhet Magánüzenetet';
$lang['User_allowavatar'] = 'Beállíthat Avatart';

$lang['Admin_avatar_explain'] = 'Itt nézheted meg, és törölheted a felhasználó Avatarját.';

$lang['User_special'] = 'Egyéb beálíltások';
$lang['User_special_explain'] = 'A felhasználók nem módosíthatják ezeket a beálíltásokat. Itt adhatod meg a felhasználó státuszát, és egyéb beállításait.';
//
// Group Management
//
$lang['Group_administration'] = 'Csoportok beállítása';
$lang['Group_admin_explain'] = 'Ezzel az oldallal kezelni tudod a Csoportokat, törölheted, módosíthatod õket, és újakat készíthetsz. Válaszhatsz Moderátort a csoporthoz, megadhatod, hogy nyílt vagy zárt csoport legyen-e, megadhatod a csoport nevét és leírását.';
$lang['Error_updating_groups'] = 'A frissítés közben hiba történt.';
$lang['Updated_group'] = 'A Csoport sikeresen frissült!';
$lang['Added_new_group'] = 'A Csoport sikeresen elkészült!';
$lang['Deleted_group'] = 'A Csoport sikeresen törölve lett!';
$lang['New_group'] = 'Új csoport';
$lang['Edit_group'] = 'Csoport szerkesztése';
$lang['group_name'] = 'Csoport neve';
$lang['group_description'] = 'Csoport leírása';
$lang['group_moderator'] = 'Csoport moderátor';
$lang['group_status'] = 'Csoport státusz';
$lang['group_open'] = 'Nyitott csoport';
$lang['group_closed'] = 'Zárt csoport';
$lang['group_hidden'] = 'Rejtett csoport';
$lang['group_delete'] = 'Csoport törlése';
$lang['group_delete_check'] = 'Csoport törlése';
$lang['submit_group_changes'] = 'Változások elküldése';
$lang['reset_group_changes'] = 'Változások törlése';
$lang['No_group_name'] = 'Meg kell adnod egy csoportnevet';
$lang['No_group_moderator'] = 'Meg kell adnond a csoportnak egy Moderátort';
$lang['No_group_mode'] = 'Meg kell határoznod, hogy nyitott vagy zárt csoport legyen-e';
$lang['No_group_action'] = 'Nem határoztál meg utasítást';
$lang['delete_group_moderator'] = 'Régi moderátor törlése?';
$lang['delete_moderator_explain'] = 'Ha meg akarod változtatni a csoport Moderátorát, és törölni akarod a régit, akkor jelöld be ezt a négyzetet. Ha nem jelölöd be, akkor a felhasználó sima tag lesz a csoportban.';
$lang['Click_return_groupsadmin'] = 'Kattints %side%s, hogy visszatérj a Csoportok beállításaihoz.';
$lang['Select_group'] = 'Csoport kiválasztása';
$lang['Look_up_group'] = 'Csoport keresése';
//
// Prune Administration
//
$lang['Forum_Prune'] = 'Fórum karbantartás';
$lang['Forum_Prune_explain'] = 'A Fórum karbantartás minden olyan témát automatikusan töröl, ahova a megadott idõn belül nem érkezik hozzászólás. Ha nem adsz meg idõt. akkor az összes téma törlõdik. Ezzel nem lehet törölni azokat a témákat, ahol aktív szavazás van érvényben, vagy azokat, melyek a kiemelt Közlemények kategóriába tartoznak. Ezeket kézzel kell törölnöd.';
$lang['Do_Prune'] = 'Karbantartás indítása';
$lang['All_Forums'] = 'Összes fórum';
$lang['Prune_topics_not_posted'] = 'Témák karbantartása, ahova ennyi ideig nem érkezett új hozzászólás.';
$lang['Topics_pruned'] = 'A témák karbantartása befejezõdtt.';
$lang['Posts_pruned'] = 'A hozzászólások karbantartása befejezõdtt.';
$lang['Prune_success'] = 'A Fórumok karbantartása sikeres volt!';
//
// Word censor
//
$lang['Words_title'] = 'Cenzúra';
$lang['Words_explain'] = 'Ezzel az oldallal olyan szavakat adhatsz meg (szerkeszthetsz, vehetsz el), melyeket automatikusan cenzúráz a fórum. Ezekkel a szavakkal (vagy ilyen szavakat tartalmazó szavakkal) nem regisztrálhatnak új fehasználót. A * jokerkarakter használható, pld. az *lap*-ra az alaplap szó is cenzúrázva lesz, a lap*-ra a lapszám, és a *lap-ra a fõlap szavak is.';
$lang['Word'] = 'Szó';
$lang['Edit_word_censor'] = 'Cenzúra szerkesztése';
$lang['Replacement'] = 'Helyette';
$lang['Add_new_word'] = 'Új szó hozzáadása';
$lang['Update_word'] = 'Cenzúra frissítése';

$lang['Must_enter_word'] = 'Meg kell adnod egy szót és a helyettesítését';
$lang['No_word_selected'] = 'Nem választottál ki szót';

$lang['Word_updated'] = 'A kiválaszott cenzúra sikeresen frissült!';
$lang['Word_added'] = 'Cenzúra sikeresen hozzá lett adva!';
$lang['Word_removed'] = 'A kiválasztott cenzúra sikeresen törölve lett!';

$lang['Click_return_wordadmin'] = 'Kattints %side%s, hogy visszatérj a Cenzúra beállításaihoz';
//
// Mass Email
//
$lang['Mass_email_explain'] = 'A Csoportos levél opcióval egy emailt küldhetsz minden felhasználónak, vagy egy adott csoport összes felhasználójának. Az email az adminisztrátori címre postázódik, és egy titkos másolatot kap az összes felhasználó. Ha sok emberrõl van szó, akkor a levélküldés eltarthat egy darabig, ne szakítsd meg közben. Amennyiben elkészült, akkor az oldal értesít errõl.';
$lang['Compose'] = 'Levélírás';

$lang['Recipients'] = 'Címzett';
$lang['All_users'] = 'Összes felhasználó';

$lang['Email_successfull'] = 'Üzenet elküldve';
$lang['Click_return_massemail'] = 'Kattints %side%s, hogy visszatérj a Csoportos E-mail beállításaihoz';
//
// Ranks admin
//
$lang['Ranks_title'] = 'Rang beállítása';
$lang['Ranks_explain'] = 'Itt állíthatod be a rangokat; hozzáadás, szerkesztés, megtekintés és törlés. Ezenkívül saját rangsort is készíthetsz, melyeket a Felhasználók beállításánál hozzárendelhetsz egyes felhasználókhoz.';

$lang['Add_new_rank'] = 'Új rang hozzáadása';

$lang['Rank_title'] = 'Rang neve';
$lang['Rank_special'] = 'Speciális rang';
$lang['Rank_minimum'] = 'Minimum hozzászólások száma';
$lang['Rank_maximum'] = 'Maximum hozzászólások száma';
$lang['Rank_image'] = 'Rang képének elérési útvonala (relatív elérési út, a phpBB gyökérkönyvtárától)';
$lang['Rank_image_explain'] = 'A rangot reprezentáló kép';

$lang['Must_select_rank'] = 'Ki kell választanod egy rangot';
$lang['No_assigned_rank'] = 'Nem lett speciális rang kiválasztva';

$lang['Rank_updated'] = 'A Rang sikeresen megváltozott!';
$lang['Rank_added'] = 'A Rang sikeresen hozzá lett adva!';
$lang['Rank_removed'] = 'A Rang sikeresen törölve lett!';
$lang['No_update_ranks'] = 'A Rang sikeresen törölve lett, bár a felhasználói azonosítók nem frissültek. Ezt kézzel kell megtenned ezeken az azonosítókon';

$lang['Click_return_rankadmin'] = 'Kattints %side%s hogy visszaérj a Rang beállításaihoz';
// FLAGHACK-start
//
// Flags admin
//
$lang['Flags_title'] = 'Zászló Adminisztráció';
$lang['Flags_explain'] = 'Használó ez forma hozzáadnál, szerkesztenek, nézet és törölnek fellobogóz. Lennél vonatkozva szintén teremtenek szokásos zászlókat amelyikek keresztül tud egy felhasználónak a felhasználón vezetési könnyûség';

$lang['Add_new_flag'] = 'Hozzáadnak új zászlót';

$lang['Flag_name'] = 'Zászló Megnevezel';
$lang['Flag_pic'] = 'Kép';
$lang['Flag_image'] = 'Zászló Kép (a  images/flags/ alkönyvtárban)';
$lang['Flag_image_explain'] = 'Használat ez meghatározni a zászlóval kapcsolódott egy kis képet';

$lang['Must_select_flag'] = 'Kiválasztanál egy zászlót';
$lang['Flag_updated'] = 'A zászlót sikeresen frissítettek';
$lang['Flag_added'] = 'A zászlót sikeresen hozzáadtak';
$lang['Flag_removed'] = 'A zászlót sikeresen töröltek';
$lang['No_update_flags'] = 'A zászlót sikeresen töröltek. Azonban, ez használó felhasználói fiókokat zászló nem frissítettek. Fogsz kelleni újra beállítani manuálisan a zászlót ezeken a számlákon';

$lang['Flag_confirm'] = 'Zászló Törlés' ;
$lang['Confirm_delete_flag'] = 'Valóban kívánja eltávolítani a kiválasztott zászlót?' ;

$lang['Click_return_flagadmin'] = 'Kattints %sIde%s visszatérés Zászló Adminisztrációba';
// FLAGHACK-end

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Nem engedélyezett felhasználónevek beállítása';
$lang['Disallow_explain'] = 'Itt állíthatod be azokat a felhasználóneveket, melyeket nem regisztrálhanak. Használható a * jokerkarakter. Nem adhatsz meg olyan szót, amelyet már használ valaki, ehhez elõször ki kell törölnöd a felhasználót, és utána tilthatod le.';

$lang['Delete_disallow'] = 'Törlés';
$lang['Delete_disallow_title'] = 'Tiltott felhasználónév törlése';
$lang['Delete_disallow_explain'] = 'Levehetsz a listáról egy tiltott felhasználónevet. Jelöld ki és kattints az Törlés gombra';

$lang['Add_disallow'] = 'Hozzáadás';
$lang['Add_disallow_title'] = 'Tiltott felhasználónév hozzáadása';
$lang['Add_disallow_explain'] = 'Használhatsz * jokerkaraktert';

$lang['No_disallowed'] = 'Nincsenek letiltott felhasználónevek';

$lang['Disallowed_deleted'] = 'A letiltott felhasználónév sikeresen törölve lett';
$lang['Disallow_successful'] = 'A letiltott felhasználónév sikeresen hozzá lett adva';
$lang['Disallowed_already'] = 'A beírt felhasználónevet nem lehet letiltani; vagy már létezik a listában, vagy létezik a cenzúrázott szavak között, esetleg van ilyen nevû felhasználó.';

$lang['Click_return_disallowadmin'] = 'Kattints %side%s, hogy visszatérj a Nem engedélyezett Felhasználónevek beállításaihoz';

$lang['Install'] = 'Telepités';
$lang['Upgrade'] = 'Frissítés';

$lang['Install_No_PCRE'] = 'phpBB2 tartalmazza a Perl-kompatibilis Modulokat aPHP számára, PHP konfigurálása\beállítása!';

$lang['theme'] = 'Téma';

/*****[BEGIN]******************************************
 [ Mod:    Force Word Wrapping - Configurator v1.0.16 ]
 ******************************************************/
$lang['wrap_title'] = 'Szavak tördelése';
$lang['wrap_enable'] = 'Szavak tördelése';
$lang['wrap_min'] = 'Minimum képernyõ szélesség';
$lang['wrap_max'] = 'Maximum képernyõ szélesség';
$lang['wrap_def'] = 'Alap képernyõ szélesség';
$lang['wrap_units'] = 'Karakter';
/*****[END]********************************************
 [ Mod:    Force Word Wrapping - Configurator v1.0.16 ]
 ******************************************************/

//
// Version Check
//
$lang['Version_up_to_date'] = 'A phpBB-d a legfrissebb, nem érhetõ el újabb verzió.';
$lang['Version_not_up_to_date'] = 'A phpBB-d <b>nem</b> a legfrissebb verziójú! A frissítés elérhetõ a <a href="http://www.phpbb.com/downloads.php" target="_phpBB">phpBB</a>, vagy a <a href="http://download.phpbb.hu" target="_hunphpBB">Magyar phpBB közösség</a> oldalán.';
$lang['Latest_version_info'] = 'A phpBB legfrissebb elérhetõ verziója a <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'Jelenlegi fórumod verziója: <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Nem sikerült csatlakozni a phpBB szerverhez, a következõ hiba lépett fel:<br />%s';
$lang['Socket_functions_disabled'] = 'A konnektor funkciók nem engedélyezettek.';
$lang['Mailing_list_subscribe_reminder'] = 'Hogy mindig azonnal értesülj a phpBB frissítéseirõl, <a href="http://www.phpbb.com/support/" target="_maillist">Iratkozz fel a hírlevelünkre</a>.';
$lang['Version_information'] = 'Verzió információ';

/*****[BEGIN]******************************************
 [ Mod:    Advance Admin Index Stats           v1.0.0 ]
 ******************************************************/
$lang['Board_statistic'] = 'Oldal statisztika';
$lang['Database_statistic'] = 'Adatbázis statisztika';
$lang['Version_info'] = 'Verzió információ';
$lang['Thereof_deactivated_users'] = 'Nem aktív tagok száma';
$lang['Thereof_Moderators'] = 'Munkatársak száma';
$lang['Thereof_Administrators'] = 'Adminisztrátorok száma';
$lang['Deactivated_Users'] = 'Aktiválásra várók száma';
$lang['Users_with_Admin_Privileges'] = 'Elõjoggal rendelkezõ tagok';
$lang['Users_with_Mod_Privileges'] = 'Elõjoggal rendelkezõ munkatársak';
$lang['DB_size'] = 'Adatbázis nagysága';
$lang['Version_of_board'] = 'Verzió <a href="http://www.phpbb.com">phpbb</a>';
$lang['Version_of_PHP'] = 'Verzió <a href="http://www.php.net/">PHP</a>';
$lang['Version_of_MySQL'] = 'Verzió <a href="http://www.mysql.com/">MySQL</a>';
/*****[END]********************************************
 [ Mod:    Advance Admin Index Stats           v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Super Quick Reply                  v1.3.2 ]
 ******************************************************/
$lang['SQR_settings'] = 'Gyorsválasz Beállítása';
$lang['Allow_quick_reply'] = 'Gyorsválasz engedélyezése';
$lang['Anonymous_show_SQR'] = 'Gyorsválasz mutatása vendég részére';
$lang['Anonymous_SQR_mode'] = 'Gyorsválasz vendég módja';
$lang['Anonymous_open_SQR'] = 'Gyorsválasz megnyitása vendégek számára';
/*****[END]********************************************
 [ Mod:     Super Quick Reply                  v1.3.2 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:       Admin Userlist                      v2.0.2 ]
 ******************************************************/
$lang['Userlist'] = 'Felhasználó lista';
$lang['Userlist_description'] = 'Teljes lista a felhsználókról, külöbözõ változtatások alkalmazhatók adataikban';

$lang['Add_group'] = 'Felvétel egy csoportba';
$lang['Add_group_explain'] = 'Melyik csoportba kívánod felvenni';

$lang['Open_close'] = 'Nyit/Zár';
$lang['Active'] = 'Aktív';
$lang['Group'] = 'Csoport(ok)';
$lang['Rank'] = 'Rang';
$lang['Last_activity'] = 'Utolsó aktivítás';
$lang['Never'] = 'Soha';
$lang['User_manage'] = 'Adat változtatás';
$lang['Find_all_posts'] = 'Hozzászólásainak keresése';

$lang['Select_one'] = 'Válassz';
$lang['Ban'] = 'Tiltva';
$lang['Activate_deactivate'] = 'Activál/Inactívál';

$lang['User_id'] = 'Felhasználó id';
$lang['User_level'] = 'Felhasználó Szint';
$lang['Ascending'] = 'Növekvõ';
$lang['Descending'] = 'Csökkenõ';
$lang['Show'] = 'Mutat';
$lang['All'] = 'Mindegyik';

$lang['Member'] = 'Tag';
$lang['Pending'] = 'Függõ';

$lang['Confirm_user_ban'] = 'Biztosan bannolod a kiválasztott felhasználót/felhasználókat?';
$lang['Confirm_user_deleted'] = 'Biztosan törlöd kiválasztott felhasználót/felhasználókat?';

$lang['User_status_updated'] = 'Felhasználó(k) állapota frissítve!';
$lang['User_banned_successfully'] = 'Felhasználó(k) bannolva!';
$lang['User_deleted_successfully'] = 'Felhasználó(k) törölve!';
$lang['User_add_group_successfully'] = 'Felhasználó(k) hozzáadva a csoporthoz!';
$lang['Cancel'] = 'Mégsem';
$lang['Click_return_userlist'] = 'Kattints %side%s, hogy visszatérj a Felhasználó listához';
/*****[END]********************************************
 [ Mod:       Admin Userlist                      v2.0.2 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Global Announcements               v1.2.8 ]
 ******************************************************/
$lang['Globalannounce'] ='Globális közlemény';
/*****[END]********************************************
 [ Mod:     Global Announcements               v1.2.8 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    PM Quick Reply                      v1.3.5 ]
 ******************************************************/
$lang['ropm_quick_reply'] = 'Privát Üzenet gyors válasz';
$lang['enable_ropm_quick_reply'] = "Privát Üzenet, gyors válasz engedélyezése";
$lang['ropm_quick_reply_bbc'] = "BBkód-gombok engedélyezése";
$lang['ropm_quick_reply_smilies'] = "Smiley-k száma";
$lang['ropm_quick_reply_smilies_info'] = "Írj 0-t, ha nem akarod a Smiley-t megjeleníteni.";
/*****[END]********************************************
 [ Mod:    PM Quick Reply                      v1.3.5 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Quick Search                       v3.0.1 ]
 ******************************************************/
$lang['Must_select_search'] = 'Válaszd a gyors keresést';
$lang['Search_title'] = 'Gyors keresés';
$lang['Search_explain'] = 'Itt hozzá tudsz adni, szerkeszteni, és választani a gyors keresések közül.';
$lang['Search_name'] = 'Keresés neve';
$lang['Search_name_explain'] = 'Keresés neve a listában. Például: <b>Yahoo / Google</b>';
$lang['Search_url'] = 'URL Keresése';
$lang['Search_url_explain'] = 'Az URL feldolgozása. Például:<br /><span style="color:red">Jegyzet: A kereséshez további adatok kellenek <b>AFTER</b> a</span> <b>Kulcs</b><span style="color:red">, Írj be további adatot! Felvétel\a kulcs szavakhoz</span> <b>Kulcs szó</b> <span style="color:red">vagy hagyd üressen.</span><br /><br />- <span style="color:blue">http://search.yahoo.com/search?ei=UTF-8&fr=sfp&p=</span><b>Keyword</b><br />- <span style="color:blue">http://www.google.com/search?hl=en&ie=UTF-8&oe=UTF-8&q=</span><b>Keyword</b><br />- <span style="color:blue">http://www.alltheweb.com/search?cat=web&cs=utf8&q=</span><b>Keyword</b><span style="color:blue">&rys=0&itag=crv&_sb_lang=pref</span><br />';
$lang['Must_enter_search_name'] = 'Írd be a keresés nevét';
$lang['Search_updated'] = 'A keresés hozzáadva';
$lang['Search_added'] = 'A keresés hozzáadva';
$lang['Click_return_addsearchadmin'] = 'Kattints %side%s visszatérés a keresõ beállításokhozl';
// a href, /a tags
$lang['Search_removed'] = 'A keresés törölve';
$lang['Add_new_search'] = 'Ûj keresés hozzáadása';
// Quick Search Enable Setting for Board Configuration Panel
$lang['Quick_search_enable'] = 'Gyors keresés engedélyezése';
$lang['Quick_search_enable_explain'] = 'Gyors keresés mutatása.';
/*****[END]********************************************
 [ Mod:     Quick Search                       v3.0.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Advance Signature Divider Control  v1.0.0 ]
 ******************************************************/
$lang['sig_title']   = 'Speciális aláírás-elválasztó beállítás';
$lang['sig_divider'] = 'Jelenlegi aláírás-elválasztó';
$lang['sig_explain'] = "Beállíthatod az elválasztót a felhasználó hozzászólása és aláírása között";
/*****[END]********************************************
 [ Mod:     Advance Signature Divider Control  v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Default avatar                     v1.1.0 ]
 ******************************************************/
$lang['Default_avatar'] = 'Avatar beálítása';
$lang['Default_avatar_explain'] = 'Itt választhatsz képet\válassz  avatart. Alapértelmezett avatar felhasználók és vendégek részére, ez fog megjelenni a regisztrált tagoknak, vendégek részére nem.<br />Az elérése \'modules/Forums/avatars/gallery\'';
$lang['Default_avatar_guests'] = 'Vendég';
$lang['Default_avatar_users'] = 'Felhasználó';
$lang['Default_avatar_both'] = 'Mindkettõ';
$lang['Default_avatar_none'] = 'Nincs';
/*****[END]********************************************
 [ Mod:     Default avatar                     v1.1.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Disable Board Admin Override       v0.1.1 ]
 ******************************************************/
$lang['Board_disable_adminview'] = 'Adminisztrátor beléphet ha zárolás van';
$lang['Board_disable_adminview_explain'] = 'Az összes adminisztrátor beléphet ha zárolás van.';
/*****[END]********************************************
 [ Mod:     Disable Board Admin Override       v0.1.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:  URL Check                           v1.0.0 ]
 ******************************************************/
$lang['URL_server_error'] = 'A beírt URL nem megfelelõ (%s) a szerver hibaüzenetet írt, az üzenet (%s)';
$lang['URL_error_confirm'] = 'Mented ezt a beállítást?';
/*****[END]********************************************
 [ Other:  URL Check                           v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     PM threshold                       v1.0.0 ]
 ******************************************************/
$lang['pm_allow_threshold'] = 'Minden Privát Üzenet értéke';
$lang['pm_allow_threshold_explain'] = 'Minimális Privát Üzenet küldése.';
/*****[END]********************************************
 [ Mod:     PM threshold                       v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Limit smilies per post              v1.0.2 ]
 ******************************************************/
$lang['Max_smilies'] = 'Smiley-k maximális száma hozzászólásonként';
/*****[END]********************************************
 [ Mod:    Limit smilies per post              v1.0.2 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Other:  Cookie Check                        v1.0.0 ]
 ******************************************************/
$lang['Cookie_server_error'] = 'A Cookie elérési útvonala (%s) nem megfelelõ, a szerver üzeni (%s)';
$lang['Cookie_error_confirm'] = 'Mented ezt a beállítást?';
$lang['Cookie_name_error'] = 'A Cookie neve (%s) lehet a probléma. <br/> Tanácsos megváltoztatni %s';
/*****[END]********************************************
 [ Other:  Cookie Check                        v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Log Moderator Actions              v1.1.6 ]
 ******************************************************/
$lang['File_not_deleted'] = 'Még nem lett törölve az install_tables.php : addig nem tudod betölteni.';
$lang['Log_action_title'] = 'Napló akciók';
$lang['Log_action_explain'] = 'Itt tudod megnézni a munkatárs/adminisztrátor akciókat';
$lang['Choose_sort_method'] = 'Válassz rendezett rendszert';
$lang['Order'] = 'Vagy';
$lang['Go'] = 'Gyerünk';
$lang['Id_log'] = 'Napló ID';
$lang['Choose_log'] = 'Napló választása';
$lang['Delete'] = 'Törlés';
$lang['Action'] = 'Akció';
$lang['Topic'] = 'Témák';
$lang['Done_by'] = 'Készitette';
$lang['User_ip'] = 'Felhasználó IP';
$lang['Select_all'] = 'Kijelül mindet';
$lang['Unselect_all'] = 'Kijelölést megszüntet';
$lang['Date'] = 'Dátum';
$lang['See_topic'] = 'Üzenetek olvasása';
$lang['Log_delete'] = 'A napló törölve.';
$lang['Click_return_admin_log'] = 'Kattints %sIde%s vissza az akciókhoz';
$lang['Log_Config_updated'] = 'Gratulálunk a napló Akció MOD sikerült';
$lang['Click_return_admin_log_config'] = 'Kattints %sIde%s vissza az akció MOD beállításához';
$lang['Log_Config'] = 'Napló beállítása';
$lang['Log_Config_explain'] = 'Itt tudod beállíttani a napló MOD ot.';
$lang['General_Config_Log'] = 'Álltílános napló beállítások MOD';
$lang['Allow_all_admin'] = 'Minden admin megnézheti ?';
$lang['Allow_all_admin_explain'] = 'Ebben a beállításban csak a GOD admin nézheti meg';
$lang['Admin_not_authorized'] = 'Elnézést te\'nem vagy jogosult az oldal megtekintéséhez. Csak az admin bele eggyezésével.';
$lang['Add_username_admin_explain'] = 'Válaszd ki az Admin naplót';
$lang['Delete_username_admin_explain'] = 'Válaszd ki az Admin nevét\nem nézheti meg a naplót';
$lang['No_other_admins'] = 'Más adminok nem változtathatnak';
$lang['No_admins_authorized'] = 'Nincs több regisztrált admin';
$lang['Add_Admin_Username'] = 'Válassz nevet a hozzáadáshoz';
$lang['Delete_Admin_Username'] = 'Válassz nevet a törléshez';
$lang['No_admins_allow'] = 'Többi admin nem nézheti meg a naplót';
$lang['No_admins_disallow'] = 'Ha nem vagy admin, elutasitva a napló megtekintése';
$lang['Admins_add_success'] = 'Admin hozzáadva a listához';
$lang['Admins_del_success'] = 'Admi törölve a litáról';
$lang['Prune_success'] = 'A napló törölve';
$lang['Prune_of_logs'] = 'Napló törlése';
$lang['Prune'] = 'Napló törlése';
$lang['Prune_!'] = 'Törlés !';
$lang['Prune_explain'] = 'Írd be a nap számát amit törölni akarsz. 0 = minden napló';
/*****[END]********************************************
 [ Mod:     Log Moderator Actions              v1.1.6 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:   At a Glance Option                   v1.0.0 ]
 ******************************************************/
$lang['glance_title'] = 'További beállítások';
$lang['glance_override_title'] = 'Beállított adatok megsemmísítése';
$lang['glance_news_explain'] = 'Írd be a Fórum számát a megjelenítéshez<br /><small>írj 0 és nem jelenik meg. Megjelenitett Fórum , (1,2,3).</small>';
$lang['glance_num_news_explain'] = 'Írd be a cikk számát a megjelenítéshez.<br /><small>Írj 0 és nem jelenik meg.</small>';
$lang['glance_num_explain'] = 'Legújabb témák megjelenitése';
$lang['glance_ignore_forums_explain'] = 'Írd be a Fórum számát amit a témáknál ne vegyen figyelembe.<br /><small>jelenitett Fórum , (1,2,3). Hagyd üressen, és minden megjelenik.</small>';
$lang['glance_table_width_explain'] = 'Blokk szélessége. (Alap : 100%)';
$lang['glance_auth_read_explain'] = 'Téma mutatása csak olvasásra?';
$lang['glance_topic_length_explain'] = 'Karakterek számának megjelenítése.<br /><small>Írj 0 mindet mutatja.</small>';
/*****[END]********************************************
 [ Mod:   At a Glance Option                   v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Online/Offline/Hidden               v2.2.6 ]
 ******************************************************/
$lang['Online_time'] = 'Eltöltött idõ';
$lang['Online_time_explain'] = 'Milyen idõközönként frissítsen (szám) (ne legyen kissebb 60).';
$lang['Online_setting'] = 'Online beállítás';
$lang['Online_color'] = 'Szinek bekapcsolása';
$lang['Offline_color'] = 'Szinek kikapcsolása';
$lang['Hidden_color'] = 'Ne mutassa a szöveg szineit';
/*****[END]********************************************
 [ Mod:    Online/Offline/Hidden               v2.2.6 ]
 ******************************************************/

 /*****[BEGIN]******************************************
 [ Mod:   Show Users Today Toggle              v1.0.0 ]
 ******************************************************/
 $lang['show_users_today'] = 'Tagok kijelzése<br><small>Jegyzet: Ne alkalmazd nagy terjedelmû oldalaknál</small>';
/*****[END]********************************************
 [ Mod:   Show Users Today Toggle              v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Group Colors and Ranks             v1.0.0 ]
 ******************************************************/
$lang['group_color'] = 'Szín kiválasztása a csoporthoz.';
$lang['group_rank'] = 'Besorolás kiválasztása a csoporthoz.';
/*****[BEGIN]******************************************
 [ Mod:     Group Colors and Ranks             v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Customized Topic Status            v1.0.0 ]
 ******************************************************/
$lang['topic_explain'] = 'Megtudod nyitni a Fórumban a HTML beállításokat, további stilusokat a témáknál';
$lang['locked'] = 'Zárolt téma';
$lang['sticky'] = 'Fontos';
$lang['global'] = 'Általános közlemény';
$lang['announce'] = 'Közlemény';
$lang['current'] = 'Aktuális';
$lang['current_explain'] = 'Ezek a beállítások jelennek meg a Fórumban.';
$lang['tag'] = 'Nézet változtatása (Ne nyiss quotes itt, html. Ex: &lt;font color=#FFFFFF&gt;Címe&lt;/font&gt;)';
$lang['topic_title'] = 'Téma címe';
$lang['moved'] = 'Átmozgatott';
$lang['topic_view_settings'] = 'Témák beállítása';
/*****[END]********************************************
 [ Mod:     Customized Topic Status            v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Initial Usergroup                  v1.0.1 ]
 ******************************************************/
$lang['Initial_user_group'] = 'Kezdõ felhasználói csoport';
$lang['Initial_user_group_explain'] = 'Regisztrálásnál ebbe a csoportba tartoznak az új tagok';
/*****[END]********************************************
 [ Mod:     Initial Usergroup                  v1.0.1 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Hide Images and Links              v1.0.0 ]
 ******************************************************/
$lang['hide_images'] = 'Kép elrejtése vendégek elöl';
$lang['hide_links'] = 'Link elrejtése vendégek elöl';
$lang['hide_emails'] = 'Email-link elrejtése vendégek elöl';
/*****[END]********************************************
 [ Mod:     Hide Images and Links              v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Admin DHTML Menu                   v1.0.0 ]
 ******************************************************/
$lang['dhtml_menu'] = 'DHTML megnyitása a Fórum beállításoknál.<br /><small>További beállítások</small>';
/*****[END]********************************************
 [ Mod:     Admin DHTML Menu                   v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Hide Images                         v1.0.0 ]
 ******************************************************/
$lang['user_hide_images'] = 'Képek elrejtése a Fórumban';
/*****[END]********************************************
 [ Mod:    Hide Images                         v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Smilies in Topic Titles Toggle     v1.0.0 ]
 ******************************************************/
$lang['smilies_in_titles'] = 'Smilies megjelenítése a témáknál';
/*****[END]********************************************
 [ Mod:     Smilies in Topic Titles Toggle     v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:   Log Actions Mod - Topic View         v2.0.0 ]
 ******************************************************/
$lang['logs_view_level'][0] = 'Adminisztrátor, Munkatárs, Felhasználó, Vendég';
$lang['logs_view_level'][1] = 'Adminisztrátor, Munkatárs, Felhasználó';
$lang['logs_view_level'][3] = 'Adminisztrátor, Munkatárs';
$lang['logs_view_level'][2] = 'Adminisztrátor';
$lang['show_edited_logs'] = 'Témák naplója';
$lang['show_locked_logs'] = 'Zárolt témák naplója';
$lang['show_unlocked_logs'] = 'Nem zárolt témák naplója';
$lang['show_moved_logs'] = 'Átmozgatott témák naplója';
$lang['show_splitted_logs'] = 'Szétválasztott témák naplója';
$lang['allow_logs_view'] = 'Naplók mutatása';
/*****[END]********************************************
 [ Mod:   Log Actions Mod - Topic View         v2.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:   Resize Posted Images                 v2.4.5 ]
 ******************************************************/
$lang['image_resize_width'] = 'Kép szélessége';
$lang['image_resize_height'] = 'Kép magassága';
/*****[END]********************************************
 [ Mod:   Resize Posted Images                 v2.4.5 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:     Forum Admin Style Selection        v1.0.0 ]
 ******************************************************/
$lang['admin_style'] = 'Oldal téma kiválasztása\a fórom adminisztrációhoz';
/*****[END]********************************************
 [ Mod:     Forum Admin Style Selection        v1.0.0 ]
 ******************************************************/

/*****[BEGIN]******************************************
 [ Mod:    Admin IP Lock                       v2.0.1 ]
 ******************************************************/
$lang['ADMIN_IP_LOCK'] = 'Admin IP Zárolás';
$lang['ADMIN_IP_LOCK_OFF'] = 'Kikapcsolva';
$lang['ADMIN_IP_LOCK_ON'] = 'Engedélyez';
/*****[END]********************************************
 [ Mod:    Admin IP Lock                       v2.0.1 ]
 ******************************************************/
/*****[BEGIN]******************************************
 [ Mod:    Edit User Post Count                v1.0.0 ]
 *****************************************************/
$lang['user_posts'] = 'További levelek';
/*****[END]********************************************
 [ Mod:    Edit User Post Count                v1.0.0 ]
 *****************************************************/

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Engedélyezett belépési kísérletek száma';
$lang['Max_login_attempts_explain'] = 'Legfeljebb ennyiszer próbálkozhat belépni a felhasználó.';
$lang['Login_reset_time'] = 'Belépés zárolásának ideje';
$lang['Login_reset_time_explain'] = 'Ennyi percet kell várnia a felhasználónak, hogy beléphessen, miután túllépte az engedélyezett belépési kísérletek számát.';

/*****[BEGIN]******************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
$lang['sotw_desc'] = 'A Hét Aláirása, leirása';
$lang['sotw_desc_explain'] = 'Rövid leirás\'A Hét Aláirása';
$lang['sotw_img'] = 'Kép elérése';
$lang['sotw_img_explain'] = 'Út a képnek egyik a fórumra vonatkozólag alkönyvtár vagy egy teljes út kapcsol távoli helyet.';
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
$lang['Reputation'] = 'Hírnév';
$lang['Reputation_Config_Title'] = 'Hírnév Rendszer Konfiguráció';
$lang['Reputation_Config_Explain'] = 'Itt beállítanád a választásokat Felhasználóknak Hírnév Rendszer.';
$lang['Rep_config_updated'] = 'Hírnév Rendszer konfiguráció frissített';
$lang['Click_return_rep_config'] = '%sVisszatérnek Hírnévnek Rendszer konfiguráció%s';
$lang['Disable_rep'] = 'Tiltás Hírnév Rendszer';
$lang['Graphic_version'] = 'Grafikai változat';
$lang['Show_stats_to_mods'] = 'Bemutató adott pontok a stats egyetlen ügyintézoknek/közvetítok';
$lang['PM_notify'] = 'Bejelentenek felhasználókat közvetlen miniszterelnök amikor kap új hírnevet pontok';
$lang['Posts_to_earn'] = 'Érnek postákból elnyernek 1 hírnevet pont (0  tiltásnak)';
$lang['Days_to_earn'] = 'Érnek napokból fórumon elnyernek 1 hírnevet pont (0  tiltásnak)';
$lang['Flood_control_time'] = 'Percek minimális mennyisége közt hírnév adások ugyanazzal felhasználóval (nem használat admins és mods)';
$lang['Medal1_to_earn'] = 'Afelmászik hírnévbol pontok elnyerni az 1. méretet érem';
$lang['Medal2_to_earn'] = 'felmászik hírnévbol pontok elnyerni az 2. méretet érem';
$lang['Medal3_to_earn'] = 'felmászik hírnévbol pontok elnyerni az 3. méretet érem';
$lang['Medal4_to_earn'] = 'felmászik hírnévbol pontok elnyerni az 4. méretet érem';
$lang['Given_rep_to_earn'] = 'Érnek adott hírnévbol elnyernek 1 hírnevet pont (0  tiltásnak)';
$lang['Repsum_limit'] = 'Korláta adó hírnév mutat egy felhasználónak (0  nem korlátok)';
$lang['Default_amount'] = 'Fordítják az egyszeru változatot kinyitva és készlet az alapértelmezés érsz minden adó ez számlálsz (0  tiltásnak)';
/*****[END]********************************************
 [ Mod:     Users Reputations System           v1.0.0 ]
 ******************************************************/
 
$lang['Events_Forum'] = 'Lehetové tesznek naptári eseményeket';

$lang['Blog_admin'] = 'Weblog Admin';
$lang['Action_choices'] = 'Tevékenység Választások';
$lang['Mood_choices'] = 'Hangulat Választások';
$lang['Templates'] = 'Weblog Sablonok';
$lang['Weblog_tools'] = 'Eszközök & Vezetés';

$lang['Group_allow_weblogs'] = 'Kiadás Csoportos Tagok Teremtesz egy Weblog';

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
$lang['ad_managment']  = 'Reklám Vezetés';
$lang['inline_ad_config']  = 'Vonalban Reklám Konfiguráció';
$lang['inline_ads']  = 'Vonalban Reklámok';
$lang['ad_code_about']  = 'Ez az oldal listák jelenlegi reklámok.  Szerkeszthetsz, törlés vagy hozzáadsz új reklámokat itt.';
$lang['Click_return_firstpost'] = 'Click %sHere%s to return to Inline Ad Configuration';
$lang['Click_return_inline_code'] = 'Kattints %sIde%s visszatérésnek felé vonalban Reklám Kód Konfiguráció';
$lang['ad_after_post'] = 'Megjelenítés Reklám Után x betu Feladsz';
$lang['ad_every_post'] = 'Megjelenítés Reklám Minden x betu Feladsz';
$lang['ad_display'] = 'Megjelenítés Reklámok Felé';
$lang['ad_all'] = 'Mind';
$lang['ad_reg'] = 'Regisztrált Felhasználókat';
$lang['ad_guest'] = 'Vendégek';
$lang['ad_exclude'] = 'Kizárják Ezeket a Csoportokat (kiválaszthatsz több csoportokat)';
$lang['ad_forums'] = 'Kizárják Ezeket a Fórumokat (kiválaszthatsz multi- fórumok)';
$lang['ad_code'] = 'Reklám Kód';
$lang['ad_style'] = 'Megjelenítés Stílus';
$lang['ad_new_style'] = 'Reklám úgy néz ki mint egy különleges felhasználót posta';
$lang['ad_old_style'] = 'Reklám beleesik vonalaznak a témával';
$lang['ad_post_threshold'] = 'Rendelkezik nem mutat-e ha felhasználó több mint x betu felad (Távoznak fehérítenek tiltásnak)';
$lang['ad_add']  = 'Hozzáadnak Új Reklámot';
$lang['ad_name']  = 'Rövid név felismerni reklámot';
$lang['exclude_none']  = 'Nem zárnak ki Egyik sem';
/*****[END]*******************************************
[ Mod: Inline Banner Ad                       v1.2.3 ]
******************************************************/
/*****[BEGIN]******************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
$lang['Birthdays'] = 'Születésnapok';
$lang['bday_show'] = 'Születésnapi Panel Láthatóság';
$lang['Unconditional'] = 'Feltétlen';
$lang['Conditional'] = 'Feltételes';
$lang['bday_show_explain'] = 'Meghatároz vajon vagy nem a Születésnapi Panel a fo Indexen kell lennie látható az eseményben ami nincsenek születésnapokat vagy feljövo születésnapok (feltétlen = igen, feltételes = nem)';
$lang['bday_require'] = 'Megkövetelnek Születési idopontot';
$lang['bday_require_explain'] = 'Születési akarat az évét csak megkövetelnének ha a "Megkövetelnek Év "választást kiválasztanak';
$lang['bday_year'] = 'Megkövetelnek Évet';
$lang['bday_year_explain'] = 'Amikor ez választást kiválasztanak, felhasználók megkísérelo nyújtani egy születési idopontot fognak kelleni szintén nyújtani születés egy évét.';
$lang['bday_lock'] = 'Helytelenít Születési idopont Változtatások';
$lang['bday_lock_explain'] = 'Amint beírt, a születési idopontot nem változnának, újra.  Legalább amikor ez választást kiválasztanak.';
$lang['bday_lookahead'] = 'Száma Napok Elorenézni';
$lang['bday_lookahead_explain'] = 'Hatással van a Születésnapi Panelre a fo Indexen.  Beíró 1 fog tilteni Születésnap Elorenézel';
$lang['bday_age_range'] = 'Engedheto Kor Sor (években)';
/*****[END]********************************************
 [ Mod:     Birthdays                          v2.0.0 ]
 ******************************************************/
 /*****[BEGIN]******************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
$lang['sotw_desc'] = 'SOTW leírás';
$lang['sotw_desc_explain'] = 'Kis leírás leírni ezet hét SOTW';
$lang['sotw_img'] = 'Út SOTW kép';
$lang['sotw_img_explain'] = 'Út a képnek egyik a fórumra vonatkozólag alkönyvtár vagy egy teljes út kapcsol távoli helyet.';
/*****[END]********************************************
 [ Mod:    Signature Of The Week               v1.0.4 ]
 ******************************************************/
 /*****[BEGIN]******************************************
 [ Mod:     Advanced Topic Types               v1.0.1 ]
 ******************************************************/
$lang['admin_topic_type'] = 'Téma Típus Admin';
$lang['Topic_type_gestion'] = 'Téma típusok vezetés';
$lang['Topic_type_gestion_explain'] = 'Ez a tulajdonság lehetové tesz hozzáadni témát típusok.';
$lang['Topic_type_name'] = 'Téma típus megnevezel';
$lang['Color'] = 'Téma típus szín';
$lang['Topic_type_order'] = 'Téma típusok rendelnek';
$lang['already_first'] = 'Téma típus van-e már eloször';
$lang['already_last'] = 'Téma típus tartasz már';
$lang['Click_return_admintopictype'] = 'Kattints %sIde%s vissza az adminisztrációba';
$lang['tt_updated'] = 'Téma típust sikeresen frissítettek';
$lang['tt_added'] = 'Téma típust sikeresen hozzáadtak';
$lang['tt_Deleted'] = 'Téma típust sikeres töröltek';
$lang['Add_topic_type'] = 'Hozzáadnak témát típus';
$lang['topic_type_active'] = 'Tett felül';
$lang['active_explain'] = 'Választanál ha akarsz tevésnek felül a posták ezzel téma begépelsz viewforum. Ha tekintenének nem választanak, téma típus fogsz mint egy normális postát.';
$lang['topic_type_folder'] = 'Téma típus kép (phpBB út)';
$lang['folder_explain'] = 'Ha nemet képet mutatnának kapcsolódnak, egy alapértelmezés ikon akarat';
$lang['edit_topic_type'] = 'Szerkesztés téma gépelsz';
$lang['edit_topic_type_explain'] = 'Te doboz itt módosítás az információk a téma gépel';
$lang['Not_active'] = 'Nem tevés felül';
$lang['Actual_color'] = 'Aktuális szín: ';
$lang['Change_color'] = 'Pénzváltó szín';
$lang['tt_Announce'] = 'Bejelentenek';
$lang['Global'] = 'Globális Bejelentenek';
$lang['topic_type_folder_new'] = 'Téma típus kép egy új postának';
$lang['folder_new_explain'] = 'Ez ikont fognak mutatni amikor egy új üzenetet feladnak';
/*****[END]********************************************
 [ Mod:     Advanced Topic Types               v1.0.1 ]
 ******************************************************/
// Welcome Panel On Index MOD - START
$lang['Welcome_Panel'] = 'Üdvözlet Panel';
$lang['Welcome_Panel_explain'] = 'A forma akarat alatt figyelembe veszlek téged szokásossá tennie mind a beállításot Üdvözlet Panel Indexen.';
$lang['Suggested_Topics'] = 'Javasolt Témákat';
$lang['Suggested_Topics_explain'] = 'Kiválasztanak témát javaslat jelleg vágytál:';
$lang['Do_not_suggest'] = 'Nem javasol bármilyet témát';
$lang['Suggest_faq'] = 'Javasolják ez az GYIK';
$lang['Suggest_topic_from'] = 'Javasolnak egy téma fogva ';
$lang['Suggest_specific'] = 'Javasolnak mindig a téma ki azonosító szám van-e ';
$lang['Suggest_announcements'] = 'Javasolnak egyetlen Közleményeket és Ragadós Témákat';
$lang['Suggestion_Warning'] = '* Ha felhasználót engedélyek olvasnia a kiválasztott témát, egy link GYIK akaratnak mutatnának';
// Welcome Panel On Index MOD - END

// Start add - myCalendar MOD
$lang['Events_Forum'] = 'Lehetové tesznek naptári eseményeket';
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