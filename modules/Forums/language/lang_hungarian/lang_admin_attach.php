<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/
/** 
*
* attachment mod admin [English]
*
* @package attachment_mod
* @version $Id: lang_admin_attach.php,v 1.3 2005/11/20 13:38:55 acydburn Exp $
* @copyright (c) 2002 Meik Sievertsen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!isset($lang) || !is_array($lang))
{
    $lang = array();
}

//
// Attachment Mod Admin Language Variables
//

// Modules, this replaces the keys used
$lang['Control_Panel'] = 'Vezérlõpult';
$lang['Shadow_attachments'] = 'Árnyék csatolások';
$lang['Forbidden_extensions'] = 'Tiltott kiterjesztések';
$lang['Extension_control'] = 'Kiterjesztés beállítások';
$lang['Extension_group_manage'] = 'Kiterjesztés csoport beállítások';
$lang['Special_categories'] = 'Speciális kategóriák';
$lang['Sync_attachments'] = 'Mellékletek szinkronizálása';
$lang['Quota_limits'] = 'Mennyiségi korlátozások';

// Attachments -> Management
$lang['Attach_settings'] = 'Mellékletek (csatolások) beállítása';
$lang['Manage_attachments_explain'] = 'A mellékletek (csatolások) általános jellemzõit állíthatod be itt. Ha a beállítások tesztelésére kattintasz, néhány rendszerteszt fog lefutni, hogy jól mûködik-e a Csatolás. Ha problémád van a feltöltéssel, futtasd le a tesztet, részletes leírást kapsz a hibákról.';
$lang['Attach_filesize_settings'] = 'Csatolt fájlok méretének beállításai';
$lang['Attach_number_settings'] = 'Mellékletek számainak beállításai';
$lang['Attach_options_settings'] = 'Mellékletek beállítása';

$lang['Upload_directory'] = 'Feltöltési könyvtár';
$lang['Upload_directory_explain'] = 'Írd be a fórum relatív elérési útját, ahova a mellékletek lesznek feltöltve. Például \'files\', ha a fórum helye http://www.yourdomain.com/modules/Forums, és a csatolások feltöltésének helye http://www.yourdomain.com/modules/Forums/files lesz.';
$lang['Attach_img_path'] = 'Hozzászólás melléklet ikon';
$lang['Attach_img_path_explain'] = 'Ez a kép fog megjelenni a hozzászólásban/privát üzenetben, ha Mellékletet tartalmaz. Hagyd üresen a mezõt, ha nem akarsz megjeleníteni ikont. Ez a beállítás felülírható a Kiterjesztés csoport beállításoknál.';
$lang['Attach_topic_icon'] = 'Téma melléklet ikon';
$lang['Attach_topic_icon_explain'] = 'Ez a kép fog megjelenni a téma elõtt, amely mellékletet tartalmaz. Hagyd üresen a mezõt, ha nem akarsz megjeleníteni ikont.';
$lang['Attach_display_order'] = 'Mellékletek megjelenítési sorrendje';
$lang['Attach_display_order_explain'] = 'Válaszd ki a mellékletek megjelenítési sorrendjét a  hozzászólásban/privát üzenetben, csökkenõ sorrend (újabb mellékletek elõl), vagy növekvõ sorrend (régebbi mellékletek elõl).';
$lang['Show_apcp'] = 'Új típusú Csatolás vezérlõpult megjelenítése';
$lang['Show_apcp_explain'] = 'Válassz az új típusú Csatolás vezérlõpult megjelenítése (igen) vagy a régi módszer, két mezõvel: Csatolt fájl és Megjegyzés (nem) megjelenitése közül. A különbséget nehéz elmagyarázni, legjobb, ha megnézed mindkettõt.';

$lang['Max_filesize_attach'] = 'Fájlméret';
$lang['Max_filesize_attach_explain'] = 'A mellékletek maximális mérete. Írj 0-t, ha \'korlátlan\'. Az értéket korlátozhatja a szerver beállítása. Amennyiben a php beállításokban csak 2 MB feltöltés van engedélyezve, akkor ennél nagyobb értéket felesleges megadni.';
$lang['Attach_quota'] = 'Mellékletek kvótája';
$lang['Attach_quota_explain'] = 'Maximális lemezterület, amelyet az ÖSSZES melléklet lefoglalhat a tárhelyeden. Írj 0-t, ha \'korlátlan\'.';
$lang['Max_filesize_pm'] = 'Maximális fájlméret a Privát Üzenetek könyvtárban';
$lang['Max_filesize_pm_explain'] = 'Maximális lemezterület a mellékleteknek, amelyet a felhasználók Privát Üzenetekhez használhatnak. Írj 0-t, ha \'korlátlan\'.';
$lang['Default_quota_limit'] = 'Alapértelmezett kvóta limit';
$lang['Default_quota_limit_explain'] = 'Kiválaszthatsz egy alapértelmezett kvóta limitet, melyet automatikusan hozzárendel a felhasználókhoz egy beállított limit nélkül. A \'Nincs kvóta limit\' beállítás nem alkalmazható valamennyi csatolási kvótára, ehelyett használd az alapértelmezett beállításokat, melyeket fentebb meghatároztál.';

$lang['Max_attachments'] = 'Mellékletek maximális száma';
$lang['Max_attachments_explain'] = 'A mellékletek maximális száma hozzászólásonként.';
$lang['Max_attachments_pm'] = 'Mellékletek maximális száma Privát üzenetenként';
$lang['Max_attachments_pm_explain'] = 'A mellékletek maximális száma, amelyet engedélyezel Privát üzenetenként.';

$lang['Disable_mod'] = 'Mellékletek tiltása';
$lang['Disable_mod_explain'] = 'Elsõsorban az új sablonok, vagy témák tesztelésére, letilt minden csatolás funkciót, kivéve az Admin Panelen.';
$lang['PM_Attachments'] = 'Mellékletek engedélyezése Privát üzenetekben';
$lang['PM_Attachments_explain'] = 'Fájlok csatolásának engedélyezése/tiltása a Privát üzenetekben.';
$lang['Ftp_upload'] = 'FTP feltöltés engedélyezése';
$lang['Ftp_upload_explain'] = 'FTP feltöltés engedélyezése/tiltása. Ha engedélyezed, be kell állítanod a mellékletek FTP tulajdonságait, és gyõzõdj meg róla, hogy a feltöltési könyvtár ne legyen már használatban.';
$lang['Attachment_topic_review'] = 'Megjeleníted a mellékleteket a téma elõnézetében ?';
$lang['Attachment_topic_review_explain'] = 'Ha igen, akkor minden mellékelt fájl megjelenik az elõnézeti ablakban.';

$lang['Ftp_server'] = 'FTP Szerver';
$lang['Ftp_server_explain'] = 'Add meg a szerver IP-címét, vagy az FTP-Hoszt nevét, amelyen keresztül a fájlokat lehet feltölteni. Ha nem írsz be semmit, a szerver ugyanaz lesz, mint amely a fórum telepítésekor volt használva. Az ftp://, vagy más elõtag nem kell, csak pl. ftp.foo.com, vagy ha gyorsabb a sima IP cím.';

$lang['Attach_ftp_path'] = 'FTP elérési út a feltöltési könyvtárhoz';
$lang['Attach_ftp_path_explain'] = 'A könyvtár, ahol a mellékletek lesznek tárolva. A könyvtár legyen olvasható (CHMOD). Ne írd be az IP, vagy az FTP-címet ide, ez a mezõ csak az FTP elérést tartalmazza.<br />Például: /home/web/uploads';
$lang['Ftp_download_path'] = 'FTP elérési út letöltési linkje';
$lang['Ftp_download_path_explain'] = 'A könyvtár URL címe, ahol a mellékletek vannak tárolva.<br />Ha távoli elérésû FTP szervert használsz, a teljes url címet add meg, például http://www.mystorage.com/phpBB2/upload.<br />Ha helyi kiszolgálón tárolod a fájlokat, az url relatív elérését írd be, például \'upload\'.<br />Hagyd a mezõt üresen, ha az FTP elérés nem hozzáférhetõ az Internetrõl.';
$lang['Ftp_passive_mode'] = 'FTP passzív mód engedélyezése';
$lang['Ftp_passive_mode_explain'] = 'Passzív FTP kapcsolat esetén a PASV parancsot kell kiadnunk paraméterek nélkül, és a szerver a válaszban fogja megmondani, hogy hova kapcsolódjon a kliensünk.';

$lang['No_ftp_extensions_installed'] = 'Nem tudod használni az FTP feltöltést, mert a telepített PHP ezt nem engedi.';

// Attachments -> Shadow Attachments
$lang['Shadow_attachments_explain'] = 'Itt törölheted azokat a metellékletek, amelyek hiányoznak a rendszerbõl, és azokat, amelyeket már nem lehet felhasználni. Letöltheted, vagy megnézheted a fájlt, ha rákattintasz; ha nincs link, a fájl nincs meg.';
$lang['Shadow_attachments_file_explain'] = 'Törölheted azokat a fájlokat, amelyek ugyan megvannak a rendszerben, de nem kapcsolódnak egyetlen hozzászóláshoz sem.';
$lang['Shadow_attachments_row_explain'] = 'Minden hiányzó mellékletet törölhetsz.';
$lang['Empty_file_entry'] = 'Üres fájl bejegyzés';

// Attachments -> Sync
$lang['Sync_thumbnail_resetted'] = 'Ikon visszaállítva a melléklethez: %s'; // replace %s with physical Filename
$lang['Attach_sync_finished'] = 'Mellékletek szinkronizálása befejezve.';

// Extensions -> Extension Control
$lang['Manage_extensions'] = 'Kiterjesztések beállításai';
$lang['Manage_extensions_explain'] = 'Itt tudod beállítani a fájl kiterjesztéseket. Ha egy kiterjesztés feltöltését engedélyezni/tiltani akarod, használd a Kiterjesztés csoport beállítások menüt.';
$lang['Explanation'] = 'Magyarázat';
$lang['Extension_group'] = 'Kiterjesztés csoport';
$lang['Invalid_extension'] = 'Érvénytelen kiterjesztés';
$lang['Extension_exist'] = 'Ez a kiterjesztés már létezik: %s '; // replace %s with the Extension
$lang['Unable_add_forbidden_extension'] = 'Ez a kiterjesztés tiltva van: %s . Nem tudod hozzáadni az engedélyezett kiterjesztésekhez'; // replace %s with Extension

// Extensions -> Extension Groups Management
$lang['Manage_extension_groups'] = 'Kiterjesztés csoport beállítások';
$lang['Manage_extension_groups_explain'] = 'Itt tudsz hozzáadni, törölni, módosítani kiterjesztés csoportot; letilthatsz csoportokat, speciális kategóriához rendelheted azokat; letöltési módot tudsz változtatni és egy feltöltési ikont tudsz hozzájuk rendelni, amely meggjelenik, ha egy csoporthoz tartozik a melléklet.';
$lang['Special_category'] = 'Speciális kategória';
$lang['Category_images'] = 'Képek';
$lang['Category_stream_files'] = 'Stream fájlok';
$lang['Category_swf_files'] = 'Flash fájlok';
$lang['Allowed'] = 'Engedélyezett';
$lang['Allowed_forums'] = 'Engedélyezett fórumok';
$lang['Ext_group_permissions'] = 'Csoport hozzáférés';
$lang['Download_mode'] = 'Letöltési mód';
$lang['Upload_icon'] = 'Feltöltési ikon';
$lang['Max_groups_filesize'] = 'Maximális fájlméret';
$lang['Extension_group_exist'] = 'Ez a kiterjesztés csoport már létezik: %s'; // replace %s with the group name
$lang['Collapse'] = '+';
$lang['Decollapse'] = '-';

// Extensions -> Special Categories
$lang['Manage_categories'] = 'Speciális kategória beállítások';
$lang['Manage_categories_explain'] = 'Itt tudod beállítani a speciális kategóriákat, melyek kiterjesztés csoportokhoz vannak rendelve.';
$lang['Settings_cat_images'] = 'Speciális kategória beállításai: Képek';
$lang['Settings_cat_streams'] = 'Speciális kategória beállításai: Stream fájlok';
$lang['Settings_cat_flash'] = 'Speciális kategória beállításai: Flash fájlok';
$lang['Display_inlined'] = 'Képek közvetlen megjelenítése';
$lang['Display_inlined_explain'] = 'Kiválaszthatod, hogy a képeket közvetlenûl megjelenítse a hozzászólásokban (igen), vagy csak egy link jelölje azokat ?';
$lang['Max_image_size'] = 'Képek maximális mérete';
$lang['Max_image_size_explain'] = 'Itt adhatod meg, a csatolható képek maximális méretét (szélesség x magasság pixelben).<br />Ha az értéke 0x0, akkor a funkció nem megengedett. Ez a funkció néhány képpel nem mûködik a PHP korlátozásai miatt.';
$lang['Image_link_size'] = 'Kép link mérete';
$lang['Image_link_size_explain'] = 'Ha ezt a beállított méretet egy kép mérete eléri, a kép linkként fog megjelenni,<br />ha a közvetlen megjelenítés engedélyezve van (szélesség x magasság pixelben).<br />Ha az értéke 0x0, akkor a funkció nem megengedett. Ez a funkció néhány képpel nem mûködik a PHP korlátozásai miatt.';
$lang['Assigned_group'] = 'Hozzárendelt csoport';

$lang['Image_create_thumbnail'] = 'Ikonkép készítése';
$lang['Image_create_thumbnail_explain'] = 'Mindig készít ikonképet. Ez a funció minden beállítást érvényteleníthet a Speciális kategóriákban, kivéve a Képek maximális méretét. Ezzel a funkcióval egy ikonképet jelenithetsz meg a hozzászólásban, amelyre rákattintva a kép teljes méretében látható lesz. Ehez a funkcióhoz telepíteni kell a Imagick-et, ha ez nincs telepítve, vagy a PHP Safe-módja be van kapcsolva, akkor a GD-extensions lesz használva.';
$lang['Image_min_thumb_filesize'] = 'Minimális ikonkép fájlméret';
$lang['Image_min_thumb_filesize_explain'] = 'Ha a kép kisebb, mint az itt beállított fájlméret, nem lesz ikonkép készítve.';
$lang['Image_imagick_path'] = 'Imagick Program (Teljes elérési út)';
$lang['Image_imagick_path_explain'] = 'Írd be a Imagick Program teljes elérési útvonalát, ez általában /usr/bin/convert (Windows rendszeren: c:/imagemagick/convert.exe).';
$lang['Image_search_imagick'] = 'Imagick keresése';

$lang['Use_gd2'] = 'GD2 Extension használata';
$lang['Use_gd2_explain'] = 'PHP a GD1, vagy GD2 Extension-t használja képek kezelésére. Imagemagick nélkül a képekbõl ikonkép készítéshez két módszert használhatsz. Ha az ikonkép rossz minõségû, vagy fordított állapotú, próbáld ki a másik lehetõséget.';
$lang['Attachment_version'] = 'Melléklet Mod Verzió %s'; // %s is the version number

// Extensions -> Forbidden Extensions
$lang['Manage_forbidden_extensions'] = 'Tiltott kiterjesztések beállítása';
$lang['Manage_forbidden_extensions_explain'] = 'Hozzáadhatsz, vagy törölhetsz tiltott kiterjesztést. A php, php3 és a php4 alapból tiltva van biztonsági okok miatt, ezeket ne töröld.';
$lang['Forbidden_extension_exist'] = 'Ez a tiltott kiterjesztés már létezik: %s'; // replace %s with the extension
$lang['Extension_exist_forbidden'] = '%s -ez a kiterjesztés szerepel az engedélyezett kiterjesztések között, töröld onnan, mielõtt itt hozzáadnád.';  // replace %s with the extension

// Extensions -> Extension Groups Control -> Group Permissions
$lang['Group_permissions_title'] = 'Kiterjesztés csoport beállítások -> \'%s\''; // Replace %s with the Groups Name
$lang['Group_permissions_explain'] = 'A kiválasztott fórumokra (Fórum hozzáadása mezõbõl) tudod korlátozni a Kiterjesztés csoportokat. Alap esetben a Kiterjesztés csoportok miden fórum felhasználójának engedélyezve van mellékletek hozzáadására. Csak add hozzá a kiválasztott fórumot a Kiterjesztés csoporthoz, az alapértelmezett MINDEN FÓRUM beállítás megszûnik, amint hozzáadsz egy fórumot a listából. A MINDEN FÓRUM beállítást bármikor visszaállíthatod. Ha hozzáadsz egy fórumot, de az engedélyek MINDEN FÓRUM-ra vonatkoznak, nem érsz el változást. Ha megváltoztatsz, vagy korlátozol egy bizonyos fórumot, itt újra ellenõrizheted a fórumot. Ez megy automatikusan is, de így jobban ellenõrzésed alatt tarthatod a dolgokat. Tartsd észben, itt minden fórum listázásra kerül.';
$lang['Note_admin_empty_group_permissions'] = 'MEGJEGYZÉS:<br />A lent felsorolt fórumok felhasználói tudnak fájlokat csatolni a hozzászólásaikhoz, de mivel nincsenek Kiterjesztés csoportok beállítva ott, nem küldhetnek bármit. Ha megpróbálják, hiba üzenetet kapnak.<br /><br />';
$lang['Add_forums'] = 'Fórum hozzáadása';
$lang['Add_selected'] = 'Kiválasztott hozzáadása';
$lang['Perm_all_forums'] = 'MINDEN FÓRUM';

// Attachments -> Quota Limits
$lang['Manage_quotas'] = 'Mellékletek kvóta limit beállítása';
$lang['Manage_quotas_explain'] = 'Hozzáadhatsz/törölhetsz/változtathatsz kvóta limitet. Ezeket a kvóta limiteket hozzárendelheted felhasználókhoz és csoportok. Ha egy felhasználóhoz kvóta limitet adnál, menj a Felhasználók->Beállítások pontra, válaszd ki a felhasználót és a választható lehetõségeket lent fogod találni. Ha egy csoporthoz kívánsz kvóta limitet adni,  menj a Csoportok->Beállítások pontra, válaszd ki a csoportotés a látni fogod beállítási lehetõségeket. Ha megnéznéd, egy adott kvóta limithez mely felhasználók és csoportok vannak rendelve, kattints a \'Megtekintés\' -re a kvóta limit leírás bal oldalán.';
$lang['Assigned_users'] = 'Felhasználók';
$lang['Assigned_groups'] = 'Csoportok';
$lang['Quota_limit_exist'] = 'Ez a kvóta limit már létezik: %s'; // Replace %s with the Quota Description

// Attachments -> Control Panel
$lang['Control_panel_title'] = 'Fájlcsatolások vezérlõpult';
$lang['Control_panel_explain'] = 'Itt megtekintheted és menedzselheted az összes mellékletet, különbözõ szempontok alapján: Felhasználók, Mellékletek, stb.';
$lang['File_comment_cp'] = 'Fájl magyarázat';

// Control Panel -> Search
$lang['Search_wildcard_explain'] = 'Használd a * karaktert behelyettesítésre';
$lang['Size_smaller_than'] = 'Melléklet mérete kisebb, mint (bájt)';
$lang['Size_greater_than'] = 'Melléklet mérete nagyobb, mint (bájt)';
$lang['Count_smaller_than'] = 'Letöltések száma kevesebb, mint';
$lang['Count_greater_than'] = 'Letöltések száma több, mint';
$lang['More_days_old'] = 'Több, mint ennyi nappal régebbi';
$lang['No_attach_search_match'] = 'Nincs megfelelõ a keresési feltételeknek';

// Control Panel -> Statistics
$lang['Number_of_attachments'] = 'Mellékletek száma';
$lang['Total_filesize'] = 'Fájlok össz. mérete';
$lang['Number_posts_attach'] = 'Mellékletekkel ellátott hozzászólások száma';
$lang['Number_topics_attach'] = 'Mellékletekkel ellátott témák száma';
$lang['Number_users_attach'] = 'Független felhasználók által küldött csatolások';
$lang['Number_pms_attach'] = 'Mellékletek száma a Privát üzenetekben';

// Control Panel -> Attachments
$lang['Statistics_for_user'] = '%s mellékleteinek statisztikája'; // replace %s with username
$lang['Size_in_kb'] = 'Méret (KB)';
$lang['Downloads'] = 'Letöltések';
$lang['Post_time'] = 'Küldés ideje';
$lang['Posted_in_topic'] = 'Téma';
$lang['Submit_changes'] = 'Változások mentése';

// Sort Types
$lang['Sort_Attachments'] = 'Mellékletek';
$lang['Sort_Size'] = 'Méret';
$lang['Sort_Filename'] = 'Fájlnév';
$lang['Sort_Comment'] = 'Megjegyzés';
$lang['Sort_Extension'] = 'Kiterjesztés';
$lang['Sort_Downloads'] = 'Letöltések';
$lang['Sort_Posttime'] = 'Küldés ideje';
$lang['Sort_Posts'] = 'Küldve';

// View Types
$lang['View_Statistic'] = 'Statisztikák';
$lang['View_Search'] = 'Keresés';
$lang['View_Username'] = 'Felhasználónév';
$lang['View_Attachments'] = 'Mellékletek';

// Successfully updated
$lang['Attach_config_updated'] = 'Mellékletek beállításai frissítve';
$lang['Click_return_attach_config'] = 'Kattints %side%s, hogy visszatérj a Mellékletek beállításaihoz';
$lang['Test_settings_successful'] = 'Beállítások tesztje végetért, a beállítások jónak tünnek.';

// Some basic definitions
$lang['Attachments'] = 'Mellékletek';
$lang['Attachment'] = 'Melléklet';
$lang['Extensions'] = 'Kiterjesztések';
$lang['Extension'] = 'Kiterjesztés';

// Auth pages
$lang['Auth_attach'] = 'Küldött fájlok';
$lang['Auth_download'] = 'Letöltött fájlok';

?>
